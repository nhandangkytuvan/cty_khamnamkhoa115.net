<!DOCTYPE html>
<html lang="vi">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="language" content="vi" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="classification" content="Bệnh viện, phòng khám, Y tế." />
	<meta name="distribution" content="Bệnh viện, phòng khám, Y tế" />
	<meta name="rating" content="General" />
	<meta name="robots" content="index, follow" />
	<meta name="creator" content="Phòng khám Nam Khang,Số 193c1 Bà Triệu, Hai Bà Trưng, Hà Nội" />
	<meta name="publisher" content="Phòng khám Nam Khang,Số 193c1 Bà Triệu, Hai Bà Trưng, Hà Nội" />
    <meta name="author" content="{{ $setting->web_name }}">
    <!-- csrf -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- facebook -->
    <meta property="og:site_name" content="Phòng Khám Nam Khang" />
	<meta property="og:type" content="Bệnh viện, Phòng Khám Đa Khoa, Y tế" />
    <meta property="og:locale " content="vi_VN">
    <!-- link rss,sitemap -->
    <link rel="canonical" href="{{ url('sitemap.xml') }}" />
    <!-- link icon -->
    <link rel="shortcut icon" href="{{ asset('public/img/'.$setting->web_icon) }}" type="image/x-icon">
    @yield('title')
    @yield('keyword')
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/font-awesome/css/font-awesome.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/slick/slick.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/slick/slick-theme.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/toastr8/dist/css/toastr8.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/hover/css/hover.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/desktop3/desktop.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/desktop/desktop-popup.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/desktop3/desktop-header.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/desktop3/desktop-footer.css') }}">
	@yield('css')
	<script type="text/javascript" src="{{ asset('public/js/global/jquery-1.12.3.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/jquery.form.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/jquery.popupoverlay.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/jquery-scrolltofixed-min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/slick/slick.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/global/toastr8/dist/js/toastr8.min.js') }}"></script>
	@yield('js')
	<!-- <script type="text/javascript" src="{{ asset('public/js/desktop/right.js') }}"></script> -->
	<!-- <script type="text/javascript" src="{{ asset('public/js/desktop/dkdt.js') }}"></script> -->
	<!-- <script type="text/javascript" src="{{ asset('public/js/desktop/swt.js') }}"></script> -->
</head>
<body>
    <header>
        <div class="container">
            <div class="dis-table table1 width-100">
                <div class="table-cell cell1 text-left">
                    <div class="dis-table table2">
                        <div class="table-cell cell1">
                            <a href="{{ url('/') }}"><img src="{{ asset('public/css/desktop3/imghome/home-1.png') }}" alt=""></a>
                        </div>
                        <div class="table-cell cell2">
                            @if(Request::url()==url('/'))
                            <h1><a href="{{ url('/') }}">PHÒNG KHÁM CHUYÊN KHOA NAM KHANG</a></h1>
                            @else
                            <div><a href="{{ url('/') }}">PHÒNG KHÁM CHUYÊN KHOA NAM KHANG</a></div>
                            @endif
                            <address>SỐ 193C1 BÀ TRIỆU - HAI BÀ TRƯNG - HÀ NỘI</address>
                        </div>
                    </div>
                </div>
                <div class="table-cell cell2 text-right">
                    <div class="dis-table table3">
                        <div class="table-cell cell1">
                            <a href="tel:1800 6181"><img src="{{ asset('public/css/desktop3/imghome/home-2.png') }}" alt=""></a>
                        </div>
                        <div class="table-cell cell2">
                            <div class="hotline">Đường dây nóng 24h : </div>
                            <div class="phone"><a href="tel:1800 6181">1800 - 6181</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @yield('menu')
    @yield('banner')
    
    <main class="home">
        @yield('content')
    </main>
    <div class="footer-limited" style="height: 0px;">.</div>
    <footer>
        <div class="row1">
            <div class="container">
                <table class="table1">
                    <tr>
                        <td class="cell1">
                            <div class="text-uppercase bor1">Lối tắt</div>
                            <div class="link">
                                <a href="{{ url('/') }}"><span class="table-cell text-center"><i class="bg1"></i></span> <span class="table-cell">Trang chủ</span></a>
                            </div>
                            <div class="link">
                                <a href="{{ url('ve-chung-toi') }}"><span class="table-cell text-center"><i class="bg2"></i></span> <span class="table-cell">Giới thiệu phòng khám</span></a>
                            </div>
                            <div class="link">
                                <a href="{{ MyAPI::getUrlTermID(32) }}"><span class="table-cell text-center"><i class="bg3"></i></span> <span class="table-cell">Kỹ thuật điều trị</span></a>
                            </div>
                            <div class="link">
                                <a href="{{ MyAPI::getUrlTermID(34) }}"><span class="table-cell text-center"><i class="bg4"></i></span> <span class="table-cell">Bệnh án hồi phục</span></a>
                            </div>
                            <div class="link">
                                <a href="{{ url('dia-chi-phong-kham') }}"><span class="table-cell text-center"><i class="bg5"></i></span> <span class="table-cell">Lộ trình tới phòng khám</span></a>
                            </div>
                        </td>
                        <td class="cell2">
                            <div class="dis-table">
                                <i class="bg1 table-cell"></i>
                                <span class="table-cell">Rối loạn chức<br>năng sinh dục</span>
                            </div>
                            <div class="link"><a href="{{ MyAPI::getUrlTermID(8) }}">> Liệt dương</a></div>
                            <div class="link"><a href="{{ MyAPI::getUrlTermID(35) }}">> Yếu sinh lý</a></div>
                            <div class="link"><a href="{{ MyAPI::getUrlTermID(10) }}">> Xuất tinh sớm</a></div>
                            <div class="link"><a href="{{ MyAPI::getUrlTermID(9) }}">> Rối loạn cương dương</a></div>
                        </td>
                        <td class="cell2">
                            <div class="dis-table">
                                <i class="bg2 table-cell"></i>
                                <span class="table-cell">Chỉnh hình cơ<br>quan sinh dục</span>
                            </div>
                            <div class="link"><a href="{{ MyAPI::getUrlTermID(13) }}">> Dài bao quy đầu</a></div>
                            <div class="link"><a href="{{ MyAPI::getUrlTermID(14) }}">> Kéo dài dương vật</a></div>
                            <div class="link"><a href="{{ MyAPI::getUrlTermID(15) }}">> Thủ thuật hẹp bao quy đầu</a></div>
                            <div class="link"><a href="{{ MyAPI::getUrlTermID(16) }}">> Tăng kích thước dương vật</a></div>
                        </td>
                        <td class="cell2">
                            <div class="dis-table">
                                <i class="bg3 table-cell"></i>
                                <span class="table-cell">Bệnh<br>tuyến tiền liệt</span>
                            </div>
                            <div class="link"><a href="{{ MyAPI::getUrlTermID(3) }}">> Viêm tuyến tiền liệt</a></div>
                            <div class="link"><a href="{{ MyAPI::getUrlTermID(6) }}">> Phì đại tuyến tiền liệt</a></div>
                            <div class="link"><a href="{{ MyAPI::getUrlTermID(4) }}">> U nang tuyến tiền liệt</a></div>
                            <div class="link"><a href="{{ MyAPI::getUrlTermID(5) }}">> Tăng sinh tuyến tiền liệt</a></div>
                        </td>
                        <td class="cell2">
                            <div class="dis-table">
                                <i class="bg4 table-cell"></i>
                                <span class="table-cell">Viêm nhiễm hệ<br>thống sinh dục</span>
                            </div>
                            <div class="link"><a href="{{ MyAPI::getUrlTermID(18) }}">> Viêm quy đầu</a></div>
                            <div class="link"><a href="{{ MyAPI::getUrlTermID(20) }}">> Viêm niệu đạo</a></div>
                            <div class="link"><a href="{{ MyAPI::getUrlTermID(21) }}">> Viêm tinh hoàn</a></div>
                            <div class="link"><a href="{{ MyAPI::getUrlTermID(19) }}">> Viêm bàng quang</a></div>
                        </td>
                        <td class="cell2">
                            <div class="dis-table">
                                <i class="bg5 table-cell"></i>
                                <span class="table-cell">Vô sinh nam</span>
                            </div>
                            <div class="link"><a href="{{ MyAPI::getUrlTermID(25) }}">> Không có tinh trùng</a></div>
                            <div class="link"><a href="{{ MyAPI::getUrlTermID(23) }}">> Tình trùng ít</a></div>
                            <div class="link"><a href="{{ MyAPI::getUrlTermID(26) }}">> Tinh trùng yếu</a></div>
                            <div class="link"><a href="{{ MyAPI::getUrlTermID(24) }}">> Xuất tinh ra máu</a></div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row2">
            <div class="container">
                <table>
                    <tr>
                        <td class="cell1">
                            <a href="#"><img src="{{ asset('public/css/desktop3/imghome/home-1.png') }}" alt=""></a>
                        </td>
                        <td class="cell2">
                            <h3 class="text-uppercase">PHÒNG KHÁM CHUYÊN KHOA NAM KHANG</h3>
                            <address class="text-uppercase">SỐ 193C1 BÀ TRIỆU - HAI BÀ TRƯNG - HÀ NỘI</address>
                        </td>
                        <td class="cell3">
                            <p>Thời gian mở cửa:  <span>8:00 - 20:00</span></p>
                            <p>Hotline:  <span>1800 - 6181 . 0243 - 9656999</span></p>
                            <div>
                                Các thông tin trên trang web mang tính chất tham khảo, không thể làm<br>
                                căn cứ để chuẩn đoán hay chữa trị, hãy làm theo sự chuẩn đoán của bác sĩ.
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </footer>
    @include('layouts.popupDesktop1')
    <div id="myloadding"><div id="mytext">Xin chờ chút...</div></div>
    <!-- <script language="javascript" src="http://swt.phongkham193.com/JS/LsJS.aspx?siteid=MFI63108226&float=1&lng=en"></script> -->
    <script type="text/javascript" src="http://bd.sznj91.cn/public17527/js/scrollReveal.js"></script>
    <script type="text/javascript">
        window.scrollReveal = new scrollReveal({ reset:false,move:'10px',over: '.5s'});
    </script>
</body>
</html>
