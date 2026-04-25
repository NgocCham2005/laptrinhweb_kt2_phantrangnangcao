CREATE DATABASE Qly_trangsuc;
USE Qly_trangsuc;

CREATE TABLE SanPham (
    MaSanPham NVARCHAR(10) PRIMARY KEY,
    TenSanPham NVARCHAR(255) NOT NULL,
    Gia DECIMAL(10,2) NOT NULL,
    ChatLieu NVARCHAR(100),
    LoaiSanPham NVARCHAR(100),
    HinhAnh NVARCHAR(255)
);

INSERT INTO SanPham (MaSanPham, TenSanPham, Gia, ChatLieu, LoaiSanPham, HinhAnh) VALUES
('SP001', N'Nhẫn vàng 75%(18K)', 8990000, N'Vàng', N'Nhẫn', 'SP001.png'),
('SP002', N'Mặt dây chuyền bạc đính đá', 890000, N'Bạc', N'Dây chuyền', 'SP002.png'),
('SP003', N'Bông tai kim cương vàng trắng 58,5% (14K)', 15500000, N'Vàng trắng', N'Bông tai', 'SP003.png'),
('SP004', N'Lắc tay vàng 75% (18K)', 18900000, N'Vàng', N'Lắc tay', 'SP004.png'),
('SP005', N'Nhẫn bạc cao cấp', 990000, N'Bạc', N'Nhẫn', 'SP005.png'),
('SP006', N'Dây chuyền vàng trắng 41,6% (10K)', 9200000, N'Vàng trắng', N'Dây chuyền', 'SP006.png'),
('SP007', N'Bông tai bạc', 600000, N'Bạc', N'Bông tai', 'SP007.png'),
('SP008', N'Lắc tay kim cương vàng trắng 58,5% (14K)', 14000000, N'Vàng trắng', N'Lắc tay', 'SP008.png'),
('SP009', N'Nhẫn kim cương vàng trắng 75% (18K)', 19000000, N'Vàng trắng', N'Nhẫn', 'SP009.png'),
('SP010', N'Dây chuyền bạc cao cấp', 2000000, N'Bạc', N'Dây chuyền', 'SP010.png'),

('SP011', N'Nhẫn vàng 24K', 15000000, N'Vàng', N'Nhẫn', 'SP011.png'),
('SP012', N'Dây chuyền bạc đá quý', 5300000, N'Bạc', N'Dây chuyền', 'SP012.png'),
('SP013', N'Bông tai vàng 75% (18K)', 15000000, N'Vàng', N'Bông tai', 'SP013.png'),
('SP014', N'Lắc tay bạc đính đá', 3900000, N'Bạc', N'Lắc tay', 'SP014.png'),
('SP015', N'Nhẫn vàng trắng 41,6% (10K) đính đá ECZ', 7000000, N'Vàng trắng', N'Nhẫn', 'SP015.png'),
('SP016', N'Dây chuyền kim cương vàng trắng 58,5% (14K)', 18000000, N'Vàng trắng', N'Dây chuyền', 'SP016.png'),
('SP017', N'Bông tai Vàng trắng 41,6% (10K) Đính đá Topaz', 12200000, N'Vàng trắng', N'Bông tai', 'SP017.png'),
('SP018', N'Lắc tay vàng trắng Ý 75% (18K)', 16000000, N'Vàng trắng', N'Lắc tay', 'SP018.png'),
('SP019', N'Nhẫn bạc đơn giản', 500000, N'Bạc', N'Nhẫn', 'SP019.png'),
('SP020', N'Mặt dây chuyền Kim cương Vàng trắng 58,5% (14K)', 4000000, N'Vàng trắng', N'Dây chuyền', 'SP020.png'),

('SP021', N'Nhẫn bạc đính đá STYLE', 1100000, N'Bạc', N'Nhẫn', 'SP021.png'),
('SP022', N'Dây chuyền vàng 18K', 9500000, N'Vàng', N'Dây chuyền', 'SP022.png'),
('SP023', N'Bông tai bạc ngọc trai', 1800000, N'Bạc', N'Bông tai', 'SP023.png'),
('SP024', N'Lắc tay bạc cao cấp', 1100000, N'Bạc', N'Lắc tay', 'SP024.png'),
('SP025', N'Nhẫn Vàng 75% (18K) đính đá CZ', 9600000, N'Vàng', N'Nhẫn', 'SP025.png'),
('SP026', N'Dây chuyền bạc đính đá chữ T', 650000, N'Bạc', N'Dây chuyền', 'SP026.png'),
('SP027', N'Bông tai kim cương vàng trắng 58,5% (14K)', 17000000, N'Vàng trắng', N'Bông tai', 'SP027.png'),
('SP028', N'Lắc tay bạc đá quý', 3200000, N'Bạc', N'Lắc tay', 'SP028.png'),
('SP029', N'Nhẫn kim cương vàng trắng 75% (18K)', 12000000, N'Vàng trắng', N'Nhẫn', 'SP029.png'),
('SP030', N'Dây chuyền vàng 18K mặt đá quý', 17000000, N'Vàng', N'Dây chuyền', 'SP030.png'),

('SP031', N'Bông tai bạc đính đá STYLE ', 1500000, N'Bạc', N'Bông tai', 'SP031.png'),
('SP032', N'Lắc tay vàng 24K', 25000000, N'Vàng', N'Lắc tay', 'SP032.png'),
('SP033', N'Nhẫn vàng trắng 58,5% (14K) đính đá Topaz', 7500000, N'Vàng trắng', N'Nhẫn', 'SP033.png'),
('SP034', N'Dây chuyền bạc ngọc trai', 1300000, N'Ngọc trai', N'Dây chuyền', 'SP034.png'),
('SP035', N'Bông tai kim cương vàng trắng 58,5% (14K)', 8230000, N'Vàng trắng', N'Bông tai', 'SP035.png'),
('SP036', N'Lắc tay bạc đính đá Silver', 1300000, N'Bạc', N'Lắc tay', 'SP036.png'),
('SP037', N'Nhẫn vàng trắng 41,6% (10K) đính đá ECZ', 1800000, N'Vàng trắng', N'Nhẫn', 'SP037.png'),
('SP038', N'Mặt dây chuyền vàng 75% (18K) đính đá Ruby', 8200000, N'Vàng', N'Mặt dây chuyền', 'SP038.png'),
('SP039', N'Bông tai vàng đính đá ECZ', 8000000, N'Vàng', N'Bông tai', 'SP039.png'),
('SP040', N'Lắc tay bạc đính đá STYLE', 1250000, N'Bạc', N'Lắc tay', 'SP040.png'),
('SP041', N'Mặt dây chuyền Vàng Trắng 41,6% 10K', 6500000, N'Vàng trắng', N'Mặt dây chuyền', 'SP041.png'),
('SP042', N'Lắc tay bạc hình vỏ sò', 800000, N'Bạc', N'Lắc tay', 'SP042.png'),
('SP043', N'Nhẫn Bạc đính đá STYLE', 499000, N'Bạc', N'Nhẫn', 'SP043.png'),
('SP044', N'Bông tai Vàng 75% (18K) đính đá CZ', 18000000, N'Vàng', N'Bông tai', 'SP044.png'),
('SP045', N'Lắc tay Vàng 99%', 22000000, N'Vàng', N'Lắc tay', 'SP045.png');


select * from SanPham;
