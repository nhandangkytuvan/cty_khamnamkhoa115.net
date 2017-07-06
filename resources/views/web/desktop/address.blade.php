@extends('layout.desktop3')
@section('title')
	<title>{{ $setting->web_name }}</title>
@endsection('title')
@section('keyword')
	@include('seo.seo_home')
@endsection('keyword')
@section('css')
	<link rel="stylesheet" href="{{ asset('public/css/desktop3/desktop-term.css') }}">
	<link rel="stylesheet" href="{{ asset('public/css/desktop3/desktop-address.css') }}">
@endsection('css')
@section('js')
<script type="text/javascript" src="{{ asset('public/js/global/MSClass.js') }}"></script>
@endsection('js')
@section('menu')
	@include('layouts.menuDesktop')
@endsection('menu')
@section('banner')
	@include('layouts.bannerDesktop')
@endsection('banner')
@section('content')
	<main class="container term address">
		<div class="flex justify-content-between">
			<div class="column-left">
				<div class="crub">
					<a href="{{ url('/') }}"><img src="{{ asset('public/css/desktop3/imgterm/term-1.png') }}" alt=""></a>
					<a href="{{ url('/') }}">Trang chủ</a>
					<span> > </span>
					<a href="#">Địa chỉ phòng khám</a>
				</div>
				<div class="lists">
					<h1 class="text-uppercase"><i></i> Địa chỉ phòng khám</h1>
					<div class="post-description">
					</div>
					<div class="post-detail">
						<h3>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.58029052751!2d105.84724954324604!3d21.00945489010672!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab8a5b96e8d5%3A0x8a65517cee98a0b0!2sPh%C3%B2ng+Kh%C3%A1m+Chuy%C3%AAn+Khoa+Nam+Khang!5e0!3m2!1svi!2s!4v1490176160826" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
							<p></p>
						</h3>
						<h2>
							Các bạn thân mến, để thuận tiện hơn cho việc tìm đường đến khám bệnh, chúng tôi hướng dẫn chỉ đường đến phòng khám cho bạn!
						</h2>
						<div class="address-bus">
							<h4>
								<img src="{{ asset('public/images/desktop/icon-10.jpg') }}" alt=""> 
								Đi xe bus nào đến phòng khám? <a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Bấm vào tư vấn >></a>
							</h4>
							<h3>Tuyến xe</h3>
							<table class="width-100">
								<tr>
									<td>Tuyến 08: </td>
									<td>
										Yên Phụ-Long Biên- Bà Triệu-Bạch Mai- Đại La- Giải Phóng- Giáp Bát- Quốc Lộ 1- Ngũ Hiệp- Đông Mỹ
									</td>
								</tr>
								<tr>
									<td>Tuyến 23: </td>
									<td>
										Nguyễn Công Trứ- Phố Huế- Bà Triệu- Phương Mai- La Thành- Giảng Võ- Nguyễn Thái Học- Long Biên- Ngô Thì Nhậm- Nguyễn Công Trứ
									</td>
								</tr>
								<tr>
									<td>Tuyến 31: </td>
									<td>
										ĐH Mỏ- Phú Thượng- Bà Triệu- Bách Khoa
									</td>
								</tr>
								<tr>
									<td>Tuyến 35: </td>
									<td>
										Trần Khánh Dư- Phạm Ngọc Thạch- Nguyễn Chí Thanh- Phạm Hùng- Nam Thăng Long
									</td>
								</tr>
								<tr>
									<td>Tuyến 36: </td>
									<td>
										Yên Phụ- Triệu Quốc Đạt- Bà Triệu- Bạch Mai- Trương Định- Giải Phóng- KĐT Linh Đàm
									</td>
								</tr>
								<tr>
									<td>Tuyến 38: </td>
									<td>
										BĐX Nam Thăng Long- ĐTC Cầu Giấy- Kim Mã- Lê Duẩn- Bạch Mai- Minh Khai- Tam Trinh- Mai Động
									</td>
								</tr>
								<tr>
									<td>Tuyến 52: </td>
									<td>
										CV Thống Nhất- Đại Cồ Việt- Minh Khai- Nguyễn Văn Linh- Lệ Chi
									</td>
								</tr>
								<tr>
									<td>Tuyến 52: </td>
									<td>
										CV Thống Nhất- Bà Triệu- Bạch Mai- Minh Khai- Thạch Bàn- KĐT Ecopark- Đường 179- Ỷ Lan- Đặng Xá (Gia Lâm).
									</td>
								</tr>
							</table>
							<h5>Đến Vincom Bà Triệu xuống xe, đi thẳng 50m là đến nơi.</h5>
						</div>
						<div class="address-bus address-taxi">
							<h4>
								<img src="{{ asset('public/images/desktop/icon-11.jpg') }}" alt=""> 
								Làm thế nào để đi taxi hoặc tự lái xe đến phòng khám.Cung cấp chỗ đỗ xe miễn phí.? 
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Bấm vào tư vấn >></a>
							</h4>
							<h3>Đi taxi hoặc tự lái xe</h3>
							<p>Hãy trực tiếp đến 193C1 Bà Triệu- Quận Hai Bà Trưng- Hà Nội, nếu như không biết đường, có thể gọi đến điện thoại tư vấn 1800-6181 để hỏi, phòng khám có chỗ đỗ xe miễn phí, thuận tiện cho bạn đỗ xe.</p>
						</div>
					</div>
				</div>
				<div class="flex justify-content-between sixrec flex-wrap-wrap">
					<a class="" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
						<div class="dis-table">
							<span class="table-cell"><i class="bg1 dis-inline-block"></i></span>
							<span class="table-cell">Vì sao chọn khám nam<br>khoa tại Nam Khang</span>
						</div>
					</a>
					<a class="" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
						<div class="dis-table">
							<span class="table-cell"><i class="bg2 dis-inline-block"></i></span>
							<span class="table-cell">Vì sao chọn phẫu thuật<br>tại Nam Khang</span>
						</div>
					</a>
					<a class="" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
						<div class="dis-table">
							<span class="table-cell"><i class="bg3 dis-inline-block"></i></span>
							<span class="table-cell">Vì sao chọn liệu pháp<br>Nam Khang</span>
						</div>
					</a>
					<a class="" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
						<div class="dis-table">
							<span class="table-cell"><i class="bg4 dis-inline-block"></i></span>
							<span class="table-cell">Vì sao chọn chuyên gia<br>Nam Khang</span>
						</div>
					</a>
					<a class="" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
						<div class="dis-table">
							<span class="table-cell"><i class="bg5 dis-inline-block"></i></span>
							<span class="table-cell">Vì sao chọn dịch vụ<br>Nam Khang</span>
						</div>
					</a>
					<a class="" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
						<div class="dis-table">
							<span class="table-cell"><i class="bg6 dis-inline-block"></i></span>
							<span class="table-cell">Vì sao chọn tư vấn<br>Nam Khang</span>
						</div>
					</a>
				</div>
				<div class="flex justify-content-between threerec">
					<div href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="element1">
						<div class="pos-relative">
							<img src="{{ asset('public/css/desktop3/imgterm/term-3.png') }}" alt="">
							<div class="pos-absolute">
								<div class="name">Chuyên khoa Nam Khang, chúng tôi chỉ chuyên nam khoa</div>
								<div class="des">We are committed to focusing on the health of the people</div>
							</div>
						</div>
					</div>
					<div>
						<div class="pos-relative">
							<img src="{{ asset('public/css/desktop3/imgterm/term-5.png') }}" alt="">
							<div class="pos-absolute">
								<div class="name">Đơn giản hóa quy trình thăm khám<br>để bệnh nhân hồi phục nhanh chóng và yên tâm hơn</div>
								<div class="des">Simplify the patient process so that patients recover faster and more assured</div>
							</div>
						</div>
						<div class="pos-relative">
							<img src="{{ asset('public/css/desktop3/imgterm/term-6.png') }}" alt="">
							<div class="pos-absolute">
								<div class="name">Chăm sóc hậu phẫu cẩn thận<br>bệnh nhân sau khi xuất viện vẫn nhận được<br>dịch vụ chăm sóc sức khỏe hậu phẫu đúng lúc, kịp thời</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="column-right">
				@include('web.desktop.slidebar3')
			</div>
		</div>
	</main>
@endsection('content')