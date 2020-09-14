<?php

namespace App\Http\Controllers;

use App\Services\BlogService;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request, BlogService $blogService){
        return view('blog')
            ->with('posts',$blogService->listPosts())
            ->with('page',$request->get('page', 1));
    }

    public function post($id, BlogService $blogService){
        return view('post')->with('post',$blogService->getPost($id));
    }


}
