<div class="bg-gray-900 text-white rounded-lg overflow-hidden shadow hover:shadow-lg transition">
    <img src="{{ asset($image) }}" alt="{{ $title }}" class="w-full h-48 object-cover">

    <div class="p-4">
        <span class="text-sm text-yellow-400 font-bold uppercase">Berita</span>
        <h2 class="text-lg font-semibold mt-1 mb-2">{{ $title }}</h2>

        <div class="text-xs text-gray-400 mb-2">
            <span>👤 {{ $author }}</span> • <span>📅 {{ $date }}</span>
        </div>

        <p class="text-sm text-gray-300 mb-3">{{ $excerpt }}</p>

        <a href="{{ $link }}" class="text-blue-400 text-sm hover:underline">VISIT PROFILE →</a>
    </div>
</div>
