<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'            =>$this->id,
            'name'          => $this->name,
            'description'   => $this->description,
            'brand'         => $this->brand,
            'price'         => $this->price,
            'image'         => $this->image,
            'categorie'     => $this->categorie,
            'created_at'    => $this->created_at->date_format('d-m-y'),
            'updated_at'    => $this->updated_at->date_format('d-m-y'),


        ];
    }
}
