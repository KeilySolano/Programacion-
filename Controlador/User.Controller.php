<?php
	class
	{
		function __construct()
		{
		}

		public function ValidarUsuario()
		{
			//echo"en controller User y metodo ValidarUsuario";
			//var_dump($_POST);
			$user=new Usuarios();

			$usuario=$_POST['usuario'];
			$pass=$_POST['password'];
			$tipo=$_POST['tipo'];

			$dato=$user->BuscarUsuario($usuario,$pass, $tipo );

			var_dump($dato);
		}
	}
?>