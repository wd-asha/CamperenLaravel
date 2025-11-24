<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Carbon\Carbon;
use App\Models\Day;

class AccommodationController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('accommodation', compact('categories'));
    }

    public function single($category_id)
    {
        $category = Category::find($category_id);
        $allowedDates = \App\Models\Day::orderBy('date')->pluck('date')->toArray();
        return view('single', compact('category', 'allowedDates'));
    }
}
