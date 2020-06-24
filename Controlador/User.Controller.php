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
			$smarty =new Smarty();
			$lib=new Librerias();

			$usuario=$_POST['usuario'];
			$pass=$_POST['password'];
			$tipo=$_POST['tipo'];

			$dato=$user->BuscarUsuario($usuario,$pass, $tipo );
			if($dato->num_rows==1)
			{
				$us=$lib->DatosSmarty($dato);
				echo $us['user']."----".$us['tipo'];
			}
			else
			{}
			
		}
	}
?>