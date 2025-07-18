<div class="bg-white shadow rounded-lg p-4 border-l-4 border-green-500">
    <h3 class="text-lg font-semibold text-gray-800 mb-2">{{ $post->animal_type }}</h3>
    <span class="inline-block text-xs bg-yellow-200 text-yellow-800 px-2 py-1 rounded mb-2">
        {{ $post->status }}
    </span>
    <p class="text-sm text-gray-600 mb-3">{{ $post->description }}</p>
    <p class="text-sm text-gray-600 mb-3">{{ $post->upazila }}</p>
    <a href="{{ route('pages.animal_profile', $post->id) }}" class="text-green-600 text-sm hover:underline">
        View Details
    </a>

    @if (auth()->user() && auth()->user()->role_id == 2)
        <form action="{{ route('posts.updateStatus', $post->id) }}" method="POST" class="mt-4">
            @csrf
            <label for="status_{{ $post->id }}" class="block mb-1 text-sm font-semibold text-gray-700">Change
                Status</label>
            <select name="status" id="status_{{ $post->id }}"
                class="w-full px-4 py-2 text-sm border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                onchange="this.form.submit()">
                <option value="Pending" {{ $post->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                <option value="Ongoing" {{ $post->status == 'Ongoing' ? 'selected' : '' }}>Ongoing</option>
                <option value="Complete" {{ $post->status == 'Complete' ? 'selected' : '' }}>Complete</option>
            </select>
        </form>

        <form action="{{ route('update.adoption', $post->id) }}" method="POST" class="mt-2">
            @csrf
            @method('PUT')
            <select name="adoption" id="adoption_{{ $post->id }}"
                class="w-full px-4 py-2 text-sm border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                onchange="this.form.submit()">
                <option value="Not Fit" {{ $post->adoption == 'Not Fit' ? 'selected' : '' }}>Not Fit</option>
                <option value="Fit" {{ $post->adoption == 'Fit' ? 'selected' : '' }}>Fit</option>
            </select>
        </form>
    @endif
</div>
