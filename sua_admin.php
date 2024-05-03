<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="http://127.0.0.1:5500/css/sua_admin.css">
    <link rel="icon" type="image/png" href="https://i.upanh.org/2024/04/23/21470a2b4330e219d.png" />
    <script>
        function showMessage(message) {
            alert(message);
        }
    </script>
</head>
<body>
    <div class="container">
        <h1>Sửa thông tin Admin</h1>
        <?php
        require "connext.php";

        // Kiểm tra xem adminname của admin đã được truyền qua URL hay chưa
        if(isset($_GET['adminname'])) {
            $adminname = $_GET['adminname'];
            $sql = "SELECT * FROM admin WHERE adminname = '$adminname'";
            $result = $conn->query($sql);

            if($result->num_rows > 0) {
                $row = $result->fetch_assoc();
        ?>
        <form action="luu_admin.php" method="POST">
            <input type="hidden" name="adminname" value="<?php echo $adminname; ?>"> <!-- Truyền adminname của admin qua POST -->
            <label for="email">Email:</label><br>
            <input type="text" id="email" name="email" value="<?php echo $row['email']; ?>"><br>
            <label for="password">Mật khẩu:</label><br>
            <input type="text" id="password" name="password" value="<?php echo $row['password']; ?>"><br><br>
            <input type="submit" value="Lưu" onclick="showMessage('Thông tin đã được cập nhật thành công!'); return true;">
        </form>
        <?php
            } else {
                echo "Không tìm thấy admin!";
            }
        } else {
            echo "Không có thông tin admin được cung cấp!";
        }
        ?>
    </div>
</body>
</html>
