<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Volunteer Application') }}
        </h2>
    </x-slot>

    <div
        class="flex justify-center items-center bg-gradient-to-br from-slate-900 to-blue-900 text-white p-4 min-h-screen">
        <div class="w-full max-w-xl bg-white p-6 sm:p-8 rounded-2xl shadow-lg space-y-6 text-gray-900">
            <h2 class="text-2xl font-bold flex items-center gap-3 text-red-700">
                <i class="fa-solid fa-handshake"></i> Volunteer Application
            </h2>
            <p class="text-gray-600 text-sm">We appreciate your interest in joining our mission! Please fill out the form
                below.</p>

            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded">
                    {{ session('success') }}
                </div>
            @endif

            <form method="POST" action="{{ route('volunteer.store') }}" class="space-y-6">
                @csrf

                <!-- Name -->
                <div>
                    <label class="block text-sm font-semibold mb-1" for="name">
                        <i class="fas fa-user text-blue-500 mr-2"></i> Full Name
                    </label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}" required
                        class="w-full px-4 py-2 rounded-lg bg-slate-100 border border-gray-300 focus:ring-2 focus:ring-blue-400 focus:outline-none">
                    @error('name')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Email -->
                <div>
                    <label class="block text-sm font-semibold mb-1" for="email">
                        <i class="fas fa-envelope text-yellow-500 mr-2"></i> Email
                    </label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" required
                        class="w-full px-4 py-2 rounded-lg bg-slate-100 border border-gray-300 focus:ring-2 focus:ring-blue-400 focus:outline-none">
                    @error('email')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Phone -->
                <div>
                    <label class="block text-sm font-semibold mb-1" for="phone">
                        <i class="fas fa-phone-alt text-green-500 mr-2"></i> Phone
                    </label>
                    <input type="text" name="phone" id="phone" value="{{ old('phone') }}" required
                        class="w-full px-4 py-2 rounded-lg bg-slate-100 border border-gray-300 focus:ring-2 focus:ring-blue-400 focus:outline-none">
                    @error('phone')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Address -->
                <div>
                    <label class="block text-sm font-semibold mb-1" for="address">
                        <i class="fas fa-map-marker-alt text-red-500 mr-2"></i> Address
                        <span class="text-gray-600 text-sm">(Hometown, Upazila)</span>
                    </label>
                    <input type="text" id="upazila" name="address" value="{{ old('address') }}"
                        class="w-full px-4 py-2 rounded-lg bg-slate-100 border border-gray-300 focus:ring-2 focus:ring-blue-400 focus:outline-none">
                    @error('address')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Availability -->
                <div>
                    <label class="block text-sm font-semibold mb-1" for="availability">
                        <i class="fas fa-clock text-purple-500 mr-2"></i> Availability
                    </label>
                    <input type="text" name="availability" id="availability" value="{{ old('availability') }}"
                        placeholder="e.g., Weekends, Evening"
                        class="w-full px-4 py-2 rounded-lg bg-slate-100 border border-gray-300 focus:ring-2 focus:ring-blue-400 focus:outline-none">
                </div>

                <!-- Skills -->
                <div>
                    <label class="block text-sm font-semibold mb-1" for="skills">
                        <i class="fas fa-tools text-pink-500 mr-2"></i> Skills / Experience
                    </label>
                    <textarea name="skills" id="skills" rows="4"
                        class="w-full px-4 py-2 rounded-lg bg-slate-100 border border-gray-300 focus:ring-2 focus:ring-blue-400 focus:outline-none">{{ old('skills') }}</textarea>
                </div>

                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit"
                        class="bg-red-600 hover:bg-orange-600 transition px-6 py-2 rounded-lg text-white font-semibold">
                        <i class="fas fa-paper-plane mr-2"></i> Submit Application
                    </button>
                </div>
            </form>
        <script src="{{ asset('scripts.js') }}"></script>

        </div>
    </div>
</x-app-layout>
