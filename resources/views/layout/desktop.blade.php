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
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/desktop/desktop.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/desktop/desktop-popup.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/desktop/desktop-header.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/desktop/desktop-footer.css') }}">
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
				<div class="flex1col1 flex2 flex justify-content-between">
					<div class="flex2col1 flex align-items-center justify-content-center">
						<div>
							<h2>
								<a href="{{ url('/') }}">
									<img src="{{ asset('public/images/desktop/logo-header.png') }}" alt="">
								</a>
							</h2>
						</div>
					</div>
					<div class="flex2col2 flex align-items-center justify-content-center">
						<div>
							<h2 class="text-uppercase"><a href="{{ url('ve-chung-toi') }}">Phòng khám chuyên khoa Nam Khang</a></h2>
							<h3 class="text-uppercase"><a href="{{ url('dia-chi-phong-kham') }}">Số 193C1 Bà Triệu - Hai Bà Trưng - Hà Nội</a></h3>
						</div>
					</div>
				</div>
				<div class="flex1col1 flex justify-content-center align-items-center">
					<div class="thoigian-lamviec">
						<p class="text-left">Thời gian làm việc</p>
						<p class="text-center">8:00 - 20:00</p>
						<p class="text-right">(làm việc cả chủ nhật, ngày lễ)</p>
					</div>
				</div>
				<div class="flex1col1 flex flex3 justify-content-between">
					<div class="flex3col1 flex justify-content-center align-items-center">
						<a href="tel:1800 6181">
							<img src="{{ asset('public/images/desktop/header-4.png') }}" alt="">
						</a>
					</div>
					<div class="flex3col2 flex justify-content-center align-items-center">
						<div>
							<h5 class="text-uppercase">Đường dây nóng khẩn cấp</h5>
							<h2 class="text-center"><a href="tel:0243-9656999">0243 - 9656999</a></h2>
							<h2 class="text-center"><a href="tel:1800 - 6181">1800 - 6181</a></h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
    <menu>
		<div class="container">
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1 chidanbenh flex align-items-center justify-content-center">
					<div>
						<h3><a href="#"  class="text-container-center">Danh mục bệnh</a></h3>
						<div class="menu-items">
							<div>
								<h4 class="bg bg1">Bệnh về tuyến tiền liệt</h4>
								<div class="flex flex2 justify-content-between">
									<div class="flex2col1">
										<h5><a href="{{ MyAPI::getUrlTermID(3) }}">Viêm tuyến tiền liệt</a></h5>
										<h5><a href="{{ MyAPI::getUrlTermID(4) }}">U nang tuyến tiền liệt</a></h5>
									</div>
									<div class="flex2col1">
										<h5><a href="{{ MyAPI::getUrlTermID(5) }}">Tăng sinh tuyến tiền liệt</a></h5>
										<h5><a href="{{ MyAPI::getUrlTermID(6) }}">Phì đại tuyến tiền liệt</a></h5>
									</div>
								</div>
							</div>
							<div>
								<h4 class="bg bg2">Rối loạn chức năng sinh dục</h4>
								<div class="flex flex2 justify-content-between">
									<div class="flex2col1">
										<h5><a href="{{ MyAPI::getUrlTermID(8) }}">Liệt dương</a></h5>
										<h5><a href="{{ MyAPI::getUrlTermID(35) }}">Yếu sinh lý</a></h5>
									</div>
									<div class="flex2col1">
										<h5><a href="{{ MyAPI::getUrlTermID(10) }}">Xuất tinh sớm</a></h5>
										<h5><a href="{{ MyAPI::getUrlTermID(9) }}">Rối loạn cương dương</a></h5>
									</div>
								</div>
							</div>
							<div>
								<h4 class="bg bg3">Chỉnh hình cơ quan sinh dục</h4>
								<div class="flex flex2 justify-content-between">
									<div class="flex2col1">
										<h5><a href="{{ MyAPI::getUrlTermID(13) }}">Dài bao quy đầu</a></h5>
										<h5><a href="{{ MyAPI::getUrlTermID(14) }}">Kéo dài dương vật</a></h5>
									</div>
									<div class="flex2col1">
										<h5><a href="{{ MyAPI::getUrlTermID(15) }}">Thủ thuật hẹp bao quy đầu</a></h5>
										<h5><a href="{{ MyAPI::getUrlTermID(16) }}">Tăng kích thước dương vật</a></h5>
									</div>
								</div>
							</div>
							<div>
								<h4 class="bg bg4">Viêm nhiễm hệ thống sinh dục</h4>
								<div class="flex flex2 justify-content-between">
									<div class="flex2col1">
										<h5><a href="{{ MyAPI::getUrlTermID(18) }}">Viêm quy đầu</a></h5>
										<h5><a href="{{ MyAPI::getUrlTermID(19) }}">Viêm bàng quang</a></h5>
									</div>
									<div class="flex2col1">
										<h5><a href="{{ MyAPI::getUrlTermID(20) }}">Viêm niệu đạo</a></h5>
										<h5><a href="{{ MyAPI::getUrlTermID(21) }}">Viêm tinh hoàn</a></h5>
									</div>
								</div>
							</div>
							<div>
								<h4 class="bg bg5">Vô sinh nam</h4>
								<div class="flex flex2 justify-content-between">
									<div class="flex2col1">
										<h5><a href="{{ MyAPI::getUrlTermID(23) }}">Tinh trùng ít</a></h5>
										<h5><a href="{{ MyAPI::getUrlTermID(24) }}">Xuất tinh ra máu</a></h5>
									</div>
									<div class="flex2col1">
										<h5><a href="{{ MyAPI::getUrlTermID(25) }}">Vô tinh</a></h5>
										<h5><a href="{{ MyAPI::getUrlTermID(26) }}">Tinh trùng yếu</a></h5>
									</div>
								</div>
							</div>
							<div>
								<h4 class="bg bg6">Bệnh xã hội</h4>
								<div class="flex flex2 justify-content-between">
									<div class="flex2col1">
										<h5><a href="{{ MyAPI::getUrlTermID(28) }}">Sùi mào gà</a></h5>
										<h5><a href="{{ MyAPI::getUrlTermID(29) }}">Giang mai</a></h5>
									</div>
									<div class="flex2col1">
										<h5><a href="{{ MyAPI::getUrlTermID(30) }}">Bệnh lậu</a></h5>
										<h5><a href="{{ MyAPI::getUrlTermID(31) }}">Mụn rộp sinh dục</a></h5>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="flex1col1 flex align-items-center justify-content-center">
					<div><h3><a href="{{ url('/') }}" class="text-container-center hvr-underline-reveal">Trang chủ</a></h3></div>
				</div>
				<div class="flex1col1 flex align-items-center justify-content-center">
					<div><h3><a href="{{ url('ve-chung-toi') }}" class="text-container-center hvr-underline-reveal">Giới thiệu<br>phòng khám</a></h3>
					</div>
				</div>
				<div class="flex1col1 flex align-items-center justify-content-center">
					<div><h3><a href="{{ MyAPI::getUrlTermID(32) }}" class="text-container-center hvr-underline-reveal" >Kỹ thuật<br>điều trị</a></h3></div>
				</div>
				<div class="flex1col1 flex align-items-center justify-content-center">
					<div><h3><a href="{{ MyAPI::getUrlTermID(33) }}" class="text-container-center hvr-underline-reveal">Thiết bị<br>tiên tiến</a></h3></div>
				</div>
				<div class="flex1col1 flex align-items-center justify-content-center">
					<div><h3><a href="{{ MyAPI::getUrlTermID(34) }}" class="text-container-center hvr-underline-reveal">Bệnh án<br>điển hình</a></h3></div>
				</div>
				<div class="flex1col1 flex align-items-center justify-content-center">
					<div><h3><a href="{{ url('/dia-chi-phong-kham') }}" class="text-container-center hvr-underline-reveal">Địa chỉ <br>phòng khám</a></h3></div>
				</div>
			</div>
		</div>
	</menu>
	@yield('content')
	<footer>
		<div class="container">
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1">
					<h3><a href="{{ url('/') }}"><img alt="" src="{{ asset('public/images/desktop/logo-footer.png') }}" class="center-block"></a></h3>
					<h3 class="text-center text-uppercase"><a href="">Phòng khám chuyên khoa Nam Khang</a></h3>
					<p><a href="{{ url('/dia-chi-phong-kham') }}"><address>Số 193c1 Bà Triệu, Hai Bà Trưng, Hà Nội</address></a></p>
				</div>
				<div class="flex1col2">
					<p>Thời gian làm việc của phòng khám</p>
					<p>( 8:00 -20:00) bao gồm cả ngày lễ tết </p>
					<p>Điện thoại liên hệ :</p>
					<p><a href="tel:1800 - 6181">1800 - 6181</a></p>
					<p><a href="tel:0243-9656999">0243-9656999</a></p>
				</div>
				<div class="flex1col3">
					<h4 class="text-center text-uppercase">Phòng khám của nam giới</h4>
					<h4 class="text-center text-uppercase">Nam Khang - Hà Nội - Việt Nam</h4>
				</div>
			</div>
		</div>
	</footer>
	<script language="javascript" src="http://swt.phongkham193.com/JS/LsJS.aspx?siteid=MFI63108226&float=1&lng=en"></script>
	@include('popup.desktopPopup1')
</body>
</html>
