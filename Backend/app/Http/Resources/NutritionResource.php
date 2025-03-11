<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NutritionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'country' => $this->country?->name,
            'eco_region' => $this->eco_region?->name,
            'crop' => $this->crop?->name,
            'category' => $this->category,
            'description' => $this->description,
            'summary' => $this->summary,
            "values" => [
                'fibre' => $this->fibre,
                'protein' => $this->protein,
                'fat' => $this->fat,
                'iron' => $this->iron,
                'carbohydrate' => $this->carbohydrate,
            ]
        ];
    }
}
