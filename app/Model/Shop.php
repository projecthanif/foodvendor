<?php

namespace App\Model;

use App\App;

class Shop extends BaseModel
{


    public function fetchList(string $arg = null)
    {
        $items = [];

        if ($arg !== null) {
            $query = "SELECT * FROM food_items WHERE category = '$arg'";
        } else {
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
