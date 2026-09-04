<div class="relative z-10 w-full px-3 py-4 pb-8 text-center flex flex-col items-center">
    
    <!-- BOTANICAL HEADER SVG -->
    <div class="w-full flex justify-center mb-1">
        <img src="/images/botanical-header.svg" alt="Botanical Ornament" class="w-44 h-auto opacity-70">
    </div>
    
    <h2 class="text-2xl sm:text-3xl font-bold text-maroon mb-5 font-serif-luxury tracking-wide">
        Galeri Foto Mempelai
    </h2>

    <!-- GRID FOTO AESTHETIC WITH CLEAN MATTE BORDERS -->
    <div class="grid grid-cols-2 gap-2.5 w-full max-w-sm mx-auto">
        
        <!-- Foto 1 (Baris 1 - Kiri) -->
        <div class="overflow-hidden rounded-2xl shadow-sm bg-white p-1 border border-gold/30 cursor-pointer group" onclick="openModal('/images/gallery-1.jpg')">
            <div class="overflow-hidden rounded-xl">
                <img src="/images/gallery-1.jpg" alt="Gallery 1" class="w-full h-44 object-cover group-hover:scale-105 transition duration-300">
            </div>
        </div>

        <!-- Foto 2 (Baris 1 - Kanan) -->
        <div class="overflow-hidden rounded-2xl shadow-sm bg-white p-1 border border-gold/30 cursor-pointer group" onclick="openModal('/images/gallery-2.jpg')">
            <div class="overflow-hidden rounded-xl">
                <img src="/images/gallery-2.jpg" alt="Gallery 2" class="w-full h-44 object-cover group-hover:scale-105 transition duration-300">
            </div>
        </div>

        <!-- Foto 3 (Baris 2 - Full Wide / Highlight) -->
        <div class="col-span-2 overflow-hidden rounded-2xl shadow-sm bg-white p-1 border border-gold/30 cursor-pointer group" onclick="openModal('/images/gallery-3.jpg')">
            <div class="overflow-hidden rounded-xl">
                <img src="/images/gallery-3.jpg" alt="Gallery 3" class="w-full h-52 object-cover group-hover:scale-105 transition duration-300">
            </div>
        </div>

        <!-- Foto 4 (Baris 3 - Kiri) -->
        <div class="overflow-hidden rounded-2xl shadow-sm bg-white p-1 border border-gold/30 cursor-pointer group" onclick="openModal('/images/gallery-4.jpg')">
            <div class="overflow-hidden rounded-xl">
                <img src="/images/gallery-4.jpg" alt="Gallery 4" class="w-full h-40 object-cover group-hover:scale-105 transition duration-300">
            </div>
        </div>

        <!-- Foto 5 (Baris 3 - Kanan) -->
        <div class="overflow-hidden rounded-2xl shadow-sm bg-white p-1 border border-gold/30 cursor-pointer group" onclick="openModal('/images/gallery-5.jpg')">
            <div class="overflow-hidden rounded-xl">
                <img src="/images/gallery-5.jpg" alt="Gallery 5" class="w-full h-40 object-cover group-hover:scale-105 transition duration-300">
            </div>
        </div>

        <!-- Foto 6 (Baris 4 - Full Wide / Highlight) -->
        <div class="col-span-2 overflow-hidden rounded-2xl shadow-sm bg-white p-1 border border-gold/30 cursor-pointer group" onclick="openModal('/images/gallery-6.jpg')">
            <div class="overflow-hidden rounded-xl">
                <img src="/images/gallery-6.jpg" alt="Gallery 6" class="w-full h-56 object-cover group-hover:scale-105 transition duration-300">
            </div>
        </div>

    </div>

    <!-- MODAL POP-UP FOTO -->
    <div id="imageModal" class="fixed inset-0 bg-black/85 z-[100] hidden flex items-center justify-center p-4 backdrop-blur-md" onclick="closeModal()">
        <div class="relative max-w-md w-full flex flex-col items-center" onclick="event.stopPropagation()">
            <button onclick="closeModal()" class="self-end mb-2 w-8 h-8 rounded-full bg-white/20 hover:bg-white/40 text-white text-xl flex items-center justify-center backdrop-blur-sm transition cursor-pointer">
                &times;
            </button>
            <div class="p-1.5 bg-white rounded-2xl shadow-2xl border border-gold/40 w-full">
                <img id="modalImg" src="" class="w-full max-h-[72vh] object-contain rounded-xl">
            </div>
        </div>
    </div>

</div>

<!-- Script Modal Foto -->
<script>
    function openModal(imageSrc) {
        const modal = document.getElementById('imageModal');
        const img = document.getElementById('modalImg');
        if (img && modal) {
            img.src = imageSrc;
            modal.classList.remove('hidden');
            const box = modal.querySelector('.relative');
            if (box) {
                box.classList.remove('modal-content-animate');
                void box.offsetWidth;
                box.classList.add('modal-content-animate');
            }
        }
    }

    function closeModal() {
        const modal = document.getElementById('imageModal');
        if (modal) {
            modal.classList.add('hidden');
        }
    }
</script>