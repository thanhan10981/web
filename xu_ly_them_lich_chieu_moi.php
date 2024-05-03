<?php
// Kết nối đến cơ sở dữ liệu
require "connext.php";

// Kiểm tra nếu có phương thức POST được gửi từ form
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy các giá trị được gửi từ form
    $maphim = $_POST["maphim"];
    $Tenphim = $_POST["Tenphim"];
    $anh = $_POST["anh"];
    $Dienvien = $_POST["Dienvien"];
    $Daodien = $_POST["Daodien"];
    $Nhasanxuat = $_POST["Nhasanxuat"];

    // Chuẩn bị truy vấn SQL để thêm phim vào cơ sở dữ liệu
    $sql = "INSERT INTO lich_chieu (maphim, Tenphim, anh, Dienvien, Daodien, Nhasanxuat) 
            VALUES ('$maphim', '$Tenphim', '$anh', '$Dienvien', '$Daodien','$Nhasanxuat')";

    // Thực thi truy vấn SQL
    if ($conn->query($sql) === TRUE) {
       
        echo "<script>alert('Thêm phim thành công.'); window.location.href = '../php/lich_chieu.php'; </script>";
        exit;
    } else {
        // Nếu có lỗi xảy ra, hiển thị thông báo lỗi
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }
}

// Đóng kết nối đến cơ sở dữ liệu
$conn->close();
?>
