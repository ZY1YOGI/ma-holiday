<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Settings\SocialMediaSettings;
use Illuminate\Contracts\View\View;
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function __construct(SocialMediaSettings $SocialMediaSettings)
    {
        view()->composer('*', function (View $view) use ($SocialMediaSettings) {
            $view->with('social', $SocialMediaSettings);
        });
    }
}
