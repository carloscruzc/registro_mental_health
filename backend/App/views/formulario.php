<?php
echo $header;
?>
    <script src="/backend/public/assets/js/plugins/choices.min.js"></script>
    <body class="">
    <main class="main-content mt-0 ps">
        <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('../../../assets/img/curved-images/musa (2).jpeg');">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 text-center mx-auto">
                        <h1 class="text-white mb-2 mt-5">¡Bienvenido!</h1>
                        <p class="text-lead text-white">MENTAL HEALTH AND THE BRAIN 2022. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
                <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                    <div class="card z-index-0">
                        <div class="card-body pt-1">
                            <form class="form-horizontal" id="email_form" action="/Register/Success" method="POST">
                                <div class="card-body px-lg-2 py-lg-2 text-center">
                                        <div class="info mb-4">
                                            <div class="icon icon-shape icon-xl rounded-circle bg-gradient-danger shadow text-center py-3 mx-auto">
                                                <svg class="mt-3" width="40px" height="35px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <title>spaceship</title>
                                                    <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g id="Rounded-Icons" transform="translate(-1720.000000, -592.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                            <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)">
                                                                <g id="spaceship" transform="translate(4.000000, 301.000000)">
                                                                    <path d="M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z" id="Shape"></path>
                                                                    <path d="M1.855,31.4066667 C3.05106558,30.2024182 4.79973884,29.7296005 6.43969145,30.1670277 C8.07964407,30.6044549 9.36054508,31.8853559 9.7979723,33.5253085 C10.2353995,35.1652612 9.76258177,36.9139344 8.55833333,38.11 C6.70666667,39.9616667 0,40 0,40 C0,40 0,33.2566667 1.855,31.4066667 Z" id="Path"></path>
                                                                    <path d="M17.2616667,3.90166667 C12.4943643,3.07192755 7.62174065,4.61673894 4.20333333,8.04166667 C3.31200265,8.94126033 2.53706177,9.94913142 1.89666667,11.0416667 C1.5109569,11.6966059 1.61721591,12.5295394 2.155,13.0666667 L5.47,16.3833333 C8.55036617,11.4946947 12.5559074,7.25476565 17.2616667,3.90166667 L17.2616667,3.90166667 Z" id="color-2" opacity="0.598539807"></path>
                                                                    <path d="M36.0983333,22.7383333 C36.9280725,27.5056357 35.3832611,32.3782594 31.9583333,35.7966667 C31.0587397,36.6879974 30.0508686,37.4629382 28.9583333,38.1033333 C28.3033941,38.4890431 27.4704606,38.3827841 26.9333333,37.845 L23.6166667,34.53 C28.5053053,31.4496338 32.7452344,27.4440926 36.0983333,22.7383333 L36.0983333,22.7383333 Z" id="color-3" opacity="0.598539807"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="text-center text-muted mb-2">
                                            <h3>FORMULARIO DE DATOS</h3>
                                            <span class="text-muted text-sm">Has recibido un código de verificación de identidad en tu cuenta de correo electrónico con el que estas tratando de registrarte, introdúcelo a continuación. </span>

                                        </div>
                                        <form class="form-horizontal" id="code_form" action="/Register/hol" method="POST">
                                            <div class="form-group">
                                                <input type="hidden" id="email" name="email" class="form-control form-control-lg text-center" value="<?php echo $code;?>">
                                            </div>
                                            <div class="row gx-2 gx-sm-3">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <input style="font-size: 25px" type="text" id="uno" name="uno" class="form-control form-control-lg text-center" maxlength="1" autocomplete="off" autocapitalize="off" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <input style="font-size: 25px" type="text" id="dos" name="dos" class="form-control form-control-lg text-center" maxlength="1" autocomplete="off" autocapitalize="off" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <input style="font-size: 25px" type="text" id="tres" name="tres" class="form-control form-control-lg text-center" maxlength="1" autocomplete="off" autocapitalize="off" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <input style="font-size: 25px" type="text" id="cuatro" name="cuatro" class="form-control form-control-lg text-center" maxlength="1" autocomplete="off" autocapitalize="off" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <button class="btn btn-outline-danger w-100 my-4 mb-2 ms-auto" type="submit" id="btn_registro_email">Verificar mi Código</button>

                                                <button class="btn bg-gradient-danger w-100" type="submit" id="btn_code_email">Verificar mi código</button>
                                                <span class="text-muted text-sm">¿No ha recibido recibido un código?<a href="javascript:;"> Reenviar un nuevo código</a>.</span>
                                            </div>
                                        </form>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </main>

    </body>

<?php echo $footer; ?>