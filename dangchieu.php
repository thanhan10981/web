<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phim đang chiếu Desi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../css/dangchieu.css">

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
                                <li class="dd"><a href="">Phim sắp chiếu</a></li>
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
        <!--------------------------------------------------------------------------------------------------->
        <section class="phim-dang-chieu">
            <div>
                <ul>
                    <li>
                        <a href="#">
                            <img src="https://up-anh.vi-vn.vn/img/1712277406_b3963e1e51a2bad60bdb3f9258e145be.jpg" alt="Phim 1">
                        </a>
                        <h2>NHÂN ĐÔI TÌNH YÊU</h2>
                        <p>Tình cảm</p>
                        <a href="../php/TrangdatVe.php">
                            <h3><i class="fa-solid fa-ticket"></i> Đặt vé</h3>
                        </a>
                        <p><i class="fa-regular fa-calendar"></i> Khởi chiếu: 30/03/2024</p>
                        <button class="trailer-button"><h3><i class="fa-solid fa-play"></i>Trailer</h3></button>
                        <div class="video-container">
                            <div class="video-wrapper">
                                <span class="close-button">&times;</span>
                                <iframe width="753" height="423" src="https://www.youtube.com/embed/-tC6Rzbi4PA" title="(Official Trailer) DOUBLE PATTY - NHÂN ĐÔI TÌNH YÊU | KC 21.04.2021" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#">
                            <img src="https://up-anh.vi-vn.vn/img/1711726810_214a6e278c735dbda42c3837ea4fd28e.jpg" alt="Phim 2">
                        </a>
                        <h2>BIỆT ĐỘI SĂN RỒNG</h2>
                        <p>Tình cảm, hành động</p>
                        <a href="../php/TrangdatVe.php">
                            <h3><i class="fa-solid fa-ticket"></i> Đặt vé</h3>
                        </a>
                        <p><i class="fa-regular fa-calendar"></i> Khởi chiếu: 15/03/2024</p>
                        <button class="trailer-button"><h3><i class="fa-solid fa-play"></i>Trailer</h3></button>
                        <div class="video-container">
                            <div class="video-wrapper">
                                <span class="close-button">&times;</span>
                                <iframe width="580" height="326" src="https://www.youtube.com/embed/f5QOo78MkMs" title="SLYTH | BIỆT ĐỘI SĂN RỒNG | MAIN TRAILER 2024" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#">
                            <img src="https://up-anh.vi-vn.vn/img/1711726823_0b984b266d11cf1ad379080968bf2a91.jpg" alt="Phim 3">
                        </a>
                        <h2>ĐỀN MẠNG</h2>
                        <p>Kinh dị</p>
                        <a href="../php/TrangdatVe.php">
                            <h3><i class="fa-solid fa-ticket"></i> Đặt vé</h3>
                        </a>
                        <p><i class="fa-regular fa-calendar"></i> Khởi chiếu: 22/03/2024</p>
                        <button class="trailer-button"><h3><i class="fa-solid fa-play"></i>Trailer</h3></button>
                        <div class="video-container">
                            <div class="video-wrapper">
                                <span class="close-button">&times;</span>
                                <iframe width="679" height="382" src="https://www.youtube.com/embed/Ys0SYxiI68Y" title="Phim &quot;Đền Mạng&quot; Trailer | Khởi Chiếu 22.03.2024" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#">
                            <img src="https://up-anh.vi-vn.vn/img/1711726837_cab61084966cfa95687aea217d1045b9.jpg" alt="Phim 4">
                        </a>
                        <h2>GODZILLA X KONG: ĐẾ CHẾ MỚI</h2>
                        <p>Hoạt hình, khoa học viễn tưởng</p>
                        <a href="../php/TrangdatVe.php">
                            <h3><i class="fa-solid fa-ticket"></i> Đặt vé</h3>
                        </a>
                        <p><i class="fa-regular fa-calendar"></i> Khởi chiếu: 29/03/2024</p>
                        <button class="trailer-button"><h3><i class="fa-solid fa-play"></i>Trailer</h3></button>
                        <div class="video-container">
                            <div class="video-wrapper">
                                <span class="close-button">&times;</span>
                                <iframe width="753" height="423" src="https://www.youtube.com/embed/5XkgG_AAQs0" title="Godzilla x Kong : Đế Chế Mới | Official Trailer" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#">
                            <img src="https://up-anh.vi-vn.vn/img/1711726850_533073b652802be2dc82a988c4ed315f.jpg" alt="Phim 5">
                        </a>
                        <h2>KUNG FU PANDA 4</h2>
                        <p>Hoạt hình, Hành động</p>
                        <a href="../php/TrangdatVe.php">
                            <h3><i class="fa-solid fa-ticket"></i> Đặt vé</h3>
                        </a>
                        <p><i class="fa-regular fa-calendar"></i> Khởi chiếu: 08/03/2024</p>
                        <button class="trailer-button"><h3><i class="fa-solid fa-play"></i>Trailer</h3></button>
                        <div class="video-container">
                            <div class="video-wrapper">
                                <span class="close-button">&times;</span>
                                <iframe width="753" height="423" src="https://www.youtube.com/embed/egkeFvm26pc" title="KUNG FU PANDA 4 | Trailer Ai | Dự kiến khởi chiếu: 08.03.2024 #kungfupanda #trailer" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#">
                            <img src="https://up-anh.vi-vn.vn/img/1711726862_902819f1483923f364edf48a272268a0.jpg" alt="Phim 6">
                        </a>
                        <h2>MUÔN VỊ NHÂN GIAN</h2>
                        <p>Tình cảm</p>
                        <a href="../php/TrangdatVe.php">
                            <h3><i class="fa-solid fa-ticket"></i> Đặt vé</h3>
                        </a>
                        <p><i class="fa-regular fa-calendar"></i> Khởi chiếu: 22/03/2024</p>
                        <button class="trailer-button"><h3><i class="fa-solid fa-play"></i>Trailer</h3></button>
                        <div class="video-container">
                            <div class="video-wrapper">
                                <span class="close-button">&times;</span>
                                <iframe width="753" height="423" src="https://www.youtube.com/embed/kU4yf_9yr8Y" title="MUÔN VỊ NHÂN GIAN - Teaser Trailer | Khởi chiếu: 22.03.2024" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#">
                            <img src="https://up-anh.vi-vn.vn/img/1711726891_2c239a901f0fc77d8ab3fdbad48c2e3b.jpg" alt="Phim 7">
                        </a>
                        <h2>QUÝ CÔ THỪA KẾ</h2>
                        <p>Tâm lý</p>
                        <a href="../php/TrangdatVe.php">
                            <h3><i class="fa-solid fa-ticket"></i> Đặt vé</h3>
                        </a>
                        <p><i class="fa-regular fa-calendar"></i> Khởi chiếu: 08/03/2024</p>
                        <button class="trailer-button"><h3><i class="fa-solid fa-play"></i>Trailer</h3></button>
                        <div class="video-container">
                            <div class="video-wrapper">
                                <span class="close-button">&times;</span>
                                <iframe width="753" height="423" src="https://www.youtube.com/embed/Q65T2l47P6A" title="QUÝ CÔ THỪA KẾ 2 - KC: 08.03.2024" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#">
                            <img src="https://up-anh.vi-vn.vn/img/1711726910_f0afe82860698ac7c24f737b38c5d78d.jpg" alt="Phim 8">
                        </a>
                        <h2>SÁNG ĐÈN</h2>
                        <p>Tình cảm, Phim hài</p>
                        <a href="../php/TrangdatVe.php">
                            <h3><i class="fa-solid fa-ticket"></i> Đặt vé</h3>
                        </a>
                        <p><i class="fa-regular fa-calendar"></i> Khởi chiếu: 22/03/2024</p>
                        <button class="trailer-button"><h3><i class="fa-solid fa-play"></i>Trailer</h3></button>
                        <div class="video-container">
                            <div class="video-wrapper">
                                <span class="close-button">&times;</span>
                                <iframe width="753" height="423" src="https://www.youtube.com/embed/_JWRgURZcwM" title="SÁNG ĐÈN trailer - KC: 10.02.2024 - Mùng 1 Tết Giáp Thìn" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var trailerButtons = document.querySelectorAll('.trailer-button');
                var closeButton = document.querySelectorAll('.close-button');
                var currentIframe = null; // Biến lưu trữ iframe hiện tại

                // Khi nhấp vào nút "Xem Trailer"
                trailerButtons.forEach(function(button, index) {
                    button.addEventListener('click', function() {
                        var videoContainer = this.parentNode.querySelector('.video-container');
                        videoContainer.style.display = 'block'; // Hiển thị video container tương ứng

                        // Lưu trữ iframe hiện tại
                        currentIframe = videoContainer.querySelector('iframe');
                    });
                });
                // Khi nhấp vào nút đóng
                closeButton.forEach(function(button) {
                    button.addEventListener('click', function() {
                        var videoContainer = this.parentNode.parentNode;
                        videoContainer.style.display = 'none'; // Ẩn video container khi nhấp vào nút đóng
                        // Dừng video
                        if (currentIframe) {
                            currentIframe.contentWindow.postMessage('{"event":"command","func":"stopVideo","args":""}', '*');
                        }
                        // Tải lại trang
                        window.location.reload();
                    });
                });
            });
        </script>
        <!------------------------------------------- phần khánh ---------------------------------------------------->
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