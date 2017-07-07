@extends('layout.chuyende-mobile')
<!-- title -->
@section('title')
	<title>Tinh hoàn đau nhức</title>
@endsection('title')
<!-- seo -->
@section('keyword')
	@include('seo.seo_home')
@endsection('keyword')
<!-- css -->
@section('css')
<link rel="canonical" href="{{ url('chuyen-de/tinh-hoan') }}" />
<link rel="stylesheet" href="{{ asset('public/css/chuyende/mobile/bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('public/css/chuyende/mobile/tinh-hoan.css') }}">
@endsection('css')
<!-- logo -->
@section('logo')
<img src="{{ asset('public/images/chuyende/mobile/tinhhoan/tinhhoan-0.png') }}" class="center-block">
@endsection('logo')
<!-- doc -->
@section('doc')
<img src="{{ asset('public/images/chuyende/mobile/tinhhoan/tinhhoan-2.png') }}" alt="doc">
@endsection('doc')
<!-- banner -->
@section('banner')
	<img src="{{ asset('public/images/chuyende/mobile/tinhhoan/tinhhoan-1.png') }}" alt="Phòng khám Nam Khang" class="center-block img-responsive">
@endsection('banner')
<!-- content -->
@section('content')
	<div class="container chuyende">
		<div class="row1">
			<div class="text-center">
				<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="link dis-inline-block text-center">Lười đọc >> Click hỏi trực tiếp</a>
			</div>
			<div class="text1 text-justify">
				Tinh hoàn đau nhức? Cẩn thận mắc bệnh viêm tinh hoàn.
				Người mắc bệnh viêm tinh hoàn cần chú ý những triệu chứng sau:
			</div>
			<div class="row myrow1">
				<div class="col-xs-4 col-sm-3 text-center">
					<div class="circle-text text-uppercase"><div>Sốt</div></div>
					<div class="des text-center">Sốt, ớn lạnh</div>
				</div>
				<div class="col-xs-4 col-sm-3 text-center">
					<div class="circle-text text-uppercase"><div>ĐAU</div></div>
					<div class="des text-center">Tinh hoàn<br>đau nhức</div>
				</div>
				<div class="col-xs-4 col-sm-3 text-center">
					<div class="circle-text text-uppercase"><div>SƯNG</div></div>
					<div class="des text-center">Sưng bìu<br>tinh hoàn</div>
				</div>
				<div class="col-xs-4 col-sm-3 text-center">
					<div class="circle-text text-uppercase"><div>NHỨC</div></div>
					<div class="des text-center">Tinh hoàn đau<br>khi chịu áp lực</div>
				</div>
				<div class="col-xs-4 col-sm-3 text-center">
					<div class="circle-text text-uppercase"><div>TRƯỚNG</div></div>
					<div class="des text-center">Tinh hoàn<br>sưng trướng</div>
				</div>
				<div class="col-xs-4 col-sm-3 text-center">
					<div class="circle-text text-uppercase"><div>DỊCH</div></div>
					<div class="des text-center">Tràn dịch<br>màng tinh hoàn</div>
				</div>
				<div class="col-xs-4 col-sm-3 text-center">
					<div class="circle-text text-uppercase"><div>ĐỎ</div></div>
					<div class="des text-center">Bìu tinh hoàn<br>sưng đỏ</div>
				</div>
				<div class="col-xs-4 col-sm-3 text-center">
					<div class="circle-text text-uppercase"><div>TO</div></div>
					<div class="des text-center">Hạch bạch<br>huyết sưng to</div>
				</div>
				<div class="col-xs-4 col-sm-3 text-center">
					
				</div>
			</div>
			<div class="global2 text-center">
				<p>Tôi có những triệu chứng trên, phải làm sao?</p>
				<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="dis-inline-block text-center text-uppercase">
					Giải đáp trực tuyến 
					<img src="{{ asset('public/images/chuyende/mobile/tinhhoan/tinhhoan-3.png') }}" alt="">
				</a>
			</div>
			<div class="global2 text-center">
				<p>Xuất hiện triệu chứng cục bộ như trên, chưa chắc đã bị viêm tinh hoàn</p>
				<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="dis-inline-block text-center text-uppercase">
					Phân tích trực tuyến miễn phí
					<img src="{{ asset('public/images/chuyende/mobile/tinhhoan/tinhhoan-3.png') }}" alt="">
				</a>
			</div>
		</div>
		<div class="row2">
			<div class="global1">
				Việc không chữa trị kịp thời<br>
				những triệu chứng trên sẽ<br>
				gây ra những tác hại gì cho nam giới?
			</div>
			<div class="line1">
				<img src="{{ asset('public/images/chuyende/mobile/tinhhoan/tinhhoan-4.png') }}" alt="" class="center-block img-responsive">
			</div>
			<div class="des">
				Đã có <span>2287</span> trường hợp điều trị thông qua đặt hẹn trực tuyến, và trong ngày đã có những cải thiện rõ ràng về triệu chứng.
			</div>
			<div class="line2">
				<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><img src="{{ asset('public/images/chuyende/mobile/tinhhoan/tinhhoan-5.png') }}" alt="" class="center-block img-responsive"></a>
			</div>
		</div>
		<div class="row3">
			<div class="global1">
				Vậy thì, những nguyên nhân nào<br>
				dẫn đến viêm tinh hoàn?<br>
			</div>
			<div class="text1 text-justify">
				Dựa trên tổng kết kinh nghiệm trong chữa trị lâm sàng của phòng khám Nam Khang, viêm tinh hoàn được chia thành 3 loại, phân loại không giống nhau, nguyên nhân cũng khác nhau.
			</div>
			<div class="label">VIÊM TINH HOÀN CẤP TÍNH</div>
			<div class="text1 text-justify">
				Nhiều nguyên nhân do hậu phẫu cắt bỏ viêm niệu đạo, viêm bàng quang, viêm tiền liệt tuyến, tăng sinh tuyến tiền liệt; do người bệnh sử dụng ống dẫn tiểu trong thời gian dài; do các bệnh viêm nhiễm lây qua đường bạch huyết hoặc từ ống dẫn tinh lây sang túi tinh mà thành.
			</div>
			<div class="global2 text-center">
				<p>Liệu pháp điều trị viêm tinh hoàn cấp tính, hiệu quả trong ngày</p>
				<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="dis-inline-block text-center text-uppercase">
					Click tư vấn trực tuyến
					<img src="{{ asset('public/images/chuyende/mobile/tinhhoan/tinhhoan-3.png') }}" alt="">
				</a>
			</div>
			<div class="label">VIÊM TINH HOÀN MÃN TÍNH</div>
			<div class="text1 text-justify">
				Do không điều trị triệt để viêm tinh hoàn cấp tính mà tạo thành, cũng có thể do nấm, xoắn khuẩn, nhiễm ký sinh trùng gây nên.
			</div>
			<div class="global2 text-center">
				<p>Phương pháp chữa viêm tinh hoàn mãn tính hiệu quả nhanh</p>
				<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="dis-inline-block text-center text-uppercase">
					Click tư vấn trực tuyến
					<img src="{{ asset('public/images/chuyende/mobile/tinhhoan/tinhhoan-3.png') }}" alt="">
				</a>
			</div>

			<div class="label">Viêm tinh hoàn cấp tính do quai bị</div>
			<div class="text1 text-justify">
				Bệnh quai bị là nguyên nhân phổ biến dẫn đến viêm tinh hoàn, khoảng 30% các trường hợp bệnh là do quai bị gây nên.
			</div>
			<div class="global2 text-center">
				<p>Liệu pháp chữa trị viêm tinh hoàn cấp tính do quai bị, hiệu quả trong ngày</p>
				<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="dis-inline-block text-center text-uppercase">
					Click tư vấn trực tuyến
					<img src="{{ asset('public/images/chuyende/mobile/tinhhoan/tinhhoan-3.png') }}" alt="">
				</a>
			</div>
			<div class="machnho">
				<img src="{{ asset('public/images/chuyende/mobile/tinhhoan/tinhhoan-6.png') }}" alt="">
				<div class="bor">
					Để lâu không điều trị, viêm tinh hoàn sinh bực, vốn dĩ bệnh sẽ không ảnh hưởng tới chức năng sinh dục và dẫn đến nhiều chứng bệnh khác, cũng có thể chữa khỏi nhanh chóng; nhưng do không xem trọng, điều trị chậm trễ nên đã trở thành kết cục khác.
				</div>
			</div>
			<div class="global2 text-center">
				<p>Làm thế nào để điều trị viêm tinh hoàn hồi phục nhanh?</p>
				<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="dis-inline-block text-center text-uppercase">
					Miễn phí toàn bộ cước thoại, thuận tiện hơn
					<img src="{{ asset('public/images/chuyende/mobile/tinhhoan/tinhhoan-3.png') }}" alt="">
				</a>
			</div>
		</div>
		<div class="row4">
			<div class="global1">
				LÀM THẾ NÀO MỚI CÓ THỂ ĐIỀU<br>
				TRỊ HIỆU QUẢ VIÊM TINH HOÀN?<br>
			</div>
			<div class="text1 text-justify">
				Nam Khang Hà Nội dựa trên thực tiễn lâm sàng trong nhiều năm đã nghiên cứu đưa ra tổng kết bằng “Phương pháp điều trị CRS” chữa khỏi bệnh cho người bệnh, thời gian bình quân trong 3 ngày bệnh nhân đều có thế hồi phục.
			</div>
			<div class="text1 text2">
				<h2 class="text-center">Hệ thống điều trị sóng ngắn siêu dẫn CRS</h2>
				<div>
					<img src="{{ asset('public/images/chuyende/mobile/tinhhoan/tinhhoan-7.png') }}" alt="" class="center-block">
				</div>
				<div class="des text-center">Nhanh chóng loại bỏ các chứng viêm</div>
			</div>
			<div class="text3">
				Hệ thống điều trị bằng sóng ngắn siêu dẫn CRS là kỹ thuật chữa trị tân tiến trong lĩnh vực y học nam khoa, sử dụng hình thức trị liệu “Bất can thiệp, không đau đớn, không thương tích”, chuyên chữa trị viêm tinh hoàn nam giới. Trong quá trình điều trị, người bệnh chỉ cần nằm yên vị trên giường bệnh, chỉ cần 1-3 liệu trình là có thể chữa khỏi hoàn toàn viêm tinh hoàn; hơn nữa quá trình điều trị cũng không ảnh hưởng tới cuộc sống thường nhật của người bệnh. 
			</div>
			<div class="global2 text-center">
				<p>Click tư vấn chi tiết về CRS</p>
				<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="dis-inline-block text-center text-uppercase">
					Giải đáp trực tuyến
					<img src="{{ asset('public/images/chuyende/mobile/tinhhoan/tinhhoan-3.png') }}" alt="">
				</a>
			</div>
		</div>
		<div class="row5">
			<div class="line1">
				<img src="{{ asset('public/images/chuyende/mobile/tinhhoan/tinhhoan-8.png') }}" alt="" class="center-block">
			</div>
			<div class="text1">Trao đổi chi tiết qua điện thoại</div>
			<div class="textphone text-center"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">1800 - 6181</a></div>
			<div class="fonticon">
				<i class="fa fa-stop"></i>
				<i class="fa fa-stop"></i>
				<i class="fa fa-stop"></i>
			</div>
			<div class="table">
				<table>
					<tr>
						<td class="cell1">
							<a href="tel:18006181">
								<img src="{{ asset('public/images/chuyende/mobile/tinhhoan/tinhhoan-9.png') }}" alt="" class="center-block img-responsive">
							</a>
							<div class="text-center text-uppercase"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Hỏi trực tuyến</a></div>
						</td>
						<td class="cell2">
							<a href="tel:18006181">
								<img src="{{ asset('public/images/chuyende/mobile/tinhhoan/tel2.gif') }}" alt="" class="center-block img-responsive">
							</a>
							<div class="text-center text-uppercase"><a href="tel:18006181">Gọi ngay</a></div>
						</td>
					</tr>
				</table>
			</div>
		</div>
		<div class="row6">
			<h2>Phòng khám chuyên khoa Nam Khang Hà Nội</h2>
			<h3 class="text-center text-uppercase">DỊCH VỤ THĂM BỆNH QUA ZALO</h3>
			<div class="table">
				<div class="row">
					<div class="col-xs-12 col-sm-6">
						<img src="{{ asset('public/images/chuyende/mobile/tinhhoan/tinhhoan-10.png') }}" alt="" class="img-responsive center-block">
					</div>
					<div class="col-xs-12 col-sm-6">
						<p>
							Zalo trực tuyến 24h<br>
							Hỏi bệnh, tra chi phí mọi lúc mọi nơi<br>
							Chỉ có 0.1% người biết tới dịch vụ này<br>
							Mang dịch vụ Zalo về nhà<br>
						</p>
						<p class="el2">Giữ lâu, sao chép số Zalo</p>
						<p class="el3">
							<img src="{{ asset('public/images/chuyende/mobile/tinhhoan/tinhhoan-11.png') }}" alt="">
							<a href="tel:0963889057">0963889057</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection('content')
@section('toolbar')
	<div class="container footer-toolbar">
		<div class="dis-table width-100 forHome">
			<div class="table-cell">
				<div class="">
					<h3 class="text-center"><a href="tel:18006181"><i class="glyphicon glyphicon-phone-alt"></i></a></h3>
					<h4 class="text-center"><a href="tel:18006181">Gọi điện</a></h4>
				</div>
			</div>
			<div class="table-cell">
				<div class="">
					<h3 class="text-center"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><i class="fa fa-calendar"></i></a></h3>
					<h4 class="text-center"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Đặt hẹn</a></h4>
				</div>
			</div>
			<div class="table-cell">
				<div class="">
					<h3 class="text-center"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><i class="fa fa-comment"></i></a></h3>
					<h4 class="text-center"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Tư vấn</a></h4>
				</div>
			</div>
			<div class="table-cell">
				<div class="">
					<h3 class="text-center"><a href="{{ url('/dia-chi-phong-kham') }}"><i class="fa fa-map-marker"></i></a></h3>
					<h4 class="text-center"><a href="{{ url('/dia-chi-phong-kham') }}">Địa chỉ</a></h4>
				</div>
			</div>
		</div>
	</div>
@endsection('toolbar')