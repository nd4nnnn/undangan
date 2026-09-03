<section id="opening" class="relative w-full h-[calc(100vh-65px)] flex flex-col items-center justify-center text-center px-6 overflow-hidden select-none">

    <!-- CARD BENTUK ORGANIK / CURVED TOP -->
    <div class="relative z-10 my-auto animate-fade-in flex flex-col items-center w-full max-w-sm p-8 pt-12 rounded-[50px_10px_50px_10px] bg-white/75 backdrop-blur-md border border-white/80 shadow-2xl">
        
        <!-- INNER BORDER SILHOUETTE -->
        <div class="absolute inset-3 rounded-[42px_6px_42px_6px] border border-slate-blue/20 pointer-events-none"></div>

        <p class="text-xs tracking-widest text-slate-blue font-medium uppercase relative z-10">Sabtu<br>10 Oktober 2026</p>
        
        <h1 class="text-5xl font-bold text-slate-blue my-4 font-serif-custom tracking-wider relative z-10">HP</h1>
        <h2 class="text-4xl text-slate-blue font-script mb-1 relative z-10">Herni & Panji</h2>
        <p class="text-[10px] tracking-[0.25em] text-slate-blue mb-6 font-semibold relative z-10">SAVE THE DATE</p>
        
        <!-- CARD TAMU DENGEN BENTUK SELARAS -->
        <div class="w-full bg-white/60 backdrop-blur-sm border border-slate-blue/10 rounded-[20px_6px_20px_6px] p-4 mb-6 shadow-sm relative z-10">
            <p class="text-xs text-gray-500">Kepada Yth;<br>Bapak/Ibu/Saudara/i</p>
            <p class="text-lg font-bold text-slate-blue-dark mt-1">{{ $namaTamu ?? 'Tamu Undangan' }}</p>
        </div>

        <button id="btnOpenInvitation" class="w-full bg-maroon text-white py-3.5 rounded-full shadow-lg hover:bg-red-900 transition font-semibold text-sm cursor-pointer hover:scale-105 active:scale-95 duration-200 tracking-wide relative z-10">
            Open Invitation
        </button>
    </div>

</section>