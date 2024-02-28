<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Aduca -  Education HTML Template</title>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" sizes="16x16" href="images/favicon.png">

    <!-- inject:css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/line-awesome.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/fancybox.css">
    <link rel="stylesheet" href="css/tooltipster.bundle.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- end inject -->
</head>
<body>

<!-- start cssload-loader -->
<div class="preloader">
    <div class="loader">
        <svg class="spinner" viewBox="0 0 50 50">
            <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
        </svg>
    </div>
</div>
<!-- end cssload-loader -->

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
                            <li class="d-flex align-items-center pr-3 mr-3 border-right border-right-gray"><i class="la la-phone mr-1"></i><a href="tel:00123456789"> (00) 123 456 789</a></li>
                            <li class="d-flex align-items-center"><i class="la la-envelope-o mr-1"></i><a href="mailto:contact@aduca.com"> contact@aduca.com</a></li>
                        </ul>
                    </div><!-- end header-widget -->
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="header-widget d-flex flex-wrap align-items-center justify-content-end">
                        <div class="theme-picker d-flex align-items-center">
                            <button class="theme-picker-btn dark-mode-btn" title="Dark mode">
                                <svg id="moon" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                                </svg>
                            </button>
                            <button class="theme-picker-btn light-mode-btn" title="Light mode">
                                <svg id="sun" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
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
                        <ul class="generic-list-item d-flex flex-wrap align-items-center fs-14 border-left border-left-gray pl-3 ml-3">
                            <li class="d-flex align-items-center pr-3 mr-3 border-right border-right-gray"><i class="la la-sign-in mr-1"></i><a href="login.html"> Login</a></li>
                            <li class="d-flex align-items-center"><i class="la la-user mr-1"></i><a href="sign-up.html"> Register</a></li>
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
                            <a href="index.html" class="logo"><img src="images/logo.png" alt="logo"></a>
                            <div class="user-btn-action">
                                <div class="search-menu-toggle icon-element icon-element-sm shadow-sm mr-2" data-toggle="tooltip" data-placement="top" title="Search">
                                    <i class="la la-search"></i>
                                </div>
                                <div class="off-canvas-menu-toggle cat-menu-toggle icon-element icon-element-sm shadow-sm mr-2" data-toggle="tooltip" data-placement="top" title="Category menu">
                                    <i class="la la-th-large"></i>
                                </div>
                                <div class="off-canvas-menu-toggle main-menu-toggle icon-element icon-element-sm shadow-sm" data-toggle="tooltip" data-placement="top" title="Main menu">
                                    <i class="la la-bars"></i>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col-lg-2 -->
                    <div class="col-lg-10">
                        <div class="menu-wrapper">
                            <div class="menu-category">
                                <ul>
                                    <li>
                                        <a href="#">Categories <i class="la la-angle-down fs-12"></i></a>
                                        <ul class="cat-dropdown-menu">
                                            <li>
                                                <a href="course-grid.html">Development <i class="la la-angle-right"></i></a>
                                                <ul class="sub-menu">
                                                    <li><a href="#">All Development</a></li>
                                                    <li><a href="#">Web Development</a></li>
                                                    <li><a href="#">Mobile Apps</a></li>
                                                    <li><a href="#">Game Development</a></li>
                                                    <li><a href="#">Databases</a></li>
                                                    <li><a href="#">Programming Languages</a></li>
                                                    <li><a href="#">Software Testing</a></li>
                                                    <li><a href="#">Software Engineering</a></li>
                                                    <li><a href="#">E-Commerce</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="course-grid.html">business <i class="la la-angle-right"></i></a>
                                                <ul class="sub-menu">
                                                    <li><a href="#">All Business</a></li>
                                                    <li><a href="#">Finance</a></li>
                                                    <li><a href="#">Entrepreneurship</a></li>
                                                    <li><a href="#">Strategy</a></li>
                                                    <li><a href="#">Real Estate</a></li>
                                                    <li><a href="#">Home Business</a></li>
                                                    <li><a href="#">Communications</a></li>
                                                    <li><a href="#">Industry</a></li>
                                                    <li><a href="#">Other</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="course-grid.html">IT & Software <i class="la la-angle-right"></i></a>
                                                <ul class="sub-menu">
                                                    <li><a href="#">All IT & Software</a></li>
                                                    <li><a href="#">IT Certification</a></li>
                                                    <li><a href="#">Hardware</a></li>
                                                    <li><a href="#">Network & Security</a></li>
                                                    <li><a href="#">Operating Systems</a></li>
                                                    <li><a href="#">Other</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="course-grid.html">Finance & Accounting <i class="la la-angle-right"></i></a>
                                                <ul class="sub-menu">
                                                    <li><a href="#"> All Finance & Accounting</a></li>
                                                    <li><a href="#">Accounting & Bookkeeping</a></li>
                                                    <li><a href="#">Cryptocurrency & Blockchain</a></li>
                                                    <li><a href="#">Economics</a></li>
                                                    <li><a href="#">Investing & Trading</a></li>
                                                    <li><a href="#">Other Finance & Economics</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="course-grid.html">design <i class="la la-angle-right"></i></a>
                                                <ul class="sub-menu">
                                                    <li><a href="#">All Design</a></li>
                                                    <li><a href="#">Graphic Design</a></li>
                                                    <li><a href="#">Web Design</a></li>
                                                    <li><a href="#">Design Tools</a></li>
                                                    <li><a href="#">3D & Animation</a></li>
                                                    <li><a href="#">User Experience</a></li>
                                                    <li><a href="#">Other</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="course-grid.html">Personal Development <i class="la la-angle-right"></i></a>
                                                <ul class="sub-menu">
                                                    <li><a href="#">All Personal Development</a></li>
                                                    <li><a href="#">Personal Transformation</a></li>
                                                    <li><a href="#">Productivity</a></li>
                                                    <li><a href="#">Leadership</a></li>
                                                    <li><a href="#">Personal Finance</a></li>
                                                    <li><a href="#">Career Development</a></li>
                                                    <li><a href="#">Parenting & Relationships</a></li>
                                                    <li><a href="#">Happiness</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="course-grid.html">Marketing <i class="la la-angle-right"></i></a>
                                                <ul class="sub-menu">
                                                    <li><a href="#">All Marketing</a></li>
                                                    <li><a href="#">Digital Marketing</a></li>
                                                    <li><a href="#">Search Engine Optimization</a></li>
                                                    <li><a href="#">Social Media Marketing</a></li>
                                                    <li><a href="#">Branding</a></li>
                                                    <li><a href="#">Video & Mobile Marketing</a></li>
                                                    <li><a href="#">Affiliate Marketing</a></li>
                                                    <li><a href="#">Growth Hacking</a></li>
                                                    <li><a href="#">Other</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="course-grid.html">Health & Fitness <i class="la la-angle-right"></i></a>
                                                <ul class="sub-menu">
                                                    <li><a href="#">All Health & Fitness</a></li>
                                                    <li><a href="#">Fitness</a></li>
                                                    <li><a href="#">Sports</a></li>
                                                    <li><a href="#">Dieting</a></li>
                                                    <li><a href="#">Self Defense</a></li>
                                                    <li><a href="#">Meditation</a></li>
                                                    <li><a href="#">Mental Health</a></li>
                                                    <li><a href="#">Yoga</a></li>
                                                    <li><a href="#">Dance</a></li>
                                                    <li><a href="#">Other</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="course-grid.html">Photography <i class="la la-angle-right"></i></a>
                                                <ul class="sub-menu">
                                                    <li><a href="#">All Photography</a></li>
                                                    <li><a href="#">Digital Photography</a></li>
                                                    <li><a href="#">Photography Fundamentals</a></li>
                                                    <li><a href="#">Commercial Photography</a></li>
                                                    <li><a href="#">Video Design</a></li>
                                                    <li><a href="#">Photography Tools</a></li>
                                                    <li><a href="#">Other</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div><!-- end menu-category -->
                            <form method="post">
                                <div class="form-group mb-0">
                                    <input class="form-control form--control pl-3" type="text" name="search" placeholder="Search for anything">
                                    <span class="la la-search search-icon"></span>
                                </div>
                            </form>
                            <nav class="main-menu">
                                <ul>
                                    <li>
                                        <a href="#">Home <i class="la la-angle-down fs-12"></i></a>
                                        <ul class="dropdown-menu-item">
                                            <li><a href="index.html">Home One</a></li>
                                            <li><a href="home-2.html">Home Two</a></li>
                                            <li><a href="home-3.html">Home Three</a></li>
                                            <li><a href="home-4.html">Home four</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">courses <i class="la la-angle-down fs-12"></i></a>
                                        <ul class="dropdown-menu-item">
                                            <li><a href="course-grid.html">course grid</a></li>
                                            <li><a href="course-list.html">course list</a></li>
                                            <li><a href="course-grid-left-sidebar.html">grid left sidebar</a></li>
                                            <li><a href="course-grid-right-sidebar.html">grid right sidebar</a></li>
                                            <li><a href="course-list-left-sidebar.html">list left sidebar <span class="ribbon ribbon-blue-bg">New</span></a></li>
                                            <li><a href="course-list-right-sidebar.html">list right sidebar <span class="ribbon ribbon-blue-bg">New</span></a></li>
                                            <li><a href="course-details.html">course details</a></li>
                                            <li><a href="lesson-details.html">lesson details</a></li>
                                            <li><a href="my-courses.html">My courses</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Student <i class="la la-angle-down fs-12"></i></a>
                                        <ul class="dropdown-menu-item">
                                            <li><a href="student-detail.html">student detail</a></li>
                                            <li><a href="student-quiz.html">take quiz</a></li>
                                            <li><a href="student-quiz-results.html">quiz results</a></li>
                                            <li><a href="student-quiz-result-details.html">quiz details</a></li>
                                            <li><a href="student-quiz-result-details-2.html">quiz details 2</a></li>
                                            <li><a href="student-path.html">path details</a></li>
                                            <li><a href="student-path-assessment.html">Skill Assessment</a></li>
                                            <li><a href="student-path-assessment-result.html">Skill result</a></li>
                                        </ul>
                                    </li>
                                    <li class="mega-menu-has">
                                        <a href="#">pages <i class="la la-angle-down fs-12"></i></a>
                                        <div class="dropdown-menu-item mega-menu">
                                            <ul class="row no-gutters">
                                                <li class="col-lg-3">
                                                    <a href="dashboard.html">dashboard <span class="ribbon">Hot</span></a>
                                                    <a href="about.html">about</a>
                                                    <a href="teachers.html">Teachers</a>
                                                    <a href="teacher-detail.html">Teacher detail</a>
                                                    <a href="categories.html">categories</a>
                                                    <a href="terms-and-conditions.html">Terms & conditions</a>
                                                    <a href="privacy-policy.html">privacy policy</a>
                                                    <a href="invite.html">invite friend</a>
                                                </li>
                                                <li class="col-lg-3">
                                                    <a href="careers.html">careers</a>
                                                    <a href="career-details.html">career details</a>
                                                    <a href="become-a-teacher.html">become an instructor</a>
                                                    <a href="faq.html">FAQs</a>
                                                    <a href="admission.html">admission</a>
                                                    <a href="gallery.html">gallery</a>
                                                    <a href="pricing-table.html">pricing tables</a>
                                                    <a href="contact.html">contact</a>
                                                </li>
                                                <li class="col-lg-3">
                                                    <a href="for-business.html">for business</a>
                                                    <a href="sign-up.html">sign-up</a>
                                                    <a href="login.html">login</a>
                                                    <a href="recover.html">recover</a>
                                                    <a href="shopping-cart.html">cart</a>
                                                    <a href="checkout.html">checkout</a>
                                                    <a href="error.html">page 404</a>
                                                </li>
                                                <li class="col-lg-3">
                                                    <div class="menu-banner position-relative h-100">
                                                        <div class="overlay rounded-rounded opacity-4"></div>
                                                        <div class="menu-banner-content p-4 position-absolute bottom-0 left-0">
                                                            <h4 class="fs-20 font-weight-bold pb-3 text-white">30 days free trail for new users</h4>
                                                            <a href="sign-up.html" class="btn theme-btn theme-btn-sm theme-btn-white">Start Learning <i class="la la-arrow-right icon ml-1"></i></a>
                                                        </div>
                                                        <img src="images/menu-banner-img.jpg" alt="menu banner image" class="w-100 h-100 rounded-rounded">
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#">blog <i class="la la-angle-down fs-12"></i></a>
                                        <ul class="dropdown-menu-item">
                                            <li><a href="blog-full-width.html">blog full width </a></li>
                                            <li><a href="blog-no-sidebar.html">blog no sidebar</a></li>
                                            <li><a href="blog-left-sidebar.html">blog left sidebar</a></li>
                                            <li><a href="blog-right-sidebar.html">blog right sidebar</a></li>
                                            <li><a href="blog-single.html">blog detail</a></li>
                                        </ul>
                                    </li>
                                </ul><!-- end ul -->
                            </nav><!-- end main-menu -->
                            <div class="shop-cart mr-4">
                                <ul>
                                    <li>
                                        <p class="shop-cart-btn d-flex align-items-center">
                                            <i class="la la-shopping-cart"></i>
                                            <span class="product-count">2</span>
                                        </p>
                                        <ul class="cart-dropdown-menu">
                                            <li class="media media-card">
                                                <a href="shopping-cart.html" class="media-img">
                                                    <img src="images/small-img.jpg" alt="Cart image">
                                                </a>
                                                <div class="media-body">
                                                    <h5><a href="course-details.html">The Complete JavaScript Course 2021: From Zero to Expert!</a></h5>
                                                    <span class="d-block lh-18 py-1">Kamran Ahmed</span>
                                                    <p class="text-black font-weight-semi-bold lh-18">$12.99 <span class="before-price fs-14">$129.99</span></p>
                                                </div>
                                            </li>
                                            <li class="media media-card">
                                                <a href="shopping-cart.html" class="media-img">
                                                    <img src="images/small-img.jpg" alt="Cart image">
                                                </a>
                                                <div class="media-body">
                                                    <h5><a href="course-details.html">The Complete JavaScript Course 2021: From Zero to Expert!</a></h5>
                                                    <span class="d-block lh-18 py-1">Kamran Ahmed</span>
                                                    <p class="text-black font-weight-semi-bold lh-18">$12.99 <span class="before-price fs-14">$129.99</span></p>
                                                </div>
                                            </li>
                                            <li class="media media-card">
                                                <div class="media-body fs-16">
                                                    <p class="text-black font-weight-semi-bold lh-18">Total: <span class="cart-total">$12.99</span> <span class="before-price fs-14">$129.99</span></p>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="shopping-cart.html" class="btn theme-btn w-100">Got to cart <i class="la la-arrow-right icon ml-1"></i></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div><!-- end shop-cart -->
                            <div class="nav-right-button">
                                <a href="admission.html" class="btn theme-btn d-none d-lg-inline-block"><i class="la la-user-plus mr-1"></i> Admission</a>
                            </div><!-- end nav-right-button -->
                        </div><!-- end menu-wrapper -->
                    </div><!-- end col-lg-10 -->
                </div><!-- end row -->
            </div>
        </div><!-- end container-fluid -->
    </div><!-- end header-menu-content -->
    <div class="off-canvas-menu custom-scrollbar-styled main-off-canvas-menu">
        <div class="off-canvas-menu-close main-menu-close icon-element icon-element-sm shadow-sm" data-toggle="tooltip" data-placement="left" title="Close menu">
            <i class="la la-times"></i>
        </div><!-- end off-canvas-menu-close -->
        <ul class="generic-list-item off-canvas-menu-list pt-90px">
            <li>
                <a href="#">Home</a>
                <ul class="sub-menu">
                    <li><a href="index.html">Home One</a></li>
                    <li><a href="home-2.html">Home Two</a></li>
                    <li><a href="home-3.html">Home Three</a></li>
                    <li><a href="home-4.html">Home four</a></li>
                </ul>
            </li>
            <li>
                <a href="#">courses</a>
                <ul class="sub-menu">
                    <li><a href="course-grid.html">course grid</a></li>
                    <li><a href="course-list.html">course list</a></li>
                    <li><a href="course-grid-left-sidebar.html">grid left sidebar</a></li>
                    <li><a href="course-grid-right-sidebar.html">grid right sidebar</a></li>
                    <li><a href="course-list-left-sidebar.html">list left sidebar <span class="ribbon ribbon-blue-bg">New</span></a></li>
                    <li><a href="course-list-right-sidebar.html">list right sidebar <span class="ribbon ribbon-blue-bg">New</span></a></li>
                    <li><a href="course-details.html">course details</a></li>
                    <li><a href="lesson-details.html">lesson details</a></li>
                    <li><a href="my-courses.html">My courses</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Student</a>
                <ul class="sub-menu">
                    <li><a href="student-detail.html">student detail</a></li>
                    <li><a href="student-quiz.html">take quiz</a></li>
                    <li><a href="student-quiz-results.html">quiz results</a></li>
                    <li><a href="student-quiz-result-details.html">quiz details</a></li>
                    <li><a href="student-quiz-result-details-2.html">quiz details 2</a></li>
                    <li><a href="student-path.html">path details</a></li>
                    <li><a href="student-path-assessment.html">Skill Assessment</a></li>
                    <li><a href="student-path-assessment-result.html">Skill result</a></li>
                </ul>
            </li>
            <li>
                <a href="#">pages</a>
                <ul class="sub-menu">
                    <li><a href="dashboard.html">dashboard <span class="ribbon">Hot</span></a></li>
                    <li><a href="about.html">about</a></li>
                    <li><a href="teachers.html">Teachers</a></li>
                    <li><a href="teacher-detail.html">Teacher detail</a></li>
                    <li><a href="careers.html">careers</a></li>
                    <li><a href="career-details.html">career details</a></li>
                    <li><a href="categories.html">categories</a></li>
                    <li><a href="terms-and-conditions.html">Terms & conditions</a></li>
                    <li><a href="privacy-policy.html">privacy policy</a></li>
                    <li><a href="for-business.html">for business</a></li>
                    <li><a href="become-a-teacher.html">become an instructor</a></li>
                    <li><a href="faq.html">FAQs</a></li>
                    <li><a href="admission.html">admission</a></li>
                    <li><a href="gallery.html">gallery</a></li>
                    <li><a href="pricing-table.html">pricing tables</a></li>
                    <li><a href="contact.html">contact</a></li>
                    <li><a href="sign-up.html">sign-up</a></li>
                    <li><a href="login.html">login</a></li>
                    <li><a href="recover.html">recover</a></li>
                    <li><a href="shopping-cart.html">cart</a></li>
                    <li><a href="checkout.html">checkout</a></li>
                    <li><a href="error.html">page 404</a></li>
                </ul>
            </li>
            <li>
                <a href="#">blog</a>
                <ul class="sub-menu">
                    <li><a href="blog-full-width.html">blog full width </a></li>
                    <li><a href="blog-no-sidebar.html">blog no sidebar</a></li>
                    <li><a href="blog-left-sidebar.html">blog left sidebar</a></li>
                    <li><a href="blog-right-sidebar.html">blog right sidebar</a></li>
                    <li><a href="blog-single.html">blog detail</a></li>
                </ul>
            </li>
        </ul>
    </div><!-- end off-canvas-menu -->
    <div class="off-canvas-menu custom-scrollbar-styled category-off-canvas-menu">
        <div class="off-canvas-menu-close cat-menu-close icon-element icon-element-sm shadow-sm" data-toggle="tooltip" data-placement="left" title="Close menu">
            <i class="la la-times"></i>
        </div><!-- end off-canvas-menu-close -->
        <ul class="generic-list-item off-canvas-menu-list pt-90px">
            <li>
                <a href="course-grid.html">Development</a>
                <ul class="sub-menu">
                    <li><a href="#">All Development</a></li>
                    <li><a href="#">Web Development</a></li>
                    <li><a href="#">Mobile Apps</a></li>
                    <li><a href="#">Game Development</a></li>
                    <li><a href="#">Databases</a></li>
                    <li><a href="#">Programming Languages</a></li>
                    <li><a href="#">Software Testing</a></li>
                    <li><a href="#">Software Engineering</a></li>
                    <li><a href="#">E-Commerce</a></li>
                </ul>
            </li>
            <li>
                <a href="course-grid.html">business</a>
                <ul class="sub-menu">
                    <li><a href="#">All Business</a></li>
                    <li><a href="#">Finance</a></li>
                    <li><a href="#">Entrepreneurship</a></li>
                    <li><a href="#">Strategy</a></li>
                    <li><a href="#">Real Estate</a></li>
                    <li><a href="#">Home Business</a></li>
                    <li><a href="#">Communications</a></li>
                    <li><a href="#">Industry</a></li>
                    <li><a href="#">Other</a></li>
                </ul>
            </li>
            <li>
                <a href="course-grid.html">IT & Software</a>
                <ul class="sub-menu">
                    <li><a href="#">All IT & Software</a></li>
                    <li><a href="#">IT Certification</a></li>
                    <li><a href="#">Hardware</a></li>
                    <li><a href="#">Network & Security</a></li>
                    <li><a href="#">Operating Systems</a></li>
                    <li><a href="#">Other</a></li>
                </ul>
            </li>
            <li>
                <a href="course-grid.html">Finance & Accounting</a>
                <ul class="sub-menu">
                    <li><a href="#"> All Finance & Accounting</a></li>
                    <li><a href="#">Accounting & Bookkeeping</a></li>
                    <li><a href="#">Cryptocurrency & Blockchain</a></li>
                    <li><a href="#">Economics</a></li>
                    <li><a href="#">Investing & Trading</a></li>
                    <li><a href="#">Other Finance & Economics</a></li>
                </ul>
            </li>
            <li>
                <a href="course-grid.html">design</a>
                <ul class="sub-menu">
                    <li><a href="#">All Design</a></li>
                    <li><a href="#">Graphic Design</a></li>
                    <li><a href="#">Web Design</a></li>
                    <li><a href="#">Design Tools</a></li>
                    <li><a href="#">3D & Animation</a></li>
                    <li><a href="#">User Experience</a></li>
                    <li><a href="#">Other</a></li>
                </ul>
            </li>
            <li>
                <a href="course-grid.html">Personal Development</a>
                <ul class="sub-menu">
                    <li><a href="#">All Personal Development</a></li>
                    <li><a href="#">Personal Transformation</a></li>
                    <li><a href="#">Productivity</a></li>
                    <li><a href="#">Leadership</a></li>
                    <li><a href="#">Personal Finance</a></li>
                    <li><a href="#">Career Development</a></li>
                    <li><a href="#">Parenting & Relationships</a></li>
                    <li><a href="#">Happiness</a></li>
                </ul>
            </li>
            <li>
                <a href="course-grid.html">Marketing</a>
                <ul class="sub-menu">
                    <li><a href="#">All Marketing</a></li>
                    <li><a href="#">Digital Marketing</a></li>
                    <li><a href="#">Search Engine Optimization</a></li>
                    <li><a href="#">Social Media Marketing</a></li>
                    <li><a href="#">Branding</a></li>
                    <li><a href="#">Video & Mobile Marketing</a></li>
                    <li><a href="#">Affiliate Marketing</a></li>
                    <li><a href="#">Growth Hacking</a></li>
                    <li><a href="#">Other</a></li>
                </ul>
            </li>
            <li>
                <a href="course-grid.html">Health & Fitness</a>
                <ul class="sub-menu">
                    <li><a href="#">All Health & Fitness</a></li>
                    <li><a href="#">Fitness</a></li>
                    <li><a href="#">Sports</a></li>
                    <li><a href="#">Dieting</a></li>
                    <li><a href="#">Self Defense</a></li>
                    <li><a href="#">Meditation</a></li>
                    <li><a href="#">Mental Health</a></li>
                    <li><a href="#">Yoga</a></li>
                    <li><a href="#">Dance</a></li>
                    <li><a href="#">Other</a></li>
                </ul>
            </li>
            <li>
                <a href="course-grid.html">Photography</a>
                <ul class="sub-menu">
                    <li><a href="#">All Photography</a></li>
                    <li><a href="#">Digital Photography</a></li>
                    <li><a href="#">Photography Fundamentals</a></li>
                    <li><a href="#">Commercial Photography</a></li>
                    <li><a href="#">Video Design</a></li>
                    <li><a href="#">Photography Tools</a></li>
                    <li><a href="#">Other</a></li>
                </ul>
            </li>
        </ul>
    </div><!-- end off-canvas-menu -->
    <div class="mobile-search-form">
        <div class="d-flex align-items-center">
            <form method="post" class="flex-grow-1 mr-3">
                <div class="form-group mb-0">
                    <input class="form-control form--control pl-3" type="text" name="search" placeholder="Search for anything">
                    <span class="la la-search search-icon"></span>
                </div>
            </form>
            <div class="search-bar-close icon-element icon-element-sm shadow-sm">
                <i class="la la-times"></i>
            </div><!-- end off-canvas-menu-close -->
        </div>
    </div><!-- end mobile-search-form -->
    <div class="body-overlay"></div>
</header><!-- end header-menu-area -->
<!--======================================
        END HEADER AREA
======================================-->

<!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area section-padding img-bg-3">
    <div class="overlay z-index-n1"></div>
    <div class="container">
        <div class="breadcrumb-content">
            <div class="section-heading">
                <h5 class="ribbon ribbon-lg ribbon-white mb-2">Welcome to aduca</h5>
                <h2 class="section__title fs-45 lh-60 text-white">Improve Your Lives <br> With Learning</h2>
            </div>
            <div class="breadcrumb-btn-box pt-40px pl-3">
                <a href="#" class="btn-text text-white video-play-btn d-inline-flex align-items-center" data-fancybox data-src="https://www.youtube.com/watch?v=cRXm1p-CNyk">
                    <span class="icon-element icon-element-md pulse-btn mr-3"><i class="la la-play"></i></span>Watch the Video
                </a>
            </div>
        </div><!-- end breadcrumb-content -->
    </div><!-- end container -->
</section><!-- end breadcrumb-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!--======================================
        START ABOUT AREA
======================================-->
<section class="about-area section--padding overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-content pb-5">
                    <div class="section-heading">
                        <h2 class="section__title pb-3 lh-50">The leading global marketplace for learning and instruction</h2>
                        <p class="section__desc">Nemo enim ipsam,voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia,consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, adipisci velit, sed quia non numquam eius modi tempora</p>
                    </div><!-- end section-heading -->
                    <ul class="generic-list-item pt-3">
                        <li><i class="la la-check-circle mr-2 text-success"></i>Online Courses with full discount systems.</li>
                        <li><i class="la la-check-circle mr-2 text-success"></i>Online Certificates which can be used worldwide.</li>
                        <li><i class="la la-check-circle mr-2 text-success"></i>An online leadership development program at Aduca.</li>
                    </ul>
                </div><!-- end about-content -->
            </div><!-- end col-lg-6 -->
            <div class="col-lg-6">
                <div class="generic-img-box generic-img-box-layout-2">
                    <div class="img__item img__item-1">
                        <img class="lazy" src="images/img-loading.png" data-src="images/img15.jpg" alt="About image">
                        <div class="generic-img-box-content">
                            <h3 class="fs-24 font-weight-semi-bold pb-1">55K</h3>
                            <span>Instructors</span>
                        </div>
                    </div>
                    <div class="img__item img__item-2">
                        <img class="lazy" src="images/img-loading.png" data-src="images/img16.jpg" alt="About image">
                        <div class="generic-img-box-content">
                            <h3 class="fs-24 font-weight-semi-bold pb-1">6,900+</h3>
                            <span>Courses</span>
                        </div>
                    </div>
                    <div class="img__item img__item-3">
                        <img class="lazy" src="images/img-loading.png" data-src="images/img17.jpg" alt="About image">
                        <div class="generic-img-box-content">
                            <h3 class="fs-24 font-weight-semi-bold pb-1">40M</h3>
                            <span>Learners</span>
                        </div>
                    </div>
                </div><!-- end generic-img-box -->
            </div><!-- end col-lg-6 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end about-area -->
<!--======================================
        END ABOUT AREA
======================================-->

<!--======================================
        START GET STARTED AREA
======================================-->
<section class="get-started-area pt-30px pb-120px position-relative">
    <span class="ring-shape ring-shape-1"></span>
    <span class="ring-shape ring-shape-2"></span>
    <span class="ring-shape ring-shape-3"></span>
    <span class="ring-shape ring-shape-4"></span>
    <span class="ring-shape ring-shape-5"></span>
    <span class="ring-shape ring-shape-6"></span>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 responsive-column-half">
                <div class="card card-item hover-s text-center">
                    <div class="card-body">
                        <img src="images/img-loading.png" data-src="images/small-img-2.jpg" alt="card image" class="img-fluid lazy rounded-full">
                        <h5 class="card-title pt-4 pb-2">Personalized learning</h5>
                        <p class="card-text">Students practice at their own pace, first filling in gaps in their understanding and then accelerating their learning.</p>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column-half">
                <div class="card card-item hover-s text-center">
                    <div class="card-body">
                        <img src="images/img-loading.png" data-src="images/small-img-3.jpg" alt="card image" class="img-fluid lazy rounded-full">
                        <h5 class="card-title pt-4 pb-2">Trusted content</h5>
                        <p class="card-text">Created by experts, Coursector library of trusted practice and lessons covers math, science, and more.</p>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column-half">
                <div class="card card-item hover-s text-center">
                    <div class="card-body">
                        <img src="images/img-loading.png" data-src="images/small-img-4.jpg" alt="card image" class="img-fluid lazy rounded-full">
                        <h5 class="card-title pt-4 pb-2">Empower teachers</h5>
                        <p class="card-text">With Coursector, teachers can identify gaps in their students’ understanding, tailor instruction</p>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
        <p class="text-center">Want to join with us? See our<a href="careers.html" class="text-color hover-underline"> open positions</a></p>
    </div><!-- end container -->
</section><!-- end get-started-area -->
<!-- ================================
       START GET STARTED AREA
================================= -->

<!--======================================
        START OUR MISSION AREA
======================================-->
<section class="our-mission-area section--padding bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="row pb-5">
                    <div class="col-lg-6 responsive-column-half">
                        <div class="img-box">
                            <img src="images/img-loading.png" data-src="images/img8.jpg" alt="our mission image" class="img-fluid lazy rounded-rounded">
                        </div>
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6 responsive-column-half">
                        <div class="img-box my-3">
                            <img src="images/img-loading.png" data-src="images/img10.jpg" alt="our mission image" class="img-fluid lazy rounded-rounded">
                        </div>
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6 responsive-column-half">
                        <div class="img-box">
                            <img src="images/img-loading.png" data-src="images/img11.jpg" alt="our mission image" class="img-fluid lazy rounded-rounded">
                        </div>
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6 responsive-column-half">
                        <div class="img-box my-3">
                            <img src="images/img-loading.png" data-src="images/img12.jpg" alt="our mission image" class="img-fluid lazy rounded-rounded">
                        </div>
                    </div><!-- end col-lg-6 -->
                </div>
            </div><!-- end col-lg-6 -->
            <div class="col-lg-6">
                <div class="about-content pl-4">
                    <div class="section-heading">
                        <h2 class="section__title pb-3 lh-50">Our Mission</h2>
                        <p class="section__desc pb-3">We’re not one of those companies. We are rethinking education from the bottom up. The web has rethought nearly everything - commerce, social networking, healthcare, and more. We are building the education the world needs - the first truly net native education. We take more cues from modern tech innovators in creating an engaging educational experience than we do from the classroom.</p>
                        <p class="section__desc text-black">Education is broken. Come help us build the education the world deserves.</p>
                    </div><!-- end section-heading -->
                </div><!-- end about-content -->
            </div><!-- end col-lg-6 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end our-mission-area -->
<!--======================================
        END OUR MISSION AREA
======================================-->

<!--======================================
        START STORY AREA
======================================-->
<section class="story-area section--padding">
    <div class="container">
        <div class="story-content text-center">
            <div class="section-heading">
                <h2 class="section__title pb-3 lh-50">Our Story</h2>
                <p class="section__desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem eaque ipsa quae ab illo Maecenas quis
                    consequat Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut Labore Et Dolore Magna Aliqua.
                    Ut Enim Ad Minim Veniam, Quis Nostrud Exercitation Ullamco Laboris Nisi Ut Aliquip Ex Ea Commodo Consequat.
                    Duis Aute Irure Dolor In Reprehenderit In Voluptate Velit Esse Cillum Dolore</p>
            </div><!-- end section-heading -->
        </div><!-- end story-content -->
        <div class="row pt-60px">
            <div class="col-lg-4 responsive-column-half">
                <div class="story-img-item">
                    <img class="lazy" src="images/img-loading.png" data-src="images/img37.jpg" alt="Story image">
                </div>
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column-half">
                <div class="story-img-item mt-90px">
                    <img class="lazy" src="images/img-loading.png" data-src="images/img38.jpg" alt="Story image">
                    <a href="#" class="video-play-btn" data-fancybox="" data-src="https://www.youtube.com/watch?v=cRXm1p-CNyk">
                        <span class="icon-element icon-element-md"><i class="la la-play"></i></span>
                    </a>
                </div>
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column-half">
                <div class="story-img-item">
                    <img class="lazy" src="images/img-loading.png" data-src="images/img39.jpg" alt="Story image">
                </div>
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end story-area -->
<!--======================================
        END STORY AREA
======================================-->

<div class="section-block"></div>

<!--======================================
        START TEAM MEMBER AREA
======================================-->
<section class="team-member-area section--padding">
    <div class="container">
        <div class="team-member-heading-content text-center">
            <div class="section-heading">
                <h2 class="section__title lh-50">Meet Our Leaderships</h2>
            </div><!-- end section-heading -->
        </div><!-- end team-member-heading-content -->
        <div class="row pt-60px">
            <div class="col-lg-3 responsive-column-half">
                <div class="card card-item member-card text-center">
                    <div class="card-image">
                        <img class="card-img-top" src="images/small-avatar-1.jpg" alt="team member">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><a href="#">Alex Smith</a></h5>
                        <p class="card-text">Founder And CEO</p>
                        <ul class="social-icons social-icons-styled social--icons-styled pt-4">
                            <li><a href="#"><i class="la la-facebook"></i></a></li>
                            <li><a href="#"><i class="la la-twitter"></i></a></li>
                            <li><a href="#"><i class="la la-instagram"></i></a></li>
                        </ul>
                    </div>
                </div><!-- end card -->
            </div><!-- end col-lg-3 -->
             <div class="col-lg-3 responsive-column-half">
                <div class="card card-item member-card text-center">
                    <div class="card-image">
                        <img class="card-img-top" src="images/small-avatar-2.jpg" alt="team member">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><a href="#">Rose Taylor</a></h5>
                        <p class="card-text">President And Co-CEO</p>
                        <ul class="social-icons social-icons-styled social--icons-styled pt-4">
                            <li><a href="#"><i class="la la-facebook"></i></a></li>
                            <li><a href="#"><i class="la la-twitter"></i></a></li>
                            <li><a href="#"><i class="la la-instagram"></i></a></li>
                        </ul>
                    </div>
                </div><!-- end card -->
            </div><!-- end col-lg-3 -->
             <div class="col-lg-3 responsive-column-half">
                <div class="card card-item member-card text-center">
                    <div class="card-image">
                        <img class="card-img-top" src="images/small-avatar-3.jpg" alt="team member">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><a href="#">Jef Collin</a></h5>
                        <p class="card-text">Chief Technology Officer</p>
                        <ul class="social-icons social-icons-styled social--icons-styled pt-4">
                            <li><a href="#"><i class="la la-facebook"></i></a></li>
                            <li><a href="#"><i class="la la-twitter"></i></a></li>
                            <li><a href="#"><i class="la la-instagram"></i></a></li>
                        </ul>
                    </div>
                </div><!-- end card -->
            </div><!-- end col-lg-3 -->
             <div class="col-lg-3 responsive-column-half">
                <div class="card card-item member-card text-center">
                    <div class="card-image">
                        <img class="card-img-top" src="images/small-avatar-4.jpg" alt="team member">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><a href="#">Mike Hardson</a></h5>
                        <p class="card-text">Chief Marketing Officer</p>
                        <ul class="social-icons social-icons-styled social--icons-styled pt-4">
                            <li><a href="#"><i class="la la-facebook"></i></a></li>
                            <li><a href="#"><i class="la la-twitter"></i></a></li>
                            <li><a href="#"><i class="la la-instagram"></i></a></li>
                        </ul>
                    </div>
                </div><!-- end card -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column-half">
                <div class="card card-item member-card text-center">
                    <div class="card-image">
                        <img class="card-img-top" src="images/small-avatar-5.jpg" alt="team member">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><a href="#">John Smith</a></h5>
                        <p class="card-text">Vice President Of Product</p>
                        <ul class="social-icons social-icons-styled social--icons-styled pt-4">
                            <li><a href="#"><i class="la la-facebook"></i></a></li>
                            <li><a href="#"><i class="la la-twitter"></i></a></li>
                            <li><a href="#"><i class="la la-instagram"></i></a></li>
                        </ul>
                    </div>
                </div><!-- end card -->
            </div><!-- end col-lg-3 -->
             <div class="col-lg-3 responsive-column-half">
                <div class="card card-item member-card text-center">
                    <div class="card-image">
                        <img class="card-img-top" src="images/small-avatar-6.jpg" alt="team member">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><a href="#">Kevin Martin</a></h5>
                        <p class="card-text">Vice President Of Services</p>
                        <ul class="social-icons social-icons-styled social--icons-styled pt-4">
                            <li><a href="#"><i class="la la-facebook"></i></a></li>
                            <li><a href="#"><i class="la la-twitter"></i></a></li>
                            <li><a href="#"><i class="la la-instagram"></i></a></li>
                        </ul>
                    </div>
                </div><!-- end card -->
            </div><!-- end col-lg-3 -->
             <div class="col-lg-3 responsive-column-half">
                <div class="card card-item member-card text-center">
                    <div class="card-image">
                        <img class="card-img-top" src="images/small-avatar-7.jpg" alt="team member">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><a href="#">Tisham Elerdy</a></h5>
                        <p class="card-text">VP, Operations</p>
                        <ul class="social-icons social-icons-styled social--icons-styled pt-4">
                            <li><a href="#"><i class="la la-facebook"></i></a></li>
                            <li><a href="#"><i class="la la-twitter"></i></a></li>
                            <li><a href="#"><i class="la la-instagram"></i></a></li>
                        </ul>
                    </div>
                </div><!-- end card -->
            </div><!-- end col-lg-3 -->
             <div class="col-lg-3 responsive-column-half">
                <div class="card card-item member-card text-center">
                    <div class="card-image">
                        <img class="card-img-top" src="images/small-avatar-1.jpg" alt="team member">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><a href="#">Alper Doein</a></h5>
                        <p class="card-text">Chief Financial Officer</p>
                        <ul class="social-icons social-icons-styled social--icons-styled pt-4">
                            <li><a href="#"><i class="la la-facebook"></i></a></li>
                            <li><a href="#"><i class="la la-twitter"></i></a></li>
                            <li><a href="#"><i class="la la-instagram"></i></a></li>
                        </ul>
                    </div>
                </div><!-- end card -->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end team-member-area -->
<!--======================================
        END TEAM MEMBER AREA
======================================-->

<!--================================
         START TESTIMONIAL AREA
=================================-->
<section class="testimonial-area bg-gray section--padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="testimonial-content-wrap pb-4">
                    <div class="section-heading">
                        <h2 class="section__title mb-3">From the Aduca community</h2>
                        <p class="section__desc">
                            Donec vitae orci sed dolor rutrum auctor. Duis arcu tortor, suscipit eget, imperdiet nec
                        </p>
                    </div><!-- end section-heading -->
                    <div class="btn-box mt-28px">
                        <a href="about.html" class="btn theme-btn">Explore all <i class="la la-arrow-right icon ml-1"></i></a>
                    </div>
                </div>
            </div><!-- end col-lg-4 -->
            <div class="col-lg-8">
                <h3 class="fs-22 font-weight-medium pb-3">30+ million people are already learning on Aduca</h3>
                <div class="testimonial-carousel-2 owl-action-styled owl-action-styled-2">
                    <div class="card card-item">
                        <div class="card-body">
                            <p class="card-text">
                                I really recommend this site to all my friends and anyone who’s willing to
                                learn real skills. This platform gives
                                you the opportunity to learn from experts at a convenient time.
                            </p>
                            <div class="media media-card align-items-center pt-4">
                                <div class="media-img avatar-md">
                                    <img src="images/small-avatar-1.jpg" alt="Testimonial avatar" class="rounded-full">
                                </div>
                                <div class="media-body">
                                    <h5>Kevin Martin</h5>
                                    <div class="d-flex align-items-center pt-1">
                                        <span class="lh-18 pr-2">Student</span>
                                        <div class="review-stars">
                                            <span class="la la-star"></span>
                                            <span class="la la-star"></span>
                                            <span class="la la-star"></span>
                                            <span class="la la-star"></span>
                                            <span class="la la-star"></span>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end media -->
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                    <div class="card card-item">
                        <div class="card-body">
                            <p class="card-text">
                                I really recommend this site to all my friends and anyone who’s willing to
                                learn real skills. This platform gives
                                you the opportunity to learn from experts at a convenient time.
                            </p>
                            <div class="media media-card align-items-center pt-4">
                                <div class="media-img avatar-md">
                                    <img src="images/small-avatar-2.jpg" alt="Testimonial avatar" class="rounded-full">
                                </div>
                                <div class="media-body">
                                    <h5>Oliver Beddows</h5>
                                    <div class="d-flex align-items-center pt-1">
                                        <span class="lh-18 pr-2">Student</span>
                                        <div class="review-stars">
                                            <span class="la la-star"></span>
                                            <span class="la la-star"></span>
                                            <span class="la la-star"></span>
                                            <span class="la la-star"></span>
                                            <span class="la la-star"></span>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end media -->
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                    <div class="card card-item">
                        <div class="card-body">
                            <p class="card-text">
                                I really recommend this site to all my friends and anyone who’s willing to
                                learn real skills. This platform gives
                                you the opportunity to learn from experts at a convenient time.
                            </p>
                            <div class="media media-card align-items-center pt-4">
                                <div class="media-img avatar-md">
                                    <img src="images/small-avatar-3.jpg" alt="Testimonial avatar" class="rounded-full">
                                </div>
                                <div class="media-body">
                                    <h5>Jackob Hallac</h5>
                                    <div class="d-flex align-items-center pt-1">
                                        <span class="lh-18 pr-2">Student</span>
                                        <div class="review-stars">
                                            <span class="la la-star"></span>
                                            <span class="la la-star"></span>
                                            <span class="la la-star"></span>
                                            <span class="la la-star"></span>
                                            <span class="la la-star"></span>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end media -->
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                </div><!-- end testimonial-carousel-2 -->
            </div><!-- end col-lg-8 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end testimonial-area -->
<!--================================
        END TESTIMONIAL AREA
=================================-->

<!--======================================
        START CTA AREA
======================================-->
<section class="cta-area pt-60px pb-60px position-relative overflow-hidden">
    <span class="stroke-shape stroke-shape-1"></span>
    <span class="stroke-shape stroke-shape-2"></span>
    <span class="stroke-shape stroke-shape-3"></span>
    <span class="stroke-shape stroke-shape-4"></span>
    <span class="stroke-shape stroke-shape-5"></span>
    <span class="stroke-shape stroke-shape-6"></span>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-9">
                <div class="cta-content-wrap media py-4 align-items-center">
                    <div class="flex-shrink-0 mr-3">
                        <svg class="svg-icon-color-gray" width="85" viewBox="0 -48 496 496" xmlns="http://www.w3.org/2000/svg"><path d="m472 0h-448c-13.230469 0-24 10.769531-24 24v352c0 13.230469 10.769531 24 24 24h448c13.230469 0 24-10.769531 24-24v-352c0-13.230469-10.769531-24-24-24zm8 376c0 4.414062-3.59375 8-8 8h-448c-4.40625 0-8-3.585938-8-8v-352c0-4.40625 3.59375-8 8-8h448c4.40625 0 8 3.59375 8 8zm0 0"></path><path d="m448 32h-400v240h400zm-16 224h-368v-208h368zm0 0"></path><path d="m328 200.136719c0-17.761719-11.929688-33.578125-29.007812-38.464844l-26.992188-7.703125v-2.128906c9.96875-7.511719 16-19.328125 16-31.832032v-14.335937c0-21.503906-16.007812-39.726563-36.449219-41.503906-11.183593-.96875-22.34375 2.800781-30.574219 10.351562-8.25 7.550781-12.976562 18.304688-12.976562 29.480469v16c0 12.503906 6.03125 24.328125 16 31.832031v2.128907l-26.992188 7.710937c-17.078124 4.886719-29.007812 20.703125-29.007812 38.464844v39.863281h160zm-16 23.863281h-128v-23.863281c0-10.664063 7.160156-20.152344 17.40625-23.082031l38.59375-11.023438v-23.070312l-3.976562-2.3125c-7.527344-4.382813-12.023438-12.105469-12.023438-20.648438v-16c0-6.703125 2.839844-13.160156 7.792969-17.695312 5.007812-4.601563 11.496093-6.832032 18.382812-6.207032 12.230469 1.0625 21.824219 12.285156 21.824219 25.566406v14.335938c0 8.542969-4.496094 16.265625-12.023438 20.648438l-3.976562 2.3125v23.070312l38.59375 11.023438c10.246094 2.9375 17.40625 12.425781 17.40625 23.082031zm0 0"></path><path d="m32 364.945312 73.886719-36.945312-73.886719-36.945312zm16-48 22.113281 11.054688-22.113281 11.054688zm0 0"></path><path d="m152 288h16v80h-16zm0 0"></path><path d="m120 288h16v80h-16zm0 0"></path><path d="m336 288h-48v32h-104v16h104v32h48v-32h128v-16h-128zm-16 64h-16v-48h16zm0 0"></path></svg>
                    </div>
                    <div class="media-body">
                        <h2 class="fs-28 font-weight-bold mb-1">Teach the world online</h2>
                        <p class="fs-17">Create an online video course, reach students across the globe, and earn money</p>
                    </div>
                </div><!-- end media -->
            </div><!-- end col-lg-9 -->
            <div class="col-lg-3">
                <div class="cta-btn-box text-right">
                    <a href="become-a-teacher.html" class="btn theme-btn">Tech on Aduca <i class="la la-arrow-right icon ml-1"></i></a>
                </div>
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end cta-area -->
<!--======================================
        END CTA AREA
======================================-->

<div class="section-block"></div>

<!--======================================
        START ABOUT AREA
======================================-->
<section class="about-area section--padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-content pb-5">
                    <div class="section-heading">
                        <h2 class="section__title pb-3 lh-50">A great place to grow</h2>
                        <p class="section__desc pb-3">Nemo enim ipsam,voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia,consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, adipisci velit, sed quia non numquam eius modi tempora</p>
                        <p class="section__desc">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, adipisci velit, sed quia non numquam eius modi tempora</p>
                    </div><!-- end section-heading -->
                    <div class="btn-box pt-35px">
                        <a href="#" class="btn theme-btn">Join with our team <i class="la la-arrow-right icon ml-1"></i></a>
                    </div>
                </div><!-- end about-content -->
            </div><!-- end col-lg-6 -->
            <div class="col-lg-6">
                <div class="generic-img-box generic-img-box-layout-3">
                    <img src="images/img-loading.png" data-src="images/img13.jpg" alt="About image" class="img__item lazy img__item-1">
                </div>
            </div><!-- end col-lg-6 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end about-area -->
<!--======================================
        END ABOUT AREA
======================================-->

<div class="section-block"></div>

<!-- ================================
       START CLIENT-LOGO AREA
================================= -->
<section class="client-logo-area section--padding position-relative overflow-hidden text-center">
    <span class="stroke-shape stroke-shape-1"></span>
    <span class="stroke-shape stroke-shape-2"></span>
    <span class="stroke-shape stroke-shape-3"></span>
    <span class="stroke-shape stroke-shape-4"></span>
    <span class="stroke-shape stroke-shape-5"></span>
    <span class="stroke-shape stroke-shape-6"></span>
    <div class="container">
        <div class="section-heading">
            <h2 class="section__title mb-3">Trusted by companies of all sizes</h2>
            <p class="section__desc">Get access to high quality learning wherever you are, with online courses, programs
                <br>and degrees created by leading universities, business schools</p>
        </div><!-- end section-heading -->
        <div class="client-logo-carousel pt-40px">
            <a href="#" class="client-logo-item"><img src="images/sponsor-img.png" alt="brand image"></a>
            <a href="#" class="client-logo-item"><img src="images/sponsor-img2.png" alt="brand image"></a>
            <a href="#" class="client-logo-item"><img src="images/sponsor-img3.png" alt="brand image"></a>
            <a href="#" class="client-logo-item"><img src="images/sponsor-img4.png" alt="brand image"></a>
            <a href="#" class="client-logo-item"><img src="images/sponsor-img5.png" alt="brand image"></a>
        </div><!-- end client-logo-carousel -->
    </div><!-- end container -->
</section><!-- end client-logo-area -->
<!-- ================================
       START CLIENT-LOGO AREA
================================= -->

<!-- ================================
         END FOOTER AREA
================================= -->
<section class="footer-area pt-100px bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 responsive-column-half">
                <div class="footer-item">
                    <h3 class="fs-20 font-weight-semi-bold pb-2">Company</h3>
                    <div class="divider border-bottom-0"><span></span></div>
                    <ul class="generic-list-item">
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Become a Teacher</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column-half">
                <div class="footer-item">
                    <h3 class="fs-20 font-weight-semi-bold pb-2">Courses</h3>
                    <div class="divider border-bottom-0"><span></span></div>
                    <ul class="generic-list-item">
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">Hacking</a></li>
                        <li><a href="#">PHP Learning</a></li>
                        <li><a href="#">Spoken English</a></li>
                        <li><a href="#">Self-Driving Car</a></li>
                        <li><a href="#">Garbage Collectors</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column-half">
                <div class="footer-item">
                    <h3 class="fs-20 font-weight-semi-bold pb-2">Download App</h3>
                    <div class="divider border-bottom-0"><span></span></div>
                    <div class="mobile-app">
                        <p class="pb-3 lh-24">Download our mobile app and learn on the go.</p>
                        <a href="#" class="d-block mb-2 hover-s"><img src="images/appstore.png" alt="App store" class="img-fluid"></a>
                        <a href="#" class="d-block hover-s"><img src="images/googleplay.png" alt="Google play store" class="img-fluid"></a>
                    </div>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column-half">
                <div class="footer-item">
                    <h3 class="fs-20 font-weight-semi-bold pb-2">Newsletter</h3>
                    <div class="divider border-bottom-0"><span></span></div>
                    <form method="post" class="subscriber-form">
                        <p class="pb-3 lh-24">Want us to email you about special offers & updates?</p>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control form--control pl-3" placeholder="Enter email address">
                            <button class="btn theme-btn w-100 mt-3" type="button">Subscribe <i class="la la-arrow-right icon ml-1"></i></button>
                        </div>
                    </form>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
    </div><!-- end container -->
    <div class="section-block"></div>
    <div class="copyright-content py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="d-flex flex-wrap align-items-center">
                        <a href="index.html" class="pr-4">
                            <img src="images/logo.png" alt="footer logo" class="footer__logo">
                        </a>
                        <p class="copy-desc">Copyright &copy; 2021 <a href="https://techydevs.com/">TechyDevs</a> Inc.</p>
                    </div>
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="d-flex flex-wrap align-items-center justify-content-end">
                        <ul class="generic-list-item d-flex flex-wrap align-items-center fs-14">
                            <li class="mr-3"><a href="terms-and-conditions.html">Terms & Conditions</a></li>
                            <li class="mr-3"><a href="privacy-policy.html">Privacy Policy</a></li>
                        </ul>
                        <div class="select-container select-container-sm">
                            <select class="select-container-select">
                                <option value="1">English</option>
                                <option value="2">Deutsch</option>
                                <option value="3">Español</option>
                                <option value="4">Français</option>
                                <option value="5">Bahasa Indonesia</option>
                                <option value="6">Bangla</option>
                                <option value="7">日本語</option>
                                <option value="8">한국어</option>
                                <option value="9">Nederlands</option>
                                <option value="10">Polski</option>
                                <option value="11">Português</option>
                                <option value="12">Română</option>
                                <option value="13">Русский</option>
                                <option value="14">ภาษาไทย</option>
                                <option value="15">Türkçe</option>
                                <option value="16">中文(简体)</option>
                                <option value="17">中文(繁體)</option>
                                <option value="17">Hindi</option>
                            </select>
                        </div>
                    </div>
                </div><!-- end col-lg-6 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end copyright-content -->
</section><!-- end footer-area -->
<!-- ================================
          END FOOTER AREA
================================= -->

<!-- start scroll top -->
<div id="scroll-top">
    <i class="la la-arrow-up" title="Go top"></i>
</div>
<!-- end scroll top -->

<!-- template js files -->
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/isotope.js"></script>
<script src="js/waypoint.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/fancybox.js"></script>
<script src="js/datedropper.min.js"></script>
<script src="js/emojionearea.min.js"></script>
<script src="js/jquery.lazy.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>