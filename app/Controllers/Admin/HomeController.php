<?php
class HomeController extends ControllerAdmin{
    public function dashboard(){
        $homeModel = new HomeModel();
        $dataUsers = $homeModel->getUsers();
        include 'app/Views/Admin/index.php';
    }
   
}