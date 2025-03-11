<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseController;
use App\Http\Resources\EcoRegionResource;
use App\Http\Resources\EcoRegionResourceCollection;
use App\Models\Country;
use App\Models\Crop;
use App\Models\EcoRegion;
use Illuminate\Http\Request;

class GeneralController extends BaseController
{
    public function listCountries()
    {
        $countries = Country::select('id','name')->get();
        return $this->sendResponse("Request Successful", $countries, 200);
    }

    public function listEcoRegions($country_id = null)
    {
        if($country_id !== null){
            $ecoregions = EcoRegion::where('country_id',$country_id)->get();
            if($ecoregions == null) return $this->sendResponse("No Results found", null, 200);
            return $this->sendResponse("Request Successful", new EcoRegionResourceCollection($ecoregions), 200);
        }
        $ecoregions = EcoRegion::all();
        return $this->sendResponse("Request Successful", new EcoRegionResourceCollection($ecoregions), 200);
    }

    public function listCrops()
    {
        $crops = Crop::select('id','name')->get();
        return $this->sendResponse("Request Successful", $crops, 200);
    }

    public function getCountryRegions($id)
    {
        $ecoregions = EcoRegion::where('country_id',$id)->get();
        return $this->sendResponse("Request Successful", $ecoregions, 200);
    }



}
