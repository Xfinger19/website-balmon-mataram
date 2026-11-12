<?php include 'includes/header.php'; ?>

<div class="min-h-screen pt-32 pb-12 bg-slate-100 flex items-center justify-center">
    <div class="max-w-3xl w-full mx-4">
        
        <div class="text-center mb-8" data-aos="fade-down">
            <h2 class="text-3xl md:text-4xl font-bold text-primary mb-2">Lapor Gangguan Frekuensi</h2>
            <p class="text-slate-600">Sampaikan laporan Anda. Sistem akan otomatis mengirimkan notifikasi ke WhatsApp Petugas.</p>
        </div>

        <div class="glass-card bg-white p-8 md:p-10 rounded-3xl shadow-2xl border-t-8 border-secondary" data-aos="fade-up" data-aos-delay="200">
            <form action="proses_pengaduan.php" method="POST">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">Nama Pelapor / Instansi</label>
                        <input type="text" name="nama" class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-blue-500 outline-none transition" placeholder="Contoh: BMKG NTB" required>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">Frekuensi Terganggu (MHz)</label>
                        <input type="text" name="frekuensi" class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-blue-500 outline-none transition" placeholder="Contoh: 150.8" required>
                    </div>
                </div>

                <div class="mt-6">
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Lokasi Gangguan</label>
                    <input type="text" name="lokasi" class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-blue-500 outline-none transition" placeholder="Contoh: Mataram, Lombok" required>
                </div>

                <div class="mt-6">
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Deskripsi Gangguan</label>
                    <textarea name="deskripsi" rows="4" class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-blue-500 outline-none transition" placeholder="Jelaskan detail gangguan yang dialami..." required></textarea>
                </div>

                <div class="mt-8">
                    <button type="submit" class="w-full bg-secondary hover:bg-blue-800 text-white font-bold py-4 rounded-xl transition duration-300 shadow-lg flex justify-center items-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg>
                        Kirim Laporan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>