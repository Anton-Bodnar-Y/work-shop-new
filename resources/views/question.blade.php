

@extends('templates.index')





@section('header')
	@parent
@endsection





@section('content')
	
	<div id="content" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	
	<span class="broad">
		<a href="{{ route('main') }}"><span class="glyphicon glyphicon-home"></span></a> >> 
		<a href="{{ route('questions') }}">Вопросы и ответы</a>
		>> {{ $question[0]['question_title'] }}
	</span>
		
		<div style="clear: both"></div>
		
		<div class="page_content col-lg-8 col-md-8 col-sm-8 col-xs-8">
			
			<div class="article_block">
				<h3>{{ $question[0]['question_title'] }}</h3>
				{!! $question[0]['question_text'] !!}
			</div>
			
		</div>
		
	</div>
	
@endsection