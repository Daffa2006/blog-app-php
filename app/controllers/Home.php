<?php

class Home extends Controller {
    public function index($nama = 'Daf') {

        $data['title'] = 'Home';
        $this->view('templates/header', $data);
        $this->view('home/index');
        $this->view('templates/footer');
    }
}