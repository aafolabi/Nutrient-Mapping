<?php

namespace App\Models;

use App\Traits\UseUUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nutrition extends Model
{
    use HasFactory;
    use UseUUID;
    public $incrementing=false;
    public $guarded =['id'];

    public function crop()
    {
        return $this->belongsTo(Crop::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function eco_region()
    {
        return $this->belongsTo(EcoRegion::class);
    }
}
