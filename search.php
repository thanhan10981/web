<?php


// Kiểm tra xem có từ khóa tìm kiếm được gửi từ input hay không
if(isset($_GET['keyword'])) {
    // Lấy từ khóa tìm kiếm từ input
    $keyword = $_GET['keyword'];

    // Truy vấn dữ liệu từ cơ sở dữ liệu dựa trên từ khóa tìm kiếm
    $sql = "SELECT * FROM phim_dang_chieu WHERE maphim LIKE '%$keyword%' OR theloai LIKE '%$keyword%'";
    $result = $conn->query($sql);

    // Kiểm tra kết quả truy vấn
    if ($result->num_rows > 0) {
        // Hiển thị dữ liệu trong bảng HTML
        echo "<table border='1'>";
        echo "<tr><th>Mã phim</th><th>Hình ảnh</th><th>Thể loại</th><th>Ngày phát hành</th><th>Mô tả</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["maphim"] . "</td>";
            echo "<td><img src='" . $row["anh"] . "' alt='Hình ảnh phim'></td>";
            echo "<td>" . $row["theloai"] . "</td>";
            echo "<td>" . $row["ngayphathanh"] . "</td>";
            echo "<td>" . $row["mota"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Không có dữ liệu";
    }
} else {
    // Nếu không có từ khóa tìm kiếm, hiển thị toàn bộ dữ liệu
    $sql = "SELECT * FROM phim_dang_chieu";
    $result = $conn->query($sql);

    // Kiểm tra kết quả truy vấn
    if ($result->num_rows > 0) {
        // Hiển thị dữ liệu trong bảng HTML
        echo "<table border='1'>";
        echo "<tr><th>Mã phim</th><th>Hình ảnh</th><th>Thể loại</th><th>Ngày phát hành</th><th>Mô tả</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["maphim"] . "</td>";
            echo "<td><img src='" . $row["anh"] . "' alt='Hình ảnh phim'></td>";
            echo "<td>" . $row["theloai"] . "</td>";
            echo "<td>" . $row["ngayphathanh"] . "</td>";
            echo "<td>" . $row["mota"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Không có dữ liệu";
    }
}

// Đóng kết nối
$conn->close();
?>
