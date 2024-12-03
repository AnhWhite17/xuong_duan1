<?php

class CatalogModel
{
    public $db;

    public function __construct()
    {
        $this->db = new Database();
    }


    // Lấy tất cả danh mục
    public function getAllCatalogs()
    {
        $sql = "SELECT * FROM product_catalog";
        $query = $this->db->pdo->query($sql); // Sử dụng pdo->query
        $result = $query->fetchAll(); // Trả về tất cả kết quả
        return $result;
    }

    // Lấy sản phẩm theo danh mục
    public function getProductsByCatalog($id_catalog)
    {
        $sql = "SELECT * FROM products WHERE id_catalog = :id_catalog";
        $stmt = $this->db->pdo->prepare($sql); // Sử dụng prepare để truyền tham số
        $stmt->bindParam(':id_catalog', $id_catalog); // Gắn giá trị vào tham số
        $stmt->execute(); // Thực thi truy vấn
        $result = $stmt->fetchAll(); // Trả về tất cả kết quả
        return $result;
    }
}
