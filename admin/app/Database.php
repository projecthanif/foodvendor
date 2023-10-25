<?php

declare(strict_types=1);

// if (!@$_SESSION['type'] !== 'admin'){
//     header('Location: ../../index.php');
// }
class Database
{
    private string $id;
    private string $name;
    private string $category;
    private int $price;
    private int $discount;
    private string $description;
    private string $img_url;
    private string $status;
    private $conn;
    private const HOST = "localhost";
    private const HOSTNAME = "root";
    private const PASSWORD = '';
    private const DataBaseName = "foodvendor";

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


    public function createQuery(string $query): bool
    {
        // $query = mysqli_real_escape_string($this->conn, $query);
        $sent = $this->conn->query($query);
        return $sent;
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

    public function addFoodItem(
        $name,
        $category,
        $description,
        $price,
        $discount,
        $img_url
    ) {
        $this->id = uniqid("#");
        $this->name = $this->validateString($name);
        $this->category = $this->validateString($category);
        $this->description = $this->validateString($description);
        $this->price = $this->validateInt((int) $price);
        // $this->discount = $this->validateInt((int) $discount);
        $this->img_url = $img_url;

        $insert = $this->conn->prepare(
            'INSERT INTO food_items(
            id, 
            name, 
            category,
            description,
            price,
            -- discount, 
            image_url) VALUES (?,?,?,?,?,?)'
        );
        $insert->bind_param(
            'ssssss',
            $this->id,
            $this->name,
            $this->category,
            $this->description,
            $this->price,
            // $this->discount,
            $this->img_url
        );
        if ($insert->execute()) {
            return true;
        }
    }

    public function upload($file): bool|string
    {
        $file_name = $_FILES['image']['name'];
        $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
        $file_size = $_FILES['image']['size'];
        $file_tmp_file = $_FILES['image']['tmp_name'];

        $ext_type = ['jpg', 'png', 'jpeg'];

        if (in_array($file_ext, $ext_type)) {
            if ($file_size < 50000) {
                $file_name = $file_name . '.' . $file_ext;

                $bool = move_uploaded_file($file_tmp_file, '../uploads/' . $file_name);
                if ($bool === false) {
                    return false;
                }
            } else {
                return 'file size ' . $file_size;
            }
        } else {
            return 'file type must be either "jpg, jpeg or png" not ' . $file_ext;
        }

        return $bool;
    }

    public function update()
    {
        // $this->conn->prepared_query('', $this->itemId);
    }

    public function validateString(string $value)
    {
        $value = trim($value);
        $value = stripslashes($value);
        $value = htmlspecialchars($value);
        if (!preg_match("/^['a-z A-Z']*$/", $value)) {
            return ("Only Letters and Whitespace allowed");
        }
        return $value;
    }

    public function validateInt($value)
    {
        if (!filter_var((int) $value, FILTER_VALIDATE_INT)) {
            return ("Number required only");
        }
        return $value;
    }

    public function __destruct()
    {
        $this->conn->close();
    }
}
