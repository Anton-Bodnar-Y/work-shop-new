<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Http\Response;



use App\Http\Requests\CategoryRequest;


/**
* MODELS
*/
use App\CategoryModel;
use App\ProductModel;
use App\PageModel;



class CategoryController extends Controller
{
    //
    public function getCategoryProducts($category_id, $min = false, $max = false){
		
		if(view()->exists('category')){
			
			
			/*
			* get categories for filter
			**/
			$categoryModel = new CategoryModel;
			$categories = $categoryModel->getIndex();
			
			
			/*
			* get this category
			**/
			$category = $categoryModel->getCategory($category_id);
			
			
			/*
			* get products for category
			**/
			$productModel = new ProductModel;
			$products = $productModel->getProductsCategory($category_id, $min, $max);
			
			
			/*
			* get pages for footer
			**/
			$pagesModel = new PageModel;
			$pages = $pagesModel->getPages();
			
			
			/*
			* call view
			**/
			$view = view('category', [
									'categories' => $categories, 
									'category' => $category, 
									'products' => $products,  
									'pages' => $pages,
								])->withTitle($category[0]['meta_title'])
								->withDescription($category[0]['meta_desc'])
								->withKeywords($category[0]['meta_keyword'])
								->render();
			
			return (new Response($view))->header('charset', 'utf-8');
			
			
		}
		
	}
	
	
	public function getCategoryProductsPrice(CategoryRequest $request){
		//dump($request->all());
		$route = '';
		$route .= 'category/' . $request->category;
		
		if(!empty($request->prise_min)){
			$route .= '/' . $request->prise_min;
		}else{
			$route .= '/' . '0';
		}
		
		
		if(!empty($request->prise_max)){
			$route .= '/' . $request->prise_max;
		}
		
		
		
		//dump($route);
		return redirect($route);
		
	}
	
	
	
}
