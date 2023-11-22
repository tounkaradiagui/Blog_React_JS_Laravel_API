<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('permission:role-list|role-create|role-edit|role-delete', ['only' => ['index']]);
        // $this->middleware('permission:role-create', ['only' => ['create','store']]);
        // $this->middleware('permission:role-edit', ['only' => ['edit','update']]);
        // $this->middleware('permission:role-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::all();
        $permissions = Permission::all();
        return view('roles.index',compact('roles', 'permissions'));    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $permissions = Permission::all();
        return view('roles.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:roles,name',
            'permissions' => 'nullable',
        ]);

        $role = Role::create([
            'name' => $request->name
        ]);

        if($role->has('permissions'))
        {
            $role->givePermissionTo($request->permissions);
        }
        return redirect()->route('roles.index')->with('success', 'Le rôle a été créer avec succès.');
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
    public function edit(string $id)
    {
        $roles = Role::findOrFail($id);
        $permissions = Permission::all();
        return view('roles.edit', compact('roles', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $role_id)
    {
        $request->validate([
            'name' => 'required|unique:roles,name',
            'permissions' => 'nullable',
        ]);

        $role = Role::whereId($role_id)->first();

        $role->name = $request->name;
        $role->save();

        // Sync Permissions
        $permissions = $request->permissions;
        $role->syncPermissions($permissions);

        return redirect()->route('roles.index')->with('success', 'Le rôle a été
        mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($role_id)
    {
        // dd($role_id);
        $roles = Role::findOrFail($role_id);
        $roles->delete();

        $roles->syncPermissions([]);
        $roles->revokePermissionTo($roles->permissions);

        return redirect()->route('roles.index')->with('success', 'Le rôle a été supprimé avec succès.');
    }
}
