<?php
session_start();
include "koneksi.php";

if (isset($_POST["submit"])) {
    $_SESSION["username"] = $_POST["username"];
    $_SESSION["password"] = $_POST["password"];
    $_SESSION["confirm_password"] = $_POST["confirm_password"];
    $_SESSION["email"] = $_POST["email"];

    // Pembersihan dan trim input
    $username = $_SESSION["username"];
    $password = trim($_SESSION["password"]);
    $confirm_password = trim($_SESSION["confirm_password"]);
    $email = $_SESSION["email"];

    // Validasi input di sisi server
    if (empty($username) || empty($password) || empty($confirm_password) || empty($email)) {
        echo "<div class='alert alert-danger'>Semua field harus diisi!</div>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<div class='alert alert-danger'>Format email tidak valid!</div>";
    } elseif ($password !== $confirm_password) {
        echo "<div class='alert alert-danger'>Password dan Confirm Password tidak cocok!</div>";
    } else {
        // Check if username or email already exists
        $stmt_check = $koneksi->prepare("SELECT * FROM user WHERE username=? OR email=?");
        $stmt_check->bind_param("ss", $username, $email);
        $stmt_check->execute();
        $result_check = $stmt_check->get_result();
        $cek = $result_check->num_rows;
        $stmt_check->close();

        if ($cek > 0) {
            echo "<div class='alert alert-danger'>Username atau Email Telah Digunakan!</div>";
        } else {
            // Insert data ke database
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $insert_stmt = $koneksi->prepare("INSERT INTO user (username, password, email) VALUES (?, ?, ?)");
            $insert_stmt->bind_param("sss", $username, $hashed_password, $email);

            if ($insert_stmt->execute()) {
                header('location:login.php');
            } else {
                echo "<div class='alert alert-danger'>Gagal menyimpan data ke database.</div>";
            }

            $insert_stmt->close();
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consina Register</title>
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
            text-align: center; /* Pusatkan kontennya secara horizontal */
            background-color: #fff;
            padding: 20px 100px; /* Mengurangi tinggi padding atas dan bawah */
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        header {
            text-align: center;
        }

        main {
            display: flex;
            flex-direction: column; /* Mengatur elemen di dalam main menjadi kolom */
            align-items: center; /* Pusatkan kontennya secara vertikal */
        }

        img {
            max-width: 50%; /* Pastikan gambar tidak melebihi lebar container */
            margin-bottom: -20px; /* Tambahkan margin bawah untuk memberi jarak antar elemen */
        }

        section {
            width: 100%;
            margin-bottom: 20px; /* Tambahkan margin bawah untuk memberi jarak antar elemen */
        }

        form {
            width: 100%;
            max-width: 300px; /* Atur lebar maksimum form */
            margin: auto; /* Pusatkan form */
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input {
            width: 100%; /* Ubah lebar input menjadi 100% */
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
            margin-bottom: 10px; /* Mengurangi margin bawah pada tombol */
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
            <h2>Register</h2>
            <form method="POST" action="">
                <label>Username</label>

                <input type="text" name="username">

                <label>Password</label>
                <input type="password" name="password">

                <label>Confirm Password</label>
                <input type="password" name="confirm_password">
                <label>Email</label>
                <input type="email" name="email">

                <button type="submit" name="submit" value="submit">Register</button>
            </form>
            <p>Sudah punya akun? <a href="login.php">Login disini</a></p>
        </main>
    </div>
</body>
</html>
