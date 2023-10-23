<?php

declare(strict_types=1);

// if (!@$_SESSION['type'] !== 'admin'){
//     header('Location: ../../index.php');
// }
class Database
{
    private int $itemId;
    private string $itemName;
    private string $category;
    private int $itemPrice;
    private int $itemDiscount;
    private string $itemImg;
    private string $status;
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

    public function addItem(
        $itemId,
        $itemName,
        $category,
        $itemPrice,
        $itemDiscount,
        $itemImg
    ) {
        $this->itemId = $this->validateInt($itemId);
        $this->itemName = $this->validateString($itemName);
        $this->category = $this->validateString($category);
        $this->itemPrice = $this->validateInt($itemPrice);
        $this->itemDiscount = $this->validateInt($itemDiscount);
        $this->itemImg = $this->validateString($itemImg);

        $insert = $this->conn->prepare(
            'INSERT INTO items(
            itemId, 
            itemName, 
            category, 
            itemPrice, 
            itemDiscount, 
            itemImg) VALUES (?,?,?,?,?,?)'
        );
        $insert->bind_param(
            'issiis',
            $this->itemId,
            $this->itemName,
            $this->category,
            $this->itemPrice,
            $this->itemDiscount,
            $this->itemImg
        );
        if ($insert->execute()) {
            return true;
        }
    }

    public function update()
    {
        // $this->conn->prepared_query('', $this->itemId);
    }

    public function validateString(string $value)
    {
        if (!preg_match("/^['a-z A-Z']*$/", $value)) {
            return ("Only Letters and Whitespace allowed");
        }
        return $value;
    }

    public function validateInt(int $value)
    {
        if (!filter_var($value, FILTER_VALIDATE_INT)) {
            return ("Number required only");
        }
        return $value;
    }

    public function __destruct()
    {
        $this->conn->close();
    }
}
