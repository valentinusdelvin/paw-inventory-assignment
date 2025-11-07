<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inventory extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'inventory_id',
        'inventory_name',
        'inventory_amount',
    ];

}
