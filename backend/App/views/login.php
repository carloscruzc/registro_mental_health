<?php
echo $header;
?>

<body class="">
    <main class="main-content main-content-bg mt-0">
        <section>

            <nav class="navbar navbar-expand-lg  blur blur-rounded top-0  z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
                <div class="container-fluid">
                    <img src="/img/logo_mental_login.png" class="mb-2" height="30" alt=""> &nbsp;&nbsp;&nbsp;
                    <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon mt-2">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </span>
                    </button>
                    <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0" id="navigation">
                        <ul class="navbar-nav navbar-nav-hover mx-auto">
                            <!-- <li class="nav-item dropdown dropdown-hover mx-2">
                                <a role="button" class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center " id="dropdownMenuBlocks" data-bs-toggle="dropdown" aria-expanded="false">
                                    ¿Quienes Somos?
                                    <img src=" ../../../assets/img/down-arrow-dark.svg " alt="down-arrow" class="arrow ms-1 d-lg-block d-none">
                                    <img src="../../../assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-1 d-lg-none d-block">
                                </a>
                                <div class="dropdown-menu dropdown-menu-animation dropdown-md dropdown-md-responsive p-3 border-radius-lg mt-0 mt-lg-3" aria-labelledby="dropdownMenuBlocks">
                                    <div class="d-none d-lg-block">
                                        <ul class="list-group">
                                            <li class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                                <a class="dropdown-item py-2 ps-3 border-radius-md" href="../../../pages/applications/kanban.html">
                                                    <div class="d-flex">
                                                        <div class="icon h-10 me-3 d-flex mt-1">
                                                            <i class="ni ni-single-copy-04 text-gradient text-warning"></i>
                                                        </div>
                                                        <div class="w-100 d-flex align-items-center justify-content-between">
                                                            <div>
                                                                <p class="dropdown-header text-dark p-0">Historía</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                                <a class="dropdown-item py-2 ps-3 border-radius-md" href="../../../pages/applications/wizard.html">
                                                    <div class="d-flex">
                                                        <div class="icon h-10 me-3 d-flex mt-1">
                                                            <i class="ni ni-atom text-gradient text-warning"></i>
                                                        </div>
                                                        <div class="w-100 d-flex align-items-center justify-content-between">
                                                            <div>
                                                                <p class="dropdown-header text-dark p-0">Misión</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                                <a class="dropdown-item py-2 ps-3 border-radius-md" href="../../../pages/applications/datatables.html">
                                                    <div class="d-flex">
                                                        <div class="icon h-10 me-3 d-flex mt-1">
                                                            <i class="ni ni-diamond text-gradient text-warning"></i>
                                                        </div>
                                                        <div class="w-100 d-flex align-items-center justify-content-between">
                                                            <div>
                                                                <p class="dropdown-header text-dark p-0">Visión</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                                <a class="dropdown-item py-2 ps-3 border-radius-md" href="../../../pages/applications/calendar.html">
                                                    <div class="d-flex">
                                                        <div class="icon h-10 me-3 d-flex mt-1">
                                                            <i class="ni ni-notification-70 text-gradient text-warning"></i>
                                                        </div>
                                                        <div class="w-100 d-flex align-items-center justify-content-between">
                                                            <div>
                                                                <p class="dropdown-header text-dark p-0">Nuestros Logros</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                                <a class="dropdown-item py-2 ps-3 border-radius-md" href="../../../pages/applications/calendar.html">
                                                    <div class="d-flex">
                                                        <div class="icon h-10 me-3 d-flex mt-1">
                                                            <i class="ni ni-active-40 text-gradient text-warning"></i>
                                                        </div>
                                                        <div class="w-100 d-flex align-items-center justify-content-between">
                                                            <div>
                                                                <p class="dropdown-header text-dark p-0">Política de Privacidad</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    responsive 
                                    <div class="row d-lg-none">
                                        <div class="col-md-12">
                                            <a class="py-2 ps-3 border-radius-md" href="../../../pages/applications/kanban.html">
                                                <div class="d-flex">
                                                    <div class="icon h-10 me-3 d-flex mt-1">
                                                        <i class="ni ni-single-copy-04 text-gradient text-primary"></i>
                                                    </div>
                                                    <div class="w-100 d-flex align-items-center justify-content-between">
                                                        <div>
                                                            <p class="dropdown-header text-dark p-0">Kanban</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="py-2 ps-3 border-radius-md" href="../../../pages/applications/wizard.html">
                                                <div class="d-flex">
                                                    <div class="icon h-10 me-3 d-flex mt-1">
                                                        <i class="ni ni-laptop text-gradient text-primary"></i>
                                                    </div>
                                                    <div class="w-100 d-flex align-items-center justify-content-between">
                                                        <div>
                                                            <p class="dropdown-header text-dark p-0">Wizard</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="py-2 ps-3 border-radius-md" href="../../../pages/applications/datatables.html">
                                                <div class="d-flex">
                                                    <div class="icon h-10 me-3 d-flex mt-1">
                                                        <i class="ni ni-badge text-gradient text-primary"></i>
                                                    </div>
                                                    <div class="w-100 d-flex align-items-center justify-content-between">
                                                        <div>
                                                            <p class="dropdown-header text-dark p-0">DataTables</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="py-2 ps-3 border-radius-md" href="../../../pages/applications/calendar.html">
                                                <div class="d-flex">
                                                    <div class="icon h-10 me-3 d-flex mt-1">
                                                        <i class="ni ni-notification-70 text-gradient text-primary"></i>
                                                    </div>
                                                    <div class="w-100 d-flex align-items-center justify-content-between">
                                                        <div>
                                                            <p class="dropdown-header text-dark p-0">Calendar</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li> -->
                            <!-- <li class="nav-item dropdown dropdown-hover mx-2">
                                <a role="button" class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center " id="dropdownMenuEcommerce" data-bs-toggle="dropdown" aria-expanded="false">
                                    Nuestro Programa
                                    <img src=" ../../../assets/img/down-arrow-dark.svg  " alt="down-arrow" class="arrow ms-1 d-lg-block d-none">
                                    <img src="../../../assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-1 d-lg-none d-block">
                                </a>
                                <div class="dropdown-menu dropdown-menu-animation dropdown-lg p-3 border-radius-xl mt-0 mt-lg-3" aria-labelledby="dropdownMenuEcommerce">
                                    <div class="row d-none d-lg-block">
                                        <div class="col-12 px-4 py-2">
                                            <div class="row">
                                                <div class="col-6 position-relative">
                                                    <div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0">
                                                        <div class="d-inline-block">
                                                            <div class="icon icon-shape icon-xs border-radius-md bg-gradient-warning text-center me-2 d-flex align-items-center justify-content-center">
                                                                <svg width="12px" height="12px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                    <title>document</title>
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                                            <g transform="translate(1716.000000, 291.000000)">
                                                                                <g transform="translate(154.000000, 300.000000)">
                                                                                    <path d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z" opacity="0.603585379"></path>
                                                                                    <path d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z"></path>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        Actividades
                                                    </div>
                                                    <a href="../../../pages/ecommerce/orders/list.html" class="dropdown-item border-radius-md">
                                                        <span class="ps-3">Link 1</span>
                                                    </a>
                                                    <a href="../../../pages/ecommerce/orders/details.html" class="dropdown-item border-radius-md">
                                                        <span class="ps-3">Link 2</span>
                                                    </a>
                                                    <div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0 mt-3">
                                                        <div class="d-inline-block">
                                                            <div class="icon icon-shape icon-xs border-radius-md bg-gradient-warning text-center me-2 d-flex align-items-center justify-content-center ps-0">
                                                                <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                    <title>box-3d-50</title>
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <g transform="translate(-2319.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                                            <g transform="translate(1716.000000, 291.000000)">
                                                                                <g transform="translate(603.000000, 0.000000)">
                                                                                    <path d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z"></path>
                                                                                    <path d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z" opacity="0.7"></path>
                                                                                    <path d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z" opacity="0.7"></path>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        General
                                                    </div>
                                                    <a href="../../../pages/ecommerce/overview.html" class="dropdown-item border-radius-md">
                                                        <span class="ps-3">Link 1</span>
                                                    </a>
                                                    <a href="../../../pages/ecommerce/referral.html" class="dropdown-item border-radius-md">
                                                        <span class="ps-3">Link 2</span>
                                                    </a>
                                                    <hr class="vertical dark">
                                                </div>
                                                <div class="col-6 position-relative">
                                                    <div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0">
                                                        <div class="d-inline-block">
                                                            <div class="icon icon-shape icon-xs border-radius-md bg-gradient-warning text-center me-2 d-flex align-items-center justify-content-center">
                                                                <svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                    <title>shop </title>
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                                            <g transform="translate(1716.000000, 291.000000)">
                                                                                <g transform="translate(0.000000, 148.000000)">
                                                                                    <path d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z" opacity="0.598981585"></path>
                                                                                    <path d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z"></path>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        Otros
                                                    </div>
                                                    <a href="../../../pages/ecommerce/products/new-product.html" class="dropdown-item border-radius-md">
                                                        <span class="ps-3">Link 1</span>
                                                    </a>
                                                    <a href="../../../pages/ecommerce/products/edit-product.html" class="dropdown-item border-radius-md">
                                                        <span class="ps-3">Link 2</span>
                                                    </a>
                                                    <a href="../../../pages/ecommerce/products/product-page.html" class="dropdown-item border-radius-md">
                                                        <span class="ps-3">Link 3</span>
                                                    </a>
                                                    <a href="../../../pages/ecommerce/products/products-list.html" class="dropdown-item border-radius-md">
                                                        <span class="ps-3">Link 4</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    responsive
                                    <div class="d-lg-none">
                                        <div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0">
                                            <div class="d-inline-block">
                                                <div class="icon icon-shape icon-xs border-radius-md bg-gradient-primary text-center me-2 d-flex align-items-center justify-content-center">
                                                    <svg width="12px" height="12px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                        <title>document</title>
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                                <g transform="translate(1716.000000, 291.000000)">
                                                                    <g transform="translate(154.000000, 300.000000)">
                                                                        <path d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z" opacity="0.603585379"></path>
                                                                        <path d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z"></path>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                            Orders
                                        </div>
                                        <a href="../../../pages/ecommerce/orders/list.html" class="dropdown-item border-radius-md">
                                            Link 1
                                        </a>
                                        <a href="../../../pages/pages/orders/details.html" class="dropdown-item border-radius-md">
                                            Link 2
                                        </a>
                                        <div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0 mt-3">
                                            <div class="d-inline-block">
                                                <div class="icon icon-shape icon-xs border-radius-md bg-gradient-primary text-center me-2 d-flex align-items-center justify-content-center ps-0">
                                                    <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                        <title>box-3d-50</title>
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <g transform="translate(-2319.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                                <g transform="translate(1716.000000, 291.000000)">
                                                                    <g transform="translate(603.000000, 0.000000)">
                                                                        <path d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z"></path>
                                                                        <path d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z" opacity="0.7"></path>
                                                                        <path d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z" opacity="0.7"></path>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                            General
                                        </div>
                                        <a href="../../../pages/ecommerce/overview.html" class="dropdown-item border-radius-md">
                                            Overview
                                        </a>
                                        <a href="../../../pages/ecommerce/referral.html" class="dropdown-item border-radius-md">
                                            Referral
                                        </a>
                                        <div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0 mt-3">
                                            <div class="d-inline-block">
                                                <div class="icon icon-shape icon-xs border-radius-md bg-gradient-primary text-center me-2 d-flex align-items-center justify-content-center ps-0">
                                                    <svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                        <title>shop </title>
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                                <g transform="translate(1716.000000, 291.000000)">
                                                                    <g transform="translate(0.000000, 148.000000)">
                                                                        <path d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z" opacity="0.598981585"></path>
                                                                        <path d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z"></path>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                            Products
                                        </div>
                                        <a href="../../../pages/ecommerce/products/new-product.html" class="dropdown-item border-radius-md">
                                            New Product
                                        </a>
                                        <a href="../../../pages/ecommerce/products/edit-product.html" class="dropdown-item border-radius-md">
                                            Edit Product
                                        </a>
                                        <a href="../../../pages/ecommerce/products/product-page.html" class="dropdown-item border-radius-md">
                                            Product Page
                                        </a>
                                        <a href="../../../pages/ecommerce/products/products-list.html" class="dropdown-item border-radius-md">
                                            Products List
                                        </a>
                                    </div>
                                </div>
                            </li> -->
                            <li class="nav-item dropdown dropdown-hover mx-2">
                                <a role="button" class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center " id="dropdownMenuDocs" data-bs-toggle="dropdown" aria-expanded="false">
                                    Datos del evento
                                    <img src=" ../../../assets/img/down-arrow-dark.svg " alt="down-arrow" class="arrow ms-1 d-lg-block d-none">
                                    <img src="../../../assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-1 d-lg-none d-block">
                                </a>
                                <div class="dropdown-menu dropdown-menu-animation dropdown-lg mt-0 mt-lg-3 p-3 border-radius-lg" aria-labelledby="dropdownMenuDocs">
                                    <div class="d-none d-lg-block">
                                        <ul class="list-group">

                                            <li class="nav-item list-group-item border-0 p-0">
                                                <a class="dropdown-item py-2 ps-3 border-radius-md" href="/DatosEvento">
                                                    <div class="d-flex">
                                                        <div class="icon h-10 me-3 d-flex mt-1">
                                                            <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                <title>settings</title>
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <g transform="translate(-2020.000000, -442.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                                        <g transform="translate(1716.000000, 291.000000)">
                                                                            <g transform="translate(304.000000, 151.000000)">
                                                                                <polygon class="color-background" opacity="0.596981957" points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667"></polygon>
                                                                                <path class="color-background" d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z" opacity="0.596981957"></path>
                                                                                <path class="color-background" d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z"></path>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                        <div>
                                                            <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">Datos del Evento</h6>
                                                            <span class="text-sm">Fecha, Hora, Lugar, Sede y otros datos de importancia.</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                    <div class="row d-lg-none">
                                        <div class="col-md-12 g-0">
                                            <a class="dropdown-item py-2 ps-3 border-radius-md" href="/DatosEvento">
                                                <div class="d-flex">
                                                    <div class="icon h-10 me-3 d-flex mt-1">
                                                        <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                            <title>settings</title>
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <g transform="translate(-2020.000000, -442.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                                    <g transform="translate(1716.000000, 291.000000)">
                                                                        <g transform="translate(304.000000, 151.000000)">
                                                                            <polygon class="color-background" opacity="0.596981957" points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667"></polygon>
                                                                            <path class="color-background" d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z" opacity="0.596981957"></path>
                                                                            <path class="color-background" d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z"></path>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <div>
                                                        <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">Datos del Evento</h6>
                                                        <span class="text-sm">Fecha, Hora, Lugar, Sede y otros datos de importancia.</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="https://asofarma.com.mx/aviso-de-privacidad/" target="_blank" class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center " aria-expanded="false" >
                                    Farmacovigilancia

                                </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav d-lg-block d-none">
                            <li class="nav-item">
                                <a href="/Register/" class="btn btn-sm bg-gradient-faded-danger  btn-round mb-0 me-1" onclick="smoothToPricing('pricing-soft-ui')"><b style="color: #ffffff">¡Quiero Registrarme!</b></a>
                            </li>
                        </ul>
                        <ul class="navbar-nav text-center mt-3 mb-2 d-block d-lg-none">
                            <li class="nav-item">
                                <a href="/Register/" class="btn btn-sm bg-gradient-faded-danger  btn-round mb-0 me-1" onclick="smoothToPricing('pricing-soft-ui')"><b style="color: #ffffff">¡Quiero Registrarme!</b></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="page-header min-vh-75">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                            <div class="card card-plain mt-7">
                                <div class="card-header pb-0 text-start">
                                    <h3 class="font-weight-bolder text-info text-dark">MENTAL HEALTH AND THE BRAIN FORUM</h3>
                                    <p class="mb-0">Introduzca sus credenciales para iniciar sesión.</p>
                                </div>
                                <div class="card-body">
                                    <form role="form" class="text-start" id="login" action="/Login/crearSession" method="POST" class="form-horizontal">
                                        <label style="font-weight:bold; font-size: 15px">Correo electrónico</label>
                                        <div class="mb-3">
                                            <input type="email" name="usuario" id="usuario" class="form-control" placeholder="usuario@grupolahe.com" aria-label="Email">
                                        </div>
                                        <label style="font-weight:bold; font-size: 15px">Contraseña</label>
                                        <div class="mb-3">
                                            <input type="password" name="password" id="password" class="form-control" placeholder="•••••••••" aria-label="Password">
                                        </div>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="rememberMe" checked="">
                                            <label class="form-check-label" for="rememberMe">Recordar contraseña</label>
                                        </div>

                                        <div class="text-center">
                                            <button type="button" id="btnEntrar" class="btn bg-gradient-faded-danger-two w-100 mt-1 mb-0"><b style="color: #FFFFFF">ENTRAR</b></button>
                                        </div>
                                    </form>
                                    <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                        <p class="mb-2 text-sm mx-auto">
                                            ¿Olvido su contraseña?
                                            <a href="/Register/" class="text-info text-dark font-weight-bold">De clic aquí.</a>
                                        </p>
                                        <p class="mb-1 text-sm mx-auto text-center">
                                            Para crear su cuenta de acceso proporcione su cuenta de correo electrónico y de clic en el siguiente botón.
                                        </p>
                                        <div class="text-center">
                                            <a href="/Register/" type="button" class="btn bg-gradient-faded-danger w-100 mt-4 mb-0 font-weight-bold"><b style="color: white">¡QUIERO REGISTRARME!</b></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n9">
                                <!-- <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('/assets/img/curved-images/curved9.jpg')"></div>-->
                                <video autoplay muted loop>
                                    <source class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" src="/assets/img/curved-images/web_mental.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->


</body>

<?php echo $footer; ?>