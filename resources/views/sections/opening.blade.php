<section id="opening" class="relative w-full h-[calc(100vh-65px)] flex flex-col items-center justify-center text-center px-6 overflow-hidden select-none">

    <!-- ========================================== -->
    <!-- KONTEN UTAMA (PAS DI TENGAH LAYAR)         -->
    <!-- ========================================== -->
    <div class="relative z-10 my-auto animate-fade-in flex flex-col items-center">
        <p class="text-xs tracking-widest text-slate-blue font-medium uppercase">Sabtu<br>10 Oktober 2026</p>
        
        <h1 class="text-5xl font-bold text-slate-blue my-5 font-serif-custom tracking-wider">HP</h1>
        
        <h2 class="text-4xl text-slate-blue font-script mb-1">Herni & Panji</h2>
        <p class="text-[10px] tracking-[0.25em] text-slate-blue mb-8 font-semibold">SAVE THE DATE</p>
        
        <div class="mt-2 mb-8">
            <p class="text-xs text-gray-500">Kepada Yth;<br>Bapak/Ibu/Saudara/i</p>
            <p class="text-lg font-bold text-slate-blue-dark mt-2">{{ $namaTamu ?? 'Tamu Undangan' }}</p>
        </div>

        <!-- TOMBOL OPEN INVITATION (DITAMBAHIN DI SINI BRAY) -->
        <button id="btnOpenInvitation" class="bg-maroon text-white px-8 py-3 rounded-full shadow-lg hover:bg-red-900 transition font-semibold text-sm cursor-pointer hover:scale-105 active:scale-95 duration-200">
            Open Invitation
        </button>
    </div>

</section>