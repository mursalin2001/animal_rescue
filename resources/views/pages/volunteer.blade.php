<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Rescue Assignments') }}
        </h2>
    </x-slot>

    <div class="flex justify-center items-center bg-gradient-to-br from-slate-900 to-blue-900 text-white p-4 min-h-screen">
        <div class="w-full max-w-xl bg-white p-6 sm:p-8 rounded-2xl shadow-lg space-y-6 text-gray-900">
            <h2 class="text-2xl font-bold flex items-center gap-3 text-red-700">
                <i class="fa-solid fa-handshake"></i> Volunteer Application
            </h2>
            <p class="text-gray-600 text-sm">We appreciate your interest in joining our mission! Please fill out the form below.</p>

            <form method="POST" action="{{ route('volunteer.store') }}" class="space-y-6">
                @csrf

                <div>
                    <label class="block text-sm font-semibold mb-1" for="name">
                        <i class="fas fa-user text-blue-500 mr-2"></i> Full Name
                    </label>
                    <input type="text" name="name" id="name" required
                        class="w-full px-4 py-2 rounded-lg bg-slate-100 border border-gray-300 focus:ring-2 focus:ring-blue-400 focus:outline-none">
                </div>

                <div>
                    <label class="block text-sm font-semibold mb-1" for="email">
                        
                        <i class="fas fa-envelope text-yellow-500 mr-2"></i> Email
                    </label>
                    <input type="email" name="email" id="email" required
                        class="w-full px-4 py-2 rounded-lg bg-slate-100 border border-gray-300 focus:ring-2 focus:ring-blue-400 focus:outline-none">
                </div>

                <div>
                    <label class="block text-sm font-semibold mb-1" for="phone">
                        <i class="fas fa-phone-alt text-green-500 mr-2"></i> Phone
                    </label>
                    <input type="text" name="phone" id="phone" required
                        class="w-full px-4 py-2 rounded-lg bg-slate-100 border border-gray-300 focus:ring-2 focus:ring-blue-400 focus:outline-none">
                </div>

                <div>
                    <label class="block text-sm font-semibold mb-1" for="address">
                        <i class="fas fa-map-marker-alt text-red-500 mr-2"></i> Address
                    </label>
                    <select name="address" id="address" required
                        class="w-full px-4 py-2 rounded-lg bg-slate-100 border border-gray-300 focus:ring-2 focus:ring-blue-400 focus:outline-none">
                        <option value="" disabled selected>Select your district</option>
                        <option value="Dhaka">Dhaka</option>
                        <option value="Barishal">Barishal</option>
                        <option value="Khulna">Khulna</option>
                        <option value="Jessore">Jessore</option>
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-semibold mb-1" for="availability">
                        <i class="fas fa-clock text-purple-500 mr-2"></i> Availability
                    </label>
                    <input type="text" name="availability" id="availability" placeholder="e.g., Weekends, Evening"
                        class="w-full px-4 py-2 rounded-lg bg-slate-100 border border-gray-300 focus:ring-2 focus:ring-blue-400 focus:outline-none">
                </div>

                <div>
                    <label class="block text-sm font-semibold mb-1" for="skills">
                        <i class="fas fa-tools text-pink-500 mr-2"></i> Skills / Experience
                    </label>
                    <textarea name="skills" id="skills" rows="4"
                        class="w-full px-4 py-2 rounded-lg bg-slate-100 border border-gray-300 focus:ring-2 focus:ring-blue-400 focus:outline-none"></textarea>
                </div>

                <div class="text-center">
                    <button type="submit"
                        class="bg-red-600 hover:bg-orange-600 transition px-6 py-2 rounded-lg text-white font-semibold">
                        <i class="fas fa-paper-plane mr-2"></i> Submit Application
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
