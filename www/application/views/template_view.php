<!DOCTYPE html>
<html lang="ru">
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
	<title>Barash.online</title>
</head>
<body>
	<div class="obert-barash">
		<div class="imgbarash"></div>
		<h3>ЗАГРУЗКА...</h3>
	</div>
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
					<a href="http://barash">
						<div id="logo" class="logo">
							<img src="www/assets/img/logo.png" alt="">
						</div>
						<div class="freshmeat">
							<h2>БАРАШ-ОНЛАЙН</h2>
							<h5>СВЕЖЕЕ МЯСО НЕ ВЫХОДЯ ИЗ ДОМА</h5>
						</div>
					</a>
				</div>
				<nav class="men row">
					<a href="http://barash/sale">АКЦИИ</a>
					<a href="#">ПАРТНЕРСТВО</a>
					<a href="http://barash/about">О ПРОЕКТЕ</a>
					<a href="#" class="logOn"><i class="fa fa-sign-in" aria-hidden="true"></i> <span>ВХОД</span></a>
					<a href="http://barash/user" class="lk"><i class="fa fa-user" aria-hidden="true"></i> <span>ЛИЧНЫЙ КАБИНЕТ</span></a>
				</nav>
			</div>
		</header>		
	<?php include 'application/views/'.$content_view; ?>


	 <div class="bgc">
		<div class="enter auth">
			<div class="vhod">
				<h1>РЕГИСТРАЦИЯ</h1>
			</div>
			<div class="windavt">
				<form action="/auth" method="post">
					<div class="email">
						<div class="form-email">
							<input type="text" name="login" placeholder="Email">
						</div>
					</div>
					<div class="pass">
						<div class="form-pass">
							<input type="password" name="password" placeholder="Пароль">
						</div>
					</div>
					<div class="pass">
						<div class="form-pass">
							<input type="password" name="password2" placeholder="Подтвердите пароль">
						</div>
					</div>
					<div class="name">
						<div class="form-name">
							<input type="text" name="name" placeholder="Имя">
						</div>
					</div>
					<div class="surname">
						<div class="form-surname">
							<input type="text" name="sourname" placeholder="Фамилия">
						</div>
					</div>	
					<div class="authorize">
						<div class="form-authorize">
							<input value="Зарегистрироваться" id="AuthSub"  type="submit">
						</div>
					</div>
				</form>
				<div class="sign-up">
					<div class="registr">
						<a href="#" id="goLogin">Войти</a>
					</div>
				</div>		
			</div>
		</div>
		<div class="enter login">
			<div class="vhod">
				<h1>ВХОД</h1>
			</div>
			<div class="windavt">
				<form action="/login" method="POST">
					<div class="log">
						<div class="form-log">
							<input type="text" name="login" placeholder="Email">
						</div>
					</div>
					<div class="pass">
						<div class="form-pass">
							<input type="password" name="password" placeholder="Пароль">
						</div>
					</div>	
					<div class="authorize">
						<div class="form-authorize">
							<input id="LoginSub" value="Авторизироваться" type="submit">
						</div>
					</div>	
				</form>
				<div class="sign-up">
					<div class="registr">
						<a href="#" id="goAuth">Регистрация </a>
					</div>
				</div>	
			</div>
		</div>
		<div class="successful-enter">
			<div class="imgs">
				<img src="www/assets/img/path.png">
			</div>
			<div class="successful-authorize">
				ВЫ УСПЕШНО АВТОРИЗОВАЛИСЬ
			</div>
		</div>
	</div>
	<script type="text/javascript">
		window.onload = function() {
				$(".obert-barash").delay(1000).fadeOut(300);
		}
		$(".lk, .successful-enter").css("display","none");
		$(".logOn").on("click",function(){
			$(".bgc").fadeIn(200);
		})
		$(".bgc").on("click",function(){
			$(this).fadeOut(200);
		})
		$(".enter").on("click",function(){
			return false
		})
		$("#goAuth").on("click",function(){
			$(".login").css("display","none");
			$(".auth").css("display","block");
			$(".error").remove();
		})
		$("#goLogin").on("click",function(){
			$(".login").css("display","block");
			$(".auth").css("display","none");
			$(".error").remove();
		})
		$("#LoginSub").on("click",function(){
			jQuery.ajax({
                    url:     "/login" ,
                    type:     "POST", 
                    dataType: "html", 
                    data: $(".login form").serialize(), 
                    success: function(data) { 
                    	if(data=="error"){
                    		$(".login").prepend("<p class='error'>Неверный логин и/или пароль</p>");
                    	}
                    	else{
                    		$(".logOn").css("display","none");
                    		$(".lk").css("display","block");
                    		$(".login").css("display","none");
                    		$(".successful-enter").css("display","block");
                    		$(".bgc").delay(1000).click();
                    	}
                }
			})
		})
		$("#AuthSub").on("click",function(){
			jQuery.ajax({
                    url:     "/auth" ,
                    type:     "POST", 
                    dataType: "html", 
                    data: $(".auth form").serialize(), 
                    success: function(data) { 
                    	if(data!="success"){
                    		$(".auth").prepend("<p class='error'>"+data+"</p>");              		
                    	}
                    	else{
                    		$(".logOn").css("display","none");
                    		$(".lk").css("display","block");
                    		$(".successful-enter").css("display","block");
                    		$(".auth").css("display","none");
                    		$(".bgc").delay(1000).click();
                    	}
                }
			})
		})
$(document).ready(function(){
     $(".button-rectangle").on("click",function(){
     		$(".screen-2").css("display","none");
     		$(".form").css("display","block");
     		var s = $(".form").offset();
     		$("body").animate({ scrollTop: s.top }, 1100);
     })  
	});
	</script>
</body>
</html>