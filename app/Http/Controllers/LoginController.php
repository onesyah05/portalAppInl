<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginWithApi(request $request)
    {

        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];

        $apiResponse = $this->api($data, 'POST', 'login', null);

        if (!method_exists($apiResponse, 'getStatusCode')) {
            return back()->withErrors(['msg' => $apiResponse->getMessage()])->withInput();
        }

        if ($apiResponse->getStatusCode() == 200) {
            $token = $apiResponse->getHeaders()["Set-Cookie"][0];
            session([
                'email' => $request->email,
                'token' => $token
            ]);
            return redirect('/dashboard');
        } else {
            return back()->withErrors(['msg' => 'Invalid email or password.'])->withInput();
        }
    }
}
