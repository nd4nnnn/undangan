<div class="relative z-10 w-full px-6 py-10 text-center flex flex-col items-center justify-center min-h-[80vh]">
    
    <!-- Logo Monogram -->
    <div class="mb-6 border-2 border-maroon rounded-2xl p-4 w-20 h-24 flex items-center justify-center mx-auto bg-white/20 backdrop-blur-xs">
        <span class="text-3xl font-bold text-maroon font-serif">HP</span>
    </div>

    <!-- Judul -->
    <h2 class="text-2xl text-maroon font-serif uppercase tracking-widest mb-8">MENGHITUNG HARI</h2>

    <!-- Box Countdown Timer -->
    <div class="grid grid-cols-4 gap-2 w-full max-w-sm mb-10">
        <div class="bg-white/80 border border-maroon rounded-xl p-3 shadow-sm">
            <span id="cd-days" class="block text-2xl font-bold text-maroon font-serif">00</span>
            <span class="text-xs text-maroon">Hari</span>
        </div>
        <div class="bg-white/80 border border-maroon rounded-xl p-3 shadow-sm">
            <span id="cd-hours" class="block text-2xl font-bold text-maroon font-serif">00</span>
            <span class="text-xs text-maroon">Jam</span>
        </div>
        <div class="bg-white/80 border border-maroon rounded-xl p-3 shadow-sm">
            <span id="cd-minutes" class="block text-2xl font-bold text-maroon font-serif">00</span>
            <span class="text-xs text-maroon">Menit</span>
        </div>
        <div class="bg-white/80 border border-maroon rounded-xl p-3 shadow-sm">
            <span id="cd-seconds" class="block text-2xl font-bold text-maroon font-serif">00</span>
            <span class="text-xs text-maroon">Detik</span>
        </div>
    </div>

    <!-- Subteks -->
    <p class="text-sm text-maroon mb-6 leading-relaxed">
        Kirim ucapan untuk mempelai<br>dan konfirmasi kehadiran
    </p>

    <!-- Tombol Buat Buka Pop-up Form RSVP -->
    <button type="button" onclick="openRsvpModal()" class="bg-maroon text-white px-8 py-3 rounded-full shadow-lg hover:bg-red-900 transition font-semibold text-sm cursor-pointer">
        Kirim Ucapan RSVP
    </button>

</div>

<!-- MODAL POP-UP RSVP FORM -->
<div id="rsvpModal" class="fixed inset-0 bg-black/70 z-[100] hidden flex items-center justify-center p-4 backdrop-blur-sm">
    <div class="relative w-full max-w-md bg-white rounded-2xl shadow-2xl p-6 text-left max-h-[85vh] overflow-y-auto">
        
        <!-- Tombol Close (X) -->
        <button type="button" onclick="closeRsvpModal()" class="absolute top-4 right-4 text-gray-400 hover:text-gray-700 text-2xl font-bold cursor-pointer">&times;</button>

        <h2 class="text-2xl font-bold text-center text-maroon font-serif mb-6">RSVP</h2>

        <!-- Alert Notifikasi -->
        <div id="rsvpAlert" class="hidden mb-4 p-3 bg-emerald-100 border border-emerald-300 text-emerald-800 text-xs rounded-xl font-semibold text-center">
            Ucapan berhasil dikirim!
        </div>

        <!-- Form Input Ucapan (Pake e.preventDefault() via JS) -->
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
                    class="w-full px-3 py-2 text-sm border border-gray-300 rounded-lg focus:outline-none focus:ring-1 focus:ring-maroon"
                >
            </div>

            <div>
                <label class="block text-xs font-semibold text-gray-700 mb-1">Kehadiran</label>
                <select id="inputKehadiran" name="kehadiran" required class="w-full px-3 py-2 text-sm border border-gray-300 rounded-lg focus:outline-none focus:ring-1 focus:ring-maroon">
                    <option value="" disabled selected>Kehadiran</option>
                    <option value="Hadir">Hadir</option>
                    <option value="Tidak Hadir">Tidak Hadir</option>
                </select>
            </div>

            <div>
                <label class="block text-xs font-semibold text-gray-700 mb-1">Komentar atau Ucapan</label>
                <textarea id="inputUcapan" name="ucapan" rows="3" required placeholder="Komentar atau Ucapan" class="w-full px-3 py-2 text-sm border border-gray-300 rounded-lg focus:outline-none focus:ring-1 focus:ring-maroon"></textarea>
            </div>

            <button type="submit" id="btnSubmitRsvp" class="w-full bg-maroon text-white font-semibold py-2.5 rounded-full shadow hover:bg-red-900 transition text-sm cursor-pointer">
                Kirim
            </button>
        </form>

        <hr class="my-6 border-gray-200">

        <!-- List Ucapan dari Database -->
        <div id="listUcapanBox" class="space-y-3 max-h-60 overflow-y-auto pr-1 no-scrollbar">
            @forelse($ucapans ?? [] as $item)
                <div class="p-3 bg-gray-50 border border-gray-200 rounded-xl">
                    <div class="flex items-center gap-2 mb-1">
                        <div class="w-7 h-7 rounded-full bg-maroon text-white text-xs font-bold flex items-center justify-center uppercase">
                            {{ substr($item->nama, 0, 2) }}
                        </div>
                        <span class="font-bold text-xs text-gray-800">{{ $item->nama }}</span>
                        <span class="text-[10px] px-2 py-0.5 rounded-full bg-teal-100 text-teal-800 font-semibold">
                            {{ $item->kehadiran }}
                        </span>
                    </div>
                    <p class="text-xs text-gray-700 pl-9 mb-1">{{ $item->ucapan }}</p>
                    <span class="text-[10px] text-gray-400 pl-9 block">
                        {{ $item->created_at->format('d F Y \a\t H.i') }}
                    </span>
                </div>
            @empty
                <p id="emptyUcapanText" class="text-center text-xs text-gray-500">Belum ada ucapan.</p>
            @endforelse
        </div>

    </div>
</div>

<!-- SCRIPT JS AJAX & COUNTDOWN -->
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

    // FUNGSI KIRIM UCAPAN TANPA REFRESH
    function sendRsvpAjax(e) {
        e.preventDefault(); // Nahan browser biar gak reload / gak pindah halaman

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
            btn.innerText = 'Kirim';

            // Tampilkan Notifikasi Sukses
            const alertBox = document.getElementById('rsvpAlert');
            alertBox.classList.remove('hidden');
            setTimeout(() => alertBox.classList.add('hidden'), 3000);

            // Ambil data input buat langsung diselipin ke daftar ucapan
            const nama = document.getElementById('inputNama').value;
            const kehadiran = document.getElementById('inputKehadiran').value;
            const ucapan = document.getElementById('inputUcapan').value;

            const emptyText = document.getElementById('emptyUcapanText');
            if (emptyText) emptyText.remove();

            const listContainer = document.getElementById('listUcapanBox');
            const newCard = `
                <div class="p-3 bg-gray-50 border border-gray-200 rounded-xl">
                    <div class="flex items-center gap-2 mb-1">
                        <div class="w-7 h-7 rounded-full bg-maroon text-white text-xs font-bold flex items-center justify-center uppercase">
                            ${nama.substring(0, 2)}
                        </div>
                        <span class="font-bold text-xs text-gray-800">${nama}</span>
                        <span class="text-[10px] px-2 py-0.5 rounded-full bg-teal-100 text-teal-800 font-semibold">
                            ${kehadiran}
                        </span>
                    </div>
                    <p class="text-xs text-gray-700 pl-9 mb-1">${ucapan}</p>
                    <span class="text-[10px] text-gray-400 pl-9 block">Baru saja</span>
                </div>
            `;

            listContainer.insertAdjacentHTML('afterbegin', newCard);

            // Bersihkan inputan ucapan
            document.getElementById('inputUcapan').value = '';
        })
        .catch(err => {
            btn.disabled = false;
            btn.innerText = 'Kirim';
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