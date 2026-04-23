document.addEventListener('click', function (e) {
    // 1. Bắt đúng các loại nút (Next, Previous, Số trang)
    const link = e.target.closest('.page-node, .page-link, .btn-mini');

    // Nếu không phải nút phân trang hoặc nút bị disabled thì thôi
    if (!link || link.classList.contains('disabled')) return;

    // 2. CHẶN LOAD TRANG (Đây là mấu chốt để không tải lại trang)
    e.preventDefault();

    const url = link.getAttribute('href'); 
    if (!url || url === '#') return;

    console.log("Đang lấy dữ liệu từ:", url);
    fetchProducts(url);
});

function fetchProducts(url) {
    const container = document.getElementById('product-list-container');
    if (!container) return;

    // Hiệu ứng loading cho chuyên nghiệp
    container.style.opacity = '0.5';

    /**
     * 3. XỬ LÝ URL (Cực kỳ quan trọng)
     * Nếu URL trên nút là: index.php?url=product/index&page=2
     * Ta phải đổi nó thành: index.php?url=product/list&page=2 
     * để Controller chạy vào hàm list() và trả về mỗi cái "ruột" HTML.
     */
    const ajaxUrl = url.replace('product/index', 'product/list');

    fetch(ajaxUrl, {
        headers: { 'X-Requested-With': 'XMLHttpRequest' }
    })
    .then(response => response.text())
    .then(html => {
        // 4. Đổ dữ liệu vào container (Chỉ thay đổi nội dung, không load lại trang)
        container.innerHTML = html;
        container.style.opacity = '1';
        
        // 5. Đổi URL trên thanh địa chỉ để người dùng biết mình đang ở trang mấy
        // Nhưng lưu ý: Ta push cái 'url' gốc (index) chứ không phải 'ajaxUrl' (list)
        window.history.pushState({}, '', url);
        
        // Cuộn lên đầu danh sách cho dễ nhìn
        container.scrollIntoView({ behavior: 'smooth', block: 'start' });
    })
    .catch(err => {
        console.error("Lỗi rồi:", err);
        container.style.opacity = '1';
    });
}
