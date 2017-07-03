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

    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/desktop/desktop.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/desktop/desktop-header.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/desktop/desktop-footer.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/desktop/desktop-popup.css') }}">
    @yield('css')
    <script type="text/javascript" src="{{ asset('public/js/desktop/jquery-1.12.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/desktop/jquery.form.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/desktop/jquery.popupoverlay.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/desktop/jquery-scrolltofixed-min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/desktop/slick/slick.min.js') }}"></script>
    <!-- <script type="text/javascript" src="{{ asset('public/js/desktop/dkdt.js') }}"></script> -->
    <!-- <script type="text/javascript" src="{{ asset('public/js/desktop/desktop.js') }}"></script> -->
    @yield('js')
</head>
<body>
    <header>
        <div class="container">
            <div class="dis-table table1 width-100">
                <div class="table-cell cell1 text-left">
                    <div class="dis-table table2">
                        <div class="table-cell cell1">
                            <a href="{{ url('/') }}"><img src="{{ asset('public/css/desktop/imghome/home-1.png') }}" alt=""></a>
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
                            <a href="tel:1800 6181"><img src="{{ asset('public/css/desktop/imghome/home-2.png') }}" alt=""></a>
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
    <footer>
        <div class="row1">
            <div class="container">
                <table class="table1">
                    <tr>
                        <td class="cell1">
                            <div class="text-uppercase bor1">Lối tắt</div>
                            <div class="link">
                                <a href="#"><span class="table-cell text-center"><i class="bg1"></i></span> <span class="table-cell">Trang chủ</span></a>
                            </div>
                            <div class="link">
                                <a href="#"><span class="table-cell text-center"><i class="bg2"></i></span> <span class="table-cell">Giới thiệu phòng khám</span></a>
                            </div>
                            <div class="link">
                                <a href="#"><span class="table-cell text-center"><i class="bg3"></i></span> <span class="table-cell">Kỹ thuật điều trị</span></a>
                            </div>
                            <div class="link">
                                <a href="#"><span class="table-cell text-center"><i class="bg4"></i></span> <span class="table-cell">Bệnh án hồi phục</span></a>
                            </div>
                            <div class="link">
                                <a href="#"><span class="table-cell text-center"><i class="bg5"></i></span> <span class="table-cell">Lộ trình tới phòng khám</span></a>
                            </div>
                        </td>
                        <td class="cell2">
                            <div class="dis-table">
                                <i class="bg1 table-cell"></i>
                                <span class="table-cell">Rối loạn chức<br>năng sinh dục</span>
                            </div>
                            <div class="link"><a href="#">> Liệt dương</a></div>
                            <div class="link"><a href="#">> Yếu sinh lý</a></div>
                            <div class="link"><a href="#">> Xuất tinh sớm</a></div>
                            <div class="link"><a href="#">> Rối loạn cương dương</a></div>
                        </td>
                        <td class="cell2">
                            <div class="dis-table">
                                <i class="bg2 table-cell"></i>
                                <span class="table-cell">Chỉnh hình cơ<br>quan sinh dục</span>
                            </div>
                            <div class="link"><a href="#">> Dài bao quy đầu</a></div>
                            <div class="link"><a href="#">> Kéo dài dương vật</a></div>
                            <div class="link"><a href="#">> Thủ thuật hẹp bao quy đầu</a></div>
                            <div class="link"><a href="#">> Tăng kích thước dương vật</a></div>
                        </td>
                        <td class="cell2">
                            <div class="dis-table">
                                <i class="bg3 table-cell"></i>
                                <span class="table-cell">Bệnh<br>tuyến tiền liệt</span>
                            </div>
                            <div class="link"><a href="#">> Viêm tuyến tiền liệt</a></div>
                            <div class="link"><a href="#">> Phì đại tuyến tiền liệt</a></div>
                            <div class="link"><a href="#">> U nang tuyến tiền liệt</a></div>
                            <div class="link"><a href="#">> Tăng sinh tuyến tiền liệt</a></div>
                        </td>
                        <td class="cell2">
                            <div class="dis-table">
                                <i class="bg4 table-cell"></i>
                                <span class="table-cell">Viêm nhiễm hệ<br>thống sinh dục</span>
                            </div>
                            <div class="link"><a href="#">> Viêm quy đầu</a></div>
                            <div class="link"><a href="#">> Viêm niệu đạo</a></div>
                            <div class="link"><a href="#">> Viêm tinh hoàn</a></div>
                            <div class="link"><a href="#">> Viêm bàng quang</a></div>
                        </td>
                        <td class="cell2">
                            <div class="dis-table">
                                <i class="bg4 table-cell"></i>
                                <span class="table-cell">Vô sinh nam</span>
                            </div>
                            <div class="link"><a href="#">> Vô tinh</a></div>
                            <div class="link"><a href="#">> Tình trùng ít</a></div>
                            <div class="link"><a href="#">> Tinh trùng yếu</a></div>
                            <div class="link"><a href="#">> Xuất tinh ra máu</a></div>
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
                            <a href="#"><img src="{{ asset('public/css/desktop/imghome/home-1.png') }}" alt=""></a>
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
    <script language="javascript" src="http://swt.phongkham193.com/JS/LsJS.aspx?siteid=MFI63108226&float=1&lng=en"></script>
</body>
</html>
