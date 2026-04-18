<?php

class Paginator {
    private $totalRecords;
    private $perPage;
    private $currentPage;

    public function __construct($totalRecords, $perPage = 10, $currentPage = 1) {
        $this->totalRecords = (int)$totalRecords;
        $this->perPage = max(1, (int)$perPage);
        $this->currentPage = max(1, (int)$currentPage);
    }

    public function getTotalPages() {
        if ($this->totalRecords == 0) return 1;
        return ceil($this->totalRecords / $this->perPage);
    }

    public function getCurrentPage() {
        return min($this->currentPage, $this->getTotalPages());
    }

    public function getOffset() {
        return ($this->getCurrentPage() - 1) * $this->perPage;
    }

    public function getLimit() {
        return $this->perPage;
    }

    public function hasPrev() {
        return $this->getCurrentPage() > 1;
    }

    public function hasNext() {
        return $this->getCurrentPage() < $this->getTotalPages();
    }

    public function getPrevPage() {
        return max(1, $this->getCurrentPage() - 1);
    }

    public function getNextPage() {
        return min($this->getTotalPages(), $this->getCurrentPage() + 1);
    }

    public function toArray() {
        return [
            'total_records' => $this->totalRecords,
            'per_page' => $this->perPage,
            'current_page' => $this->getCurrentPage(),
            'total_pages' => $this->getTotalPages(),
            'has_prev' => $this->hasPrev(),
            'has_next' => $this->hasNext(),
            'prev_page' => $this->getPrevPage(),
            'next_page' => $this->getNextPage()
        ];
    }
}