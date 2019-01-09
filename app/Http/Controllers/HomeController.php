<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $otherUserIds = User::whereNotIn('uid', [auth()->user()->uid])->get()->implode('uid', '-');
        $key = hash('sha256', $otherUserIds);
        $data = [
            'posts' => Post::with('user')->get(),
            'keys' => ['posts' => $key],
        ];
        return view('home')->with($data);
    }
}
