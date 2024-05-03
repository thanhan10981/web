<?php
require "connext.php";

// Kiểm tra xem request method là GET và có chứa mã phim không
if(isset($_GET['maphim'])) {
    $maphim = $_GET['maphim'];

    // Câu lệnh SQL để xóa phim có mã phim tương ứng
    $sql = "DELETE FROM phim_dang_chieu WHERE maphim='$maphim'";

    // Thực hiện truy vấn SQL để xóa phim
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Xóa phim thành công.'); setTimeout(function(){ window.location.href = '../php/phim_dang_chieu.php'; }, 100);</script>";
        // Sau khi xóa, chuyển hướng người dùng đến trang xóa phim hoặc trang chính khác nếu cần
        exit;
    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
