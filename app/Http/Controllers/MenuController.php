<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\MenuCategory;

class MenuController extends Controller
{
    public function index() {
        
        $menuList = MenuCategory::with('MenuItems')->groupBy('name')->get();
        
        return view('menu', ['menuList' => $menuList]);
    }
}
