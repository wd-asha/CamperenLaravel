<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function welcome()
    {
        $categories = Category::all();
        $posts = Post::all();
        return view('welcome', compact('categories', 'posts'));
    }

    public function contacts()
    {
        return view('contacts');
    }

    public function kids()
    {
        return view('kids');
    }

    public function about()
    {
        return view('about');
    }

}
