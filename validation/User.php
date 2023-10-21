<?php

declare(strict_types=1);

class User
{
    public string $name;
    public string $email;
    public int $number;
    public int|string $password;
    private string $hash;
    public string $userId;
    private $conn;
    private const HOST = 'localhost';
    private const HOSTNAME = 'root';
    private const PASSWORD = '';
    private const DataBaseName = 'foodvendor';
    public function __construct(
        string $name,
        string $email,
        int $number,
        string|int $password
    ) {
        $this->name = $name;
        $this->email = $email;
        $this->number = $number;
        $this->password = $password;

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

    public function userRegister()
    {
        $this->userId = '#' . rand(10000, 200000);
        $result = $this->conn->prepare(
            "INSERT INTO users(
            userId, 
            userName, 
            userMail, 
            userNumber, 
            userPassword) VALUE(?,?,?,?,?);"
        );
        $result->bind_param(
            'sssss',
            $this->userId,
            $this->name,
            $this->email,
            $this->number,
            $this->hash
        );

        if ($result->execute()) {
            header("Location:user_login.php");
        }
    }

    public function verifyUser($name = null, $email, $password)
    {
    }

    public function validateString()
    {
        if (!preg_match("/^['a-z A-Z']*$/", $this->name)) {
            return ("Only Letters and Whitespace allowed");
        }
        return $this->name;
    }

    public function validateEmail()
    {
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            return ("Valid Email required");
        }
        return $this->email;
    }

    public function validateInt()
    {
        if (!filter_var($this->number, FILTER_VALIDATE_INT)) {
            return ("Number required only");
        }
        return $this->number;
    }

    public function hash()
    {
        $this->hash = password_hash($this->password, PASSWORD_BCRYPT);
        return $this->hash;
    }
    public function __destruct()
    {
        $this->conn->close();
    }
}
