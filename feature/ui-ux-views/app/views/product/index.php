<?php
// ÉP DỮ LIỆU TRỰC TIẾP VÀO ĐÂY ĐỂ TEST UI (Không cần đợi test-ui.php truyền sang nữa)
$products = [
    ['id' => 1, 'name' => 'Nhẫn vàng 18K', 'price' => 3500000],
    ['id' => 2, 'name' => 'Dây chuyền bạc', 'price' => 1200000],
    ['id' => 3, 'name' => 'Bông tai kim cương', 'price' => 5500000],
    ['id' => 4, 'name' => 'Lắc tay vàng', 'price' => 2800000],
    ['id' => 5, 'name' => 'Nhẫn bạc cao cấp', 'price' => 800000],
    ['id' => 6, 'name' => 'Dây chuyền vàng trắng', 'price' => 4200000],
    ['id' => 7, 'name' => 'Bông tai bạc', 'price' => 2600000],
    ['id' => 8, 'name' => 'Lắc tay kim cương', 'price' => 500000],
    ['id' => 9, 'name' => 'Dây chuyền bạc cao cấp', 'price' => 700000]
];

require_once __DIR__ . '/../layouts/header.php';
?>

<div class="container main-wrapper">
    <div class="main-layout">
        <aside class="sidebar-promo">
            <div class="promo-container">
                <div class="promo-banner">
                    <img src="../images/banner.jpg" alt="Luminous Collection">
                    
                    <div class="promo-overlay">
                        <span class="promo-subtitle">BST Mùa Hè</span>
                        <h3 class="promo-title">Luminous</h3>
                        <a href="#" class="promo-link">XEM CHI TIẾT &rarr;</a>
                    </div>
                </div>

                <div class="promo-banner">
                    <img src="../images/banner.png" alt="Luminous Collection">
                    
                    <div class="promo-overlay">
                        <h3 class="promo-title">Tôn vinh vẻ đẹp</h3>
                    </div>
                </div>
            </div>
        </aside>

        <div class="product-main-content">
            <?php require_once __DIR__ . '/../components/product_grid.php'; ?>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/../layouts/footer.php'; ?>
