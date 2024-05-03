<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desi.vn</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../css/trangchinhdadangnhap.css">
    <link rel="icon" type="image/png" href="https://up-anh.vi-vn.vn/img/1712220797_b7544bb70b221c6d1ae3a4498c782741.png" />

</head>


<body>
    <div class="container">
        <table>
            <!--------------------------------------------phần trân------------------------------------------------->
            <tr>
                <th>
                    <section class="content">
                        <div class="head">
                            <li>
                                <a href="../php/webchinhdalogin.php"><img class="imageChange" src="https://up-anh.vi-vn.vn/img/1711779786_502e8a8f07c75d0ab51d97ea5a4b1663.png" alt="Logo"></a>
                            </li>
                            <a href="#" class="icon"><i class="fa fa-search"></i></a>
                            <input type="search" id="search" placeholder="Tìm tên phim, diễn viên, đạo diễn...">
                            <ul class="button">
                                <i class="fa fa-user"></i>
                                <li id="dk"><a href="../php/thongtinngdung.php"><?php
                                                session_start(); 
                                                // Kiểm tra xem người dùng đã đăng nhập hay chưa
                                                if(isset($_SESSION['username'])) {
                                                    $username = $_SESSION['username'];
                                                    // Hiển thị tên người dùng trên trang
                                                    echo" $username";
                                                }else
                                                echo "Xin chào! Khách";
                                            ?></a></li>                    
                            </ul>
                        </div>
                        <div class="menu">
                            <ul class="title">
                                <li id="only"><a class="title1" href="../php/Lichchieuphim.php">LỊCH CHIẾU</a></li>
                                <li class="title2"><a class="title1" href="">PHIM</a>
                                    <ul class="dropdown">
                                        <li class="dd"><a href="">Phim sắp chiếu</a></li>
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
                </th>
            </tr>
            <!--------------------------------------- phần an -------------------------------------------------->
            <tr>
                <th>
                    <div class="container">
                        <div class="image-container" onmouseenter="showControls()" onmouseleave="hideControls()">
                            <img src="https://img.upanh.tv/2024/03/29/d1.jpg" alt="hình ảnh" class="active">
                            <img src="https://img.upanh.tv/2024/03/29/d2.jpg" alt="hình ảnh">
                            <img src="https://img.upanh.tv/2024/03/29/d3.jpg" alt="hình ảnh">
                            <img src="https://img.upanh.tv/2024/03/29/d4.jpg" alt="hình ảnh">
                            <img src="https://img.upanh.tv/2024/03/29/d5.jpg" alt="hình ảnh">
                            <img src="https://img.upanh.tv/2024/04/13/diembaocuaquyBANNER.jpg" alt="hình ảnh">
                            <img src="https://img.upanh.tv/2024/04/13/quycaiBANNER.jpg" alt="hình ảnh">
                            <!-- alt là ảnh lỗi sẽ hiện chữ này -->

                        </div>
                        <div class="dots">
                            <span class="dot" onclick="chuyenAnh(0)"></span>
                            <span class="dot" onclick="chuyenAnh(1)"></span>
                            <span class="dot" onclick="chuyenAnh(2)"></span>
                            <span class="dot" onclick="chuyenAnh(3)"></span>
                            <span class="dot" onclick="chuyenAnh(4)"></span>
                            <span class="dot" onclick="chuyenAnh(5)"></span>
                            <span class="dot" onclick="chuyenAnh(6)"></span>
                        </div>
                        <button class="prev" onclick="chuyenAnhTruoc()"><span><i class="fa-sharp fa-solid fa-less-than fa-1.5xl" style="color: #959ca7;"></i></span></button>
                        <button class="next" onclick="chuyenAnhSau()"><span><i class="fa-sharp fa-solid fa-greater-than fa-1.5xl" style="color: #959ca7;"></i></span></button>
                    </div>

                    <script src="../js/banner.js"></script>
                   

                </th>

            </tr>
            <!------------------------------------------phần ngân -------------------------------------------------->
            <tr>

                <table class="color">
                    <td><img src="https://img.upanh.tv/2024/03/30/book-bg.png" alt="Hình ảnh" class="img">

                        <td>
                            <div class="select-group">
                                <select name="Rạp">
                                <option value="Rạp">Rạp</option>
                                <option value="Cần Thơ">Desi Cần Thơ</option>
                                <option value="Phú Yên">Desi Phú Yên</option>
                                <option value="Quy Nhơn">Desi Quy Nhơn</option>
                             </select>
                                <select name="Phim"> 
                                 <option value="Phim">Phim</option>
                             </select>
                            </div>
                        </td>

                        <td>
                            <div class="select-group">
                                <select name="Ngày xem">
                                <option value="Ngày xem">Ngày Xem</option>
                            </select>
                                <select name="Suất chiếu">
                                <option value="Suất chiếu">Suất chiếu</option>
                            </select>
                            </div>
                        </td>
                    </td>
                </table>


            </tr>
            <!--------------------------------------- phần vinh -------------------------------------------------->
            <tr>
                <section class="phim-dang-chieu">
                    <table>
                        <tr>
                            <td>
                                <div class="thanh-ngang"></div>
                                <div class="thanh-ngang"></div>
                            </td>
                            <td>
                                <h1>Đang Chiếu</h1>
                            </td>
                            <td>
                                <div class="thanh-ngang0"></div>
                                <div class="thanh-ngang0"></div>
                            </td>
                        </tr>
                    </table>
                    <div>
                        <button class="prev0" onclick="chuyenAnhTruoc_DangChieu()"><span>‹</span></button>
                        <button class="next0" onclick="chuyenAnhSau_DangChieu()"><span>›</span></button>
                        <ul>
                            <li>
                                <a href="../php/TrangdatVe.php">
                                    <img src="https://up-anh.vi-vn.vn/img/1711726794_5cba88ff80f0149a2ac355e280963f77.jpg" alt="Phim 1">
                                    <h3><i class="fa-solid fa-ticket"></i> Đặt vé</h3>
                                </a>
                                <a href="#">
                                    <h3>Mô tả</h3>
                                </a>
                            </li>
                            <li>
                                <a href="../php/TrangdatVe.php">
                                    <img src="https://up-anh.vi-vn.vn/img/1711726810_214a6e278c735dbda42c3837ea4fd28e.jpg" alt="Phim 2">
                                    <h3><i class="fa-solid fa-ticket"></i> Đặt vé</h3>
                                </a>
                                <a href="#">
                                    <h3>Mô tả</h3>
                                </a>
                            </li>
                            <li>
                                <a href="../php/TrangdatVe.php">
                                    <img src="https://up-anh.vi-vn.vn/img/1711726823_0b984b266d11cf1ad379080968bf2a91.jpg" alt="Phim 3">
                                    <h3><i class="fa-solid fa-ticket"></i> Đặt vé</h3>
                                </a>
                                <a href="#">
                                    <h3>Mô tả</h3>
                                </a>
                            </li>
                            <li>
                                <a href="../php/TrangdatVe.php">
                                    <img src="https://up-anh.vi-vn.vn/img/1711726837_cab61084966cfa95687aea217d1045b9.jpg" alt="Phim 4">
                                    <h3><i class="fa-solid fa-ticket"></i> Đặt vé</h3>
                                </a>
                                <a href="#">
                                    <h3>Mô tả</h3>
                                </a>
                            </li>
                            <li>
                                <a href="../php/TrangdatVe.php">
                                    <img src="https://up-anh.vi-vn.vn/img/1711726850_533073b652802be2dc82a988c4ed315f.jpg" alt="Phim 5">
                                    <h3><i class="fa-solid fa-ticket"></i> Đặt vé</h3>
                                </a>
                                <a href="#">
                                    <h3>Mô tả</h3>
                                </a>
                            </li>
                            <li>
                                <a href="../php/TrangdatVe.php">
                                    <img src="https://up-anh.vi-vn.vn/img/1711726862_902819f1483923f364edf48a272268a0.jpg" alt="Phim 6">
                                    <h3><i class="fa-solid fa-ticket"></i> Đặt vé</h3>
                                </a>
                                <a href="#">
                                    <h3>Mô tả</h3>
                                </a>
                            </li>
                            <li>
                                <a href="../php/TrangdatVe.php">
                                    <img src="https://up-anh.vi-vn.vn/img/1711726891_2c239a901f0fc77d8ab3fdbad48c2e3b.jpg" alt="Phim 7">
                                    <h3><i class="fa-solid fa-ticket"></i> Đặt vé</h3>
                                </a>
                                <a href="#">
                                    <h3>Mô tả</h3>
                                </a>
                            </li>
                            <li>
                                <a href="../php/TrangdatVe.php">
                                    <img src="https://up-anh.vi-vn.vn/img/1711726910_f0afe82860698ac7c24f737b38c5d78d.jpg" alt="Phim 8">
                                    <h3><i class="fa-solid fa-ticket"></i> Đặt vé</h3>
                                </a>
                                <a href="#">
                                    <h3>Mô tả</h3>
                                </a>
                            </li>
                        </ul>
                    </div>
                </section>
                <section class="phim-sap-chieu">
                    <table>
                        <tr>
                            <td>
                                <div class="thanh-ngang1"></div>
                                <div class="thanh-ngang1"></div>
                            </td>
                            <td>
                                <h1>Sắp Chiếu</h1>
                            </td>
                            <td>
                                <div class="thanh-ngang2"></div>
                                <div class="thanh-ngang2"></div>
                            </td>
                        </tr>
                    </table>
                    <div class="phim-navigation">
                        <button class="prev1" onclick="chuyenAnhTruoc_SapChieu()"><span>‹</span></button>
                        <button class="next1" onclick="chuyenAnhSau_SapChieu()"><span>›</span></button>
                    </div>
                    <ul>
                        <li>
                            <a href="#">
                                <img src="https://up-anh.vi-vn.vn/img/1711726436_8bcc8f0d3d05f4693027a14ca7c34edd.jpg" alt="Phim 9">
                                <h3><i class="fa-solid fa-ticket"></i> Đặt trước</h3>
                            </a>
                            <a href="#">
                                <h3>Mô tả</h3>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://up-anh.vi-vn.vn/img/1711726422_211da9ec9fe416d19938509d6ac7d2b8.jpg" alt="Phim 10">
                                <h3><i class="fa-solid fa-ticket"></i> Đặt trước</h3>
                            </a>
                            <a href="#">
                                <h3>Mô tả</h3>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://up-anh.vi-vn.vn/img/1711726408_a901d1f004285b7836dc3633102b6bfa.jpg" alt="Phim 11">
                                <h3><i class="fa-solid fa-ticket"></i> Đặt trước</h3>
                            </a>
                            <a href="#">
                                <h3>Mô tả</h3>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://up-anh.vi-vn.vn/img/1711726389_accef52cea541bfcdb0a886589bc7182.jpg" alt="Phim 12">
                                <h3><i class="fa-solid fa-ticket"></i> Đặt trước</h3>
                            </a>
                            <a href="#">
                                <h3>Mô tả</h3>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://up-anh.vi-vn.vn/img/1711726269_76dc6116261c02cb3a804a20824d99a7.jpg" alt="Phim 13">
                                <h3><i class="fa-solid fa-ticket"></i> Đặt trước</h3>
                            </a>
                            <a href="#">
                                <h3>Mô tả</h3>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://up-anh.vi-vn.vn/img/1711726344_2132cef458d7491dea4a8fe2f81aeea9.jpg" alt="Phim 14">
                                <h3><i class="fa-solid fa-ticket"></i> Đặt trước</h3>
                            </a>
                            <a href="#">
                                <h3>Mô tả</h3>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://up-anh.vi-vn.vn/img/1711726542_8f7da7e05612807e7f441a5b7fd294ad.jpg" alt="Phim 15">
                                <h3><i class="fa-solid fa-ticket"></i> Đặt trước</h3>
                            </a>
                            <a href="#">
                                <h3>Mô tả</h3>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://up-anh.vi-vn.vn/img/1711726603_c25b010ad9a5e0f1ebbed2b92b707212.jpg" alt="Phim 16">
                                <h3><i class="fa-solid fa-ticket"></i> Đặt trước</h3>
                            </a>
                            <a href="#">
                                <h3>Mô tả</h3>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://up-anh.vi-vn.vn/img/1711726631_586dff5c91341126ba2193945ccb934b.jpg" alt="Phim 17">
                                <h3><i class="fa-solid fa-ticket"></i> Đặt trước</h3>
                            </a>
                            <a href="#">
                                <h3>Mô tả</h3>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://up-anh.vi-vn.vn/img/1711726650_1fb597db23a8dacdbad4d179f243ca48.jpg" alt="Phim 18">
                                <h3><i class="fa-solid fa-ticket"></i> Đặt trước</h3>
                            </a>
                            <a href="#">
                                <h3>Mô tả</h3>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://up-anh.vi-vn.vn/img/1711726671_2718a126bbfd0eacdedc0fb0a5af484c.jpg" alt="Phim 19">
                                <h3><i class="fa-solid fa-ticket"></i> Đặt trước</h3>
                            </a>
                            <a href="#">
                                <h3>Mô tả</h3>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://up-anh.vi-vn.vn/img/1711726689_51d1217d4edbefc4dd0662820a78929c.jpg" alt="Phim 20">
                                <h3><i class="fa-solid fa-ticket"></i> Đặt trước</h3>
                            </a>
                            <a href="#">
                                <h3>Mô tả</h3>
                            </a>
                        </li>
                    </ul>
                </section>

                <script src="../js/gioithieu.js"></script>
            </tr>
            <!--------------------------------------- phần uyên -------------------------------------------------->
            <tr>

                <div class="content-1">
                    <table>
                        <tr>
                            <td>
                                <div class="thanh-ngang3"></div>
                                <div class="thanh-ngang3"></div>
                            </td>
                            <td>
                                <h1 class="title">KHUYẾN MÃI VÀ SỰ KIỆN</h1>
                            </td>
                            <td>
                                <div class="thanh-ngang4"></div>
                                <div class="thanh-ngang4"></div>
                            </td>
                        </tr>
                    </table>
                    <div class="image-container-1">
                        <a href=""><img class="img1" src="https://up-anh.vi-vn.vn/img/1711817584_2b3255424420fd89d54ab2decacc3da9.jpg" alt="Khuyến mãi 1" /></a>
                        <a href=""><img class="img1" src="https://up-anh.vi-vn.vn/img/1711817658_6def02727d11e675d0714965c7306e77.jpg" alt="Khuyến mãi 2" /></a>
                    </div>
                </div>

            </tr>

        </table>
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