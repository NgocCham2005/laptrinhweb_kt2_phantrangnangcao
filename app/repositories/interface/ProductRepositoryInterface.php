<?php

require_once __DIR__ . '/../../models/Product.php';

interface ProductRepositoryInterface
{
    // Lấy danh sách (phân trang + sort)
    public function getAll($limit, $offset, $sort = 'default');

    // Đếm tổng sản phẩm
    public function countAll();
}