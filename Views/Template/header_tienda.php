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
			<p class="espacio_simple"><strong>1. ??Cu??les son los pasos a seguir para comprar en la tienda Online? </strong></p>
			<ul><li class="espacio_simple">Elige el producto que te interesa de las secciones clasificadas de la tienda on-line, y a trav??s de un clic conseguir??s una ampliaci??n de su fotograf??a adem??s de informaci??n detallada del mismo.</li>
			<li>A??ade el art??culo a la cesta. A continuaci??n puedes elegir seguir comprando o tramitar pedido.</li>
			<li>Selecciona un m??todo de pago: Visa, Visa Electron, Mastercard, American Express...</li>
			<li>Confirma el pedido y recibir??s un correo electr??nico de confirmaci??n.</li>
			</ul><p class="espacio_simple"><strong>2. ??Es seguro comprar en la tienda online?</strong></p>
			<p>S??. Puedes comprar con total tranquilidad, pues dedicamos un gran esfuerzo en disponer de recursos con los que garantizar la seguridad de tus compras y de tus datos.</p>
			<p class="espacio_simple"><strong>3. ??Se reponen los art??culos con la indicaci??n ???agotado????</strong></p>
			<p>Si un art??culo est?? agotado, trataremos de reponerlo lo antes posible. Si no hubiese m??s existencias del mismo, lo retiraremos de la p??gina web.</p>
			<p class="espacio_simple"><strong>4. ??Recibir?? el mismo producto que veo en la fotograf??a de la tienda online?</strong></p>
			<p>S??, excepto en aquellos productos manufacturados por medio de procesos artesanales en los que podr??a haber m??nimas diferencias de acabado.</p>
			<p class="espacio_simple"><strong>5. ??Es posible recibir informaci??n peri??dica en mi buz??n de correo electr??nico con las ??ltimas novedades y ofertas de la tienda online?</strong></p>
			<p>Si dispones de tu alta en la ???Newsletter??? recibir??s informaci??n sobre las ??ltimas novedades, adem??s de las nuevas actividades culturales que podr??s disfrutar.</p>
			<p class="espacio_simple"><strong>6. ??C??mo puedo asegurarme de haber realizado bien mi compra?</strong></p>
			<p>Una vez hecho tu pedido, recibir??s un correo electr??nico de confirmaci??n. Si no lo recibieses, ponte en contacto con nuestro <a href="<?= base_url()?>">departamento de atenci??n al cliente</a>.</p>
			<p class="espacio_simple"><strong>7. ??Qu?? debo hacer si recibo un art??culo incorrecto o defectuoso?</strong></p>
			<p>Si en alguna ocasi??n, por error, llegases a recibir un art??culo no solicitado o con alguna tara o defecto, ponte en contacto con nuestro <a href="<?= base_url()?>">departamento de atenci??n al cliente</a>.</p>
			<hr>
			<p><strong>PAGO</strong></p>
			<hr>
			<p class="espacio_simple"><strong>8. ??Es seguro utilizar mi tarjeta de cr??dito en la p??gina web?</strong></p>
			<p>S??, sus datos se transmiten de forma totalmente encriptada SSL. Para el pago con Visa y Mastercard s??lo se aceptar??n transacciones CES (Comercio Electr??nico Seguro). As?? pues, tras verificar que la tarjeta est?? adherida al sistema CES, el sistema contactar?? con el banco que la ha emitido para que autorice la compra. Una vez el banco confirme la autenticidad, se efectuar?? el cargo en la tarjeta. En caso contrario el pedido ser?? cancelado.</p>
			<p class="espacio_simple"><strong>9. ??Puedo obtener una factura a nombre de mi empresa? </strong></p>
			<p>S??. Solamente tienes que cubrir los datos fiscales que te pedimos.</p>
			<hr>
			<p><strong>ENV??O</strong></p>
			<hr>
			<p class="espacio_simple"><strong>10. ??Puedo saber en qu?? estado se encuentra mi pedido?</strong></p>
			<p>S??. Tras la recepci??n de tu confirmaci??n de pedido recibir??s una notificaci??n certificando la salida y env??o del paquete. Dispones de un n?? localizador del env??o que te permite llevar a cabo un seguimiento del env??o a cualquier hora desde la p??gina web <a href="<?= base_url()?>">www.QuickCartPanama.com</a> . Si deseas disponer de m??s informaci??n no dudes en ponerte en contacto con nuestro <a href="<?= base_url()?>">departamento de atenci??n al cliente</a>.</p>
			<p class="espacio_simple"><strong>11. ??C??mo puedo cancelar mi pedido?</strong></p>
			<p>Podr??s cancelar tu pedido, siempre y cuando el estado del mismo lo permita. Puede ser perfectamente factible antes de la recepci??n del correo electr??nico de notificaci??n de salida del env??o. Para ello, deber??s ponerte en contacto con nuestro <a href="<?= base_url()?>">departamento de atenci??n al cliente</a>.</p>
			<p class="espacio_simple"><strong>12. ??Qu?? debo hacer si recibo un art??culo incorrecto o defectuoso?</strong></p>
			<p>Si en alguna ocasi??n, por error, llegases a recibir un art??culo no solicitado o con alguna tara o defecto, ponte en contacto con nuestro <a href="<?= base_url()?>">departamento de atenci??n al cliente</a>.</p>
			<p class="espacio_simple"><strong>13. ??Cu??nto tardar?? en llegar mi pedido?</strong></p>
			<p>Los plazos de entrega dependen de tu ubicaci??n. El plazo de entrega estimado es 40 minutos despu??s que el estado del pedido cambie a <strong style="color:red;"><i>En Camino</i></strong>.</p>
			<p class="espacio_simple"><strong>14. ??Cu??nto he de pagar de gastos de env??o?</strong></p>
			<p>Los gastos de env??o est??ndar son de 4,00 USD.</p>
			<p class="espacio_simple"><strong>15. ??Cu??l es el proceso de la entrega de un pedido?</strong></p>
			<p>El env??o estar?? dirigido a la Oficina de Correos de Referencia m??s cercana a la direcci??n de destino. Correos notificar?? su llegada por medio de un Aviso depositado en el buz??n del destinatario.</p>
			<hr>
			<p><strong>CAMBIOS Y DEVOLUCIONES</strong></p>
			<hr>
			<p class="espacio_simple"><strong>16. ??Puedo cambiar mis art??culos?</strong></p>
			<p>S??, los cambios se podr??n realizarse de color y/o talla sobre la misma referencia o en sustituci??n de otro art??culo. El proceso de cambio debe iniciarse en los 15 d??as laborables posteriores a la recepci??n del pedido y el cliente deber?? hacerse cargo de los gastos de env??o que genere ese proceso.</p>
			<p class="espacio_simple"><strong>17. ??C??mo debo hacer para devolver un art??culo?</strong></p>
			<ul><li>Para llevar a cabo una devoluci??n deber??s primeramente notificarlo poni??ndote en contacto con nosotros en nuestro <a href="QuickCartPanama@gmail.com">departamento de atenci??n al cliente</a>.</li>
			<li>Descargar, rellenar y enviarnos el <a href="/sites/default/files/users/user_1/documentodesistimiento_es.pdf">documento de desistimiento</a> correspondiente.</li>
			<li>Enviar los art??culos a trav??s de la Sociedad Estatal de Correos y Tel??grafos y por medio de un modelo de paquete que permita que el valor y circulaci??n de su contenido est??n registrados o controlados hasta su destino.</li>
			</ul><p class="espacio_simple"><strong>18. ??Cu??l es el plazo para poder realizar una devoluci??n?</strong></p>
			<p>El plazo para cualquier devoluci??n estar?? dentro de los 30 d??as naturales desde la recepci??n de su notificaci??n de devoluci??n.</p>
			<p class="espacio_simple"><strong>19. ??Tengo que pagar algo por mi devoluci??n?</strong></p>
			<p>El cliente deber?? hacerse cargo de los gastos de env??o que genere este proceso.</p>
			<p class="espacio_simple"><strong>20. ??Cu??ndo recibir?? el reembolso de mi devoluci??n?</strong></p>
			<p>Tras aprobar la devoluci??n (los art??culos tienen que estar en perfecto estado y tener las etiquetas interiores) recibir??s un correo electr??nico de confirmaci??n indic??ndote que el importe se abonar?? en tu cuenta en unos d??as. Recuerda que el abono a la tarjeta de cr??dito depende siempre de tu entidad bancaria.</p>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Atenci??n al cliente</button>
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
<!--Verificaci??n si el user est?? logueado-->
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
								Iniciar Sesi??n
							</a>
						<?php }?>
						
<!--FinIntenci??n-->
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
								<a href="<?= base_url(); ?>/tienda">Categor??as</a>
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
								Iniciar Sesi??n
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
