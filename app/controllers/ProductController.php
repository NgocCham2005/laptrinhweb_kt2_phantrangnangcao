<?php
require_once __DIR__ . '/../repositories/ProductRepository.php';
require_once __DIR__ . '/../utils/Paginator.php';

class ProductController extends Controller {
    private $productRepo;

    public function __construct() {
        $this->productRepo = new ProductRepository();
    }
    // Chỉ dùng để load trang lần đầu (kèm Header/Footer)
    public function index() {
        $data = $this->getProcessedData();
        //NORMAL CALL: Render trang index.php VÀ kèm theo layout main.php
        $this->view("product/index", $data);
    }

    // Chỉ dùng để trả dữ liệu AJAX (chỉ lấy khúc giữa)
    public function list() {
        $data = $this->getProcessedData();
        //AJAX CALL: Chỉ render file _list.php, KHÔNG kèm theo layout main.php
        $this->view("product/_list", $data);
    }

    // Hàm trung tâm để xử lý dữ liệu từ Repo và Paginator
    private function getProcessedData() {
        // 1. Lấy tham số từ URL
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $sort = $_GET['sort'] ?? 'default'; // Các option: price_asc, price_desc, name_asc, name_desc
        $perPage = 9; // Số sản phẩm trên 1 trang

        // 2. Lấy tổng số sản phẩm từ ProductRepository
        $totalRecords = $this->productRepo->countAll();

        // 3. Khởi tạo bộ phân trang từ Paginator
        $paginator = new Paginator($totalRecords, $perPage, $page);

        // 4. Lấy danh sách sản phẩm từ ProductRepository (đã kèm Limit, Offset, Sort)
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