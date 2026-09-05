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
                transform: none;
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

        /* Glassmorphism Floating Music Button (Bottom Right) */
        .glass-music-btn {
            background: rgba(255, 255, 255, 0.72);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.9);
            box-shadow: 0 4px 16px -2px rgba(122, 32, 33, 0.15), 0 2px 6px rgba(0, 0, 0, 0.06);
            transition: all 0.25s ease;
        }
        .glass-music-btn:hover {
            background: rgba(255, 255, 255, 0.9);
            transform: scale(1.06);
        }
        .glass-music-btn:active {
            transform: scale(0.94);
        }

        /* ===================================================
           LUXURY 3D ENVELOPE OPENING ANIMATION STYLES
            =================================================== */
        .envelope-scene {
            perspective: 1200px;
            -webkit-perspective: 1200px;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .envelope-wrapper {
            position: relative;
            width: 330px;
            max-width: calc(100vw - 32px);
            height: 222px;
            cursor: pointer;
            transform: translate3d(0, 0, 0);
            transition: transform 0.35s cubic-bezier(0.22, 1, 0.36, 1);
            user-select: none;
            will-change: transform;
        }
        @media (min-width: 380px) {
            .envelope-wrapper {
                width: 345px;
                max-width: 345px;
                height: 226px;
            }
        }
        .envelope-wrapper:hover {
            transform: translate3d(0, -3px, 0);
        }

        /* Envelope Back Base */
        .envelope-back {
            position: absolute;
            inset: 0;
            background: linear-gradient(150deg, #FBF8F2 0%, #F1E7D7 100%);
            border-radius: 20px;
            border: 1.5px solid rgba(197, 160, 89, 0.45);
            box-shadow: 
                0 16px 36px -10px rgba(122, 32, 33, 0.14),
                0 4px 12px rgba(0, 0, 0, 0.04);
            overflow: hidden;
            z-index: 1;
            transform: translate3d(0, 0, 0);
        }

        /* Subtle Inner Lining Pattern */
        .envelope-back-pattern {
            position: absolute;
            inset: 0;
            background-image: radial-gradient(#C5A059 0.85px, transparent 0.85px);
            background-size: 16px 16px;
            opacity: 0.22;
        }

        /* The Letter / Card Inside */
        .envelope-card {
            position: absolute;
            left: 12px;
            right: 12px;
            top: 10px;
            height: 204px;
            background: #FFFFFF;
            border-radius: 14px;
            border: 1px solid rgba(197, 160, 89, 0.4);
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.05);
            z-index: 2;
            transform: translate3d(0, 0, 0);
            transition: transform 0.72s cubic-bezier(0.22, 1, 0.36, 1), box-shadow 0.6s ease;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 14px 12px;
            text-align: center;
            will-change: transform;
            backface-visibility: hidden;
        }
        @media (min-width: 400px) {
            .envelope-card {
                left: 14px;
                right: 14px;
                top: 10px;
                height: 212px;
            }
        }

        /* When Opened: Letter Slides UP with smooth elevation after flap clears */
        .envelope-wrapper.is-open .envelope-card {
            transform: translate3d(0, -125px, 0) scale(1.02);
            box-shadow: 0 20px 40px -8px rgba(122, 32, 33, 0.22), 0 6px 14px rgba(0, 0, 0, 0.06);
            z-index: 5;
            transition: transform 0.72s cubic-bezier(0.22, 1, 0.36, 1) 0.16s, box-shadow 0.6s ease 0.16s;
        }

        /* Envelope Front Pocket (Lower origami folds) */
        .envelope-pocket {
            position: absolute;
            inset: 0;
            z-index: 3;
            pointer-events: none;
            border-radius: 20px;
            overflow: hidden;
            transform: translate3d(0, 0, 0);
        }

        /* Top Flap (Triangular flap that flips open) */
        .envelope-flap {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 110px;
            transform-origin: top center;
            transform-style: preserve-3d;
            transform: translate3d(0, 0, 0) rotateX(0deg);
            transition: transform 0.62s cubic-bezier(0.33, 1, 0.68, 1);
            z-index: 6;
            pointer-events: none;
            will-change: transform;
            backface-visibility: visible;
        }

        /* When Opened: Flap rotates 180deg */
        .envelope-wrapper.is-open .envelope-flap {
            transform: translate3d(0, 0, 0) rotateX(180deg);
            z-index: 1;
            transition: transform 0.62s cubic-bezier(0.33, 1, 0.68, 1), z-index 0.01s 0.22s;
        }

        /* Wax Seal Button / Stamp */
        .wax-seal {
            position: absolute;
            bottom: -14px;
            left: 50%;
            transform: translate3d(-50%, 0, 0);
            width: 44px;
            height: 44px;
            border-radius: 50%;
            background: radial-gradient(circle at 35% 35%, #96282A, #5A1314 80%);
            border: 2px solid #E6C875;
            box-shadow: 
                0 6px 16px rgba(90, 19, 20, 0.45),
                0 2px 6px rgba(0, 0, 0, 0.25),
                inset 0 1px 3px rgba(255, 255, 255, 0.4),
                inset 0 -2px 5px rgba(0, 0, 0, 0.5);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #FCE8C3;
            font-family: 'Cinzel', serif;
            font-weight: 700;
            font-size: 13px;
            letter-spacing: 1px;
            z-index: 10;
            transition: transform 0.28s cubic-bezier(0.22, 1, 0.36, 1), opacity 0.25s ease;
            pointer-events: auto;
            cursor: pointer;
            will-change: transform, opacity;
        }
        .wax-seal::after {
            content: '';
            position: absolute;
            inset: -4px;
            border-radius: 50%;
            border: 1.5px dashed rgba(223, 191, 123, 0.6);
            animation: ringPulse 2.4s infinite;
        }
        .envelope-wrapper:hover .wax-seal {
            transform: translate3d(-50%, 0, 0) scale(1.08);
            box-shadow: 0 8px 20px rgba(90, 19, 20, 0.55);
        }
        .envelope-wrapper.is-open .wax-seal {
            opacity: 0;
            transform: translate3d(-50%, -8px, 0) scale(0.65);
            pointer-events: none;
            transition: opacity 0.22s ease, transform 0.25s ease;
        }

        /* Front Guest Plaque on Envelope */
        .envelope-guest-card {
            position: absolute;
            left: 16px;
            right: 16px;
            bottom: 12px;
            background: rgba(255, 255, 255, 0.95);
            border: 1px solid rgba(197, 160, 89, 0.4);
            border-radius: 14px;
            padding: 10px 12px 8px 12px;
            box-shadow: 0 4px 14px rgba(122, 32, 33, 0.08);
            z-index: 4;
            pointer-events: auto;
            text-align: center;
            transform: translate3d(0, 0, 0);
            transition: opacity 0.32s ease, transform 0.35s cubic-bezier(0.22, 1, 0.36, 1);
            will-change: transform, opacity;
        }
        @media (min-width: 400px) {
            .envelope-guest-card {
                left: 18px;
                right: 18px;
                bottom: 12px;
                padding: 12px 14px 10px 14px;
            }
        }
        .envelope-guest-card::before {
            content: '';
            position: absolute;
            inset: 3px;
            border: 0.75px solid rgba(197, 160, 89, 0.25);
            border-radius: 11px;
            pointer-events: none;
        }
        .envelope-wrapper:hover .envelope-guest-card {
            box-shadow: 0 6px 18px rgba(122, 32, 33, 0.12);
        }
        .envelope-wrapper.is-open .envelope-guest-card {
            opacity: 0;
            transform: translate3d(0, 16px, 0) scale(0.96);
            pointer-events: none;
            transition: opacity 0.28s ease 0.06s, transform 0.32s cubic-bezier(0.22, 1, 0.36, 1) 0.06s;
        }

        /* Seamless Cover Dissolve & Content Arrival */
        .cover-closing {
            opacity: 0 !important;
            transform: translate3d(0, -16px, 0) scale(1.03) !important;
            pointer-events: none !important;
            transition: opacity 0.65s cubic-bezier(0.22, 1, 0.36, 1), transform 0.65s cubic-bezier(0.22, 1, 0.36, 1) !important;
        }
        .main-content-appear {
            animation: mainContentFade 0.55s cubic-bezier(0.22, 1, 0.36, 1) forwards;
        }
        @keyframes mainContentFade {
            from {
                opacity: 0;
                transform: translate3d(0, 12px, 0) scale(0.985);
            }
            to {
                opacity: 1;
                transform: translate3d(0, 0, 0) scale(1);
            }
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

        <!-- FLOATING MUSIC BUTTON (BOTTOM RIGHT CORNER - SIMPLE CLEAN GLASS) -->
        <div class="fixed bottom-20 left-0 right-0 w-full max-w-md mx-auto pointer-events-none z-50 flex justify-end px-4">
            <button 
                id="musicBtn" 
                onclick="toggleMusic()" 
                aria-label="Toggle Music"
                title="Putar / Jeda Musik"
                class="hidden pointer-events-auto w-10 h-10 rounded-full glass-music-btn flex items-center justify-center text-maroon cursor-pointer shadow-md active:scale-95 transition-transform"
            >
                <div id="diskRotate" class="w-5 h-5 flex items-center justify-center spin-slow transition-opacity duration-300">
                    <svg class="w-4 h-4 text-maroon" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M18 3a1 1 0 00-1.196-.98l-10 2A1 1 0 006 5v9.114A4.369 4.369 0 005 14c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V7.82l8-1.6v5.894A4.37 4.37 0 0015 12c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V3z"/>
                    </svg>
                </div>
            </button>
        </div>

        <!-- MAIN VIEWPORT CONTENT -->
        <div class="relative z-10 w-full flex-1 flex flex-col pb-16">
            @yield('content')
        </div>

        <!-- STICKY BOTTOM NAVIGATION -->
        @include('partials.bottom-nav')
        
        <!-- AUDIO ELEMENT -->
        <audio id="weddingMusic" loop preload="auto">
            <source src="{{ asset('audio/song.mp3') }}" type="audio/mpeg">
        </audio>

    </div>
    
    <!-- MODAL DETAIL FOTO GALERI (ROOT LEVEL - LAYAR TENGAH PRESISI) -->
    <div id="imageModal" class="fixed inset-0 bg-black/90 z-[999] hidden flex items-center justify-center p-3 sm:p-4 backdrop-blur-md" onclick="closeModal()">
        <div class="relative max-w-sm sm:max-w-md w-full flex flex-col items-center my-auto" onclick="event.stopPropagation()">
            <!-- Tombol Close (X) Rapi di Pojok Kanan Atas Foto -->
            <button 
                onclick="closeModal()" 
                aria-label="Tutup Foto"
                class="absolute top-2.5 right-2.5 z-30 w-8 h-8 rounded-full bg-black/60 hover:bg-black/85 text-white flex items-center justify-center backdrop-blur-md border border-white/40 transition cursor-pointer shadow-lg active:scale-95"
            >
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>

            <!-- Card Foto Frame -->
            <div class="p-1.5 bg-white/95 rounded-2xl shadow-2xl border border-gold/40 w-full overflow-hidden flex items-center justify-center">
                <img id="modalImg" src="" alt="Detail Foto" class="w-full max-h-[78vh] object-contain rounded-xl shadow-inner">
            </div>
        </div>
    </div>

    <!-- MODAL POP-UP RSVP FORM & UCAPAN (ROOT LEVEL - CLEAN & LUXURY) -->
    <div id="rsvpModal" class="fixed inset-0 bg-black/75 z-[999] hidden flex items-center justify-center p-3 sm:p-4 backdrop-blur-md transition-all duration-300" onclick="closeRsvpModal()">
        <div class="relative w-full max-w-sm sm:max-w-md bg-[#FAF7F2] border border-gold/40 rounded-[28px] sm:rounded-[32px] shadow-2xl overflow-hidden my-auto flex flex-col max-h-[90vh]" onclick="event.stopPropagation()">
            
            <!-- Close Button (X) -->
            <button 
                type="button" 
                onclick="closeRsvpModal()" 
                aria-label="Tutup" 
                class="absolute top-4 right-4 z-20 w-8 h-8 rounded-full bg-stone-100/90 hover:bg-stone-200 text-stone-500 hover:text-maroon flex items-center justify-center transition cursor-pointer shadow-xs active:scale-95"
            >
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>

            <!-- Modal Header -->
            <div class="p-5 pb-3 text-center border-b border-gold/20 bg-white/60">
                <div class="w-10 h-10 mx-auto mb-2 rounded-full bg-cream-warm border border-gold/50 flex items-center justify-center text-maroon font-cinzel-heading font-bold text-xs tracking-wider shadow-2xs">
                    HP
                </div>
                <h2 class="text-base sm:text-lg font-bold text-maroon font-serif-luxury tracking-wide">
                    RSVP & Doa Restu
                </h2>
                <p class="text-[11px] text-stone-500 font-sans mt-0.5">
                    Konfirmasi kehadiran & sampaikan doa terbaik Anda
                </p>
            </div>

            <!-- Segmented Tab Controls -->
            <div class="p-3 pb-1 bg-[#FAF7F2]">
                <div class="flex items-center p-1 bg-stone-200/50 rounded-xl border border-gold/20">
                    <button 
                        type="button" 
                        id="btnTabForm" 
                        onclick="switchRsvpTab('form')" 
                        class="flex-1 py-2 rounded-lg text-xs font-bold transition bg-maroon text-white shadow-xs flex items-center justify-center gap-1.5 cursor-pointer"
                    >
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                        </svg>
                        <span>Tulis Ucapan</span>
                    </button>
                    <button 
                        type="button" 
                        id="btnTabList" 
                        onclick="switchRsvpTab('list')" 
                        class="flex-1 py-2 rounded-lg text-xs font-semibold transition text-stone-600 hover:text-maroon flex items-center justify-center gap-1.5 cursor-pointer"
                    >
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                        </svg>
                        <span>Doa Masuk (<span id="countUcapanBadge">{{ count($ucapans ?? []) }}</span>)</span>
                    </button>
                </div>
            </div>

            <!-- Tab 1: Form Input Pane -->
            <div id="rsvpTabForm" class="p-4 pt-2 overflow-y-auto no-scrollbar">
                <!-- Alert Success -->
                <div id="rsvpAlert" class="hidden mb-3 p-2.5 bg-emerald-50 border border-emerald-300 text-emerald-800 text-xs rounded-xl font-semibold text-center flex items-center justify-center gap-1.5 shadow-xs">
                    <svg class="w-4 h-4 text-emerald-600 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span>Ucapan berhasil terkirim! Terima kasih.</span>
                </div>

                <form id="rsvpFormSubmit" onsubmit="sendRsvpAjax(event)" class="space-y-3">
                    @csrf
                    <!-- Input Nama -->
                    <div>
                        <label class="block text-[11px] font-semibold text-stone-700 uppercase tracking-wider mb-1 font-sans flex items-center gap-1">
                            <svg class="w-3.5 h-3.5 text-gold-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                            <span>Nama Tamu</span>
                        </label>
                        <input 
                            type="text" 
                            id="inputNama" 
                            name="nama" 
                            value="{{ ($namaTamu ?? '') !== 'Tamu Undangan' ? ($namaTamu ?? '') : '' }}" 
                            required 
                            placeholder="Nama Anda / Keluarga" 
                            class="w-full px-3.5 py-2.5 text-xs sm:text-sm bg-white border border-stone-300/80 rounded-xl focus:outline-none focus:border-maroon focus:ring-2 focus:ring-maroon/10 transition font-sans shadow-2xs placeholder:text-stone-400"
                        >
                    </div>

                    <!-- Pilihan Kehadiran (Pills Selector) -->
                    <div>
                        <label class="block text-[11px] font-semibold text-stone-700 uppercase tracking-wider mb-1 font-sans flex items-center gap-1">
                            <svg class="w-3.5 h-3.5 text-gold-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span>Konfirmasi Kehadiran</span>
                        </label>
                        <div class="grid grid-cols-2 gap-2">
                            <button 
                                type="button" 
                                id="btnOptHadir" 
                                onclick="selectKehadiran('Hadir')"
                                class="flex items-center justify-center gap-1.5 py-2.5 px-3 rounded-xl border-2 border-maroon bg-maroon/5 text-maroon font-bold text-xs shadow-xs transition cursor-pointer"
                            >
                                <svg class="w-3.5 h-3.5 text-emerald-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span>Akan Hadir</span>
                            </button>
                            <button 
                                type="button" 
                                id="btnOptTidak" 
                                onclick="selectKehadiran('Tidak Hadir')"
                                class="flex items-center justify-center gap-1.5 py-2.5 px-3 rounded-xl border border-stone-200 bg-white text-stone-500 font-medium text-xs shadow-2xs transition cursor-pointer hover:border-stone-300"
                            >
                                <svg class="w-3.5 h-3.5 text-stone-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                                </svg>
                                <span>Berhalangan</span>
                            </button>
                            <input type="hidden" name="kehadiran" id="inputKehadiran" value="Hadir" required>
                        </div>
                    </div>

                    <!-- Input Ucapan -->
                    <div>
                        <label class="block text-[11px] font-semibold text-stone-700 uppercase tracking-wider mb-1 font-sans flex items-center gap-1">
                            <svg class="w-3.5 h-3.5 text-gold-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"/>
                            </svg>
                            <span>Ucapan & Doa Restu</span>
                        </label>
                        <textarea 
                            id="inputUcapan" 
                            name="ucapan" 
                            rows="3" 
                            required 
                            placeholder="Sampaikan doa dan harapan terbaik Anda untuk kedua mempelai..." 
                            class="w-full px-3.5 py-2.5 text-xs sm:text-sm bg-white border border-stone-300/80 rounded-xl focus:outline-none focus:border-maroon focus:ring-2 focus:ring-maroon/10 transition font-sans shadow-2xs placeholder:text-stone-400 resize-none"
                        ></textarea>
                    </div>

                    <!-- Tombol Kirim -->
                    <button 
                        type="submit" 
                        id="btnSubmitRsvp" 
                        class="btn-shimmer w-full bg-gradient-to-r from-maroon via-maroon-light to-maroon text-white font-semibold py-3 rounded-xl shadow-md hover:brightness-110 active:scale-95 transition text-xs uppercase tracking-wider font-sans cursor-pointer border border-gold/30 flex items-center justify-center gap-2 mt-2"
                    >
                        <svg class="w-4 h-4 text-gold-light" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                        </svg>
                        <span>Kirim Ucapan</span>
                    </button>
                </form>
            </div>

            <!-- Tab 2: List Ucapan Pane -->
            <div id="rsvpTabList" class="hidden p-4 pt-2 overflow-y-auto no-scrollbar max-h-[55vh]">
                <div id="listUcapanBox" class="space-y-2.5">
                   @forelse($ucapans ?? [] as $item)
                        <div class="p-3 bg-white border border-gold/20 rounded-2xl shadow-2xs transition hover:border-gold/40">
                            <div class="flex items-center justify-between gap-2 mb-1.5">
                                <div class="flex items-center gap-2">
                                    <div class="w-7 h-7 rounded-full bg-cream-warm border border-gold/40 text-maroon text-[11px] font-bold flex items-center justify-center uppercase font-serif-luxury shadow-2xs">
                                        {{ strtoupper(substr($item->nama, 0, 2)) }}
                                    </div>
                                    <span class="font-bold text-xs text-stone-800 font-sans tracking-wide">{{ $item->nama }}</span>
                                </div>
                                
                                <span class="text-[9.5px] px-2 py-0.5 rounded-full font-medium font-sans flex items-center gap-1 {{ $item->kehadiran === 'Hadir' ? 'bg-emerald-50 text-emerald-700 border border-emerald-200' : 'bg-rose-50 text-rose-700 border border-rose-200' }}">
                                    <span class="w-1.5 h-1.5 rounded-full {{ $item->kehadiran === 'Hadir' ? 'bg-emerald-500' : 'bg-rose-400' }}"></span>
                                    <span>{{ $item->kehadiran }}</span>
                                </span>
                            </div>
                            <p class="text-xs text-stone-600 pl-9 mb-1 leading-relaxed font-sans">{{ $item->ucapan }}</p>
                            <span class="text-[9px] text-stone-400 pl-9 block font-sans">
                                {{ $item->created_at->format('d M Y, H:i') }} WIB
                            </span>
                        </div>
                    @empty
                        <div id="emptyUcapanText" class="text-center py-8">
                            <div class="w-12 h-12 mx-auto mb-2 rounded-full bg-cream-warm border border-gold/40 flex items-center justify-center text-stone-400">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
                            </div>
                            <p class="text-xs font-semibold text-stone-600 font-sans">Belum ada ucapan</p>
                            <p class="text-[11px] text-stone-400 font-sans mt-0.5">Jadilah yang pertama mengirimkan doa restu!</p>
                        </div>
                    @endforelse
                </div>
            </div>

        </div>
    </div>
    
    @stack('scripts')
    
</body>
</html>