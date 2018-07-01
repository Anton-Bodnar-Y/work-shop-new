<?php

//dump($categories);
//dump($products);
//dump($pages);
?>



@extends('templates.index')





@section('header')
	@parent
@endsection



@section('content')
	<div id="content" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		
		<span class="titleContent">Ваш заказ</span>
		
		<div style="clear: both"></div>
		
		
		
		<div class="blockInfoCart">
			
			@foreach($products as $product)
			<div class="product col-lg-8 col-md-8 col-sm-8 col-xs-8" >
				<form method="POST">
				<p class="name_product col-lg-7 col-md-7 col-sm-7 col-xs-7"><a href="product/{{ $product['product_id'] }}">{{ $product['product_name'] }}</a></p>
				<p class="prise_product col-lg-2 col-md-2 col-sm-2 col-xs-2">{{ $product['price'] }} грн/т</p>
				<p class="count_product col-lg-2 col-md-2 col-sm-2 col-xs-2">
					<input class="minus_button_order" type="button" name="minus" value="-" />
					<input class="count_text_order" type="text" name="text_count" value="{{ $product['product_count'] }}" />
					<input class="plus_button_order" type="button" name="plus" value="+" />
				</p>
				<p class="to_product col-lg-1 col-md-1 col-sm-1 col-xs-1">
					<input class="thisProductId" type="hidden" value="{{ $product['product_id'] }}" />
					<input class="delete_position" type="submit" name="deletePosition" value="X" />
				</p>
				</form>
			</div>
			@endforeach
			
		</div>
		
		<div style="clear: both"></div>
		
		<div class="orderBlock">
			<form action="orderrealization" method="POST">
				<p class="text_label">Имя:</p>
				<input class="textInput" type="text" name="firstName" placeholder="имя"/><br/>
				<p class="text_label">Фамилия:</p>
				<input class="textInput" type="text" name="secondName" placeholder="фамилия"/><br/>
				<p class="text_label">Электронная почта:</p>
				<input class="textInput" type="text" name="mail" placeholder="электронная почта"/><br/>
				<p class="text_label">Телефон:</p>
				<input class="textInput" type="text" name="phone" placeholder="телефон"/><br/>
				
				{!! csrf_field() !!}
				
				<input class="submitInput" type="submit" name="submitOrder" value="Заказать"/>
			</form>
		</div>
		
		
		
	</div>
	
@endsection