
<div>
<?php 
use App\Models\Post;
$pending = Post::where('status', 'Pending')->count();
$ongoing = Post::where('status', 'Ongoing')->count();
$completed = Post::where('status', 'Complete')->count();

$my_pending = Post::where('user_id', Auth::id())->where('status', 'Pending')->count();
$my_ongoing = Post::where('user_id', Auth::id())->where('status', 'Ongoing')->count();
$my_complete = Post::where('user_id', Auth::id())->where('status', 'Complete')->count();


?>
@section('styles')
<link rel='stylesheet' href='https://cdn.plyr.io/3.4.6/plyr.css'>

<style>
	.plyr {
  border-radius: 0.5rem;
  margin-bottom: 15px;
}
</style>
@endsection

@if(session()->has('success'))
<div class="bg-green-100 border my-3 border-green-400 text-green-700 dark:bg-green-700 dark:border-green-600 dark:text-green-100 px-4 py-3 rounded relative" role="alert">
  <span class="block sm:inline text-center">{{ session()->get('success') }}</span>
</div>
@endif
@if(session()->has('error'))
<div class="bg-red-100 border my-3 border-red-400 text-red-700 dark:bg-red-700 dark:border-red-600 dark:text-red-100 px-4 py-3 rounded relative" role="alert">
  <span class="block sm:inline text-center">{{ session()->get('error') }}</span>
</div>
@endif


@php
    $currentUrl = url()->current();
    $currentStatus = request('status');
    $isHome = request()->is('home');
@endphp

<div class="flex justify-center gap-4 my-6">
  @if($isHome)
    <a href="{{ $currentUrl . '?status=Pending' }}"
       class="px-4 py-2 rounded {{ $currentStatus === 'Pending' ? 'bg-yellow-400 text-white' : 'bg-yellow-200' }}">
        Pending ({{ $pending }})
    </a>
    <a href="{{ $currentUrl . '?status=Ongoing' }}"
       class="px-4 py-2 rounded {{ $currentStatus === 'Ongoing' ? 'bg-blue-400 text-white' : 'bg-blue-200' }}">
        Ongoing ({{ $ongoing }})
    </a>
    <a href="{{ $currentUrl . '?status=Complete' }}"
       class="px-4 py-2 rounded {{ $currentStatus === 'Complete' ? 'bg-green-400 text-white' : 'bg-green-200' }}">
        Completed ({{ $completed }})
    </a>
  @else
    <a href="{{ $currentUrl . '?status=Pending' }}"
       class="px-4 py-2 rounded {{ $currentStatus === 'Pending' ? 'bg-yellow-400 text-white' : 'bg-yellow-200' }}">
        Pending ({{ $my_pending }})
    </a>
    <a href="{{ $currentUrl . '?status=Ongoing' }}"
       class="px-4 py-2 rounded {{ $currentStatus === 'Ongoing' ? 'bg-blue-400 text-white' : 'bg-blue-200' }}">
        Ongoing ({{ $my_ongoing }})
    </a>
    <a href="{{ $currentUrl . '?status=Complete' }}"
       class="px-4 py-2 rounded {{ $currentStatus === 'Complete' ? 'bg-green-400 text-white' : 'bg-green-200' }}">
        Completed ({{ $my_complete }})
    </a>
  @endif
</div>



<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
    @forelse($posts as $post)
        @include('elements.post')
    @empty
        <div class="col-span-full flex justify-center">
            <div class="bg-white shadow-md rounded-3xl p-6 max-w-xl w-full text-center">
                <img src="{{ asset('images/no-posts.png') }}" 
                     alt="No Posts" 
                     class="w-full h-64 object-contain rounded-xl mb-4">
                <h2 class="text-xl font-semibold text-gray-700">{{ __('No Posts found..!!!') }}</h2>
                <p class="text-sm text-gray-500 mt-2">Try adjusting your filters or check back later.</p>
            </div>
        </div>
    @endforelse
</div>


        <div class="py-4 mb-2">
	        {{ $posts->links() }}
        </div>


        @include('elements.comments-post-modal')

        @include('elements.delete-post-modal')

        @section('scripts')
         <script src='https://cdn.plyr.io/3.4.6/plyr.js'></script>
		 <script>
			document.addEventListener('DOMContentLoaded', () => {
  // This is the bare minimum JavaScript. You can opt to pass no arguments to setup.
  const player = Plyr.setup('video', { captions: {active: true}, tooltips: {controls: true, seek: true} });

  // Expose
  window.player = player;

  for (var i in player) {
     player[i].on('play', function (instance) {
       var source = instance.detail.plyr.source;
       for (var x in player) {
         if (player[x].source != source) {
          player[x].pause();
         }
       }
     });
    }

  // Bind event listener
  function on(selector, type, callback) {
    document.querySelector(selector).addEventListener(type, callback, false);
  }

  // Play
  on('.js-play', 'click', () => {
    player.play();
  });

  // Pause
  on('.js-pause', 'click', () => {
    player.pause();
  });

  // Stop
  on('.js-stop', 'click', () => {
    player.stop();
  });

  // Rewind
  on('.js-rewind', 'click', () => {
    player.rewind();
  });

  // Forward
  on('.js-forward', 'click', () => {
    player.forward();
  });
});
		 </script>
		@endsection

</div>