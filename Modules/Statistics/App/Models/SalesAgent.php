<?php

namespace Modules\Statistics\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Statistics\Database\factories\SalesAgentFactory;

class SalesAgent extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];
    
    // @todo calculate sales with this sales agent id and count
    public function noSales()
    {
        
    }

    // @todo get all sales and sum total
    public function totalSales()
    {

    }


}
