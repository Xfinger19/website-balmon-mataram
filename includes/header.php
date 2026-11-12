<?php 
// Mendapatkan nama file saat ini untuk efek menu aktif
$current_page = basename($_SERVER['PHP_SELF']); 
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Balmon SFR Kelas II Mataram | KOMDIGI</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { sans: ['Inter', 'sans-serif'] },
                    colors: {
                        primary: '#0f172a', 
                        secondary: '#1e40af', 
                        accent: '#f59e0b', 
                        komdigi: '#0056b3', 
                    }
                }
            }
        }
    </script>
    
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!-- Custom Style Khusus Header -->
    <style>
        /* Efek Kaca yang lebih tebal */
        .glass-header {
            background: rgba(15, 23, 42, 0.75);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        }
        
        /* Animasi Gradien Logo */
        .logo-gradient {
            background: linear-gradient(135deg, #1e40af, #3b82f6, #1e40af);
            background-size: 200% 200%;
            animation: gradientMove 3s ease infinite;
        }
        @keyframes gradientMove {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* Efek Menu Hover Kapsul */
        .nav-item-hover::before {
            content: '';
            position: absolute;
            inset: 0;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 9999px;
            transform: scale(0.8);
            opacity: 0;
            transition: all 0.3s ease;
            z-index: -1;
        }
        .nav-item-hover:hover::before {
            transform: scale(1);
            opacity: 1;
        }

        /* Garis Indikator Scroll di atas */
        #scroll-progress {
            position: absolute;
            bottom: 0;
            left: 0;
            height: 3px;
            background: linear-gradient(to right, #f59e0b, #fcd34d);
            width: 0%;
            transition: width 0.1s ease;
            border-radius: 0 3px 3px 0;
        }
    </style>
</head>
<body class="text-slate-800 antialiased bg-slate-50">

<!-- Header / Navbar -->
<nav id="navbar" class="fixed w-full z-50 transition-all duration-300 glass-header">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-20">
      
      <!-- Logo & Brand -->
      <a href="index.php" class="flex items-center gap-3 group relative z-10">
        <!-- Ikon Holografik -->
        <div class="logo-gradient p-2.5 rounded-xl shadow-[0_0_20px_rgba(59,130,246,0.5)] group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
            <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
            </svg>
        </div>
        <div>
            <span class="text-white font-extrabold text-lg tracking-wider block leading-tight group-hover:text-amber-400 transition-colors duration-300">BALMON MATARAM</span>
            <span class="text-slate-400 text-[10px] tracking-[0.3em] block font-bold">KOMDIGI</span>
        </div>
      </a>
      
      <!-- Desktop Menu -->
      <div class="hidden md:flex items-center space-x-1 lg:space-x-2">
        <a href="index.php" class="nav-item-hover relative px-4 py-2 text-sm font-semibold transition-colors <?= ($current_page == 'index.php') ? 'text-amber-400' : 'text-slate-300 hover:text-white' ?>">
            Beranda
        </a>
        
        <a href="profil.php" class="nav-item-hover relative px-4 py-2 text-sm font-semibold transition-colors <?= ($current_page == 'profil.php') ? 'text-amber-400' : 'text-slate-300 hover:text-white' ?>">
            Profil
        </a>
        
        <a href="layanan.php" class="nav-item-hover relative px-4 py-2 text-sm font-semibold transition-colors <?= ($current_page == 'layanan.php') ? 'text-amber-400' : 'text-slate-300 hover:text-white' ?>">
            Layanan
        </a>

        <!-- Tombol Lapor Gangguan Premium -->
        <a href="pengaduan.php" class="ml-4 relative group overflow-hidden bg-gradient-to-r from-amber-500 to-orange-500 px-6 py-2.5 rounded-full text-sm font-bold text-white shadow-[0_5px_15px_rgba(245,158,11,0.4)] transition-all hover:shadow-[0_8px_25px_rgba(245,158,11,0.7)] hover:-translate-y-0.5 border border-amber-400/50">
            <span class="relative z-10 flex items-center gap-2">
                <svg class="w-4 h-4 animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                Lapor Gangguan
            </span>
            <!-- Efek Kilau (Shine) -->
            <div class="absolute inset-0 -translate-x-full bg-gradient-to-r from-transparent via-white/30 to-transparent group-hover:animate-[shimmer_1.5s_infinite]"></div>
        </a>
      </div>

      <!-- Mobile Menu Button (Hamburger) -->
      <div class="md:hidden flex items-center">
        <button id="mobile-menu-btn" class="text-slate-300 hover:text-white focus:outline-none p-2 rounded-lg hover:bg-white/10 transition">
            <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
      </div>
    </div>
  </div>
  
  <!-- Garis Indikator Scroll -->
  <div id="scroll-progress"></div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="hidden md:hidden absolute w-full bg-primary/95 backdrop-blur-xl border-t border-slate-700/50 shadow-2xl">
      <div class="px-4 pt-4 pb-6 space-y-2">
          <a href="index.php" class="block px-4 py-3 rounded-xl text-base font-medium <?= ($current_page == 'index.php') ? 'text-amber-400 bg-white/5' : 'text-slate-300 hover:text-white hover:bg-white/5' ?> transition">Beranda</a>
          <a href="profil.php" class="block px-4 py-3 rounded-xl text-base font-medium <?= ($current_page == 'profil.php') ? 'text-amber-400 bg-white/5' : 'text-slate-300 hover:text-white hover:bg-white/5' ?> transition">Profil</a>
          <a href="layanan.php" class="block px-4 py-3 rounded-xl text-base font-medium <?= ($current_page == 'layanan.php') ? 'text-amber-400 bg-white/5' : 'text-slate-300 hover:text-white hover:bg-white/5' ?> transition">Layanan</a>
          <div class="pt-4 mt-2 border-t border-slate-700/50">
            <a href="pengaduan.php" class="block text-center px-4 py-3.5 rounded-xl text-base font-bold text-white bg-gradient-to-r from-amber-500 to-orange-500 shadow-lg">Lapor Gangguan</a>
          </div>
      </div>
  </div>
</nav>

<!-- Script untuk Navigasi -->
<script>
    // 1. Toggle Mobile Menu
    const btn = document.getElementById('mobile-menu-btn');
    const menu = document.getElementById('mobile-menu');
    
    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });

    // 2. Scroll Progress Bar (Garis Emas di atas)
    window.addEventListener('scroll', () => {
        const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        const scrolled = (winScroll / height) * 100;
        document.getElementById("scroll-progress").style.width = scrolled + "%";
    });
</script>

<!-- Keyframes untuk Animasi Kilau -->
<style>
    @keyframes shimmer {
        100% { transform: translateX(100%); }
    }
</style>