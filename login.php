<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consina Login</title>
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
            <section id="login">
                <h2>Login</h2>
                <form action="login.php" method="post">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required>

                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>

                    <button type="submit">Login</button>
                </form>
                <p>Belum punya akun? <a href="register.php">Daftar disini</a></p>
            </section>
        </main>
    </div>
</body>
</html>
