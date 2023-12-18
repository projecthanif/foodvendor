<?php
namespace App\Controller\Admin;

class DashboardController {
    public function view() {
        require_once __DIR__ . "/../../../" . "/views/admin/dashboard.php";
    }
}