<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herni & Panji - Wedding Invitation</title>
    
    <!-- Google Fonts: Luxury Wedding Typography + Arabic Amiri for Bismillah -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri:ital,wght@0,400;0,700;1,400&family=Cinzel:wght@400;600;700&family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400;1,600&family=Great+Vibes&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        maroon: {
                            DEFAULT: '#7A2021',
                            light: '#962F31',
                            dark: '#581415',
                            soft: '#8E3839',
                        },
                        gold: {
                            DEFAULT: '#C5A059',
                            light: '#DFBF7B',
                            dark: '#9E7D38',
                            shimmer: '#EBD292',
                        },
                        cream: {
                            DEFAULT: '#FAF7F2',
                            warm: '#F4ECE1',
                            card: 'rgba(255, 255, 255, 0.94)',
                        },
                        sage: {
                            DEFAULT: '#657766',
                            light: '#8E9E8F',
                        }
                    },
                    fontFamily: {
                        serif: ['"Cormorant Garamond"', 'Georgia', 'serif'],
                        script: ['"Great Vibes"', 'cursive'],
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                        cinzel: ['"Cinzel"', 'serif'],
                        arabic: ['"Amiri"', 'serif'],
                    }
                }
            }
        }
    </script>
    
    <style>
        /* Base typography & rendering */
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: #3C2E2E;
            background-color: #EFE9E0;
            background-image: 
                radial-gradient(#D5C9BA 1px, transparent 1px),
                radial-gradient(#D5C9BA 1px, #EFE9E0 1px);
            background-size: 32px 32px;
            background-position: 0 0, 16px 16px;
        }

        .font-serif-luxury {
            font-family: 'Cormorant Garamond', Georgia, serif;
        }
        .font-script-wedding {
            font-family: 'Great Vibes', cursive;
        }
        .font-cinzel-heading {
            font-family: 'Cinzel', serif;
        }
        .font-arabic-bismillah {
            font-family: 'Amiri', serif;
        }

        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }

        /* Clean Luxury Stationery Card Styling */
        .stationery-card {
            background: rgba(255, 255, 255, 0.94);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(197, 160, 89, 0.35);
            box-shadow: 0 8px 25px -4px rgba(122, 32, 33, 0.05), 0 0 0 1px rgba(255, 255, 255, 0.9) inset;
            transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.35s ease;
        }
        .stationery-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 28px -4px rgba(122, 32, 33, 0.09), 0 0 0 1px rgba(255, 255, 255, 0.95) inset;
        }

        .gold-border-inner {
            position: relative;
        }
        .gold-border-inner::after {
            content: '';
            position: absolute;
            inset: 5px;
            border: 1px solid rgba(197, 160, 89, 0.22);
            border-radius: inherit;
            pointer-events: none;
        }

        .spin-slow {
            animation: spinSlow 4s linear infinite;
        }
        @keyframes spinSlow {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /* Section Smooth Fade Up */
        @keyframes sectionFadeUp {
            from {
                opacity: 0;
                transform: translateY(16px) scale(0.985);
            }
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }
        .section-animate {
            animation: sectionFadeUp 0.45s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }

        /* Gentle Floating Motion */
        @keyframes gentleFloat {
            0%, 100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-5px);
            }
        }
        .animate-float {
            animation: gentleFloat 4s ease-in-out infinite;
        }

        /* Staggered Fade In Up for Opening Screen */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(14px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .fade-in-up {
            animation: fadeInUp 0.7s cubic-bezier(0.16, 1, 0.3, 1) both;
        }
        .delay-100 { animation-delay: 100ms; }
        .delay-200 { animation-delay: 200ms; }
        .delay-300 { animation-delay: 300ms; }
        .delay-400 { animation-delay: 400ms; }
        .delay-500 { animation-delay: 500ms; }
        .delay-600 { animation-delay: 600ms; }

        /* Subtle Shimmer Light Sweep on Primary Buttons */
        .btn-shimmer {
            position: relative;
            overflow: hidden;
        }
        .btn-shimmer::before {
            content: '';
            position: absolute;
            top: 0;
            left: -150%;
            width: 100%;
            height: 100%;
            background: linear-gradient(
                115deg,
                transparent 20%,
                rgba(255, 255, 255, 0.3) 50%,
                transparent 80%
            );
            transform: skewX(-20deg);
            animation: btnShimmer 3.2s cubic-bezier(0.4, 0, 0.2, 1) infinite;
        }
        @keyframes btnShimmer {
            0% { left: -150%; }
            30%, 100% { left: 150%; }
        }

        /* Pulsing Ring for Timeline Dots */
        .timeline-dot {
            position: relative;
        }
        .timeline-dot::after {
            content: '';
            position: absolute;
            inset: -3px;
            border-radius: 9999px;
            border: 1.5px solid rgba(197, 160, 89, 0.5);
            animation: ringPulse 2.4s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }
        @keyframes ringPulse {
            0%, 100% { transform: scale(1); opacity: 0.8; }
            50% { transform: scale(1.35); opacity: 0; }
        }

        /* Modal Smooth Zoom In */
        @keyframes modalZoomIn {
            from {
                opacity: 0;
                transform: scale(0.93) translateY(8px);
            }
            to {
                opacity: 1;
                transform: scale(1) translateY(0);
            }
        }
        .modal-content-animate {
            animation: modalZoomIn 0.3s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }

        /* Floating Gold Dust Particles */
        .falling-particles {
            position: absolute;
            inset: 0;
            overflow: hidden;
            pointer-events: none;
            z-index: 15;
        }
        .particle {
            position: absolute;
            top: -20px;
            background: radial-gradient(circle, rgba(197, 160, 89, 0.45) 0%, rgba(223, 191, 123, 0.1) 70%, transparent 100%);
            border-radius: 50%;
            animation: particleFall linear infinite;
        }
        .particle:nth-child(1) { left: 10%; width: 7px; height: 7px; animation-duration: 10s; animation-delay: 0s; opacity: 0.5; }
        .particle:nth-child(2) { left: 28%; width: 11px; height: 11px; animation-duration: 14s; animation-delay: 2s; opacity: 0.4; }
        .particle:nth-child(3) { left: 55%; width: 6px; height: 6px; animation-duration: 9s; animation-delay: 4.5s; opacity: 0.55; }
        .particle:nth-child(4) { left: 76%; width: 9px; height: 9px; animation-duration: 12s; animation-delay: 1.5s; opacity: 0.35; }
        .particle:nth-child(5) { left: 88%; width: 6px; height: 6px; animation-duration: 11s; animation-delay: 5s; opacity: 0.5; }
        .particle:nth-child(6) { left: 42%; width: 8px; height: 8px; animation-duration: 15s; animation-delay: 3s; opacity: 0.3; }

        @keyframes particleFall {
            0% {
                transform: translateY(-20px) translateX(0);
                opacity: 0;
            }
            15% {
                opacity: 0.6;
            }
            85% {
                opacity: 0.6;
            }
            100% {
                transform: translateY(105vh) translateX(25px);
                opacity: 0;
            }
        }

        /* Bottom Nav Active State & Micro-interactions */
        @keyframes navSlideUp {
            from {
                transform: translateY(100%);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
        .nav-animate {
            animation: navSlideUp 0.5s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }

        .nav-link {
            color: #78716c;
            transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .nav-link:hover {
            color: #7A2021;
        }
        .nav-link:active {
            transform: scale(0.92);
        }
        .nav-link svg {
            color: currentColor;
            stroke: currentColor;
            transition: transform 0.25s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        .nav-link.active {
            background-color: #7A2021 !important;
            color: #FFFFFF !important;
            box-shadow: 0 2px 8px rgba(122, 32, 33, 0.25);
        }
        .nav-link.active svg {
            animation: iconPop 0.35s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        @keyframes iconPop {
            0% { transform: scale(0.85); }
            65% { transform: scale(1.15); }
            100% { transform: scale(1); }
        }
        .nav-link.active svg,
        .nav-link.active span {
            color: #FFFFFF !important;
        }
    </style>
</head>
<body class="antialiased min-h-screen flex items-center justify-center p-0 sm:py-6">
    
    <!-- DESKTOP CONTAINER: MOBILE INVITATION FRAME -->
    <div class="w-full max-w-md mx-auto min-h-screen sm:min-h-[92vh] sm:rounded-[36px] bg-gradient-to-b from-[#FDFBF7] via-[#FAF6F0] to-[#F5EFE4] relative overflow-hidden shadow-[0_20px_50px_rgba(80,20,25,0.15)] border-0 sm:border sm:border-[#C5A059]/40 flex flex-col justify-between">

        <!-- SUBTLE FLOATING PARTICLES (LUXURY GOLD DUST) -->
        <div class="falling-particles pointer-events-none">
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
        </div>

        <!-- FLOATING MUSIC BUTTON (CLEAN TOP RIGHT) -->
        <button 
            id="musicBtn" 
            onclick="toggleMusic()" 
            aria-label="Toggle Music"
            class="hidden fixed top-4 right-4 sm:absolute sm:top-4 sm:right-4 z-[99] w-9 h-9 rounded-full bg-white/95 backdrop-blur-md border border-gold/70 shadow-sm flex items-center justify-center text-maroon hover:scale-105 active:scale-95 transition cursor-pointer"
        >
            <div id="diskRotate" class="w-5 h-5 rounded-full border border-gold flex items-center justify-center spin-slow">
                <div class="w-1.5 h-1.5 rounded-full bg-maroon"></div>
            </div>
            <svg id="musicIconNote" class="w-2.5 h-2.5 text-gold-dark absolute" fill="currentColor" viewBox="0 0 20 20">
                <path d="M18 3a1 1 0 00-1.196-.98l-10 2A1 1 0 006 5v9.114A4.369 4.369 0 005 14c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V7.82l8-1.6v5.894A4.37 4.37 0 0015 12c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V3z"/>
            </svg>
        </button>

        <!-- MAIN VIEWPORT CONTENT -->
        <div class="relative z-10 w-full flex-1 flex flex-col pb-24">
            @yield('content')
        </div>

        <!-- STICKY BOTTOM NAVIGATION -->
        @include('partials.bottom-nav')
        
        <!-- AUDIO ELEMENT -->
        <audio id="weddingMusic" loop preload="auto">
            <source src="{{ asset('audio/song.mp3') }}" type="audio/mpeg">
        </audio>

    </div>
    
    @stack('scripts')
    
</body>
</html>