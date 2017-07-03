@extends('layout.chuyende-mobile')
<!-- title -->
@section('title')
	<title>Sùi mào gà</title>
@endsection('title')
<!-- seo -->
@section('keyword')
	@include('seo.seo_home')
@endsection('keyword')
<!-- css -->
@section('css')
<link rel="canonical" href="{{ url('chuyen-de/sui-mao-ga') }}" />
<link rel="stylesheet" href="{{ asset('public/css/chuyende/mobile/bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('public/css/chuyende/mobile/sui-mao-ga.css') }}">
@endsection('css')
<!-- logo -->
@section('logo')
	<img src="{{ asset('public/images/chuyende/mobile/suimaoga/suimaoga-2.png') }}" class="center-block">
@endsection('logo')
<!-- doc -->
@section('doc')
	<img src="{{ asset('public/images/chuyende/mobile/suimaoga/suimaoga-3.png') }}" alt="doc">
@endsection('doc')
<!-- banner -->
@section('banner')
	<img src="{{ asset('public/images/chuyende/mobile/suimaoga/suimaoga-1.png') }}" alt="Phòng khám Nam Khang" class="center-block img-responsive">
@endsection('banner')
<!-- content -->
@section('content')
	<div class="container chuyende">
		<div class="row1 global0">
			<div class="flex clearfix flex-wrap-wrap">
				<div class="pull-left left1 flex align-items-center justify-content-center">
					<img src="{{ asset('public/images/chuyende/mobile/suimaoga/suimaoga-4.png') }}" alt="" class="img-responsive">
				</div>
				<div class="pull-left left2 text-uppercase text-center flex align-items-center justify-content-center">
					Xem hình<br>đoán bệnh
				</div>
				<div class="pull-left left3 flex align-items-center justify-content-center">
					Hãy xem xem bạn thuộc tình trạng nào?
				</div>
			</div>
		</div>
		<div class="row2">
			<div class="line1 clearfix">
				<div class="pull-left left1">
					<span>Kiểm tra triệu chứng</span>
				</div>
				<div class="pull-left left2">
					<img src="{{ asset('public/images/chuyende/mobile/suimaoga/suimaoga-5.png') }}" alt="" class="img-responsive">
				</div>
				<div class="pull-left left3">
					<span class="text-uppercase">Nam giới</span>
				</div>
			</div>
			<div class="line2"></div>
			<div class="line3 clearfix flex flex-wrap-wrap">
				<div class="pull-left text-center left1 col-sm-3 col-xs-6">
					<div class="flex flex-wrap-wrap align-content-around justify-content-center">
						<div class="text-uppercase width-100">Sùi mào gà</div>
						<div class="width-100">Vị trí và triệu trứng</div>
						<div class="width-100">-----------></div>
					</div>
				</div>
				<div class="pull-left left2 col-sm-3 col-xs-6">
					<div class="pos-relative">
						<div>
							<img src="{{ asset('public/images/chuyende/mobile/suimaoga/suimaoga-6.png') }}" alt="" class="img-responsive">
						</div>
						<div class="pos-absolute">
							Dương vật
						</div>
					</div>
				</div>
				<div class="pull-left left2 col-sm-3 col-xs-6">
					<div class="pos-relative">
						<div>
							<img src="{{ asset('public/images/chuyende/mobile/suimaoga/suimaoga-7.png') }}" alt="" class="img-responsive">
						</div>
						<div class="pos-absolute">
							Hậu môn
						</div>
					</div>
				</div>
				<div class="pull-left left2 col-sm-3 col-xs-6">
					<div class="pos-relative">
						<div>
							<img src="{{ asset('public/images/chuyende/mobile/suimaoga/suimaoga-8.png') }}" alt="" class="img-responsive">
						</div>
						<div class="pos-absolute">
							Rãnh quy đầu
						</div>
					</div>
				</div>
				<div class="pull-left left2 col-sm-3 col-xs-6">
					<div class="pos-relative">
						<div>
							<img src="{{ asset('public/images/chuyende/mobile/suimaoga/suimaoga-9.png') }}" alt="" class="img-responsive">
						</div>
						<div class="pos-absolute">
							Dây chằng
						</div>
					</div>
				</div>
				<div class="pull-left left2 col-sm-3 col-xs-6">
					<div class="pos-relative">
						<div>
							<img src="{{ asset('public/images/chuyende/mobile/suimaoga/suimaoga-10.png') }}" alt="" class="img-responsive">
						</div>
						<div class="pos-absolute">
							Lỗ niệu đạo
						</div>
					</div>
				</div>
				<div class="pull-left left2 col-sm-3 col-xs-6">
					<div class="pos-relative">
						<div>
							<img src="{{ asset('public/images/chuyende/mobile/suimaoga/suimaoga-11.png') }}" alt="" class="img-responsive">
						</div>
						<div class="pos-absolute">
							Bìu
						</div>
					</div>
				</div>
				<div class="pull-left left3 col-sm-3 col-xs-6"  onclick="open_tuvan();">
					<div class="flex flex-wrap-wrap align-content-around justify-content-center">
						<div class="text-center order1 width-100">
							Xuất hiện các triệu chứng tương tự
						</div>
						<div class="text-uppercase order2 width-100 text-center">Chuyên gia tư vấn</div>
					</div>
				</div>
				<!--  -->
				<div class="pull-left text-center left1 col-sm-3 col-xs-6">
					<div class="flex flex-wrap-wrap align-content-around justify-content-center">
						<div class="text-uppercase width-100">Mụn rộp sinh dục</div>
						<div class="width-100">Vị trí và triệu trứng</div>
						<div class="width-100">-----------></div>
					</div>
				</div>
				<div class="pull-left left2 col-sm-3 col-xs-6">
					<div class="pos-relative">
						<div>
							<img src="{{ asset('public/images/chuyende/mobile/suimaoga/suimaoga-13.png') }}" alt="" class="img-responsive">
						</div>
						<div class="pos-absolute">
							Bao quy đầu
						</div>
					</div>
				</div>
				<div class="pull-left left2 col-sm-3 col-xs-6">
					<div class="pos-relative">
						<div>
							<img src="{{ asset('public/images/chuyende/mobile/suimaoga/suimaoga-14.png') }}" alt="" class="img-responsive">
						</div>
						<div class="pos-absolute">
							Bìu
						</div>
					</div>
				</div>
				<div class="pull-left left2 col-sm-3 col-xs-6">
					<div class="pos-relative">
						<div>
							<img src="{{ asset('public/images/chuyende/mobile/suimaoga/suimaoga-15.png') }}" alt="" class="img-responsive">
						</div>
						<div class="pos-absolute">
							Dương vật
						</div>
					</div>
				</div>
				<div class="pull-left left2 col-sm-3 col-xs-6">
					<div class="pos-relative">
						<div>
							<img src="{{ asset('public/images/chuyende/mobile/suimaoga/suimaoga-16.png') }}" alt="" class="img-responsive">
						</div>
						<div class="pos-absolute">
							Rãnh quy đầu
						</div>
					</div>
				</div>
				<div class="pull-left left2 col-sm-3 col-xs-6">
					<div class="pos-relative">
						<div>
							<img src="{{ asset('public/images/chuyende/mobile/suimaoga/suimaoga-17.png') }}" alt="" class="img-responsive">
						</div>
						<div class="pos-absolute">
							Quy đầu
						</div>
					</div>
				</div>
				<div class="pull-left left2 col-sm-3 col-xs-6">
					<div class="pos-relative">
						<div>
							<img src="{{ asset('public/images/chuyende/mobile/suimaoga/suimaoga-18.png') }}" alt="" class="img-responsive">
						</div>
						<div class="pos-absolute">
							Hậu môn
						</div>
					</div>
				</div>
				<div class="pull-left left3 col-sm-3 col-xs-6"  onclick="open_tuvan();">
					<div class="flex flex-wrap-wrap align-content-around justify-content-center">
						<div class="text-center order1 width-100">
							Xuất hiện các triệu chứng tương tự
						</div>
						<div class="text-uppercase order2 width-100 text-center">Chuyên gia tư vấn</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row3"></div>
		<div class="row2">
			<div class="line1 clearfix">
				<div class="pull-left left1">
					<span>Kiểm tra triệu chứng</span>
				</div>
				<div class="pull-left left2">
					<img src="{{ asset('public/images/chuyende/mobile/suimaoga/suimaoga-19.png') }}" alt="" class="img-responsive">
				</div>
				<div class="pull-left left3">
					<span class="text-uppercase">Nữ giới</span>
				</div>
			</div>
			<div class="line2"></div>
			<div class="line3 clearfix flex flex-wrap-wrap">
				<div class="pull-left text-center left1 col-sm-3 col-xs-6">
					<div class="flex flex-wrap-wrap align-content-around justify-content-center">
						<div class="text-uppercase width-100">Sùi mào gà</div>
						<div class="width-100">Vị trí và triệu trứng</div>
						<div class="width-100">-----------></div>
					</div>
				</div>
				<div class="pull-left left2 col-sm-3 col-xs-6">
					<div class="pos-relative">
						<div>
							<img src="{{ asset('public/images/chuyende/mobile/suimaoga/suimaoga-20.png') }}" alt="" class="img-responsive">
						</div>
						<div class="pos-absolute">
							Cổ tử cung
						</div>
					</div>
				</div>
				<div class="pull-left left2 col-sm-3 col-xs-6">
					<div class="pos-relative">
						<div>
							<img src="{{ asset('public/images/chuyende/mobile/suimaoga/suimaoga-21.png') }}" alt="" class="img-responsive">
						</div>
						<div class="pos-absolute">
							Hậu môn
						</div>
					</div>
				</div>
				<div class="pull-left left2 col-sm-3 col-xs-6">
					<div class="pos-relative">
						<div>
							<img src="{{ asset('public/images/chuyende/mobile/suimaoga/suimaoga-22.png') }}" alt="" class="img-responsive">
						</div>
						<div class="pos-absolute">
							Âm đạo
						</div>
					</div>
				</div>
				<div class="pull-left left2 col-sm-3 col-xs-6">
					<div class="pos-relative">
						<div>
							<img src="{{ asset('public/images/chuyende/mobile/suimaoga/suimaoga-23.png') }}" alt="" class="img-responsive">
						</div>
						<div class="pos-absolute">
							Lỗ niệu đạo
						</div>
					</div>
				</div>
				<div class="pull-left left2 col-sm-3 col-xs-6">
					<div class="pos-relative">
						<div>
							<img src="{{ asset('public/images/chuyende/mobile/suimaoga/suimaoga-24.png') }}" alt="" class="img-responsive">
						</div>
						<div class="pos-absolute">
							Môi âm hộ
						</div>
					</div>
				</div>
				<div class="pull-left left2 col-sm-3 col-xs-6">
					<div class="pos-relative">
						<div>
							<img src="{{ asset('public/images/chuyende/mobile/suimaoga/suimaoga-25.png') }}" alt="" class="img-responsive">
						</div>
						<div class="pos-absolute">
							Lỗ âm đạo
						</div>
					</div>
				</div>
				<div class="pull-left left3 col-sm-3 col-xs-6"  onclick="open_tuvan();">
					<div class="flex flex-wrap-wrap align-content-around justify-content-center" style="background-color: #c64658;">
						<div class="text-center order1 width-100">
							Xuất hiện các triệu chứng tương tự
						</div>
						<div class="text-uppercase order2 width-100 text-center">Chuyên gia tư vấn</div>
					</div>
				</div>
				<!--  -->
				<div class="pull-left text-center left1 col-sm-3 col-xs-6">
					<div class="flex flex-wrap-wrap align-content-around justify-content-center">
						<div class="text-uppercase width-100">Mụn rộp sinh dục</div>
						<div class="width-100">Vị trí và triệu trứng</div>
						<div class="width-100">-----------></div>
					</div>
				</div>
				<div class="pull-left left2 col-sm-3 col-xs-6">
					<div class="pos-relative">
						<div>
							<img src="{{ asset('public/images/chuyende/mobile/suimaoga/suimaoga-26.png') }}" alt="" class="img-responsive">
						</div>
						<div class="pos-absolute">
							Âm hộ
						</div>
					</div>
				</div>
				<div class="pull-left left2 col-sm-3 col-xs-6">
					<div class="pos-relative">
						<div>
							<img src="{{ asset('public/images/chuyende/mobile/suimaoga/suimaoga-27.png') }}" alt="" class="img-responsive">
						</div>
						<div class="pos-absolute">
							Ngoài âm hộ
						</div>
					</div>
				</div>
				<div class="pull-left left2 col-sm-3 col-xs-6">
					<div class="pos-relative">
						<div>
							<img src="{{ asset('public/images/chuyende/mobile/suimaoga/suimaoga-28.png') }}" alt="" class="img-responsive">
						</div>
						<div class="pos-absolute">
							Âm đạo
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row3"></div>
		<div class="row4">
			<div class="clearfix">
				<div class="pull-left left1">
					<img src="{{ asset('public/images/chuyende/mobile/suimaoga/suimaoga-29.png') }}" alt="" class="img-responsive">
				</div>
				<div class="pull-left left2">
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Bấm gửi</a>
				</div>
				<div class="pull-left left3">
					<div class="text-center">Hình ảnh triệu chứng của bạn</div>
					<div class="text-uppercase text-center">chuyên gia sẽ phân tích trực tuyến</div>
				</div>
			</div>
		</div>
		<div class="row5 global1">
			<div class="clearfix flex flex-wrap-wrap">
				<div class="pull-left left1 flex align-items-center">
					<img src="{{ asset('public/images/chuyende/mobile/suimaoga/suimaoga-32.png') }}" alt="" class="img-responsive">
				</div>
				<div class="pull-left left2 flex align-items-center">
					Phân tích<br>triệu chứng
				</div>
				<div class="pull-left left3 flex align-items-center">
					Có những triệu chứng như trên, có thể bạn cần tìm hiểu
				</div>
			</div>
		</div>
		<div class="row6 global2">
			<div class="border">
				<div class="row flex flex-wrap-wrap">
					<div class="left1 col-sm-1 flex align-items-center justify-content-center text-center">
						Sùi mào gà
					</div>
					<div class="left2 col-sm-5">
						<img src="{{ asset('public/images/chuyende/mobile/suimaoga/suimaoga-33.png') }}" alt="" class="img-responsive center-block">
					</div>
					<div class="left3 col-sm-6">
						<div>
							<p><span>Tên gọi:</span> Mụn cóc</p>
							<p><span>Thời gian ủ bệnh:</span> 3 tháng</p>
							<p><span>Con đường truyền nhiễm:</span> Qua tiếp xúc<br>quan hệ tình dục</p>
							<p><span>Khoa:</span> Bệnh xã hội</p>
							<div class="link">
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Click tư vấn chi tiết</a>
							</div>
						</div>
					</div>
				</div>
				<div class="">
					<p><span>Triệu chứng giai đoạn đầu:</span> 1, U nhú thịt hoặc dạng gai  2, Dạng hạt và mụn sần   3, Có mùi bất thường  4, Cơ thể mệt mỏi, mất ngủ.</p>
					<p><span>Triệu chứng giai đoạn giữa:</span> 1, U nhú gai dạng chùm  2, Bệnh nhân có dịch tiết nhẹ  3, Ngứa, dễ chảy máu.   </p>
					<p><span>Triệu chứng giai đoạn cuối:</span> 1, Xuất hiện u nhú dạng mào gà, núm, hoa súp lơ  2, Sưng đỏ, loét, đau  3, Bong da  4, Người bị nặng xuất hiện ung thư.</p>
				</div>
				<div>
					<p>Nguy hiểm của sùi mào gà</p>
					<ul>
						<li>1) Lây truyền cho con cái</li>
						<li>2) Quan hệ vợ chồng bất hòa</li>
						<li>3) Gián tiếp lây truyền cho người thân</li>
						<li>4) Phát triển thành ung thư</li>
					</ul>
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
		</div>
		<div class="row7 global2">
			<div class="border">
				<div class="row flex flex-wrap-wrap">
					<div class="left1 col-sm-1 flex align-items-center text-center justify-content-center">
						mụn rộp sinh dục
					</div>
					<div class="left2 col-sm-5">
						<img src="{{ asset('public/images/chuyende/mobile/suimaoga/suimaoga-35.png') }}" alt="" class="img-responsive center-block">
					</div>
					<div class="left3 col-sm-6">
						<div>
							<p><span>Tên gọi:</span> Mụn rộp âm hộ</p>
							<p><span>Thời gian ủ bệnh:</span> 2-10 ngày</p>
							<p><span>Con đường truyền nhiễm:</span> Qua tiếp xúc<br>quan hệ tình dục</p>
							<p><span>Khoa:</span> Khoa da liễu</p>
							<div class="link">
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Click tư vấn chi tiết</a>
							</div>
						</div>
					</div>
				</div>
				<div class="">
					<p><span>Triệu chứng điển hình:</span> 1, Mụn rộp ở nữ giới: Các bộ phận như môi lớn môi bé âm hộ, âm đạo xuất hiện nốt đỏ, nhanh chóng phát triển thành mụn nước, dần dần vỡ hình thành nên các vết loét, có cảm giác nóng rát và ngứa. 2, Mụn rộp ở nam giới: Có cảm giác đau; xuất hiện nốt đỏ nhỏ hoặc mụn nước. Xuất hiện ở trong trực tràng, gây táo bón, đau, có dịch tiết. Có thể có triệu chứng về thần kinh, cũng có thể ảnh hưởng đến khả năng sinh hoạt tình dục.</p>
				</div>
				<div>
					<p>Nguy hại điển hình</p>
					<ul>
						<li>
							<span>1, Ảnh hưởng chức năng sinh sản:</span>
							Ảnh hưởng đến sự phát triển của trứng ở nữ giới, tổn thương cổ tử cung; gây dị dạng tinh trùng và giảm thấp tỷ lệ sống của tinh trùng ở nam giới.
						</li>
						<li>
							<span>2, Viêm nhiễm tổng hợp:</span>
							Thường mắc cùng với các bệnh xã hội khác, như lậu cầu, sùi mào gà, phi lậu cầu, giang mai…
						</li>
						<li>
							<span>3, Truyền nhiễm cho bạn đời:</span>
							Quan hệ tình dục gây truyền nhiễm cho bạn đời: Truyền nhiễm gián tiếp cho người thân thông qua tắm chung chậu hàng ngày, ngồi chung bồn cầu, dùng chung chăn gối…
						</li>
						<li>
							<span>4, Tỷ lệ bị ung thư cao: </span>
							Có quan hệ mật thiết với các bệnh ung thư cổ tử cung, ung thư dương vật, tỷ lệ xuất hiện ung thư cao hơn 5-10 lần so với người bình thường.
						</li>
					</ul>
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
		</div>
		<div class="row8 global0">
			<div class="flex clearfix flex-wrap-wrap">
				<div class="pull-left left1 flex align-items-center justify-content-center">
					<img src="{{ asset('public/images/chuyende/mobile/suimaoga/suimaoga-36.png') }}" alt="" class="img-responsive">
				</div>
				<div class="pull-left left2 text-uppercase text-center flex align-items-center justify-content-center">
					Điều trị<br>ĐÚNG QUY TRÌNH
				</div>
				<div class="pull-left left3 flex align-items-center justify-content-center">
					Ưu thế của 4 kĩ thuật trị liệu lớn ở Nam Khang
				</div>
			</div>
		</div>
		<div class="row9">
			<div class="clearfix clearfix1 flex flex-wrap-wrap global4">
				<div class="pull-left left1 flex align-items-center">
					<i></i>
					<span>Ưu điểm 1 :</span>
				</div>
				<div class="pull-left left2 text-uppercase flex align-items-center">
					<span>Phòng khám chuyên khoa chuyên<br>
					chữa sùi mào gà, mụn rộp sinh dục</span>
				</div>
			</div>
			<div class="row clr2">
				<div class="col-sm-6 col1">
					<img src="{{ asset('public/images/chuyende/mobile/suimaoga/suimaoga-38.png') }}" alt="" class="img-responsive">
				</div>
				<div class="col-sm-6 col2">
					<div>
						Phòng khám chuyên khoa Nam Khang nghiêm chỉnh chấp hành thu phí theo quy định, ngăn chặn hiện tượng tự do thu phí, tùy tiện kê đơn thuốc, chiết khấu tiền thuốc, nhận phong bì…giúp việc thu phí rõ ràng.
					</div>
				</div>
			</div>
			<div class="order3">
				<p>
					Phòng khám Nam Khang Hà Nội là phòng khám chuyên khoa nam khoa hiện đại hóa mô hình lớn đạt tiêu chuẩn y tế quốc tế. Phòng khám kế thừa tiêu chuẩn y tế JCI quốc tế, hội tụ đội ngũ chuyên gia cao cấp, dịch vụ cá thể hóa và môi trường thăm khám ấm áp đạt chất lượng 5 sao. Mang đến dịch vụ khám và điều trị tiêu chuẩn quốc tế toàn diện cho bệnh nhân.
				</p>
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
		</div>
		<div class="row10">
			<div class="clearfix clearfix1 flex flex-wrap-wrap global4">
				<div class="pull-left left1 flex align-items-center">
					<i></i>
					<span>Ưu điểm 2 :</span>
				</div>
				<div class="pull-left left2 text-uppercase flex align-items-center">
					<span>Bác sĩ thăm khám<br>
					uy tín, hiệu quả đảm bảo</span>
				</div>
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
		<div class="row11">
			<div class="clearfix clearfix1 flex flex-wrap-wrap global4">
				<div class="pull-left left1 flex align-items-center">
					<i></i>
					<span>Ưu điểm 3 :</span>
				</div>
				<div class="pull-left left2 text-uppercase flex align-items-center">
					<span>Hệ thống điều trị quy chuẩn khoa học<br>
					Sử dụng nhiều kĩ thuật điều trị tiên tiến</span>
				</div>
			</div>
			<div class="line2">
				Bệnh xã hội trở thành chuyên khoa trọng điểm của Phòng khám Nam Khang, Nam Khang dùng “Liệu pháp quang động lực IRA + liệu pháp miễn dịch MB” là hạng mục nghiên cứu trọng điểm của các chuyên gia phòng khám để điều trị sùi mào gà/ mụn rộp sinh dục, là bước đột phá trong kĩ thuật khám và điều trị truyền thống cho các bệnh xã hội, chỉ cần 1-3 ngày là các triệu chứng biến mất, 3-5 ngày là có thể chữa khỏi, hiệu quả miễn dịch cao không tái phát, đã chữa khỏi cho 120 nghìn bệnh nhân sùi mào gà, mụn rộp sinh dục trên toàn quốc.
			</div>
			<div class="row line3">
				<div class="col-sm-6">
					<img src="{{ asset('public/images/chuyende/mobile/suimaoga/suimaoga-44.png') }}" alt="" class="img-responsive center-block">
				</div>
				<div class="col-sm-6">
					<div class="row">
						<div class="col-xs-3 number1">1,</div>
						<div class="col-xs-9 title1">Chứng nhận uy tín<br>Đảm bảo hiệu quả</div>
					</div>
					<div class="des1">
						Trở thành trung tâm điều trị bệnh xã hội trọng điểm, là kĩ thuật duy nhất có thể điều trị triệt để sùi mào gà, mụn rộp sinh dục hiện nay!
					</div>
				</div>
			</div>
			<div class="row line3">
				<div class="col-sm-6">
					<div class="row">
						<div class="col-xs-3 number1">2,</div>
						<div class="col-xs-9 title1">Chứng nhận lâm sàng<br>Ngăn chặn tái phát</div>
					</div>
					<div class="des1">
						Tỷ lệ hồi phục cao hơn 28 lần so với liệu pháp truyền thống, tỷ lệ tái phát giảm xuống còn 82.71%, điều trị một lần, khỏe mạnh cả đời!
					</div>
				</div>
				<div class="col-sm-6">
					<img src="{{ asset('public/images/chuyende/mobile/suimaoga/suimaoga-45.png') }}" alt="" class="img-responsive center-block">
				</div>
			</div>
			<div class="row line3">
				<div class="col-sm-6">
					<img src="{{ asset('public/images/chuyende/mobile/suimaoga/suimaoga-46.png') }}" alt="" class="img-responsive center-block">
				</div>
				<div class="col-sm-6">
					<div class="row">
						<div class="col-xs-3 number1">3,</div>
						<div class="col-xs-9 title1">Tư tưởng mới mẻ<br>Phân loại riêng biệt</div>
					</div>
					<div class="des1">
						1-3 ngày nhanh chóng thấy hiệu quả, 5-7 ngày có thể thoát khỏi phiền phức do sùi mào gà, bắt đầu thời đại phân loại riêng biệt, hiệu quả lâu dài, chống tái phát.
					</div>
				</div>
			</div>
			<div class="row line3">
				<div class="col-sm-6">
					<div class="row">
						<div class="col-xs-3 number1">4,</div>
						<div class="col-xs-9 title1">Hồi phục tế bào<br>Tăng cường hiệu quả</div>
					</div>
					<div class="des1">
						Chú trọng “cơ chế kháng virus lâu dài” tăng cường kháng thể, sau khi điều trị, kháng thể có thể tồn tại trên 10 năm trong cơ thể.
					</div>
				</div>
				<div class="col-sm-6">
					<img src="{{ asset('public/images/chuyende/mobile/suimaoga/suimaoga-45.png') }}" alt="" class="img-responsive center-block">
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
		<div class="row12">
			<div class="clearfix clearfix1 flex flex-wrap-wrap global4">
				<div class="pull-left left1 flex align-items-center">
					<i></i>
					<span>Ưu điểm 4 :</span>
				</div>
				<div class="pull-left left2 text-uppercase flex align-items-center">
					<span>Chi phí rõ ràng,<br>
					điều trị bảo mật, dịch vụ tận tâm</span>
				</div>
			</div>
			<div class="line2">
				<img src="{{ asset('public/images/chuyende/mobile/suimaoga/suimaoga-48.png') }}" alt="" class="img-responsive center-block">
			</div>
			<div class="des1">
				Phòng khám chuyên khoa Nam Khang nghiêm chỉnh thực hiện theo quy định quốc gia, chấp hành tiêu chuẩn thu phí thống nhất theo quy chế, kiên quyết quán triệt chế độ thu phí công khai, rõ ràng, hợp lý như xuất hóa đơn thu phí cho bệnh nhân trong ngày, tra cứu chi phí, công khai các mục chi phí chủ yếu….ngăn chặn triệt để hiện tượng thu phí lung tung.
			</div>
			<div class="line3">
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
		</div>
		<div class="row13">
			<div class="global0">
				<div class="flex clearfix flex-wrap-wrap">
					<div class="pull-left left1 flex align-items-center justify-content-center">
						<img src="{{ asset('public/images/chuyende/mobile/suimaoga/suimaoga-49.png') }}" alt="" class="img-responsive">
					</div>
					<div class="pull-left left2 text-uppercase text-center flex align-items-center justify-content-center">
						Theo dõi<br>tin hot
					</div>
					<div class="pull-left left3 flex align-items-center justify-content-center">
						Bạn có thể cần tư vấn những vấn đề dưới đây
					</div>
				</div>
			</div>
			<div class="line1">
				<div class="row">
					<div class="col-sm-7">
						<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="dis-table width-100 bg1">
						<span class="table-cell">Nguyên nhân gây sùi mào gà là gì?</span></a>
					</div>
					<div class="col-sm-5">
						<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="dis-table width-100 bg2"><span class="table-cell">Sùi mào gà có lây truyền không?</span></a>
					</div>
					<div class="col-sm-5">
						<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="dis-table width-100 bg3"><span class="table-cell">Sùi mào gà có gây ung thư không?</span></a>
					</div>
					<div class="col-sm-7">
						<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="dis-table width-100 bg4"><span class="table-cell">Phương pháp điều trị sùi mào gà tốt nhất</span></a>
					</div>
					<div class="col-sm-6">
						<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="dis-table width-100 bg5"><span class="table-cell">Điều trị sùi mào gà bao nhiêu tiền?</span></a>
					</div>
					<div class="col-sm-6">
						<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="dis-table width-100 bg6"><span class="table-cell">Sùi mào gà tái phát phải làm thế nào?</span></a>
					</div>
				</div>
			</div>
		</div>
		<div class="row14">
			<div class="global0">
				<div class="flex clearfix flex-wrap-wrap">
					<div class="pull-left left1 flex align-items-center justify-content-center">
						<img src="{{ asset('public/images/chuyende/mobile/suimaoga/suimaoga-49.png') }}" alt="" class="img-responsive">
					</div>
					<div class="pull-left left2 text-uppercase text-center flex align-items-center justify-content-center">
						Về Nam Khang
					</div>
					<div class="pull-left left3 flex align-items-center justify-content-center">
						<span>Đường dây nóng sức khỏe:<br>
							<strong>1800 - 6181</strong>
						</span>
					</div>
				</div>
			</div>
			<div class="line1">
				<div class="tabs clearfix row">
					<div class="col-xs-4 active dis-table"><div class="flex align-items-center justify-content-center text-center table-cell">Dịch vụ<br>Nam Khang</div></div>
					<div class="col-xs-4 dis-table"><div class="flex align-items-center justify-content-center text-center table-cell">Môi trường<br>Nam Khang</div></div>
					<div class="col-xs-4 dis-table"><div class="flex align-items-center justify-content-center text-center table-cell">Thiết bị<br>Nam Khang</div></div>
				</div>
				<div class="contents">
					<div class="active">
						<div class="dv-nk row">
							<div class="mypad col-sm-4">
								<img src="{{ asset('public/images/chuyende/mobile/suimaoga/dv-1.png') }}" alt="" class="img-responsive center-block">
							</div>
							<div class="mypad col-sm-4">
								<img src="{{ asset('public/images/chuyende/mobile/suimaoga/dv-2.png') }}" alt="" class="img-responsive center-block">
							</div>
							<div class="mypad col-sm-4">
								<img src="{{ asset('public/images/chuyende/mobile/suimaoga/dv-3.png') }}" alt="" class="img-responsive center-block">
							</div>
							<div class="mypad col-sm-4">
								<img src="{{ asset('public/images/chuyende/mobile/suimaoga/dv-4.png') }}" alt="" class="img-responsive center-block">
							</div>
							<div class="mypad col-sm-4">
								<img src="{{ asset('public/images/chuyende/mobile/suimaoga/dv-5.png') }}" alt="" class="img-responsive center-block">
							</div>
						</div>
						<script>
							$('.dv-nk').slick({
								// autoplay: true,
								slidesToShow: 3,
			  					slidesToScroll: 1,
								autoplaySpeed: 2000,
								responsive: [
							    {
							      breakpoint: 1024,
							      settings: {
							        slidesToShow: 3,
							        slidesToScroll: 1,
							        infinite: true,
							        dots: true
							      }
							    },
							    {
							      breakpoint: 600,
							      settings: {
							        slidesToShow: 2,
							        slidesToScroll: 1
							      }
							    },
							    {
							      breakpoint: 480,
							      settings: {
							        slidesToShow: 2,
							        slidesToScroll: 1
							      }
							    }]
							});
						</script>
					</div>
					<div class="active">
						<div class="mt-nk row">
							<div class="mypad col-sm-4">
								<img src="{{ asset('public/images/chuyende/mobile/suimaoga/mt-1.png') }}" alt="" class="img-responsive center-block">
							</div>
							<div class="mypad col-sm-4">
								<img src="{{ asset('public/images/chuyende/mobile/suimaoga/mt-2.png') }}" alt="" class="img-responsive center-block">
							</div>
							<div class="mypad col-sm-4">
								<img src="{{ asset('public/images/chuyende/mobile/suimaoga/mt-3.png') }}" alt="" class="img-responsive center-block">
							</div>
							<div class="mypad col-sm-4">
								<img src="{{ asset('public/images/chuyende/mobile/suimaoga/mt-4.png') }}" alt="" class="img-responsive center-block">
							</div>
							<div class="mypad col-sm-4">
								<img src="{{ asset('public/images/chuyende/mobile/suimaoga/mt-5.png') }}" alt="" class="img-responsive center-block">
							</div>
							<div class="mypad col-sm-4">
								<img src="{{ asset('public/images/chuyende/mobile/suimaoga/mt-6.png') }}" alt="" class="img-responsive center-block">
							</div>
						</div>
						<script>
							$('.mt-nk').slick({
								// autoplay: true,
								slidesToShow: 3,
			  					slidesToScroll: 1,
								autoplaySpeed: 3000,
								responsive: [
							    {
							      breakpoint: 1024,
							      settings: {
							        slidesToShow: 3,
							        slidesToScroll: 1,
							        infinite: true,
							        dots: true
							      }
							    },
							    {
							      breakpoint: 600,
							      settings: {
							        slidesToShow: 2,
							        slidesToScroll: 1
							      }
							    },
							    {
							      breakpoint: 480,
							      settings: {
							        slidesToShow: 2,
							        slidesToScroll: 1
							      }
							    }]
							});
						</script>
					</div>
					<div class="active">
						<div class="tb-nk row">
							<div class="mypad col-sm-4">
								<img src="{{ asset('public/images/chuyende/mobile/suimaoga/tb-1.png') }}" alt="" class="img-responsive center-block">
							</div>
							<div class="mypad col-sm-4">
								<img src="{{ asset('public/images/chuyende/mobile/suimaoga/tb-2.png') }}" alt="" class="img-responsive center-block">
							</div>
							<div class="mypad col-sm-4">
								<img src="{{ asset('public/images/chuyende/mobile/suimaoga/tb-3.png') }}" alt="" class="img-responsive center-block">
							</div>
							<div class="mypad col-sm-4">
								<img src="{{ asset('public/images/chuyende/mobile/suimaoga/tb-4.png') }}" alt="" class="img-responsive center-block">
							</div>
						</div>
						<script>
							$('.tb-nk').slick({
								// autoplay: true,
								slidesToShow: 3,
			  					slidesToScroll: 1,
								autoplaySpeed: 4000,
								responsive: [
							    {
							      breakpoint: 1024,
							      settings: {
							        slidesToShow: 3,
							        slidesToScroll: 1,
							        infinite: true,
							        dots: true
							      }
							    },
							    {
							      breakpoint: 600,
							      settings: {
							        slidesToShow: 2,
							        slidesToScroll: 1
							      }
							    },
							    {
							      breakpoint: 480,
							      settings: {
							        slidesToShow: 2,
							        slidesToScroll: 1
							      }
							    }]
							});
						</script>
					</div>
				</div>
			</div>
			<script>
				function open_tuvan(){
					window.open("http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en","_blank");
				}
				$(document).ready(function() {
					setTimeout(function(){
					    //do what you need here
						$('.contents >div').eq(0).addClass('active').siblings('div').removeClass('active');
					}, 2000);

					$('.tabs >div').on('click', function(event) {
						event.preventDefault();
						/* Act on the event */
						var index = $(this).index();
						// $('.contents >div').eq(index).children('div').first().slick('slickNext');
						$(this).addClass('active').siblings('div').removeClass('active');
						$('.contents >div').eq(index).addClass('active').siblings('div').removeClass('active');

					});	
				});
			</script>
		</div>
		<div class="row15">
			<div class="text-center text-uppercase line1"><strong>Kênh đặt hẹn trực tuyến</strong></div>
			<div class="text-center line2">
				<div class="row">
					<div class="col-xs-3">__________</div>
					<div class="col-xs-6 text1">Online Registration Platform</div>
					<div class="col-xs-3">__________</div>
				</div>
			</div>
			<div class="radius1">
				<div class="text-center text-uppercase red1 line3">(Trang web này đã được bảo mật, tuyệt đối đảm bảo thông tin cá nhân)</div>
				<form action="{{ url('sendmail') }}" method="post" id="formMailSend">
					{{ csrf_field() }}
					<div class="row form-group">
						<div class="col-sm-4 red1 text-uppercase text-right">
							Họ tên bệnh nhân :
						</div>
						<div class="col-sm-8">
							<input type="text" name="ho_va_ten" required>
						</div>
					</div>
					<div class="row form-group">
						<div class="col-sm-4 red1 text-uppercase text-right">
							Số điện thoại :
						</div>
						<div class="col-sm-8">
							<input type="text" name="phone" required>
						</div>
					</div>
					<div class="row form-group">
						<div class="col-sm-4 red1 text-uppercase text-right">
							thời gian đặt hẹn :
						</div>
						<div class="col-sm-8">
							<input type="text" name="thoigian" required>
						</div>
					</div>
					<div class="row form-group">
						<div class="col-sm-4 red1 text-uppercase text-right">
							Miêu tả bệnh tình :
						</div>
						<div class="col-sm-8">
							<textarea name="mieutabenh" rows="4"></textarea>
						</div>
					</div>
					<div class="buttons">
						<div class="row">
							<div class="col-sm-6">
								<button type="submit" class="text-uppercase text-center btn">Bấm gửi</button>
							</div>
							<div class="col-sm-6">
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" type="button" class="text-uppercase text-center btn flex align-items-center justify-content-center bg1">Bác sĩ tư vấn</a>
							</div>
						</div>
					</div>
				</form>
				<script>
					$(document).ready(function() {
						$('#formMailSend').ajaxForm(function() { 
			                alert("Cảm ơn bạn đã đăng ký!"); 
			                $('#formMailSend').resetForm();
			            });	
					});
				</script>
			</div>
			<div class="des1">
				<div class="row">
					<div class="col-sm-7">
						<div>
							Đặt hẹn qua điện thoại<br>không cần xếp hàng, ưu tiên thăm khám
						</div>
						<div class="dis-table">
							<i class="bg1 table-cell"></i>
							<span class="text-uppercase table-cell">Gọi điện thoại đặt lịch trước</span>
						</div>
					</div>
					<div class="col-sm-5">
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
			<div class="des2">
				<div class="row">
					<div class="col-sm-9 text-center">
						<div>Chúng tôi có phương pháp chữa sùi mào gà, mụn rộp sinh dục</div>
						<div class="text-center">
							<div class="dis-table">
								<div class="table-cell">
									<i class="bg1"></i>
								</div>
								<div class="table-cell">
									<i class="bg2"></i>
								</div>
								<div class="table-cell">
									<a href="tel:18006181">1800 - 6181</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-3 text-center">
						<a href="" class="dis-table">
							<span class="table-cell">Gọi điện thoại<br>miễn phí</span>
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