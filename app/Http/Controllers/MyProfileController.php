<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MyProfileController extends Controller
{
    public function index() {
       $posts = DB::table('posts')
        ->join('users', 'posts.user_id', '=', 'users.id')
        ->select('posts.*', 'users.name as user_name', 'users.photo as user_photo')
        ->where('posts.user_id', '=', Auth::id())
        ->get()->whereNull('deleted_at');
        return view('my-profile',compact('posts'));
    }
}
