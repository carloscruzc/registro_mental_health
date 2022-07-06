<?php
namespace App\controllers;
defined("APPPATH") OR die("Access denied");

use \Core\View;
use \Core\MasterDom;
use \App\controllers\Contenedor;
use \App\models\Login AS LoginDao;
use \App\models\Register AS RegisterDao;
use \App\models\LineaGeneral AS LineaGeneralDao;
use \App\models\Data AS DataDao;
use \Core\Controller;

class Account extends Controller{

    private $_contenedor;

    function __construct(){
        parent::__construct();
        $this->_contenedor = new Contenedor;
        View::set('header',$this->_contenedor->header());
        View::set('footer',$this->_contenedor->footer());
    }

    public function getUsuario(){
      return $this->__usuario;
    }

    public function index() {
        $extraHeader =<<<html


html;
        $extraFooter =<<<html
        <script src="../../../assets/js/plugins/choices.min.js"></script>
        <script type="text/javascript" wfd-invisible="true">
            if (document.getElementById('choices-button')) {
                var element = document.getElementById('choices-button');
                const example = new Choices(element, {});
            }
            var choicesTags = document.getElementById('choices-tags');
            var color = choicesTags.dataset.color;
            if (choicesTags) {
                const example = new Choices(choicesTags, {
                delimiter: ',',
                editItems: true,
                maxItemCount: 5,
                removeItemButton: true,
                addItems: true,
                classNames: {
                    item: 'badge rounded-pill choices-' + color + ' me-2'
                }
                });
            }
        </script>
        <script src="/js/jquery.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        
        <script>
            $(document).ready(function() {
        
                $("#update_form").on("submit", function(event) {
                    event.preventDefault();
        
                    var formData = new FormData(document.getElementById("update_form"));
                    for (var value of formData.values()) {
                       console.log(value);
                    }
  
                    $.ajax({
                        url: "/Account/Actualizar",
                        type: "POST",
                        data: formData,
                        cache: false,
                        contentType: false,
                        processData: false,
                        beforeSend: function() {
                            console.log("Procesando....");
        
        
                        },
                        success: function(respuesta) {
        
                            if (respuesta == 'success') {
                                swal("¡Se actualizaron tus datos correctamente!", "", "success").
                                then((value) => {
                                    window.location.replace("/Account/");
                                });
                            } else {
                                swal("¡Usted No Actualizo Nada!", "", "warning").
                                then((value) => {
                                    window.location.replace("/Account/")
                                });
                            }
                        },
                        error: function(respuesta) {
                            console.log(respuesta);
                        }
        
                    });
                });
        
                 $(document).on('change', '#file-input', function(e) {
                    $("#form_upload_image").submit();
                });
        
                $("#form_upload_image").on("submit", function(event) {
                    event.preventDefault();
                    // alert("funciona");
        
                    var formData = new FormData(document.getElementById("form_upload_image"));
                    console.log(formData);
        
                    $.ajax({
                        url: "/Account/uploadImage",
                        type: "POST",
                        data: formData,
                        dataType: "json",
                        cache: false,
                        contentType: false,
                        processData: false,
                        beforeSend: function() {
                            console.log("Procesando....");
        
        
                        },
                        success: function(respuesta) {
                            console.log(respuesta);
                            if(respuesta.status == "success"){
                                //location.reload();
                                $("#img-user").attr("src","../../../img/users_musa/"+respuesta.img);
                                
                            }
                           
                        },
                        error: function(respuesta) {
                            console.log(respuesta);
                        }
        
                    });
                });
        
            });
        </script>
        <footer class="footer mt-4">
      <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
              <div class="col-lg-6 mb-lg-0 mb-4">
                  <div class="copyright text-center text-sm text-muted text-lg-start">
                      © <script>
                          document.write(new Date().getFullYear())
                      </script>,
                      made with <i class="fa fa-heart"></i> by
                      <a href="https://www.creative-tim.com" class="font-weight-bold" target="www.grupolahe.com">Creative GRUPO LAHE</a>.
                  </div>
              </div>
              <div class="col-lg-6">
                  <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                      <li class="nav-item">
                          <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">privacy policies</a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
  </footer>
html;

        $userData = LoginDao::getUser($_SESSION['usuario'])[0];

        $lineaGeneral = LineaGeneralDao::getLineaPrincialAll();
        $optionsGenero = '';
        $optionsLineaPrincipal = '';
        $optionsActividad = '';
        $optionsTalla = '';
        $idLineaPrincipal = '';
        $nombreLineaPrincipal = '';

        if ($userData['genero'] == 'Hombre') {
            $optionsGenero .=<<<html
            <option value="Hombre" Selected>Hombre</option>
            <option value="Mujer" >Mujer</option>
            <option value="Otro" >Otro</option>
html;
        } else if ($userData['genero'] == 'Mujer') {
            $optionsGenero .=<<<html
            <option value="Hombre">Hombre</option>
            <option value="Mujer" Selected>Mujer</option>
            <option value="Otro">Otro</option>
html;
        } else {
            $optionsGenero.=<<<html
            <option value="Hombre">Hombre</option>
            <option value="Mujer">Mujer</option>
            <option value="Otro" Selected>Otro</option>
html;
        }

        foreach ($lineaGeneral as $key => $value) {

            if($userData['especialidad'] == $value['id_linea_principal']){
                $idLineaPrincipal =  $value['id_linea_principal'];
                $nombreLineaPrincipal = $value['nombre'];
            }
            if ($value['id_linea_principal'] == 1 ) {
                $optionsLineaPrincipal.=<<<html
                    <option value="" disabled >Selecciona una opción</option>
                    <option value="{$value['id_linea_principal']}"selected>{$value['nombre']}</option>
html;
            } else {
                $optionsLineaPrincipal.=<<<html
                <option value="" disabled selected>Selecciona una opción</option>
                <option value="{$value['id_linea_principal']}" >{$value['nombre']}</option>
html;
            }
        }



        $userData = RegisterDao::getUserRegister($userData['email'])[0];

        if($userData['img'] != ''){
            $imgUser=<<<html
            <img src="../../../img/users_musa/{$userData['img']}" alt="img" id="img-user" class="w-100 h-100 border-radius-lg shadow-sm">
html;

        }else{
            $imgUser=<<<html
            <img src="../../../img/user.png" alt="img" id="img-user" class="w-100 h-100 border-radius-lg shadow-sm">
html;

        }

        if ($userData['alergia'] != 'Otro') {
            $restricciones =<<<html
            <input class="form-control" id="alergia" maxlength="149" required name="alergia" data-color="dark" type="text" value="{$userData['alergia']}" placeholder="Escribe las restricciones alimenticias" readonly/>
html;
        } else{
            $restricciones =<<<html
            <input class="form-control" id="alergia_cual" maxlength="149" required name="alergia_cual" data-color="dark" type="text" value="{$userData['alergia_cual']}" placeholder="Escribe las restricciones alimenticias" readonly/>
html;
        }
       

      View::set('imgUser',$imgUser);
      View::set('header',$this->_contenedor->header($extraHeader));
      View::set('footer',$this->_contenedor->header($extraFooter));
      View::set('userData', $userData);
      View::set('restricciones', $restricciones);
      View::set('optionsLineaPrincipal',$optionsLineaPrincipal);
      View::set('optionsGenero',$optionsGenero);
      View::set('optionsActividad',$optionsActividad);
      View::set('optionsTalla',$optionsTalla);
      View::set('idLineaPrincipal',$idLineaPrincipal);
      View::set('nombreLineaPrincipal',$nombreLineaPrincipal);
      View::render("account_all");
    }


    public function Actualizar(){


        $documento = new \stdClass();


          if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $id_registro = $_POST['id_registro'];
            $nombre = $_POST['nombre'];
            $segundo_nombre = $_POST['segundo_nombre'];
            $apellido_paterno = $_POST['apellido_paterno'];
            $apellido_materno = $_POST['apellido_materno'];
            $genero = $_POST['genero'];
            // $pais = $_POST['pais'];
            $email = $_POST['email'];
            $telefono = $_POST['telefono'];
            $especialidad = $_POST['especialidad'];
            $alergia = $_POST['alergia'];

            $documento->_nombre = $nombre;
            $documento->_segundo_nombre = $segundo_nombre;
            $documento->_apellido_paterno = $apellido_paterno;
            $documento->_apellido_materno = $apellido_materno;
            $documento->_genero = $genero;
            // $documento->_pais = $pais;
            $documento->_email = $email;
            $documento->_telefono = $telefono;
            $documento->_especialidad = $especialidad;
            $documento->_alergia = $alergia;

              $id = DataDao::updateAccount($documento);

              if($id){
                  echo "success";
                //header("Location: /Home");
              }else{
                  echo "fail";
               // header("Location: /Home/");
              }

          } else {
              echo 'fail REQUEST';
          }

    }

    public function uploadImage(){


      $documento = new \stdClass();


      if ($_SERVER['REQUEST_METHOD'] == 'POST') {

          $numero_rand = $this->generateRandomString();
          $email = $_POST['email_'];
          $img = $_FILES["file-input"];
          $img_name = $img["tmp_name"];

          $this->deleteFile($email);

          move_uploaded_file($img["tmp_name"], "img/users_musa/".$numero_rand.".png");

          $documento->_img = $numero_rand.'.png';
          $documento->_email = $email;

          $id = RegisterDao::updateImg($documento);

          if($id){

            $data = [
                'status' => 'success',
                'img' => $numero_rand.'.png'
            ];
               //echo "success";
          }else{
               //echo "fail";
            $data = [
                'status' => 'fail'

            ];
          }

         echo json_encode($data);


      } else {
          echo 'fail REQUEST';
      }
    }

    function generateRandomString($length = 10) {
        return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
    }

    public function deleteFile($id_registro){
        $regitser = RegisterDao::getUserRegister($id_registro)[0];
        if (file_exists('img/users_musa/'.$regitser['img'])) {
           // echo "El fichero ". $regitser['img']." existe";
            unlink('img/users_musa/'.$regitser['img']);
        }
    }


}
