<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Webpatser\Uuid\Uuid;

class UsersController extends Controller
{
    public function viewUser(){
        $data['users'] = User::all();
        return view('user', $data);
    }
    public function addUser(Request $request){
        request()->validate([
            'name' => 'required',
            'email' => 'required',
            'department' => 'required',
            'password' => 'required',
            'level' => 'required',
        ]);

        $user = new User();
        $user->unique_id = Uuid::generate();
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->dept = $request->get('department');
        $user->password = Hash::make($request->get('password'));
        $user->level = $request->get('level');

        $user->save();

        return redirect()->route('viewUser')
            ->with('success','Successfully Added User.');
    }
}
