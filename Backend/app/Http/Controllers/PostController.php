<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Resources\PostResource;
use App\Models\Category;
use App\Models\Post;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;

class PostController extends Controller
{
    use HttpResponses;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         return PostResource::collection(
            Post::where('user_id', Auth::user()->id)->get()
        );
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
        $data = $request->validated();
        if($data){
            $post = Post::create([
                'title' => $request->title,
                'description' => $request->description,
                'slug' => Str::slug($request->slug),
                'meta_description' => $request->meta_description,
                'meta_title' => $request->meta_title,
                'meta_keywords' => $request->meta_keywords,
                'status' => $request->status ? 1 : 0,
                'iframe' => $request->iframe,
                'user_id' => Auth::user()->id,
                'category_id' => Category::all()->random()->id,
            ]);
        }

        return new PostResource($post);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        if(Auth::user()){
            // if(Gate::allows('admin-post')){
            //     return new PostResource($post);
            // }else{
            //         return $this->error('', "You don't have permission", 403);
            //     }
            return new PostResource($post);
            // return $this->error('', "You don't have permission", 403);
        }else{
            return $this->error('', "You don't have permission", 403);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        if(Auth::user()){
            // if(Gate::allows('admin') && Gate::allows('author')){
            //     $post->update($request->all());
            //     return new PostResource($post);
            // }else{
            //     return $this->error('', "You don't have permission", 403);
            // }
            $post->update($request->all());
            return new PostResource($post);
        }else{
            return $this->error('', "You don't have permission", 403);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        if(Auth::user()->id !== $post->user_id){
            return $this->error('', "You don't have permission", 403);
        }else{

            $post->delete();
            return $this->success('Post deleted successfully', 200);
        }
    }
}
