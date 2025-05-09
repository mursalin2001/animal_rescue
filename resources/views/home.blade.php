<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-center items-center h-24 space-x-4">
            <a href="{{ route('home') }}"
               class="bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-2 px-4 rounded-xl transition duration-300">
                Pending
            </a>
            <a href="{{ route('volunteer.store') }}"
               class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-xl transition duration-300">
                Ongoing
            </a>
            <a href="{{ route('volunteer.store') }}"
               class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded-xl transition duration-300">
                Complete
            </a>
        </div>
    </x-slot>
    
    <x-jet-welcome />
</x-app-layout>
