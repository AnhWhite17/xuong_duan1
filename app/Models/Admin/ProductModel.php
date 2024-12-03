<?php

class ProductModel
{
    public $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    // Lấy tất cả sản phẩm
    public function getAllProduct()
    {
        $sql = "SELECT products.id_product, products.name_product, products.sale_price, products.price, products.img, products.describe, products.size, products.quantity, products.number_views, product_catalog.name_catalog AS catalogName FROM `products` JOIN product_catalog ON products.id_catalog = product_catalog.id_catalog";
        $query = $this->db->pdo->query($sql);
        $result = $query->fetchAll();
        return $result;
    }

    // Thêm sản phẩm mới
    public function addProduct($destPath) {
        $name_product = $_POST['name_product'];
        $sale_price = $_POST['sale_price'];
        $price = $_POST['price'];
        $img = $destPath;
        $describe = $_POST['describe'];
        $size = $_POST['size'];
        $quantity = $_POST['quantity'];
        $catalog = $_POST['catalog'];

        $sql = "
        INSERT INTO `products`(`name_product`, `sale_price`, `price`, `img`, `describe`, `size`, `quantity`, `id_catalog`)
        VALUES(:name_product, :sale_price, :price, :img, :describe, :size, :quantity, :id_catalog)
        ";

        $stmt = $this->db->pdo->prepare($sql);
        $stmt->bindParam(':name_product', $name_product);
        $stmt->bindParam(':sale_price', $sale_price);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':img', $img);
        $stmt->bindParam(':describe', $describe);
        $stmt->bindParam(':size', $size);
        $stmt->bindParam(':quantity', $quantity);
        $stmt->bindParam(':id_catalog', $catalog);

        if ($stmt->execute()) {
            $lastInsertId = $this->db->pdo->lastInsertId();
            return $lastInsertId;
        } else{
            return false;
        }
    }

    // Lấy sản phẩm theo ID
    public function getProductById()
    {
        $id_product = $_GET['id'];
        $sql = "select * from products where id_product = :id_product";
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->bindParam(':id_product', $id_product);
        if ($stmt->execute()) {
            return $stmt->fetch();
        }
        return false;
    }

    // Cập nhật sản phẩm
    public function updateProductToDb($destPath)
    {
        $name_product = $_POST['name_product'];
        $sale_price = $_POST['sale_price'];
        $price = $_POST['price'];
        $img = $destPath;
        $describe = $_POST['describe'];
        $size = $_POST['size'];
        $quantity = $_POST['quantity'];
        $catalog = $_POST['catalog'];
        // var_dump($_POST['name_product']); die;

        $sql = "
            UPDATE products SET name_product=:name_product, sale_price=:sale_price, price=:price, img=:img, `describe`=:describe, size=:size, quantity=:quantity, id_catalog=:id_catalog
            WHERE id_product=:id
        ";

        $stmt = $this->db->pdo->prepare($sql);
        $stmt->bindParam(':name_product', $name_product);
        $stmt->bindParam(':sale_price', $sale_price);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':img', $img);
        $stmt->bindParam(':describe', $describe);
        $stmt->bindParam(':size', $size);
        $stmt->bindParam(':quantity', $quantity);
        $stmt->bindParam(':id_catalog', $catalog);
        $stmt->bindParam(':id', $_GET['id']);

        return $stmt -> execute();  
    }

    // Lấy ảnh phụ
    public function getImageById(){
        $id = $_GET['id'];
        $sql = "SELECT * FROM `image` WHERE id_product = :id";
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        if ($stmt->execute()) {
            return $stmt->fetchAll();
        }
        return false;
    }

    // Xóa sản phẩm theo ID
    public function deleteProductToDb(){
        $id = $_GET['id'];
        $sqlProduct = "DELETE FROM `products` WHERE id_product = :id";
        $stmt1 = $this->db->pdo->prepare($sqlProduct);
        $stmt1->bindParam(':id', $id);

        $sqlImage = "DELETE FROM `image` WHERE id_product = :id";
        $stmt2 = $this->db->pdo->prepare($sqlImage);
        $stmt2->bindParam(':id', $id);
        if ($stmt1->execute() && $stmt2->execute()) {
            return true;
        } else{
            return false;
        }
    }
}