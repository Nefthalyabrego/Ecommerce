<?php 
headerTienda($data);
 ?>	
 </br> </br> </br>	
	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url(<?= media()."/tienda/images/bg-01.jpg"?>);">
		<h2 class="ltext-105 cl0 txt-center" style="-webkit-text-emphasis-style: open;">
			Contacto
		</h2>
	</section>	

	<!-- Content page -->
	<section class="bg0 p-t-104 p-b-116">
		<div class="container">
			<div class="flex-w flex-tr">
				<div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
					<form>
						<h4 class="mtext-105 cl2 txt-center p-b-30">
                            Mándanos un mensaje
						</h4>

						<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="email" placeholder="Ingrese dirección de correo">
							<img class="how-pos4 pointer-none" src="<?= media()."/tienda/images/icons/icon-email.png"?>" alt="ICON">
						</div>

						<div class="bor8 m-b-30">
							<textarea class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25" name="msg" placeholder="¿Como podemos ayudarte?"></textarea>
						</div>

						<button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
							Enviar
						</button>
					</form>
				</div>

				<div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">
					<div class="flex-w w-full p-b-42">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-map-marker"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Dirección
							</span>

							<p class="stext-115 cl6 size-213 p-t-18">
								QuickCart Center 8th , 379 Hudson St, New York, NY 10018 US
							</p>
						</div>
					</div>

					<div class="flex-w w-full p-b-42">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-phone-handset"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Teléfono
							</span>

							<p class="stext-115 cl1 size-213 p-t-18">
								+1 800 1236879
							</p>
						</div>
					</div>

					<div class="flex-w w-full">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-envelope"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Soporte de ventas
							</span>

							<p class="stext-115 cl1 size-213 p-t-18">
								contact@QuickCart.com
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>	
	
	
	<!-- Map -->
	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7687.836923447443!2d-82.4614419135687!3d8.431383992517986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa59de9ac61ca1d%3A0x58d060629252d621!2sChiriqu%C3%AD%20Mall%2C%201%2C%20San%20Pablo%20Viejo%20507!5e1!3m2!1ses!2spa!4v1625800643006!5m2!1ses!2spa" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	</div>
<?php 
	footerTienda($data);
?>
