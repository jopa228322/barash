
		<div class="enter reg">
			<div class="vhod">
				<h1>РЕГИСТРАЦИЯ</h1>
			</div>
			<?php 
			if (count($data)>0) {
				for ($i=0; $i < count($data); $i++) { 
					echo $data[$i]."<br>";
				}
			}
				
			?>
			<form action="/auth/" method="post">
			<div class="windavt">
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
						<input Value="Зарегистрироваться" type="submit">
					</div>
				</div>	
				<div class="sign-up">
					<div class="registr">
						<a href="http://newbarash/login/">Войти </a>
					</div>
				</div>
			</div>
			</form>
		</div>

