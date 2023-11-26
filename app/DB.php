<?php

namespace App;

use mysqli;

class DB
{
    private mysqli|bool  $conn;

    public function __construct(protected array $config)
    {
        try {
            $this->conn = mysqli_connect(
                $config['hostname'],
                $config['username'],
                $config['password'],
                $config['dbname']
            );
        } catch (\mysqli_sql_exception $e) {
            echo $e->getMessage();
        }
    }
    public function conn()
    {
        return $this->conn;
    }
}
