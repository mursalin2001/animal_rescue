<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Snake Type Details') }}
        </h2>
    </x-slot>
<div class="p-6 bg-gray-100 min-h-screen">
    <div class="max-w-4xl mx-auto bg-white shadow-md rounded-xl p-6">
        <h1 class="text-xl font-bold text-center mb-4">সাপের প্রজাতি</h1>

        <h2 class="font-semibold text-lg mt-4">১. মৃদু বিষধর সাপ</h2>
        <ul class="list-disc list-inside text-gray-700">
            <li>দুধরাজ</li>
            <li>ঘর সাপ</li>
            <li>লাউডগা</li>
        </ul>

        <h2 class="font-semibold text-lg mt-4">২. বিষধর সাপ</h2>
        <ul class="list-disc list-inside text-gray-700">
            <li>গোখরা</li>
            <li>চালা সাপ</li>
            <li>চন্দ্রবোড়া</li>
            <li>রাজ গোখরা</li>
            <li>শঙ্খচূড়</li>
        </ul>

        <h2 class="font-semibold text-lg mt-4">৩. নির্বিষ সাপ</h2>
        <ul class="list-disc list-inside text-gray-700">
            <li>দড়ি সাপ</li>
            <li>জোঁক সাপ</li>
            <li>ঘর সাপ</li>
        </ul>
    </div>
</div>
</x-app-layout>

