<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function create(){
       // $customers= User::get();
        return \view('admin.createUser');
    }
    public function show() {
    
    $users = User::where('role', '!=', 'admin')->get();

    return view('admin.user', compact('users'));
}


      public function profile(){
    $users = User::where('role', 'admin')->get();

    return view('admin.profile', compact('users'));
}





      public function store(UserRequest $request){
        $data=$request->validated();
        $data['password'] = bcrypt($data['password']);
        User::create($data) ;
      return redirect()->back()->with('msg','add sucssesfuly');
         
    }
     public function prest($id){

     $data= User::findorfail($id);
     return view('admin.showUser',\compact('data'));
    }
     
    public function edit($id){

     $data= User::findorfail($id);
     return view('admin.editUser',\compact('data'));
    }

      public function editadmin($id){

     $data= User::findorfail($id);
     return view('admin.profileupdate',\compact('data'));
    }





public function update(UserRequest $request,$id){
        $data=$request->validated();
        $user= User::findorfail($id);
        $data['password'] = bcrypt($data['password']);
        $user->update($data) ;
      return redirect()->back()->with('msg','updated sucssesfuly');
         
    }

    public function destroy($id){

     $data= User::findorfail($id);
     $data->delete();
     return redirect()->route('show')->with('msg', 'Deleted successfully');

    }
}
