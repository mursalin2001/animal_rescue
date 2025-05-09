<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Rescue Assignments') }}
        </h2>
    </x-slot>


    @foreach ($assignments as $aa)
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Add New Assignment Button -->
            {{-- <div class="mb-6 text-right">
                <a href="{{ route('admin.assignments') }}"
                   class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                    + New Assignment
                </a>
            </div> --}}

            <!-- Assignment Cards Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                <!-- Example Assignment Card -->
                <div class="bg-white shadow rounded-lg p-4 border-l-4 border-green-500">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">{{$aa->animal_type}}</h3>
                    <span class="inline-block text-xs bg-yellow-200 text-yellow-800 px-2 py-1 rounded mb-2">Pending</span>
                    <p class="text-sm text-gray-600 mb-3">
                        {{$aa->description}}
                    </p>
                    <p class="text-sm text-gray-600 mb-3">
                        {{$aa->upazila}}
                    </p>
                    <a href="#" class="text-green-600 text-sm hover:underline">View Details</a>
                </div>

                <!-- Add more assignment cards as needed -->
            </div>
        </div>
    </div>
        
    @endforeach


    
</x-app-layout>
