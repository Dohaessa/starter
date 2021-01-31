<?php

namespace App\Http\Controllers\Front;


use Illuminate\Routing\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;

use stdClass;

class UserController extends Controller
{
    public function showUserName(){
        return 'Dohan Essa';
    }

    public function getIndex(){

    //     $data=[];
    // $data['id']=5;
    // $data['name']='doha essa';

    // $obj= new stdClass();
    // $obj->name='ahmed';
    // $obj->id='5';
    // $obj->gender='male';


    $data=[];

    return view('welcome',compact('data')) ;
    // return view('welcome', $data) ;
        // return view('welcome');
    }


}
