<?php
namespace Core;

class Security {
    // شروع سشن با تنظیمات امن
    public static function startSession() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start([
                'cookie_httponly' => true,
                'cookie_secure' => isset($_SERVER['HTTPS']),
                'cookie_samesite' => 'Strict',
            ]);
        }
    }

    // ساخت و گرفتن توکن CSRF
    public static function generateCsrfToken() {
        self::startSession();
        if (empty($_SESSION['csrf_token'])) {
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        }
        return $_SESSION['csrf_token'];
    }

    // اعتبارسنجی توکن CSRF
    public static function verifyCsrfToken($token) {
        self::startSession();
        return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
    }

    // فیلتر خروجی (برای جلوگیری از XSS)
    public static function xss($string) {
        return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
    }
}
