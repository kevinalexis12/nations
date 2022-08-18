<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    
    protected $table = "countries";
    protected $primaryKey = "country_id";

    use HasFactory;

    public function region(){

        return $this->belongsto(Region::class , 'country_id');
    } 
    Public function idiomas(){
return $this->belongstoMany(Languages::class , 'country_languages' , 'country_id' , 'language_id');
    }
}
