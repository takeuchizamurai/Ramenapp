<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    
    public function getData(){
        //return $this->id . ': ' . $this->name . ' (' . $this->price . '円)';
        return $this->restaurant->name; 
    }
    
    public function restaurant(){
        return $this->belongsTo('App\Restaurant');//主テーブル(restaurants)との関連付け
    }
}    

