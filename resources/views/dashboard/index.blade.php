<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="light" data-toggled="close">

<head>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>  Инновационная система генерации знаний в области стратегического менеджмента  </title>
    <meta name="Description" content="Инновационная система генерации знаний в области стратегического менеджмента">
    <meta name="Author" content="Мы создаем экосистему, где обучение является непрерывным, а возможности для роста безграничны">
	<meta name="keywords" content="Трансформируйте знания
в конкурентное преимущество
с OntologyAI ">

    <!-- Favicon -->
    <link rel="icon" href="../assets/images/brand-logos/favicon.ico" type="image/x-icon">

    <!-- Choices JS -->
    <script src="../assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>

    <!-- Main Theme Js -->
    <script src="../assets/js/main.js"></script>

    <!-- Bootstrap Css -->
    <link id="style" href="../assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" >

    <!-- Style Css -->
    <link href="../assets/css/styles.min.css" rel="stylesheet" >

    <!-- Icons Css -->
    <link href="../assets/css/icons.css" rel="stylesheet" >

    <!-- Node Waves Css -->
    <link href="../assets/libs/node-waves/waves.min.css" rel="stylesheet" >

    <!-- Simplebar Css -->
    <link href="../assets/libs/simplebar/simplebar.min.css" rel="stylesheet" >

    <!-- Color Picker Css -->
    <link rel="stylesheet" href="../assets/libs/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" href="../assets/libs/@simonwep/pickr/themes/nano.min.css">

    <!-- Choices Css -->
    <link rel="stylesheet" href="../assets/libs/choices.js/public/assets/styles/choices.min.css">

<!-- Jsvector Maps -->
<link rel="stylesheet" href="../assets/libs/jsvectormap/css/jsvectormap.min.css">

</head>

<body>

    <!-- Start Switcher -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="switcher-canvas" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title text-default" id="offcanvasRightLabel">Switcher</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <nav class="border-bottom border-block-end-dashed">
                <div class="nav nav-tabs nav-justified" id="switcher-main-tab" role="tablist">
                    <button class="nav-link active" id="switcher-home-tab" data-bs-toggle="tab" data-bs-target="#switcher-home"
                        type="button" role="tab" aria-controls="switcher-home" aria-selected="true">Theme Styles</button>
                    <button class="nav-link" id="switcher-profile-tab" data-bs-toggle="tab" data-bs-target="#switcher-profile"
                        type="button" role="tab" aria-controls="switcher-profile" aria-selected="false">Theme Colors</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active border-0" id="switcher-home" role="tabpanel" aria-labelledby="switcher-home-tab"
                    tabindex="0">
                    <div class="">
                        <p class="switcher-style-head">Theme Color Mode:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-light-theme">
                                        Light
                                    </label>
                                    <input class="form-check-input" type="radio" name="theme-style" id="switcher-light-theme"
                                        checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-dark-theme">
                                        Dark
                                    </label>
                                    <input class="form-check-input" type="radio" name="theme-style" id="switcher-dark-theme">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Directions:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-ltr">
                                        LTR
                                    </label>
                                    <input class="form-check-input" type="radio" name="direction" id="switcher-ltr" checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-rtl">
                                        RTL
                                    </label>
                                    <input class="form-check-input" type="radio" name="direction" id="switcher-rtl">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Navigation Styles:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-vertical">
                                        Vertical
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-style" id="switcher-vertical"
                                        checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-horizontal">
                                        Horizontal
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-style"
                                        id="switcher-horizontal">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navigation-menu-styles">
                        <p class="switcher-style-head">Vertical & Horizontal Menu Styles:</p>
                        <div class="row switcher-style gx-0 pb-2 gy-2">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-menu-click">
                                        Menu Click
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                        id="switcher-menu-click">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-menu-hover">
                                        Menu Hover
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                        id="switcher-menu-hover">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-icon-click">
                                        Icon Click
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                        id="switcher-icon-click">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-icon-hover">
                                        Icon Hover
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                        id="switcher-icon-hover">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidemenu-layout-styles">
                        <p class="switcher-style-head">Sidemenu Layout Styles:</p>
                        <div class="row switcher-style gx-0 pb-2 gy-2">
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-default-menu">
                                        Default Menu
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-default-menu" checked>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-closed-menu">
                                        Closed Menu
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-closed-menu">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-icontext-menu">
                                        Icon Text
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-icontext-menu">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-icon-overlay">
                                        Icon Overlay
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-icon-overlay">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-detached">
                                        Detached
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-detached">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-double-menu">
                                        Double Menu
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-double-menu">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Page Styles:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-regular">
                                        Regular
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-styles" id="switcher-regular"
                                        checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-classic">
                                        Classic
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-styles" id="switcher-classic">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-modern">
                                        Modern
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-styles" id="switcher-modern">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Layout Width Styles:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-full-width">
                                        Full Width
                                    </label>
                                    <input class="form-check-input" type="radio" name="layout-width" id="switcher-full-width"
                                        checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-boxed">
                                        Boxed
                                    </label>
                                    <input class="form-check-input" type="radio" name="layout-width" id="switcher-boxed">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Menu Positions:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-menu-fixed">
                                        Fixed
                                    </label>
                                    <input class="form-check-input" type="radio" name="menu-positions" id="switcher-menu-fixed"
                                        checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-menu-scroll">
                                        Scrollable
                                    </label>
                                    <input class="form-check-input" type="radio" name="menu-positions" id="switcher-menu-scroll">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Header Positions:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-header-fixed">
                                        Fixed
                                    </label>
                                    <input class="form-check-input" type="radio" name="header-positions"
                                        id="switcher-header-fixed" checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-header-scroll">
                                        Scrollable
                                    </label>
                                    <input class="form-check-input" type="radio" name="header-positions"
                                        id="switcher-header-scroll">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Loader:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-loader-enable">
                                        Enable
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-loader"
                                        id="switcher-loader-enable" checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-loader-disable">
                                        Disable
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-loader"
                                        id="switcher-loader-disable" checked>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade border-0" id="switcher-profile" role="tabpanel" aria-labelledby="switcher-profile-tab" tabindex="0">
                    <div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Menu Colors:</p>
                            <div class="d-flex switcher-style pb-2">
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-white" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Light Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-light" checked>
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-dark" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Dark Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-dark">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Color Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-primary">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-gradient" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Gradient Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-gradient">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-transparent"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Transparent Menu"
                                        type="radio" name="menu-colors" id="switcher-menu-transparent">
                                </div>
                            </div>
                            <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Menu dynamically change from below Theme Primary color picker</div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Header Colors:</p>
                            <div class="d-flex switcher-style pb-2">
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-white" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Light Header" type="radio" name="header-colors"
                                        id="switcher-header-light" checked>
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-dark" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Dark Header" type="radio" name="header-colors"
                                        id="switcher-header-dark">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Color Header" type="radio" name="header-colors"
                                        id="switcher-header-primary">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-gradient" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Gradient Header" type="radio" name="header-colors"
                                        id="switcher-header-gradient">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-transparent" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Transparent Header" type="radio" name="header-colors"
                                        id="switcher-header-transparent">
                                </div>
                            </div>
                            <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Header dynamically change from below Theme Primary color picker</div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Theme Primary:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-1" type="radio"
                                        name="theme-primary" id="switcher-primary">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-2" type="radio"
                                        name="theme-primary" id="switcher-primary1">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-3" type="radio" name="theme-primary"
                                        id="switcher-primary2">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-4" type="radio" name="theme-primary"
                                        id="switcher-primary3">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-5" type="radio" name="theme-primary"
                                        id="switcher-primary4">
                                </div>
                                <div class="form-check switch-select ps-0 mt-1 color-primary-light">
                                    <div class="theme-container-primary"></div>
                                    <div class="pickr-container-primary"></div>
                                </div>
                            </div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Theme Background:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-1" type="radio"
                                        name="theme-background" id="switcher-background">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-2" type="radio"
                                        name="theme-background" id="switcher-background1">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-3" type="radio" name="theme-background"
                                        id="switcher-background2">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-4" type="radio"
                                        name="theme-background" id="switcher-background3">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-5" type="radio"
                                        name="theme-background" id="switcher-background4">
                                </div>
                                <div class="form-check switch-select ps-0 mt-1 tooltip-static-demo color-bg-transparent">
                                    <div class="theme-container-background"></div>
                                    <div class="pickr-container-background"></div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-image mb-3">
                            <p class="switcher-style-head">Menu With Background Image:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img1" type="radio"
                                        name="theme-background" id="switcher-bg-img">
                                </div>
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img2" type="radio"
                                        name="theme-background" id="switcher-bg-img1">
                                </div>
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img3" type="radio" name="theme-background"
                                        id="switcher-bg-img2">
                                </div>
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img4" type="radio"
                                        name="theme-background" id="switcher-bg-img3">
                                </div>
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img5" type="radio"
                                        name="theme-background" id="switcher-bg-img4">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between canvas-footer flex-wrap">
                    <a href="javascript:void(0);" id="reset-all" class="btn btn-danger w-100 m-1">Reset</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Switcher -->


    <!-- Loader -->
    <div id="loader" >
        <img src="../assets/images/media/loader.svg" alt="">
    </div>
    <!-- Loader -->

    <div class="page">
         <!-- app-header -->
         <header class="app-header">

            <!-- Start::main-header-container -->
            <div class="main-header-container container-fluid">

                <!-- Start::header-content-left -->
                <div class="header-content-left">

                    <!-- Start::header-element -->
                    <!--
                    <div class="header-element">



                    </div>
                     -->
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element">
                        <!-- Start::header-link -->
                        <a aria-label="Hide Sidebar" class="sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle" data-bs-toggle="sidebar" href="javascript:void(0);">
                            <i class="header-icon fe fe-align-left"></i>
                        </a>
                        <div class="main-header-center d-none d-lg-block">
                            <input class="form-control" placeholder="Search for anything..." type="search"> <button class="btn"><i class="fa fa-search d-none d-md-block"></i></button>
                        </div>
                        <!-- End::header-link -->
                    </div>
                    <!-- End::header-element -->

                </div>
                <!-- End::header-content-left -->

                <!-- Start::header-content-right -->
                <div class="header-content-right">

                    <div class="header-element Search-element d-block d-lg-none">
                        <!-- Start::header-link|dropdown-toggle -->
                        <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-auto-close="outside" data-bs-toggle="dropdown">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"  class="header-link-icon"><path d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z"/></svg>
                        </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <ul class="main-header-dropdown dropdown-menu dropdown-menu-end Search-element-dropdown" data-popper-placement="none">
                            <li>
                                <div class="input-group w-100 p-2">
                                    <input type="text" class="form-control" placeholder="Search....">
                                    <div class="btn btn-primary">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <!-- Start::header-element -->
                    <div class="header-element country-selector">
                        <!-- Start::header-link|dropdown-toggle -->
                        <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-auto-close="outside" data-bs-toggle="dropdown">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="flag-icon1"> <circle cx="256" cy="256" r="256" fill="#f0f0f0"></circle> <g fill="#0052b4"> <path d="M52.92 100.142c-20.109 26.163-35.272 56.318-44.101 89.077h133.178L52.92 100.142zM503.181 189.219c-8.829-32.758-23.993-62.913-44.101-89.076l-89.075 89.076h133.176zM8.819 322.784c8.83 32.758 23.993 62.913 44.101 89.075l89.074-89.075H8.819zM411.858 52.921c-26.163-20.109-56.317-35.272-89.076-44.102v133.177l89.076-89.075zM100.142 459.079c26.163 20.109 56.318 35.272 89.076 44.102V370.005l-89.076 89.074zM189.217 8.819c-32.758 8.83-62.913 23.993-89.075 44.101l89.075 89.075V8.819zM322.783 503.181c32.758-8.83 62.913-23.993 89.075-44.101l-89.075-89.075v133.176zM370.005 322.784l89.075 89.076c20.108-26.162 35.272-56.318 44.101-89.076H370.005z"></path> </g> <g fill="#d80027"> <path d="M509.833 222.609H289.392V2.167A258.556 258.556 0 00256 0c-11.319 0-22.461.744-33.391 2.167v220.441H2.167A258.556 258.556 0 000 256c0 11.319.744 22.461 2.167 33.391h220.441v220.442a258.35 258.35 0 0066.783 0V289.392h220.442A258.533 258.533 0 00512 256c0-11.317-.744-22.461-2.167-33.391z"></path> <path d="M322.783 322.784L437.019 437.02a256.636 256.636 0 0015.048-16.435l-97.802-97.802h-31.482v.001zM189.217 322.784h-.002L74.98 437.019a256.636 256.636 0 0016.435 15.048l97.802-97.804v-31.479zM189.217 189.219v-.002L74.981 74.98a256.636 256.636 0 00-15.048 16.435l97.803 97.803h31.481zM322.783 189.219L437.02 74.981a256.328 256.328 0 00-16.435-15.047l-97.802 97.803v31.482z"></path> </g> </svg>
                        </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <ul class="main-header-dropdown dropdown-menu dropdown-menu-end country-dropdown" data-popper-placement="none">
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                    <span>
                                        <img src="../assets/images/flags/french_flag.jpg" alt="img" class="avatar avatar-xs lh-1 me-2">
                                    </span>
                                    French
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                    <span>
                                        <img src="../assets/images/flags/germany_flag.jpg" alt="img" class="avatar avatar-xs lh-1 me-2">
                                    </span>
                                    German
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                    <span>
                                        <img src="../assets/images/flags/italy_flag.jpg" alt="img" class="avatar avatar-xs lh-1 me-2">
                                    </span>
                                    Italian
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                    <span>
                                        <img src="../assets/images/flags/russia_flag.jpg" alt="img" class="avatar avatar-xs lh-1 me-2">
                                    </span>
                                    Russian
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                    <span>
                                        <img src="../assets/images/flags/spain_flag.jpg" alt="img" class="avatar avatar-xs lh-1 me-2">
                                    </span>
                                    Spanish
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element header-theme-mode">
                        <!-- Start::header-link|layout-setting -->
                        <a href="javascript:void(0);" class="header-link layout-setting">
                            <span class="light-layout">
                                <!-- Start::header-link-icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" height="24" viewBox="0 -960 960 960" width="24"><path d="M480-120q-150 0-255-105T120-480q0-150 105-255t255-105q14 0 27.5 1t26.5 3q-41 29-65.5 75.5T444-660q0 90 63 153t153 63q55 0 101-24.5t75-65.5q2 13 3 26.5t1 27.5q0 150-105 255T480-120Zm0-80q88 0 158-48.5T740-375q-20 5-40 8t-40 3q-123 0-209.5-86.5T364-660q0-20 3-40t8-40q-78 32-126.5 102T200-480q0 116 82 198t198 82Zm-10-270Z"/></svg>
                                <!-- End::header-link-icon -->
                            </span>
                            <span class="dark-layout">
                                <!-- Start::header-link-icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" fill="currentColor" height="24" viewBox="0 -960 960 960" width="24"><path d="M480-360q50 0 85-35t35-85q0-50-35-85t-85-35q-50 0-85 35t-35 85q0 50 35 85t85 35Zm0 80q-83 0-141.5-58.5T280-480q0-83 58.5-141.5T480-680q83 0 141.5 58.5T680-480q0 83-58.5 141.5T480-280ZM200-440H40v-80h160v80Zm720 0H760v-80h160v80ZM440-760v-160h80v160h-80Zm0 720v-160h80v160h-80ZM256-650l-101-97 57-59 96 100-52 56Zm492 496-97-101 53-55 101 97-57 59Zm-98-550 97-101 59 57-100 96-56-52ZM154-212l101-97 55 53-97 101-59-57Zm326-268Z"/></svg>
                                <!-- End::header-link-icon -->
                            </span>
                        </a>
                        <!-- End::header-link|layout-setting -->
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element messages-dropdown">
                        <!-- Start::header-link|dropdown-toggle -->
                        <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-auto-close="outside" data-bs-toggle="dropdown">
                            <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M22 6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6zm-2 0l-8 5-8-5h16zm0 12H4V8l8 5 8-5v10z"/></svg>
                            <span class="pulse-danger"></span>
                        </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <!-- Start::main-header-dropdown -->
                        <div class="main-header-dropdown dropdown-menu dropdown-menu-end main-header-message" data-popper-placement="none">
                            <div class="menu-header-content bg-primary text-fixed-white">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="mb-0 fs-15 fw-semibold text-fixed-white">Messages</h6>
                                    <span class="badge rounded-pill bg-warning pt-1 text-fixed-black">Mark All Read</span>
                                </div>
                                <p class="dropdown-title-text subtext mb-0 text-fixed-white op-6 pb-0 fs-12 ">You have 4 unread messages</p>
                            </div>
                            <div><hr class="dropdown-divider"></div>
                            <ul class="list-unstyled mb-0" id="header-cart-items-scroll">
                                <li class="dropdown-item">
                                    <div class="d-flex messages">
                                        <span class="avatar avatar-md me-2 online avatar-rounded flex-shrink-0">
                                            <img src="../assets/images/faces/12.jpg" alt="img">
                                        </span>
                                        <div>
                                            <div class="d-flex">
                                                <a href="chat.html"><h6 class="mb-1 name">Petey Cruiser</h6></a>
                                            </div>
                                            <p class="mb-0 fs-12 desc">I'm sorry but i'm not sure how to help you with that......</p>
                                            <p class="time mb-0 text-start float-start ms-2 mt-2">Mar 15 3:55 PM</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex messages">
                                        <span class="avatar avatar-md me-2 online avatar-rounded flex-shrink-0">
                                            <img src="../assets/images/faces/3.jpg" alt="img">
                                        </span>
                                        <div>
                                            <div class="d-flex">
                                                <a href="chat.html"><h6 class="mb-1 name">Jimmy Changa</h6></a>
                                            </div>
                                            <p class="mb-0 fs-12 desc">All set ! Now, time to get to you now......</p>
                                            <p class="time mb-0 text-start float-start ms-2 mt-2">Mar 06 01:12 AM</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex messages">
                                        <span class="avatar avatar-md me-2 online avatar-rounded flex-shrink-0">
                                            <img src="../assets/images/faces/5.jpg" alt="img">
                                        </span>
                                        <div>
                                            <div class="d-flex">
                                                <a href="chat.html"><h6 class="mb-1 name">Graham Cracker</h6></a>
                                            </div>
                                            <p class="mb-0 fs-12 desc">Are you ready to pickup your Delivery...</p>
                                            <p class="time mb-0 text-start float-start ms-2 mt-2">Feb 25 10:35 AM</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex messages">
                                        <span class="avatar avatar-md me-2 online avatar-rounded flex-shrink-0">
                                            <img src="../assets/images/faces/4.jpg" alt="img">
                                        </span>
                                        <div>
                                            <div class="d-flex">
                                                <a href="chat.html"><h6 class="mb-1 name">Donatella Nobatti</h6></a>
                                            </div>
                                            <p class="mb-0 fs-12 desc">Here are some products ...</p>
                                            <p class="time mb-0 text-start float-start ms-2 mt-2">Feb 12 05:12 PM</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex messages">
                                        <span class="avatar avatar-md me-2 online avatar-rounded flex-shrink-0">
                                            <img src="../assets/images/faces/1.jpg" alt="img">
                                        </span>
                                        <div>
                                            <div class="d-flex">
                                                <a href="chat.html"><h6 class="mb-1 name">Anne Fibbiyon</h6></a>
                                            </div>
                                            <p class="mb-0 fs-12 desc">I'm sorry but i'm not sure how...</p>
                                            <p class="time mb-0 text-start float-start ms-2 mt-2">Jan 29 03:16 PM</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="text-center dropdown-footer">
                                <a href="checkout.html" class="text-primary fs-13">VIEW ALL</a>
                            </div>
                        </div>
                        <!-- End::main-header-dropdown -->
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element notifications-dropdown main-header-notification">
                        <!-- Start::header-link|dropdown-toggle -->
                        <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" id="messageDropdown" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon"  height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.9 2 2 2zm6-6v-5c0-3.07-1.63-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.64 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2zm-2 1H8v-6c0-2.48 1.51-4.5 4-4.5s4 2.02 4 4.5v6z"/></svg>
                            <span class="pulse-success"></span>
                        </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <!-- Start::main-header-dropdown -->
                        <div class="main-header-dropdown dropdown-menu dropdown-menu-end main-header-message" data-popper-placement="none">
                            <div class="menu-header-content bg-primary text-fixed-white">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="mb-0 fs-15 fw-semibold text-fixed-white">Notifications</h6>
                                    <span class="badge rounded-pill bg-warning pt-1 text-fixed-black">Mark All Read</span>
                                </div>
                                <p class="dropdown-title-text subtext mb-0 text-fixed-white op-6 pb-0 fs-12 ">You have 4 unread Notifications</p>
                            </div>
                            <div><hr class="dropdown-divider"></div>
                            <ul class="list-unstyled mb-0" id="header-notification-scroll">
                                <li class="dropdown-item px-3">
                                    <div class="d-flex">
                                        <span class="avatar avatar-md me-2 avatar-rounded flex-shrink-0 bg-pink">
                                            <i class="la la-file-alt fs-20"></i>
                                        </span>
                                        <div class="ms-3">
                                            <a href="mail.html"><h5 class="notification-label text-dark mb-1">New files available</h5></a>
                                            <div class="notification-subtext">10 hour ago</div>
                                        </div>
                                        <div class="ms-auto" >
                                            <a href="mail.html"><i class="las la-angle-right text-end text-muted icon"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item px-3">
                                    <div class="d-flex">
                                        <span class="avatar avatar-md me-2 avatar-rounded flex-shrink-0 bg-purple">
                                            <i class="la la-gem fs-20"></i>
                                        </span>
                                        <div class="ms-3">
                                            <a href="mail.html"><h5 class="notification-label text-dark mb-1">Updates Available</h5></a>
                                            <div class="notification-subtext">2 days ago</div>
                                        </div>
                                        <div class="ms-auto" >
                                            <a href="mail.html"><i class="las la-angle-right text-end text-muted icon"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item px-3">
                                    <div class="d-flex">
                                        <span class="avatar avatar-md me-2 avatar-rounded flex-shrink-0 bg-success">
                                            <i class="la la-shopping-basket fs-20"></i>
                                        </span>
                                        <div class="ms-3">
                                            <a href="mail.html"><h5 class="notification-label text-dark mb-1">New Order Received</h5></a>
                                            <div class="notification-subtext">1 hour ago</div>
                                        </div>
                                        <div class="ms-auto" >
                                            <a href="mail.html"><i class="las la-angle-right text-end text-muted icon"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item px-3">
                                    <div class="d-flex">
                                        <span class="avatar avatar-md me-2 avatar-rounded flex-shrink-0 bg-warning">
                                            <i class="la la-envelope-open fs-20 text-fixed-white"></i>
                                        </span>
                                        <div class="ms-3">
                                            <a href="mail.html"><h5 class="notification-label text-dark mb-1">New review received</h5></a>
                                            <div class="notification-subtext">1 day ago</div>
                                        </div>
                                        <div class="ms-auto" >
                                            <a href="mail.html"><i class="las la-angle-right text-end text-muted icon"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item px-3">
                                    <div class="d-flex">
                                        <span class="avatar avatar-md me-2 avatar-rounded flex-shrink-0 bg-danger">
                                            <i class="la la-user-check fs-20"></i>
                                        </span>
                                        <div class="ms-3">
                                            <a href="mail.html"><h5 class="notification-label text-dark mb-1">22 verified registrations</h5></a>
                                            <div class="notification-subtext">2 hour ago</div>
                                        </div>
                                        <div class="ms-auto" >
                                            <a href="mail.html"><i class="las la-angle-right text-end text-muted icon"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item px-3">
                                    <div class="d-flex">
                                        <span class="avatar avatar-md me-2 avatar-rounded flex-shrink-0 bg-primary">
                                            <i class="la la-check-circle fs-20"></i>
                                        </span>
                                        <div class="ms-3">
                                            <a href="mail.html"><h5 class="notification-label text-dark mb-1">Project has been approved</h5></a>
                                            <div class="notification-subtext">4 hour ago</div>
                                        </div>
                                        <div class="ms-auto" >
                                            <a href="mail.html"><i class="las la-angle-right text-end text-muted icon"></i></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="text-center dropdown-footer">
                                <a href="checkout.html" class="text-primary fs-13">VIEW ALL</a>
                            </div>
                        </div>
                        <!-- End::main-header-dropdown -->
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element header-fullscreen">
                        <!-- Start::header-link -->
                        <a onclick="openFullscreen();" href="javascript:void(0);" class="header-link">
                            <svg xmlns="http://www.w3.org/2000/svg" class="full-screen-open full-screen-icon header-link-icon" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M7 14H5v5h5v-2H7v-3zm-2-4h2V7h3V5H5v5zm12 7h-3v2h5v-5h-2v3zM14 5v2h3v3h2V5h-5z"/></svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="full-screen-close full-screen-icon header-link-icon d-none" fill="currentColor" height="24" viewBox="0 -960 960 960" width="24"><path d="M320-200v-120H200v-80h200v200h-80Zm240 0v-200h200v80H640v120h-80ZM200-560v-80h120v-120h80v200H200Zm360 0v-200h80v120h120v80H560Z"/></svg>
                        </a>
                        <!-- End::header-link -->
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element header-sidebar">
                        <!-- Start::header-link-->
                        <a href="javascript:void(0);" class="header-link" data-bs-toggle="offcanvas" data-bs-target="#header-sidebar">
                            <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" ><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                        </a>
                        <!-- End::header-link-->
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element headerProfile-dropdown">
                        <!-- Start::header-link|dropdown-toggle -->
                        <a href="javascript:void(0);" class="header-link dropdown-toggle" id="mainHeaderProfile" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                            <img src="../assets/images/faces/6.jpg" alt="img" width="37" height="37" class="rounded-circle">
                        </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <ul class="main-header-dropdown dropdown-menu pt-0 header-profile-dropdown dropdown-menu-end main-profile-menu" aria-labelledby="mainHeaderProfile">
                            <li>
                                <div class="main-header-profile bg-primary menu-header-content text-fixed-white">
                                    <div class="my-auto">
                                        <h6 class="mb-0 lh-1 text-fixed-white">Petey Cruiser</h6><span class="fs-11 op-7 lh-1">Premium Member</span>
                                    </div>
                                </div>
                            </li>
                            <li><a class="dropdown-item d-flex" href="profile.html"><i class="bx bx-user-circle fs-18 me-2 op-7"></i>Profile</a></li>
                            <li><a class="dropdown-item d-flex" href="editprofile.html"><i class="bx bx-cog fs-18 me-2 op-7"></i>Edit Profile </a></li>
                            <li><a class="dropdown-item d-flex border-block-end" href="mail.html"><i class="bx bxs-inbox fs-18 me-2 op-7"></i>Inbox</a></li>
                            <li><a class="dropdown-item d-flex" href="chat.html"><i class="bx bx-envelope fs-18 me-2 op-7"></i>Messages</a></li>
                            <li><a class="dropdown-item d-flex border-block-end" href="editprofile.html"><i class="bx bx-slider-alt fs-18 me-2 op-7"></i>Account Settings</a></li>
                            <li><a class="dropdown-item d-flex" href="signin.html"><i class="bx bx-log-out fs-18 me-2 op-7"></i>Sign Out</a></li>
                        </ul>
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element">
                        <!-- Start::header-link|switcher-icon -->
                        <a href="javascript:void(0);" class="header-link switcher-icon" data-bs-toggle="offcanvas" data-bs-target="#switcher-canvas">
                            <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" width="24" height="24" viewBox="0 0 24 24"><path d="M12 16c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4 1.794 4 4 4zm0-6c1.084 0 2 .916 2 2s-.916 2-2 2-2-.916-2-2 .916-2 2-2z"></path><path d="m2.845 16.136 1 1.73c.531.917 1.809 1.261 2.73.73l.529-.306A8.1 8.1 0 0 0 9 19.402V20c0 1.103.897 2 2 2h2c1.103 0 2-.897 2-2v-.598a8.132 8.132 0 0 0 1.896-1.111l.529.306c.923.53 2.198.188 2.731-.731l.999-1.729a2.001 2.001 0 0 0-.731-2.732l-.505-.292a7.718 7.718 0 0 0 0-2.224l.505-.292a2.002 2.002 0 0 0 .731-2.732l-.999-1.729c-.531-.92-1.808-1.265-2.731-.732l-.529.306A8.1 8.1 0 0 0 15 4.598V4c0-1.103-.897-2-2-2h-2c-1.103 0-2 .897-2 2v.598a8.132 8.132 0 0 0-1.896 1.111l-.529-.306c-.924-.531-2.2-.187-2.731.732l-.999 1.729a2.001 2.001 0 0 0 .731 2.732l.505.292a7.683 7.683 0 0 0 0 2.223l-.505.292a2.003 2.003 0 0 0-.731 2.733zm3.326-2.758A5.703 5.703 0 0 1 6 12c0-.462.058-.926.17-1.378a.999.999 0 0 0-.47-1.108l-1.123-.65.998-1.729 1.145.662a.997.997 0 0 0 1.188-.142 6.071 6.071 0 0 1 2.384-1.399A1 1 0 0 0 11 5.3V4h2v1.3a1 1 0 0 0 .708.956 6.083 6.083 0 0 1 2.384 1.399.999.999 0 0 0 1.188.142l1.144-.661 1 1.729-1.124.649a1 1 0 0 0-.47 1.108c.112.452.17.916.17 1.378 0 .461-.058.925-.171 1.378a1 1 0 0 0 .471 1.108l1.123.649-.998 1.729-1.145-.661a.996.996 0 0 0-1.188.142 6.071 6.071 0 0 1-2.384 1.399A1 1 0 0 0 13 18.7l.002 1.3H11v-1.3a1 1 0 0 0-.708-.956 6.083 6.083 0 0 1-2.384-1.399.992.992 0 0 0-1.188-.141l-1.144.662-1-1.729 1.124-.651a1 1 0 0 0 .471-1.108z"></path></svg>
                        </a>
                        <!-- End::header-link|switcher-icon -->
                    </div>
                    <!-- End::header-element -->

                </div>
                <!-- End::header-content-right -->

            </div>
            <!-- End::main-header-container -->

        </header>
        <!-- /app-header -->

        <!-- Start::Off-canvas sidebar-->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="header-sidebar" aria-labelledby="sidebarLabel">
            <div class="offcanvas-header rounded-0">
                <h5 class="fs-14 text-uppercase mb-0 fw-semibold" id="sidebarLabel">Notifications</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body rounded-0 p-0">
                <ul class="nav nav-tabs tab-style-1 d-block" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#chat" aria-current="page" href="#chat" aria-selected="false" role="tab" tabindex="-1"><i class="fe fe-message-circle fs-15 me-2"></i>Chat</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#notifications" href="#notifications" aria-selected="false" role="tab" tabindex="-1"><i class="fe fe-bell fs-15 me-2"></i> Notifications</a>
                    </li>
                    <li class="nav-item mb-0" role="presentation">
                        <a class="nav-link active" data-bs-toggle="tab" data-bs-target="#friends" href="#friends" aria-selected="true" role="tab"><i class="fe fe-users fs-15 me-2"></i>Friends</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane border-start-0 border-end-0 rounded-0 p-0" id="chat" role="tabpanel">
                        <div class="list d-flex align-items-center border-bottom p-3">
                            <div class="">
                                <span class="avatar bg-primary rounded-circle avatar-md">CH</span>
                            </div>
                            <a class="wrapper w-100 ms-3" href="javascript:void(0);" >
                                <p class="mb-0 d-flex ">
                                    <b>New Websites is Created</b>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="fa-regular fa-clock text-muted me-1 fs-11"></i>
                                        <small class="text-muted ms-auto">30 mins ago</small>
                                        <p class="mb-0"></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="list d-flex align-items-center border-bottom p-3">
                            <div class="">
                                <span class="avatar bg-danger rounded-circle avatar-md">N</span>
                            </div>
                            <a class="wrapper w-100 ms-3" href="javascript:void(0);" >
                                <p class="mb-0 d-flex ">
                                    <b>Prepare For the Next Project</b>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="fa-regular fa-clock text-muted me-1 fs-11"></i>
                                        <small class="text-muted ms-auto">2 hours ago</small>
                                        <p class="mb-0"></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="list d-flex align-items-center border-bottom p-3">
                            <div class="">
                                <span class="avatar bg-info rounded-circle avatar-md">S</span>
                            </div>
                            <a class="wrapper w-100 ms-3" href="javascript:void(0);" >
                                <p class="mb-0 d-flex ">
                                    <b>Decide the live Discussion</b>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="fa-regular fa-clock text-muted me-1 fs-11"></i>
                                        <small class="text-muted ms-auto">3 hours ago</small>
                                        <p class="mb-0"></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="list d-flex align-items-center border-bottom p-3">
                            <div class="">
                                <span class="avatar bg-warning rounded-circle avatar-md">K</span>
                            </div>
                            <a class="wrapper w-100 ms-3" href="javascript:void(0);" >
                                <p class="mb-0 d-flex ">
                                    <b>Meeting at 3:00 pm</b>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="fa-regular fa-clock text-muted me-1 fs-11"></i>
                                        <small class="text-muted ms-auto">4 hours ago</small>
                                        <p class="mb-0"></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="list d-flex align-items-center border-bottom p-3">
                            <div class="">
                                <span class="avatar bg-success rounded-circle avatar-md">R</span>
                            </div>
                            <a class="wrapper w-100 ms-3" href="javascript:void(0);" >
                                <p class="mb-0 d-flex ">
                                    <b>Prepare for Presentation</b>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="fa-regular fa-clock text-muted me-1 fs-11"></i>
                                        <small class="text-muted ms-auto">1 day ago</small>
                                        <p class="mb-0"></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="list d-flex align-items-center border-bottom p-3">
                            <div class="">
                                <span class="avatar bg-pink rounded-circle avatar-md">MS</span>
                            </div>
                            <a class="wrapper w-100 ms-3" href="javascript:void(0);" >
                                <p class="mb-0 d-flex ">
                                    <b>Prepare for Presentation</b>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="fa-regular fa-clock text-muted me-1 fs-11"></i>
                                        <small class="text-muted ms-auto">1 day ago</small>
                                        <p class="mb-0"></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="list d-flex align-items-center border-bottom p-3">
                            <div class="">
                                <span class="avatar bg-purple rounded-circle avatar-md">L</span>
                            </div>
                            <a class="wrapper w-100 ms-3" href="javascript:void(0);" >
                                <p class="mb-0 d-flex ">
                                    <b>Prepare for Presentation</b>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="fa-regular fa-clock text-muted me-1 fs-11"></i>
                                        <small class="text-muted ms-auto">45 minutes ago</small>
                                        <p class="mb-0"></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="list d-flex align-items-center p-3">
                            <div class="">
                                <span class="avatar bg-blue rounded-circle avatar-md">U</span>
                            </div>
                            <a class="wrapper w-100 ms-3" href="javascript:void(0);" >
                                <p class="mb-0 d-flex ">
                                    <b>Prepare for Presentation</b>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="fa-regular fa-clock text-muted me-1 fs-11"></i>
                                        <small class="text-muted ms-auto">2 days ago</small>
                                        <p class="mb-0"></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="tab-pane border-start-0 border-end-0 rounded-0 p-0" id="notifications" role="tabpanel">
                        <div class="list-group list-group-flush ">
                            <div class="list-group-item d-flex  align-items-center">
                                <span class="avatar avatar-lg online avatar-rounded flex-shrink-0">
                                    <img src="../assets/images/faces/1.jpg" alt="img">
                                </span>
                                <div class="ms-3">
                                    <strong>Madeleine</strong> Hey! there I' am available....
                                    <div class="small text-muted">
                                        3 hours ago
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item d-flex  align-items-center">
                                <span class="avatar avatar-lg online avatar-rounded flex-shrink-0">
                                    <img src="../assets/images/faces/2.jpg" alt="img">
                                </span>
                                <div class="ms-3">
                                    <strong>Anthony</strong> New product Launching...
                                    <div class="small text-muted">
                                        5 hour ago
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item d-flex  align-items-center">
                                <span class="avatar avatar-lg avatar-rounded flex-shrink-0">
                                    <img src="../assets/images/faces/3.jpg" alt="img">
                                </span>
                                <div class="ms-3">
                                    <strong>Olivia</strong> New Schedule Realease......
                                    <div class="small text-muted">
                                        45 minutes ago
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item d-flex  align-items-center">
                                <span class="avatar avatar-lg avatar-rounded flex-shrink-0">
                                    <img src="../assets/images/faces/4.jpg" alt="img">
                                </span>
                                <div class="ms-3">
                                    <strong>Madeleine</strong> Hey! there I' am available....
                                    <div class="small text-muted">
                                        3 hours ago
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item d-flex  align-items-center">
                                <span class="avatar avatar-lg avatar-rounded flex-shrink-0">
                                    <img src="../assets/images/faces/5.jpg" alt="img">
                                </span>
                                <div class="ms-3">
                                    <strong>Anthony</strong> New product Launching...
                                    <div class="small text-muted">
                                        5 hour ago
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item d-flex  align-items-center">
                                <span class="avatar avatar-lg avatar-rounded flex-shrink-0">
                                    <img src="../assets/images/faces/6.jpg" alt="img">
                                </span>
                                <div class="ms-3">
                                    <strong>Olivia</strong> New Schedule Realease......
                                    <div class="small text-muted">
                                        45 minutes ago
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item d-flex  align-items-center">
                                <span class="avatar avatar-lg avatar-rounded flex-shrink-0">
                                    <img src="../assets/images/faces/7.jpg" alt="img">
                                </span>
                                <div class="ms-3">
                                    <strong>Olivia</strong> Hey! there I' am available....
                                    <div class="small text-muted">
                                        12 minutes ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane border-start-0 border-end-0 rounded-0 p-0 active show" id="friends" role="tabpanel">
                        <div class="list-group list-group-flush ">
                            <div class="list-group-item d-flex  align-items-center">
                                <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                                    <img src="../assets/images/faces/1.jpg" alt="img">
                                </span>
                                <div class="ms-2">
                                    <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Mozelle Belt</div>
                                </div>
                                <div class="ms-auto">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                                </div>
                            </div>
                            <div class="list-group-item d-flex  align-items-center">
                                <span class="avatar avatar-md avatar-rounded flex-shrink-0">
                                    <img src="../assets/images/faces/2.jpg" alt="img">
                                </span>
                                <div class="ms-2">
                                    <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Florinda Carasco</div>
                                </div>
                                <div class="ms-auto">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel" ><i class="fab fa-facebook-messenger"></i></a>
                                </div>
                            </div>
                            <div class="list-group-item d-flex  align-items-center">
                                <span class="avatar avatar-md avatar-rounded flex-shrink-0">
                                    <img src="../assets/images/faces/5.jpg" alt="img">
                                </span>
                                <div class="ms-2">
                                    <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Alina Bernier</div>
                                </div>
                                <div class="ms-auto">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                                </div>
                            </div>
                            <div class="list-group-item d-flex  align-items-center">
                                <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                                    <img src="../assets/images/faces/6.jpg" alt="img">
                                </span>
                                <div class="ms-2">
                                    <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Zula Mclaughin</div>
                                </div>
                                <div class="ms-auto">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                                </div>
                            </div>
                            <div class="list-group-item d-flex  align-items-center">
                                <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                                    <img src="../assets/images/faces/8.jpg" alt="img">
                                </span>
                                <div class="ms-2">
                                    <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Isidro Heide</div>
                                </div>
                                <div class="ms-auto">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                                </div>
                            </div>
                            <div class="list-group-item d-flex  align-items-center">
                                <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                                    <img src="../assets/images/faces/8.jpg" alt="img">
                                </span>
                                <div class="ms-2">
                                    <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Mozelle Belt</div>
                                </div>
                                <div class="ms-auto">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-light" ><i class="fab fa-facebook-messenger"></i></a>
                                </div>
                            </div>
                            <div class="list-group-item d-flex  align-items-center">
                                <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                                    <img src="../assets/images/faces/9.jpg" alt="img">
                                </span>
                                <div class="ms-2">
                                    <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Florinda Carasco</div>
                                </div>
                                <div class="ms-auto">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                                </div>
                            </div>
                            <div class="list-group-item d-flex  align-items-center">
                                <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                                    <img src="../assets/images/faces/10.jpg" alt="img">
                                </span>
                                <div class="ms-2">
                                    <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Alina Bernier</div>
                                </div>
                                <div class="ms-auto">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-light" ><i class="fab fa-facebook-messenger"></i></a>
                                </div>
                            </div>
                            <div class="list-group-item d-flex  align-items-center">
                                <span class="avatar avatar-md avatar-rounded flex-shrink-0">
                                    <img src="../assets/images/faces/11.jpg" alt="img">
                                </span>
                                <div class="ms-2">
                                    <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Zula Mclaughin</div>
                                </div>
                                <div class="ms-auto">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel" ><i class="fab fa-facebook-messenger"></i></a>
                                </div>
                            </div>
                            <div class="list-group-item d-flex  align-items-center">
                                <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                                    <img src="../assets/images/faces/12.jpg" alt="img">
                                </span>
                                <div class="ms-2">
                                    <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Isidro Heide</div>
                                </div>
                                <div class="ms-auto">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-light" ><i class="fab fa-facebook-messenger"></i></a>
                                </div>
                            </div>
                            <div class="list-group-item d-flex  align-items-center">
                                <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                                    <img src="../assets/images/faces/2.jpg" alt="img">
                                </span>
                                <div class="ms-2">
                                    <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Florinda Carasco</div>
                                </div>
                                <div class="ms-auto">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                                </div>
                            </div>
                            <div class="list-group-item d-flex  align-items-center">
                                <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                                    <img src="../assets/images/faces/2.jpg" alt="img">
                                </span>
                                <div class="ms-2">
                                    <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Alina Bernier</div>
                                </div>
                                <div class="ms-auto">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                                </div>
                            </div>
                            <div class="list-group-item d-flex  align-items-center">
                                <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                                    <img src="../assets/images/faces/3.jpg" alt="img">
                                </span>
                                <div class="ms-2">
                                    <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Zula Mclaughin</div>
                                </div>
                                <div class="ms-auto">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                                </div>
                            </div>
                            <div class="list-group-item d-flex  align-items-center">
                                <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                                    <img src="../assets/images/faces/4.jpg" alt="img">
                                </span>
                                <div class="ms-2">
                                    <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Isidro Heide</div>
                                </div>
                                <div class="ms-auto">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        <!-- End::Off-canvas sidebar-->

        <!-- Message Modal -->
        <div class="modal fade" id="chatmodel" tabindex="-1" role="dialog"  aria-hidden="true">
            <div class="modal-dialog modal-dialog-right chatbox" role="document">
                <div class="modal-content chat border-0">
                    <div class="card overflow-hidden mb-0 border-0 shadow-none">
                        <!-- action-header -->
                        <div class="action-header clearfix">
                            <div class="float-start hidden-xs d-flex">
                                <div class="avatar avatar-lg rounded-circle me-3">
                                    <img src="../assets/images/faces/6.jpg" class="rounded-circle user_img" alt="img">
                                </div>
                                <div class="align-items-center mt-2">
                                    <h5 class="text-fixed-white mb-0">Daneil Scott</h5>
                                    <span class="dot-label bg-success"></span><span class="me-3 text-fixed-white">online</span>
                                </div>
                            </div>
                            <ul class="ah-actions actions align-items-center float-end">
                                <li class="call-icon">
                                    <a href="" class="d-done d-md-block phone-button" data-bs-toggle="modal" data-bs-target="#audiomodal">
                                        <i class="fe fe-phone"></i>
                                    </a>
                                </li>
                                <li class="video-icon">
                                    <a href="" class="d-done d-md-block phone-button" data-bs-toggle="modal" data-bs-target="#videomodal">
                                        <i class="fe fe-video"></i>
                                    </a>
                                </li>
                                <li class="dropdown">
                                    <a href="" data-bs-toggle="dropdown" aria-expanded="true">
                                        <i class="fe fe-more-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li class="dropdown-item"><i class="fa fa-user-circle"></i> View profile</li>
                                        <li class="dropdown-item"><i class="fa fa-users"></i>Add friends</li>
                                        <li class="dropdown-item"><i class="fa fa-plus"></i> Add to group</li>
                                        <li class="dropdown-item"><i class="fa fa-ban"></i> Block</li>
                                    </ul>
                                </li>
                                <li>
                                    <a href=""  class="" data-bs-dismiss="modal" aria-label="Close">
                                        <i class="fe fe-x-circle text-fixed-white"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- action-header end -->

                        <!-- msg_card_body -->
                        <div class="card-body msg_card_body">
                            <div class="chat-box-single-line">
                                <abbr class="timestamp">February 1st, 2019</abbr>
                            </div>
                            <div class="d-flex justify-content-start">
                                <div class="img_cont_msg">
                                    <img src="../assets/images/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
                                </div>
                                <div class="msg_cotainer">
                                    Hi, how are you Jenna Side?
                                    <span class="msg_time">8:40 AM, Today</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end ">
                                <div class="msg_cotainer_send">
                                    Hi Connor Paige i am good tnx how about you?
                                    <span class="msg_time_send">8:55 AM, Today</span>
                                </div>
                                <div class="img_cont_msg">
                                    <img src="../assets/images/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
                                </div>
                            </div>
                            <div class="d-flex justify-content-start ">
                                <div class="img_cont_msg">
                                    <img src="../assets/images/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
                                </div>
                                <div class="msg_cotainer">
                                    I am good too, thank you for your chat template
                                    <span class="msg_time">9:00 AM, Today</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end ">
                                <div class="msg_cotainer_send">
                                    You welcome Connor Paige
                                    <span class="msg_time_send">9:05 AM, Today</span>
                                </div>
                                <div class="img_cont_msg">
                                    <img src="../assets/images/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
                                </div>
                            </div>
                            <div class="d-flex justify-content-start ">
                                <div class="img_cont_msg">
                                    <img src="../assets/images/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
                                </div>
                                <div class="msg_cotainer">
                                    Yo, Can you update Views?
                                    <span class="msg_time">9:07 AM, Today</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mb-4">
                                <div class="msg_cotainer_send">
                                    But I must explain to you how all this mistaken  born and I will give
                                    <span class="msg_time_send">9:10 AM, Today</span>
                                </div>
                                <div class="img_cont_msg">
                                    <img src="../assets/images/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
                                </div>
                            </div>
                            <div class="d-flex justify-content-start ">
                                <div class="img_cont_msg">
                                    <img src="../assets/images/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
                                </div>
                                <div class="msg_cotainer">
                                    Yo, Can you update Views?
                                    <span class="msg_time">9:07 AM, Today</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mb-4">
                                <div class="msg_cotainer_send">
                                    But I must explain to you how all this mistaken  born and I will give
                                    <span class="msg_time_send">9:10 AM, Today</span>
                                </div>
                                <div class="img_cont_msg">
                                    <img src="../assets/images/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
                                </div>
                            </div>
                            <div class="d-flex justify-content-start ">
                                <div class="img_cont_msg">
                                    <img src="../assets/images/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
                                </div>
                                <div class="msg_cotainer">
                                    Yo, Can you update Views?
                                    <span class="msg_time">9:07 AM, Today</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mb-4">
                                <div class="msg_cotainer_send">
                                    But I must explain to you how all this mistaken  born and I will give
                                    <span class="msg_time_send">9:10 AM, Today</span>
                                </div>
                                <div class="img_cont_msg">
                                    <img src="../assets/images/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
                                </div>
                            </div>
                            <div class="d-flex justify-content-start">
                                <div class="img_cont_msg">
                                    <img src="../assets/images/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
                                </div>
                                <div class="msg_cotainer">
                                    Okay Bye, text you later..
                                    <span class="msg_time">9:12 AM, Today</span>
                                </div>
                            </div>
                        </div>
                        <!-- msg_card_body end -->
                        <!-- card-footer -->
                        <div class="card-footer border-top">
                            <div class="msb-reply d-flex">
                                <div class="input-group">
                                    <input type="text" class="form-control " placeholder="Typing....">
                                    <button type="button" class="btn btn-primary ">
                                        <i class="far fa-paper-plane" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div><!-- card-footer end -->
                    </div>
                </div>
            </div>
        </div>
        <!--End modal -->

        <!--Video Modal -->
        <div id="videomodal" class="modal fade">
            <div class="modal-dialog" role="document">
                <div class="modal-content bg-fixed-dark border-0">
                    <div class="modal-body mx-auto text-center p-5">
                        <h5 class="text-fixed-white">Valex Video call</h5>
                        <img src="../assets/images/faces/6.jpg" class="rounded-circle user-img-circle h-8 w-8 mt-4 mb-3" alt="img">
                        <h4 class="mb-1 fw-semibold text-fixed-white">Daneil Scott</h4>
                        <h6 class="loading text-fixed-white">Calling...</h6>
                        <div class="mt-5">
                            <div class="row">
                                <div class="col-4">
                                    <a class="icon icon-shape rounded-circle mb-0" href="javascript:void(0);">
                                        <i class="fas fa-video-slash"></i>
                                    </a>
                                </div>
                                <div class="col-4">
                                    <a class="icon icon-shape rounded-circle text-fixed-white mb-0" href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close">
                                        <i class="fas fa-phone bg-danger text-fixed-white"></i>
                                    </a>
                                </div>
                                <div class="col-4">
                                    <a class="icon icon-shape rounded-circle mb-0" href="javascript:void(0);">
                                        <i class="fas fa-microphone-slash"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- modal-body -->
                </div>
            </div><!-- modal-dialog -->
        </div>
        <!--End modal -->

        <!-- Audio Modal -->
        <div id="audiomodal" class="modal fade">
            <div class="modal-dialog" role="document">
                <div class="modal-content border-0">
                    <div class="modal-body mx-auto text-center p-5">
                        <h6>Valex Voice call</h6>
                        <img src="../assets/images/faces/6.jpg" class="rounded-circle user-img-circle h-8 w-8 mt-4 mb-3" alt="img">
                        <h5 class="mb-1 fw-medium">Daneil Scott</h5>
                        <h6 class="loading">Calling...</h6>
                        <div class="mt-5">
                            <div class="row">
                                <div class="col-4">
                                    <a class="icon icon-shape rounded-circle mb-0" href="javascript:void(0);">
                                        <i class="fas fa-volume-up bg-light text-dark"></i>
                                    </a>
                                </div>
                                <div class="col-4">
                                    <a class="icon icon-shape rounded-circle text-fixed-white mb-0" href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close">
                                        <i class="fas fa-phone text-fixed-white bg-success"></i>
                                    </a>
                                </div>
                                <div class="col-4">
                                    <a class="icon icon-shape  rounded-circle mb-0" href="javascript:void(0);">
                                        <i class="fas fa-microphone-slash bg-light text-dark"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- modal-body -->
                </div>
            </div><!-- modal-dialog -->
        </div>
        <!--End modal -->
        <!-- Start::app-sidebar -->
        <aside class="app-sidebar sticky" id="sidebar">

            <!-- Start::main-sidebar-header -->

            <!-- End::main-sidebar-header -->

            <!-- Start::main-sidebar -->
            <div class="main-sidebar" id="sidebar-scroll">

                <!-- Start::nav -->
                <nav class="main-menu-container nav nav-pills flex-column sub-open">
                    <div class="slide-left" id="slide-left">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path> </svg>
                    </div>
                    <ul class="main-menu">
                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">Main</span></li>
                        <!-- End::slide__category -->

                        <!-- Start::slide -->
                        <li class="slide">
                            <a href="index.html" class="side-menu__item">
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"/><path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"/></svg>
                                <span class="side-menu__label">Index</span>
                                <span class="badge bg-success ms-auto menu-badge">1</span>
                            </a>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">General</span></li>
                        <!-- End::slide__category -->

                        <!-- Start::slide -->
                        <li class="slide">
                            <a href="icons.html" class="side-menu__item">
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"  viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 4c-4.42 0-8 3.58-8 8s3.58 8 8 8 8-3.58 8-8-3.58-8-8-8zm3.5 4c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5zm-7 0c.83 0 1.5.67 1.5 1.5S9.33 11 8.5 11 7 10.33 7 9.5 7.67 8 8.5 8zm3.5 9.5c-2.33 0-4.32-1.45-5.12-3.5h1.67c.7 1.19 1.97 2 3.45 2s2.76-.81 3.45-2h1.67c-.8 2.05-2.79 3.5-5.12 3.5z" opacity=".3"/><circle cx="15.5" cy="9.5" r="1.5"/><circle cx="8.5" cy="9.5" r="1.5"/><path d="M12 16c-1.48 0-2.75-.81-3.45-2H6.88c.8 2.05 2.79 3.5 5.12 3.5s4.32-1.45 5.12-3.5h-1.67c-.69 1.19-1.97 2-3.45 2zm-.01-14C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"/></svg>
                                <span class="side-menu__label">Icons</span>
                            </a>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5H5v14h14V5zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" opacity=".3"/><path d="M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2zm2 0h14v14H5V5zm2 5h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z"/></svg>
                                <span class="side-menu__label">Charts</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0);">Charts</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Apex Charts
                                        <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="apex-line-charts.html" class="side-menu__item">Line Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-area-charts.html" class="side-menu__item">Area Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-column-charts.html" class="side-menu__item">Column Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-bar-charts.html" class="side-menu__item">Bar Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-mixed-charts.html" class="side-menu__item">Mixed Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-rangearea-charts.html" class="side-menu__item">Range Area Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-timeline-charts.html" class="side-menu__item">Timeline Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-candlestick-charts.html" class="side-menu__item">CandleStick
                                                Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-boxplot-charts.html" class="side-menu__item">Boxplot Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-bubble-charts.html" class="side-menu__item">Bubble Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-scatter-charts.html" class="side-menu__item">Scatter Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-heatmap-charts.html" class="side-menu__item">Heatmap Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-treemap-charts.html" class="side-menu__item">Treemap Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-pie-charts.html" class="side-menu__item">Pie Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-radialbar-charts.html" class="side-menu__item">Radialbar Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-radar-charts.html" class="side-menu__item">Radar Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-polararea-charts.html" class="side-menu__item">Polararea Charts</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a href="chartjs-charts.html" class="side-menu__item">Chartjs Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="echarts.html" class="side-menu__item">Echart Charts</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">Web Apps</span></li>
                        <!-- End::slide__category -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M4 12c0 4.08 3.06 7.44 7 7.93V4.07C7.05 4.56 4 7.92 4 12z" opacity=".3"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.94-.49-7-3.85-7-7.93s3.05-7.44 7-7.93v15.86zm2-15.86c1.03.13 2 .45 2.87.93H13v-.93zM13 7h5.24c.25.31.48.65.68 1H13V7zm0 3h6.74c.08.33.15.66.19 1H13v-1zm0 9.93V19h2.87c-.87.48-1.84.8-2.87.93zM18.24 17H13v-1h5.92c-.2.35-.43.69-.68 1zm1.5-3H13v-1h6.93c-.04.34-.11.67-.19 1z"/></svg>
                                <span class="side-menu__label">Apps</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0);">Apps</a>
                                </li>
                                <li class="slide">
                                    <a href="cards.html" class="side-menu__item">Cards</a>
                                </li>
                                <li class="slide">
                                    <a href="draggable-cards.html" class="side-menu__item">Draggable Cards</a>
                                </li>
                                <li class="slide">
                                    <a href="full-calendar.html" class="side-menu__item">Calendar</a>
                                </li>
                                <li class="slide">
                                    <a href="contacts.html" class="side-menu__item">Contacts</a>
                                </li>
                                <li class="slide">
                                    <a href="notifications.html" class="side-menu__item">Notifications</a>
                                </li>
                                <li class="slide">
                                    <a href="widgets.html" class="side-menu__item">Widgets</a>
                                </li>
                                <li class="slide">
                                    <a href="widget-notification.html" class="side-menu__item">Widget-notification</a>
                                </li>
                                <li class="slide">
                                    <a href="treeview.html" class="side-menu__item">Treeview</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">File Manager
                                        <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="file-manager.html" class="side-menu__item">File-Manager</a>
                                        </li>
                                        <li class="slide">
                                            <a href="file-manager-list.html" class="side-menu__item">File-Manager-List</a>
                                        </li>
                                        <li class="slide">
                                            <a href="file-manager-details.html" class="side-menu__item">File-Manager-details</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M6.26 9L12 13.47 17.74 9 12 4.53z" opacity=".3"/><path d="M19.37 12.8l-7.38 5.74-7.37-5.73L3 14.07l9 7 9-7zM12 2L3 9l1.63 1.27L12 16l7.36-5.73L21 9l-9-7zm0 11.47L6.26 9 12 4.53 17.74 9 12 13.47z"/></svg>
                                <span class="side-menu__label">Elements</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1 mega-menu">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0);">Elements</a>
                                </li>
                                <li class="slide">
                                    <a href="alerts.html" class="side-menu__item">Alerts</a>
                                </li>
                                <li class="slide">
                                    <a href="avatars.html" class="side-menu__item">Avatar</a>
                                </li>
                                <li class="slide">
                                    <a href="breadcrumb.html" class="side-menu__item">Breadcrumb</a>
                                </li>
                                <li class="slide">
                                    <a href="buttons.html" class="side-menu__item">Buttons</a>
                                </li>
                                <li class="slide">
                                    <a href="buttongroup.html" class="side-menu__item">Button Group</a>
                                </li>
                                <li class="slide">
                                    <a href="badge.html" class="side-menu__item">Badge</a>
                                </li>
                                <li class="slide">
                                    <a href="dropdowns.html" class="side-menu__item">Dropdown</a>
                                </li>
                                <li class="slide">
                                    <a href="listgroup.html" class="side-menu__item">List Group</a>
                                </li>
                                <li class="slide">
                                    <a href="navbar.html" class="side-menu__item">Navbar</a>
                                </li>
                                <li class="slide">
                                    <a href="images-figures.html" class="side-menu__item">Images & Figures</a>
                                </li>
                                <li class="slide">
                                    <a href="pagination.html" class="side-menu__item">Pagination</a>
                                </li>
                                <li class="slide">
                                    <a href="popovers.html" class="side-menu__item">Popovers</a>
                                </li>
                                <li class="slide">
                                    <a href="progress.html" class="side-menu__item">Progress</a>
                                </li>
                                <li class="slide">
                                    <a href="spinners.html" class="side-menu__item">Spinners</a>
                                </li>
                                <li class="slide">
                                    <a href="typography.html" class="side-menu__item">Typography</a>
                                </li>
                                <li class="slide">
                                    <a href="tooltips.html" class="side-menu__item">Tooltips</a>
                                </li>
                                <li class="slide">
                                    <a href="toasts.html" class="side-menu__item">Toasts</a>
                                </li>
                                <li class="slide">
                                    <a href="tags.html" class="side-menu__item">Tags</a>
                                </li>
                                <li class="slide">
                                    <a href="navs-tabs.html" class="side-menu__item">Tabs</a>
                                </li>
                                <li class="slide">
                                    <a href="scrollspy.html" class="side-menu__item">Scrollspy</a>
                                </li>
                                <li class="slide">
                                    <a href="object-fit.html" class="side-menu__item">Object Fit</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4c-4.41 0-8 3.59-8 8s3.59 8 8 8c.28 0 .5-.22.5-.5 0-.16-.08-.28-.14-.35-.41-.46-.63-1.05-.63-1.65 0-1.38 1.12-2.5 2.5-2.5H16c2.21 0 4-1.79 4-4 0-3.86-3.59-7-8-7zm-5.5 9c-.83 0-1.5-.67-1.5-1.5S5.67 10 6.5 10s1.5.67 1.5 1.5S7.33 13 6.5 13zm3-4C8.67 9 8 8.33 8 7.5S8.67 6 9.5 6s1.5.67 1.5 1.5S10.33 9 9.5 9zm5 0c-.83 0-1.5-.67-1.5-1.5S13.67 6 14.5 6s1.5.67 1.5 1.5S15.33 9 14.5 9zm4.5 2.5c0 .83-.67 1.5-1.5 1.5s-1.5-.67-1.5-1.5.67-1.5 1.5-1.5 1.5.67 1.5 1.5z" opacity=".3"/><path d="M12 2C6.49 2 2 6.49 2 12s4.49 10 10 10c1.38 0 2.5-1.12 2.5-2.5 0-.61-.23-1.21-.64-1.67-.08-.09-.13-.21-.13-.33 0-.28.22-.5.5-.5H16c3.31 0 6-2.69 6-6 0-4.96-4.49-9-10-9zm4 13h-1.77c-1.38 0-2.5 1.12-2.5 2.5 0 .61.22 1.19.63 1.65.06.07.14.19.14.35 0 .28-.22.5-.5.5-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.14 8 7c0 2.21-1.79 4-4 4z"/><circle cx="6.5" cy="11.5" r="1.5"/><circle cx="9.5" cy="7.5" r="1.5"/><circle cx="14.5" cy="7.5" r="1.5"/><circle cx="17.5" cy="11.5" r="1.5"/></svg>
                                <span class="side-menu__label">Advanced Ui</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0);">Advanced Ui</a>
                                </li>
                                <li class="slide">
                                    <a href="accordions-collpase.html" class="side-menu__item">Accordions</a>
                                </li>
                                <li class="slide">
                                    <a href="carousel.html" class="side-menu__item">Carousel</a>
                                </li>
                                <li class="slide">
                                    <a href="modals-closes.html" class="side-menu__item">Modals</a>
                                </li>
                                <li class="slide">
                                    <a href="timeline.html" class="side-menu__item">Timeline</a>
                                </li>
                                <li class="slide">
                                    <a href="sweet-alerts.html" class="side-menu__item">Sweet Alerts</a>
                                </li>
                                <li class="slide">
                                    <a href="ratings.html" class="side-menu__item">Ratings</a>
                                </li>
                                <li class="slide">
                                    <a href="search.html" class="side-menu__item">Search</a>
                                </li>
                                <li class="slide">
                                    <a href="userlist.html" class="side-menu__item">Userlist</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Blog Pages
                                        <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="blog.html" class="side-menu__item">Blog</a>
                                        </li>
                                        <li class="slide">
                                            <a href="blog-details.html" class="side-menu__item">Blog Details</a>
                                        </li>
                                        <li class="slide">
                                            <a href="blog-post.html" class="side-menu__item">Blog Post</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a href="offcanvas.html" class="side-menu__item">Offcanvas</a>
                                </li>
                                <li class="slide">
                                    <a href="placeholders.html" class="side-menu__item">Placeholders</a>
                                </li>
                                <li class="slide">
                                    <a href="swiperjs.html" class="side-menu__item">Swiper JS</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">Multi Levels</span></li>
                        <!-- End::slide__category -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 9h14V5H5v4zm2-3.5c.83 0 1.5.67 1.5 1.5S7.83 8.5 7 8.5 5.5 7.83 5.5 7 6.17 5.5 7 5.5zM5 19h14v-4H5v4zm2-3.5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5z" opacity=".3"/><path d="M20 13H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1v-6c0-.55-.45-1-1-1zm-1 6H5v-4h14v4zm-12-.5c.83 0 1.5-.67 1.5-1.5s-.67-1.5-1.5-1.5-1.5.67-1.5 1.5.67 1.5 1.5 1.5zM20 3H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1zm-1 6H5V5h14v4zM7 8.5c.83 0 1.5-.67 1.5-1.5S7.83 5.5 7 5.5 5.5 6.17 5.5 7 6.17 8.5 7 8.5z"/></svg>
                                <span class="side-menu__label">Menu Levels</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0);">Menu Levels</a>
                                </li>
                                <li class="slide">
                                    <a href="javascript:void(0);" class="side-menu__item">Level-1</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Level-2
                                        <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="javascript:void(0);" class="side-menu__item">Level-2-1</a>
                                        </li>
                                        <li class="slide has-sub">
                                            <a href="javascript:void(0);" class="side-menu__item">Level-2-2
                                                <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                            <ul class="slide-menu child3">
                                                <li class="slide">
                                                    <a href="javascript:void(0);" class="side-menu__item">Level-2-2-1</a>
                                                </li>
                                                <li class="slide">
                                                    <a href="javascript:void(0);" class="side-menu__item">Level-2-2-2</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">Components</span></li>
                        <!-- End::slide__category -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M13 4H6v16h12V9h-5V4zm3 14H8v-2h8v2zm0-6v2H8v-2h8z" opacity=".3"/><path d="M8 16h8v2H8zm0-4h8v2H8zm6-10H6c-1.1 0-2 .9-2 2v16c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm4 18H6V4h7v5h5v11z"/></svg>
                                <span class="side-menu__label">Forms</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0);">Forms</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Form Elements
                                        <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="form-inputs.html" class="side-menu__item">Inputs</a>
                                        </li>
                                        <li class="slide">
                                            <a href="form-check-radios.html" class="side-menu__item">Checks & Radios</a>
                                        </li>
                                        <li class="slide">
                                            <a href="form-input-group.html" class="side-menu__item">Input Group</a>
                                        </li>
                                        <li class="slide">
                                            <a href="form-select.html" class="side-menu__item">Form Select</a>
                                        </li>
                                        <li class="slide">
                                            <a href="form-range.html" class="side-menu__item">Range Slider</a>
                                        </li>
                                        <li class="slide">
                                            <a href="form-input-masks.html" class="side-menu__item">Input Masks</a>
                                        </li>
                                        <li class="slide">
                                            <a href="form-file-uploads.html" class="side-menu__item">File Uploads</a>
                                        </li>
                                        <li class="slide">
                                            <a href="form-dateTime-pickers.html" class="side-menu__item">Date,Time Picker</a>
                                        </li>
                                        <li class="slide">
                                            <a href="form-color-pickers.html" class="side-menu__item">Color Pickers</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a href="floating-labels.html" class="side-menu__item">Floating Labels</a>
                                </li>
                                <li class="slide">
                                    <a href="form-layout.html" class="side-menu__item">Form Layouts</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Form Editors
                                        <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="quill_editor.html" class="side-menu__item">Quill Editor</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a href="form-validation.html" class="side-menu__item">Validation</a>
                                </li>
                                <li class="slide">
                                    <a href="form-select2.html" class="side-menu__item">Select2</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5h15v3H5zm12 5h3v9h-3zm-7 0h5v9h-5zm-5 0h3v9H5z" opacity=".3"/><path d="M20 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h15c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM8 19H5v-9h3v9zm7 0h-5v-9h5v9zm5 0h-3v-9h3v9zm0-11H5V5h15v3z"/></svg>
                                <span class="side-menu__label">Tables</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0);">Tables</a>
                                </li>
                                <li class="slide">
                                    <a href="tables.html" class="side-menu__item">Tables</a>
                                </li>
                                <li class="slide">
                                    <a href="grid-tables.html" class="side-menu__item">Grid JS Tables</a>
                                </li>
                                <li class="slide">
                                    <a href="data-tables.html" class="side-menu__item">Data Tables</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide">
                            <a href="landing-page.html" class="side-menu__item">
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4.02C7.6 4.02 4.02 7.6 4.02 12S7.6 19.98 12 19.98s7.98-3.58 7.98-7.98S16.4 4.02 12 4.02zM11.39 19v-5.5H8.25l4.5-8.5v5.5h3L11.39 19z" opacity=".3"/><path d="M12 2.02c-5.51 0-9.98 4.47-9.98 9.98s4.47 9.98 9.98 9.98 9.98-4.47 9.98-9.98S17.51 2.02 12 2.02zm0 17.96c-4.4 0-7.98-3.58-7.98-7.98S7.6 4.02 12 4.02 19.98 7.6 19.98 12 16.4 19.98 12 19.98zM12.75 5l-4.5 8.5h3.14V19l4.36-8.5h-3V5z"/></svg>
                                <span class="side-menu__label">Landing Page</span>
                            </a>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 4C9.24 4 7 6.24 7 9c0 2.85 2.92 7.21 5 9.88 2.11-2.69 5-7 5-9.88 0-2.76-2.24-5-5-5zm0 7.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" opacity=".3"/><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM7 9c0-2.76 2.24-5 5-5s5 2.24 5 5c0 2.88-2.88 7.19-5 9.88C9.92 16.21 7 11.85 7 9z"/><circle cx="12" cy="9" r="2.5"/></svg>
                                <span class="side-menu__label">Maps</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0);">Maps</a>
                                </li>
                                <li class="slide">
                                    <a href="google-maps.html" class="side-menu__item">Google Maps</a>
                                </li>
                                <li class="slide">
                                    <a href="leaflet-maps.html" class="side-menu__item">Leaflet Maps</a>
                                </li>
                                <li class="slide">
                                    <a href="vector-maps.html" class="side-menu__item">Vector Maps</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">Pages</span></li>
                        <!-- End::slide__category -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="side-menu__icon" viewBox="0 0 24 24" ><g></g><g><g/><g><path d="M21,5c-1.11-0.35-2.33-0.5-3.5-0.5c-1.95,0-4.05,0.4-5.5,1.5c-1.45-1.1-3.55-1.5-5.5-1.5S2.45,4.9,1,6v14.65 c0,0.25,0.25,0.5,0.5,0.5c0.1,0,0.15-0.05,0.25-0.05C3.1,20.45,5.05,20,6.5,20c1.95,0,4.05,0.4,5.5,1.5c1.35-0.85,3.8-1.5,5.5-1.5 c1.65,0,3.35,0.3,4.75,1.05c0.1,0.05,0.15,0.05,0.25,0.05c0.25,0,0.5-0.25,0.5-0.5V6C22.4,5.55,21.75,5.25,21,5z M3,18.5V7 c1.1-0.35,2.3-0.5,3.5-0.5c1.34,0,3.13,0.41,4.5,0.99v11.5C9.63,18.41,7.84,18,6.5,18C5.3,18,4.1,18.15,3,18.5z M21,18.5 c-1.1-0.35-2.3-0.5-3.5-0.5c-1.34,0-3.13,0.41-4.5,0.99V7.49c1.37-0.59,3.16-0.99,4.5-0.99c1.2,0,2.4,0.15,3.5,0.5V18.5z"/><path d="M11,7.49C9.63,6.91,7.84,6.5,6.5,6.5C5.3,6.5,4.1,6.65,3,7v11.5C4.1,18.15,5.3,18,6.5,18 c1.34,0,3.13,0.41,4.5,0.99V7.49z" opacity=".3"/></g><g><path d="M17.5,10.5c0.88,0,1.73,0.09,2.5,0.26V9.24C19.21,9.09,18.36,9,17.5,9c-1.28,0-2.46,0.16-3.5,0.47v1.57 C14.99,10.69,16.18,10.5,17.5,10.5z"/><path d="M17.5,13.16c0.88,0,1.73,0.09,2.5,0.26V11.9c-0.79-0.15-1.64-0.24-2.5-0.24c-1.28,0-2.46,0.16-3.5,0.47v1.57 C14.99,13.36,16.18,13.16,17.5,13.16z"/><path d="M17.5,15.83c0.88,0,1.73,0.09,2.5,0.26v-1.52c-0.79-0.15-1.64-0.24-2.5-0.24c-1.28,0-2.46,0.16-3.5,0.47v1.57 C14.99,16.02,16.18,15.83,17.5,15.83z"/></g></g></svg>
                                <span class="side-menu__label">Pages</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0);">Pages</a>
                                </li>
                                <li class="slide">
                                    <a href="profile.html" class="side-menu__item">Profile</a>
                                </li>
                                <li class="slide">
                                    <a href="editprofile.html" class="side-menu__item">Edit-Profile</a>
                                </li>
                                <li class="slide">
                                    <a href="about.html" class="side-menu__item">About-Us</a>
                                </li>
                                <li class="slide">
                                    <a href="settings.html" class="side-menu__item">Settings</a>
                                </li>
                                <li class="slide">
                                    <a href="invoice.html" class="side-menu__item">Invoice</a>
                                </li>
                                <li class="slide">
                                    <a href="pricing.html" class="side-menu__item">Pricing</a>
                                </li>
                                <li class="slide">
                                    <a href="gallery.html" class="side-menu__item">Gallery</a>
                                </li>
                                <li class="slide">
                                    <a href="todotask.html" class="side-menu__item">Todotask</a>
                                </li>
                                <li class="slide">
                                    <a href="faq.html" class="side-menu__item">Faqs</a>
                                </li>
                                <li class="slide">
                                    <a href="empty.html" class="side-menu__item">Empty</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Mail
                                        <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="mail.html" class="side-menu__item">Mail</a>
                                        </li>
                                        <li class="slide">
                                            <a href="mail-compose.html" class="side-menu__item">Mail Compose</a>
                                        </li>
                                        <li class="slide">
                                            <a href="mail-read.html" class="side-menu__item">Mail Read</a>
                                        </li>
                                        <li class="slide">
                                            <a href="mail-settings.html" class="side-menu__item">Mail Settings</a>
                                        </li>
                                        <li class="slide">
                                            <a href="chat.html" class="side-menu__item">Chat</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Ecommerce
                                        <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="products.html" class="side-menu__item">Products</a>
                                        </li>
                                        <li class="slide">
                                            <a href="product-details.html" class="side-menu__item">Product Details</a>
                                        </li>
                                        <li class="slide">
                                            <a href="product-cart.html" class="side-menu__item">Cart</a>
                                        </li>
                                        <li class="slide">
                                            <a href="check-out.html" class="side-menu__item">Check-out</a>
                                        </li>
                                        <li class="slide">
                                            <a href="wish-list.html" class="side-menu__item">Wish List</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Custom Pages
                                        <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="signin.html" class="side-menu__item">Sign In</a>
                                        </li>
                                        <li class="slide">
                                            <a href="signup.html" class="side-menu__item">Sign Up</a>
                                        </li>
                                        <li class="slide">
                                            <a href="forgot.html" class="side-menu__item">Forgot Password</a>
                                        </li>
                                        <li class="slide">
                                            <a href="reset.html" class="side-menu__item">Reset Password</a>
                                        </li>
                                        <li class="slide">
                                            <a href="lockscreen.html" class="side-menu__item">Lockscreen</a>
                                        </li>
                                        <li class="slide">
                                            <a href="underconstruction.html" class="side-menu__item">UnderConstruction</a>
                                        </li>
                                        <li class="slide">
                                            <a href="404.html" class="side-menu__item">404 Error</a>
                                        </li>
                                        <li class="slide">
                                            <a href="500.html" class="side-menu__item">500 Error</a>
                                        </li>
                                        <li class="slide">
                                            <a href="501.html" class="side-menu__item">501 Error</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M10.9 19.91c.36.05.72.09 1.1.09 2.18 0 4.16-.88 5.61-2.3L14.89 13l-3.99 6.91zm-1.04-.21l2.71-4.7H4.59c.93 2.28 2.87 4.03 5.27 4.7zM8.54 12L5.7 7.09C4.64 8.45 4 10.15 4 12c0 .69.1 1.36.26 2h5.43l-1.15-2zm9.76 4.91C19.36 15.55 20 13.85 20 12c0-.69-.1-1.36-.26-2h-5.43l3.99 6.91zM13.73 9h5.68c-.93-2.28-2.88-4.04-5.28-4.7L11.42 9h2.31zm-3.46 0l2.83-4.92C12.74 4.03 12.37 4 12 4c-2.18 0-4.16.88-5.6 2.3L9.12 11l1.15-2z" opacity=".3"/><path d="M12 22c5.52 0 10-4.48 10-10 0-4.75-3.31-8.72-7.75-9.74l-.08-.04-.01.02C13.46 2.09 12.74 2 12 2 6.48 2 2 6.48 2 12s4.48 10 10 10zm0-2c-.38 0-.74-.04-1.1-.09L14.89 13l2.72 4.7C16.16 19.12 14.18 20 12 20zm8-8c0 1.85-.64 3.55-1.7 4.91l-4-6.91h5.43c.17.64.27 1.31.27 2zm-.59-3h-7.99l2.71-4.7c2.4.66 4.35 2.42 5.28 4.7zM12 4c.37 0 .74.03 1.1.08L10.27 9l-1.15 2L6.4 6.3C7.84 4.88 9.82 4 12 4zm-8 8c0-1.85.64-3.55 1.7-4.91L8.54 12l1.15 2H4.26C4.1 13.36 4 12.69 4 12zm6.27 3h2.3l-2.71 4.7c-2.4-.67-4.35-2.42-5.28-4.7h5.69z"/></svg>
                                <span class="side-menu__label">Utilities</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0);">Utilities</a>
                                </li>
                                <li class="slide">
                                    <a href="borders.html" class="side-menu__item">Borders</a>
                                </li>
                                <li class="slide">
                                    <a href="breakpoints.html" class="side-menu__item">Breakpoints</a>
                                </li>
                                <li class="slide">
                                    <a href="colors.html" class="side-menu__item">Colors</a>
                                </li>
                                <li class="slide">
                                    <a href="columns.html" class="side-menu__item">Columns</a>
                                </li>
                                <li class="slide">
                                    <a href="flex.html" class="side-menu__item">Flex</a>
                                </li>
                                <li class="slide">
                                    <a href="gutters.html" class="side-menu__item">Gutters</a>
                                </li>
                                <li class="slide">
                                    <a href="helpers.html" class="side-menu__item">Helpers</a>
                                </li>
                                <li class="slide">
                                    <a href="position.html" class="side-menu__item">Position</a>
                                </li>
                                <li class="slide">
                                    <a href="more.html" class="side-menu__item">Additional Content</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->
                    </ul>
                    <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path> </svg></div>
                </nav>
                <!-- End::nav -->

            </div>
            <!-- End::main-sidebar -->

        </aside>
        <!-- End::app-sidebar -->

        <!-- Start::app-content -->

        <!-- End::app-content -->

        <!-- Footer Start -->
        <footer class="footer mt-auto py-3 bg-white text-center">
            <div class="container">
                <span class="text-muted"> Copyright © <span id="year"></span>
                       All
                    rights
                    reserved
                </span>
            </div>
        </footer>
        <!-- Footer End -->

    </div>


    <!-- Scroll To Top -->
    <div class="scrollToTop">
        <span class="arrow"><i class="las la-angle-double-up"></i></span>
    </div>
    <div id="responsive-overlay"></div>
    <!-- Scroll To Top -->

    <!-- Popper JS -->
    <script src="../assets/libs/@popperjs/core/umd/popper.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Defaultmenu JS -->
    <script src="../assets/js/defaultmenu.min.js"></script>

    <!-- Node Waves JS-->
    <script src="../assets/libs/node-waves/waves.min.js"></script>

    <!-- Sticky JS -->
    <script src="../assets/js/sticky.js"></script>

    <!-- Simplebar JS -->
    <script src="../assets/libs/simplebar/simplebar.min.js"></script>
    <script src="../assets/js/simplebar.js"></script>

    <!-- Color Picker JS -->
    <script src="../assets/libs/@simonwep/pickr/pickr.es5.min.js"></script>


    <!-- Apex Charts JS -->
    <script src="../assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- JSVector Maps JS -->
    <script src="../assets/libs/jsvectormap/js/jsvectormap.min.js"></script>

    <!-- JSVector Maps MapsJS -->
    <script src="../assets/libs/jsvectormap/maps/world-merc.js"></script>
    <script src="../assets/js/us-merc-en.js"></script>

    <!-- Chartjs Chart JS -->
    <script src="../assets/js/index.js"></script>


    <!-- Custom-Switcher JS -->
    <script src="../assets/js/custom-switcher.min.js"></script>
    <!-- Custom JS -->
    <script src="../assets/js/custom.js"></script>

</body>

</html>
