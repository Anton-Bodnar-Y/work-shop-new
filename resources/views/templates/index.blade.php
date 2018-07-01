<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		
		<title>{{ isset($title) ? $title : ''}}</title>
		<meta name="description" content="{{ isset($description) ? $description : ''}}" >
		<meta name="keywords" content="{{ isset($keywords) ? $keywords : ''}}" >
	
	
	
		
		<link rel="icon" type="path-to/favicon.ico" href="{{ url('public/img/favicon.ico') }}">
		
		<!-- http://www.socicon.com/chart.php -->
		<link rel="stylesheet" href="https://d1azc1qln24ryf.cloudfront.net/114779/Socicon/style-cf.css?9ukd8d">
		<link rel="stylesheet" href="https://s3.amazonaws.com/icomoon.io/114779/Socicon/style.css?9ukd8d">
		
		
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Exo+2:700" rel="stylesheet">
		
		
		
		
		<link rel="stylesheet" type="text/css" href="{{ url('public/assets/css/reset.css') }}" />
		<link rel="stylesheet" type="text/css" href="{{ url('public/assets/css/bootstrap.css') }}" />
		<link rel="stylesheet" type="text/css" href="{{ url('public/assets/css/styles.css') }}" />
		
		
	</head>
	<body>

		<div style="width: 100%; background: #000; color: yellow; padding: 5px 15px;">
			<p style="line-height: 30px; font-size: 14px;">Функционал данного ресурса реализован не полностью. Чтобы сделать заказ - воспользуйтесь указанными на сайте номерами телефонов</p>
		</div>

		<header id="header" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			
			<div class="top_header col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="logo">
					<a href="{{ route('main') }}"><img src="/../../public/img/7575757.png" alt="" /></a>
				</div>
				<div class="contacts">
					<p><span class="glyphicon glyphicon-phone"></span>&#160; +38 (050) 406-23-02 &#160;&#160;&#160; +38 (067) 682-24-02</p>
					<p><span class="socicon-mail"></span>&#160; khaskom_trade@ukr.net</p>
					<p><span class="socicon-skype"></span>&#160; .......</p>
				</div>
				<div class="cart">
					<p>
						В корзине <span class="count_prod_head">0</span> товаров
					</p>
					<p><a class="link" href="/order">Оформить заказ</a></p>
					
					
					
					<div class="popUp">
						<p>Ваша корзина</p>
						<table>
							<tr>
								<td>Семена вики яровой Гибридная 85, Элита / 1 Репродукция</td>
								<td>15 000 грн/т</td>
								<td>
									<form>
										<input class="minusButtonPopUp" type="button" name="minusButtonPopUp" value="-" />
										<input class="countTextPopUp" type="text" name="countTextPopUp" value="1.5" />
										<input class="plusButtonPopUp" type="button" name="plusButtonPopUp" value="+" />
										<input class="buttonButtonPopUp" type="button" name="buttonButtonPopUp" value="X" />
									</form>
								</td>
								<td>30 000 грн</td>
							</tr>
							<tr>
								<td>Семена вики яровой Гибридная 85, Элита / 1 Репродукция</td>
								<td>15 000 грн/т</td>
								<td>
									<form>
										<input class="minusButtonPopUp" type="button" name="minusButtonPopUp" value="-" />
										<input class="countTextPopUp" type="text" name="countTextPopUp" value="1.5" />
										<input class="plusButtonPopUp" type="button" name="plusButtonPopUp" value="+" />
										<input class="buttonButtonPopUp" type="button" name="buttonButtonPopUp" value="X" />
									</form>
								</td>
								<td>30 000 грн</td>
							</tr>
							<tr>
								<td>Семена вики яровой Гибридная 85, Элита / 1 Репродукция</td>
								<td>15 000 грн/т</td>
								<td>
									<form>
										<input class="minusButtonPopUp" type="button" name="minusButtonPopUp" value="-" />
										<input class="countTextPopUp" type="text" name="countTextPopUp" value="1.5" />
										<input class="plusButtonPopUp" type="button" name="plusButtonPopUp" value="+" />
										<input class="buttonButtonPopUp" type="button" name="buttonButtonPopUp" value="X" />
									</form>
								</td>
								<td>30 000 грн</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td>Итого:</td>
								<td>120 000 грн</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td colspan="2"><a class="order_link" href="/order">Оформить заказ</a></td>
							</tr>
						</table>
					</div>
					
					
					
				</div>
			</div>
			
			
			
			<div class="filters col-lg-12 col-md-12 col-sm-12 col-xs-12">
			
				@if(count($errors) > 0)
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="position: absolute; top: 0; height: auto; background: #F5F6F8; padding: 0 25px; ">
				
					@foreach($errors->all() as $error)
					<p style="line-height: 20px; color: red; font-size: 12px;">- {{ $error }}</p>
					@endforeach
				
				</div>
				<div style="clear: both"></div>
				@endif
				
				<form action="{{ route('category-price') }}" method="POST">
					<select name="category" >
						<option value="0" selected disabled >Выберите категорию</option>
						@foreach($categories as $category)
						<option value="{{ $category['category_id'] }}">{{ $category['category_name'] }}</option>
						@endforeach
					</select>
					<input type="text" name="prise_min" placeholder="от грн / тонна" />
					<input type="text" name="prise_max" placeholder="до грн / тонна" />
					
					{!! csrf_field() !!}
					
					<input class="submitSelect" type="submit" name="submitSelect" value="Найти" />
				</form>
			</div>
			
			
			<div class="search_form">
				
				<div class="icon"><span class="glyphicon glyphicon-search"></span></div>
				<div class="icon2">X</div>
				<form action="{{ route('search') }}" method="POST">
					<input class="search_text" type="text" name="search_text" required />
					{!! csrf_field() !!}
					<input class="search_submit" type="submit" name="search_submit" value="найти"/>
				</form>
				<span class="label">поиск</span>
				
			</div>
			
		</header>
		
		
		
		@yield('content')
		
		
		
		<footer id="footer" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			
			<div class="block_pages">
				<a href="/questions"><span class="glyphicon glyphicon-book"></span>&#160;<b>Вопросы и ответы</b></a>
				@foreach($pages as $page)
				<a href="/page/{{ $page['page_id'] }}">{{ $page['page_title'] }}</a>
				@endforeach
			</div>
			
			<div class="block_copy">
				<p>&copy; 2016-2018 ООО "Хаском-Трейд"</p>
			</div>
			
			<div class="block_contacts">
				<p><span class="glyphicon glyphicon-phone"></span>&#160; +38 (050) 406-23-02</p>
				<p><span class="glyphicon glyphicon-phone"></span>&#160; +38 (067) 682-24-02</p>
				<p><span class="socicon-viber"></span>&#160; +38(...)...-..-..</p>
				<p><span class="socicon-mail"></span>&#160; khaskom_trade@ukr.net</p>
				<p><span class="socicon-telegram"></span>&#160; Telegram</p>
				<p><span class="socicon-skype"></span>&#160; .............</p>
			</div>
			
			
			
		</footer>
		
		<!--
		<div class="go_to_up">
			<p>Наверх</p>
		</div>
		-->
		
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
		if(oBlock.offsetHeight < heightContent){
			document.getElementById('content').style.height = heightContent +"px";
		}
		
	}
	
	setTimeout('load1()', 1000);
	
	/**
	* ========================================FUCNTIONS BLOCK=======================================
	*/
	
	/**
	* GET COUNT PRODUCTS IN CART FROM HEADER
	*/
	function countProductsToHeader() { 
		
		var xhr = new XMLHttpRequest();
		xhr.open("GET", "{{ route('getcountproductsfromheader') }}", true);
		xhr.setRequestHeader('Content-Type', 'text-plain');
		xhr.send();
		
		xhr.onreadystatechange = function(){
			
			var dataCountProd = xhr.responseText;
			document.getElementsByClassName('count_prod_head')[0].innerHTML = dataCountProd;
			
		}
		
	};
	
	
	
	/**
	* function ADD PRODUCT TO CART
	*/
	function AddProductToCart(dataToCart) { 
		
		var data = dataToCart;
		
		var xhr = new XMLHttpRequest();
		xhr.open("POST", "{{ route('addproducttocart') }}", true);
		xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		xhr.send(data);
		
		xhr.onreadystatechange = function(){
			
			countProductsToHeader();
			
		}
		
	};
	
	
	
	
	/**
	* function DELETE PRODUCT FROM CART
	*/
	function DeleteProductFromCart(data) { 
		
		var xhr = new XMLHttpRequest();
		xhr.open("POST", "{{ route('deleteproductfromcart') }}", true);
		xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		xhr.send(data);
		
		xhr.onreadystatechange = function(){
			
			console.log( xhr.responseText );
			countProductsToHeader();
			
			document.getElementsByClassName('blockInfoCart')[0].innerHTML = xhr.responseText;
			
			generateListDeletePosition();
			
		}
		
	};
	
	
	
	/**
	* update count product in text field
	*/
	function updateCountProductInTextField(fieldName, fieldIndex, prodCount) { 
		
		if(prodCount >= 0 ){
			document.getElementsByClassName(fieldName)[fieldIndex].value = prodCount;
		}
		
	};
	
	
	
	
	
	
	
	
	/**
	* ========================================GENERATORS BLOCK=======================================
	*/
	
	/**
	* function generate List Delete Position (in ORDER PAGE)
	*/
	function generateListDeletePosition() { 
		var delete_position = document.getElementsByClassName('delete_position');
		if (delete_position !== undefined) {
			for (var i = 0; i < delete_position.length; i++) {
				delete_position[i].onclick = (function(i){
					return function(event) {
						
						event.preventDefault();
						var data = "count_text=" + encodeURIComponent(document.getElementsByClassName('count_text_order')[i].value) + "&thisProductId=" + encodeURIComponent(document.getElementsByClassName('thisProductId')[i].value);
						
						DeleteProductFromCart(data);
						
					};
				})(i);
			};
		}
	}
	
	/**
	* function generate List Delete Position (in ORDER PAGE)
	*/
	function generateListMinusCountPosition() { 
		var minus_count_position = document.getElementsByClassName('minus_button_order');
		if (minus_count_position !== undefined) {
			for (var i = 0; i < minus_count_position.length; i++) {
				minus_count_position[i].onclick = (function(i){
					return function(event) {
						
						event.preventDefault();
						alert('-');
						
					};
				})(i);
			};
		}
	}
	
	/**
	* function generate List Delete Position (in ORDER PAGE)
	*/
	function generateListPlusCountPosition() { 
		var plus_count_position = document.getElementsByClassName('plus_button_order');
		if (plus_count_position !== undefined) {
			for (var i = 0; i < plus_count_position.length; i++) {
				plus_count_position[i].onclick = (function(i){
					return function(event) {
						
						event.preventDefault();
						alert('+');
						
					};
				})(i);
			};
		}
	}
	
	generateListMinusCountPosition();
	generateListPlusCountPosition();
	
	
	/**
	* ========================================ACTIONS BLOCK=======================================
	*/
	countProductsToHeader();
	window.onload = function() {
		countProductsToHeader();
		generateListDeletePosition();
	}
	
	
	
	/**
	* UPDATE COUNT PRODUCTS '-' in MAIN and CATEGORY (AJAX)
	*/
	
	var minus_button = document.getElementsByClassName('minus_button');
	
	for (var i = 0; i < minus_button.length; i++) {
		minus_button[i].onclick = (function(i){
			return function(event) {
				
				event.preventDefault();
				
				var thisCount = document.getElementsByClassName('count_text')[i].value;
				
				thisCount -= 0.1;
				thisCount = thisCount.toFixed(2);
				
				updateCountProductInTextField('count_text', i, thisCount);
				
			};
		})(i);
	};
	
	
	/**
	* UPDATE COUNT PRODUCTS '+' in MAIN and CATEGORY (AJAX)
	*/
	
	var plus_button = document.getElementsByClassName('plus_button');
	
	for (var i = 0; i < plus_button.length; i++) {
		plus_button[i].onclick = (function(i){
			return function(event) {
				
				event.preventDefault();
				
				var thisCount = document.getElementsByClassName('count_text')[i].value;
				
				thisCount = Number(thisCount) + Number(0.1);
				thisCount = thisCount.toFixed(2);
				
				updateCountProductInTextField('count_text', i, thisCount);
				
			};
		})(i);
	};
	
	
	
	/**
	* ADD PRODUCTS TO CART in MAIN and CATEGORY(AJAX)
	*/
	
	var to_cart_btn = document.getElementsByClassName('to_cart_btn');
	
	for (var i = 0; i < to_cart_btn.length; i++) {
		to_cart_btn[i].onclick = (function(i){
			return function(event) {
				
				event.preventDefault();
				var data = "countProduct=" + encodeURIComponent(document.getElementsByClassName('count_text')[i].value) + "&ProductId=" + encodeURIComponent(document.getElementsByClassName('thisProductId')[i].value);
				
				AddProductToCart(data);
				
			};
		})(i);
	};
	
	
	
	
	
	
	
	/**
	* ADD PRODUCT TO CART in 'PRODUCT' (AJAX)
	*/
	
	var toCart = document.getElementsByClassName('toCart')[0];
	if (toCart !== undefined) {
		toCart.onclick = function(event){
			
			event.preventDefault();
			var dataToCart = "countProduct=" + encodeURIComponent(document.getElementsByClassName('countProduct')[0].value) + "&ProductId=" + encodeURIComponent(document.getElementsByClassName('ProductId')[0].value);
			
			AddProductToCart(dataToCart);
			
		};
	}
	
	/**
	* UPDATE COUNT PRODUCT TO CART in 'PRODUCT' '-' (AJAX)
	*/
	var minusBtnProduct = document.getElementsByClassName('minusBtnProduct')[0];
	if (minusBtnProduct !== undefined) {
		minusBtnProduct.onclick = function(event){
			
			event.preventDefault();
			
			var thisProductCount = document.getElementsByClassName('countProduct')[0].value;
			thisProductCount -= 0.1;
			thisProductCount = thisProductCount.toFixed(2);
			
			updateCountProductInTextField('countProduct', 0, thisProductCount);
			
		};
	}
	
	/**
	* UPDATE COUNT PRODUCT TO CART in 'PRODUCT' '+' (AJAX)
	*/
	var plusBtnProduct = document.getElementsByClassName('plusBtnProduct')[0];
	if (plusBtnProduct !== undefined) {
		plusBtnProduct.onclick = function(event){
			
			event.preventDefault();
			
			var thisCount = document.getElementsByClassName('countProduct')[i].value;
			
			thisCount = Number(thisCount) + Number(0.1);
			thisCount = thisCount.toFixed(2);
			
			updateCountProductInTextField('countProduct', 0, thisCount);
			
		};
	}
	
	
	
	
	
	
	
	
	
	
</script>



<script>
	/**
	* SEARCH FORM
	*/
	
	var searchForm = document.getElementsByClassName('search_form')[0];
	var iconSearchForm = document.getElementsByClassName('icon')[0];
	var icon2SearchForm = document.getElementsByClassName('icon2')[0];
	var labelSearchForm = document.getElementsByClassName('label')[0];
	var search_textSearchForm = document.getElementsByClassName('search_text')[0];
	
	
	
	iconSearchForm.onclick = function(){
		
		searchForm.style.marginRight = '0px';
		iconSearchForm.style.display = 'none';
		labelSearchForm.style.display = 'none';
		icon2SearchForm.style.display = 'block';
	}
	icon2SearchForm.onclick = function(){
		
		searchForm.style.marginRight = '-250px';
		icon2SearchForm.style.display = 'none';
		iconSearchForm.style.display = 'block';
		labelSearchForm.style.display = 'inline-block';
	}
	
	
	
	
	
</script>






<script>
/**
* FILTERS BLOCK (scroll)
*/
window.onscroll = function() {
	var btnScrollDown = document.querySelector('.filters');
	var scrolled = window.pageYOffset || document.documentElement.scrollTop;
	if(scrolled > 100){
		btnScrollDown.style.position = 'fixed';
		btnScrollDown.style.zIndex = '5000';
		btnScrollDown.style.top = '0';
	}else{
		btnScrollDown.style.position = 'relative';
		
	}
}



</script>







<script>
/**
* SHOW and HIDE DESCRIPTION in "PRODUCT"
*/



var qwertx = document.getElementsByClassName('qwertx')[0];
var hide = document.getElementsByClassName('hide')[0];
qwertx.onclick = function(){
	document.getElementsByClassName('qwertx')[0].style.display = 'none';
	document.getElementsByClassName('desc_product')[0].style.height = 'auto';
}

hide.onclick = function(){
	document.getElementsByClassName('qwertx')[0].style.display = 'block';
	document.getElementsByClassName('desc_product')[0].style.height = '200px';
}





</script>