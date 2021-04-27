<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Producto extends Model
{
    use HasFactory;

    protected $fillable=[
        'Name',
        'FirtsName',
        'CantProduct',
        'Phone',
        'Company',
        'NotCompany',
        'City',
        'PostalCode',
        'Comments',
        'Total'
    ];


    /*
    Codigo de prueba par0a manipular mis datos
    */

    // protected $hidden =['description'];

    // convertir -> name en mayusculas
    // protected $appends = ['producto_name'];
    
    // public function getProductoNameAttribute(){
    //     return strtoupper($this->name);
    // }
}
