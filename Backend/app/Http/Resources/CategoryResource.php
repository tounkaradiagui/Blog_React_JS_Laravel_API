<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
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
                'name'=> $this->name,
                'description'=> $this->description,
                'slug'=> $this->slug,
                'image'=> $this->image,
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
            ],

            // 'relationships' => [
            //     'user' => [
            //         'id' => optional($this->user)->id,
            //         'name' => optional($this->user)->name,
            //         'email' => optional($this->user)->email,
            //     ],
            // ],


            // 'relationships' => [
            //     'user' => $this->when($this->user, [
            //         'id' => $this->user->id,
            //         'name' => $this->user->name,
            //     ]),
            // ],
        ];
    }
}
