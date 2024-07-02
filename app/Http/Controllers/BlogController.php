<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    //
    public function addBlog(Request $request){
        try {
            $request->validate([
                'title' => 'required',
                'body' => 'required',
                'thumbnail' => 'required|mimes:png,jpg,webp'
            ],[
                'thumbnail' => 'Please add thumbnail'
            ]);
    
            $thumbnail = time().'.'.$request->thumbnail->extension();
            $request->thumbnail->move(public_path('uploads'), $thumbnail);
    
            $blog = Blog::create([
                'title' => $request->title,
                'category' => $request->category,
                'body' => $request->body,
                'user_id' => Auth::user()->id,
                'thumbnail' => $thumbnail,
            ]);
    
            if($blog){
                return redirect()->back()->with('success', 'Post added successfully.');
            }else{
                return redirect()->back()->with('error', 'Failed to create post!');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to add post!');
        }
        
    }

    public function editBlog(Request $request, $slug){    
        if(Auth::check()){
            $blog = Blog::where('slug', $slug)->firstOrFail();
            return view('backend.pages.edit-blog', compact('blog'));
        }
    }
    public function update(Request $request, Blog $blog){
        try {
            $request->validate([
                'title' => 'required|string|max:255',
                'body' => 'required|string',
                'thumbnail' => 'mimes:png,jpg,webp|max:10240',
            ]);
    
            if ($request->hasFile('thumbnail')) {
                $filePath = public_path('uploads/' . $blog->thumbnail);
                if(file_exists($filePath)){
                    unlink($filePath);
                }
                Storage::disk('public')->delete('uploads' . $blog->thumbnail);
                $thumbnail = time() . '.' . $request->thumbnail->extension();
                $request->thumbnail->move(public_path('uploads'), $thumbnail);
            } else {
                $thumbnail = $blog->thumbnail;
            }
            
            $blog_update = $blog->update([
                'title' => $request->title,
                'body' => $request->body,
                'thumbnail' => $thumbnail,
            ]);
    
            if(!$blog_update){
                return redirect()->route('showBlogNews')->with('error', 'Failed to update blog. Please try again.');
            }
            return redirect()->route('showBlogNews')->with('success', 'Blog updated successfully');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to add post!');
        }
        

    }
}
