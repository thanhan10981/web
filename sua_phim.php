<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa Thông Tin Phim</title>
    <link rel="stylesheet" href="../css/themadmin.css">
</head>
<body>
    <?php
    require "connext.php";

    // Kiểm tra xem có giá trị mã phim được gửi từ trang trước không
    if(isset($_GET['maphim'])) {
        $maphim = $_GET['maphim'];

        // Truy vấn để lấy thông tin phim cần sửa
        $sql = "SELECT * FROM phim_dang_chieu WHERE maphim='$maphim'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
    ?>
            <h2>Sửa Thông Tin Phim</h2>
            <form action="xuly_sua_phim.php" method="post">
                <!-- Trường ẩn chứa mã phim -->
                <input type="hidden" name="maphim" value="<?php echo $row['maphim']; ?>">

                <!-- Các trường thông tin để sửa -->
                <label for="theloai">Thể Loại:</label>
                <input type="text" id="theloai" name="theloai" value="<?php echo $row['theloai']; ?>"><br><br>
              
                <label for="anh">Ảnh:</label>
                <input type="text" id="anh" name="anh" value="  <?php echo  $row['anh'] ;?>"><br><br>
                <label for="ngayphathanh">Ngày Phát Hành:</label>
                <input type="date" id="ngayphathanh" name="ngayphathanh" value="<?php echo $row['ngayphathanh']; ?>"><br><br>

                <label for="mota">Mô Tả:</label><br>
                <textarea id="mota" name="mota"><?php echo $row['mota']; ?></textarea><br><br>

                <input type="submit" value="Cập Nhật">
            </form>
    <?php
        } else {
            echo "Không tìm thấy thông tin phim.";
        }
    }
    ?>

</body>
</html>
