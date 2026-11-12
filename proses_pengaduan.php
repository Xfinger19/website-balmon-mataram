<?php
require 'config_wa.php';

$nama = htmlspecialchars($_POST['nama']);
$frekuensi = htmlspecialchars($_POST['frekuensi']);
$lokasi = htmlspecialchars($_POST['lokasi']);
$deskripsi = htmlspecialchars($_POST['deskripsi']);

// Susun Pesan
$pesan = "🚨 *LAPORAN GANGGUAN BARU* 🚨\n\n";
$pesan .= "👤 *Nama:* " . $nama . "\n";
$pesan .= "📡 *Frekuensi:* " . $frekuensi . " MHz\n";
$pesan .= "📍 *Lokasi:* " . $lokasi . "\n";
$pesan .= "📝 *Deskripsi:* " . $deskripsi . "\n";

// Kirim via API (CURL)
$url = "https://graph.facebook.com/" . WA_API_VERSION . "/" . WA_PHONE_NUMBER_ID . "/messages";

$data = [
    "messaging_product" => "whatsapp",
    "to" => WA_NOMOR_PETUGAS,
    "type" => "text",
    "text" => ["body" => $pesan]
];

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Authorization: Bearer " . WA_ACCESS_TOKEN,
    "Content-Type: application/json"
]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($http_code == 200) {
    // Sukses terkirim ke API
    echo "<script>
            alert('Laporan berhasil dikirim! Petugas kami akan segera menindaklanjuti.');
            window.location.href = 'index.php';
          </script>";
} else {
    // Gagal (misal token salah)
    echo "<script>
            alert('Gagal mengirim laporan otomatis. Mengarahkan ke WhatsApp manual...');
            window.location.href = 'https://wa.me/" . WA_NOMOR_PETUGAS . "?text=" . urlencode($pesan) . "';
          </script>";
}
?>