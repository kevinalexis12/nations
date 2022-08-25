<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Languages extends Model
{
    protected $table = "languages";
    protected $primaryKey = "language_id";

    use HasFactory;

    Public function paises(){
        return $this->belongstoMany(Country::class , 'country_languages' , 'language_id' , 'country_id')->withPivot('official');
    }
}
