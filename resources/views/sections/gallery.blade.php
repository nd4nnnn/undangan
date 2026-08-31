<div class="relative z-10 w-full px-4 py-10 pb-24 text-center">
    
    <!-- Header Galeri & Ornaments -->
    <div class="w-full flex justify-center mb-4">
        <img src="/images/ornament-top.png" alt="ornament" class="w-3/4 opacity-80" onerror="this.style.display='none'">
    </div>
    <h2 class="text-3xl font-bold text-maroon mb-8 font-serif tracking-wide">Galeri Foto Mempelai</h2>

    <!-- Grid Foto Aesthetic (Masonic Layout) -->
    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 max-w-md mx-auto">
        
        <!-- Foto 1 (Baris 1 - Kiri) -->
        <div class="overflow-hidden rounded-lg shadow-md bg-white p-1 border border-amber-900/10 cursor-pointer group" onclick="openModal('/images/gallery-1.jpg')">
            <img src="/images/gallery-1.jpg" alt="Gallery 1" class="w-full h-48 object-cover rounded group-hover:scale-105 transition duration-300">
        </div>

        <!-- Foto 2 (Baris 1 - Kanan) -->
        <div class="overflow-hidden rounded-lg shadow-md bg-white p-1 border border-amber-900/10 cursor-pointer group" onclick="openModal('/images/gallery-2.jpg')">
            <img src="/images/gallery-2.jpg" alt="Gallery 2" class="w-full h-48 object-cover rounded group-hover:scale-105 transition duration-300">
        </div>

        <!-- Foto 3 (Baris 2 - Full Wide / Highlight) -->
        <div class="col-span-2 overflow-hidden rounded-lg shadow-md bg-white p-1 border border-amber-900/10 cursor-pointer group" onclick="openModal('/images/gallery-3.jpg')">
            <img src="/images/gallery-3.jpg" alt="Gallery 3" class="w-full h-56 object-cover rounded group-hover:scale-105 transition duration-300">
        </div>

        <!-- Foto 4 (Baris 3 - Kiri) -->
        <div class="overflow-hidden rounded-lg shadow-md bg-white p-1 border border-amber-900/10 cursor-pointer group" onclick="openModal('/images/gallery-4.jpg')">
            <img src="/images/gallery-4.jpg" alt="Gallery 4" class="w-full h-40 object-cover rounded group-hover:scale-105 transition duration-300">
        </div>

        <!-- Foto 5 (Baris 3 - Kanan) -->
        <div class="overflow-hidden rounded-lg shadow-md bg-white p-1 border border-amber-900/10 cursor-pointer group" onclick="openModal('/images/gallery-5.jpg')">
            <img src="/images/gallery-5.jpg" alt="Gallery 5" class="w-full h-40 object-cover rounded group-hover:scale-105 transition duration-300">
        </div>

        <!-- Foto 6 (Baris 4 - Full Wide / Highlight Monochrome) -->
        <div class="col-span-2 overflow-hidden rounded-lg shadow-md bg-white p-1 border border-amber-900/10 cursor-pointer group" onclick="openModal('/images/gallery-6.jpg')">
            <img src="/images/gallery-6.jpg" alt="Gallery 6" class="w-full h-60 object-cover rounded group-hover:scale-105 transition duration-300">
        </div>

    </div>

    <!-- Modal Pop-up Foto Pas Diklik -->
    <div id="imageModal" class="fixed inset-0 bg-black/80 z-[100] hidden flex items-center justify-center p-4 backdrop-blur-sm" onclick="closeModal()">
        <div class="relative max-w-lg w-full">
            <button class="absolute -top-10 right-0 text-white text-3xl font-bold">&times;</button>
            <img id="modalImg" src="" class="w-full h-auto rounded-lg shadow-2xl border-2 border-white/20">
        </div>
    </div>

</div>

<!-- Script Modal Foto -->
<script>
    function openModal(imageSrc) {
        document.getElementById('modalImg').src = imageSrc;
        document.getElementById('imageModal').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('imageModal').classList.add('hidden');
    }
</script>