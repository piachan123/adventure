<?php

if (isset($_GET['searchTerm'])) {
    $searchTerm = $_GET['searchTerm'];

    // Direktori tempat file-file teks berada
    $directory = '/dashboard/';

    // Mendapatkan daftar file dalam direktori
    $files = scandir($directory);

    // Menampilkan hasil pencarian
    foreach ($files as $file) {
        if (pathinfo($file, PATHINFO_EXTENSION) == 'txt') {
            $filePath = $directory . '/' . $file;
            $content = file_get_contents($filePath);

            // Melakukan pencarian dalam konten file
            if (stripos($content, $searchTerm) !== false) {
                echo "Match found in file: $file<br>";
            }
        }
    }

    if (empty($fileMatches)) {
        echo "No matches found.";
    }
}
?>
