<?php

namespace App\Http\Controllers\users;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\Contacts;
use App\Models\User;

class concatController extends Controller
{
   public function contactstore(Request $request){
    $data = $request->validate([
        'name' => 'required',
        'email' => 'required|email|',
        'phone' => ['required','regex:/^(010|011|012|015)[0-9]{8}$/'],
        'message' => 'required'
    ]);

    $data['user_id'] = Auth::id();

    Contacts::create($data);

   return redirect()->back()->with('msg', 'Submitted successfully');

}


}
