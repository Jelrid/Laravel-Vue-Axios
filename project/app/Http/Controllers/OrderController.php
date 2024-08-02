<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;
use Inertia\Inertia;

class OrderController extends Controller
{
    public function index(){
        $orders = Orders::orderBy('index', 'desc')->get();
        return Inertia::render('Dashboard',[]);
    }
}
