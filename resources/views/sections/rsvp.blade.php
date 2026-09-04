<div class="relative z-10 w-full px-3 py-4 text-center flex flex-col items-center justify-center min-h-[70vh] gap-4">
    
    <!-- CARD 1: HEADER & COUNTDOWN -->
    <div class="stationery-card relative w-full max-w-sm p-5 pt-6 rounded-[28px] gold-border-inner shadow-sm flex flex-col items-center">

        <!-- Monogram Crest -->
        <div class="mb-3 w-12 h-12 rounded-full bg-cream-warm border border-gold/60 flex items-center justify-center shadow-xs animate-float">
            <span class="text-base font-bold text-maroon font-cinzel-heading tracking-wider pl-0.5">HP</span>
        </div>

        <!-- Judul -->
        <h2 class="text-sm sm:text-base text-maroon font-cinzel-heading uppercase tracking-[0.2em] mb-4 font-bold">
            MENGHITUNG HARI
        </h2>

        <!-- Box Countdown Timer -->
        <div class="grid grid-cols-4 gap-2 w-full">
            <div class="bg-cream-warm/80 border border-gold/30 rounded-xl p-2 shadow-xs text-center">
                <span id="cd-days" class="block text-xl font-bold text-maroon font-serif-luxury leading-none mb-1">00</span>
                <span class="text-[9px] text-stone-600 font-bold uppercase tracking-wider font-sans">Hari</span>
            </div>
            <div class="bg-cream-warm/80 border border-gold/30 rounded-xl p-2 shadow-xs text-center">
                <span id="cd-hours" class="block text-xl font-bold text-maroon font-serif-luxury leading-none mb-1">00</span>
                <span class="text-[9px] text-stone-600 font-bold uppercase tracking-wider font-sans">Jam</span>
            </div>
            <div class="bg-cream-warm/80 border border-gold/30 rounded-xl p-2 shadow-xs text-center">
                <span id="cd-minutes" class="block text-xl font-bold text-maroon font-serif-luxury leading-none mb-1">00</span>
                <span class="text-[9px] text-stone-600 font-bold uppercase tracking-wider font-sans">Menit</span>
            </div>
            <div class="bg-cream-warm/80 border border-gold/30 rounded-xl p-2 shadow-xs text-center">
                <span id="cd-seconds" class="block text-xl font-bold text-maroon font-serif-luxury leading-none mb-1">00</span>
                <span class="text-[9px] text-stone-600 font-bold uppercase tracking-wider font-sans">Detik</span>
            </div>
        </div>

    </div>

    <!-- CARD 2: ACTION & RSVP CALL-TO-ACTION -->
    <div class="stationery-card relative w-full max-w-sm p-5 rounded-2xl gold-border-inner shadow-sm flex flex-col items-center">

        <p class="text-xs sm:text-sm text-stone-700 mb-4 leading-relaxed font-serif-luxury italic text-base">
            Kirim ucapan untuk mempelai<br>dan konfirmasi kehadiran
        </p>

        <button 
            type="button" 
            onclick="openRsvpModal()" 
            class="btn-shimmer w-full bg-gradient-to-r from-maroon via-maroon-light to-maroon text-white py-3 rounded-full shadow-sm hover:brightness-110 active:scale-95 transition font-semibold text-xs tracking-wider uppercase font-sans cursor-pointer flex items-center justify-center gap-2 border border-gold/30"
        >
            <svg class="w-3.5 h-3.5 text-gold-light" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
            </svg>
            <span>Kirim Ucapan RSVP</span>
        </button>

    </div>

</div>

<!-- MODAL POP-UP RSVP FORM -->
<div id="rsvpModal" class="fixed inset-0 bg-black/70 z-[100] hidden flex items-center justify-center p-4 backdrop-blur-md transition-all duration-300" onclick="closeRsvpModal()">
    <div class="relative w-full max-w-md bg-white border border-gold/40 rounded-3xl shadow-2xl p-6 text-left max-h-[85vh] overflow-y-auto" onclick="event.stopPropagation()">
        
        <!-- Tombol Close (X) -->
        <button type="button" onclick="closeRsvpModal()" class="absolute top-4 right-4 w-7 h-7 rounded-full bg-stone-100 hover:bg-stone-200 text-stone-500 hover:text-maroon text-lg font-bold flex items-center justify-center cursor-pointer transition">
            &times;
        </button>

        <h2 class="text-xl font-bold text-center text-maroon font-cinzel-heading mb-1 tracking-wider">RSVP</h2>
        <div class="w-10 h-[1px] bg-gold/50 mx-auto mb-4"></div>

        <!-- Alert Notifikasi -->
        <div id="rsvpAlert" class="hidden mb-3 p-2.5 bg-emerald-50 border border-emerald-300 text-emerald-800 text-xs rounded-xl font-semibold text-center shadow-xs">
            Ucapan berhasil dikirim!
        </div>

        <!-- Form Input Ucapan -->
        <form id="rsvpFormSubmit" onsubmit="sendRsvpAjax(event)" class="space-y-3">
            @csrf
            <div>
                <label class="block text-xs font-semibold text-stone-700 mb-1 font-sans">Nama</label>
                <input 
                    type="text" 
                    id="inputNama"
                    name="nama" 
                    value="{{ $namaTamu !== 'Tamu Undangan' ? $namaTamu : '' }}" 
                    required 
                    placeholder="Nama" 
                    class="w-full px-3 py-2 text-xs sm:text-sm bg-stone-50/70 border border-stone-300 rounded-xl focus:outline-none focus:ring-1 focus:ring-maroon focus:bg-white transition font-sans"
                >
            </div>

            <div>
                <label class="block text-xs font-semibold text-stone-700 mb-1 font-sans">Kehadiran</label>
                <select id="inputKehadiran" name="kehadiran" required class="w-full px-3 py-2 text-xs sm:text-sm bg-stone-50/70 border border-stone-300 rounded-xl focus:outline-none focus:ring-1 focus:ring-maroon focus:bg-white transition font-sans">
                    <option value="" disabled selected>Pilih Kehadiran</option>
                    <option value="Hadir">Hadir</option>
                    <option value="Tidak Hadir">Tidak Hadir</option>
                </select>
            </div>

            <div>
                <label class="block text-xs font-semibold text-stone-700 mb-1 font-sans">Komentar atau Ucapan</label>
                <textarea id="inputUcapan" name="ucapan" rows="3" required placeholder="Tuliskan pesan atau ucapan selamat..." class="w-full px-3 py-2 text-xs sm:text-sm bg-stone-50/70 border border-stone-300 rounded-xl focus:outline-none focus:ring-1 focus:ring-maroon focus:bg-white transition font-sans"></textarea>
            </div>

            <button type="submit" id="btnSubmitRsvp" class="w-full bg-gradient-to-r from-maroon via-maroon-light to-maroon text-white font-semibold py-2.5 rounded-full shadow-xs hover:brightness-110 active:scale-95 transition text-xs uppercase tracking-wider font-sans cursor-pointer border border-gold/30">
                Kirim Ucapan
            </button>
        </form>

        <hr class="my-4 border-stone-200">

        <!-- List Ucapan dari Database -->
        <div id="listUcapanBox" class="space-y-2.5 max-h-48 overflow-y-auto pr-1 no-scrollbar">
           @forelse($ucapans ?? [] as $item)
                <div class="p-3 bg-stone-50/80 border border-stone-200/80 rounded-xl shadow-xs">
                    <div class="flex items-center gap-2 mb-1">
                        <div class="w-6 h-6 rounded-full bg-maroon text-white text-[10px] font-bold flex items-center justify-center uppercase shadow-xs">
                            {{ substr($item->nama, 0, 2) }}
                        </div>
                        <span class="font-bold text-xs text-stone-800 font-sans">{{ $item->nama }}</span>
                        
                        <!-- BADGE WARNA DINAMIS -->
                        <span class="text-[9px] px-2 py-0.5 rounded-full font-semibold {{ $item->kehadiran === 'Hadir' ? 'bg-emerald-100 text-emerald-800' : 'bg-rose-100 text-rose-800' }}">
                            {{ $item->kehadiran }}
                        </span>
                    </div>
                    <p class="text-xs text-stone-700 pl-8 mb-0.5 leading-relaxed font-sans">{{ $item->ucapan }}</p>
                    <span class="text-[9px] text-stone-400 pl-8 block font-sans">
                        {{ $item->created_at->format('d F Y \a\t H.i') }}
                    </span>
                </div>
            @empty
                <p id="emptyUcapanText" class="text-center text-xs text-stone-500 py-2 font-sans">Belum ada ucapan.</p>
            @endforelse
        </div>

    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const targetDate = new Date("2026-10-10T08:00:00").getTime();

        const timer = setInterval(function() {
            const now = new Date().getTime();
            const difference = targetDate - now;

            if (difference > 0) {
                const days = Math.floor(difference / (1000 * 60 * 60 * 24));
                const hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((difference % (1000 * 60)) / 1000);

                const elDays = document.getElementById("cd-days");
                if (elDays) {
                    elDays.innerText = String(days).padStart(2, '0');
                    document.getElementById("cd-hours").innerText = String(hours).padStart(2, '0');
                    document.getElementById("cd-minutes").innerText = String(minutes).padStart(2, '0');
                    document.getElementById("cd-seconds").innerText = String(seconds).padStart(2, '0');
                }
            } else {
                clearInterval(timer);
            }
        }, 1000);
    });

    function sendRsvpAjax(e) {
        e.preventDefault();

        const btn = document.getElementById('btnSubmitRsvp');
        btn.disabled = true;
        btn.innerText = 'Mengirim...';

        const form = document.getElementById('rsvpFormSubmit');
        const formData = new FormData(form);

        fetch("{{ route('rsvp.store') }}", {
            method: "POST",
            headers: {
                "X-Requested-With": "XMLHttpRequest",
            },
            body: formData
        })
        .then(response => {
            btn.disabled = false;
            btn.innerText = 'Kirim Ucapan';

            const alertBox = document.getElementById('rsvpAlert');
            if (alertBox) {
                alertBox.classList.remove('hidden');
                setTimeout(() => alertBox.classList.add('hidden'), 3000);
            }

            const nama = document.getElementById('inputNama').value;
            const kehadiran = document.getElementById('inputKehadiran').value;
            const ucapan = document.getElementById('inputUcapan').value;

            const emptyText = document.getElementById('emptyUcapanText');
            if (emptyText) emptyText.remove();

            const badgeColorClass = kehadiran === 'Hadir' 
                ? 'bg-emerald-100 text-emerald-800' 
                : 'bg-rose-100 text-rose-800';

            const listContainer = document.getElementById('listUcapanBox');
            const newCard = `
                <div class="p-3 bg-stone-50/80 border border-stone-200/80 rounded-xl shadow-xs">
                    <div class="flex items-center gap-2 mb-1">
                        <div class="w-6 h-6 rounded-full bg-maroon text-white text-[10px] font-bold flex items-center justify-center uppercase shadow-xs">
                            ${nama.substring(0, 2)}
                        </div>
                        <span class="font-bold text-xs text-stone-800 font-sans">${nama}</span>
                        <span class="text-[9px] px-2 py-0.5 rounded-full font-semibold ${badgeColorClass}">
                            ${kehadiran}
                        </span>
                    </div>
                    <p class="text-xs text-stone-700 pl-8 mb-0.5 leading-relaxed font-sans">${ucapan}</p>
                    <span class="text-[9px] text-stone-400 pl-8 block font-sans">Baru saja</span>
                </div>
            `;

            listContainer.insertAdjacentHTML('afterbegin', newCard);
            document.getElementById('inputUcapan').value = '';
        })
        .catch(err => {
            btn.disabled = false;
            btn.innerText = 'Kirim Ucapan';
            alert('Gagal mengirim ucapan, silakan coba lagi.');
        });
    }

    function openRsvpModal() {
        const modal = document.getElementById('rsvpModal');
        if (modal) {
            modal.classList.remove('hidden');
            const card = modal.querySelector('.relative');
            if (card) {
                card.classList.remove('modal-content-animate');
                void card.offsetWidth;
                card.classList.add('modal-content-animate');
            }
        }
    }

    function closeRsvpModal() {
        const modal = document.getElementById('rsvpModal');
        if (modal) modal.classList.add('hidden');
    }
</script>