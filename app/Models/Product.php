<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'code', 'title', 'slug','summary', 'description','description','price_mp','price_sp','sub_category_id','category_id','brand_id'
    ];
}
