<?php

namespace App\Http\Controllers\API\AddNewAd;

use App\Http\Controllers\Controller;
use App\Http\Resources\API\CarTypeResource;
use App\Http\Resources\API\GovernorateResource;
use App\Http\Resources\API\RentOrSaleResource;
use Illuminate\Http\Request;
use App\Http\Traits\MessageTrait;
use App\Http\Resources\API\AdResource;
use App\Http\Resources\API\AdStatusResource;
use App\Http\Resources\API\ApartmentStatusResource;
use App\Http\Resources\API\AreaResource;
use App\Http\Resources\API\BuildingStatusResource;
use App\Http\Resources\API\CarResource;
use App\Http\Resources\API\CarStatusResource;
use App\Http\Resources\API\ColorResource;
use App\Http\Resources\API\CommercialAndArtificialTypeResource;
use App\Http\Resources\API\CountryOfManufactureResource;
use App\Http\Resources\API\JobsCategoryResource;
use App\Http\Resources\API\JobsResource;
use App\Http\Resources\API\LandTypeResource;
use App\Http\Resources\API\NeighborhoodResource;
use App\Http\Resources\API\PersonLanguegesResource;
use App\Http\Resources\API\RealEstateMainCategoryResource;
use App\Http\Resources\API\RealEstateResource;
use App\Http\Resources\API\RentalTimeResource;
use App\Http\Resources\API\YearsOfExperienceResource;
use App\Models\Ad;
use App\Models\AdStatus;
use App\Models\ApartmentStatus;
use App\Models\AppSettings;
use App\Models\Area;
use App\Models\BuildingStatus;
use App\Models\Cars;
use App\Models\CarStatus;
use App\Models\CarType;
use App\Models\Color;
use App\Models\CommercialAndArtificialType;
use App\Models\CountryOfManufacture;
use App\Models\Filter;
use App\Models\Governorate;
use App\Models\Jobs;
use App\Models\JobsCategory;
use App\Models\LandType;
use App\Models\Neighborhood;
use App\Models\PersonLangueges;
use App\Models\RealEstate;
use App\Models\RealEstateMainCategory;
use App\Models\RentalTime;
use App\Models\RentOrSale;
use App\Models\YearsOfExperience;
use Database\Seeders\RealEstateMainCategorySeeder;

class AddNewAdController extends Controller
{
    use MessageTrait;
    public function getAddNewAdInfo($lang, $category)
    {
        if ($lang == 'ar') { //arabic language
            if ($category == 1) { //cars
                $info = [
                    'RentOrSale' => RentOrSaleResource::collection(RentOrSale::all(['ros_id', 'ar_name'])),
                    'Governorate' => GovernorateResource::collection(Governorate::all(['governorate_id', 'ar_name'])),
                    'CarType' => CarTypeResource::collection(CarType::all(['car_type_id', 'ar_name'])),
                    'CarStatus' => CarStatusResource::collection(CarStatus::all(['car_status_id', 'ar_name'])),
                    'CountryOfManufacture' => CountryOfManufactureResource::collection(CountryOfManufacture::all(['cof_id', 'ar_name'])),
                    'Color' => ColorResource::collection(Color::all(['color_id', 'ar_name'])),
                    'AdStatus' => AdStatusResource::collection(AdStatus::all(['ad_statuse_id', 'ar_name'])),
                    'RentalTime' => RentalTimeResource::collection(RentalTime::all(['rental_time_id', 'ar_rent_name'])),
                ];
                return $this->success('info', $info);
            } else if ($category == 2) { //real estate
                if (request()->query('real_estate_main_category')) {
                    //info for the first category of real estate(Lands)
                    if (request()->query('real_estate_main_category') == 1) {
                        $info = [
                            'RentOrSale' => RentOrSaleResource::collection(RentOrSale::all(['ros_id', 'ar_name'])),
                            'Governorate' => GovernorateResource::collection(Governorate::all(['governorate_id', 'ar_name'])),
                            'Areas' => AreaResource::collection(Area::all(['area_id', 'ar_name'])),
                            'Neighborhoods' => NeighborhoodResource::collection(Neighborhood::all(['neighborhood_id', 'ar_name'])),
                            'LandType' => LandTypeResource::collection(LandType::all(['land_type_id', 'ar_name'])),
                            'AdStatus' => AdStatusResource::collection(AdStatus::all(['ad_statuse_id', 'ar_name'])),
                        ];
                    }
                    //info for the seconde category of real estate(Villas - Farms)
                    else if (request()->query('real_estate_main_category') == 2) {
                        $info = [
                            'RentOrSale' => RentOrSaleResource::collection(RentOrSale::all(['ros_id', 'ar_name'])),
                            'Governorate' => GovernorateResource::collection(Governorate::all(['governorate_id', 'ar_name'])),
                            'Areas' => AreaResource::collection(Area::all(['area_id', 'ar_name'])),
                            'Neighborhoods' => NeighborhoodResource::collection(Neighborhood::all(['neighborhood_id', 'ar_name'])),
                            'LandType' => LandTypeResource::collection(LandType::all(['land_type_id', 'ar_name'])),
                            'AdStatus' => AdStatusResource::collection(AdStatus::all(['ad_statuse_id', 'ar_name'])),
                        ];
                    }
                    //info for the third category of real estate(Apartments)
                    else if (request()->query('real_estate_main_category') == 3) {
                        $info = [
                            'RentOrSale' => RentOrSaleResource::collection(RentOrSale::all(['ros_id', 'ar_name'])),
                            'Governorate' => GovernorateResource::collection(Governorate::all(['governorate_id', 'ar_name'])),
                            'Areas' => AreaResource::collection(Area::all(['area_id', 'ar_name'])),
                            'Neighborhoods' => NeighborhoodResource::collection(Neighborhood::all(['neighborhood_id', 'ar_name'])),
                            'LandType' => LandTypeResource::collection(LandType::all(['land_type_id', 'ar_name'])),
                            'ApartmentStatus' => ApartmentStatusResource::collection(ApartmentStatus::all(['apartment_status_id', 'ar_name'])),
                            'BuildingStatus' => BuildingStatusResource::collection(BuildingStatus::all(['building_statuse_id', 'ar_name'])),
                            'AdStatus' => AdStatusResource::collection(AdStatus::all(['ad_statuse_id', 'ar_name'])),
                        ];
                    }
                    //info for the fourth category of real estate(Commercial)
                    else if (request()->query('real_estate_main_category') == 4) {
                        $info = [
                            'RentOrSale' => RentOrSaleResource::collection(RentOrSale::all(['ros_id', 'ar_name'])),
                            'Governorate' => GovernorateResource::collection(Governorate::all(['governorate_id', 'ar_name'])),
                            'Areas' => AreaResource::collection(Area::all(['area_id', 'ar_name'])),
                            'Neighborhoods' => NeighborhoodResource::collection(Neighborhood::all(['neighborhood_id', 'ar_name'])),
                            'LandType' => LandTypeResource::collection(LandType::all(['land_type_id', 'ar_name'])),
                            'CommercialAndArtificialType' => CommercialAndArtificialTypeResource::collection(CommercialAndArtificialType::all(['CAAT_id', 'ar_name'])),
                            'AdStatus' => AdStatusResource::collection(AdStatus::all(['ad_statuse_id', 'ar_name'])),
                        ];
                    }
                    //info for the fifth category of real estate(Artificial)
                    else if (request()->query('real_estate_main_category') == 5) {
                        $info = [
                            'RentOrSale' => RentOrSaleResource::collection(RentOrSale::all(['ros_id', 'ar_name'])),
                            'Governorate' => GovernorateResource::collection(Governorate::all(['governorate_id', 'ar_name'])),
                            'Areas' => AreaResource::collection(Area::all(['area_id', 'ar_name'])),
                            'Neighborhoods' => NeighborhoodResource::collection(Neighborhood::all(['neighborhood_id', 'ar_name'])),
                            'LandType' => LandTypeResource::collection(LandType::all(['land_type_id', 'ar_name'])),
                            'CommercialAndArtificialType' => CommercialAndArtificialTypeResource::collection(CommercialAndArtificialType::all(['CAAT_id', 'ar_name'])),
                            'AdStatus' => AdStatusResource::collection(AdStatus::all(['ad_statuse_id', 'ar_name'])),
                        ];
                    } else {
                        $info = null;
                    }
                } else {
                    $info = [
                        'RealEstateMainCategory' => RealEstateMainCategoryResource::collection(RealEstateMainCategory::all(['REMC_id', 'ar_name'])),
                    ];
                }
                return $this->success('info', $info);
            } else if ($category == 3) { //jobs
                $info = [
                    'JobsCategory' => JobsCategoryResource::collection(JobsCategory::all(['jobs_categorie_id', 'ar_name'])),
                    'Governorate' => GovernorateResource::collection(Governorate::all(['governorate_id', 'ar_name'])),
                    'Areas' => AreaResource::collection(Area::all(['area_id', 'ar_name'])),
                    'PersonLangueges' => PersonLanguegesResource::collection(PersonLangueges::all(['lang_id', 'ar_name'])),
                    'YearsOfExperience' => YearsOfExperienceResource::collection(YearsOfExperience::all(['YOE_id', 'ar_name'])),
                    'AdStatus' => AdStatusResource::collection(AdStatus::all(['ad_statuse_id', 'ar_name'])),
                ];
                return $this->success('info', $info);
            } else {
                return $this->fails();
            }
        } else { //english language
            if ($category == 1) { //cars
                $info = [
                    'RentOrSale' => RentOrSaleResource::collection(RentOrSale::all(['ros_id', 'en_name'])),
                    'Governorate' => GovernorateResource::collection(Governorate::all(['governorate_id', 'en_name'])),
                    'CarType' => CarTypeResource::collection(CarType::all(['car_type_id', 'en_name'])),
                    'CarStatus' => CarStatusResource::collection(CarStatus::all(['car_status_id', 'en_name'])),
                    'CountryOfManufacture' => CountryOfManufactureResource::collection(CountryOfManufacture::all(['cof_id', 'en_name'])),
                    'Color' => ColorResource::collection(Color::all(['color_id', 'en_name'])),
                    'AdStatus' => AdStatusResource::collection(AdStatus::all(['ad_statuse_id', 'en_name'])),
                    'RentalTime' => RentalTimeResource::collection(RentalTime::all(['rental_time_id', 'en_rent_name'])),
                ];
                return $this->success('info', $info);
            } else if ($category == 2) { //real estate
                if (request()->query('real_estate_main_category')) {
                    //info for the first category of real estate(Lands)
                    if (request()->query('real_estate_main_category') == 1) {
                        $info = [
                            'RentOrSale' => RentOrSaleResource::collection(RentOrSale::all(['ros_id', 'en_name'])),
                            'Governorate' => GovernorateResource::collection(Governorate::all(['governorate_id', 'en_name'])),
                            'Areas' => AreaResource::collection(Area::all(['area_id', 'en_name'])),
                            'Neighborhoods' => NeighborhoodResource::collection(Neighborhood::all(['neighborhood_id', 'en_name'])),
                            'LandType' => LandTypeResource::collection(LandType::all(['land_type_id', 'en_name'])),
                            'AdStatus' => AdStatusResource::collection(AdStatus::all(['ad_statuse_id', 'en_name'])),
                        ];
                    }
                    //info for the seconde category of real estate(Villas - Farms)
                    else if (request()->query('real_estate_main_category') == 2) {
                        $info = [
                            'RentOrSale' => RentOrSaleResource::collection(RentOrSale::all(['ros_id', 'en_name'])),
                            'Governorate' => GovernorateResource::collection(Governorate::all(['governorate_id', 'en_name'])),
                            'Areas' => AreaResource::collection(Area::all(['area_id', 'en_name'])),
                            'Neighborhoods' => NeighborhoodResource::collection(Neighborhood::all(['neighborhood_id', 'en_name'])),
                            'LandType' => LandTypeResource::collection(LandType::all(['land_type_id', 'en_name'])),
                            'AdStatus' => AdStatusResource::collection(AdStatus::all(['ad_statuse_id', 'en_name'])),
                        ];
                    }
                    //info for the third category of real estate(Apartments)
                    else if (request()->query('real_estate_main_category') == 3) {
                        $info = [
                            'RentOrSale' => RentOrSaleResource::collection(RentOrSale::all(['ros_id', 'en_name'])),
                            'Governorate' => GovernorateResource::collection(Governorate::all(['governorate_id', 'en_name'])),
                            'Areas' => AreaResource::collection(Area::all(['area_id', 'en_name'])),
                            'Neighborhoods' => NeighborhoodResource::collection(Neighborhood::all(['neighborhood_id', 'en_name'])),
                            'LandType' => LandTypeResource::collection(LandType::all(['land_type_id', 'en_name'])),
                            'ApartmentStatus' => ApartmentStatusResource::collection(ApartmentStatus::all(['apartment_status_id', 'en_name'])),
                            'BuildingStatus' => BuildingStatusResource::collection(BuildingStatus::all(['building_statuse_id', 'en_name'])),
                            'AdStatus' => AdStatusResource::collection(AdStatus::all(['ad_statuse_id', 'en_name'])),
                        ];
                    }
                    //info for the fourth category of real estate(Commercial)
                    else if (request()->query('real_estate_main_category') == 4) {
                        $info = [
                            'RentOrSale' => RentOrSaleResource::collection(RentOrSale::all(['ros_id', 'en_name'])),
                            'Governorate' => GovernorateResource::collection(Governorate::all(['governorate_id', 'en_name'])),
                            'Areas' => AreaResource::collection(Area::all(['area_id', 'en_name'])),
                            'Neighborhoods' => NeighborhoodResource::collection(Neighborhood::all(['neighborhood_id', 'en_name'])),
                            'LandType' => LandTypeResource::collection(LandType::all(['land_type_id', 'en_name'])),
                            'CommercialAndArtificialType' => CommercialAndArtificialTypeResource::collection(CommercialAndArtificialType::all(['CAAT_id', 'en_name'])),
                            'AdStatus' => AdStatusResource::collection(AdStatus::all(['ad_statuse_id', 'en_name'])),
                        ];
                    }
                    //info for the fifth category of real estate(Artificial)
                    else if (request()->query('real_estate_main_category') == 5) {
                        $info = [
                            'RentOrSale' => RentOrSaleResource::collection(RentOrSale::all(['ros_id', 'en_name'])),
                            'Governorate' => GovernorateResource::collection(Governorate::all(['governorate_id', 'en_name'])),
                            'Areas' => AreaResource::collection(Area::all(['area_id', 'en_name'])),
                            'Neighborhoods' => NeighborhoodResource::collection(Neighborhood::all(['neighborhood_id', 'en_name'])),
                            'LandType' => LandTypeResource::collection(LandType::all(['land_type_id', 'en_name'])),
                            'CommercialAndArtificialType' => CommercialAndArtificialTypeResource::collection(CommercialAndArtificialType::all(['CAAT_id', 'en_name'])),
                            'AdStatus' => AdStatusResource::collection(AdStatus::all(['ad_statuse_id', 'en_name'])),
                        ];
                    } else {
                        $info = null;
                    }
                } else {
                    $info = [
                        'RealEstateMainCategory' => RealEstateMainCategoryResource::collection(RealEstateMainCategory::all(['REMC_id', 'en_name'])),
                    ];
                }
                return $this->success('info', $info);
            } else if ($category == 3) { //jobs
                $info = [
                    'JobsCategory' => JobsCategoryResource::collection(JobsCategory::all(['jobs_categorie_id', 'en_name'])),
                    'Governorate' => GovernorateResource::collection(Governorate::all(['governorate_id', 'en_name'])),
                    'Areas' => AreaResource::collection(Area::all(['area_id', 'en_name'])),
                    'PersonLangueges' => PersonLanguegesResource::collection(PersonLangueges::all(['lang_id', 'en_name'])),
                    'YearsOfExperience' => YearsOfExperienceResource::collection(YearsOfExperience::all(['YOE_id', 'en_name'])),
                    'AdStatus' => AdStatusResource::collection(AdStatus::all(['ad_statuse_id', 'en_name'])),
                ];
                return $this->success('info', $info);
            } else {
                return $this->fails();
            }
        }
    }
    //
    public function AddNewAd(Request $request, $category)
    {

        if ($category == 1) { //cars
            $request->validate([
                'ar_title' => ['required', 'string', 'max:144'],
                'en_title' => ['required', 'string', 'max:144'],
                'ar_desc' => ['required', 'string', 'max:1440'],
                'en_desc' => ['required', 'string', 'max:1440'],
                'phone_number' => ['integer'],
                'isPhone_visable' => ['required_with:phone_number', 'boolean'],
                'price' => ['integer'],
                // 'picture' => ['required'],
                'is_special' => ['required', 'boolean'],
                'manufacturing_year' => ['integer'],
                'kilometrag' => ['integer'],
                'car_type_id' => ['integer', 'exists:car_types,car_type_id'],
                'car_status_id' => ['integer', 'exists:car_statuses,car_status_id'],
                'ros_id' => ['required', 'integer', 'exists:rent_or_sales,ros_id'],
                'motion_vector_id' => ['integer', 'exists:motion_vectors,motion_vector_id'],
                'user_id' => ['required', 'integer', 'exists:users,user_id'],
                'cof_id' => ['integer', 'exists:country_of_manufactures,cof_id'],
                'continent_id' => ['integer', 'exists:continent_of_origins,continent_id'],
                'rental_time_id' => ['integer', 'exists:rental_times,rental_time_id'],
                'color_id' => ['integer', 'exists:colors,color_id'],
                'governorate_id' => ['integer', 'exists:governorates,governorate_id'],
                'ad_type_id' => ['required', 'integer'], //, 'exists:ad_types,ad_type_id'
                'ad_statuse_id' => ['required', 'integer', 'exists:ad_statuses,ad_statuse_id'],
            ]);
            $ad = Cars::Create([
                'ar_title' => $request->ar_title ?? '',
                'en_title' => $request->en_title ?? '',
                'ar_desc' => $request->ar_desc ?? '',
                'en_desc' => $request->en_desc ?? '',
                'phone_number' => $request->phone_number ?? '',
                'manger_accept' => AppSettings::all()->first()['defualt_manger_accept'] ?? '',
                'isPhone_visable' => $request->isPhone_visable ?? '',
                'price' => $request->price ?? '',
                'picture' => $request->picture ?? '',
                'is_special' => $request->is_special ?? '',
                'watch_count' => 0 ?? '',
                'manufacturing_year' => $request->manufacturing_year ?? '',
                'kilometrag' => $request->kilometrag ?? '',
                'car_type_id' => $request->car_type_id ?? 0,
                'car_status_id' => $request->car_status_id ?? 0,
                'ros_id' => $request->ros_id ?? 0,
                'motion_vector_id' => $request->motion_vector_id ?? 0,
                'user_id' => $request->user_id ?? 0,
                'cof_id' => $request->cof_id ?? 0,
                'continent_id' => $request->continent_id ?? 0,
                'rental_time_id' => $request->rental_time_id ?? 0,
                'color_id' => $request->color_id ?? 0,
                'governorate_id' => $request->governorate_id ?? 0,
                'ad_type_id' => $request->ad_type_id ?? 0,
                'ad_statuse_id' => $request->ad_statuse_id ?? 0,
            ]);
            if ($ad) {
                return $this->success('ad', $ad);
            } else {
                return $this->fails();
            }
        } else if ($category == 2) { //real estate
            $request->validate([
                'ar_title' => ['required', 'string', 'max:144'],
                'en_title' => ['required', 'string', 'max:144'],
                'ar_desc' => ['required', 'string', 'max:1440'],
                'en_desc' => ['required', 'string', 'max:1440'],
                'phone_number' => ['integer'],
                'isPhone_visable' => ['required_with:phone_number', 'boolean'],
                'price' => ['integer'],
                // 'picture' => ['required'],
                'is_special' => ['required', 'boolean'],
                'apartment_size' => ['integer'],
                'land_size' => ['integer'],
                'building_size' => ['integer'],
                'floor' => ['integer'],
                'room_count' => ['integer'],
                'elevator' => ['boolean'],
                'user_id' => ['required', 'integer', 'exists:users,user_id'],
                'governorate_id' => ['integer', 'exists:governorates,governorate_id'],
                'ad_type_id' => ['required', 'integer', 'exists:ad_types,ad_type_id'],
                'ad_statuse_id' => ['required', 'integer', 'exists:ad_statuses,ad_statuse_id'],
                'REMC_id' => ['integer', 'exists:real_estate_main_categories,REMC_id'],
                'apartment_status_id' => ['integer', 'exists:apartment_statuses,apartment_status_id'],
                'building_statuse_id' => ['integer', 'exists:building_statuses,building_statuse_id'],
                'CAAT_id' => ['integer', 'exists:commercial_and_artificial_types,CAAT_id'],
                'land_type_id' => ['integer', 'exists:land_types,land_type_id'],
                'area_id' => ['integer', 'exists:areas,area_id'],
                'neighborhood_id' => ['integer', 'exists:neighborhoods,neighborhood_id'],
            ]);
            $ad = RealEstate::Create([
                'en_title' => $request->en_title ?? '',
                'ar_title' => $request->ar_title ?? '',
                'ar_desc' => $request->ar_desc ?? '',
                'en_desc' => $request->en_desc ?? '',
                'phone_number' => $request->phone_number ?? '',
                'manger_accept' => AppSettings::all()->first()['defualt_manger_accept'] ?? '',
                'isPhone_visable' => $request->isPhone_visable ?? '',
                'price' => $request->price ?? '',
                'picture' => $request->picture ?? '',
                'is_special' => $request->is_special ?? '',
                'watch_count' => 0 ?? '',
                'apartment_size' => $request->apartment_size ?? '',
                'land_size' => $request->land_size ?? '',
                'building_size' => $request->building_size ?? '',
                'floor' => $request->floor ?? '',
                'room_count' => $request->room_count ?? '',
                'elevator' => $request->elevator ?? '',
                'user_id' => $request->user_id ?? '',
                'REMC_id' => $request->REMC_id ?? '',
                'apartment_status_id' => $request->apartment_status_id ?? '',
                'building_statuse_id' => $request->building_statuse_id ?? '',
                'CAAT_id' => $request->CAAT_id ?? '',
                'land_type_id' => $request->land_type_id ?? '',
                'governorate_id' => $request->governorate_id ?? '',
                'area_id' => $request->area_id ?? '',
                'neighborhood_id' => $request->neighborhood_id ?? '',
                'ad_type_id' => $request->ad_type_id ?? '',
                'ad_statuse_id' => $request->ad_statuse_id ?? '',
            ]);
        } else if ($category == 3) { //jobs
            $request->validate([
                'ad_type_id' => ['required', 'integer', 'exists:ad_types,ad_type_id'],
            ]);
        } else {
            $this->fails();
        }

        //define which category your adding
        //valdition
        //
    }
}
