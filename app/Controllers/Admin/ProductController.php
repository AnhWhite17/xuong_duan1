<?php

class ProductController extends ControllerAdmin
{
    private $db;
    private $model;
    private $imageModel;
    public function __construct()
    {
        $this->model = new ProductModel();
        $this->imageModel = new ImageModel($this->db);
    }

    // Hiển thị danh sách sản phẩm
    public function index()
    {
        $products = $this->model->getAllProduct();
        include 'app/Views/Admin/products/index.php';
    }

    // Hiển thị form thêm sản phẩm mới
    public function formCreateProduct()
    {
        $catalogModel = new FoodCategoryModel();
        $catalogs = $catalogModel->getAllCategories();
        include 'app/Views/Admin/products/create_product.php';
    }

    // Check validate
    public function checkValidate()
    {
        $name_product = $_POST['name_product'];
        $catalog = $_POST['catalog'];
        $sale_price = $_POST['sale_price'];
        $price = $_POST['price'];
        $size = $_POST['size'];
        $quantity = $_POST['quantity'];

        if ($name_product != "" && $catalog != "" && $sale_price != "" && $price != "" && $size != "" && $quantity != "") {
            return true;
        } else {
            $_SESSION['error'] = "Bạn nhập thiếu thông tin";
            return false;
        }
    }

    // Xử lý thêm sản phẩm mới
    public function createProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (!$this->checkValidate()) {
                header("Location: " . BASE_URL . "?role=admin&act=form-create-product");
                exit;
            }
            $uploadDir = 'asset/Admin/images/upload/';
            $allowedTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
            $destPath = "";
            if (!empty($_FILES['img']['name'])) {
                $fileTmpPath = $_FILES['img']['tmp_name'];
                $fileType = mime_content_type($fileTmpPath);
                $fileName = basename($_FILES['img']['name']);
                $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

                $newFileName = uniqid() . '.' . $fileExtension;
                if (in_array($fileType, $allowedTypes)) {
                    $destPath = $uploadDir . $newFileName;
                    if (!move_uploaded_file($fileTmpPath, $destPath)) {
                        $destPath = "";
                    }
                }

                $product_id = $this->model->addProduct($destPath);
                // Xử lý upload ảnh phụ (nếu có)
                if (!empty($_FILES['additional_images']['name'][0])) {
                    foreach ($_FILES['additional_images']['name'] as $key => $imageName) {
                        $imageTmpPath = $_FILES['additional_images']['tmp_name'][$key];
                        $imageType = mime_content_type($imageTmpPath);
                        $imageExtension = strtolower(pathinfo($imageName, PATHINFO_EXTENSION));
                        $newImageName = uniqid() . '.' . $imageExtension;

                        if (in_array($imageType, $allowedTypes)) {
                            $additionalImagePath = $uploadDir . $newImageName;
                            if (move_uploaded_file($imageTmpPath, $additionalImagePath)) {
                                // Lưu ảnh phụ vào bảng `image`
                                $this->imageModel->addImage($additionalImagePath, $product_id);
                            }
                        }
                    }
                }
            }

            if ($product_id) {
                $_SESSION['message'] = 'Thêm mới thành công';
                header("Location: " . BASE_URL . "?role=admin&act=product");
                exit;
            } else {
                $_SESSION['message'] = 'Thêm mới không thành công';
                header("Location: " . BASE_URL . "?role=admin&act=product");
                exit;
            }
        }
    }

    // Hiển thị form chỉnh sửa sản phẩm
    public function updateProduct()
    {
        if (!isset($_GET['id'])) {
            $_SESSION['message'] = 'Vui lòng chọn sản phẩm cần chỉnh sửa';
            header("Location: " . BASE_URL . "?role=admin&act=product");
            exit;
        }
        $productModel = new ProductModel();
        $product = $productModel->getProductById();
        $images = $productModel->getImageById();
        $catalogModel = new FoodCategoryModel();
        $catalogs = $catalogModel->getAllCategories();
        if (!$product) {
            $_SESSION['message'] = 'Không tìm thấy dữ liệu';
            header("Location: " . BASE_URL . "?role=admin&act=product");
            exit;
        }

        include 'app/Views/Admin/products/update_product.php';
    }

    // Xử lý cập nhật sản phẩm
    public function updatePostProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if (!isset($_GET['id'])) {
                $_SESSION['message'] = 'Vui lòng chọn sản phẩm cần chỉnh sửa';
                header("Location: " . BASE_URL . "?role=admin&act=product");
                exit;
            }
            if (!$this->checkValidate()) {
                header("Location: " . BASE_URL . "?role=admin&act=update-product&id=" . $_GET['id']);
                exit;
            }

            $productModel = new ProductModel();
            $product = $productModel->getProductById();
            //Xử lý ảnh chính
            $uploadDir = 'asset/Admin/images/upload/';
            $allowedTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
            $destPath = $product->img;
            if (!empty($_FILES['img']['name'])) {
                $fileTmpPath = $_FILES['img']['tmp_name'];
                $fileType = mime_content_type($fileTmpPath);
                $fileName = basename($_FILES['img']['name']);
                $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

                $newFileName = uniqid() . '.' . $fileExtension;
                if (in_array($fileType, $allowedTypes)) {
                    $destPath = $uploadDir . $newFileName;
                    if (!move_uploaded_file($fileTmpPath, $destPath)) {
                        $destPath = "";
                    }
                    unlink($product->img);
                }
            }
            $message = $this->model->updateProductToDb($destPath);
            if (!$message) {
                $_SESSION['message'] = 'Chỉnh sửa không thành công';
                header("Location: " . BASE_URL . "?role=admin&act=update-product&id=" . $_GET['id']);
                exit;
            }
            // Xử lý chỉnh sửa ảnh phụ (nếu có)
            if (!empty($_FILES['additional_images']['name'][0])) {
                $subImage = $productModel->getImageById();
                foreach ($subImage as $key => $value) {
                    if ($value->name_img != null) {
                        unlink($value->name_img);
                    }
                }
                $this->imageModel->deleteSubImage();
                foreach ($_FILES['additional_images']['name'] as $key => $imageName) {
                    $imageTmpPath = $_FILES['additional_images']['tmp_name'][$key];
                    $imageType = mime_content_type($imageTmpPath);
                    $imageExtension = strtolower(pathinfo($imageName, PATHINFO_EXTENSION));
                    $newImageName = uniqid() . '.' . $imageExtension;

                    if (in_array($imageType, $allowedTypes)) {
                        $additionalImagePath = $uploadDir . $newImageName;
                        if (move_uploaded_file($imageTmpPath, $additionalImagePath)) {
                            // Lưu ảnh phụ vào bảng `image`
                            $this->imageModel->addImage($additionalImagePath, $_GET['id']);
                        }
                    }
                }
            }

            $_SESSION['message'] = 'Chỉnh sửa thành công';
            header("Location: " . BASE_URL . "?role=admin&act=product");
            exit;
        }
    }

    // Xử lý xóa sản phẩm
    public function deleteProduct()
    {
        if (!isset($_GET['id'])) {
            $_SESSION['message'] = 'Vui lòng chọn sản phẩm cần xóa';
            header("Location: " . BASE_URL . "?role=admin&act=product");
            exit;
        }

        $productModel = new ProductModel();
        $message = $productModel->deleteProductToDb();

        if ($message) {
            $_SESSION['message'] = 'Xóa thành công';
            header("Location: " . BASE_URL . "?role=admin&act=product");
            exit;
        } else {
            $_SESSION['message'] = 'Xóa không thành công';
            header("Location: " . BASE_URL . "?role=admin&act=product");
            exit;
        }
    }

    //Show sản phẩm
    public function showProduct()
    {
        if (!isset($_GET['id'])) {
            $_SESSION['message'] = 'Vui lòng chọn sản phẩm cần xóa';
            header("Location: " . BASE_URL . "?role=admin&act=product");
            exit;
        }
        $productModel = new ProductModel();
        $product = $productModel->getProductById();
        $images = $productModel->getImageById();
        $catalogModel = new FoodCategoryModel();
        $catalogs = $catalogModel->getAllCategories();
        include 'app/Views/Admin/products/show_product.php';
    }
}
