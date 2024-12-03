<?php

class userModel{
    public $db;
    public function __construct()
    {
        $this->db = new Database();
    }
    public function getalldata(){
        $sql = "select * from users";
        $query = $this->db->pdo->query($sql);
        $result = $query->fetchAll();
        return $result;
    }
    public function adduserTodb($destpath){
        $user = $_POST['user'];
        $email = $_POST['email'];
        $pass = password_hash($_POST['pass'], PASSWORD_BCRYPT);
        $address = $_POST['address'];
        $tel = $_POST['tel'];
        $role = $_POST['role'];
        $img = $destpath;


        $sql = "INSERT INTO users(user, pass, email, address, img, tel, role) VALUES(:user,:pass,:email,:address,:img,:tel,:role)";
        $stmt = $this->db->pdo->prepare($sql);
       
        $stmt->bindParam(':user' , $user);
        $stmt->bindParam(':pass' , $pass);
        $stmt->bindParam(':email' , $email);
        $stmt->bindParam(':address' , $address);
        $stmt->bindParam(':img' , $img);
        $stmt->bindParam(':tel' , $tel);
        $stmt->bindParam(':role' , $role);
        $stmt->execute();

        return ;

    }

    public function getUserById(){
        $id_user = $_GET['id_user'];
        $sql = 'SELECT * FROM users WHERE id_user = :id_user';
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->bindParam('id_user' ,$id_user);
        if($stmt->execute()){
            return $stmt->fetch();
        }
        return false;
    }
    public function updateuserTodb($destpath){
        
            $userData = $this->getUserById(); // Fetch the user object
            $username = $_POST['user'];
            $email = $_POST['email'];
            $pass = !empty($_POST['pass']) ? password_hash($_POST['pass'], PASSWORD_BCRYPT) : $userData->pass; // Use existing password if none provided
            $address = $_POST['address'];
            $tel = $_POST['tel'];
            $role = $_POST['role'];
            $img = $destpath;
        
            $sql = "UPDATE users 
                    SET user=:user, pass=:pass, email=:email, address=:address, img=:img, tel=:tel, role=:role 
                    WHERE id_user=:id_user";
            $stmt = $this->db->pdo->prepare($sql);
           
            $stmt->bindParam(':user', $username);
            $stmt->bindParam(':pass', $pass);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':address', $address);
            $stmt->bindParam(':img', $img);
            $stmt->bindParam(':tel', $tel);
            $stmt->bindParam(':role', $role);
            $stmt->bindParam(':id_user', $_GET['id_user']);
            $stmt->execute();
        }
  public function deleteuser(){
    $id_user = $_GET['id_user'];
    $sql = "DELETE FROM users WHERE id_user = :id_user";
    $stmt = $this->db->pdo->prepare($sql);
    $stmt->bindParam(':id_user', $id_user);
    return $stmt->execute();
  
  }

}