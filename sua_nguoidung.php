<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa Thông Tin Người Dùng</title>
    <link rel="stylesheet" href="../css/sua_nguoidung.css">
</head>
<body>
    <?php
    require "connext.php";
    if(isset($_GET['username'])) {
        $username = $_GET['username'];
        $sql = "SELECT * FROM dang_ky WHERE username='$username'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
           
            $row = $result->fetch_assoc();
    ?>
            <h2>Sửa Thông Tin Người Dùng</h2>
            <form action="xuly_sua_nguoidung.php" method="post">
              
                <input type="hidden" name="username" value="<?php echo $row['username']; ?>">
                
                <label for="fullname">Họ và Tên:</label>
                <input type="text" id="fullname" name="fullname" value="<?php echo $row['fullname']; ?>"><br><br>

               
                <label for="cccd">CCCD:</label>
                <input type="text" id="cccd" name="cccd" value="<?php echo $row['CCCD']; ?>"><br><br>

              
                <label for="gender">Giới Tính:</label>
                <input type="text" id="gender" name="gender" value="<?php echo $row['gender']; ?>"><br><br>

              
                <label for="birthdate">Ngày Sinh:</label>
                <input type="text" id="birthdate" name="birthdate" value="<?php echo $row['BirthDate']; ?>"><br><br>

                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo $row['Email']; ?>"><br><br>

               
                <label for="phone">Số Điện Thoại:</label>
                <input type="text" id="phone" name="phone" value="<?php echo $row['Phone']; ?>"><br><br>

                
                <label for="address">Địa Chỉ:</label>
                <input type="text" id="address" name="address" value="<?php echo $row['address']; ?>"><br><br>

                
                <input type="submit" value="Cập Nhật">
            </form>
    <?php
        } else {
            echo "Không tìm thấy người dùng.";
        }
    }

    
    $conn->close();
    ?>
</body>
</html>
