<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Http\Response;



use App\PageModel;
use App\CategoryModel;



class PageController extends Controller
{
    //
    public function getPage($id){
    	
		
		if(view()->exists('page')){
			
			
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
			* get page
			**/
			$page = $pagesModel->getPage($id);
			
			
			/*
			* call view
			**/
			$view = view('page', [
									'categories' => $categories,  
									'pages' => $pages,
									'page' => $page,
								])->withTitle($page[0]['meta_title'])
								->withDescription($page[0]['meta_desc'])
								->withKeywords($page[0]['meta_keyword'])
								->render();
			
			return (new Response($view))->header('charset', 'utf-8');
			
			
		}
		
	}
}
