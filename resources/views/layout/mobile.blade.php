<!DOCTYPE html>
<html>
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
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/glyphicon-bootstrap/glyphicon-bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/font-awesome/css/font-awesome.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/slick/slick.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/slick/slick-theme.css') }}">

	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/mobile/mobile.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/mobile/mobile-header.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/mobile/mobile-footer.css') }}">
	@yield('css')
	<script type="text/javascript" src="{{ asset('public/js/global/jquery-1.12.3.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/jquery.popupoverlay.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/jquery.form.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/jquery-scrolltofixed-min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/slick/slick.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/shake.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/mobile/mobile.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/chuyende/swt_div.js') }}"></script>
	@yield('js')
</head>
<body>
	<div id="my-header">
		<div class="container">
			<a href="tel:18006181">
				<img src="{{ asset('public/images/chuyende/mobile/daibaoquydau/gif.gif') }}" alt="" class="img-responsive center-block">
			</a>
		</div>
	</div>
	<script>
		$(document).ready(function() {
		  	$('#my-header').scrollToFixed();
		});
	</script>
	<header>
		<div class="container">
			<div class="dis-table width-100">
				<div class="table-cell cell1">
					<div class="">
						<h2><a href="{{ url('/') }}"><img src="{{ asset('public/images/mobile/logo.png') }}" class="center-block"></a></h2>
					</div>
				</div>
				<div class="table-cell cell2">
					<div class="">
						<div class="box-center">
							@if(Request::url()==url('/'))
							<h1 class="text-uppercase">phòng khám chuyên khoa nam khang</h1>
							@else
							<h3 class="text-uppercase">phòng khám chuyên khoa nam khang</h3>
							@endif
							<h4 class="text-uppercase">số 193C1 bà triệu - hai bà trưng - hà nội</h4>
						</div>
					</div>
				</div>
				<div class="table-cell cell3">
					<div class="">
						<h5>
							<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
								<img src="{{ asset('public/images/mobile/icon-0.png') }}" class="center-block img-responsive">
							</a>
						</h5>
					</div>
				</div>
				<div class="table-cell cell4">
					<div class="">
						<div class="">
							<h6><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Bác sĩ đang trực tuyến</a></h5>
							<h5><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="text-uppercase">Tư vấn ngay</a></h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div class="banner container">
		<div class="slick-home">
			@yield('banner')
		</div>
		<script>
			$('.slick-home').slick({
				autoplay: true,
				autoplaySpeed: 5000,
			});
		</script>
	</div>
	@yield('content')	
	<footer>
		<div class="container">
			<p>Điện thoại tư vấn đặt hẹn: <a href="tel:18006181">1800 6181</a> - <a href="tel:02439.656.999">02439.656.999</a></p>
			<p>Thời gian mở cửa: <a href="tel:18006181">8:00 - 20:00</a></p>
			<p>Địa chỉ phòng khám: <a href="tel:18006181">193C1 BÀ TRIỆU – HAI BÀ TRƯNG – HÀ NỘI</a></p>
		</div>
		@yield('toolbar')	
	</footer>
	<script language="javascript" src="http://swt.phongkham193.com/JS/LsJS.aspx?siteid=MFI63108226&float=1&lng=en"></script>
	@include('popup.mypopup0')
	<img src="{{ asset('public/images/mobile/shake.gif') }}" alt="" style="position: fixed; top: 15%;right: 0px;z-index: 999;width:55px;">
</body>
</html>