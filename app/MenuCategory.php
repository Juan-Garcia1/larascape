<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuCategory extends Model
{
    public $timestamps = false;

    protected $fillable = ['name'];

    public function menuItems() {
        return $this->hasMany('App\MenuItem', 'category_id');
    }
}
