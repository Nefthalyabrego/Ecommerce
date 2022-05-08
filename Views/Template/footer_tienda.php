
	<!-- Footer -->
	<footer class="bg3 p-t-75 p-b-32">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-4 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Categorías
					</h4>
					<ul>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Snacks
							</a>
						</li>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Carnes
							</a>
						</li>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Ferretería
							</a>
						</li>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Limpieza
							</a>
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-lg-4 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Contacto
					</h4>
					<p class="stext-107 cl7 size-220">
						Dirección: <?= DIRECCION; ?><BR>
						Teléfono: <?= TELEMPRESA; ?><BR>
						Email: <?= EMAIL_EMPRESA; ?><BR>
					</p>
					<div class="p-t-27">
						<a href="https://facebook.com" target="_blanck" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="https://instagram.com" target="_blanck"  class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-instagram"></i>
						</a>
						<a href="https://twiter.com" target="_blanck"  class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-twiter"></i>
						</a>
					</div>
				</div>

				<div class="col-sm-6 col-lg-4 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Ubicación
					</h4>
					<div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
						<div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div><script>(function () {
						var setting = {"height":200,"width":400,"zoom":14,"queryString":"Chiriquí Mall, 1, San Pablo Viejo, David, Panamá","place_id":"ChIJHcphrOmdpY8RIdZSkmJg0Fg","satellite":true,"centerCoord":[8.432852426471241,-82.46480389449779],"cid":"0x58d060629252d621","lang":"es","cityUrl":"/panama/david-14700","cityAnchorText":"Mapa de David, Chiriquí, Panamá","id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"520991"};
						var d = document;
						var s = d.createElement('script');
						s.src = 'https://1map.com/js/script-for-user.js?embed_id=520991';
						s.async = true;
						s.onload = function (e) {
						window.OneMap.initMap(setting)
						};
						var to = d.getElementsByTagName('script')[0];
						to.parentNode.insertBefore(s, to);
						})();</script><a href="https://1map.com/es/map-embed">1 Map</a>
						</div>
					</div>

			</div>

			<div class="p-t-40">
				<p class="stext-107 cl6 txt-center">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					<?= NOMBRE_EMPRESA; ?> | <?= WEB_EMPRESA; ?> |
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</p>
			</div>
		</div>
	</footer>
	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>
	<script>
	    const base_url = "<?= base_url(); ?>";
		const smony = "<?= SMONEY; ?>";
	</script>
<!--===============================================================================================-->	
	<script src="<?= media() ?>/tienda/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= media() ?>/tienda/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= media() ?>/tienda/vendor/bootstrap/js/popper.js"></script>
	<script src="<?= media() ?>/tienda/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= media() ?>/tienda/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= media() ?>/tienda/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?= media() ?>/tienda/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?= media() ?>/tienda/vendor/slick/slick.min.js"></script>
	<script src="<?= media() ?>/tienda/js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script src="<?= media() ?>/tienda/vendor/parallax100/parallax100.js"></script>
<!--===============================================================================================-->
	<script src="<?= media() ?>/tienda/vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= media() ?>/tienda/vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= media() ?>/tienda/vendor/sweetalert/sweetalert.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= media() ?>/tienda/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= media() ?>/tienda/js/main.js"></script>
	<script src="<?= media();?>/js/functions_admin.js"></script>
	<script src="<?= media() ?>/js/functions_login.js"></script>
	<script src="<?= media() ?>/tienda/js/functions.js"></script>

	<script src="<?= media();?>/js/fontawesome.js"></script>

</body>
</html>