<?php

namespace App\Model;

use App\App;

class Cart {

    private \mysqli|bool $conn;

    public function __construct() {
        $this->conn = App::db();
    }
    public function getCartItems(): array {
        $id = $_SESSION['id'];
        $lists = [];
        $sums = [];
        $discounts = [];
        $query = "SELECT * FROM order_items WHERE id = '$id'";

        $stmt = $this->conn->query($query);

        if ($stmt->num_rows > 0) {
            while ($out = $stmt->fetch_assoc()) {
                $sums[] = $out['price'];
                $discounts[] = $out['discount'];
                $lists[] = $out;
            }
        }
        $total = array_sum($sums);
        $discount = array_sum($discounts);
        return [$lists, $total, $discount];

    }
}