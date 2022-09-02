<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function profile($id)
    {
        $user = User::findOrFail($id);
        return $user->profile;
    }

    public function posts($id){
        $user = User::findOrFail($id);
        return $user->posts;
    }

    public function whoOwnPost($id){
        $post = Post::findOrFail($id);
        return $post->user;
    }

}
