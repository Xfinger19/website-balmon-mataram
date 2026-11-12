<?php include 'includes/header.php'; ?>

<!-- Header Halaman -->
<section class="relative pt-32 pb-20 bg-primary overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
            <path d="M0 50 Q 25 20, 50 50 T 100 50" fill="none" stroke="white" stroke-width="0.5"/>
            <path d="M0 60 Q 25 30, 50 60 T 100 60" fill="none" stroke="white" stroke-width="0.5"/>
        </svg>
    </div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 text-center" data-aos="fade-down">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Profil Instansi</h1>
        <p class="text-gray-300 max-w-2xl mx-auto">Mengenal lebih dekat Balai Monitor Spektrum Frekuensi Radio Kelas II Mataram.</p>
    </div>
</section>

<!-- Section Tentang Kami & Visi Misi -->
<section class="py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        
        <!-- Kolom Kiri: Teks -->
        <div data-aos="fade-right">
            <h2 class="text-3xl font-bold text-primary mb-6">Tentang Balmon Mataram</h2>
            <p class="text-slate-600 mb-4 leading-relaxed text-justify">
                Balai Monitor Spektrum Frekuensi Radio (SFR) Kelas II Mataram adalah Unit Pelaksana Teknis (UPT) di bawah Direktorat Jenderal Infrastruktur Digital, Kementerian Komunikasi dan Digital (KOMDIGI). Kami bertugas melaksanakan pengawasan dan pengendalian penggunaan spektrum frekuensi radio dan alat/perangkat telekomunikasi di wilayah Provinsi Nusa Tenggara Barat.
            </p>
            <p class="text-slate-600 mb-6 leading-relaxed text-justify">
                Wilayah kerja kami mencakup 10 kabupaten/kota (Pulau Lombok dan Sumbawa). Kami berkomitmen memastikan pemanfaatan spektrum yang tertib, aman, dan bebas interferensi untuk mendukung transformasi digital nasional.
            </p>
            <div class="bg-blue-50 border-l-4 border-secondary p-4 rounded-r-lg">
                <p class="text-sm font-semibold text-secondary mb-1">Visi:</p>
                <p class="text-slate-700 italic text-sm">"Terwujudnya Pengelolaan Spektrum Frekuensi Radio yang Tertib, Aman, dan Berkelanjutan untuk Kedaulatan Digital Indonesia."</p>
            </div>
        </div>

        <!-- Kolom Kanan: Ilustrasi/Logo -->
        <div class="flex justify-center" data-aos="fade-left">
            <div class="relative w-72 h-72 md:w-80 md:h-80 bg-gradient-to-tr from-primary to-secondary rounded-full flex items-center justify-center shadow-2xl animate-float">
                <svg class="w-32 h-32 text-white opacity-90" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z" />
                </svg>
                <div class="absolute -bottom-4 bg-white px-6 py-2 rounded-full shadow-lg text-primary font-bold text-sm border border-slate-100">KOMDIGI</div>
            </div>
        </div>
    </div>
</section>

<!-- Section Struktur Organisasi -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl font-bold text-primary mb-2">Struktur Organisasi</h2>
            <p class="text-slate-500">Berdasarkan Peraturan Menteri Komunikasi dan Informatika No. 1 Tahun 2022</p>
        </div>

        <!-- Bagan Sederhana -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-center">
            
            <!-- Kepala Balai -->
            <div class="md:col-span-3 flex justify-center mb-8" data-aos="zoom-in">
                <div class="bg-primary text-white p-6 rounded-2xl shadow-xl w-full max-w-md border-b-4 border-accent">
                    <h3 class="text-xl font-bold">Kepala Balai Monitor SFR Kelas II</h3>
                    <p class="text-blue-200 text-sm mt-1">Pimpinan Tertinggi UPT</p>
                </div>
            </div>

            <!-- Subbagian Umum -->
            <div class="md:col-start-2 md:col-span-1 mb-8" data-aos="fade-up" data-aos-delay="100">
                <div class="bg-slate-50 p-6 rounded-xl shadow-md border-l-4 border-secondary hover:shadow-lg transition duration-300">
                    <h3 class="text-lg font-bold text-secondary">Subbagian Umum</h3>
                    <p class="text-slate-500 text-sm mt-2">Perencanaan, Keuangan, Kepegawaian, Tata Usaha, & Humas</p>
                </div>
            </div>

            <!-- Tim Kerja (3 Kolom) -->
            <div class="md:col-span-3 grid grid-cols-1 md:grid-cols-3 gap-6 mt-4">
                <div class="bg-slate-50 p-6 rounded-xl shadow-md border-t-4 border-secondary hover:shadow-lg transition duration-300" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="text-lg font-bold text-secondary mb-2">Tim Kerja Monitoring & Penertiban SFR/APT</h3>
                    <p class="text-slate-600 text-sm">Pengamatan, deteksi sumber pancaran, penertiban, & penegakan hukum.</p>
                </div>
                <div class="bg-slate-50 p-6 rounded-xl shadow-md border-t-4 border-secondary hover:shadow-lg transition duration-300" data-aos="fade-up" data-aos-delay="300">
                    <h3 class="text-lg font-bold text-secondary mb-2">Tim Kerja Sarana Prasarana & Layanan</h3>
                    <p class="text-slate-600 text-sm">Pemeliharaan perangkat, pelayanan pengaduan, sertifikasi, & piutang BHP.</p>
                </div>
                <div class="bg-slate-50 p-6 rounded-xl shadow-md border-t-4 border-secondary hover:shadow-lg transition duration-300" data-aos="fade-up" data-aos-delay="400">
                    <h3 class="text-lg font-bold text-secondary mb-2">Tim Kerja Kualitas Layanan Infrastruktur Digital</h3>
                    <p class="text-slate-600 text-sm">Pengukuran kualitas layanan, parameter teknis stasiun, & verifikasi site.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>