<?php

namespace Connection;
class Connection
{
    public $conn;
    public $hostname = 'localhost';
    public $username = 'root';
    public $password = '';
    public $database_name = 'foodvendor';

    public function getConnection()
    {
        $this->conn = mysqli_connect(
            $this->hostname,
            $this->username,
            $this->password,
            $this->database_name
        );
        if (!$this->conn) {
            return 0;
        }
        return $this->conn;
    }
}
