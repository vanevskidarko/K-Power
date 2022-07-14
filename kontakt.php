<?php 
session_start();?>


<!DOCTYPE html>
<html>
<?php require('includes/head.php') ?>

	<body>

		<div class="body">
		<?php require('includes/header.php')?>


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
													<li class="mb-0">К-ПАУЕР ДООЕЛ <br> ул. Фрањо Клуз, Општина Аеродром, Скопје 1000 </li>
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
									<strong>Успешно!</strong>е пратена вашата порака.
								</div>

								<div class="contact-form-error alert alert-danger d-none mt-4">
									<strong>Грешка!</strong> Имаше проблем при пракќање на вашата порака.
									<span class="mail-error-message text-1 d-block"></span>
								</div>

								<div class="row">
									<div class="form-group col">
										<input type="text" value="" data-msg-required="Ве молиме да го внесете вашето име" maxlength="100" class="form-control" name="name" placeholder="Име" required>
									</div>
								</div>
								<div class="row">
									<div class="form-group col">
										<input type="email" value="" data-msg-required="Ве молиме да ја внесете вашата маил адреса" data-msg-email="Ве молиме внесете коректна маил адреса." maxlength="100" class="form-control" name="email" placeholder="Е-маил адреса" required>
									</div>
								</div>
								<div class="form-group col">
										<input type="text"  data-msg-required="Ве молиме внесете го вашиот предмет."  class="form-control" name="subject" placeholder="Предмет" required></input>
									</div>
								<div class="row">
									<div class="form-group col">
										<textarea maxlength="5000" data-msg-required="Ве молиме внесете ја вашата порака." rows="6" class="form-control" name="message" placeholder="Порака" required></textarea>
									</div>
								</div>
								<div class="row">
									<div class="form-group col">
										<input type="text"  data-msg-required="Ве молиме внесете го вашиот предмет."  class="form-control" name="subject" placeholder="Предмет" required></input>
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

			<?php require('includes/footer.php')?>


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

	<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
		<script>

			/*
			Map Settings

				Find the Latitude and Longitude of your address:
					- https://www.latlong.net/
					- http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

			*/

			function initializeGoogleMaps() {
				// Map Markers
				var mapMarkers = [{
					address: "New York, NY 10017",
					html: "<strong>Porto Industry & Factory</strong><br>123 Porto Blvd, Suite 100<br>New York, NY",
					icon: {
						image: "img/demos/industry-factory/map-pin.png",
						iconsize: [31, 40],
						iconanchor: [14, 40]
					},
					popup: false
				},
				{
					address: "42-38 9th St, Queens, NY 11101",
					html: "<strong>Porto Industry & Factory 2</strong><br>123 Porto Blvd, Suite 100<br>New York, NY",
					icon: {
						image: "img/demos/industry-factory/map-pin.png",
						iconsize: [31, 40],
						iconanchor: [14, 40]
					},
					popup: false
				}];

				// Map Initial Location
				var initLatitude = 40.7528214;
				var initLongitude = -73.9580603;

				// Map Extended Settings
				var mapSettings = {
					controls: {
						draggable: (($.browser.mobile) ? false : true),
						panControl: true,
						zoomControl: true,
						mapTypeControl: true,
						scaleControl: true,
						streetViewControl: true,
						overviewMapControl: true
					},
					scrollwheel: false,
					markers: mapMarkers,
					latitude: initLatitude,
					longitude: initLongitude,
					zoom: 15
				};

				var map = $('#googlemaps').gMap(mapSettings),
					mapRef = $('#googlemaps').data('gMap.reference');

				// Create an array of styles.
				var mapColor = "#161b29";

				var styles = [{
					stylers: [{
						hue: mapColor
					}]
				}, {
					featureType: "road",
					elementType: "geometry",
					stylers: [{
						lightness: 0
					}, {
						visibility: "simplified"
					}]
				}, {
					featureType: "road",
					elementType: "labels",
					stylers: [{
						visibility: "off"
					}]
				}];

				// Styles from https://snazzymaps.com/
				var styles = [{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#d3d3d3"}]},{"featureType":"transit","stylers":[{"color":"#808080"},{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"visibility":"on"},{"color":"#b3b3b3"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"weight":1.8}]},{"featureType":"road.local","elementType":"geometry.stroke","stylers":[{"color":"#d7d7d7"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ebebeb"}]},{"featureType":"administrative","elementType":"geometry","stylers":[{"color":"#a7a7a7"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"landscape","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#efefef"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#696969"}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"visibility":"on"},{"color":"#737373"}]},{"featureType":"poi","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#d6d6d6"}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"color":"#dadada"}]}];

				var styledMap = new google.maps.StyledMapType(styles, {
					name: 'Styled Map'
				});

				mapRef.mapTypes.set('map_style', styledMap);
				mapRef.setMapTypeId('map_style');
			}

			// Initialize Google Maps when element enter on browser view
			theme.fn.intObs( '.google-map', 'initializeGoogleMaps()', {} );

			// Map text-center At
			var mapCenterAt = function(options, e) {
				e.preventDefault();
				$('#googlemaps').gMap("centerAt", options);
			}

		</script>

	</body>
</html>
