<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Http\Response;



/**
* MODELS
*/
use App\CategoryModel;
use App\ProductModel;
use App\PageModel;



class OrderController extends Controller
{
    //
    public function getIndex(){
    	
		
		if(view()->exists('order')){
			
			//return '!!!!!!!!!!';
			
			/*
			* get categories
			**/
			$categoryModel = new CategoryModel;
			$categories = $categoryModel->getIndex();
			
			
			/*
			* get pages all
			**/
			$pagesModel = new PageModel;
			$pages = $pagesModel->getPages();
			
			
			/*
			* get product for ip
			**/
			$ProductModel = new ProductModel;
			$products = $ProductModel->getProductsIp();
			
			
			/*
			* call view
			**/
			$view = view('order', [
									'categories' => $categories,  
									'pages' => $pages,
									'products' => $products,
								])->withTitle('Главная')
								->withDescription('Главная Description')
								->render();
			
			return (new Response($view))->header('charset', 'utf-8');
			
			
		}
		
	}
	
	
	
	
	
	public function orderRealization(){
    	
		return '!!!!!!!!!!';
		
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}
