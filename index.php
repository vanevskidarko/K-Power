
<?php session_start(); 

// echo '<pre>';
// print_r($_COOKIE);die;
?>

<!DOCTYPE html>
<html>
	<?php require('includes/head.php') ?>
	<body>

		<div class="body">
			<?php require('includes/header.php')?>
			<div class="gdpr-bar" data-plugin-gdpr>
			<div class="gdpr-bar-description">
				<p class="text-color-light opacity-7 mb-0"><?echo $lang['cookieagreetext'];?></p>
			</div>
			<div class="gdpr-bar-actions">
				<p href="politikazakoristenjekolacinja.php" class="gdpr-preferences-trigger text-decoration-none text-color-light">Ние користиме колачиња за да го подобриме корисничкото искуство и да го анализираме сообраќајот на веб-страницата. Прочитајте за тоа како ги користиме колачињата и како можете да ги контролирате со кликнување на дознај повеќе </p>
				<a href="politikazaprivatnost.php" class="text-decoration-none text-white btn btn-modern btn-px-4 py-3 font-weight-bold" >ДОЗНАЈ ПОВЕЌЕ</a>
				<a href="#" class="gdpr-agree-trigger text-decoration-none btn btn-primary btn-modern btn-px-4 py-3 font-weight-bold">ПРИФАЌАМ</a>
			</div>
		</div>
</div>
<!-- GDPR Preferences Popup -->
<div class="gdpr-preferences-popup">
			<div class="gdpr-preferences-popup-content position-relative">
				<a href="#" class="gdpr-close-popup text-color-grey text-color-hover-dark">
					<i class="fas fa-times"></i>
				</a>
				<form class="gdpr-preferences-form">
					<div class="gdpr-preferences-popup-content-body">
						<h4 class="text-color-dark font-weight-bold mb-3">uyryryt</h4>
						<p>eqweqwe</p>
						<hr>

						<div class="gdpr-cookie-item">
							<div class="gdpr-cookie-item-title">
								<strong class="text-color-dark">qerkoqrkoqkoerqkwoe</strong>
							</div>
							<div class="gdpr-cookie-item-description">
								<p class="mb-0">trtererertertertrterterter&nbsp;<a href="politikazaprivatnost.php">yryrty</a></p>
							</div>
							<div class="gdpr-cookie-item-action">
								<strong class="text-color-dark text-2">erttertrte</strong>
								<input type="hidden" name="cookies_consent[]" class="gdpr-input" value="privacy-policy" />
							</div>
						</div>
						<div class="gdpr-cookie-item">
							<div class="gdpr-cookie-item-title">
								<strong class="text-color-dark">ertertrtret</strong>
							</div>
							<div class="gdpr-cookie-item-description">
								<p class="mb-0">trertertert</p>
							</div>
							<div class="gdpr-cookie-item-action">
								<strong class="text-color-dark text-2">ertertertertr</strong>
								<input type="hidden" name="cookies_consent[]" class="gdpr-input" value="cdn" />
							</div>
						</div>
						<div class="gdpr-cookie-item">
							<div class="gdpr-cookie-item-title">
								<strong class="text-color-dark">trterter</strong>
							</div>
							<div class="gdpr-cookie-item-description">
								<p class="mb-0">ertrerteertert</p>
							</div>
							<div class="gdpr-cookie-item-action">
								<input type="checkbox" name="cookies_consent[]" class="gdpr-input custom-checkbox-switch" value="youtube" />
							</div>
						</div>
						
					</div>
					<div class="gdpr-preferences-popup-content-footer">
						<button type="submit" class="btn btn-primary btn-modern btn-px-4 py-3 font-weight-bold"><? echo $lang['savepreferences'];?></button>
						<a href="politikazaprivatnost.php" class="text-color-default text-color-hover-primary"><? echo $lang['politikaprivatnost'];?></a>
					</div>
				</form>
			</div>
		</div>
			<div role="main" class="main">

				<section class="section section-with-shape-divider overflow-hidden border-0 m-0" style="background-image: url(img/k-power/hero-kpoer.jpg); background-repeat: no-repeat; background-size: cover;">
					<div class="shape-divider shape-divider-bottom" style="height: 120px;">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2000 120" preserveAspectRatio="xMinYMin">
							<polygon fill="#FFF" points="-11,2 693,112 2019,6 2019,135 -11,135 "/>
						</svg>
					</div>
					<div class="container custom-container-absolute-centered-x">
						<div class="row justify-content-end">
							<div class="col-auto position-relative">
								<img src="img/k-power/topeleven.png" class="img-fluid position-relative mt-5 bottom-10 right-0 d-none d-sm-block appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="500" alt="sertifikat za garancija" />
							</div>
						</div>
					</div>
					<div class="container-fluid px-0 mb-5">
						<div class="row">
							<div class="col-sm-9 col-md-8 col-lg-7 col-xl-4 text-center text-sm-end z-index-0 px-5 px-sm-0 mt-5 mt-sm-0 pt-4 pt-sm-0">
								<div class="position-relative bg-color-grey p-5">
									<div class="spacer my-5 py-2 d-none d-sm-block"></div>
									<div class="overflow-hidden pt-sm-5 mt-sm-5">
										<h1 class="font-weight-semibold text-10 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">Награда</h1>
									</div>
									<div class="overflow-hidden mb-3">
										<h2 class="font-weight-semibold text-10 line-height-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="500">
											<strong class="font-weight-extra-bold custom-font-size-2">"Top Brand PV EPC Turkey 2020"</strong>
										</h2>
									</div>
									<p class="custom-font-size-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">Elin A.S. е докажан лидер во производството на фотоволтаични панели.</p>
									<a href="zanas.php" class="btn custom-svg-btn-style-1 text-color-hover-primary mb-sm-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
										<svg class="custom-svg-btn-background" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 210 70" preserveAspectRatio="none">
											<polygon fill="none" stroke="#D4D4D4" stroke-width="2" stroke-miterlimit="10" points="7,5 185,5 205,34 186,63 7,63 "/>
										</svg>
										ДОЗНАЈ ПОВЕЌЕ
									</a>

									<div class="spacer py-2"></div>
								</div>
							</div>
						</div>
					</div>
				</section>


				<section class="section section-with-shape-divider border-0 z-index-2 pb-0 m-0">
					<div class="shape-divider shape-divider-reverse-xy" style="height: 120px;">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2000 120" preserveAspectRatio="xMinYMin">
							<polygon fill="#FFF" points="-11,2 693,112 2019,6 2019,135 -11,135 "/>
						</svg>
					</div>
					<div class="container pt-3 mt-5">
						<div class="row justify-content-center mb-5">
							<div class="col-lg-9 col-xl-8 text-center">
								<div class="overflow-hidden">
									<h2 class="text-color-primary font-weight-medium positive-ls-3 text-4 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">НИЕ НУДИМЕ</h2>
								</div>
								<div class="overflow-hidden mb-3">
									<h3 class=" text-transform-none text-9 line-height-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400">Фотоволтаици, cоларни панели и системи
										за производство и продажба на електроенергија</h3>
								</div>
								
							</div>
						</div>
						<div class="row">
							<div class="col-lg-4 p-1">

								<h5 class="text-uppercase mt-4"></h5>
								<span class="thumb-info thumb-info-swap-content anim-hover-inner-wrapper appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200"">
									<span class="thumb-info-wrapper overlay overlay-show overlay-gradient-bottom-content">
										<img src="img/k-power/card-1.jpg" class="img-fluid" alt="slika od solarni paneli">
										<span class="thumb-info-title thumb-info-title-vert-align bg-transparent w-100 text-center mw-100 p-0">
											<span class="anim-hover-inner-translate-top-40px transition-2ms d-inline-block">
												<span class="thumb-info-inner"><em class="fs-5 pt-5 mt-5">СОНЦЕТО НЕ ПРАЌА ФАКТУРИ.
												</em> </span>
											</span>
										</span>
										<span class="thumb-info-title bottom-30 bg-transparent w-100 mw-100 p-0 text-center">
											<span class="thumb-info-swap-content-wrapper">
												<span class="thumb-info-inner">
													<a href="paneli.php" class="btn btn-primary btn-circle"><i class="fas fa-arrow-right"></i></a>
												</span>
												<span class="thumb-info-inner text-2">
													<p class="px-5 fs-6 font-weight-medium text-light mb-5 pb-5 ">НАПРАВЕТЕ ИНВЕСТИЦИЈА КОЈА ВРЕДИ.</p>
													<a href="paneli.php" class="btn btn-modern btn-primary btn-arrow-effect-1 py-2 px-3">Дознај Повеќе <i class="fas fa-arrow-right ms-2"></i></a>
												</span>
											</span>
										</span>
									</span>
								</span>

							</div>
							<div class="col-lg-4 p-1">

								<h5 class="text-uppercase mt-4"></h5>
								<span class="thumb-info thumb-info-swap-content anim-hover-inner-wrapper appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200"">
									<span class="thumb-info-wrapper overlay overlay-show overlay-gradient-bottom-content">
										<img src="img/k-power/card-5.avif" class="img-fluid" alt="slika od solarni paneli">
										<span class="thumb-info-title thumb-info-title-vert-align bg-transparent w-100 text-center mw-100 p-0">
											<span class="anim-hover-inner-translate-top-40px transition-2ms d-inline-block ">
												<span class="thumb-info-inner"><em class="fs-5 pt-5 mt-5">ВИСОКИ СМЕТКИ ЗА СТРУЈА?
												</em> </span>
											</span>
										</span>
										<span class="thumb-info-title bottom-30 bg-transparent w-100 mw-100 p-0 text-center">
											<span class="thumb-info-swap-content-wrapper">
												<span class="thumb-info-inner">
													<a href="invertori.php" class="btn btn-primary btn-circle"><i class="fas fa-arrow-right"></i></a>
												</span>
												<span class="thumb-info-inner text-2">
													<p class="px-5 fs-6 font-weight-medium text-light mb-5 pb-5 ">НИКОГАШ ПОВЕЌЕ.</p>
													<a href="invertori.php" class="btn btn-modern btn-primary btn-arrow-effect-1 py-2 px-3">Дознај Повеќе <i class="fas fa-arrow-right ms-2"></i></a>
												</span>
											</span>
										</span>
									</span>
								</span>

							</div>
							<div class="col-lg-4 p-1">

								<h5 class="text-uppercase mt-4"></h5>
								<span class="thumb-info thumb-info-swap-content anim-hover-inner-wrapper appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200"">
									<span class="thumb-info-wrapper overlay overlay-show overlay-gradient-bottom-content">
										<img src="img/k-power/card-3.jpg" class="img-fluid" alt="slika od solarni paneli">
										<span class="thumb-info-title thumb-info-title-vert-align bg-transparent w-100 text-center mw-100 p-0">
											<span class="anim-hover-inner-translate-top-40px transition-2ms d-inline-block">
												<span class="thumb-info-inner"><em class="fs-5 pt-5 mt-5">100% СОПСТВЕНА ЕНЕРГИЈА.
												</em> </span>
											</span>
										</span>
										<span class="thumb-info-title bottom-30 bg-transparent w-100 mw-100 p-0 text-center ">
											<span class="thumb-info-swap-content-wrapper">
												<span class="thumb-info-inner">
													<a href="konstrukcii.php" class="btn btn-primary btn-circle"><i class="fas fa-arrow-right"></i></a>
												</span>
												<span class="thumb-info-inner text-2">
													<p class="px-5 fs-6 font-weight-medium text-light mb-5 pb-5 ">ЗА ДА НЕ РАЗМИСЛУВАТЕ ЗА ИЗНОСОТ НА СМЕТКИТЕ.</p>
													<a href="konstrukcii.php" class="btn btn-modern btn-primary btn-arrow-effect-1 py-2 px-3">Дознај Повеќе <i class="fas fa-arrow-right ms-2"></i></a>
												</span>
											</span>
										</span>
									</span>
								</span>

							</div>
						</div>
					</div>
				</section>
			
				<div class="container py-5 my-4">
					<div class="row align-items-center">
						<div class="col-lg-6 pe-lg-5 mb-lg-0">
							<div class="featured-boxes featured-boxes-modern-style-0 box-shadow-3">
								<div class=" overflow-hidden">
								<video class="pt-5" width="100%" height="100%" controls autoplay muted>
										<source src="video/ytvid.mp4">
								</video>
									
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="overflow-hidden">
								<h2 class="text-color-primary font-weight-medium positive-ls-3 text-4 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">ЗА НАС</h2>
							</div>
							<p class="mb-0 appear-animation fs-6" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800" style="color: black;"> <b>К-ПАУЕР ДООЕЛ</b> е специјализирана компанија за проектирање, изградба и одржување на фотоволтаични системи за производство на електрична енергија. Нашата компанија е единствениот официјален застапник за Македонија на познатиот турски бренд Elin, кој е еден од лидерите во производството на фотоволтаични системи. Ги фокусираме нашите напори на обезбедувањето рентабилни и економични извори на електрична енергија, како што се: – Индустриски фотоволтаични системи за сопствена потрошувачка – Фотоволтаични системи за продажба на електрична енергија – Домашни фотоволтаични (соларни) системи – Преносливи фотоволтаични системи – Фотоволтаични реченија во зависност од индивидуалните потреби</p>
						</div>
					</div>
				</div>

				<div class="container pt-2">
					<div class="row justify-content-center pt-4 mt-5">
						<div class="col-lg-8 text-center">
							<div class="overflow-hidden">
								<h2 class="text-color-primary font-weight-medium positive-ls-3 text-4 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">НАШИОТ НАЧИН НА РАБОТА</h2>
							</div>
							<div class="overflow-hidden mb-3">
								<h3 class=" text-transform-none text-9 line-height-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400">Професионалци кои знаат што треба да се направи!
								</h3>
							</div>

						</div>
					</div>
					<div class="row">
						<div class="col">
							<div class="row justify-content-center process custom-process-style-1 my-5">
								<div class="process-step col-sm-9 col-md-7 col-lg-4 mb-5 mb-lg-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
									<div class="process-step-circle">
										<strong class="process-step-circle-content text-color-primary">1</strong>
									</div>
									<div class="process-step-content px-lg-4">
										<p class="mb-0" style="color:black">Проектирање на инфраструктурата во зависност од индивидуaлните потреби од нас за вас</p>
									</div>
								</div>
								<div class="process-step col-sm-9 col-md-7 col-lg-4 mb-5 mb-lg-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
									<div class="process-step-circle">
										<strong class="process-step-circle-content text-color-primary">2</strong>
									</div>
									<div class="process-step-content px-lg-4">
										<p class="mb-0" style="color:black" >Инсталација и монтажа извршени од стручни лица, кои ги познаваат сите специфични детали</p>
									</div>
								</div>
								<div class="process-step col-sm-9 col-md-7 col-lg-4 mb-5 mb-lg-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">
									<div class="process-step-circle">
										<strong class="process-step-circle-content text-color-primary">3</strong>
									</div>
									<div class="process-step-content px-lg-4">
										<p class="mb-0" style="color:black ">Поддршка и мониторинг. Превенција, дијагностика и отстранување на неисправности</p>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>

				<div class="container py-5 my-5"">
					<div class="row">
						<div class="col-lg-6 mb-5 mb-lg-0">
							<h2 class="font-weight-bold text-transform-none text-8 pb-2 mb-4">Контакт</h2>
							<div class="row">
								<div class="col">
									<div class="feature-box feature-box-style-5">
										<div class="feature-box-icon">
											<img class="icon-animated" width="42" src="img/demos/industry-factory/icons/icon-location.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
										</div>
										<div class="feature-box-info">
											<h3 class="text-transform-none font-weight-bold custom-font-size-1 mb-3">Адреса</h3>
											<div class="d-flex flex-column flex-md-row">
												<ul class="list list-unstyled pe-5 mb-md-0">
													<li class="mb-0"> <b>К-ПАУЕР ДООЕЛ</b>  <br> ул. Фрањо Клуз, Општина Аеродром, Скопје 1000 </li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row py-3 my-4">
								<div class="col">
									<div class="feature-box feature-box-style-5">
										<div class="feature-box-icon">
											<img class="icon-animated" width="42" src="img/demos/industry-factory/icons/icon-mail.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary position-relative bottom-5'}" />
										</div>
										<div class="feature-box-info">
											<h3 class="text-transform-none font-weight-bold custom-font-size-1 pb-1 mb-2">E-маил адреса</h3>
											<ul class="list list-unstyled pe-5 mb-0">
												<li class="mb-0"><a href="mailto:email@domain.com" class="text-color-default text-color-hover-primary text-decoration-none">info@k-power.mk</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="feature-box feature-box-style-5">
										<div class="feature-box-icon">
											<img class="icon-animated" width="42" src="img/demos/industry-factory/icons/icon-phone.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
										</div>
										<div class="feature-box-info">
											<h3 class="text-transform-none font-weight-bold custom-font-size-1 pb-1 mb-2"> Телефонски број</h3>
											<ul class="list list-unstyled pe-5 mb-0">
												<li class="mb-0"><a href="tel:+1234567890" class="text-color-default text-color-hover-primary text-decoration-none">+389 71 605 555</a></li>

											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<h2 class="font-weight-bold text-transform-none text-8 pb-2 mb-4">Испрати порака</h2>
							<form class="contact-form custom-form-style-1" action="php/contact-form.php" method="POST">
								<div class="contact-form-success alert alert-success d-none mt-4">
									<strong>Вашата порака е успешно испратена!</strong>
								</div>

								<div class="contact-form-error alert alert-danger d-none mt-4">
									<strong>Имаше проблем при пракќање на вашата порака.</strong>
									<span class="mail-error-message text-1 d-block"></span>
								</div>

								<div class="row">
									<div class="form-group col">
										<input type="text" value="" data-msg-required="Ве молиме да го внесете вашето име" maxlength="100" class="form-control" name="name" placeholder="Име" required>
									</div>
								</div>
								<div class="row">
									<div class="form-group col">
										<input type="email" value="" data-msg-required="Ве молиме да ја внесете вашата email адреса" data-msg-email="Ве молиме внесете коректна email адреса." maxlength="100" class="form-control" name="email" placeholder="E-mail адреса" required>
									</div>
								</div>
								<div class="row">
									<div class="form-group col">
										<textarea maxlength="5000" data-msg-required="Ве молиме внесете ја вашата порака." rows="6" class="form-control" name="message" placeholder="Порака" required></textarea>
									</div>
								</div>
								<div class="row">
									<div class="form-group col">
										<button type="submit" class="btn custom-svg-btn-style-1 custom-svg-btn-style-1-solid text-color-light text-uppercase" data-loading-text="Loading...">
											<svg class="custom-svg-btn-background " version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 210 70" preserveAspectRatio="none">
												<polygon class="text-center" fill="none" stroke="#D4D4D4" stroke-width="2" stroke-miterlimit="10" points="7,5 185,5 205,34 186,63 7,63 "/>
											</svg>
											испрати порака
										</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>

			</div> 

				<?php require('includes/footer.php') ?>

		</div>

		<!-- Vendor -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="vendor/jquery.cookie/jquery.cookie.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="vendor/jquery.validation/jquery.validate.min.js"></script>
		<script src="vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
		<script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="vendor/lazysizes/lazysizes.min.js"></script>
		<script src="vendor/isotope/jquery.isotope.min.js"></script>
		<script src="vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="vendor/vide/jquery.vide.min.js"></script>
		<script src="vendor/vivus/vivus.min.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>

		<!-- Current Page Vendor and Views -->
		<script src="js/views/view.contact.js"></script>

		<!-- Demo -->
		<script src="js/demos/demo-industry-factory.js"></script>

		<!-- Theme Custom -->
		<script src="js/custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>
		<script>
		function SetCookie(c_name,value,expiredays)
	{
		var exdate=new Date()
		exdate.setDate(exdate.getDate()+expiredays)
		document.cookie=c_name+ "=" +escape(value)+
		((expiredays==null) ? "" : ";expires="+exdate.toGMTString())
	} </script>

	</body>
</html>
