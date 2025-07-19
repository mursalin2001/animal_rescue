<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Snake Bite Treatment') }}
        </h2>
    </x-slot>
<div class="max-w-3xl mx-auto p-6 bg-white rounded-xl shadow-lg mt-10">

  <h1 class="text-3xl font-bold text-center text-green-800 mb-8">সর্প দংশনের প্রাথমিক চিকিৎসা</h1>

  <button 
    class="w-full text-left px-5 py-4 bg-green-100 rounded-lg flex justify-between items-center text-green-800 font-semibold text-xl focus:outline-none"
    aria-expanded="false"
    onclick="toggleAccordion(this)"
  >
    বিস্তারিত জানার জন্য ক্লিক করুন
    <span class="transform transition-transform duration-300">+</span>
  </button>

  <div class="mt-4 text-gray-700 hidden space-y-5">

    <p>
      সর্প দংশন গুরুতর একটি পরিস্থিতি। তৎক্ষণাৎ সঠিক চিকিৎসা পেলে জীবন বাঁচানো সম্ভব। দংশনের পর প্রথমিক অবস্থায় যা করা উচিত তা নিচে বর্ণনা করা হলো:
    </p>

    <ol class="list-decimal list-inside space-y-3">
      <li>
        <strong>দ্রুত নিরাপদ স্থান পরিহার করুন:</strong> যত দ্রুত সম্ভব সাপ থেকে দূরে চলে যান, যাতে অতিরিক্ত ক্ষতি না হয়। আহত ব্যক্তি নিরাপদ স্থানে বসিয়ে রাখুন।
      </li>
      <li>
        <strong>শান্ত ও অচঞ্চল রাখুন:</strong> আহত ব্যক্তিকে শান্ত ও অচঞ্চল রাখুন। দ্রুত চলাফেরা বা দৌড়ানো এড়িয়ে চলুন, কারণ দ্রুত রক্ত সঞ্চালন বিষ দ্রুত ছড়িয়ে পড়ার কারণ হতে পারে।
      </li>
      <li>
        <strong>দংশনের স্থান নিচে রাখুন:</strong> দংশনের স্থানকে শরীরের নিচু স্থানে রাখুন, হৃদয়ের থেকে নিচে থাকলে বিষের ছড়ানোর গতি কমে।
      </li>
      <li>
        <strong>দংশনের স্থান পরিষ্কার করুন:</strong> দংশনের স্থান সাবান ও পানি দিয়ে হালকাভাবে পরিষ্কার করুন। ক্ষতি বা ঘা মুছে ফেলা যাবে না।
      </li>
      <li>
        <strong>রক্ত নিষ্কাশন বা চুষতে যাবেন না:</strong> দংশনের স্থান থেকে রক্ত চুষে বা ক্ষতি ফেলা যাবে না। এটি সংক্রমণের কারণ হতে পারে এবং ক্ষত বাড়াতে পারে।
      </li>
      <li>
        <strong>বেঁধে রাখার ক্ষেত্রে সাবধানতা:</strong> খুব শক্ত করে নয়, যেন রক্ত চলাচল বন্ধ হয়ে যায় না। সাধারণত সংবহনী গঠন বন্ধ করে বেঁধে রাখতে হয়, তবে আধুনিক চিকিৎসায় এ পদ্ধতি কম ব্যবহৃত।
      </li>
      <li>
        <strong>দ্রুত চিকিৎসকের কাছে নিন:</strong> যত দ্রুত সম্ভব কাছাকাছি হাসপাতাল বা স্বাস্থ্যকেন্দ্রে নিয়ে যান। সাপের বিষ নির্ণয়ের জন্য প্রয়োজনে সাপ দেখানোর চেষ্টা করুন, কিন্তু সাপ ধরার চেষ্টায় ঝুঁকি নেবেন না।
      </li>
      <li>
        <strong>আশপাশ থেকে তথ্য সংগ্রহ:</strong> সাপের বর্ণনা বা ছবি থাকলে চিকিৎসকদের দেখানো সহজ হয়, যাতে সঠিক অ্যান্টিভেনম দেওয়া যায়।
      </li>
    </ol>

    <div class="bg-green-50 p-4 rounded-md mt-6 text-green-900 font-semibold">
      <p>জরুরি টিপস:</p>
      <ul class="list-disc list-inside mt-2 space-y-1">
        <li>অ্যালকোহল, কফি বা চা পান করানো থেকে বিরত থাকুন।</li>
        <li>শ্বাসকষ্ট, চুলকানি, লালা বৃদ্ধি, মাথা ঘোরানো, অসুস্থ লাগা বা অজ্ঞানতা হলে দ্রুত জরুরি বিভাগে নিন।</li>
        <li>দংশনের স্থান কাটাছেঁড়া বা ঝাঁকানো থেকে বিরত থাকুন।</li>
      </ul>
    </div>

  </div>

<div class="max-w-4xl mx-auto p-6 space-y-6">

  <div>
    <img 
      src="{{ asset('images/snake_info/Snake_bite1.jpg') }}" 
      alt="Example Image" 
      class="w-full h-auto rounded-lg shadow-md object-contain"
    />
    <p class="mt-3 text-center text-gray-700 text-lg font-medium">
      <h2 class="text-2xl font-bold text-green-800 mb-4">জা করতে হবে</h2>
      <ul class="list-disc list-inside text-green-700 space-y-2">
        <li>আহত ব্যক্তিকে শান্ত ও অচঞ্চল রাখুন।</li>
        <li>দংশনের স্থান হৃদয়ের নিচে রাখুন।</li>
        <li>দংশনের স্থান সাবান ও পানি দিয়ে পরিষ্কার করুন।</li>
        <li>দ্রুত হাসপাতালে নিয়ে যান।</li>
        <li>সাপের ধরন জানলে চিকিৎসকদের জানান।</li>
      </ul>
    </p>
  </div>

  <div>
    <img 
      src="{{ asset('images/snake_info/Snake_bite2.jpg') }}" 
      alt="Example Image 2" 
      class="w-full h-auto rounded-lg shadow-md object-contain"
    />
    <p class="mt-3 text-center text-gray-700 text-lg font-medium">
      <h2 class="text-2xl font-bold text-red-700 mb-4">জা করা যাবে না</h2>
      <ul class="list-disc list-inside text-red-600 space-y-2">
        <li>রক্ত চুষে বা ক্ষত কাটতে যাবেন না।</li>
        <li>দংশনের স্থান কাটাছেঁড়া করবেন না।</li>
        <li>অ্যালকোহল, কফি বা চা পান করাবেন না।</li>
        <li>বেঁধে রাখতে গেলে খুব শক্ত করবেন না।</li>
        <li>সাপ ধরার চেষ্টা করবেন না।</li>
      </ul>
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