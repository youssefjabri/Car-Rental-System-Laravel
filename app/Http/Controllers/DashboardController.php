<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Order; 

class DashboardController extends Controller
{
    public function index()
    {
        $userCount = User::count();
        $carCount = Product::count();
        // $revenue = Order::sum('amount');
        $newRegistrations = User::where('created_at', '>=', now()->subDays(30))->count();
        return view('dashboard', compact('userCount', 'carCount', 'newRegistrations'));
    }
}
