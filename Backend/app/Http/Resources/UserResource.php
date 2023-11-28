<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request): array
    {
        return ([
            'id' => $this->id,
            'attributes' => [
                'name'=> $this->name,
                'email'=> $this->email,
                'username'=> $this->username,
                'role_id'=> $this->role_id,
                'city'=> $this->city,
                'phone'=> $this->phone,
                'address'=> $this->address,
                'created_at'=> $this->created_at,
                'updated_at'=> $this->updated_at,
            ],
        ]);
    }
}
