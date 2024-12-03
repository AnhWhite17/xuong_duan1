<?php
session_start();
//Database
include 'app/Database/Database.php';

//Model
include 'app/Models/Admin/HomeModel.php';
include 'app/Models/Admin/userModel.php';
include 'app/Models/Admin/FoodCategoryModel.php';
include 'app/Models/Admin/ProductModel.php';
include 'app/Models/Admin/ImageModel.php';

//Model user
include 'app/Models/Users/HomeModeluser.php';
include 'app/Models/Users/ProductModelUser.php';
include 'app/Models/Users/CatalogModel.php';

//Controller
include 'app/Controllers/Admin/ControllerAdmin.php';
include 'app/Controllers/Admin/HomeController.php';
include 'app/Controllers/Admin/loginController.php';
include 'app/Controllers/Admin/userController.php';
include 'app/Controllers/Admin/FoodCategoryController.php';
include 'app/Controllers/Admin/ProductController.php';

//Controller user
include 'app/Controllers/Users/HomeControlleruser.php';
include 'app/Controllers/Users/ProductController.php';
include 'app/Controllers/Users/CatalogController.php';

const BASE_URL = "http://localhost/duan1/";

//Router
include 'router/web.php';


// echo password_hash('19112011', PASSWORD_BCRYPT);
?>