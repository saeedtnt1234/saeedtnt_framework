<?php
namespace Core;

use Core\Database;

class Auth
{
    public static function attempt(array $credentials): bool
    {
        Security::startSession();

        $conn = Database::getConnection();
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = :email LIMIT 1");
        $stmt->execute(['email' => $credentials['email']]);
        $user = $stmt->fetch();

        if ($user && password_verify($credentials['password'], $user['password'])) {
            $_SESSION['user'] = $user;
            return true;
        }

        return false;
    }

    public static function check(): bool
    {
        Security::startSession();
        return isset($_SESSION['user']);
    }

    public static function user()
    {
        Security::startSession();
        return $_SESSION['user'] ?? null;
    }

    public static function logout()
    {
        Security::startSession();
        unset($_SESSION['user']);
        session_destroy();
    }
}
