<div class="container-fluid">
    @if ($category == 1)
        <h5 class="mb-5">{{ __('Cars') }}</h5>
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        {{--  --}} data-bs-target="#flush-collapseOne" aria-expanded="false"
                        aria-controls="flush-collapseOne">
                        {{ __('Filters') }}
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                    {{--  --}} data-bs-parent="#accordionFlushExample" wire:ignore>
                    <div class="accordion-body" style="background-color:#e7e6e6">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            {{ __('Ad Status') }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="ad_statuse_id" multiple
                                                                                data-live-search="true">
                                                                                <option disabled>
                                                                                    {{ __('Choose The Ad Status') }}
                                                                                </option>
                                                                                @forelse ($ad_statuses as $ad_statuse)
                                                                                    @if (app()->getLocale() == 'ar')
                                                                                        <option
                                                                                            value="{{ $ad_statuse->ad_statuse_id }}">
                                                                                            {{ $ad_statuse->ar_name }}
                                                                                        </option>
                                                                                    @else
                                                                                        <option
                                                                                            value="{{ $ad_statuse->ad_statuse_id }}">
                                                                                            {{ $ad_statuse->en_name }}
                                                                                        </option>
                                                                                    @endif
                                                                                @empty
                                                                                @endforelse
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                @error('ad_statuse_id')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            {{ __('Governorate') }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="governorate_id" multiple
                                                                                data-live-search="true">
                                                                                <option disabled>
                                                                                    {{ __('Choose The Governorate') }}
                                                                                </option>
                                                                                @forelse ($governorates as $governorate)
                                                                                    @if (app()->getLocale() == 'ar')
                                                                                        <option
                                                                                            value="{{ $governorate->governorate_id }}">
                                                                                            {{ $governorate->ar_name }}
                                                                                        </option>
                                                                                    @else
                                                                                        <option
                                                                                            value="{{ $governorate->governorate_id }}">
                                                                                            {{ $governorate->en_name }}
                                                                                        </option>
                                                                                    @endif
                                                                                @empty
                                                                                @endforelse
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                @error('governorate_id')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            {{ __('Car Type') }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="car_type_id" multiple
                                                                                data-live-search="true">
                                                                                <option disabled>
                                                                                    {{ __('Choose The Car Type') }}
                                                                                </option>
                                                                                @forelse ($carTypes as $carType)
                                                                                    @if (app()->getLocale() == 'ar')
                                                                                        <option
                                                                                            value="{{ $carType->car_type_id }}">
                                                                                            {{ $carType->ar_name }}
                                                                                        </option>
                                                                                    @else
                                                                                        <option
                                                                                            value="{{ $carType->car_type_id }}">
                                                                                            {{ $carType->en_name }}
                                                                                        </option>
                                                                                    @endif
                                                                                @empty
                                                                                @endforelse
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                @error('car_type_id')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            {{ __('Car Status') }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="car_status_id" multiple
                                                                                data-live-search="true">
                                                                                <option disabled>
                                                                                    {{ __('Choose The Car Status') }}
                                                                                </option>
                                                                                @forelse ($car_status as $car_statu)
                                                                                    @if (app()->getLocale() == 'ar')
                                                                                        <option
                                                                                            value="{{ $car_statu->car_status_id }}">
                                                                                            {{ $car_statu->ar_name }}
                                                                                        </option>
                                                                                    @else
                                                                                        <option
                                                                                            value="{{ $car_statu->car_status_id }}">
                                                                                            {{ $car_statu->en_name }}
                                                                                        </option>
                                                                                    @endif
                                                                                @empty
                                                                                @endforelse
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                @error('car_status_id')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            {{ __('Color') }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="color_id" multiple
                                                                                data-live-search="true">
                                                                                <option disabled>
                                                                                    {{ __('Choose The Color') }}
                                                                                </option>
                                                                                @forelse ($colors as $color)
                                                                                    @if (app()->getLocale() == 'ar')
                                                                                        <option
                                                                                            value="{{ $color->color_id }}">
                                                                                            {{ $color->ar_name }}
                                                                                        </option>
                                                                                    @else
                                                                                        <option
                                                                                            value="{{ $color->color_id }}">
                                                                                            {{ $color->en_name }}
                                                                                        </option>
                                                                                    @endif
                                                                                @empty
                                                                                @endforelse
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                @error('color_id')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            {{ __('Rent Or Sale') }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="ros_id" multiple
                                                                                data-live-search="true">
                                                                                <option disabled>
                                                                                    {{ __('Choose') }}
                                                                                </option>
                                                                                @forelse ($ross as $ros)
                                                                                    @if (app()->getLocale() == 'ar')
                                                                                        <option
                                                                                            value="{{ $ros->ros_id }}">
                                                                                            {{ $ros->ar_name }}
                                                                                        </option>
                                                                                    @else
                                                                                        <option
                                                                                            value="{{ $ros->ros_id }}">
                                                                                            {{ $ros->en_name }}
                                                                                        </option>
                                                                                    @endif
                                                                                @empty
                                                                                @endforelse
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                @error('ros_id')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            {{ __('Continents Of Origins') }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="continent_id" multiple
                                                                                data-live-search="true">
                                                                                <option disabled>
                                                                                    {{ __('Choose The Continents Of Origins') }}
                                                                                </option>
                                                                                @forelse ($continents as $key => $continent)
                                                                                    @if (app()->getLocale() == 'ar')
                                                                                        <option
                                                                                            value="{{ $continent->continent_id }}">
                                                                                            {{ $continent->ar_name }}
                                                                                        </option>
                                                                                    @else
                                                                                        <option
                                                                                            value="{{ $continent->continent_id }}">
                                                                                            {{ $continent->en_name }}
                                                                                        </option>
                                                                                    @endif
                                                                                @empty
                                                                                @endforelse
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                @error('continent_id')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            {{ __('Motion Vector') }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="motion_vector_id" multiple
                                                                                data-live-search="true">
                                                                                <option disabled>
                                                                                    {{ __('Choose The Motion Vector') }}
                                                                                </option>
                                                                                @forelse ($motion_vectors as $key => $motion_vector)
                                                                                    @if (app()->getLocale() == 'ar')
                                                                                        <option
                                                                                            value="{{ $motion_vector->motion_vector_id }}">
                                                                                            {{ $motion_vector->ar_name }}
                                                                                        </option>
                                                                                    @else
                                                                                        <option
                                                                                            value="{{ $motion_vector->motion_vector_id }}">
                                                                                            {{ $motion_vector->en_name }}
                                                                                        </option>
                                                                                    @endif
                                                                                @empty
                                                                                @endforelse
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                @error('motion_vector_id')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            {{ __('Country Of Manufacture') }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="cof_id" multiple
                                                                                data-live-search="true">
                                                                                <option disabled>
                                                                                    {{ __('Choose The Country Of Manufacture') }}
                                                                                </option>
                                                                                @forelse ($countryOfmans as $key => $countryOfman)
                                                                                    @if (app()->getLocale() == 'ar')
                                                                                        <option
                                                                                            value="{{ $countryOfman->cof_id }}">
                                                                                            {{ $countryOfman->ar_name }}
                                                                                        </option>
                                                                                    @else
                                                                                        <option
                                                                                            value="{{ $countryOfman->cof_id }}">
                                                                                            {{ $countryOfman->en_name }}
                                                                                        </option>
                                                                                    @endif
                                                                                @empty
                                                                                @endforelse
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                @error('cof_id')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            {{ __('Kilometer Counter') }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <input class="form-control" id="inputfrom"
                                                                                placeholder="{{ __('From') }}"
                                                                                type="number" min="0"
                                                                                step="5000" autocomplete="off"
                                                                                wire:model="K_from" />
                                                                            <span class="text-danger">
                                                                                @error('K_from')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <input class="form-control" id="inputto"
                                                                                placeholder="{{ __('To') }}"
                                                                                type="number"
                                                                                min="{{ $K_from }}"
                                                                                step="5000" autocomplete="off"
                                                                                wire:model="K_to" />
                                                                            <span class="text-danger">
                                                                                @error('K_to')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            {{ __('Price Range') }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <input class="form-control" id="inputfrom"
                                                                                placeholder="{{ __('From') }}"
                                                                                type="number" min="0"
                                                                                step="100000" autocomplete="off"
                                                                                wire:model="P_from" />
                                                                            <span class="text-danger">
                                                                                @error('P_from')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <input class="form-control" id="inputto"
                                                                                placeholder="{{ __('To') }}"
                                                                                type="number"
                                                                                min="{{ $P_from }}"
                                                                                step="100000" autocomplete="off"
                                                                                wire:model="P_to" />
                                                                            <span class="text-danger">
                                                                                @error('P_to')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            {{ __('Manufacturing Year Range') }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <input class="form-control" id="inputfrom"
                                                                                placeholder="{{ __('From') }}"
                                                                                type="number" min="0"
                                                                                step="1" autocomplete="off"
                                                                                wire:model="MY_from" />
                                                                            <span class="text-danger">
                                                                                @error('MY_from')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <input class="form-control" id="inputto"
                                                                                placeholder="{{ __('To') }}"
                                                                                type="number"
                                                                                min="{{ $MY_from }}"
                                                                                step="1" autocomplete="off"
                                                                                wire:model="MY_to" />
                                                                            <span class="text-danger">
                                                                                @error('MY_to')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            {{ __('Options') }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="form-check form-switch">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" role="switch"
                                                                                    id="flexSwitchCheckDefault"
                                                                                    wire:model="ads_without_picture">
                                                                                <label class="form-check-label"
                                                                                    for="flexSwitchCheckDefault">{{ __('Ads Without Picture') }}</label>
                                                                            </div>
                                                                            <div class="form-check form-switch">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" role="switch"
                                                                                    id="flexSwitchCheckDefault"
                                                                                    wire:model="ads_without_price">
                                                                                <label class="form-check-label"
                                                                                    for="flexSwitchCheckDefault">{{ __('Ads Without Price') }}</label>
                                                                            </div>
                                                                            <div class="form-check form-switch">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" role="switch"
                                                                                    id="flexSwitchCheckDefault"
                                                                                    wire:model="spcial_ad">
                                                                                <label class="form-check-label"
                                                                                    for="flexSwitchCheckDefault">{{ __('Spcial Ad') }}</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <div class="col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            {{ __('Rental Time') }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control selectpicker"
                                                                                wire:model="rental_time_id" multiple
                                                                                data-live-search="true">
                                                                                <option disabled>
                                                                                    {{ __('Choose The Rental Time') }}
                                                                                </option>
                                                                                @forelse ($rentalTimes as $rentalTime)
                                                                                    @if (app()->getLocale() == 'ar')
                                                                                        <option
                                                                                            value="{{ $rentalTime->rental_time_id }}">
                                                                                            {{ $rentalTime->ar_rent_name }}
                                                                                        </option>
                                                                                    @else
                                                                                        <option
                                                                                            value="{{ $rentalTime->rental_time_id }}">
                                                                                            {{ $rentalTime->en_rent_name }}
                                                                                        </option>
                                                                                    @endif
                                                                                @empty
                                                                                @endforelse
                                                                            </select>
                                                                            <span class="text-danger">
                                                                                @error('rental_time_id')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div wire:loading>
                <div class="lds-roller mx-auto">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
        <div class="row" id="ads" wire:init="loadData" wire:loading.remove>
            @if ($ads)
                @forelse ($ads as $ad)
                    @if (app()->getLocale() == 'ar')
                        <div class="col-6 col-sm-4 col-md-3 mb-5">
                            <a href="{{ route('website.ad', [app()->getLocale(), 'category' => 1, 'id' => $ad->car_id]) }}"
                                style="text-decoration: none; color:black;">
                                <div class="card">
                                    <div class="card-image">
                                        <span class="card-notify-badge">{{ $ad->price ?? 0 }}
                                            {{ __('SYP') }}</span>
                                        {{-- <span class="card-notify-year">{{ __('Cars') }}</span> --}}
                                        @if (file_exists('../storage/app/img/' . array_values(json_decode($ad->picture))[0]))
                                            <img class="img-fluid img"
                                                src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/' . array_values(json_decode($ad->picture))[0])) !!}"
                                                alt="Alternate Text" />
                                        @else
                                            <img class="img-fluid img"
                                                src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/defualt.png')) !!}"
                                                alt="Alternate Text" />
                                        @endif
                                    </div>
                                    <div class="card-body">
                                        <span>{{ $ad->ar_title }}</span>
                                    </div>
                                    <div class="card-image-overlay p-1">
                                        @if (\Carbon\Carbon::parse($ad->created_at)->diffInDays() > 0)
                                            <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                                {{ \Carbon\Carbon::parse($ad->created_at)->diffInDays() . __(' Days') }}
                                                | <i class="bi bi-geo-alt-fill"></i>
                                                {{ $ad->governorate->ar_name ?? '' }}
                                            </span>
                                        @else
                                            <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                                {{ \Carbon\Carbon::parse($ad->created_at)->addDays(\Carbon\Carbon::parse($ad->created_at)->diffInDays())->diffInHours() . __(' Hours') }}
                                                | <i class="bi bi-geo-alt-fill"></i>
                                                {{ $ad->governorate->ar_name ?? '' }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </a>
                        </div>
                    @else
                        <div class="col-6 col-sm-4 col-md-3 mb-5">
                            <a href="{{ route('website.ad', [app()->getLocale(), 'category' => 1, 'id' => $ad->car_id]) }}"
                                style="text-decoration: none; color:black;">
                                <div class="card">
                                    <div class="card-image">
                                        <span class="card-notify-badge">{{ $ad->price ?? 0 }}
                                            {{ __('SYP') }}</span>
                                        {{-- <span class="card-notify-year">{{ __('Cars') }}</span> --}}
                                        @if (file_exists('../storage/app/img/' . array_values(json_decode($ad->picture))[0]))
                                            <img class="img-fluid img"
                                                src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/' . array_values(json_decode($ad->picture))[0])) !!}"
                                                alt="Alternate Text" />
                                        @else
                                            <img class="img-fluid img"
                                                src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/defualt.png')) !!}"
                                                alt="Alternate Text" />
                                        @endif
                                    </div>
                                    <div class="card-body">
                                        <span>{{ $ad->en_title }}</span>
                                    </div>
                                    <div class="card-image-overlay p-1">
                                        @if (\Carbon\Carbon::parse($ad->created_at)->diffInDays() > 0)
                                            <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                                {{ \Carbon\Carbon::parse($ad->created_at)->diffInDays() . __(' Days') }}
                                                | <i class="bi bi-geo-alt-fill"></i>
                                                {{ $ad->governorate->en_name ?? '' }}
                                            </span>
                                        @else
                                            <i class="bi bi-clock"></i> <span class="since">{{ __('Since ') }}
                                                {{ \Carbon\Carbon::parse($ad->created_at)->addDays(\Carbon\Carbon::parse($ad->created_at)->diffInDays())->diffInHours() . __(' Hours') }}
                                                | <i class="bi bi-geo-alt-fill"></i>
                                                {{ $ad->governorate->en_name ?? '' }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endif
                @empty
                    <h4 class="text-center text-secondary">{{ __('Empty') }}</h4>
                @endforelse
                <div class="d-flex justify-content-center">
                    {{ $ads->links() }}
                </div>
            @else
                <h4 class="text-center text-secondary">{{ __('Empty') }}</h4>
            @endif
        </div>
    @endif
    {{-- @if (request()->query('category') == 2)
        <h5 class="mb-5">{{ __('Real Estate') }}</h5>
    @endif
    @if (request()->query('category') == 3)
        <h5 class="mb-5">{{ __('Jobs') }}</h5>
    @endif --}}
</div>
