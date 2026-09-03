<div class="relative z-10 w-full px-6 py-10 text-center">
    <h2 class="text-3xl font-bold text-maroon mb-6 font-serif">Wedding Gift</h2>
    <p class="text-sm text-maroon mb-8">Terima kasih telah menambah semangat kegembiraan pernikahan kami dengan kehadiran dan hadiah indah Anda.</p>

    <!-- Card Bank 1 -->
    <div class="bg-gradient-to-br from-gray-100 to-gray-300 rounded-xl p-6 shadow-md text-left mb-6 relative overflow-hidden">
        <p class="text-xs text-gray-600 mb-2">BANK BCA</p>
        <div class="w-12 h-8 bg-yellow-400 rounded flex mb-4"></div> <!-- Chip mockup -->
        <p class="text-xl font-bold tracking-widest text-gray-800 mb-2">-</p>
        <button class="bg-maroon text-white text-xs px-3 py-1 rounded mb-4">Salin Rekening</button>
        <p class="text-sm text-gray-700">Herni</p>
        <img src="/images/bca-logo.png" alt="BCA" class="absolute top-4 right-4 w-16">
    </div>

    <!-- Card Bank 2 -->
    <div class="bg-gradient-to-br from-gray-100 to-gray-300 rounded-xl p-6 shadow-md text-left mb-8 relative overflow-hidden">
        <p class="text-xs text-gray-600 mb-2">BANK BNI</p>
        <div class="w-12 h-8 bg-yellow-400 rounded flex mb-4"></div> <!-- Chip mockup -->
        <p class="text-xl font-bold tracking-widest text-gray-800 mb-2">-</p>
        <button class="bg-maroon text-white text-xs px-3 py-1 rounded mb-4">Salin Rekening</button>
        <p class="text-sm text-gray-700">Panji</p>
        <img src="/images/bni-logo.png" alt="BNI" class="absolute top-4 right-4 w-16">
    </div>

    <!-- Tombol Pemicu Pop-Up -->
    <button type="button" 
        onclick="toggleModalGift(true)"
        class="inline-block bg-maroon text-white px-8 py-3 rounded-full shadow-lg hover:bg-red-900 transition font-bold text-center">
        Konfirmasi Bukti Trf
    </button>
</div>

<!-- ========================================== -->
<!-- MODAL POP-UP PILIHAN WHATSAPP              -->
<!-- ========================================== -->
<div id="modalGift" class="fixed inset-0 bg-black/60 backdrop-blur-sm z-50 flex items-center justify-center p-4 hidden">
    <div class="bg-white rounded-2xl max-w-xs w-full p-6 text-center shadow-2xl relative animate-fade-in">
        
        <!-- Tombol Close (X) -->
        <button onclick="toggleModalGift(false)" class="absolute top-3 right-3 text-gray-400 hover:text-gray-700 text-lg font-bold">
            ✕
        </button>

        <h3 class="text-lg font-bold text-maroon mb-2 font-serif">Konfirmasi Transfer</h3>
        <p class="text-xs text-gray-600 mb-6">Pilih tujuan WhatsApp untuk mengirimkan bukti transfer:</p>

        <!-- Pilihan WhatsApp Herni -->
        <a href="https://wa.me/6283849149351?text=Halo%20Herni,%20saya%20ingin%20konfirmasi%20bukti%20transfer%20hadiah%20pernikahan." 
           target="_blank" 
           rel="noopener noreferrer"
           class="flex items-center justify-center gap-2 bg-emerald-600 text-white w-full py-2.5 rounded-xl text-xs font-semibold mb-3 hover:bg-emerald-700 transition shadow">
            <span>WA Mempelai Wanita (Herni)</span>
        </a>

        <!-- Pilihan WhatsApp Panji -->
        <a href="https://wa.me/628xxxxxxxxxx?text=Halo%20Panji,%20saya%20ingin%20konfirmasi%20bukti%20transfer%20hadiah%20pernikahan." 
           target="_blank" 
           rel="noopener noreferrer"
           class="flex items-center justify-center gap-2 bg-emerald-600 text-white w-full py-2.5 rounded-xl text-xs font-semibold hover:bg-emerald-700 transition shadow">
            <span>WA Mempelai Pria (Panji)</span>
        </a>
    </div>
</div>

<!-- Script Toggle Pop-Up -->
<script>
    function toggleModalGift(show) {
        const modal = document.getElementById('modalGift');
        if (show) {
            modal.classList.remove('hidden');
        } else {
            modal.classList.add('hidden');
        }
    }
</script>