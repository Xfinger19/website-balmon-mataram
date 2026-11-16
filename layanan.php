<?php include 'includes/header.php'; ?>

<!-- Header Halaman dengan Efek Parallax Halus -->
<section class="relative pt-36 pb-24 bg-primary overflow-hidden">
    <!-- Pola Titik-titik Halus (Elegan) -->
    <div class="absolute inset-0 opacity-20" style="background-image: radial-gradient(#ffffff 1px, transparent 1px); background-size: 24px 24px;"></div>
    
    <!-- Efek Cahaya di belakang teks -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-secondary rounded-full blur-[100px] opacity-30"></div>

    <div class="relative z-10 max-w-3xl mx-auto px-4 text-center" data-aos="fade-down" data-aos-duration="1000">
        <h1 class="text-3xl md:text-5xl font-bold text-white mb-4 tracking-tight">Layanan Balmon Mataram</h1>
        <p class="text-blue-200 text-sm md:text-base max-w-xl mx-auto">Direktorat Jenderal Infrastruktur Digital | Kementerian Komdigi</p>
    </div>
</section>

<!-- Section Menu Gaya Linktree -->
<section class="py-16 bg-slate-50 min-h-screen relative">
    <div class="max-w-2xl mx-auto px-4 space-y-10">
        
        <!-- Kategori: Layanan Utama -->
        <div>
            <h2 class="text-center text-sm font-bold text-slate-500 tracking-widest uppercase mb-6" data-aos="fade-up">Layanan Utama</h2>
            <div class="space-y-4">
                
                <!-- Tombol 1: Pengaduan -->
                <a href="https://laporgangguansfr.postel.go.id/index.php?class=LoginForm" target="_blank" 
                   class="group flex items-center justify-between bg-white p-5 rounded-2xl shadow-sm hover:shadow-xl hover:-translate-y-1 hover:border-secondary transition-all duration-300 border border-slate-200"
                   data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 rounded-full bg-red-50 text-red-500 flex items-center justify-center group-hover:scale-110 group-hover:bg-red-500 group-hover:text-white transition-all duration-300">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                        </div>
                        <span class="font-semibold text-slate-700 group-hover:text-secondary transition">Lapor Gangguan Frekuensi Radio</span>
                    </div>
                    <svg class="w-5 h-5 text-slate-300 group-hover:text-secondary group-hover:translate-x-1 transition-all duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </a>

                <!-- Tombol 2: UNAR -->
                <a href="https://iar-ikrap.postel.go.id/" target="_blank" 
                   class="group flex items-center justify-between bg-white p-5 rounded-2xl shadow-sm hover:shadow-xl hover:-translate-y-1 hover:border-secondary transition-all duration-300 border border-slate-200"
                   data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 rounded-full bg-blue-50 text-blue-500 flex items-center justify-center group-hover:scale-110 group-hover:bg-blue-500 group-hover:text-white transition-all duration-300">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <span class="font-semibold text-slate-700 group-hover:text-secondary transition">Pendaftaran UNAR</span>
                    </div>
                    <svg class="w-5 h-5 text-slate-300 group-hover:text-secondary group-hover:translate-x-1 transition-all duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </a>

                <!-- Tombol 3: ISR -->
                <a href="https://isr.postel.go.id/" target="_blank" 
                   class="group flex items-center justify-between bg-white p-5 rounded-2xl shadow-sm hover:shadow-xl hover:-translate-y-1 hover:border-secondary transition-all duration-300 border border-slate-200"
                   data-aos="fade-up" data-aos-delay="300">
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 rounded-full bg-green-50 text-green-500 flex items-center justify-center group-hover:scale-110 group-hover:bg-green-500 group-hover:text-white transition-all duration-300">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                        </div>
                        <span class="font-semibold text-slate-700 group-hover:text-secondary transition">Permohonan Izin Stasiun Radio (ISR)</span>
                    </div>
                    <svg class="w-5 h-5 text-slate-300 group-hover:text-secondary group-hover:translate-x-1 transition-all duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </a>

                <!-- Tombol 4: Sertifikasi -->
                <a href="https://sertifikasi.postel.go.id/" target="_blank" 
                   class="group flex items-center justify-between bg-white p-5 rounded-2xl shadow-sm hover:shadow-xl hover:-translate-y-1 hover:border-secondary transition-all duration-300 border border-slate-200"
                   data-aos="fade-up" data-aos-delay="400">
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 rounded-full bg-purple-50 text-purple-500 flex items-center justify-center group-hover:scale-110 group-hover:bg-purple-500 group-hover:text-white transition-all duration-300">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                        </div>
                        <span class="font-semibold text-slate-700 group-hover:text-secondary transition">Cek Sertifikasi Perangkat</span>
                    </div>
                    <svg class="w-5 h-5 text-slate-300 group-hover:text-secondary group-hover:translate-x-1 transition-all duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </a>
            </div>
        </div>

        <!-- Kategori: Dokumen -->
        <div>
            <h2 class="text-center text-sm font-bold text-slate-500 tracking-widest uppercase mb-6" data-aos="fade-up">Dokumen Persyaratan ISR</h2>
            <div class="space-y-4">
                <a href="https://drive.google.com/drive/folders/1ZJ8RW5oKTYWo463fIfjEY2r_OvRPunde" target="_blank" 
                   class="group flex items-center justify-between bg-white p-5 rounded-2xl shadow-sm hover:shadow-xl hover:-translate-y-1 hover:border-secondary transition-all duration-300 border border-slate-200"
                   data-aos="fade-up">
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 rounded-full bg-slate-100 text-slate-500 flex items-center justify-center group-hover:scale-110 group-hover:bg-slate-700 group-hover:text-white transition-all duration-300">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                        </div>
                        <span class="font-semibold text-slate-700 group-hover:text-secondary transition">Berkas Permohonan ISR</span>
                    </div>
                    <svg class="w-5 h-5 text-slate-300 group-hover:text-secondary group-hover:translate-x-1 transition-all duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </a>
            </div>
        </div>

        <!-- Kategori: Hubungi Kami -->
        <div>
            <h2 class="text-center text-sm font-bold text-slate-500 tracking-widest uppercase mb-6" data-aos="fade-up">Hubungi Kami</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                
                <!-- Lokasi -->
                <a href="https://www.google.com/maps/place/Balai+Monitor+SFR+Kelas+II+Mataram/..." target="_blank" 
                   class="group flex items-center gap-4 bg-white p-4 rounded-xl shadow-sm hover:shadow-lg hover:border-orange-400 transition-all duration-300 border border-slate-200"
                   data-aos="fade-up" data-aos-delay="100">
                    <div class="w-10 h-10 rounded-lg bg-orange-50 text-orange-500 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </div>
                    <span class="font-semibold text-slate-700 text-sm group-hover:text-orange-500 transition">Lokasi Loket</span>
                </a>

                <!-- WhatsApp -->
                <a href="https://api.whatsapp.com/send/?phone=6282266516166" target="_blank" 
                   class="group flex items-center gap-4 bg-white p-4 rounded-xl shadow-sm hover:shadow-lg hover:border-green-400 transition-all duration-300 border border-slate-200"
                   data-aos="fade-up" data-aos-delay="200">
                    <div class="w-10 h-10 rounded-lg bg-green-50 text-green-500 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                    </div>
                    <span class="font-semibold text-slate-700 text-sm group-hover:text-green-500 transition">WhatsApp</span>
                </a>

                <!-- Email -->
                <a href="mailto:upt_mataram@postel.go.id" 
                   class="group flex items-center gap-4 bg-white p-4 rounded-xl shadow-sm hover:shadow-lg hover:border-red-400 transition-all duration-300 border border-slate-200"
                   data-aos="fade-up" data-aos-delay="300">
                    <div class="w-10 h-10 rounded-lg bg-red-50 text-red-500 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <span class="font-semibold text-slate-700 text-sm group-hover:text-red-500 transition">Email</span>
                </a>

                <!-- Instagram -->
                <a href="https://www.instagram.com/balmonmataram/" target="_blank" 
                   class="group flex items-center gap-4 bg-white p-4 rounded-xl shadow-sm hover:shadow-lg hover:border-pink-400 transition-all duration-300 border border-slate-200"
                   data-aos="fade-up" data-aos-delay="400">
                    <div class="w-10 h-10 rounded-lg bg-pink-50 text-pink-600 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zm0 10.162a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                    </div>
                    <span class="font-semibold text-slate-700 text-sm group-hover:text-pink-600 transition">Instagram</span>
                </a>

                <!-- Facebook -->
                <a href="https://www.facebook.com/balmonmataram" target="_blank" 
                   class="group flex items-center gap-4 bg-white p-4 rounded-xl shadow-sm hover:shadow-lg hover:border-blue-400 transition-all duration-300 border border-slate-200"
                   data-aos="fade-up" data-aos-delay="500">
                    <div class="w-10 h-10 rounded-lg bg-blue-50 text-blue-600 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.469h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.469h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </div>
                    <span class="font-semibold text-slate-700 text-sm group-hover:text-blue-600 transition">Facebook</span>
                </a>

                <!-- YouTube -->
                <a href="https://www.youtube.com/@balmonmataram" target="_blank" 
                   class="group flex items-center gap-4 bg-white p-4 rounded-xl shadow-sm hover:shadow-lg hover:border-red-500 transition-all duration-300 border border-slate-200"
                   data-aos="fade-up" data-aos-delay="600">
                    <div class="w-10 h-10 rounded-lg bg-red-50 text-red-600 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 002.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                    </div>
                    <span class="font-semibold text-slate-700 text-sm group-hover:text-red-600 transition">Youtube</span>
                </a>

                <!-- TikTok -->
                <a href="https://www.tiktok.com/@balmonmataram" target="_blank" 
                   class="group flex items-center gap-4 bg-white p-4 rounded-xl shadow-sm hover:shadow-lg hover:border-slate-800 transition-all duration-300 border border-slate-200"
                   data-aos="fade-up" data-aos-delay="700">
                    <div class="w-10 h-10 rounded-lg bg-slate-100 text-slate-800 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg>
                    </div>
                    <span class="font-semibold text-slate-700 text-sm group-hover:text-slate-900 transition">TikTok</span>
                </a>

            </div>
        </div>

        <!-- Footer Text -->
        <div class="text-center pt-8 pb-4">
            <p class="text-xs text-slate-400">&copy; <?= date('Y') ?> Balmon SFR Kelas II Mataram. All rights reserved.</p>
        </div>

    </div>
</section>

<?php include 'includes/footer.php'; ?>