<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MenuCategory;

class MenuCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index() {
        $categories = MenuCategory::all();

        return view('dashboard.menu-categories', ['categories' => $categories]);
    }

    public function create() {
        return view('dashboard.create-menu-category');
    }

    public function store() {

        MenuCategory::create(request()->validate([
            'name' => 'required'
        ],[
            'name.required' => 'Category name is required'
        ]));

        return redirect('dashboard/menu-categories');

    }

    public function destroy(MenuCategory $id) {
        $id->delete();
        return redirect()->back();
    }
}
