<?php

require "connext.php";


if($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $username = $_POST["username"];
    $fullname = $_POST["fullname"];
    $cccd = $_POST["cccd"];
    $gender = $_POST["gender"];
    $birthdate = $_POST["birthdate"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];

   
    $sql = "UPDATE dang_ky SET fullname='$fullname', CCCD='$cccd', gender='$gender', BirthDate='$birthdate', Email='$email', Phone='$phone', address='$address' WHERE username='$username'";

   
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Cập nhật thông tin phim thành công.'); setTimeout(function(){ window.location.href = '../php/nguoidungAdmin.php'; }, 100);</script>";
        // header("Location: nguoidungAdmin.php?username=$username");
        exit;
    } else {
       
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }
}


$conn->close();
?>
