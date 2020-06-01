<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Properties;
use App\PropertyAnalytics;

class PropertyAnalyticsController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        /**
         *  Look for existing property analytics using property id and analytic type id
         *  if theres is existing it will update or else it will insert
         */ 

        $propertyAnalytic = PropertyAnalytics::updateOrCreate(
            [
                'property_id' => $request->property_id, 
                'analytic_type_id' => $request->analytic_type_id
            ],
            [
                'value' => $request->value
            ]
        );        
        
        // return property after saving
        return response()->json([
            'message' => 'Property analytic updated.',
            'property' => $propertyAnalytic
        ]);
    }

}
