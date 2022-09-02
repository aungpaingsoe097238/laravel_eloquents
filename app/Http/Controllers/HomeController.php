<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function profile($id)
    {

        $user = User::findOrFail($id);
        return $user->profile;
    }
}
