<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Animal Profile
        </h2>
    </x-slot>

    <div class="max-w-5xl mx-auto p-6 bg-white rounded-lg shadow mt-6">
        <div class="flex flex-col md:flex-row gap-6">
            <!-- Full Image -->
            <div class="md:w-1/2 w-full">
                <img 
                    src="{{ asset('storage/' . $animal_media->path) }}" 
                    alt="Animal Image" 
                    class="rounded-lg shadow-md object-cover w-full h-96"
                >
            </div>

            <!-- Animal Details -->
            <div class="md:w-1/2 w-full flex flex-col justify-center space-y-3">
                <h3 class="text-3xl font-bold text-gray-800">{{ $animal->animal_type }}</h3>
                <p class="text-base text-gray-600"><span class="font-semibold">Age:</span> {{ $animal->animal_age }}</p>
                <p class="text-base text-gray-600"><span class="font-semibold">Condition:</span> {{ $animal->animal_condition }}</p>
                <p class="text-base text-gray-600"><span class="font-semibold">Animal Count:</span> {{ $animal->animal_number }}</p>
                <p class="text-base text-gray-600"><span class="font-semibold">Upazila:</span> {{ $animal->upazila }}</p>

                @if ($animal->adoption === 'Fit')
                    <p class="text-green-600 font-semibold">✅ Available for Adoption</p>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
