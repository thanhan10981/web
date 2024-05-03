<?php
require "connext.php";

// Kiểm tra xem request method là POST hay không
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy các giá trị được gửi từ form sửa phim
    $maphim = $_POST["maphim"];
    $theloai = $_POST["theloai"];
    $anh = $_POST["anh"];
    $ngayphathanh = $_POST["ngayphathanh"];
    $mota = $_POST["mota"];

    // Cập nhật thông tin của phim trong database
    $sql = "UPDATE phim_dang_chieu SET theloai='$theloai', anh='$anh', ngayphathanh='$ngayphathanh', mota='$mota' WHERE maphim='$maphim'";

    // Thực hiện truy vấn SQL để cập nhật thông tin phim
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Cập nhật thông tin phim thành công.'); setTimeout(function(){ window.location.href = '../php/phim_dang_chieu.php'; }, 100);</script>";
        // header("Location: suaphimadmin.php");
        exit;
    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
