<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnalyticTypes extends Model
{
    protected $fillable = [
        'id',
        'name', 
        'units', 
        'is_numeric',
        'num_decimal_places',
    ];
    
    /**
     * The properties that belong to the analytic.
     */
    public function properties()
    {
        return $this->belongsToMany('App\Properties');
    }
    
}
