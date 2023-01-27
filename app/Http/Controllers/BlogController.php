<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $blogs = Blog::with('media')->get();

        return view('blogs.index', compact('blogs'));
    }

    public function show(Request $request, Blog $blog) {
        return view('blogs.show', compact('blog'));
    }
}
