<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller
{
    public function showProfile(User $user){

        return Inertia::render('UserDashboard', [
            'user' => $user,
            'posts' => PostResource::collection($user->posts),
            'pats' => $user->pats
        ]);
    }

    public function showPost(User $user, Post $post){

        return Inertia::render('UserDashboard', [
            'user' => $user,
            'posts' => PostResource::collection([$post]),
            'pats' => $user->pats
        ]);
    }
}
