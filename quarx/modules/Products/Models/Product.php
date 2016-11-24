<?php

namespace Quarx\Modules\Products\Models;

use Yab\Quarx\Models\QuarxModel;

class Product extends QuarxModel
{
    public $table = "products";

    public $primaryKey = "id";

    public $timestamps = true;

    public $fillable = [
        // Product table data
    ];

    public static $rules = [
        // create rules
    ];

}
