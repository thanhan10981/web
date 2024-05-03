<?php 
session_start();
require "connext.php"; 

if(isset($_POST["btn-reg"])){
    $username = $_POST["username"];
    $CCCD = $_POST["CCCD"];
    $Email = $_POST["Email"];
    $Phone = $_POST["Phone"];
    $address = $_POST["address"];
    $fullname = $_POST["fullname"];
    $password = $_POST["password"];
    $repassword = $_POST["repassword"];
    $BirthDate = $_POST["BirthDate"];
    $gender = $_POST["gender"];
    
    if(!empty($username) && !empty($CCCD) && !empty($Email) && !empty($Phone) && !empty($address)
        && !empty($fullname) && !empty($password) && !empty($repassword) && !empty($BirthDate) && !empty($gender)) { 
        
        // Kiểm tra xem username đã tồn tại trong cơ sở dữ liệu hay chưa
        $check_username_query = "SELECT * FROM dang_ky WHERE username='$username' LIMIT 1";
        $result = $conn->query($check_username_query);
        if ($result->num_rows > 0) {
            $_SESSION['duplicate_username'] = "Tên đăng nhập đã tồn tại.";
            header("Location: trangdangky.php");
            exit;
        } else {
            // Nếu không có tên đăng nhập trùng lặp, thêm dữ liệu mới vào cơ sở dữ liệu
            $sql = "INSERT INTO dang_ky (username, CCCD, Email, Phone, address, fullname, password, repassword, BirthDate, gender) 
                    VALUES ('$username', '$CCCD', '$Email', '$Phone', '$address', '$fullname', md5('$password'), md5('$repassword'), '$BirthDate', '$gender')";
               
            if ($conn->query($sql) === TRUE) {
                header("Location: trangdangnhap.php");
                exit; 
            } else {
                $_SESSION['error_message'] = "Đăng ký không thành công.";
                header("Location: trangdangky.php");
                exit; 
            }
        }       
    } else {
        echo "Vui lòng điền đủ thông tin trước khi đăng kí";
    }
}
?>
