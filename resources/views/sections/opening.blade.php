<div id="opening" class="relative w-full my-auto flex flex-col items-center justify-center text-center px-3 py-2 select-none">

    <!-- WEDDING HEADER (ABOVE ENVELOPE) -->
    <div id="openingHeader" class="mb-3.5 flex flex-col items-center fade-in-up delay-100">
        <div class="flex items-center gap-2 mb-1">
            <span class="w-7 h-[1px] bg-gold/50"></span>
            <span class="text-[10px] tracking-[0.3em] text-gold-dark font-bold uppercase font-sans">
                WEDDING INVITATION
            </span>
            <span class="w-7 h-[1px] bg-gold/50"></span>
        </div>
        <h1 class="text-3xl sm:text-4xl text-maroon font-script-wedding tracking-wide leading-none">
            Herni & Panji
        </h1>
        <p class="text-[11px] tracking-[0.2em] text-stone-600 font-semibold uppercase mt-1">
            Sabtu, 10 Oktober 2026
        </p>
    </div>

    <!-- 3D ENVELOPE SCENE -->
    <div class="envelope-scene w-full my-1 fade-in-up delay-200">
        <div id="envelopeBox" class="envelope-wrapper">
            
            <!-- LAYER 1: ENVELOPE BACK & INTERIOR LINING -->
            <div class="envelope-back">
                <div class="envelope-back-pattern"></div>
            </div>

            <!-- LAYER 2: THE INVITATION CARD (SLIDES UP ON OPEN) -->
            <div id="envelopeCard" class="envelope-card">
                <!-- Mini Floral Crest & Monogram -->
                <div class="relative w-14 h-14 mb-1 flex items-center justify-center">
                    <img 
                        src="/images/botanical-wreath.svg" 
                        alt="Floral Crest" 
                        class="absolute inset-0 w-full h-full object-contain"
                    >
                    <span class="relative z-10 text-base font-bold text-maroon font-cinzel-heading tracking-wider pl-0.5">
                        HP
                    </span>
                </div>
                
                <p class="text-[9px] tracking-[0.25em] text-gold-dark uppercase font-semibold font-sans">
                    The Wedding Celebration of
                </p>
                <h2 class="text-2xl sm:text-3xl text-maroon font-script-wedding tracking-wide leading-tight my-0.5">
                    Herni & Panji
                </h2>
                <div class="flex items-center gap-1.5 my-1">
                    <span class="w-5 h-[0.75px] bg-gold/50"></span>
                    <span class="text-[9.5px] font-sans text-stone-600 font-medium">Sabtu, 10 Oktober 2026</span>
                    <span class="w-5 h-[0.75px] bg-gold/50"></span>
                </div>
                <p class="text-[9px] text-stone-500 font-sans italic max-w-[240px] leading-tight">
                    "Tanpa mengurangi rasa hormat, kami mengundang Anda untuk hadir dan memberikan doa restu."
                </p>
            </div>

            <!-- LAYER 3: ENVELOPE FRONT POCKET (ORIGAMI FOLDS) -->
            <div class="envelope-pocket">
                <svg viewBox="0 0 350 232" preserveAspectRatio="none" class="w-full h-full drop-shadow-sm">
                    <defs>
                        <linearGradient id="pocketGradLeft" x1="0" y1="0" x2="1" y2="1">
                            <stop offset="0%" stop-color="#FBF7F0" />
                            <stop offset="100%" stop-color="#EDE2D0" />
                        </linearGradient>
                        <linearGradient id="pocketGradRight" x1="1" y1="0" x2="0" y2="1">
                            <stop offset="0%" stop-color="#FBF7F0" />
                            <stop offset="100%" stop-color="#EDE2D0" />
                        </linearGradient>
                        <linearGradient id="pocketGradBottom" x1="0" y1="1" x2="0" y2="0">
                            <stop offset="0%" stop-color="#E5D6C1" />
                            <stop offset="40%" stop-color="#F3EADC" />
                            <stop offset="100%" stop-color="#FAF5EE" />
                        </linearGradient>
                    </defs>
                    <!-- Left Fold -->
                    <polygon points="0,0 175,118 0,232" fill="url(#pocketGradLeft)" />
                    <!-- Right Fold -->
                    <polygon points="350,0 175,118 350,232" fill="url(#pocketGradRight)" />
                    <!-- Bottom Fold (Overlaps Left & Right) -->
                    <polygon points="0,232 175,104 350,232" fill="url(#pocketGradBottom)" />
                    <!-- Subtle Gold Fold Accents -->
                    <line x1="0" y1="0" x2="175" y2="118" stroke="#C5A059" stroke-width="1" stroke-opacity="0.25" />
                    <line x1="350" y1="0" x2="175" y2="118" stroke="#C5A059" stroke-width="1" stroke-opacity="0.25" />
                    <line x1="0" y1="232" x2="175" y2="104" stroke="#C5A059" stroke-width="1.2" stroke-opacity="0.35" />
                    <line x1="350" y1="232" x2="175" y2="104" stroke="#C5A059" stroke-width="1.2" stroke-opacity="0.35" />
                </svg>
            </div>

            <!-- LAYER 4: GUEST NAME PLAQUE (OUTSIDE THE ENVELOPE) -->
            <div class="envelope-guest-card">
                <div class="flex items-center justify-center gap-1.5 mb-0.5">
                    <span class="w-4 h-[1px] bg-gold/50"></span>
                    <p class="text-[9px] uppercase tracking-[0.22em] text-stone-500 font-semibold font-sans">
                        Kepada Yth.
                    </p>
                    <span class="w-4 h-[1px] bg-gold/50"></span>
                </div>
                <p class="text-[10px] text-stone-500 font-sans -mt-0.5">Bapak/Ibu/Saudara/i</p>
                <h3 class="text-base sm:text-lg font-bold text-maroon font-serif-luxury tracking-wide mt-0.5 line-clamp-1">
                    {{ $namaTamu ?? 'Tamu Undangan' }}
                </h3>
                <span class="inline-block mt-1 text-[9px] text-gold-dark font-sans tracking-wider uppercase font-semibold bg-[#FAF7F2] px-3 py-0.5 rounded-full border border-gold/30">
                    di Tempat
                </span>
            </div>

            <!-- LAYER 5: TOP FLAP & WAX SEAL -->
            <div id="envelopeFlap" class="envelope-flap">
                <svg viewBox="0 0 350 110" preserveAspectRatio="none" class="w-full h-full drop-shadow-md">
                    <defs>
                        <linearGradient id="flapGrad" x1="0" y1="0" x2="0" y2="1">
                            <stop offset="0%" stop-color="#FBF7F0" />
                            <stop offset="100%" stop-color="#EFE4D2" />
                        </linearGradient>
                    </defs>
                    <polygon points="0,0 175,110 350,0" fill="url(#flapGrad)" />
                    <polyline points="0,0 175,110 350,0" stroke="#C5A059" stroke-width="1.5" stroke-opacity="0.45" fill="none" />
                </svg>

                <!-- WAX SEAL STAMP -->
                <div id="waxSealBtn" class="wax-seal" title="Buka Undangan">
                    <div class="flex flex-col items-center justify-center leading-none">
                        <span class="text-xs sm:text-sm font-bold tracking-widest text-[#FCE8C3] pl-0.5">HP</span>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- INSTRUCTION & ACTION BUTTON (BELOW ENVELOPE) -->
    <div class="w-full max-w-xs mt-4 flex flex-col items-center gap-2 fade-in-up delay-300">
        <button 
            id="btnOpenInvitation" 
            type="button"
            class="btn-shimmer group w-full relative overflow-hidden bg-gradient-to-r from-maroon via-maroon-light to-maroon text-white py-3.5 px-6 rounded-full shadow-[0_8px_20px_rgba(122,32,33,0.3)] border border-gold/40 hover:brightness-110 active:scale-95 transition-all duration-300 font-semibold text-xs tracking-wider uppercase font-sans cursor-pointer flex items-center justify-center gap-2"
        >
            <svg class="w-4 h-4 text-gold-light group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
            </svg>
            <span>Buka Undangan</span>
        </button>

        <p class="text-[10px] text-stone-500 font-sans tracking-wide">
            Ketuk amplop atau tombol di atas untuk membuka
        </p>
    </div>

</div>