<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Animal Rescue Tips') }}
        </h2>
    </x-slot>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 p-6">
        <!-- Card 1 -->
        <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 w-full">
            <a href="{{ route('pages.snakeTypeDetails') }}">

                <div class="p-4 flex flex-col items-center">
                    <div class="overflow-hidden rounded-lg mb-4 mt-12 pt-6">
                        <img src="{{ asset('images/snake_info/snake_logo.jpg') }}" alt="Image 1"
                            class="object-cover w-full h-full">
                    </div>
                    <p class="text-center text-gray-800 font-semibold text-sm leading-snug">
                        মৃদু বিষধর, বিষধর ও নির্বিষ সাপের প্রজাতি
                    </p>
                </div>
            </a>

        </div>


        <!-- Card 2 -->

        <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 w-full">
            <a href="{{ route('pages.snakebiteSymptoms') }}">
                <div class="p-4 flex flex-col items-center">
                    <div class="overflow-hidden rounded-lg mb-4">
                        <img src="{{ asset('images/snake_info/sickness.jpg') }}" alt="Image 1"
                            class="object-cover w-full h-full">
                    </div>
                    <p class="text-center text-gray-800 font-semibold text-sm leading-snug">
                        সর্প দংশনের লক্ষন, উপসর্গ ও করনীয়
                    </p>
                </div>
            </a>
        </div>



        <!-- Card 3 -->

        <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 w-full">
            <a href="{{ route('pages.snakebiteTreatment') }}">
                <div class="p-4 flex flex-col items-center">
                    <div class="overflow-hidden rounded-lg mb-4">
                        <img src="{{ asset('images/snake_info/treatment.jpg') }}" alt="Image 1"
                            class="object-cover w-full h-full">
                    </div>
                    <p class="text-center text-gray-800 font-semibold text-sm leading-snug">
                        সর্প দংশনের প্রাথমিক চিকিৎসা
                    </p>
                </div>
            </a>
        </div>



        <!-- Card 4 -->

        <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 w-full">
            <a href="{{ route('pages.importanceOfSnake') }}">
                <div class="p-4 flex flex-col items-center">
                    <div class="overflow-hidden rounded-lg mb-4 ">
                        <img src="{{ asset('images/snake_info/socheton.jpg') }}" alt="Image 1"
                            class="object-cover w-full h-full">
                    </div>
                    <p class="text-center text-gray-800 font-semibold text-sm leading-snug">
                        সাপ সংক্রান্ত কুসংস্কার ও সাপের গুরুত্ব
                    </p>
                </div>
            </a>

        </div>


    </div>



    <!-- Header -->
    <div class=" text-black py-6 text-center">
        <h1 class="text-4xl font-bold tracking-wide">🐍 সর্প পরিচিতি</h1>
    </div>

    <!-- Snake Book Viewer -->
    <div class="flex flex-col items-center justify-center py-10 bg-gray-100 overflow-hidden font-sans">
        <div id="book" class="book relative">
            <!-- Page Content will be injected here by JS -->
        </div>

        <!-- Navigation Buttons -->
        <div class="controls mt-6">
            <button onclick="prevPage()"
                class="bg-green-600 hover:bg-green-700 text-white font-semibold px-4 py-2 mx-2 rounded">
                ⏪ পূর্ববর্তী
            </button>
            <button onclick="nextPage()"
                class="bg-green-600 hover:bg-green-700 text-white font-semibold px-4 py-2 mx-2 rounded">
                পরবর্তী ⏩
            </button>
        </div>
    </div>

    <!-- FAQ Tabs -->
    <div class="flex flex-wrap justify-center gap-3 mt-6 px-4">
        <a href="#general"
            class="px-4 py-2 bg-black text-white text-sm font-medium rounded-sm hover:bg-gray-800">GENERAL RESCUE
            TIPS</a>
        <a href="#injury" class="px-4 py-2 bg-black text-white text-sm font-medium rounded-sm hover:bg-gray-800">INJURED
            ANIMALS</a>
        <a href="#feeding"
            class="px-4 py-2 bg-black text-white text-sm font-medium rounded-sm hover:bg-gray-800">FEEDING & SHELTER</a>
        <a href="#adoption"
            class="px-4 py-2 bg-black text-white text-sm font-medium rounded-sm hover:bg-gray-800">FOSTERING &
            ADOPTION</a>
        <a href="#report" class="px-4 py-2 bg-black text-white text-sm font-medium rounded-sm hover:bg-gray-800">WHERE
            TO REPORT</a>
    </div>

    <!-- FAQs -->
    @php
        $faqs = [
            'general' => [
                [
                    'q' => 'What should I do if I see a stray animal?',
                    'a' => 'Approach calmly. Avoid loud noises. Offer water and observe from a safe distance.',
                ],
                [
                    'q' => 'Can I touch or carry the stray animal?',
                    'a' =>
                        'Only if the animal appears friendly. Use gloves if unsure. Injured or aggressive animals should be handled by professionals.',
                ],
            ],
            'injury' => [
                [
                    'q' => 'How do I help an injured dog or cat?',
                    'a' => 'Keep them warm and avoid moving them unnecessarily. Call a vet or rescue team immediately.',
                ],
                [
                    'q' => 'Should I give medicine to an injured animal?',
                    'a' =>
                        'No. Medication should only be given by a vet. Your job is to keep the animal stable until help arrives.',
                ],
            ],
            'feeding' => [
                [
                    'q' => 'What can I feed rescued animals?',
                    'a' => 'Plain rice, boiled chicken, biscuits, or pet food. Avoid spicy, oily, or dairy foods.',
                ],
                [
                    'q' => 'How to create temporary shelter?',
                    'a' => 'Use a cardboard box with a towel or blanket. Keep it dry and away from traffic.',
                ],
            ],
            'adoption' => [
                [
                    'q' => 'Can I adopt a rescued animal permanently?',
                    'a' =>
                        'Yes, adoption is the best outcome! Ensure you can provide time, love, and care before adopting.',
                ],
                [
                    'q' => 'How long should I foster before adoption?',
                    'a' =>
                        'Ideally 2-4 weeks, but depends on the animal’s health and behavior. Some may need longer recovery.',
                ],
            ],
            'report' => [
                [
                    'q' => 'Where can I report a stray animal in Bangladesh?',
                    'a' => 'You can contact PAW Foundation, Obhoyaronno, or local Facebook rescue pages.',
                ],
                [
                    'q' => 'Can I use social media to report?',
                    'a' =>
                        'Absolutely. Post with location, pictures, and condition. Tag local animal groups or shelters.',
                ],
            ],
        ];
    @endphp

    @foreach ($faqs as $section => $items)
        <div id="{{ $section }}" class="mt-10 text-center scroll-mt-20">
            <h2 class="text-2xl font-bold uppercase">{{ ucwords(str_replace('_', ' ', $section)) }}</h2>
        </div>
        <div class="max-w-3xl mx-auto mt-6 px-4 space-y-2">
            @foreach ($items as $faq)
                <div class="border border-gray-300 rounded p-4">
                    <button class="faq-question text-left font-medium w-full text-lg">{{ $faq['q'] }}</button>
                    <div class="faq-answer mt-2 text-gray-600 hidden">{{ $faq['a'] }}</div>
                </div>
            @endforeach
        </div>
    @endforeach

    <!-- Style & Script -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .book {
            perspective: 2000px;
            width: 60%;
            height: 75vh;
        }

        .page {
            transform-origin: left;
            backface-visibility: hidden;
            transition: transform 1s ease;
        }

        .flipped {
            transform: rotateY(-180deg);
            z-index: 0 !important;
        }
    </style>

    <script>
        let currentPage = 0;
        let pages = [];

        function renderPage(snake, index, total) {
            const page = document.createElement('div');
            page.className =
                'page absolute top-0 left-0 w-full h-full bg-white border border-gray-300 shadow-lg p-4 overflow-y-auto rounded-md transition-transform';
            page.style.zIndex = total - index;

            page.innerHTML = `
            <div class="flex flex-row">
                <div class="p-4 m-2">
                    <h3 class="text-xl font-bold mb-2"> ${snake.name} (${snake.english_name})</h3>
                <p class="mb-1"><strong>🧪 বৈজ্ঞানিক নাম:</strong> ${snake.scientific_name}</p>
                <p class="mb-1"><strong></strong> <img src="{{ asset('') }}${snake.img}" alt="" class="mt-2 mb-2 rounded w-96" /></p>
                
                </div>
                    <div class="mt-32 p-4 ">
                        <p class="mb-1"><strong>🏷️ স্থানীয় নাম:</strong> ${snake.local_names?.length > 0 ? snake.local_names.join(", ") : "নেই"}</p>
                <p class="mb-1"><strong>☠️ বিষের ধরন:</strong> ${snake.venom_type}</p>
                    </div>
                </div>
                ${snake.region ? `<p class="mb-1"><strong>📍 অবস্থান:</strong> ${snake.region}</p>` : ''}
                
                ${snake.symptoms ? `<p class="mb-1"><strong>⚠️ লক্ষণ:</strong> ${snake.symptoms}</p>` : ''}
                <p class="mt-2"><strong>💊 চিকিৎসা:</strong> ${snake.treatment}</p>
            `;
            return page;
        }

        function flipToPage(index) {
            pages.forEach(p => p.classList.remove('flipped'));
            for (let i = 0; i < index; i++) {
                pages[i].classList.add('flipped');
            }
            currentPage = index;
        }

        function nextPage() {
            if (pages.length === 0) return;
            const nextIndex = (currentPage + 1) % pages.length;
            flipToPage(nextIndex);
        }

        function prevPage() {
            if (pages.length === 0) return;
            const prevIndex = (currentPage - 1 + pages.length) % pages.length;
            flipToPage(prevIndex);
        }

        document.addEventListener("DOMContentLoaded", () => {
            // FAQ toggle
            document.querySelectorAll('.faq-question').forEach(button => {
                button.addEventListener('click', () => {
                    button.nextElementSibling.classList.toggle('hidden');
                });
            });

            // Load snake data
            fetch('{{ asset('snakes.json') }}')
                .then(res => res.json())
                .then(snakes => {
                    const book = document.getElementById('book');
                    snakes.forEach((snake, i) => {
                        const page = renderPage(snake, i, snakes.length);
                        book.appendChild(page);
                    });
                    pages = document.querySelectorAll('.page');
                })
                .catch(error => {
                    alert('❌ ডেটা লোড করা যায়নি!');
                    console.error('Error fetching JSON:', error);
                });

            // Keyboard navigation
            document.addEventListener('keydown', e => {
                if (e.key === 'ArrowRight') nextPage();
                else if (e.key === 'ArrowLeft') prevPage();
            });
        });
    </script>

</x-app-layout>
