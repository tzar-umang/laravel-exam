<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\AnalyticTypes as AnalyticTypesResource;

class Properties extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'property_id' => $this->property_id,
            'analytics' =>  new AnalyticTypesResource($this->analytics)
        ];
    }
}
