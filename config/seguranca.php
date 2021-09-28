<?php

function seguranca_adm(){


	if(empty($_SESSION['usuarioToken'] )){		
		$_SESSION['loginErro'] = "Realize Novo Login - Token Expirado!";
		header("Location: login.php");
	}
	
}
