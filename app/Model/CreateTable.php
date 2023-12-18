<?php

namespace App\Model;

use App\App;

class CreateTable
{
    private \mysqli|bool $conn;

    public function __construct()
    {
        $this->conn = App::db();
    }

    public function  createTable()
    {
        $createOrderItemSQL = "CREATE TABLE order_items (
            id VARCHAR(50) NOT NULL AUTO_INCREMENT,
            item_id VARCHAR(50) NOT NULL,
            product_name VARCHAR(50) NOT NULL,
            useruniqid VARCHAR(50) NOT NULL,
            price VARCHAR(50),
            discount VARCHAR(50),
            payment_status VARCHAR(20) DEFAULT 'pending',
            date_uploaded TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
            PRIMARY KEY(id)
            )";

        $return = $this->conn->query($createOrderItemSQL);

        if ($return === true) {
            return "Table Created successfully <br />";
        } else {
            return "Table failed";
        }
    }
}
