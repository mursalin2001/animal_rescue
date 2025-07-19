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

    <div class="flex flex-row">
        <div class="w-4/5 p-6 m-3 space-y-10">

            {{-- Pending Assignments --}}
            <div>
                <p class="text-xl font-bold text-yellow-600 mb-4">⏳ Pending Assignments</p>
                @php $hasPending = false; @endphp
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    @foreach ($assignments as $post)
                        @if ($post->status == 'Pending')
                            @php $hasPending = true; @endphp
                            @include('admin.assignment_card', ['post' => $post])
                        @endif
                    @endforeach

                    @if (!$hasPending)
                        <div class="col-span-full font-bold text-gray-500 text-center">
                            No pending assignments.
                        </div>
                    @endif
                </div>
            </div>


            {{-- Ongoing Assignments --}}
            <div>
                <p class="text-xl font-bold text-blue-600 mb-4">🚑 Ongoing Assignments</p>
                @php $hasOngoing = false; @endphp
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    @foreach ($assignments as $post)
                        @if ($post->status == 'Ongoing')
                            @php $hasOngoing = true; @endphp
                            @include('admin.assignment_card', ['post' => $post])
                        @endif
                    @endforeach

                    @if (!$hasOngoing)
                        <div class="col-span-full text-gray-500 font-bold text-center">
                            No ongoing assignments.
                        </div>
                    @endif
                </div>
            </div>


            {{-- Completed Assignments --}}
            <div>
                <p class="text-xl font-bold text-green-600 mb-4">✅ Completed Assignments</p>
                @php $hasComplete = false; @endphp
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    @foreach ($assignments as $post)
                        @if ($post->status == 'Complete')
                            @php $hasComplete = true; @endphp
                            @include('admin.assignment_card', ['post' => $post])
                        @endif
                    @endforeach

                    @if (!$hasComplete)
                        <div class="col-span-full font-bold text-gray-500 text-center">
                            No completed assignments.
                        </div>
                    @endif
                </div>
            </div>

        </div>


        @if (Auth::user()->role_id == 3)
            <div class="w-full md:w-1/5 bg-white shadow rounded-xl m-3 p-4 border border-gray-200">
                <h3 class="text-lg font-semibold text-gray-800 border-b pb-2 mb-4 flex items-center justify-between">
                    <span class="text-red-600">🧑‍🤝‍🧑 Volunteer Requests</span>
                </h3>

                <div class="space-y-3 max-h-[600px] overflow-y-auto">
                    @php $has_volunteers = false; @endphp

                    @foreach ($user_data as $user)
                        @if ($user->role_id == 1)
                            @php $has_volunteers = true; @endphp
                            <a href="{{ route('users.edit', ['user' => $user->id]) }}"
                                class="flex items-center justify-between bg-green-50 hover:bg-green-100 border border-green-200 p-3 rounded-lg transition duration-200 shadow-sm">
                                <div>
                                    <p class="text-sm font-medium text-gray-800">{{ $user->name }}</p>
                                    <p class="text-xs text-gray-500">View Profile</p>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-green-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        @endif
                    @endforeach

                    @if (!$has_volunteers)
                        <p class="text-sm text-gray-500">No volunteer requests at the moment.</p>
                    @endif
                </div>
            </div>
        @endif




</x-app-layout>
