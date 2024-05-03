<html>

<script src="login.js">
    document.getElementById("login-form").addEventListener("submit", function(event) {
        var username = document.getElementsByName("username")[0].value;
        var password = document.getElementsByName("password")[0].value;

        if (username === "" || password === "") {
            event.preventDefault();
            alert("Please enter both username and password.");
        }
    });
</script>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desi.vn</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../css/lichchieuphim.css">
    <link rel="icon" type="image/png" href="https://up-anh.vi-vn.vn/img/1712220797_b7544bb70b221c6d1ae3a4498c782741.png" />
</head>

<body>
    <div class="container">
        <header>
            <!--------------------------------------- phần trân -------------------------------------------------->
            <section class="content">
                <div class="head">
                    <li>
                        <a href="../php/webchinhdalogin.php"><img class="imageChange" src="https://up-anh.vi-vn.vn/img/1711779786_502e8a8f07c75d0ab51d97ea5a4b1663.png" alt="Logo"></a>
                    </li>
                    <a href="#" class="icon"><i class="fa fa-search"></i></a>
                    <input type="search" id="search" placeholder="Tìm tên phim, diễn viên, đạo diễn...">
                    <ul class="button">
                        <i class="fa fa-user"></i>
                        <li id="dk">
                            <a href="#">
                                <?php
                            session_start(); 
                            // Kiểm tra xem người dùng đã đăng nhập hay chưa
                            if(isset($_SESSION['username'])) {
                                $username = $_SESSION['username'];
                                // Hiển thị tên người dùng trên trang
                                echo" $username";
                            }else
                            echo "Xin chào! Khách";
                        ?>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="menu">
                    <ul class="title">
                        <li id="only"><a class="title1" href="">LỊCH CHIẾU</a></li>
                        <li class="title2"><a class="title1" href="">PHIM</a>
                            <ul class="dropdown">
                                <li class="dd"><a href="#">Phim sắp chiếu</a></li>
                                <li class="dd"><a href="../php/dangchieu.php">Phim đang chiếu</a></li>
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
        <section class="container-1">
            <div class="cinema-info">
                <h1>DESI QUY NHƠN</h1>
                <p>0256 2227777 - 0378459621</p>
                <p>312 Phan Bội Châu, Thành phố Quy Nhơn, tỉnh Bình Định</p>
            </div>

            <div class="days">
                <button id="day1">Thứ Hai</button>
                <button id="day2">Thứ Ba</button>
                <button id="day3">Thứ Tư</button>
                <button id="day4">Thứ Năm</button>
                <button id="day5">Thứ Sáu</button>
                <button id="day6">Thứ bảy</button>
                <button id="day7">Chủ Nhật</button>
            </div>

            <!--Script cho việc cập nhật ngày tương ứng-->
            <script>
                window.onload = function() {
                    // Lấy ngày hiện tại
                    const today = new Date();
                    const currentDay = today.getDay(); // Trả về giá trị từ 0 (Chủ Nhật) đến 6 (Thứ Bảy)

                    // Tính ngày đầu tuần (Thứ Hai)
                    const monday = new Date(today);
                    monday.setDate(monday.getDate() - (currentDay === 0 ? 6 : currentDay - 1)); // Điều chỉnh về Thứ Hai

                    // Cập nhật các nút với ngày tháng tương ứng
                    for (let i = 0; i < 7; i++) {
                        const dayButton = document.getElementById(`day${i + 1}`);
                        const dayDate = new Date(monday);
                        dayDate.setDate(monday.getDate() + i);

                        // Định dạng ngày tháng: ngày/tháng/năm
                        dayButton.textContent += ` (${dayDate.getDate()}/${dayDate.getMonth() + 1}/${dayDate.getFullYear()})`;
                    }
                }
            </script>

            <div class="movies">
                <div class="movie">
                    <a href="#"><img src="https://tintuc-divineshop.cdn.vccloud.vn/wp-content/uploads/2024/04/poster-lat-mat-7-mot-dieu-uoc-hop-ky-uc-gia-dinh-hua-hen-cau-chuyen-cam-dong_660b97546a4e4.jpeg" alt="Movie Poster" class="movie-poster"></a>
                    <div class="movie-details">
                        <div class="movie-info">
                            <h3>Lật Mặt 7: Một Điều Ước</h3>
                            <p>Diễn viên: Đinh Y Nhung, Trương Minh Cường, Thanh Hiền, Quách Ngọc Tuyên, Trần Kim Hải</p>
                            <p>Đạo diễn: Lý Hải</p>
                            <p>Nhà sản xuất: Minh Hà</p>
                        </div>
                        <div class="showtimes">
                            <a href="#" class="showtime-link">11:20</a>
                            <a href="#" class="showtime-link">12:15</a>
                            <a href="#" class="showtime-link">13:05</a>
                            <a href="#" class="showtime-link">13:40</a>
                            <a href="#" class="showtime-link">14:20</a>
                            <a href="#" class="showtime-link">15:00</a>
                            <a href="#" class="showtime-link">15:35</a>
                            <a href="#" class="showtime-link">16:00</a>
                            <a href="#" class="showtime-link">16:20</a>
                            <a href="#" class="showtime-link">16:35</a>
                            <a href="#" class="showtime-link">17:10</a>
                            <a href="#" class="showtime-link">18:00</a>
                            <a href="#" class="showtime-link">19:00</a>
                            <a href="#" class="showtime-link">19:30</a>
                        </div>
                    </div>

                </div>

                <div class="movie">
                    <a href="#"><img src="https://cdn.moveek.com/storage/media/cache/tall/661e4ed0e1f67187285974.jpg" alt="Movie Poster" class="movie-poster"></a>
                    <div class="movie-details">
                        <div class="movie-info">
                            <h3>Tu Viện Máu</h3>
                            <p>Diễn viên: Sydney Sweeney, Álvaro Morte, Benedetta Porcaroli, Dora Romano, Giorgio Colangeli</p>
                            <p>Đạo diễn: Michael Mohan</p>
                            <p>Nhà sản xuất: Sydney Sweeney, Teddy Schwarzman, David Bernad</p>
                        </div>
                        <div class="showtimes">
                            <a href="#" class="showtime-link">09:20</a>
                            <a href="#" class="showtime-link">10:15</a>
                            <a href="#" class="showtime-link">14:05</a>
                            <a href="#" class="showtime-link">14:40</a>
                            <a href="#" class="showtime-link">15:20</a>
                            <a href="#" class="showtime-link">17:00</a>
                            <a href="#" class="showtime-link">17:35</a>
                            <a href="#" class="showtime-link">19:00</a>
                            <a href="#" class="showtime-link">20:20</a>
                            <a href="#" class="showtime-link">21:35</a>
                            <a href="#" class="showtime-link">22:00</a>
                            <a href="#" class="showtime-link">23:45</a>
                        </div>
                    </div>

                </div>

                <div class="movie">
                    <a href="#"><img src="https://cdn.moveek.com/storage/media/cache/tall/660f6b1f5359b852210121.jpg" alt="Movie Poster" class="movie-poster"></a>
                    <div class="movie-details">
                        <div class="movie-info">
                            <h3>Thần Bài Trở Lại Tất Tay</h3>
                            <p>Diễn viên: Jack Lim, Philip Keung Ho-Man, Namewee</p>
                            <p>Đạo diễn: Matt Lai</p>
                            <p>Nhà sản xuất: Asia Tropical Films</p>
                        </div>
                        <div class="showtimes">
                            <a href="#" class="showtime-link">12:20</a>
                            <a href="#" class="showtime-link">15:15</a>
                            <a href="#" class="showtime-link">19:05</a>
                        </div>
                    </div>

                </div>

                <!-- Repeat for other movies -->
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
                        <a href=""><img src="https://img.upanh.tv/2024/03/30/logo795e31a4a48ae872.png" alt="logo"></a>
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