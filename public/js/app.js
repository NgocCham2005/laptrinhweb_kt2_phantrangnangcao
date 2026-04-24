document.addEventListener('DOMContentLoaded', function() {
    
    // 1. Lắng nghe click cho TẤT CẢ các nút phân trang (trên và dưới)
    document.addEventListener('click', function(e) {
        const link = e.target.closest('.page-node, .page-link, .btn-mini');
        
        if (link && link.tagName === 'A') {
            e.preventDefault(); 
            const url = link.getAttribute('href');
            if (url && url !== '#') {
                fetchProducts(url);
            }
        }
    });

    // 2. Hàm Ajax dùng "DOMParser" để lôi đúng thành phần cần thiết
    function fetchProducts(url) {
        const container = document.getElementById('product-list-container');
        const miniPagination = document.querySelector('.mini-pagination'); // Bắt cái phân trang ở trên
        
        // Làm mờ cả 2 chỗ cho chuyên nghiệp
        if (container) container.style.opacity = '0.5';
        if (miniPagination) miniPagination.style.opacity = '0.5';

        // LƯU Ý: Lần này ta fetch thẳng URL gốc luôn (không cần .replace sang product/list nữa)
        fetch(url)
            .then(response => response.text())
            .then(html => {
                // Biến đoạn HTML text vừa tải về thành một cây DOM ảo
                const parser = new DOMParser();
                const doc = parser.parseFromString(html, 'text/html');

                // Lấy ra phần ruột SẢN PHẨM MỚI từ trang ảo
                const newContainer = doc.getElementById('product-list-container');
                // Lấy ra phần PHÂN TRANG TRÊN MỚI từ trang ảo
                const newMiniPagination = doc.querySelector('.mini-pagination');

                // Đắp ruột sản phẩm vào
                if (container && newContainer) {
                    container.innerHTML = newContainer.innerHTML;
                    container.style.opacity = '1';
                }
                
                // Đắp phân trang trên vào (Đồng bộ số trang)
                if (miniPagination && newMiniPagination) {
                    miniPagination.innerHTML = newMiniPagination.innerHTML;
                    miniPagination.style.opacity = '1';
                }

                // Cập nhật thanh địa chỉ URL
                window.history.pushState({}, '', url);
                
                // Cuộn lên đầu
                    window.scrollTo({ top: 0, behavior: 'smooth' });
            })
            .catch(error => {
                console.warn('Lỗi Ajax, fallback tải lại trang:', error);
                window.location.href = url;
            });
    }
});