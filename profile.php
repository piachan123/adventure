<?php
include "koneksi.php";

$query = "SELECT * FROM user";
$result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consina Profile</title>
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
            background-color: #5F9EA0; /* Warna merah */
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none; /* Menghilangkan garis bawah dari tautan */
        }

        .cancel-button:hover {
            background-color: #4F94CD; /* Warna merah lebih gelap pada hover */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Profil Anda</h2>

        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <div>
                <img src="<?php echo $row['gambar']; ?>" alt="Profile Picture">
                <h3><?php echo $row['username']; ?></h3>
                <p><?php echo $row['email']; ?></p>
                <br>
                <button class="cancel-button" onclick="location.href='dashboard.php'">Kembali</button>
                <button class="edit-button" onclick="location.href='editprofile.php?id=<?php echo $row['id']; ?>'">Edit Profil</button>
            </div>
        <?php } ?>
    </div>
</body>
</html>

