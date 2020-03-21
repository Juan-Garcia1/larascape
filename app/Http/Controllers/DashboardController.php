<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dashboard;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index() {
        $totalMenuItems = Dashboard::TotalItems();
        $totalCategories = Dashboard::TotalCategories();
        return view('dashboard.index', ['totalMenuItems' => $totalMenuItems, 'totalCategories' => $totalCategories]);
    }
}
