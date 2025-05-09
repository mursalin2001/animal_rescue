<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <label class="block text-sm font-semibold mb-1" for="name">
                    <i class="fas fa-user text-purple-500 mr-2"></i> Full Name
                </label>
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>
            
            <div class="mt-4">
                <label class="block text-sm font-semibold mb-1" for="name">
                    <i class="fas fa-user text-blue-500 mr-2"></i> Username
                </label>
                <x-jet-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required />
            </div>
            
            <div class="mt-4">
                <label class="block text-sm font-semibold mb-1" for="email">
                    <i class="fas fa-envelope text-yellow-500 mr-2"></i> Email
                </label>
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>


            <div class="mt-4">
                <label class="block text-sm font-semibold mb-1" for="phone">
                    <i class="fas fa-phone-alt text-green-500 mr-2"></i> Phone
                </label>
                <x-jet-input id="phone" class="block mt-1 w-full" type="text" name="phone"  required />
            </div>



            <div class="mt-4">
                <label class="block text-sm font-semibold mb-1" for="address">
                    <i class="fas fa-map-marker-alt text-red-500 mr-2"></i> Address
                    <span class="text-gray-600 text-sm">(Hometown, Upazila)</span>
                </label>
                <x-jet-input id="upazila" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required />
            </div>

            <div class="mt-4">
                <label class="block text-sm font-semibold mb-1" for="password">
                    <i class="fas fa-lock text-yellow-500 mr-2"></i> Password
                </label>
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <label class="block text-sm font-semibold mb-1" for="confirm_password">
                    <i class="fas fa-lock-open text-green-500 mr-2"></i> Confirm Password
                </label>
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        <script src="{{ asset('scripts.js') }}"></script>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
