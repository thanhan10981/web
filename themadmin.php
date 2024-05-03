<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    require "connext.php"; 

   
    $adminname = $_POST["adminname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $sql = "INSERT INTO admin (adminname, email, password) VALUES ('$adminname', '$email', '$password')";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Thêm admin thành công.'); window.location.href = 'taikhoanadmin.php'; </script>";
        
        exit; 
    } else {
       
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

   
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../css/themadmin.css">
</head>
<body>
    <h2>Thêm Tài Khoản Admin</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="adminname">Tên Đăng Nhập:</label><br>
        <input type="text" id="adminname" name="adminname"><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>
        <label for="password">Mật Khẩu:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Thêm Admin">
    </form>
</body>
</html>
