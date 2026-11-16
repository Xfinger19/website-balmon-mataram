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

<!-- ============================================== -->
<!-- SECTION STRUKTUR ORGANISASI (DESAIN BARU)      -->
<!-- ============================================== -->
<section class="py-24 bg-white relative">
    <div class="max-w-7xl mx-auto px-4">
        
        <!-- Judul Section -->
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl font-bold text-primary mb-2">Struktur Organisasi</h2>
            <p class="text-slate-500">Berdasarkan Peraturan Menteri Komunikasi dan Informatika No. 1 Tahun 2022</p>
            <div class="w-24 h-1 bg-accent mx-auto mt-4 rounded-full"></div>
        </div>

        <!-- Pimpinan (Kepala Balai) - Tampil di Tengah -->
        <div class="flex justify-center mb-16" data-aos="zoom-in">
            <div class="bg-white p-6 rounded-2xl shadow-xl border-t-4 border-accent text-center w-full max-w-xs hover:-translate-y-2 transition duration-300 group">
                <!-- Ganti foto dengan foto asli Kepala Balai jika ada -->
                <img src="assets/img/kepala.jpeg" onerror="this.src='https://ui-avatars.com/api/?name=Kepala+Balai&background=0f172a&color=fff&size=150'" alt="Kepala Balai" class="w-32 h-32 rounded-full mx-auto object-cover border-4 border-slate-100 shadow-md group-hover:border-accent transition duration-300">
                <h3 class="text-xl font-bold text-primary mt-4">Kepala Balai</h3>
                <p class="text-sm text-slate-500 mt-1">Pimpinan Tertinggi UPT</p>
                <div class="mt-4 inline-block bg-slate-100 text-slate-600 text-xs px-3 py-1 rounded-full font-semibold">Kepala Balmon SFR Kelas II</div>
            </div>
        </div>

        <!-- Garis Penghubung Visual (Opsional, hanya di layar besar) -->
        <div class="hidden md:block w-px h-12 bg-slate-300 mx-auto -mt-10 mb-4"></div>

        <!-- Divisi & Tim Kerja -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            
            <!-- Subbagian Umum -->
            <div class="bg-white p-6 rounded-2xl shadow-lg border border-slate-100 text-center hover:shadow-2xl hover:-translate-y-2 transition duration-300 group" data-aos="fade-up" data-aos-delay="100">
                <img src="assets/img/struktur/umum.jpg" onerror="this.src='https://ui-avatars.com/api/?name=Subbagian+Umum&background=1e40af&color=fff&size=150'" alt="Subbagian Umum" class="w-28 h-28 rounded-full mx-auto object-cover border-4 border-blue-50 group-hover:border-secondary transition duration-300">
                <h3 class="text-lg font-bold text-primary mt-4">Subbagian Umum</h3>
                <p class="text-xs text-slate-500 mt-2 leading-relaxed">Perencanaan, Keuangan, Kepegawaian, Tata Usaha, & Humas</p>
                <div class="mt-4 text-xs font-semibold text-secondary bg-blue-50 py-1 rounded-md">Administrasi & Manajemen</div>
            </div>

            <!-- Tim Kerja Monitoring -->
            <div class="bg-white p-6 rounded-2xl shadow-lg border border-slate-100 text-center hover:shadow-2xl hover:-translate-y-2 transition duration-300 group" data-aos="fade-up" data-aos-delay="200">
                <img src="assets/img/struktur/monitoring.jpg" onerror="this.src='https://ui-avatars.com/api/?name=Monitoring+SFR&background=1e40af&color=fff&size=150'" alt="Tim Monitoring" class="w-28 h-28 rounded-full mx-auto object-cover border-4 border-blue-50 group-hover:border-secondary transition duration-300">
                <h3 class="text-lg font-bold text-primary mt-4">Tim Monitoring & Penertiban</h3>
                <p class="text-xs text-slate-500 mt-2 leading-relaxed">Pengamatan, deteksi sumber pancaran, penertiban, & penegakan hukum.</p>
                <div class="mt-4 text-xs font-semibold text-secondary bg-blue-50 py-1 rounded-md">Operasional Lapangan</div>
            </div>

            <!-- Tim Kerja Sarana Prasarana -->
            <div class="bg-white p-6 rounded-2xl shadow-lg border border-slate-100 text-center hover:shadow-2xl hover:-translate-y-2 transition duration-300 group" data-aos="fade-up" data-aos-delay="300">
                <img src="assets/img/struktur/sarana.jpg" onerror="this.src='https://ui-avatars.com/api/?name=Sarana+Prasarana&background=1e40af&color=fff&size=150'" alt="Tim Sarana" class="w-28 h-28 rounded-full mx-auto object-cover border-4 border-blue-50 group-hover:border-secondary transition duration-300">
                <h3 class="text-lg font-bold text-primary mt-4">Tim Sarana Prasarana & Layanan</h3>
                <p class="text-xs text-slate-500 mt-2 leading-relaxed">Pemeliharaan perangkat, pelayanan pengaduan, sertifikasi, & piutang BHP.</p>
                <div class="mt-4 text-xs font-semibold text-secondary bg-blue-50 py-1 rounded-md">Layanan Publik</div>
            </div>

            <!-- Tim Kerja Kualitas Layanan -->
            <div class="bg-white p-6 rounded-2xl shadow-lg border border-slate-100 text-center hover:shadow-2xl hover:-translate-y-2 transition duration-300 group" data-aos="fade-up" data-aos-delay="400">
                <img src="assets/img/struktur/kualitas.jpg" onerror="this.src='https://ui-avatars.com/api/?name=Kualitas+Layanan&background=1e40af&color=fff&size=150'" alt="Tim Kualitas" class="w-28 h-28 rounded-full mx-auto object-cover border-4 border-blue-50 group-hover:border-secondary transition duration-300">
                <h3 class="text-lg font-bold text-primary mt-4">Tim Kualitas Layanan Infrastruktur</h3>
                <p class="text-xs text-slate-500 mt-2 leading-relaxed">Pengukuran kualitas layanan, parameter teknis stasiun, & verifikasi site.</p>
                <div class="mt-4 text-xs font-semibold text-secondary bg-blue-50 py-1 rounded-md">Pengukuran & Verifikasi</div>
            </div>

        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>