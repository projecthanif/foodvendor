<?php

namespace App\Model;

use App\App;

class Cart extends BaseModel
{

    public function getCartItems(): array
    {
        $id = $_SESSION['id'];
        $lists = [];
        $sums = [];
        $discounts = [];
        $query = "SELECT * FROM order_items WHERE useruniqid = '$id'";

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

    public function addCartItem(string $id)
    {

        $user_uniqid = $_SESSION['id'];
        $query = $this->conn->query("SELECT * FROM food_items WHERE id = '{$id}'");

        $item = $query->fetch_assoc();
        $item_id = $item['food_id'];
        $product_name = $item['name'];
        $user_uniqid = $_SESSION['id'];
        $price = $item['price'];
        $discount = $item['discount'] ?? '';


        $query = $this->conn->prepare(
            "INSERT INTO order_items(item_id, 
            product_name, useruniqid, price, discount) 
            VALUE(?,?,?,?,?)"
        );


        $stmt = $query->bind_param(
            'sssss',
            $item_id,
            $product_name,
            $user_uniqid,
            $price,
            $discount
        );

        $stmt = $query->execute();
        if ($stmt) return true;
        else return false;
    }

    public function deleteCartItem()
    {
        
    }
}
