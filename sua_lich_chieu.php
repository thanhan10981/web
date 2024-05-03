<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa Thông Tin Lịch Chiếu</title>
    <link rel="stylesheet" href="../css/themadmin.css">
</head>
<body>
    <?php
    require "connext.php";

    // Kiểm tra xem có giá trị mã phim được gửi từ trang trước không
    if(isset($_GET['maphim'])) {
        $maphim = $_GET['maphim'];

        // Truy vấn để lấy thông tin phim cần sửa
        $sql = "SELECT * FROM lich_chieu WHERE maphim ='$maphim'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
    ?>
            <h2>Sửa Thông Tin Phim</h2>
            <form action="../php/xu_ly_sua_lich_chieu.php" method="post">

                <input type="hidden" name="maphim" value="<?php echo $row['maphim']; ?>"><br><br>

                <label for="Tenphim">Tên Phim:</label>
                <input type="text" name="Tenphim" value="<?php echo $row['Tenphim']; ?>"><br><br>

                <label for="anh">Ảnh:</label>
                <input type="text" id="anh" name="anh" value="<?php echo $row['anh']; ?>"><br><br>
              
                <label for="Dienvien">Diễn Viên:</label>
                <input type="text" id="Dienvien" name="Dienvien" value="  <?php echo  $row['Dienvien'] ;?>"><br><br>
                <label for="Daodien">Đạo Diễn:</label>
                <input type="text" id="Daodien" name="Daodien" value="<?php echo $row['Daodien']; ?>"><br><br>

                <label for="Nhasanxuat">Nhà Sản Xuất:</label><br>
                <input type="text" id="Nhasanxuat" name="Nhasanxuat" value="<?php echo $row['Nhasanxuat']; ?>"><br><br>

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
