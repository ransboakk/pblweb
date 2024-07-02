<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminPagesController extends Controller
{
    //
    public function showBlogNews(){
        $user = Auth::user()->id;
        $blogs = Blog::where('user_id', $user)->get();
        return view('backend.pages.blog-news', compact('blogs'));
    }
}
