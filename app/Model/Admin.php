<?php

namespace App\Model;

use App\App;

class Admin extends BaseModel
{
    public function __construct()
    {
        if ($_SESSION['type'] !== 'admin') {
            header("Location: /");
        }
        parent::__construct();
    }

    public function getCustomerList(): array
    {
        $query = "SELECT * FROM users";
        $stmt = $this->conn->query($query);
        $userArray = [];

        if ($stmt->num_rows > 0) {
            while ($user = $stmt->fetch_assoc()) {
                $userArray[] = $user;
            }
        }

        return $userArray;
    }

    public function getOrderList(): array
    {
        $query = "SELECT * FROM order_items";
        $stmt = $this->conn->query($query);
        $orderArray = [];

        if ($stmt->num_rows > 0) {
            while ($order = $stmt->fetch_assoc()) {
                $orderArray[] = $order;
            }
        }

        return $orderArray;
    }

    public function getItemList(): array
    {
        $query = "SELECT * FROM food_items";
        $stmt = $this->conn->query($query);
        $itemArray = [];

        if ($stmt->num_rows > 0) {
            while ($item = $stmt->fetch_assoc()) {
                $itemArray[] = $item;
            }
        }

        return $itemArray;
    }

    public function createItem(array $file = [], array $post = [])
    {
        //$_FILES
        $result = self::files($file);
        $img_url = $result[1];
        $result = $result[0];

        //$_POST
        $name = $_POST["name"];
        $category = $_POST["category"];
        $price = $_POST["price"];
        $discount = $_POST["discount"] ?? '';
        $description = $_POST["description"] ?? '';
        $foodId = self::foodId();


        if ($result) {
            $query = "INSERT INTO food_items
            (food_id, name, category, description, price, discount, image_url) 
            VALUE(?,?,?,?,?,?,?)";

            if (!empty($name && $price && $category && $img_url)) {
                $stmt = $this->conn->prepare($query);

                $stmt->bind_param(
                    'sssssss',
                    $foodId,
                    $name,
                    $category,
                    $description,
                    $price,
                    $discount,
                    $img_url
                );
                if ($stmt->execute()) {
                    return true;
                } else {
                    return false;
                }
            }
            return "Empty";
        }
    }

    public function files($file): bool|string|array
    {
        $file = [
            "name" => $file['image']['name'],
            "type" => $file['image']['type'],
            "tmp_name" => $file['image']['tmp_name'],
            "size" => $file['image']['size']
        ];

        $myType = [
            'png', 'jpeg', 'jpg'
        ];

        $type = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        $size = $file['size'];
        $name = explode('.', $file['name']);
        $tmp = $file['tmp_name'];

        if (in_array($type, $myType)) {
            if ($size <= 2000000) {
                $new_name = $name[0] . rand(00, 10) . "." . $name[1];
                $bool = move_uploaded_file($tmp, __DIR__ . "/../../public/uploads/" . $new_name);
                return [$bool, $new_name];
            }
            return "Size should be less than 2mb";
        }
        return "The image should be only of png, jpg, jpeg";
    }

    private function foodId()
    {
        $token = openssl_random_pseudo_bytes(5);
        //Convert the binary data into hexadecimal representation.
        $token = bin2hex($token);
        return '#' . $token;
    }

    public function getNumbers()
    {
        $customer = count(self::getCustomerList());
        $item = count(self::getItemList());
        $order = count(self::getOrderList());
        return ["customer" => $customer, "item" => $item, "order" => $order];
    }
}
