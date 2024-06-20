
<!DOCTYPE html>
<!--
{{ jcms()->name }}
Author: Hencework
Contact: contact@hencework.com
-->
<html lang="en">
<head>
    <!-- Meta Tags -->
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ jcms()->name }}</title>
    <meta name="description" content="{{ jcms()->description }}"/>

	<!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

	<!-- Daterangepicker CSS -->
    <link href="{{ asset('assets') }}/vendors/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />

	<!-- Data Table CSS -->
    <link href="{{ asset('assets') }}/vendors/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets') }}/vendors/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" type="text/css" />

	<!-- CSS -->
    <link href="{{ asset('assets') }}/dist/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
   	<!-- Wrapper -->
	<div class="hk-wrapper" data-layout="navbar" data-layout-style="default" data-menu="light" data-footer="simple">
		@include('frontend.layouts.navbar')
		<!-- Main Content -->
		<div class="hk-pg-wrapper">
			<div class="container-xxl pt-2">
                <div class="row auth-split">
                    <div class="col-xl-5 col-lg-6 col-md-5 d-md-block d-none bg-primary-dark-3 bg-opacity-85 position-relative">
                        <div class="auth-content py-8">
                            <div class="row">
                                <div class="col-xxl-8 mx-auto">
                                    <div class="text-center">
                                        <h3 class="text-white mb-2">High quality Bootstrap template for your next web project.</h3>
                                        <p class="text-white">Start your <u>14 Days FREE</u> trial.</p>
                                    </div>
                                    <ul class="list-icon text-white mt-4">
                                        <li class="mb-1"><p><i class="ri-check-fill"></i><span>There are many variations of passages of Lorem Ipsum available, in some form, by injected humour</span></p></li>
                                        <li class="mb-1"><p><i class="ri-check-fill"></i><span>There are many variations of passages of Lorem Ipsum available, in some form, by injected humour</span></p></li>
                                    </ul>
                                    <div class="row gx-3 mt-7">
                                        <div class="col-lg-6">
                                            <div class="card card-shadow">
                                                <img class="card-img-top" src="{{ asset('assets') }}/dist/img/slide1.jpg" alt="Card image cap">
                                                <div class="card-body">
                                                    <h5 class="card-title text-uppercase">Help Centre</h5>
                                                    <p class="card-text">This is a wider card with supporting text.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="card card-shadow">
                                                <img class="card-img-top" src="{{ asset('assets') }}/dist/img/slide2.jpg" alt="Card image cap">
                                                <div class="card-body">
                                                    <h5 class="card-title text-uppercase">Research Centre</h5>
                                                    <p class="card-text">This is a wider card with supporting text.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="p-xs text-white credit-text opacity-55">All illustration are powered by <a href="https://icons8.com/ouch/" target="_blank" class="link-white"><u>OUCH</u></a></p>
                    </div>
                    <div class="col-xl-7 col-lg-6 col-md-7 col-sm-10 position-relative mx-auto">
                        <div class="auth-content flex-column pb-md-8 pb-13">
                            <form class="w-100">
                                <div class="row">
                                    <div class="col-xxl-5 col-xl-7 col-lg-10 mx-auto">
                                        <div class="row gx-3">
                                            <div class="form-group col-lg-12">
                                                <label for="forTo" class="form-label fw-bold">Tujuan <sup class="text-danger">*</sup></label>
                                                <div>
                                                    <div class="form-check mb-1">
                                                        <input id="radio_1" name="objective" class="form-check-input" checked="" type="radio">
                                                        <label class="form-check-label" for="radio_1">Infaq & Sedekah</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input id="radio_2" name="objective" class="form-check-input" checked="" type="radio">
                                                        <label class="form-check-label" for="radio_1">Pembangunan</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-12">
                                                <label for="nominal" class="form-label fw-bold">Nominal Sedekah <sup class="text-danger">*</sup></label>
                                                <span class="input-affix-wrapper">
                                                    <span class="input-prefix">Rp</span>
                                                    <input type="text" class="form-control text-end fw-bold" placeholder="0" aria-label="Username" aria-describedby="basic-addon1">
                                                </span>
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-primary btn-rounded btn-uppercase btn-block">Create account</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
			</div>

			<!-- Page Footer -->
			<div class="hk-footer">
				<footer class="container-xxl footer">
					<div class="row">
						<div class="col-xl-8">
							<p class="footer-text"><span class="copy-text">{{ jcms()->name }} © 2022 All rights reserved.</span> <a href="#" class="" target="_blank">Privacy Policy</a><span class="footer-link-sep">|</span><a href="#" class="" target="_blank">T&C</a><span class="footer-link-sep">|</span><a href="#" class="" target="_blank">System Status</a></p>
						</div>
						<div class="col-xl-4">
							<a href="#" class="footer-extr-link link-default"><span class="feather-icon"><i data-feather="external-link"></i></span><u>Send feedback to our help forum</u></a>
						</div>
					</div>
				</footer>
            </div>
            <!-- / Page Footer -->

		</div>
		<!-- /Main Content -->
	</div>
    <!-- /Wrapper -->

	<!-- jQuery -->
    <script src="{{ asset('assets') }}/vendors/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JS -->
   	<script src="{{ asset('assets') }}/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- FeatherIcons JS -->
    <script src="{{ asset('assets') }}/dist/js/feather.min.js"></script>

    <!-- Fancy Dropdown JS -->
    <script src="{{ asset('assets') }}/dist/js/dropdown-bootstrap-extended.js"></script>

	<!-- Simplebar JS -->
	<script src="{{ asset('assets') }}/vendors/simplebar/dist/simplebar.min.js"></script>

	<!-- Data Table JS -->
    <script src="{{ asset('assets') }}/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('assets') }}/vendors/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
	<script src="{{ asset('assets') }}/vendors/datatables.net-select/js/dataTables.select.min.js"></script>

	<!-- Daterangepicker JS -->
    <script src="{{ asset('assets') }}/vendors/moment/min/moment.min.js"></script>
	<script src="{{ asset('assets') }}/vendors/daterangepicker/daterangepicker.js"></script>
	<script src="{{ asset('assets') }}/dist/js/daterangepicker-data.js"></script>

	<!-- Amcharts Maps JS -->
	<script src="{{ asset('assets') }}/vendors/@amcharts/amcharts4/core.js"></script>
	<script src="{{ asset('assets') }}/vendors/@amcharts/amcharts4/maps.js"></script>
	<script src="{{ asset('assets') }}/vendors/@amcharts/amcharts4-geodata/worldLow.js"></script>
	<script src="{{ asset('assets') }}/vendors/@amcharts/amcharts4-geodata/worldHigh.js"></script>
	<script src="{{ asset('assets') }}/vendors/@amcharts/amcharts4/themes/animated.js"></script>

	<!-- Apex JS -->
	<script src="{{ asset('assets') }}/vendors/apexcharts/dist/apexcharts.min.js"></script>

	<!-- Init JS -->
	<script src="{{ asset('assets') }}/dist/js/init.js"></script>
	<script src="{{ asset('assets') }}/dist/js/chips-init.js"></script>
	<script src="{{ asset('assets') }}/dist/js/dashboard-data.js"></script>
</body>
</html>
