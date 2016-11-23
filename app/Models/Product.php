<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $table = "products";

    public $primaryKey = "id";

    public $timestamps = true;

    public $fillable = [
        		'id',
		'name',
		'description',
		'inventory',

    ];

    public static $rules = [
        // create rules
    ];

    // Product 

}
