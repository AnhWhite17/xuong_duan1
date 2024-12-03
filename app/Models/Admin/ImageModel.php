<?php
class ImageModel {
    public $db;
    public function __construct()
    {
        $this->db = new Database();
    }
    public function addImage($image_path, $product_id) {
        $query = "INSERT INTO `image`( `name_img`, `id_product`) VALUES (:name_img, :id_product)";
        
        $stmt = $this->db->pdo->prepare($query);
        $stmt->bindParam(':name_img', $image_path);
        $stmt->bindParam(':id_product', $product_id);
        return $stmt->execute();
    }
    public function deleteSubImage(){
        $id = $_GET['id'];
        $sqlImage = "DELETE FROM `image` WHERE id_product = :id";
        $stmt = $this->db->pdo->prepare($sqlImage);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
?>