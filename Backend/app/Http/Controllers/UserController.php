<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Traits\HttpResponses;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    use HttpResponses;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return UserResource::collection(
            User::all()
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
    public function store(StoreUserRequest $request)
    {
        $data = $request->validated();
        if(Auth::user()){
            if($data){
                $user = User::create([
                    'name' => $request->name,
                    'username' => $request->username,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'role_id'=>$request->role_id
                ]);
            }

            return new UserResource($user);
        }else{
            return $this->error('Error',"You don't have permission", 403);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if(!Auth::user()){
            return $this->error('Error',"You don't have permission", 403);
        }else{
            $user = User::findOrFail($id);
            return new UserResource($user);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if(Auth::user()){
            $user = User::findOrFail($id);
            if($user){
                $user->update($request->all());
            }
            return $this->success("Infos successfully updated", 200);
        }else{
            return $this->error('Error',"You don't have permission", 403);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if(Auth::user()){
            $user = User::findOrFail($id);
            if($user){
                $user->delete();
            }
            return $this->success("User has been deleted successfully", 200);
        }else{
            return $this->error('Error', "You don't have permission", 403);
        }
    }
}
