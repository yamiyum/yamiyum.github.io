<?php
include "baglan.php";

$isim = $_POST["isim"];
$soyisim=$_POST["soyisim"];
$email = $_POST["email"];

$sql = "INSERT INTO kullanicilar (isim, soyisim, email) VALUES ('$isim', '$soyisim', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Yeni kullanıcı başarıyla eklendi!";
} else {
    echo "Hata: " . $conn->error;
}

$conn->close();
?>
