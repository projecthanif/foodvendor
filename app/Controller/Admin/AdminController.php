<?php

namespace App\Controller\Admin;

use App\Model\Admin;

class AdminController
{
    private Admin $admin;
    public function __construct()
    {
        if ($_SESSION['type'] !== 'admin') {
            header("Location: /");
        }
        $this->admin = new Admin();
    }
    public function view()
    {
        $name = "DASHBOARD";
        $link = "Dashbaord";

        $array = $this->admin->getNumbers();
        $customer = $array["customer"];
        $item = $array["item"];
        $order = $array["order"];

        require_once __DIR__ . "/../../../" . "/views/admin/dashboard.php";
    }

    public function customerView()
    {
        $name = "CUSTOMER LIST";
        $link = "Customer List";

        $users = $this->admin->getCustomerList();
        require_once __DIR__ . "/../../../" . "/views/admin/customer.php";
    }

    public function orderView()
    {
        $name = "ORDER LIST";
        $link = "Order List";

        $lists = $this->admin->getOrderList();
        require_once __DIR__ . "/../../../" . "/views/admin/orders.php";
    }

    public function storeView()
    {
        $name = "ITEM LIST";
        $link = "Item List";

        $items = $this->admin->getItemList();
        require_once __DIR__ . "/../../../" . "/views/admin/store.php";
    }

    public function createItem()
    {
        $result = $this->admin->createItem(file: $_FILES, post: $_POST);
        header("Location: {$_SERVER["HTTP_REFERER"]}");
    }
}
