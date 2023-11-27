<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    use HttpResponses;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::with('user')->where('created_by', Auth::user()->id)->get();
        return CategoryResource::collection($categories);

        // return CategoryResource::collection(
        //     Category::where('created_by', Auth::user()->id)->get()
        // );
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
    public function store(StoreCategoryRequest $request)
    {
        $validatedData = $request->validated();
        if($validatedData){
            if($request->has('image'))
            {
                $fileImage = time().'.'.$request->image->extension();
                $request->image->move(public_path('uploads/category/images'), $fileImage);
            }
            $category = Category::create([
                'name' => $request->name,
                'slug' => Str::slug($request->slug),
                'description' => $request->description,
                'meta_title' => $request->meta_title,
                'meta_description' => $request->meta_description,
                'meta_keywords' => $request->meta_keywords,
                'status' => $request->has('status') ? 1 : 0,
                'navbar_status' => $request->has('navbar_status') ? 1 : 0,
                'image' => $fileImage,
                'created_by' => Auth::user()->id
            ]);

        }

        return new CategoryResource($category); //return values in array

        // if($validatedData){
        //     $category = Category::create([
        //         'name' => $request->name,
        //         'slug' => $request->slug,
        //         'description' => $request->description,
        //         'meta_title' => $request->meta_title,
        //         'meta_description' => $request->meta_description,
        //         'meta_keywords' => $request->meta_keywords,
        //         'image' => $request->image,
        //         'created_by' => Auth::user()->id
        //     ]);

        //     return $this->success([
        //         'category', $category,
        //         'message' => "Category created successfully"
        //     ]);

        // }
        //else{
        //     return $this->error('error', 'Something went wrong', 401);
        // }

    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        // return $category;
        if(Auth::user()->id !== $category->created_by){
            return $this->error('error', 'You are not authorized', 403);
        }else{
            return new CategoryResource($category); //return values in array
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        if (Auth::user()->id == $category->created_by)
        // || Auth::user()->hasRole(['administrator','admin']))
        {
            $category->update($request->all());

            return new CategoryResource($category);

        }else{
            return $this->error('error', 'You are not authorized', 403);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        if (Auth::user()->id !== $category->created_by){
            return $this->error('error', 'You are not authorized', 403);
        }else{
            $category->delete();
        }

        return $this->success('Category deleted successfully', 200);
    }
}
