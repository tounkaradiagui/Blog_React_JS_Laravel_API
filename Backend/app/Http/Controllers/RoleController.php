<?php

namespace App\Http\Controllers;

use App\Http\Resources\RoleResource;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::all();
        return RoleResource::collection($roles);
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
        $data = $request->validate([
            'name' => ['required', 'string', 'unique:roles,name']
        ]);

        if(Auth::user()){
            if ($data){
                $role = Role::create([
                    'name' => $request->input('name'),
                ]);
            }
            return "Role created successfully";
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        if(Auth::user()){
            return new RoleResource($role);
        }else{
            abort(403, 'Unauthorized');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        if(Auth::user()){
            $role->update($request->all());
            return new RoleResource($role);
        }else{
            abort(403, 'Unauthorized');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        if(Auth::user()){
            $role->delete();
            return "Role has been deleted successfully";
        }else{
            abort(403, 'Unauthorized');
        }
    }
}
