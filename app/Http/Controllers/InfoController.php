<?php

namespace App\Http\Controllers;

use App\Http\Requests\updateInfo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class InfoController extends Controller
{
    public function index(){
//        $myData = User::find(auth()->id());
//        return view('info',compact('myData'));
    }

    public function edit(string $id) {
        $myData = User::find($id);
        return view('info',compact('myData'));
    }

    public function update(updateInfo $request,string $id){
        $data = $request->validated();

        if ($request->password == ''){
            $data = $request->except('password','_token','_method','password_confirmation');
            User::where('id',$id)->update($data);
        }else {
            $request->validate([
                'password' => 'nullable|string|min:8|confirmed',
            ]);
            $data['password'] = Hash::make($data['password']);
            User::where('id',$id)->update($data);
        }

        return redirect('/');
    }
}
