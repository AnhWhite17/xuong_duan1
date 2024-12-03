<?php
$role = isset($_GET['role']) ? $_GET['role'] : "user";
$act = isset($_GET['act']) ? $_GET['act'] : "";

if ($role == "user") {
    switch ($act) {
        case '': {
                $homeController = new HomeControlleruser();
                $homeController->dashboard();
                break;
            }
            case 'product-detail': {
                $homeController = new ProductControllerUser();
                $homeController->productDetail();
                break;
            }

            case 'checkout': {
                $homeController = new ProductControllerUser();
                $homeController->checkOut();
                break;
            }
        default: {
                $homeController = new HomeControlleruser();
                $homeController->dashboard();
                break;
            }
    }
} else {
    switch ($act) {
            // http://localhost/duan1/?role=admin&act=home
        case 'home': {
                $homeController = new HomeController();
                $homeController->dashboard();
                break;
            }
            // http://localhost/duan1/?role=admin&act=login
        case 'login': {
                $loginController = new loginController();
                $loginController->login();
                break;
            }
            // http://localhost/duan1/?role=admin&act=post-login
        case 'post-login': {
                $loginController = new loginController();
                $loginController->postLogin();
                break;
            }
        case 'logout': {
                $loginController = new loginController();
                $loginController->logout();
                break;
            }
        case 'all_user': {
                $userController = new userController();
                $userController->getalluser();
                break;
            }
        case 'add_user': {
                $userController = new userController();
                $userController->addlluser();
                break;
            }
        case 'post_add_user': {
                $homeController = new userController();
                $homeController->addpostlluser();
                break;
            }
        case 'update_user': {
                $userController = new userController();
                $userController->update();
                break;
            }
        case 'update_post_user': {
                $userController = new userController();
                $userController->updatepostuser();
                break;
            }
        case 'delete_user': {
                $userController = new userController();
                $userController->delete_user();
                break;
            }
        case 'danhmuc': {
                $homeController = new FoodCategoryController();
                $homeController->index();
                break;
            }
        case 'delete': {
                $homeController = new FoodCategoryController();
                $homeController->delete();
                break;
            }
        case 'createForm': {
                $homeController = new FoodCategoryController();
                $homeController->createForm();
                break;
            }
        case 'create': {
                $homeController = new FoodCategoryController();
                $homeController->create();
                break;
            }
        case 'editForm': {
                $homeController = new FoodCategoryController();
                $homeController->editForm();
                break;
            }
        case 'update': {
                $homeController = new FoodCategoryController();
                $homeController->update();
                break;
            }
        case 'product': {
                $homeController = new ProductController();
                $homeController->index();
                break;
            }
        case 'form-create-product': {
                $homeController = new ProductController();
                $homeController->formCreateProduct();
                break;
            }
        case 'create-product': {
                $homeController = new ProductController();
                $homeController->createProduct();
                break;
            }
        case 'delete-product': {
                $homeController = new ProductController();
                $homeController->deleteProduct();
                break;
            }
        case 'update-product': {

                $homeController = new ProductController();
                $homeController->updateProduct();
                break;
            }
        case 'update-post-product': {
                $homeController = new ProductController();
                $homeController->updatePostProduct();
                break;
            }
        case 'show-product': {
                $homeController = new ProductController();
                $homeController->showProduct();
                break;
            }
        
        default: {
                $homeController = new HomeController();
                $homeController->dashboard();
                break;
            }
    }
}
