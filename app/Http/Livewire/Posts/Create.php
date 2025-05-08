<?php

namespace App\Http\Livewire\Posts;

use App\Models\Media;
use App\Models\Post;
use Livewire\Component;
use Livewire\WithFileUploads;
use Stevebauman\Location\Facades\Location;

class Create extends Component
{
    use WithFileUploads;

<<<<<<< HEAD
    public $title;
    public $animal_age;
    public $upazila;
    public $animal_type;
    public $animal_condition;
    public $contact_number;
    public $body;
    public $latitude, $longitude;

    public $file;

    public $location;
=======
    protected $listeners = ['setLocation'];

    public $location;
    public $animal_age;
    public $upazila;
    public $animal_number;
    public $exact_location;
    public $animal_type;
    public $animal_condition;
    public $contact_number;
    public $latitude, $longitude;
    public $description;
    public $file;

>>>>>>> 68991e3 (Animal Display and Volunteer form balidation complete)

    public $imageFormats = ['jpg', 'png', 'gif', 'jpeg'];

    public $videoFormats = ['mp4', '3gp'];

    public function mount()
    {
        $ipAddress = $this->getIp();
        $position = Location::get($ipAddress);

        if ($position) {
            $this->location = $position->cityName . '/' . $position->regionCode;
        } else {
            $this->location = null;
        }
    }

<<<<<<< HEAD
=======
    public function setLocation($latitude, $longitude)
{
    $this->latitude = $latitude;
    $this->longitude = $longitude;
}


>>>>>>> 68991e3 (Animal Display and Volunteer form balidation complete)
    public function updatedFile()
    {
        $this->validate([
            'file' => 'mimes:' . implode(',', array_merge($this->imageFormats, $this->videoFormats)) . '|max:2048',
        ]);
    }

    public function submit()
    {
        $data = $this->validate([
<<<<<<< HEAD
            'animal_number' => 'required|max:50',
=======
            'animal_number' => 'nullable|string|max:50',
>>>>>>> 68991e3 (Animal Display and Volunteer form balidation complete)
            'animal_age' => 'required|string',
            'animal_type' => 'required|string',
            'animal_condition' => 'required|string',
            'contact_number' => ['required', 'regex:/^(01)[0-9]{9}$/'],
<<<<<<< HEAD
            'latitude' => 'string|nullable',
            'longitude' => 'string|nullable',
=======
            'latitude' => 'nullable',
            'longitude' => 'nullable',
>>>>>>> 68991e3 (Animal Display and Volunteer form balidation complete)
            'upazila' => 'required|string',
            'exact_location' => 'nullable|string|max:60',
            'description' => 'nullable|max:1000',
            'file' => 'nullable|mimes:' . implode(',', array_merge($this->imageFormats, $this->videoFormats)) . '|max:2048',
        ]);

        $post = Post::create([
            'user_id' => auth()->id(),
            'animal_age' => $data['animal_age'],
            'animal_type' => $data['animal_type'],
            'contact_number' => $data['contact_number'],
            'animal_condition' => $data['animal_condition'],
            'upazila' => $data['upazila'],
            'latitude' => $data['latitude'],
            'longitude' => $data['longitude'],
            'animal_number' => $data['animal_number'],
<<<<<<< HEAD
            'exact_location' => $data['location'],
=======
            'exact_location' => $data['exact_location'],
>>>>>>> 68991e3 (Animal Display and Volunteer form balidation complete)
            'description' => $data['description'],
        ]);

        $this->storeFiles($post);

        session()->flash('success', 'Post created successfully');

        return redirect('home');
    }

    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.posts.create');
    }

    /**
     * @param $post
     * @return bool|void
     */
    private function storeFiles($post)
    {
        if (empty($this->file)) {
            return true;
        }

        $path = $this->file->store('post-photos', 'public');

        $isImage = preg_match('/^.*\.(png|jpg|gif)$/i', $path);

        Media::create([
            'post_id' => $post->id,
            'path' => $path,
            'is_image' => $isImage,
        ]);
    }

    private function getIp(): ?string
    {
        foreach (['HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR'] as $key) {
            if (array_key_exists($key, $_SERVER) === true) {
                foreach (explode(',', $_SERVER[$key]) as $ip) {
                    $ip = trim($ip); // just to be safe
                    if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false) {
                        return $ip;
                    }
                }
            }
        }
        return request()->ip(); // it will return server ip when no client ip found
    }
}