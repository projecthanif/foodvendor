<?php

namespace App\Helpers;

use mysqli;

final class DB
{
    private mysqli|bool  $conn;

    public function __construct(protected array $config)
    {

        try {
            $this->conn = new mysqli(
                $config['DB_HOST'],
                $config['DB_USER'],
                $config['DB_PASS'],
                $config['DB_NAME']
            );
        } catch (\mysqli_sql_exception $e) {
            dd($e->getMessage());
        }
    }
    public function conn(): mysqli|bool
    {
        return $this->conn;
    }
}
