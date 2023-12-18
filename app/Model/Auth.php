<?php

namespace App\Model;

use App\App;

class Auth
{
    private string $name;
    private string $email;
    private int $number;
    private string $password;
    private string $id;
    private string $token;
    private string $hash;
    private \mysqli $conn;
    public function __construct()
    {
        $this->conn = App::db();
    }

    public function userRegister($post): bool
    {

        $this->name = $this->validateString($post['name']);
        $this->email = $this->validateEmail($post['email']);
        $this->number = $this->validateInt($post['number']);
        $this->password = $this->hashPassword($post['password']);

        $this->id = uniqid('user_id_');
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

        return $result->execute();
    }

    public function verifyUser($post): bool
    {
        $this->email = $this->validateEmail($post['email']);
        $password = $_POST['password'];

        $stmt = $this->conn->query("SELECT * FROM users WHERE email='$this->email'");

        // ddd($result);

        if (mysqli_num_rows($stmt) === 1) {

            $out = $stmt->fetch_assoc();
            $this->hash = $out['user_password'];

            $verify = $this->passVerify(password: $password, hash: $this->hash);

            if ($verify) {
                $_SESSION['type'] = $out['type'];
                $_SESSION['name'] = $out['name'];
                $_SESSION['id'] = $out['id'];
                return $verify;
            } else {
                sleep(3);
                return $verify;
            }
        }
        return (bool) $stmt;
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

    private function validateString(string $name)
    {
        $this->name = $name;
        if (!preg_match("/^['a-z A-Z']*$/", $this->name)) {
            return ("Only Letters and Whitespace allowed");
        }
        return $this->name;
    }

    private function validateEmail(string $email)
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

    private function validateInt(int $number)
    {
        $this->number = $number;
        if (!filter_var($this->number, FILTER_VALIDATE_INT)) {
            return ("Number required only");
        }
        return $this->number;
    }

    private function hashPassword(string|int $password)
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
    private function passVerify($password, $hash): bool
    {
        $verify = password_verify(password: $password, hash: $hash);
        return $verify;
    }
    public function __destruct()
    {
        $this->conn->close();
    }
}
