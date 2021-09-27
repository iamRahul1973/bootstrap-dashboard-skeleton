<?php

namespace IamRahul1973\Skeleton\Http\Responses;

use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Http\Responses\LoginResponse as ResponsesLoginResponseContract;

class LoginResponse extends ResponsesLoginResponseContract
{
    public function toResponse($request)
    {
        $redirectTo = Auth::user()->hasRole('admin') ? '/admin' : config('fortify.home');

        return $request->wantsJson()
            ? response()->json(['two_factor' => false])
            : redirect()->intended($redirectTo);
    }
}
