<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Post;
use App\Models\Tag;
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

    public function getAllPostComments($id){
        $post = post::findOrFail($id);
        return $post->comments;
    }

    public function getAllTags($id){
        $post = post::findOrFail($id);
        return $post->tags;
    }

    public function createTags($id){
        $post = post::findOrFail($id);
        return $post->tags()->attach(['1','2']);
    }

    public function getAllPosts($id)
    {
        $tag = Tag::findOrFail($id);
        return $tag->posts;

    }

    public function getAllPostWithPhoto($id){
        $photo = Photo::findOrFail($id);
        return $photo->posts;
    }

}
