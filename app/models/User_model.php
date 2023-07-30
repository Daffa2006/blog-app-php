<?php

class User_model {
    private $table = 'users';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllUsers() 
    {
        $this->db->query('SELECT * FROM' . $this->table);
        return $this->db->resultSet();
    }
    public function addUser($data) 
    {
        $this->db->query("INSERT INTO" . $this->table . "VALUES ('', :username ,:password, :role)") ;
        $this->db->bind('username', $data['username']);
        $this->db->bind('username', $data['password']);

        $this->db->execute();
    }
    public function getUserByUsername($username)
    {
        $this->db->query('SELECT * FROM' . $this->table . 'WHERE username=:username');
        return $this->db->bind('username', $username);
    }

    public function getUserByPassword($password)
    {
        $this->db->query('SELECT * FROM' . $this->table . 'WHERE password=:password');
        return $this->db->bind('password', $password);
    }
}   