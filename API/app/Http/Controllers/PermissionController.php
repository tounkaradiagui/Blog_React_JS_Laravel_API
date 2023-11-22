<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;


class PermissionController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('permission:permission-list|permission-create|permission-edit|permission-delete', ['only' => ['index']]);
        // $this->middleware('permission:permission-create', ['only' => ['create','store']]);
        // $this->middleware('permission:permission-edit', ['only' => ['edit','update']]);
        // $this->middleware('permission:permission-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $permissions = Permission::all();
        return view('permissions.index', compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('permissions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $this->validate($request,[
            'name' => 'required|unique:permissions,name',
        ]);

        if($validate){
            $permission = Permission::create(['name' => $request->name]);
        }

        return redirect()->route('permissions.index')->with('success', 'La Permission a été créer avec succès !');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $permission_id)
    {
        // $permission = Permission::find($permission_id);
        //dd($permission);
        $permission = Permission::where('id', $permission_id)->first();
        return view('permissions.edit', compact('permission'));


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $permission_id)
    {
        $request->validate([
            'name' => 'required|unique:permissions,name',
            'guard_name' => 'nullable'
        ]);

        $permission = Permission::whereId($permission_id)->first();

        $permission->name = $request->name;
        if($request->has('guard_name')){
            $permission->guard_name = $request->guard_name;
        }
        // $permission->guard_name = $request->guard_name;
        $permission->save();

        return redirect()->route('permissions.index')->with('success', 'La Permission a été modifiée avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $permission_id)
    {
        $permission = Permission::findOrFail($permission_id);
        //dd($permission);

        $permission->delete();
        $permission->roles()->detach();
        $permission->roles()->sync([]);

        return redirect()->route('permissions.index')->with('success', 'La Permission a été supprimée avec succès !');

    }
}
