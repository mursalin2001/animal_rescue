<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Animal Rescue Tips') }}
        </h2>
    </x-slot>

    <!-- Header -->
    <div class="bg-black text-white py-6 text-center">
        <h1 class="text-4xl font-bold tracking-wide">FAQS</h1>
    </div>

    <!-- Tabs -->
    <div class="flex flex-wrap justify-center gap-3 mt-6 px-4">
        <a href="#general" class="px-4 py-2 bg-black text-white text-sm font-medium rounded-sm hover:bg-gray-800">GENERAL RESCUE TIPS</a>
        <a href="#injury" class="px-4 py-2 bg-black text-white text-sm font-medium rounded-sm hover:bg-gray-800">INJURED ANIMALS</a>
        <a href="#feeding" class="px-4 py-2 bg-black text-white text-sm font-medium rounded-sm hover:bg-gray-800">FEEDING & SHELTER</a>
        <a href="#adoption" class="px-4 py-2 bg-black text-white text-sm font-medium rounded-sm hover:bg-gray-800">FOSTERING & ADOPTION</a>
        <a href="#report" class="px-4 py-2 bg-black text-white text-sm font-medium rounded-sm hover:bg-gray-800">WHERE TO REPORT</a>
    </div>

    <!-- JS Toggle Script -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('.faq-question').forEach(button => {
                button.addEventListener('click', () => {
                    const answer = button.nextElementSibling;
                    answer.classList.toggle('hidden');
                });
            });
        });
    </script>

    @php
        $faqs = [
            'general' => [
                ['q' => 'What should I do if I see a stray animal?', 'a' => 'Approach calmly. Avoid loud noises. Offer water and observe from a safe distance.'],
                ['q' => 'Can I touch or carry the stray animal?', 'a' => 'Only if the animal appears friendly. Use gloves if unsure. Injured or aggressive animals should be handled by professionals.'],
            ],
            'injury' => [
                ['q' => 'How do I help an injured dog or cat?', 'a' => 'Keep them warm and avoid moving them unnecessarily. Call a vet or rescue team immediately.'],
                ['q' => 'Should I give medicine to an injured animal?', 'a' => 'No. Medication should only be given by a vet. Your job is to keep the animal stable until help arrives.'],
            ],
            'feeding' => [
                ['q' => 'What can I feed rescued animals?', 'a' => 'Plain rice, boiled chicken, biscuits, or pet food. Avoid spicy, oily, or dairy foods.'],
                ['q' => 'How to create temporary shelter?', 'a' => 'Use a cardboard box with a towel or blanket. Keep it dry and away from traffic.'],
            ],
            'adoption' => [
                ['q' => 'Can I adopt a rescued animal permanently?', 'a' => 'Yes, adoption is the best outcome! Ensure you can provide time, love, and care before adopting.'],
                ['q' => 'How long should I foster before adoption?', 'a' => 'Ideally 2-4 weeks, but depends on the animal’s health and behavior. Some may need longer recovery.'],
            ],
            'report' => [
                ['q' => 'Where can I report a stray animal in Bangladesh?', 'a' => 'You can contact PAW Foundation, Obhoyaronno, or local Facebook rescue pages.'],
                ['q' => 'Can I use social media to report?', 'a' => 'Absolutely. Post with location, pictures, and condition. Tag local animal groups or shelters.'],
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

    <!-- Footer Note -->
    <div class="text-center text-sm italic text-gray-600 mt-10 mb-5">
        Curated by Decimals to Infinity — Empowering Animal Rescuers, 2025
    </div>
</x-app-layout>
