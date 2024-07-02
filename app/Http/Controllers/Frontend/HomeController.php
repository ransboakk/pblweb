<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->take(3)->get();
        return view('frontend.home', compact('blogs'));
    }

    public function blog($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        $recent_blogs = Blog::where('id', '!=', $blog->id)->orderBy('created_at', 'desc')->take(3)->get();
        return view('frontend.blog', compact('blog', 'recent_blogs'));
    }
}
