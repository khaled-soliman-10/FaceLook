<?php

namespace App\Http\Controllers;

use App\Http\Requests\addPost;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = DB::table('posts')
            ->join('users', 'posts.user_id', '=', 'users.id')
            ->select('posts.*', 'users.name as user_name', 'users.photo as user_photo')
            ->where('posts.user_id', '=', Auth::id())
            ->whereNotNull('posts.deleted_at') // جلب البوستات المحذوفة فقط
            ->get();
        return view('trashed',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add-post');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(addPost $request)
    {
        if ($request->hasFile('photo')) {
            // رفع الصورة وحفظها في مجلد 'public/images'
            $imagePath = $request->file('photo')->store('images','public');
        } else {
            $imagePath = null; // إذا لم يتم رفع صورة
        }
        post::create([
            'title' => $request->validated()['title'],
            'photo' => $imagePath,
        ]);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Post::where('id', $id)->delete();
        return redirect('my/profile');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function forceDelete(string $id)
    {
        Post::where('id', $id)->forceDelete();
        return redirect('trashed/posts');
    }

    /**
     * restore the specified resource from storage.
     */
    public function restore(string $id)
    {
        Post::where('id', $id)->restore();
        return redirect('trashed/posts');
    }
}


