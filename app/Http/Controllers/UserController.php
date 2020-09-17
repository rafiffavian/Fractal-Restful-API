<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\User;
use App\Transformers\UserTransformer;
use Auth;

class UserController extends Controller
{
    public function users(User $user)
    {
        $users = $user->all();
        // return response()->json($users);
        return fractal()
            ->collection($users)
            ->transformWith(new UserTransformer)
            ->toArray();
    }
    
    public function profile(User $user)
    {
        $users = $user->find(Auth::user()->id);

        return fractal()
            ->item($users)
            ->transformWith(new UserTransformer)
            ->includePosts()
            ->toArray();
    }

    public function profileById(User $user, $id)
    {
        $users = $user->find($id);

        return fractal()
            ->item($users)
            ->transformWith(new UserTransformer)
            ->includePosts()
            ->toArray();
    }
}
