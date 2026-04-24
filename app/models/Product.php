<?php

class Product
{
    private $maSanPham;
    private $tenSanPham;
    private $gia;
    private $chatLieu;
    private $loaiSanPham;
    private $hinhAnh;

    public function __construct($maSanPham, $tenSanPham, $gia, $chatLieu = null, $loaiSanPham = null, $hinhAnh = null) 
    {
        $this->maSanPham = $maSanPham;
        $this->tenSanPham = $tenSanPham;
        $this->gia = $gia;
        $this->chatLieu = $chatLieu;
        $this->loaiSanPham = $loaiSanPham;
        $this->hinhAnh = $hinhAnh;
    }

    // Getter
    public function getMaSanPham() {
        return $this->maSanPham;
    }

    public function getTenSanPham() {
        return $this->tenSanPham;
    }

    public function getGia() {
        return $this->gia;
    }

    public function getChatLieu() {
        return $this->chatLieu;
    }

    public function getLoaiSanPham() {
        return $this->loaiSanPham;
    }

    public function getHinhAnh() {
        return $this->hinhAnh;
    }

    // Convert từ DB → Object
    public static function fromArray($data) {
        return new Product(
            $data['MaSanPham'],
            $data['TenSanPham'],
            $data['Gia'],
            $data['ChatLieu'] ?? null,
            $data['LoaiSanPham'] ?? null,
            $data['HinhAnh'] ?? null
        );
    }
}
