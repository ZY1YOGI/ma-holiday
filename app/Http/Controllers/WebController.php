<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Trip;
use Illuminate\Support\Facades\DB;
use Spatie\MediaLibrary\MediaCollections\Models\Media;


class WebController extends Controller
{
    public function home()
    {
        $trips = Trip::latest()->get();
        $galleries = Gallery::latest()->get();
        $categories = Category::latest()->get();
        return view('web.home', compact('trips', 'galleries', 'categories'));
    }

    public function aboutUs()
    {
        return view('web.about-us');
    }

    public function contactUs()
    {
        return view('web.contact-us');
    }

    public function categories()
    {
        $categories = Category::latest()->get();

        return view('web.categories', compact('categories'));
    }

    public function category(Category $category)
    {
        return view('web.category', compact('category'));
    }

    public function trips()
    {
        $trips = Trip::latest()->get();

        return view('web.trips', compact('trips'));
    }

    public function trip(Trip $trip)
    {
        return view('web.trip', compact('trip'));
    }

    public function galleries()
    {
        $trips = Trip::latest()->get();
        $galleries = Gallery::latest()->get();
        $categories = Category::latest()->get();
        // $images = DB::table('media')->select('id', 'collection_name', 'name', 'file_name')->get();
        $images = Media::latest()->get();
        return view('web.galleries', compact('trips', 'galleries', 'categories', 'images'));
    }
}
