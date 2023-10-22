<?php

declare(strict_types=1);

class User
{
    private string $name;
    private string $email;
    private int $number;
    private int|string $password;
    private string $userId;
    private string $hash;
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

    public function userRegister(
        string $name,
        string $email,
        int $number,
        string|int $password
    ) {
        $this->name = $this->validateString($name);
        $this->email = $this->validateEmail($email);
        $this->number = $this->validateInt($number);
        $this->password = $this->hash($password);

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
            'sssis',
            $this->userId,
            $this->name,
            $this->email,
            $this->number,
            $this->hash
        );

        if ($result->execute()) {
            header("Location:login.php");
        }
    }

    public function verifyUser($email, $password)
    {
        $this->email = $this->validateEmail($email);

        $result = $this->conn->query("SELECT * FROM users WHERE userMail='$email'");

        if (mysqli_num_rows($result) === 1) {

            $out = $result->fetch_assoc();
            $this->hash = $out['userPassword'];

            $verify = $this->passVerify(password: $password, hash: $this->hash);

            if ($verify) {

                $_SESSION['type'] = $out['UserType'];
                $_SESSION['name'] = $out['userName'];
                $_SESSION['id'] = $out['userId'];

                header("Location: ../index.php");
            } else {
                sleep(3);
                header('Location: login.php');
            }
        }
    }

    public function validateString(string $name)
    {
        $this->name = $name;
        if (!preg_match("/^['a-z A-Z']*$/", $this->name)) {
            return ("Only Letters and Whitespace allowed");
        }
        return $this->name;
    }

    public function validateEmail(string $email)
    {
        $this->email = $email;
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            return ("Valid Email required");
        }
        return $this->email;
    }

    public function validateInt(int $number)
    {
        $this->number = $number;
        if (!filter_var($this->number, FILTER_VALIDATE_INT)) {
            return ("Number required only");
        }
        return $this->number;
    }

    public function hash(string|int $password)
    {
        $this->password = $password;
        $this->hash = password_hash($this->password, PASSWORD_BCRYPT);
        return $this->hash;
    }

    public function passVerify($password, $hash): bool
    {
        $verify = password_verify($password, $hash);
        return $verify;
    }
    public function __destruct()
    {
        $this->conn->close();
    }
}
