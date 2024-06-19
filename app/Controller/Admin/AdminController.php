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

        return view("admin.dashboard");
    }

    public function customerView()
    {
        $name = "CUSTOMER LIST";
        $link = "Customer List";

        $users = $this->admin->getCustomerList();
        return view('admin.customer');
    }

    public function orderView()
    {
        $name = "ORDER LIST";
        $link = "Order List";

        $lists = $this->admin->getOrderList();
        return view('admin.orders');
    }

    public function storeView()
    {
        $name = "ITEM LIST";
        $link = "Item List";

        $items = $this->admin->getItemList();
        return view('admin.store');
    }

    public function createItem()
    {
        $result = $this->admin->createItem(file: $_FILES, post: $_POST);
        header("Location: {$_SERVER["HTTP_REFERER"]}");
    }
}
