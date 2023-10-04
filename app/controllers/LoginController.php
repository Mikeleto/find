<?php

class loginController extends Controller{

    private $model;
    public function __construct(){
    $this->model = $this->model('login');
    }

    public function index(){
        $data = [
            'title' => 'Login',
            'menu' => 'false',
        ];
        $this->view('login',$data);
    }

    public function registro(){

        $errors = [];
        $dataForm = [];

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $firstName = $_POST['first_name'] ?? '';
            $lastName1 = $_POST['last_name_1'] ?? '';
            $lastName2 = $_POST['last_name_2'] ?? '';
            $email = $_POST['email'] ?? '';
            $password1 = $_POST['password1'] ?? '';
            $password2 = $_POST['password2'] ?? '';
            $address = $_POST['address'] ?? '';
            $city = $_POST['city'] ?? '';
            $state = $_POST['state'] ?? '';
            $postcode = $_POST['postcode'] ?? '';
            $country = $_POST['country'] ?? '';

            if ($firstName == '') {
                array_push($errors, 'El nombre es requerido');
            } else {
                //Si está relleno realizar otras comprobaciones
            }
            if ($lastName1 == '') {
                array_push($errors, 'El primer apellido es requerido');
            }
            if ($email == '') {
                array_push($errors, 'El email es requerido');
            }
            if ($password1 == '') {
                array_push($errors, 'La contraseña es requerida');
            }
            if ($password2 == '') {
                array_push($errors, 'La repetición de contraseña es requerida');
            }
            if ($address == '') {
                array_push($errors, 'La dirección es requerida');
            }
            if ($city == '') {
                array_push($errors, 'La ciudad es requerida');
            }
            if ($state == '') {
                array_push($errors, 'La provincia es requerida');
            }
            if ($postcode == '') {
                array_push($errors, 'El código postal es requerido');
            }
            if ($country == '') {
                array_push($errors, 'El país es requerido');
            }
            if ($password1 != $password2) {
                array_push($errors, 'Ambas claves deben ser iguales');
            }
            if ( ! filter_var($email, FILTER_VALIDATE_EMAIL)) {
                array_push($errors, 'El correo electrónico no es válido');
            }
            if (count($errors) == 0) {
                if ($this->model->createUser($dataForm)) {
                   
                    $data = [
                        'title' => 'Bienvenido/a',
                        'menu' => false,
                        'subtitle' => 'Bienvenid@ a nuestra tienda virtual',
                        'text' => 'Gracias por registrarse en nuestra web',
                        'color' => 'alert-success',
                        'url' => 'menu',
                        'colorButton' => 'btn-success',
                        'textButton' => 'Iniciar'
                    ];

                    $this->view('mensaje', $data);

                } else {
                    $data = [
                        'title' => 'Error en el registro',
                        'menu' => false,
                        'subtitle' => 'Error en el registro',
                        'text' => 'Se ha producido un error durante el registro del usuario',
                        'color' => 'alert-danger',
                        'url' => 'login',
                        'colorButton' => 'btn-danger',
                        'textButton' => 'Regresar'
                    ];

                    $this->view('mensaje', $data);

                }
            } else {
                $data = [
                    'title' => 'Registro',
                    'menu' => false,
                    'errors' => $errors,
                    'dataForm' => $dataForm,
                ];
                $this->view('register', $data);
            }

            $dataForm = [
                'first_name' => $firstName,
                'last_name_1' => $lastName1,
                'last_name_2' => $lastName2,
                'email' => $email,
                'password1' => $password1,
                'password2' => $password2,
                'address' => $address,
                'city' => $city,
                'state' => $state,
                'postcode' => $postcode,
                'country' => $country,
           ];

        }else{
            $data = [
                'title' => 'Registro',
                'menu' => 'false',
            ];
            $this->view('register',$data);
        }
     
    }

    public function olvido()
    {
        echo "Estoy en el método olvido";
    }
}