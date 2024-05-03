<?php
require "connext.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy thông tin từ form
    $adminname = $_POST['adminname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Cập nhật thông tin admin vào cơ sở dữ liệu
    $sql = "UPDATE admin SET email='$email', password= '$password' WHERE adminname='$adminname'";

    if ($conn->query($sql) === TRUE) {
        header("Location: taikhoanadmin.php");
    } else {
        echo "Lỗi: " . $conn->error;
    }
}

$conn->close();
?>
