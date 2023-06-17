<?php

namespace App\Http\Responses;

use Illuminate\Support\Facades\Session;
use App\Models\User;
use Laravel\Fortify\Fortify;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{
    /**
     * Create an HTTP response that represents the object.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function toResponse($request)
    {
        if(auth()->user()->is_admin){
            $user= User::findOrFail(auth()->user()->id);
            session::put('utilisateur', $user);
            return $request->wantsJson()
                    ? response()->json(['two_factor' => false])
                    : redirect()->route('admin');
    } else{
        $user= User::findOrFail(auth()->user()->id);
        session::put('utilisateur', $user);
        return $request->wantsJson()
        ? response()->json(['two_factor' => false])
        : redirect()->route('dashboard');
    }
}
}
