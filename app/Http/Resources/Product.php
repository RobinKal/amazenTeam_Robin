<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Product extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'discount' => $this->discount,
            'weight' => $this->weight,
            'url_image' => $this->url_image,
            'quantity' => $this->quantity,
            'available' => $this->available,
//            'categorie_id' => $this->categorie_id,
            'categorie' => $this->categorie,
        ];
    }
}
