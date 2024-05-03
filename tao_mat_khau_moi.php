<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    $pas = $password;
    if ($password != $confirm_password) {
        echo "<script>alert('Mật khẩu và xác nhận mật khẩu không khớp.'); window.location.href = '../php/tao_mat_khau_moi.php'; </script>";
        exit();     
    } else {
       
        $email = $_SESSION['email'];
        if (empty($email)) {
            echo "<script>alert('Không tìm thấy địa chỉ email.'); window.location.href = '../php/tao_mat_khau_moi.php'; </script>";
            exit();
        }
       
        require("connext.php");
        $sql = "UPDATE admin SET password = '$pas' WHERE email='$email'";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Tạo mật khẩu mới thành công.'); window.location.href = '../php/dangnhapadmin.php'; </script>";
            exit();
        } else {
            $error_message = "Lỗi: " . $conn->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tạo Mật Khẩu Mới</title>
    <style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0 auto;
    padding: 0;max-width: 400px;
}

.container {
    
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    color: #333;
}

form {
    margin-top: 20px;
}

label {
    font-weight: bold;
}

input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

button[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 15px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    width: 100%;
}

button[type="submit"]:hover {
    background-color: #45a049;
}
    </style>
</head>
<body>
    <h1>Tạo Mật Khẩu Mới</h1>
    <?php if (isset($error_message)) : ?>
        <p><?php echo $error_message; ?></p>
    <?php endif; ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="password">Mật khẩu mới:</label><br>
        <input type="password" id="password" name="password" required autocomplete="new-password"><br><br>
        <label for="confirm_password">Xác nhận mật khẩu:</label><br>
        <input type="password" id="confirm_password" name="confirm_password" required autocomplete="new-password"><br><br>
        <button type="submit">Tạo Mật Khẩu Mới</button>
    </form>
</body>

</html>
