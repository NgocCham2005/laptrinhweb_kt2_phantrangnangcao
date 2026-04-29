<?php

require_once __DIR__ . '/interface/ProductRepositoryInterface.php';
require_once __DIR__ . '/../models/Product.php';
require_once __DIR__ . '/../../core/Database.php';

class ProductRepository implements ProductRepositoryInterface
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
    }

    public function getAll($limit, $offset, $sort = 'default')
    {
        $limit = (int)$limit;// ép kiểu int để tránh lỗi SQL Injection
        $offset = (int)$offset;// ép kiểu int để tránh lỗi SQL Injection

        $orderBy = "MaSanPham DESC";

        if ($sort == 'price_asc') {
            $orderBy = "Gia ASC";
        } elseif ($sort == 'price_desc') {
            $orderBy = "Gia DESC";
        } elseif ($sort == 'name_asc') {
            $orderBy = "TenSanPham ASC";
        }

        $sql = "SELECT * FROM sanpham 
                ORDER BY $orderBy 
                LIMIT $limit OFFSET $offset";

        $stmt = $this->db->query($sql);
        $rows = $stmt->fetchAll();

        $products = [];

        foreach ($rows as $row) {
            $products[] = Product::fromArray($row);
        }

        return $products;
    }

    public function countAll()
    {
        $sql = "SELECT COUNT(*) as total FROM sanpham";
        $stmt = $this->db->query($sql);
        $result = $stmt->fetch();

        return $result['total'];
    }
}