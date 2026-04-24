<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Luminous Jewelry' ?></title>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/style.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/pagination.css">

</head>
<body>

<header class="header">
    <div class="container header-wrapper">
        <div class="header-left">
            <a href="<?= BASE_URL ?>/index.php" class="logo">
                <img src="<?= BASE_URL ?>/logo-banner/logo.svg" alt="Luminous Logo" class="logo-img">
            </a>
        </div>

        <div class="header-center">
            <div class="search-box">
                <input type="text" placeholder="Tìm kiếm sản phẩm...">
                <button type="button"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
        </div>

        <div class="header-right">
            <div class="cart-wrapper">
                <i class="fa-solid fa-bag-shopping"></i>
                <span class="cart-badge">0</span>
            </div>
            <div class="auth-group">
                <a href="#" class="btn-link">Đăng nhập</a>
                <a href="#" class="btn-pills">Đăng ký</a>
            </div>
        </div>
    </div>
</header>

<main class="main-wrapper">
    <div class="container">
        <?php echo $content; ?> 
    </div>
</main>

<footer class="site-footer">
    <div class="container footer-content">
        <p>&copy; <?php echo date('Y'); ?> - BÀI KIỂM TRA 2 MÔN LẬP TRÌNH WEB PHP</p>
    </div>
</footer>

    <script src="<?= BASE_URL ?>/public/js/app.js"></script>

</body>
</html>