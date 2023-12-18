<?php

namespace App\Controller\Admin;

use App\Model\Admin;

class AdminController
{
    private Admin $admin;
    public function __construct()
    {
        $this->admin = new Admin();
    }
    public function view()
    {
        require_once __DIR__ . "/../../../" . "/views/admin/dashboard.php";
    }

    public function customerView()
    {
        $users = $this->admin->getCustomerList();
        require_once __DIR__ . "/../../../" . "/views/admin/customer.php";
    }

    public function orderView()
    {
        $lists = $this->admin->getOrderList();
        require_once __DIR__ . "/../../../" . "/views/admin/orders.php";
    }

    public function storeView()
    {
        $items = $this->admin->getItemList();
        require_once __DIR__ . "/../../../" . "/views/admin/store.php";
    }

    public function createItem() {
        $result = $this->admin->createItem(file: $_FILES, post: $_POST);
        header("Location: {$_SERVER["HTTP_REFERER"]}");
    }
}
