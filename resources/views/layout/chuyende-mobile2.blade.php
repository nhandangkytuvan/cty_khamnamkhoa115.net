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
    <meta name="author" content="{{ $setting->web_name }}">
    <!-- csrf -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- facebook -->
    <meta property="og:site_name" content="Phòng Khám Nam Khang" />
	<meta property="og:type" content="article" />
    <meta property="og:locale " content="vi_VN">
    <!-- link rss,sitemap -->
    
    <!-- link icon -->
    <link rel="shortcut icon" href="{{ asset('public/img/'.$setting->web_icon) }}" type="image/x-icon">
    @yield('title')
    @yield('keyword')
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/glyphicon-bootstrap/glyphicon-bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/font-awesome/css/font-awesome.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/slick/slick.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/slick/slick-theme.css') }}">

	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/mobile/mobile.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/chuyende/mobile/mobile-header.css') }}">
	<link rel="stylesheet" href="{{ asset('public/css/chuyende/mobile/bootstrap.css') }}">
	@yield('css')
	<!-- <link rel="stylesheet" href="{{ asset('public/css/chuyende/mobile/mobile-viem-nhiem-quy-dau-mediaqueries.css') }}"> -->
	<script type="text/javascript" src="{{ asset('public/js/global/jquery-1.12.3.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/jquery.form.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/jquery.popupoverlay.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/jquery-scrolltofixed-min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/slick/slick.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/mobile/mobile.js') }}"></script>
	@yield('js')
</head>
<body>
	<header>
		<div class="container">
			<div class="dis-table width-100">
				<div class="table-cell">
					<div>
						<a href="{{ url('/') }}" title="phòng khám chuyên khoa nam khang">
							@if(url()->current()==url('chuyen-de/sui-mao-ga'))
								<img src="{{ asset('public/images/chuyende/mobile/suimaoga/suimaoga-2.png') }}" class="center-block">
							@else
								<img src="{{ asset('public/images/mobile2/logo.png') }}" class="center-block">
							@endif
						</a>
					</div>
				</div>
				<div class="table-cell">
					@if(Request::url()==url('/'))
					<h1 class="text-uppercase">phòng khám chuyên khoa nam khang</h1>
					@else
					<div class="h3 text-uppercase">phòng khám chuyên khoa nam khang</div>
					@endif
					<div class="web-address text-uppercase">số 193C1 bà triệu - hai bà trưng - hà nội</div>
				</div>
				<div class="table-cell">
					@if(url()->current()==url('chuyen-de/sui-mao-ga'))
						<img src="{{ asset('public/images/chuyende/mobile/suimaoga/suimaoga-3.png') }}" alt="doc">
					@else
						<img src="{{ asset('public/images/mobile/header-1.png') }}" alt="doc">
					@endif
				</div>
				<div class="table-cell">
					<span class="text-uppercase">Chuyên khoa<br>bệnh xã hội</span>
				</div>
			</div>
		</div>
	</header>
	<menu class="container">
		<div class="dis-table width-100">
			<a class="table-cell text-center text-uppercase" href="{{ url('/') }}" title="Trang chủ">
				<span>Trang chủ</span>
			</a>
			<a class="table-cell text-center text-uppercase" href="{{ url('ve-chung-toi') }}" title="Giới thiệu phòng khám">
				Giới thiệu<br>phòng khám
			</a>
			<a class="table-cell text-center text-uppercase" href="#" title="Đội ngũ chuyên gia">
				Đội ngũ<br>chuyên gia
			</a>
			<a class="table-cell text-center text-uppercase" href="{{ url('dia-chi-phong-kham') }}" title="Địa chỉ phòng khám">
				Địa chỉ<br>phòng khám
			</a>
		</div>
	</menu>
	<div class="banner container">
		<div class="slick-home">
			<div>
				<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
					@yield('banner')
				</a>
			</div>
		</div>
		<script>
			$('.slick-home').slick({
				autoplay: true,
				autoplaySpeed: 4000,
			});
		</script>
	</div>
	@yield('content')	
	<footer>
		<div class="container">
			<p>Điện thoại tư vấn đặt hẹn: <a href="tel:18006181">1800 6181</a> - <a href="tel:0439.656.999">0439.656.999</a></p>
			<p>Thời gian mở cửa: <a href="tel:18006181">8:00 - 20:00</a></p>
			<p>Địa chỉ phòng khám: <a href="tel:18006181">193C1 BÀ TRIỆU – HAI BÀ TRƯNG – HÀ NỘI</a></p>
		</div>
		@yield('toolbar')	
	</footer>
	<div id="my_popup">
	    <p>Bác sỹ đang yêu cầu được chát với bạn</p>
	    <p class="dis-none">Sẽ nhanh hơn khi bạn trò chuyện với bác sĩ tư vấn</p>
	    <a class="my_popup_close btn-cancel">Từ chối</a>
	    <a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="btn-agree">Đồng ý</a>
	</div>
</body>
</html>