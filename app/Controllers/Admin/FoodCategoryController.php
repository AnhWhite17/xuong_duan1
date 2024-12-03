<?php
// controllers/FoodCategoryController.php

class FoodCategoryController
{
    private $model;

    public function __construct()
    {
        $this->model = new FoodCategoryModel();
    }

    // Hiển thị danh sách danh mục
    public function index()
    {
        $categories = $this->model->getAllCategories();
        include 'app/Views/Admin/food_categories/index.php';
    }

    // Hiển thị form thêm danh mục mới
    public function createForm()
    {
        include 'app/Views/Admin/food_categories/create_form.php';
    }

    // Xử lý thêm danh mục mới
    public function create()
    {
        $error = null;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name_catalog = trim($_POST['name_catalog']);
            if (!empty($name_catalog)) {
                if ($this->model->addCategory($name_catalog)) {
                    header('Location: ?role=admin&act=danhmuc');
                    exit();
                } else {
                    $error = "Có lỗi xảy ra khi thêm danh mục.";
                }
            } else {
                $error = "Tên danh mục không được để trống.";
            }
        }
        include 'app/Views/Admin/food_categories/index.php';
    }

    // Xử lý xóa danh mục
    public function delete()
    {
        $error = null;
        if (isset($_GET['id_catalog'])) {
            $id_catalog = (int)$_GET['id_catalog'];
            if ($this->model->deleteCategory($id_catalog)) {
                header('Location: ?role=admin&act=danhmuc');
                exit();
            } else {
                $error = "Có lỗi xảy ra khi xóa danh mục.";
            }
        } else {
            $error = "ID danh mục không hợp lệ.";
        }
        // Include the view even when there is an error
        $categories = $this->model->getAllCategories();
        include 'app/Views/Admin/food_categories/index.php';
    }


    // Hiển thị form chỉnh sửa danh mục
    public function editForm()
    {
        $error = null;
        if (isset($_GET['id_catalog'])) {
            $id_catalog = (int)$_GET['id_catalog'];
            $category = $this->model->getCategoryById($id_catalog);
            if ($category) {
                include 'app/Views/Admin/food_categories/edit_form.php';
            } else {
                $error = "Danh mục không tồn tại.";
                include 'app/Views/Admin/food_categories/edit_form.php';
            }
        } else {
            $error = "ID danh mục không hợp lệ.";
            include 'app/Views/Admin/food_categories/edit_form.php';
        }
    }

    // Xử lý cập nhật danh mục
    public function update()
    {
        $error = null;
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id_catalog'])) {
            $id_catalog = (int)$_POST['id_catalog'];
            $name_catalog = trim($_POST['name_catalog']);
            if (!empty($name_catalog)) {
                if ($this->model->updateCategory($id_catalog, $name_catalog)) {
                    header('Location: ?role=admin&act=danhmuc');
                    exit();
                } else {
                    $error = "Có lỗi xảy ra khi cập nhật danh mục.";
                }
            } else {
                $error = "Tên danh mục không được để trống.";
            }
        }
        include 'app/Views/Admin/food_categories/edit_form.php';
    }
}
