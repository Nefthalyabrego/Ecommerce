<?php 
headerTienda($data);
$arrProductos = $data['productos'];
 ?>
<hr>
<div class="sec-banner bg0 p-t-80 p-b-50">
		<div class="container">
			<div class="flex-w flex-l-m filter-tope-group m-tb-10">
					<h3><strong>Categorías</strong></h3>
				</div>
			<div class="row">
				<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
					<!-- Block1 -->
					<div class="block1 wrap-pic-w">
						<img src="http://localhost/tienda_virtual/Assets/images/uploads/img_f292da8a4954e1c35432ac88e3eeafdc.jpg" alt="Mascotas">

						<a href="http://localhost/tienda_virtual/tienda/categoria/2/mascotas" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									Mascotas								</span>
							</div>
							<div class="block1-txt-child2 p-b-4 trans-05">
								<div class="block1-link stext-101 cl0 trans-09">
									Ver productos
								</div>
							</div>
						</a>
					</div>
				</div>
								<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
					<!-- Block1 -->
					<div class="block1 wrap-pic-w">
						<img src="http://localhost/tienda_virtual/Assets/images/uploads/img_b0765a07b1818b196544818b1bb44753.jpg" alt="Snacks">

						<a href="http://localhost/tienda_virtual/tienda/categoria/5/snacks" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									Snacks								</span>
							</div>
							<div class="block1-txt-child2 p-b-4 trans-05">
								<div class="block1-link stext-101 cl0 trans-09">
									Ver productos
								</div>
							</div>
						</a>
					</div>
				</div>
								<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
					<!-- Block1 -->
					<div class="block1 wrap-pic-w">
						<img src="http://localhost/tienda_virtual/Assets/images/uploads/img_847d9d68132da1a0a2382b5f977d579e.jpg" alt="Ferretería">

						<a href="http://localhost/tienda_virtual/tienda/categoria/6/ferreteria" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									Ferretería								</span>
							</div>
							<div class="block1-txt-child2 p-b-4 trans-05">
								<div class="block1-link stext-101 cl0 trans-09">
									Ver productos
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Product -->
	<div class="bg0 m-t-23 p-b-140">
		<div class="container">
			<div class="flex-w flex-sb-m p-b-52">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10">
					<h3><strong>Productos</strong></h3>
				</div>
				<div class="flex-w flex-c-m m-tb-10">
					<div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
						&nbsp;&nbsp;
						<i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
						<i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						 Categoría &nbsp;
					</div>
				</div>

				<!-- Filter -->
				<div class="dis-none panel-filter w-full p-t-10">
					<div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
						<div class="filter-col1 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Clasificar por:
							</div>

							<ul>
								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Defecto
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Popularidad
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Puntuación media
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04 filter-link-active">
										Agregados recientemente
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Precio: Más bajo a más alto
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Precio: Más alto a más bajo
									</a>
								</li>
							</ul>
						</div>

						<div class="flex-w p-t-4 m-r--5">
							<a href="" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
								Verduras
							</a>
							<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
								Snacks
							</a>
							<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
								Limpieza
							</a>
							<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
								Carnes
							</a>
							<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
								Hogar
							</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row isotope-grid">
			<?php
				if (count($arrProductos) > 0){
					for ($p=0; $p < count($arrProductos); $p++) { 
						$ruta = $arrProductos[$p]['ruta'];
						if(count($arrProductos[$p]['images']) > 0 ){
							$portada = $arrProductos[$p]['images'][0]['url_image'];
						}else{
							$portada = media().'/images/uploads/product.png';
						}
				?>
					<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-pic hov-img0">
								<img src="<?= $portada ?>" alt="<?= $arrProductos[$p]['nombre'] ?>">
								<a href="<?= base_url().'/tienda/producto/'.$arrProductos[$p]['idproducto'].'/'.$ruta; ?>" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
									Ver producto
								</a>
							</div>
							<div class="block2-txt flex-w flex-t p-t-14">
								<div class="block2-txt-child1 flex-col-l ">
									<a href="<?= base_url().'/tienda/producto/'.$arrProductos[$p]['idproducto'].'/'.$ruta; ?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
										<?= $arrProductos[$p]['nombre'] ?>
									</a>
									<span class="stext-105 cl3">
										<?= SMONEY.formatMoney($arrProductos[$p]['precio']); ?>
									</span>
								</div>
								<div class="block2-txt-child2 flex-r p-t-3">
									<a href="<?= base_url().'/tienda/producto/'.$arrProductos[$p]['nombre']; ?>" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
										<img class="icon-heart1 dis-block trans-04" src="<?= media() ?>/tienda/images/icons/icon-heart-01.png" alt="ICON">
										<img class="icon-heart2 dis-block trans-04 ab-t-l" src="<?= media() ?>/tienda/images/icons/icon-heart-02.png" alt="ICON">
									</a>
									<div class="flex-w flex-r-m p-b-10">
										<div class="size-101 flex-w flex-m respon6-next">
											<div class="wrap-num-product flex-w m-r-20 m-tb-10">
												<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
													<i class="fs-16 zmdi zmdi-minus"></i>
												</div>

												<input id="cant-product" class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1" min="1">

												<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
													<i class="fs-16 zmdi zmdi-plus"></i>
												</div>
											</div>

											<button id="ykjh7To0hP6ce4Jyo4XXZw==" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
												Agregar al carrito
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php }

				}else{
					?>
					<p>No hay productos para mostrar <a href="<?=base_url() ?>/tienda">Ver productos</a></p>
				<?php } ?>
			</div>

			<!-- Paginación de productos -->
			<?php
				if(count($data['productos']) >0){
					$prevPagina = $data['pagina'] - 1;
					$nextPagina = $data['pagina'] + 1;
				}
			?>
			<div class="flex-c-m flex-w w-full p-t-45">
				<?php if($data['pagina'] > 1) { ?>
					<a href="<?= base_url()?>/tienda/page/<?= $prevPagina ?>" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04"><i class="fas fa-chevron-left"></i> &nbsp; Anterior</a>&nbsp;&nbsp;
				<?php } ?>
				<?php if($data['pagina'] != $data['total_paginas']) { ?>
					<a href="<?= base_url()?>/tienda/page/<?= $nextPagina ?>" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04"></i>Siguiente &nbsp; <i class="fas fa-chevron-right"></i></a>
				<?php } ?>
			</div>
		</div>
	</div>
<?php 
	footerTienda($data);
?>
