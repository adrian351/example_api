<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CotizacionResource extends JsonResource
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
            'name'          =>$this->name,
            'firtsName'     =>$this->firtsName,
            'cantProduct'   =>$this->cantProduct,
            'phone'         =>$this->phone,
            'company'       =>$this->company,
            'city'          =>$this->city,                                              
            'postalCode'    =>$this->postalCode,
            'comments'      =>$this->comments,
            'total'         =>$this->total

        ];
    }
}
