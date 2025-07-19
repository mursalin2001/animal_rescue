<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Snake Bite Symptoms') }}
        </h2>
    </x-slot>
    <div class="max-w-4xl mx-auto p-6 bg-white rounded-xl shadow-lg mt-10 space-y-8">

  <h1 class="text-3xl font-bold text-center text-green-800 mb-6">
    সাপের বিষের ধরন ও প্রভাব
  </h1>

  <p class="text-gray-700 leading-relaxed">
    সাপের বিষ মূলত বিভিন্ন প্রোটিন এবং এনজাইমের এক জটিল মিশ্রণ, যা সাপের প্রজাতি এবং
    ভৌগোলিক অবস্থানের ওপর নির্ভর করে ভিন্ন হয়। বিষের মূল উপাদানগুলোর কার্যকারিতার ওপর ভিত্তি করে প্রধানত তিন ধরনের বিষ চিহ্নিত করা হয়:
  </p>

  <!-- Neurotoxic Venom -->
  <section class="border-l-4 border-green-500 pl-4">
    <h2 class="text-2xl font-semibold text-green-700 mb-2">১. নিউরোটক্সিক বিষ (Neurotoxic Venom / স্নায়ুবিষ)</h2>
    <p class="text-gray-700 mb-2">
      <strong>প্রভাব:</strong> এই ধরণের বিষ স্নায়ুতন্ত্রকে প্রভাবিত করে। এটি স্নায়ু কোষের সংকেত পরিবহনে বাধা সৃষ্টি করে,
      বিশেষ করে পেশী এবং মস্তিষ্কের মধ্যে সংযোগে। এর ফলে আক্রান্ত স্থানে পক্ষাঘাত (paralysis) দেখা দেয়,
      যা শ্বাসপ্রশ্বাস এবং হৃদপিণ্ডের পেশীকে প্রভাবিত করে শ্বাসযন্ত্রের কার্যকারিতা বন্ধ করে দিতে পারে।
      এই বিষের ফলে অনেক সময় আক্রান্ত ব্যক্তি ব্যথা অনুভব করেন না, ফলে প্রাথমিক উপসর্গগুলো সহজে বোঝা যায় না।
    </p>
    <p class="text-gray-700 mb-2"><strong>লক্ষণ:</strong> ঝাপসা দৃষ্টি, মাথা ঘোরা, দুর্বলতা, কথা বলতে অসুবিধা, ঢোক গিলতে অসুবিধা, শ্বাস নিতে কষ্ট হওয়া, এবং অবশেষে শ্বাসযন্ত্রের পক্ষাঘাত।</p>
    <p class="text-gray-700"><strong>উদাহরণ:</strong> গোখরা (Cobra), শঙ্খিনী বা ক্রেইট (Krait), মাম্বা (Mamba) এবং সমুদ্র সাপের (Sea Snake) বিষ।</p>
  </section>

  <!-- Hemotoxic Venom -->
  <section class="border-l-4 border-red-500 pl-4">
    <h2 class="text-2xl font-semibold text-red-700 mb-2">২. হেমোটক্সিক বিষ (Hemotoxic Venom / রক্তবিষ)</h2>
    <p class="text-gray-700 mb-2">
      <strong>প্রভাব:</strong> এই বিষ রক্ত এবং রক্তনালীকে লক্ষ্য করে। এটি রক্ত জমাট বাঁধার প্রক্রিয়াকে ব্যাহত করতে পারে,
      যার ফলে অভ্যন্তরীণ বা বাহ্যিক রক্তপাত হয়। এটি লোহিত রক্তকণিকা (red blood cells) ধ্বংস করতে পারে এবং রক্তনালী ক্ষতিগ্রস্ত করে।
    </p>
    <p class="text-gray-700 mb-2"><strong>লক্ষণ:</strong> দংশিত স্থানে তীব্র ব্যথা, ফোলা, কালচে হওয়া, রক্তপাত (দংশন স্থান বা শরীরের অন্যান্য স্থান থেকে),
      রক্তক্ষরণজনিত শক, এবং অভ্যন্তরীণ অঙ্গের ক্ষতি। কিছু ক্ষেত্রে কিডনির কার্যকারিতা নষ্ট হতে পারে।</p>
    <p class="text-gray-700"><strong>উদাহরণ:</strong> রাসেলস ভাইপার (Russell's Viper), চন্দ্রবোড়া (Russell's Viper), স-স্কেল্ড ভাইপার (Saw-scaled Viper) এবং র্যাটলস্নেক (Rattlesnake) এর বিষ।</p>
  </section>

  <!-- Cytotoxic & Myotoxic Venom -->
  <section class="border-l-4 border-yellow-500 pl-4">
    <h2 class="text-2xl font-semibold text-yellow-700 mb-2">৩. সাইটোটক্সিক বিষ (Cytotoxic Venom / কোষবিষ) ও মায়োটক্সিক বিষ (Myotoxic Venom / পেশীবিষ)</h2>
    <p class="text-gray-700 mb-2">
      <strong>প্রভাব:</strong> এই বিষ কোষ এবং টিস্যুকে সরাসরি ধ্বংস করে। এটি দংশন স্থানে তীব্র ব্যথা, ফোলা, এবং কোষের মৃত্যু (necrosis) ঘটায়,
      যার ফলে আক্রান্ত স্থান পচে যেতে পারে এবং স্থায়ী টিস্যুর ক্ষতি হতে পারে।
      মায়োটক্সিন পেশী কোষকে ভেঙে দেয়, যার ফলে পেশী দুর্বল হয়ে পড়ে এবং ব্যথা হয়।
    </p>
    <p class="text-gray-700 mb-2"><strong>লক্ষণ:</strong> দংশন স্থানে তীব্র ব্যথা, ফোলা, ফোস্কার সৃষ্টি, টিস্যুর পচন, এবং রক্তপাত।</p>
    <p class="text-gray-700"><strong>উদাহরণ:</strong> কিছু গোখরা (যেমন স্পিটিং কোবরা), কিছু ভাইপার এবং র্যাটলস্নেকের বিষে সাইটোটক্সিক উপাদান থাকতে পারে।</p>
  </section>

  <p class="text-gray-800 font-semibold mt-6">
    <strong>মিশ্র বিষের উপস্থিতি:</strong> কিছু সাপের বিষে একাধিক ধরণের টক্সিনের মিশ্রণ থাকে, যেমন কিং কোবরার বিষে নিউরোটক্সিন এবং কার্ডিওটক্সিন উভয়ই থাকে। এই কারণে সাপে কামড়ানোর পর দ্রুত চিকিৎসা গ্রহণ করা অত্যন্ত গুরুত্বপূর্ণ। সঠিক অ্যান্টিভেনম (antivenom) প্রয়োগের মাধ্যমে বিষের প্রভাব কমানো সম্ভব হয়।
  </p>

</div>

<div class="max-w-4xl mx-auto p-6 bg-white rounded-xl shadow-lg mt-10 space-y-10">

  <h1 class="text-3xl font-bold text-center text-red-700 mb-8">সর্প দংশনের লক্ষণ, উপসর্গ ও করণীয়</h1>

  <!-- লক্ষণ -->
  <section>
    <h2 class="text-2xl font-semibold text-red-600 mb-4 border-b-2 border-red-300 pb-2">লক্ষণ</h2>
    <ul class="list-disc list-inside text-gray-700 space-y-2">
      <li>কামড়ানোর জায়গায় চুলকানি ও লালচে দাগ দেখা যায়।</li>
      <li>আঘাত স্থানে ফোলা ও ব্যথা শুরু হয়।</li>
      <li>রক্তক্ষরণ বা রক্ত বের হতে পারে।</li>
      <li>দুর্বলতা ও মাথা ঘোরা অনুভূত হয়।</li>
    </ul>
  </section>

  <!-- উপসর্গ -->
  <section>
    <h2 class="text-2xl font-semibold text-red-600 mb-4 border-b-2 border-red-300 pb-2">উপসর্গ</h2>
    <ul class="list-disc list-inside text-gray-700 space-y-2">
      <li>অজ্ঞান হওয়ার ঝুঁকি।</li>
      <li>শ্বাসকষ্ট বা শ্বাসরুদ্ধ হওয়ার অনুভূতি।</li>
      <li>বমি বা বমিভাব।</li>
      <li>হৃদস্পন্দন বেড়ে যাওয়া বা কমে যাওয়া।</li>
      <li>দেহের অন্যান্য স্থানে ব্যথা বা স্ফীতি।</li>
    </ul>
  </section>

  <!-- করণীয় -->
  <section>
    <h2 class="text-2xl font-semibold text-red-600 mb-4 border-b-2 border-red-300 pb-2">করণীয়</h2>
    <ul class="list-disc list-inside text-gray-700 space-y-2">
      <li>আহত ব্যক্তিকে দ্রুত শান্ত ও স্থির রাখুন।</li>
      <li>দংশনের স্থান হৃদয়ের নিচে রাখুন।</li>
      <li>জল দিয়ে দংশনের জায়গা পরিষ্কার করুন।</li>
      <li>যথা দ্রুত নিকটস্থ চিকিৎসক বা হাসপাতালে নিয়ে যান।</li>
      <li>সাপের ধরন জানলে চিকিৎসককে জানান।</li>
    </ul>
  </section>

</div>

</x-app-layout>


<div class="max-w-3xl mx-auto p-6 bg-white rounded-xl shadow-lg mt-10 space-y-8 font-sans">

  <h1 class="text-3xl font-extrabold text-red-700 text-center mb-6">#Rabies_জলাতঙ্ক নিয়ে যত কথাঃ</h1>

  <!-- র‍্যাবিস ছড়ানোর উপায় -->
  <section>
    <h2 class="text-xl font-semibold text-red-600 mb-2 border-b-2 border-red-300 pb-1">🔴 র‍্যাবিস/জলাতঙ্ক কিভাবে ছড়ায়ঃ</h2>
    <p class="text-gray-700 leading-relaxed">
      র‍্যাবিস আক্রান্ত প্রাণীদের কামড়ে, নখের আছড়ে র‍্যাবিস ভাইরাসের মাধ্যমে এই রোগ মানুষের শরীরে ছড়ায়।
    </p>
  </section>

  <!-- র‍্যাবিস ছড়ানোর প্রাণী -->
  <section>
    <h2 class="text-xl font-semibold text-red-600 mb-2 border-b-2 border-red-300 pb-1">🔴 কোন কোন প্রাণীর মাধ্যমে ছড়াতে পারে:</h2>
    <p class="text-gray-700">
      কুকুর, বিড়াল, বানর, ঘোড়া, শেয়াল, বেঁজি ইত্যাদি।
    </p>
  </section>

  <!-- প্রধান উপসর্গ -->
  <section>
    <h2 class="text-xl font-semibold text-red-600 mb-2 border-b-2 border-red-300 pb-1">🔴 র‍্যাবিস/জলাতঙ্ক এর প্রধান উপসর্গঃ</h2>
    <p class="text-gray-700 leading-relaxed">
      হাইড্রোফোবিয়া (পানি ভয় পাওয়া)। র‍্যাবিস আক্রান্তের ৩ দিনের মধ্যেই সাধারণত রোগী মারা যায়। একবার রোগ হলে মৃত্যু নিশ্চিত।
    </p>
  </section>

  <!-- প্রতিরোধ -->
  <section>
    <h2 class="text-xl font-semibold text-red-600 mb-2 border-b-2 border-red-300 pb-1">🔴 র‍্যাবিস এর প্রতিরোধঃ</h2>
    <ul class="list-disc list-inside text-gray-700 space-y-1">
      <li>র‍্যাবিড প্রাণীদের কামড়/আছড়ের পর যত দ্রুত সম্ভব ভ্যাক্সিন নেওয়া।</li>
      <li>পোষা কুকুর-বিড়ালকে নিয়মিত ভ্যাক্সিন দিয়ে রাখা।</li>
    </ul>
  </section>

  <!-- যাদের ভ্যাক্সিন নেওয়া উচিত -->
  <section>
    <h2 class="text-xl font-semibold text-red-600 mb-2 border-b-2 border-red-300 pb-1">🔴 যাদের আগে থেকেই ভ্যাক্সিন নেওয়া উচিতঃ</h2>
    <ul class="list-disc list-inside text-green-700 font-semibold space-y-1">
      <li>চিড়িয়াখানায় যারা কাজ করে।</li>
      <li>রাস্তা-ঘাটে যারা কাজ করে।</li>
      <li>বন-জঙ্গলে যাঁরা ভ্রমণ করেন।</li>
    </ul>
  </section>

  <!-- কামড়ের পর করণীয় -->
  <section>
    <h2 class="text-xl font-semibold text-red-600 mb-2 border-b-2 border-red-300 pb-1">🔴 কুকুর-বিড়ালের কামড়ের পর করণীয়ঃ</h2>
    <ul class="list-disc list-inside text-gray-700 space-y-2">
      <li>প্রথমেই ক্ষতস্থান কাপড়, কাচার সাবান ও পরিষ্কার পানি দিয়ে কমপক্ষে ২০ মিনিট ধরে ভালো করে ধুতে হবে।</li>
      <li>যদি রক্তপাত না হয় এবং ক্ষতস্থানে চামড়া ছিঁড়ে না থাকে, তবে শুধুমাত্র পরিষ্কার করলেই যথেষ্ট, ভ্যাক্সিনের প্রয়োজন নেই।</li>
      <li>যদি সামান্য রক্তপাতও হয়, তবে অবশ্যই যত দ্রুত সম্ভব ভ্যাক্সিন নিতে হবে, কারণ র‍্যাবিস একবার হলে মৃত্যুদণ্ডস্বরূপ।</li>
      <li>র‍্যাবিস ভ্যাক্সিন সরকারি হাসপাতালে বিনামূল্যে পাওয়া যায়।</li>
      <li>ঢাকায় মহাখালী সংক্রামক ব্যাধি হাসপাতালে বিনামূল্যে ভ্যাক্সিন পাওয়া যায়।</li>
    </ul>
  </section>

</div>


