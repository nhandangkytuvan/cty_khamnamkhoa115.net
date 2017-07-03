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
<link rel="canonical" href="{{ url('chuyen-de/vo-sinh') }}" />
<link rel="stylesheet" href="{{ asset('public/css/chuyende/mobile/bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('public/css/chuyende/mobile/tong-hop.css') }}">
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
	<img src="{{ asset('public/images/chuyende/mobile/tonghop/tonghop-1.png') }}" alt="Phòng khám Nam Khang" class="center-block img-responsive">
@endsection('banner')
<!-- content -->
@section('content')
	<div class="container chuyende">
		<div class="row1 text-center">
			<span class="bg1 dis-inline-block"></span>
			<span class="bg2 dis-inline-block"></span>
		</div>
		<div class="global1">
			<div class="text-uppercase text-center line1">Bạn có các triệu chứng dưới đây không?</div>
			<div class="text-center line2">Tự kiểm tra sức khỏe cơ quan sinh sản</div>
		</div>
		<div class="row2">
			<div class="title1 text-uppercase text-center">Nam giới</div>
			<table>
				<tr>
					<td><div>Tiểu nhiều tiểu rắt</div></td>
					<td><div>Lỗ niệu đạo chảy mủ</div></td>
					<td><div>Mọc mụn ở rãnh bao quy đầu</div></td>
				</tr>
				<tr>
					<td><div>Lỗ niệu đạo mọc mụn</div></td>
					<td><div>Dương vật mọc mụn nước</div></td>
					<td><div>Dương vật mọc mụn sần</div></td>
				</tr>
				<tr>
					<td><div>Dương vật,quy đầu loét có mủ</div></td>
					<td><div>Hậu môn mọc mụn thịt</div></td>
					<td><div>Hậu môn mọc mụn nước</div></td>
				</tr>
			</table>
			<div>
				<img src="{{ asset('public/images/chuyende/mobile/tonghop/tonghop-3.png') }}" alt="" class="img-responsive center-block">
			</div>
			<!--  -->
			<div class="title1 text-uppercase text-center mar1">Nữ giới</div>
			<table>
				<tr>
					<td><div>Âm hộ, môi âm hộ mọc mụn nước</div></td>
					<td><div>Môi âm hộ, âm hộ mọc mụn sùi</div></td>
					<td><div>Âm hộ, âm đạo mọc mụn hạt</div></td>
				</tr>
				<tr>
					<td><div>Âm hộ, môi âm hộ mẩn đỏ</div></td>
					<td><div>Lỗ âm đạo mọc các mụn đỏ</div></td>
					<td><div>Lỗ âm đạo lở loét</div></td>
				</tr>
				<tr>
					<td><div>Âm hộ, âm đạo ngứa bất thường</div></td>
					<td><div>Lỗ âm đạo chảy mủ</div></td>
					<td><div>Âm đạo, hậu môn mọc nốt sùi</div></td>
				</tr>
			</table>
			<div>
				<img src="{{ asset('public/images/chuyende/mobile/tonghop/tonghop-4.png') }}" alt="" class="img-responsive center-block">
			</div>
			<div class="global2 dis-table width-100">
				<a class="text-uppercase text-center table-cell" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
					<span>Các triệu chứng khác</span>  Click vào đây để tư vấn với bác sĩ bệnh xã hội
				</a>
			</div>
		</div>
		<div class="global3"></div>
		<div class="global1">
			<div class="text-uppercase text-center line1">TÌM HIỂU</div>
			<div class="text-center line2">Những điều cần biết về bệnh xã hội</div>
		</div>
		<div class="row3">
			<div class="dis-table table1">
				<div class="table-cell cell1">
					<img src="{{ asset('public/images/chuyende/mobile/tonghop/tonghop-5.png') }}" alt="">
				</div>
				<div class="table-cell cell2">
					<div class="title1 text-uppercase">Sùi mào gà</div>
					<div class="des1">
						Biểu hiện chủ yếu gồm xuất hiện một hoặc nhiều mụn dạng u nhú, mào gà, sùi hoặc các đám sùi ở các bộ phận như âm hộ, bộ phận sinh dục <a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">[Click tư vấn]</a>
					</div>
				</div>
			</div>
			<div class="dis-table table2">
				<div class="table-cell cell2">
					<div class="title1 text-uppercase">Mụn rộp sinh dục</div>
					<div class="des1">
						Biểu hiện ban đầu gồm ngứa hoặc ngứa rát, đau ở xung quanh cơ quan sinh dục. Tiếp đến, ở các bộ phận khác xuất hiện ban đỏ, mụn sần, mụn nước đa phát <a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">[Click tư vấn]</a>
					</div>
				</div>
				<div class="table-cell cell1">
					<img src="{{ asset('public/images/chuyende/mobile/tonghop/tonghop-6.png') }}" alt="">
				</div>
			</div>
			<div class="dis-table table1">
				<div class="table-cell cell1">
					<img src="{{ asset('public/images/chuyende/mobile/tonghop/tonghop-7.png') }}" alt="">
				</div>
				<div class="table-cell cell2">
					<div class="title1 text-uppercase">Giang mai</div>
					<div class="des1">
						Chia làm 3 giai đoạn, triệu chứng giang mai ở các giai đoạn khác nhau, tác hại của nó không thể coi thường <a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">[Click tư vấn]</a>
					</div>
				</div>
			</div>
			<div class="dis-table table2">
				<div class="table-cell cell2">
					<div class="title1 text-uppercase">Bệnh lậu</div>
					<div class="des1">
						Ở nam giới biểu hiện của bệnh gồm lỗ niệu đạo chảy mủ, tiểu buốt, tiểu rắt, tiểu nhiều và ngứa; Ở nữ giới biểu hiện của bệnh gồm ngứa kích thích âm hộ và cảm giác nóng rát, đồng thời có kèm dịch mủ âm đạo.  <a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">[Click tư vấn]</a>
					</div>
				</div>
				<div class="table-cell cell1">
					<img src="{{ asset('public/images/chuyende/mobile/tonghop/tonghop-8.png') }}" alt="">
				</div>
			</div>
			<table class="width-100 footer1">
				<tr>
					<td class="bg1 text-center">
						<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
							Lập tức hỏi về tình trạng bệnh<br> 
							Tư vấn trực tuyến với chuyên gia bệnh xã hội
						</a>
					</td>
					<td class="bg2 text-center">
						<a href="tel:18006181">
							Gọi đường dây nóng tư vấn miễn phí<br>
							<span>18006181</span>
						</a>	
					</td>
				</tr>
			</table>
		</div>
		<div class="global3"></div>
		<div class="global1">
			<div class="text-uppercase text-center line1">Bệnh nhân tư vấn</div>
			<div class="text-center line2">Bệnh xã hội có thể chữa khỏi không?</div>
		</div>
		<div class="row4">
			<div class="dis-table table1">
				<div class="table-cell">
					<img src="{{ asset('public/images/chuyende/mobile/tonghop/tonghop-9.png') }}" alt="">
				</div>
				<div class="des1 table-cell">
					<span>Chuyên gia phòng khám Nam Khang giải đáp:</span> Bệnh xã hội thường liên tục tái phát, do đó việc có thể hồi phục bệnh được hay không đã trở thành vấn đề mà nhiều bệnh nhân quan tâm. Bác sĩ khuyên bệnh nhân hãy kịp thời đến các đơn vị khám chữa bệnh chuyên nghiệp để điều trị.
				</div>
			</div>
			<div class="border border1">
				<table class="width-100">
					<tr>
						<td><i></i></td>
						<td>
							Điều trị chủ yếu phải đúng bệnh, nguyên nhân bệnh không giống nhau, phương pháp điều trị cũng phải khác nhau. Do đó điều quan trọng là xác định chính xác nguyên nhân gây bệnh mới có thể điều trị trúng đích được.
						</td>
					</tr>
				</table>
			</div>
			<div class="border border2">
				<table class="width-100">
					<tr>
						<td><i></i></td>
						<td>
							Ngoài ra, kĩ thuật điều trị bệnh xã hội rất nhiều, lựa chọn phương pháp điều trị nào cũng là chìa khóa thành công trong việc điều trị.
						</td>
					</tr>
				</table>
			</div>
			<table class="width-100 footer1">
				<tr>
					<td class="bg1 text-center">
						<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
							Đặt hẹn chuyên gia?<br>Bấm để đặt hẹn trực tuyến
						</a>
					</td>
					<td class="bg2 text-center">
						<a href="tel:18006181">
							Gọi đường dây nóng tư vấn miễn phí<br>
							<span>18006181</span>
						</a>	
					</td>
				</tr>
			</table>
			<div class="img1">
				<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><img src="{{ asset('public/images/chuyende/mobile/tonghop/tonghop-11.png') }}" alt="" class="img-responsive center-block"></a>
			</div>
			<div class="global2 dis-table width-100">
				<a class="text-uppercase text-center table-cell" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
					<span>Tổng đài tư vấn</span>  tư vấn riêng với chuyên gia bệnh xã hội 
				</a>
			</div>
		</div>
		<div class="global3"></div>
		<div class="global1">
			<div class="text-uppercase text-center line1">Bệnh nhân tư vấn</div>
			<div class="text-center line2">Bệnh xã hội có thể chữa khỏi không?</div>
		</div>
		<div class="row5">
			<div class="des1">
				Liệu pháp miễn dịch MB trong điều kiện kháng nguyên có ích không gây tổn thương đến cơ thể bệnh nhân, sử dụng phương pháp vật lý trị liệu khiến cho cấu tạo của virus bị phá vỡ, virus không còn sống nữa, vì thế mà không còn khả năng truyền nhiễm, gây bệnh và sinh sôi.
			</div>
			<div class="img1">
				<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><img src="{{ asset('public/images/chuyende/mobile/tonghop/tonghop-12.png') }}" alt="" class="img-responsive center-block"></a>
			</div>
			<div class="img2">
				<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><img src="{{ asset('public/images/chuyende/mobile/tonghop/tonghop-13.png') }}" alt="" class="img-responsive center-block"></a>
			</div>
		</div>
		<div class="global3"></div>
		<div class="global1">
			<div class="text-uppercase text-center line1">Bệnh nhân tư vấn</div>
			<div class="text-center line2">Bệnh xã hội có thể chữa khỏi không?</div>
		</div>
		<div class="row6">
			<table class="width-100 table1">
				<tr>
					<td class="bg1">
						<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Nhanh chóng loại bỏ triệu chứng</a>
					</td>
					<td class="bg2">
						<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Tỷ lệ tái phát thấp</a>
					</td>
				</tr>
			</table>
			<table class="width-100 table2">
				<tr>
					<td class="bg3">
						<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Tiêu diệt virus nhanh</a>
					</td>
					<td class="bg4">
						<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Ít tác dụng phụ</a>
					</td>
					<td class="bg5">
						<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Phạm vi ứng dụng rộng</a>
					</td>
				</tr>
			</table>
		</div>
		<div class="global3"></div>
		<div class="global1">
			<div class="text-uppercase text-center line1">Chuyên gia bệnh xã hội Nam Khang thăm khám</div>
			<div class="text-center line2">Điều trị bí mật  Bạn hãy yên tâm!</div>
		</div>
		<div class="row7">
			<div class="img1">
				<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><img src="{{ asset('public/images/chuyende/mobile/tonghop/tonghop-14.png') }}" alt="" class="img-responsive center-block"></a>
			</div>
			<table class="width-100 footer1">
				<tr>
					<td class="bg1 text-center text-uppercase">
						<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
							Đặt hẹn trực tuyến
						</a>
					</td>
					<td class="bg2 text-center text-uppercase">
						<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
							Đặt hẹn qua điện thoại
						</a>	
					</td>
				</tr>
			</table>
		</div>
		<div class="global3"></div>
		<div class="global1">
			<div class="text-uppercase text-center line1">Bệnh nhân bình luận</div>
		</div>
		<div class="row8">
			<div class="clearfix">
				<div class="pull-right">
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="dis-table table1">
						<span class="table-cell"><img src="{{ asset('public/images/chuyende/mobile/tonghop/tonghop-15.png') }}" alt=""></span>
						<span class="table-cell text-uppercase">Tôi muốn bình luận</span>
					</a>
				</div>
			</div>
			<table class="width-100 table2">
				<tr>
					<td>
						<img src="{{ asset('public/images/chuyende/mobile/tonghop/tonghop-16.png') }}" alt="" class="center-block">
					</td>
					<td>
						<div class="row">
							<div class="name text-uppercase col-sm-4">NGUYỄN THỊ ÁNH</div>
							<div class="col-sm-4 star">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>
							<div class="text-uppercase likes col-sm-4">Thích ( 163 )</div>
						</div>
						<div class="des1">
							Thật sự cảm ơn Phòng khám chuyên khoa Nam Khang, vốn dĩ tưởng không chữa khỏi được bệnh, thấy xấu hổ chết đi được, may thay được sự giúp đỡ tận tình của bác sĩ và kĩ thuật điều trị cao siêu giúp tôi muốn sống tiếp, vô cùng cảm ơn.
						</div>
					</td>
				</tr>
			</table>
			<table class="width-100 table2">
				<tr>
					<td>
						<img src="{{ asset('public/images/chuyende/mobile/tonghop/tonghop-17.png') }}" alt="" class="center-block">
					</td>
					<td>
						<div class="row">
							<div class="name text-uppercase col-sm-4">NGUYỄN VĂN BÌNH</div>
							<div class="col-sm-4 star">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>
							<div class="text-uppercase likes col-sm-4">Thích ( 189 )</div>
						</div>
						<div class="des1">
							Bác sĩ Phòng khám Nam Khang rất tốt, tuy không đến mức như họ phóng đại, nhưng hiệu quả đúng là tốt.
						</div>
					</td>
				</tr>
			</table>
			<table class="width-100 table2">
				<tr>
					<td>
						<img src="{{ asset('public/images/chuyende/mobile/tonghop/tonghop-16.png') }}" alt="" class="center-block">
					</td>
					<td>
						<div class="row">
							<div class="name text-uppercase col-sm-4">ĐỖ HUYỀN TRÂM</div>
							<div class="col-sm-4 star">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>
							<div class="text-uppercase likes col-sm-4">Thích ( 202 )</div>
						</div>
						<div class="des1">
							Nhiều bệnh viện không chữa khỏi bệnh của tôi, nhưng phòng khám này đã chữa khỏi, rất cảm ơn! Chỉ cần có lương tâm thì đều thật sự tốt!
						</div>
					</td>
				</tr>
			</table>
			<table class="width-100 table2">
				<tr>
					<td>
						<img src="{{ asset('public/images/chuyende/mobile/tonghop/tonghop-17.png') }}" alt="" class="center-block">
					</td>
					<td>
						<div class="row">
							<div class="name text-uppercase col-sm-4">CAO VĂN THANH</div>
							<div class="col-sm-4 star">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>
							<div class="text-uppercase likes col-sm-4">Thích ( 321 )</div>
						</div>
						<div class="des1">
							Đi khám xem thế nào, may là tất cả đều bình thường, chi phí cũng không đắt, sau khi đặt hẹn đến khám không phải xếp hàng. Bác sĩ, kĩ thật rất cao siêu.
						</div>
					</td>
				</tr>
			</table>
			<div class="global2 dis-table width-100">
				<a class="text-uppercase text-center table-cell" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
					Click gọi đường dây nóng tư vấn <strong>1800 - 6181</strong>
				</a>
			</div>
		</div>
		<div class="global3"></div>
		<div class="global1">
			<div class="text-uppercase text-center line1">Đặt hẹn miễn phí được ưu tiên thăm khám</div>
			<div class="text-center line2">Hệ thống đặt hẹn khám được mã hóa nghiêm ngặt, đảm bảo an toàn bí mật cho bạn</div>
		</div>
		<div class="row9">
			<div class="bg1">
				<form action="{{ url('sendmail') }}" method="post" id="formMailSend">
					{{ csrf_field() }}
					<div class="row form-group">
						<div class="col-sm-4 red1 text-uppercase text-right">
							Họ tên bệnh nhân :
						</div>
						<div class="col-sm-8">
							<input type="text" name="ho_va_ten" class="text-uppercase" placeholder="Nhập họ tên thật của bạn">
						</div>
					</div>
					<div class="row form-group">
						<div class="col-sm-4 red1 text-uppercase text-right">
							Số điện thoại :
						</div>
						<div class="col-sm-8">
							<input type="number" name="phone" class="text-uppercase" required placeholder="Nhập số điện thoại của bạn">
						</div>
					</div>
					<div class="row form-group">
						<div class="col-sm-4 red1 text-uppercase text-right">
							thời gian đặt hẹn :
						</div>
						<div class="col-sm-8">
							<input type="text" name="thoigian" class="text-uppercase" placeholder="Nhập ngày bạn đến khám">
						</div>
					</div>
					<div class="row form-group">
						<div class="col-sm-4 red1 text-uppercase text-right">
							Nhóm bệnh :
						</div>
						<div class="col-sm-8">
							<textarea name="mieutabenh" rows="4" class="text-uppercase" placeholder="Nhập tên bệnh "></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-8 col-sm-offset-4">
							<button type="submit" class="text-uppercase text-center btn">gửi</button>
						</div>
					</div>
				</form>
				<div id="myloadding"><div id="mytext">Xin chờ chút...</div></div>
				<script>
					$(document).ready(function() 
					{
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
			</div>
		</div>
		<div class="global3"></div>
		<div class="row10">
			<table class="width-100 table1">
				<tr>
					<td class="text-uppercase text-center bg1"><a href="{{ url('ve-chung-toi') }}">Giới thiệu phòng khám</a></td>
					<td class="text-uppercase text-center bg2"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Liên hệ bác sĩ</a></td>
					<td class="text-uppercase text-center bg3"><a href="{{ url('dia-chi-phong-kham') }}">Chỉ đường</a></td>
				</tr>
			</table>
		</div>
	</div>
@endsection('content')
@section('toolbar')
	<div class="container footer-toolbar">
		<div class="dis-table table1 width-100">
			<div class="table-cell cell1">
				<div class="dis-table table2 width-100">
					<div class="table-cell">
						<a href="{{ url('/') }}">
							<img src="{{ asset('public/images/chuyende/mobile/tonghop/icon-1.png') }}" alt="">
						</a>
					</div>
					<div class="table-cell text-uppercase text-center">
						<a href="{{ url('/') }}">Trang chủ</a>
					</div>
				</div>
			</div>
			<div class="table-cell cell2">
				<div class="dis-table table2 width-100">
					<div class="table-cell">
						<a href="tel:18006181">
							<img src="{{ asset('public/images/chuyende/mobile/tonghop/icon-2.png') }}" alt="">
						</a>
					</div>
					<div class="table-cell text-uppercase text-center">
						<a href="tel:18006181">Gọi điện thoại</a>
					</div>
				</div>
			</div>
			<div class="table-cell cell3">
				<div class="dis-table table2 width-100">
					<div class="table-cell">
						<h3 class="text-center">
							<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
								<img src="{{ asset('public/images/chuyende/mobile/tonghop/icon-3.png') }}" alt="">
							</a>
						</h3>
					</div>
					<div class="table-cell text-uppercase text-center">
						<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Tư vấn trực tuyến</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection('toolbar')