<?php 
	const BASE_URL = "http://localhost/EcommerceNF/";

	//Zona horaria
	date_default_timezone_set('America/Panama');

	//Datos de conexión a Base de Datos
	const DB_HOST = "localhost";
	const DB_NAME = "db_sistema";
	const DB_USER = "root";
	const DB_PASSWORD = "";
	const DB_CHARSET = "utf8";

	//Deliminadores decimal y millar Ej. 24,1989.00
	const SPD = ".";
	const SPM = ",";

	//Simbolo de moneda
	const SMONEY = "$";
	const CURRENCY = "USD";

	//Api PayPal
	//SANDBOX PAYPAL
	//Cuentas para realizar pruebas 
	//QuickCart@business.example.com
	//Nefthaly@personal.example.com
	//
	const URLPAYPAL = "https://api-m.sandbox.paypal.com";
	const IDCLIENTE = "AaKhJkTeyPrFxIiqUEWByY4k2Xljg_k1nZZ0GIci9rTLoi3UOHvxL5Ygq6ITQy9-grakkt2Say1IloO3";
	const SECRET = "EIe28kM8zxyM7P9dTYH_G9K_SLz9UBIAnFzwH9ZbhDU85jTQIXyy0bCY7Xj0bxdPMjx8WydEUv5kKGJc";
	//LIVE PAYPAL
	//const IDCLIENTE = "AWBtVubwv1loCQFkpbwVdxw3GN9v4wj8ieLQPCpm8i8v0iwHSO_wc1_fWPNqldrcrPh1RqQ1bIcZPKWD";
	//const URLPAYPAL = "https://api-m.paypal.com";
	//const SECRET = "ELCYtuxTFft8kEuAhcg8jE7_Bi31BnMd8E4DilpsnnsgXnZRUA8AKiXHwOVSPVu7xFIDZYw_6AjXulyC";

	//Datos envio de correo
	const NOMBRE_REMITENTE = "QuickCart Supermarket";
	const EMAIL_REMITENTE = "QuickCartPanama@gmail.com";
	const NOMBRE_EMPRESA = "QuickCart Supermarket";
	const WEB_EMPRESA = "www.QuickCartPanama.com";

	//Datos Empresa
	const DIRECCION = "Carretera Prestige, David, Chiriquí, Panamá";
	const TELEMPRESA = "+ 507 770-1515";
	const EMAIL_EMPRESA = "QuickCartPanama@gmail.com";
	const EMAIL_PEDIDOS = "QuickCartPanama@gmail.com";

	const CAT_SLIDER = "1,3,4";
	const CAT_BANNER = "2,5,6";

	//Datos para Encriptar / Desencriptar
	const KEY = 'nefthaly';
	const METHODENCRIPT = "AES-128-ECB";

	//Envío
	const COSTOENVIO = 3;

	//Módulos
	const MCLIENTES = 3;
	const MPEDIDOS = 5;

	//Roles
	const RADMINISTRADOR = 1;
	const RCLIENTES = 7;

	const STATUS = array('Pago realizado','Aprobado','Cancelado','Reembolsado','Pago contra entrega','Entregado');
	
	//CANTIDAD DE PRODUCTOS QUE SE MUESTRAN EN LA PAGINA DE INICIO
	const CANTPRODVIEWHOME = 6;
	const PROPORPAGINA = 12;

	const PROBUSCAR = 3; 

 ?>