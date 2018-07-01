<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Response;

use App\AdminProductModel;

class ProductsAdminController extends Controller
{
    //
    public function getIndex(){
		
		if(view()->exists('admin-html/products')){
			
			
			
			$AdminProductModel = AdminProductModel::get();
			//dump($AdminProductModel);
			
			
			
			
			/*
			* call view
			**/
			$view = view('admin-html/products', [
								'AdminProductModel' => $AdminProductModel, 
								])->withTitle('Новости')
								->withDescription('Новости Description')
								->render();
			
			return (new Response($view))->header('charset', 'utf-8');
			
			
		}
		
		
	}
}
