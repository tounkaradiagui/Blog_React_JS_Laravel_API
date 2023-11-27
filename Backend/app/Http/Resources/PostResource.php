<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'attributes' => [
                'title'=> $this->title,
                'description'=> $this->description,
                'slug'=> $this->slug,
                'meta_description'=> $this->meta_description,
                'meta_title'=> $this->meta_title,
                'created_at'=> $this->created_at,
                'updated_at'=> $this->updated_at,
            ],

            'relationships' => [
                'user' => [
                    'id' => $this->user->id,
                    'name' => $this->user->name,
                    'email' => $this->user->email,
                ],
                'category' => [
                    'id' => $this->category->id,
                    'name' => $this->category->name,
                    'slug' => $this->category->slug,
                ],
            ],
        ];
    }
}
