<?php
class HomeModel{
    public $db;
    public function __construct()
    {
        $this->db = new Database();
    }
    public function getUsers(){
        $sql = "select * from users";
        $query = $this->db->pdo->query($sql);
        $result = $query->fetchAll();
        return $result;
    }
    public function checkLogin(){
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $sql = "SELECT * FROM users WHERE email = :email and role IN (1, 2)";
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->bindParam(':email' , $email);
        $stmt->execute();

        $result = $stmt->fetch();
    if($result && password_verify($pass, $result->pass)){ return $result; }
        return false;
    }
}