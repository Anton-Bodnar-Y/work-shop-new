<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<title>Document</title/>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="icon" type="path-to/favicon.ico" href="{{ url('public/img/favicon.ico') }}">
	
	<!-- http://www.socicon.com/chart.php -->
	<link rel="stylesheet" href="https://d1azc1qln24ryf.cloudfront.net/114779/Socicon/style-cf.css?9ukd8d">
	<link rel="stylesheet" href="https://s3.amazonaws.com/icomoon.io/114779/Socicon/style.css?9ukd8d">
	
	
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Exo+2:700" rel="stylesheet">
	
	
	
	<link rel="stylesheet" type="text/css" href="{{ url('public/assets/css/reset.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ url('public/assets/css/bootstrap.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ url('public/assets/css/stylesadmin.css') }}" />
	
	
</head>
<body>
	
	<header id="header" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="top_block col-lg-offset-1 col-md-offset-1 col-lg-9 col-md-9 col-sm-9 col-xs-9">
			<div class="collapse navbar-collapse" id="app-navbar-collapse">
                
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Вход</a></li>
                        <li><a href="{{ url('/register') }}">Регистрация</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="my_style_nameAdmin dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a class="my_style_logout" href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Выход&#160;&#160;<span class="glyphicon glyphicon-log-out"></span></a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
		</div>
		<div class="menu_admin col-lg-offset-1 col-md-offset-1 col-lg-9 col-md-9 col-sm-9 col-xs-9">
			
			<!--
			<ul class="parent_list">
				<li><a href=#>На сайт</a></li>
				<li class="parent_link">
					<a href=#>Магазин</a>
					<ul class="child_list">
						<li><a href=#>Товары</a></li>
						<li><a href=#>Категории</a></li>
					</ul>
				</li>
				<li class="parent_link">
					<a href=#>Заказы</a>
					<ul class="child_list">
						<li><a href=#>Заказы</a></li>
						<li><a href=#>Покупатели</a></li>
						<li><a href=#>Корзины</a></li>
					</ul>
				</li>
				<li><a href=#>Блог</a></li>
				
			</ul>
			-->
			
			
			<div class="wrap">
				<ul>
					<li><a href="" >На сайт</a></li>
					<li><a href="{{ route('admin') }}" >Главная</a></li>
					<li>
						<a href="" >Магазин</a>
						<div class="wrap_child">
							<ul>
								<li><a href="{{ route('admin/products') }}">Товары</a></li>
								<li><a href="{{ route('admin/categories') }}">Категории</a></li>
							</ul>
						</div>
					</li>
					<li>
						<a href="" >Заказы</a>
						<div class="wrap_child">
							<ul>
								<li><a href="">Заказы</a></li>
								<li><a href="">Покупатели</a></li>
								<li><a href="">Корзины</a></li>
							</ul>
						</div>
					</li>
				</ul>
			</div>
			
			
			
			
			
			
			
			
			
		</div>
		
	</header>
	
	
	<div id="content" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		
		@yield('content')
		
	</div>
	
	
	
	
	<footer id="footer" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		
		footer
		
	</footer>
	
	
	
</body>
</html>








<script>
	function load1() {
		//content - appeal
		var oBlock = document.getElementById('content');
		//header height
		var headerHeight = document.getElementById('header');
		//alert(headerHeight.offsetHeight);
		//footer height
		var footerHeight = document.getElementById('footer');
		//alert(footerHeight.offsetHeight);
		//workspace height
		var heightClient = document.documentElement.clientHeight;
		
		//content height - calculation
		var heightContent = heightClient - headerHeight.offsetHeight - footerHeight.offsetHeight;
		//content height - appoint
		//alert(heightContent);
		
		if(oBlock.offsetHeight < heightContent){
			document.getElementById('content').style.height = heightContent + "px";
		}
		
	}
	
	setTimeout('load1()', 1000);

</script>










