document.addEventListener('DOMContentLoaded', function() {
    const container = document.getElementById('product-list-container');
    
    if (container) {
        // Lắng nghe sự kiện click trên phân trang
        container.addEventListener('click', function(e) {
            const link = e.target.closest('.page-node, .page-link');
            
            // Nếu click vào thẻ <a> (những nút không bị disabled)
            if (link && link.tagName === 'A') {
                e.preventDefault(); 
                
                const url = link.getAttribute('href'); // Lấy link: ?url=product/index&page=2
                fetchProducts(url);
            }
        });
    }

    // Hàm lấy dữ liệu ngầm
    function fetchProducts(url) {
        // "Ma giáo" ở đây: Biến đổi URL fetch từ index sang list để Controller không load Header/Footer
        const fetchUrl = url.replace('product/index', 'product/list');

        fetch(fetchUrl)
            .then(response => response.text())
            .then(html => {
                // Đắp ruột mới vào container
                document.getElementById('product-list-container').innerHTML = html;
                
                // Đổi URL trên trình duyệt thành index cho chuẩn mực
                window.history.pushState({}, '', url);
            })
            .catch(error => console.warn('Lỗi Ajax:', error));
    }
});
