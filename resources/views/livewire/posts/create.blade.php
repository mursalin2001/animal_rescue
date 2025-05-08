<div class=" flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <div
        class="w-11/12 lg:w-full md:w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden rounded-lg mb-12">
        <x-jet-validation-errors class="mb-4" />

        <form method="POST" wire:submit.prevent="submit" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label for="animal_type" class="block text-gray-600 font-semibold mb-2">Animal Type</label>
                <select wire:model="animal_type" name="animal_type" id="animal_type"
                    class="bg-gray-100 border-2 w-full p-2 rounded-lg  @error('animal_type') border-red-500 @enderror">
                    <option value="" disabled selected>Select Animal Type</option>
                    <option value="Dog">Dog</option>
                    <option value="Cat">Cat</option>
                    <option value="Rabbit">Rabbit</option>
                    <option value="Bird">Bird</option>
                    <option value="Reptile">Reptile (e.g., snake, lizard)</option>
                    <option value="Farm Animal"> Farm Animal (e.g., cow, goat, chicken)</option>
                    <option value="Street Animal">Street Animal (horse, donkey, etc.)</option>
                </select>
            </div>


            <div class="mb-4">
                <label for="animal_age" class="block text-gray-600 font-semibold mb-2">Stage of Life</label>
                <select wire:model="animal_age" name="animal_age" id="animal_age"
                    class="bg-gray-100 border-2 w-full p-2 rounded-lg  @error('animal_age') border-red-500 @enderror">
                    <option value="" disabled selected>Select life stage</option>
                    <option value="Baby">Baby</option>
                    <option value="Adult">Adult</option>
                    <option value="Old">Old</option>
                </select>
            </div>



            <div class="mb-4">
                <label for="animal_condition" class="block text-gray-600 font-semibold mb-2">Condition</label>
                <select wire:model="animal_condition" name="animal_condition" id="animal_condition"
                    class="bg-gray-100 border-2 w-full p-2 rounded-lg  @error('animal_condition') border-red-500 @enderror">
                    <option value="" disabled selected>Select Animal Condition</option>
                    <option value="Injured">Injured</option>
                    <option value="Sick">Sick</option>
                    <option value="Stray">Stray (Homeless but not hurt)</option>
                    <option value="Abandoned">Abandoned</option>
                    <option value="Weak">Weak</option>
                    <option value="Unconscious "> Unconscious </option>
                </select>
            </div>


            <div>
                <x-jet-label for="animal_number" value="{{ __('Number Of Animals') }}" />
<<<<<<< HEAD
                <x-jet-input id="animal_number" class="block mt-1 mb-2 w-full" type="text" wire:model.lazy="title" />
=======
                <x-jet-input id="animal_number" class="block mt-1 mb-2 w-full" type="text"
                    wire:model.lazy="animal_number" />
>>>>>>> 68991e3 (Animal Display and Volunteer form balidation complete)
            </div>


            <div>
                <x-jet-label for="exact_location" value="{{ __('Exact Spot Details') }}" />
<<<<<<< HEAD
                <x-jet-input id="exact_location" class="block mt-1 w-full" type="text" wire:model.lazy="location" />
=======
                <x-jet-input id="exact_location" class="block mt-1 w-full" type="text"
                    wire:model.lazy="exact_location" />
>>>>>>> 68991e3 (Animal Display and Volunteer form balidation complete)
            </div>

            <div class="relative">
                <x-jet-label for="upazila" value="{{ __('Upazila') }}" />
                <x-jet-input id="upazila" class="block mt-1 mb-2 w-full" type="text" wire:model.lazy="upazila" />
            </div>

            <div>
                <label for="contact_number" class="block font-semibold text-gray-700 mb-1">Contact Number</label>
                <input type="text" wire:model="contact_number" id="contact_number"
                    class="bg-gray-100 border-2 w-full p-2 rounded-lg @error('contact_number') border-red-500 @enderror"
                    placeholder="01XXXXXXXXX">
<<<<<<< HEAD
                @error('contact_number') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
            
=======
                @error('contact_number')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

>>>>>>> 68991e3 (Animal Display and Volunteer form balidation complete)

            {{-- live location --}}
            <div class="mt-4">
                <p onclick="getLiveLocation()" class="px-3 py-2 bg-red-500 text-black rounded">
                    📍 Share Live Location
                </p>
                <p id="location-status" class="text-sm text-gray-500 mt-1"></p>

                <input type="hidden" wire:model.lazy="latitude">
                <input type="hidden" wire:model.lazy="longitude">
            </div>
<<<<<<< HEAD
            
=======

>>>>>>> 68991e3 (Animal Display and Volunteer form balidation complete)

            <div class="mt-4">
                <x-jet-label for="description" value="{{ __('Additional Notes') }}" />
                <textarea rows="5"
                    class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow"
                    wire:model.lazy="description"> </textarea>
            </div>

<<<<<<< HEAD
           
=======

>>>>>>> 68991e3 (Animal Display and Volunteer form balidation complete)

            @if ($file)
                <div class="mt-4">
                    <x-jet-label value="{{ __('Preview :') }}" />

                    @if (in_array($file->extension(), $this->imageFormats))
                        <img class="p-3 h-32" src="{{ $file->temporaryUrl() }}" oncontextmenu="return false;">
                    @elseif(in_array($file->extension(), $this->videoFormats))
<<<<<<< HEAD
                        <video controls crossorigin playsinline oncontextmenu="return false;"
                            controlsList="nodownload" class="rounded-lg filter">
=======
                        <video controls crossorigin playsinline oncontextmenu="return false;" controlsList="nodownload"
                            class="rounded-lg filter">
>>>>>>> 68991e3 (Animal Display and Volunteer form balidation complete)
                            <!-- Video files -->
                            <source src="{{ $file->temporaryUrl() }}" type="video/{{ $file->extension() }}"
                                size="576">

                            <!-- Fallback for browsers that don't support the <video> element -->
                            <a href="{{ $file->temporaryUrl() }}" download>Download</a>
                        </video>
                    @else
                        <p class="text-red-700 text-sm my-3">Invalid File selected. You can only upload
                            {{ implode(', ', array_merge($this->imageFormats, $this->videoFormats)) }} file types.
                        </p>
                    @endif
                </div>
            @endif


            <div x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true"
                x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false"
                x-on:livewire-upload-progress="progress = $event.detail.progress">

                <div class="mt-4">
                    <x-jet-label for="body" value="{{ __('Media') }}" />
                    <input type="file" wire:model="file">
                </div>



                <div wire:loading class="my-3" wire:target="file">Uploading...</div>

                <!-- Progress Bar -->
                <div x-show="isUploading" class="my-2">
                    <progress max="100" x-bind:value="progress"></progress>
                </div>
            </div>

            <div class="flex items-center justify-end mt-4">

                <x-jet-button class="ml-4">
                    {{ __('Create Post') }}
                </x-jet-button>

            </div>

        </form>

<<<<<<< HEAD
       <script src="{{ asset('scripts.js') }}"></script>

    </div>
</div>

=======
        <script src="{{ asset('scripts.js') }}"></script>

    </div>
</div>
>>>>>>> 68991e3 (Animal Display and Volunteer form balidation complete)
