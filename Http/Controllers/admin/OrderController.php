<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
     public function index()
    {
        $orders = order::with('user')->latest()->get();
        return view('admin.order.order', compact('orders'));
    }


    public function show($id)
    {
        $order = Order::findOrFail($id);
        return view('admin.order.showOrder', compact('order'));
    }


    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();
        return redirect()->back()->with('success', 'Order deleted successfully.');
    }
}
