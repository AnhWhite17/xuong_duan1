<?php
// models/ProductModelUser.php

class ProductModelUser
{
    public $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    // Lấy tất cả sản phẩm
    public function getAllProducts()
    {
        $sql = "SELECT * FROM products";
        $query = $this->db->pdo->query($sql);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    // Lấy sản phẩm theo ID
    public function getProductById()
    {
        if (isset($_GET['id_product'])) {
            $sql = "SELECT * FROM products WHERE id_product = :id_product";
            $stmt = $this->db->pdo->prepare($sql);
            $stmt->bindParam(':id_product', $_GET['id_product']);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
        }
    }

    // Lấy ảnh sản phẩm theo ID
    public function getImageById()
    {
        if (isset($_GET['id_product'])) {
            $sql = "SELECT * FROM `image` WHERE id_product = :id_product";
            $stmt = $this->db->pdo->prepare($sql);
            $stmt->bindParam(':id_product', $_GET['id_product']);
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        }
    }

    // Tăng lượt xem sản phẩm
    public function upView(){
        $sql = "UPDATE products SET number_views = number_views + 1 WHERE id_product = :id_product";
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->bindParam(':id_product', $_GET['id_product']);
        $stmt->execute();
    }

    public function searchProducts($name, $category)
    {
        // Sửa lại tên cột thành name_product
        $sql = "SELECT * FROM products WHERE name_product LIKE :name";
        $params = [':name' => "%$name%"];

        if (!empty($category)) {
            $sql .= " AND id_catalog = :category";
            $params[':category'] = $category;
        }

        // Chuẩn bị và thực thi truy vấn
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->execute($params);

        // Trả về kết quả dưới dạng mảng kết hợp
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}
