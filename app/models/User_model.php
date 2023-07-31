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
    public function addUser($username, $password, $role = 'member') 
    {
        $this->db->query("INSERT INTO " . $this->table . " VALUES ('', :username ,:password, :role)") ;
        $this->db->bind('username', $username);
        $this->db->bind('password', $password);
        $this->db->bind('role', $role);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function validateUser($username, $password)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE username=:username AND password=:password');
        $this->db->bind('username', $username);
        $this->db->bind('password', $password);

    }

    public function getUserByPassword($password)
    {
        $this->db->query('SELECT * FROM' . $this->table . 'WHERE password=:password');
        return $this->db->bind('password', $password);
    }
}   