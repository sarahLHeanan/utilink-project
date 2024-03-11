<?php

namespace Modules\Statistics\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Statistics\Database\factories\SalesFactory;

class Sales extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];
    
    protected static function newFactory(): SalesFactory
    {
        //return SalesFactory::new();
    }
}
