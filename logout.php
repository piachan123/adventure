<?php
session_start();

// Hapus semua variabel sesi
$_SESSION = array();
error_log("Variabel sesi dihapus.");

// Hapus cookie sesi jika ada
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
    error_log("Cookie sesi dihapus.");
}

// Hancurkan sesi
session_destroy();
error_log("Sesi dihancurkan.");
header("location: login.php");
exit();
?>
