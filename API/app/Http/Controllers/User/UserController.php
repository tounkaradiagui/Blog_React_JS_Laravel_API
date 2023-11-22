<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserFormRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('permission:view-user|create-user|edit-user|delete-user', ['only' => ['index']]);
        // $this->middleware('permission:create-user', ['only' => ['create','store', 'updateStatus']]);
        // $this->middleware('permission:edit-user', ['only' => ['edit','update']]);
        // $this->middleware('permission:delete-user', ['only' => ['delete']]);
    }
    public function profile()
    {
        return view('users.profile');
    }

    public function updateProfile(Request $request)
    {
        $user_id = Auth::user()->id;
        $user = User::findOrFail($user_id);

        $this->validate($request, [
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user_id,
            'phone' => 'required|string|max:255',
            'adresse' => 'required|string|max:255'
        ]);

        $user->update($request->all());
        return redirect()->back()->with('success', 'Votre profil a été mis à jour');
    }

    public function updatedMypasssword(Request $request)
    {
        $request->validate([
            'current_password' => ['required','string','min:4'],
            'password' => ['required', 'string', 'min:4', 'confirmed']
        ]);

        $currentPasswordStatus = Hash::check($request->current_password, auth()->user()->password);
        if($currentPasswordStatus){

            User::findOrFail(Auth::user()->id)->update([
                'password' => Hash::make($request->password),
            ]);

            return redirect()->back()->with('success','Félicitations !! Votre mot de passe a été Modifié');

        }else{

            return redirect()->back()->with('error','Desolé, le mot de passe ne correspond pas veuillez réessayer !');
        }
    }

    /**
     * Display a listing of the resource.
     */
    public function getAllUsers()
    {
        // $users = User::latest()->get();

        // if($users->count() > 0)
        // {
        //     return response()->json([
        //         'status' => 200,
        //         'users' => $users
        //     ], 200);
        // }
        // else
        // {
        //     return response()->json([
        //         'status' => 404,
        //         'users' => 'Aucun utilisateur disponible'
        //     ], 404);
        // }
    }

    public function index()
    {
        $users = User::all();
        $roles = Role::all();
        $permissions = Permission::all();
        return view('admin.users.index', compact('users', 'roles', 'permissions'));

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
    public function store(UserFormRequest $request)
    {
        $validate = $request->validated();

        if($validate)
        {
            $user = User::create([
                'nom' => $request->nom,
                'prenom' => $request->prenom,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                // 'status' => $request->status,
            ]);

            // Assign Role
            $user->assignRole($request->role);

            // Assign Permission
            if($request->has('permissions'))
            {
                // Assign Permission
                $user->givePermissionTo($request->permissions);
            }


            return redirect()
            ->route('users.index')
            ->with('success', 'Utilisateur ajouté avec succès');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $user = User::findOrFail($id);
        // $roles = Role::all();
        // $permissions = Permission::all();
        // return view('admin.users.show', compact('user', 'roles', 'permissions'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $user = User::find($id);
        // dd($user);
        $roles = Role::all();
        $permissions = Permission::all();
        return view('admin.users.edit', compact('user', 'roles', 'permissions'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $validateData = $request->validated();
        // Validation des input name
        $validateData = $request->validate([
            'nom' => 'required', 'string', 'max:255',
            'prenom' => 'required', 'string', 'max:255',
            'phone' => 'required', 'string', 'max:255',
            'email' => 'required', 'string', 'email', 'max:255', 'unique:users,email'.$id,
            'adresse' => 'required', 'string', 'max:255',
            // 'password' => 'nullable',
            'role' => 'required', 'integer', 'exists:roles,id'
        ]);

        if($validateData)
        {
            $user = User::findOrFail($id);

            $user->nom = $request->nom;
            $user->prenom = $request->prenom;
            $user->phone = $request->phone;
            $user->email = $request->email;
            $user->adresse = $request->adresse;
        }


        // if($request->has('password')){
        //     $user->password = bcrypt($request->password);
        // }

        // Assigner un Role
        if($request->has('role')){
            $userRole = $user->getRoleNames();
            foreach($userRole as $role){
                $user->removeRole($role);
            }
            $user->assignRole($request->role);
        }

        // Assigner une Permission
        if($request->has('permissions')){
            $userPermissions = $user->getPermissionNames();
            foreach($userPermissions as $permissions){
                $user->revokePermissionTo($permissions);
            }
            $user->givePermissionTo($request->permissions);
        }

        $user->update();

        return redirect()
            ->route('users.index')
            ->with('success', 'Utilisateur modifié avec succès');
    }

    public function updateStatus($user_id, $status_code)
    {
        try {
            $update_user = User::whereId($user_id)->update([
                'status' => $status_code
            ]);

            if($update_user)
            {
             return redirect()->route('users.index')->with('success', "Le status de l'utilisateur a été modifié avec succès ");

         }
             return redirect()->route('users.index')->with('error', "Echec de modification, veuillez réessayer ! ");

         } catch (\Throwable $th) {
             throw $th;
         }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($users)
    {
        $users = User::findOrFail($users);
        $users->delete();

        if($users){
            $users->roles()->detach();
            $users->permissions()->detach();
        }

        return redirect()
            ->route('users.index')
            ->with('success', 'Utilisateur supprimé avec succès');
    }
}
