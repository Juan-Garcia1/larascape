<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MenuItem;
use App\MenuCategory;

class MenuItemController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index() {
        $menuItems = MenuItem::orderBy('name')->simplePaginate(8);

        return view('dashboard.menu-items', ['menuItems' => $menuItems]);
    }

    public function create() {
        $categories = MenuCategory::get()->sortBy('name');

        return view('dashboard.create-menu-item', ['categories' => $categories]);
    }

    public function store() {
        MenuItem::create(request()->validate([
            'name' => 'required',
            'price' => 'required',
           'description' => 'required',
           'category_id' => 'required|notIn:0'
        ],[
            'category_id.required' => 'The category field is required.' 
        ]));
        return redirect('dashboard/menu-items');
    }

    public function edit(MenuItem $id) {        
        return view('dashboard.edit-menu-item', ['menuItem' => $id]);
    }

    public function update(MenuItem $id) {

        $id->update(request()->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]));

            return redirect('dashboard/menu-items');
    }

    public function destroy(MenuItem $id) {
        $id->delete();

        return redirect()->back();
    }
}
