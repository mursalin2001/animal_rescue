<div class="bg-white shadow rounded-lg p-4 border-l-4 border-green-500">
    <h3 class="text-lg font-semibold text-gray-800 mb-2">{{ $aa->animal_type }}</h3>
    <span class="inline-block text-xs bg-yellow-200 text-yellow-800 px-2 py-1 rounded mb-2">
        {{ $aa->status }}
    </span>
    <p class="text-sm text-gray-600 mb-3">{{ $aa->description }}</p>
    <p class="text-sm text-gray-600 mb-3">{{ $aa->upazila }}</p>
    <a href="{{ route('pages.animal_profile', $aa->id) }}" class="text-green-600 text-sm hover:underline">
        View Details
    </a>

    @if (auth()->user() && auth()->user()->role_id == 2)
        <form action="{{ route('posts.updateStatus', $aa->id) }}" method="POST" class="mt-4">
            @csrf
            <label for="status_{{ $aa->id }}" class="block mb-1 text-sm font-semibold text-gray-700">Change
                Status</label>
            <select name="status" id="status_{{ $aa->id }}"
                class="w-full px-4 py-2 text-sm border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                onchange="this.form.submit()">
                <option value="Pending" {{ $aa->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                <option value="Ongoing" {{ $aa->status == 'Ongoing' ? 'selected' : '' }}>Ongoing</option>
                <option value="Complete" {{ $aa->status == 'Complete' ? 'selected' : '' }}>Complete</option>
            </select>
        </form>

        <form action="{{ route('update.adoption', $aa->id) }}" method="POST" class="mt-2">
            @csrf
            @method('PUT')
            <select name="adoption" id="adoption_{{ $aa->id }}"
                class="w-full px-4 py-2 text-sm border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                onchange="this.form.submit()">
                <option value="Not Fit" {{ $aa->adoption == 'Not Fit' ? 'selected' : '' }}>Not Fit</option>
                <option value="Fit" {{ $aa->adoption == 'Fit' ? 'selected' : '' }}>Fit</option>
            </select>
        </form>
    @endif
</div>
