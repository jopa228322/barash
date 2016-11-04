
		<div class="enter login">
			<div class="vhod">
				<h1>ВХОД</h1>
			</div>
			<?php echo ($_SESSION['user'] ? "Привет ".$_SESSION['user'] : '' );?>
			<div class="windavt">
			<form action="/login/" method="post" class="<?php echo ($login_status ? 'error' : '' );?>">
			<?php extract($data); ?>

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
						<input Value="Авторизироваться" type="submit">
					</div>
				</div>	
				<div class="sign-up">
					<div class="registr">
						<a href="http://newbarash/auth/">Регистрация </a>
					</div>
				</div>
				</form>	
			</div>
			
		</div>




