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


class ProductController extends Controller
{
    //
    public function getProduct($id){
    	
		
		if(view()->exists('product')){
			
			
			
			/*
			* get categories
			**/
			$categoryModel = new CategoryModel;
			$categories = $categoryModel->getIndex();
			
			
			
			/*
			* get product
			**/
			$productModel = new ProductModel;
			$product = $productModel->getProduct($id);
			
			
			/*
			* get pages for home
			**/
			$pagesModel = new PageModel;
			$pages = $pagesModel->getPages();
			
			
			
			/*
			* call view
			**/
			$view = view('product', [
									'categories' => $categories, 
									'product' => $product,  
									'pages' => $pages,
								])->withTitle($product[0]['meta_title'])
								->withDescription($product[0]['meta_desc'])
								->withKeywords($product[0]['meta_keyword'])
								->render();
			
			return (new Response($view))->header('charset', 'utf-8');
			
			
		}
		
	}
	
	
	
	
	
	public function countProductsInCart(){
    	
		$productModel = new ProductModel;
		$productsCount = $productModel->getCountProducts();
		
		return $productsCount;
		
	}
	
	
	public function addProductToCart(Request $request){
    	
    	$ProductModel = new ProductModel;
		$ProductModel->addProductToCart($request->ProductId, $request->countProduct, $_SERVER['REMOTE_ADDR']);
		
	}
	
	
	
	
	public function deleteProductFromCart(Request $request){
    	
    	$ProductModel = new ProductModel;
    	$res = $ProductModel->deleteProductFromCart($request->thisProductId, $request->count_text, $_SERVER['REMOTE_ADDR']);
    	return $res;
		
	}
	
	
	public function getSearchProducts(Request $request){
    	
		if(view()->exists('search')){
			
			
			
			/*
			* get categories
			**/
			$categoryModel = new CategoryModel;
			$categories = $categoryModel->getIndex();
			
			
			
			/*
			* get product
			**/
			$productsModel = new ProductModel;
			$products = $productsModel->getSearchProducts($request->search_text);
			
			
			
			/*
			* get pages for home
			**/
			$pagesModel = new PageModel;
			$pages = $pagesModel->getPages();
			
			
			
			/*
			* call view
			**/
			$view = view('search', [
									'categories' => $categories, 
									'products' => $products, 
									'pages' => $pages, 
									'search' => $request->search_text, 
								])->withTitle('Главная')
								->withDescription('Главная Description')
								->render();
			
			return (new Response($view))->header('charset', 'utf-8');
			
			
		}
		
	}
	
	
	
	
	
	
}
