<?php

namespace App\Controller\Shop;

use App\App;

class Shop {

    private \mysqli|bool $conn;
    public function list(string $arg = null) {
        $this->conn = App::db();

        $items = [];

        if ($arg !== null) {
            $query = "SELECT * FROM food_items WHERE category = '$arg'";
        }else {
            $query = "SELECT * FROM food_items";
        }

        $stmt = $this->conn->query($query);

        if ($stmt->num_rows > 0) {
            while ($lists = $stmt->fetch_assoc()) {
                $items[] = $lists;
            }
        }
        return $items;
    }
    
}