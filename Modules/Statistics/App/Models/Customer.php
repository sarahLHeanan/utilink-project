<?php

namespace Modules\Statistics\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Statistics\Database\factories\CustomersFactory;

class Customer extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];
    
    protected static function newFactory(): CustomersFactory
    {
        //return CustomersFactory::new();
    }
}
