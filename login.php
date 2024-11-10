<?php
session_start();

// Include file untuk koneksi ke database
include('config.php');

// Cek apakah form login disubmit
if (isset($_POST['submit'])) {
    // Ambil data dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk mencari username dalam database
    $sql = "SELECT * FROM users WHERE username = '$username' LIMIT 1";
    $result = mysqli_query($conn, $sql);

    // Cek apakah username ditemukan
    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        // Verifikasi kata sandi
        if (password_verify($password, $user['password'])) {
            // Set session jika login berhasil
            $_SESSION['username'] = $user['username'];
            header('Location: dashboard.php'); // Redirect ke halaman dashboard
            exit();
        } else {
            echo "<script>alert('Kata sandi salah!');</script>";
        }
    } else {
        echo "<script>alert('Nama pengguna tidak ditemukan!');</script>";
    }
}
?>

