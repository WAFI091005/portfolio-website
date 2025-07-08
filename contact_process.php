<?php
include 'includes/db_config.php';

$message_status = '';
$message_type = ''; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string(trim($_POST['name']));
    $email = $conn->real_escape_string(trim($_POST['email']));
    $message = $conn->real_escape_string(trim($_POST['message']));

    if (empty($name) || empty($email) || empty($message)) {
        $message_status = 'Semua kolom wajib diisi.';
        $message_type = 'error';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message_status = 'Format email tidak valid.';
        $message_type = 'error';
    } else {
        $sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";

        if ($conn->query($sql) === TRUE) {
            $message_status = 'Pesan Anda berhasil dikirim! Terima kasih.';
            $message_type = 'success';
        } else {
            $message_status = 'Terjadi kesalahan saat mengirim pesan: ' . $conn->error;
            $message_type = 'error';
        }
    }
}

// Tutup koneksi database
$conn->close();

header("Location: index.php?status=$message_type&msg=" . urlencode($message_status) . "#contact");
exit();
?>