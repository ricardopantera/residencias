<?php
    class Equipos extends Controllers{
        public function __construct()
        {
           session_start();
           if(empty($_SESSION['login'])){
               header('Location:'.BASE_URL.'Login');
           }
            parent::__construct();
            
        }

        public function Home(){
            $this->views->getView($this,"Equipos");
        }

        public function getEquipos(){
            $arrdata = $this->model->getEquipos();

            for($i=0;$i < count($arrdata); $i++){
                $arrdata[$i]['options'] = '<div class="text-center">
                <button class="btn btn-warning" onclick="EditUser('.$arrdata[$i]['id_equipos'].')"><i class="fas fa-pencil-alt"></i></button>
                <button class="btn btn-danger" onclick="DeleteUser('.$arrdata[$i]['id_equipos'].')"><i class="fas fa-trash-alt"></i></button>
                </div>';
            }   

            echo json_encode($arrdata,JSON_UNESCAPED_UNICODE);
            die();
            
        }
        public function insertEquipo(){
            if($_POST){
                if(empty($_POST['nombre_equipo']) || empty($_POST['nombre_usuario'] || empty($_POST['nombre_proyecto']))){
                    $arrresponse = array('status' => false,'msg' => 'Error en los datos');
                }else{
                    $strEquipo = $_POST['nombre_equipo'];
                    $strjuez = $_POST['nombre_usuario'];
                    $strproyecto = $_POST['nombre_proyecto'];
                    $requestuser = $this->model->insertEquipo($strEquipo,$strjuez,$strproyecto);
                    if($requestuser != 0){
                        $arrresponse = array('status' => true,'msg' => 'Datos guardados correctamente');  
                    }else{
                        $arrresponse = array('status' => false,'msg' => 'Error al insertar los datos');  
                    }

                }
                echo json_encode($arrresponse,JSON_UNESCAPED_UNICODE);
            }
        }


    }




?>