<?php

namespace Connection;
class Connection
{
    public $conn;
    const DB_HOSTNAME = 'localhost';
    const DB_USERNAME = 'root';
    const DB_PASSWORD = '';
    const DB_NAME = 'foodvendor';

    public function getConnection()
    {
        $this->conn = mysqli_connect(
            self::DB_HOSTNAME,
            self::DB_USERNAME,
            self::DB_PASSWORD,
            self::DB_NAME
        );
        if (!$this->conn) {
            return 0;
        }
        return $this->conn;
    }
}
