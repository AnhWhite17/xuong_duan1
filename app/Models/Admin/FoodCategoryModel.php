<?php
// models/FoodCategoryModel.php

class FoodCategoryModel
{
    public $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    // Lấy tất cả danh mục
    public function getAllCategories()
    {
        $sql = "SELECT * FROM product_catalog";
        $query = $this->db->pdo->query($sql);
        $result = $query->fetchAll();
        return $result;
    }

    // Thêm danh mục mới
    public function addCategory($name_catalog)
    {
        $sql = "INSERT INTO product_catalog (name_catalog) VALUES (:name_catalog)";
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->bindParam(':name_catalog', $name_catalog);
        if ($stmt->execute()) {
            return $this->db->pdo->lastInsertId();  // Return last inserted ID if needed
        }
        return false;
    }

    // Xóa danh mục theo ID
    public function deleteCategory($id_catalog)
    {
        $sql = "DELETE FROM product_catalog WHERE id_catalog = :id_catalog";
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->bindParam(':id_catalog', $id_catalog, PDO::PARAM_INT);
        return $stmt->execute();
    }

    // Lấy danh mục theo ID
    public function getCategoryById($id_catalog)
    {
        $sql = "SELECT * FROM product_catalog WHERE id_catalog = :id_catalog";
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->bindParam(':id_catalog', $id_catalog, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    // Cập nhật danh mục
    public function updateCategory($id_catalog, $name_catalog)
    {
        $sql = "UPDATE product_catalog SET name_catalog = :name_catalog WHERE id_catalog = :id_catalog";
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->bindParam(':name_catalog', $name_catalog);
        $stmt->bindParam(':id_catalog', $id_catalog, PDO::PARAM_INT);
        return $stmt->execute();
    }
}
