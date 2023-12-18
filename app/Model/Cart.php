<?php

namespace App\Model;

use App\App;

class Cart {

    // private \mysqli|bool $conn;

    public function __construct(private \mysqli|bool $conn = App::db()) {
        // $this->conn = App::db();
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

    public function addCartItem(int $id) {
        $user_uniqid = $_SESSION['id'];
        $query = $this->conn->prepare("SELECT * FROM food_items WHERE item_id = ?");
        $query->bind_param('s', $id);
        while ($query->num_rows === 1) {
            $item = $query->execute();
        }

        $query = $this->conn->prepare("INSERT INTO order_items(item_id, product_name, name, useruniqid, price, discount) VALUE(??????)");

        // $stmt = $query->bind_param('ssssss', )
    }
}