<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Find Your New Best Friend') }}
        </h2>
    </x-slot>

    <div class="bg-gray-100 py-10 px-4">
        <h2 class="text-center text-2xl md:text-3xl font-semibold text-purple-700 mb-8">
            Pets Available for Adoption
            <span class="inline-block ml-2 text-purple-500">➤</span>
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 max-w-7xl mx-auto">
            @foreach ($posts as $post)
                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    <div class="relative">
                        @forelse ($post->postImages as $media)
                            @if ($media->is_image && preg_match('/\.(png|jpg|jpeg|gif)$/i', $media->path))
                                <img src="{{ url('/storage/' . $media->path) }}"
                                     alt="{{ $post->description ?? 'Post Image' }}"
                                     class="w-full h-80 object-cover rounded-t-xl"
                                     oncontextmenu="return false;">
                            @elseif (!$media->is_image && preg_match('/\.(mp4|3gp)$/i', $media->path))
                                <video controls playsinline oncontextmenu="return false;"
                                       controlsList="nodownload"
                                       class="w-full h-80 object-cover rounded-t-xl">
                                    <source src="{{ url('/storage/' . $media->path) }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            @endif
                        @empty
                            <div class="w-full h-80 flex items-center justify-center bg-gray-200 text-gray-500">
                                No media available
                            </div>
                        @endforelse

                        <button class="absolute top-2 right-2 bg-white rounded-full p-2 shadow hover:scale-105 transition">
                            ❤️
                        </button>
                    </div>

                    <div class="p-4 text-center font-medium text-purple-700">
                        {{ $post->description }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
