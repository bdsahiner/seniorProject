<?php

define("secure", true);
session_start();

if ($_SESSION['admin'] == TRUE) {
	$sessionID = $_SESSION['admin'];

	?>

	<!DOCTYPE html>
	<html lang="en">
	<!--begin::Head-->

	<head>
		<base href="">
		<meta charset="utf-8" />
		<title>Blue Collar Insight</title>
		<meta name="description"
			content="Check out all the features of the Start admin panel. A large number of templates, components and widgets." />
		<meta name="keywords"
			content="Start, bootstrap, bootstrap 5, admin themes, free admin themes, bootstrap admin, bootstrap dashboard, html admin theme, html template" />
		<link rel="canonical" href="Https://preview.keenthemes.com/start" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->

	<body id="kt_body" data-sidebar="on" class="header-fixed header-tablet-and-mobile-fixed sidebar-enabled">
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Header-->
					<div id="kt_header" class="header" data-kt-sticky="true" data-kt-sticky-name="header"
						data-kt-sticky-offset="{default: '200px', lg: '300px'}">
						<!--begin::Container-->
						<div class="container d-flex align-items-stretch justify-content-between">
							<!--begin::Left-->
							<div class="d-flex align-items-center">
								<!--begin::Mega Menu Toggler-->
								<button class="btn btn-icon btn-accent me-2 me-lg-6" id="kt_mega_menu_toggle"
									data-bs-toggle="modal" data-bs-target="#kt_mega_menu_modal">
									<!--begin::Svg Icon | path: icons/duotone/Text/Article.svg-->
									<span class="svg-icon svg-icon-1">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
											width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<rect fill="#000000" x="4" y="5" width="16" height="3" rx="1.5" />
												<path
													d="M5.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 Z M5.5,10 L12.5,10 C13.3284271,10 14,10.6715729 14,11.5 C14,12.3284271 13.3284271,13 12.5,13 L5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z"
													fill="#000000" opacity="0.3" />
											</g>
										</svg>
									</span>
									<!--end::Svg Icon-->
								</button>
								<!--end::Mega Menu Toggler-->
								<!--begin::Logo-->
								<a href="user">
									<img alt="Logo" src="assets/media/logos/logo-default.svg" class="h-30px" />
								</a>
								<!--end::Logo-->
							</div>
							<!--end::Left-->
							<!--begin::Right-->
							<div class="d-flex align-items-center">
								<!--begin::Search-->
								<button class="btn btn-icon btn-sm btn-active-bg-accent ms-1 ms-lg-6" data-bs-toggle="modal"
									data-bs-target="#kt_header_search_modal" id="kt_header_search_toggle">
									<!--begin::Svg Icon | path: icons/duotone/General/Search.svg-->
									<span class="svg-icon svg-icon-1 svg-icon-dark">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
											width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<path
													d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
													fill="#000000" fill-rule="nonzero" opacity="0.3" />
												<path
													d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
													fill="#000000" fill-rule="nonzero" />
											</g>
										</svg>
									</span>
									<!--end::Svg Icon-->
								</button>
								<!--end::Search-->
								<!--begin::Message-->

								<!--end::Message-->
								<!--begin::User-->
								<div class="ms-1 ms-lg-6">
									<!--begin::Toggle-->
									<div class="btn btn-icon btn-sm btn-active-bg-accent" data-kt-menu-trigger="click"
										data-kt-menu-placement="bottom-end" id="kt_header_user_menu_toggle">
										<!--begin::Svg Icon | path: icons/duotone/General/User.svg-->
										<span class="svg-icon svg-icon-1 svg-icon-dark">
											<svg xmlns="http://www.w3.org/2000/svg"
												xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
												viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<path
														d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
														fill="#000000" fill-rule="nonzero" opacity="0.3" />
													<path
														d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
														fill="#000000" fill-rule="nonzero" />
												</g>
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
									<!--begin::Menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold w-300px"
										data-kt-menu="true">
										<div class="menu-content fw-bold d-flex align-items-center bgi-no-repeat bgi-position-y-top rounded-top"
											style="background-image:url('assets/media//misc/dropdown-header-bg.jpg')">
											<div class="symbol symbol-45px mx-5 py-5">
												<span class="symbol-label bg-primary align-items-end">
													<img alt="Logo" src="assets/media/svg/avatars/001-boy.svg"
														class="mh-35px" />
												</span>
											</div>
											<div class="">
												<span class="text-white fw-bolder fs-4">Good Morning Ahmet</span>
												<span class="text-white fw-bold fs-7 d-block">(Position Info)</span>
											</div>
										</div>
										<!--begin::Row-->
										<div class="row row-cols-2 g-0">
											<a href="#"
												class="border-bottom border-end text-center py-10 btn btn-active-color-primary rounded-0">
												<!--begin::Svg Icon | path: icons/duotone/Layout/Layout-4-blocks.svg-->
												<span class="svg-icon svg-icon-3x me-n1">
													<svg xmlns="http://www.w3.org/2000/svg"
														xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
														height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24" />
															<rect fill="#000000" x="4" y="4" width="7" height="7"
																rx="1.5" />
															<path
																d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
																fill="#000000" opacity="0.3" />
														</g>
													</svg>
												</span>
												<!--end::Svg Icon-->
												<span class="fw-bolder fs-6 d-block pt-3">My Profile</span>
											</a>
											<a href="#"
												class="col border-bottom text-center py-10 btn btn-active-color-primary rounded-0">
												<!--begin::Svg Icon | path: icons/duotone/General/Settings-1.svg-->
												<span class="svg-icon svg-icon-3x me-n1">
													<svg xmlns="http://www.w3.org/2000/svg"
														xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
														height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24" />
															<path
																d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z"
																fill="#000000" />
															<path
																d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z"
																fill="#000000" opacity="0.3" />
														</g>
													</svg>
												</span>
												<!--end::Svg Icon-->
												<span class="fw-bolder fs-6 d-block pt-3">Settings</span>
											</a>
											<a href="#"
												class="col text-center border-end py-10 btn btn-active-color-primary rounded-0">
												<!--begin::Svg Icon | path: icons/duotone/Shopping/Euro.svg-->
												<span class="svg-icon svg-icon-3x me-n1">
													<svg xmlns="http://www.w3.org/2000/svg"
														xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
														height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24" />
															<path
																d="M4.3618034,10.2763932 L4.8618034,9.2763932 C4.94649941,9.10700119 5.11963097,9 5.30901699,9 L15.190983,9 C15.4671254,9 15.690983,9.22385763 15.690983,9.5 C15.690983,9.57762255 15.6729105,9.65417908 15.6381966,9.7236068 L15.1381966,10.7236068 C15.0535006,10.8929988 14.880369,11 14.690983,11 L4.80901699,11 C4.53287462,11 4.30901699,10.7761424 4.30901699,10.5 C4.30901699,10.4223775 4.32708954,10.3458209 4.3618034,10.2763932 Z M14.6381966,13.7236068 L14.1381966,14.7236068 C14.0535006,14.8929988 13.880369,15 13.690983,15 L4.80901699,15 C4.53287462,15 4.30901699,14.7761424 4.30901699,14.5 C4.30901699,14.4223775 4.32708954,14.3458209 4.3618034,14.2763932 L4.8618034,13.2763932 C4.94649941,13.1070012 5.11963097,13 5.30901699,13 L14.190983,13 C14.4671254,13 14.690983,13.2238576 14.690983,13.5 C14.690983,13.5776225 14.6729105,13.6541791 14.6381966,13.7236068 Z"
																fill="#000000" opacity="0.3" />
															<path
																d="M17.369,7.618 C16.976998,7.08599734 16.4660031,6.69750122 15.836,6.4525 C15.2059968,6.20749878 14.590003,6.085 13.988,6.085 C13.2179962,6.085 12.5180032,6.2249986 11.888,6.505 C11.2579969,6.7850014 10.7155023,7.16999755 10.2605,7.66 C9.80549773,8.15000245 9.45550123,8.72399671 9.2105,9.382 C8.96549878,10.0400033 8.843,10.7539961 8.843,11.524 C8.843,12.3360041 8.96199881,13.0779966 9.2,13.75 C9.43800119,14.4220034 9.7774978,14.9994976 10.2185,15.4825 C10.6595022,15.9655024 11.1879969,16.3399987 11.804,16.606 C12.4200031,16.8720013 13.1129962,17.005 13.883,17.005 C14.681004,17.005 15.3879969,16.8475016 16.004,16.5325 C16.6200031,16.2174984 17.1169981,15.8010026 17.495,15.283 L19.616,16.774 C18.9579967,17.6000041 18.1530048,18.2404977 17.201,18.6955 C16.2489952,19.1505023 15.1360064,19.378 13.862,19.378 C12.6999942,19.378 11.6325049,19.1855019 10.6595,18.8005 C9.68649514,18.4154981 8.8500035,17.8765035 8.15,17.1835 C7.4499965,16.4904965 6.90400196,15.6645048 6.512,14.7055 C6.11999804,13.7464952 5.924,12.6860058 5.924,11.524 C5.924,10.333994 6.13049794,9.25950479 6.5435,8.3005 C6.95650207,7.34149521 7.5234964,6.52600336 8.2445,5.854 C8.96550361,5.18199664 9.8159951,4.66400182 10.796,4.3 C11.7760049,3.93599818 12.8399943,3.754 13.988,3.754 C14.4640024,3.754 14.9609974,3.79949954 15.479,3.8905 C15.9970026,3.98150045 16.4939976,4.12149906 16.97,4.3105 C17.4460024,4.49950095 17.8939979,4.7339986 18.314,5.014 C18.7340021,5.2940014 19.0909985,5.62999804 19.385,6.022 L17.369,7.618 Z"
																fill="#000000" />
														</g>
													</svg>
												</span>
												<!--end::Svg Icon-->
												<span class="fw-bolder fs-6 d-block pt-3">Subscriptions</span>
											</a>
											<a href="#"
												class="col text-center py-10 btn btn-active-color-primary rounded-0">
												<!--begin::Svg Icon | path: icons/duotone/Navigation/Sign-out.svg-->
												<span class="svg-icon svg-icon-3x me-n1">
													<svg xmlns="http://www.w3.org/2000/svg"
														xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
														height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24" />
															<path
																d="M14.0069431,7.00607258 C13.4546584,7.00607258 13.0069431,6.55855153 13.0069431,6.00650634 C13.0069431,5.45446114 13.4546584,5.00694009 14.0069431,5.00694009 L15.0069431,5.00694009 C17.2160821,5.00694009 19.0069431,6.7970243 19.0069431,9.00520507 L19.0069431,15.001735 C19.0069431,17.2099158 17.2160821,19 15.0069431,19 L3.00694311,19 C0.797804106,19 -0.993056895,17.2099158 -0.993056895,15.001735 L-0.993056895,8.99826498 C-0.993056895,6.7900842 0.797804106,5 3.00694311,5 L4.00694793,5 C4.55923268,5 5.00694793,5.44752105 5.00694793,5.99956624 C5.00694793,6.55161144 4.55923268,6.99913249 4.00694793,6.99913249 L3.00694311,6.99913249 C1.90237361,6.99913249 1.00694311,7.89417459 1.00694311,8.99826498 L1.00694311,15.001735 C1.00694311,16.1058254 1.90237361,17.0008675 3.00694311,17.0008675 L15.0069431,17.0008675 C16.1115126,17.0008675 17.0069431,16.1058254 17.0069431,15.001735 L17.0069431,9.00520507 C17.0069431,7.90111468 16.1115126,7.00607258 15.0069431,7.00607258 L14.0069431,7.00607258 Z"
																fill="#000000" fill-rule="nonzero" opacity="0.5"
																transform="translate(9.006943, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-9.006943, -12.000000)" />
															<rect fill="#000000" opacity="0.5"
																transform="translate(14.000000, 12.000000) rotate(-270.000000) translate(-14.000000, -12.000000)"
																x="13" y="6" width="2" height="12" rx="1" />
															<path
																d="M21.7928932,9.79289322 C22.1834175,9.40236893 22.8165825,9.40236893 23.2071068,9.79289322 C23.5976311,10.1834175 23.5976311,10.8165825 23.2071068,11.2071068 L20.2071068,14.2071068 C19.8165825,14.5976311 19.1834175,14.5976311 18.7928932,14.2071068 L15.7928932,11.2071068 C15.4023689,10.8165825 15.4023689,10.1834175 15.7928932,9.79289322 C16.1834175,9.40236893 16.8165825,9.40236893 17.2071068,9.79289322 L19.5,12.0857864 L21.7928932,9.79289322 Z"
																fill="#000000" fill-rule="nonzero"
																transform="translate(19.500000, 12.000000) rotate(-90.000000) translate(-19.500000, -12.000000)" />
														</g>
													</svg>
												</span>
												<!--end::Svg Icon-->
												<span class="fw-bolder fs-6 d-block pt-3">Sign Out</span>
											</a>
										</div>
										<!--end::Row-->
									</div>
									<!--end::Menu-->
								</div>
								<!--end::User-->
								<!--begin::Notifications-->
								<div class="ms-1 ms-lg-6">
									<!--begin::Dropdown-->
									<button class="btn btn-icon btn-sm btn-light-danger fw-bolder pulse pulse-danger"
										data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
										id="kt_activities_toggle">
										<span class="position-absolute fs-6">3</span>
										<span class="pulse-ring"></span>
									</button>
									<!--begin::Menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded fw-bold menu-title-gray-800 menu-hover-bg menu-state-title-primary w-250px w-md-300px"
										data-kt-menu="true">
										<div class="menu-item mx-3">
											<div class="menu-content fs-6 text-dark fw-bolder py-6">4 New Notifications
											</div>
										</div>
										<div class="separator mb-3"></div>
										<div class="menu-item mx-3">
											<a href="#" class="menu-link px-4 py-3">
												<div class="symbol symbol-35px">
													<span class="symbol-label bg-light-info">
														<!--begin::Svg Icon | path: icons/duotone/Home/Library.svg-->
														<span class="svg-icon svg-icon-3 svg-icon-info">
															<svg xmlns="http://www.w3.org/2000/svg"
																xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
																height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none"
																	fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24" />
																	<path
																		d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z"
																		fill="#000000" />
																	<rect fill="#000000" opacity="0.3"
																		transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)"
																		x="16.3255682" y="2.94551858" width="3" height="18"
																		rx="1" />
																</g>
															</svg>
														</span>
														<!--end::Svg Icon-->
													</span>
												</div>
												<div class="ps-4">
													<span class="menu-title fw-bold mb-1">Notification 1</span>
													<span class="text-muted fw-bold d-block fs-7">X hour ago</span>
												</div>
											</a>
										</div>
										<div class="menu-item mx-3">
											<a href="#" class="menu-link px-4 py-3">
												<div class="symbol symbol-35px">
													<span class="symbol-label bg-light-warning">
														<!--begin::Svg Icon | path: icons/duotone/Devices/Mic.svg-->
														<span class="svg-icon svg-icon-3 svg-icon-warning">
															<svg xmlns="http://www.w3.org/2000/svg" width="24px"
																height="24px" viewBox="0 0 24 24" version="1.1">
																<path
																	d="M12.9975507,17.929461 C12.9991745,17.9527631 13,17.9762852 13,18 L13,21 C13,21.5522847 12.5522847,22 12,22 C11.4477153,22 11,21.5522847 11,21 L11,18 C11,17.9762852 11.0008255,17.9527631 11.0024493,17.929461 C7.60896116,17.4452857 5,14.5273206 5,11 L7,11 C7,13.7614237 9.23857625,16 12,16 C14.7614237,16 17,13.7614237 17,11 L19,11 C19,14.5273206 16.3910388,17.4452857 12.9975507,17.929461 Z"
																	fill="#000000" fill-rule="nonzero" />
																<rect fill="#000000" opacity="0.3"
																	transform="translate(12.000000, 8.000000) rotate(-360.000000) translate(-12.000000, -8.000000)"
																	x="9" y="2" width="6" height="12" rx="3" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</span>
												</div>
												<div class="ps-4">
													<span class="menu-title fw-bold mb-1">Notification 2</span>
													<span class="text-muted fw-bold d-block fs-7">X hour ago</span>
												</div>
											</a>
										</div>
										<div class="menu-item mx-3">
											<a href="#" class="menu-link px-4 py-3">
												<div class="symbol symbol-35px">
													<span class="symbol-label bg-light-primary">
														<!--begin::Svg Icon | path: icons/duotone/Communication/Group-chat.svg-->
														<span class="svg-icon svg-icon-3 svg-icon-primary">
															<svg xmlns="http://www.w3.org/2000/svg" width="24px"
																height="24px" viewBox="0 0 24 24" version="1.1">
																<path
																	d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z"
																	fill="#000000" />
																<path
																	d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z"
																	fill="#000000" opacity="0.3" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</span>
												</div>
												<div class="ps-4">
													<span class="menu-title fw-bold mb-1">Notification 3</span>
													<span class="text-muted fw-bold d-block fs-7">X hour ago</span>
												</div>
											</a>
										</div>
										<div class="menu-item mx-3">
											<a href="#" class="menu-link px-4 py-3">
												<div class="symbol symbol-35px">
													<span class="symbol-label bg-light-danger">
														<!--begin::Svg Icon | path: icons/duotone/General/Attachment2.svg-->
														<span class="svg-icon svg-icon-3 svg-icon-danger">
															<svg xmlns="http://www.w3.org/2000/svg"
																xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
																height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none"
																	fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24" />
																	<path
																		d="M11.7573593,15.2426407 L8.75735931,15.2426407 C8.20507456,15.2426407 7.75735931,15.6903559 7.75735931,16.2426407 C7.75735931,16.7949254 8.20507456,17.2426407 8.75735931,17.2426407 L11.7573593,17.2426407 L11.7573593,18.2426407 C11.7573593,19.3472102 10.8619288,20.2426407 9.75735931,20.2426407 L5.75735931,20.2426407 C4.65278981,20.2426407 3.75735931,19.3472102 3.75735931,18.2426407 L3.75735931,14.2426407 C3.75735931,13.1380712 4.65278981,12.2426407 5.75735931,12.2426407 L9.75735931,12.2426407 C10.8619288,12.2426407 11.7573593,13.1380712 11.7573593,14.2426407 L11.7573593,15.2426407 Z"
																		fill="#000000" opacity="0.3"
																		transform="translate(7.757359, 16.242641) rotate(-45.000000) translate(-7.757359, -16.242641)" />
																	<path
																		d="M12.2426407,8.75735931 L15.2426407,8.75735931 C15.7949254,8.75735931 16.2426407,8.30964406 16.2426407,7.75735931 C16.2426407,7.20507456 15.7949254,6.75735931 15.2426407,6.75735931 L12.2426407,6.75735931 L12.2426407,5.75735931 C12.2426407,4.65278981 13.1380712,3.75735931 14.2426407,3.75735931 L18.2426407,3.75735931 C19.3472102,3.75735931 20.2426407,4.65278981 20.2426407,5.75735931 L20.2426407,9.75735931 C20.2426407,10.8619288 19.3472102,11.7573593 18.2426407,11.7573593 L14.2426407,11.7573593 C13.1380712,11.7573593 12.2426407,10.8619288 12.2426407,9.75735931 L12.2426407,8.75735931 Z"
																		fill="#000000"
																		transform="translate(16.242641, 7.757359) rotate(-45.000000) translate(-16.242641, -7.757359)" />
																	<path
																		d="M5.89339828,3.42893219 C6.44568303,3.42893219 6.89339828,3.87664744 6.89339828,4.42893219 L6.89339828,6.42893219 C6.89339828,6.98121694 6.44568303,7.42893219 5.89339828,7.42893219 C5.34111353,7.42893219 4.89339828,6.98121694 4.89339828,6.42893219 L4.89339828,4.42893219 C4.89339828,3.87664744 5.34111353,3.42893219 5.89339828,3.42893219 Z M11.4289322,5.13603897 C11.8194565,5.52656326 11.8194565,6.15972824 11.4289322,6.55025253 L10.0147186,7.96446609 C9.62419433,8.35499039 8.99102936,8.35499039 8.60050506,7.96446609 C8.20998077,7.5739418 8.20998077,6.94077682 8.60050506,6.55025253 L10.0147186,5.13603897 C10.4052429,4.74551468 11.0384079,4.74551468 11.4289322,5.13603897 Z M0.600505063,5.13603897 C0.991029355,4.74551468 1.62419433,4.74551468 2.01471863,5.13603897 L3.42893219,6.55025253 C3.81945648,6.94077682 3.81945648,7.5739418 3.42893219,7.96446609 C3.0384079,8.35499039 2.40524292,8.35499039 2.01471863,7.96446609 L0.600505063,6.55025253 C0.209980772,6.15972824 0.209980772,5.52656326 0.600505063,5.13603897 Z"
																		fill="#000000" opacity="0.3"
																		transform="translate(6.014719, 5.843146) rotate(-45.000000) translate(-6.014719, -5.843146)" />
																	<path
																		d="M17.9142136,15.4497475 C18.4664983,15.4497475 18.9142136,15.8974627 18.9142136,16.4497475 L18.9142136,18.4497475 C18.9142136,19.0020322 18.4664983,19.4497475 17.9142136,19.4497475 C17.3619288,19.4497475 16.9142136,19.0020322 16.9142136,18.4497475 L16.9142136,16.4497475 C16.9142136,15.8974627 17.3619288,15.4497475 17.9142136,15.4497475 Z M23.4497475,17.1568542 C23.8402718,17.5473785 23.8402718,18.1805435 23.4497475,18.5710678 L22.0355339,19.9852814 C21.6450096,20.3758057 21.0118446,20.3758057 20.6213203,19.9852814 C20.2307961,19.5947571 20.2307961,18.9615921 20.6213203,18.5710678 L22.0355339,17.1568542 C22.4260582,16.76633 23.0592232,16.76633 23.4497475,17.1568542 Z M12.6213203,17.1568542 C13.0118446,16.76633 13.6450096,16.76633 14.0355339,17.1568542 L15.4497475,18.5710678 C15.8402718,18.9615921 15.8402718,19.5947571 15.4497475,19.9852814 C15.0592232,20.3758057 14.4260582,20.3758057 14.0355339,19.9852814 L12.6213203,18.5710678 C12.2307961,18.1805435 12.2307961,17.5473785 12.6213203,17.1568542 Z"
																		fill="#000000" opacity="0.3"
																		transform="translate(18.035534, 17.863961) scale(1, -1) rotate(45.000000) translate(-18.035534, -17.863961)" />
																</g>
															</svg>
														</span>
														<!--end::Svg Icon-->
													</span>
												</div>
												<div class="ps-4">
													<span class="menu-title fw-bold mb-1">Notification 4</span>
													<span class="text-muted fw-bold d-block fs-7">X hour ago</span>
												</div>
											</a>
										</div>
										<div class="separator mt-3"></div>
										<div class="menu-item mx-2">
											<div class="menu-content py-5">
												<a href="#" class="btn btn-primary fw-bolder me-2 px-5">Report</a>
												<a href="#" class="btn btn-light fw-bolder px-5">Refresh</a>
											</div>
										</div>
									</div>
									<!--end::Menu-->
									<!--end::Dropdown-->
								</div>
								<!--end::Notifications-->
								<!--begin::Aside Toggler-->
								<!--end::Aside Toggler-->
								<!--begin::Sidebar Toggler-->

								<!--end::Sidebar Toggler-->
							</div>
							<!--end::Right-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->
					<!--begin::Main-->
					<div class="d-flex flex-column flex-column-fluid">
						<!--begin::Content-->
						<div class="content fs-6 d-flex flex-column-fluid" id="kt_content">
							<!--begin::Container-->

							<!--end::Container-->
						</div>
						<!--end::Content-->
					</div>
					<!--end::Main-->
					<!--begin::Footer-->
					<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
						<!--begin::Container-->
						<div class="container d-flex flex-column flex-md-row flex-stack">
							<!--begin::Copyright-->
							<div class="text-dark order-2 order-md-1">
								<span class="text-muted fw-bold me-2">2024©</span>
								<a href="" target="_blank" class="text-gray-800 text-hover-primary">Atılım University</a>
							</div>
							<!--end::Copyright-->
							<!--begin::Menu-->
							<ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1">
								<li class="menu-item">
									<a href="https://keenthemes.com" target="_blank" class="menu-link px-2">Hakkımızda</a>
								</li>
								<li class="menu-item">
									<a href="https://keenthemes.com/support" target="_blank"
										class="menu-link px-2">Destek</a>
								</li>
								<li class="menu-item">
									<a href="https://keenthemes.com/products/start-html-pro" target="_blank"
										class="menu-link px-2">Kullanım Şartları</a>
								</li>
							</ul>
							<!--end::Menu-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
				<!--begin::Sidebar-->
				<div id="kt_sidebar" class="sidebar bg-info" data-kt-drawer="true" data-kt-drawer-name="sidebar"
					data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
					data-kt-drawer-width="{default:'200px', '350px': '300px'}" data-kt-drawer-direction="end"
					data-kt-drawer-toggle="#kt_sidebar_toggler">
					<!--begin::Sidebar Content-->
					<div class="d-flex flex-column sidebar-body">
						<!--begin::Sidebar Nav-->
						<ul class="sidebar-nav nav nav-tabs pt-15 pb-5 px-5" id="kt_sidebar_tabs" role="tablist">
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="tab" href="#kt_sidebar_tab_pane_1"
									id="kt_sidebar_tab_1">
									<img alt="" src="assets/media/svg/logo/purple/aven.svg" class="default" />
									<img alt="" src="assets/media/svg/logo/colored/aven.svg" class="active" />
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="tab" href="#kt_sidebar_tab_pane_2"
									id="kt_sidebar_tab_2">
									<img alt="" src="assets/media/svg/logo/purple/kanba.svg" class="default" />
									<img alt="" src="assets/media/svg/logo/colored/kanba.svg" class="active" />
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link active" data-bs-toggle="tab" href="#kt_sidebar_tab_pane_3"
									id="kt_sidebar_tab_3">
									<img alt="" src="assets/media/svg/logo/purple/fox-hub-2.svg" class="default" />
									<img alt="" src="assets/media/svg/logo/colored/fox-hub-2.svg" class="active" />
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="tab" href="#kt_sidebar_tab_pane_4"
									id="kt_sidebar_tab_4">
									<img alt="" src="assets/media/svg/logo/purple/tower.svg" class="default" />
									<img alt="" src="assets/media/svg/logo/colored/tower.svg" class="active" />
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="tab" href="#kt_sidebar_tab_pane_5"
									id="kt_sidebar_tab_5">
									<img alt="" src="assets/media/svg/logo/purple/treva.svg" class="default" />
									<img alt="" src="assets/media/svg/logo/colored/treva.svg" class="active" />
								</a>
							</li>
						</ul>
						<!--end::Sidebar Nav-->
						<!--begin::Sidebar Content-->
						<div id="kt_sidebar_content" class="py-10 px-5 px-lg-5">
							<div class="hover-scroll-y me-lg-n2 pe-lg-2" data-kt-scroll="true" data-kt-scroll-height="auto"
								data-kt-scroll-offset="0px"
								data-kt-scroll-dependencies="#kt_sidebar_tabs, #kt_sidebar_footer"
								data-kt-scroll-wrappers="#kt_sidebar_content">
								<div class="tab-content">
									<div class="tab-pane" id="kt_sidebar_tab_pane_1" role="tabpanel">
										<!--begin::Card-->
										<div class="card bg-transparent">
											<!--begin::Header-->
											<div class="card-header align-items-center border-0">
												<h3 class="card-title fw-bolder text-white fs-3">Aven Sales</h3>
												<div class="card-toolbar">
													<button type="button"
														class="btn btn-md btn-icon btn-icon-white btn-info"
														data-kt-menu-trigger="click" data-kt-menu-overflow="true"
														data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
														<!--begin::Svg Icon | path: icons/duotone/Layout/Layout-4-blocks-2.svg-->
														<span class="svg-icon svg-icon-1">
															<svg xmlns="http://www.w3.org/2000/svg"
																xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
																height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none"
																	fill-rule="evenodd">
																	<rect x="5" y="5" width="5" height="5" rx="1"
																		fill="#000000" />
																	<rect x="14" y="5" width="5" height="5" rx="1"
																		fill="#000000" opacity="0.3" />
																	<rect x="5" y="14" width="5" height="5" rx="1"
																		fill="#000000" opacity="0.3" />
																	<rect x="14" y="14" width="5" height="5" rx="1"
																		fill="#000000" opacity="0.3" />
																</g>
															</svg>
														</span>
														<!--end::Svg Icon-->
													</button>
													<!--begin::Menu-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold w-200px"
														data-kt-menu="true">
														<div class="menu-item px-3">
															<div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">
																Manage</div>
														</div>
														<div class="separator mb-3 opacity-75"></div>
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">Add User</a>
														</div>
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">Add Role</a>
														</div>
														<div class="menu-item px-3" data-kt-menu-trigger="hover"
															data-kt-menu-placement="right-start"
															data-kt-menu-flip="left-start, top">
															<a href="#" class="menu-link px-3">
																<span class="menu-title">Add Group</span>
																<span class="menu-arrow"></span>
															</a>
															<div class="menu-sub menu-sub-dropdown w-200px py-4">
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Admin Group</a>
																</div>
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Staff Group</a>
																</div>
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Member Group</a>
																</div>
															</div>
														</div>
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">Reports</a>
														</div>
														<div class="separator mt-3 opacity-75"></div>
														<div class="menu-item px-3">
															<div class="menu-content px-3 py-3">
																<a class="btn btn-primary fw-bold btn-sm px-4"
																	href="#">Create New</a>
															</div>
														</div>
													</div>
													<!--end::Menu-->
												</div>
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body px-3 py-0">
												<!--begin::Chart-->
												<div id="kt_sidebar_tab_1_chart" class="apexcharts-bar-hover-danger"
													style="height: 250px"></div>
												<!--end::Chart-->
											</div>
											<!--end: Card Body-->
										</div>
										<!--end::Card-->
										<!--begin::Card-->
										<div class="card bg-transparent">
											<!--begin::Header-->
											<div class="card-header align-items-center border-0">
												<h3 class="card-title fw-bolder text-white fs-3">Tasks Overview</h3>
												<div class="card-toolbar">
													<button type="button"
														class="btn btn-md btn-icon btn-icon-white btn-info"
														data-kt-menu-trigger="click" data-kt-menu-overflow="true"
														data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
														<!--begin::Svg Icon | path: icons/duotone/Layout/Layout-4-blocks-2.svg-->
														<span class="svg-icon svg-icon-1">
															<svg xmlns="http://www.w3.org/2000/svg"
																xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
																height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none"
																	fill-rule="evenodd">
																	<rect x="5" y="5" width="5" height="5" rx="1"
																		fill="#000000" />
																	<rect x="14" y="5" width="5" height="5" rx="1"
																		fill="#000000" opacity="0.3" />
																	<rect x="5" y="14" width="5" height="5" rx="1"
																		fill="#000000" opacity="0.3" />
																	<rect x="14" y="14" width="5" height="5" rx="1"
																		fill="#000000" opacity="0.3" />
																</g>
															</svg>
														</span>
														<!--end::Svg Icon-->
													</button>
													<!--begin::Menu-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold w-200px"
														data-kt-menu="true">
														<div class="menu-item px-3">
															<div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">
																Manage</div>
														</div>
														<div class="separator mb-3 opacity-75"></div>
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">Add User</a>
														</div>
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">Add Role</a>
														</div>
														<div class="menu-item px-3" data-kt-menu-trigger="hover"
															data-kt-menu-placement="right-start"
															data-kt-menu-flip="left-start, top">
															<a href="#" class="menu-link px-3">
																<span class="menu-title">Add Group</span>
																<span class="menu-arrow"></span>
															</a>
															<div class="menu-sub menu-sub-dropdown w-200px py-4">
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Admin Group</a>
																</div>
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Staff Group</a>
																</div>
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Member Group</a>
																</div>
															</div>
														</div>
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">Reports</a>
														</div>
														<div class="separator mt-3 opacity-75"></div>
														<div class="menu-item px-3">
															<div class="menu-content px-3 py-3">
																<a class="btn btn-primary fw-bold btn-sm px-4"
																	href="#">Create New</a>
															</div>
														</div>
													</div>
													<!--end::Menu-->
												</div>
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-0">
												<!--begin::Item-->
												<div class="d-flex flex-wrap align-items-center mb-7">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px symbol-2by3 me-4">
														<img src="assets/media/stock/600x400/img-1.jpg" alt=""
															class="mw-100" />
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
														<a href="#"
															class="text-white fw-bolder text-hover-primary fs-6">Sunspots</a>
														<span class="text-white opacity-25 fw-bold fs-7 my-1">Mark, Rowling,
															Esther</span>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Item-->
												<!--begin: Item-->
												<div class="d-flex flex-wrap align-items-center mb-7">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px symbol-2by3 me-4">
														<img src="assets/media/stock/600x400/img-2.jpg" alt=""
															class="mw-100" />
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
														<a href="#"
															class="text-white fw-bolder text-hover-primary fs-6">Ocean
															Drive</a>
														<span class="text-white opacity-25 fw-bold fs-7 my-1">Study the
															highway types</span>
													</div>
													<!--end::Title-->
												</div>
												<!--end: Item-->
												<!--begin::Item-->
												<div class="d-flex flex-wrap align-items-center mb-7">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px symbol-2by3 me-4">
														<img src="assets/media/stock/600x400/img-3.jpg" alt=""
															class="mw-100" />
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column flex-grow-1 pe-3">
														<a href="#"
															class="text-white fw-bolder text-hover-primary fs-6">Soar,
															Eco</a>
														<span class="text-white opacity-25 fw-bold fs-7 my-1">HTML, CSS.
															jQuery</span>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-wrap align-items-center mb-7">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px symbol-2by3 me-4">
														<img src="assets/media/stock/600x400/img-5.jpg" alt=""
															class="mw-100" />
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
														<a href="#" class="text-white fw-bolder text-hover-primary fs-6">Cup
															&amp; Green</a>
														<span class="text-white opacity-25 fs-7 fw-bold my-1">ASP.NET
															Developer</span>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-wrap align-items-center">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px symbol-2by3 me-4">
														<img src="assets/media/stock/600x400/img-6.jpg" alt=""
															class="mw-100" />
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
														<a href="#"
															class="text-white fw-bolder text-hover-primary fs-6">Bose QC 35
															II</a>
														<span class="text-white opacity-25 fs-7 fw-bold my-1">Study the
															highway types</span>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Item-->
											</div>
											<!--end: Card Body-->
										</div>
										<!--end::Card-->
									</div>
									<div class="tab-pane" id="kt_sidebar_tab_pane_2" role="tabpanel">
										<!--begin::Card-->
										<div class="card bg-transparent">
											<!--begin::Header-->
											<div class="card-header align-items-center border-0">
												<h3 class="card-title fw-bolder text-white fs-3">Kanba Sales</h3>
												<div class="card-toolbar">
													<button type="button"
														class="btn btn-md btn-icon btn-icon-white btn-info"
														data-kt-menu-trigger="click" data-kt-menu-overflow="true"
														data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
														<!--begin::Svg Icon | path: icons/duotone/Layout/Layout-4-blocks-2.svg-->
														<span class="svg-icon svg-icon-1">
															<svg xmlns="http://www.w3.org/2000/svg"
																xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
																height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none"
																	fill-rule="evenodd">
																	<rect x="5" y="5" width="5" height="5" rx="1"
																		fill="#000000" />
																	<rect x="14" y="5" width="5" height="5" rx="1"
																		fill="#000000" opacity="0.3" />
																	<rect x="5" y="14" width="5" height="5" rx="1"
																		fill="#000000" opacity="0.3" />
																	<rect x="14" y="14" width="5" height="5" rx="1"
																		fill="#000000" opacity="0.3" />
																</g>
															</svg>
														</span>
														<!--end::Svg Icon-->
													</button>
													<!--begin::Menu-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold w-200px"
														data-kt-menu="true">
														<div class="menu-item px-3">
															<div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">
																Manage</div>
														</div>
														<div class="separator mb-3 opacity-75"></div>
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">Add User</a>
														</div>
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">Add Role</a>
														</div>
														<div class="menu-item px-3" data-kt-menu-trigger="hover"
															data-kt-menu-placement="right-start"
															data-kt-menu-flip="left-start, top">
															<a href="#" class="menu-link px-3">
																<span class="menu-title">Add Group</span>
																<span class="menu-arrow"></span>
															</a>
															<div class="menu-sub menu-sub-dropdown w-200px py-4">
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Admin Group</a>
																</div>
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Staff Group</a>
																</div>
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Member Group</a>
																</div>
															</div>
														</div>
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">Reports</a>
														</div>
														<div class="separator mt-3 opacity-75"></div>
														<div class="menu-item px-3">
															<div class="menu-content px-3 py-3">
																<a class="btn btn-primary fw-bold btn-sm px-4"
																	href="#">Create New</a>
															</div>
														</div>
													</div>
													<!--end::Menu-->
												</div>
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body px-3 py-0">
												<!--begin::Chart-->
												<div id="kt_sidebar_tab_2_chart" class="apexcharts-bar-hover-danger"
													style="height: 250px"></div>
												<!--end::Chart-->
											</div>
											<!--end: Card Body-->
										</div>
										<!--end::Card-->
										<!--begin::Card-->
										<div class="card bg-transparent">
											<!--begin::Header-->
											<div class="card-header align-items-center border-0">
												<h3 class="card-title fw-bolder text-white fs-3">Kanba Products</h3>
												<div class="card-toolbar">
													<button type="button"
														class="btn btn-md btn-icon btn-icon-white btn-info"
														data-kt-menu-trigger="click" data-kt-menu-overflow="true"
														data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
														<!--begin::Svg Icon | path: icons/duotone/Layout/Layout-4-blocks-2.svg-->
														<span class="svg-icon svg-icon-1">
															<svg xmlns="http://www.w3.org/2000/svg"
																xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
																height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none"
																	fill-rule="evenodd">
																	<rect x="5" y="5" width="5" height="5" rx="1"
																		fill="#000000" />
																	<rect x="14" y="5" width="5" height="5" rx="1"
																		fill="#000000" opacity="0.3" />
																	<rect x="5" y="14" width="5" height="5" rx="1"
																		fill="#000000" opacity="0.3" />
																	<rect x="14" y="14" width="5" height="5" rx="1"
																		fill="#000000" opacity="0.3" />
																</g>
															</svg>
														</span>
														<!--end::Svg Icon-->
													</button>
													<!--begin::Menu-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold w-200px"
														data-kt-menu="true">
														<div class="menu-item px-3">
															<div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">
																Manage</div>
														</div>
														<div class="separator mb-3 opacity-75"></div>
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">Add User</a>
														</div>
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">Add Role</a>
														</div>
														<div class="menu-item px-3" data-kt-menu-trigger="hover"
															data-kt-menu-placement="right-start"
															data-kt-menu-flip="left-start, top">
															<a href="#" class="menu-link px-3">
																<span class="menu-title">Add Group</span>
																<span class="menu-arrow"></span>
															</a>
															<div class="menu-sub menu-sub-dropdown w-200px py-4">
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Admin Group</a>
																</div>
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Staff Group</a>
																</div>
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Member Group</a>
																</div>
															</div>
														</div>
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">Reports</a>
														</div>
														<div class="separator mt-3 opacity-75"></div>
														<div class="menu-item px-3">
															<div class="menu-content px-3 py-3">
																<a class="btn btn-primary fw-bold btn-sm px-4"
																	href="#">Create New</a>
															</div>
														</div>
													</div>
													<!--end::Menu-->
												</div>
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-0">
												<!--begin::Item-->
												<div class="d-flex flex-wrap align-items-center mb-7">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px symbol-2by3 me-4">
														<img src="assets/media/stock/600x400/img-7.jpg" alt=""
															class="mw-100" />
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
														<a href="#" class="text-white fw-bolder text-hover-primary fs-6">BP
															Industries</a>
														<span class="text-white opacity-25 fw-bold fs-7 my-1">Successful
															Fellas</span>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Item-->
												<!--begin: Item-->
												<div class="d-flex flex-wrap align-items-center mb-7">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px symbol-2by3 me-4">
														<img src="assets/media/stock/600x400/img-8.jpg" alt=""
															class="mw-100" />
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
														<a href="#"
															class="text-white fw-bolder text-hover-primary fs-6">Automatica</a>
														<span class="text-white opacity-25 fw-bold fs-7 my-1">Successful
															Fellas</span>
													</div>
													<!--end::Title-->
												</div>
												<!--end: Item-->
												<!--begin::Item-->
												<div class="d-flex flex-wrap align-items-center mb-7">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px symbol-2by3 me-4">
														<img src="assets/media/stock/600x400/img-9.jpg" alt=""
															class="mw-100" />
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column flex-grow-1 pe-3">
														<a href="#"
															class="text-white fw-bolder text-hover-primary fs-6">Python
															Inc.</a>
														<span class="text-white opacity-25 fw-bold fs-7 my-1">Most
															Successful</span>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-wrap align-items-center mb-7">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px symbol-2by3 me-4">
														<img src="assets/media/stock/600x400/img-19.jpg" alt=""
															class="mw-100" />
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
														<a href="#" class="text-white fw-bolder text-hover-primary fs-6">Cup
															&amp; Green</a>
														<span class="text-white opacity-25 fs-7 fw-bold my-1">ASP.NET
															Developer</span>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-wrap align-items-center">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px symbol-2by3 me-4">
														<img src="assets/media/stock/600x400/img-6.jpg" alt=""
															class="mw-100" />
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
														<a href="#"
															class="text-white fw-bolder text-hover-primary fs-6">Active
															Customers</a>
														<span class="text-white opacity-25 fs-7 fw-bold my-1">Best
															Customers</span>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Item-->
											</div>
											<!--end: Card Body-->
										</div>
										<!--end::Card-->
									</div>
									<div class="tab-pane active" id="kt_sidebar_tab_pane_3" role="tabpanel">
										<!--begin::Card-->
										<div class="card bg-transparent">
											<!--begin::Header-->
											<div class="card-header align-items-center border-0">
												<h3 class="card-title fw-bolder text-white fs-3">Fox Sales</h3>
												<div class="card-toolbar">
													<button type="button"
														class="btn btn-md btn-icon btn-icon-white btn-info"
														data-kt-menu-trigger="click" data-kt-menu-overflow="true"
														data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
														<!--begin::Svg Icon | path: icons/duotone/Layout/Layout-4-blocks-2.svg-->
														<span class="svg-icon svg-icon-1">
															<svg xmlns="http://www.w3.org/2000/svg"
																xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
																height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none"
																	fill-rule="evenodd">
																	<rect x="5" y="5" width="5" height="5" rx="1"
																		fill="#000000" />
																	<rect x="14" y="5" width="5" height="5" rx="1"
																		fill="#000000" opacity="0.3" />
																	<rect x="5" y="14" width="5" height="5" rx="1"
																		fill="#000000" opacity="0.3" />
																	<rect x="14" y="14" width="5" height="5" rx="1"
																		fill="#000000" opacity="0.3" />
																</g>
															</svg>
														</span>
														<!--end::Svg Icon-->
													</button>
													<!--begin::Menu-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold w-200px"
														data-kt-menu="true">
														<div class="menu-item px-3">
															<div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">
																Manage</div>
														</div>
														<div class="separator mb-3 opacity-75"></div>
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">Add User</a>
														</div>
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">Add Role</a>
														</div>
														<div class="menu-item px-3" data-kt-menu-trigger="hover"
															data-kt-menu-placement="right-start"
															data-kt-menu-flip="left-start, top">
															<a href="#" class="menu-link px-3">
																<span class="menu-title">Add Group</span>
																<span class="menu-arrow"></span>
															</a>
															<div class="menu-sub menu-sub-dropdown w-200px py-4">
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Admin Group</a>
																</div>
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Staff Group</a>
																</div>
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Member Group</a>
																</div>
															</div>
														</div>
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">Reports</a>
														</div>
														<div class="separator mt-3 opacity-75"></div>
														<div class="menu-item px-3">
															<div class="menu-content px-3 py-3">
																<a class="btn btn-primary fw-bold btn-sm px-4"
																	href="#">Create New</a>
															</div>
														</div>
													</div>
													<!--end::Menu-->
												</div>
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body px-3 py-0">
												<!--begin::Chart-->
												<div id="kt_sidebar_tab_3_chart" class="apexcharts-bar-hover-danger"
													style="height: 250px"></div>
												<!--end::Chart-->
											</div>
											<!--end: Card Body-->
										</div>
										<!--end::Card-->
										<!--begin::Card-->
										<div class="card bg-transparent">
											<!--begin::Header-->
											<div class="card-header align-items-center border-0">
												<h3 class="card-title fw-bolder text-white fs-3">Fox Bestsellers</h3>
												<div class="card-toolbar">
													<button type="button"
														class="btn btn-md btn-icon btn-icon-white btn-info"
														data-kt-menu-trigger="click" data-kt-menu-overflow="true"
														data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
														<!--begin::Svg Icon | path: icons/duotone/Layout/Layout-4-blocks-2.svg-->
														<span class="svg-icon svg-icon-1">
															<svg xmlns="http://www.w3.org/2000/svg"
																xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
																height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none"
																	fill-rule="evenodd">
																	<rect x="5" y="5" width="5" height="5" rx="1"
																		fill="#000000" />
																	<rect x="14" y="5" width="5" height="5" rx="1"
																		fill="#000000" opacity="0.3" />
																	<rect x="5" y="14" width="5" height="5" rx="1"
																		fill="#000000" opacity="0.3" />
																	<rect x="14" y="14" width="5" height="5" rx="1"
																		fill="#000000" opacity="0.3" />
																</g>
															</svg>
														</span>
														<!--end::Svg Icon-->
													</button>
													<!--begin::Menu-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold w-200px"
														data-kt-menu="true">
														<div class="menu-item px-3">
															<div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">
																Manage</div>
														</div>
														<div class="separator mb-3 opacity-75"></div>
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">Add User</a>
														</div>
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">Add Role</a>
														</div>
														<div class="menu-item px-3" data-kt-menu-trigger="hover"
															data-kt-menu-placement="right-start"
															data-kt-menu-flip="left-start, top">
															<a href="#" class="menu-link px-3">
																<span class="menu-title">Add Group</span>
																<span class="menu-arrow"></span>
															</a>
															<div class="menu-sub menu-sub-dropdown w-200px py-4">
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Admin Group</a>
																</div>
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Staff Group</a>
																</div>
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Member Group</a>
																</div>
															</div>
														</div>
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">Reports</a>
														</div>
														<div class="separator mt-3 opacity-75"></div>
														<div class="menu-item px-3">
															<div class="menu-content px-3 py-3">
																<a class="btn btn-primary fw-bold btn-sm px-4"
																	href="#">Create New</a>
															</div>
														</div>
													</div>
													<!--end::Menu-->
												</div>
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-0">
												<!--begin::Item-->
												<div class="d-flex flex-wrap align-items-center mb-7">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px symbol-2by3 me-4">
														<img src="assets/media/stock/600x400/img-17.jpg" alt=""
															class="mw-100" />
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
														<a href="#"
															class="text-white fw-bolder text-hover-primary fs-6">Blue
															Donut</a>
														<span class="text-white opacity-25 fw-bold fs-7 my-1">Study the
															highway types</span>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Item-->
												<!--begin: Item-->
												<div class="d-flex flex-wrap align-items-center mb-7">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px symbol-2by3 me-4">
														<img src="assets/media/stock/600x400/img-10.jpg" alt=""
															class="mw-100" />
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
														<a href="#"
															class="text-white fw-bolder text-hover-primary fs-6">Lovely
															Hearts</a>
														<span class="text-white opacity-25 fw-bold fs-7 my-1">Study the
															highway types</span>
													</div>
													<!--end::Title-->
												</div>
												<!--end: Item-->
												<!--begin::Item-->
												<div class="d-flex flex-wrap align-items-center mb-7">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px symbol-2by3 me-4">
														<img src="assets/media/stock/600x400/img-1.jpg" alt=""
															class="mw-100" />
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column flex-grow-1 pe-3">
														<a href="#"
															class="text-white fw-bolder text-hover-primary fs-6">Hands &amp;
															Yellow</a>
														<span class="text-white opacity-25 fw-bold fs-7 my-1">Study the
															highway types</span>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-wrap align-items-center mb-7">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px symbol-2by3 me-4">
														<img src="assets/media/stock/600x400/img-9.jpg" alt=""
															class="mw-100" />
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
														<a href="#" class="text-white fw-bolder text-hover-primary fs-6">Cup
															&amp; Green</a>
														<span class="text-white opacity-25 fs-7 fw-bold my-1">Study the
															highway types</span>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-wrap align-items-center">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px symbol-2by3 me-4">
														<img src="assets/media/stock/600x400/img-4.jpg" alt=""
															class="mw-100" />
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
														<a href="#"
															class="text-white fw-bolder text-hover-primary fs-6">Bose QC 35
															II</a>
														<span class="text-white opacity-25 fs-7 fw-bold my-1">Study the
															highway types</span>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Item-->
											</div>
											<!--end: Card Body-->
										</div>
										<!--end::Card-->
									</div>
									<div class="tab-pane" id="kt_sidebar_tab_pane_4" role="tabpanel">
										<!--begin::Card-->
										<div class="card bg-transparent">
											<!--begin::Header-->
											<div class="card-header align-items-center border-0">
												<h3 class="card-title fw-bolder text-white fs-3">Tower Sales</h3>
												<div class="card-toolbar">
													<button type="button"
														class="btn btn-md btn-icon btn-icon-white btn-info"
														data-kt-menu-trigger="click" data-kt-menu-overflow="true"
														data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
														<!--begin::Svg Icon | path: icons/duotone/Layout/Layout-4-blocks-2.svg-->
														<span class="svg-icon svg-icon-1">
															<svg xmlns="http://www.w3.org/2000/svg"
																xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
																height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none"
																	fill-rule="evenodd">
																	<rect x="5" y="5" width="5" height="5" rx="1"
																		fill="#000000" />
																	<rect x="14" y="5" width="5" height="5" rx="1"
																		fill="#000000" opacity="0.3" />
																	<rect x="5" y="14" width="5" height="5" rx="1"
																		fill="#000000" opacity="0.3" />
																	<rect x="14" y="14" width="5" height="5" rx="1"
																		fill="#000000" opacity="0.3" />
																</g>
															</svg>
														</span>
														<!--end::Svg Icon-->
													</button>
													<!--begin::Menu-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold w-200px"
														data-kt-menu="true">
														<div class="menu-item px-3">
															<div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">
																Manage</div>
														</div>
														<div class="separator mb-3 opacity-75"></div>
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">Add User</a>
														</div>
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">Add Role</a>
														</div>
														<div class="menu-item px-3" data-kt-menu-trigger="hover"
															data-kt-menu-placement="right-start"
															data-kt-menu-flip="left-start, top">
															<a href="#" class="menu-link px-3">
																<span class="menu-title">Add Group</span>
																<span class="menu-arrow"></span>
															</a>
															<div class="menu-sub menu-sub-dropdown w-200px py-4">
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Admin Group</a>
																</div>
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Staff Group</a>
																</div>
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Member Group</a>
																</div>
															</div>
														</div>
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">Reports</a>
														</div>
														<div class="separator mt-3 opacity-75"></div>
														<div class="menu-item px-3">
															<div class="menu-content px-3 py-3">
																<a class="btn btn-primary fw-bold btn-sm px-4"
																	href="#">Create New</a>
															</div>
														</div>
													</div>
													<!--end::Menu-->
												</div>
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body px-3 py-0">
												<!--begin::Chart-->
												<div id="kt_sidebar_tab_4_chart" class="apexcharts-bar-hover-danger"
													style="height: 250px"></div>
												<!--end::Chart-->
											</div>
											<!--end: Card Body-->
										</div>
										<!--end::Card-->
										<!--begin::Card-->
										<div class="card bg-transparent">
											<!--begin::Header-->
											<div class="card-header align-items-center border-0">
												<h3 class="card-title fw-bolder text-white fs-3">Tower Latest Products</h3>
												<div class="card-toolbar">
													<button type="button"
														class="btn btn-md btn-icon btn-icon-white btn-info"
														data-kt-menu-trigger="click" data-kt-menu-overflow="true"
														data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
														<!--begin::Svg Icon | path: icons/duotone/Layout/Layout-4-blocks-2.svg-->
														<span class="svg-icon svg-icon-1">
															<svg xmlns="http://www.w3.org/2000/svg"
																xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
																height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none"
																	fill-rule="evenodd">
																	<rect x="5" y="5" width="5" height="5" rx="1"
																		fill="#000000" />
																	<rect x="14" y="5" width="5" height="5" rx="1"
																		fill="#000000" opacity="0.3" />
																	<rect x="5" y="14" width="5" height="5" rx="1"
																		fill="#000000" opacity="0.3" />
																	<rect x="14" y="14" width="5" height="5" rx="1"
																		fill="#000000" opacity="0.3" />
																</g>
															</svg>
														</span>
														<!--end::Svg Icon-->
													</button>
													<!--begin::Menu-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold w-200px"
														data-kt-menu="true">
														<div class="menu-item px-3">
															<div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">
																Manage</div>
														</div>
														<div class="separator mb-3 opacity-75"></div>
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">Add User</a>
														</div>
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">Add Role</a>
														</div>
														<div class="menu-item px-3" data-kt-menu-trigger="hover"
															data-kt-menu-placement="right-start"
															data-kt-menu-flip="left-start, top">
															<a href="#" class="menu-link px-3">
																<span class="menu-title">Add Group</span>
																<span class="menu-arrow"></span>
															</a>
															<div class="menu-sub menu-sub-dropdown w-200px py-4">
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Admin Group</a>
																</div>
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Staff Group</a>
																</div>
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Member Group</a>
																</div>
															</div>
														</div>
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">Reports</a>
														</div>
														<div class="separator mt-3 opacity-75"></div>
														<div class="menu-item px-3">
															<div class="menu-content px-3 py-3">
																<a class="btn btn-primary fw-bold btn-sm px-4"
																	href="#">Create New</a>
															</div>
														</div>
													</div>
													<!--end::Menu-->
												</div>
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-0">
												<!--begin: Item-->
												<div class="d-flex flex-wrap align-items-center mb-7">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px symbol-2by3 me-4">
														<img src="assets/media/stock/600x400/img-8.jpg" alt=""
															class="mw-100" />
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
														<a href="#"
															class="text-white fw-bolder text-hover-primary fs-6">Automatica</a>
														<span class="text-white opacity-25 fw-bold fs-7 my-1">Successful
															Fellas</span>
													</div>
													<!--end::Title-->
												</div>
												<!--end: Item-->
												<!--begin::Item-->
												<div class="d-flex flex-wrap align-items-center mb-7">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px symbol-2by3 me-4">
														<img src="assets/media/stock/600x400/img-11.jpg" alt=""
															class="mw-100" />
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
														<a href="#" class="text-white fw-bolder text-hover-primary fs-6">BP
															Industries</a>
														<span class="text-white opacity-25 fw-bold fs-7 my-1">Successful
															Fellas</span>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-wrap align-items-center mb-7">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px symbol-2by3 me-4">
														<img src="assets/media/stock/600x400/img-19.jpg" alt=""
															class="mw-100" />
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
														<a href="#" class="text-white fw-bolder text-hover-primary fs-6">Cup
															&amp; Green</a>
														<span class="text-white opacity-25 fs-7 fw-bold my-1">ASP.NET
															Developer</span>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-wrap align-items-center mb-7">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px symbol-2by3 me-4">
														<img src="assets/media/stock/600x400/img-9.jpg" alt=""
															class="mw-100" />
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column flex-grow-1 pe-3">
														<a href="#"
															class="text-white fw-bolder text-hover-primary fs-6">Python
															Inc.</a>
														<span class="text-white opacity-25 fw-bold fs-7 my-1">Most
															Successful</span>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-wrap align-items-center">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px symbol-2by3 me-4">
														<img src="assets/media/stock/600x400/img-6.jpg" alt=""
															class="mw-100" />
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
														<a href="#"
															class="text-white fw-bolder text-hover-primary fs-6">Active
															Customers</a>
														<span class="text-white opacity-25 fs-7 fw-bold my-1">Best
															Customers</span>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Item-->
											</div>
											<!--end: Card Body-->
										</div>
										<!--end::Card-->
									</div>
									<div class="tab-pane" id="kt_sidebar_tab_pane_5" role="tabpanel">
										<!--begin::Card-->
										<div class="card bg-transparent">
											<!--begin::Header-->
											<div class="card-header align-items-center border-0">
												<h3 class="card-title fw-bolder text-white fs-3">Treva Sales</h3>
												<div class="card-toolbar">
													<button type="button"
														class="btn btn-md btn-icon btn-icon-white btn-info"
														data-kt-menu-trigger="click" data-kt-menu-overflow="true"
														data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
														<!--begin::Svg Icon | path: icons/duotone/Layout/Layout-4-blocks-2.svg-->
														<span class="svg-icon svg-icon-1">
															<svg xmlns="http://www.w3.org/2000/svg"
																xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
																height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none"
																	fill-rule="evenodd">
																	<rect x="5" y="5" width="5" height="5" rx="1"
																		fill="#000000" />
																	<rect x="14" y="5" width="5" height="5" rx="1"
																		fill="#000000" opacity="0.3" />
																	<rect x="5" y="14" width="5" height="5" rx="1"
																		fill="#000000" opacity="0.3" />
																	<rect x="14" y="14" width="5" height="5" rx="1"
																		fill="#000000" opacity="0.3" />
																</g>
															</svg>
														</span>
														<!--end::Svg Icon-->
													</button>
													<!--begin::Menu-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold w-200px"
														data-kt-menu="true">
														<div class="menu-item px-3">
															<div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">
																Manage</div>
														</div>
														<div class="separator mb-3 opacity-75"></div>
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">Add User</a>
														</div>
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">Add Role</a>
														</div>
														<div class="menu-item px-3" data-kt-menu-trigger="hover"
															data-kt-menu-placement="right-start"
															data-kt-menu-flip="left-start, top">
															<a href="#" class="menu-link px-3">
																<span class="menu-title">Add Group</span>
																<span class="menu-arrow"></span>
															</a>
															<div class="menu-sub menu-sub-dropdown w-200px py-4">
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Admin Group</a>
																</div>
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Staff Group</a>
																</div>
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Member Group</a>
																</div>
															</div>
														</div>
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">Reports</a>
														</div>
														<div class="separator mt-3 opacity-75"></div>
														<div class="menu-item px-3">
															<div class="menu-content px-3 py-3">
																<a class="btn btn-primary fw-bold btn-sm px-4"
																	href="#">Create New</a>
															</div>
														</div>
													</div>
													<!--end::Menu-->
												</div>
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body px-3 py-0">
												<!--begin::Chart-->
												<div id="kt_sidebar_tab_5_chart" class="apexcharts-bar-hover-danger"
													style="height: 250px"></div>
												<!--end::Chart-->
											</div>
											<!--end: Card Body-->
										</div>
										<!--end::Card-->
										<!--begin::Card-->
										<div class="card bg-transparent">
											<!--begin::Header-->
											<div class="card-header align-items-center border-0">
												<h3 class="card-title fw-bolder text-white fs-3">Treva's Products</h3>
												<div class="card-toolbar">
													<button type="button"
														class="btn btn-md btn-icon btn-icon-white btn-info"
														data-kt-menu-trigger="click" data-kt-menu-overflow="true"
														data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
														<!--begin::Svg Icon | path: icons/duotone/Layout/Layout-4-blocks-2.svg-->
														<span class="svg-icon svg-icon-1">
															<svg xmlns="http://www.w3.org/2000/svg"
																xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
																height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none"
																	fill-rule="evenodd">
																	<rect x="5" y="5" width="5" height="5" rx="1"
																		fill="#000000" />
																	<rect x="14" y="5" width="5" height="5" rx="1"
																		fill="#000000" opacity="0.3" />
																	<rect x="5" y="14" width="5" height="5" rx="1"
																		fill="#000000" opacity="0.3" />
																	<rect x="14" y="14" width="5" height="5" rx="1"
																		fill="#000000" opacity="0.3" />
																</g>
															</svg>
														</span>
														<!--end::Svg Icon-->
													</button>
													<!--begin::Menu-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold w-200px"
														data-kt-menu="true">
														<div class="menu-item px-3">
															<div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">
																Manage</div>
														</div>
														<div class="separator mb-3 opacity-75"></div>
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">Add User</a>
														</div>
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">Add Role</a>
														</div>
														<div class="menu-item px-3" data-kt-menu-trigger="hover"
															data-kt-menu-placement="right-start"
															data-kt-menu-flip="left-start, top">
															<a href="#" class="menu-link px-3">
																<span class="menu-title">Add Group</span>
																<span class="menu-arrow"></span>
															</a>
															<div class="menu-sub menu-sub-dropdown w-200px py-4">
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Admin Group</a>
																</div>
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Staff Group</a>
																</div>
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Member Group</a>
																</div>
															</div>
														</div>
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">Reports</a>
														</div>
														<div class="separator mt-3 opacity-75"></div>
														<div class="menu-item px-3">
															<div class="menu-content px-3 py-3">
																<a class="btn btn-primary fw-bold btn-sm px-4"
																	href="#">Create New</a>
															</div>
														</div>
													</div>
													<!--end::Menu-->
												</div>
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-0">
												<!--begin::Item-->
												<div class="d-flex flex-wrap align-items-center mb-7">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px symbol-2by3 me-4">
														<img src="assets/media/stock/600x400/img-12.jpg" alt=""
															class="mw-100" />
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
														<a href="#" class="text-white fw-bolder text-hover-primary fs-6">Top
															Authors</a>
														<span class="text-white opacity-25 fw-bold fs-7 my-1">Successful
															Fellas</span>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Item-->
												<!--begin: Item-->
												<div class="d-flex flex-wrap align-items-center mb-7">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px symbol-2by3 me-4">
														<img src="assets/media/stock/600x400/img-13.jpg" alt=""
															class="mw-100" />
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
														<a href="#"
															class="text-white fw-bolder text-hover-primary fs-6">Popular
															Authors</a>
														<span class="text-white opacity-25 fw-bold fs-7 my-1">Most
															Successful</span>
													</div>
													<!--end::Title-->
												</div>
												<!--end: Item-->
												<!--begin::Item-->
												<div class="d-flex flex-wrap align-items-center mb-7">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px symbol-2by3 me-4">
														<img src="assets/media/stock/600x400/img-14.jpg" alt=""
															class="mw-100" />
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column flex-grow-1 pe-3">
														<a href="#" class="text-white fw-bolder text-hover-primary fs-6">New
															Users</a>
														<span class="text-white opacity-25 fw-bold fs-7 my-1">HTML, CSS.
															jQuery</span>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-wrap align-items-center mb-7">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px symbol-2by3 me-4">
														<img src="assets/media/stock/600x400/img-15.jpg" alt=""
															class="mw-100" />
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
														<a href="#"
															class="text-white fw-bolder text-hover-primary fs-6">Active
															Customers</a>
														<span class="text-white opacity-25 fs-7 fw-bold my-1">Awesome
															Users</span>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-wrap align-items-center">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px symbol-2by3 me-4">
														<img src="assets/media/stock/600x400/img-16.jpg" alt=""
															class="mw-100" />
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
														<a href="#"
															class="text-white fw-bolder text-hover-primary fs-6">Bose QC 35
															II</a>
														<span class="text-white opacity-25 fs-7 fw-bold my-1">Best
															Customers</span>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Item-->
											</div>
											<!--end: Card Body-->
										</div>
										<!--end::Card-->
									</div>
								</div>
							</div>
						</div>
						<!--end::Sidebar Content-->
						<!--begin::Sidebar footer-->
						<div id="kt_sidebar_footer" class="py-2 px-5 pb-md-6 text-center">
							<a href="#"
								class="btn btn-color-white bg-white bg-opacity-10 bg-hover-opacity-20 fw-bolder w-100">View
								Extended Layout</a>
						</div>
						<!--end::Sidebar footer-->
					</div>
					<!--end::Sidebar Content-->
				</div>
				<!--end::Sidebar-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->
		<!--begin::Header Search-->
		<div class="modal bg-white fade" id="kt_header_search_modal" aria-hidden="true">
			<div class="modal-dialog modal-fullscreen">
				<div class="modal-content shadow-none">
					<div class="container w-lg-800px">
						<div class="modal-header d-flex justify-content-end border-0">
							<!--begin::Close-->
							<div class="btn btn-icon btn-sm btn-light-primary ms-2" data-bs-dismiss="modal">
								<!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
								<span class="svg-icon svg-icon-1">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
										width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
										<g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)"
											fill="#000000">
											<rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />
											<rect fill="#000000" opacity="0.5"
												transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)"
												x="0" y="7" width="16" height="2" rx="1" />
										</g>
									</svg>
								</span>
								<!--end::Svg Icon-->
							</div>
							<!--end::Close-->
						</div>
						<div class="modal-body">
							<!--begin::Search-->
							<form class="pb-10">
								<input autofocus="" type="text"
									class="form-control bg-transparent border-0 fs-4x text-center fw-normal" name="query"
									placeholder="Search..." />
							</form>
							<!--end::Search-->
							<!--begin::Shop Goods-->

							<!--end::Shop Goods-->
							<!--begin::Framework Users-->

							<!--end::Framework Users-->
							<!--begin::Tutorials-->
							<div class="pb-10">
								<h3 class="text-dark fw-bolder fs-1 mb-6">FAQ</h3>
								<!--begin::List Widget 5-->
								<div class="card mb-5 shadow-none">
									<!--begin::Body-->
									<div class="card-body pt-2 px-0">
										<!--begin::Item-->
										<div class="d-flex mb-6">
											<!--begin::Icon-->
											<div class="me-1">
												<!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-right.svg-->
												<span class="svg-icon svg-icon-sm svg-icon-primary">
													<svg xmlns="http://www.w3.org/2000/svg"
														xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
														height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<polygon points="0 0 24 0 24 24 0 24" />
															<path
																d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z"
																fill="#000000" fill-rule="nonzero"
																transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)" />
														</g>
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Icon-->
											<!--begin::Content-->
											<div class="d-flex flex-column">
												<a href="#"
													class="fs-6 fw-bolder text-hover-primary text-gray-800 mb-2">Question
													1</a>
												<div class="fw-bold text-muted">Answer 1</div>
											</div>
											<!--end::Content-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex mb-6">
											<!--begin::Icon-->
											<div class="me-1">
												<!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-right.svg-->
												<span class="svg-icon svg-icon-sm svg-icon-primary">
													<svg xmlns="http://www.w3.org/2000/svg"
														xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
														height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<polygon points="0 0 24 0 24 24 0 24" />
															<path
																d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z"
																fill="#000000" fill-rule="nonzero"
																transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)" />
														</g>
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Icon-->
											<!--begin::Content-->
											<div class="d-flex flex-column">
												<a href="#"
													class="fs-6 fw-bolder text-hover-primary text-gray-800 mb-2">Question
													2</a>
												<div class="fw-bold text-muted">Answer 2</div>
											</div>
											<!--end::Content-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex mb-6">
											<!--begin::Icon-->
											<div class="me-1">
												<!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-right.svg-->
												<span class="svg-icon svg-icon-sm svg-icon-primary">
													<svg xmlns="http://www.w3.org/2000/svg"
														xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
														height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<polygon points="0 0 24 0 24 24 0 24" />
															<path
																d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z"
																fill="#000000" fill-rule="nonzero"
																transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)" />
														</g>
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Icon-->
											<!--begin::Content-->
											<div class="d-flex flex-column">
												<a href="#"
													class="fs-6 fw-bolder text-hover-primary text-gray-800 mb-2">Question
													3</a>
												<div class="fw-bold text-muted">Answer 3</div>
											</div>
											<!--end::Content-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex mb-6">
											<!--begin::Icon-->
											<div class="me-1">
												<!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-right.svg-->
												<span class="svg-icon svg-icon-sm svg-icon-primary">
													<svg xmlns="http://www.w3.org/2000/svg"
														xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
														height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<polygon points="0 0 24 0 24 24 0 24" />
															<path
																d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z"
																fill="#000000" fill-rule="nonzero"
																transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)" />
														</g>
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Icon-->
											<!--begin::Content-->
											<div class="d-flex flex-column">
												<a href="#"
													class="fs-6 fw-bolder text-hover-primary text-gray-800 mb-2">Question
													4</a>
												<div class="fw-bold text-muted">Answer 4</div>
											</div>
											<!--end::Content-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex mb-6">
											<!--begin::Icon-->
											<div class="me-1">
												<!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-right.svg-->
												<span class="svg-icon svg-icon-sm svg-icon-primary">
													<svg xmlns="http://www.w3.org/2000/svg"
														xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
														height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<polygon points="0 0 24 0 24 24 0 24" />
															<path
																d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z"
																fill="#000000" fill-rule="nonzero"
																transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)" />
														</g>
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Icon-->
											<!--begin::Content-->
											<div class="d-flex flex-column">
												<a href="#"
													class="fs-6 fw-bolder text-hover-primary text-gray-800 mb-2">Question
													5</a>
												<div class="fw-bold text-muted">Answer 5</div>
											</div>
											<!--end::Content-->
										</div>
										<!--end::Item-->
									</div>
									<!--end::Body-->
								</div>
								<!--end::List Widget 5-->
							</div>
							<!--end::Tutorials-->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--end::Header Search-->
		<!--begin::Mega Menu-->
		<div class="modal bg-white fade" id="kt_mega_menu_modal" tabindex="-1" aria-hidden="true">
			<div class="modal-dialog modal-fullscreen">
				<div class="modal-content shadow-none">
					<div class="container">
						<div class="modal-header d-flex flex-stack border-0">
							<div class="d-flex align-items-center">
								<!--begin::Logo-->
								<a href="user">
									<img alt="Logo" src="assets/media/logos/logo-default.svg" class="h-30px" />
								</a>
								<!--end::Logo-->
							</div>
							<!--begin::Close-->
							<div class="btn btn-icon btn-sm btn-light-primary ms-2" data-bs-dismiss="modal">
								<!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
								<span class="svg-icon svg-icon-1">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
										width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
										<g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)"
											fill="#000000">
											<rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />
											<rect fill="#000000" opacity="0.5"
												transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)"
												x="0" y="7" width="16" height="2" rx="1" />
										</g>
									</svg>
								</span>
								<!--end::Svg Icon-->
							</div>
							<!--end::Close-->
						</div>
						<div class="modal-body">
							<!--begin::Row-->

							<!--end::Row-->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--end::Mega Menu-->
		<!--begin::Drawers-->
		<!--begin::Exolore drawer-->
		<div id="kt_explore" class="explore bg-white" data-kt-drawer="true" data-kt-drawer-name="explore"
			data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
			data-kt-drawer-width="{default:'300px', 'lg': '440px'}" data-kt-drawer-direction="end"
			data-kt-drawer-toggle="#kt_explore_toggle" data-kt-drawer-close="#kt_explore_close">
			<!--begin::Card-->
			<div class="card shadow-none w-100">
				<!--begin::Header-->
				<div class="card-header" id="kt_explore_header">
					<h5 class="card-title fw-bold text-gray-600">Upgrade To Pro</h5>
					<div class="card-toolbar">
						<button type="button" class="btn btn-sm btn-icon explore-btn-dismiss me-n5" id="kt_explore_close">
							<!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
							<span class="svg-icon svg-icon-2">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
									width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)"
										fill="#000000">
										<rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />
										<rect fill="#000000" opacity="0.5"
											transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)"
											x="0" y="7" width="16" height="2" rx="1" />
									</g>
								</svg>
							</span>
							<!--end::Svg Icon-->
						</button>
					</div>
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body" id="kt_explore_body">
					<!--begin::Content-->
					<div id="kt_explore_scroll" class="scroll-y me-n5 pe-5" data-kt-scroll="true"
						data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_explore_body"
						data-kt-scroll-dependencies="#kt_explore_header, #kt_explore_footer" data-kt-scroll-offset="5px">
						<!--begin::Licenses-->
						<div class="mb-5">
							<!--begin::Comparision-->
							<table
								class="table table-row-dashed table-row-gray-300 align-middle fs-6 fw-bold text-gray-800 gs-0 gy-3">
								<tr class="border-bottom-0">
									<th class="fw-bolder text-dark fs-3">Pro Version Benefits</th>
									<th class="text-center">
										<span class="bg-light py-2 px-4 fw-bold fs-6 rounded">Free</span>
									</th>
									<th class="text-center">
										<span class="bg-light py-2 px-4 fw-bold fs-6 rounded">Pro</span>
									</th>
								</tr>
								<tr>
									<td>UI Elements</td>
									<td class="text-center">20</td>
									<td class="text-center">100</td>
								</tr>
								<tr>
									<td>In-house Components</td>
									<td class="text-center">20</td>
									<td class="text-center">40</td>
								</tr>
								<tr>
									<td>Crafted Pages</td>
									<td class="text-center">5</td>
									<td class="text-center">20</td>
								</tr>
								<tr>
									<td>Complete Documentation</td>
									<td class="text-center">
										<!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
										<span class="svg-icon svg-icon-2 explore-icon-success">
											<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
												viewBox="0 0 24 24" version="1.1">
												<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
												<path
													d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z"
													fill="#000000" fill-rule="nonzero" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</td>
									<td class="text-center">
										<!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
										<span class="svg-icon svg-icon-2 explore-icon-success">
											<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
												viewBox="0 0 24 24" version="1.1">
												<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
												<path
													d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z"
													fill="#000000" fill-rule="nonzero" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</td>
								</tr>
								<tr>
									<td>Product Support</td>
									<td class="text-center">
										<!--begin::Svg Icon | path: icons/duotone/Code/Error-circle.svg-->
										<span class="svg-icon svg-icon-2 explore-icon-danger">
											<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
												viewBox="0 0 24 24" version="1.1">
												<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
												<path
													d="M12.0355339,10.6213203 L14.863961,7.79289322 C15.2544853,7.40236893 15.8876503,7.40236893 16.2781746,7.79289322 C16.6686989,8.18341751 16.6686989,8.81658249 16.2781746,9.20710678 L13.4497475,12.0355339 L16.2781746,14.863961 C16.6686989,15.2544853 16.6686989,15.8876503 16.2781746,16.2781746 C15.8876503,16.6686989 15.2544853,16.6686989 14.863961,16.2781746 L12.0355339,13.4497475 L9.20710678,16.2781746 C8.81658249,16.6686989 8.18341751,16.6686989 7.79289322,16.2781746 C7.40236893,15.8876503 7.40236893,15.2544853 7.79289322,14.863961 L10.6213203,12.0355339 L7.79289322,9.20710678 C7.40236893,8.81658249 7.40236893,8.18341751 7.79289322,7.79289322 C8.18341751,7.40236893 8.81658249,7.40236893 9.20710678,7.79289322 L12.0355339,10.6213203 Z"
													fill="#000000" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</td>
									<td class="text-center">
										<!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
										<span class="svg-icon svg-icon-2 explore-icon-success">
											<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
												viewBox="0 0 24 24" version="1.1">
												<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
												<path
													d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z"
													fill="#000000" fill-rule="nonzero" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</td>
								</tr>
								<tr>
									<td>Chat App</td>
									<td class="text-center">
										<!--begin::Svg Icon | path: icons/duotone/Code/Error-circle.svg-->
										<span class="svg-icon svg-icon-2 explore-icon-danger">
											<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
												viewBox="0 0 24 24" version="1.1">
												<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
												<path
													d="M12.0355339,10.6213203 L14.863961,7.79289322 C15.2544853,7.40236893 15.8876503,7.40236893 16.2781746,7.79289322 C16.6686989,8.18341751 16.6686989,8.81658249 16.2781746,9.20710678 L13.4497475,12.0355339 L16.2781746,14.863961 C16.6686989,15.2544853 16.6686989,15.8876503 16.2781746,16.2781746 C15.8876503,16.6686989 15.2544853,16.6686989 14.863961,16.2781746 L12.0355339,13.4497475 L9.20710678,16.2781746 C8.81658249,16.6686989 8.18341751,16.6686989 7.79289322,16.2781746 C7.40236893,15.8876503 7.40236893,15.2544853 7.79289322,14.863961 L10.6213203,12.0355339 L7.79289322,9.20710678 C7.40236893,8.81658249 7.40236893,8.18341751 7.79289322,7.79289322 C8.18341751,7.40236893 8.81658249,7.40236893 9.20710678,7.79289322 L12.0355339,10.6213203 Z"
													fill="#000000" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</td>
									<td class="text-center">
										<!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
										<span class="svg-icon svg-icon-2 explore-icon-success">
											<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
												viewBox="0 0 24 24" version="1.1">
												<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
												<path
													d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z"
													fill="#000000" fill-rule="nonzero" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</td>
								</tr>
							</table>
							<!--end::Comparision-->
						</div>
						<!--end::Licenses-->
						<!--begin::Link-->
						<a href="https://keenthemes.com/products/start-html-pro"
							class="btn btn-lg explore-btn-primary w-100">Upgrade to
							<span class="fw-bolder ms-1">Start HTML Pro</span></a>
						<!--end::Link-->
						<!--begin::Related Products-->
						<div class="pt-15 mb-0">
							<!--begin::Heading-->
							<div class="d-flex flex-stack mb-5">
								<!--begin::Title-->
								<h3 class="fw-bolder text-dark me-2 mb-0">Related Products</h3>
								<!--end::Title-->
								<!--begin::Link-->
								<a href="https://keenthemes.com" target="_black" class="fs-6 fw-bold explore-link">All
									Products</a>
								<!--end::Link-->
							</div>
							<!--end::Heading-->
							<!--begin::Products-->
							<div class="mb-0">
								<!--begin::Product-->
								<a href="https://keenthemes.com/products/start-html-free"
									class="btn btn-flex explore-btn-outline w-100 flex-stack active px-4 mb-4">
									<!--begin::Info-->
									<div class="d-flex align-items-center me-1">
										<img src="assets/media/technology-logos/Html5.png" alt="" class="h-30px me-3" />
										<div class="d-flex flex-column align-items-start">
											<h3 class="text-gray-800 fs-6 fw-bold mb-0">Start HTML Free</h3>
											<div class="text-gray-400 fs-7 fw-bold">HTML, CSS, JS, Bootstrap 5</div>
										</div>
									</div>
									<!--end::Info-->
									<!--begin::Label-->
									<span class="badge badge-inline explore-label-free py-2">Free</span>
									<!--end::Label-->
								</a>
								<!--end::Product-->
								<!--begin::Product-->
								<a href="https://keenthemes.com/products/start-vue-free"
									class="btn btn-flex explore-btn-outline w-100 flex-stack px-4 mb-4">
									<!--begin::Info-->
									<div class="d-flex align-items-center me-1">
										<img src="assets/media/technology-logos/VueJS.png" alt="" class="h-30px me-3" />
										<div class="d-flex flex-column align-items-start">
											<h3 class="text-gray-800 fs-6 fw-bold mb-0">Start Vue Free</h3>
											<div class="text-gray-400 fs-7 fw-bold">VueJS 3, Typescript, Bootstrap 5</div>
										</div>
									</div>
									<!--end::Info-->
									<!--begin::Label-->
									<span class="badge badge-inline explore-label-free py-2">Free</span>
									<!--end::Label-->
								</a>
								<!--end::Product-->
								<!--begin::Product-->
								<a href="https://keenthemes.com/products/start-react-free"
									class="btn btn-flex explore-btn-outline w-100 flex-stack px-4 mb-4">
									<!--begin::Info-->
									<div class="d-flex align-items-center me-1">
										<img src="assets/media/technology-logos/React.png" alt="" class="h-30px me-3" />
										<div class="d-flex flex-column align-items-start">
											<h3 class="text-gray-800 fs-6 fw-bold mb-0">Start React Free</h3>
											<div class="text-gray-400 fs-7 fw-bold">React, Typescript, Bootstrap 5</div>
										</div>
									</div>
									<!--end::Info-->
									<!--begin::Label-->
									<span class="badge badge-inline explore-label-free py-2">Free</span>
									<!--end::Label-->
								</a>
								<!--end::Product-->
								<!--begin::Product-->
								<a href="https://keenthemes.com/products/start-html-pro"
									class="btn btn-flex explore-btn-outline w-100 flex-stack px-4 mb-4">
									<!--begin::Info-->
									<div class="d-flex align-items-center me-1">
										<img src="assets/media/technology-logos/Html5.png" alt="" class="h-30px me-3" />
										<div class="d-flex flex-column align-items-start">
											<h3 class="text-gray-800 fs-6 fw-bold mb-0">Start HTML Pro</h3>
											<div class="text-gray-400 fs-7 fw-bold">HTML5, CSS3, JS, Bootstrap 5</div>
										</div>
									</div>
									<!--end::Info-->
									<!--begin::Label-->
									<span class="badge badge-inline explore-label-pro py-2">Pro</span>
									<!--end::Label-->
								</a>
								<!--end::Product-->
								<!--begin::Product-->
								<a href="https://keenthemes.com/products/start-vue-pro"
									class="btn btn-flex explore-btn-outline w-100 flex-stack px-4 mb-4">
									<!--begin::Info-->
									<div class="d-flex align-items-center me-1">
										<img src="assets/media/technology-logos/VueJS.png" alt="" class="h-30px me-3" />
										<div class="d-flex flex-column align-items-start">
											<h3 class="text-gray-800 fs-6 fw-bold mb-0">Start Vue Pro</h3>
											<div class="text-gray-400 fs-7 fw-bold">VueJS 3, Typescript, Bootstrap 5</div>
										</div>
									</div>
									<!--end::Info-->
									<!--begin::Label-->
									<span class="badge badge-inline explore-label-pro py-2">Pro</span>
									<!--end::Label-->
								</a>
								<!--end::Product-->
								<!--begin::Product-->
								<a href="https://keenthemes.com/products/start-react-pro"
									class="btn btn-flex explore-btn-outline w-100 flex-stack px-4 mb-4">
									<!--begin::Info-->
									<div class="d-flex align-items-center me-1">
										<img src="assets/media/technology-logos/React.png" alt="" class="h-30px me-3" />
										<div class="d-flex flex-column align-items-start">
											<h3 class="text-gray-800 fs-6 fw-bold mb-0">Start React Pro</h3>
											<div class="text-gray-400 fs-7 fw-bold">React, Typescript, Bootstrap 5</div>
										</div>
									</div>
									<!--end::Info-->
									<!--begin::Label-->
									<span class="badge badge-inline explore-label-pro py-2">Pro</span>
									<!--end::Label-->
								</a>
								<!--end::Product-->
							</div>
							<!--end::Products-->
						</div>
						<!--end::Related Products-->
					</div>
					<!--end::Content-->
				</div>
				<!--end::Body-->
				<!--begin::Footer-->
				<div class="card-footer py-5 text-center" id="kt_explore_footer">
					<a href="https://keenthemes.com/products/start-html-free"
						class="btn btn-lg explore-btn-secondary w-100">Download
						<span class="fw-bolder ms-1">Start HTML Free</span></a>
				</div>
				<!--end::Footer-->
			</div>
			<!--end::Card-->
		</div>
		<!--end::Exolore drawer-->
		<!--end::Drawers-->
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<!--begin::Svg Icon | path: icons/duotone/Navigation/Up-2.svg-->
			<span class="svg-icon">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
					height="24px" viewBox="0 0 24 24" version="1.1">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<polygon points="0 0 24 0 24 24 0 24" />
						<rect fill="#000000" opacity="0.5" x="11" y="10" width="2" height="10" rx="1" />
						<path
							d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z"
							fill="#000000" fill-rule="nonzero" />
					</g>
				</svg>
			</span>
			<!--end::Svg Icon-->
		</div>
		<!--end::Scrolltop-->
		<!--end::Main-->
		<!--begin::Javascript-->
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="assets/js/custom/widgets.js"></script>
		<script src="assets/js/custom/modals/create-app.js"></script>
		<script src="assets/js/custom/modals/select-location.js"></script>
		<script src="assets/js/custom/modals/users-search.js"></script>
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->

	</html>

<?php } else {
	header("location: index");
} ?>