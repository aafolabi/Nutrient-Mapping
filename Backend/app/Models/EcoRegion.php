<?php

namespace App\Models;

use App\Traits\UseUUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EcoRegion extends Model
{
    use HasFactory;
    use UseUUID;
    public $incrementing=false;
    public $guarded =['id'];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
