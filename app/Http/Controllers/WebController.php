<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Trip;

class WebController extends Controller
{
    public function home()
    {
        return view('web.home');
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
        $categories = Category::get();

        return view('web.categories', compact('categories'));
    }

    public function category(Category $category)
    {
        return view('web.category', compact('category'));
    }

    public function trips()
    {
        $trips = Trip::get();

        return view('web.trips', compact('trips'));
    }

    public function trip(Trip $trip)
    {
        return view('web.trip', compact('trip'));
    }
}
