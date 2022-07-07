<?php echo $header; ?>
<link id="pagestyle" href="/assets/css/soft-ui-dashboard.css?v=1.0.5" rel="stylesheet" />
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg position-sticky mt-4 top-1 px-0 mx-4 shadow-none border-radius-xl z-index-sticky" id="navbarBlur" data-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm">
                        <a class="opacity-3 text-dark" href="javascript:;">
                            <svg width="12px" height="12px" class="mb-1" viewBox="0 0 45 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>shop </title>
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(-1716.000000, -439.000000)" fill="#252f40" fill-rule="nonzero">
                                        <g transform="translate(1716.000000, 291.000000)">
                                            <g transform="translate(0.000000, 148.000000)">
                                                <path d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"></path>
                                                <path d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z"></path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </li>
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Principal</a></li>
                </ol>
            </nav>

            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <div class="input-group"></div>
                </div>

                <ul class="navbar-nav  justify-content-end">
                    <li class="nav-item d-flex align-items-center">
                        <a href="/Account" class="nav-link text-body font-weight-bold mx-lg-4 mx-0  px-0">
                            <i class="fa fa-user me-sm-0"></i>
                            <span class="d-sm-inline d-none">Mi Cuenta</span>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav  justify-content-end">
                    <li class="nav-item d-flex align-items-center">
                        <a href="/Login/cerrarSession" class="nav-link text-body font-weight-bold px-0">
                            <i class="fa fa-power-off me-sm-1"></i>
                            <span class="d-sm-inline d-none">Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-0">
        <div class="row mt-4">
            <div class="col-xl-7">
                <div class="card">
                <input type="hidden" id="id_asistente" class="form-control" value="<?= $_SESSION['utilerias_asistentes_id'] ?>">
                    <div  id="days-desk" class="card-header d-flex pb-0 p-3">
                        <h6 id="titulo-program" class="my-auto">Programa</h6>
                        <div class="nav-wrapper position-relative ms-auto w-80">
                            <ul class="nav nav-pills nav-fill p-1 flex-row" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#cam" role="tab" aria-controls="cam" aria-selected="true">
                                        <span class="fas fa-home"></span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#cam1" role="tab" aria-controls="cam1" aria-selected="false">
                                        18 Agosto
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#cam2" role="tab" aria-controls="cam2" aria-selected="false">
                                        19-1 Agosto
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#cam3" role="tab" aria-controls="cam3" aria-selected="false">
                                        19-2 Agosto
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#cam5" role="tab" aria-controls="cam3" aria-selected="false">
                                        19-3 Agosto
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#cam4" role="tab" aria-controls="cam3" aria-selected="false">
                                        20 Agosto
                                    </a>
                                </li>
                                <div class="moving-tab position-absolute nav-link" style="padding: 0px; transition: all 0.5s ease 0s; transform: translate3d(0px, 0px, 0px); "><a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#cam1" role="tab" aria-controls="cam1" aria-selected="true">-</a>
                                </div>
                            </ul>
                        </div>
                        
                    </div>
                    
                    <div id="days-movil" class="card-header pb-0 p-3">
                        <h6 id="titulo-program" class="">Programa</h6>
                        <div class="nav-wrapper position-relative ms-auto">
                            <ul class="nav nav-pills nav-fill p-1 " role="tablist">
                                <li id="movil-li" class="nav-item">
                                    <a id="nav-day" class="nav-link mb-0 px-3 py-1 active" data-bs-toggle="tab" href="#cam" role="tab" aria-controls="cam" aria-selected="true">
                                        <span class="fas fa-home"></span>
                                    </a>
                                </li>
                                <li id="movil-li" class="nav-item">
                                    <a id="nav-day" class="nav-link mb-0 px-3 py-1" data-bs-toggle="tab" href="#cam1" role="tab" aria-controls="cam1" aria-selected="false">
                                        18 Agosto
                                    </a>
                                </li>
                                <li id="movil-li" class="nav-item">
                                    <a id="nav-day" class="nav-link mb-0 px-3 py-1" data-bs-toggle="tab" href="#cam2" role="tab" aria-controls="cam2" aria-selected="false">
                                        19-1 Agosto
                                    </a>
                                </li>
                                <li id="movil-li" class="nav-item">
                                    <a id="nav-day" class="nav-link mb-0 px-3 py-1" data-bs-toggle="tab" href="#cam3" role="tab" aria-controls="cam3" aria-selected="false">
                                        19-2 Agosto
                                    </a>
                                </li>
                                <li id="movil-li" class="nav-item">
                                    <a id="nav-day" class="nav-link mb-0 px-3 py-1" data-bs-toggle="tab" href="#cam5" role="tab" aria-controls="cam3" aria-selected="false">
                                        19-3 Agosto
                                    </a>
                                </li>
                                <li id="movil-li" class="nav-item">
                                    <a id="nav-day" class="nav-link mb-0 px-3 py-1" data-bs-toggle="tab" href="#cam4" role="tab" aria-controls="cam3" aria-selected="false">
                                        20 Agosto
                                    </a>
                                </li>
                            </ul>
                            
                        </div>
                        
                    </div>
                    <div class="card-body p-3 mt-2">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show position-relative active border-radius-lg" id="cam" role="tabpanel" aria-labelledby="cam" >
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <img src="../../assets/img/curved-images/mental/1.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="tab-pane fade position-relative height-programa border-radius-lg" id="cam0" role="tabpanel" aria-labelledby="cam0" >
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <img src="../../assets/img/curved-images/mental/programa_" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <div class="tab-pane fade position-relative border-radius-lg" id="cam1" role="tabpanel" aria-labelledby="cam1" >
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <img src="../../assets/img/curved-images/mental/2.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade position-relative border-radius-lg" id="cam2" role="tabpanel" aria-labelledby="cam2" >
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <img src="../../assets/img/curved-images/mental/3.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade position-relative border-radius-lg" id="cam5" role="tabpanel" aria-labelledby="cam3" >
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <img src="../../assets/img/curved-images/mental/5.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade position-relative border-radius-lg" id="cam3" role="tabpanel" aria-labelledby="cam3" >
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <img src="../../assets/img/curved-images/mental/4.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade position-relative border-radius-lg" id="cam4" role="tabpanel" aria-labelledby="cam3" >
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <img src="../../assets/img/curved-images/mental/6.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 ms-auto mt-xl-0 mt-4">
                <div class="row">
                    <div class="col-12">
                        <div class="card bg-gradient-faded-musa">
                            <div class="card-body p-3">
                                <div class="row">
                                    <div class="col-12 my-auto">
                                        <div class="numbers">
                                            <!-- <p class="text-white text-sm mb-0 text-capitalize font-weight-bold opacity-9"></p> -->
                                            <h5 class="text-white font-weight-bolder mb-0">
                                                MENTAL HEALTH AND THE BRAIN 2022.
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row  mt-md-4 mt-0">
                    <div class="col-md-6 mt-4">
                        <a href="/Account/">
                            <div class="card card-link">
                                <div class="card-body text-center">
                                    <div class="col-12 text-center">
                                        <img class="w-30 btn-img-home" src="../../assets/img/icons/iconos_Mesa de trabajo 1.png">
                                        <br>
                                    </div>
                                    <br>
                                    <h6 class="mb-0 font-weight-bolder">Datos Personales</h6>
                                    <p class="opacity-8 mb-0 text-sm">Disponible <i class="fa fa-check-circle me-sm-0" style="color: #01a31c"></i></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- <div class="col-md-6 mt-4">
                        <a href="/Vaccination/">
                            <div class="card card-link">
                                <div class="card-body text-center">
                                    <div class="col-12 text-center">
                                        <img class="w-30 btn-img-home" src="../../assets/img/icons/iCONOS-02.png">
                                        <br>
                                    </div>
                                    <br>
                                    <h6 class="mb-0 font-weight-bolder">Comprobantes Vacuna</h6>
                                    <p class="opacity-8 mb-0 text-sm">Disponible <i class="fa fa-check-circle me-sm-0" style="color: #01a31c"></i></p>
                                </div>
                            </div>
                        </a>
                    </div> -->
                <!-- -</div>
                -<div class="row mt-4"> -->
                    <!-- <div class="col-md-6 mt-4">
                        <a href="/Covid/">
                            <div class="card card-link">
                                <div class="card-body text-center">
                                    <div class="col-12 text-center">
                                        <img class="w-30 btn-img-home" src="../../assets/img/icons/iCONOS_Mesa de trabajo 1.png">
                                        <br>
                                    </div>
                                    <br>
                                    <h6 class="mb-0 font-weight-bolder">Mis Pruebas Covid</h6>
                                    <p class="opacity-8 mb-0 text-sm">Disponible <i class="fa fa-clock me-sm-0" style="color: #8a6d3b"></i></p>
                                </div>
                            </div>
                        </a>
                    </div> -->
                    <div class="col-md-6 mt-4" <?= $permisos_mexico;?>>
                        <a href="/Passes/">
                            <div class="card card-link">
                                <div class="card-body text-center">
                                    <div class="col-12 text-center">
                                        <img class="w-30 btn-img-home" src="../../assets/img/icons/iconos-04.png">
                                        <br>
                                    </div>
                                    <br>
                                    <h6 class="mb-0 font-weight-bolder">Pases de Abordar</h6>
                                    <p class="opacity-8 mb-0 text-sm">Disponible <i class="fa fa-check-circle me-sm-0" style="color: #01a31c"></i></p>
                                </div>
                            </div>
                        </a>
                    </div>
               <!-- - </div>
                -<div class="row mt-4"> -->
                    <div class="col-md-6 mt-4">
                        <a href="/VirtualTicket/">
                            <div class="card card-link">
                                <div class="card-body text-center">
                                    <div class="col-12 text-center">
                                        <img class="w-30 btn-img-home" src="../../assets/img/icons/iconos-05.png">
                                        <br>
                                    </div>
                                    <br>
                                    <h6 class="mb-0 font-weight-bolder">Ticket Virtual</h6>
                                    <p class="opacity-8 mb-0 text-sm">Disponible</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- NOTADIUM 
                        <div class="col-md-6 mt-4">
                        <a href="/News/">
                            <div class="card card-link">
                                <div class="card-body text-center">
                                    <div class="col-12 text-center">
                                        <img class="w-30 btn-img-home" src="../../assets/img/icons/iCONOS-07.png">
                                        <br>
                                    </div>
                                    <br>
                                    <h6 class="mb-0 font-weight-bolder">NOTIADIUM</h6>
                                    <p class="opacity-8 mb-0 text-sm">A un click</p>
                                </div>
                            </div>
                        </a>
                    </div> -->

                    <div class="col-md-6  mt-4" id="cont-itinerario" <?=$permisos_mexico;?>>
                        <div class="card card-link">
                            <a type="button" data-toggle="modal" data-target="#ver-itinerario" class="btn-itinerario">
                                <div class="card-body text-center">
                                    <div class="col-12 text-center">
                                        <img class="w-30 btn-img-home" src="../../assets/img/icons/iconos-03.png">
                                    </div>
                                    <br>
                                    <h6 class="mb-0 font-weight-bolder">Itinerario</h6>
                                    <p class="opacity-8 mb-0 text-sm">Disponible <i class="fa fa-check-circle me-sm-0" style="color: #01a31c"></i></p>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <div class="modal fade" id="ver-itinerario" tabindex="-1" role="dialog" aria-labelledby="ver-comprobante" aria-hidden="true">
        <div class="modal-dialog modal-lg  modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Itinerario Mental Health and the Brain 2022</h5>
                    <span type="button" class="btn bg-gradient-danger" data-dismiss="modal" aria-label="Close">
                        X
                    </span>
                </div>
                <!-- <div class="modal-header">
                    <p>Por su seguridad y la de las demás personas, le pedimos que nos proporcione la Información siguiente para comprobar que no este contagiado de COVID.</p>
                </div> -->
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <!-- <div class="form-group row"> -->
                            <div class="row form-group">
                                <div class="form-group col-md-12">
                                    <label class="control-label col-md-12 col-sm-1 col-xs-12" for="id_asistente">Nombre<span class="required"></span></label>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <!-- <input type="text" name="nombre_asistente" id="nombre_asistente" class="form-control form-control-plaintext col-md-7 col-xs-12" > -->
                                        <i class="fa fa-user me-sm-0" aria-hidden="true"></i> <label for="" id="nombre_asistente" class="text-uppercase"></label>

                                    </div>
                                    <span id="availability_"></span>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="card mt-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12" style="background-color: red; border-radius: 5px;">
                                    <h5 class="text-center" style="color: #fff;">Rumbo a CANCÚN</h5>
                                </div>
                                <hr>
                            </div>
                            <div class="row form-group">
                                <div class="form-group col-md-6">
                                    <label class="control-label col-md-12 col-sm-1 col-xs-12" for="aerolinea_origen">Aerolínea (Ida) </label>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <span class="fa fa-plane-departure" aria-hidden="true"></span> <label for="" id="aerolinea_origen"></label>

                                    </div>
                                    <span id="availability_"></span>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <label class="form-label">Fecha de salida del vuelo </label>
                                    <div class="input-group">
                                        <i class="fa fas fa-calendar"></i>&nbsp;<label for="" id="fecha_salida"></label>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <label class="form-label">Hora de salida del vuelo - (Formato 24 hrs)</label>
                                    <div class="input-group">
                                        <i class="fa fa-solid fa-clock"></i>&nbsp;<label for="" id="hora_salida"></label>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-12">
                                    <label class="form-label">Aeropuerto de Salida </label>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <i class="fa fas fa-road"> </i> <label for="" id="aeropuerto_salida"></label>
                                    </div>
                                </div>
                                <hr>
                                <div class="col-12 col-lg-12">
                                    <label class="form-label" style="font-size: 15px;">Escalas</label>
                                    <hr>
                                    <div class="row " id="escala1">
                                        <!-- Contenido escalas ida -->

                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="card mt-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12" style="background-color: #01a31c; border-radius:5px;">
                                    <h5 class="text-center" style="color:#fff;">Regreso a casa</h5>
                                </div>
                                <hr>
                            </div>
                            <div class="row form-group">


                                <div class="form-group col-md-6">
                                    <label class="control-label col-md-12 col-sm-1 col-xs-12" for="aerolinea_destino">Aerolínea (Regreso) <span class="required"></span></label>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <!-- <input type="text" name="aerolinea_destino" id="aerolinea_destino" class="form-control form-control-plaintext col-md-7 col-xs-12" > -->
                                        <span class="fa fa-plane-arrival" aria-hidden="true"></span> <label for="" id="aerolinea_destino"></label>
                                        <!-- <select class="form-control form-control-plaintext" name="aerolinea_destino" id="aerolinea_destino" required>
                                                    <option selected disabled>Seleccione una Opción</option>
                                                    <?php //echo $aerolineas; 
                                                    ?>
                                                </select> -->
                                    </div>
                                    <span id="availability_"></span>
                                </div>


                                <div class="col-12 col-lg-6">
                                    <label class="form-label">Fecha de regreso del vuelo</label>
                                    <div class="input-group">
                                        <!-- <input id="fecha_regreso" name="fecha_regreso" minlength="6" maxlength="8" class="form-control form-control-plaintext" type="date" placeholder="00/00/0000" onfocus="focused(this)" onfocusout="defocused(this)" style="text-transform:uppercase;" > -->
                                        <i class="fa fas fa-calendar"></i>&nbsp;<label for="" id="fecha_regreso"></label>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <label class="form-label">Hora de regreso del vuelo - (Formato 24 hrs)</label>
                                    <div class="input-group">
                                        <!-- <input id="hora_regreso" name="hora_regreso" maxlength="29" class="form-control form-control-plaintext" type="time" placeholder="hora regreso" required="" style="text-transform:uppercase;" > -->
                                        <i class="fa fa-solid fa-clock"></i>&nbsp;<label for="" id="hora_regreso"></label>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-12">
                                    <label class="form-label">Aeropuerto de Regreso </label>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <!-- <input type="text" name="aeropuerto_regreso" id="aeropuerto_regreso" class="form-control form-control-plaintext col-md-7 col-xs-12" > -->
                                        <i class="fa fas fa-road"> </i> <label for="" id="aeropuerto_regreso"></label>

                                    </div>
                                </div>
                                <hr>
                                <div class="col-12 col-lg-12">
                                    <label class="form-label" style="font-size: 15px;">Escalas</label>
                                    <hr>
                                    <div class="row" id="escala2">
                                        <!-- Contenido escalas ida -->

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <?php echo $footer; ?>
</main>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/locale/es.js"></script>
<script>
    $(document).ready(function() {
     $('.btn-itinerario').on("click", function(event) {
            var id = $("#id_asistente").val();

            //alert(id);
            $.ajax({
                url: "/Home/getItinerario",
                type: "POST",
                data: {
                    id
                },
                dataType: 'json',
                beforeSend: function() {
                    console.log("Procesando....");
                    $("#escala1").empty();
                    $("#escala2").empty();


                },
                success: function(respuesta) {

                    console.log(respuesta.aerolinea_origen);

                    $("#nombre_asistente").html(respuesta.nombre);
                    $("#aerolinea_origen").html(respuesta.aerolinea_origen);
                    $("#fecha_salida").html(moment(respuesta.fecha_salida).format('LL'));
                    $("#hora_salida").html(respuesta.hora_salida);
                    $("#aeropuerto_salida").html(respuesta.aeropuerto_salida);

                    $("#aerolinea_destino").html(respuesta.aerolinea_destino);
                    $("#fecha_regreso").html(moment(respuesta.fecha_regreso).format('LL'));
                    $("#hora_regreso").html(respuesta.hora_regreso);
                    $("#aeropuerto_regreso").html(respuesta.aeropuerto_regreso);

                    $("#nota_itinerario").html(respuesta.nota);

                    if (respuesta.aeropuerto_escala_salida == '' || respuesta.aeropuerto_escala_salida == 0 || respuesta.aeropuerto_escala_salida == null) {
                        $("#escala1").append(
                            `<div class="col-md-12 col-sm-12 col-xs-12">
                            <label for="" id="">Sin Escalas</label>
                        </div>`
                        );
                    } else {
                       
                        $("#escala1").append(
                            `<div class="form-group col-md-6">
                                <label class="control-label col-md-12 col-sm-1 col-xs-12" for="aerolinea_origen">Aerolínea (Ida) </label>
                                <div class="col-md-12 col-sm-12 col-xs-12">                                        
                                    <span class="fa fa-plane-departure" aria-hidden="true"></span> <label>${respuesta.aerolinea_escala_origen}</label>

                                </div>
                                <span id="availability_"></span>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <label class="form-label">Fecha de salida del vuelo </label>
                                <div class="input-group">                                        
                                    <i class="fa fas fa-calendar"></i>&nbsp;<label>${moment(respuesta.fecha_escala_salida).format('LL')}</label>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <label class="form-label">Hora de salida del vuelo </label>
                                <div class="input-group">                                   
                                    <i class="fa fa-solid fa-clock"></i>&nbsp;<label>${respuesta.hora_escala_salida}</label>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-12">
                                <label class="form-label">Aeropuerto de Salida </label>
                                <div class="col-md-12 col-sm-12 col-xs-12">                                       
                                    <i class="fa fas fa-road"> </i> <label>${respuesta.aeropuerto_escala_salida}</label>
                                </div>
                            </div>`
                        );
                        
                    }


                    if (respuesta.aeropuerto_escala_regreso == '' || respuesta.aeropuerto_escala_regreso == 0 || respuesta.aeropuerto_escala_regreso == null) {
                        $("#escala2").append(
                            `<div class="col-md-12 col-sm-12 col-xs-12">
                            <label for="" id="">Sin Escalas</label>
                        </div>`
                        );
                    } else {
                        
                        $("#escala2").append(
                            `<div class="form-group col-md-6">
                                <label class="control-label col-md-12 col-sm-1 col-xs-12" for="aerolinea_origen">Aerolínea (Ida) </label>
                                <div class="col-md-12 col-sm-12 col-xs-12">                                        
                                    <span class="fa fa-plane-departure" aria-hidden="true"></span> <label>${respuesta.aerolinea_escala_destino}</label>

                                </div>
                                <span id="availability_"></span>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <label class="form-label">Fecha de salida del vuelo </label>
                                <div class="input-group">                                        
                                    <i class="fa fas fa-calendar"></i>&nbsp;<label>${moment(respuesta.fecha_escala_regreso).format('LL')}</label>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <label class="form-label">Hora de salida del vuelo </label>
                                <div class="input-group">                                   
                                    <i class="fa fa-solid fa-clock"></i>&nbsp;<label>${respuesta.hora_escala_regreso}</label>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-12">
                                <label class="form-label">Aeropuerto de Salida </label>
                                <div class="col-md-12 col-sm-12 col-xs-12">                                       
                                    <i class="fa fas fa-road"> </i> <label>${respuesta.aeropuerto_escala_regreso}</label>
                                </div>
                            </div>`
                        );
                      
                    }

                   



                },
                error: function(respuesta) {
                    console.log(respuesta);
                }

            });
        })
    });
</script>




