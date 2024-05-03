<?php
require "connext.php";
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $maphim = $_POST["maphim"];
    $Tenphim = $_POST["Tenphim"];
    $anh = $_POST["anh"];
    $Dienvien = $_POST["Dienvien"];
    $Daodien = $_POST["Daodien"];
    $Nhasanxuat = $_POST["Nhasanxuat"];

    $sql = "UPDATE lich_chieu SET Tenphim ='$Tenphim', anh='$anh', Dienvien='$Dienvien', Daodien='$Daodien', Nhasanxuat='$Nhasanxuat' WHERE maphim = '$maphim'";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Cập nhật thông tin phim thành công.'); setTimeout(function(){ window.location.href = '../php/lich_chieu.php'; },100);</script>";
        
        exit;
    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
