<<<<<<< HEAD
<div class="row" id="product-container">
    <?php if (!empty($products)): ?>
        <?php foreach ($products as $product): ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="public/assets/images/<?= $product->getHinhAnh() ?? 'default.jpg' ?>" 
                         class="card-img-top" alt="<?= $product->getTenSanPham() ?>"
                         style="height: 200px; object-fit: cover;">
                    
                    <div class="card-body">
                        <h5 class="card-title"><?= htmlspecialchars($product->getTenSanPham()) ?></h5>
                        <p class="card-text text-muted">Chất liệu: <?= $product->getChatLieu() ?></p>
                        <h6 class="text-danger">Giá: <?= number_format($product->getGia(), 0, ',', '.') ?> VNĐ</h6>
                    </div>
                    <div class="card-footer bg-transparent border-top-0">
                        <button class="btn btn-outline-primary btn-sm w-100">Xem chi tiết</button>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <div class="col-12">
            <p class="text-center">Không tìm thấy sản phẩm nào phù hợp.</p>
=======
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
>>>>>>> origin/develop
        </div>
    <?php endif; ?>
</div>

<<<<<<< HEAD
<nav aria-label="Page navigation" class="mt-4">
    <ul class="pagination justify-content-center">
        <li class="page-item <?= !$pagination['has_prev'] ? 'disabled' : '' ?>">
            <a class="page-link" href="javascript:void(0)" data-page="<?= $pagination['prev_page'] ?>">
                &laquo; Trước
            </a>
        </li>

        <?php foreach ($pagination['pages'] as $p): ?>
            <li class="page-item <?= $p['is_current'] ? 'active' : '' ?>">
                <a class="page-link" href="javascript:void(0)" data-page="<?= $p['page'] ?>">
                    <?= $p['page'] ?>
                </a>
            </li>
        <?php endforeach; ?>

        <li class="page-item <?= !$pagination['has_next'] ? 'disabled' : '' ?>">
            <a class="page-link" href="javascript:void(0)" data-page="<?= $pagination['next_page'] ?>">
                Sau &raquo;
            </a>
        </li>
    </ul>
</nav>
=======
<?php include __DIR__.'/../partials/pagination.php';?>
>>>>>>> origin/develop
