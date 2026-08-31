<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herni & Panji - Wedding Invitation</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <style>
        .text-maroon { color: #8C3B3B; }
        .bg-maroon { background-color: #8C3B3B; }
        .bg-cream { background-color: #E8DECB; }

        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .spin-slow {
            animation: spin 3s linear infinite;
        }
        @keyframes spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
    </style>
</head>
<body class="bg-cream text-gray-800 font-serif antialiased">
    
    <div class="relative max-w-md mx-auto min-h-screen bg-[url('/images/bg-castle.jpg')] bg-cover bg-center overflow-x-hidden pb-20">
        
        @yield('content')

        @include('partials.bottom-nav')
        
        <!-- TAG AUDIO -->
        <audio id="weddingMusic" loop>
            <source src="{{ asset('audio/song.mp3') }}" type="audio/mpeg">
        </audio>

        <!-- TOMBOL MUSIC PLAYER FLOATING (KASIH CLASS 'hidden' DULU BRAY) -->
        <button id="musicBtn" onclick="toggleMusic()" class="hidden fixed bottom-20 right-4 z-[99] bg-maroon/80 text-white p-3 rounded-full shadow-lg backdrop-blur-sm border border-white/30 cursor-pointer">
            <svg id="iconPlay" class="w-6 h-6 hidden" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path>
            </svg>
            <svg id="iconPause" class="w-6 h-6 spin-slow" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zM7 8a1 1 0 012 0v4a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v4a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
            </svg>
        </button>

    </div>
    
    @stack('scripts')
    
</body>
</html>