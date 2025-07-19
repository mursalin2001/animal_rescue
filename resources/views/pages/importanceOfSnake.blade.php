<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Preconception and Importance of Snake') }}
        </h2>
    </x-slot>

<div class="max-w-4xl mx-auto p-6 space-y-6">

  <h1 class="text-3xl font-bold text-center mb-8 text-green-800">🐍 সাপ সংক্রান্ত কুসংস্কার ও সাপের গুরুত্ব</h1>

  <!-- Module 1 -->
  <div class="border rounded-xl shadow-md">
    <button 
      class="w-full px-6 py-4 text-left text-xl font-semibold text-green-700 flex justify-between items-center focus:outline-none"
      aria-expanded="false"
      onclick="toggleAccordion(this)"
    >
      প্রচলিত কুসংস্কার
      <span class="transform transition-transform duration-300">+</span>
    </button>
    <div class="px-6 py-4 text-gray-700 hidden">
      <ul class="list-disc list-inside space-y-2">
        <li>সাপ মানুষকে তাড়া করে কামড়ায় – এটি একটি ভিত্তিহীন ধারণা।</li>
        <li>সাপের মাথায় মানিক থাকে – নিছক কল্পনা।</li>
        <li>সাপ প্রতিশোধ নেয় – বিজ্ঞানের দৃষ্টিতে অসম্ভব।</li>
        <li>ঘরে সাপ মানেই অমঙ্গল – প্রকৃতির অংশ হিসেবেই সাপ আশেপাশে আসে।</li>
      </ul>
    </div>
  </div>

  <!-- Module 2 -->
  <div class="border rounded-xl shadow-md">
    <button 
      class="w-full px-6 py-4 text-left text-xl font-semibold text-green-700 flex justify-between items-center focus:outline-none"
      aria-expanded="false"
      onclick="toggleAccordion(this)"
    >
      সাপের প্রকৃত গুরুত্ব
      <span class="transform transition-transform duration-300">+</span>
    </button>
    <div class="px-6 py-4 text-gray-700 hidden">
      <p class="mb-3">
        সাপ প্রকৃতির ভারসাম্য রক্ষা করে। ইঁদুর, ব্যাঙ, ক্ষতিকর প্রাণী খেয়ে কৃষিকে রক্ষা করে।
        বিষ থেকে তৈরি হয় অ্যান্টিভেনম ও জীবনরক্ষা ওষুধ। পর্যটন, গবেষণায়ও সাপ গুরুত্বপূর্ণ।
      </p>
      <p>
        সাপ বছরে প্রায় ১ হাজার কোটি টাকার ফসল রক্ষা করে ইঁদুর খেয়ে। কৃষি বিভাগের তথ্য অনুযায়ী,
        ইঁদুর বছরে বাংলাদেশের প্রায় ১০% ধান-গম নষ্ট করে, যেটা প্রায় ১ হাজার কোটি টাকার ক্ষতি।
        সাপ সেই ইঁদুর নিয়ন্ত্রণ করে আমাদের অর্থনীতির জন্য বিশাল অবদান রাখে।
      </p>
    </div>
  </div>

  <!-- Module 3 -->
  <div class="border rounded-xl shadow-md">
    <button 
      class="w-full px-6 py-4 text-left text-xl font-semibold text-green-700 flex justify-between items-center focus:outline-none"
      aria-expanded="false"
      onclick="toggleAccordion(this)"
    >
      সাপের শ্রবণশক্তি আছে কি?
      <span class="transform transition-transform duration-300">+</span>
    </button>
    <div class="px-6 py-4 text-gray-700 hidden">
      <p>
        অনেকের ধারণা সাপ জিহ্বা দিয়ে শুনে, যা সম্পূর্ণ ভুল। সাপের বহিঃকর্ণ ও মধ্যকর্ণ না থাকলেও অন্তঃকর্ণ রয়েছে।
        শব্দ তরঙ্গ মাটি থেকে সাপের চোয়ালের হাড়ে কম্পন সৃষ্টি করে যা অন্তঃকর্ণে পৌঁছায় এবং সাপ শুনতে পারে।
        বাতাসের শব্দ সরাসরি শুনতে পারে না। মাটিতে মাথা ঠেকিয়ে সাপ শোনে।
      </p>
    </div>
  </div>

  <!-- Module 4 -->
  <div class="border rounded-xl shadow-md">
    <button 
      class="w-full px-6 py-4 text-left text-xl font-semibold text-green-700 flex justify-between items-center focus:outline-none"
      aria-expanded="false"
      onclick="toggleAccordion(this)"
    >
      সাপের জিহ্বার কাজ কী?
      <span class="transform transition-transform duration-300">+</span>
    </button>
    <div class="px-6 py-4 text-gray-700 hidden">
      <p>
        সাপের জিহ্বা কোনো শ্রবণ অঙ্গ নয়। এটি একটি গন্ধগ্রহণ অঙ্গ।
        সাপ জিহ্বা বার করে বাতাস ও মাটি থেকে রাসায়নিক উপাদান সংগ্রহ করে,
        যা মুখের ভিতরের জ্যাকবসন’স অর্গানে পাঠিয়ে বাইরের পরিবেশ বিশ্লেষণ করে।
        স্থির বস্তুর অস্তিত্ব বুঝতেও জিহ্বা ব্যবহার করে।
      </p>
    </div>
  </div>

  <!-- Module 5 -->
  <div class="border rounded-xl shadow-md">
    <button 
      class="w-full px-6 py-4 text-left text-xl font-semibold text-green-700 flex justify-between items-center focus:outline-none"
      aria-expanded="false"
      onclick="toggleAccordion(this)"
    >
      সাপের বিষথলি ও বিষ প্রয়োগ প্রক্রিয়া
      <span class="transform transition-transform duration-300">+</span>
    </button>
    <div class="px-6 py-4 text-gray-700 hidden space-y-2">
      <p>
        সাপের বিষথলি আসলে বিবর্তিত লালাগ্রন্থি। এর মাধ্যমে সাপ বিষ উৎপাদন ও প্রয়োগ করে।
        মূলত সংকোচনশীল পেশির মাধ্যমে বিষথলিতে চাপ পড়ে এবং বিষ নির্গত হয়।
      </p>
      <ul class="list-decimal list-inside">
        <li>Compressor muscle – পেশি যা বিষ বের করতে সংকোচন করে।</li>
        <li>Main venom gland – প্রধান বিষথলি, বিষ উৎপন্ন ও সংরক্ষিত হয়।</li>
        <li>Primary duct – বিষ বহনকারী প্রধান নালী।</li>
        <li>Accessory venom gland – অতিরিক্ত থলি, মারাত্মক বিষ ধরে রাখে।</li>
        <li>Discharge aperture – দাঁতের অগ্রভাগের ছিদ্র, বিষ প্রবেশ করায়।</li>
        <li>Fang – বিষদাঁত, যেটি দিয়ে কামড়িয়ে বিষ প্রয়োগ হয়।</li>
      </ul>
      <p>
        Elapidae সাপ যেমন গোখরা, কালাচ – এদের বিষদাঁত ছোট কিন্তু বিষ তীব্র।
        Viperidae যেমন চন্দ্রবোড়া – দাঁত ভাঁজযোগ্য ও বড়, বিষ প্রয়োগের ক্ষমতা বেশি।
        Mildly venomous সাপ যেমন ঢোঁড়া – বিষ প্রয়োগ দুর্বল, দাঁত খাঁজকাটা হয়।
      </p>
    </div>
  </div>

</div>



</x-app-layout>

<script>
  function toggleAccordion(btn) {
    const content = btn.nextElementSibling;
    const expanded = btn.getAttribute('aria-expanded') === 'true';
    if (expanded) {
      content.classList.add('hidden');
      btn.setAttribute('aria-expanded', 'false');
      btn.querySelector('span').textContent = '+';
    } else {
      content.classList.remove('hidden');
      btn.setAttribute('aria-expanded', 'true');
      btn.querySelector('span').textContent = '−';
    }
  }
</script>