<?php

//dump($categories);
//dump($products);
//dump($product);
?>



@extends('templates.index')





@section('header')
	@parent
@endsection





@section('content')
	
	<div id="content" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		
		<span class="broad"><a href="{{ route('main') }}"><span class="glyphicon glyphicon-home"></span></a> >> <a href="/category/{{ $product[0]['category_id'] }}">{{ $product[0]['category_name'] }}</a> >> {{ $product[0]['product_name'] }}</span>
		
		<div style="clear: both"></div>
		
		
		
		<div class="image_product col-lg-3 col-md-3 col-sm-3 col-xs-3">
			<img src="/public/img/img-products/{{ $product[0]['product_img'] }}" alt="" />
		</div>
		<div class="info_product col-lg-9 col-md-9 col-sm-9 col-xs-9">
			<h3>{{ $product[0]['product_name'] }}</h3>
			<p class="price">Цена: <span class="grn">{{ $product[0]['price'] }}</span> грн/т</p>
			<form method="POST">
				<input class="minusBtnProduct" type="button" name="minusBtnProduct" value="-" />
				<input class="countProduct" type="text" name="countProduct" value="1" />
				<input class="plusBtnProduct" type="button" name="plusBtnProduct" value="+" />
				<div style="clear: both"></div>
				<input class="ProductId" type="hidden" name="ProductId" value="{{ $product[0]['product_id'] }}" />
				<input class="toCart" type="submit" name="submitToCart" value="Купить" />
			</form>
			
			<div class="desc_product">
				<h3>Описание сорта</h3>
				{!! $product[0]['product_desc'] !!}
				
				<div class="hide">Скрыть описание</div>
				
				<div class="qwertx">
					
				</div>
			</div>
		</div>
		
		
		
	</div>
	
@endsection