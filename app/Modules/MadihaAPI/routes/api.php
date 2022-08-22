<?php

use App\Modules\MadihaAPI\Controllers\API\MadihaAPIController;
use Illuminate\Support\Facades\Route;

$my_api_routes_get = [
    'site-info'=>'siteInfo',
    'site-urls'=>'baseUrls',
    'main-slaider'=>'mainSlaider',
    'main-menu'=>'mainMenu',
    'our-portfolio'=>'ourPortfolio',
    'portfolio-gallery/{id}'=>'PortfolioGallery',
    'videos'=>'videos',
    'photos'=>'photos',
    'about-us'=>'Aboutus',
    'contact-us'=>'contactUs',
    'services'=>'services',
    'testimonials'=>'testimonials',
    'spechalize_section'=>'spechalize_section',
];

foreach ($my_api_routes_get as $route => $method) {
   Route::get($route,[MadihaAPIController::class,$method]);
}

