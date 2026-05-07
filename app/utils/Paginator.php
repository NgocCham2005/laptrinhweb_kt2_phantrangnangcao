<?php

class Paginator {
    private int $totalRecords;
    private int $perPage;
    private int $currentPage;

    public function __construct(int $totalRecords, int $perPage, int $currentPage) {
        $this->totalRecords = max(0, $totalRecords);
        $this->perPage = max(1, $perPage);
        $this->currentPage = max(1, $currentPage);
    }

    // Tổng số trang
    public function getTotalPages(): int {
        return max(1, (int) ceil($this->totalRecords / $this->perPage));
    }

    // Trang hiện tại (không vượt quá total)
    public function getCurrentPage(): int {
        return min($this->currentPage, $this->getTotalPages());
    }

    // OFFSET cho SQL
    public function getOffset(): int {
        return ($this->getCurrentPage() - 1) * $this->perPage;
    }

    // LIMIT cho SQL
    public function getLimit(): int {
        return $this->perPage;
    }

    // Có trang trước không
    public function hasPrev(): bool {
        return $this->getCurrentPage() > 1;
    }

    // Có trang sau không
    public function hasNext(): bool {
        return $this->getCurrentPage() < $this->getTotalPages();
    }

    // Trang trước
    public function getPrevPage(): int {
        return max(1, $this->getCurrentPage() - 1);
    }

    // Trang sau
    public function getNextPage(): int {
        return min($this->getTotalPages(), $this->getCurrentPage() + 1);
    }

    /*
     * Lấy danh sách các page (quan trọng nhất)
     * Ví dụ: current=5, range=2 → 3 4 [5] 6 7
     */
    public function getPageLinks(int $range = 4): array {
        $current = $this->getCurrentPage();
        $total = $this->getTotalPages();

        $start = max(1, $current - $range);
        $end = min($total, $current + $range);

        $pages = [];

        for ($i = $start; $i <= $end; $i++) {
            $pages[] = [
                'page' => $i,
                'is_current' => ($i === $current)
            ];
        }

        return $pages;
    }

    // Trả về dạng array cho controller/view
    public function toArray(): array {
        return [
            'total_records' => $this->totalRecords,
            'per_page' => $this->perPage,
            'current_page' => $this->getCurrentPage(),
            'total_pages' => $this->getTotalPages(),

            'has_prev' => $this->hasPrev(),
            'has_next' => $this->hasNext(),
            'prev_page' => $this->getPrevPage(),
            'next_page' => $this->getNextPage(),

            'pages' => $this->getPageLinks()
        ];
    }
}