<?php 
	require_once("Models/TCategoria.php");
	require_once("Models/TProducto.php");
	class Contacto extends Controllers{
		
		public function __construct()
		{ 
			parent::__construct();
			session_start();
		}

		public function contacto()
		{
			$data['page_tag'] = NOMBRE_EMPRESA;
			$data['page_title'] = NOMBRE_EMPRESA;
			$data['page_name'] = "QuickCart";

			$this->views->getView($this,"contacto",$data); 
		}

	}
 ?>