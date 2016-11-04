<?php

class Controller_Auth extends Controller
{
	function __construct()
	{
		$this->model = new Model_Auth();
		$this->view = new View();
	}

	function action_index()
	{

		if(isset($_POST['login']) && isset($_POST['password']) && isset($_POST['password2']) && isset($_POST['name']) && isset($_POST['sourname']))
		{  

			$login = $_POST['login'];
			$password = $_POST['password'];
			$password2 = $_POST['password2'];
			$name = $_POST['name'];
			$sourname = $_POST['sourname'];

		   if(!filter_var($login, FILTER_VALIDATE_EMAIL))
		   {
		      $err[] = "Введите корректный email";
		   }

		   if(strlen($login) < 3 or strlen($login) > 30)
		   {
		      $err[] = "Логин должен быть не меньше 3-х символов и не больше 30";
		   }
			if($password != $password2)
		   {
		      $err[] = "Пароли не совпадают";
		   }
			$free_login = $this->model->check_login($login);

			if (!$free_login) {
				$err[] = "Такой логин уже существует";	  
			}
			if ((empty($password) or strlen($password)<3) && (empty($name) or strlen($name)<3) && (empty($sourname) or strlen($sourname)<3)) {
				$err[] = "В поля необходимо вводить не менее 3ех символов";	 
			}
			
			if (count($err) == 0) {
				
				$insert = $this->model->add_user($login, $password, $name, $sourname);
				$_SESSION['user'] = $login;
				$this->view->generate('auth_successful_view.php', 'template_view.php', $err);

			}
			else {
				$this->view->generate('main_view.php', 'template_view.php', $err);
			}	  
		}
		else {
			$this->view->generate('main_view.php', 'template_view.php', $err);
		}
	}

	
}
