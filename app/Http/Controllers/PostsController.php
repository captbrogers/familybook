<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\User;
use App\Events\NewPostEvent;

class PostsController extends Controller
{
    public function __construct()
    {
        //
    }

    public function store(Request $request)
    {
        $user = auth()->user();
        $otherUserIds = User::whereNotIn('uid', [$user->uid])->get()->implode('uid', '-');
        $key = hash('sha256', $otherUserIds);
        $post = Post::create([
            'user_uid' => $user->uid,
            'body' => $request->input('body'),
        ]);
        event(new NewPostEvent($user, $post, $key));

        return response()->json(['message' => 'Post successfully saved!']);
    }
}
