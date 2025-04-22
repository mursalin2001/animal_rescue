<div class=" flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <div
        class="w-11/12 lg:w-full md:w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden rounded-lg mb-12">
        <x-jet-validation-errors class="mb-4" />

        <form method="POST" wire:submit.prevent="submit" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label for="animal_type" class="block text-gray-600 font-semibold mb-2">Animal Type</label>
                <select name="animal_type" id="animal_type"
                    class="bg-gray-100 border-2 w-full p-2 rounded-lg  @error('animal_type') border-red-500 @enderror">
                    <option value="" disabled selected>Select Animal Type</option>
                    <option value="dog">Dog</option>
                    <option value="cat">Cat</option>
                    <option value="rabbit">Rabbit</option>
                    <option value="bird">Bird</option>
                    <option value="reptile">Reptile (e.g., snake, lizard)</option>
                    <option value="farm_animal"> Farm Animal (e.g., cow, goat, chicken)</option>
                    <option value="street_animal">Street Animal (horse, donkey, etc.)</option>
                </select>
            </div>


            <div class="mb-4">
                <label for="animal_age" class="block text-gray-600 font-semibold mb-2">Stage of Life</label>
                <select name="animal_age" id="animal_age"
                    class="bg-gray-100 border-2 w-full p-2 rounded-lg  @error('animal_age') border-red-500 @enderror">
                    <option value="" disabled selected>Select life stage</option>
                    <option value="baby">Baby</option>
                    <option value="adult">Adult</option>
                    <option value="old">Old</option>
                </select>
            </div>



            <div class="mb-4">
                <label for="animal_condition" class="block text-gray-600 font-semibold mb-2">Condition</label>
                <select name="animal_condition" id="animal_condition"
                    class="bg-gray-100 border-2 w-full p-2 rounded-lg  @error('animal_condition') border-red-500 @enderror">
                    <option value="" disabled selected>Select Animal Condition</option>
                    <option value="dog">Dog</option>
                    <option value="cat">Cat</option>
                    <option value="rabbit">Rabbit</option>
                    <option value="bird">Bird</option>
                    <option value="reptile">Reptile (e.g., snake, lizard)</option>
                    <option value="farm_animal"> Farm Animal (e.g., cow, goat, chicken)</option>
                    <option value="street_animal">Street Animal (horse, donkey, etc.)</option>
                </select>
            </div>



            <div>
                <x-jet-label for="title" value="{{ __('Title') }}" />
                <x-jet-input id="title" class="block mt-1 mb-2 w-full" type="text" wire:model.lazy="title" />
            </div>

            <div>
                <x-jet-label for="location" value="{{ __('Location') }}" />
                <x-jet-input id="location" class="block mt-1 w-full" type="text" wire:model.lazy="location" />
            </div>

            <div class="mt-4">
                <x-jet-label for="body" value="{{ __('Description') }}" />
                <textarea rows="5"
                    class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow"
                    wire:model.lazy="body"> </textarea>
            </div>


            {{-- Location  --}}

            <h4 class="italic mb-4 text-lg border-b text-red-600 mt-10">
                বিস্তারিত ঠিকানা
            </h4>
            <div class="grid lg:grid-cols-3 sm:grid-cols-1 lg:gap-4">
                <div class="mb-4">
                    <label for="division" class="block text-gray-600 font-semibold mb-2">বিভাগ</label>
                    <select name="division" id="division" onchange="divisionsList();"
                        class="bg-gray-100 border-2 w-full p-2 rounded-lg  @error('division') border-red-500 @enderror">
                        <option value="" disabled selected>Select Division</option>
                        <option value="Barishal">বরিশাল (Barishal)</option>
                        <option value="Chattogram">চট্টগ্রাম (Chattogram)</option>
                        <option value="Dhaka">ঢাকা (Dhaka)</option>
                        <option value="Khulna">খুলনা (Khulna)</option>
                        <option value="Mymensingh">ময়মনসিংহ (Mymensingh)</option>
                        <option value="Rajshahi">রাজশাহী (Rajshahi)</option>
                        <option value="Rangpur">রংপুর (Rangpur)</option>
                        <option value="Sylhet">সিলেট (Sylhet)</option>

                    </select>
                </div>
                <div class="mb-4">
                    <label for="district" class="block text-gray-600 font-semibold mb-2">জেলা</label>
                    <select name="district" id="district" onchange="upazilaList();"
                        class="bg-gray-100 border-2 w-full p-2 rounded-lg  @error('district') border-red-500 @enderror">
                    </select>

                </div>
                <div class="grid lg:grid-cols-3 sm:grid-cols-1 lg:gap-4">
                    <div class="mb-4">
                        <label for="upazila" class="block text-gray-600 font-semibold mb-2">উপজেলা</label>
                        <select name="upazila" id="upazila" onchange="thanaList();"
                            class="bg-gray-100 border-2 w-full p-2 rounded-lg  @error('upazila') border-red-500 @enderror">
                        </select>
                        <!-- @error('upazila')
    <div class="text-red-500 mt-2 font-medium text-sm">
                                {{ $message }}
                            </div>
@enderror -->
                    </div>
                    <div class="mb-4">
                        <label for="thana" class="block text-gray-600 font-semibold mb-2">থানা</label>
                        <select name="thana" id="thana"
                            class="bg-gray-100 border-2 w-full p-2 rounded-lg  @error('thana') border-red-500 @enderror">
                        </select>
                        <!-- @error('thana')
    <div class="text-red-500 mt-2 font-medium text-sm">
                                {{ $message }}
                            </div>
@enderror -->
                    </div>

                </div>
            </div>


            {{-- live location --}}
            <div class="mt-4">
                <button onclick="getLiveLocation()" class="px-3 py-2 bg-red-500 text-black rounded">
                    📍 Share Live Location
                </button>
                <p id="location-status" class="text-sm text-gray-500 mt-1"></p>

                <input type="hidden" wire:model.lazy="latitude">
                <input type="hidden" wire:model.lazy="longitude">
            </div>

            @if ($file)
                <div class="mt-4">
                    <x-jet-label value="{{ __('Preview :') }}" />

                    @if (in_array($file->extension(), $this->imageFormats))
                        <img class="p-3 h-32" src="{{ $file->temporaryUrl() }}" oncontextmenu="return false;">
                    @elseif(in_array($file->extension(), $this->videoFormats))
                        <video controls crossorigin playsinline oncontextmenu="return false;"
                            controlsList="nodownload" class="rounded-lg filter">
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
        {{-- <script src="/js/script.js"></script> --}}

    </div>
</div>



<script>
    console.log("Connected");

    function divisionsList() {
        // get value from division lists
        var diviList = document.getElementById('division').value;

        // set barishal division districts
        if (diviList == 'Barishal') {
            var disctList =
                '<option disabled selected>Select District</option><option value="Barguna">বরগুনা (Barguna)</option><option value="Barishal">বরিশাল (Barishal)</option><option value="Bhola">ভোলা (Bhola)</option><option value="Jhalokati">ঝালকাঁঠি (Jhalokati)</option><option value="Patuakhali">পটুয়াখালী (Patuakhali)</option><option value="Pirojpur">পিরোজপুর (Pirojpur)</option>';
        }
        // set Chattogram division districts
        else if (diviList == 'Chattogram') {
            var disctList =
                '<option disabled selected>Select District</option><option value="Bandarban">বান্দরবান (Bandarban)</option><option value="Brahmanbaria">ব্রাহ্মণবাড়িয়া (Brahmanbaria)</option><option value="Chandpur">চাঁদপুর (Chandpur)</option><option value="Chattogram">চট্টগ্রাম (Chattogram)</option><option value="Cumilla">কুমিল্লা (Cumilla)</option><option value="Cox\'s Bazar">কক্সবাজার (Cox\'s Bazar)</option><option value="Feni">ফেনী (Feni)</option><option value="Khagrachhari">খাগড়াছড়ি (Khagrachhari)</option><option value="Lakshmipur">লক্ষ্মীপুর (Lakshmipur) </option><option value="Noakhali">নোয়াখালী (Noakhali)</option><option value="Rangamati">রাঙ্গামাটি (Rangamati)</option>';
        }
        // set Dhaka division districts
        else if (diviList == 'Dhaka') {
            var disctList =
                '<option disabled selected>Select District</option><option value="Dhaka">ঢাকা (Dhaka)</option><option value="Faridpur">ফরিদুর (Faridpur)</option><option value="Gazipur">গাজীপুর (Gazipur)</option><option value="Gopalganj">গোপালগঞ্জ (Gopalganj)</option><option value="Kishoreganj">কিশোরগঞ্জ (Kishoreganj)</option><option value="Madaripur">মাদারীপুর (Madaripur)</option><option value="Manikganj">মানিকগঞ্জ (Manikganj)</option><option value="Munshiganj">মুন্সিগঞ্জ (Munshiganj)</option><option value="Narayanganj">নারায়নগঞ্জ (Narayanganj)</option><option value="Narsingdi">নরসিংদী (Narsingdi)</option><option value="Rajbari">রাজবাড়ী (Rajbari)</option><option value="Shariatpur">শরীয়তপুর (Shariatpur)</option><option value="Tangail">টাঙ্গাইল (Tangail)</option>';
        }
        // set Khulna division districts
        else if (diviList == 'Khulna') {
            var disctList =
                '<option disabled selected>Select District</option><option value="Bagerhat">বাগেরহাট (Bagerhat)</option><option value="Chuadanga">চুয়াডাঙ্গা (Chuadanga)</option><option value="Jashore">যশোর (Jashore)</option><option value="Jhenaidah">ঝিনাইদহ (Jhenaidah)</option><option value="Khulna">খুলনা (Khulna) </option><option value="Kustia">কুষ্টিয়া (Kustia)</option><option value="Magura">মাগুরা (Magura)</option><option value="Meherpur">মেহেরপুর (Meherpur)</option><option value="Narail">নড়াইল (Narail)</option > <option value="Satkhira">সাতক্ষীরা (Satkhira)</option>';
        }
        // set Mymensingh division districts
        else if (diviList == 'Mymensingh') {
            var disctList =
                '<option disabled selected>Select District</option><option value="Mymensingh">ময়মনসিংহ (Mymensingh)</option><option value="Netrokona">নেত্রকোনা (Netrokona)</option><option value="Jamalpur">জামালপুর (Jamalpur)</option><option value="Sherpur">শেরপুর (Sherpur)</option>';
        }
        // set Rajshahi division districts
        else if (diviList == 'Rajshahi') {
            var disctList =
                '<option disabled selected>Select District</option><option value="Bagura">বগুড়া (Bagura)</option><option value="Chapainawabganj">চাঁপাইনবাবগঞ্জ (Chapainawabganj)</option><option value="Joypurhat">জয়পুরহাট (Joypurhat)</option><option value="Naogaon">নওগাঁ (Naogaon)</option><option value="Natore">নাটোর (Natore)</option><option value="Pabna">পাবনা (Pabna)</option><option value="Rajshahi">রাজশাহী (Rajshahi)</option><option value="Sirajganj">সিরাজগঞ্জ (Sirajganj)</option>';
        }
        // set Rangpur division districts
        else if (diviList == 'Rangpur') {
            var disctList =
                '<option disabled selected>Select District</option><option value="Dinajpur">দিনাজপুর (Dinajpur)</option><option value="Gaibandha">গাইবান্ধা (Gaibandha)</option><option value="Kurigram">কুড়িগ্রাম (Kurigram)</option><option value="Lalmonirhat">লালমনিরহাট (Lalmonirhat)</option><option value="Nilphamari">নীলফামারী (Nilphamari)</option><option value="Panchagarh">পঞ্চগড় (Panchagarh)</option><option value="Rangpur">রংপুর (Rangpur)</option><option value="Thakurgaon">ঠাকুরগাঁও (Thakurgaon)</option>';
        }
        // set Rangpur division districts
        else if (diviList == 'Sylhet') {
            var disctList =
                '<option disabled selected>Select District</option><option value="Habiganj">হবিগঞ্জ (Habiganj)</option><option value="Moulvibazar">মৌলভীবাজার (Moulvibazar)</option><option value="Sunamganj">সুনামগঞ্জ (Sunamganj)</option><option value="Sylhet">সিলেট (Sylhet)</option>';
        }
        //  set/send districts name to District lists from division
        document.getElementById("district").innerHTML = disctList;
    }

    // Upazila Section select
    function upazilaList() {
        var DisList = document.getElementById('district').value;

        //Barishal Division

        if (DisList == 'Barguna') {
            var upazilaList =
                '<option disabled selected>Select Upazila</option><option value="Amtali">আমতলী (Amtali)</option><option value="Bamna">বামনা (Bamna)</option><option value="Barguna Sadar">বরগুনা সদর (Barguna Sadar)</option><option value="Betagi">বেতাগী (Betagi)</option><option value="Patharghata">পাথরঘাটা (Patharghata)</option><option value="Taltali">তালতলী (Taltali)</option>'
        }
        if (DisList == 'Barishal') {
            var upazilaList =
                '<option disabled selected>Select Upazila</option><option value="Agailjhara">আগৈলঝাড়া (Agailjhara)</option><option value="Babuganj">বাবুগঞ্জ (Babuganj)</option><option value="Bakerganj">বাকেরগঞ্জ  (Bakerganj)</option><option value="Banaripara">বানারীপাড়া (Banaripara)</option><option value="Barishal Sadar">বরিশাল সদর (Barishal Sadar)</option><option value="Gournadi">গৌড়নদী (Gournadi)</option><option value="Hijla">হিজলা (Hijla)</option><option value="Mehendiganj">মেহেন্দিগঞ্জ (Mehendiganj)</option><option value="Muladi">মুলাদী (Muladi)</option><option value="Wazirpur">উজিরপুর (Wazirpur)</option>'
        }
        if (DisList == 'Bhola') {
            var upazilaList =
                '<option disabled selected>Select Upazila</option><option value="Bhola Sadar">ভোলা সদর (Bhola Sadar)</option><option value="Burhanuddin">বোরহান উদ্দিন (Burhanuddin)</option><option value="Char Fasson">চরফ্যাশন (Char Fasson)</option><option value="Daulatkhan">দৌলতখান (Daulatkhan)</option><option value="Lalmohan">লালমোহন (Lalmohan)</option><option value="Manpura">মনপুরা (Manpura)</option><option value="Tazumuddin">তজুমদ্দিন (Tazumuddin)</option>'
        }
        if (DisList == 'Jhalokati') {
            var upazilaList =
                '<option disabled selected>Select Upazila</option><option value="Jhalokati Sadar">ঝালকাঁঠি  সদর(Jhalokati Sadar)</option><option value="Kathalia">কাঠালিয়া (Kathalia)</option><option value="Nalchity">নলছিটি (Nalchity)</option><option value="Rajapur">রাজাপুর (Rajapur)</option>'
        }
        if (DisList == 'Patuakhali') {
            var upazilaList =
                '<option disabled selected>Select Upazila</option><option value="Dumki">দুমকি (Dumki)</option><option value="Patuakhali Sadar">পটুয়াখালী সদর (Patuakhali Sadar)</option><option value="Mirzaganj">মির্জাগঞ্জ (Mirzaganj)</option><option value="Bauphal">বাউফল (Bauphal)</option><option value="Galachipa">গলাচিপা (Galachipa)</option><option value="Dashmina">দশমিনা (Dashmina)</option><option value="Rangabali">রাঙ্গাবালী (Rangabali)</option><option value="Kolapara">কলাপাড়া (Kolapara)</option>'
        }
        if (DisList == 'Pirojpur') {
            var upazilaList =
                '<option disabled selected>Select Upazila</option><option value="Bhandaria">ভান্ডারিয়া (Bhandaria)</option><option value="Kawkhali">কাউখালী (Kawkhali)</option><option value="Mathbaria">মঠবাড়ীয়া (Mathbaria)</option><option value="Nazirpur">নাজিরপুর (Nazirpur)</option><option value="Nesarabad">নেছারাবাদ (Nesarabad)</option><option value="Pirojpur Sadar">পিরোজপুর সদর (Pirojpur Sadar)</option><option value="Indurkani">ইন্দুরকানী (Indurkani)</option>'
        }

        //Chittagong Division
        if (DisList == 'Bandarban') {
            var upazilaList =
                '<option disabled selected>Select Upazila</option><option value="Ali Kadam">আলীকদম (Ali Kadam)</option><option value="Bandarban Sadar">বান্দরবান সদর (Bandarban Sadar)<option value="Lama">লামা (Lama)</option></option><option value="Naikhongchhari">নাইক্ষ্যাংছড়ি (Naikhongchhari)</option><option value="Rowangchhari">রোয়াংছড়ি (Rowangchhari)</option><option value="Ruma">রুমা (Ruma)</option><option value="Thanchi">থানচি (Thanchi)</option>'
        }
        if (DisList == 'Brahmanbaria') {
            var upazilaList =
                '<option disabled selected>Select Upazila</option><option value="Brahmanbaria Sadar">ব্রাহ্মণবাড়িয়া সদর (Brahmanbaria Sadar)</option><option value="Kasba">কসবা (Kasba)</option><option value="Akhaura">আখাউড়া (Akhaura)</option><option value="Ashuganj">আশুগঞ্জ (Ashuganj)</option><option value="Bancharampur">বাঞ্ছারামপুর (Bancharampur)</option><option value="Bijoynagar">বিজয়নগর (Bijoynagar)</option><option value="Nasirnagar">নাসিরনগর (Nasirnagar)</option><option value="Nabinagar">নবীনগর (Nabinagar)</option><option value="Sarail">সরাইল (Sarail)</option>'
        }
        if (DisList == 'Chandpur') {
            var upazilaList =
                '<option disabled selected>Select Upazila</option><option value="Chandpur Sadar">চাঁদপুর সদর (Chandpur Sadar)</option><option value="Faridganj">ফরিদগঞ্জ (Faridganj)</option><option value="Haimchar">হাইমচর (Haimchar)</option><option value="Kachua">কচুয়া (Kachua)</option><option value="Matlab Dakshin">মতলব দক্ষিণ(Matlab Dakshin)</option><option value="Matlab Uttar">মতলব উত্তর (Matlab Uttar)</option><option value="Shahrasti">শহরাস্তি (Shahrasti)</option>'
        }
        if (DisList == 'Chattogram') {
            var upazilaList =
                '<option disabled selected>Select Upazila</option><option value="Akbarshah">আকবরশাহ (Akbarshah)</option><option value="Anwara">আনোয়ারা (Anwara)</option><option value="Bakoliya">বাকলিয়া (Bakoliya)</option><option value="Bandar">বন্দর (Bandar)</option><option value="Banshkhali">বাশঁখালী (Banshkhali)</option><option value="Boalkhali">বোয়ালখালী (Boalkhali)</option><option value="Bayazid">বায়েজিদ (Bayazid)</option><option value="Chandgaon">চান্দগাঁও (Chandgaon)</option><option value="Chandanaish">চন্দনাইশ (Chandanaish)</option><option value="Double Mooring">ডবলমুরিং (Double Mooring)</option><option value="Fatikchhari">ফটিকছড়ি (Fatikchhari)</option><option value="Halishahar">হালিশহর (Halishahar)</option><option value="Hathazari">হাটহাজারী (Hathazari)</option><option value="Karnaphuli">কর্ণফুলী (Karnaphuli)</option><option value="Khulshi">খুলশী (Khulshi)</option><option value="Kotwali">কোতোয়ালী (Kotwali)</option><option value="Lohagara">লোহাগাড়া (Lohagara)</option><option value="Mirsharai">মীরসরাই (Mirsharai)</option><option value="Panchlaish">পাঁচলাইশ (Panchlaish)</option><option value="Pahartali">পাহাড়তলী (Pahartali)</option><option value="Patenga">পতেঙ্গা (Patenga)</option><option value="Patiya">পাটিয়া (Patiya)</option><option value="Rangunia">রাঙ্গুনিয়া (Rangunia)</option><option value="Raozan">রাউজান (Raozan)</option><option value="Sandwip">সন্দ্বীপ (Sandwip)</option><option value="Satkania">সাতকানিয়া (Satkania)</option><option value="Sitakunda">শীতাকুন্ড (Sitakunda)</option>'
        }
        if (DisList == 'Cumilla') {
            var upazilaList =
                '<option disabled selected>Select Upazila</option><option value="Barura">বরুড়া (Barura)</option><option value="Brahmanpara">ব্রাহ্মণপাড়া (Brahmanpara)</option><option value="Burichong">বুড়িচং (Burichong)</option><option value="Comilla Sadar">কুমিল্লা সদর (Comilla Sadar)</option><option value="Comilla Sadar Dakshin">কুমিল্লা সদর দক্ষিণ (Comilla Sadar Dakshin)</option><option value="Chandina">চান্দিনা (Chandina)</option><option value="Chauddagram">চৌদ্দগ্রাম (Chauddagram)</option><option value="Daudkandi">দাউদকান্দি (Daudkandi)</option><option value="Debidwar">দেবিদ্বার (Debidwar)</option><option value="Homna">হোমনা (Homna)</option><option value="Laksam">লাকসাম (Laksam)</option><option value="Lalmai">লালমাই (Lalmai)</option><option value="Monohorganj">মনোহরগঞ্জ (Monohorganj)</option><option value="Meghna">মেঘনা (Meghna)</option><option value="Muradnagar">মুরাদনগর (Muradnagar)</option><option value="Nangalkot">নাঙ্গলকোট (Nangalkot)</option><option value="Titas">তিতাস (Titas)</option>'
        }
        if (DisList == 'Cox\'s Bazar') {
            var upazilaList =
                '<option disabled selected>Select Upazila</option><option value="Chakaria">চকরিয়া (Chakaria)</option><option value="Cox\'s Bazar">কক্সবাজার (Cox\'s Bazar)</option><option value="Kutubdia">কুতুবদিয়া (Kutubdia)</option><option value="Maheshkhali">মহেশখালী (Maheshkhali)</option><option value="Ramu">রামু (Ramu)</option><option value="Ukhia">উখিয়া (Ukhia)</option><option value="Pekua">পেকুয়া (Pekua)</option><option value="Eidgaon">ঈদগাঁও (Eidgaon)</option>'
        }
        if (DisList == 'Feni') {
            var upazilaList =
                '<option disabled selected>Select Upazila</option><option value="Chhagalnaiya">ছাগলনাইয়া (Chhagalnaiya)</option><option value="Daganbhuiyan">দাগনভূইয়া (Daganbhuiyan)</option><option value="Feni Sadar">ফেনী সদর (Feni Sadar)</option><option value="Fulgazi">ফুলগাজী (Fulgazi)</option><option value="Parshuram">পরশুরাম (Parshuram)</option><option value="Sonagazi">সোনাগাজী (Sonagazi)</option>'
        }
        if (DisList == 'Khagrachhari') {
            var upazilaList =
                '<option disabled selected>Select Upazila</option><option value="Dighinala">দীঘিনালা (Dighinala)</option><option value="Khagrachhari Sadar">খাগড়াছড়ি সদর (Khagrachhari Sadar)</option><option value="Lakshmichhari">লক্ষীছড়ি (Lakshmichhari)</option><option value="Mahalchhari">মহালছড়ি (Mahalchhari)</option><option value="Manikchhari">মানিকছড়ি (Manikchhari)</option><option value="Matiranga">মাটিরাঙ্গা (Matiranga)</option><option value="Panchhari">পানছড়ি (Panchhari)</option><option value="Ramgarh">রামগড় (Ramgarh)</option><option value="Guimara">গুইমারা (Guimara)</option>'
        }
        if (DisList == 'Lakshmipur') {
            var upazilaList =
                '<option disabled selected>Select Upazila</option><option value="Kamalnagar">কমলনগর (Kamalnagar)</option><option value="Lakshmipur">লক্ষ্মীপুর (Lakshmipur)</option><option value="Raipur">রায়পুর (Raipur)</option><option value="Ramganj">রামগঞ্জ (Ramganj)</option><option value="Ramgoti">রামগতি (Ramgoti)</option>';
        }
        if (DisList == 'Noakhali') {
            var upazilaList =
                '<option disabled selected>Select Upazila</option><option value="Begumganj">বেগমগঞ্জ (Begumganj)</option><option value="Bhashanchar">ভাসানচর (Bhashanchar)</option><option value="Chatkhil">চাটখিল (Chatkhil)</option><option value="Companiganj">কোম্পানিগঞ্জ (Companiganj)</option><option value="Hatia">হাতিয়া (Hatia)</option><option value="Kabirhat">কবিরহাট (Kabirhat)</option><option value="Noakhali Sadar">নোয়াখালী সদর (Noakhali Sadar)</option><option value="Senbagh">সেনবাগ (Senbagh)</option><option value="Sonaimuri">সোনাইমুড়ী (Sonaimuri)</option><option value="Subornochar">সুবুর্ণচর (Subornochar)</option>';
        }
        if (DisList == 'Rangamati') {
            var upazilaList =
                '<option disabled selected>Select Upazila</option><option value="Bagaichhari">বাঘাইছড়ি (Bagaichhari)</option><option value="Belaichhari">বিলাইছড়ি (Belaichhari)</option><option value="Barkal">বরকল (Barkal)</option><option value="Juraichhari">জুরাছড়ি (Juraichhari)</option><option value="Kaptai">কাপ্তাই (Kaptai)</option><option value="Kaukhali">কাউখালী (Kaukhali)</option><option value="Langadu">লংগদু (Langadu)</option><option value="Naniarchar">নানিয়ারচর (Naniarchar)</option><option value="Rajasthali">রাজস্থলী (Ranjasthali)</option><option value="Rangamati Sadar">রাঙ্গামাটি সদর (Rangamati Sadar)</option>';
        }

        //Dhaka Division
        if (DisList == 'Dhaka') {
            var upazilaList =
                '<option disabled selected>Select Upazila</option><optgroup label="Dhaka-North"><option value="Adabor">আদাবর (Adabor)</option><option value="Badda">বাড্ডা (Badda)</option><option value="Banani">বনানী Banani</option><option value="Gulshan">গুলশান (Gulshan)</option><option value="Bhashantek">ভাসানটেক (Bhashantek)</option><option value="Bimanbandar">বিমানবন্দর (Bimanbandar)</option><option value="Cantonment">ক্যান্টনমেন্ট (Cantonment)</option><option value="Darussalam">দারুসসালাম (Darussalam)</option><option value="Hatirjheel">হাতিরঝিল (Hatirjheel)</option><option value="Kafrul">কাফরুল (Kafrul)</option><option value="Khilkhet">খিলক্ষেত (Khilkhet)</option><option value="Mirpur">মিরপুর (Mirpur)</option><option value="Mohammadpur">মোহাম্মদপুর (Mohammadpur)</option><option value="Pallabi">পল্লবী (Pallabi)</option><option value="Rampura">রামপুরা (Rampura)</option><option value="Rupnagar">রূপনগর (Rupnagar)</option><option value="Shah Ali">শাহ আলী (Shah Ali)</option><option value="Sher-E-Bangla Nagar">শের-এ-বাংলা নগর (Sher-E-Bangla Nagar)</option><option value="Shilpanchal">শিল্পাঞ্চল (Shilpanchal)</option><option value="Tejgaon">তেজগাও (Tejgaon)</option><option value="Turag">তুরাগ (Turag)</option><option value="Uttara-East">উত্তরা পূর্ব (Uttara-East)</option><option value="Uttara-West">উত্তরা পশ্চিম (Uttara-West)</option><option value="Uttarkhan">উত্তরখান (Uttarkhan)</option><option value="Vatara">ভাটারা (Vatara)</option><optgroup label="Dhaka-South"><option value="Bangshal">বংশাল (Bangshal)</option><option value="Chawkbazar">চকবাজার (Chawkbazar)</option><option value="Demra">ডেমরা (Demra)</option><option value="Dhanmondi">ধানমন্ডি (Dhanmondi)</option><option value="Gandaria">গেন্ডারিয়া (Gandaria)</option><option value="Hazaribagh">হাজারীবাগ (Hazaribagh)</option><option value="Jatrabari">যাত্রাবাড়ী (Jatrabari)</option><option value="Kadamtali">কদমতলী (Kadamtali)</option><option value="Kalabagan">কলাবাগান (Kalabagan)</option><option value="Khilgaon">খিলগাঁও (Khilgaon)</option><option value="Kotwali">কোতোয়ালী (Kotwali)</option><option value="Lalbagh">লালবাগ (Lalbagh)</option><option value="Motijheel">মতিঝিল (Motijheel)</option><option value="Mugda">মুগদা (Mugda)</option><option value="Paltan">পল্টন (Paltan)</option><option value="Ramna">রমনা (Ramna)</option><option value="Sabujbagh">সবুজবাগ (Sabujbagh)</option><option value="Shahbag">শাহাবাগ (Shahbag)</option><option value="Shahjahanpur">শাহাজাহানপুর (Shahjahanpur)</option><option value="Shampur">শ্যামপুর (Shampur)</option><option value="Sutrapur">সুত্রাপুর (Sutrapur)</option><option value="Wari">ওয়ারী (Wari)</option><optgroup label="Others"><option value="Dhamrai">ধামরাই (Dhamrai)</option><option value="Dohar">দোহার (Dohar)</option><option value="Keraniganj">কেরাণীগঞ্জ (Keraniganj)</option><option value="Nawabganj">নবাবগঞ্জ (Nawabganj)</option><option value="Savar">সাভার (Savar)</option>';
        }
        if (DisList == 'Faridpur') {
            var upazilaList =
                '<option disabled selected>Select Upazila</option><option value="Alfadanga">আলফাডাঙ্গা (Alfadanga)</option><option value="Bhanga">ভাঙ্গা (Bhanga)</option><option value="Boalmari">বোয়ালমারী (Boalmari)</option><option value="Charbhadrasan">চরভদ্রসন (Charbhadrasan)</option><option value="Faridpur Sadar">ফরিদপুর সদর (Faridpur Sadar)</option><option value="Madhukhali">মধুখালী (Madhukhali)</option><option value="Nagarkanda">নগরকান্দা (Nagarkanda)</option><option value="Sadarpur">সদরপুর (Sadarpur)</option><option value="Saltha">সালথা (Saltha)</option>';
        }
        if (DisList == 'Gazipur') {
            var upazilaList =
                '<option disabled selected>Select Upazila</option><option value="Gazipur Sadar">গাজীপুর সদর (Gazipur Sadar)</option><option value="Kaliakair">কালিয়াকৈর (Kaliakair)</option><option value="Kaliganj">কালীগঞ্জ (Kaliganj)</option><option value="Kapasia">কাপাসিয়া (Kapasia)</option><option value="Sreepur">শ্রীপুর (Sreepur)</option>';
        }
        if (DisList == 'Gopalganj') {
            var upazilaList =
                '<option disabled selected>Select Upazila</option><option value="Gopalganj Sadar">গোপালগঞ্জ সদর (Gopalganj Sadar)</option><option value="Kashiani">কাশিয়ানী (Kashiani)</option><option value="Kotalipara">কোটালীপাড়া (Kotalipara)</option><option value="Muksudpur">মুকসুদপুর (Muksudpur)</option><option value="Tungipara">টুংগীপাড়া (Tungipara)</option>';
        }
        if (DisList == 'Kishoreganj') {
            var upazilaList =
                '<option disabled selected>Select Upazila</option><option value="Austagram">অষ্টগ্রাম (Austagram)</option><option value="Bajitpur">বাজিতপুর (Bajitpur)</option><option value="Bhairab">ভৈরব (Bhairab)</option><option value="Hossainpur">হোসেনপুর (Hossainpur)</option><option value="Itna">ইটনা (Itna)</option><option value="Karimganj">করিমগঞ্জ (Karimganj)</option><option value="Katiadi">কাটিয়াদী (Katiadi)</option><option value="Kishoreganj Sadar">কিশোরগঞ্জ সদর (Kishoreganj Sadar)</option><option value="Kuliarchar">কুলিয়ারচর (Kuliarchar)</option><option value="Mithamain">মিঠামইন (Mithamain)</option><option value="Nikili">নিকলী (Nikili)</option><option value="Pakundia">পাকুন্দিয়া (Pakundia)</option><option value="Tarail">তাড়াইল (Tarail)</option>';
        }
        if (DisList == 'Madaripur') {
            var upazilaList =
                '<option disabled selected>Select Upazila</option><option value="Dasar">ডাসার (Dasar)</option><option value="Kalkini">কালকিনি (Kalkini)</option><option value="Madaripur Sadar">মাদারীপুর সদর (Madaripur Sadar)</option><option value="Rajoir">রাজৈর (Rajoir)</option><option value="Shibchar">শিবচর (Shibchar)</option>';
        }
        if (DisList == 'Manikganj') {
            var upazilaList =
                '<option disabled selected>Select Upazila</option><option value="Daulatpur">দৌলতপুর (Daulatpur)</option><option value="Ghior">ঘিওর (Ghior)</option><option value="Harirampur">হরিরামপুর (Harirampur)</option><option value="Manikganj Sadar">মানিকগঞ্জ সদর (Manikganj Sadar)</option><option value="Sarutia">সাটুরিয়া (Sarutia)</option><option value="Shivalaya">শিবালয় (Shivalaya)</option><option value="Singair">সিংগাইর (Singair)</option>';
        }
        if (DisList == 'Munshiganj') {
            var upazilaList =
                '<option disabled selected>Select Upazila</option><option value="Gazaria">গজারিয়া (Gazaria)</option><option value="Lohajang">লৌহজং (Lohajang)</option><option value="Munshiganj Sadar">মুন্সিগঞ্জ সদর (Munshiganj Sadar)</option><option value="Sirajdikhan">সিরাজদিখান (Sirajdikhan)</option><option value="Sreenagar">শ্রীনগর (Sreenagar)</option><option value="Tongibari">টংগীবাড়ী (Tongibari)</option>';
        }
        if (DisList == 'Narayanganj') {
            var upazilaList =
                '<option disabled selected>Select Upazila</option><option value="Araihazar">আড়াইহাজার (Araihazar)</option><option value="Baidder Bazar">বৈদ্যের বাজার (Baidder Bazar)</option><option value="Bandar">বন্দর (Bandar)</option><option value="Fatullah">ফতুল্লা (Fatullah)</option><option value="Narayanganj Sadar">নারায়নগঞ্জ  সদর (Narayanganj Sadar)</option><option value="Rupganj">রূপগঞ্জ (Rupganj)</option><option value="Siddhirganj">সিদ্দিরগঞ্জ (Siddhirganj)</option><option value="Sonargaon">সোনারগাঁও (Sonargaon)</option>';
        }
        if (DisList == 'Narsingdi') {
            var upazilaList =
                '<option disabled selected>Select Upazila</option><option value="Belabo">বেলাবো (Belabo)</option><option value="Monohardi">মনোহরদি (Monohardi)</option><option value="Narsingdi Sadar">নরসিংদী সদর (Narsingdi Sadar)</option><option value="Palash">পলাশ (Palash)</option><option value="Raipura">রাইপুরা (Raipura)</option><option value="Shibpur">শিবপুর (Shibpur)</option>';
        }
        if (DisList == 'Rajbari') {
            var upazilaList =
                '<option disabled selected>Select Upazila</option><option value="Baliakandi">বালিয়াকান্দি (Baliakandi)</option><option value="Goalanda">গোয়ালন্দ (Goalanda)</option><option value="Kalukhali">কালুখালী (Kalukhali)</option><option value="Pangsha">পাংশা (Pangsha)</option><option value="Rajbari Sadar">রাজবাড়ী সদর (Rajbari Sadar)</option>';
        }
        if (DisList == 'Shariatpur') {
            var upazilaList =
                '<option disabled selected>Select Upazila</option><option value="Bhedarganj">ভেদরগঞ্জ (Bhedarganj)</option><option value="Damudya">ডামুড্যা (Damudya)</option><option value="Gosairhat">গোসাইরহাট (Gosairhat)</option><option value="Jazeera">জাজিরা (Jazeera)</option><option value="Naria">নড়িয়া (Naria)</option><option value="Shariatpur Sadar">শরীয়তপুর সদর (Shariatpur Sadar)</option><option value="Shakhipur">সখিপুর (Shakhipur)</option>'
        }
        if (DisList == 'Tangail') {
            var upazilaList =
                '<option disabled selected>Select Upazila</option><option value="Basail">বাসাইল (Basail)</option><option value="Bhuapur">ভুয়াপুর (Bhuapur)</option><option value="Delduar">দেলদুয়ার (Delduar)</option><option value="Dhanbari">ধনবাড়ী (Dhanbari)</option><option value="Ghatail">ঘাটাইল (Ghatail)</option><option value="Gopalpur">গোপালপুর (Gopalpur)</option><option value="Kalihati">কালাহাতি (Kalihati)</option><option value="Madhupur">মধুপুর (Madhupur)</option><option value="Mirzapur">মির্জাপুর (Mirzapur)</option><option value="Nagarpur">নাগরপুর (Nagarpur)</option><option value="Shakhipur">সখিপুর (Shakhipur)</option><option value="Tangail">টাঙ্গাইল (Tangail)</option>'
        }

        //Khulna Division

        if (DisList == 'Bagerhat') {
            var upazilaList =
                '<option disabled selected>Select Upazila</option><option value="Bagerhat Sadar">বাগেরহাট সদর (Bagerhat Sadar)</option><option value="Chitalmari">চিতলমারী (Chitalmari)</option><option value="Fakirhat">ফকিরহাট (Fakirhat)</option><option value="Kachua">কচুয়া (Kachua)</option><option value="Mollahat">মোল্লাহাট (Mollahat)</option><option value="Mongla">মোংলা (Mongla)</option><option value="Morrelganj">মোড়েলগঞ্জ (Morrelganj)</option><option value="Sarankhola">শরণখোলা (Sarankhola)</option>'
        }
        if (DisList == 'Chuadanga') {
            var upazilaList =
                '<option disabled selected>Select Upazila</option><option value="Alamdanga ">আলমডাঙ্গা (Alamdanga)</option><option value="Chuadanga Sadar">চুয়াডাঙ্গা সদর (Chuadanga Sadar)</option><option value="Damurhuda">দামুড়হুদা (Damurhuda)</option><option value="Darsana">দর্শনা (Darsana)</option><option value="Jibannagar">জীবননগর (Jibannagar)</option>'
        }
        if (DisList == 'Jashore') {
            var upazilaList =
                '<option disabled selected>Select Upazila</option><option value="Abhaynagar ">অভয়নগর (Abhaynagar)</option><option value="Bagherpara">বাঘারপাড়া (Bagherpara)</option><option value="Chaugachha ">চৌগাছা (Chaugachha)</option><option value="Jashore Sadar">যশোর সদর (Jashore Sadar)</option><option value="Jhikargacha">ঝিকরগাছা (Jhikargacha)</option><option value="Keshabpur">কেশবপুর (Keshabpur)</option><option value="Manirampur">মনিরামপুর (Manirampur)</option><option value="Sharsha">শার্শা (Sharsha)</option>'
        }
        if (DisList == 'Jhenaidah') {
            var upazilaList =
                '<option disabled selected>Select Upazila</option><option value="Harinakundu">হরিণাকুণ্ড (Harinakundu)</option><option value="Jhenaidah Sadar">ঝিনাইদহ সদর (Jhenaidah Sadar)</option><option value="Kaliganj">কালীগঞ্জ (Kaliganj)</option><option value="Kotchandpur">কোটচাঁদপুর (Kotchandpur)</option><option value="Maheshpur">মহেশপুর (Maheshpur)</option><option value="Shailkupa">শৈলকুপা (Shailkupa)</option>'
        }
        if (DisList == 'Khulna') {
            var upazilaList =
                '<option disabled selected>Select Upazila</option><option value="Batiaghata">বটিয়াঘাটা (Batiaghata)</option><option value="Dacope">দাকোপ (Dacope)</option><option value="Dighalia">দিঘলিয়া (Dighalia)</option><option value="Dumuria">ডুমুরিয়া (Dumuria)</option><option value="Koyra">কয়রা (Koyra)</option><option value="Paikgachha">পাইকগাছা (Paikgachha)</option><option value="Phultala">ফুলতলা (Phultala)</option><option value="Rupsha">রূপসা (Rupsha)</option><option value="Terokhada">তেরখাদা (Terokhada)</option>'
        }
        if (DisList == 'Kustia') {
            var upazilaList =
                '<option disabled selected>Select Upazila</option><option value="Bheramara">ভেড়ামারা (Bheramara)</option><option value="Daulatpur">দৌলতপুর (Daulatpur)</option><option value="Khoksa">খোকসা (Khoksa)</option><option value="Kumarkhali">কুমারখালি (Kumarkhali)</option><option value="Kushtia Sadar">কুষ্টিয়া সদর (Kushtia Sadar)</option>'
        }
        if (DisList == 'Magura') {
            var upazilaList =
                '<option disabled selected>Select Upazila</option><option value="Magura Sadar">মাগুরা সদর (Magura Sadar)</option><option value="Mohammadpur">মহম্মদপুর (Mohammadpur)</option><option value="Shalikha">শালিখা (Shalikha)</option><option value="Sreepur">শ্রীপুর (Sreepur)</option>'
        }
        if (DisList == 'Meherpur') {
            var upazilaList =
                '<option disabled selected>Select Upazila</option><option value="Meherpur Sadar">মেহেরপুর সদর (Meherpur Sadar)</option><option value="Mujibnagar">মুজিবনগর (Mujibnagar)</option><option value="Gangni">গাংনী (Gangni)</option>'
        }
        if (DisList == 'Narail') {
            var upazilaList =
                '<option disabled selected>Select Upazila</option><option value="Lohagara">লোহাগড়া (Lohagara)</option><option value="Kalia">কালিয়া (Kalia)</option><option value="Narail Sadar">নড়াইল সদর (Narail Sadar)</option>'
        }
        if (DisList == 'Satkhira') {
            var upazilaList =
                '<option disabled selected>Select Upazila</option><option value="Assasuni">আশাশুনি (Assasuni)</option><option value="Debhata">দেবহাটা (Debhata)</option><option value="Kalaroa">কলারোয়া (Kalaroa)</option><option value="Kaliganj">কালীগঞ্জ (Kaliganj)</option><option value="Satkhira Sadar">সাতক্ষীরা সদর (Satkhira Sadar)</option><option value="Shyamnagar">শ্যামনগর (Shyamnagar)</option><option value="Tala">তালা (Tala)</option>'
        }

        //Mymensingh Division

        if (DisList == 'Mymensingh') {
            var upazilaList =
                '<option disabled selected>Select Upazila</option><option value="Bhaluka">ভালুকা (Bhaluka)</option><option value="Dhobaura">ধোবাউড়া (Dhobaura)</option><option value="Fulbaria">ফুলবাড়িয়া (Fulbaria)</option><option value="Gafargaon">গফরগাঁও (Gafargaon)</option><option value="Gauripur">গৌরীপুর (Gauripur)</option><option value="Haluaghat">হালুয়াঘাট (Haluaghat)</option><option value="Ishwarganj">ঈশ্বরগঞ্জ (Ishwarganj)</option><option value="Muktagacha">মুক্তাগাছা (Muktagacha)</option><option value="Mymensingh Sadar">ময়মনসিংহ সদর (Mymensingh Sadar)</option><option value="Nandail">নান্দাইল (Nandail)</option><option value="Phulpur">ফুলপুর (Phulpur)</option><option value="Tarakanda">তারাকান্দা (Tarakanda)</option><option value="Trishal">ত্রিশাল (Trishal)</option>'
        }

        if (DisList == 'Netrokona') {
            var upazilaList =
                '<option disabled selected>Select Upazila</option><option value="Atpara">আটপাড়া (Atpara)</option><option value="Barhatta">বারহাট্টা (Barhatta)</option><option value="Durgapur">দূর্গাপুর (Durgapur)</option><option value="Kendua">কেন্দুয়া (Kendua)</option><option value="Khaliajuri">খা‌লিয়াজুরী (Khaliajuri)</option><option value="Kolmkakanda">কমলাকান্দা (Kolmkakanda)</option><option value="Modon">মদন (Modon)</option><option value="Mohangonj">মোহনগঞ্জ (Mohangonj)</option><option value="Netrokona Sadar">নেত্রকোণা সদর (Netrokona Sadar)</option><option value="Purbodhola">পূর্বধলা (Purbodhola)</option>'
        }
        if (DisList == 'Jamalpur') {
            var upazilaList =
                '<option disabled selected>Select Upazila</option><option value="Bakshiganj">বকশীগঞ্জ (Bakshiganj)</option><option value="Dewanganj">দেওয়ানগঞ্জ (Dewanganj)</option><option value="Islampur">ইসলামপুর (Islampur)</option><option value="Jamalpur Sadar">জামালপুর সদর(Jamalpur Sadar)</option><option value="Madarganj">মাদারগঞ্জ (Madarganj)</option><option value="Melandaha">মেলান্দহ (Melandaha)</option><option value="Sharishabari">সরিষাবাড়ী (Sharishabari)</option>'
        }
        if (DisList == 'Sherpur') {
            var upazilaList =
                '<option disabled selected>Select Upazila</option><option value="Jhenaigati">ঝিনাইগাতী (Jhenaigati)</option><option value="Nakla">নকলা (Nakla)</option><option value="Nalitabari">নালিতাবাড়ি (Nalitabari)</option><option value="Sherpur Sadar">শেরপুর সদর (Sherpur Sadar)</option><option value="Sreebardi">শ্রীবর্দী (Sreebardi)</option>'
        }

        //Rajshahi Division
        if (DisList == 'Bagura') {
            var upazilaList =
                '<option disabled selected>Select Upazila</option><option value="Adamdighi">আদমদিঘী (Adamdighi)</option><option value="Bagura Sadar">বগুড়া সদর  (Bagura Sadar)</option><option value="Dhunat">ধুনট (Dhunat)</option><option value="Dupchanchia">দুপচাচিয়া (Dupchanchia)</option><option value="Gabtali">গাবতলী (Gabtali)</option><option value="Kahaloo">কাহালু (Kahaloo)</option><option value="Nandigram">নন্দিগ্রাম (Nandigram)</option><option value="Sahajanpur">শাহাজাহানপুর (Sahajanpur)</option><option value="Sariakandi">সারিয়াকান্দি (Sariakandi)</option><option value="Sherpur">শেরপুর (Sherpur)</option><option value="Shibganj">শিবগঞ্জ (Shibganj)</option><option value="Sonatala">সোনাতলা (Sonatala)</option>'
        }
        if (DisList == 'Chapainawabganj') {
            var upazilaList =
                '<option disabled selected>Select Upazila</option><option value="Bholahat">ভোলাহাট (Bholahat)</option><option value="Chapainawabganj Sadar">চাঁপাইনবাবগঞ্জ সদর  (Chapainawabganj Sadar)</option><option value="Gomastapur">গোমস্তাপুর (Gomastapur)</option><option value="Shibganj">শিবগঞ্জ (Shibganj)</option>'
        }
        if (DisList == 'Joypurhat') {
            var upazilaList =
                '<option disabled selected>Select Upazila</option><option value="Akkelpur">আক্কেলপুর (Akkelpur)</option><option value="Joypurhat Sadar">জয়পুরহাট সদর (Joypurhat Sadar)</option><option value="Kalai">কালাই (Kalai)</option><option value="Khetlal">খেতলাল (Khetlal)</option><option value="Panchbibi">পাঁচবিবি (Panchbibi)</option>'
        }
        if (DisList == 'Naogaon') {
            var upazilaList =
                '<option disabled selected>Select Upazila</option><option value="Atrai">আত্রাই (Atrai)</option><option value="Badalgachhi">বদলগাছি (Badalgachhi)</option><option value="Dhamoirhat">ধামইরহাট (Dhamoirhat)</option><option value="Manda">মান্দা (Manda)</option><option value="Mohadevpur">মহাদেবপুর (Mohadevpur)</option><option value="Naogaon Sadar">নওগাঁ সদর (Naogaon Sadar)</option><option value="Niamatpur">নিয়ামতপুর (Niamatpur)</option><option value="Patnitala">পত্মীতলা (Patnitala)</option><option value="Porsha">পোরশা (Porsha)</option><option value="Raninagar">রানীনগর (Raninagar)</option><option value="Sapahar">সাপাহার (Sapahar)</option>'
        }
        if (DisList == 'Natore') {
            var upazilaList =
                '<option disabled selected>Select Upazila</option><option value="Bagatipara">বাগাতিপাড়া (Bagatipara)</option><option value="Baraigram">বড়াইগ্রাম (Baraigram)</option><option value="Gurudaspur">গুরুদাসপুর (Gurudaspur)</option><option value="Lalpur">লালপুর (Lalpur)</option><option value="Natore Sadar">নাটোর সদর (Natore Sadar)</option><option value="Naldanga">নলডাঙ্গা (Naldanga)</option><option value="Singra">সিংড়া (Singra)</option>'
        }
        if (DisList == 'Pabna') {
            var upazilaList =
                '<option disabled selected>Select Upazila</option><option value="Atgharia">আটঘরিয়া (Atgharia)</option><option value="Bera">বেড়া (Bera)</option><option value="Bhangura">ভাঙ্গুরা (Bhangura)</option><option value="Chatmohar">চাটমোহর (Chatmohar)</option><option value="Faridpur">ফরিদপুর (Faridpur)</option><option value="Ishwardi">ঈশ্বরদী (Ishwardi)</option><option value="Pabna Sadar">পাবনা সদর (Pabna Sadar)</option><option value="Santhia">সাঁথিয়া (Santhia)</option><option value="Suzanagar">সুজানগর (Suzanagar)</option>'
        }
        if (DisList == 'Rajshahi') {
            var upazilaList =
                '<option disabled selected>Select Upazila</option><option value="Bagmara">বাগমারা (Bagmara)</option></option><option value="Bagha">বাঘা (Bagha)</option><option value="Boalia">বোয়ালিয়া (Boalia)</option><option value="Charghat">চারঘাট (Charghat)</option><option value="Durgapur">দুর্গাপুর (Durgapur)</option><option value="Godagari">গোদাগাড়ি (Godagari)</option><option value="Mohanpur">মোহনপুর (Mohanpur)</option><option value="Motihar">মতিহার (Motihar)</option><option value="Paba">পবা (Paba)</option><option value="Puthia">পুঠিয়া (Puthia)</option><option value="Rajpara">রাজপাড়া (Rajpara)</option><option value="Shah Makhdum">শাহ মখদুম (Shah Makhdum)</option><option value="Tanore">তানোর (Tanore)</option>'
        }
        if (DisList == 'Sirajganj') {
            var upazilaList =
                '<option disabled selected>Select Upazila</option><option value="Belkuchi">বেলকুচি (Belkuchi)</option><option value="Chauhali">চৌহালী (Chauhali)</option><option value="Kamarkhanda">কামারখন্দ (Kamarkhanda)</option><option value="Kazipur">কাজীপুর (Kazipur)</option><option value="Raiganj">রায়গঞ্জ (Raiganj)</option><option value="Shahjadpur">শাহজাদপুর (Shahjadpur)</option><option value="Sirajganj Sadar">সিরাজগঞ্জ সদর (Sirajganj Sadar)</option><option value="Tarash">তাড়াশ (Tarash)</option><option value="Ullapara">উল্লাপাড়া (Ullapara)</option>'
        }

        //Rangpur Division

        if (DisList == 'Dinajpur') {
            var upazilaList =
                '<option disabled selected>Select Upazila</option><option value="Biral">বিরল (Biral)</option><option value="Birampur">বিরামপুর (Birampur)</option><option value="Birganj">বীরগঞ্জ (Birganj)</option><option value="Bochaganj">বোঁচাগঞ্জ (Bochaganj)</option><option value="Chirirbandar">চিরিরবন্দর (Chirirbandar)</option><option value="Dinajpur Sadar">দিনাজপুর সদর (Dinajpur Sadar)</option><option value="Ghoraghat">ঘোড়াঘাট (Ghoraghat)</option><option value="Hakimpur">হাকিমপুর (Hakimpur)</option><option value="Kaharole">কাহারোল (Kaharole)</option><option value="Khansama">খানসামা (Khansama)</option><option value="Nawabganj">নবাবগঞ্জ (Nawabganj)</option><option value="Parbatipur">পার্বতীপুর (Parbatipur)</option><option value="Phulbari">ফুলবাড়ী (Phulbari)</option>'
        }
        if (DisList == 'Gaibandha') {
            var upazilaList =
                '<option disabled selected>Select Upazila</option><option value="Fulchhari">ফুলছড়ি (Fulchhari)</option><option value="Gaibandha Sadar">গাইবান্ধা সদর (Gaibandha Sadar)</option><option value="Gobindaganj">গোবিন্দগঞ্জ (Gobindaganj)</option><option value="Palashbari">পলাশবাড়ী (Palashbari)</option><option value="Sadullapur">সাদুল্লাপুর (Sadullapur)</option><option value="Saghata">সাঘাটা (Saghata)</option><option value="Sundarganj">সুন্দরগঞ্জ (Sundarganj)</option>'
        }
        if (DisList == 'Kurigram') {
            var upazilaList =
                '<option disabled selected>Select Upazila</option><option value="Bhurungamari">ভূরুঙ্গামারী (Bhurungamari)</option><option value="Char Rajibpur">চর রাজিবপুর (Char Rajibpur)</option><option value="Chilmari">চিলমারী (Chilmari)</option><option value="Kurigram Sadar">কুড়িগ্রাম সদর (Kurigram Sadar)</option><option value="Nageshwari">নাগেশ্বরী (Nageshwari)</option><option value="Phulbari">ফুলবাড়ী (Phulbari)</option><option value="Rajarhat">রাজারহাট (Rajarhat)</option><option value="Rowmari">রৌমারী (Rowmari)</option><option value="Ulipur">উলিপুর (Ulipur)</option>'
        }
        if (DisList == 'Lalmonirhat') {
            var upazilaList =
                '<option disabled selected>Select Upazila</option><option value="Aditmari">আদিতমারী (Aditmari)</option><option value="Hatibandha">হাতীবান্ধা (Hatibandha)</option><option value="Kaliganj">কালীগঞ্জ (Kaliganj)</option><option value="Lalmonirhat Sadar">লালমনিরহাট সদর (Lalmonirhat Sadar)</option><option value="Patgram">পাটগ্রাম (Patgram)</option>'
        }
        if (DisList == 'Nilphamari') {
            var upazilaList =
                '<option disabled selected>Select Upazila</option><option value="Dimla">ডিমলা (Dimla)</option><option value="Domar">ডোমার (Domar)</option><option value="Jaldhaka">জলঢাকা (Jaldhaka)</option><option value="Kishoreganj">কিশোরগঞ্জ (Kishoreganj)</option><option value="Nilphamari Sadar">নীলফামারী সদর (Nilphamari Sadar)</option><option value="Saidpur">সৈয়দপুর (Saidpur)</option>'
        }
        if (DisList == 'Panchagarh') {
            var upazilaList =
                '<option disabled selected>Select Upazila</option><option value="Atwari">আটোয়ারী (Atwari)</option><option value="Boda">বোদা (Boda)</option><option value="Debiganj">দেবীগঞ্জ (Debiganj)</option><option value="Panchagarh Sadar">পঞ্চগড় সদর (Panchagarh Sadar)</option><option value="Tetulia">তেঁতুলিয়া (Tetulia)</option>'
        }
        if (DisList == 'Rangpur') {
            var upazilaList =
                '<option disabled selected>Select Upazila</option><option value="Badarganj">বদরগঞ্জ (Badarganj)</option><option value="Gangachhara">গঙ্গাছড়া (Gangachhara)</option><option value="Kaunia">কাউনিয়া (Kaunia)</option><option value="Mithapukur">মিঠাপুকুর (Mithapukur)</option><option value="Pirgachha">পীরগাছা (Pirgachha)</option><option value="Pirganj">পীরগঞ্জ (Pirganj)</option><option value="Rangpur Sadar">রংপুর সদর (Rangpur Sadar)</option><option value="Taraganj">তারাগঞ্জ (Taraganj)</option>'
        }
        if (DisList == 'Thakurgaon') {
            var upazilaList =
                '<option disabled selected>Select Upazila</option><option value="Baliadangi">বালিয়াডাঙ্গী (Baliadangi)</option><option value="Haripur">হরিপুর (Haripur)</option><option value="Pirganj">পীরগঞ্জ (Pirganj)</option><option value="Ranisankail">রাণীশংকৈল (Ranisankail )</option><option value="Thakurgaon Sadar">ঠাকুরগাঁও সদর (Thakurgaon Sadar)</option>'
        }
        //Sylhet Division
        if (DisList == 'Habiganj') {
            var upazilaList =
                '<option disabled selected>Select Upazila</option><option value="Azmiriganj">আজমিরীগঞ্জ (Azmiriganj)</option><option value="Bahubal">বাহুবল (Bahubal)</option><option value="Baniachang">বানিয়াচং (Baniachang)</option><option value="Chunarughat">চুনারুঘাট (Chunarughat)</option><option value="Habiganj Sadar">হবিগঞ্জ সদর (Habiganj Sadar)</option><option value="Lakhai">লাখাই (Lakhai)</option><option value="Madhabpur">মাধবপুর (Madhabpur)</option><option value="Nabiganj">নবীগঞ্জ (Nabiganj)</option><option value="Shayestaganj">শায়েস্তাগঞ্জ (Shayestaganj)</option>'
        }
        if (DisList == 'Moulvibazar') {
            var upazilaList =
                '<option disabled selected>Select Upazila</option><option value="Barlekha">বড়লেখা (Barlekha)</option><option value="Juri">জুড়ী (Juri)</option><option value="Kamalganj">কমলগঞ্জ (Kamalganj)</option><option value="Kulaura">কুলাউড়া (Kulaura)</option><option value="Moulvibazar">মৌলভীবাজার (Moulvibazar)</option><option value="Rajnagar">রাজনগর (Rajnagar)</option><option value="Sreemongal">শ্রীমঙ্গল (Sreemongal)</option>'
        }
        if (DisList == 'Sunamganj') {
            var upazilaList =
                '<option disabled selected>Select Upazila</option><option value="Bishwamvarpur">বিশ্বম্ভরপুর (Bishwamvarpur)</option><option value="Chhatak">ছাতক (Chhatak)</option><option value="Derai">দিরাই (Derai)</option><option value="Dharampasha">ধরমপাশা (Dharampasha)</option><option value="Dowarabazar">দোয়ারাবাজার (Dowarabazar)</option><option value="Jagannathpur">জগন্নাথপুর (Jagannathpur)</option><option value="Jamalganj">জামালগঞ্জ (Jamalganj)</option><option value="Shantiganj-South Sunamganj">শান্তিগঞ্জ-দক্ষিণ সুনামগঞ্জ (Shantiganj-South Sunamganj)</option><option value="Sulla">শাল্লা (Sulla)</option><option value="Sunamganj">সুনামগঞ্জ (Sunamganj)</option><option value="Tahirpur">তাহিরপুর (Tahirpur)</option>'
        }
        if (DisList == 'Sylhet') {
            var upazilaList =
                '<option disabled selected>Select Upazila</option><option value="Balaganj">বালাগঞ্জ (Balaganj)</option><option value="Beanibazar">বিয়ানিবাজার (Beanibazar)</option><option value="Bimanbondar">বিমানবন্দর (Bimanbondar)</option><option value="Bishwanath">বিশ্বনাথ (Bishwanath)</option><option value="Companiganj">কোম্পানীগঞ্জ (Companiganj)</option><option value="Fenchuganj">ফেঞ্চুগঞ্জ (Fenchuganj)</option><option value="Golapganj">গোলাপগঞ্জ (Golapganj)</option><option value="Gowainghat">গোয়াইনঘাট (Gowainghat)</option><option value="Jaintiapur">জৈন্তাপুর (Jaintiapur)</option><option value="Jalalabad">জালালাবাদ (Jalalabad)</option><option value="Kanaighat">কানাইঘাট (Kanaighat)</option><option value="Kotwali">কোতয়ালী (Kotwali)</option><option value="Maglabazar">মগলাবাজার (Maglabazar)</option><option value="Osmani Nagar">ওসমানী নগর (Osmani Nagar)</option><option value="Shahporan">শাহপরান (Shahporan)</option><option value="South Shurma">দক্ষিণ সুরমা (South Shurma)</option><option value="Sylhet Sadar">সিলেট সদর (Sylhet Sadar)</option><option value="Zakiganj">জকিগঞ্জ (Zakiganj)</option>'
        }
        document.getElementById("upazila").innerHTML = upazilaList;
    }


    // Thana Section select
    function thanaList() {
        var DisList = document.getElementById('district').value;

        //Barishal Division

        if (DisList == 'Barguna') {
            var thanaList =
                '<option disabled selected>Select Thana</option><option value="Amtali">আমতলী (Amtali)</option><option value="Bamna">বামনা (Bamna)</option><option value="Barguna Sadar">বরগুনা সদর (Barguna Sadar)</option><option value="Betagi">বেতাগী (Betagi)</option><option value="Patharghata">পাথরঘাটা (Patharghata)</option><option value="Taltali">তালতলী (Taltali)</option>';
        }
        if (DisList == 'Barishal') {
            var thanaList =
                '<option disabled selected>Select Thana</option><option value="Agailjhara">আগৈলঝাড়া (Agailjhara)</option><option value="Babuganj">বাবুগঞ্জ (Babuganj)</option><option value="Bakerganj">বাকেরগঞ্জ (Bakerganj)</option><option value="Banaripara">বানারীপাড়া (Banaripara)</option><option value="Barishal Sadar">বরিশাল সদর (Barishal Sadar)</option><option value="Gournadi">গৌড়নদী (Gournadi)</option><option value="Hijla">হিজলা (Hijla)</option><option value="Mehendiganj">মেহেন্দিগঞ্জ (Mehendiganj)</option><option value="Muladi">মুলাদী (Muladi)</option><option value="Wazirpur">উজিরপুর (Wazirpur)</option>'
        }
        if (DisList == 'Bhola') {
            var thanaList =
                '<option disabled selected>Select Thana</option><option value="Bhola Sadar">ভোলা সদর (Bhola Sadar)</option><option value="Burhanuddin">বোরহান উদ্দিন (Burhanuddin)</option><option value="Char Fasson">চরফ্যাশন (Char Fasson)</option><option value="Daulatkhan">দৌলতখান (Daulatkhan)</option><option value="Lalmohan">লালমোহন (Lalmohan)</option><option value="Manpura">মনপুরা (Manpura)</option><option value="Tazumuddin">তজুমদ্দিন (Tazumuddin)</option>'
        }
        if (DisList == 'Jhalokati') {
            var thanaList =
                '<option disabled selected>Select Thana</option><option value="Jhalokati Sadar">ঝালকাঁঠি সদর (Jhalokati Sadar)</option><option value="Kathalia">কাঠালিয়া (Kathalia)</option><option value="Nalchity">নলছিটি (Nalchity)</option><option value="Rajapur">রাজাপুর (Rajapur)</option>'
        }
        if (DisList == 'Patuakhali') {
            var thanaList =
                '<option disabled selected>Select Thana</option><option value="Dumki">দুমকি (Dumki)</option><option value="Patuakhali Sadar">পটুয়াখালী সদর (Patuakhali Sadar)</option><option value="Mirzaganj">মির্জাগঞ্জ (Mirzaganj)</option><option value="Bauphal">বাউফল (Bauphal)</option><option value="Galachipa">গলাচিপা (Galachipa)</option><option value="Dashmina">দশমিনা (Dashmina)</option><option value="Rangabali">রাঙ্গাবালী (Rangabali)</option><option value="Kolapara">কলাপাড়া (Kolapara)</option>'
        }
        if (DisList == 'Pirojpur') {
            var thanaList =
                '<option disabled selected>Select Thana</option><option value="Bhandaria">ভান্ডারিয়া (Bhandaria</option><option value="Kawkhali">কাউখালী (Kawkhali)</option><option value="Mathbaria">মঠবাড়ীয়া (Mathbaria)</option><option value="Nazirpur">নাজিরপুর (Nazirpur)</option><option value="Nesarabad">নেছারাবাদ (Nesarabad)</option><option value="Pirojpur Sadar">পিরোজপুর সদর (Pirojpur Sadar)</option><option value="Indurkani">ইন্দুরকানী (Indurkani)</option>'
        }

        //Chittagong Division
        if (DisList == 'Bandarban') {
            var thanaList =
                '<option disabled selected>Select Thana</option><option value="Ali Kadam">আলী কদম (Ali Kadam)</option><option value="Bandarban Sadar">বান্দরবান সদর (Bandarban Sadar)</option><option value="Naikhongchhari">নাইক্ষ্যাংছড়ি (Naikhongchhari)</option><option value="Rowangchhari">রোয়াংছড়ি (Rowangchhari)</option><option value="Ruma">রুমা (Ruma)</option><option value="Thanchi">থানচি (Thanchi)</option>'
        }
        if (DisList == 'Brahmanbaria') {
            var thanaList =
                '<option disabled selected>Select Thana</option><option value="Brahmanbaria Sadar">ব্রাহ্মণবাড়িয়া সদর (Brahmanbaria Sadar)</option><option value="Kasba">কসবা (Kasba)</option><option value="Akhaura">আখাউড়া (Akhaura)</option><option value="Ashuganj">আশুগঞ্জ (Ashuganj)</option><option value="Bancharampur">বাঞ্ছারামপুর (Bancharampur)</option><option value="Bijoynagar">বিজয়নগর (Bijoynagar)</option><option value="Nasirnagar">নাসিরনগর (Nasirnagar)</option><option value="Nabinagar">নবীনগর (Nabinagar)</option><option value="Sarail">সরাইল (Sarail)</option>'
        }
        if (DisList == 'Chandpur') {
            var thanaList =
                '<option disabled selected>Select Thana</option><option value="Chandpur Sadar">চাঁদপুর সদর (Chandpur Sadar)</option><option value="Faridganj">ফরিদগঞ্জ (Faridganj)</option><option value="Haimchar">হাইমচর (Haimchar)</option><option value="Kachua">কচুয়া (Kachua)</option><option value="Matlab Dakshin">মতলব দক্ষিণ (Matlab Dakshin)</option><option value="Matlab Uttar">মতলব উত্তর (Matlab Uttar)</option><option value="Shahrasti">শহরাস্তি (Shahrasti)</option>'
        }
        if (DisList == 'Chattogram') {
            var thanaList =
                '<option disabled selected>Select Thana</option><option value="Akbarshah">আকবরশাহ (Akbarshah)</option><option value="Anwara">আনোয়ারা (Anwara)</option><option value="Bakoliya">বাকলিয়া (Bakoliya)</option><option value="Bandar">বন্দর (Bandar)</option><option value="Banshkhali">বাশঁখালী (Banshkhali)</option><option value="Bhujpur">ভূজপুর (Bhujpur)</option><option value="Boalkhali">বোয়ালখালী (Boalkhali)</option><option value="Bayazid">বায়েজিদ (Bayazid)</option><option value="Chandgaon">চাঁদগাও (Chandgaon)</option><option value="Chandanaish">চন্দনাইশ (Chandanaish)</option><option value="Chawkbazar">চকবাজার (Chawbazar)</option><option value="Double Mooring">ডবলমুরিং (Double Mooring)</option><option value="EPZ Thana">ইপিজেড থানা (EPZ Thana)</option><option value="Fatikchhari">ফটিকছড়ি (Fatikchhari)</option><option value="Halishahar">হালিশহর (Halishahar)</option><option value="Hathazari">হাটহাজারী (Hathazari)</option><option value="Karnaphuli">কর্ণফুলী (Karnaphuli)</option><option value="Khulshi">খুলশী (Khulshi)</option><option value="Kotwali">কোতোয়ালী (Kotwali)</option><option value="Lohagara">লোহাগাড়া (Lohagara)</option><option value="Mirsharai">মীরসরাই (Mirsharai)</option><option value="Panchlaish">পাঁচলাইশ (Panchlaish)</option><option value="Pahartali">পাহাড়তলী (Pahartali)</option><option value="Patenga">পতেঙ্গা (Patenga)</option><option value="Patiya">পটিয়া (Patiya)</option><option value="Rangunia">রাঙ্গুনিয়া (Rangunia)</option><option value="Raozan">রাউজান (Raozan)</option><option value="Sadarghat">সদরঘাট (Sadarghat)</option><option value="Sandwip">সন্দ্বীপ (Sandwip)</option><option value="Satkania">সাতকানিয়া (Satkania)</option><option value="Sitakunda">শীতাকুন্ড (Sitakunda)</option>'
        }
        if (DisList == 'Cumilla') {
            var thanaList =
                '<option disabled selected>Select Thana</option><option value="Barura">Barura</option><option value="Brahmanpara">ব্রাহ্মণপাড়া (Brahmanpara)</option><option value="Burichong">বুড়িচং (Burichong)</option><option value="Comilla Sadar">কুমিল্লা সদর  (Comilla Sadar)</option><option value="Comilla Sadar Dakshin">কুমিল্লা সদর দক্ষিণ (Comilla Sadar Dakshin)</option><option value="Chandina">চান্দিনা (Chandina)</option><option value="Chauddagram">চৌদ্দগ্রাম (Chauddagram)</option><option value="Daudkandi">দাউদকান্দি  (Daudkandi)</option><option value="Debidwar">দেবিদ্বার (Debidwar)</option><option value="Homna">হোমনা (Homna)</option><option value="Laksam">লাকসাম (Laksam)</option><option value="Lalmai">লালমাই (Lalmai)</option><option value="Monohorganj">মনোহরগঞ্জ (Monohorganj)</option><option value="Meghna">মেঘনা (Meghna)</option><option value="Muradnagar">মুরাদনগর (Muradnagar)</option><option value="Nangalkot">নাঙ্গলকোট (Nangalkot)</option><option value="Titas">তিতাস(Titas)</option>'
        }
        if (DisList == 'Cox\'s Bazar') {
            var thanaList =
                '<option disabled selected>Select Thana</option><option value="Chakaria">চকরিয়া (Chakaria)</option><option value="Cox\'s Bazar">কক্সবাজার সদর (Cox\'s Bazar)</option><option value="Kutubdia">কুতুবদিয়া (Kutubdia)</option><option value="Maheshkhali">মহেশখালী (Maheshkhali)</option><option value="Ramu">রামু (Ramu)</option><option value="Ukhia">উখিয়া (Ukhia)</option><option value="Pekua">পেকুয়া (Pekua)</option><option value="Eidgaon">ঈদগাঁও (Eidgaon)</option>'
        }
        if (DisList == 'Feni') {
            var thanaList =
                '<option disabled selected>Select Thana</option><option value="Chhagalnaiya">ছাগলনাইয়া (Chhagalnaiya)</option><option value="Daganbhuiyan">দাগনভূইয়া (Daganbhuiyan)</option><option value="Feni Sadar">ফেনী সদর (Feni Sadar)</option><option value="Fulgazi">ফুলগাজী (Fulgazi)</option><option value="Parshuram">পরশুরাম (Parshuram)</option><option value="Sonagazi">সোনাগাজী (Sonagazi)</option>'
        }
        if (DisList == 'Khagrachhari') {
            var thanaList =
                '<option disabled selected>Select Thana</option><option value="Dighinala">দিঘীনালা (Dighinala)</option><option value="Khagrachhari Sadar">খাগড়াছড়ি সদর (Khagrachhari Sadar)</option><option value="Lakshmichhari">লক্ষীছড়ি (Lakshmichhari)</option><option value="Mahalchhari">মহালছড়ি (Mahalchhari)</option><option value="Manikchhari">মানিকছড়ি (Manikchhari)</option><option value="Matiranga">মাটিরাঙ্গা (Matiranga)</option><option value="Panchhari">পানছড়ি (Panchhari)</option><option value="Ramgarh">রামগড় (Ramgarh)</option><option value="Guimara">গুইমারা (Guimara)</option>'
        }
        if (DisList == 'Lakshmipur') {
            var thanaList =
                '<option disabled selected>Select Thana</option><option value="Kamalnagar">কমলনগর (Kamalnagar)</option><option value="Lakshmipur">লক্ষ্মীপুর (Lakshmipur)</option><option value="Raipur">রায়পুর (Raipur)</option><option value="Ramganj">রামগঞ্জ (Ramganj)</option><option value="Ramgoti">রামগতি (Ramgoti)</option>';
        }
        if (DisList == 'Noakhali') {
            var thanaList =
                '<option disabled selected>Select Thana</option><option value="Begumganj">বেগমগঞ্জ (Begumganj)</option><option value="Bhashanchar">ভাসানচর (Bhashanchar)</option><option value="Chatkhil">চাটখিল (Chatkhil)</option><option value="Companiganj">কোম্পানিগঞ্জ (Companiganj)</option><option value="Hatia">হাতিয়া (Hatia)</option><option value="Kabirhat">কবিরহাট (Kabirhat)</option><option value="Noakhali Sadar">নোয়াখালী সদর (Noakhali Sadar)</option><option value="Senbagh">সেনবাগ (Senbagh)</option><option value="Sonaimuri">সোনাইমুড়ী (Sonaimuri)</option><option value="Subornochar">সুবুর্ণচর (Subornochar)</option>';
        }
        if (DisList == 'Rangamati') {
            var thanaList =
                '<option disabled selected>Select Thana</option><option value="Bagaichhari">বাঘাইছড়ি (Bagaichhari)</option><option value="Belaichhari">বিলাইছড়ি (Belaichhari)</option><option value="Barkal">বরকল (Barkal)</option><option value="Juraichhari">জুরাছড়ি (Juraichhari)</option><option value="Kaptai">কাপ্তাই (Kaptai)</option><option value="Kaukhali">কালুখালী (Kaukhali)</option><option value="Langadu">লাংগদু (Langadu)</option><option value="Naniarchar">নানিয়ারচর (Naniarchar)</option><option value="Rajasthali">রাজস্থলী (Ranjasthali)</option><option value="Rangamati Sadar">রাঙ্গামাটি সদর (Rangamati Sadar)</option>';
        }

        //Dhaka Division

        if (DisList == 'Dhaka') {
            var thanaList =
                '<option disabled selected>Select Thana</option><optgroup label="Dhaka-North"><option value="Adabor">আদাবর (Adabor)</option><option value="Badda">বাড্ডা (Badda)</option><option value="Banani">বনানী (Banani)</option><option value="Gulshan">গুলশান (Gulshan)</option><option value="Bhashantek">ভাসানটেক (Bhashantek)</option><option value="Bimanbandar">বিমানবন্দর (Bimanbandar)</option><option value="Cantonment">ক্যান্টনমেন্ট (Cantonment)</option><option value="Darussalam">দারুসসালাম (Darussalam)</option><option value="Hatirjheel">হাতিরঝিল (Hatirjheel)</option><option value="Kafrul">কাফরুল (Kafrul)</option><option value="Khilkhet">খিলক্ষেত (Khilkhet)</option><option value="Mirpur">মিরপুর (Mirpur)</option><option value="Mohammadpur">মোহাম্মদপুর (Mohammadpur)</option><option value="Pallabi">পল্লবী (Pallabi)</option><option value="Rampura">রামপুরা (Rampura)</option><option value="Rupnagar">রূপনগর (Rupnagar)</option><option value="Shah Ali">শাহ আলী (Shah Ali)</option><option value="Sher-E-Bangla Nagar">শের-এ-বাংলা নগর (Sher-E-Bangla Nagar)</option><option value="Shilpanchal">শিল্পাঞ্চল (Shilpanchal)</option><option value="Tejgaon">তেজগাও (Tejgaon)</option><option value="Turag">তুরাগ (Turag)</option><option value="Uttara-East">উত্তরা পূর্ব (Uttara-East)</option><option value="Uttara-West">উত্তরা পশ্চিম (Uttara-West)</option><option value="Uttarkhan">উত্তরখান (Uttarkhan)</option><option value="Vatara">ভাটারা (Vatara)</option><optgroup label="Dhaka-South"><option value="Bangshal">বংশাল (Bangshal)</option><option value="Chawkbazar">চকবাজার (Chawkbazar)</option><option value="Demra">ডেমরা (Demra)</option><option value="Dhanmondi">ধানমন্ডি (Dhanmondi)</option><option value="Gandaria">গেন্ডারিয়া (Gandaria)</option><option value="Hazaribagh">হাজারীবাগ (Hazaribagh)</option><option value="Jatrabari">যাত্রাবাড়ী (Jatrabari)</option><option value="Kadamtali">কদমতলী (Kadamtali)</option><option value="Kalabagan">কলাবাগান (Kalabagan)</option><option value="Khilgaon">খিলগাঁও (Khilgaon)</option><option value="Kotwali">কোতোয়ালী (Kotwali)</option><option value="Lalbagh">লালবাগ (Lalbagh)</option><option value="Motijheel">মতিঝিল (Motijheel)</option><option value="Mugda">মুগদা (Mugda)</option><option value="Paltan">পল্টন (Paltan)</option><option value="Ramna">রমনা (Ramna)</option><option value="Sabujbagh">সবুজবাগ (Sabujbagh)</option><option value="Shahbag">শাহাবাগ (Shahbag)</option><option value="Shahjahanpur">শাহাজাহানপুর (Shahjahanpur)</option><option value="Shampur">শ্যামপুর (Shampur)</option><option value="Sutrapur">সুত্রাপুর (Sutrapur)</option><option value="Wari">ওয়ারী (Wari)</option><optgroup label="Others"><option value="Dhamrai">ধামরাই (Dhamrai)</option><option value="Dohar">দোহারপ (Dohar)</option><option value="Keraniganj">কেরাণীগঞ্জ (Keraniganj)</option><option value="Nawabganj">নবাবগঞ্জ (Nawabganj)</option><option value="Savar">সাভার (Savar)</option>';
        }
        if (DisList == 'Faridpur') {
            var thanaList =
                '<option disabled selected>Select Thana</option><option value="Alfadanga">আলফাডাঙ্গা (Alfadanga)</option><option value="Bhanga">ভাঙ্গা (Bhanga)</option><option value="Boalmari">বোয়ালমারী (Boalmari)</option><option value="Charbhadrasan">চরভদ্রসন (Charbhadrasan)</option><option value="Faridpur Sadar">ফরিদপুর সদর (Faridpur Sadar)</option><option value="Madhukhali">মধুখালী (Madhukhali)</option><option value="Nagarkanda">নগরকান্দা (Nagarkanda)</option><option value="Sadarpur">সদরপুর (Sadarpur)</option><option value="Saltha">সালথা (Saltha)</option>';
        }
        if (DisList == 'Gazipur') {
            var thanaList =
                '<option disabled selected>Select Thana</option><option value="Gazipur Sadar">গাজীপুর সদর (Gazipur Sadar)</option><option value="Kaliakair">কালিয়াকৈর (Kaliakair)</option><option value="Kaliganj">কালীগঞ্জ (Kaliganj)</option><option value="Kapasia">কাপাসিয়া (Kapasia)</option><option value="Sreepur">শ্রীপুর (Sreepur)</option>';
        }
        if (DisList == 'Gopalganj') {
            var thanaList =
                '<option disabled selected>Select Thana</option><option value="Gopalganj Sadar">গোপালগঞ্জ সদর (Gopalganj Sadar)</option><option value="Kashiani">কাশিয়ানী (Kashiani)</option><option value="Kotalipara">কোটালীপাড়া (Kotalipara)</option><option value="Muksudpur">মুকসুদপুর (Muksudpur)</option><option value="Tungipara">টুংগীপাড়া (Tungipara)</option>';
        }
        if (DisList == 'Kishoreganj') {
            var thanaList =
                '<option disabled selected>Select Thana</option><option value="Austagram">অষ্টগ্রাম (Austagram)</option><option value="Bajitpur">বাজিতপুর (Bajitpur)</option><option value="Bhairab">ভৈরব (Bhairab)</option><option value="Hossainpur">হোসেনপুর (Hossainpur)</option><option value="Itna">ইটনা (Itna)</option><option value="Karimganj">করিমগঞ্জ (Karimganj)</option><option value="Katiadi">কাটিয়াদী (Katiadi)</option><option value="Kishoreganj Sadar">কিশোরগঞ্জ সদর (Kishoreganj Sadar)</option><option value="Kuliarchar">কুলিয়ারচর (Kuliarchar)</option><option value="Mithamain">মিঠামইন (Mithamain)</option><option value="Nikili">নিকলী (Nikili)</option><option value="Pakundia">পাকুন্দিয়া (Pakundia)</option><option value="Tarail">তাড়াইল (Tarail)</option>';
        }
        if (DisList == 'Madaripur') {
            var thanaList =
                '<option disabled selected>Select Thana</option><option value="Dasar">ডাসার (Dasar)</option><option value="Kalkini">কালকিনি (Kalkini)</option><option value="Madaripur Sadar">মাদারীপুর সদর (Madaripur Sadar)</option><option value="Rajoir">রাজৈর (Rajoir)</option><option value="Shibchar">শিবচর (Shibchar)</option>';
        }
        if (DisList == 'Manikganj') {
            var thanaList =
                '<option disabled selected>Select Thana</option><option value="Daulatpur">দৌলতপুর (Daulatpur)</option><option value="Ghior">ঘিওর (Ghior)</option><option value="Harirampur">হরিরামপুর (Harirampur)</option><option value="Manikganj Sadar">মানিকগঞ্জ সদর (Manikganj Sadar)</option><option value="Sarutia">সাটুরিয়া (Sarutia)</option><option value="Shivalaya">শিবালয় (Shivalaya)</option><option value="Singair">সিঙ্গাইর (Singair)</option>';
        }
        if (DisList == 'Munshiganj') {
            var thanaList =
                '<option disabled selected>Select Thana</option><option value="Gazaria">গজারিয়া (Gazaria)</option><option value="Lohajang">লৌহজং (Lohajang)</option><option value="Munshiganj Sadar">মুন্সিগঞ্জ সদর (Munshiganj Sadar)</option><option value="Sirajdikhan">সিরাজদিখান (Sirajdikhan)</option><option value="Sreenagar">শ্রীনগর (Sreenagar)</option><option value="Tongibari">টংগীবাড়ী (Tongibari)</option>';
        }
        if (DisList == 'Narayanganj') {
            var thanaList =
                '<option disabled selected>Select Thana</option><option value="Araihazar">আড়াইহাজার (Araihazar)</option><option value="Baidder Bazar">বৈদ্যের বাজার (Baidder Bazar)</option><option value="Bandar">বন্দর (Bandar)</option><option value="Fatullah">ফতুল্লা (Fatullah)</option><option value="Narayanganj Sadar">নারায়নগঞ্জ সদর (Narayanganj Sadar)</option><option value="Rupganj">রূপগঞ্জ (Rupganj)</option><option value="Siddhirganj">সিদ্দিরগঞ্জ (Siddhirganj)</option><option value="Sonargaon">সোনারগাঁও (Sonargaon)</option>';
        }
        if (DisList == 'Narsingdi') {
            var thanaList =
                '<option disabled selected>Select Thana</option><option value="Belabo">বেলাবো (Belabo)</option><option value="Monohardi">মনোহরদি (Monohardi)</option><option value="Narsingdi Sadar">নরসিংদী সদর (Narsingdi Sadar)</option><option value="Palash">পলাশ (Palash)</option><option value="Raipura">রাইপুরা (Raipura)</option><option value="Shibpur">শিবপুর (Shibpur)</option>';
        }
        if (DisList == 'Rajbari') {
            var thanaList =
                '<option disabled selected>Select Thana</option><option value="Baliakandi">বালিয়াকান্দি (Baliakandi)</option><option value="Goalanda">গোয়ালন্দ (Goalanda)</option><option value="Kalukhali">কালুখালী (Kalukhali)</option><option value="Pangsha">পাংশা (Pangsha)</option><option value="Rajbari Sadar">রাজবাড়ী সদর (Rajbari Sadar)</option>';
        }
        if (DisList == 'Shariatpur') {
            var thanaList =
                '<option disabled selected>Select Thana</option><option value="Bhedarganj">ভেদরগঞ্জ (Bhedarganj)</option><option value="Damudya">ডামুড্যা (Damudya)</option><option value="Gosairhat">গোসাইরহাট (Gosairhat)</option><option value="Jazeera">জাজিরা (Jazeera)</option><option value="Naria">নড়িয়া (Naria)</option><option value="Shariatpur Sadar">শরীয়তপুর সদর (Shariatpur Sadar)</option><option value="Shakhipur">সখিপুর (Shakhipur)</option>'
        }
        if (DisList == 'Tangail') {
            var thanaList =
                '<option disabled selected>Select Thana</option><option value="Basail">বাসাইল (Basail)</option><option value="Bhuapur">ভুয়াপুর (Bhuapur)</option><option value="Delduar">দেলদুয়ার (Delduar)</option><option value="Dhanbari">ধনবাড়ী (Dhanbari)</option><option value="Ghatail">ঘাটাইল (Ghatail)</option><option value="Gopalpur">গোপালপুর (Gopalpur)</option><option value="Kalihati">কালাহাতি (Kalihati)</option><option value="Madhupur">মধুপুর (Madhupur)</option><option value="Mirzapur">মির্জাপুর (Mirzapur)</option><option value="Nagarpur">নাগরপুর (Nagarpur)</option><option value="Shakhipur">সখিপুর  (Shakhipur)</option><option value="Tangail">টাঙ্গাইল সদর (Tangail)</option>'
        }
        //Khulna Division

        if (DisList == 'Bagerhat') {
            var thanaList =
                '<option disabled selected>Select Thana</option><option value="Bagerhat Sadar">বাগেরহাট সদর (Bagerhat Sadar)</option><option value="Chitalmari">চিতলমারী (Chitalmari)</option><option value="Fakirhat">ফকিরহাট (Fakirhat)</option><option value="Kachua">কচুয়া (Kachua)</option><option value="Mollahat">মোল্লাহাট (Mollahat)</option><option value="Mongla">মোংলা (Mongla)</option><option value="Morrelganj">মোড়েলগঞ্জ (Morrelganj)</option><option value="Sarankhola">শরণখোলা (Sarankhola)</option>'
        }
        if (DisList == 'Chuadanga') {
            var thanaList =
                '<option disabled selected>Select Thana</option><option value="Alamdanga ">আলমডাঙ্গা (Alamdanga)</option><option value="Chuadanga Sadar">চুয়াডাঙ্গা সদর (Chuadanga Sadar)</option><option value="Damurhuda">দামুড়হুদা (Damurhuda)</option><option value="Darsana">দর্শনা (Darsana)</option><option value="Jibannagar">জীবননগর (Jibannagar)</option>'
        }
        if (DisList == 'Jashore') {
            var thanaList =
                '<option disabled selected>Select Thana</option><option value="Abhaynagar ">অভয়নগর (Abhaynagar)</option><option value="Bagherpara">বাঘারপাড়া (Bagherpara)</option><option value="Chaugachha ">চৌগাছা (Chaugachha)</option><option value="Jashore Sadar">যশোর সদর (Jashore Sadar)</option><option value="Jhikargacha">ঝিকরগাছা (Jhikargacha)</option><option value="Keshabpur">কেশবপুর (Keshabpur)</option><option value="Manirampur">মনিরামপুর (Manirampur)</option><option value="Sharsha">শার্শা (Sharsha)</option>'
        }
        if (DisList == 'Jhenaidah') {
            var thanaList =
                '<option disabled selected>Select Thana</option><option value="Abhaynagar ">অভয়নগর (Abhaynagar)</option><option value="Bagherpara">বাঘারপাড়া (Bagherpara)</option><option value="Chaugachha ">চৌগাছা (Chaugachha)</option><option value="Jashore Sadar">যশোর সদর (Jashore Sadar)</option><option value="Jhikargacha">ঝিকরগাছা (Jhikargacha)</option><option value="Keshabpur">কেশবপুর (Keshabpur)</option><option value="Manirampur">মনিরামপুর (Manirampur)</option><option value="Sharsha">শার্শা (Sharsha)</option>'
        }
        if (DisList == 'Jhenaidah') {
            var thanaList =
                '<option disabled selected>Select Thana</option><option value="Harinakundu">হরিণাকুণ্ড (Harinakundu)</option><option value="Jhenaidah Sadar">ঝিনাইদহ সদর (Jhenaidah Sadar)</option><option value="Kaliganj">কালীগঞ্জ (Kaliganj)</option><option value="Kotchandpur">কোটচাঁদপুর (Kotchandpur)</option><option value="Maheshpur">মহেশপুর (Maheshpur)</option><option value="Shailkupa">শৈলকুপা (Shailkupa)</option>'
        }
        if (DisList == 'Khulna') {
            var thanaList =
                '<option disabled selected>Select Thana</option><option value="Batiaghata">বটিয়াঘাটা (Batiaghata)</option><option value="Dacope">দাকোপ (Dacope)</option><option value="Dighalia">দিঘলিয়া (Dighalia)</option><option value="Dumuria">ডুমুরিয়া (Dumuria)</option><option value="Koyra">কয়রা (Koyra)</option><option value="Paikgachha">পাইকগাছা (Paikgachha)</option><option value="Phultala">ফুলতলা (Phultala)</option><option value="Rupsha">রূপসা (Rupsha)</option><option value="Terokhada">তেরখাদা (Terokhada)</option>'
        }
        if (DisList == 'Kustia') {
            var thanaList =
                '<option disabled selected>Select Thana</option><option value="Bheramara">ভেড়ামারা (Bheramara)</option><option value="Daulatpur">দৌলতপুর (Daulatpur)</option><option value="Khoksa">খোকসা (Khoksa)</option><option value="Kumarkhali">কুমারখালি (Kumarkhali)</option><option value="Kushtia Sadar">কুষ্টিয়া সদর (Kushtia Sadar)</option>'
        }
        if (DisList == 'Magura') {
            var thanaList =
                '<option disabled selected>Select Thana</option><option value="Magura Sadar">মাগুরা সদর (Magura Sadar)</option><option value="Mohammadpur">মহম্মদপুর (Mohammadpur)</option><option value="Shalikha">শালিখা (Shalikha)</option><option value="Sreepur">শ্রীপুর (Sreepur)</option>'
        }
        if (DisList == 'Meherpur') {
            var thanaList =
                '<option disabled selected>Select Thana</option><option value="Meherpur Sadar">মেহেরপুর সদর (Meherpur Sadar)</option><option value="Mujibnagar">মুজিবনগর (Mujibnagar)</option><option value="Gangni">গাংনী (Gangni)</option>'
        }
        if (DisList == 'Narail') {
            var thanaList =
                '<option disabled selected>Select Thana</option><option value="Lohagara">লোহাগড়া (Lohagara)</option><option value="Kalia">কালিয়া (Kalia)</option><option value="Narail Sadar">নড়াইল সদর (Narail Sadar)</option>'
        }
        if (DisList == 'Satkhira') {
            var thanaList =
                '<option disabled selected>Select Thana</option><option value="Assasuni">আশাশুনি (Assasuni)</option><option value="Debhata">দেবহাটা (Debhata)</option><option value="Kalaroa">কলারোয়া (Kalaroa)</option><option value="Kaliganj">কালীগঞ্জ (Kaliganj)</option><option value="Satkhira Sadar">সাতক্ষীরা সদর (Satkhira Sadar)</option><option value="Shyamnagar">শ্যামনগর (Shyamnagar)</option><option value="Tala">তালা (Tala)</option>'
        }
        //Mymensingh Division

        if (DisList == 'Mymensingh') {
            var thanaList =
                '<option disabled selected>Select Thana</option><option value="Bhaluka">ভালুকা (Bhaluka)</option><option value="Dhobaura">ধোবাউড়া (Dhobaura)</option><option value="Fulbaria">ফুলবাড়িয়া (Fulbaria)</option><option value="Gafargaon">গফরগাঁও (Gafargaon)</option><option value="Gauripur">গৌরীপুর (Gauripur)</option><option value="Haluaghat">হালুয়াঘাট (Haluaghat)</option><option value="Ishwarganj">ঈশ্বরগঞ্জ (Ishwarganj)</option><option value="Muktagacha">মুক্তাগাছা (Muktagacha)</option><option value="Mymensingh Sadar">ময়মনসিংহ সদর (Mymensingh Sadar)</option><option value="Nandail">নান্দাইল (Nandail)</option><option value="Phulpur">ফুলপুর (Phulpur)</option><option value="Tarakanda">তারাকান্দা (Tarakanda)</option><option value="Trishal">ত্রিশাল (Trishal)</option>'
        }
        if (DisList == 'Netrokona') {
            var thanaList =
                '<option disabled selected>Select Thana</option><option value="Atpara">আটপাড়া (Atpara)</option><option value="Barhatta">বারহাট্টা (Barhatta)</option><option value="Durgapur">দূর্গাপুর (Durgapur)</option><option value="Kendua">কেন্দুয়া (Kendua)</option><option value="Khaliajuri">খা‌লিয়াজুরী (Khaliajuri)</option><option value="Kolmkakanda">কমলাকান্দা (Kolmkakanda)</option><option value="Modon">মদন (Modon)</option><option value="Mohangonj">মোহনগঞ্জ (Mohangonj)</option><option value="Netrokona Sadar">নেত্রকোণা সদর (Netrokona Sadar)</option><option value="Purbodhola">পূর্বধলা (Purbodhola)</option>'
        }
        if (DisList == 'Jamalpur') {
            var thanaList =
                '<option disabled selected>Select Thana</option><option value="Bakshiganj">বকশীগঞ্জ (Bakshiganj)</option><option value="Dewanganj">দেওয়ানগঞ্জ (Dewanganj)</option><option value="Islampur">ইসলামপুর (Islampur)</option><option value="Jamalpur Sadar">জামালপুর সদর(Jamalpur Sadar)</option><option value="Madarganj">মাদারগঞ্জ (Madarganj)</option><option value="Melandaha">মেলান্দহ (Melandaha)</option><option value="Sharishabari">সরিষাবাড়ী (Sharishabari)</option>'
        }
        if (DisList == 'Sherpur') {
            var thanaList =
                '<option disabled selected>Select Thana</option><option value="Jhenaigati">ঝিনাইগাতী (Jhenaigati)</option><option value="Nakla">নকলা (Nakla)</option><option value="Nalitabari">নালিতাবাড়ি (Nalitabari)</option><option value="Sherpur Sadar">শেরপুর সদর (Sherpur Sadar)</option><option value="Sreebardi">শ্রীবর্দী (Sreebardi)</option>'
        }

        //Rajshahi Division
        if (DisList == 'Bagura') {
            var thanaList =
                '<option disabled selected>Select Thana</option><option value="Adamdighi">আদমদিঘী (Adamdighi)</option><option value="Bagura Sadar">বগুড়া সদর  (Bagura Sadar)</option><option value="Dhunat">ধুনট (Dhunat)</option><option value="Dupchanchia">দুপচাচিয়া (Dupchanchia)</option><option value="Gabtali">গাবতলী (Gabtali)</option><option value="Kahaloo">কাহালু (Kahaloo)</option><option value="Nandigram">নন্দিগ্রাম (Nandigram)</option><option value="Sahajanpur">শাহাজাহানপুর (Sahajanpur)</option><option value="Sariakandi">সারিয়াকান্দি (Sariakandi)</option><option value="Sherpur">শেরপুর (Sherpur)</option><option value="Shibganj">শিবগঞ্জ (Shibganj)</option><option value="Sonatala">সোনাতলা (Sonatala)</option>'
        }
        if (DisList == 'Chapainawabganj') {
            var thanaList =
                '<option disabled selected>Select Thana</option><option value="Bholahat">ভোলাহাট (Bholahat)</option><option value="Chapainawabganj Sadar">চাঁপাইনবাবগঞ্জ সদর  (Chapainawabganj Sadar)</option><option value="Gomastapur">গোমস্তাপুর (Gomastapur)</option><option value="Shibganj">শিবগঞ্জ (Shibganj)</option>'
        }
        if (DisList == 'Joypurhat') {
            var thanaList =
                '<option disabled selected>Select Thana</option><option value="Akkelpur">আক্কেলপুর (Akkelpur)</option><option value="Joypurhat Sadar">জয়পুরহাট সদর (Joypurhat Sadar)</option><option value="Kalai">কালাই (Kalai)</option><option value="Khetlal">খেতলাল (Khetlal)</option><option value="Panchbibi">পাঁচবিবি (Panchbibi)</option>'
        }
        if (DisList == 'Naogaon') {
            var thanaList =
                '<option disabled selected>Select Thana</option><option value="Atrai">আত্রাই (Atrai)</option><option value="Badalgachhi">বদলগাছি (Badalgachhi)</option><option value="Dhamoirhat">ধামইরহাট (Dhamoirhat)</option><option value="Manda">মান্দা (Manda)</option><option value="Mohadevpur">মহাদেবপুর (Mohadevpur)</option><option value="Naogaon Sadar">নওগাঁ সদর (Naogaon Sadar)</option><option value="Niamatpur">নিয়ামতপুর (Niamatpur)</option><option value="Patnitala">পত্মীতলা (Patnitala)</option><option value="Porsha">পোরশা (Porsha)</option><option value="Raninagar">রানীনগর (Raninagar)</option><option value="Sapahar">সাপাহার (Sapahar)</option>'
        }
        if (DisList == 'Natore') {
            var thanaList =
                '<option disabled selected>Select Thana</option><option value="Bagatipara">বাগাতিপাড়া (Bagatipara)</option><option value="Baraigram">বড়াইগ্রাম (Baraigram)</option><option value="Gurudaspur">গুরুদাসপুর (Gurudaspur)</option><option value="Lalpur">লালপুর (Lalpur)</option><option value="Natore Sadar">নাটোর সদর (Natore Sadar)</option><option value="Naldanga">নলডাঙ্গা (Naldanga)</option><option value="Singra">সিংড়া (Singra)</option>'
        }
        if (DisList == 'Pabna') {
            var thanaList =
                '<option disabled selected>Select Thana</option><option value="Atgharia">আটঘরিয়া (Atgharia)</option><option value="Bera">বেড়া (Bera)</option><option value="Bhangura">ভাঙ্গুরা (Bhangura)</option><option value="Chatmohar">চাটমোহর (Chatmohar)</option><option value="Faridpur">ফরিদপুর (Faridpur)</option><option value="Ishwardi">ঈশ্বরদী (Ishwardi)</option><option value="Pabna Sadar">পাবনা সদর (Pabna Sadar)</option><option value="Santhia">সাঁথিয়া (Santhia)</option><option value="Suzanagar">সুজানগর (Suzanagar)</option>'
        }
        if (DisList == 'Rajshahi') {
            var thanaList =
                '<option disabled selected>Select Thana</option><option value="Bagmara">বাগমারা (Bagmara)</option></option><option value="Bagha">বাঘা (Bagha)</option><option value="Boalia">বোয়ালিয়া (Boalia)</option><option value="Charghat">চারঘাট (Charghat)</option><option value="Durgapur">দুর্গাপুর (Durgapur)</option><option value="Godagari">গোদাগাড়ি (Godagari)</option><option value="Mohanpur">মোহনপুর (Mohanpur)</option><option value="Motihar">মতিহার (Motihar)</option><option value="Paba">পবা (Paba)</option><option value="Puthia">পুঠিয়া (Puthia)</option><option value="Rajpara">রাজপাড়া (Rajpara)</option><option value="Shah Makhdum">শাহ মখদুম (Shah Makhdum)</option><option value="Tanore">তানোর (Tanore)</option>'
        }
        if (DisList == 'Sirajganj') {
            var thanaList =
                '<option disabled selected>Select Thana</option><option value="Belkuchi">বেলকুচি (Belkuchi)</option><option value="Chauhali">চৌহালী (Chauhali)</option><option value="Kamarkhanda">কামারখন্দ (Kamarkhanda)</option><option value="Kazipur">কাজীপুর (Kazipur)</option><option value="Raiganj">রায়গঞ্জ (Raiganj)</option><option value="Shahjadpur">শাহজাদপুর (Shahjadpur)</option><option value="Sirajganj Sadar">সিরাজগঞ্জ সদর (Sirajganj Sadar)</option><option value="Tarash">তাড়াশ (Tarash)</option><option value="Ullapara">উল্লাপাড়া (Ullapara)</option>'
        }
        //Rangpur Division

        if (DisList == 'Dinajpur') {
            var thanaList =
                '<option disabled selected>Select Thana</option><option value="Biral">বিরল (Biral)</option><option value="Birampur">বিরামপুর (Birampur)</option><option value="Birganj">বীরগঞ্জ (Birganj)</option><option value="Bochaganj">বোঁচাগঞ্জ (Bochaganj)</option><option value="Chirirbandar">চিরিরবন্দর (Chirirbandar)</option><option value="Dinajpur Sadar">দিনাজপুর সদর (Dinajpur Sadar)</option><option value="Ghoraghat">ঘোড়াঘাট (Ghoraghat)</option><option value="Hakimpur">হাকিমপুর (Hakimpur)</option><option value="Kaharole">কাহারোল (Kaharole)</option><option value="Khansama">খানসামা (Khansama)</option><option value="Nawabganj">নবাবগঞ্জ (Nawabganj)</option><option value="Parbatipur">পার্বতীপুর (Parbatipur)</option><option value="Phulbari">ফুলবাড়ী (Phulbari)</option>'
        }
        if (DisList == 'Gaibandha') {
            var thanaList =
                '<option disabled selected>Select Thana</option><option value="Fulchhari">ফুলছড়ি (Fulchhari)</option><option value="Gaibandha Sadar">গাইবান্ধা সদর (Gaibandha Sadar)</option><option value="Gobindaganj">গোবিন্দগঞ্জ (Gobindaganj)</option><option value="Palashbari">পলাশবাড়ী (Palashbari)</option><option value="Sadullapur">সাদুল্লাপুর (Sadullapur)</option><option value="Saghata">সাঘাটা (Saghata)</option><option value="Sundarganj">সুন্দরগঞ্জ (Sundarganj)</option>'
        }
        if (DisList == 'Kurigram') {
            var thanaList =
                '<option disabled selected>Select Thana</option><option value="Bhurungamari">ভূরুঙ্গামারী (Bhurungamari)</option><option value="Char Rajibpur">চর রাজিবপুর (Char Rajibpur)</option><option value="Chilmari">চিলমারী (Chilmari)</option><option value="Kurigram Sadar">কুড়িগ্রাম সদর (Kurigram Sadar)</option><option value="Nageshwari">নাগেশ্বরী (Nageshwari)</option><option value="Phulbari">ফুলবাড়ী (Phulbari)</option><option value="Rajarhat">রাজারহাট (Rajarhat)</option><option value="Rowmari">রৌমারী (Rowmari)</option><option value="Ulipur">উলিপুর (Ulipur)</option>'
        }
        if (DisList == 'Lalmonirhat') {
            var thanaList =
                '<option disabled selected>Select Thana</option><option value="Aditmari">আদিতমারী (Aditmari)</option><option value="Hatibandha">হাতীবান্ধা (Hatibandha)</option><option value="Kaliganj">কালীগঞ্জ (Kaliganj)</option><option value="Lalmonirhat Sadar">লালমনিরহাট সদর (Lalmonirhat Sadar)</option><option value="Patgram">পাটগ্রাম (Patgram)</option>'
        }
        if (DisList == 'Nilphamari') {
            var thanaList =
                '<option disabled selected>Select Thana</option><option value="Dimla">ডিমলা (Dimla)</option><option value="Domar">ডোমার (Domar)</option><option value="Jaldhaka">জলঢাকা (Jaldhaka)</option><option value="Kishoreganj">কিশোরগঞ্জ (Kishoreganj)</option><option value="Nilphamari Sadar">নীলফামারী সদর (Nilphamari Sadar)</option><option value="Saidpur">সৈয়দপুর (Saidpur)</option>'
        }
        if (DisList == 'Panchagarh') {
            var thanaList =
                '<option disabled selected>Select Thana</option><option value="Atwari">আটোয়ারী (Atwari)</option><option value="Boda">বোদা (Boda)</option><option value="Debiganj">দেবীগঞ্জ (Debiganj)</option><option value="Panchagarh Sadar">পঞ্চগড় সদর (Panchagarh Sadar)</option><option value="Tetulia">তেঁতুলিয়া (Tetulia)</option>'
        }
        if (DisList == 'Rangpur') {
            var thanaList =
                '<option disabled selected>Select Thana</option><option value="Badarganj">বদরগঞ্জ (Badarganj)</option><option value="Gangachhara">গঙ্গাছড়া (Gangachhara)</option><option value="Kaunia">কাউনিয়া (Kaunia)</option><option value="Mithapukur">মিঠাপুকুর (Mithapukur)</option><option value="Pirgachha">পীরগাছা (Pirgachha)</option><option value="Pirganj">পীরগঞ্জ (Pirganj)</option><option value="Rangpur Sadar">রংপুর সদর (Rangpur Sadar)</option><option value="Taraganj">তারাগঞ্জ (Taraganj)</option>'
        }
        if (DisList == 'Thakurgaon') {
            var thanaList =
                '<option disabled selected>Select Thana</option><option value="Baliadangi">বালিয়াডাঙ্গী (Baliadangi)</option><option value="Haripur">হরিপুর (Haripur)</option><option value="Pirganj">পীরগঞ্জ (Pirganj)</option><option value="Ranisankail">রাণীশংকৈল (Ranisankail )</option><option value="Thakurgaon Sadar">ঠাকুরগাঁও সদর (Thakurgaon Sadar)</option>'
        }
        //Sylhet Division
        if (DisList == 'Habiganj') {
            var thanaList =
                '<option disabled selected>Select Thana</option><option value="Azmiriganj">আজমিরীগঞ্জ (Azmiriganj)</option><option value="Bahubal">বাহুবল (Bahubal)</option><option value="Baniachang">বানিয়াচং (Baniachang)</option><option value="Chunarughat">চুনারুঘাট (Chunarughat)</option><option value="Habiganj Sadar">হবিগঞ্জ সদর (Habiganj Sadar)</option><option value="Lakhai">লাখাই (Lakhai)</option><option value="Madhabpur">মাধবপুর (Madhabpur)</option><option value="Nabiganj">নবীগঞ্জ (Nabiganj)</option><option value="Shayestaganj">শায়েস্তাগঞ্জ (Shayestaganj)</option>'
        }
        if (DisList == 'Moulvibazar') {
            var thanaList =
                '<option disabled selected>Select Thana</option><option value="Barlekha">বড়লেখা (Barlekha)</option><option value="Juri">জুড়ী (Juri)</option><option value="Kamalganj">কমলগঞ্জ (Kamalganj)</option><option value="Kulaura">কুলাউড়া (Kulaura)</option><option value="Moulvibazar">মৌলভীবাজার (Moulvibazar)</option><option value="Rajnagar">রাজনগর (Rajnagar)</option><option value="Sreemongal">শ্রীমঙ্গল (Sreemongal)</option>'
        }
        if (DisList == 'Sunamganj') {
            var thanaList =
                '<option disabled selected>Select Thana</option><option value="Bishwamvarpur">বিশ্বম্ভরপুর (Bishwamvarpur)</option><option value="Chhatak">ছাতক (Chhatak)</option><option value="Derai">দিরাই (Derai)</option><option value="Dharampasha">ধরমপাশা (Dharampasha)</option><option value="Dowarabazar">দোয়ারাবাজার (Dowarabazar)</option><option value="Jagannathpur">জগন্নাথপুর (Jagannathpur)</option><option value="Jamalganj">জামালগঞ্জ (Jamalganj)</option><option value="Shantiganj-South Sunamganj">শান্তিগঞ্জ-দক্ষিণ সুনামগঞ্জ (Shantiganj-South Sunamganj)</option><option value="Sulla">শাল্লা (Sulla)</option><option value="Sunamganj">সুনামগঞ্জ (Sunamganj)</option><option value="Tahirpur">তাহিরপুর (Tahirpur)</option>'
        }
        if (DisList == 'Sylhet') {
            var thanaList =
                '<option disabled selected>Select Thana</option><option value="Balaganj">বালাগঞ্জ (Balaganj)</option><option value="Beanibazar">বিয়ানিবাজার (Beanibazar)</option><option value="Bimanbondar">বিমানবন্দর (Bimanbondar)</option><option value="Bishwanath">বিশ্বনাথ (Bishwanath)</option><option value="Companiganj">কোম্পানীগঞ্জ (Companiganj)</option><option value="Fenchuganj">ফেঞ্চুগঞ্জ (Fenchuganj)</option><option value="Golapganj">গোলাপগঞ্জ (Golapganj)</option><option value="Gowainghat">গোয়াইনঘাট (Gowainghat)</option><option value="Jaintiapur">জৈন্তাপুর (Jaintiapur)</option><option value="Jalalabad">জালালাবাদ (Jalalabad)</option><option value="Kanaighat">কানাইঘাট (Kanaighat)</option><option value="Kotwali">কোতয়ালী (Kotwali)</option><option value="Maglabazar">মগলাবাজার (Maglabazar)</option><option value="Osmani Nagar">ওসমানী নগর (Osmani Nagar)</option><option value="Shahporan">শাহপরান (Shahporan)</option><option value="South Shurma">দক্ষিণ সুরমা (South Shurma)</option><option value="Sylhet Sadar">সিলেট সদর (Sylhet Sadar)</option><option value="Zakiganj">জকিগঞ্জ (Zakiganj)</option>'
        }
        document.getElementById("thana").innerHTML = thanaList;
    }


    function getLiveLocation() {
        const status = document.getElementById('location-status');

        if (!navigator.geolocation) {
            status.textContent = 'Geolocation is not supported by your browser.';
            return;
        }

        status.textContent = 'Fetching location...';

        navigator.geolocation.getCurrentPosition(
            ({
                coords
            }) => {
                const {
                    latitude,
                    longitude
                } = coords;
                status.textContent = `Location: ${latitude.toFixed(4)}, ${longitude.toFixed(4)}`;
                Livewire.emit('setLocation', latitude, longitude);
                console.log(latitude, longitude);
            },
            () => {
                status.textContent = 'Unable to retrieve location.';
            }
        );
    }
</script>
