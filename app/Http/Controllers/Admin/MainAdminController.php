<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Response;


use Auth;

class MainAdminController extends Controller
{
    //
    public function __construct(){
		//$this->middleware('auth');
	}
	
	
	
    public function getIndex(){
    	
		if(view()->exists('admin-html/main')){
			
			
			
			if(Auth::check()){
				$user = Auth::user();
				//dump($user);
			}
			
			
			
			
			
			/*
			* call view
			**/
			$view = view('admin-html/main', [
								])->withTitle('Админка')
								->withDescription('Главная Description')
								->render();
			
			return (new Response($view))->header('charset', 'utf-8');
			
			
		}
		
	}
}


