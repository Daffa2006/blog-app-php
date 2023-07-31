<?php

class Task extends Controller {
    public function index() {
        if(!isset($_SESSION["login"])) {
            header("location: " . BASE_URL . "/user/login");
        }
        $data['title'] = 'Task';
        $this->view('templates/header', $data);
        $this->view('task/index');
        $this->view('templates/footer');
    }
    public function id() {
        echo '439043489384';
    }

}