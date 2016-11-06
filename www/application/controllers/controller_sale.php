<?php

class Controller_Sale extends Controller
{
	
	function action_index()
	{
		$this->view->generate('sale_view.php', 'template_view.php');
	}

}
