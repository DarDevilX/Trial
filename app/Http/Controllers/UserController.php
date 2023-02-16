<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Policies\UserPolicy;
use PhpParser\Builder\Class_;

class UserController extends Controller
{
    public function register(Request $req)
    {
        $user = User::create($req->all());

        if ($user) {
            return 200;
        }
    }

    public function getData(Request $req)
    {
        $this->authorize('isAdmin', $req->id);
    }

}
