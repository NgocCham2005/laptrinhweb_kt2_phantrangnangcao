<main class="product-area">
            
            <div class="sort-bar">
                <div class="sort-left">
                    <span class="sort-label">Sắp xếp theo</span>
                    <button class="btn-sort active">Liên Quan</button>
                    <button class="btn-sort">Mới Nhất</button>
                    <button class="btn-sort">Bán Chạy</button>
                    <select class="select-sort">
                        <option value="" selected hidden>Giá</option>
                        <option value="asc">Giá: Thấp đến Cao</option>
                        <option value="desc">Giá: Cao đến Thấp</option>
                    </select>
                </div>
                
                <div class="mini-pagination">
                    <span class="page-info"><strong class="highlight">1</strong>/5</span>
                    <div class="page-controls">
                        <button class="btn-mini prev" disabled>&lt;</button>
                        <button class="btn-mini next">&gt;</button>
                    </div>
                </div>
            </div>

            <div class="product-grid">
                <?php foreach ($products as $p): ?>
                <div class="product-card">
                    <div class="product-img-placeholder">
                        [Ảnh: <?= htmlspecialchars($p['name']) ?>]
                    </div>
                    <div class="product-info">
                        <h6 class="product-title"><?= htmlspecialchars($p['name']) ?></h6>

                        <p class="product-price"><?= number_format($p['price'], 0, ',', '.') ?> đ</p>
                    <div class="product-actions">
                        <a href="chitiet.php?id=<?= $p['id'] ?>" class="btn-details">Xem chi tiết</a>
                        <button class="btn-add-cart">Thêm giỏ hàng</button>
                    </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="pagination-wrapper">
                <ul class="pagination">
                    <li><a href="#" class="page-link disabled">&lt;</a></li>
                    <li><a href="#" class="page-link active">1</a></li>
                    <li><a href="#" class="page-link">2</a></li>
                    <li><a href="#" class="page-link">3</a></li>
                    <li><a href="#" class="page-link">4</a></li>
                    <li><a href="#" class="page-link">5</a></li>
                    <li><a href="#" class="page-link">&gt;</a></li>
                </ul>
            </div>

        </main>