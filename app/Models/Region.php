<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $table = "regions";
    protected $primaryKey = "region_id";

    use HasFactory;

    public function pais(){
        return $this->hasMany(Country::class , 'region_id');
    }
}
