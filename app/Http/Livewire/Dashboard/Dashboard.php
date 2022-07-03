<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Ad;
use App\Models\Area;
use App\Models\Governorate;
use App\Models\MainCategory;
use App\Models\Neighborhood;
use App\Models\SpcialAd;
use App\Models\User;
use Livewire\Component;

class Dashboard extends Component
{
    public $usersCount;
    public $adminCount;
    public $adsCount;
    public $adsNeedApprovalCount;
    public $spcialAds;
    public $governoratesCount;

    public function mount()
    {
        $this->usersCount = User::count();
        $this->categoryCount = MainCategory::count();
        $this->adsCount = Ad::count();
        $this->spcialAds = SpcialAd::count();
        $this->governoratesCount = Governorate::count();
        $this->areasCount = Area::count();
        $this->neighborhoodCount = Neighborhood::count();
        $this->adsNeedApprovalCount = Ad::where('manger_accept', 1)->count();
        // $this->adminCount = User::where('account_type_id', '!=', 3)->count();
    }
    public function render()
    {
        return view('livewire.dashboard.dashboard');
    }
}
