<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{


    public function index()
    {
        if (!$this->cekLogin()) {
            return redirect('/login');
        }

        $token = explode(';',session('token'));
        $token = explode('=',$token[0]);
        $token = str_replace(" ","",$token[1]);

        $Api = $this->api(null, 'GET', 'redirect', $token);
        // dd($Api);
        return view('pages.dashboard');
    }
}
