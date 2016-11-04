<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="www/assets/fonts/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="www/assets/css/font.css">
	<link rel="stylesheet" href="www/assets/css/main.css">
	<link rel="stylesheet" href="https://necolas.github.io/normalize.css/4.1.1/normalize.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="www/assets/js/jquery-mousewheel/jquery.mousewheel.js"></script>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="www/assets/css/media.css">
	<title>Document</title>
</head>
<body>

	<section  id="screen-1" class="screen-1 screen" >
		<header>
			<div class="info" class="container">
				<div class="kontakt">
					<div class="number">
						<ul>
							<li><i class="fa fa-phone" aria-hidden="true"></i></li>
							<li>+7(989)-891-18-79</li>
						</ul>
					</div>
					<div class="adres">
						<i class="fa fa-map-marker" aria-hidden="true"></i> г.Махачкала, ул.Мейдан, дом.Шайтан, пока найдешь с ума сойдешь 
					</div>
				</div>
			</div>
			<div class="container row">
				<div class="logoandmore">
					<div id="logo" class="logo">
						<img src="www/assets/img/logo.png" alt="">
					</div>
					<div class="freshmeat">
						<h2>БАРАШ-ОНЛАЙН</h2>
						<h5>СВЕЖЕЕ МЯСО НЕ ВЫХОДЯ ИЗ ДОМА</h5>
					</div>
				</div>
				<nav class="men row">
					<a href="#">ПРОДУКЦИЯ</a>
					<a href="#">АКЦИИ</a>
					<a href="#">ПАРТНЕРСТВО</a>
					<a href="#" onclick="project_view();">О ПРОЕКТЕ</a>
					<a href="#" id="form_login"><i class="fa fa-sign-in" aria-hidden="true"></i> ВХОД</a>
				</nav>
			</div>
		</header>			
	<?php include 'application/views/'.$content_view; ?>
	<section class="screen-4">
			<div class="screen-4__wrapper">
			<footer class="screen-4__wrapper__containerfoot">
					<div class="screen-4__wrapper__containerfoot__logoandmoref">
						<div class="screen-4__wrapper__containerfoot__logoandmoref__logof">
							<img src="www/assets/img/logo.png" alt="">
						</div>
							<div class="screen-4__wrapper__containerfoot__logoandmoref__freshmeatf">
								<h2>БАРАШ-ОНЛАЙН</h2>
								<h5>СВЕЖЕЕ МЯСО НЕ ВЫХОДЯ ИЗ ДОМА</h5>
							</div>

					</div>
					<div class="screen-4__wrapper__containerfoot__menufoot">
					<nav class="screen-4__wrapper__containerfoot__menufoot__men row">
						<a href="#">ПРОДУКЦИЯ</a>
						<a href="#">АКЦИИ</a>
						<a href="#">ПАРТНЕРСТВО</a>
						<a href="#">О ПРОЕКТЕ</a>
						<a href="#">ЛИЧНЫЙ КАБИНЕТ</a>
					</nav>
					<div class="screen-4__wrapper__containerfoot__menufoot__socfoot">
						<a href="#"><i class="fa fa-vk" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					</div>
					</div>
					
				</footer>	
			</div>
	</section>  

	 <script type="text/javascript">
		$("#form_login").on("click",function(){
			$(".bgc").animate({
				top: "0%" 
			}, 500);
		})
	</script> 

	<div class="obert-barash">
		<div class="imgbarash"></div>
		<h3>ЗАГРУЗКА...</h3>
	</div>

	<script type="text/javascript">
		window.onload = function() {

				$(".obert-barash").delay(1000).fadeOut(300);

		}
	</script>

	<script>
		function project_view(){
			$(".project").css("display", "block").animate({
				top: 0 
			}, 500);
		};
		$(".close_button").on("click",function(){
			$(".project").animate({
				top: "-100%" 
			}, 500, function(){
				$(this).css("display", "none")
			});
		})

    var elem1 = document.getElementById('screen-2');
    	  elem2 = document.getElementById('screen-3');

    if (elem1.addEventListener) {
      if ('onwheel' in document) {
        // IE9+, FF17+
        elem1.addEventListener("wheel", onWheel);
      } else if ('onmousewheel' in document) {
        // устаревший вариант события
        elem1.addEventListener("mousewheel", onWheel);
      } else {
        // Firefox < 17
        elem1.addEventListener("MozMousePixelScroll", onWheel);
      }
    } else { // IE8-
      elem1.attachEvent("onmousewheel", onWheel);
    }


    if (elem2.addEventListener) {
      if ('onwheel' in document) {
        // IE9+, FF17+
        elem2.addEventListener("wheel", onWheel2);
      } else if ('onmousewheel' in document) {
        // устаревший вариант события
        elem2.addEventListener("mousewheel", onWheel2);
      } else {
        // Firefox < 17
        elem2.addEventListener("MozMousePixelScroll", onWheel2);
      }
    } else { // IE8-
      elem2.attachEvent("onmousewheel", onWheel2);
    }

    function onWheel(e) {
      e = e || window.event;
      var delta = e.deltaY || e.detail || e.wheelDelta;
      if (delta > 0) {
      	$(".screen-3").css({
      		"display" : "block"
      	});
			$(".screen-3__left-column").animate({
				top: "0%" 
			}, 500, function(){
				$(".screen-2__right-column").animate({
				bottom: "-100%" 
			}, 500);
			});
			$(".screen-3__right-column").animate({
				bottom: "0%" 
			}, 500);
			$(".screen-2__right-column").animate({
				top: "-100%" 
			}, 500);
			$(".screen-2__left-column").animate({
				bottom: "-100%" 
			}, 500);
			$(".separator span:first-child").css("background-color","#fff")
			$(".separator span:last-child").css("background-color","#212121")
      }
      console.log(delta);
      e.preventDefault ? e.preventDefault() : (e.returnValue = false);
    }

    function onWheel2(e) {
      e = e || window.event;
      var delta = e.deltaY || e.detail || e.wheelDelta;
      if (delta < 0) {
    		$(".screen-3__left-column").animate({
				top: "-100%" 
			}, 500, function(){
				/*$(".screen-2__left-column").animate({
				top: "-100px" 
				}, 500);
				$(".screen-2__right-column").animate({
				bottom: "-100%" 
				}, 500);*/
				$(".screen-3").css({
      		"display" : "none"
      		});
			});
			$(".screen-3__right-column").animate({
				bottom: "-100%" 
			}, 500);
			$(".screen-2__right-column").animate({
				top: "0" 
			}, 500);
			$(".screen-2__left-column").animate({
				bottom: "0" 
			}, 500);
			$(".separator span:first-child").css("background-color","#212121")
			$(".separator span:last-child").css("background-color","#fff")
      }
      console.log(delta);
      e.preventDefault ? e.preventDefault() : (e.returnValue = false);
    }
  
	</script>
	<div class="bgc">
		<?php include 'application/views/auth_view.php'; ?>
		<?php include 'application/views/login_view.php'; ?>
	</div>
</body>
</html>