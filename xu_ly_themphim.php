<?php
// Kết nối đến cơ sở dữ liệu
require "connext.php";

// Kiểm tra nếu có phương thức POST được gửi từ form
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy các giá trị được gửi từ form
    $maphim = $_POST["maphim"];
    $theloai = $_POST["theloai"];
    $anh = $_POST["anh"];
    $ngayphathanh = $_POST["ngayphathanh"];
    $mota = $_POST["mota"];

    // Chuẩn bị truy vấn SQL để thêm phim vào cơ sở dữ liệu
    $sql = "INSERT INTO phim_dang_chieu (maphim, theloai, anh, ngayphathanh, mota) 
            VALUES ('$maphim', '$theloai', '$anh', '$ngayphathanh', '$mota')";

    // Thực thi truy vấn SQL
    if ($conn->query($sql) === TRUE) {
       
        echo "<script>alert('Thêm phim thành công.'); window.location.href = '../php/phim_dang_chieu.php'; </script>";
        exit;
    } else {
        // Nếu có lỗi xảy ra, hiển thị thông báo lỗi
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }
}

// Đóng kết nối đến cơ sở dữ liệu
$conn->close();
?>
