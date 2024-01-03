<?php
session_start();
include "koneksi.php"; 

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $login = mysqli_prepare($koneksi, "SELECT * FROM user WHERE username=?");
    mysqli_stmt_bind_param($login, "s", $username);
    mysqli_stmt_execute($login);

    $result = mysqli_stmt_get_result($login);

    if ($result && $user = mysqli_fetch_assoc($result)) {
        // Verifikasi password
        if (password_verify($password, $user['password'])) {
            // Login berhasil
            // Simpan informasi pengguna dalam sesi
            $_SESSION["userData"] = array(
                "username" => $username,
                "email" => $user['email'],
                "gambar" => $user['gambar']
            );

            header('location:dashboard.php');
            exit();
        } else {
            // Password salah
            error_log("Password salah");
            echo "<div class='alert'>Username atau Password salah!</div>";
        }
    } else {
        // Username tidak ditemukan
        error_log("Username tidak ditemukan");
        echo "<div class='alert'>Username atau Password salah!</div>";
    }

    mysqli_stmt_close($login);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Consina Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #d0f0c0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            text-align: center;
            background-color: #fff;
            padding: 50px 100px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        header {
            text-align: center;
        }

        main {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        img {
            max-width: 50%;
            margin-bottom: -20px;
        }

        section {
            width: 100%;
            margin-bottom: 20px;
        }

        form {
            width: 100%;
            max-width: 300px;
            margin: auto;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
        }

        button {
            background-color: #4caf50;
            color: white;
            padding: 12px 100px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-bottom: 10px;
        }

        button:hover {
            background-color: #45a049;
        }

    </style>
</head>
<body>
    <div class="container">
        <header>
            <img src="dist/img/consina.jpeg" alt="logo consina">
        </header>
        <main>
            <h2>Login</h2>
            <form method="POST" action="">
                <label>Username</label>
                <input type="text" name="username">

                <label>Password</label>
                <input type="password" name="password">

                <button type="submit" name="submit" value="submit">Login</button>
            </form>
            <p>Belum punya akun? <a href="register.php">Daftar disini</a></p>
        </main>
    </div>
</body>
</html>
