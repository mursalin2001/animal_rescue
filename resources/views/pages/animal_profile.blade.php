<x-app-layout>

    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Animal Profile
        </h2>
    </x-slot>

    <div class="max-w-4xl px-4 py-6 mx-auto bg-white rounded-lg shadow">
        <div class="flex flex-col md:flex-row gap-6">
            <div class="relative shadow mx-auto h-24 w-24 -my-12 border-white rounded-full overflow-hidden border-4">
                <img class="object-cover w-full h-full" src="{{ asset('storage/' . $animal_media->path) }}">
            </div>
            <div class="md:w-2/3">
                <h3 class="text-2xl font-bold text-gray-800">{{ $animal->animal_type }}</h3>
                <p class="text-sm text-gray-500">Age: {{ $animal->animal_age }}</p>
                <p class="text-sm text-gray-500">Condition: {{ $animal->animal_condition }}</p>
                <p class="text-sm text-gray-500">Animal Count: {{ $animal->animal_number }}</p>
                <p class="text-sm text-gray-500">Upazila: {{ $animal->upazila }}</p>
                @if ($animal->adoption === 'Fit')
                    <p>Joy Bangla</p>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
