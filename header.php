<!DOCTYPE html>
<html dir="ltr" lang="zxx">

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta charset="utf-8" />
    <title><?= $title ?></title>
    <meta name="description" content="<?= substr($description, 0, 160) ?>">
    <meta name="keywords" content="<?= $keywords ?>">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <link rel="canonical" href="<?= $url . "/" . $page ?>" />

    <meta name="robots" content="noodp" />
    <meta name="distribution" content="Global" />
    <meta property="og:title" content="<?= $title ?>" />
    <meta property="og:url" content="<?= $url . "/" . $page ?>" />
    <meta name="format-detection" content="telephone=no">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?= $url ?>/images/logo/favicon.png">
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="50">
    <meta property="og:image:height" content="48">
    <meta property="og:site_name" content="<?= $site_name ?>" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:url" content="<?= $url . "/" . $page ?>">
    <meta name="twitter:title" content="<?= $title ?>">
    <meta name="twitter:description" content="<?= substr($description, 0, 160) ?>">

    <!-- delivery, item transport, logistics, product delivery, product transport, shipping, supply, transport, transport agency, transportation -->
    <meta name="author" content="PSV logistics" />
    <link rel="icon" type="image/png" href="images/logo/favicon.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet">  
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <link rel="stylesheet" href="css/slick.css" />
    <link rel="stylesheet" href="css/meanmenu.css" />
    <link rel="stylesheet" href="css/nice-select.css" />
    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</head>

<body>
    <!-- Header Start !-->
    <header class="header-area">
        <!-- Header Top Start -->
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex align-items-center justify-content-end ">
                        <!-- <a href="document.pdf" target="_blank" class="btn-doc">Shoolin logistics Document</a> -->
                        <!-- <span class="text-white">US DOT : 4179219</span>
                         <span class="text-white">MC: 01608760</span> -->
                        <div class="header-top-info">
                            <div class="header-contact-info">
                                <span><span class="contact-info-item"><i class="fa-solid fa-location-dot"></i>30N Gould St, Ste R
                                        Sheridan,WY 82801</span></span>
                                <span><a href="mailto:shoolin.logistics@gmail.com"><i class="fa-solid fa-envelope"></i></a> </span>
                                <span><a href="https://www.facebook.com/p/PSV-Logistics-Pty-Ltd-100087071556173/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a> </span>
                                <span><a href="https://www.instagram.com/"><i class="fa-brands fa-instagram " target="_blank"></i></a> </span>
                                <!-- <span><a href="linkedin.com/login"><i class="fa-brands fa-linkedin-in"></i></a> </span> -->
                            </div>
                            <div class="header-top-btn">
                                <a href="index.php#Free-Quote">Booking Request</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Top End -->
        <!-- Header Nav Menu Start -->
        <div class="header-menu-area sticky-header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-6 d-flex align-items-center">
                        <div class="logo">
                            <a href="index.php" class="standard-logo">
                                <img src="images/logo/logo.png" alt="logo" />
                            </a>
                            <a href="index.php" class="sticky-logo">
                                <img src="images/logo/logo.png" alt="logo" />
                            </a>
                            <a href="index.php" class="retina-logo">
                                <img src="images/logo/logo.png" alt="logo" />
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-6 col-6 d-flex align-items-center justify-content-end">
                        <div class="menu d-inline-block">
                            <nav id="main-menu" class="main-menu">
                                <ul>
                                    <li class="<?php if ($page == 'index.php') {
                                                    echo 'active';
                                                } ?>">
                                        <a href="index.php">Home</a>

                                    </li>
                                    <li class="<?php if ($page == 'about.php') {
                                                    echo 'active';
                                                } ?>"><a href="about.php">About</a></li>
                                    <li class="dropdown <?php if ($page == 'interstate-transport.php' || $page == 'mteropolitan-delievery.php' || $page == 'courier-service.php' || $page == 'taxi.php' || $page == 'manpower.php' || $page == 'warehousing_delivery.php' || $page == 'storage.php') {
                                                            echo 'active';
                                                        } ?>">
                                        <a href="#">Service</a>
                                        <ul class="submenu">
                                            <li><a href="full-truck-load.php">Full Truck Load ( FTL )</a></li>
                                            <li><a href="less-than-truck-load.php">Less Than Truck Load (LTL)</a></li>
                                            <li><a href="airport-pickup.php">Airport Pickup</a></li>
                                            <li><a href="transloading.php">Transloading</a></li>
                                            <li><a href="full-container-load-FCL.php">Full Container load (FCL)</a></li>
                                            <li><a href="less-container-load-LCL.php"> Less Container load (LCL)</a></li>

                                        </ul>








                                    </li>

                                    <!-- <li class="dropdown">
                                        <a href="blog.php">Blog</a>
                                        <ul class="submenu">
                                            <li><a href="blog.php">Blog Page</a></li>                                         
                                            <li><a href="blog-details.php">Blog Details Page</a></li>
                                        </ul>
                                    </li> -->

                                    <!-- <li class="<?php if ($page == 'carrier.php') {
                                                        echo 'active';
                                                    } ?>"><a href="carrier.php">Carrier</a></li> -->
                                    <li class="<?php if ($page == 'contact.php') {
                                                    echo 'active';
                                                } ?>"><a href="contact.php">Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Header Button Start !-->
                        <a href="tel:13054796279" class="header-btn">
                            <div class="icon-wrapper">
                                <div class="icon">
                                    <img src="images/icon/phone.png" alt="phone" />
                                </div>
                            </div>
                            <div class="content-wrapper">
                                <span class="title">Got A Question?</span>
                                <span class="text">+1 305 479 6279</span>
                            </div>
                        </a>
                        <!-- Header Button Start !-->
                        <!-- Mobile Menu Toggle Button Start !-->
                        <div class="mobile-menu-bar d-lg-none text-end">
                            <a href="#" class="mobile-menu-toggle-btn"><i class="fal fa-bars"></i></a>
                        </div>
                        <!-- Mobile Menu Toggle Button End !-->
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Nav Menu End -->
    </header>
    <!-- Header End !-->
    <!-- Menu Sidebar Section Start -->
    <div class="menu-sidebar-area">
        <div class="menu-sidebar-wrapper">
            <div class="menu-sidebar-close">
                <button class="menu-sidebar-close-btn" id="menu_sidebar_close_btn">
                    <i class="fal fa-times"></i>
                </button>
            </div>
            <div class="menu-sidebar-content">
                <div class="menu-sidebar-logo">
                    <a href="index.php">
                        <img src="images/logo/logo.png" alt="logo" />
                    </a>
                </div>
                <div class="mobile-nav-menu"></div>

            </div>
        </div>
    </div>
    <!-- start -->
    <div class="fixed-bottom p-4">
        <div class="toast bg-dark text-white w-100 mw-100" role="alert" data-bs-autohide="false">
            <div class="toast-body p-4 d-flex flex-column">
                <p class="text-white">
                Shoolin Logistics website uses cookies to enhance your browsing experience and provide personalized services. By using our website, you consent to the use of cookies in accordance with this policy.
                </p>
                <div class="mr-auto">
                    <button type="button" class="btn btn-success" id="btnAccept">
                        Accept
                    </button>
                    <button type="button" class="btn btn-danger " id="btnDeny">
                        Reject
                    </button>
                    <a href="cookies.php" class="btn btn-secondary" id="btnAccept">
                        More Information.
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $("button").click(function() {
                $(".main-menu").slideToggle();
            });
            function setCookie(name, value, days) {
                var expires = "";
                if (days) {
                    var date = new Date();
                    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                    expires = "; expires=" + date.toUTCString();
                }
                document.cookie = name + "=" + (value || "") + expires + "; path=/";
            }
            function getCookie(name) {
                var nameEQ = name + "=";
                var ca = document.cookie.split(';');
                for (var i = 0; i < ca.length; i++) {
                    var c = ca[i];
                    while (c.charAt(0) == ' ') c = c.substring(1, c.length);
                    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
                }
                return null;
            }
            function eraseCookie(name) {
                document.cookie = name + '=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
            }

            function cookieConsent() {
                if (!getCookie('allowCookies')) {
                    $('.toast').toast('show')
                }
            }

            $('#btnDeny').click(() => {
                eraseCookie('allowCookies')
                $('.toast').toast('hide')
            })

            $('#btnAccept').click(() => {
                setCookie('allowCookies', '1', 7)
                $('.toast').toast('hide')
            })

            // load
            cookieConsent()

            // for demo / testing only
            $('#btnReset').click(() => {
                // clear cookie to show toast after acceptance
                eraseCookie('allowCookies')
                $('.toast').toast('show')
            })
        });
    </script>