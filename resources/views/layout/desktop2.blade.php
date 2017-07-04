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
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/desktop2/desktop.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/desktop/desktop-popup.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/desktop2/desktop-header.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/desktop2/desktop-footer.css') }}">
	@yield('css')
	<script type="text/javascript" src="{{ asset('public/js/global/jquery-1.12.3.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/jquery.form.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/jquery.popupoverlay.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/jquery-scrolltofixed-min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/slick/slick.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/toastr8/dist/js/toastr8.min.js') }}"></script>
	@yield('js')
	<script type="text/javascript" src="{{ asset('public/js/desktop/desktop.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/desktop/right.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/desktop/dkdt.js') }}"></script>
	<!-- <script type="text/javascript" src="{{ asset('public/js/desktop/swt.js') }}"></script> -->
</head>
<body>
    <header>
		<div class="container">
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1">
					<table>
						<tr>
							<td><img src="{{ asset('public/images/desktop2/home-1.png') }}" alt=""></td>
							<td>
								<h1><a href="{{ url('/') }}">PHÒNG KHÁM CHUYÊN KHOA NAM KHANG</a></h1>
								<address><a href="{{ url('dia-chi-phong-kham') }}">SỐ 193C1 BÀ TRIỆU - HAI BÀ TRƯNG - HÀ NỘI</a></address>
							</td>
						</tr>
					</table>
				</div>
				<div class="flex1col2">
					<table>
						<tr>
							<td><img src="{{ asset('public/images/desktop2/home-2.png') }}" alt=""></td>
							<td>
								<p>Đường dây nóng 24h</p>
								<div class="phone"><a href="tel:0243-9656999">0243-9656999</a></div>
								<div class="phone"><a href="tel:1800-6181">1800-6181</a></div>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</header>
    <menu>
		<div class="container">
			<div class="dis-table width-100">
				<a href="{{ url('/') }}" class="table-cell">
					<i></i> Trang chủ
				</a>
				<a href="{{ MyAPI::getUrlTermID(32) }}" class="hvr-back-pulse table-cell">
					Kĩ thuật điều trị
				</a>
				<a href="{{ MyAPI::getUrlTermID(33) }}" class="hvr-back-pulse table-cell">
					Thiết bị tiên tiến
				</a>
				<a href="{{ MyAPI::getUrlTermID(34) }}" class="hvr-back-pulse table-cell">
					Bệnh án điển hình
				</a>
				<a href="{{ url('dia-chi-phong-kham') }}" class="hvr-back-pulse table-cell">
					Địa chỉ phòng khám
				</a>
				<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="hvr-back-pulse table-cell">
					Đặt hẹn trực tuyến
				</a>
			</div>
		</div>
	</menu>
	@yield('content')
	<footer class="pos-relative">
		<div class="line1"></div>
		<div class="line2">
			<div class="name text-center text-uppercase">PHÒNG KHÁM CHUYÊN KHOA NAM KHANG</div>
			<div class="lists text-center">
				<a href="{{ MyAPI::getUrlTermID(32) }}" class="dis-inline-block text-center">Kỹ thuật điều trị</a>
				<a href="{{ MyAPI::getUrlTermID(33) }}" class="dis-inline-block text-center">Thiết bị tiên tiến</a>
				<a href="{{ MyAPI::getUrlTermID(34) }}" class="dis-inline-block text-center">Bệnh án điển hình</a>
				<a href="{{ url('dia-chi-phong-kham') }}" class="dis-inline-block text-center">Địa chỉ phòng khám</a>
				<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="dis-inline-block text-center">Đặt hẹn trực tuyến</a>
			</div>
			<div class="table container">
				<table class="width-100">
					<tr>
						<td>
							<p><span>Thời gian hoạt động :</span> 8h - 20h ( làm việc cả chủ nhật và ngày lễ)</p>
							<p><span>ĐIỆN THOẠI LIÊN HỆ :</span>   <span class="phone">1800 - 6181</span>   <span class="phone">0243-9656999</span></p>
							<p><span>Địa chỉ phòng khám :</span> Số 193c1 Bà Triệu, Hai Bà Trưng, Hà Nội</p>
						</td>
						<td>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.5802906298172!2d105.84690131548622!3d21.009454886008854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab8a5b96e8d5%3A0x8a65517cee98a0b0!2sPh%C3%B2ng+Kh%C3%A1m+Chuy%C3%AAn+Khoa+Nam+Khang!5e0!3m2!1svi!2s!4v1498036628805" width="400" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>
						</td>
					</tr>
				</table>
			</div>
		</div>
		<div class="logo pos-absolute">
			<img src="{{ asset('public/images/desktop2/logo-footer.png') }}" alt="">
		</div>
	</footer>
	<script language="javascript" src="http://swt.phongkham193.com/JS/LsJS.aspx?siteid=MFI63108226&float=1&lng=en"></script>
	@include('popup.desktopPopup1')
</body>
</html>
