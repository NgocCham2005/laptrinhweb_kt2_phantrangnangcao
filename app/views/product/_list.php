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
        </div>
    <?php endif; ?>
</div>

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