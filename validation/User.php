<?php
declare(strict_types=1);

require_once(dirname(__FILE__) . "/../" . "connection/Connection.php");

use Connection\Connection;

class User
{
    private string $name;
    private string $email;
    private int $number;
    private string $password;
    private string $id;
    private string $token;
    private string $hash;
    private $conn;
    public function __construct()
    {
        $this->conn = (new Connection())->getConnection();
    }

    public function userRegister(
        string $name,
        string $email,
        int $number,
        string $password
    ) {
        $this->name = $this->validateString($name);
        $this->email = $this->validateEmail($email);
        $this->number = $this->validateInt($number);
        $this->password = $this->hashPassword($password);

        $this->id = uniqid('#');
        $this->token = $this->generateToken();
        $result = $this->conn->prepare(
            "INSERT INTO users (
            id, 
            name, 
            email, 
            phone,
            token,
            user_password
            ) VALUES (?,?,?,?,?,?);"
        );
        $result->bind_param(
            'ssssss',
            $this->id,
            $this->name,
            $this->email,
            $this->number,
            $this->token,
            $this->password
        );

        if ($result->execute()) {
            header("Location: login.php");
            exit;
        }
    }

    public function verifyUser($email, $password)
    {
        $this->email = $this->validateEmail($email);

        $result = $this->conn->query("SELECT * FROM users WHERE email='$email'");

        if (mysqli_num_rows($result) === 1) {

            $out = $result->fetch_assoc();
            $this->hash = $out['user_password'];

            $verify = $this->passVerify(password: $password, hash: $this->hash);
            
            if ($verify) {

                $_SESSION['type'] = $out['type'];
                $_SESSION['name'] = $out['name'];
                $_SESSION['id'] = $out['id'];

                header("Location: ../index.php");
            } else {
                sleep(3);
                header('Location: login.php');
            }
        }
    }

    public function verifyEmail($email, $token)
    {
        $query = $this->conn->query("SELECT * FROM users where email = {$email}");

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            if (mysqli_num_rows($query) === 1) {
                $out = $query->fetch_assoc();
                if ($out['token'] === $token) {
                    $query = $this->conn->query("UPDATE TABLE users 
                    SET token = '$token'
                    WHERE email = '$email'");
                }
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
        if (!filter_var($this->email, FILTER_SANITIZE_EMAIL)) {
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

    public function hashPassword(string|int $password)
    {
        $this->password = $password;
        $this->hash = password_hash($this->password, PASSWORD_BCRYPT);
        return $this->hash;
    }

    private function generateToken()
    {
        $token = openssl_random_pseudo_bytes(8);

        //Convert the binary data into hexadecimal representation.
        $token = bin2hex($token);
        return $token;
    }
    public function passVerify($password, $hash): bool
    {
        $verify = password_verify(password:$password, hash: $hash);
        return $verify;
    }
    public function __destruct()
    {
        $this->conn->close();
    }
}
