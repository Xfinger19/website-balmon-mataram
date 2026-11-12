<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section class="relative h-screen flex items-center justify-center overflow-hidden bg-primary">
    <div class="absolute inset-0 opacity-20">
        <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
            <path d="M0 50 Q 25 20, 50 50 T 100 50" fill="none" stroke="white" stroke-width="0.5"/>
            <path d="M0 60 Q 25 30, 50 60 T 100 60" fill="none" stroke="white" stroke-width="0.5"/>
        </svg>
    </div>

    <div class="relative z-10 text-center px-4 max-w-4xl" data-aos="fade-up">
        <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 leading-tight">
            Pengawal <span class="text-gradient">Spektrum Digital</span> NTB
        </h1>
        <p class="text-lg md:text-xl text-gray-300 mb-10 max-w-2xl mx-auto">
            Memastikan pemanfaatan spektrum frekuensi radio yang tertib, aman, dan berkelanjutan di bawah Kementerian Komunikasi dan Digital.
        </p>
        <div class="flex justify-center gap-4">
            <a href="layanan.php" class="bg-secondary hover:bg-blue-800 text-white px-8 py-3 rounded-full font-semibold transition shadow-lg shadow-blue-500/30">Jelajahi Layanan</a>
            <a href="pengaduan.php" class="glass-card text-primary hover:bg-white px-8 py-3 rounded-full font-semibold transition">Lapor Cepat</a>
        </div>
    </div>
</section>

<!-- Section Statistik Kinerja 2025 -->
<section class="py-20 -mt-20 relative z-20">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="glass-card hover-card p-8 rounded-2xl shadow-xl border-t-4 border-accent text-center" data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-4xl font-bold text-primary mb-2">208%</h3>
                <p class="text-slate-600 font-medium">Sertifikasi Operator (UNAR)</p>
            </div>
            <div class="glass-card hover-card p-8 rounded-2xl shadow-xl border-t-4 border-secondary text-center" data-aos="fade-up" data-aos-delay="200">
                <h3 class="text-4xl font-bold text-primary mb-2">125%</h3>
                <p class="text-slate-600 font-medium">Monitoring Spektrum Frekuensi</p>
            </div>
            <div class="glass-card hover-card p-8 rounded-2xl shadow-xl border-t-4 border-green-500 text-center" data-aos="fade-up" data-aos-delay="300">
                <h3 class="text-4xl font-bold text-primary mb-2">100%</h3>
                <p class="text-slate-600 font-medium">Kepatuhan Standar Perangkat</p>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>