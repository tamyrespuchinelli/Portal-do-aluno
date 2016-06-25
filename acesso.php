<?php
	function Logout()
	{
		session_destroy();
		header("Location: negado.php");
	}

	session_start();
	if (!isset($magica) || !isset($_SESSION['nome']) || empty($_SESSION['nome']))
		Logout();
	
	if ($magica == "a")
	{
		if (!isset($_SESSION['a_matricula']) || empty($_SESSION['a_matricula']))
			Logout();
	}
	elseif ($magica == "c")
	{
		if (!isset($_SESSION['c_matricula']) || empty($_SESSION['c_matricula']))
			Logout();
	}
	elseif ($magica == "p")
	{
		if (!isset($_SESSION['matricula']) || empty($_SESSION['matricula']))
			Logout();
	}
	else
		Logout();	
?>