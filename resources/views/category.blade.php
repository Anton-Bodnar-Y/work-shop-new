<?php

//dump($categories);
//dump($products);
//dump($category);
//dump($pages);
?>



@extends('templates.index')





@section('header')
	@parent
@endsection





@section('content')
	<div id="content" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		
		<span class="broad"><a href="{{ route('main') }}"><span class="glyphicon glyphicon-home"></span></a> >> {{ $category[0]['category_name'] }}</span>
		
		@foreach($products as $product)
		<div class="product col-lg-12 col-md-12 col-sm-12 col-xs-12" >
			<p class="name_product col-lg-4 col-md-4 col-sm-4 col-xs-4"><a href="/product/{{ $product['product_id'] }}">{{ $product['product_name'] }}</a></p>
			<p class="prise_product col-lg-2 col-md-2 col-sm-2 col-xs-2">{{ $product['price'] }} грн/т</p>
			
			
			<form>
			<p class="count_product col-lg-2 col-md-2 col-sm-2 col-xs-2">
				<input class="minus_button" type="button" name="minus" value="-" />
				<input class="count_text" type="text" name="text_count" value="1" />
				<input class="plus_button" type="button" name="plus" value="+" />
			</p>
			<p class="to_cart col-lg-2 col-md-2 col-sm-2 col-xs-2">
				<input class="thisProductId" type="hidden" value="{{ $product['product_id'] }}" />
				<input class="to_cart_btn" type="submit" name="to_cart_btn" value="В корзину" />
			</p>
			</form>
			
			
			<p class="to_product col-lg-2 col-md-2 col-sm-2 col-xs-2">
				<a href="/product/{{ $product['product_id'] }}">Подробнее &#160;<span class="glyphicon glyphicon-arrow-right"></span></a>
			</p>
		</div>
		@endforeach
		
		
	</div>
	
@endsection