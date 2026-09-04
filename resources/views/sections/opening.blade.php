<div id="opening" class="relative w-full my-auto flex flex-col items-center justify-center text-center px-2 select-none">

    <!-- STATIONERY CARD WITH BALANCED MARGINS & CRISP GOLD HAIRLINE -->
    <div class="stationery-card relative z-10 my-auto flex flex-col items-center w-full max-w-sm p-6 pt-9 pb-8 rounded-[36px] gold-border-inner shadow-[0_15px_35px_rgba(122,32,33,0.12)]">
        
        <!-- DATE TOP HEADER -->
        <div class="relative z-10 mb-2 fade-in-up delay-100">
            <span class="inline-block text-[11px] sm:text-xs tracking-[0.25em] text-maroon font-semibold uppercase border-b border-gold/40 pb-1">
                Sabtu<br>10 Oktober 2026
            </span>
        </div>
        
        <!-- CRISP VECTOR BOTANICAL WREATH MONOGRAM CREST -->
        <div class="relative z-10 my-3 flex items-center justify-center fade-in-up delay-200">
            <div class="relative w-24 h-24 flex items-center justify-center animate-float">
                <!-- SVG Wreath (Pure Vector, No White Box Artifacts) -->
                <img 
                    src="/images/botanical-wreath.svg" 
                    alt="Floral Crest" 
                    class="absolute inset-0 w-full h-full object-contain"
                >
                <!-- Monogram Text -->
                <h1 class="relative z-10 text-2xl sm:text-3xl font-bold text-maroon font-cinzel-heading tracking-widest pl-1">
                    HP
                </h1>
            </div>
        </div>

        <!-- COUPLE NAME -->
        <div class="relative z-10 mb-1 fade-in-up delay-300">
            <h2 class="text-4xl sm:text-5xl text-maroon font-script-wedding tracking-wide leading-tight">
                Herni & Panji
            </h2>
        </div>

        <!-- SAVE THE DATE -->
        <div class="relative z-10 mb-6 flex items-center justify-center gap-2 fade-in-up delay-400">
            <span class="w-6 h-[1px] bg-gold/50"></span>
            <p class="text-[10px] tracking-[0.3em] text-gold-dark font-bold uppercase font-sans">
                SAVE THE DATE
            </p>
            <span class="w-6 h-[1px] bg-gold/50"></span>
        </div>
        
        <!-- GUEST CARD -->
        <div class="w-full bg-cream-warm/80 border border-gold/30 rounded-2xl p-4 mb-6 shadow-sm relative z-10 text-center fade-in-up delay-500">
            <p class="text-xs text-stone-600 leading-relaxed font-sans">
                Kepada Yth;<br>Bapak/Ibu/Saudara/i
            </p>
            <p class="text-base sm:text-lg font-bold text-maroon mt-1 font-serif-luxury tracking-wide">
                {{ $namaTamu ?? 'Tamu Undangan' }}
            </p>
        </div>

        <!-- OPEN INVITATION BUTTON -->
        <div class="w-full fade-in-up delay-600">
            <button 
                id="btnOpenInvitation" 
                class="btn-shimmer group w-full relative overflow-hidden bg-gradient-to-r from-maroon via-maroon-light to-maroon text-white py-3.5 px-6 rounded-full shadow-[0_8px_20px_rgba(122,32,33,0.3)] border border-gold/40 hover:brightness-110 active:scale-95 transition-all duration-300 font-semibold text-xs tracking-wider uppercase font-sans cursor-pointer flex items-center justify-center gap-2 relative z-10"
            >
                <svg class="w-4 h-4 text-gold-light group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                <span>Open Invitation</span>
            </button>
        </div>

    </div>
</div>