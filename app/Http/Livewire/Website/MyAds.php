<?php

namespace App\Http\Livewire\Website;

use Livewire\WithPagination as LivewireWithPagination;
use App\Models\Cars;
use App\Models\Jobs;
use App\Models\RealEstate;
use Livewire\Component;

class MyAds extends Component
{
    use LivewireWithPagination;
    protected $paginationTheme = 'bootstrap';

    public $user_id;
    public $readyToLoad = false;
    public $manger_accept;
    public $category;

    protected $data;

    public function boot()
    {
        if (!session()->get('WebLoggedIn', [])) {
            abort(403);
        }
        $this->user_id = session()->get('WebLoggedIn', [])['user_id'];
        $this->manger_accept = 2;
        $this->category = 'App\Models\Cars';
        $this->resetPage('carspage');
        $this->resetPage('jobspage');
        $this->resetPage('realestatepage');
    }

    public function updatedMangerAccept()
    {
        $this->resetPage('carspage');
        $this->resetPage('jobspage');
        $this->resetPage('realestatepage');
        if ($this->category == 'App\Models\Cars') {
            $this->data = [
                'cars' => Cars::where('user_id', $this->user_id)->where('manger_accept', $this->manger_accept)->paginate(8, ['car_id', 'en_title', 'ar_title', 'price', 'picture', 'manger_accept', 'governorate_id', 'created_at'], 'carspage'),
                'jobs' => [],
                'real_estate' => [],
            ];
        } else if ($this->category == 'App\Models\Jobs') {
            $this->data = [
                'real_estate' => RealEstate::where('user_id', $this->user_id)->where('manger_accept', $this->manger_accept)->paginate(8, ['real_estate_id', 'en_title', 'ar_title', 'price', 'picture', 'manger_accept', 'governorate_id', 'created_at'], 'realestatepage'),
                'cars' => [],
                'jobs' => [],
            ];
        } else if ($this->category == 'App\Models\RealEstate') {
            $this->data = [
                'jobs' => Jobs::where('user_id', $this->user_id)->where('manger_accept', $this->manger_accept)->paginate(8, ['job_id', 'en_title', 'ar_title', 'salary', 'picture', 'manger_accept', 'governorate_id', 'created_at'], 'jobspage'),
                'cars' => [],
                'real_estate' => [],
            ];
        }
    }

    public function loadData()
    {
        $this->readyToLoad = true;
    }

    public function render()
    {
        $this->emit('gotoTop');
        if ($this->category == 'App\Models\Cars') {
            return view(
                'livewire.website.my-ads',
                [
                    'data' => $this->readyToLoad
                        ? $this->data = [
                            'cars' => $this->category::where('user_id', $this->user_id)->where('manger_accept', $this->manger_accept)->paginate(8, ['car_id', 'en_title', 'ar_title', 'price', 'picture', 'manger_accept', 'governorate_id', 'created_at'], 'carspage'),
                            'jobs' => [],
                            'real_estate' => [],
                        ]
                        : [],
                ]
            );
        } else if ($this->category == 'App\Models\RealEstate') {
            return view(
                'livewire.website.my-ads',
                [
                    'data' => $this->readyToLoad
                        ?  $this->data = [
                            'real_estate' => $this->category::where('user_id', $this->user_id)->where('manger_accept', $this->manger_accept)->paginate(8, ['real_estate_id', 'en_title', 'ar_title', 'price', 'picture', 'manger_accept', 'governorate_id', 'created_at'], 'realestatepage'),
                            'cars' => [],
                            'jobs' => [],
                        ]
                        : [],
                ]
            );
        } else if ($this->category == 'App\Models\Jobs') {
            return view(
                'livewire.website.my-ads',
                [
                    'data' => $this->readyToLoad
                        ?  $this->data = [
                            'jobs' => $this->category::where('user_id', $this->user_id)->where('manger_accept', $this->manger_accept)->paginate(8, ['job_id', 'en_title', 'ar_title', 'salary', 'picture', 'manger_accept', 'governorate_id', 'created_at'], 'jobspage'),
                            'cars' => [],
                            'real_estate' => [],
                        ]
                        : [],
                ]
            );
        }
    }
}
