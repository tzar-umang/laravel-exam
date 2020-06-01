<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyAnalytics extends Model
{
    protected $fillable = [
        'id',
        'property_id', 
        'analytic_type_id', 
        'value',
    ];

}
