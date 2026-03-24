<?php

namespace App\Http\Controllers\users;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\order;
class ordercreateController extends Controller
{public function store(Request $request)
    {
        $request->validate([
            'name'   => 'required',
            'email'  => ['required','email'],
            'phone'  => ['required','regex:/^(010|011|012|015)[0-9]{8}$/'],
            'Address'=> ['required'],
            'meal'   => ['required'],
            // 'count_of_meals' => ['nullable'],
            // 'notes' => ['nullable'],
        ]);

        $order = new Order();
          

        $order->user_id = Auth::id(); 
        $order->name = $request->name;
        $order->email = $request->email;
        $order->phone = $request->phone;
        $order->Address = $request->Address;
        $order->meal = $request->meal;

        $order->save();

        return redirect()->route('order')->with('msg','Ordered successfully');
    }
}
