
<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="~/Content/LayoutAdmin/css/style.css" rel="stylesheet" />
    <link href="~/Content/LayoutAdmin/css/style-responsive.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="~/Content/format.css" />
    <title>Trang chủ</title>

    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/dashboard-premium/1-4-7/vendor/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome CSS-->
  <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/dashboard-premium/1-4-7/vendor/font-awesome/css/font-awesome.min.css">
  <!-- Fontastic Custom icon font-->
  <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/dashboard-premium/1-4-7/css/fontastic.css">
  <!-- Google fonts - Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
  <!-- jQuery Circle-->
  <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/dashboard-premium/1-4-7/css/grasp_mobile_progress_circle-1.0.0.min.css">
  <!-- Custom Scrollbar-->
  <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/dashboard-premium/1-4-7/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
  <!-- theme stylesheet-->
  <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/dashboard-premium/1-4-7/css/style.default.premium.css" id="theme-stylesheet">
  <!-- Custom stylesheet - for your changes-->
  <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/dashboard-premium/1-4-7/css/custom.css">
  <!-- Favicon-->
  <link rel="shortcut icon" href="https://d19m59y37dris4.cloudfront.net/dashboard-premium/1-4-7/img/favicon.ico">
  <!-- Tweaks for older IEs-->

  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
<body>

    <div id="banner">
        <div class="image">
            <a href="~/TrangChu/Index"><img src="~/image/Home.jpg" /></a>
        </div>
        <div class="search">
            <input type="text" placeholder="Tìm kiếm sản phẩm" />
            <button title="Tìm kiếm" type="submit" style="cursor:pointer"> <img src="~/image/find.png" /></button>
        </div>
        <div class="regester">
            <ul>
                <li><a href="~/Regester/Login"> Đăng nhập</a></li>
                <li><a href="~/Regester/Index">Đăng kí</a></li>
            </ul>
        </div>
        <div class="basket">
            <a href="#"><img src="~/image/basket.png" alt="Giỏ hàng" /></a>
        </div>
    </div>
    <!--End banner-->
    <div id="head">
        <div class="phone">
            <img src="~/image/phone.png" />
            <span> Hỗ trợ đặt hàng nhanh:  </span>
            <span style="color:red"> &nbsp;0344359333</span>
        </div>
        <div class="connect">
            <span>Liên hệ &nbsp; </span> <span><a href="https://www.facebook.com/duong.tritue.9" target="_blank"><img src="~/image/Facebook.png" /></a></span>
            <span><a href="https://www.instagram.com/_tri.tue98/?hl=en" target="_blank"><img src="~/image/Instagram.png" /></a></span>
            <span>|</span>
            <span> <a href="#"> Thông báo</a> </span> <span><a href="#"><img src="~/image/notice.png" /></a></span>
            <span>|</span>
            <span><a href="https://help.shopee.vn/vn/s/" target="_blank"> Trợ giúp</a></span>
            <span> <a href="https://help.shopee.vn/vn/s/" target="_blank"><img src="~/image/help.png" /></a></span>
        </div>
    </div>
    <!--End Head-->
    <div id="title">
        @Html.Action("DanhMucPartial", "DanhMuc")
    </div>
    <!--End title-->
    @RenderBody()
    <div id="content">
        <div class="left">
            <div class="box-cha">
                @Html.Action("SanPhamPartial", "SanPham")
            </div>
        </div>
        <div class="right">
            <img src="~/image/find-icon.png" />
            <b> BỘ LỌC TÌM KIẾM</b>
           
            <div class="introduce">
                <div class="introduce-tittle">
                    <b> Fashion-Yên tâm mua sắm</b>
                </div>
                <div class="introduce-content">
                    <img src="~/image/Heart.png" /> <span>ĐỒ ĐẸP - GIÁ HỢP LÝ</span> <br />
                    <img src="~/image/Heart.png" /> <span>Chất lượng TỐT - Chọn lọc kỹ </span><br />
                    <img src="~/image/Heart.png" /><span>Không vừa được đổi size </span><br />
                    <img src="~/image/Heart.png" /><span>Giao hàng Toàn quốc</span><br />

                </div>
            </div>
        </div>
        <!--End content Right-->
    </div>
    <!--End content-->
    <div id="footer">
        <div class="address">
            <h3>FASHION</h3>

            <span>Fashion chuyên bán các loại sản phẩm quần áo thời trang  online với hàng ngàn mẫu mã để quý khách lựa chọn.</span><br />
            <span> Hãy đặt hàng online để được hưởng nhiều ưu đãi hơn.</span><br />
            <span> Chọn mua ngay các mẫu quần áo thời trang mới nhất 2019, hàng đẹp giá cực tốt.</span><br />


            <span><img src="~/image/shop.png" /></span>
            <span>Nhà 23/6, Đường 12, khu phố 2, phường Linh Chiểu, Quận Thủ Đức, To.HCM</span> <br />

            <span> <img src="~/image/phone.png" /> </span>
            <span>ĐT: 0383592126</span> <br />

            <span><img src="~/image/time.png" /></span>
            <span>Giờ mở cửa: T2 - T7: 8h00 - 21h30; CN: 9h00 - 17h30</span><br />

            <span><img src="~/image/phone.png" /></span>
            <span>Hotline: 0344359333</span><br />
        </div>

        <div class="policy">
            <h3>CHÍNH SÁCH BÁN HÀNG</h3>
            <ul>
                <li><a href="~/Footer/Index"> Thông tin về cửa hàng</a></li>
                <li><a href="~/Footer/PayMothod"> Phương thức thanh toán </a></li>
                <li><a href="~/Footer/TransitMothod"> Phương thức vận chuyển</a></li>
                <li><a href="~/Footer/Address"> Địa chỉ shop FASHION</a></li>

            </ul>
        </div>
        <div class="acount">
            <h3>TÀI KHOẢN</h3>
            <ul>
                <li><a href="~/Regester/Login">Đăng nhập</a></li>
                <li><a href="~/Regester/Index">Đăng kí tài khoản</a></li>
            </ul>
        </div>

    </div>
    <!--End footer-->


</body>
</html>
