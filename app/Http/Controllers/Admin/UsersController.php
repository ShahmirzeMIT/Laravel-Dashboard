<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class UsersController extends Controller
{
  public function index(){
    $user=User::all();
    return view('admin.users.users',compact('user'));
  }

  public function edit($user_id){
    $user=User::find($user_id);
    return view('admin.users.user-edit',compact("user"));
  }

  public function update(Request $request, $user_id){
    $user=User::find($user_id);
    if($user){
      $user->role_as=$request->role_as;
      $user->update();
      return redirect('admin/users')->with('status','User updated succesfully');
    }  
    return redirect('admin/users')->with('status','No User Found');

  }
}
