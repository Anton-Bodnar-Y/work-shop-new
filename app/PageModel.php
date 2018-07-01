<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;

class PageModel extends Model
{
    //
    public function getPages(){
		$pages = DB::table('pages')
						->get();
		
		return $pages;
	}
	
	public function getPage($page_id){
		$page = DB::table('pages')
						->where('page_id', $page_id)
						->get();
		
		return $page;
	}
	
}
