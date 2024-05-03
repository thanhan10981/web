<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Đăng nhập Desi.vn</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../css/Trangdangnhap.css">
    <link rel="icon" type="image/png" href="https://up-anh.vi-vn.vn/img/1712220797_b7544bb70b221c6d1ae3a4498c782741.png" />

</head>

<body>
    <div class="container">
        <header>
            <!--------------------------------------- phần trân -------------------------------------------------->
            <section class="content">
                <div class="head">
                    <li>
                        <a href="../html/trangChinhweb.html"><img class="imageChange" src="https://up-anh.vi-vn.vn/img/1711779786_502e8a8f07c75d0ab51d97ea5a4b1663.png" alt="Logo"></a>
                    </li>
                    <a href="#" class="icon"><i class="fa fa-search"></i></a>
                    <input type="search" id="search" placeholder="Tìm tên phim, diễn viên, đạo diễn...">
                    <ul class="button">
                        <i class="fa fa-user"></i>
                        <li id="dk"><a href="../php/Trangdangky.php">Đăng ký</a></li>
                        <li id="dn"><a href="#">Đăng nhập</a></li>
                    </ul>
                </div>
                <div class="menu">
                    <ul class="title">
                        <li id="only"><a class="title1" href="">LỊCH CHIẾU</a></li>
                        <li class="title2"><a class="title1" href="">PHIM</a>
                            <ul class="dropdown">
                                <li class="dd"><a href="../html/Lichchieuphim.html">Phim sắp chiếu</a></li>
                                <li class="dd"><a href="">Phim đang chiếu</a></li>
                            </ul>
                        </li>
                        <li class="title2"><a class="title1" href="">CỤM RẠP</a>
                            <ul class="dropdown">
                                <li class="dd"><a href="">DESI Quy Nhơn</a></li>
                                <li class="dd"><a href="">DESI Sóc Trăng</a></li>
                                <li class="dd"><a href="">DESI Bến Thành</a></li>
                            </ul>
                        </li>
                        <li class="title2"><a class="title1" href="">ƯU ĐÃI</a></li>
                        <li class="title2"><a class="title1" href="">THÀNH VIÊN</a></li>
                    </ul>
                </div>
            </section>
        </header>
        <!-------------------------------------------------body------------------------------------------------------------------>
        <section class="container-r">
            <div class="container-register">
                <form action="login.php" method="post" class="form-grid">
                    <h2 class="register-title"> ĐĂNG NHẬP </h2>
                    <div class="input-container">
                        <input type="text" id="input" name="username" required="">
                        <label for="input" class="label"> Email/Tên Đăng Nhập </label>
                        <div class="input-container">
                        </div>
                        <div class="input-container">
                            <input type="password" name="password" id="input" required="">
                            <label for="password" class="label">Mật khẩu</label>
                            <div class="underline"></div>
                        </div>
                        <div id="error-message" style="display: <?php echo isset($_GET['error']) ? 'block' : 'none'; ?>;">
                            <?php
                                 if(isset($_GET['error'])) {
                                     echo '<p style="color: red;">' . $_GET['error'] . '</p>';
                            }
                            ?>
                         </div>
                        <p><button type="submit" name="btn-login"> Đăng nhập </button></p>
                        
                        <div class="navigation">Có thể đăng ký
                            <a href="../php/Trangdangky.php">Tại Đây!</a>
                        </div>
                </form>
                </div>
        </section>
      
        <!---------------------------------------------------khánh------------------------------------------------------------------->
        <footer>
            <section class="content-2">
                <div class="footer-container">
                    <div class="footer-column">
                        <h3>VỀ DESI</h3>
                        <ul>
                            <li><a href="#">Giới thiệu</a></li>
                            <li><a href="#">Liên hệ</a></li>
                            <li><a href="#">Các câu hỏi thường gặp</a></li>
                        </ul>
                    </div>
                    <div class="footer-column">
                        <h3>ĐIỀU KHOẢN SỬ DỤNG</h3>
                        <ul>
                            <li><a href="#">Điều khoản chung</a></li>
                            <li><a href="#">Chính sách thanh toán</a></li>
                            <li><a href="#">Chính sách bảo mật</a></li>
                        </ul>
                    </div>
                    <div class="footer-column customer-care">
                        <h3> CHĂM SÓC KHÁCH HÀNG</h3>
                        <ul>
                            <li><span>Hotline Quy Nhơn:</span> 1900 1234 </li>

                            <li><span>Hotline An Nhơn:</span> 1900 5678 </li>

                            <li><span>Giờ làm việc:</span> 8:00 - 22:00 </li>

                            <li><span>Email hỗ trợ:</span> info@desi.vn </li>
                        </ul>
                    </div>

                    <div class="footer-column social-bank">
                        <h3 class="move-right">KẾT NỐI VỚI CHÚNG TÔI</h3>
                        <ul class="social-links">
                            <a href="https://www.facebook.com/fanreviewphim2"><img src="https://cdn0.iconfinder.com/data/icons/yooicons_set01_socialbookmarks/512/social_facebook_button_blue.png" alt="Facebook"></a>
                            <a href="https://www.youtube.com/@desibanks4real"><img src=https://clipart.info/images/ccovers/1590430652red-youtube-logo-png-xl.png alt="youtube"></a>
                        </ul>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="logo">
                        <a href="../php/webchinhdalogin.php"><img src="https://img.upanh.tv/2024/03/30/logo795e31a4a48ae872.png" alt="logo"></a>
                    </div>
                    <div class="bank-links">
                        <h3 class="nhkt">NGÂN HÀNG KẾT NỐI</h3>
                        <ul class="bank-links">
                            <a href="https://momo.vn"><img src="https://www.russinvecchi.com.vn/wp-content/uploads/2020/09/931b119cf710fb54746d5be0e258ac89-logo-momo-1024x1024.png" alt="momo"></a>
                            <a href="https://www.mbbank.com.vn"><img src="http://static.ybox.vn/2022/4/5/1650623741740-logo%20700x400%20(53).png" alt="mbbank"></a>
                        </ul>
                    </div>
                    <div class="copyright">
                        <p>&copy; Bản quyền thuộc về DESI</p>
                    </div>
                </div>
            </section>
        </footer>
        </div>
</body>

</html>