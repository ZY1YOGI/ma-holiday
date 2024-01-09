<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Trip;
use App\Settings\SocialMediaSettings;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Spatie\MediaLibrary\MediaCollections\Models\Media;


class WebController extends Controller
{



    public function __construct(SocialMediaSettings $SocialMediaSettings)
    {
        view()->composer('*', function (View $view) use ($SocialMediaSettings) {
            $view->with('social', $SocialMediaSettings);
        });
    }

    public function home(): View
    {
        $trips = Trip::latest()->get();
        $galleries = Gallery::latest()->get();
        $categories = Category::latest()->get();
        $images = Media::latest()->limit(20)->get();
        return view('web.home', compact('trips', 'galleries', 'categories', 'images'));
    }

    public function aboutUs(): View
    {
        return view('web.about-us');
    }

    public function contactUs(): View
    {
        return view('web.contact-us');
    }

    public function contactUsForm(Request $request)
    {

        $data =  $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'string'],
            'phone' => ['nullable' ,'regex:/^([0-9\s\-\+\(\)]*)$/', 'min:8'],
            'message' => ['required', 'string', 'min:5'],
        ]);
        Contact::create($data);
        session()->flash('message', 'Send us a message and we will respond to you.');
        return view('web.contact-us');
    }

    public function categories(): View
    {
        $categories = Category::latest()->get();

        return view('web.categories', compact('categories'));
    }

    public function category(Category $category): View
    {
        return view('web.category', compact('category'));
    }

    public function trips(): View
    {
        $trips = Trip::latest()->get();

        return view('web.trips', compact('trips'));
    }

    public function trip(Trip $trip): View
    {
        $trips = Trip::latest()->get();
        return view('web.trip', compact('trip', 'trips'));
    }

    public function galleries(): View
    {
        $galleries = Gallery::latest()->get();
        $categories = Category::latest()->get();
        $images = Media::latest()->get();
        return view('web.galleries', compact('galleries', 'categories', 'images'));
    }

    public function gallery(Gallery $gallery): View
    {
        $categories = Category::latest()->get();
        $galleries = Gallery::latest()->get();
        return view('web.gallery', compact('gallery', 'categories', 'galleries'));
    }
}
