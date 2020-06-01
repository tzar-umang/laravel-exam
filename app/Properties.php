<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Properties extends Model
{
    protected $fillable = [
        'id',
        'guid', 
        'suburb', 
        'state',
        'country',
    ];
    
    /**
     * The analytics that belong to the property.
     */
    public function analytics()
    {
        return $this->belongsToMany(
            AnalyticTypes::class, 
            'Property_Analytics', 
            'property_id', 
            'analytic_type_id'
        );
    }

    public function analytic()
    {
        return $this->belongsToMany(
            PropertyAnalytics::class,
            AnalyticTypes::class,
            'id',
            'id',
            'analytic_type_id',
            'property_id', 
        );
    }

}
