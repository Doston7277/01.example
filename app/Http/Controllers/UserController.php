<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    
    public function update_form($id){

        $user = User::where('id', $id)->first();
        return view('backend.user.update', [ 'user' => $user ]); 
    }

    //******CRUD and Detail */

    public function index(){

        $user = User::paginate(5);
        return view('backend.user.index', [ 'users' => $user ]);
    }

    public function update(Request $request){

        $user = User::where('id', $request->id)->first();

        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->user_type = $request->get('user_type');

        $user->save();

        return redirect('/admin/user');
    }

    public function delete($id){
        
        User::Where('id', $id)->delete();
        return redirect('/admin/user');
    }
}
