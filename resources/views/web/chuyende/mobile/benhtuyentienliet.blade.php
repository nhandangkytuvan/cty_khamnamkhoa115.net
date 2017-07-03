@extends('layout.layout-tuyentienliet')
<!-- title -->
@section('title')
	<title>Bệnh tuyến tiền liệt</title>
@endsection('title')
<!-- seo -->
@section('keyword')
	@include('seo.seo_home')
@endsection('keyword')
<!-- css -->
@section('css')
<link rel="canonical" href="{{ url('chuyen-de/nhiem-trung-lieu-dao') }}" />
<link rel="stylesheet" href="{{ asset('public/css/chuyende/mobile/bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('public/css/chuyende/mobile/benh-tuyen-tien-liet.css') }}">
@endsection('css')
<!-- logo -->
@section('logo')
<img src="{{ asset('public/images/mobile2/logo.png') }}" class="center-block">
@endsection('logo')
<!-- doc -->
@section('doc')
<img src="{{ asset('public/images/mobile/header-1.png') }}" alt="doc">
@endsection('doc')
<!-- banner -->
@section('banner')
	<img src="{{ asset('public/images/chuyende/mobile/benhtuyentienliet/benhtuyentienliet-1.png') }}" alt="Phòng khám Nam Khang" class="center-block img-responsive">
@endsection('banner')
<!-- content -->
@section('content')
	<div class="container chuyende">
		<div class="row1">
			<div class="global1">
				<div class="dis-table width-100">
					<div class="table-cell cell1">
						<i></i>
					</div>
					<div class="table-cell text-center text-uppercase cell2">
						<span>5 triệu chứng</span> thường gặp<br>của viêm tuyến tiền liệt
					</div>
					<a class="table-cell cell3 text-center text-uppercase" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
						<div class="bg1">
							Phân tích<br>bệnh trực tuyến
						</div>
					</a>
				</div>
			</div>
		</div>
		<div class="row2">
			<div>
				<div class="row">
					<div class="col-xs-4">
						<div class="heading text-center dis-table width-100"><span class="table-cell">Tiểu nhiều</span></div>
						<div class="pos-relative">
							<img src="{{ asset('public/images/chuyende/mobile/benhtuyentienliet/benhtuyentienliet-3.png') }}" alt="" class="img-responsive center-block">
							<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="text-center bg1 pos-absolute dis-table width-100"><span class="table-cell">Click xem chi tiết</span></a>
						</div>
					</div>
					<div class="col-xs-4">
						<div class="heading text-center dis-table width-100"><span class="table-cell">Tiểu rắt</span></div>
						<div class="pos-relative">
							<img src="{{ asset('public/images/chuyende/mobile/benhtuyentienliet/benhtuyentienliet-4.png') }}" alt="" class="img-responsive center-block">
							<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="text-center bg1 pos-absolute dis-table width-100"><span class="table-cell">Click xem chi tiết</span></a>
						</div>
					</div>
					<div class="col-xs-4">
						<div class="heading text-center dis-table width-100"><span class="table-cell">Tiểu buốt</span></div>
						<div class="pos-relative">
							<img src="{{ asset('public/images/chuyende/mobile/benhtuyentienliet/benhtuyentienliet-5.png') }}" alt="" class="img-responsive center-block">
							<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="text-center bg1 pos-absolute dis-table width-100"><span class="table-cell">Click xem chi tiết</span></a>
						</div>
					</div>
					<div class="col-xs-4">
						<div class="heading text-center dis-table width-100"><span class="table-cell">Tiểu không hết</span></div>
						<div class="pos-relative">
							<img src="{{ asset('public/images/chuyende/mobile/benhtuyentienliet/benhtuyentienliet-6.png') }}" alt="" class="img-responsive center-block">
							<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="text-center bg1 pos-absolute dis-table width-100"><span class="table-cell">Click xem chi tiết</span></a>
						</div>
					</div>
					<div class="col-xs-4">
						<div class="heading text-center dis-table width-100"><span class="table-cell">Tiểu thành nhiều tia</span></div>
						<div class="pos-relative">
							<img src="{{ asset('public/images/chuyende/mobile/benhtuyentienliet/benhtuyentienliet-7.png') }}" alt="" class="img-responsive center-block">
							<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="text-center bg1 pos-absolute dis-table width-100"><span class="table-cell">Click xem chi tiết</span></a>
						</div>
					</div>
					<div class="col-xs-4">
						<div class="heading text-center dis-table width-100"><span class="table-cell">Tư vấn trực tuyến</span></div>
						<div class="pos-relative">
							<img src="{{ asset('public/images/chuyende/mobile/benhtuyentienliet/benhtuyentienliet-8.png') }}" alt="" class="img-responsive center-block">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row3">
			<div class="global1">
				<div class="dis-table width-100">
					<div class="table-cell cell1">
						<i></i>
					</div>
					<div class="table-cell text-center text-uppercase cell2">
						<span>Viêm tuyến tiền liệt</span><br>có nguy hại gì?
					</div>
					<a class="table-cell cell3 text-center text-uppercase" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
						<div class="bg1">
							Bác sĩ tư vấn
						</div>
					</a>
				</div>
			</div>
		</div>
		<div class="row4">
			<div class="line">
				<div class="dis-table width-100">
					<div class="table-cell cell1">Nguy hại 1</div>
					<div class="table-cell cell2">Gây rối loạn chức năng sinh dục</div>
				</div>
				<div class="des1">
					Trong giai đoạn viêm tuyến tiền liệt cấp tính, tuyến tiền liệt xung huyết, phù hoặc hình thành cục sưng nhỏ, có thể xuất hiện xuất tinh đau, đau khi cương cứng, suy giảm ham muốn tình dục, quan hệ tình dục đau, liệt dương, xuất tinh ra máu…
				</div>
			</div>
			<div class="line">
				<div class="dis-table width-100">
					<div class="table-cell cell1">Nguy hại 2</div>
					<div class="table-cell cell2">Gây vô sinh</div>
				</div>
				<div class="des1">
					Chuyên gia phân tích, viêm tuyến tiền liệt không chỉ ảnh hưởng đến chất lượng đời sống tình dục vợ chồng, bệnh kéo dài không chữa sẽ ảnh hưởng đến sự hình thành và chất lượng tinh trùng, gây nên vô sinh nam.
				</div>
			</div>
			<div class="line">
				<div class="dis-table width-100">
					<div class="table-cell cell1">Nguy hại 3</div>
					<div class="table-cell cell2">Thông qua quan hệ tình dục lây truyền cho vợ</div>
				</div>
				<div class="des1">
					Thông thường viêm tuyến tiền liệt không lây nhiễm, nhưng nếu như viêm tuyến tiền liệt do trùng roi, nấm gây nên hoặc là do lậu cầu, chlammydia gây bệnh thì khi quan hệ tình dục sẽ lây truyền các vi khuẩn này cho vợ.
				</div>
			</div>
			<div class="line">
				<div class="dis-table width-100">
					<div class="table-cell cell1">Nguy hại 4</div>
					<div class="table-cell cell2">Gây nên các chứng viêm khác</div>
				</div>
				<div class="des1">
					Chứng viêm tuyến tiền liệt mãn tính có thể lan ra đến bàng quang, niệu đạo, túi tinh, mào tinh hoàn, thậm chí là tinh hoàn. Khi đó gây nên các bệnh nam khoa như viêm bàng quang, viêm niệu đạo, viêm túi tinh, viêm mào tinh hoàn…
				</div>
			</div>
			<div class="footer">
				<span>Chuyên gia nhắc nhở:</span> Vì sức khỏe của bạn và bạn đời, nếu như mắc viêm tuyến tiền liệt nhất định phải điều trị kịp thời, tránh lây truyền gây nên các phiền phức không cần thiết.
			</div>
		</div>
		<div class="row5">
			<div class="global1">
				<div class="dis-table width-100">
					<div class="table-cell cell1">
						<i></i>
					</div>
					<div class="table-cell text-center text-uppercase cell2">
						<span>Viêm tuyến tiền liệt</span><br>điều trị như thế nào?
					</div>
					<a class="table-cell cell3 text-center text-uppercase" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
						<div class="bg1">
							Bác sĩ tư vấn
						</div>
					</a>
				</div>
			</div>
		</div>
		<div class="row6">
			<div class="line">
				<div class="bg dis-table text-center text-uppercase width-100">
					<span class="table-cell">Tại sao phải nằm viện điều trị?</span>
				</div>
				<div class="des text-justify">
					Viêm tuyến tiền liệt có thể chia thành viêm tuyến tiền liệt phi nhiễm khuẩn, viêm tuyến tiền liệt mãn tính, viêm tuyến tiền liệt nhiễm khuẩn… Các triệu chứng lâm sàng tương tự nhau, do cơ chế phát bệnh của tuyến tiền liệt, kiến nghị nên nằm viện điều trị.
				</div>
			</div>
			<div class="line">
				<div class="bg dis-table text-center text-uppercase width-100">
					<span class="table-cell">Tại sao phải điều trị bằng phẫu thuật?</span>
				</div>
				<div class="des text-justify">
					Nguyên nhân gây bệnh viêm tuyến tiền liệt phức tạp, chủng loại đa dạng, đây chính là nguyên nhân làm cho viêm tuyến tiền liệt chữa lâu không khỏi và thường xuyên tái phát, hơn nữa bệnh nghiêm trọng có thể gây vô sinh nam, rối loạn chức năng sinh dục, vì thế để điều trị triệt để viêm tuyến tiền liệt bác sĩ kiến nghị nên điều trị bằng phẫu thuật.
				</div>
			</div>
			<div class="footer text-center text-uppercase">
				“Kĩ thuật làm tan can thiệp tuyến tiền liệt”<br>
				<span>3 kĩ thuật chính</span> đảm bảo hiệu quả tốt nhất
			</div>
			<div class="line2">
				<div class="dis-table width-100">
					<div class="table-cell cell1 arrow_box">
						<span>N0<br>1</span>
					</div>
					<div class="table-cell cell2 bg1">
						Căn cứ vào sự khác nhau của từng bệnh nhân, dưới chỉ dẫn của siêu âm, giúp cho điện cực định vị chính xác vào bộ phận tuyến tiền liệt, tại tuyến tiền liệt hình thành khoang kín, giúp đưa thuốc vào chính xác vị trí ổ bệnh.
					</div>
				</div>
			</div>
			<div class="line2">
				<div class="dis-table width-100">
					<div class="table-cell cell1 arrow_box">
						<span>N0<br>2</span>
					</div>
					<div class="table-cell cell2 bg2">
						Dưới hiệu ứng nhiệt, hiệu ứng rung và ngoại áp của điện từ trường cao tần, li giải thuốc và trực tiếp đưa vào ổ bệnh, từ đó nhanh chóng tiêu diệt vi sinh vật gây bệnh, đồng thời có thể kích hoạt chức năng miễn dịch của cơ thể, đạt được mục 
					</div>
				</div>
			</div>
			<div class="line2">
				<div class="dis-table width-100">
					<div class="table-cell cell1 arrow_box">
						<span>N0<br>3</span>
					</div>
					<div class="table-cell cell2 bg3">
						Lựa chọn thuốc đông y tinh chế, và kết hợp với tây y tiêu diệt vi khuẩn, tăng cường sức miễn dịch, đưa ion vào, kết hợp sự hỗ trợ của thuốc đông tây y có thể duy trì nồng độ thuốc cao tại vị trí ổ bệnh và nâng cao khả năng miễn dịch linh động của cơ thể rõ rệt…đích tiêu viêm.
					</div>
				</div>
			</div>
			<div class="line3 text-center text-uppercase">
				Liệu pháp can thiệp tuyến tiền liệt <span>VS</span> các liệu pháp khác
			</div>
			<div class="line4">
				<table class="width-100">
					<tr class="active">
						<td class="text-center">Phương pháp<br>điều trị</td>
						<td class="text-center">Đặc điểm</td>
						<td class="text-center">Tác dụng phụ</td>
						<td class="text-center">Chi phí</td>
					</tr>
					<tr>
						<td class="bginfo">Điều trị<br>phẫu thuật</td>
						<td>Đối với bệnh nhân nặng đây là phương pháp buộc phải làm</td>
						<td>Dễ gây biến chứng</td>
						<td>Chi phí cao</td>
					</tr>
					<tr>
						<td class="bginfo">Điều trị bằng thuốc</td>
						<td>Có hiệu quả nhất định đối với viêm tuyến tiền liệt giai đoạn đầu</td>
						<td>Tổn thương chức năng gan, thận, dạ dày đường ruột</td>
						<td>Dễ tái phát,chi phí cao</td>
					</tr>
					<tr>
						<td class="bginfo">Kĩ thuật làm tan can thiệp tuyến tiền liệt</td>
						<td>Phân biệt chính xác vi khuẩn gây bệnh, tiến hành điều trị đối chứng</td>
						<td>Không tổn thương các tổ chức tuyến tiền liệt</td>
						<td>Chi phí hợp lý</td>
					</tr>
				</table>
			</div>
			<div class="line5">
				<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><img src="{{ asset('public/images/chuyende/mobile/benhtuyentienliet/benhtuyentienliet-13.png') }}" alt="" class="center-block img-responsive"></a>
			</div>
			<div class="line6">
				<div class="dis-table width-100">
					<div class="table-cell cell1">
						<img src="{{ asset('public/images/chuyende/mobile/benhtuyentienliet/benhtuyentienliet-14.png') }}" alt="">
					</div>
					<div class="table-cell cell2">
						<div class="text-uppercase">Chuyên gia nam khoa</div>
						<div>Bác sĩ tư vấn trực tuyến</div>
						<div>5 phút có thể giải quyết vấn đề của bạn</div>
					</div>
					<div class="table-cell cell3">
						<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Chuyên gia tư vấn</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row7">
			<div class="global1">
				<div class="dis-table width-100">
					<div class="table-cell cell1">
						<i></i>
					</div>
					<div class="table-cell text-center text-uppercase cell2">
						<span>Điều trị viêm tuyến tiền liệt </span><br>Lựa chọn phòng khám nam khoa chuyên nghiệp chính quy
					</div>
				</div>
			</div>
			<div class="line text-uppercase text-center">
				Hiệu quả điều trị là lý do họ lựa chọn phòng khám chuyên khoa
			</div>
			<div class="line1">
				<div class="dis-table width-100">
					<div class="table-cell cell1">
						<div class="font text-uppercase">1.Bác sĩ</div>
						<div class="des">
							Mời nhiều chuyên gia uy tín thăm khám, giúp cho mỗi bệnh nhân đều được chuyên gia nổi tiếng thăm khám điều trị
						</div>
					</div>
					<div class="table-cell cell2">
						<img src="{{ asset('public/images/chuyende/mobile/benhtuyentienliet/benhtuyentienliet-15.png') }}" alt="" class="">
					</div>
				</div>
			</div>
			<div class="line1 line2">
				<div class="dis-table width-100">
					<div class="table-cell cell2">
						<img src="{{ asset('public/images/chuyende/mobile/benhtuyentienliet/benhtuyentienliet-16.png') }}" alt="" class="">
					</div>
					<div class="table-cell cell1">
						<div class="font text-uppercase">2.Kĩ thuật</div>
						<div class="des">
							Ứng dụng kĩ thuật điều trị tuyến tiền liệt hiệu quả cao, chẩn đoán chính xác, điều trị đúng bệnh, nâng cao miễn dịch cơ thể, loại bỏ tận gốc bệnh.
						</div>
					</div>
				</div>
			</div>
			<div class="line1 line3">
				<div class="dis-table width-100">
					<div class="table-cell cell1">
						<div class="font text-uppercase">3.Môi trường</div>
						<div class="des">
							Phòng xét nghiệm hoàn thiện, phòng phẫu thuật vô trùng, thiết bị phẫu thuật được tiệt khuẩn nghiêm ngặt, tiến hành kiểm tra toàn diện cho bệnh nhân.
						</div>
					</div>
					<div class="table-cell cell2">
						<img src="{{ asset('public/images/chuyende/mobile/benhtuyentienliet/benhtuyentienliet-17.png') }}" alt="" class="">
					</div>
				</div>
			</div>
			<div class="global2 text-center">
				<div class="dis-table text-uppercase">
					<div class="table-cell cell1">
						Click vào đây >>
					</div>
					<div class="table-cell cell2">
						<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Tôi muốn đặt hẹn trực tuyến</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row8">
			<div class="global1">
				<div class="dis-table width-100">
					<div class="table-cell cell1">
						<i></i>
					</div>
					<div class="table-cell text-center text-uppercase cell2">
						<span>Điều trị viêm tuyến tiền liệt</span><br>Lựa chọn phòng khám được nhiều người công nhận
					</div>
				</div>
			</div>
			<div class="line">
				<img src="{{ asset('public/images/chuyende/mobile/benhtuyentienliet/benhtuyentienliet-18.png') }}" alt="" class="img-responsive center-block">
			</div>
			<div class="line1">
				<span class="text-uppercase">Bệnh nhân bình luận :</span>
			</div>
			<p>
				<span>[Anh Vũ]:</span> Mỗi lần hẹn hò đều bị tiểu nhiều tiểu rắt, làm cho tâm lý không thoải mái, sau khi điều trị ở Nam Khang cuối cùng cũng mang được tình yêu trở lại.
			</p>
			<p>
				<span>[Anh Quân]:</span> Đặt hẹn trên điện thoại, không cần xếp hàng, còn hẹn được bác sĩ điều trị chính, like!
			</p>
			<p>
				<span>[Anh Đoàn]:</span> Từ sau khi chữa khỏi viêm tuyến tiền liệt, chứng xuất tinh sớm của tôi đã khỏi, bạn gái nói tôi càng ngày càng khỏe.
			</p>
			<div class="global2 text-center">
				<div class="dis-table text-uppercase">
					<div class="table-cell cell1">
						Click vào đây >>
					</div>
					<div class="table-cell cell2">
						<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Tôi muốn đặt hẹn trực tuyến</a>
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