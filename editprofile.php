<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $username = $_POST["username"];
    $email = $_POST["email"];

    // Logika untuk upload gambar
    $gambar = "path/to/uploaded/"; // Gantilah ini dengan logika sesuai kebutuhan Anda

    if ($_FILES['gambar']['error'] == 0) {
        $uploadDir = "dist/img/"; // Gantilah dengan direktori penyimpanan gambar
        $uploadFile = $uploadDir . basename($_FILES['gambar']['name']);

        if (move_uploaded_file($_FILES['gambar']['tmp_name'], $uploadFile)) {
            $gambar = $uploadFile;
        } else {
            echo "Gagal mengunggah file.";
            exit();
        }
    }

    $query = "UPDATE user SET username='$username', email='$email', gambar='$gambar' WHERE id=$id";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        header("location: profile.php");
        exit();
    } else {
        echo "Gagal mengedit profil.";
    }
} else {
    $id = $_GET["id"];
    $query = "SELECT * FROM user WHERE id=$id";
    $result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($result);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profil</title>
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
            padding: 20px 100px;
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
            margin-bottom: 10px;
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

        .edit-button {
            background-color: #4caf50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none; /* Menghilangkan garis bawah dari tautan */
        }

        .edit-button:hover {
            background-color: #45a049;
        }
        .cancel-button {
            background-color: #d9534f; /* Warna merah */
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none; /* Menghilangkan garis bawah dari tautan */
        }

        .cancel-button:hover {
            background-color: #c9302c; /* Warna merah lebih gelap pada hover */
        }

    </style>
<body>
<div class="container">
    <h2>Edit Profil</h2>

    </head>
    <form method="post" action="" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

        <label for="username">Username:</label>
        <input type="text" name="username" value="<?php echo $row['username']; ?>" required>

        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo $row['email']; ?>" required>

        <!-- Input untuk upload gambar -->
        <label for="gambar">Pilih Foto Profil Baru:</label>
        <input type="file" name="gambar" id="gambar" required>

        <button class="cancel-button" onclick="location.href='profile.php'">Batal</button>
        <button class="edit-button" onclick="location.href='profile.php'">Simpan</button>
    </form>

    </div>
</body>
</html>
