<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::where('status', 0);
        return view('admin.categories.index', compact('categories'));
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
        $data = $request->validated();
        $category = new Category;;

        $category->name = $data['name'];
        $category->slug = Str::slug($data['slug']);
        $category->description = $data['description'];
        $category->status = $request->has('status') ? 1 : 0;
        $category->navbar_status = $request->has('navbar_status') ? 1 : 0;
        $category->meta_title = $data['meta_title'];
        $category->meta_description = $data['meta_description'];
        $category->meta_keywords = $data['meta_keywords'];
        $category->created_by = Auth::user()->id;

        if($request->has('image'))
        {
            $fileImage = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/category/images'), $fileImage);
        }
        $category->image = $fileImage;

        $category->save();

        return redirect('admin/categories')->with('success', 'La catégorie a été ajoutée avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $category = Category::find($id);
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, string $id)
    {
        $validate = $request->validated();
        if($validate)
        {

            $update = Category::findOrFail($id);

            $update->name = $validate['name'];
            $update->slug = Str::slug($validate['slug']);
            $update->description = $validate['description'];
            $update->status = $request->has('status') ? 1 : 0;
            $update->navbar_status = $request->has('navbar_status') ? 1 : 0;
            $update->meta_title = $validate['meta_title'];
            $update->meta_description = $validate['meta_description'];
            $update->meta_keywords = $validate['meta_keywords'];
            $update->created_by = Auth::user()->id;

            if($request->has('image'))
            {
                $fileImage = time().'.'.$request->image->extension();
                $request->image->move(public_path('uploads/category/images'), $fileImage);
            }
            $update->image = $fileImage;
        }

        $update->update();

        return redirect('admin/categories')->with('success', 'La catégorie a été mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();

        return redirect('admin/categories')->with('success', 'La catégorie a été supprimée avec succès');

    }
}
