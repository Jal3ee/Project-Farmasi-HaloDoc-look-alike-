<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="multikit" />
    <meta name="keywords" content="multikit" />
    <title>Multikit - Multi-purpose Html Template</title>
    <link rel="manifest" href="https://themes.pixelstrap.net/multikit/manifest.json" />
    <meta name="theme-color" content="#ff8d2f" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="apple-mobile-web-app-title" content="multikit" />
    <meta name="msapplication-TileImage" content="https://themes.pixelstrap.net/multikit/assets/images/favicon/1.svg" />
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="icon" type="image/x-icon" href="https://themes.pixelstrap.net/multikit/assets/images/favicon/9.svg" />
    <link rel="shortcut icon" href="https://themes.pixelstrap.net/" type="image/x-icon" />

    <!--Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet" />

    <!-- Bootstrap css -->
    <link id="rtl-link" rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/vendors/bootstrap.css" />

    <!-- Swiper css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/vendors/swiper/swiper-bundle.min.css" />

    <!-- Remix Icon css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/remixicon.css" />

    <!-- Style css -->
    <link id="change-link" rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/style.css" />
</head>

<body class="inter-body learning-color">
    <!-- header start -->
    <header class="main-header learning-header">
        <div class="top-header">
            <div class="header-left">
                <a class="text-white" href="<?= site_url('pasien') ?>">
                    <i class="ri-arrow-left-line"></i>
                </a>
            </div>

            <div class="header-right">
                <div class="notification-box">
                    <a class="text-white" href="#">
                        <i class="ri-chat-4-line"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="header-bottom-account">
            <div class="profile-image">
                <img src="<?= base_url($foto) ?>" class="img-fluid" alt="" />
            </div>
            <div class="profile-name">
                <h4 class="text-white"><?= $nama ?></h4>
                <h6 class="content-color"><?= $email ?></h6>
            </div>
        </div>
    </header>
    <!-- header end -->

    <!-- Mobile Section Start -->
    <div class="mobile-style-1">
        <ul>
            <li>
                <a href="<?= site_url('pasien') ?>" class="mobile-box">
                    <div class="mobile-icon">
                        <i class="ri-home-5-line"></i>
                    </div>
                    <div class="mobile-name">
                        <h5>Home</h5>
                    </div>
                </a>
            </li>

            <li>
                <a href="<?= site_url('pasien/consultation') ?>" class="mobile-box">
                    <div class="mobile-icon">
                        <i class="ri-contacts-book-2-line"></i>
                    </div>
                    <div class="mobile-name">
                        <h5>Consultation</h5>
                    </div>
                </a>
            </li>

            <li class="active">
                <a href="<?= site_url('pasien/akun') ?>" class="mobile-box">
                    <div class="mobile-icon">
                        <i class="ri-user-3-line"></i>
                    </div>
                    <div class="mobile-name">
                        <h5>Account</h5>
                    </div>
                </a>
            </li>
        </ul>
    </div>
    <!-- Mobile Section End -->

    <!-- Setting Section Start -->
    <div class="setting-style-1 pt-45">
        <div class="custom-container">
            <div class="title">
                <h4>Account Setting</h4>
            </div>
            <ul class="menu-setting-list px-0">
                <li>
                    <a href="<?= site_url('pasien/setperson') ?>" class="menu-setting-box">
                        <div class="setting-icon">
                            <i class="ri-user-3-line"></i>
                        </div>
                        <div class="setting-name">
                            <h4>Personal Setting</h4>
                            <i class="ri-arrow-right-s-line"></i>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="<?= site_url('pasien/set_akun') ?>" class="menu-setting-box">
                        <div class="setting-icon">
                            <i class="ri-lock-line"></i>
                        </div>
                        <div class="setting-name">
                            <h4>Account security</h4>
                            <i class="ri-arrow-right-s-line"></i>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('login/logout') ?>" class="menu-setting-box">
                        <div class="setting-icon">
                            <i class="ri-information-line"></i>
                        </div>
                        <div class="setting-name">
                            <h4>Logout</h4>
                            <i class="ri-arrow-right-s-line"></i>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Setting Section End -->

    <!-- Bootstrap js-->
    <script src="<?= base_url() ?>assets/js/vendors/bootstrap/bootstrap.bundle.min.js"></script>

    <!-- swiper js -->
    <script src="<?= base_url() ?>assets/js/swiper-bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/js/custom_swiper.js"></script>

    <!-- Theme js-->
    <script src="<?= base_url() ?>assets/js/script.js"></script>

    <!-- Theme Settings js-->
    <script src="<?= base_url() ?>assets/js/theme-setting.js"></script>
</body>

</html>