<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    private $baseUrl;

    public function __construct()
    {
        $baseUrl = 'http://192.168.0.173:8888/api/';
    }



    public function api($data, $method = null, $path = null, $token = null)
    {
        $baseUrl = 'http://192.168.0.173:8888/api/';
        // dd($token);
        try {
            $client = new Client();
            $headers = [
              'Authorization' => 'Bearer '.$token,
              'Content-Type' => 'application/x-www-form-urlencoded',
              'Cookie' => 'jwt='.$token
            ];
            $options = [
                'form_params' => $data
            ];

            $req = new Request($method, $baseUrl.$path, $headers);
            $res = $client->sendAsync($req, $options)->wait();

        } catch (\GuzzleHttp\Exception\ClientException $e) {
            return $e;
        }
        return $res;

        // Lakukan sesuatu dengan response dari API
    }

    public function cekLogin()
    {
        if (session()->has('token')) {
            return true;
        } else {
            return false;
        }

    }

}
