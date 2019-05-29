<?php

namespace App;

use App\Promotion;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;
    protected $guarded=[];


    public function promotion(){
        return $this->belongsTo(Promotion::class)->withDefault();
    }

    public function scopeName($query, $name){
        if($name){
            return $query->where('name', 'ilike', "%$name%"); //ilike para postgress
        }
    }
}
