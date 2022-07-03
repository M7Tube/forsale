<?php

namespace App\Http\Livewire\Website;

use App\Models\MainCategory;
use App\Models\SpcialAd;
use Livewire\Component;

class HomePage extends Component
{
    public $data;

    public function mount()
    {
        //for spcified the top ad(admin) in the home page that need to be fixed and stady...then spcifed the moving one
        $SpcialAd = SpcialAd::where('is_golden', 1)->first();
        $SpcialAdNG = SpcialAd::orderBy('created_at','desc')->where('is_golden', '!=', 1)->get()->take(5);
        //for getting the main category to the home page
        $MainCategory = MainCategory::all();
        $this->data = [
            'SpcialAd' => $SpcialAd,
            'SpcialAdNG' => $SpcialAdNG,
            'MainCategory' => $MainCategory
        ];
    }

    public function render()
    {
        return view('livewire.website.home-page');
    }
}
