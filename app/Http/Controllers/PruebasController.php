<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;    

class PruebasController extends Controller
{

public function validarlogin(Request $request){
$user = $request->input('user');
$pass = $request->input('pass');
$key = hash::make ($request->input('key'));

if ($user === 'Jose.Alvz'){
    $url='dashboard';
} else {
    $url='login';
}

return view($url,[
    'user'=>$request->input('user'),
    'key'=>$key
]);
}
public function login(){
return view('login');
}

}
