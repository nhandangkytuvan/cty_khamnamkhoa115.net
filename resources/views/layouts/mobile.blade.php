<!DOCTYPE html>
<html lang="vi">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="language" content="vi" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="classification" content="hospital" />
    <meta name="distribution" content="Global" />
    <meta name="rating" content="General" />
    <meta name="robots" content="index, follow" />
    <meta name="creator" content="Phòng khám Nam Khang" />
    <meta name="publisher" content="Phòng khám Nam Khang" />
    <meta name="author" content="">
    <!-- csrf -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- facebook -->
    <meta property="og:site_name" content="Phòng Khám Nam Khang" />
    <meta property="og:type" content="article" />
    <meta property="og:locale " content="vi_VN">
    <meta property="fb:app_id" content="">
    <meta property="fb:admins" content="">
    <!-- link rss,sitemap -->
    <!-- link icon -->
    <link rel="shortcut icon" href="{{ asset('public/upload/'.$configs[0]->avatar) }}" type="image/x-icon">
    @yield('title')
    @yield('keyword')
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/desktop/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/desktop/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/desktop/slick/slick-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/desktop/hover/css/hover.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/mobile/mobile.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/mobile/mobile-header.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/mobile/mobile-footer.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/mobile/mobile-popup.css') }}">
    @yield('css')
    <script type="text/javascript" src="{{ asset('public/js/desktop/jquery-1.12.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/desktop/jquery.form.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/desktop/jquery.popupoverlay.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/desktop/jquery-scrolltofixed-min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/desktop/slick/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/mobile/shake.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/mobile/mobile.js') }}"></script>
    @yield('js')
</head>
<body>
    <div class="topheader">
        <div class="container">
            <a href="tel:1800 6181"><img src="{{ asset('public/css/mobile/imghome/topheader.gif') }}" alt="" class="center-block img-responsive"></a>
        </div>
    </div>
    <header>
        <div class="container">
            <div class="bg">
                <div class="logo">
                    <a href="{{ url('/') }}"><img src="{{ asset('public/css/mobile/imghome/home-1.png') }}" alt="" class="center-block"></a>
                </div>
                <h1><a href="{{ url('/') }}">PHÒNG KHÁM CHUYÊN KHOA NAM KHANG</a></h1>
                <div class="phone"><a href="tel:1800 - 6181">Điện thoại：<span>1800 - 6181</span></a></div>
                <div class="slogan">Bởi vì chuyên khoa, cho nên chuyên nghiệp</div>
            </div>
        </div>
    </header>
    <menu>
        <div class="container">
            <div class="row1">
                <div class="dis-table width-100">
                    <a href="{{ APIPost::getUrlByID(19) }}" class="table-cell cell1">
                        <span><img src="{{ asset('public/css/mobile/imghome/home-2.png') }}" alt="" class="img-responsive"></span>
                        <span class="text-uppercase">Giới thiệu phòng khám</span>
                    </a>
                    <a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="table-cell cell2">
                        <span><img src="{{ asset('public/css/mobile/imghome/home-3.png') }}" alt="" class="img-responsive"></span>
                        <span class="text-uppercase">Đội ngũ chuyên gia</span>
                    </a>
                </div>
            </div>
            <div class="row1">
                <div class="dis-table width-100">
                    <a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="table-cell cell3">
                        <span><img src="{{ asset('public/css/mobile/imghome/home-4.png') }}" alt="" class="img-responsive"></span>
                        <span class="text-uppercase">Đăng ký<br>đặt hẹn</span>
                    </a>
                    <a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="table-cell cell4">
                       <span><img src="{{ asset('public/css/mobile/imghome/home-5.png') }}" alt="" class="img-responsive"></span>
                        <span class="text-uppercase">Tư vấn<br>trực tuyến</span>
                    </a>
                    <a href="{{ url('dia-chi-phong-kham.html') }}" class="table-cell cell5">
                        <span><img src="{{ asset('public/css/mobile/imghome/home-6.png') }}" alt="" class="img-responsive"></span>
                        <span class="text-uppercase">Hướng dẫn<br>chỉ đường</span>
                    </a>
                </div>
            </div>
            <div class="row1">
                <div class="dis-table width-100">
                    <a href="tel:1800 - 6181" class="table-cell cell6">
                        <span><img src="{{ asset('public/css/mobile/imghome/home-7.png') }}" alt="" class="img-responsive"></span>
                        <span class="text-uppercase">1800 - 6181</span>
                    </a>
                    <a href="{{ APITerm::getUrlByID(18) }}" class="table-cell cell7">
                        <span><img src="{{ asset('public/css/mobile/imghome/home-8.png') }}" alt="" class="img-responsive"></span>
                        <span class="text-uppercase">Kỹ thuật<br>điều trị</span>
                    </a>
                </div>
            </div>
        </div>
    </menu>
    @yield('banner')
    @yield('menu')
    @yield('content')
    <footer>
        <div class="container">
            <div class="bg">
                <div class="logo dis-table width-100 table1">
                    <span class="table-cell"><a href="{{ url('/') }}"><img src="{{ asset('public/css/mobile/imghome/home-1.png') }}" alt="" class="img-responsive"></a></span>
                    <span class="text-uppercase table-cell"><a href="{{ url('/') }}">PHÒNG KHÁM CHUYÊN KHOA NAM KHANG</a></span>
                </div>
                <div class="bg2">
                    <div class="line1">
                        <span class="table-cell text-center"><a href="tel:1800 - 6181"><img src="{{ asset('public/css/mobile/imghome/home-24.png') }}" alt=""></a></span>
                        <span class="table-cell text-center cell2"><a href="tel:1800 - 6181">1800 - 6181</a></span>
                        <a href="tel:1800 - 6181" class="table-cell text-uppercase text-center cell3">Bấm để gọi</a>
                    </div>
                    <div class="line2">
                        <table class="width-100 table2">
                            <tr>
                                <td><img src="{{ asset('public/css/mobile/imghome/home-25.png') }}" alt=""></td>
                                <td>8:00 - 20:00</td>
                                <td class="text-uppercase">( không nghỉ lễ tết cuối tuần)</td>
                            </tr>
                        </table>
                    </div>
                    <div class="line3">
                        <a href="{{ url('dia-chi-phong-kham.html') }}">Địa chỉ phòng khám : Số 193c1 Bà Triệu, Hai Bà Trưng, Hà Nội</a>
                    </div>
                </div>
                <div class="goTop">
                    <table class="width-100">
                        <tr>
                            <td>
                                <table class="width-100">
                                    <tr>
                                        <td><a href="#"><img src="{{ asset('public/css/mobile/imghome/home-26.png') }}" alt=""></a></td>
                                        <td><a href="#" class="text-uppercase">Về đầu trang</a></td>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <table class="width-100">
                                    <tr>
                                        <td><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><img src="{{ asset('public/css/mobile/imghome/home-27.png') }}" alt=""></a></td>
                                        <td><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="text-uppercase">Bác sĩ tư vấn</a></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="toolbar">
                <div class="dis-table width-100 table1">
                    <a href="tel:1800 6181" class="table-cell">
                        <div class="dis-table width-100">
                            <span class="table-cell"><img src="{{ asset('public/css/mobile/imghome/home-28.png') }}" alt=""></span>
                            <span class="table-cell">1800-6181</span>
                        </div>
                    </a>
                    <a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="table-cell">
                        <div class="dis-table width-100">
                            <span class="table-cell"><img src="{{ asset('public/css/mobile/imghome/tttf.gif') }}" alt=""></span>
                            <span class="text-uppercase table-cell">Thông tin của bạn</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <div id="my_popup">
        <p>Bác sỹ đang yêu cầu được chát với bạn</p>
        <a class="my_popup_close btn-cancel">Từ chối</a>
        <a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="btn-agree">Đồng ý</a>
    </div>
    <div id="myloadding"><div id="mytext">Xin chờ chút...</div></div>
    <script language="javascript" src="http://swt.phongkham193.com/JS/LsJS.aspx?siteid=MFI63108226&float=1&lng=en"></script>

</body>
</html>
