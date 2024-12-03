<?php
class HomeModeluser
{
    public $db;
    public function __construct()
    {
        $this->db = new Database();
    }
    public function getUsers()
    {
        $sql = "select * from users";
        $query = $this->db->pdo->query($sql);
        $result = $query->fetchAll();
        return $result;
    }
    public function checkLogin()
    {
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $sql = "SELECT * FROM users WHERE email = :email and role=1";
        $stmt = $this->db->pdo->prepare($sql);

        // Gắn giá trị vào câu lệnh SQL
        $stmt->bindParam(':email', $email);

        // Thực thi câu lệnh
        $stmt->execute();
        // Lấy thông tin người dùng từ cơ sở dữ liệu
        $user = $stmt->fetch();

        // Kiểm tra mật khẩu
        if ($user && password_verify($pass, $user->pass)) {
            return $user; // Đăng nhập thành công
        }
        return false; // Đăng nhập thất bại

    }
}
