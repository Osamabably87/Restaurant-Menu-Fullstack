<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    
    public function store(Request $request){

        $data = $request -> validate([
            'name' => 'required',
            'email' => ['required','email','unique:orders,email'],
            'phone' => ['required','regex:/^(010|011|012|015)[0-9]{8}$/'],
             'Address' => ['required'],
            'meal' => ['required'],
            // 'count_of_meals' => ['required']
        ]);

        $order = new Order();
         
        $order -> name = $request -> name;
        $order -> email = $request -> email;

        $order -> phone = $request -> phone;
         $order -> Address = $request -> Address; 
        $order -> meal = $request -> meal;
        // $order -> total_amount = $request -> count_of_meals;
        // $order -> notes = $request -> notes;

        $order -> save();

        return redirect() -> route('order')->with('ssucces','ordered successfully');
    }
    
} 
?> 