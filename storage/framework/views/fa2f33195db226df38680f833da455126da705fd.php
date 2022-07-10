<div class="container-fluid">
    <!-- Begin Of Create Pages Card -->
    <h4 class="text-center mt-4"><?php echo e(__('Waseetcom Dashboard')); ?></h4>
    <div class="row">
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['read_users', 'create_users', 'edit_users', 'delete_users'])): ?>
            <div class="my-2 col-xl-4 col-sm-6 col-12">
                <a href="<?php echo e(route('web.crud.Users', app()->getLocale())); ?>" class="text-dark" style="text-decoration: none;">
                    <div class="Scard card shadow-lg border-2 rounded-lg">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="align-self-center">
                                    <?php echo e(__('Control Page')); ?> <i class="bi bi-menu-button"></i>
                                </div>
                                <div class="media d-flex">
                                    <div class="media-body text-right">
                                        <h5><?php echo e(__('Users')); ?></h5>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['read_color', 'create_color', 'edit_color', 'delete_color'])): ?>
            <div class="my-2 col-xl-4 col-sm-6 col-12">
                <a href="<?php echo e(route('web.crud.Color', app()->getLocale())); ?>" class="text-dark"
                    style="text-decoration: none;">
                    <div class="Scard card shadow-lg border-2 rounded-lg">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="align-self-center">
                                    <?php echo e(__('Control Page')); ?> <i class="bi bi-menu-button"></i>
                                </div>
                                <div class="media d-flex">
                                    <div class="media-body text-right">
                                        <h5><?php echo e(__('Colors')); ?></h5>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['edit_real_estate', 'edit_jobs', 'edit_cars'])): ?>
            <div class="my-2 col-xl-4 col-sm-6 col-12">
                <a href="<?php echo e(route('web.crud.AcceptAds', app()->getLocale())); ?>" class="text-dark"
                    style="text-decoration: none;">
                    <div class="Scard card shadow-lg border-2 rounded-lg">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="align-self-center">
                                    <?php echo e(__('Control Page')); ?> <i class="bi bi-menu-button"></i>
                                </div>
                                <div class="media d-flex">
                                    <div class="media-body text-right">
                                        <h5><?php echo e(__('Ads Need Approval')); ?></h5>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['read_continent_of_origin', 'create_continent_of_origin', 'edit_continent_of_origin',
            'delete_continent_of_origin'])): ?>
            <div class="my-2 col-xl-4 col-sm-6 col-12">
                <a href="<?php echo e(route('web.crud.ContinentOfOrigin', app()->getLocale())); ?>" class="text-dark"
                    style="text-decoration: none;">
                    <div class="Scard card shadow-lg border-2 rounded-lg">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="align-self-center">
                                    <?php echo e(__('Control Page')); ?> <i class="bi bi-menu-button"></i>
                                </div>
                                <div class="media d-flex">
                                    <div class="media-body text-right">
                                        <h5><?php echo e(__('Region Of Origin')); ?></h5>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['read_neighborhood', 'create_neighborhood', 'edit_neighborhood', 'delete_neighborhood'])): ?>
            <div class="my-2 col-xl-4 col-sm-6 col-12">
                <a href="<?php echo e(route('web.crud.neighborhood', app()->getLocale())); ?>" class="text-dark"
                    style="text-decoration: none;">
                    <div class="Scard card shadow-lg border-2 rounded-lg">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="align-self-center">
                                    <?php echo e(__('Control Page')); ?> <i class="bi bi-menu-button"></i>
                                </div>
                                <div class="media d-flex">
                                    <div class="media-body text-right">
                                        <h5><?php echo e(__('Neighborhoods')); ?></h5>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['read_area', 'create_area', 'edit_area', 'delete_area'])): ?>
            <div class="my-2 col-xl-4 col-sm-6 col-12">
                <a href="<?php echo e(route('web.crud.areas', app()->getLocale())); ?>" class="text-dark"
                    style="text-decoration: none;">
                    <div class="Scard card shadow-lg border-2 rounded-lg">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="align-self-center">
                                    <?php echo e(__('Control Page')); ?> <i class="bi bi-menu-button"></i>
                                </div>
                                <div class="media d-flex">
                                    <div class="media-body text-right">
                                        <h5><?php echo e(__('Areas')); ?></h5>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['read_governorate', 'create_governorate', 'edit_governorate', 'delete_governorate'])): ?>
            <div class="my-2 col-xl-4 col-sm-6 col-12">
                <a href="<?php echo e(route('web.crud.Governorates', app()->getLocale())); ?>" class="text-dark"
                    style="text-decoration: none;">
                    <div class="Scard card shadow-lg border-2 rounded-lg">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="align-self-center">
                                    <?php echo e(__('Control Page')); ?> <i class="bi bi-menu-button"></i>
                                </div>
                                <div class="media d-flex">
                                    <div class="media-body text-right">
                                        <h5><?php echo e(__('Governorates')); ?></h5>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['read_spcialAd', 'create_spcialAd', 'edit_spcialAd', 'delete_spcialAd'])): ?>
            <div class="my-2 col-xl-4 col-sm-6 col-12 ">
                <a href="<?php echo e(route('web.crud.SpcialAd', app()->getLocale())); ?>" class="text-dark"
                    style="text-decoration: none;">
                    <div class="Scard card shadow-lg border-2 rounded-lg">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="align-self-center">
                                    <?php echo e(__('Control Page')); ?> <i class="bi bi-menu-button"></i>
                                </div>
                                <div class="media d-flex">
                                    <div class="media-body text-right">
                                        <h5><?php echo e(__('Admin Ads')); ?></h5>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['read_rental_time', 'create_rental_time', 'edit_rental_time', 'delete_rental_time'])): ?>
            <div class="my-2 col-xl-4 col-sm-6 col-12">
                <a href="<?php echo e(route('web.crud.RentalTime', app()->getLocale())); ?>" class="text-dark"
                    style="text-decoration: none;">
                    <div class="Scard card shadow-lg border-2 rounded-lg">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="align-self-center">
                                    <?php echo e(__('Control Page')); ?> <i class="bi bi-menu-button"></i>
                                </div>
                                <div class="media d-flex">
                                    <div class="media-body text-right">
                                        <h5><?php echo e(__('Rental Time')); ?></h5>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['read_country_of_manufacture', 'create_country_of_manufacture', 'edit_country_of_manufacture',
            'delete_country_of_manufacture'])): ?>
            <div class="my-2 col-xl-4 col-sm-6 col-12">
                <a href="<?php echo e(route('web.crud.CountryOfManufacture', app()->getLocale())); ?>" class="text-dark"
                    style="text-decoration: none;">
                    <div class="Scard card shadow-lg border-2 rounded-lg">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="align-self-center">
                                    <?php echo e(__('Control Page')); ?> <i class="bi bi-menu-button"></i>
                                </div>
                                <div class="media d-flex">
                                    <div class="media-body text-right">
                                        <h5><?php echo e(__('Country Of Manufacture')); ?></h5>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['read_wallet', 'create_wallet', 'edit_wallet', 'delete_wallet'])): ?>
            <div class="my-2 col-xl-4 col-sm-6 col-12">
                <a href="<?php echo e(route('web.crud.wallets', app()->getLocale())); ?>" class="text-dark"
                    style="text-decoration: none;">
                    <div class="Scard card shadow-lg border-2 rounded-lg">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="align-self-center">
                                    <?php echo e(__('Control Page')); ?> <i class="bi bi-menu-button"></i>
                                </div>
                                <div class="media d-flex">
                                    <div class="media-body text-right">
                                        <h5><?php echo e(__('Wallet')); ?></h5>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['read_motion_vector', 'create_motion_vector', 'edit_motion_vector', 'delete_motion_vector'])): ?>
            <div class="my-2 col-xl-4 col-sm-6 col-12">
                <a href="<?php echo e(route('web.crud.MotionVector', app()->getLocale())); ?>" class="text-dark"
                    style="text-decoration: none;">
                    <div class="Scard card shadow-lg border-2 rounded-lg">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="align-self-center">
                                    <?php echo e(__('Control Page')); ?> <i class="bi bi-menu-button"></i>
                                </div>
                                <div class="media d-flex">
                                    <div class="media-body text-right">
                                        <h5><?php echo e(__('Transmision Vector')); ?></h5>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['read_jobs', 'create_jobs', 'edit_jobs', 'delete_jobs'])): ?>
            <div class="my-2 col-xl-4 col-sm-6 col-12">
                <a href="<?php echo e(route('web.crud.Jobs', app()->getLocale())); ?>" class="text-dark"
                    style="text-decoration: none;">
                    <div class="Scard card shadow-lg border-2 rounded-lg">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="align-self-center">
                                    <?php echo e(__('Control Page')); ?> <i class="bi bi-menu-button"></i>
                                </div>
                                <div class="media d-flex">
                                    <div class="media-body text-right">
                                        <h5><?php echo e(__('Jobs')); ?></h5>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['read_cars', 'create_cars', 'edit_cars', 'delete_cars'])): ?>
            <div class="my-2 col-xl-4 col-sm-6 col-12">
                <a href="<?php echo e(route('web.crud.Cars', app()->getLocale())); ?>" class="text-dark"
                    style="text-decoration: none;">
                    <div class="Scard card shadow-lg border-2 rounded-lg">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="align-self-center">
                                    <?php echo e(__('Control Page')); ?> <i class="bi bi-menu-button"></i>
                                </div>
                                <div class="media d-flex">
                                    <div class="media-body text-right">
                                        <h5><?php echo e(__('Cars')); ?></h5>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['read_years_of_experience', 'create_years_of_experience', 'edit_years_of_experience',
            'delete_years_of_experience'])): ?>
            <div class="my-2 col-xl-4 col-sm-6 col-12">
                <a href="<?php echo e(route('web.crud.YearsOfExperience', app()->getLocale())); ?>" class="text-dark"
                    style="text-decoration: none;">
                    <div class="Scard card shadow-lg border-2 rounded-lg">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="align-self-center">
                                    <?php echo e(__('Control Page')); ?> <i class="bi bi-menu-button"></i>
                                </div>
                                <div class="media d-flex">
                                    <div class="media-body text-right">
                                        <h5><?php echo e(__('Years Of Experience')); ?></h5>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['read_ad_status', 'create_ad_status', 'edit_ad_status', 'delete_ad_status'])): ?>
            <div class="my-2 col-xl-4 col-sm-6 col-12">
                <a href="<?php echo e(route('web.crud.AdStatus', app()->getLocale())); ?>" class="text-dark"
                    style="text-decoration: none;">
                    <div class="Scard card shadow-lg border-2 rounded-lg">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="align-self-center">
                                    <?php echo e(__('Control Page')); ?> <i class="bi bi-menu-button"></i>
                                </div>
                                <div class="media d-flex">
                                    <div class="media-body text-right">
                                        <h5><?php echo e(__('Ad Status')); ?></h5>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['read_apartment_status', 'create_apartment_status', 'edit_apartment_status',
            'delete_apartment_status'])): ?>
            <div class="my-2 col-xl-4 col-sm-6 col-12">
                <a href="<?php echo e(route('web.crud.ApartmentStatus', app()->getLocale())); ?>" class="text-dark"
                    style="text-decoration: none;">
                    <div class="Scard card shadow-lg border-2 rounded-lg">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="align-self-center">
                                    <?php echo e(__('Control Page')); ?> <i class="bi bi-menu-button"></i>
                                </div>
                                <div class="media d-flex">
                                    <div class="media-body text-right">
                                        <h5><?php echo e(__('Apartment Status')); ?></h5>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['read_person_langueges', 'create_person_langueges', 'edit_person_langueges',
            'delete_person_langueges'])): ?>
            <div class="my-2 col-xl-4 col-sm-6 col-12">
                <a href="<?php echo e(route('web.crud.PersonLangueges', app()->getLocale())); ?>" class="text-dark"
                    style="text-decoration: none;">
                    <div class="Scard card shadow-lg border-2 rounded-lg">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="align-self-center">
                                    <?php echo e(__('Control Page')); ?> <i class="bi bi-menu-button"></i>
                                </div>
                                <div class="media d-flex">
                                    <div class="media-body text-right">
                                        <h5><?php echo e(__('Person Langueges')); ?></h5>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['read_buildingStatus', 'create_buildingStatus', 'edit_buildingStatus', 'delete_buildingStatus'])): ?>
            <div class="my-2 col-xl-4 col-sm-6 col-12">
                <a href="<?php echo e(route('web.crud.BuildingStatus', app()->getLocale())); ?>" class="text-dark"
                    style="text-decoration: none;">
                    <div class="Scard card shadow-lg border-2 rounded-lg">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="align-self-center">
                                    <?php echo e(__('Control Page')); ?> <i class="bi bi-menu-button"></i>
                                </div>
                                <div class="media d-flex">
                                    <div class="media-body text-right">
                                        <h5><?php echo e(__('Building Status')); ?></h5>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['read_car_status', 'create_car_status', 'edit_car_status', 'delete_car_status'])): ?>
            <div class="my-2 col-xl-4 col-sm-6 col-12">
                <a href="<?php echo e(route('web.crud.CarStatus', app()->getLocale())); ?>" class="text-dark"
                    style="text-decoration: none;">
                    <div class="Scard card shadow-lg border-2 rounded-lg">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="align-self-center">
                                    <?php echo e(__('Control Page')); ?> <i class="bi bi-menu-button"></i>
                                </div>
                                <div class="media d-flex">
                                    <div class="media-body text-right">
                                        <h5><?php echo e(__('Car Status')); ?></h5>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['read_car_type', 'create_car_type', 'edit_car_type', 'delete_car_type'])): ?>
            <div class="my-2 col-xl-4 col-sm-6 col-12">
                <a href="<?php echo e(route('web.crud.CarType', app()->getLocale())); ?>" class="text-dark"
                    style="text-decoration: none;">
                    <div class="Scard card shadow-lg border-2 rounded-lg">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="align-self-center">
                                    <?php echo e(__('Control Page')); ?> <i class="bi bi-menu-button"></i>
                                </div>
                                <div class="media d-flex">
                                    <div class="media-body text-right">
                                        <h5><?php echo e(__('Car Type')); ?></h5>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['read_commercial_and_artificial_type', 'create_commercial_and_artificial_type',
            'edit_commercial_and_artificial_type', 'delete_commercial_and_artificial_type'])): ?>
            <div class="my-2 col-xl-4 col-sm-6 col-12">
                <a href="<?php echo e(route('web.crud.CommercialAndArtificialType', app()->getLocale())); ?>" class="text-dark"
                    style="text-decoration: none;">
                    <div class="Scard card shadow-lg border-2 rounded-lg">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="align-self-center">
                                    <?php echo e(__('Control Page')); ?> <i class="bi bi-menu-button"></i>
                                </div>
                                <div class="media d-flex">
                                    <div class="media-body text-right">
                                        <h5><?php echo e(__('Commercial And Artificial Type')); ?></h5>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?php endif; ?>
        
    </div>
</div>
<?php /**PATH C:\Users\Abo Samer\Desktop\Work\Waseetcom\_public_htewrml\_public_html\resources\views/livewire/dashboard/dashboard.blade.php ENDPATH**/ ?>