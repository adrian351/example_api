<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cotizacion extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'firtsName',
        'cantProduct',
        'phone',
        'company',
        'city',
        'postalCode',
        'comments',
        'total'
    ];

    protected $hidden = ['created_at', ' updated_at'];
}
