@extends('layout.desktop2')
@section('title')
	<title>{{ $setting->web_name }}</title>
@endsection('title')
@section('keyword')
	@include('seo.seo_home')
@endsection('keyword')
@section('css')
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/hover/css/hover.css') }}">
	<link rel="stylesheet" href="{{ asset('public/css/desktop2/desktop-home.css') }}">
@endsection('css')
@section('content')
	<div class="baner">
		<div class="slick-home">
			<div><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><img src="{{ asset('public/images/desktop/addslide2.png') }}" alt="" class="center-block"></a></div>
			<div><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><img src="{{ asset('public/images/desktop/addslide3.png') }}" alt="" class="center-block"></a></div>
			<div><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><img src="{{ asset('public/images/desktop/addslide4.png') }}" alt="" class="center-block"></a></div>
		</div>
		<script>
			$('.slick-home').slick({
			  	slidesToShow: 1,
			  	slidesToScroll: 1,
			  	autoplay: true,
			  	autoplaySpeed: 2000,
			});	
		</script>
	</div>
	<main class="home">
		<div class="row1">
			<div class="container">
				<div class="items">
					<div class="item active">
						<div class="dis-table table1">
							<div class="table-cell cell1 bg1">
								<a href="#">Tuyến tiền liệt</a>
							</div>
							<div class="table-cell cell2">
								<table class="width-100">
									<tr>
										<td class="text-left"><a href="{{ MyAPI::getUrlTermID(3) }}"><i class="fa fa-circle"></i> Viêm tuyến tiền liệt</a></td>
									</tr>
									<tr>
										<td class="text-left"><a href="{{ MyAPI::getUrlTermID(6) }}"><i class="fa fa-circle"></i> Phì đại tuyến tiền liệt</a></td>
									</tr>
									<tr>
										<td class="text-left"><a href="{{ MyAPI::getUrlTermID(4) }}"><i class="fa fa-circle"></i> U nang tuyến tiền liệt</a></td>
									</tr>
										<td class="text-left"><a href="{{ MyAPI::getUrlTermID(5) }}"><i class="fa fa-circle"></i> Tăng sinh tuyến tiền liệt</a></td>
									</tr>
								</table>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="dis-table table1">
							<div class="table-cell cell1 bg2">
								<a href="#">Rối loạn chức<br>năng sinh dục</a>
							</div>
							<div class="table-cell cell2">
								<table class="width-100">
									<tr>
										<td class="text-left"><a href="{{ MyAPI::getUrlTermID(8) }}"><i class="fa fa-circle"></i> Liệt dương</a></td>
									</tr>
									<tr>
										<td class="text-left"><a href="{{ MyAPI::getUrlTermID(9) }}"><i class="fa fa-circle"></i> Rối loạn cương dương</a></td>
									</tr>
									<tr>
										<td class="text-left"><a href="{{ MyAPI::getUrlTermID(10) }}"><i class="fa fa-circle"></i> Xuất tinh sớm</a></td>
									</tr>
										<td class="text-left"><a href="{{ MyAPI::getUrlTermID(35) }}"><i class="fa fa-circle"></i> Yếu sinh lý</a></td>
									</tr>
								</table>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="dis-table table1">
							<div class="table-cell cell1 bg3">
								<a href="#">Chỉnh hình cơ<br>quan sinh dục</a>
							</div>
							<div class="table-cell cell2">
								<table class="width-100">
									<tr>
										<td class="text-left"><a href="{{ MyAPI::getUrlTermID(13) }}"><i class="fa fa-circle"></i> Dài bao quy đầu</a></td>
									</tr>
									<tr>
										<td class="text-left"><a href="{{ MyAPI::getUrlTermID(14) }}"><i class="fa fa-circle"></i> Kéo dài dương vật</a></td>
									</tr>
									<tr>
										<td class="text-left"><a href="{{ MyAPI::getUrlTermID(15) }}"><i class="fa fa-circle"></i> Thủ thuật hẹp bao quy đầu</a></td>
									</tr>
										<td class="text-left"><a href="{{ MyAPI::getUrlTermID(16) }}"><i class="fa fa-circle"></i> Tăng kích thước dương vật</a></td>
									</tr>
								</table>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="dis-table table1">
							<div class="table-cell cell1 bg4">
								<a href="#">Viêm nhiễm hệ<br>thống sinh dục</a>
							</div>
							<div class="table-cell cell2">
								<table class="width-100">
									<tr>
										<td class="text-left"><a href="{{ MyAPI::getUrlTermID(18) }}"><i class="fa fa-circle"></i> Viêm quy đầu</a></td>
									</tr>
									<tr>
										<td class="text-left"><a href="{{ MyAPI::getUrlTermID(19) }}"><i class="fa fa-circle"></i> Viêm bàng quang</a></td>
									</tr>
									<tr>
										<td class="text-left"><a href="{{ MyAPI::getUrlTermID(20) }}"><i class="fa fa-circle"></i> Viêm niệu đạo</a></td>
									</tr>
										<td class="text-left"><a href="{{ MyAPI::getUrlTermID(21) }}"><i class="fa fa-circle"></i> Viêm tinh hoàn</a></td>
									</tr>
								</table>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="dis-table table1">
							<div class="table-cell cell1 bg5">
								<a href="#">Vô sinh nam</a>
							</div>
							<div class="table-cell cell2">
								<table class="width-100">
									<tr>
										<td class="text-left"><a href="{{ MyAPI::getUrlTermID(23) }}"><i class="fa fa-circle"></i> Tinh trùng ít</a></td>
									</tr>
									<tr>
										<td class="text-left"><a href="{{ MyAPI::getUrlTermID(24) }}"><i class="fa fa-circle"></i> Xuất tinh ra máu</a></td>
									</tr>
									<tr>
										<td class="text-left"><a href="{{ MyAPI::getUrlTermID(25) }}"><i class="fa fa-circle"></i> Vô tinh</a></td>
									</tr>
										<td class="text-left"><a href="{{ MyAPI::getUrlTermID(26) }}"><i class="fa fa-circle"></i> Tinh trùng yếu</a></td>
									</tr>
								</table>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="dis-table table1">
							<div class="table-cell cell1 bg6">
								<a href="#">Bệnh xã hội</a>
							</div>
							<div class="table-cell cell2">
								<table class="width-100">
									<tr>
										<td class="text-left"><a href="{{ MyAPI::getUrlTermID(28) }}"><i class="fa fa-circle"></i> Sùi mào gà</a></td>
									</tr>
									<tr>
										<td class="text-left"><a href="{{ MyAPI::getUrlTermID(29) }}"><i class="fa fa-circle"></i> Giang mai</a></td>
									</tr>
									<tr>
										<td class="text-left"><a href="{{ MyAPI::getUrlTermID(30) }}"><i class="fa fa-circle"></i> Bệnh lậu</a></td>
									</tr>
										<td class="text-left"><a href="{{ MyAPI::getUrlTermID(31) }}"><i class="fa fa-circle"></i> Mụn rộp sinh dục</a></td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row2">
			<div class="container">
				<div class="flex flex1 justify-content-between">
					<div class="flex1col1">
						<div class="text-center line1">
							<span>Về chúng tôi</span>
							<span>/</span>
							<span>ABOUT US</span>
						</div>
						<div class="line2 text-justify">
							Phòng khám Nam Khang Hà Nội là cơ sở y tế chuyên điều trị nam khoa hiếm có ở khu vực Hà Nội, phòng khám đạt tiêu chuẩn y tế JCI quốc tế, hội tụ đội ngũ chuyên gia cao cấp trong và ngoài nước, dịch vụ chất lượng cao, môi trường khám chữa bệnh ấm cúng đạt chất lượng 5 sao, vượt qua mô hình truyền thống của ngành y tế Hà Nội, mở ra thời đại mới về khám điều trị bệnh nam khoa đỉnh cao tại Hà Nội, kết hợp với dịch vụ đặc biệt chuyên khoa, chuyên bệnh, chuyên trị, xây dựng thương hiệu chuyên nghiệp về nam khoa trên toàn quốc.
						</div>
						<div class="line3 text-center">
							<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="dis-inline-block text-center hvr-float-shadow">Xem chi tiết</a>
						</div>
					</div>
					<div class="flex1col2">
						<div class="img">
							<img src="{{ asset('public/images/desktop2/home-10.png') }}" alt="" class="center-block">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row3">
			<div class="container">
				<div class="line1">
					<span><img src="{{ asset('public/images/desktop2/home-12.png') }}" alt=""></span>
					<span class="text-uppercase">MÔI TRƯỜNG PHÒNG KHÁM</span>
					<span class="text-uppercase">/</span>
					<span class="text-uppercase">CLINIC ENVIRONMENT</span>
				</div>
				<div class="line2">
					<div class="flex flex1 justify-content-between">
						<div class="flex1col1">
							<div class="img hvr-rotate">
								<img src="{{ asset('public/images/desktop2/home-13.png') }}" alt="" class="center-block">
							</div>
							<h3 class="text-center text-uppercase">Quầy lễ tân</h3>
						</div>
						<div class="flex1col1">
							<div class="img hvr-rotate">
								<img src="{{ asset('public/images/desktop2/home-14.png') }}" alt="" class="center-block">
							</div>
							<h3 class="text-center text-uppercase">Phòng khám bệnh</h3>
						</div>
						<div class="flex1col1">
							<div class="img hvr-rotate">
								<img src="{{ asset('public/images/desktop2/home-15.png') }}" alt="" class="center-block">
							</div>
							<h3 class="text-center text-uppercase">Phòng truyền</h3>
						</div>
						<div class="flex1col1">
							<div class="img hvr-rotate">
								<img src="{{ asset('public/images/desktop2/home-16.png') }}" alt="" class="center-block">
							</div>
							<h3 class="text-center text-uppercase">Phòng thủ thuật</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row4">
			<div class="container">
				<div class="line1">
					<span><img src="{{ asset('public/images/desktop2/home-23.png') }}" alt=""></span>
					<span>DANH MỤC BỆNH</span>
					<span>/</span>
					<span>DISEASES</span>
				</div>
				<div class="line2">
					<div class="groups-btn">
						<div class="flex flex1 justify-content-between">
							<div class="flex1col1">
								<button class="active"><i class="fa fa-caret-right" aria-hidden="true"></i> Bệnh lây truyền qua<br>đường tình dục</button>
							</div>
							<div class="flex1col1">
								<button><i class="fa fa-caret-right" aria-hidden="true"></i> Rối loạn chức năng<br>sinh dục</button>
							</div>
							<div class="flex1col1">
								<button><i class="fa fa-caret-right" aria-hidden="true"></i> Bệnh về tuyến<br>tiền liệt</button>
							</div>
							<div class="flex1col1">
								<button><i class="fa fa-caret-right" aria-hidden="true"></i> Viêm nhiễm sinh dục</button>
							</div>
							<div class="flex1col1">
								<button><i class="fa fa-caret-right" aria-hidden="true"></i> Vô sinh nam</button>
							</div>
							<div class="flex1col1">
								<button><i class="fa fa-caret-right" aria-hidden="true"></i> Chỉnh hình bộ phận<br>sinh dục</button>
							</div>
						</div>
					</div>
					<div class="tabs-contents">
						<div class="flex1 flex justify-content-between">
							<div class="flex1col1">
								<div class="active">
									<img src="{{ asset('public/images/desktop2/home-18.png') }}" alt="" class="center-block">
								</div>
								<div>
									<img src="{{ asset('public/images/desktop2/home-17.png') }}" alt="" class="center-block">
								</div>
								<div>
									<img src="{{ asset('public/images/desktop2/home-20.png') }}" alt="" class="center-block">
								</div>
								<div>
									<img src="{{ asset('public/images/desktop2/home-19.png') }}" alt="" class="center-block">
								</div>
								<div>
									<img src="{{ asset('public/images/desktop2/home-21.png') }}" alt="" class="center-block">
								</div>
								<div>
									<img src="{{ asset('public/images/desktop2/home-22.png') }}" alt="" class="center-block">
								</div>
							</div>
							<div class="flex1col2">
								<div class="active">
									<div class="flex flex-wrap-wrap align-content-between">
										<p class="text-justify">
											Bệnh lây truyền qua đường tình dục là một trong những bệnh điều trị trọng điểm của phòng khám chúng tôi, kết hợp chặt chẽ giữa nghiên cứu khoa học lâm sàng và nghiên cứu giảng dạy, nhập thiết bị y tế và kĩ thuật điều trị tiên tiến trong và ngoài nước, như máy xét nghiệm sinh hóa tự động Abbott Hoa Kỳ, hệ thống kiểm tra DNA vi sinh vật, máy huỳnh quang hóa học miễn dịch, máy ELISA, hình thành mô hình khám chữa bệnh cột sống bằng điều trị xâm lấn tối thiểu đặc biệt, hội tụ nhiều chuyên gia về bệnh lây truyền qua đường tình dục trong và ngoài nước, mang đến cho bệnh nhân dịch vụ hiện đại hóa, chuyên nghiệp hóa, nhân văn hóa.
										</p>
										<div>
											<p>Mở rộng hạng mục điều trị:
												<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Sùi mào gà</a>,
												<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">lậu</a>,
												<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">giang mai</a>,
												<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">mụn rộp sinh dục</a>
											</p>
										</div>
										<div>
											<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="dis-inline-block hvr-float-shadow">Tư vấn trực tuyến</a>
										</div>
									</div>
								</div>
								<div class="">
									<div class="flex flex-wrap-wrap align-content-between">
										<p class="text-justify">
											Trung tâm chẩn đoán điều trị rối loạn chức năng sinh dục của Phòng khám Nam Khang Hà Nội chuyên điều trị các bệnh thường gặp như liệt dương, xuất tinh sớm, rối loạn chức năng cương dương và các bệnh thường gặp khác. Thiết bị kiểm tra chính xác, kĩ thuật điều trị và dịch vụ y tế ưu việt giúp cho nhiều bệnh nhân trong và ngoại tỉnh loại bỏ được những đau đớn do bệnh tật nhiều năm gây ra. Sử dụng kĩ thuật điều trị tiên tiến quốc tế, đồng thời tiến hành khám và điều trị, rút ngắn thời gian điều trị, nâng cao hiệu suất khám và điều trị, hiệu quả nhanh, độ an toàn cao, hiệu quả điều trị tốt và các ưu thế khác.
										</p>
										<div>
											<p>Mở rộng hạng mục điều trị: 
												<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Xuất tinh sớm</a>,
												<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">liệt dương</a>,
												<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">rối loạn cương dương</a>,
												<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">di tinh</a>
											</p>
										</div>
										<div>
											<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="dis-inline-block hvr-float-shadow">Tư vấn trực tuyến</a>
										</div>
									</div>
								</div>
								<div class="">
									<div class="flex flex-wrap-wrap align-content-between">
										<p class="text-justify">
											Khoa tuyến tiền liệt chủ yếu điều trị các chứng nan y về tuyến tiền liệt như viêm tuyến tiền liệt, u nang tuyến tiền liệt…Sử dụng kĩ thuật đặc biệt kĩ thuật làm tan can thiệp tuyến tiền liệt, kĩ thuật này chủ yếu dùng điều trị các bệnh về tuyến tiền liệt như viêm tuyến tiền liệt cấp- mãn tính, tăng sinh tuyến tiền liệt, đau tuyến tiền liệt, phì đại tuyến tiền liệt, u nang tuyến tiền liệt…Căn cứ vào số liệu lâm sàng năm 2004 cho thấy: 20 triệu bệnh nhân mắc bệnh về tuyến tiền liệt sau khi được điều trị bằng liệu pháp làm tan can thiệp tuyến tiền liệt đã có 18,51 triệu bệnh nhân hồi phục và không tái phát.
										</p>
										<div>
											<p>Mở rộng hạng mục điều trị: 
												<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Viêm tuyến tiền liệt</a>, 
												<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">u nang tuyến tiền liệt</a>,
												<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">tăng sinh tuyến tiền liệt</a>,
												<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">đau tuyến tiền liệt</a>,
												<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">vôi hóa tuyến tiền liệt</a>
											</p>
										</div>
										<div>
											<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="dis-inline-block hvr-float-shadow" style="margin-top: 25px;">Tư vấn trực tuyến</a>
										</div>
									</div>
								</div>
								<div class="">
									<div class="flex flex-wrap-wrap align-content-between">
										<p class="text-justify">
											Để nâng cao hiệu quả điều trị và tỷ lệ hồi phục trong điều trị các bệnh viêm nhiễm sinh dục nam giới, phòng khám Nam Khang Hà Nội đã sử dụng hệ thống sóng siêu dẫn CRS, nghiên cứu nâng cấp lên thành “kĩ thuật miễn dịch nhiễm trùng đường niệu CRS”. Kĩ thuật này sử dụng sóng đa dẫn được sinh ra từ hệ thống sóng siêu dẫn nhiễm trùng đường niệu, sóng đa dẫn là tổ hợp hữu cơ sóng viba, hình thành chùm photon mạnh, từ đó tập trung tác dụng tại bề mặt và bên trong tổ chức bệnh, tiêu viêm diệt khuẩn. Có thể đạt được hiệu quả điều trị các chứng viêm nhiễm sinh dục nam giới.
										</p>
										<div>
											<p>Mở rộng hạng mục điều trị: 
												<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Viêm niệu đạo</a>, 
												<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">viêm túi tinh</a>,
												<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">viêm tinh hoàn</a>,
												<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">viêm quy đầu</a>
											</p>
										</div>
										<div>
											<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="dis-inline-block hvr-float-shadow">Tư vấn trực tuyến</a>
										</div>
									</div>
								</div>
								<div class="">
									<div class="flex flex-wrap-wrap align-content-between">
										<p class="text-justify">
											Vô sinh nam là một trong những hạng mục điều trị trọng điểm của phòng khám Nam Khang Hà Nội, chủ yếu điều trị các bệnh về tinh trùng như chết tinh trùng, ít tinh trùng, yếu tinh trùng….. Các phòng ban hội tụ đội ngũ chuyên gia và đội ngũ y tá về bệnh vô sinh nam trong và ngoài nước, có hơn 10 năm kinh nghiệm lâm sàng, sử dụng liệu pháp khám và điều trị bệnh khoa học, cá thể hóa, với cơ sở nghiên cứu lâm sàng nhiều năm đã xây dựng “liệu pháp đa chiều 4 trong 1”, mang lại niềm vui có con cho nhiều gia đình bệnh nhân mắc vô sinh, trở thành chuyên khoa chữa vô sinh nổi tiếng.
										</p>
										<div>
											<p>Mở rộng hạng mục điều trị: 
												<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Chết tinh trùng</a>, 
												<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">ít tinh trùng</a>,
												<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">yếu tinh trùng</a>,
												<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">vô tinh</a>
											</p>
										</div>
										<div>
											<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="dis-inline-block hvr-float-shadow">Tư vấn trực tuyến</a>
										</div>
									</div>
								</div>
								<div class="">
									<div class="flex flex-wrap-wrap align-content-between">
										<p class="text-justify">
											Chỉnh hình bộ phận sinh dục là hạng mục điều trị đặc biệt của phòng khám Nam Khang Hà Nội, chủ yếu điều trị cắt bao quy đầu, tăng kích thước, kéo dài dương vật. Đưa vào sử sụng các kĩ thuật tiên tiến trên thế giới như “thủ thuật cắt bao quy đầu xâm lấn tối thiểu Hàn Quốc”, “kĩ thuật kéo dài dương vật định vị CF”….Phòng khám kế thừa tôn chỉ “tất cả vì bệnh nhân”, lấy “an toàn trong khám và điều trị” làm mục đích, có các chuyên gia trong và ngoài nước trực tiếp thăm khám điều trị, mang đến cho bệnh nhân muốn tiến hành chỉnh hình bộ phận sinh dục dịch vụ khám và điều trị chất lượng cao.
										</p>
										<div>
											<p>Mở rộng hạng mục điều trị: 
												<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Dài bao quy đầu</a>, 
												<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">hẹp bao quy đầu</a>,
												<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">tăng độ dài</a>,
												<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">kích thước dương vật</a>
											</p>
										</div>
										<div>
											<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="dis-inline-block hvr-float-shadow">Tư vấn trực tuyến</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row5">
			<div class="container">
				<div class="line1">
					<span><img src="{{ asset('public/images/desktop2/home-25.png') }}" alt=""></span>
					<span>ƯU THẾ CỦA CHÚNG TÔI</span>
					<span>/</span>
					<span>ADVANTAGES</span>
				</div>
				<div class="line2">
					<div class="flex flex1 justify-content-between">
						<div class="flex1col1">
							<h3 class="title text-center">
								Đội ngũ chuyên gia nam khoa, tiên phong<br> 
								về các bệnh nam khoa trên toàn quốc
							</h3>
							<p class="des text-justify">
								Khám bệnh phải tìm chuyên gia là quan điểm phổ biến của người dân. Khám bệnh nam khoa càng cần các chuyên gia có y thuật cao minh, kinh nghiệm lâm sàng phong phú. Phòng khám Nam Khang Hà Nội đã kiểm tra nghiêm trình độ chuyên môn của các chuyên gia ra nhập đội ngũ bác sỹ, tại đây hội tụ những chuyên gia lâu năm nổi tiếng trong và ngoài nước, kiên trì sử dụng kĩ thuật khám và điều trị trình độ cao phục vụ cho đông đảo bệnh nhân nam giới…<a href="#">Chi tiết</a>
							</p>
							<div class="flex flex2 justify-content-between">
								<div class="flex2col1">
									<div class="text-center"><i class="dis-inline-block bg bg1"></i></div>
									<h4 class="text-center">
										Kinh nghiệm lâm <br>sàng phong phú
									</h4>
								</div>
								<div class="flex2col1">
									<div class="text-center"><i class="dis-inline-block bg bg2"></i></div>
									<h4 class="text-center">
										Nguồn lực kĩ thuật<br>chuyên nghiệp
									</h4>
								</div>
								<div class="flex2col1">
									<div class="text-center"><i class="dis-inline-block bg bg3"></i></div>
									<h4 class="text-center">
										Thành tựu cá nhân<br>xuất sắc
									</h4>
								</div>
							</div>
						</div>
						<div class="flex1col2">
							<div class="img">
								<img src="{{ asset('public/images/desktop2/home-26.png') }}" alt="" class="center-block">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row6">
			<div class="container">
				<div class="line1">
					<span><img src="{{ asset('public/images/desktop2/home-27.png') }}" alt=""></span>
					<span>KỸ THUẬT NAM KHang</span>
					<span>/</span>
					<span>TECHNOLOGY</span>
				</div>
				<div class="line2">
					<div class="flex flex2 justify-content-between">
						<div class="flex2col1 active">
							<div class="">
								<div class="img1">
									<div>
										<a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en" 
											title="Điều trị xuất tinh sớm">
											<img src="{{ asset('public/images/desktop2/kt-5.png') }}" class="center-block" alt="Điều trị xuất tinh sớm">
										</a>
									</div>
								</div>
								<div class="img2" style="display: none;">
									<div><a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en" title="4 Đặc sắc lớn của kỹ thuật điều trị">
										<img src="{{ asset('public/images/desktop2/kt-9.png') }}" class="center-block" alt="4 Đặc sắc lớn của kỹ thuật điều trị"></a></div>
								</div>
							</div>
						</div>
						<div class="flex2col1">
							<div class="">
								<div class="img1">
									<div>
										<a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en" title="Điều trị sùi mào gà">
											<img src="{{ asset('public/images/desktop2/kt-6.png') }}" class="center-block" alt="Điều trị sùi mào gà">
										</a>
									</div>
								</div>
								<div class="img2" style="display: none;">
									<div>
										<a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en" title="Liệu pháp quang động IRA">
											<img src="{{ asset('public/images/desktop2/kt-10.png') }}" class="center-block" alt="Liệu pháp quang động IRA">
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="flex2col1">
							<div class="">
								<div class="img1">
									<div>
										<a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en" title="Điều trị yếu sinh lý">
											<img src="{{ asset('public/images/desktop2/kt-7.png') }}" class="center-block" alt="Điều trị yếu sinh lý">
										</a>
									</div>
								</div>
								<div class="img2" style="display: none;">
									<div>
										<a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en" title="Hệ thống phục hồi chức năng sinh lý DEA">
											<img src="{{ asset('public/images/desktop2/kt-11.png') }}" class="center-block" alt="Hệ thống phục hồi chức năng sinh lý DEA">
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="flex2col1">
							<div class="">
								<div class="img1">
									<div>
										<a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en" title="Thủ thuật bao quy đầu">
											<img src="{{ asset('public/images/desktop2/kt-8.png') }}" class="center-block" alt="Thủ thuật bao quy đầu">
										</a>
									</div>
								</div>
								<div class="img2" style="display: none;">
									<div>
										<a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en" title="Thủ thuật cắt bao quy đầu công nghệ Hàn quốc">
											<img src="{{ asset('public/images/desktop2/kt-12.png') }}" class="center-block" alt="Thủ thuật cắt bao quy đầu công nghệ Hàn quốc">
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="flex flex3 justify-content-between">
						<div class="flex3col1 flex align-items-center justify-content-center">
							<div class="">
								<div class="text-uppercase text-center h3">Nhiều kỹ thuật hơn</div>
								<div class="text-uppercase text-center h4">MORE TECHNOLOGY</div>
							</div>
						</div>
						<div class="flex3col2">
							<div>
								<div class="panel-heading flex justify-content-center align-items-center">
									<h4 class="text-center">Thủ thuật chỉnh hình cơ quan sinh dục</h4>
								</div>
								<div class="panel-body flex">
									<div class="flex justify-content-center align-items-center">
										<div>
											<h5><i class="bg1"></i><a href="{{ MyAPI::getUrlPostID(3) }}" title="Thủ thuật kéo dài dương vật định vị CF">Thủ thuật kéo dài dương vật định vị CF</a><i class="fa fa-play-circle"></i></h5>
											<h5><i class="bg1"></i><a href="{{ MyAPI::getUrlPostID(10) }}" title="Thủ thuật cắt bao quy đầu Hàn Quốc">Thủ thuật cắt bao quy đầu Hàn Quốc</a><i class="fa fa-play-circle"></i></h5>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="flex3col2">
							<div>
								<div class="panel-heading flex justify-content-center align-items-center">
									<h4 class="text-center">Điều trị bệnh lý tuyến tiền liệt</h4>
								</div>
								<div class="panel-body flex">
									<div class="flex justify-content-center align-items-center">
										<div>
											<h5><i class="bg1"></i><a href="{{ MyAPI::getUrlPostID(11) }}" title="Kỹ thuật can thiệp cắt bỏ tuyến tiền liệt">Kỹ thuật can thiệp cắt bỏ tuyến tiền liệt</a><i class="fa fa-play-circle"></i></h5>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="flex3col2">
							<div class="flex flex4">
								<div class="flex4col1 flex justify-content-start align-items-center">
									<h4>Điều trị vô sinh nam giới</h4>
								</div>
								<div class="flex4col2 flex justify-content-start align-items-center">
									<h5><i class="bg1"></i><a href="{{ MyAPI::getUrlPostID(4) }}" title="Liệu pháp lập thể 4 hạng mục">Liệu pháp lập thể 4 hạng mục</a><i class="fa fa-play-circle"></i></h5>
								</div>
							</div>
							<div class="flex flex4">
								<div class="flex4col1 flex justify-content-start align-items-center">
									<h4>Điều trị bệnh lậu</h4>
								</div>
								<div class="flex4col2 flex justify-content-start align-items-center">
									<h5><i class="bg1"></i><a href="{{ MyAPI::getUrlPostID(5) }}" title="Liệu pháp DHA">Liệu pháp DHA</a><i class="fa fa-play-circle"></i></h5>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row7">
			<div class="container">
				<div class="line2">
					<div class="name">Tư vấn nhanh qua đường dây nóng (miễn phí)</div>
					<div class="img">
						<img src="{{ asset('public/images/desktop2/chuyende-49.png') }}" alt="" class="center-block">
					</div>
					<div class="des text-center">
						Mời bạn nhập số điện thoại vào ô trống dưới đây, bác sĩ của chúng tôi sẽ đích thân liên hệ với bạn qua số điện thoại này, giải đáp các thắc mắc của bạn.
					</div>
					<div class="note">
						Lưu ý: Bác sĩ gọi lại, nghe điện miễn phí, bạn cứ yên tâm!
					</div>
					<div class="sendmail">
						<form action="{{ url('sendmail') }}" method="post" id="formMailSend">
							{{ csrf_field() }}
							<input type="number" required name="phone" placeholder="Mời nhập số điện thoại của bạn">
							<button type="submit">Trò chuyện ngay</button>
						</form>
						<script>
							$(document).ready(function() 
							{
								$('#formMailSend').ajaxForm(
								{
									beforeSubmit:function(){
										$("#myloadding").show();
									},
									success:function(){
						                alert("Cảm ơn bạn đã đăng ký!");
						                $("#myloadding").hide(); 
						                $('#formMailSend').resetForm();
									}
								});
							});
						</script>
					</div>
					<div class="lists">
						<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><i class="fa fa-circle-o"></i> Trò chuyện tại nhà cùng bác sĩ</a>
						<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><i class="fa fa-circle-o"></i> Tư vấn từ xa, tiết kiệm thời gian công sức</a>
						<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><i class="fa fa-circle-o"></i> Nghe điện miễn phí, xin hãy yên tâm</a>
					</div>
				</div>
			</div>
		</div>
	</main>
@endsection('content')