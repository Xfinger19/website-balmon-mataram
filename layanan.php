<?php include 'includes/header.php'; ?>

<!-- Header Halaman -->
<section class="relative pt-32 pb-20 bg-secondary overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
            <path d="M0 50 Q 25 20, 50 50 T 100 50" fill="none" stroke="white" stroke-width="0.5"/>
        </svg>
    </div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 text-center" data-aos="fade-down">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Layanan Publik</h1>
        <p class="text-blue-100 max-w-2xl mx-auto">Berbagai layanan yang kami sediakan untuk masyarakat, operator telekomunikasi, dan pemangku kepentingan di NTB.</p>
    </div>
</section>

<!-- Section Daftar Layanan -->
<section class="py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4">
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Layanan 1: Pengaduan Gangguan -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 overflow-hidden border border-slate-100 hover-card" data-aos="fade-up" data-aos-delay="100">
                <div class="p-8">
                    <div class="w-16 h-16 rounded-full flex items-center justify-center mb-6 mx-auto bg-red-100 text-red-600">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-center text-primary mb-3">Pengaduan Gangguan</h3>
                    <p class="text-slate-600 text-center text-sm mb-6">Laporkan gangguan siaran atau sinyal yang mengganggu layanan publik, navigasi, atau komunikasi Anda.</p>
                    <a href="pengaduan.php" class="block w-full text-center bg-red-50 text-red-600 hover:bg-red-600 hover:text-white font-semibold py-3 rounded-lg transition">Lapor Sekarang</a>
                </div>
            </div>

            <!-- Layanan 2: Sertifikasi Operator Radio -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 overflow-hidden border border-slate-100 hover-card" data-aos="fade-up" data-aos-delay="200">
                <div class="p-8">
                    <div class="w-16 h-16 rounded-full flex items-center justify-center mb-6 mx-auto bg-blue-100 text-secondary">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-center text-primary mb-3">Sertifikasi Operator Radio</h3>
                    <p class="text-slate-600 text-center text-sm mb-6">Pendaftaran Ujian Negara Amatir Radio (UNAR), MOTS, dan IKRAN untuk operator radio amatir dan maritim.</p>
                    <a href="#" class="block w-full text-center bg-blue-50 text-secondary hover:bg-secondary hover:text-white font-semibold py-3 rounded-lg transition">Lihat Jadwal</a>
                </div>
            </div>

            <!-- Layanan 3: Pendampingan BHP -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 overflow-hidden border border-slate-100 hover-card" data-aos="fade-up" data-aos-delay="300">
                <div class="p-8">
                    <div class="w-16 h-16 rounded-full flex items-center justify-center mb-6 mx-auto bg-green-100 text-green-600">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-center text-primary mb-3">Pendampingan BHP</h3>
                    <p class="text-slate-600 text-center text-sm mb-6">Informasi tarif dan pendampingan terkait kewajiban Biaya Hak Penggunaan (BHP) frekuensi radio.</p>
                    <a href="#" class="block w-full text-center bg-green-50 text-green-600 hover:bg-green-600 hover:text-white font-semibold py-3 rounded-lg transition">Info BHP</a>
                </div>
            </div>

            <!-- Layanan 4: Konsultasi Perizinan -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 overflow-hidden border border-slate-100 hover-card" data-aos="fade-up" data-aos-delay="100">
                <div class="p-8">
                    <div class="w-16 h-16 rounded-full flex items-center justify-center mb-6 mx-auto bg-purple-100 text-purple-600">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-center text-primary mb-3">Konsultasi Perizinan</h3>
                    <p class="text-slate-600 text-center text-sm mb-6">Layanan konsultasi terkait perizinan stasiun radio (ISR), IPFR, dan sertifikasi perangkat telekomunikasi.</p>
                    <a href="#" class="block w-full text-center bg-purple-50 text-purple-600 hover:bg-purple-600 hover:text-white font-semibold py-3 rounded-lg transition">Konsultasi</a>
                </div>
            </div>

            <!-- Layanan 5: Sosialisasi & Edukasi -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 overflow-hidden border border-slate-100 hover-card" data-aos="fade-up" data-aos-delay="200">
                <div class="p-8">
                    <div class="w-16 h-16 rounded-full flex items-center justify-center mb-6 mx-auto bg-yellow-100 text-yellow-600">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-center text-primary mb-3">Sosialisasi & Edukasi</h3>
                    <p class="text-slate-600 text-center text-sm mb-6">Permohonan kegiatan sosialisasi terkait tertib penggunaan spektrum frekuensi radio dan perangkat telekomunikasi.</p>
                    <a href="#" class="block w-full text-center bg-yellow-50 text-yellow-600 hover:bg-yellow-600 hover:text-white font-semibold py-3 rounded-lg transition">Ajukan Sosialisasi</a>
                </div>
            </div>

            <!-- Layanan 6: Unduhan Dokumen -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 overflow-hidden border border-slate-100 hover-card" data-aos="fade-up" data-aos-delay="300">
                <div class="p-8">
                    <div class="w-16 h-16 rounded-full flex items-center justify-center mb-6 mx-auto bg-slate-200 text-slate-700">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-center text-primary mb-3">Unduhan Dokumen</h3>
                    <p class="text-slate-600 text-center text-sm mb-6">Akses Laporan Kinerja (LAKIN), Standar Operasional Prosedur (SOP), dan regulasi terkait spektrum frekuensi.</p>
                    <a href="#" class="block w-full text-center bg-slate-50 text-slate-700 hover:bg-slate-700 hover:text-white font-semibold py-3 rounded-lg transition">Pusat Unduhan</a>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>