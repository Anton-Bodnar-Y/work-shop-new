<?php

//dump($categories);
//dump($products);
//dump($page);
?>



@extends('templates.index')





@section('header')
	@parent
@endsection





@section('content')
	
	<div id="content" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	
	<span class="broad"><a href="{{ route('main') }}"><span class="glyphicon glyphicon-home"></span></a> >> {{ $page[0]['page_title'] }}</span>
		
		<div style="clear: both"></div>
		
		<div class="page_content col-lg-8 col-md-8 col-sm-8 col-xs-8">
			
			<h3>{{ $page[0]['page_title'] }}</h3>
			
			{!! $page[0]['page_text'] !!}
			
		</div>
		
	</div>
	
@endsection