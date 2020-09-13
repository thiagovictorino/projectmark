<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Http\Resources\PostCollection;
use App\Models\Post;
use App\Services\PostService;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @param PostService $postService
     * @return \Inertia\Response
     */
    public function index(Request $request, PostService $postService)
    {
        return Inertia::render('Posts/Index',[
            'posts' => $postService->getUserPosts($request)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Inertia\Response
     */
    public function create()
    {
        return Inertia::render('Posts/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreatePostRequest $request
     * @param PostService $postService
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CreatePostRequest $request, PostService $postService)
    {
        $postService->create($request);
        return redirect()->route('posts.index')->with('success', 'Your post was created successfully.');
    }
}
