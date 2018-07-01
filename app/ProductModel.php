<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;

class ProductModel extends Model
{
    //
    public function getProductsForHome(){
		$products = DB::table('products')
						->join('products_price', 'products.product_id', '=', 'products_price.product_id')
						->where('products.to_home', 'to_home')
						->get();
		
		return $products;
	}
	
	public function getProduct($id){
		$product = DB::table('products')
						->join('products_price', 'products.product_id', '=', 'products_price.product_id')
						->join('categories', 'products.category_id', '=', 'categories.category_id')
						->join('products_desc', 'products.product_id', '=', 'products_desc.product_id')
						
						->join('product_meta', 'products.product_id', '=', 'product_meta.product_id')
						
						->where('products.product_id', $id)
						->get();
		
		return $product;
	}
	
	
	
	public function getSearchProducts($search){
		$product = DB::table('products')
						->join('products_price', 'products.product_id', '=', 'products_price.product_id')
						->join('categories', 'products.category_id', '=', 'categories.category_id')
						->join('products_desc', 'products.product_id', '=', 'products_desc.product_id')
						->where('products.product_name', 'like', '%' . $search . '%')
						->get();
		
		return $product;
	}
	
	
	
	
	
	
	public function getProductsCategory($category_id, $min = false, $max = false){
		/*$products = DB::table('products')
						->join('products_price', 'products.product_id', '=', 'products_price.product_id')
						->where('products.category_id', $category_id)
						->get();*/
		
		
		/*$products = DB::select('SELECT * FROM `products` 
								INNER JOIN `products_price` ON `products_price`.product_id = `products`.product_id 
								WHERE products.category_id = ?
								AND products_price.price>=? 
								AND products_price.price<=? ', [$category_id, $min, $max]);
		*/
		
		$query = '';
		$query .= 'SELECT * FROM `products` INNER JOIN `products_price` ON `products_price`.product_id = `products`.product_id WHERE products.category_id = ? AND products_price.price>=10 AND products_price.price>=0 ';
		
		if(!empty($min)){
			$query .= 'AND products_price.price>=' . $min . ' ';
		}else{
			$query .= 'AND products_price.price>=0 ';
		}
		if(!empty($max)){
			$query .= 'AND products_price.price<=' . $max . ' ';
		}else{
			$query .= 'AND products_price.price<=100000000000 ';
		}
		
		
		$products = DB::select($query, [$category_id]);
		
		
		return $products;
	}
	
	public function getProductsIp(){
		
		$products = DB::table('products_cart')
							->join('products', 'products.product_id', '=', 'products_cart.product_id')
							->join('products_price', 'products_price.product_id', '=', 'products_cart.product_id')
							->where('products_cart.ip_client', $_SERVER['REMOTE_ADDR'])
							->get();
		
		return $products;
	}
	
	public function getCountProducts(){
		
		$productsCount = DB::table('products_cart')
							->where('ip_client', $_SERVER['REMOTE_ADDR'])
							->count();
		
		return $productsCount;
		
	}
	
	
	
	
	public function addProductToCart($id, $count, $ip){
		
		$count_row = DB::table('products_cart')
							->where('ip_client', $ip)
							->where('product_id', $id)
							->count();
		
		if($count_row == 0){
			DB::table('products_cart')
							->insert(['ip_client' => $ip, 'product_id' => $id, 'product_count' => $count]);
		}else{
			$resQuery = DB::table('products_cart')
							->where('product_id', $id)
							->get();
			$countProduct = $resQuery[0]['product_count'];
			
			DB::table('products_cart')
							->where('product_id', $id)
							->update(['product_count' => ($countProduct+$count)]);
			
		}
		
		
		
	}
	
	
	
	
	
	
	public function deleteProductFromCart($id, $count, $ip){
		
		$var = $id . ' - ' . $count . ' - ' . $ip;
		
		DB::table('products_cart')->where('ip_client', $ip)->where('product_id', $id)->delete();
		
		
		$products = $this->getProductsIp();
		
		$contentBlock = '';
		
		foreach($products as $product){
			$contentBlock .= '<div class="product col-lg-8 col-md-8 col-sm-8 col-xs-8" >';
				$contentBlock .= '<form>';
				$contentBlock .= '<p class="name_product col-lg-7 col-md-7 col-sm-7 col-xs-7"><a href="product/' . $product['id'] . '">' . $product['product_name'] . '</a></p>';
				$contentBlock .= '<p class="prise_product col-lg-2 col-md-2 col-sm-2 col-xs-2">' . $product['price'] . ' грн/т</p>';
				$contentBlock .= '<p class="count_product col-lg-2 col-md-2 col-sm-2 col-xs-2">';
				$contentBlock .= 	'<input class="minus_button_order" type="button" name="minus" value="-" />';
				$contentBlock .= 	'<input class="count_text_order" type="text" name="text_count" value="' . $product['product_count'] . '" />';
				$contentBlock .= 	'<input class="plus_button_order" type="button" name="plus" value="+" />';
				$contentBlock .= '</p>';
				$contentBlock .= '<p class="to_product col-lg-1 col-md-1 col-sm-1 col-xs-1">';
				$contentBlock .= 	'<input class="thisProductId" type="hidden" value="' . $product['id'] . '" />';
				$contentBlock .= 	'<input class="delete_position" type="submit" name="deletePosition" value="X" />';
				$contentBlock .= '</p>';
				$contentBlock .= '</form>';
			$contentBlock .= '</div>';
		}

		
		
		return $contentBlock;
		
	}
	
	
}
