<?php

class userController{
    public function getalluser(){
        $userModel = new userModel;
        $listuser = $userModel->getalldata();
        include 'app/Views/Admin/layouts/user.php';
    }
    public function addlluser(){
        include 'app/Views/Admin/layouts/adduser.php';
    }
    public function addpostlluser(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
        

        // thêm ảnh
        $uploadir = 'asset/Admin/upload/';
        $allowedTypes = ['image/jpg', 'image/jpeg', 'image/png', 'image/gif'];
        $destpath = "";
        if(!empty($_FILES['img']['name'])){
            $filetmpath = $_FILES['img']['tmp_name'];
            $filetype = mime_content_type($filetmpath);
            $filename = basename($_FILES['img']['name']);
            $fileextention = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

            $newfilename = uniqid() .'.'. $fileextention;
            

            if(in_array($filetype,$allowedTypes)){
                $destpath = $uploadir . $newfilename;
                if(!move_uploaded_file($filetmpath,$destpath)){
                    
                    $destpath = "";
                }
            }
        }
        $userModel = new userModel;
        $message = $userModel->adduserTodb($destpath) ;

        if($message){
            $_SESSION['message'] =  'Thêm mới thành công';
            header("Location: " . BASE_URL . "/?role=admin&act=all_user");
            exit;
        }else{
            $_SESSION['message'] =  'Thêm mới thất bại';
        header("Location: " . BASE_URL . "/?role=admin&act=all_user");
        exit;
        }
    }
    }
    public function update(){
        if(!isset($_GET['id_user'])){
            $_SESSION['message'] =  ('Vui lòng chọn user cần sửa');
            header("Location: " . BASE_URL . "?role=admin&act=all_user");
            exit;
        }
        
        $userModel = new userModel;
        $user = $userModel->getUserById() ;
        if(!$user){
            $_SESSION['message'] =  ('Không tìm thấy dữ liệu');
            header("Location: " . BASE_URL . "?role=admin&act=all_user");
            exit;

        }
        include 'app/Views/Admin/layouts/update_user.php';
    }

    public function updatepostuser(){

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(!isset($_GET['id_user'])){
                $_SESSION['message'] =  ('Vui lòng chọn user cần sửa');
                header("Location: " . BASE_URL . "?role=admin&act=all_user");
                exit;
            }
            $userModel = new userModel;
        $user = $userModel->getUserById() ;

            // thêm ảnh
            $uploadir = 'asset/Admin/upload/';
            $allowedTypes = ['image/jpg', 'image/jpeg', 'image/png', 'image/gif'];
            $destpath = $user->img;
            if(!empty($_FILES['img']['name'])){
                $filetmpath = $_FILES['img']['tmp_name'];
                $filetype = mime_content_type($filetmpath);
                $filename = basename($_FILES['img']['name']);
                $fileextention = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
    
                $newfilename = uniqid() .'.'. $fileextention;
                
    
                if(in_array($filetype,$allowedTypes)){
                    $destpath = $uploadir . $newfilename;
                    if(!move_uploaded_file($filetmpath,$destpath)){
                        
                        $destpath = "";
                    }
                    // xoa anh cu
                    unlink($user->img);
                }
            }
            $userModel = new userModel;
            $message = $userModel->updateuserTodb($destpath) ;
    
            if($message){
                $_SESSION['message'] =  ('Update thành công');
                header("Location: " . BASE_URL . "/?role=admin&act=all_user");
                exit;
            }else{
            echo "alert('Thất bại')";
            header("Location: " . BASE_URL . "/?role=admin&act=all_user");
            }
        }
    }
    public function delete_user(){
        $userModel = new userModel;
            
            $user = $userModel->getUserById() ;
// xoa anh 
        if($user->img !="" && $user->img != null){
            unlink($user->img);
        }


            $message = $userModel->deleteuser() ;
            if($message){
                $_SESSION['message'] =  ('Xóa thành công');
                header("Location: " . BASE_URL . "?role=admin&act=all_user");
                exit;
            }else{
                $_SESSION['message'] =  ('Xóa thất bại');
            header("Location: " . BASE_URL . "?role=admin&act=all_user");
            }
        
    }
}