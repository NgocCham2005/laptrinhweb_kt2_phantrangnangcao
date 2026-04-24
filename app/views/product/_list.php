<div class="product-grid">
    <?php if (!empty($products)): ?>
        <?php foreach ($products as $product): ?>
            <div class="product-card">
                <div class="product-img-placeholder">
                    <img src="<?= BASE_URL ?>/images/<?= $product->getHinhAnh() ?>" alt="<?= $product->getTenSanPham() ?>">
                </div>  
            
                <div class="product-info">
                    <h6 class="product-title"><?= htmlspecialchars($product->getTenSanPham()) ?></h6>
                    <p class="product-material">Chất liệu: <?= $product->getChatLieu() ?></p>
                    <h6 class="product-price">Giá: <?= number_format($product->getGia(), 0, ',', '.') ?> VNĐ</h6>
                </div>

                <div class="product-actions">
                    <button class="btn-details">Xem chi tiết</button>
                    <button class="btn-add-cart">Thêm giỏ hàng</button>
                </div>
                
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <div class="no-results">
            <i class="fa-solid fa-magnifying-glass"></i>
            <p>Không tìm thấy sản phẩm nào phù hợp.</p>
        </div>
    <?php endif; ?>
</div>

<?php include __DIR__.'/../partials/pagination.php';?>