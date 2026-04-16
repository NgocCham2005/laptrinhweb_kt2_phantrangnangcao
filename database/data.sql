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
('SP001', N'Nhẫn vàng 18K', 3500000, N'Vàng', N'Nhẫn', 'images/SP001.png', 1),
('SP002', N'Dây chuyền bạc', 1200000, N'Bạc', N'Dây chuyền', 'images/SP002.png', 1),
('SP003', N'Bông tai kim cương', 5500000, N'Kim cương', N'Bông tai', 'images/SP003.png', 1),
('SP004', N'Lắc tay vàng', 2800000, N'Vàng', N'Lắc tay', 'images/SP004.png', 1),
('SP005', N'Nhẫn bạc cao cấp', 800000, N'Bạc', N'Nhẫn', 'images/SP005.png', 1),
('SP006', N'Dây chuyền vàng trắng', 4200000, N'Vàng trắng', N'Dây chuyền', 'images/SP006.png', 1),
('SP007', N'Bông tai bạc', 600000, N'Bạc', N'Bông tai', 'images/SP007.png', 1),
('SP008', N'Lắc tay kim cương', 7000000, N'Kim cương', N'Lắc tay', 'images/SP008.png', 1),
('SP009', N'Nhẫn kim cương', 9000000, N'Kim cương', N'Nhẫn', 'images/SP009.jpg', 1),
('SP010', N'Dây chuyền bạc cao cấp', 2000000, N'Bạc', N'Dây chuyền', 'images/SP010.png', 1),

('SP011', N'Nhẫn vàng 24K', 5000000, N'Vàng', N'Nhẫn', 'images/SP011.png', 1),
('SP012', N'Dây chuyền đá quý', 3000000, N'Đá quý', N'Dây chuyền', 'images/SP012.png', 1),
('SP013', N'Bông tai vàng', 1500000, N'Vàng', N'Bông tai', 'images/SP013.png', 1),
('SP014', N'Lắc tay bạc', 900000, N'Bạc', N'Lắc tay', 'images/SP014.png', 1),
('SP015', N'Nhẫn vàng trắng', 3700000, N'Vàng trắng', N'Nhẫn', 'images/SP015.png', 1),
('SP016', N'Dây chuyền kim cương', 8000000, N'Kim cương', N'Dây chuyền', 'images/SP016.png', 1),
('SP017', N'Bông tai đá quý', 2200000, N'Đá quý', N'Bông tai', 'images/SP017.png', 1),
('SP018', N'Lắc tay vàng trắng', 2600000, N'Vàng trắng', N'Lắc tay', 'images/SP018.png', 1),
('SP019', N'Nhẫn bạc đơn giản', 500000, N'Bạc', N'Nhẫn', 'images/SP019.png', 1),
('SP020', N'Dây chuyền thời trang', 700000, N'Hợp kim', N'Dây chuyền', 'images/SP020.png', 1),

('SP021', N'Nhẫn bạc đính đá', 950000, N'Bạc', N'Nhẫn', 'images/SP021.png', 1),
('SP022', N'Dây chuyền vàng 18K', 4500000, N'Vàng', N'Dây chuyền', 'images/SP022.png', 1),
('SP023', N'Bông tai ngọc trai', 1800000, N'Ngọc trai', N'Bông tai', 'images/SP023.png', 1),
('SP024', N'Lắc tay bạc cao cấp', 1100000, N'Bạc', N'Lắc tay', 'images/SP024.png', 1),
('SP025', N'Nhẫn vàng đính đá quý', 6000000, N'Vàng', N'Nhẫn', 'images/SP025.png', 1),
('SP026', N'Dây chuyền bạc đơn giản', 650000, N'Bạc', N'Dây chuyền', 'images/SP026.png', 1),
('SP027', N'Bông tai vàng trắng', 2100000, N'Vàng trắng', N'Bông tai', 'images/SP027.png', 1),
('SP028', N'Lắc tay đá quý', 3200000, N'Đá quý', N'Lắc tay', 'images/SP028.png', 1),
('SP029', N'Nhẫn kim cương cao cấp', 12000000, N'Kim cương', N'Nhẫn', 'images/SP029.png', 1),
('SP030', N'Dây chuyền vàng thời trang', 2700000, N'Vàng', N'Dây chuyền', 'images/SP030.png', 1),

('SP031', N'Bông tai bạc đơn giản', 500000, N'Bạc', N'Bông tai', 'images/SP031.png', 1),
('SP032', N'Lắc tay vàng 24K', 5500000, N'Vàng', N'Lắc tay', 'images/SP032.png', 1),
('SP033', N'Nhẫn đá quý cao cấp', 7500000, N'Đá quý', N'Nhẫn', 'images/SP033.png', 1),
('SP034', N'Dây chuyền ngọc trai', 3300000, N'Ngọc trai', N'Dây chuyền', 'images/SP034.png', 1),
('SP035', N'Bông tai kim cương nhỏ', 4000000, N'Kim cương', N'Bông tai', 'images/SP035.png', 1),
('SP036', N'Lắc tay bạc đính đá', 1300000, N'Bạc', N'Lắc tay', 'images/SP036.png', 1),
('SP037', N'Nhẫn vàng trắng đính đá', 4800000, N'Vàng trắng', N'Nhẫn', 'images/SP037.png', 1),
('SP038', N'Dây chuyền đá phong thủy', 2200000, N'Đá phong thủy', N'Dây chuyền', 'images/SP038.png', 1),
('SP039', N'Bông tai vàng đính đá', 2600000, N'Vàng', N'Bông tai', 'images/SP039.png', 1),
('SP040', N'Lắc tay bạc thời trang', 800000, N'Hợp kim', N'Lắc tay', 'images/SP040.png', 1);
select * from SanPham;