<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;

class CategoryModel extends Model
{
    //
    public function getIndex(){
		$categories = DB::table('categories')->get();
		
		return $categories;
	}
	
	public function getCategory($category_id){
		$category = DB::table('categories')
						->join('categoty_meta', 'categoty_meta.category_id', '=', 'categories.category_id')
						->where('categories.category_id', $category_id)
						->get();
		
		return $category;
	}
	
}
