<!DOCTYPE html>
<html lang="vi">
<head>
    <title>Đăng nhập quản trị | Website quản trị Desi</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/dangnhapadmin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" type="image/png" href="https://up-anh.vi-vn.vn/img/1712220797_b7544bb70b221c6d1ae3a4498c782741.png" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="login-p">
            <img src="https://img.upanh.tv/2024/04/22/team.jpg" alt="team.jpg">
        </div>
        <div class="container-login">
            <form class="login-tieude" method="post" action="">
                <div class="login-t">
                    <b>ĐĂNG NHẬP HỆ THỐNG DESI</b>
                </div>
                <div class="index">
                    <div class="user-input">
                        <input class="input-user" type="text" placeholder="Tài khoản quản trị" name="adminname" id="username">  
                    </div>
                    <div class="pasword-input">
                    <!-- autocomplete="off" ngăn trình duyệt tự động điền thông tin đã lưu trước đó -->
                        <input autocomplete="off" class="input1-password" type="password" placeholder="Mật khẩu" name="password" id="password-field">
                        <i class="toggle-password"></i>
                    </div>
                    <!-- hiển thị lỗi khi người dùng nhập sai -->
                    <div id="error-message" style="display: <?php echo isset($_GET['error']) ? 'block' : 'none'; ?>;">
                            <?php
                                 if(isset($_GET['error'])) {
                                     echo '<p style="color: red;">' . $_GET['error'] . '</p>';}
                            ?>
                         </div>
                    <div class="btn">
                        <input type="submit" name="btn-login" value="Đăng nhập" id="submit" />
                    </div>
                    <div class="pas-v">
                        <a href="../php/laylaimkadmin.php">
                            Bạn quên mật khẩu?
                        </a>
                    </div>
                </div>
            </form>
        </div>
        <div class="footer">
            Phần mềm quản lý Web Phim DESI<i class="far fa-copyright" aria-hidden="true"></i>
            <a class="txt2" href=""> Code Bởi Nhóm 6</a>
        </div>
        <?php
        session_start();
        if (isset($_POST["btn-login"])) {
            require "connext.php";
            // lấy dữ liệu từ for
            $adminname = $_POST["adminname"]; 
            $password = $_POST["password"];
            // truy vẫn sql
            $sql = "SELECT * FROM admin WHERE adminname='$adminname' AND password = '$password'";
            $result = $conn->query($sql);
            //kiểm tra có 1 hàng được truy vấn đúng thì chuyển tới trang chủ
            if ($result->num_rows == 1) {
                $_SESSION['adminname'] = $_POST['adminname'];
                header("Location: admin.php");
                exit;
            } else {
                $error_message = "Tên người dùng hoặc mật khẩu không đúng.";
                header("Location: dangnhapadmin.php?error=" . urlencode($error_message));
                exit;
            }
        }
        ?>
    </div>
    <script src="../js/trangthaimk.js"></script>  
</body>
</html>
