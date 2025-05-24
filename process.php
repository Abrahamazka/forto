<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "portopolio";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$nama = $_POST['name'];
$email = $_POST['email'];
$pesan = $_POST['message'];

$sql = "INSERT INTO kontak (nama, email, pesan) VALUES ('$nama', '$email', '$pesan')";
if ($conn->query($sql) === TRUE) {
    echo "<script>
            alert('Pesan berhasil dikirim!');
            window.location.href = 'forto.php'; 
          </script>";
} else {
    echo "<script>
            alert('Gagal mengirim pesan. Coba lagi!');
            window.location.href = 'forto.php'; 
          </script>";
}

$conn->close();
?>
