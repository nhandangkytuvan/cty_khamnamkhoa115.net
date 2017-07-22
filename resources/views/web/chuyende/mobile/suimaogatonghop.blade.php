@extends('layout.chuyende-mobile')
<!-- title -->
@section('title')
	<title>Bệnh xã hội nam nữ</title>
@endsection('title')
<!-- seo -->
@section('keyword')
	@include('seo.seo_home')
@endsection('keyword')
<!-- css -->
@section('css')
<link rel="canonical" href="{{ url('chuyen-de/sui-mao-ga-tong-hop') }}" />
<link rel="stylesheet" href="{{ asset('public/css/chuyende/mobile/bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('public/css/chuyende/mobile/sui-mao-ga-tong-hop.css') }}">
@endsection('css')
<!-- logo -->
@section('logo')
<img src="{{ asset('public/images/chuyende/mobile/suimaogatonghop/logo.png') }}" class="center-block">
@endsection('logo')
<!-- doc -->
@section('doc')
<img src="{{ asset('public/images/chuyende/mobile/suimaogatonghop/doc.png') }}" alt="doc">
@endsection('doc')
<!-- banner -->
@section('banner')
	<img src="{{ asset('public/images/chuyende/mobile/suimaogatonghop/1.png') }}" alt="Phòng khám Nam Khang" class="center-block img-responsive">
@endsection('banner')
<!-- content -->
@section('content')
	<div class="container chuyende">
		<div class="global1 padlr15">
			<table class="width-100">
				<tr>
					<td>SÙI MÀO GÀ là gì? Bạn đã biết chưa?</td>
					<td><a href="tel:18006181" class="text-uppercase">click gọi điện</a></td>
				</tr>
			</table>
		</div>
		<div class="row1 padlr15">
			<div class="clearfix clearfix1">
				<div class="pull-left">
					<img src="{{ asset('public/images/chuyende/mobile/suimaogatonghop/2.png') }}" alt="">
				</div>
				<div>
					<p><span class="text-uppercase color1">Sùi mào gà</span> (tên gọi khác: <span class="color2">mồng gà, mụn cóc sinh dục, mụn cóc hoa liễu</span>)</p>
					<p>Là một dạng bệnh truyền nhiễm có mức độ lây nhiễm mạnh, độ nguy hiểm cao, chủ yếu lây nhiễm trực tiếp thông qua con đường tình dục… <a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">【Chi tiết】</a></p>
				</div>
			</div>
			<table class="width-100 table1">
				<tr>
					<td>Nam giới</td>
					<td>
						<a class="dis-inline-block">Quy đầu</a>
						<a class="dis-inline-block">Rãnh quy đầu</a>
						<a class="dis-inline-block">Bao quy đầu</a>
						<a class="dis-inline-block">Dương vật</a>
						<a class="dis-inline-block">Hậu môn</a>
					</td>
				</tr>
			</table>
			<div class="grild1 row">
				<div class="col-xs-6 col-sm-3 active">
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><div class="dis-table width-100"><span class="table-cell">Triệu chứng phổ biến</span></div></a>
				</div>
				<div class="col-xs-6 col-sm-3">
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><div class="dis-table width-100"><span class="table-cell">Mụn thịt</span></div></a>
				</div>
				<div class="col-xs-6 col-sm-3">
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><div class="dis-table width-100"><span class="table-cell">Nốt sùi dạng<br>hoa súp lơ</span></div></a>
				</div>
				<div class="col-xs-6 col-sm-3">
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><div class="dis-table width-100"><span class="table-cell">Nốt thịt</span></div></a>
				</div>
				
				<div class="col-xs-6 col-sm-3">
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><div class="dis-table width-100"><span class="table-cell">Nốt mụn</span></div></a>
				</div>
				<div class="col-xs-6 col-sm-3">
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><div class="dis-table width-100"><span class="table-cell">Mụn</span></div></a>
				</div>
				<div class="col-xs-6 col-sm-3">
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><div class="dis-table width-100"><span class="table-cell">Mụn sần</span></div></a>
				</div>
				<div class="col-xs-6 col-sm-3">
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><div class="dis-table width-100"><span class="table-cell">U nhú</span></div></a>
				</div>
			</div>
			<table class="width-100 table1">
				<tr>
					<td>Nữ giới</td>
					<td>
						<a class="dis-inline-block">Âm đạo</a>
						<a class="dis-inline-block">Môi âm hộ</a>
						<a class="dis-inline-block">Lỗ niệu đạo</a>
						<a class="dis-inline-block">Cổ tử cung</a>
						<a class="dis-inline-block">Đáy chậu</a>
					</td>
				</tr>
			</table>
			<div class="grild1 row">
				<div class="col-xs-6 col-sm-3 active">
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><div class="dis-table width-100"><span class="table-cell">Triệu chứng phổ biến</span></div></a>
				</div>
				<div class="col-xs-6 col-sm-3">
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><div class="dis-table width-100"><span class="table-cell">Mụn sần màu đỏ</span></div></a>
				</div>
				<div class="col-xs-6 col-sm-3">
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><div class="dis-table width-100"><span class="table-cell">Mọc nhiều nốt sùi<br>dạng hoa súp lơ</span></div></a>
				</div>
				<div class="col-xs-6 col-sm-3">
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><div class="dis-table width-100"><span class="table-cell">U nhú</span></div></a>
				</div>
				
				<div class="col-xs-6 col-sm-3">
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><div class="dis-table width-100"><span class="table-cell">Mọc mụn đỏ</span></div></a>
				</div>
				<div class="col-xs-6 col-sm-3">
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><div class="dis-table width-100"><span class="table-cell">Nốt mụn lỗ âm đạo</span></div></a>
				</div>
				<div class="col-xs-6 col-sm-3">
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><div class="dis-table width-100"><span class="table-cell">Mụn thịt</span></div></a>
				</div>
				<div class="col-xs-6 col-sm-3">
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><div class="dis-table width-100"><span class="table-cell">Mụn gai</span></div></a>
				</div>
			</div>
			<!--  -->
			<div class="global2">
				<table class="width-100">
					<tr>
						<td>
							<a class="dis-table width-100 cell1" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
								<span class="table-cell"><i class="fa fa-phone" aria-hidden="true"></i></span>
								<span class="table-cell text-uppercase">Miễn phí toàn bộ cuộc gọi</span>
							</a>
						</td>
						<td>
							<a class="dis-table width-100 cell2" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
								<span class="table-cell pos-relative">
									<i class="fa fa-comments" aria-hidden="true"></i>
									<i class="number pos-absolute">6</i>
								</span>
								<span class="table-cell text-uppercase">Click tư vấn trực tuyến</span>
							</a>
						</td>
					</tr>
				</table>
			</div>
		</div>
		<div class="global1 padlr15">
			<table class="width-100">
				<tr>
					<td>Đối chiếu triệu chứng sùi mào gà</td>
					<td><a href="tel:18006181" class="text-uppercase">click gọi điện</a></td>
				</tr>
			</table>
		</div>
		<div class="row2 padlr15">
			<div class="grild1 row">
				<div class="col-xs-6 col-sm-3">
					<div class="pos-relative">
						<img src="{{ asset('public/images/chuyende/mobile/suimaogatonghop/4.png') }}" alt="" class="center-block img-responsive">
						<span class="pos-absolute">Mọc nốt thịt ở dương vật</span>
					</div>
				</div>
				<div class="col-xs-6 col-sm-3">
					<div class="pos-relative">
						<img src="{{ asset('public/images/chuyende/mobile/suimaogatonghop/5.png') }}" alt="" class="center-block img-responsive">
						<span class="pos-absolute">Quy đầu nổi nhọt</span>
					</div>
				</div>
				<div class="col-xs-6 col-sm-3">
					<div class="pos-relative">
						<img src="{{ asset('public/images/chuyende/mobile/suimaogatonghop/6.png') }}" alt="" class="center-block img-responsive">
						<span class="pos-absolute">Lỗ niệu đạo mọc mụn thịt</span>
					</div>
				</div>
				<div class="col-xs-6 col-sm-3">
					<div class="pos-relative">
						<img src="{{ asset('public/images/chuyende/mobile/suimaogatonghop/7.png') }}" alt="" class="center-block img-responsive">
						<span class="pos-absolute">Rãnh bao quy đầu mọc u nhú</span>
					</div>
				</div>
				<div class="col-xs-6 col-sm-3">
					<div class="pos-relative">
						<img src="{{ asset('public/images/chuyende/mobile/suimaogatonghop/8.png') }}" alt="" class="center-block img-responsive">
						<span class="pos-absolute">Âm hộ mọc nốt thịt</span>
					</div>
				</div>
				<div class="col-xs-6 col-sm-3">
					<div class="pos-relative">
						<img src="{{ asset('public/images/chuyende/mobile/suimaogatonghop/9.png') }}" alt="" class="center-block img-responsive">
						<span class="pos-absolute">Môi âm hộ mọc mụn thịt</span>
					</div>
				</div>
				<div class="col-xs-6 col-sm-3">
					<div class="pos-relative">
						<img src="{{ asset('public/images/chuyende/mobile/suimaogatonghop/10.png') }}" alt="" class="center-block img-responsive">
						<span class="pos-absolute">Đáy chậu mọc mụn thịt</span>
					</div>
				</div>
				<div class="col-xs-6 col-sm-3">
					<div class="pos-relative">
						<img src="{{ asset('public/images/chuyende/mobile/suimaogatonghop/11.png') }}" alt="" class="center-block img-responsive">
						<span class="pos-absolute">Âm đạo mọc u nhú dạng hoa súp lơ</span>
					</div>
				</div>
			</div>
			<p class="nhacnho" >Nhắc nhở: Nếu bạn có những triệu chứng trên, phải lập tức tới ngay các cơ sở chính quy để chẩn đoán chính xác</p>
			<!--  -->
			<div class="global3">
				<table class="width-100">
					<tr>
						<td>
							<a class="dis-table width-100 cell1" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
								<span class="table-cell"><img src="{{ asset('public/images/chuyende/mobile/suimaogatonghop/12.png') }}" alt=""></span>
								<div class="table-cell">
									<p class="">Cổng tư vấn cho bệnh nhân mới bị bệnh:</p>
									<p class="">1800 6181</p>
								</div>
							</a>
						</td>
						<td>
							<a class="dis-table width-100 cell2" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
								<span class="table-cell"><img src="{{ asset('public/images/chuyende/mobile/suimaogatonghop/13.png') }}" alt=""></span>
								<div class="table-cell">
									<p class="">Cổng tư vấn cho bệnh nhân tái phát:</p>
									<p class="">0243 - 9656999</p>
								</div>
							</a>
						</td>
					</tr>
				</table>
			</div>
		</div>
		<div class="global1 padlr15">
			<table class="width-100">
				<tr>
					<td>Triệu chứng phức tạp của sùi mào gà Biểu hiện bệnh ở nam và nữ không giống nhau</td>
					<td><a href="tel:18006181" class="text-uppercase">click gọi điện</a></td>
				</tr>
			</table>
		</div>
		<div class="row3 padlr15">
			<div class="row line1">
				<div class="col-xs-5">
					<img src="{{ asset('public/images/chuyende/mobile/suimaogatonghop/14.png') }}" alt="" class="img-responsive center-block">
				</div>
				<div class="col-xs-7">
					<div class="text-uppercase">Triệu chứng sùi mào gà ở Nam giới</div>
					<div class="text-justify">
						Giai đoạn đầu có các mụn viêm sần màu đỏ, dần dần mụn to và nhiều lên, xuất hiện mụn gai, mụn dạng mào gà, mụn dạng hoa súp lơ, kích thước cả to và nhỏ.
					</div>
				</div>
			</div>
			<div class="row line1">
				<div class="col-xs-5">
					<img src="{{ asset('public/images/chuyende/mobile/suimaogatonghop/15.png') }}" alt="" class="img-responsive center-block">
				</div>
				<div class="col-xs-7">
					<div class="text-uppercase">Triệu chứng sùi mào gà ở Nữ giới</div>
					<div class="text-justify">
						Bộ phận sinh dục ngứa ngáy, đau nhức cục bộ; biểu hiện thường gặp: mụn viêm nhỏ sần màu đỏ, có u nhọt lồi lên, hình thành u nhú dạng hoa súp lơ.
					</div>
				</div>
			</div>
			<div class="dis-table width-100 table1">
				<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="text-center table-cell">
					<div><span>Hỏi:</span> Tôi có những triệu chứng trên, có phải tôi đã bị nhiễm sùi mào gà không?</div>
				</a>
				<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="text-uppercase text-center table-cell">
					<div>Click tư vấn trực tuyến miễn phí</div>
				</a>
			</div>
		</div>
		<div class="global1 padlr15">
			<table class="width-100">
				<tr>
					<td>Tự chẩn đoán: Tìm hiểu mức độ sùi mào gà (HPV) của bạn</td>
					<td><a href="tel:18006181" class="text-uppercase">click gọi điện</a></td>
				</tr>
			</table>
		</div>
		<div class="row4 padlr15">
			<div class="clearfix clearfix1 pos-relative">
				<div class="pull-left">
					<img src="{{ asset('public/images/chuyende/mobile/suimaogatonghop/16.png') }}" alt="">
				</div>
				<div class="bg dis-inline-block">
					Triệu chứng giai đoạn đầu
				</div>
				<div class="pos-absolute">
					<img src="{{ asset('public/images/chuyende/mobile/suimaogatonghop/19.png') }}" alt="">
				</div>
				<div class="description">
					Bộ phận sinh dục xuất hiện các nốt hoặc mụn nhỏ, có cảm giác ngứa ngáy hoặc các cảm giác khó chịu khác.
				</div>
			</div>
			<div class="clearfix clearfix1 pos-relative">
				<div class="pull-left">
					<img src="{{ asset('public/images/chuyende/mobile/suimaogatonghop/17.png') }}" alt="">
				</div>
				<div class="bg dis-inline-block">
					Triệu chứng giai đoạn giữa
				</div>
				<div class="pos-absolute">
					<img src="{{ asset('public/images/chuyende/mobile/suimaogatonghop/19.png') }}" alt="">
				</div>
				<div class="description">
					Bộ phận sinh dục xuất hiện mụn hoặc mụn thịt nhỏ, có mùi hôi thối, kèm theo cảm giác toàn thân mệt mỏi, chóng mặt.
				</div>
			</div>
						<div class="clearfix clearfix1 pos-relative">
				<div class="pull-left">
					<img src="{{ asset('public/images/chuyende/mobile/suimaogatonghop/18.png') }}" alt="">
				</div>
				<div class="bg dis-inline-block">
					Triệu chứng giai đoạn cuối
				</div>
				<div class="pos-absolute">
					<img src="{{ asset('public/images/chuyende/mobile/suimaogatonghop/19.png') }}" alt="">
				</div>
				<div class="description">
					Bộ phận sinh dục có mụn dạng mào gà, dạng gai, dạng hoa súp lơ… và có tình trạng sưng đỏ, lở loét, có nguy cơ chuyển biến ác tính.
				</div>
			</div>
			<div class="global2">
				<table class="width-100">
					<tr>
						<td>
							<a class="dis-table width-100 cell1" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
								<span class="table-cell"><i class="fa fa-phone" aria-hidden="true"></i></span>
								<span class="table-cell text-uppercase">Miễn phí toàn bộ cuộc gọi</span>
							</a>
						</td>
						<td>
							<a class="dis-table width-100 cell2" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
								<span class="table-cell pos-relative">
									<i class="fa fa-comments" aria-hidden="true"></i>
									<i class="number pos-absolute">6</i>
								</span>
								<span class="table-cell text-uppercase">Click tư vấn trực tuyến</span>
							</a>
						</td>
					</tr>
				</table>
			</div>
		</div>
		<div class="global1 padlr15">
			<table class="width-100">
				<tr>
					<td>Sùi mào gà trở nên trầm trọng, không nên xem thường tác hại của bệnh</td>
					<td><a href="tel:18006181" class="text-uppercase">click gọi điện</a></td>
				</tr>
			</table>
		</div>
		<div class="row5 padlr15">
			<div class="row grild1">
				<div class="col-xs-6 col-sm-3">
					<div class="circle-text bg1"><div>Đặc điểm<br>lây nhiễm mạnh</div></div>
				</div>
				<div class="col-xs-6 col-sm-3">
					<div class="circle-text bg2"><div>Nguy hại<br>tới hôn nhân</div></div>
				</div>
				<div class="col-xs-6 col-sm-3">
					<div class="circle-text bg3"><div>Ảnh hưởng<br>đến sinh sản</div></div>
				</div>
				<div class="col-xs-6 col-sm-3">
					<div class="circle-text bg4"><div>Dễ biến chuyển<br>sang ung thư</div></div>
				</div>
			</div>
			<div class="img"><img src="{{ asset('public/images/chuyende/mobile/suimaogatonghop/20.png') }}" alt="" class="center-block img-responsive"></div>
			<div class="dis-table width-100 table1">
				<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="text-center table-cell">
					<div><span>Hỏi:</span> Sùi mào gà chữa trị như thế nào? Có thể chữa khỏi không?</div>
				</a>
				<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="text-uppercase text-center table-cell">
					<div>Click tư vấn trực tuyến miễn phí</div>
				</a>
			</div>
		</div>
		<div class="global1 padlr15">
			<table class="width-100">
				<tr>
					<td>Không cẩn thận đã bị nhiễm sùi mào gà<br>làm thế nào để tránh tái phát?</td>
					<td><a href="tel:18006181" class="text-uppercase">click gọi điện</a></td>
				</tr>
			</table>
		</div>
		<div class="row6 padlr15">
			<div class="description">
				Muốn trút bỏ gánh nặng sùi mào gà bắt buộc phải điều trị bằng khoa học! Trong quá trình tiếp nhận các ca bệnh lâm sàng phát hiện thấy: Đa số các ca nhiễm do không hiểu biết rõ ràng về bệnh nên chữa trị mù quáng, xem thường bác sĩ và các cơ sở chữa trị chuyên nghiệp, cuối cùng không những không chữa khỏi bệnh mà còn lãng phí phần lớn thời gian và tiền bạc, thậm chí khiến bệnh tình chuyển biến ác tính… <a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">[Tư vấn chi tiết]</a>
			</div>
			<div class="name">
				Liệu pháp điều trị quang động lực IRA<br>Biện pháp khoa học chữa sùi mào gà
			</div>
			<div class="xetnghiem">
				<h3>
					<span class="dis-table"><span class="table-cell">Bước 1: Xét nghiệm chính xác</span></span>
				</h3>
				<div class="clearfix">
					<div class="pull-left">
						<img src="{{ asset('public/images/chuyende/mobile/suimaogatonghop/22.png') }}" alt="">	
					</div>
					<div class="mota">
						Liệu pháp quang động lực IRA sử dụng kỹ thuật xét nghiệm kiểm tra tiên tiến, tiến hành xét nghiệm nhanh chóng và phân hình định lượng tình trạng virus bệnh của người bệnh, dựa trên báo cáo phân tích và kết quả kiểm tra bệnh lý khoa học để xác định phương án điều trị bệnh… <a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">[Tư vấn chi tiết]</a>
					</div>
				</div>
			</div>
			<div class="xetnghiem2">
				<h3><span class="dis-table"><span class="table-cell">Bước 2: Ngăn chặn virus bệnh</span></span></h3>
				<div class="clearfix">
					<div class="pull-right">
						<img src="{{ asset('public/images/chuyende/mobile/suimaogatonghop/24.png') }}" alt="">	
					</div>
					<div class="mota">
						Liệu pháp quang động lực IRA sử dụng trang thiết bị máy móc để ngăn chặn virus bệnh HPV sùi mào gà trong cơ thể người bệnh ở cả giai đoạn thụ động và hoạt động của virus bệnh… <a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">[Tư vấn chi tiết]</a>
					</div>
				</div>
			</div>
			<div class="xetnghiem">
				<h3 class="bg3"><span class="dis-table"><span class="table-cell">Bước 3: Tiến hành tăng cường sức đề kháng</span></span></h3>
				<div class="clearfix">
					<div class="pull-left">
						<img src="{{ asset('public/images/chuyende/mobile/suimaogatonghop/25.png') }}" alt="">	
					</div>
					<div class="mota">
						Kích thích đồng thời tăng cường một số tổ chức bên trong cơ thể sản sinh ra sức đề kháng tiêu diệt virus bệnh trong cơ thể… <a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">[Tư vấn chi tiết]</a>
					</div>
				</div>
			</div>
			<div class="xetnghiem2">
				<h3><span class="dis-table"><span class="table-cell">Bước 4: Xây dựng mạng lưới phòng bệnh</span></span></h3>
				<div class="clearfix">
					<div class="pull-right">
						<img src="{{ asset('public/images/chuyende/mobile/suimaogatonghop/27.png') }}" alt="">	
					</div>
					<div class="mota">
						Liệu pháp quang động lực IRA thông qua virus bệnh xây dựng nên “Tường phòng thủ”, bài trừ virus bệnh trong cơ thể ra bên ngoài, hồi phục các tổ chức bị tổn thương và đẩy mạng sự sinh sôi của các tổ chức khác, khiến cho sùi mào gà tự động rút lui… <a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">[Tư vấn chi tiết]</a>
					</div>
				</div>
			</div>
			<div class="hieuqua">
				<span>Điều trị sùi mào gà</span>
				<span>Hiệu quả thấy rõ</span>
			</div>
			<div class="row grild1">
				<div class="col-xs-12 col-sm-4">
					<div class="img">
						<img src="{{ asset('public/images/chuyende/mobile/suimaogatonghop/28.png') }}" alt="" class="center-block">
					</div>
					<h4 class="text-center">Điều trị giai đoạn đầu</h4>
					<p class="text-justify">
						Mụn nhọt dần dần teo nhỏ, trở lại màu trắng, teo khô rõ ràng, không còn cảm giác ngứa ngáy khó chịu.
					</p>
				</div>
				<div class="col-xs-12 col-sm-4">
					<div class="img">
						<img src="{{ asset('public/images/chuyende/mobile/suimaogatonghop/29.png') }}" alt="" class="center-block">
					</div>
					<h4 class="text-center">Điều trị giai đoạn giữa</h4>
					<p class="text-justify">
						Kích thích kháng thể trong cơ thể, diệt trừ mạnh mẽ virus bệnh, nhanh chóng hồi phục các tổ chức bị tổn thương.
					</p>
				</div>
				<div class="col-xs-12 col-sm-4">
					<div class="img">
						<img src="{{ asset('public/images/chuyende/mobile/suimaogatonghop/30.png') }}" alt="" class="center-block">
					</div>
					<h4 class="text-center">Điều trị giai đoạn cuối</h4>
					<p class="text-justify">
						Làm mạnh các yếu tố miễn dịch, tăng cường kháng thể, thành lập hệ thống phòng thủ virus bệnh.
					</p>
				</div>
			</div>
			<div class="row grild2">
				<div class="col-sm-2 col-xs-6 pos-relative">
					<div class="text-center bg1">
						An toàn nhanh hồi phục
					</div>
					<div class="pos-absolute">
						<img src="{{ asset('public/images/chuyende/mobile/suimaogatonghop/31.png') }}" alt="">
					</div>
				</div>
				<div class="col-sm-2 col-xs-6 pos-relative">
					<div class="text-center bg2">
						Nhanh chóng tiêu diệt virus bệnh
					</div>
					<div class="pos-absolute">
						<img src="{{ asset('public/images/chuyende/mobile/suimaogatonghop/31.png') }}" alt="">
					</div>
				</div>
				<div class="col-sm-2 col-xs-6 pos-relative">
					<div class="text-center bg3">
						Liệu trình ngắn hiệu quả tốt
					</div>
					<div class="pos-absolute">
						<img src="{{ asset('public/images/chuyende/mobile/suimaogatonghop/31.png') }}" alt="">
					</div>
				</div>
				<div class="col-sm-2 col-xs-6 pos-relative">
					<div class="text-center bg4">
						Chữa ngay xong ngay
					</div>
					<div class="pos-absolute">
						<img src="{{ asset('public/images/chuyende/mobile/suimaogatonghop/31.png') }}" alt="">
					</div>
				</div>
				<div class="col-sm-2 col-xs-6 pos-relative">
					<div class="text-center bg5">
						Phản hồi qua nhiều năm không tái phát
					</div>
				</div>
			</div>
			<div class="dis-table width-100 table1">
				<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="text-center table-cell">
					<div>
						Hiệu quả tốt vậy sao? Lo lắng chi phí cao? Click hỏi bác sĩ
						<img src="{{ asset('public/images/chuyende/mobile/suimaogatonghop/32.png') }}" alt="">
					</div>
				</a>
				<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="text-uppercase text-center table-cell">
					<div>Click gọi điện miễn phí<br><span>1800 - 6181</span></div>
				</a>
			</div>
		</div>
		<div class="global1 padlr15">
			<table class="width-100">
				<tr>
					<td>Tình hình hiện tại của bạn là?</td>
					<td><a href="tel:18006181" class="text-uppercase">click gọi điện</a></td>
				</tr>
			</table>
		</div>
		<div class="row7 padlr15">
			<div class="row grild1">
				<div class="col-xs-12 col-sm-6">
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><img src="{{ asset('public/images/chuyende/mobile/suimaogatonghop/33.png') }}" alt="" class="img-responsive center-block"></a>
				</div>
				<div class="col-xs-12 col-sm-6">
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><img src="{{ asset('public/images/chuyende/mobile/suimaogatonghop/34.png') }}" alt="" class="img-responsive center-block"></a>
				</div>
				<div class="col-xs-12 col-sm-6">
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><img src="{{ asset('public/images/chuyende/mobile/suimaogatonghop/35.png') }}" alt="" class="img-responsive center-block"></a>
				</div>
				<div class="col-xs-12 col-sm-6">
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><img src="{{ asset('public/images/chuyende/mobile/suimaogatonghop/36.png') }}" alt="" class="img-responsive center-block"></a>
				</div>
			</div>
			<div class="border">
				<div class="clearfix">
					<div class="pull-left">
						<table>
							<tr>
								<td><img src="{{ asset('public/images/chuyende/mobile/suimaogatonghop/37.png') }}" alt=""></td>
								<td>
									<p class="number"><span>48</span> người đang gọi, khám bệnh nhanh một bước</p>
									<p class="phone"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">1800 - 6181</a></p>	
								</td>
							</tr>
						</table>
					</div>
					<div class="pull-right">
						<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="pos-relative">
							Click gọi miễn phí
							<img src="{{ asset('public/images/chuyende/mobile/suimaogatonghop/38.png') }}" alt="" class="pos-absolute">
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="global1 padlr15">
			<table class="width-100">
				<tr>
					<td>Chuyên khoa Nam Khang Hà Nội<br>Chuyên điều trị sùi mào gà</td>
					<td><a href="tel:18006181" class="text-uppercase">click gọi điện</a></td>
				</tr>
			</table>
		</div>
		<div class="row8 padlr15">
			<div class="row grild1">
				<div class="col-xs-12 col-sm-5">
					<img src="{{ asset('public/images/chuyende/mobile/suimaogatonghop/39.png') }}" alt="" class="img-responsive center-block">
				</div>
				<div class="col-xs-12 col-sm-7">
					<h2 class="text-uppercase text-center">Phòng khám chuyên khoa Nam Khang</h2>
					<div class="pos-relative text-center">
						<div class="pos-absolute">
							<img src="{{ asset('public/images/chuyende/mobile/suimaogatonghop/40.png') }}">
							<img src="{{ asset('public/images/chuyende/mobile/suimaogatonghop/40.png') }}">
							<img src="{{ asset('public/images/chuyende/mobile/suimaogatonghop/40.png') }}">
							<img src="{{ asset('public/images/chuyende/mobile/suimaogatonghop/40.png') }}">
							<img src="{{ asset('public/images/chuyende/mobile/suimaogatonghop/40.png') }}">
						</div>
						<p>Chuyên trị sùi mào gà<br>
						Kết tạo phẩm chất chuyên nghiệp</p>
					</div>
					<div class="description text-justify">
						Giới thiệu vắn tắt: Phòng khám chuyên khoa Nam Khang là cơ sở điều trị chuyên nghiệp sùi mào gà, các bệnh mụn rộp sinh dục…. <a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">[Chi tiết]</a>
					</div>
					<div class="row grild2">
						<div class="col-xs-6">
							<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="bg1">Click tìm hiểu phòng khám</a>
						</div>
						<div class="col-xs-6">
							<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="bg2">Hỏi bệnh miễn phí</a>
						</div>
					</div>
				</div>
			</div>
			<div class="table1">
				<table class="width-100">
					<tr>
						<td>Dịch vụ Nam Khang 5 sao</td>
						<td>Bác sĩ và bệnh nhân là một gia đình</td>
					</tr>
				</table>
			</div>
			<div class="row grild3">
				<div class="col-xs-12 col-sm-6">
					<table class="width-100">
						<tr>
							<td>
								<h2 class="text-center">NHIỆT TÌNH</h2>
								<p class="text-center">Lấy đức làm mẫu</p>
								<p class="text-center">Tận chức tận trách</p>	
							</td>
							<td>
								<img src="{{ asset('public/images/chuyende/mobile/suimaogatonghop/46.png') }}" alt="">
							</td>
						</tr>
					</table>
				</div>
				<div class="col-xs-12 col-sm-6">
					<table class="width-100">
						<tr>
							<td>
								<h2 class="text-center">CHÂN TÌNH</h2>
								<p class="text-center">Coi trọng chân tình</p>
								<p class="text-center">Trao đổi từ tâm</p>	
							</td>
							<td>
								<img src="{{ asset('public/images/chuyende/mobile/suimaogatonghop/47.png') }}" alt="">
							</td>
						</tr>
					</table>
				</div>
				<div class="col-xs-12 col-sm-6">
					<table class="width-100">
						<tr>
							<td>
								<h2 class="text-center">CHUYÊN TÂM</h2>
								<p class="text-center">Tinh hoa làm chuẩn</p>
								<p class="text-center">Trình độ vượt bậc</p>	
							</td>
							<td>
								<img src="{{ asset('public/images/chuyende/mobile/suimaogatonghop/41.png') }}" alt="">
							</td>
						</tr>
					</table>
				</div>
				<div class="col-xs-12 col-sm-6">
					<table class="width-100">
						<tr>
							<td>
								<h2 class="text-center">THÂN THIẾT</h2>
								<p class="text-center">Ưu tiên chữ “ái”</p>
								<p class="text-center">Phục vụ tận tâm</p>	
							</td>
							<td>
								<img src="{{ asset('public/images/chuyende/mobile/suimaogatonghop/42.png') }}" alt="">
							</td>
						</tr>
					</table>
				</div>
				<div class="col-xs-12 col-sm-6">
					<table class="width-100">
						<tr>
							<td>
								<h2 class="text-center">AN TÂM</h2>
								<p class="text-center">Lấy tín làm đức</p>
								<p class="text-center">Chăm sóc chu toàn</p>	
							</td>
							<td>
								<img src="{{ asset('public/images/chuyende/mobile/suimaogatonghop/44.png') }}" alt="">
							</td>
						</tr>
					</table>
				</div>
				<div class="col-xs-12 col-sm-6 last">
					<div>
						<a class="dis-block phone1">
						<img src="{{ asset('public/images/chuyende/mobile/suimaogatonghop/48.png') }}" alt="">
							0243 - 9656999
						</a>
						<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="dis-block phone2">Click tư vấn trực tuyến miễn phí</a>
					</div>
				</div>
			</div>
		</div>
		<div class="global1 padlr15 global4">
			<table class="">
				<tr>
					<td><img src="{{ asset('public/images/chuyende/mobile/suimaogatonghop/49.png') }}" alt=""></td>
					<td>Dịch vụ xếp số trực tuyến</td>
				</tr>
			</table>
		</div>
		<div class="row9 padlr15">
			<p class="line1">(Trang web này đã được bảo mật, bảo đảm an toàn tuyệt đối thông tin cá nhân)</p>
			<form action="{{ url('sendmail') }}" method="post" id="formMailSend">
				{{ csrf_field() }}
				<table class="width-100 table1">
					<tr>
						<td>Họ tên bệnh nhân :</td>
						<td><input type="text" name="ho_va_ten" required></td>
					</tr>
					<tr>
						<td>Điện thoại liên hệ :</td>
						<td><input type="number" name="phone" required></td>
					</tr>
					<tr>
						<td>Thời gian đến khám :</td>
						<td><input type="date"  name="thoigian" required></td>
					</tr>
					<tr>
						<td>Miêu tả bệnh tình :</td>
						<td>
							<textarea name="mieutabenh" rows="5"></textarea>
						</td>
					</tr>
					<tr>
						<td><button type="submit">ok</button></td>
						<td><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Tư vấn trực tuyến</a></td>
					</tr>
				</table>
			</form>
			<script>
				$(document).ready(function() {
					$('#formMailSend').ajaxForm({
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
			<div class="dathen">
				<table class="width-100">
					<tr>
						<td>
							<p>	
								Đặt hẹn qua điện thoại<br>
								Miễn xếp hàng<br>
								Ưu tiên thăm khám
							</p>
							<a href="" class="dis-table width-100">
								<span class="table-cell"><i class="fa fa-phone"></i></span>
								<span class="table-cell">Gọi điện thoại đặt hẹn trước</span>
							</a>
						</td>
						<td>
							<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="dis-table width-100"><span class="table-cell">Đặt hẹn trong ngày</span></a>
							<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="dis-table width-100"><span class="table-cell">Khám chữa trong ngày</span></a>
							<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="dis-table width-100"><span class="table-cell">Cả năm không ngày nghỉ</span></a>
						</td>
					</tr>
				</table>
			</div>
			<div class="dieutri clearfix">
				<div class="row">
					<div class="col-xs-12 col-sm-8">
						<p>
							<span>Điều trị sùi mào gà</span>
							<span>Chúng tôi có biện pháp</span>
						</p>
						<p>
							0243.9656999 - 1800-6181	
						</p>
					</div>
					<div class="col-xs-12 col-sm-4">
						<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="text-uppercase">gọi miễn phí</a>
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
	<div id="myloadding"><div id="mytext">Xin chờ chút...</div></div>
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