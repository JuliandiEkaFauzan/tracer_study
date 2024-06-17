<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
    <!--begin::Sidebar-->
    <div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
        <div class="app-sidebar-header d-flex flex-stack d-none d-lg-flex pt-8 pb-2" id="kt_app_sidebar_header">
            <!--begin::Logo-->
            <a href="index.html" class="app-sidebar-logo">
                <img alt="Logo" src="assets/media/logos/demo38.svg" class="h-25px d-none d-sm-inline app-sidebar-logo-default theme-light-show" />
                <img alt="Logo" src="assets/media/logos/demo38-dark.svg" class="h-20px h-lg-25px theme-dark-show" />
            </a>
            <!--end::Logo-->
            <!--begin::Sidebar toggle-->
            <div id="kt_app_sidebar_toggle" class="app-sidebar-toggle btn btn-sm btn-icon bg-light btn-color-gray-700 btn-active-color-primary d-none d-lg-flex rotate" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="app-sidebar-minimize">
                <i class="ki-outline ki-text-align-right rotate-180 fs-1"></i>
            </div>
            <!--end::Sidebar toggle-->
        </div>
        <!--begin::Navs-->
        <div class="app-sidebar-navs flex-column-fluid py-6" id="kt_app_sidebar_navs">
            <div id="kt_app_sidebar_navs_wrappers" class="app-sidebar-wrapper hover-scroll-y my-2" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_header" data-kt-scroll-wrappers="#kt_app_sidebar_navs" data-kt-scroll-offset="5px">
                <!--begin::Sidebar menu-->
                <div id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false" class="app-sidebar-menu-primary menu menu-column menu-rounded menu-sub-indention menu-state-bullet-primary">
                    <!--begin::Heading-->
                    <div class="menu-item mb-2">
                        <div class="menu-heading text-uppercase fs-7 fw-bold">Menu</div>
                        <!--begin::Separator-->
                        <div class="app-sidebar-separator separator"></div>
                        <!--end::Separator-->
                    </div>
                    <!--end::Heading-->
                    <!--begin:Menu item-->
                    <div data-kt-menu-trigger="click" class="menu-item mb-2">
                        <!--begin:Menu link-->
                        <a class="menu-link active" href="/admin" >
                            <span class="menu-icon">
                                <i class="ki-outline ki-home-2 fs-2"></i>
                            </span>
                            <span class="menu-title">Dashboards</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div data-kt-menu-trigger="click" class="menu-item mb-2">
                        <!--begin:Menu link-->
                        <a class="menu-link " href="/alumni" >
                            <span class="menu-icon">
                                <i class="bi bi-people fs-2"></i>
                            </span>
                            <span class="menu-title">Alumni</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div data-kt-menu-trigger="click" class="menu-item mb-2">
                        <!--begin:Menu link-->
                        <a class="menu-link " href="/profil" >
                            <span class="menu-icon">
                                <i class="bi bi-person fs-2"></i>
                            </span>
                            <span class="menu-title">Profil</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item mb-2">
                        <!--begin:Menu link-->
                        <a class="menu-link " href="/isisurvey" >
                            <span class="menu-icon">
                                <i class="bi bi-clipboard fs-2"></i>
                            </span>
                            <span class="menu-title">Survey</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item mb-2">
                        <!--begin:Menu link-->
                        <a class="menu-link" href="/faq" >
                            <span class="menu-icon">
                                <i class="bi bi-question-circle fs-2"></i>
                            </span>
                            <span class="menu-title">FAQ</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item mb-2">
                        <!--begin:Menu link-->
                        <a class="menu-link" href="{{ route('logout') }}" 
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                         <span class="menu-icon">
                             <i class="bi bi-box-arrow-left fs-2"></i>
                         </span>
                         <span class="menu-title">Logout</span>
                     </a>
                        <!--end:Menu link-->
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                    
                    <!--end:Menu item-->
                </div>
                <!--end::Sidebar menu-->
            </div>
        </div>
        <!--end::Navs-->
    </div>
    <!--end::Sidebar-->
    <!--begin::Main-->
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container container-fluid">
                    <!--begin::Row-->
                    <div class="row g-5 g-xl-10">
                        <!--begin::Col-->
                        <div class="col-xxl-6 mb-md-5 mb-xl-10">
                            <div class="frame">
                                <div class="group">
                                    <div class="overlap-group">
                                    <img class="direction" src="../src/media/svg/direction.svg" />
                                    <img class="vector" src="../src/media/svg/vector.svg" />
                                    <img class="image" src="../src/media/products/image-1.png" />
                                    <img class="trust" src="../src/media/svg/trust.svg" />
                                    <img class="spiral" src="../src/media/svg/spiral-3.svg" />
                                    </div>
                                </div>
                                <div class="text-wrapper">Selamat Datang Alumni!</div>
                                <p class="div">
                                    Silakan mengisi survey kami untuk memberikan umpan balik tentang pengalaman Anda sebagai alumni SMK Muhammadiyah
                                    2.Terima kasih atas partisipasinya!
                                </p>
                                <div class="div-wrapper"><div class="text-wrapper-2">Isi Survey</div></div>
                                </div>
                        </div>
                        <!--end::Col-->	
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Content container-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->
    </div>
    <!--end:::Main-->
</div>
    </div>
    <!--end::Navs-->
</div>
<!--end::Sidebar-->