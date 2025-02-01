<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>

		<!-- Meta data -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta content="DayOne - It is one of the Major Dashboard Template which includes - HR, Employee and Job Dashboard. This template has multipurpose HTML template and also deals with Task, Project, Client and Support System Dashboard." name="description">
		<meta content="Spruko Technologies Private Limited" name="author">
		<meta name="keywords" content="admin dashboard, admin panel template, html admin template, dashboard html template, bootstrap 5 dashboard, template admin bootstrap 5 , simple admin panel template, simple dashboard html template,  bootstrap admin panel, task dashboard, job dashboard, bootstrap admin panel, dashboards html, panel in html, bootstrap 5 dashboard, bootstrap 5 dashboard, bootstrap5 dashboard"/>

		<!-- Title -->
		<title>@yield('title')</title>



		<!--Favicon -->
		<link rel="icon" href="{{ asset('../assets/images/brand/favicon.ico') }}" type="image/x-icon"/>

		<!-- Bootstrap css -->
		<link href="{{ asset('../assets/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet" id="style"/>

		<!-- Style css -->
		<link href="{{ asset('../assets/css/style.css') }}" rel="stylesheet" />
		<link href="{{ asset('../assets/css/plugins.css') }}" rel="stylesheet" />

		<!-- Animate css -->
		<link href="{{ asset('../assets/css/animated.css') }}" rel="stylesheet" />

		<!---Icons css-->
		<link href="{{ asset('../assets/css/icons.css') }}" rel="stylesheet" />

	    <!-- INTERNAL Switcher css -->
		<link href="{{ asset('../assets/switcher/css/switcher.css') }}" rel="stylesheet"/>
		<link href="{{ asset('../assets/switcher/demo.css') }}" rel="stylesheet"/>

          <!-- INTERNAL Sweet alert js-->
		<script src="{{ asset('../assets/plugins/sweet-alert/jquery.sweet-modal.min.js') }}"></script>
		<script src="{{ asset('../assets/plugins/sweet-alert/sweetalert.min.js') }}"></script>



	</head>

	<body class="app sidebar-mini ltr">



		<!---Global-loader
		<div id="global-loader" >
			<img src="../assets/images/svgs/loader.svg" alt="loader">
		</div>-->

		<div class="page">
			<div class="page-main">

				<!--app header-->
				 {{-- @include('layout.includes.header', ['nome' => 'Simon'])--}}
                 @Component('layouts.components.header')
                   @slot('nome')
                     Malunguene Simão
                   @endslot
                 @endcomponent
				<!--/app header-->

				<!--app-sidebar-->
                  @include('layouts.includes.sidebar')
				<!--app-sidebar closed-->



          @yield('content')


			</div>

			<!--Footer-->
            @include('layouts.includes.footer')
			<!-- End Footer-->

			<!--sidebar-right-->
			<div class="sidebar sidebar-right sidebar-animate">
				<div class="card-header border-bottom pb-5">
					<h4 class="card-title">Notificações </h4>
					<div class="card-options">
						<a  href="javascript:void(0);" class="btn btn-sm btn-icon btn-light  text-primary"  data-bs-toggle="sidebar-right" data-bs-target=".sidebar-right"><i class="feather feather-x"></i> </a>
					</div>
				</div>
				<div class="">


                      




				</div>
			</div>
			<!--/sidebar-right-->

            	<!-- Switcher -->
		<div class="switcher-wrapper">
			<div class="demo_changer">
				<div class="form_holder sidebar-right1">
					<div class="row">
						<div class="predefined_styles">
							<div class="swichermainleft text-center">
								<div class="p-3">
									<a href="../../index.html" class="btn ripple btn-primary btn-block mt-0" target="blank" >View Demo</a>
									<a href="https://themeforest.net/item/dayone-multipurpose-html-dashboard-template/31885649" class="btn ripple btn-secondary btn-block">Buy Now</a>
									<a href="https://themeforest.net/user/spruko/portfolio" class="btn ripple btn-red btn-block">Our Portfolio</a>
								</div>
							</div>
							<div class="swichermainleft mb-0">
								<h4>Navigation Style</h4>
								<div class="skin-body">
									<div class="switch_section">
										<div class="switch-toggle d-flex mt-4">
											<span class="me-auto">Vertical Menu</span>
											<a class="onoffswitch2"><input type="radio" name="onoffswitch15" id="myonoffswitch34" class="onoffswitch2-checkbox" checked>
												<label for="myonoffswitch34" class="onoffswitch2-label"></label>
											</a>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Horizontal Click Menu</span>
											<a class="onoffswitch2"><input type="radio" name="onoffswitch15" id="myonoffswitch35" class="onoffswitch2-checkbox">
												<label for="myonoffswitch35" class="onoffswitch2-label"></label>
											</a>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Horizontal Hover Menu</span>
											<a class="onoffswitch2"><input type="radio" name="onoffswitch15" id="myonoffswitch111" class="onoffswitch2-checkbox">
												<label for="myonoffswitch111" class="onoffswitch2-label"></label>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="swichermainleft mb-0">
								<h4>LTR AND RTL VERSIONS</h4>
								<div class="skin-body">
									<div class="switch_section">
										<div class="switch-toggle d-flex mt-4">
											<span class="me-auto">LTR</span>
											<a class="onoffswitch2"><input type="radio" name="onoffswitch5" id="myonoffswitch54" class="onoffswitch2-checkbox" checked>
												<label for="myonoffswitch54" class="onoffswitch2-label"></label>
											</a>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">RTL</span>
											<a class="onoffswitch2"><input type="radio" name="onoffswitch5" id="myonoffswitch55" class="onoffswitch2-checkbox">
												<label for="myonoffswitch55" class="onoffswitch2-label"></label>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="swichermainleft">
								<h4>Light Theme Style</h4>
								<div class="skin-body">
									<div class="switch_section">
										<div class="switch-toggle d-flex">
											<span class="me-auto mt-2">Light Theme</span>
											<p class="onoffswitch2"><input type="radio" name="onoffswitch1" id="myonoffswitch1" class="onoffswitch2-checkbox" checked>
												<label for="myonoffswitch1" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle d-flex">
											<span class="me-auto mt-2">Light Primary</span>
											<div class="">
												<input class="input-color-picker color-primary-light" value="#6c5ffc" id="colorID" oninput="changePrimaryColor()" type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border" data-id7="transparentcolor" name="lightPrimary">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="swichermainleft">
								<h4>Dark Theme Style</h4>
								<div class="skin-body">
									<div class="switch_section">
										<div class="switch-toggle d-flex">
											<span class="me-auto mt-2">Dark Theme</span>
											<p class="onoffswitch2"><input type="radio" name="onoffswitch1"	id="myonoffswitch2" class="onoffswitch2-checkbox">
												<label for="myonoffswitch2" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle d-flex">
											<span class="me-auto  mt-2">Dark Primary</span>
											<div class="">
												<input class=" input-dark-color-picker color-primary-dark"value="#6c5ffc" id="darkPrimaryColorID" oninput="darkPrimaryColor()" type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border"	data-id3="primary" data-id8="transparentcolor" name="darkPrimary">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="swichermainleft">
								<h4>Transparent Theme Style</h4>
								<div class="skin-body">
									<div class="switch_section">
										<div class="switch-toggle d-flex">
											<span class="me-auto  mt-2">Transparent Theme</span>
											<p class="onoffswitch2"><input type="radio" name="onoffswitch1"	id="myonoffswitchTransparent" class="onoffswitch2-checkbox">
												<label for="myonoffswitchTransparent" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle d-flex">
											<span class="me-auto  mt-2">Transparent Primary</span>
											<div class="">
												<input
													class="w-30p h-30 input-transparent-color-picker color-primary-transparent"	value="#6c5ffc" id="transparentPrimaryColorID"	oninput="transparentPrimaryColor()" type="color" data-id="bg-color"	data-id1="bg-hover" data-id2="bg-border" data-id3="primary"	data-id4="primary" data-id9="transparentcolor" name="tranparentPrimary">
											</div>
										</div>
										<div class="switch-toggle d-flex">
											<span class="me-auto  mt-2">Transparent Background</span>
											<div class="">
												<input
													class="w-30p h-30 input-transparent-color-picker color-bg-transparent"	value="#6c5ffc" id="transparentBgColorID" oninput="transparentBgColor()"	type="color" data-id5="body" data-id6="theme"	data-id9="transparentcolor" name="transparentBackground">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="swichermainleft">
								<h4>Transparent Bg-Image Style</h4>
								<div class="skin-body switch_section">
									<div class="switch-toggle d-flex">
										<span class="me-auto ">Bg-Image Primary</span>
										<div class="">
											<input
												class="input-transparent-color-picker color-primary-transparent"	value="#6c5ffc" id="transparentBgImgPrimaryColorID"	oninput="transparentBgImgPrimaryColor()" type="color" data-id="bg-color"	data-id1="bg-hover" data-id2="bg-border" data-id3="primary"	data-id4="primary" data-id9="transparentcolor" name="tranparentPrimary">
										</div>
									</div>
									<div class="switch-toggle d-flex mt-2">
										<a class="bg-img1" href="javascript:void(0);" onclick="bgImage(this)"><img
												src="../assets/images/photos/bg-img1.jpg" alt="Bg-Image" id="bgimage1"></a>
										<a class="bg-img2" href="javascript:void(0);" onclick="bgImage(this)"><img
												src="../assets/images/photos/bg-img2.jpg" alt="Bg-Image" id="bgimage2"></a>
										<a class="bg-img3" href="javascript:void(0);" onclick="bgImage(this)"><img
												src="../assets/images/photos/bg-img3.jpg" alt="Bg-Image" id="bgimage3"></a>
										<a class="bg-img4" href="javascript:void(0);" onclick="bgImage(this)"><img
												src="../assets/images/photos/bg-img4.jpg" alt="Bg-Image" id="bgimage4"></a>
									</div>
								</div>
							</div>
							<div class="swichermainleft">
								<h4>Leftmenu Layout width styles</h4>
								<div class="skin-body">
									<div class="switch_section">
										<div class="switch-toggle d-flex mt-4">
											<span class="me-auto">Default Leftmenu</span>
											<div class="onoffswitch2"><input type="radio" name="onoffswitch2" id="myonoffswitch18" class="onoffswitch2-checkbox" checked>
												<label for="myonoffswitch18" class="onoffswitch2-label"></label>
											</div>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Boxed</span>
											<div class="onoffswitch2"><input type="radio" name="onoffswitch2" id="myonoffswitch19" class="onoffswitch2-checkbox">
												<label for="myonoffswitch19" class="onoffswitch2-label"></label>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="swichermainleft leftmenu-styles">
								<h4>Sidemenu Layout Versions</h4>
								<div class="skin-body">
									<div class="switch_section">
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Default Sidemenu</span>
											<a class="onoffswitch2"><input type="radio" name="onoffswitch8" id="myonoffswitch22" class="onoffswitch2-checkbox" checked>
												<label for="myonoffswitch22" class="onoffswitch2-label"></label>
											</a>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Closed Sidemenu</span>
											<a class="onoffswitch2"><input type="radio" name="onoffswitch8" id="myonoffswitch23" class="onoffswitch2-checkbox">
												<label for="myonoffswitch23" class="onoffswitch2-label"></label>
											</a>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Hover Submenu</span>
											<a class="onoffswitch2"><input type="radio" name="onoffswitch8" id="myonoffswitch24" class="onoffswitch2-checkbox">
												<label for="myonoffswitch24" class="onoffswitch2-label"></label>
											</a>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Hover Submenu Style1</span>
											<a class="onoffswitch2"><input type="radio" name="onoffswitch8" id="myonoffswitch30" class="onoffswitch2-checkbox">
												<label for="myonoffswitch30" class="onoffswitch2-label"></label>
											</a>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Icon Overlay</span>
											<a class="onoffswitch2"><input type="radio" name="onoffswitch8" id="myonoffswitch25" class="onoffswitch2-checkbox">
												<label for="myonoffswitch25" class="onoffswitch2-label"></label>
											</a>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Icon Text</span>
											<a class="onoffswitch2"><input type="radio" name="onoffswitch8" id="myonoffswitch29" class="onoffswitch2-checkbox">
												<label for="myonoffswitch29" class="onoffswitch2-label"></label>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="swichermainleft  header-styles">
								<h4>Header Styles Mode</h4>
								<div class="skin-body">
									<div class="switch_section">
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Light Header</span>
											<a class="onoffswitch2"><input type="radio" name="onoffswitch7" id="background1" class="onoffswitch2-checkbox" checked>
												<label for="background1" class="onoffswitch2-label"></label>
											</a>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Color Header</span>
											<a class="onoffswitch2"><input type="radio" name="onoffswitch7" id="background2" class="onoffswitch2-checkbox">
												<label for="background2" class="onoffswitch2-label"></label>
											</a>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Dark Header</span>
											<a class="onoffswitch2"><input type="radio" name="onoffswitch7" id="background3" class="onoffswitch2-checkbox">
												<label for="background3" class="onoffswitch2-label"></label>
											</a>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Gradient Header</span>
											<a class="onoffswitch2"><input type="radio" name="onoffswitch7" id="background11" class="onoffswitch2-checkbox">
												<label for="background11" class="onoffswitch2-label"></label>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="swichermainleft  menu-styles">
								<h4>Leftmenu Styles Mode</h4>
								<div class="skin-body">
									<div class="switch_section">
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Light Menu</span>
											<a class="onoffswitch2"><input type="radio" name="onoffswitch4" id="background4" class="onoffswitch2-checkbox">
												<label for="background4" class="onoffswitch2-label"></label>
											</a>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Color Menu</span>
											<a class="onoffswitch2"><input type="radio" name="onoffswitch4" id="background5" class="onoffswitch2-checkbox">
												<label for="background5" class="onoffswitch2-label"></label>
											</a>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Dark Menu</span>
											<a class="onoffswitch2"><input type="radio" name="onoffswitch4" id="background6" class="onoffswitch2-checkbox" checked>
												<label for="background6" class="onoffswitch2-label"></label>
											</a>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Gradient Menu</span>
											<a class="onoffswitch2"><input type="radio" name="onoffswitch4" id="background10" class="onoffswitch2-checkbox">
												<label for="background10" class="onoffswitch2-label"></label>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="swichermainleft">
								<h4>Reset All Styles</h4>
								<div class="skin-body">
									<div class="switch_section my-4">
										<button class="btn btn-danger btn-block" onclick="localStorage.clear();
											document.querySelector('html').style = '';
											names() ;
											resetData() ;" type="button">Reset All
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Switcher -->


			<!--Change password Modal -->
			<div class="modal fade"  id="changepasswordnmodal">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Change Password</h5>
							<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label class="form-label">New Password</label>
								<input type="password" class="form-control" placeholder="password" value="">
							</div>
							<div class="form-group">
								<label class="form-label">Confirm New Password</label>
								<input type="password" class="form-control" placeholder="password" value="">
							</div>
						</div>
						<div class="modal-footer">
							<a  href="javascript:void(0);" class="btn btn-outline-primary" data-bs-dismiss="modal">Close</a>
							<a  href="javascript:void(0);" class="btn btn-primary">Confirm</a>
						</div>
					</div>
				</div>
			</div>
			<!-- End Change password Modal  -->

		</div>

		<!-- Back to top -->
		<a href="#top" id="back-to-top"><span class="feather feather-chevrons-up"></span></a>

		<!-- Jquery js-->
		<script src="../assets/plugins/jquery/jquery.min.js"></script>

		<!--Moment js-->
		<script src="../assets/plugins/moment/moment.js"></script>

		<!-- Bootstrap js-->
		<script src="../assets/plugins/bootstrap/js/popper.min.js"></script>
		<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

		<!--Othercharts js-->
		<script src="../assets/plugins/othercharts/jquery.sparkline.min.js"></script>

		<!--Sidemenu js-->
		<script src="../assets/plugins/sidemenu/sidemenu.js"></script>

		<!-- P-scroll js-->
		<script src="../assets/plugins/p-scrollbar/p-scrollbar.js"></script>
		<script src="../assets/plugins/p-scrollbar/p-scroll1.js"></script>

		<!--Sidebar js-->
		<script src="../assets/plugins/sidebar/sidebar.js"></script>

		<!-- Select2 js -->
		<script src="../assets/plugins/select2/select2.full.min.js"></script>

		<!-- Circle-progress js-->
		<script src="../assets/plugins/circle-progress/circle-progress.min.js"></script>

        @stack('grafico_dashboard')




		<!-- INTERNAL Data tables
		<script src="../assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
		<script src="../assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
		<script src="../assets/plugins/datatable/js/dataTables.buttons.min.js"></script>
		<script src="../assets/plugins/datatable/js/buttons.bootstrap5.min.js"></script>
		<script src="../assets/plugins/datatable/dataTables.responsive.min.js"></script>
		<script src="../assets/plugins/datatable/responsive.bootstrap5.min.js"></script>-->

        <script src="../assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
		<script src="../assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
		<script src="../assets/plugins/datatable/js/dataTables.buttons.min.js"></script>
		<script src="../assets/plugins/datatable/js/buttons.bootstrap5.min.js"></script>

        @stack('relatorio')

         <!-- INTERNAL Index js-->
         <script src="../assets/js/client/client-list.js"></script>
         <!-- <script src="../assets/js/client/client-sidemenuchart.js"></script> -->

		<!-- INTERNAL Datepicker js -->
		<script src="../assets/plugins/modal-datepicker/datepicker.js"></script>




		<!--Sticky js -->
		<script src="../assets/js/sticky.js"></script>



        <!-- INTERNAL Form Advanced Element -->
		<script src="../assets/js/formelementadvnced.js"></script>
		<script src="../assets/js/form-elements.js"></script>
		<script src="../assets/js/select2.js"></script>

        <!-- INTERNAL Multiple select js -->
		<script src="../assets/plugins/multipleselect/multiple-select.js"></script>
		<script src="../assets/plugins/multipleselect/multi-select.js"></script>


<script src="../assets/plugins/sidemenu/sidemenu.js"></script>

        <!-- INTERNAL Index js-->

            @stack('fullcaledar')





      <!-- INTERNAl Jquery.steps js -->
      <script src="../assets/plugins/jquery-steps/jquery.steps.min.js"></script>
      <script src="../assets/plugins/parsleyjs/parsley.min.js"></script>

      <!-- INTERNAL Forn-wizard js-->
      <script src="../assets/plugins/formwizard/jquery.smartWizard.js"></script>
      <script src="../assets/plugins/formwizard/fromwizard.js"></script>

      <!-- INTERNAL Accordion-Wizard-Form js-->
      <script src="../assets/plugins/accordion-Wizard-Form/jquery.accordion-wizard.min.js"></script>
      <script src="../assets/js/form-wizard.js"></script>

      <!-- Switcher js -->
		<script src="../assets/switcher/js/switcher.js"></script>


        @stack('upload')

	<!-- INTERNAL jQuery-countdowntimer js -->
	<!-- INTERNAL Timepicker js -->
    <script src="../assets/plugins/time-picker/jquery.timepicker.js"></script>
    <script src="../assets/plugins/time-picker/toggles.min.js"></script>

    <!-- INTERNAL Chartjs rounded-barchart -->
    <script src="../assets/plugins/chart.min/chart.min.js"></script>
    <script src="../assets/plugins/chart.min/rounded-barchart.js"></script>

    <!-- INTERNAL jQuery-countdowntimer js -->
    <script src="../assets/plugins/jQuery-countdowntimer/jQuery.countdownTimer.js"></script>
<!-- INTERNAL summernote js -->
<script src="../assets/plugins/summer-note/summernote1.js"></script>

<!-- INTERNAL summernote js -->
<script src="../assets/js/summernote.js"></script>


<!-- INTERNAL Index js-->
<script src="../assets/js/index1.js"></script>

@stack('relatorio')

    <!-- Color Theme js -->
    <script src="../assets/js/themeColors.js"></script>

    <!-- custom js -->
    <script src="../assets/js/custom.js"></script>

	</body>
</html>


