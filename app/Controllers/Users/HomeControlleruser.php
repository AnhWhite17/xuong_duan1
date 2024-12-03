<?php
// app/Controllers/Users/HomeControlleruser.php
class HomeControlleruser
{

    public function dashboard()
    {
        $ProductModelUser = new ProductModelUser();
        $CatalogModel = new CatalogModel();

        // Lấy tất cả sanr phẩm
        $getAllProducts = $ProductModelUser->getAllProducts();
        $categories = $CatalogModel->getAllCatalogs();

        // Hàm tìm kiếm sản phẩm theo tên


        $name = isset($_GET['name']) ? $_GET['name'] : '';
        $category = isset($_GET['category']) ? $_GET['category'] : '';

        $results = $ProductModelUser->searchProducts($name, $category);

        include 'app/Views/Users/index.php';
    }



    // Xử lý tìm kiếm
    public function handleSearch()
    {
        $ProductModelUser = new ProductModelUser();
        $name = isset($_GET['name']) ? $_GET['name'] : '';
        $category = isset($_GET['category']) ? $_GET['category'] : '';

        $results = $ProductModelUser->searchProducts($name, $category);
        include 'views/search_results.php';
    }
}
