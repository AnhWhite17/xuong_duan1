<?php
class loginController {
    public function login(){
        include 'app/Views/Admin/login.php';
    }
    public function postLogin(){
        // $_POST['name'];
        // $_POST['password'];
        $homeModel = new HomeModel();
        $dataUsers = $homeModel->checkLogin();
        if ($dataUsers) {
            $_SESSION['users'] = [
                'id_user' => $dataUsers->id_user,
                'user' => $dataUsers->user,
                'email' => $dataUsers->email,
                'role' => $dataUsers->role,
            ];
            header("Location: /duan1");
            exit;
        } else{
            $_SESSION['error'] = "Email hoặc Password không đúng";
            header("Location: " . BASE_URL . "?role=admin&act=login");
            exit;
        }
    }
    public function logout() {
        if(isset($_SESSION['users'])){
            unset($_SESSION['users']);
        }
        $_SESSION['error'] = "Bạn đã cút";
        header("Location: " . BASE_URL . "?role=admin&act=login");
        exit;
    }
}