<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    /*public function getData(){
        return $this->id . ': ' . $this->name . ' (' . $this->address . ')'; 
    }
    */

    public function menus(){
        return $this->hasMany('App\Menu');//従テーブル（menus）との関連付け
    }
}
