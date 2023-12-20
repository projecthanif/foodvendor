<?php

namespace App\Model;

use App\App;

class Address
{

    private \mysqli | bool $conn;

    public function __construct()
    {
        $this->conn = App::db();
    }

    public function getAddress(): array
    {

        $id = $_SESSION['id'];
        $query = "SELECT * FROM address  WHERE user_id = '$id'";

        $stmt = $this->conn->query($query);
        // ddd($stmt);

        if ($stmt) {
            if ($stmt->num_rows === 1) {
                $out = $stmt->fetch_assoc();
    
                $user_id = $out['id'];
                $name = $out['name'];
                $email = $out['email'];
                $street_address = $out['street_address'];
                $zip_code = $out['zip_code'];
                $city = $out['city'];
                $country = $out['country'];
                $number = $out['number'];
                if (empty($user_id)) return [];
    
                return [
                    'user_id' => $user_id,
                    'name' => $name,
                    'email' => $email,
                    'street_address' => $street_address,
                    'zip_code' => $zip_code,
                    'city' => $city,
                    'country' => $country,
                    'number' => $number
                ];
            }
        }

        return [];
    }

    public function setAddress()
    {
    }

    public function updateAddress()
    {
    }
}
