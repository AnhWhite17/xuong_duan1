<?php

class ProductControllerUser
{
    private $productModel;
    public function __construct()
    {
        $this->productModel = new ProductModelUser();
    }
    public function productDetail()
    {
        $view = $this->productModel->upView();
        $CatalogModel = new CatalogModel();
        $categories = $CatalogModel->getAllCatalogs();
        
        $product = $this->productModel->getProductById();
        $subImage = $this->productModel->getImageById();
        $getAllProducts = $this->productModel->getAllProducts();

        include 'app/Views/Users/products/product_detail.php';
    }
    public function checkOut()
    {

        include 'app/Views/Users/products/checkout.php';
    }
}