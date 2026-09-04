<div class="relative z-10 w-full px-3 py-4 text-center flex flex-col items-center justify-center gap-4">
    
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

        <p class="text-xs sm:text-sm text-stone-700 mb-1 leading-relaxed font-serif-luxury italic text-base">
            Kirim ucapan untuk mempelai<br>dan konfirmasi kehadiran
        </p>

        <!-- Social Proof Pill -->
        <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-cream-warm border border-gold/30 text-stone-600 text-[10.5px] font-sans my-3">
            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
            <span><strong id="badgePreviewCount" class="text-maroon">{{ count($ucapans ?? []) }}</strong> Ucapan & Doa Masuk</span>
        </div>

        <button 
            type="button" 
            onclick="openRsvpModal()" 
            class="btn-shimmer w-full bg-gradient-to-r from-maroon via-maroon-light to-maroon text-white py-3 rounded-full shadow-sm hover:brightness-110 active:scale-95 transition font-semibold text-xs tracking-wider uppercase font-sans cursor-pointer flex items-center justify-center gap-2 border border-gold/30"
        >
            <svg class="w-3.5 h-3.5 text-gold-light" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
            </svg>
            <span>Kirim Ucapan & RSVP</span>
        </button>

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

    // Pilihan Kehadiran (Pill Switcher)
    function selectKehadiran(status) {
        const input = document.getElementById('inputKehadiran');
        if (input) input.value = status;

        const btnHadir = document.getElementById('btnOptHadir');
        const btnTidak = document.getElementById('btnOptTidak');

        if (!btnHadir || !btnTidak) return;

        if (status === 'Hadir') {
            btnHadir.className = "flex items-center justify-center gap-1.5 py-2.5 px-3 rounded-xl border-2 border-maroon bg-maroon/5 text-maroon font-bold text-xs shadow-xs transition cursor-pointer";
            btnTidak.className = "flex items-center justify-center gap-1.5 py-2.5 px-3 rounded-xl border border-stone-200 bg-white text-stone-500 font-medium text-xs shadow-2xs transition cursor-pointer hover:border-stone-300";
        } else {
            btnTidak.className = "flex items-center justify-center gap-1.5 py-2.5 px-3 rounded-xl border-2 border-rose-500 bg-rose-50/50 text-rose-700 font-bold text-xs shadow-xs transition cursor-pointer";
            btnHadir.className = "flex items-center justify-center gap-1.5 py-2.5 px-3 rounded-xl border border-stone-200 bg-white text-stone-500 font-medium text-xs shadow-2xs transition cursor-pointer hover:border-stone-300";
        }
    }

    // Tab Switcher antara Form dan List Ucapan
    function switchRsvpTab(tab) {
        const tabForm = document.getElementById('rsvpTabForm');
        const tabList = document.getElementById('rsvpTabList');
        const btnTabForm = document.getElementById('btnTabForm');
        const btnTabList = document.getElementById('btnTabList');

        if (!tabForm || !tabList || !btnTabForm || !btnTabList) return;

        if (tab === 'form') {
            tabForm.classList.remove('hidden');
            tabList.classList.add('hidden');
            btnTabForm.className = "flex-1 py-2 rounded-lg text-xs font-bold transition bg-maroon text-white shadow-xs flex items-center justify-center gap-1.5 cursor-pointer";
            btnTabList.className = "flex-1 py-2 rounded-lg text-xs font-semibold transition text-stone-600 hover:text-maroon flex items-center justify-center gap-1.5 cursor-pointer";
        } else {
            tabForm.classList.add('hidden');
            tabList.classList.remove('hidden');
            btnTabList.className = "flex-1 py-2 rounded-lg text-xs font-bold transition bg-maroon text-white shadow-xs flex items-center justify-center gap-1.5 cursor-pointer";
            btnTabForm.className = "flex-1 py-2 rounded-lg text-xs font-semibold transition text-stone-600 hover:text-maroon flex items-center justify-center gap-1.5 cursor-pointer";
        }
    }

    function sendRsvpAjax(e) {
        e.preventDefault();

        const btn = document.getElementById('btnSubmitRsvp');
        btn.disabled = true;
        btn.innerHTML = `
            <svg class="animate-spin -ml-1 mr-2 h-4 w-4 text-white" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
            <span>Mengirim...</span>
        `;

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
            btn.innerHTML = `
                <svg class="w-4 h-4 text-gold-light" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                </svg>
                <span>Kirim Ucapan</span>
            `;

            const alertBox = document.getElementById('rsvpAlert');
            if (alertBox) {
                alertBox.classList.remove('hidden');
                setTimeout(() => alertBox.classList.add('hidden'), 3500);
            }

            const nama = document.getElementById('inputNama').value;
            const kehadiran = document.getElementById('inputKehadiran').value;
            const ucapan = document.getElementById('inputUcapan').value;

            const emptyText = document.getElementById('emptyUcapanText');
            if (emptyText) emptyText.remove();

            const isHadir = kehadiran === 'Hadir';
            const badgeClass = isHadir 
                ? 'bg-emerald-50 text-emerald-700 border border-emerald-200' 
                : 'bg-rose-50 text-rose-700 border border-rose-200';
            const dotClass = isHadir ? 'bg-emerald-500' : 'bg-rose-400';

            const listContainer = document.getElementById('listUcapanBox');
            const newCard = `
                <div class="p-3 bg-white border border-gold/30 rounded-2xl shadow-2xs transition animate-fade-up">
                    <div class="flex items-center justify-between gap-2 mb-1.5">
                        <div class="flex items-center gap-2">
                            <div class="w-7 h-7 rounded-full bg-cream-warm border border-gold/40 text-maroon text-[11px] font-bold flex items-center justify-center uppercase font-serif-luxury shadow-2xs">
                                ${nama.substring(0, 2).toUpperCase()}
                            </div>
                            <span class="font-bold text-xs text-stone-800 font-sans tracking-wide">${nama}</span>
                        </div>
                        <span class="text-[9.5px] px-2 py-0.5 rounded-full font-medium font-sans flex items-center gap-1 ${badgeClass}">
                            <span class="w-1.5 h-1.5 rounded-full ${dotClass}"></span>
                            <span>${kehadiran}</span>
                        </span>
                    </div>
                    <p class="text-xs text-stone-600 pl-9 mb-1 leading-relaxed font-sans">${ucapan}</p>
                    <span class="text-[9px] text-stone-400 pl-9 block font-sans">Baru saja</span>
                </div>
            `;

            if (listContainer) {
                listContainer.insertAdjacentHTML('afterbegin', newCard);
            }

            // Update Counters
            const badgePreview = document.getElementById('badgePreviewCount');
            const countBadge = document.getElementById('countUcapanBadge');
            if (countBadge) {
                const current = parseInt(countBadge.innerText) || 0;
                countBadge.innerText = current + 1;
                if (badgePreview) badgePreview.innerText = current + 1;
            }

            document.getElementById('inputUcapan').value = '';

            // Otomatis pindah ke tab doa setelah 1.2 detik
            setTimeout(() => {
                switchRsvpTab('list');
            }, 1200);
        })
        .catch(err => {
            btn.disabled = false;
            btn.innerHTML = `
                <svg class="w-4 h-4 text-gold-light" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                </svg>
                <span>Kirim Ucapan</span>
            `;
            alert('Gagal mengirim ucapan, silakan coba lagi.');
        });
    }

    function openRsvpModal() {
        const modal = document.getElementById('rsvpModal');
        if (modal) {
            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
            switchRsvpTab('form');
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
        if (modal) {
            modal.classList.add('hidden');
            document.body.style.overflow = '';
        }
    }
</script>