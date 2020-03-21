<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\MenuItem;
use App\MenuCategory;

class Dashboard extends Model
{
    public function scopeTotalItems() {
        return MenuItem::count();
    }

    public function scopeTotalCategories() {
        return MenuCategory::count();
    }
}
