<?php

namespace App\Http\Livewire\Website;

use App\Models\AdStatus;
use App\Models\Cars;
use App\Models\CarStatus;
use App\Models\CarType;
use App\Models\Color;
use App\Models\ContinentOfOrigin;
use App\Models\CountryOfManufacture;
use App\Models\Governorate;
use App\Models\MotionVector;
use App\Models\RentalTime;
use App\Models\RentOrSale;
use GuzzleHttp\Psr7\Request;
use Livewire\WithPagination;
use Livewire\Component;

class ViewAds extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $readyToLoad = false;

    public $governorates;
    public $carTypes;
    public $colors;
    public $continents;
    public $countryOfmans;
    public $rentalTimes;
    public $motion_vectors;
    public $car_status;
    public $ad_statuses;
    public $ross;

    public $governorate_id = [];
    public $car_type_id = [];
    public $color_id = [];
    public $continent_id = [];
    public $cof_id = [];
    public $rental_time_id = [];
    public $motion_vector_id = [];
    public $car_status_id = [];
    public $ad_statuse_id = [];
    public $ros_id = [];
    public $K_from;
    public $K_to;
    public $ads_without_picture;
    public $ads_without_price;
    public $spcial_ad;
    public $P_from;
    public $P_to;
    public $MY_from;
    public $MY_to;

    public $category;

    protected $ads;

    protected $queryString = ['governorate_id', 'car_type_id', 'continent_id', 'ros_id', 'cof_id', 'ad_statuse_id', 'rental_time_id', 'car_status_id', 'motion_vector_id',  'color_id', 'K_from', 'K_to', 'P_from', 'P_to', 'MY_from', 'MY_to', 'ads_without_picture', 'ads_without_price', 'spcial_ad'];

    public function boot()
    {
        $this->category = request('category');
        $this->governorates = Governorate::all();
        $this->carTypes = CarType::all();
        $this->colors = Color::all();
        $this->continents = ContinentOfOrigin::all();
        $this->countryOfmans = CountryOfManufacture::all();
        $this->rentalTimes = RentalTime::all();
        $this->motion_vectors = MotionVector::all();
        $this->car_status = CarStatus::all();
        $this->ad_statuses = AdStatus::all();
        $this->ross = RentOrSale::all();
    }

    public function mount()
    {
    }

    public function loadData()
    {
        $this->readyToLoad = true;
    }

    // public function updatedGovernorateId()
    // {
    //     // dd($this->queryString['governorate_id']);
    //     $this->loadData();
    // }

    public function render()
    {
        if ($this->category == 1) {
            $this->emit('gotoTop');
            return view('livewire.website.view-ads', [
                'ads' => Cars::when($this->governorate_id, function ($query) {
                    return $query->whereIn('governorate_id', $this->governorate_id);
                })->when($this->car_type_id, function ($query) {
                    return $query->whereIn('car_type_id', $this->car_type_id);
                })->when($this->color_id, function ($query) {
                    return $query->whereIn('color_id', $this->color_id);
                })->when($this->continent_id, function ($query) {
                    return $query->whereIn('continent_id', $this->continent_id);
                })->when($this->car_status_id, function ($query) {
                    return $query->whereIn('car_status_id', $this->car_status_id);
                })->when($this->ros_id, function ($query) {
                    return $query->whereIn('ros_id', $this->ros_id);
                })->when($this->cof_id, function ($query) {
                    return $query->whereIn('cof_id', $this->cof_id);
                })->when($this->ad_statuse_id, function ($query) {
                    return $query->whereIn('ad_statuse_id', $this->ad_statuse_id);
                })->when($this->motion_vector_id, function ($query) {
                    return $query->whereIn('motion_vector_id', $this->motion_vector_id);
                })->when($this->rental_time_id, function ($query) {
                    return $query->whereIn('rental_time_id', $this->rental_time_id);
                })->when($this->K_from && $this->K_to, function ($query) {
                    return $query->whereBetween('kilometrag', [$this->K_from, $this->K_to]);
                })->when($this->ads_without_picture, function ($query) {
                    return $query->where('picture', json_encode(['defualt.png']));
                })->when($this->ads_without_price, function ($query) {
                    return $query->where('price', null);
                })->when($this->spcial_ad, function ($query) {
                    return $query->where('is_special', 1);
                })->when($this->P_from && $this->P_to, function ($query) {
                    return $query->whereBetween('price', [$this->P_from, $this->P_to]);
                })->when($this->MY_from && $this->MY_to, function ($query) {
                    return $query->whereBetween('manufacturing_year', [$this->MY_from, $this->MY_to]);
                })->latest()->paginate(20, ['car_id', 'ar_title', 'ar_desc', 'en_title', 'en_desc', 'phone_number', 'manufacturing_year', 'picture', 'is_special', 'price', 'manger_accept', 'governorate_id', 'created_at'])
            ]);
        }
        // return view('livewire.website.view-ads');
    }
}
