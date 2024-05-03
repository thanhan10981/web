<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Tài Khoản Admin </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/themnutadmin.css">
    <link rel="icon" type="image/png" href="https://i.upanh.org/2024/04/23/21470a2b4330e219d.png" />
</head>
<body> 
    <div class="container">
        <div class="container-head">
            <div class="name-admin">
                <h3>
                    <span><i class="fa-solid fa-user-secret"></i></span>
                    XIN CHÀO! ADMIN
                </h3>
            </div>
        </div>
        <div class="menu">
            <nav>
                <ul>
                    <li><a href="../php/admin.php"><i class="fa-solid fa-house-user"></i> Trang Chủ</a></li>
                    <li><a href="../php/nguoidungAdmin.php"><i class="fa-solid fa-users"></i> Người Dùng</a></li>
                    <li class="submenu">
                        <a href="#"><i class="fa-solid fa-film"></i> Phim</a>
                        <ul>
                            <li><a href="../php/xoa_phim.php?page=1&keyword="><i class="fa-solid fa-trash"></i> Xóa Phim</a></li>
                            <li><a href="../php/suaphimadmin.php"><i class="fa-solid fa-screwdriver-wrench"></i> Sửa Phim</a></li>
                            <li><a href="../php/them_phim.php"><i class="fa-solid fa-plus"></i> Thêm Phim</a></li>
                        </ul>
                    </li>
                    <li><a href="../php/taikhoanadmin.php"><i class="fa-solid fa-user-gear"></i> Tài khoản</a></li>
                </ul>
            </nav>
        </div>
        <div class="content-container">
            <div class="clock"><i class="fa-regular fa-clock"></i></div>
            <div id="DateTime" class="date"> 
                <script src="../js/gio.js"></script> 
            </div>
        </div>
        <script src="../js/menuAdmin.js"></script> 
        <div class="name-home">
            <h3><i class="fa-solid fa-arrow-up-wide-short"></i> TÀI KHOẢN ĐANG ĐĂNG NHẬP: <?php
            session_start();if(isset($_SESSION['adminname'])) { $adminname = $_SESSION['adminname'];} else {
                header("Location: dangnhapadmin.php");
                exit;
            }?>  <?php echo $adminname; ?></h3>  
            <button onclick="window.location.href='../php/themadmin.php'"><i class="fa-solid fa-plus"></i> Thêm Admin</button>
        </div>
        
        <?php
            require "connext.php";
           
            $sql = "SELECT * FROM admin WHERE 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
               
                echo "<table border='1'>";
                echo "<tr><th>Tên Đăng Nhập</th><th>Email</th><th>Mật Khẩu</th><th>Hành Động</th>";
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<th>" . $row["adminname"] . "</th>";
                    echo "<th>". $row["email"] . "</th>";
                    echo "<th>" . $row["password"] . "</th>";
                    echo "<th>"."<a href='sua_admin.php?adminname=" . $row["adminname"] . "'>Sửa  <i class='fa-solid fa-screwdriver-wrench'></i></a> "; 
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "Không có dữ liệu";
            }        
          
            $conn->close();
            ?> 
            <div class="out-accout"><a href="../php/dangnhapadmin.php"><i class="fa-solid fa-right-from-bracket"></i> Đăng Xuất</a></div>
            <div class="footer">
                <div class="thanh"></div>
                <div class="link">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-youtube"></i>
                    <i class="fab fa-google"></i>
                </div>
                <div class="link-1">
                    2024 CopyRight Phần mềm quản lý phim Desi | Design by Group 6
                </div>
            </div>  
    </div> 
</body>
</html>
