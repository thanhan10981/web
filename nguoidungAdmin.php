<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin người dùng Desi.vn</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../css/admin.css">
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
                    <li><a href="../php/admin.php?page=1&keyword=#"><i class="fa-solid fa-house-user"></i> Trang Chủ</a></li>
                    <li><a href="#"><i class="fa-solid fa-users"></i> Người Dùng</a></li>
                    <li class="submenu">
                        <a href="#"><i class="fa-solid fa-film"></i> Phim</a>
                        <ul>
                            <li><a href="../php/xoa_phim.php"><i class="fa-solid fa-trash"></i> Xóa Phim</a></li>
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
            <h3><i class="fa-brands fa-searchengin"></i> TÌM KIẾM NGƯỜI DÙNG</h3>
            <form action="" method="GET">
                <input class="search" type="text" name="keyword" placeholder=" Nhập tên người dùng cần tìm...">
                <button class="btn" id="searchButton" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
        <?php
            require "connext.php";

            // Số lượng dòng mỗi trang
            $rows_per_page = 10;

            // Trang hiện tại
            $current_page = isset($_GET['page']) ? $_GET['page'] : 1;

            // Tính toán OFFSET
            $offset = ($current_page - 1) * $rows_per_page;

            // Từ khóa tìm kiếm
            $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';

            // Truy vấn SQL để lấy dữ liệu phim cho trang hiện tại với điều kiện LIMIT và tìm kiếm
            if (!empty($keyword)) {
                $search_sql = "AND (username LIKE '%$keyword%' OR CCCD LIKE '%$keyword%' OR fullname LIKE '%$keyword% 'OR gender LIKE '%$keyword%')";
            } else {
                $search_sql = '';
            }

            $sql = "SELECT * FROM dang_ky WHERE 1 $search_sql LIMIT $offset, $rows_per_page";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                    echo "<table border='1'>";
                    echo "<tr>
                    <th>Username</th>
                    <th>Họ và tên</th>
                    <th>CCCD</th>
                    <th>Giới tính</th>
                    <th>Ngày sinh</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Địa chỉ</th>
                    <th>Hành động</th>
                    </tr>";
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<th>" . $row["username"] . "</th>";
                        echo "<th>". $row["fullname"] ."</th>";
                        echo "<th>" . $row["CCCD"] . "</th>";
                        echo "<th>" . $row["gender"] . "</th>";
                        echo "<th>" . $row["BirthDate"] . "</th>";
                        echo "<th>" . $row["Email"] . "</th>";
                        echo "<th>" . $row["Phone"] . "</th>";
                        echo "<th>" . $row["address"] . "</th>";
                        echo "<th><a href='sua_nguoidung.php?username=" . $row["username"] . "'>Sửa <i class='fa-solid fa-screwdriver-wrench'></i></a></th>";
                        echo "</tr>";
                    }
                    echo "</table>";

            } else {
                echo "Không có dữ liệu";
            }

            // Đếm tổng số trang
            $total_rows_sql = "SELECT COUNT(*) AS total FROM dang_ky WHERE 1 $search_sql";
            $total_rows_result = $conn->query($total_rows_sql);
            $total_rows = $total_rows_result->fetch_assoc()['total'];
            $total_pages = ceil($total_rows / $rows_per_page);

            // Hiển thị nút phân trang
            echo "<div class='pagination'>";
             for ($i = 1; $i <= $total_pages; $i++) { 
                $class = $i == $current_page ? 'current' : '';
                echo "<a class='$class' href='?page=$i&keyword=$keyword'>$i</a>";
            } 
            echo "</div>";
            $conn->close();
?>

         <script src="http://127.0.0.1:5500/js/search.js"></script>  
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
