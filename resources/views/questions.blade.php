


@extends('templates.index')





@section('header')
	@parent
@endsection





@section('content')
	
	<div id="content" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	
	<span class="broad"><a href="{{ route('main') }}"><span class="glyphicon glyphicon-home"></span></a> >> Вопросы и ответы</span>
		
		<div style="clear: both"></div>
		
		<div class="page_content col-lg-8 col-md-8 col-sm-8 col-xs-8">
			
			@foreach($questions as $question)
				
				<div class="article_link">
					<a href="question/{{ $question['question_id'] }}">{{ $question['question_title'] }}</a>
				</div>
				
			@endforeach
			
		</div>
		
	</div>
	
@endsection