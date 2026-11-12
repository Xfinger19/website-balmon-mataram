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
                        primary: '#0f172a', // Dark Navy
                        secondary: '#1e40af', // Blue
                        accent: '#f59e0b', // Amber/Gold
                        komdigi: '#0056b3', // Warna khas Kominfo/Komdigi
                    }
                }
            }
        }
    </script>
    
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="text-slate-800 antialiased">

<!-- Navbar -->
<nav class="fixed w-full z-50 glass-nav">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-20">
      <div class="flex items-center gap-3">
        <!-- Logo SVG Spektrum -->
        <div class="bg-komdigi p-2 rounded-lg">
            <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
            </svg>
        </div>
        <div>
            <span class="text-white font-bold text-lg tracking-wide block leading-tight">BALMON MATARAM</span>
            <span class="text-gray-400 text-xs tracking-widest block">KOMDIGI</span>
        </div>
      </div>
      
      <div class="hidden md:flex items-center space-x-8">
        <a href="index.php" class="text-gray-300 hover:text-white text-sm font-medium transition">Beranda</a>
        <a href="profil.php" class="text-gray-300 hover:text-white text-sm font-medium transition">Profil</a>
        <a href="layanan.php" class="text-gray-300 hover:text-white text-sm font-medium transition">Layanan</a>
        <a href="pengaduan.php" class="bg-accent hover:bg-amber-600 text-white px-5 py-2 rounded-full text-sm font-semibold transition shadow-lg shadow-amber-500/50">Lapor Gangguan</a>
      </div>
    </div>
  </div>
</nav>