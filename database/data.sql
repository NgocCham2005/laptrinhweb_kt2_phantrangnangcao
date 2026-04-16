CREATE DATABASE Qly_trangsuc;
USE Qly_trangsuc;

CREATE TABLE SanPham (
    MaSanPham NVARCHAR(10) PRIMARY KEY,
    TenSanPham NVARCHAR(255) NOT NULL,
    Gia DECIMAL(10,2) NOT NULL,
    ChatLieu NVARCHAR(100),
    LoaiSanPham NVARCHAR(100),
    HinhAnh NVARCHAR(255),
    TrangThai TINYINT DEFAULT 1-- Nếu không nhập dữ liệu thì tự động để trạng thái =1->đang bán
	-- trạng thái=1: đang bán, trạng thái=0: tạm thời không bán, hoặc không bán,
);


INSERT INTO SanPham (MaSanPham, TenSanPham, Gia, ChatLieu, LoaiSanPham, HinhAnh, TrangThai) VALUES
('SP001', N'Nhẫn vàng 18K', 3500000, N'Vàng', N'Nhẫn', 'images/nhan-vang-18k.png', 1),
('SP002', N'Dây chuyền bạc', 1200000, N'Bạc', N'Dây chuyền', 'images/day-chuyen-bac.png', 1),
('SP003', N'Bông tai kim cương', 5500000, N'Kim cương', N'Bông tai', 'images/bong-tai-kim-cuong.png', 1),
('SP004', N'Lắc tay vàng', 2800000, N'Vàng', N'Lắc tay', 'images/lac-tay-vang.png', 1),
('SP005', N'Nhẫn bạc cao cấp', 800000, N'Bạc', N'Nhẫn', 'images/nhan-bac.png', 1),
('SP006', N'Dây chuyền vàng trắng', 4200000, N'Vàng trắng', N'Dây chuyền', 'images/day-chuyen-vang-trang.png', 1),
('SP007', N'Bông tai bạc', 600000, N'Bạc', N'Bông tai', 'images/bong-tai-bac.png', 1),
('SP008', N'Lắc tay kim cương', 7000000, N'Kim cương', N'Lắc tay', 'images/lac-tay-kim-cuong.png', 1),
('SP009', N'Nhẫn kim cương', 9000000, N'Kim cương', N'Nhẫn', 'images/nhan-kim-cuong.jpg', 1),
('SP010', N'Dây chuyền bạc cao cấp', 2000000, N'Bạc', N'Dây chuyền', 'images/day-chuyen-bac-cao-cap.png', 1),

('SP011', N'Nhẫn vàng 24K', 5000000, N'Vàng', N'Nhẫn', 'images/nhan-vang-24k.png', 1),
('SP012', N'Dây chuyền đá quý', 3000000, N'Đá quý', N'Dây chuyền', 'images/day-chuyen-vang-14k-dinh-da.png', 1),
('SP013', N'Bông tai vàng', 1500000, N'Vàng', N'Bông tai', 'images/bong-tai-vang-18k.png', 1),
('SP014', N'Lắc tay bạc', 900000, N'Bạc', N'Lắc tay', 'images/lac-tay-bac.png', 1),
('SP015', N'Nhẫn vàng trắng', 3700000, N'Vàng trắng', N'Nhẫn', 'images/nhan-vang-trang.png', 1),
('SP016', N'Dây chuyền kim cương', 8000000, N'Kim cương', N'Dây chuyền', 'images/chuyen-kim-cuong.png', 1),
('SP017', N'Bông tai đá quý', 2200000, N'Đá quý', N'Bông tai', 'images/bong-tai-da-quy.png', 1),
('SP018', N'Lắc tay vàng trắng', 2600000, N'Vàng trắng', N'Lắc tay', 'images/lac-tay-vang-trang.png', 1),
('SP019', N'Nhẫn bạc đơn giản', 500000, N'Bạc', N'Nhẫn', 'images/nhan-bac-don-gian.png', 1),
('SP020', N'Dây chuyền thời trang', 700000, N'Hợp kim', N'Dây chuyền', 'images/day-chuyen-thoi-trang.png', 1);

select * from SanPham;