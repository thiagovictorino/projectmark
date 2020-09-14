<?php

namespace App\Http\Controllers;

use App\Services\BlogService;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(BlogService $blogService){
        return view('blog')->with('posts',$blogService->listPosts());
    }

    public function post($id, BlogService $blogService){
        return view('post')->with('post',$blogService->get($id));
    }


}
