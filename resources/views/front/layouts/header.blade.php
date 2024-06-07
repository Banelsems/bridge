<!--======================================
        START HEADER AREA
    ======================================-->
<header class="header-menu-area bg-white">
    <div class="header-top pr-150px pl-150px border-bottom border-bottom-gray py-1">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="header-widget">
                        <ul class="generic-list-item d-flex flex-wrap align-items-center fs-14">
                            <li class="d-flex align-items-center pr-3 mr-3 border-right border-right-gray"><i
                                    class="la la-phone mr-1"></i><a href="tel:+22957929477"> +229 57929477/ +229 55794294 </a></li>
                            <li class="d-flex align-items-center"><i class="la la-envelope-o mr-1"></i><a
                                    href="mailto:bridge1connect@gmail.com"> bridge1connect@gmail.com</a></li>
                        </ul>
                    </div><!-- end header-widget -->
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="header-widget d-flex flex-wrap align-items-center justify-content-end">
                        <div class="theme-picker d-flex align-items-center">
                            <button class="theme-picker-btn dark-mode-btn" title="Dark mode">
                                <svg id="moon" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                                </svg>
                            </button>
                            <button class="theme-picker-btn light-mode-btn" title="Light mode">
                                <svg id="sun" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="5"></circle>
                                    <line x1="12" y1="1" x2="12" y2="3"></line>
                                    <line x1="12" y1="21" x2="12" y2="23"></line>
                                    <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                                    <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                                    <line x1="1" y1="12" x2="3" y2="12"></line>
                                    <line x1="21" y1="12" x2="23" y2="12"></line>
                                    <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                                    <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                                </svg>
                            </button>
                        </div>
                        <ul
                            class="generic-list-item d-flex flex-wrap align-items-center fs-14 border-left border-left-gray pl-3 ml-3">
                            <li class="d-flex align-items-center pr-3 mr-3 border-right border-right-gray"><i
                                    class="la la-sign-in mr-1"></i><a href="#"> Login</a></li>
                            <li class="d-flex align-items-center"><i class="la la-user mr-1"></i><a href="#">Register</a></li>
                        </ul>
                    </div><!-- end header-widget -->
                </div><!-- end col-lg-6 -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end header-top -->
    <div class="header-menu-content pr-150px pl-150px bg-white">
        <div class="container-fluid">
            <div class="main-menu-content">
                <a href="#" class="down-button"><i class="la la-angle-down"></i></a>
                <div class="row align-items-center">
                    <div class="col-lg-2">
                        <div class="logo-box">
                            <a href="index.html" class="logo"><img src="{{ asset('assets/images/logo.png') }}"
                                    alt="logo"></a>
                            <div class="user-btn-action">
                                <div class="search-menu-toggle icon-element icon-element-sm shadow-sm mr-2"
                                    data-toggle="tooltip" data-placement="top" title="Search">
                                    <i class="la la-search"></i>
                                </div>
                                <div class="off-canvas-menu-toggle cat-menu-toggle icon-element icon-element-sm shadow-sm mr-2"
                                    data-toggle="tooltip" data-placement="top" title="Category menu">
                                    <i class="la la-th-large"></i>
                                </div>
                                <div class="off-canvas-menu-toggle main-menu-toggle icon-element icon-element-sm shadow-sm"
                                    data-toggle="tooltip" data-placement="top" title="Main menu">
                                    <i class="la la-bars"></i>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col-lg-2 -->
                    <div class="col-lg-10">
                        <div class="menu-wrapper">

                            <nav class="main-menu">
                                <ul>
                                    <li>
                                        <a href="{{ route('home') }}" class="">Home </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('about') }}" class="">About </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('courses') }}" class="">Courses </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('teachers') }}" class="">Teachers </a>
                                    </li>
                                    <li>
                                        <a href="#" class="">Blog </a>
                                    </li>
                                    <li>
                                        <a href="#" class="">FAQs </a>
                                    </li>
                                    <li>
                                        <a href="#" class="">Contact </a>
                                    </li>

                                    {{-- <li>
                                        <a href="{{ route('home') }}" class="">Home </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('about') }}" class="">About </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('courses') }}" class="">Courses </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('teachers') }}" class="">Teachers </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('blog') }}" class="">Blog </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('faqs') }}" class="">FAQs </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('contact') }}" class="">Contact </a>
                                    </li> --}}

                                </ul>
                            </nav><!-- end main-menu -->
                            <div class="nav-right-button">
                                <a href="admission.html" class="btn theme-btn d-none d-lg-inline-block"><i
                                        class="la la-user-plus mr-1"></i> Admission</a>
                            </div><!-- end nav-right-button -->
                        </div><!-- end menu-wrapper -->
                    </div><!-- end col-lg-10 -->
                </div><!-- end row -->
            </div>
        </div><!-- end container-fluid -->
    </div><!-- end header-menu-content -->
    <div class="body-overlay"></div>
</header><!-- end header-menu-area -->
<!--======================================
            END HEADER AREA
======================================-->
