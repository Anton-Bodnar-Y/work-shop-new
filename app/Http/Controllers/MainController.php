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





class MainController extends Controller
{
    //
    public function getIndex(){
		
		if(view()->exists('main')){
			
			
			
			/*
			* get categories
			**/
			$categoryModel = new CategoryModel;
			$categories = $categoryModel->getIndex();
			
			
			
			/*
			* get products for home
			**/
			$productModel = new ProductModel;
			$products = $productModel->getProductsForHome();
			
			
			/*
			* get pages for home
			**/
			$pagesModel = new PageModel;
			$pages = $pagesModel->getPages();
			
			
			
			/*
			* call view
			**/
			$view = view('main', [
									'categories' => $categories, 
									'products' => $products,  
									'pages' => $pages,
								])->withTitle('Интернет-магазин компании Хаском-Трейд - купить посевной материал')
								->withDescription('Интернет-магазин компании Хаском-Трейд - купить посевной материал с доставкой по Украине')
								->withKeywords('Купить посевной материал, купить семена озимых, семена яровых, посевной материал оптом')
								->render();
			
			return (new Response($view))->header('charset', 'utf-8');
			
			
		}
		
	}
}
