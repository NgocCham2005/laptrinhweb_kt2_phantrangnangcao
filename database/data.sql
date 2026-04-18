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
('SP001', N'Nhẫn vàng 75%(18K)', 8990000, N'Vàng', N'Nhẫn', 'images/SP001.png', 1),
('SP002', N'Mặt dây chuyền bạc đính đá', 890000, N'Bạc', N'Dây chuyền', 'images/SP002.png', 1),
('SP003', N'Bông tai kim cương vàng trắng 58,5% (14K)', 15500000, N'Vàng trắng', N'Bông tai', 'images/SP003.png', 1),
('SP004', N'Lắc tay vàng 75% (18K)', 18900000, N'Vàng', N'Lắc tay', 'images/SP004.png', 1),
('SP005', N'Nhẫn bạc cao cấp', 990000, N'Bạc', N'Nhẫn', 'images/SP005.png', 1),
('SP006', N'Dây chuyền vàng trắng 41,6% (10K)', 9200000, N'Vàng trắng', N'Dây chuyền', 'images/SP006.png', 1),
('SP007', N'Bông tai bạc', 600000, N'Bạc', N'Bông tai', 'images/SP007.png', 1),
('SP008', N'Lắc tay kim cương vàng trắng 58,5% (14K)', 14000000, N'Vàng trắng', N'Lắc tay', 'images/SP008.png', 1),
('SP009', N'Nhẫn kim cương vàng trắng 75% (18K)', 19000000, N'Vàng trắng', N'Nhẫn', 'images/SP009.jpg', 1),
('SP010', N'Dây chuyền bạc cao cấp', 2000000, N'Bạc', N'Dây chuyền', 'images/SP010.png', 1),

('SP011', N'Nhẫn vàng 24K', 15000000, N'Vàng', N'Nhẫn', 'images/SP011.png', 1),
('SP012', N'Dây chuyền bạc đá quý', 5300000, N'Bạc', N'Dây chuyền', 'images/SP012.png', 1),
('SP013', N'Bông tai vàng 75% (18K)', 15000000, N'Vàng', N'Bông tai', 'images/SP013.png', 1),
('SP014', N'Lắc tay bạc đính đá', 3900000, N'Bạc', N'Lắc tay', 'images/SP014.png', 1),
('SP015', N'Nhẫn vàng trắng 41,6% (10K) đính đá ECZ', 7000000, N'Vàng trắng', N'Nhẫn', 'images/SP015.png', 1),
('SP016', N'Dây chuyền kim cương vàng trắng 58,5% (14K)', 18000000, N'Vàng trắng', N'Dây chuyền', 'images/SP016.png', 1),
('SP017', N'Bông tai Vàng trắng 41,6% (10K) Đính đá Topaz', 12200000, N'Vàng trắng', N'Bông tai', 'images/SP017.png', 1),
('SP018', N'Lắc tay vàng trắng Ý 75% (18K)', 16000000, N'Vàng trắng', N'Lắc tay', 'images/SP018.png', 1),
('SP019', N'Nhẫn bạc đơn giản', 500000, N'Bạc', N'Nhẫn', 'images/SP019.png', 1),
('SP020', N'Mặt dây chuyền Kim cương Vàng trắng 58,5% (14K)', 4000000, N'Vàng trắng', N'Dây chuyền', 'images/SP020.png', 1),

('SP021', N'Nhẫn bạc đính đá STYLE', 1100000, N'Bạc', N'Nhẫn', 'images/SP021.png', 1),
('SP022', N'Dây chuyền vàng 18K', 9500000, N'Vàng', N'Dây chuyền', 'images/SP022.png', 1),
('SP023', N'Bông tai bạc ngọc trai', 1800000, N'Bạc', N'Bông tai', 'images/SP023.png', 1),
('SP024', N'Lắc tay bạc cao cấp', 1100000, N'Bạc', N'Lắc tay', 'images/SP024.png', 1),
('SP025', N'Nhẫn Vàng 75% (18K) đính đá CZ', 9600000, N'Vàng', N'Nhẫn', 'images/SP025.png', 1),
('SP026', N'Dây chuyền bạc đính đá chữ T', 650000, N'Bạc', N'Dây chuyền', 'images/SP026.png', 1),
('SP027', N'Bông tai kim cương vàng trắng 58,5% (14K)', 17000000, N'Vàng trắng', N'Bông tai', 'images/SP027.png', 1),
('SP028', N'Lắc tay bạc đá quý', 3200000, N'Bạc', N'Lắc tay', 'images/SP028.png', 1),
('SP029', N'Nhẫn kim cương vàng trắng 75% (18K)', 12000000, N'Vàng trắng', N'Nhẫn', 'images/SP029.png', 1),
('SP030', N'Dây chuyền vàng 18K mặt đá quý', 17000000, N'Vàng', N'Dây chuyền', 'images/SP030.png', 1),

('SP031', N'Bông tai bạc đính đá STYLE ', 1500000, N'Bạc', N'Bông tai', 'images/SP031.png', 1),
('SP032', N'Lắc tay vàng 24K', 25000000, N'Vàng', N'Lắc tay', 'images/SP032.png', 1),
('SP033', N'Nhẫn vàng trắng 58,5% (14K) đính đá Topaz', 7500000, N'Vàng trắng', N'Nhẫn', 'images/SP033.png', 1),
('SP034', N'Dây chuyền bạc ngọc trai', 1300000, N'Ngọc trai', N'Dây chuyền', 'images/SP034.png', 1),
('SP035', N'Bông tai kim cương vàng trắng 58,5% (14K)', 8230000, N'Vàng trắng', N'Bông tai', 'images/SP035.png', 1),
('SP036', N'Lắc tay bạc đính đá Silver', 1300000, N'Bạc', N'Lắc tay', 'images/SP036.png', 1),
('SP037', N'Nhẫn vàng trắng 41,6% (10K) đính đá ECZ', 1800000, N'Vàng trắng', N'Nhẫn', 'images/SP037.png', 1),
('SP038', N'Mặt dây chuyền vàng 75% (18K) đính đá Ruby', 8200000, N'Vàng', N'Mặt dây chuyền', 'images/SP038.png', 1),
('SP039', N'Bông tai vàng đính đá ECZ', 8000000, N'Vàng', N'Bông tai', 'images/SP039.png', 1),
('SP040', N'Lắc tay bạc đính đá STYLE', 1250000, N'Bạc', N'Lắc tay', 'images/SP040.png', 1),
('SP041', N'Mặt dây chuyền Vàng Trắng 41,6% 10K', 6500000, N'Vàng trắng', N'Mặt dây chuyền', 'images/SP041.png', 1),
('SP042', N'Lắc tay bạc hình vỏ sò', 800000, N'Bạc', N'Lắc tay', 'images/SP042.png', 1),
('SP043', N'Nhẫn Bạc đính đá STYLE', 499000, N'Bạc', N'Nhẫn', 'images/SP043.png', 1),
('SP044', N'Bông tai Vàng 75% (18K) đính đá CZ', 18000000, N'Vàng', N'Bông tai', 'images/SP044.png', 1),
('SP045', N'Lắc tay Vàng 99%', 22000000, N'Vàng', N'Lắc tay', 'images/SP045.png', 1);


select * from SanPham;