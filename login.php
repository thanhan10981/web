<?php
session_start(); 

if(isset($_POST["btn-login"])){
    require "connext.php"; 
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM dang_ky WHERE username='$username' AND password = md5('$password')";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
       
        $_SESSION['username'] = $_POST['username'];
        header("Location: webchinhdalogin.php"); 
        exit;
    } else {   
        
        $error_message = "Tên người dùng hoặc mật khẩu không đúng. Vui lòng thử lại!";
        header("Location: Trangdangnhap.php?error=" . urlencode($error_message)); 
        exit;
    }
}
?>
