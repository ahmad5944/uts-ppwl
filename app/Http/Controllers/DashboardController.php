<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dashboard(Request $request)
    {
        $productCount = Product::with('category')
            ->count();

        $categoryCount = Category::with('category')
            ->count();
        return view('dashboard', compact('productCount', 'categoryCount'));
    }
}
