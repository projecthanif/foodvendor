<?php

declare(strict_types=1);

// if (!@$_SESSION['type'] !== 'admin'){
//     header('Location: ../../index.php');
// }
class Database
{
    private $conn;
    private const HOST = 'localhost';
    private const HOSTNAME = 'root';
    private const PASSWORD = '';
    private const DataBaseName = 'foodvendor';
    public function __construct()
    {
        $this->conn = mysqli_connect(
            self::HOST,
            self::HOSTNAME,
            self::PASSWORD,
            self::DataBaseName
        );

        if ($this->conn->connect_error) {
            trigger_error('ERROR', E_USER_ERROR);
            die('Connection Error');
        }
    }

    public function getList(string $query)
    {
        $result = $this->conn->query($query);
        $lists = [];

        if (mysqli_num_rows($result) > 0) {
            while ($list = $result->fetch_assoc()) {

                $lists[] = $list;
            }
        }

        return $lists;
    }

    public function __destruct()
    {
        $this->conn->close();
    }
}
