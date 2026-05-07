<?php
class Database {
    private static $instance = null;//Biến tĩnh để lưu instance của Database, đảm bảo chỉ có 1 kết nối duy nhất trong toàn bộ ứng dụng
    private $conn; //Biến để lưu kết nối PDO

    private function __construct() {
        try {
            $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4";
            $this->conn = new PDO($dsn, DB_USER, DB_PASS, [ //DB_USER, DB_PASS lấy từ config.php
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, //In lỗi ra màn hình
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC //Kết quả trả về dạng mảng kết hợp (associative array) thay vì mảng số (indexed array)
            ]);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public static function getInstance(): self { //Lấy Database object (database hiện tại)
        if (!self::$instance) self::$instance = new self();
        return self::$instance;
    }

    public function getConnection(): PDO { //Lấy kết nối PDO để thực hiện truy vấn
        return $this->conn;
    }
}
?>