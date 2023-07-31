<?php

class User extends Controller {
    public function index() {
        $this->register();
    }
    public function register() 
    {
        $data['title'] = 'Sign Up';
        $this->view('templates/header', $data);
        $this->view('register/index');
        $this->view('templates/footer');
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

                return false;
            }
            $password = password_hash($password, PASSWORD_DEFAULT);
            $this->model('User_model')->addUser($username, $password);
            header("location: " . BASE_URL . "/user/login");
            // try {
              
            //     if($this->model('User_model')->addUser($username, $password) > 0){
            //         echo "
            //             <script>
            //                 alert('Akun telah dibuat');
            //             </script>
            //             ";

            //     header("location: " . BASE_URL . "/task");
            // } else {
            //     echo "error : " . $this->model('User_model')->addUser($username, $password);
            // }
            
            // } catch (PDOException $e) {
            //     echo "error". $e->getMessage();
            // }
        }
    }

    public function login()
    {
        $data['title'] = 'Login';
        $this->view('templates/header', $data);
        $this->view('login/index');
        $this->view('templates/footer');

        
    }


}