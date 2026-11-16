<?php
// 1. Panggil konfigurasi API
require 'config_wa.php';

// 2. Pastikan form benar-benar disubmit
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: pengaduan.php");
    exit;
}

// 3. Ambil data dengan nilai default (mencegah error 'Undefined Index')
$nama      = htmlspecialchars($_POST['nama'] ?? 'Tidak Disebutkan');
$frekuensi = htmlspecialchars($_POST['frekuensi'] ?? '-');
$lokasi    = htmlspecialchars($_POST['lokasi'] ?? '-');
$deskripsi = htmlspecialchars($_POST['deskripsi'] ?? '-');

// 4. Susun Pesan WhatsApp yang Rapi
$pesan  = "🚨 *LAPORAN GANGGUAN BARU* 🚨\n";
$pesan .= "------------------------------\n";
$pesan .= "👤 *Nama/Instansi:*\n" . $nama . "\n\n";
$pesan .= "📡 *Frekuensi:*\n" . $frekuensi . " MHz\n\n";
$pesan .= "📍 *Lokasi:*\n" . $lokasi . "\n\n";
$pesan .= "📝 *Deskripsi:*\n" . $deskripsi . "\n";
$pesan .= "------------------------------\n";
$pesan .= "Mohon segera dicek oleh Tim Monitoring.";

// 5. Siapkan URL API
$url = "https://graph.facebook.com/" . WA_API_VERSION . "/" . WA_PHONE_NUMBER_ID . "/messages";

$data = [
    "messaging_product" => "whatsapp",
    "to" => WA_NOMOR_PETUGAS,
    "type" => "text",
    "text" => ["body" => $pesan]
];

// 6. Proses Kirim via cURL
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Authorization: Bearer " . WA_ACCESS_TOKEN,
    "Content-Type: application/json"
]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Pengaturan Anti-Lemot & Bypass SSL untuk Localhost
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
curl_setopt($ch, CURLOPT_TIMEOUT, 10); // Maksimal tunggu 10 detik

$response = curl_exec($ch);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$curl_error = curl_error($ch); 
curl_close($ch);

// 7. Tentukan Status & Tangkap Pesan Error dari Meta
$is_success = ($http_code == 200);
$debug_message = $curl_error;

// Jika respons dari Meta ada (bukan error koneksi), ambil pesan error aslinya
if (!$is_success && !empty($response)) {
    $response_data = json_decode($response, true);
    if (isset($response_data['error']['message'])) {
        $debug_message = $response_data['error']['message'];
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memproses Laporan...</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-slate-50 flex items-center justify-center min-h-screen">

    <!-- Kotak Notifikasi -->
    <div class="bg-white p-8 rounded-2xl shadow-2xl text-center max-w-md w-full mx-4 border-t-8 <?= $is_success ? 'border-green-500' : 'border-red-500' ?>">
        
        <?php if ($is_success): ?>
            <!-- TAMPILAN JIKA BERHASIL -->
            <div class="text-green-500 mb-4">
                <svg class="w-20 h-20 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
            <h2 class="text-2xl font-bold text-slate-800 mb-2">Laporan Terkirim!</h2>
            <p class="text-slate-600 mb-6">Laporan Anda telah berhasil dikirim ke sistem WhatsApp Petugas Balmon Mataram. Tim kami akan segera menindaklanjuti.</p>
            <p class="text-sm text-slate-400 mb-6">Mengalihkan ke Beranda dalam <span id="countdown" class="font-bold text-blue-600">3</span> detik...</p>
            <a href="index.php" class="block bg-blue-600 hover:bg-blue-800 text-white font-semibold py-3 px-8 rounded-xl transition duration-300 w-full">Kembali ke Beranda</a>

            <script>
                // Script hitung mundur (Redirect otomatis)
                let timeLeft = 3;
                let timer = setInterval(function() {
                    timeLeft--;
                    document.getElementById('countdown').innerText = timeLeft;
                    if (timeLeft <= 0) {
                        clearInterval(timer);
                        window.location.href = 'index.php';
                    }
                }, 1000);
            </script>

        <?php else: ?>
            <!-- TAMPILAN JIKA GAGAL -->
            <div class="text-red-500 mb-4">
                <svg class="w-20 h-20 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
            <h2 class="text-2xl font-bold text-slate-800 mb-2">Gagal Mengirim Otomatis</h2>
            <p class="text-slate-600 mb-4">Sistem gagal mengirim ke API WhatsApp. Jangan khawatir, silakan klik tombol di bawah untuk mengirim manual melalui WhatsApp Anda.</p>
            
            <!-- Tampilkan Error (Hanya untuk Testing di Localhost) -->
            <div class="bg-red-50 text-red-600 text-xs p-3 rounded-lg mb-6 text-left break-words border border-red-200">
                <strong>Info Error:</strong><br> 
                HTTP Status: <?= $http_code ?><br>
                Pesan: <?= htmlspecialchars($debug_message) ?>
            </div>

            <a href="https://wa.me/<?= WA_NOMOR_PETUGAS ?>?text=<?= urlencode($pesan) ?>" target="_blank" class="w-full bg-green-500 hover:bg-green-600 text-white font-semibold py-3 px-8 rounded-xl transition duration-300 mb-3 flex justify-center items-center gap-2">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                Kirim Manual via WA
            </a>
            <a href="pengaduan.php" class="block text-slate-500 hover:text-slate-800 font-medium text-sm transition">Kembali ke Form</a>
        <?php endif; ?>

    </div>

</body>
</html>