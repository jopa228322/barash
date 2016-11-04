<?php

class Controller_Login extends Controller
{
	function __construct()
	{
		$this->model = new Model_Login();
		$this->view = new View();
	}

	function action_index()
	{

		if(isset($_POST['login']) && isset($_POST['password']))
		{  

			$login = $_POST['login'];
			$password = $_POST['password'];
			$isChecked = $this->model->check_user($login, $password);
			if ($isChecked) {
<<<<<<< HEAD
				//header( "Location: http://" .$_SERVER['PHP_SELF'] );
				echo "da";
			}
			else
			{
				echo "net";
				$data["login_status"] = $login;
=======
				$_SESSION['user'] = $login;
				header( "Location: http://" .$_SERVER['HTTP_HOST']."/login" );
			}
			else
			{
				$data["login_err"] = true;
>>>>>>> 83e6a44bca5d357068c7ace3ee2fa647672b6dde
			}
		}
		else
		{
			$data["login_err"] = false;
		}
		
		$this->view->generate('main_view.php', 'template_view.php', $data);
	}
	function action_logout()
	{
		unset($_SESSION['user']);
		header( "Location: http://" .$_SERVER['HTTP_HOST']."/login" );
	}
	
}
