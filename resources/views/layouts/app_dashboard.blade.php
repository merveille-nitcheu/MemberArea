<!DOCTYPE html>

<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
		<title>Member Area</title>

		<link rel="shortcut icon" href="assets/media/logos/logo.png" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<link href="../assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="../assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
	</head>

	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">

		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Aside-->
				<div id="kt_aside" class="aside aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle" >
					<div class="aside-logo flex-column-auto" id="kt_aside_logo" style="margin-top: 30px;margin-left:-20px">
                        <!--begin::Logo-->
                        <a href="{{route('dashboard')}}" >
                            <img alt="Logo" src="{{url('assets/media/logos/logo.png')}}" class="h-105px w-200px  logo" />
                        </a>
                        <!--end::Logo-->
                        <!--begin::Aside toggler-->
                        <div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="aside-minimize">
                            <!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-double-left.svg-->
                            <span class="svg-icon svg-icon-1 rotate-180">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24" />
                                        <path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)" />
                                        <path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.5" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)" />
                                    </g>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Aside toggler-->
                    </div>
                    <!--end::Brand-->
                    <!--begin::Aside menu-->
                    <div class="aside-menu flex-column-fluid" style="margin-top: -10px">
                        <!--begin::Aside Menu-->
                        <div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
                            <!--begin::Menu-->
                            <div class="menu menu-column menu-title-gray-800 menu-state-title-primary  menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true">
                                <div class="menu-item">
                                    <div class="menu-content pb-2">
                                        <span class="menu-section text-muted text-uppercase fs-8 ls-1"></span>
                                    </div>
                                </div>
                                <div class="menu-item mx-8 py-1 btn btn-white fs-2 px-1">
                                    <a class="menu-link active" href="{{route('dashboard')}}">
                                        <span class="menu-icon" >
                                            <!--begin::Svg Icon | path: icons/duotone/Design/PenAndRuller.svg-->
                                            <span class="svg-icon svg-icon-2x ">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 24 24" fill="none">
                                                    <path d="M21.4622 10.699C21.4618 10.6986 21.4613 10.6981 21.4609 10.6977L13.3016 2.53955C12.9538 2.19165 12.4914 2 11.9996 2C11.5078 2 11.0454 2.1915 10.6974 2.5394L2.54246 10.6934C2.53971 10.6961 2.53696 10.699 2.53422 10.7018C1.82003 11.42 1.82125 12.5853 2.53773 13.3017C2.86506 13.6292 3.29739 13.8188 3.75962 13.8387C3.77839 13.8405 3.79732 13.8414 3.81639 13.8414H4.14159V19.8453C4.14159 21.0334 5.10833 22 6.29681 22H9.48897C9.81249 22 10.075 21.7377 10.075 21.4141V16.707C10.075 16.1649 10.516 15.7239 11.0582 15.7239H12.941C13.4832 15.7239 13.9242 16.1649 13.9242 16.707V21.4141C13.9242 21.7377 14.1866 22 14.5102 22H17.7024C18.8909 22 19.8576 21.0334 19.8576 19.8453V13.8414H20.1592C20.6508 13.8414 21.1132 13.6499 21.4613 13.302C22.1786 12.5844 22.1789 11.4171 21.4622 10.699V10.699Z" fill="#6f42c1" style="fill: #cb0c9f"/>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title text-dark ms-2">Accueil</span>
                                    </a>
                                </div>
                                <div class="menu-item mx-8 py-1 btn btn-white fs-2 my-8 px-1" >
                                    <a class="menu-link" href="{{route('publications',session('utilisateur')->id)}}">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotone/Communication/Group-chat.svg-->
                                            <span class="svg-icon svg-icon-2x">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000" style="fill: black"/>
                                                    <path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3" style="fill: black"/>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title text-dark">Publications</span>
                                    </a>
                                </div>
                                <div class="menu-item mx-8 py-1 btn btn-white fs-2 px-1">
                                    <a class="menu-link" href="{{route('dashboard')}}">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotone/Design/Layers.svg-->
                                            <span class="svg-icon svg-icon-2x">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path d="M17,12 L18.5,12 C19.3284271,12 20,12.6715729 20,13.5 C20,14.3284271 19.3284271,15 18.5,15 L5.5,15 C4.67157288,15 4,14.3284271 4,13.5 C4,12.6715729 4.67157288,12 5.5,12 L7,12 L7.5582739,6.97553494 C7.80974924,4.71225688 9.72279394,3 12,3 C14.2772061,3 16.1902508,4.71225688 16.4417261,6.97553494 L17,12 Z" fill="#cb0c9f" style="fill: #cb0c9f"/>
                                                        <rect fill="#000000" opacity="0.3" x="10" y="16" width="4" height="4" rx="2"/>
                                                    </g>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title text-dark">Notifications</span>
                                    </a>
                                </div>
                                <div class="menu-item mx-8 py-1 btn btn-white fs-2 my-8 px-1">
                                    <a class="menu-link" href="{{route('dashboard')}}">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotone/Design/Sketch.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <polygon fill="#000000" opacity="0.3" points="5 3 19 3 23 8 1 8" style="color:black"/>
                                                    <polygon fill="#000000" points="23 8 12 20 1 8" style="color:black"/>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">Reels</span>
                                    </a>
                                </div>

                            </div>
                            <!--end::Menu-->
                        </div>
                        <!--end::Aside Menu-->
                    </div>
				</div>
				<!--end::Aside-->
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Header-->
					<div id="kt_header" style="" class="header align-items-stretch">
						<div class="container-fluid d-flex align-items-stretch justify-content-between">
                            <!--begin::Aside mobile toggle-->
                            <div class="d-flex align-items-center d-lg-none ms-n3 me-1" title="Show aside menu">
                                <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px" id="kt_aside_mobile_toggle">
                                    <!--begin::Svg Icon | path: icons/duotone/Text/Menu.svg-->
                                    <span class="svg-icon svg-icon-2x mt-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <rect fill="#000000" x="4" y="5" width="16" height="3" rx="1.5" />
                                                <path d="M5.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 Z M5.5,10 L18.5,10 C19.3284271,10 20,10.6715729 20,11.5 C20,12.3284271 19.3284271,13 18.5,13 L5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z" fill="#000000" opacity="0.3" />
                                            </g>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                            </div>
                            <!--end::Aside mobile toggle-->
                            <!--begin::Mobile logo-->
                            <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
                                <a href="dashboard.blade.php" class="d-lg-none">
                                    <img alt="Logo" src="{{url('assets/media/logos/logo.png')}}" class="h-80px" />
                                </a>
                            </div>
                            <!--end::Mobile logo-->
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-stretch justify-content-end flex-lg-grow-1">

                                <!--begin::Topbar-->
                                <div class="d-flex align-items-stretch flex-shrink-0">
                                    <!--begin::Toolbar wrapper-->
                                    <div class="d-flex align-items-stretch flex-shrink-0">
                                        <!--begin::Search-->
                                        <!--begin::Main wrapper-->
                                            <div
                                            id="kt_docs_search_handler_responsive"
                                            class="d-flex align-items-center w-lg-400px"

                                            data-kt-search-keypress="true"
                                            data-kt-search-min-length="2"
                                            data-kt-search-enter="enter"
                                            data-kt-search-layout="menu"
                                            data-kt-search-responsive="lg"

                                            data-kt-menu-trigger="auto"
                                            data-kt-menu-permanent="true"
                                            data-kt-menu-placement="bottom-start"
                                            data-kt-menu-flip="bottom">

                                            <!--begin::Tablet and mobile search toggle-->
                                            <div data-kt-search-element="toggle" class="d-flex d-lg-none align-items-center">
                                                <div class="btn btn-icon btn-active-light-primary">

                                                </div>
                                            </div>
                                            <!--end::Tablet and mobile search toggle-->

                                            <!--begin::Form-->
                                            <form data-kt-search-element="form" class="d-none d-lg-block w-100 position-relative mb-5 mb-lg-0" autocomplete="off">
                                                <!--begin::Hidden input(Added to disable form autocomplete)-->
                                                <input type="hidden"/>
                                                <!--end::Hidden input-->

                                                <!--begin::Icon-->

                                                <!--end::Icon-->

                                                <!--begin::Input-->
                                                <input type="text" class="form-control form-control-solid ps-14" name="search" value="" placeholder="Rechercher..." data-kt-search-element="input"/>
                                                <!--end::Input-->

                                                <!--begin::Spinner-->
                                                <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-6" data-kt-search-element="spinner">
                                                    <span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
                                                </span>
                                                <!--end::Spinner-->

                                                <!--begin::Reset-->
                                                <span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none" data-kt-search-element="clear">

                                                </span>
                                                <!--end::Reset-->
                                            </form>
                                            <!--end::Form-->

                                            <!--begin::Menu-->
                                            <div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown w-300px w-md-400px py-7 px-7 overflow-hidden">
                                                <!--begin::Wrapper-->
                                                <div data-kt-search-element="wrapper">
                                                    <!--begin::Categories-->
                                                    <div data-kt-search-element="categories">
                                                        ...
                                                    </div>
                                                    <!--end::Categories-->

                                                    <!--begin::Search results-->
                                                    <div data-kt-search-element="results" class="d-none">
                                                        ...
                                                    </div>
                                                    <!--end::Search results-->

                                                    <!--begin::Recently viewed-->
                                                    <div data-kt-search-element="recently-viewed">
                                                        ...
                                                    </div>
                                                    <!--end::Recently viewed-->

                                                    <!--begin::Empty search-->
                                                    <div data-kt-search-element="empty" class="text-center d-none">
                                                        ...
                                                    </div>
                                                    <!--end::Empty search-->
                                                </div>
                                                <!--end::Wrapper-->

                                                <!--begin::Preferences-->
                                                <div data-kt-search-element="preferences">
                                                    ...
                                                </div>
                                                <!--end::Preferences-->
                                            </div>
                                            <!--end::Menu-->
                                            </div>
                                            <!--end::Main wrapper-->
                                        <!--end::Search-->


                                        <!--begin::User-->
                                        <div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
                                            <!--begin::Menu wrapper-->
                                            <div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" data-kt-menu-flip="bottom">
                                                <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->nom }}" />
                                            </div>
                                            <!--begin::Menu-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content d-flex align-items-center px-3">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-50px me-5">
                                                            <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->nom }}" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Username-->
                                                        <div class="d-flex flex-column">
                                                            <div class="fw-bolder d-flex align-items-center fs-5">{{session('utilisateur')->nom}}
                                                            </div>
                                                            <a href="#" class="fw-bold text-muted text-hover-primary fs-8">{{session('utilisateur')->email}}</a>
                                                        </div>
                                                        <!--end::Username-->
                                                    </div>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="separator my-2"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-5">
                                                    <a href="{{ route('profile.show') }}" class="menu-link px-5">Profile</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->


                                                <div class="menu-item px-5">
                                                    <a href="{{route('publications',session('utilisateur')->id)}}" class="menu-link px-5">Mes Publications</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="separator my-2"></div>
                                                <!--end::Menu separator-->

                                                <div class="menu-item px-5">
                                                    <form method="POST" action="{{ route('logout') }}">
                                                        @csrf
                                                        <button type ="submit" class="btn btn-white menu-link px-5"> Deconnexion</button>
                                                    </form>
                                                </div>

                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="separator my-2"></div>

                                            </div>
                                            <!--end::Menu-->
                                            <!--end::Menu wrapper-->
                                        </div>
                                        <!--end::User -->
                                        <!--begin::Heaeder menu toggle-->
                                        <div class="d-flex align-items-center d-lg-none ms-2 me-n3" title="Show header menu">
                                            <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px" id="kt_header_menu_mobile_toggle">
                                                <!--begin::Svg Icon | path: icons/duotone/Text/Toggle-Right.svg-->
                                                <span class="svg-icon svg-icon-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M22 11.5C22 12.3284 21.3284 13 20.5 13H3.5C2.6716 13 2 12.3284 2 11.5C2 10.6716 2.6716 10 3.5 10H20.5C21.3284 10 22 10.6716 22 11.5Z" fill="black" />
                                                            <path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd" d="M14.5 20C15.3284 20 16 19.3284 16 18.5C16 17.6716 15.3284 17 14.5 17H3.5C2.6716 17 2 17.6716 2 18.5C2 19.3284 2.6716 20 3.5 20H14.5ZM8.5 6C9.3284 6 10 5.32843 10 4.5C10 3.67157 9.3284 3 8.5 3H3.5C2.6716 3 2 3.67157 2 4.5C2 5.32843 2.6716 6 3.5 6H8.5Z" fill="black" />
                                                        </g>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                        </div>
                                        <!--end::Heaeder menu toggle-->
                                    </div>
                                    <!--end::Toolbar wrapper-->
                                </div>
                                <!--end::Topbar-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
					</div>
					<!--end::Header-->
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						@yield('content')
					</div>
					<!--end::Content-->
					<!--begin::Footer-->
					<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
						<!--begin::Container-->
						<div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
							<!--begin::Copyright-->
							<div class="text-dark order-2 order-md-1">
								<span class="text-muted fw-bold me-1" >Powered by </span>
								<a href="{{route('dashboard')}}" target="_blank" class="text-hover-primary" style="color: #cb0c9f;">Team Black Panther</a>
							</div>
							<!--end::Copyright-->
							<!--begin::Menu-->
							<ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1">
								<li class="menu-item">
									<a href="h{{route('dashboard')}}" target="_blank" class="menu-link px-2">A Propos</a>
								</li>
								<li class="menu-item">
									<a href="{{route('dashboard')}}" target="_blank" class="menu-link px-2">Support</a>
								</li>
								<li class="menu-item">
									<a href="{{route('dashboard')}}" target="_blank" class="menu-link px-2">FAQ</a>
								</li>
							</ul>
							<!--end::Menu-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->


		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true" style="background-color:#cb0c9f ">
			<!--begin::Svg Icon | path: icons/duotone/Navigation/Up-2.svg-->
			<span class="svg-icon">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<polygon points="0 0 24 0 24 24 0 24" />
						<rect fill="#000000" opacity="0.5" x="11" y="10" width="2" height="10" rx="1" />
						<path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero"/>
					</g>
				</svg>
			</span>
			<!--end::Svg Icon-->
		</div>
		<!--end::Scrolltop-->
		<!--end::Main-->
		<!--begin::Javascript-->
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="{{url('assets/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{url('assets/js/scripts.bundle.js')}}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="../assets/js/custom/widgets.js"></script>
		<script src="../assets/js/custom/apps/chat/chat.js"></script>
		<script src="../assets/js/custom/modals/create-app.js"></script>
		<script src="../assets/js/custom/modals/upgrade-plan.js"></script>
		<script src="../assets/js/custom/intro.js"></script>
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
		<!--Begin::Google Tag Manager (noscript) -->
		<noscript>
			<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0" style="display:none;visibility:hidden"></iframe>
		</noscript>
		<!--End::Google Tag Manager (noscript) -->
	</body>
	<!--end::Body-->

<!-- Mirrored from preview.keenthemes.com/metronic8/demo1/widgets/feeds.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Aug 2021 11:05:46 GMT -->
</html>
