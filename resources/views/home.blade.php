<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="flex h-screen">
        <!-- Sidebar (20%) -->
        <div class="w-[25%] bg-gray-900 p-6 flex flex-col space-y-4">
            <a href="{{ route('home') }}"
               class="w-full text-center bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-bold py-2 px-4 rounded-xl transition duration-300">
                Pending
            </a>
            <a href="{{ route('volunteer.store') }}"
               class="w-full text-center bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-xl transition duration-300">
                Ongoing
            </a>
            <a href="{{ route('volunteer.store') }}"
               class="w-full text-center bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded-xl transition duration-300">
                Complete
            </a>
        </div>

        <!-- Main Content (80%) -->
        <div class="w-[75%] overflow-auto bg-white">
            <x-jet-welcome />
        </div>
    </div>
</x-app-layout>
