<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    public $timestamps = false;

    protected $fillable = ['name', 'price', 'description', 'category_id'];
}
