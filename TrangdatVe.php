<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đặt vé Desi.vn</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../css/datve.css">
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
                                <li class="dd"><a href="../html/dangchieu.html">Phim đang chiếu</a></li>
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
        <!-----------------------------------------phần an body----------------------------------------->

        <tr>
            <th>
                <h1 class="chon">BƯỚC 1: CHỌN GHẾ</h1>
            </th>
        </tr>
        <tr>
            <th>
                <p class="chon">Màn hình</p>
            </th>
        </tr>
        <tr>
            <th>
                <div class="thanh-ngang4"></div>
            </th>
        </tr>
        <div class="button-chon-ghe">
            <button class="size">v</button>
            <button class="color-blu" data-price="60">A01</button>
            <th><button class="color-blu" data-price="60">A02</button></th>
            <th><button class="color-blu" data-price="60">A03</button></th>
            <th><button class="color-blu" data-price="60">A04</button></th>
            <th><button class="color-blu" data-price="60">A05</button></th>
            <th><button class="color-blu" data-price="60">A06</button></th>
            <th><button class="size">v</button></th>
            <th><button class="color-blu" data-price="60">A07</button></th>
            <th><button class="color-blu" data-price="60">A08</button></th>
            <th><button class="color-blu" data-price="60">A09</button></th>
            <th><button class="color-blu" data-price="60">A10</button></th>
            <th><button class="color-blu" data-price="60">A11</button></th>
            <th><button class="color-blu" data-price="60">A12</button></th>
            <th><button class="size">v</button></th>
            <br>
            <th><button class="size">v</button></th>
            <th><button class="color-blu" data-price="60">B01</button></th>
            <th><button class="color-blu" data-price="60">B02</button></th>
            <th><button class="color-blu" data-price="60">B03</button></th>
            <th><button class="color-blu" data-price="60">B04</button></th>
            <th><button class="color-blu" data-price="60">B05</button></th>
            <th><button class="color-blu" data-price="60">B06</button></th>
            <th><button class="size">v</button></th>
            <th><button class="color-blu" data-price="60">B07</button></th>
            <th><button class="color-blu" data-price="60">B08</button></th>
            <th><button class="color-blu" data-price="60">B09</button></th>
            <th><button class="color-blu" data-price="60">B10</button></th>
            <th><button class="color-blu" data-price="60">B11</button></th>
            <th><button class="color-blu" data-price="60">B12</button></th>
            <th><button class="size">v</button></th>
            <br>
            <th><button class="size">v</button></th>
            <th><button class="color-blu" data-price="60">C01</button></th>
            <th><button class="color-blu" data-price="60">C02</button></th>
            <th><button class="color-blu" data-price="60">C03</button></th>
            <th><button class="color-blu" data-price="60">C04</button></th>
            <th><button class="color-blu" data-price="60">C05</button></th>
            <th><button class="color-blu" data-price="60">C06</button></th>
            <th><button class="size">v</button></th>
            <th><button class="color-blu" data-price="60">C07</button></th>
            <th><button class="color-blu" data-price="60">C08</button></th>
            <th><button class="color-blu" data-price="60">C09</button></th>
            <th><button class="color-blu" data-price="60">C10</button></th>
            <th><button class="color-blu" data-price="60">C11</button></th>
            <th><button class="color-blu" data-price="60">C12</button></th>
            <th><button class="size">v</button></th>
            <br>
            <th><button class="size">v</button></th>
            <th><button class="color-red" data-price="65">D01</button></th>
            <th><button class="color-red" data-price="65">D02</button></th>
            <th><button class="color-red" data-price="65">D03</button></th>
            <th><button class="color-red" data-price="65">D04</button></th>
            <th><button class="color-red" data-price="65">D05</button></th>
            <th><button class="color-red" data-price="65">D06</button></th>
            <th><button class="size">v</button></th>
            <th><button class="color-red" data-price="65">D07</button></th>
            <th><button class="color-red" data-price="65">D08</button></th>
            <th><button class="color-red" data-price="65">D09</button></th>
            <th><button class="color-red" data-price="65">D10</button></th>
            <th><button class="color-red" data-price="65">D11</button></th>
            <th><button class="color-red" data-price="65">D12</button></th>
            <th><button class="size">v</button></th>
            <br>
            <th><button class="size">v</button></th>
            <th><button class="color-red" data-price="65">E01</button></th>
            <th><button class="color-red" data-price="65">E02</button></th>
            <th><button class="color-red" data-price="65">E03</button></th>
            <th><button class="color-red" data-price="65">E04</button></th>
            <th><button class="color-red" data-price="65">E05</button></th>
            <th><button class="color-red" data-price="65">E06</button></th>
            <th><button class="size">v</button></th>
            <th><button class="color-red" data-price="65">E07</button></th>
            <th><button class="color-red" data-price="65">E08</button></th>
            <th><button class="color-red" data-price="65">E09</button></th>
            <th><button class="color-red" data-price="65">E10</button></th>
            <th><button class="color-red" data-price="65">E11</button></th>
            <th><button class="color-red" data-price="65">E12</button></th>
            <th><button class="size">v</button></th>
            <br>
            <th><button class="size">v</button></th>
            <th><button class="color-red" data-price="65">F01</button></th>
            <th><button class="color-red" data-price="65">F02</button></th>
            <th><button class="color-red" data-price="65">F03</button></th>
            <th><button class="color-red" data-price="65">F04</button></th>
            <th><button class="color-red" data-price="65">F05</button></th>
            <th><button class="color-red" data-price="65">F06</button></th>
            <th><button class="size">v</button></th>
            <th><button class="color-red" data-price="65">F07</button></th>
            <th><button class="color-red" data-price="65">F08</button></th>
            <th><button class="color-red" data-price="65">F09</button></th>
            <th><button class="color-red" data-price="65">F10</button></th>
            <th><button class="color-red" data-price="65">F11</button></th>
            <th><button class="color-red" data-price="65">F12</button></th>
            <th><button class="size">v</button></th>
            <br>
            <th><button class="size">v</button></th>
            <th><button class="color-red" data-price="65">G01</button></th>
            <th><button class="color-red" data-price="65">G02</button></th>
            <th><button class="color-red" data-price="65">G03</button></th>
            <th><button class="color-red" data-price="65">G04</button></th>
            <th><button class="color-red" data-price="65">G05</button></th>
            <th><button class="color-red" data-price="65">G06</button></th>
            <th><button class="size">v</button></th>
            <th><button class="color-red" data-price="65">G07</button></th>
            <th><button class="color-red" data-price="65">G08</button></th>
            <th><button class="color-red" data-price="65">G09</button></th>
            <th><button class="color-red" data-price="65">G10</button></th>
            <th><button class="color-red" data-price="65">G11</button></th>
            <th><button class="color-red" data-price="65">G12</button></th>
            <th><button class="size">v</button></th>
            <br>
            <th><button class="size">v</button></th>
            <th><button class="color-red" data-price="65">H01</button></th>
            <th><button class="color-red" data-price="65">H02</button></th>
            <th><button class="color-red" data-price="65">H03</button></th>
            <th><button class="color-red" data-price="65">H04</button></th>
            <th><button class="color-red" data-price="65">H05</button></th>
            <th><button class="color-red" data-price="65">H06</button></th>
            <th><button class="size">v</button></th>
            <th><button class="color-red" data-price="65">H07</button></th>
            <th><button class="color-red" data-price="65">H08</button></th>
            <th><button class="color-red" data-price="65">H09</button></th>
            <th><button class="color-red" data-price="65">H10</button></th>
            <th><button class="color-red" data-price="65">H11</button></th>
            <th><button class="color-red" data-price="65">H12</button></th>
            <th><button class="size">v</button></th>
            <br>
            <th><button class="size">v</button></th>
            <th><button class="color-red" data-price="65">L01</button></th>
            <th><button class="color-red" data-price="65">L02</button></th>
            <th><button class="color-red" data-price="65">L03</button></th>
            <th><button class="color-red" data-price="65">L04</button></th>
            <th><button class="color-red" data-price="65">L05</button></th>
            <th><button class="color-red" data-price="65">L06</button></th>
            <th><button class="size">v</button></th>
            <th><button class="color-red" data-price="65">L07</button></th>
            <th><button class="color-red" data-price="65">L08</button></th>
            <th><button class="color-red" data-price="65">L09</button></th>
            <th><button class="color-red" data-price="65">L10</button></th>
            <th><button class="color-red" data-price="65">L11</button></th>
            <th><button class="color-red" data-price="65">L12</button></th>
            <th><button class="size">v</button></th>
            <br>
            <th><button class="size">v</button></th>
            <th><button class="color-purple" data-price="85">K01</button></th>
            <th><button class="color-purple" data-price="85">K02</button></th>
            <th><button class="color-purple" data-price="85">K03</button></th>
            <th><button class="color-purple" data-price="85">K04</button></th>
            <th><button class="color-purple" data-price="85">K05</button></th>
            <th><button class="color-purple" data-price="85">K06</button></th>
            <th><button class="size">v</button></th>
            <th><button class="color-purple" data-price="85">K07</button></th>
            <th><button class="color-purple" data-price="85">K08</button></th>
            <th><button class="color-purple" data-price="85">K09</button></th>
            <th><button class="color-purple" data-price="85">K10</button></th>
            <th><button class="color-purple" data-price="85">K11</button></th>
            <th><button class="color-purple" data-price="85">K12</button></th>
            <th><button class="size">v</button></th>
            <br>
            <img class="anh" src="https://img.upanh.tv/2024/04/04/Remove-bg.ai_1712211206600.png">
            <div class="note">
                <h3 class="note-note">Chú thích màu sắc</h3>
                <h3 class="note-chon">Danh sách ghế đã chọn</h3>
                <div id="selectedProducts">Tên ghế: </div>
                <div id="totalPrice">Giá vé: </div>
                <table class="table-container">
                    <tr>
                        <td>
                            <p class="note-blu "></p>
                        </td>
                        <td>Ghế thường</td>
                        <td>
                            <p class="note-yellow "></p>
                        </td>
                        <td>Ghế đã chọn</td>
                        <td>
                            <p class="note-v ">v</p>
                        </td>
                        <td>Lối đi</td>
                        <td><button class="forward ">Tiếp Theo</button></td>
                    </tr>
                    <tr>
                        <td>
                            <p class="note-red "></p>
                        </td>
                        <td>Ghế VIP</td>
                        <td>
                            <p class="note-purple "></p>
                        </td>
                        <td>Ghế đôi</td>
                    </tr>
                    <tr>
                        <td>
                            <p class="note-grey "></p>
                        </td>
                        <td>Ghế đã bán</td>
                        <td>
                            <p class="note-green "></p>
                        </td>
                        <td>LUXULY</td>
                    </tr>
                </table>
            </div>
            <script src="../js/datve.js"></script>

        </div>
        <!------------------------------------------- phần khánh ---------------------------------------------------->
        <footer>
            <section class="content-2 ">
                <div class="footer-container ">
                    <div class="footer-column ">
                        <h3>VỀ DESI</h3>
                        <ul>
                            <li><a href="# ">Giới thiệu</a></li>
                            <li><a href="# ">Liên hệ</a></li>
                            <li><a href="# ">Các câu hỏi thường gặp</a></li>
                        </ul>
                    </div>
                    <div class="footer-column ">
                        <h3>ĐIỀU KHOẢN SỬ DỤNG</h3>
                        <ul>
                            <li><a href="# ">Điều khoản chung</a></li>
                            <li><a href="# ">Chính sách thanh toán</a></li>
                            <li><a href="# ">Chính sách bảo mật</a></li>
                        </ul>
                    </div>
                    <div class="footer-column customer-care ">
                        <h3> CHĂM SÓC KHÁCH HÀNG</h3>
                        <ul>
                            <li><span>Hotline Quy Nhơn:</span> 1900 1234 </li>

                            <li><span>Hotline An Nhơn:</span> 1900 5678 </li>

                            <li><span>Giờ làm việc:</span> 8:00 - 22:00 </li>

                            <li><span>Email hỗ trợ:</span> info@desi.vn </li>
                        </ul>
                    </div>

                    <div class="footer-column social-bank ">
                        <h3 class="move-right ">KẾT NỐI VỚI CHÚNG TÔI</h3>
                        <ul class="social-links ">
                            <a href="https://www.facebook.com/fanreviewphim2 "><img src="https://cdn0.iconfinder.com/data/icons/yooicons_set01_socialbookmarks/512/social_facebook_button_blue.png " alt="Facebook "></a>
                            <a href="https://www.youtube.com/@desibanks4real "><img src=https://clipart.info/images/ccovers/1590430652red-youtube-logo-png-xl.png alt="youtube "></a>
                        </ul>
                    </div>
                </div>
                <div class="footer-bottom ">
                    <div class="logo ">
                        <a href="../html/trangChinhweb.html"><img src="https://img.upanh.tv/2024/03/30/logo795e31a4a48ae872.png " alt="logo "></a>
                    </div>
                    <div class="bank-links ">
                        <h3 class="nhkt ">NGÂN HÀNG KẾT NỐI</h3>
                        <ul class="bank-links ">
                            <a href="https://momo.vn "><img src="https://www.russinvecchi.com.vn/wp-content/uploads/2020/09/931b119cf710fb54746d5be0e258ac89-logo-momo-1024x1024.png " alt="momo "></a>
                            <a href="https://www.mbbank.com.vn "><img src="http://static.ybox.vn/2022/4/5/1650623741740-logo%20700x400%20(53).png " alt="mbbank "></a>
                        </ul>
                    </div>
                    <div class="copyright ">
                        <p>&copy; Bản quyền thuộc về DESI</p>
                    </div>
                </div>
            </section>
        </footer>
    </div>
</body>

</html>