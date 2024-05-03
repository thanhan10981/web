<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Desi.vn - Thêm Phim</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/themphimadmin.css">
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
                        <li><a href="../php/phim_dang_chieu.php"><i class="fa-solid fa-screwdriver-wrench"></i> Đang Chiếu</a></li>
                            <li><a href="#"><i class="fa-solid fa-screwdriver-wrench"></i> Sắp Chiếu</a></li>
                            <li><a href="../php/lich_chieu.php"><i class="fa-solid fa-screwdriver-wrench"></i> Lịch Chiếu</a></li>
                            <li><a href="#"><i class="fa-solid fa-screwdriver-wrench"></i> Banner</a></li>
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
            <h3><i class="fa-solid fa-plus"></i> THÊM LỊCH CHIẾU PHIM MỚI</h3>
            <form action="xu_ly_them_lich_chieu_moi.php" method="POST">
                <label for="maphim">Mã phim:</label>
                <input type="text" id="maphim" name="maphim" required><br><br>
                <label for="Tenphim">Tên Phim:</label>
                <input type="text" id="Tenphim" name="Tenphim" required><br><br>
                <label for="anh">Link ảnh:</label>
                <input type="text" id="anh" name="anh" required><br><br>    
                <label for="Dienvien">Diễn Viên:</label><br>
                <input type="text"  id="Dienvien" name="Dienvien" required></input><br><br>
                <label for="Daodien">Đạo Diễn:</label>
                <input type="text" id="Daodien" name="Daodien" required><br><br>
                <label for="Nhasanxuat">Nhà Sản Xuất:</label>
                <input type="text" id="Nhasanxuat" name="Nhasanxuat" required><br><br>
                <input type="submit" value="Thêm Phim">
            </form>
        </div>
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
