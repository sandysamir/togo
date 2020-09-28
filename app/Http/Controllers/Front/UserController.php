<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;

class UserController extends Controller
{


public function getindex(){
    // $obj = new \stdClass();
    // $obj->name='sandy';
    // $obj->age=21;
    // $obj->gender='female';
    $data=['sandy','asmaa','fatma'];
    return view('welcome',compact('data'));
}}