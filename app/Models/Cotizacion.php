<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cotizacion extends Model
{
    use HasFactory;
    protected $fillable=[
        'Name',
        'FirtsName',
        'CantProduct',
        'Phone',
        'Company',
        'City',
        'PostalCode',
        'Comments',
        'Total'
    ];
}
