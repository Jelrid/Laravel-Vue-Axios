<?php

namespace App\Http\Controllers;

use App\Models\DetailOrders;
use App\Models\Orders;
use Illuminate\Http\Request;
use Inertia\Inertia;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            $orders = Orders::orderBy('index', 'desc')->get();
            $ordersDetail = DetailOrders::orderBy('id','desc')->get();
            return Inertia::render('Dashboard',['orders' => $orders, 'ordersDetail' => $ordersDetail]);   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $orderId, $index)
    {
       
    }
    public function updateIndex(Request $request, string $orderId, $index)
    {
        $order = Orders::findOrFail($orderId);
        $currentIndex = $order -> index;
        $sum = $currentIndex + $index;
        $order->index = $sum;
        $order -> save();

        return response()->json('Заказ успешно изменил позицию !!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $orderId)
    {
        $order = Orders::findOrFail($orderId);
        $order->delete();

        return response()->json('Заказ успешно удален !!');
    }
}
