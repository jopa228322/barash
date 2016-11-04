<?php
session_start();
class Model_Auth extends Model
{
	
	public function add_user($login, $password, $name, $sourname)
	{	
		$query = "INSERT INTO `users` VALUES (NULL,{?},{?},{?},{?},0)";
		$result = $this->db->query($query, array($login,  $name, $sourname, $password));
		return $result?  true : false;
	}
	public function check_login($login)
	{	
		$query = "SELECT `password` FROM `users` WHERE `login` LIKE {?}";
		$passwordDB = $this->db->selectCell($query, array($login));
		return $passwordDB?  false : true;
		
	}

}
