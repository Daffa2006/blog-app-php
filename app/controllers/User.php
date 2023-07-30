<?php

class User extends Controller {
    public function index() {
        $this->register();
    }
    public function register() 
    {
        $data['title'] = 'Sign Up';
        // $this->model('User_model')->getUserByUsername();
        if( isset($_POST["submit"])) {
            $username = htmlspecialchars(stripslashes($_POST["username"]));
            $password = htmlspecialchars($_POST["password"]);
            $confirmPassword = htmlspecialchars($_POST["confirm_password"]);
            
            if($password !== $confirmPassword) {
                echo"
                    <script>
                    alert('konfirmasi password yang anda masukkan salah');
                    </script>
                ";
            }
           
        }
        $this->view('templates/header', $data);
        $this->view('register/index');
        $this->view('templates/footer');
    }

    public function login()
    {
        $data['title'] = 'Login';
        $this->view('templates/header', $data);
        $this->view('login/index');
        $this->view('templates/footer');
    }


}