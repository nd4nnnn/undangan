<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generator Link Undangan - Herni & Panji</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Plus+Jakarta+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .font-serif-custom { font-family: 'Playfair Display', serif; }
        .bg-slate-blue { background-color: #628395; }
        .bg-slate-blue-dark { background-color: #4D6A7A; }
        .text-slate-blue { color: #628395; }
        .text-slate-blue-dark { color: #3A5260; }
        .border-slate-blue { border-color: #92AAB6; }
    </style>
</head>
<body class="bg-[#DDE5EB] min-h-screen p-4 md:p-8 text-[#4A5568]">

    <div class="max-w-4xl mx-auto">
        <!-- Header Section -->
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-slate-blue-dark font-serif-custom mb-1">Generator Link Undangan</h1>
            <p class="text-sm text-slate-blue font-medium">The Wedding of Herni & Panji</p>
        </div>

        <!-- Form Input -->
        <div class="bg-white rounded-2xl p-6 shadow-lg border border-[#D2DCE4] mb-8">
            <form action="{{ route('admin.generate.process') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="block text-sm font-semibold text-slate-blue-dark mb-2">
                        Masukkan Daftar Nama Tamu (1 Nama Per Baris):
                    </label>
                    <textarea 
                        name="daftar_nama" 
                        rows="5" 
                        placeholder="Contoh:&#10;Pak Yanto & Bu Mia&#10;Budi Santoso&#10;Siti Rahma" 
                        class="w-full p-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#628395] text-sm"
                        required
                    >{{ old('daftar_nama') }}</textarea>
                </div>
                <button type="submit" class="bg-slate-blue text-white px-6 py-2.5 rounded-full font-semibold shadow-md hover:bg-slate-blue-dark transition w-full md:w-auto">
                    Generate Link & Pesan WA
                </button>
            </form>
        </div>

        <!-- Hasil Generate -->
        @if(session('results'))
        <div class="space-y-4">
            <h2 class="text-xl font-bold text-slate-blue-dark font-serif-custom mb-4">Hasil Generate ({{ count(session('results')) }} Tamu)</h2>
            
            @foreach(session('results') as $index => $item)
            <div class="bg-white rounded-xl p-5 shadow-md border border-[#D2DCE4] flex flex-col md:flex-row md:items-center justify-between gap-4">
                <div class="flex-1">
                    <h3 class="font-bold text-slate-blue-dark text-lg">{{ $item['nama'] }}</h3>
                    <p class="text-xs text-slate-blue break-all mt-1">{{ $item['link'] }}</p>
                </div>
                
                <div class="flex items-center gap-2 shrink-0">
                    <!-- Textarea tersembunyi untuk copy pesan WA -->
                    <textarea id="pesan-{{ $index }}" class="hidden">{{ $item['pesan'] }}</textarea>
                    
                    <button 
                        onclick="copyToClipboard('pesan-{{ $index }}', this)" 
                        class="bg-[#628395] text-white text-xs px-4 py-2 rounded-lg hover:bg-[#4D6A7A] transition flex items-center gap-1 shadow-sm"
                    >
                        <span>Copy Pesan WA</span>
                    </button>
                </div>
            </div>
            @endforeach
        </div>
        @endif
    </div>

    <!-- Script Clipboard -->
    <script>
        function copyToClipboard(elementId, btn) {
            const text = document.getElementById(elementId).value;
            navigator.clipboard.writeText(text).then(() => {
                const originalText = btn.innerText;
                btn.innerText = 'Tercopy! ✓';
                btn.classList.remove('bg-[#628395]');
                btn.classList.add('bg-emerald-600');
                
                setTimeout(() => {
                    btn.innerText = originalText;
                    btn.classList.remove('bg-emerald-600');
                    btn.classList.add('bg-[#628395]');
                }, 2000);
            });
        }
    </script>
</body>
</html>