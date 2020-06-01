<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Properties;
use App\PropertyAnalytics;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($property_id)
    {
        $property = Properties::find($property_id);

        return [
            'property' => [
                'suburb' => $property->suburb,
                'state' => $property->state,
                'country' => $property->country
            ],
            'analytics' => $property->analytics
        ];
    }

    public function getByColumnValue($column, $value)
    {
        $property = Properties::where($column, $value)->pluck('id')->toArray();
        $analytics = PropertyAnalytics::whereIn('property_id', $property)->get();
        $values = $analytics->pluck('value');

        return [
            'min' => $values->min(),
            'max' => $values->max(),
            'median' => $values->median(),
            'percetage_value' => $values->avg(),
            'percetage_no_value' => $values->count() / 100,
        ];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // save new property
        $property = new Properties;
        $property->suburb = $request->suburb;
        $property->state = $request->state;
        $property->country = $request->country;
        $property->save();


        // return property after saving
        return response()->json([
            'message' => 'New property created.',
            'property' => $property
        ]);
    }
}
