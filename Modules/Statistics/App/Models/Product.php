<?php

namespace Modules\Statistics\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Statistics\Database\factories\ProductsFactory;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];
    
    protected static function newFactory(): ProductsFactory
    {
        //return ProductsFactory::new();
    }
}
