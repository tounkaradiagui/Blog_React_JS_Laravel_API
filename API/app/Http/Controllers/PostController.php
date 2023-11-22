<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::where('status', 0)->get();
        $categories = Category::all();
        return view('admin.posts.index', compact('posts', 'categories'));
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
    public function store(StorePostRequest $request)
    {
        $validate = $request->validated();
        if($validate)
        {
            $post = new Post;
            $category = Category::find($validate['category_id']);

            $post->title = $validate['title'];
            $post->slug = Str::slug($validate['slug']);
            $post->description = $validate['description'];
            $post->status = $request->has('status') ? 1 : 0;
            $post->meta_title = $validate['meta_title'];
            $post->meta_description = $validate['meta_description'];
            $post->meta_keywords = $validate['meta_keywords'];
            $post->iframe = $validate['iframe'];
            $post->user_id = Auth::user()->id;
            $post->category_id = $category->id;

            $post->save();

            return redirect('admin/posts')->with('success', 'La publication a été ajoutée avec succès');

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($post)
    {
        $post = Post::findOrFail($post);
        $categories = Category::all();
        return view('admin.posts.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, string $postId)
    {
        $validate = $request->validated();
        if($validate)
        {
            $post = Post::findOrFail($postId);
            $category = Category::find($validate['category_id']);

            $post->title = $validate['title'];
            $post->slug = Str::slug($validate['slug']);
            $post->description = $validate['description'];
            $post->status = $request->has('status') ? 1 : 0;
            $post->meta_title = $validate['meta_title'];
            $post->meta_description = $validate['meta_description'];
            $post->meta_keywords = $validate['meta_keywords'];
            $post->iframe = $validate['iframe'];
            $post->user_id = Auth::user()->id;
            $post->category_id = $category->id;

            $post->update();

            return redirect('admin/posts')->with('success', 'La publication a été ajoutée avec succès');

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($post_id)
    {
        $post = Post::find($post_id);
        $post->delete();

        return redirect('admin/posts')->with('success', 'La publication a été supprimée avec succès');
    }
}
