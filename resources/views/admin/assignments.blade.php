<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Rescue Assignments') }}
        </h2>
    </x-slot>

    @if (session('success'))
        <div class="bg-green-100 text-green-800 px-4 py-2 rounded mb-4 mx-6">
            {{ session('success') }}
        </div>
    @endif

    <div class="p-6 m-3 space-y-10">

        {{-- Pending Assignments --}}
        <div>
            <p class="text-xl font-bold text-yellow-600 mb-4">⏳ Pending Assignments</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach ($assignments as $aa)
                    @if ($aa->status == 'Pending')
                        @include('admin.assignment_card', ['aa' => $aa])
                    @endif
                @endforeach
            </div>
        </div>

        {{-- Ongoing Assignments --}}
        <div>
            <p class="text-xl font-bold text-blue-600 mb-4">🚑 Ongoing Assignments</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach ($assignments as $aa)
                    @if ($aa->status == 'Ongoing')
                        @include('admin.assignment_card', ['aa' => $aa])
                    @endif
                @endforeach
            </div>
        </div>

        {{-- Completed Assignments --}}
        <div>
            <p class="text-xl font-bold text-green-600 mb-4">✅ Completed Assignments</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach ($assignments as $aa)
                    @if ($aa->status == 'Complete')
                        @include('admin.assignment_card', ['aa' => $aa])
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
