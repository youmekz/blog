<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return 'Posts index';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $post)
    {
        return 'Post:' . $post;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $post)
    {
        //
    }

    public function views()
    {
      return 'View post: ';
    }
}
