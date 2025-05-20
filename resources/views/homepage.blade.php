@extends('layouts.app')

@section('content')
<div class="p-6 bg-gray-950 min-h-screen">
    <h1 class="text-3xl font-bold text-white mb-6">Berita Terkini</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($posts as $post)
            <x-post-card 
                :image="$post['image']"
                :title="$post['title']"
                :author="$post['author']"
                :date="$post['date']"
                :excerpt="$post['excerpt']"
                :link="$post['link']"
            />
        @endforeach
    </div>

    <div class="mt-6 text-center">
        <button class="bg-gray-800 hover:bg-gray-700 text-white py-2 px-4 rounded shadow">
            Pos-pos lama
        </button>
    </div>
</div>
@endsection