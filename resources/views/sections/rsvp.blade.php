<div class="relative z-10 w-full px-6 py-10 text-center flex flex-col items-center justify-center min-h-[80vh] gap-4">
    
    <!-- CARD 1: HEADER & COUNTDOWN (BENTUK SCALLOP ORGANIK) -->
    <div class="relative w-full max-w-sm p-6 pt-8 rounded-[40px_12px_40px_12px] bg-white/75 backdrop-blur-md border border-white/60 shadow-xl flex flex-col items-center">
        
        <!-- INNER BORDER SILHOUETTE -->
        <div class="absolute inset-2.5 rounded-[32px_8px_32px_8px] border border-maroon/20 pointer-events-none"></div>

        <!-- Logo Monogram -->
        <div class="mb-4 border-2 border-maroon rounded-full w-14 h-14 flex items-center justify-center mx-auto bg-white/50 backdrop-blur-sm shadow-sm relative z-10">
            <span class="text-xl font-bold text-maroon font-serif">HP</span>
        </div>

        <!-- Judul -->
        <h2 class="text-lg sm:text-xl text-maroon font-serif uppercase tracking-widest mb-5 relative z-10 font-bold">MENGHITUNG HARI</h2>

        <!-- Box Countdown Timer -->
        <div class="grid grid-cols-4 gap-2 w-full relative z-10">
            <div class="bg-white/80 backdrop-blur-sm border border-maroon/30 rounded-xl p-2 shadow-sm">
                <span id="cd-days" class="block text-lg font-bold text-maroon font-serif">00</span>
                <span class="text-[9px] text-maroon font-medium uppercase tracking-wider">Hari</span>
            </div>
            <div class="bg-white/80 backdrop-blur-sm border border-maroon/30 rounded-xl p-2 shadow-sm">
                <span id="cd-hours" class="block text-lg font-bold text-maroon font-serif">00</span>
                <span class="text-[9px] text-maroon font-medium uppercase tracking-wider">Jam</span>
            </div>
            <div class="bg-white/80 backdrop-blur-sm border border-maroon/30 rounded-xl p-2 shadow-sm">
                <span id="cd-minutes" class="block text-lg font-bold text-maroon font-serif">00</span>
                <span class="text-[9px] text-maroon font-medium uppercase tracking-wider">Menit</span>
            </div>
            <div class="bg-white/80 backdrop-blur-sm border border-maroon/30 rounded-xl p-2 shadow-sm">
                <span id="cd-seconds" class="block text-lg font-bold text-maroon font-serif">00</span>
                <span class="text-[9px] text-maroon font-medium uppercase tracking-wider">Detik</span>
            </div>
        </div>

    </div>

    <!-- CARD 2: ACTION & RSVP CALL-TO-ACTION (BENTUK KAPSUL SOFT) -->
    <div class="relative w-full max-w-sm p-6 rounded-3xl bg-white/75 backdrop-blur-md border border-white/60 shadow-lg flex flex-col items-center">
        
        <!-- INNER BORDER TIPIS -->
        <div class="absolute inset-2 rounded-[18px] border border-maroon/15 pointer-events-none"></div>

        <p class="text-xs sm:text-sm text-maroon/90 mb-4 leading-relaxed relative z-10 font-serif italic">
            Kirim ucapan untuk mempelai<br>dan konfirmasi kehadiran
        </p>

        <button type="button" onclick="openRsvpModal()" class="w-full bg-maroon text-white py-3 rounded-full shadow-md hover:bg-red-900 transition font-semibold text-sm cursor-pointer hover:scale-[1.02] active:scale-95 duration-200 tracking-wide relative z-10">
            Kirim Ucapan RSVP
        </button>

    </div>

</div>

<!-- MODAL POP-UP RSVP FORM -->
<div id="rsvpModal" class="fixed inset-0 bg-black/60 z-[100] hidden flex items-center justify-center p-4 backdrop-blur-md transition-all duration-300">
    <div class="relative w-full max-w-md bg-white/95 backdrop-blur-xl border border-white/80 rounded-3xl shadow-2xl p-6 text-left max-h-[85vh] overflow-y-auto">
        
        <!-- Tombol Close (X) -->
        <button type="button" onclick="closeRsvpModal()" class="absolute top-4 right-4 text-gray-400 hover:text-maroon text-2xl font-bold cursor-pointer transition">&times;</button>

        <h2 class="text-2xl font-bold text-center text-maroon font-serif mb-6 tracking-wide">RSVP</h2>

        <!-- Alert Notifikasi -->
        <div id="rsvpAlert" class="hidden mb-4 p-3 bg-emerald-100 border border-emerald-300 text-emerald-800 text-xs rounded-xl font-semibold text-center shadow-sm">
            Ucapan berhasil dikirim!
        </div>

        <!-- Form Input Ucapan -->
        <form id="rsvpFormSubmit" onsubmit="sendRsvpAjax(event)" class="space-y-4">
            @csrf
            <div>
                <label class="block text-xs font-semibold text-gray-700 mb-1">Nama</label>
                <input 
                    type="text" 
                    id="inputNama"
                    name="nama" 
                    value="{{ $namaTamu !== 'Tamu Undangan' ? $namaTamu : '' }}" 
                    required 
                    placeholder="Nama" 
                    class="w-full px-3.5 py-2.5 text-sm bg-gray-50/50 border border-gray-300 rounded-xl focus:outline-none focus:ring-1 focus:ring-maroon focus:bg-white transition"
                >
            </div>

            <div>
                <label class="block text-xs font-semibold text-gray-700 mb-1">Kehadiran</label>
                <select id="inputKehadiran" name="kehadiran" required class="w-full px-3.5 py-2.5 text-sm bg-gray-50/50 border border-gray-300 rounded-xl focus:outline-none focus:ring-1 focus:ring-maroon focus:bg-white transition">
                    <option value="" disabled selected>Pilih Kehadiran</option>
                    <option value="Hadir">Hadir</option>
                    <option value="Tidak Hadir">Tidak Hadir</option>
                </select>
            </div>

            <div>
                <label class="block text-xs font-semibold text-gray-700 mb-1">Komentar atau Ucapan</label>
                <textarea id="inputUcapan" name="ucapan" rows="3" required placeholder="Tuliskan pesan atau ucapan selamat..." class="w-full px-3.5 py-2.5 text-sm bg-gray-50/50 border border-gray-300 rounded-xl focus:outline-none focus:ring-1 focus:ring-maroon focus:bg-white transition"></textarea>
            </div>

            <button type="submit" id="btnSubmitRsvp" class="w-full bg-maroon text-white font-semibold py-3 rounded-full shadow-md hover:bg-red-900 transition text-sm cursor-pointer hover:scale-[1.02] active:scale-95 duration-200">
                Kirim Ucapan
            </button>
        </form>

        <hr class="my-6 border-gray-200/80">

        <!-- List Ucapan dari Database -->
        <div id="listUcapanBox" class="space-y-3 max-h-60 overflow-y-auto pr-1 no-scrollbar">
           @forelse($ucapans ?? [] as $item)
                <div class="p-3.5 bg-gray-50/80 border border-gray-200/80 rounded-2xl shadow-sm">
                    <div class="flex items-center gap-2 mb-1.5">
                        <div class="w-7 h-7 rounded-full bg-maroon text-white text-xs font-bold flex items-center justify-center uppercase shadow-sm">
                            {{ substr($item->nama, 0, 2) }}
                        </div>
                        <span class="font-bold text-xs text-gray-800">{{ $item->nama }}</span>
                        
                        <!-- BADGE WARNA DINAMIS -->
                        <span class="text-[10px] px-2.5 py-0.5 rounded-full font-semibold {{ $item->kehadiran === 'Hadir' ? 'bg-emerald-100 text-emerald-800' : 'bg-rose-100 text-rose-800' }}">
                            {{ $item->kehadiran }}
                        </span>
                    </div>
                    <p class="text-xs text-gray-700 pl-9 mb-1 leading-relaxed">{{ $item->ucapan }}</p>
                    <span class="text-[10px] text-gray-400 pl-9 block">
                        {{ $item->created_at->format('d F Y \a\t H.i') }}
                    </span>
                </div>
            @empty
                <p id="emptyUcapanText" class="text-center text-xs text-gray-500 py-2">Belum ada ucapan.</p>
            @endforelse
        </div>

    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Target tanggal fixed: 10 Oktober 2026 jam 08:00:00 WIB
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

    // FUNGSI KIRIM UCAPAN VIA AJAX
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

            // Tampilkan Alert
            const alertBox = document.getElementById('rsvpAlert');
            if (alertBox) {
                alertBox.classList.remove('hidden');
                setTimeout(() => alertBox.classList.add('hidden'), 3000);
            }

            // Ambil data inputan
            const nama = document.getElementById('inputNama').value;
            const kehadiran = document.getElementById('inputKehadiran').value;
            const ucapan = document.getElementById('inputUcapan').value;

            // Hapus teks 'Belum ada ucapan' jika ada
            const emptyText = document.getElementById('emptyUcapanText');
            if (emptyText) emptyText.remove();

            // LOGIKA WARNA BADGE (Hadir = Hijau Emerald, Tidak Hadir = Merah Rose)
            const badgeColorClass = kehadiran === 'Hadir' 
                ? 'bg-emerald-100 text-emerald-800' 
                : 'bg-rose-100 text-rose-800';

            const listContainer = document.getElementById('listUcapanBox');
            const newCard = `
                <div class="p-3.5 bg-gray-50/80 border border-gray-200/80 rounded-2xl shadow-sm">
                    <div class="flex items-center gap-2 mb-1.5">
                        <div class="w-7 h-7 rounded-full bg-maroon text-white text-xs font-bold flex items-center justify-center uppercase shadow-sm">
                            ${nama.substring(0, 2)}
                        </div>
                        <span class="font-bold text-xs text-gray-800">${nama}</span>
                        <span class="text-[10px] px-2.5 py-0.5 rounded-full font-semibold ${badgeColorClass}">
                            ${kehadiran}
                        </span>
                    </div>
                    <p class="text-xs text-gray-700 pl-9 mb-1 leading-relaxed">${ucapan}</p>
                    <span class="text-[10px] text-gray-400 pl-9 block">Baru saja</span>
                </div>
            `;

            listContainer.insertAdjacentHTML('afterbegin', newCard);

            // Reset input ucapan
            document.getElementById('inputUcapan').value = '';
        })
        .catch(err => {
            btn.disabled = false;
            btn.innerText = 'Kirim Ucapan';
            alert('Gagal mengirim, coba lagi bray!');
        });
    }

    function openRsvpModal() {
        const modal = document.getElementById('rsvpModal');
        if (modal) modal.classList.remove('hidden');
    }

    function closeRsvpModal() {
        const modal = document.getElementById('rsvpModal');
        if (modal) modal.classList.add('hidden');
    }
</script>