@extends('layout.chuyende-mobile')
<!-- title -->
@section('title')
	<title>Vô sinh nam</title>
@endsection('title')
<!-- seo -->
@section('keyword')
	@include('seo.seo_home')
@endsection('keyword')
<!-- css -->
@section('css')
<link rel="canonical" href="{{ url('chuyen-de/vo-sinh') }}" />
<link rel="stylesheet" href="{{ asset('public/css/chuyende/mobile/bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('public/css/chuyende/mobile/vo-sinh.css') }}">
@endsection('css')
<!-- logo -->
@section('logo')
<img src="{{ asset('public/images/chuyende/mobile/nhiemtrunglieudao/nhiemtrunglieudao-26.png') }}" class="center-block">
@endsection('logo')
<!-- doc -->
@section('doc')
<img src="{{ asset('public/images/chuyende/mobile/nhiemtrunglieudao/nhiemtrunglieudao-27.png') }}" alt="doc">
@endsection('doc')
<!-- banner -->
@section('banner')
	<img src="{{ asset('public/images/chuyende/mobile/vosinh/vosinh-1.png') }}" alt="Phòng khám Nam Khang" class="center-block img-responsive">
@endsection('banner')
<!-- content -->
@section('content')
	<div class="container chuyende">
		<div class="row1">
			<div class="title text-center text-uppercase">Có phải bạn đã có một vài triệu chứng dưới đây?</div>
			<div class="dis-table table1 width-100">
				<div class="table-cell">
					<a class="bg dis-table width-100" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
						<span class="table-cell text-center">
							Tinh dịch vàng,<br>ít, có sợi máu
						</span>
					</a>
				</div>
				<div class="table-cell">
					<a class="bg bg1 dis-table width-100" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
						<span class="table-cell text-center">
							Tinh dịch không hóa lỏng,<br>thời gian hóa lỏng dài
						</span>
					</a>
				</div>
				<div class="table-cell">
					<a class="bg bg2 dis-table width-100" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
						<span class="table-cell  text-center">
							Nước tiểu đục,<br>sau khi đi tiểu<br>tinh dịch có màu đục
						</span>
					</a>
				</div>
			</div>
			<div class="dis-table table1 table2 width-100">
				<div class="table-cell">
					<a class="bg bg3 dis-table width-100" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
						<span class="table-cell text-center">
							Tinh dịch vàng,<br>ít, có sợi máu
						</span>
					</a>
				</div>
				<div class="table-cell">
					<a class="bg bg4 dis-table width-100" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
						<span class="table-cell text-center">
							Tinh dịch không hóa lỏng,<br>thời gian hóa lỏng dài
						</span>
					</a>
				</div>
				<div class="table-cell">
					<a class="bg bg5 dis-table width-100" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
						<span class="table-cell  text-center">
							Nước tiểu đục,<br>sau khi đi tiểu<br>tinh dịch có màu đục
						</span>
					</a>
				</div>
			</div>
			<div class="global text-center">
				<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Chuyên gia trực tuyến giải đáp chi tiết những triệu chứng vô sinh nam</a>
			</div>
		</div>
		<div class="row2">
			<div class="title text-center text-uppercase">Có phải bạn đã có một vài triệu chứng dưới đây?</div>
			<div class="dis-table table1 width-100">
				<div class="table-cell">
					<div>
						<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
							<img src="{{ asset('public/images/chuyende/mobile/vosinh/vosinh-2.png') }}" alt="" class="img-responsive center-block">
						</a>
					</div>
					<p class="text-center">Vô sinh do<br>ít tinh trùng</p>
				</div>
				<div class="table-cell">
					<div>
						<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
							<img src="{{ asset('public/images/chuyende/mobile/vosinh/vosinh-3.png') }}" alt="" class="img-responsive center-block">
						</a>
					</div>
					<p class="text-center">Vô sinh do<br>chứng tinh trùng yếu</p>
				</div>
				<div class="table-cell">
					<div>
						<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
							<img src="{{ asset('public/images/chuyende/mobile/vosinh/vosinh-4.png') }}" alt="" class="img-responsive center-block">
						</a>
					</div>
					<p class="text-center">Vô sinh do tinh<br>dịch không hóa lỏng</p>
				</div>
			</div>
			<div class="dis-table table1 table2 width-100">
				<div class="table-cell">
					<div>
						<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
							<img src="{{ asset('public/images/chuyende/mobile/vosinh/vosinh-5.png') }}" alt="" class="img-responsive center-block">
						</a>
					</div>
					<p class="text-center">Vô sinh do<br>không có tinh trùng</p>
				</div>
				<div class="table-cell">
					<div>
						<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
							<img src="{{ asset('public/images/chuyende/mobile/vosinh/vosinh-6.png') }}" alt="" class="img-responsive center-block">
						</a>
					</div>
					<p class="text-center">Vô sinh do rối loạn<br>chức năng sinh dục</p>
				</div>
				<div class="table-cell">
					<div>
						<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
							<img src="{{ asset('public/images/chuyende/mobile/vosinh/vosinh-7.png') }}" alt="" class="img-responsive center-block">
						</a>
					</div>
					<p class="text-center">Giãn tĩnh mạch<br>thừng tinh</p>
				</div>
			</div>
			<div class="global text-center">
				<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Click tìm hiểu cụ thể các bệnh  Chuyên gia giải đáp cho bạn</a>
			</div>
		</div>
		<div class="row1 row3">
			<div class="title text-center text-uppercase">Những câu hỏi thường gặp của bệnh nhân vô sinh nam</div>
			<div class="dis-table table1 width-100">
				<div class="table-cell">
					<a class="bg dis-table width-100" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
						<span class="table-cell text-center">
							Thủ dâm có gây<br>vô sinh không?
						</span>
					</a>
				</div>
				<div class="table-cell">
					<a class="bg dis-table width-100" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
						<span class="table-cell text-center">
							Những nguyên nhân<br>nào gây vô sinh?
						</span>
					</a>
				</div>
				<div class="table-cell">
					<a class="bg dis-table width-100" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
						<span class="table-cell  text-center">
							Các hạng mục kiểm<br>tra và chi phí
						</span>
					</a>
				</div>
			</div>
			<div class="dis-table table1 table2 width-100">
				<div class="table-cell">
					<a class="bg dis-table width-100" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
						<span class="table-cell text-center">
							Điều trị vô sinh ở đâu tốt?
						</span>
					</a>
				</div>
				<div class="table-cell">
					<a class="bg dis-table width-100" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
						<span class="table-cell text-center">
							Điều trị vô sinh nam<br>có khỏi được không?
						</span>
					</a>
				</div>
				<div class="table-cell">
					<a class="bg dis-table width-100" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
						<span class="table-cell  text-center">
							Kĩ thuật điều trị nào tốt?
						</span>
					</a>
				</div>
			</div>
		</div>
		<div class="row4">
			<div class="title text-center text-uppercase">Chỉ khi kiểm tra chính xác, mới có thể mang thai nhanh chóng</div>
			<div class="title1 text-uppercase">Bước 1: Hỏi tiền sử bệnh và kiểm tra sức khỏe</div>
			<div class="clearfix clearfix1">
				<div class="pull-left">
					<img src="{{ asset('public/images/chuyende/mobile/vosinh/vosinh-8.png') }}" alt="">
				</div>
				<div>
					Bác sĩ thông qua việc nắm bắt tình hình sức khỏe của bạn, bao gồm việc kết hôn, sinh con; Kiểm tra lại về sức khỏe, nắm rõ tình hình phát triển sinh dục, bao gồm kiểm tra toàn thân và cơ quan sinh dục.
				</div>
			</div>
			<div class="title1 title2 text-uppercase">Bước 2: Kiểm tra theo chỉ định</div>
			<div class="row gird1">
				<div class="col-sm-4">
					<div class="bg1">
						<div class="dis-table width-100 heading">
							<span class="table-cell">
								Kiểm tra chất lượng tinh dịch
							</span>
						</div>
						<div class="pody">
							Nguyên nhân lớn nhất gây vô sinh nam là vấn đề về tinh dịch, kiểm tra tinh dịch là tiến hành phân tích tổng hợp chất lượng tinh dịch, là hạng mục kiểm tra cần thiết đối với vô sinh nam
						</div>
						<div class="text-center footer">
							<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Tìm hiểu chi tiết</a>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="bg2">
						<div class="dis-table width-100 heading">
							<span class="table-cell">
								Kiểm tra dịch tuyến tiền liệt
							</span>
						</div>
						<div class="pody">
							Tuyến tiền liệt là bộ phận cấu thành quan trọng của tinh dịch. Lấy dịch tuyến tiền liệt đi xét nghiệm, thông thường là kiểm tra sinh hóa và siêu âm tuyến tiền liệt
						</div>
						<div class="text-center footer">
							<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Tìm hiểu chi tiết</a>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="bg3">
						<div class="dis-table width-100 heading">
							<span class="table-cell">
								Kiểm tra chlammydia và mycoplasma
							</span>
						</div>
						<div class="pody">
							Nguyên nhân lớn nhất gây vô sinh nam là vấn đề về tinh dịch, kiểm tra tinh dịch là tiến hành phân tích tổng hợp chất lượng tinh dịch, là hạng mục kiểm tra cần thiết đối với vô sinh nam
						</div>
						<div class="text-center footer">
							<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Tìm hiểu chi tiết</a>
						</div>
					</div>
				</div>
			</div>
			<div class="global text-center">
				<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Click tìm hiểu cụ thể các bệnh  Chuyên gia giải đáp cho bạn</a>
			</div>
		</div>
		<div class="row5">
			<div class="title text-center text-uppercase">Chuyên khoa Nam Khang  Giúp bạn có một gia đình trọn vẹn</div>
			<div class="line">
				<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><img src="{{ asset('public/images/chuyende/mobile/vosinh/vosinh-9.png') }}" alt="" class="img-responsive center-block"></a>
			</div>
		</div>
		<div class="row6">
			<div class="title text-center text-uppercase">Chuyên gia nam khoa uy tín  Chẩn đoán điều trị chính xác đảm bảo hiệu quả</div>
		</div>
		<div class="row10">
			<div class="bg">
				<div class="line1">
					<img src="{{ asset('public/images/chuyende/mobile/suimaoga/suimaoga-40.png') }}" alt="" class="img-responsive">
				</div>
				<div class="row line2">
					<div class="col-xs-4">
						<img src="{{ asset('public/images/chuyende/mobile/suimaoga/suimaoga-41.png') }}" alt="" class="img-responsive">
					</div>
					<div class="col-xs-4">
						<img src="{{ asset('public/images/chuyende/mobile/suimaoga/suimaoga-42.png') }}" alt="" class="img-responsive">
					</div>
					<div class="col-xs-4">
						<img src="{{ asset('public/images/chuyende/mobile/suimaoga/suimaoga-43.png') }}" alt="" class="img-responsive">
					</div>
				</div>
				<div class="line3">
					<p class="text-justify">
						Đội ngũ chuyên gia Nam Khang Hà Nội tập hợp các chuyên gia lâm sàng, chuyên gia bệnh học, chuyên gia gene, chuyên gia vi khuẩn học, chuyên gia kiểm soát và phòng ngừa bệnh dịch (CDC), được gọi là đoàn chuyên gia chuyên khoa. Bác sĩ các phòng ban đều có trên 10 năm kinh nghiệm lâm sàng. Căn cứ theo 368 tiêu chuẩn của “JCI”, các bác sĩ mang đến dịch vụ y tế tốt nhất cho bệnh nhân.
					</p>
				</div>
			</div>
			<div class="global3">
				<div class="marlr-5 row">
					<div class="padlr5 col-sm-6">
						<a class="dis-table" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
							<i class="table-cell"></i>
							<span class="table-cell">Chuyên gia tư vấn trực tuyến</span>
						</a>
					</div>
					<div class="padlr5 col-sm-6 col2">
						<a class="dis-table" href="tel:18006181">
							<i class="table-cell"></i>
							<span class="table-cell">
								Điện thoại tư vấn<br>
								<strong>1800 - 6181</strong>
							</span>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row16">
			<div class="text-center line1">
				Thời gian thăm khám: <span>7:00 - 20:00</span>
			</div>
			<div class="text-center line2">
				(không nghỉ chủ nhật và ngày lễ)
			</div>
			<div class="text-center line3">
				Số 193c1 Bà Triệu, Hai Bà Trưng, Hà Nội
			</div>
		</div>
	</div>
@endsection('content')
@section('toolbar')
	<div class="container footer-toolbar">
		<div class="dis-table width-100">
			<div class="table-cell cell1">
				<div class="dis-table width-100">
					<div class="table-cell">
						<h3 class="text-center"><a href="tel:18006181"><i class="bg bg1"></i></a></h3>
					</div>
					<div class="table-cell">
						<h4 class="text-center"><a href="tel:18006181">Điện thoại tư vấn</a></h4>
					</div>
				</div>
			</div>
			<div class="table-cell cell2">
				<div class="dis-table width-100">
					<div class="table-cell">
						<h3 class="text-center"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><i class="bg bg2"></i></a></h3>
					</div>
					<div class="table-cell">
						<h4 class="text-center"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Tư vấn trực tuyến</a></h4>
					</div>
				</div>
			</div>
			<div class="table-cell cell1">
				<div class="dis-table width-100">
					<div class="table-cell">
						<h3 class="text-center"><a href="#top"><i class="bg bg3"></i></a></h3>
					</div>
					<div class="table-cell">
						<h4 class="text-center"><a href="{{ url('/') }}">Quay lại</a></h4>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection('toolbar')