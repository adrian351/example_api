<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Cotizacion extends JsonResource
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
            'Name'          =>$this->Name,
            'FirtsName'     =>$this->FirtsName,
            'CantProduct'   =>$this->CantProduct,
            'Phone'         =>$this->Phone,
            'Company'       =>$this->Company,
            'City'          =>$this->City,                                              
            'PostalCode'    =>$this->PostalCode,
            'Comments'      =>$this->Comments,
            'Total'         =>$this->Total

        ];
    }
}
