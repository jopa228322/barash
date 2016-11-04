<?php
session_start();
class Model_Login extends Model
{
	
	public function check_user($login, $password)
	{	
		$query = "SELECT `password` FROM `users` WHERE `login` LIKE {?}";
		$passwordDB = $this->db->selectCell($query, array($login));
		if ($passwordDB == md5($password)) {
			return true;
		}
		else {
			return false;
		}
	}

}
