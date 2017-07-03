@extends('layout.chuyende-mobile')
<!-- title -->
@section('title')
	<title>Liệt dương</title>
@endsection('title')
<!-- seo -->
@section('keyword')
	@include('seo.seo_home')
@endsection('keyword')
<!-- css -->
@section('css')
<link rel="canonical" href="{{ url('chuyen-de/vo-sinh') }}" />
<link rel="stylesheet" href="{{ asset('public/css/chuyende/mobile/bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('public/css/chuyende/mobile/liet-duong.css') }}">
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
	<img src="{{ asset('public/images/chuyende/mobile/lietduong/lietduong-1.png') }}" alt="Phòng khám Nam Khang" class="center-block img-responsive">
@endsection('banner')
<!-- content -->
@section('content')
	<div class="container chuyende">
		<div class="row1">
			<div class="global1 text-center text-uppercase">Cổng tư vấn nhanh điều trị liệt dương</div>
			<div class="pad">
				<div class="dis-table table1 width-100">
					<a class="table-cell" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
						<div class="dis-table table2 width-100">
							<div class="table-cell"><i class="bg1"></i></div>
							<div class="table-cell cell2">
								Tôi là nam giới<br>Tư vấn cho bản thân
							</div>
						</div>
					</a>
					<a class="table-cell" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
						<div class="dis-table table2 width-100">
							<div class="table-cell"><i class="bg2"></i></div>
							<div class="table-cell cell2">
								Tôi là nữ giới<br>Tư vấn cho chồng
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
		<div class="row2">
			<div class="global1 text-center text-uppercase">Tự chẩn đoán mức độ liệt dương</div>
			<div class="row grid1">
				<div class="col-sm-4">
					<div class="title1">Liệt dương nặng</div>
					<div class="bg1">
						<p>*Không thể cương cứng.</p>
						<p>*Không để đưa vào âm đạo.</p>
						<p>*Không có góc cương cứng và độ cứng.</p>
						<p>*Không khoái cảm khi quan hệ.</p>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="title1">Liệt dương trung bình</div>
					<div class="bg2">
						<p>*Khi thủ dâm vẫn cương cứng</p>
						<p>*Không dễ đưa vào trong âm đạo.</p>
						<p>*Phản ứng cương cứng chậm,thời gian ngắn.</p>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="title1">Liệt dương nhẹ</div>
					<div class="bg3">
						<p>*Cương cứng không được lâu.</p>
						<p>*Tần suất quan hệ tình dụcgiảm.</p>
						<p>*Dùng tay mới đưa dương vật vào âm đạo được.</p>
					</div>
				</div>
			</div>
			<div class="global2">
				<div class="dis-table width-100">
					<a class="table-cell cell1 text-center" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
						<span class="dis-table width-100">
							<i class="bg table-cell">
								<img src="{{ asset('public/images/chuyende/mobile/lietduong/lietduong-3.png') }}" alt="">
							</i>
							<i class="table-cell">
								Tôi không rõ thuộc nhóm liệt dương nào
							</i>
						</span>
					</a>
					<a class="table-cell cell2 text-center" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
						Nhờ chuyên gia chẩn đoán trực tuyến
					</a>
				</div>
			</div>
		</div>
		<div class="row3">
			<div class="global1 text-center text-uppercase">Chuyện phòng the kém, đâu chỉ đơn giản là bất lực?</div>
			<div class="row gird1">
				<div class="col-xs-6 col-sm-3">
					<div class="dis-table width-100">
						<span class="text-center table-cell">
							Báo động tổn hại sức khỏe nam giới
						</span>
					</div>
				</div>
				<div class="col-xs-6 col-sm-3">
					<div class="dis-table width-100">
						<span class="text-center table-cell">
							Không có lợi cho việc sinh sản ở nam giới
						</span>
					</div>
				</div>
				<div class="col-xs-6 col-sm-3">
					<div class="dis-table width-100">
						<span class="text-center table-cell">
							Làm đổ vỡ quan hệ nam nữ
						</span>
					</div>
				</div>
				<div class="col-xs-6 col-sm-3">
					<div class="dis-table width-100">
						<span class="text-center table-cell">
							Mang đến gánh nặng tâm lý cho nam giới
						</span>
					</div>
				</div>
			</div>
			<div class="tax1">
				<img src="{{ asset('public/images/chuyende/mobile/lietduong/lietduong-4.png') }}" alt="" class="img-responsive center-block">
				<p class="text-center">
					Số liệu điều tra tình trạng cuộc sống của bệnh nhân liệt dương
				</p>
			</div>
			<div class="global2">
				<div class="dis-table width-100">
					<a class="table-cell cell1 text-center" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
						<span class="dis-table width-100">
							<i class="bg table-cell">
								<img src="{{ asset('public/images/chuyende/mobile/lietduong/lietduong-3.png') }}" alt="">
							</i>
							<i class="table-cell">
								Điều trị liệt dương có những phương pháp nào?
							</i>
						</span>
					</a>
					<a class="table-cell cell2 text-center" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
						Hỏi chuyên gia trực tuyến
					</a>
				</div>
			</div>
		</div>
		<div class="row4">
			<div class="title1 text-center text-uppercase">
				Có phải bạn cố gắng cứu vãn khi phát hiện không thể cương cứng?
			</div>
			<div class="des1 text-uppercase text-center">
				Thuốc tráng dương?<br>Bài thuốc dân gian?<br>Thuốc bổ? Luyện tập?
			</div>
			<div class="dis-table table1 width-100">
				<div class="table-cell cell1">
					<img src="{{ asset('public/images/chuyende/mobile/lietduong/lietduong-5.png') }}" alt="" class="center-block">
				</div>
				<div class="table-cell cell2">
					<div class="my_arrow arrow_box">
						<div class="title2">Chuyên gia nhắc nhở:</div>
						<div class="des2">
							Dùng thuốc và điều trị không chính xác, có thể gây liệt dương vĩnh viễn!
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row5">
			<div class="title1 text-center text-uppercase">
				Có phải bạn cố gắng cứu vãn khi phát hiện không thể cương cứng?
			</div>
			<div class="title2 text-center text-uppercase">
				Hệ thống hồi phục chức năng sinh dục DEA	
			</div>
			<div class="des1">
				Phòng khám chuyên khoa Nam Khang Hà Nội dẫn đầu trong việc sử dụng Hệ thống hồi phục chức năng sinh dục DEA tiên tiến quốc tế, có thể nhanh chóng tìm ra nguyên nhân gây bệnh, và điều trị đối chứng linh hoạt đối với các cá nhân khác nhau, giúp cho bệnh nhân hồi phục hoàn toàn về tâm, sinh lý. Tại Phòng khám Nam Khang đã có 95460 bệnh nhân nhờ phương pháp này mà có được đời sống tình dục viên mãn 
				<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><đọc tiếp></a>
			</div>
			<div class="grid row">
				<div class="col-xs-6">
					<div class="bg1">
						<div class="title3 text-center text-uppercase">
							An toàn đáng tin cậy
						</div>
						<div class="text-center">
							Tăng cường độ cứng gấp 3-5 lần khi cương cứng
						</div>
					</div>
				</div>
				<div class="col-xs-6">
					<div class="bg2">
						<div class="title3 text-center text-uppercase">
							Hiệu quả nhanh
						</div>
						<div class="text-center">
							Thời gian cương cứng ít nhất 20 phút
						</div>
					</div>
				</div>
			</div>
			<div class="grid grid2 row">
				<div class="col-xs-6">
					<div class="bg3">
						<div class="title3 text-center text-uppercase">
							Hiệu quả rõ rệt
						</div>
						<div class="text-center">
							Bệnh nhân thỏa mãn đạt tới 98.8%
						</div>
					</div>
				</div>
				<div class="col-xs-6">
					<div class="bg4">
						<div class="title3 text-center text-uppercase">
							Tỷ lệ tái phát thấp
						</div>
						<div class="text-center">
							Kéo dài thời gian quan hệ tình dục
						</div>
					</div>
				</div>
			</div>
			<div class="footer">
				<div class="row">
					<div class="col-xs-6">
						<a class="dis-table width-100 pos-relative" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
							<span class="table-cell text-center text-uppercase">Tư vấn trực tuyến</span>
							<span class="pos-absolute">
								<img src="{{ asset('public/images/chuyende/mobile/lietduong/lietduong-6.png') }}" alt="">
							</span>
						</a>
					</div>
					<div class="col-xs-6">
						<a class="dis-table width-100 pos-relative" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
							<span class="table-cell text-center text-uppercase">Gọi điện tư vấn</span>
							<span class="pos-absolute">
								<img src="{{ asset('public/images/chuyende/mobile/lietduong/lietduong-6.png') }}" alt="">
							</span>
						</a>
					</div>
				</div>
			</div>
		</div>
		<!--  -->
		<div class="row10">
			<div class="mytitle1 text-center text-uppercase">
				Chuyên gia nam khoa uy tín<br>
				Chẩn đoán điều trị chính xác đảm bảo hiệu quả
			</div>
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
		</div>
		<div class="row15">
			<div class="des1">
				<div class="row">
					<div class="col-xs-7">
						<div>
							Đặt hẹn qua điện thoại<br>không cần xếp hàng, ưu tiên thăm khám
						</div>
						<div class="dis-table">
							<i class="bg1 table-cell"></i>
							<span class="text-uppercase table-cell">Gọi điện thoại đặt lịch trước</span>
						</div>
					</div>
					<div class="col-xs-5">
						<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="width-100 dis-table">
							<span class="table-cell"><i class="bg2"></i></span>
							<span class="table-cell">Đặt hẹn trong ngày</span>
						</a>
						<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="width-100 dis-table">
							<span class="table-cell"><i class="bg2"></i></span>
							<span class="table-cell">Đi khám trong ngày</span>
						</a>
						<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="width-100 dis-table">
							<span class="table-cell"><i class="bg2"></i></span>
							<span class="table-cell">Cả năm không nghỉ</span>
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