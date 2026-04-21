<?php
require_once __DIR__ . '/../repositories/ProductRepository.php';
require_once __DIR__ . '/../utils/Paginator.php';

class ProductController extends Controller {
    private $productRepo;

    public function __construct() {
        $this->productRepo = new ProductRepository();
    }

    /**
     * Hiển thị trang chính (load lần đầu)
     */
    public function index() {
        $data = $this->getProcessedData();
        // Render view index nằm trong thư mục views/product/
        $this->view("product/index", $data);
    }

    /**
     * Trả về kết quả cho AJAX
     */
    public function list() {
        $data = $this->getProcessedData();
        // Chỉ render phần danh sách sản phẩm và thanh phân trang
        $this->view("product/_list", $data);
    }

    /**
     * Hàm trung tâm để xử lý dữ liệu từ Repo và Paginator
     */
    private function getProcessedData() {
        // 1. Lấy tham số từ URL
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $sort = $_GET['sort'] ?? 'default'; // Các option: price_asc, price_desc, name_asc
        $perPage = 6; // Số sản phẩm trên 1 trang

        // 2. Lấy tổng số sản phẩm từ Người 3
        $totalRecords = $this->productRepo->countAll();

        // 3. Khởi tạo bộ phân trang từ Người 2
        $paginator = new Paginator($totalRecords, $perPage, $page);

        // 4. Lấy danh sách sản phẩm từ Người 3 (đã kèm Limit, Offset, Sort)
        $products = $this->productRepo->getAll(
            $paginator->getLimit(),
            $paginator->getOffset(),
            $sort
        );

        // 5. Trả về mảng dữ liệu để View sử dụng
        return [
            'products'    => $products,
            'pagination'  => $paginator->toArray(),
            'currentSort' => $sort,
            'currentPage' => $paginator->getCurrentPage()
        ];
    }
}