<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class profileController extends Controller
{
    //
    public function index($name = 'Guest')
    {
    	$user = Auth::user();
    	if($user->verified == 0)
    	{
    		return view('verification',['username'] => $user->user_id);
    	}else{
    		return view('profile',['name' => $user->user_id]);
    	}
    }
}
