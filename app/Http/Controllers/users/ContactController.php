<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacts;

class ContactController extends Controller
{
   public function contactstore(Request $request){

       $data = $request->validate([
    'name' => 'required',
    'email' => 'required|email|unique:contacts,email',
    'phone' => ['required','regex:/^(010|011|012|015)[0-9]{8}$/'],
    'message' => 'required'
]);

Contacts::create($data); // 

return redirect()->route('home')->with('success','Submitted successfully');

       
    }
}
