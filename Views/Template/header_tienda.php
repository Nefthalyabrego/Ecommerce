<?php 
	$cantCarrito = 0;
	if(isset($_SESSION['arrCarrito']) and count($_SESSION['arrCarrito']) > 0){ 
		foreach($_SESSION['arrCarrito'] as $product) {
			$cantCarrito += $product['cantidad'];
		}
	}
	//dep($_SESSION['userData']);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title><?= $data['page_tag']; ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?= media() ?>/tienda/images/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media() ?>/tienda/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media() ?>/tienda/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media() ?>/tienda/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media() ?>/tienda/fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media() ?>/tienda/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= media() ?>/tienda/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media() ?>/tienda/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media() ?>/tienda/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= media() ?>/tienda/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media() ?>/tienda/vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media() ?>/tienda/vendor/MagnificPopup/magnific-popup.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media() ?>/tienda/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media() ?>/tienda/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= media() ?>/tienda/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/style.css">
<!--===============================================================================================-->
</head>
<body class="animsition">
<!-- ModalPreguntasFrecuentes -->
	<div class="modal fade" id="modalPreguntasFrecuentes" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title"><strong>Preguntas frecuentes</strong></h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="modal-body">
			<strong>COMPRAS</strong></p>
			<hr>
			<p class="espacio_simple"><strong>1. ¿Cuáles son los pasos a seguir para comprar en la tienda Online? </strong></p>
			<ul><li class="espacio_simple">Elige el producto que te interesa de las secciones clasificadas de la tienda on-line, y a través de un clic conseguirás una ampliación de su fotografía además de información detallada del mismo.</li>
			<li>Añade el artículo a la cesta. A continuación puedes elegir seguir comprando o tramitar pedido.</li>
			<li>Selecciona un método de pago: Visa, Visa Electron, Mastercard, American Express...</li>
			<li>Confirma el pedido y recibirás un correo electrónico de confirmación.</li>
			</ul><p class="espacio_simple"><strong>2. ¿Es seguro comprar en la tienda online?</strong></p>
			<p>Sí. Puedes comprar con total tranquilidad, pues dedicamos un gran esfuerzo en disponer de recursos con los que garantizar la seguridad de tus compras y de tus datos.</p>
			<p class="espacio_simple"><strong>3. ¿Se reponen los artículos con la indicación “agotado”?</strong></p>
			<p>Si un artículo está agotado, trataremos de reponerlo lo antes posible. Si no hubiese más existencias del mismo, lo retiraremos de la página web.</p>
			<p class="espacio_simple"><strong>4. ¿Recibiré el mismo producto que veo en la fotografía de la tienda online?</strong></p>
			<p>Sí, excepto en aquellos productos manufacturados por medio de procesos artesanales en los que podría haber mínimas diferencias de acabado.</p>
			<p class="espacio_simple"><strong>5. ¿Es posible recibir información periódica en mi buzón de correo electrónico con las últimas novedades y ofertas de la tienda online?</strong></p>
			<p>Si dispones de tu alta en la “Newsletter” recibirás información sobre las últimas novedades, además de las nuevas actividades culturales que podrás disfrutar.</p>
			<p class="espacio_simple"><strong>6. ¿Cómo puedo asegurarme de haber realizado bien mi compra?</strong></p>
			<p>Una vez hecho tu pedido, recibirás un correo electrónico de confirmación. Si no lo recibieses, ponte en contacto con nuestro <a href="<?= base_url()?>">departamento de atención al cliente</a>.</p>
			<p class="espacio_simple"><strong>7. ¿Qué debo hacer si recibo un artículo incorrecto o defectuoso?</strong></p>
			<p>Si en alguna ocasión, por error, llegases a recibir un artículo no solicitado o con alguna tara o defecto, ponte en contacto con nuestro <a href="<?= base_url()?>">departamento de atención al cliente</a>.</p>
			<hr>
			<p><strong>PAGO</strong></p>
			<hr>
			<p class="espacio_simple"><strong>8. ¿Es seguro utilizar mi tarjeta de crédito en la página web?</strong></p>
			<p>Sí, sus datos se transmiten de forma totalmente encriptada SSL. Para el pago con Visa y Mastercard sólo se aceptarán transacciones CES (Comercio Electrónico Seguro). Así pues, tras verificar que la tarjeta está adherida al sistema CES, el sistema contactará con el banco que la ha emitido para que autorice la compra. Una vez el banco confirme la autenticidad, se efectuará el cargo en la tarjeta. En caso contrario el pedido será cancelado.</p>
			<p class="espacio_simple"><strong>9. ¿Puedo obtener una factura a nombre de mi empresa? </strong></p>
			<p>Sí. Solamente tienes que cubrir los datos fiscales que te pedimos.</p>
			<hr>
			<p><strong>ENVÍO</strong></p>
			<hr>
			<p class="espacio_simple"><strong>10. ¿Puedo saber en qué estado se encuentra mi pedido?</strong></p>
			<p>Sí. Tras la recepción de tu confirmación de pedido recibirás una notificación certificando la salida y envío del paquete. Dispones de un nº localizador del envío que te permite llevar a cabo un seguimiento del envío a cualquier hora desde la página web <a href="<?= base_url()?>">www.QuickCartPanama.com</a> . Si deseas disponer de más información no dudes en ponerte en contacto con nuestro <a href="<?= base_url()?>">departamento de atención al cliente</a>.</p>
			<p class="espacio_simple"><strong>11. ¿Cómo puedo cancelar mi pedido?</strong></p>
			<p>Podrás cancelar tu pedido, siempre y cuando el estado del mismo lo permita. Puede ser perfectamente factible antes de la recepción del correo electrónico de notificación de salida del envío. Para ello, deberás ponerte en contacto con nuestro <a href="<?= base_url()?>">departamento de atención al cliente</a>.</p>
			<p class="espacio_simple"><strong>12. ¿Qué debo hacer si recibo un artículo incorrecto o defectuoso?</strong></p>
			<p>Si en alguna ocasión, por error, llegases a recibir un artículo no solicitado o con alguna tara o defecto, ponte en contacto con nuestro <a href="<?= base_url()?>">departamento de atención al cliente</a>.</p>
			<p class="espacio_simple"><strong>13. ¿Cuánto tardará en llegar mi pedido?</strong></p>
			<p>Los plazos de entrega dependen de tu ubicación. El plazo de entrega estimado es 40 minutos después que el estado del pedido cambie a <strong style="color:red;"><i>En Camino</i></strong>.</p>
			<p class="espacio_simple"><strong>14. ¿Cuánto he de pagar de gastos de envío?</strong></p>
			<p>Los gastos de envío estándar son de 4,00 USD.</p>
			<p class="espacio_simple"><strong>15. ¿Cuál es el proceso de la entrega de un pedido?</strong></p>
			<p>El envío estará dirigido a la Oficina de Correos de Referencia más cercana a la dirección de destino. Correos notificará su llegada por medio de un Aviso depositado en el buzón del destinatario.</p>
			<hr>
			<p><strong>CAMBIOS Y DEVOLUCIONES</strong></p>
			<hr>
			<p class="espacio_simple"><strong>16. ¿Puedo cambiar mis artículos?</strong></p>
			<p>Sí, los cambios se podrán realizarse de color y/o talla sobre la misma referencia o en sustitución de otro artículo. El proceso de cambio debe iniciarse en los 15 días laborables posteriores a la recepción del pedido y el cliente deberá hacerse cargo de los gastos de envío que genere ese proceso.</p>
			<p class="espacio_simple"><strong>17. ¿Cómo debo hacer para devolver un artículo?</strong></p>
			<ul><li>Para llevar a cabo una devolución deberás primeramente notificarlo poniéndote en contacto con nosotros en nuestro <a href="QuickCartPanama@gmail.com">departamento de atención al cliente</a>.</li>
			<li>Descargar, rellenar y enviarnos el <a href="/sites/default/files/users/user_1/documentodesistimiento_es.pdf">documento de desistimiento</a> correspondiente.</li>
			<li>Enviar los artículos a través de la Sociedad Estatal de Correos y Telégrafos y por medio de un modelo de paquete que permita que el valor y circulación de su contenido estén registrados o controlados hasta su destino.</li>
			</ul><p class="espacio_simple"><strong>18. ¿Cuál es el plazo para poder realizar una devolución?</strong></p>
			<p>El plazo para cualquier devolución estará dentro de los 30 días naturales desde la recepción de su notificación de devolución.</p>
			<p class="espacio_simple"><strong>19. ¿Tengo que pagar algo por mi devolución?</strong></p>
			<p>El cliente deberá hacerse cargo de los gastos de envío que genere este proceso.</p>
			<p class="espacio_simple"><strong>20. ¿Cuándo recibiré el reembolso de mi devolución?</strong></p>
			<p>Tras aprobar la devolución (los artículos tienen que estar en perfecto estado y tener las etiquetas interiores) recibirás un correo electrónico de confirmación indicándote que el importe se abonará en tu cuenta en unos días. Recuerda que el abono a la tarjeta de crédito depende siempre de tu entidad bancaria.</p>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Atención al cliente</button>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
		</div>
		</div>
	</div>
	</div>

<!--AnimationLoading-->
	<div id="divLoading" >
      <div>
        <img src="<?= media(); ?>/images/loading1.svg" alt="Loading">
      </div>
    </div>
<!-- Header -->
	<header>
<!-- Header desktop -->
		<div class="container-menu-desktop">
<!-- Topbar -->
			<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					<div class="left-top-bar">
						<?php if(isset($_SESSION['login'])){?>
						BIENVENIDO: <?= $_SESSION['userData']['nombres'].' '.$_SESSION['userData']['apellidos']?>
						<?php } else{?>
							<a class="flex-c-m trans-04 p-lr-25">
								Bienvenido a QuickCart
							</a>
						<?php }?>
					</div>

					<div class="right-top-bar flex-w h-full">
						<a href="#" class="flex-c-m trans-04 p-lr-25" data-toggle="modal" data-target="#modalPreguntasFrecuentes">
							Preguntas frecuentes
						</a>
<!--Verificación si el user está logueado-->
						<?php 
						if(isset($_SESSION['login'])){
						?>
							<a href="<?= base_url()?>/dashboard" class="flex-c-m trans-04 p-lr-25">
								Mi cuenta
							</a>
						<?php }
							if(isset($_SESSION['login'])){
						?>
							<a href="<?= base_url()?>/logout" class="flex-c-m trans-04 p-lr-25">
								Salir
							</a>
						<?php } else{?>
							<a href="<?= base_url()?>/login" class="flex-c-m trans-04 p-lr-25">
								Iniciar Sesión
							</a>
						<?php }?>
						
<!--FinIntención-->
					</div>
				</div>
			</div>

			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->		
					<a href="<?= base_url(); ?>" class="logo">
						<img src="<?= media() ?>/tienda/images/logo.png" alt="QuickCart">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li class="active-menu">
								<a href="<?= base_url(); ?>">Inicio</a>
							</li>

							<li>
								<a href="<?= base_url(); ?>/tienda">Categorías</a>
							</li>
							<!-- Menu desktop
							<li>
								<a href="<?= base_url(); ?>/carrito">Carrito</a>
							</li>Menu desktop -->

							<li>
								<a href="<?= base_url(); ?>/nosotros">Sobre nosotros</a>
							</li>

							<li>
								<a href="<?= base_url(); ?>/contacto">Contacto</a>
							</li>
						</ul>
					</div>	

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
							<i class="zmdi zmdi-search"></i>
						</div>
						<?php if($data['page_name'] != "carrito" and $data['page_name'] != "procesarpago"){ ?>
						<div class="cantCarrito icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="<?= $cantCarrito; ?> ">
							<i class="zmdi zmdi-shopping-cart"></i>
						</div>
						<?php } ?>
					</div>
				</nav>
			</div>	
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<a href="<?= base_url(); ?>"><img src="<?= media() ?>/tienda/images/logo.png" alt="QuickCart"></a>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m m-r-15">
				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
					<i class="zmdi zmdi-search"></i>
				</div>
				<?php if($data['page_name'] != "carrito" and $data['page_name'] != "procesarpago"){ ?>
				<div class="cantCarrito icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="<?= $cantCarrito; ?>">
					<i class="zmdi zmdi-shopping-cart"></i>
				</div>
				<?php } ?>
			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="topbar-mobile">
				<li>
					<div class="left-top-bar">
						BIENVENIDO
						<?php if(isset($_SESSION['login'])){?>
							BIENVENIDO: <?= $_SESSION['userData']['nombres'].' '.$_SESSION['userData']['apellidos']?>
						<?php } ?>
					</div>
				</li>

				<li>
					<div class="right-top-bar flex-w h-full">
						<?php 
						if(isset($_SESSION['login'])){
						?>
							<a href="<?= base_url()?>/dashboard" class="flex-c-m p-lr-10 trans-04">
								Mi cuenta
							</a>
						<?php }
							if(isset($_SESSION['login'])){
						?>
							<a href="<?= base_url()?>/logout" class="flex-c-m p-lr-10 trans-04">
								Salir
							</a>
						<?php } else{?>
							<a href="<?= base_url()?>/login" class="flex-c-m p-lr-10 trans-04">
								Iniciar Sesión
							</a>
						<?php }?>
					</div>
				</li>
			</ul>

			<ul class="main-menu-m">
				<li>
					<a href="<?= base_url(); ?>">Inicio</a>
				</li>

				<li>
					<a href="<?= base_url(); ?>/tienda">Tienda</a>
				</li>

				<li>
					<a href="<?= base_url(); ?>/carrito">Carrito</a>
				</li>

				<li>
					<a href="<?= base_url(); ?>/nosotros">Nosotros</a>
				</li>

				<li>
					<a href="<?= base_url(); ?>/contacto">Contacto</a>
				</li>
			</ul>
		</div>

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="<?= media() ?>/tienda/images/icons/icon-close2.png" alt="CLOSE">
				</button>

				<form class="wrap-search-header flex-w p-l-15" method="get" action="<?=base_url()?>/tienda/search">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input type="hidden" name="p" value="1">
					<input class="plh3" type="text" name="s" placeholder="Buscar...">
				</form>
			</div>
		</div>
	</header>
	<!-- Cart -->
	<div class="wrap-header-cart js-panel-cart">
		<div class="s-full js-hide-cart"></div>
		<div class="header-cart flex-col-l p-l-65 p-r-25">
			<div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Tu carrito
				</span>

				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>
			<div id="productosCarrito" class="header-cart-content flex-w js-pscroll">
				<?php getModal('modalCarrito',$data); ?>
			</div>
		</div>
	</div>
