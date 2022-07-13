<?php

namespace App\Models;

use App\Constant\Constant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $filables = ['title', 'description','type','image'];


    public function getTypeAttribute($value){
        foreach (Constant::$aboutTypes as $key => $aboutVal){
            if($key == $value){
                return $aboutVal;
            }
        }
    }
}
