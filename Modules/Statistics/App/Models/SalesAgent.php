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

    public function sales()
    {
        return $this->hasMany('\Modules\Statistics\App\Models\Sales');
    }

    // @todo get all sales and sum total
    public function totalSales()
    {
        return $this->sales->sum('price');
    }


}
