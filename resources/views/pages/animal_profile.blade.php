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

     <!-- Volunteer Section -->
<div class="max-w-5xl mx-auto mt-10 bg-gray-50 p-6 rounded-lg shadow">
    <h3 class="text-2xl font-bold text-gray-800 mb-4">Available Volunteers</h3>
    
    @php $matched = 0; @endphp

    @if($volunteers->count())
    <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach($volunteers as $volunteer)
            @if(trim(strtolower($animal->upazila)) === trim(strtolower($volunteer->address)))
                @php $matched++; @endphp
                <li class="bg-white p-4 rounded-lg shadow hover:shadow-md transition">
                    <h4 class="text-lg font-semibold text-gray-700">{{ $volunteer->name }}</h4>
                    <p class="text-sm text-gray-600">📧 {{ $volunteer->email }}</p>
                    @if($volunteer->phone)
                        <p class="text-sm text-gray-600">📞 {{ $volunteer->phone }}</p>
                    @endif
                </li>
            @endif
        @endforeach
    </ul>

    @if($matched === 0)
        <p class="text-gray-600 mt-4">No volunteers found in {{ $animal->upazila }}.</p>
    @endif

    @else
        <p class="text-gray-600">No volunteers available.</p>
    @endif
</div>


    </div>
</x-app-layout>
