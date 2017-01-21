<?php

namespace App\Http\Controllers;

use App\User;
use App\Transformers\UserTransformer;
use App\Http\Requests\StoreUserRequest;

class RegisterController extends Controller
{
    public function response()
    {
    }

    public function register(StoreUserRequest $request)
    {
        $user = new User;
        $user->create($request->except('password_confirmation'));
        return $this->response()->item($user , new UserTransformer());
    }
}
