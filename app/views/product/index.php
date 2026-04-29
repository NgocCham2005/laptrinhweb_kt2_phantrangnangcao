<div class="product-page-container">
    <div class="product-sidebar">
        <div class="promo-container">
            <div class="promo-banner">
                <img src="<?= BASE_URL ?>/public/logo-banner/banner.jpg" alt="Luminous Collection">
                
                <div class="promo-overlay">
                    <span class="promo-subtitle">BST Mùa Hè</span>
                    <h3 class="promo-title">Luminous</h3>
                    <a href="#" class="promo-link">XEM CHI TIẾT &rarr;</a>
                </div>
            </div>

            <div class="promo-banner">
                <img src="<?= BASE_URL ?>/public/logo-banner/banner.png" alt="Luminous Collection">
                
                <div class="promo-overlay">
                    <h3 class="promo-title">Tôn vinh vẻ đẹp</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="product-main-content">
        <div class="sort-bar">
            <div class="sort-left">
                <span class="sort-label">Sắp xếp theo</span>
                <a href="?url=product/index&sort=default" class="btn-sort <?= $currentSort == 'default' ? 'active' : '' ?>">Tất cả</a>
                
                <?php 
                // Kiểm tra xem có đang sắp xếp theo giá không
                    $isSortingPrice = ($currentSort == 'price_asc' || $currentSort == 'price_desc');
                    $activeClass = $isSortingPrice ? 'active-price' : '';
                ?>
                <select class="select-sort <?= $activeClass ?>" onchange="location = this.value;">
                    <option value="" selected hidden>Giá</option>
                    <option value="?url=product/index&sort=price_asc" <?= $currentSort == 'price_asc' ? 'selected' : '' ?>>Giá: Thấp đến Cao</option>
                    <option value="?url=product/index&sort=price_desc" <?= $currentSort == 'price_desc' ? 'selected' : '' ?>>Giá: Cao đến Thấp</option>
                </select>
            </div>
            
        <div class="mini-pagination">
            <span class="page-info">
                <strong class="highlight"><?= $pagination['current_page'] ?></strong>/<?= $pagination['total_pages'] ?>
            </span>
            <div class="page-controls">
                <?php if ($pagination['has_prev']): ?>
                    <a href="?url=product/index&page=<?= $pagination['prev_page'] ?>&sort=<?= $currentSort ?>" class="btn-mini">
                        <i class="fa-solid fa-chevron-left"></i>
                    </a>
                <?php else: ?>
                    <span class="btn-mini disabled"><i class="fa-solid fa-chevron-left"></i></span>
                <?php endif; ?>
                
                <?php if ($pagination['has_next']): ?>
                    <a href="?url=product/index&page=<?= $pagination['next_page'] ?>&sort=<?= $currentSort ?>" class="btn-mini">
                        <i class="fa-solid fa-chevron-right"></i>
                    </a>
                <?php else: ?>
                    <span class="btn-mini disabled"><i class="fa-solid fa-chevron-right"></i></span>
                <?php endif; ?>
            </div>
        </div>
        </div>

        <div id="product-list-container">
            <?php include '_list.php'; ?>
        </div>
    </div>
</div>
<script src="/KT2/KT2 - MERGE TEST/public/js/app.js"></script>