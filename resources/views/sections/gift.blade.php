<div class="relative z-10 w-full px-3 py-4 text-center flex flex-col items-center">
    
    <h2 class="text-2xl sm:text-3xl font-bold text-maroon mb-1 font-serif-luxury tracking-wide">
        Wedding Gift
    </h2>
    
    <div class="w-12 h-[1px] bg-gold/50 mx-auto mb-3"></div>

    <p class="text-xs text-stone-700 mb-5 max-w-xs font-sans leading-relaxed">
        Terima kasih telah menambah semangat kegembiraan pernikahan kami dengan kehadiran dan hadiah indah Anda.
    </p>

    <!-- LUXURY CARD BANK 1 (BCA) -->
    <div class="w-full max-w-sm rounded-2xl p-4 shadow-sm text-left mb-4 relative overflow-hidden bg-gradient-to-br from-[#1E3A8A] via-[#1E40AF] to-[#0F172A] border border-blue-400/30 text-white">
        <div class="flex items-center justify-between mb-3 relative z-10">
            <p class="text-xs font-bold tracking-wider text-blue-200 font-sans">BANK BCA</p>
            <div class="bg-white/95 rounded px-2 py-0.5 shadow-xs">
                <img src="/images/bca-logo.svg" alt="BCA" class="h-3.5 w-auto">
            </div>
        </div>

        <!-- EMV Chip Mockup -->
        <div class="w-10 h-7 rounded bg-gradient-to-r from-amber-200 via-yellow-400 to-amber-300 border border-yellow-500/60 shadow-inner flex flex-col justify-around p-1 mb-3">
            <div class="w-full h-[1px] bg-amber-700/40"></div>
            <div class="w-full h-[1px] bg-amber-700/40"></div>
        </div>

        <!-- Nomor Rekening -->
        <p id="rekBca" class="text-base sm:text-lg font-mono font-bold tracking-widest text-white mb-2 relative z-10">-</p>

        <div class="flex items-center justify-between relative z-10">
            <div>
                <p class="text-[9px] text-blue-200/80 uppercase font-sans">Nama Penerima</p>
                <p class="text-xs sm:text-sm font-semibold tracking-wide text-white font-sans">Herni</p>
            </div>
            
            <button 
                onclick="copyRekening('rekBca', this)" 
                class="bg-white/20 hover:bg-white/30 active:scale-95 text-white text-[11px] px-3 py-1 rounded-full border border-white/40 transition flex items-center gap-1 cursor-pointer shadow-xs"
            >
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <rect x="9" y="9" width="13" height="13" rx="2" stroke-width="2"/>
                    <path d="M5 15H4a2 2 0 01-2-2V4a2 2 0 012-2h9a2 2 0 012 2v1" stroke-width="2"/>
                </svg>
                <span>Salin Rekening</span>
            </button>
        </div>
    </div>

    <!-- LUXURY CARD BANK 2 (BNI) -->
    <div class="w-full max-w-sm rounded-2xl p-4 shadow-sm text-left mb-6 relative overflow-hidden bg-gradient-to-br from-[#0D5C5B] via-[#004D40] to-[#0A2E2B] border border-teal-400/30 text-white">
        <div class="flex items-center justify-between mb-3 relative z-10">
            <p class="text-xs font-bold tracking-wider text-teal-200 font-sans">BANK BNI</p>
            <div class="bg-white/95 rounded px-2 py-0.5 shadow-xs">
                <img src="/images/bni-logo.svg" alt="BNI" class="h-3.5 w-auto">
            </div>
        </div>

        <!-- EMV Chip Mockup -->
        <div class="w-10 h-7 rounded bg-gradient-to-r from-amber-200 via-yellow-400 to-amber-300 border border-yellow-500/60 shadow-inner flex flex-col justify-around p-1 mb-3">
            <div class="w-full h-[1px] bg-amber-700/40"></div>
            <div class="w-full h-[1px] bg-amber-700/40"></div>
        </div>

        <!-- Nomor Rekening -->
        <p id="rekBni" class="text-base sm:text-lg font-mono font-bold tracking-widest text-white mb-2 relative z-10">-</p>

        <div class="flex items-center justify-between relative z-10">
            <div>
                <p class="text-[9px] text-teal-200/80 uppercase font-sans">Nama Penerima</p>
                <p class="text-xs sm:text-sm font-semibold tracking-wide text-white font-sans">Panji</p>
            </div>
            
            <button 
                onclick="copyRekening('rekBni', this)" 
                class="bg-white/20 hover:bg-white/30 active:scale-95 text-white text-[11px] px-3 py-1 rounded-full border border-white/40 transition flex items-center gap-1 cursor-pointer shadow-xs"
            >
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <rect x="9" y="9" width="13" height="13" rx="2" stroke-width="2"/>
                    <path d="M5 15H4a2 2 0 01-2-2V4a2 2 0 012-2h9a2 2 0 012 2v1" stroke-width="2"/>
                </svg>
                <span>Salin Rekening</span>
            </button>
        </div>
    </div>

    <!-- TOMBOL PEMICU POP-UP KONFIRMASI -->
    <button 
        type="button" 
        onclick="toggleModalGift(true)"
        class="inline-flex items-center justify-center gap-2 bg-gradient-to-r from-maroon via-maroon-light to-maroon text-white px-7 py-2.5 rounded-full shadow-sm hover:brightness-110 active:scale-95 transition font-bold text-xs uppercase tracking-wider font-sans cursor-pointer border border-gold/30"
    >
        <svg class="w-3.5 h-3.5 text-gold-light" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 00-2 2v6a2 2 0 002 2h14a2 2 0 002-2v-6a2 2 0 00-2-2H5z"/>
        </svg>
        <span>Konfirmasi Bukti Trf</span>
    </button>
</div>

<!-- Script Copy Rekening -->
<script>

    function copyRekening(elementId, btn) {
        const el = document.getElementById(elementId);
        const textToCopy = el ? el.innerText.trim() : '';
        
        navigator.clipboard.writeText(textToCopy).then(() => {
            const originalHTML = btn.innerHTML;
            btn.innerHTML = `<span>Tersalin! ✓</span>`;
            btn.classList.add('bg-emerald-600', 'border-emerald-400');
            setTimeout(() => {
                btn.innerHTML = originalHTML;
                btn.classList.remove('bg-emerald-600', 'border-emerald-400');
            }, 2000);
        }).catch(() => {
            alert('Nomor rekening tersalin: ' + textToCopy);
        });
    }
</script>