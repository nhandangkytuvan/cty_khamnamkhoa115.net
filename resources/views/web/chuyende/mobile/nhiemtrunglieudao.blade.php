@extends('layout.chuyende-mobile')
<!-- title -->
@section('title')
	<title>Nhiễm trùng liệu đạo</title>
@endsection('title')
<!-- seo -->
@section('keyword')
	@include('seo.seo_home')
@endsection('keyword')
<!-- css -->
@section('css')
<link rel="canonical" href="{{ url('chuyen-de/nhiem-trung-lieu-dao') }}" />
<link rel="stylesheet" href="{{ asset('public/css/chuyende/mobile/bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('public/css/chuyende/mobile/nhiem-trung-lieu-dao.css') }}">
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
	<img src="{{ asset('public/images/chuyende/mobile/nhiemtrunglieudao/nhiemtrunglieudao-1.png') }}" alt="Phòng khám Nam Khang" class="center-block img-responsive">
@endsection('banner')
<!-- content -->
@section('content')
	<div class="container chuyende">
		<div class="row1 clearfix">
			<div class="pull-left">
				<img src="{{ asset('public/images/chuyende/mobile/nhiemtrunglieudao/nhiemtrunglieudao-2.png') }}" alt="">
			</div>
			<div class="des1">
				Những năm gần đây, tỷ lệ phát bệnh nhiễm trùng niệu đạo ở nam giới càng ngày càng tăng, và càng được mọi người quan tâm nhiều hơn. Chuyên gia chỉ ra rằng, nhiễm trùng tiết niệu nhất định phải điều trị kịp thời, bệnh kéo dài lâu dễ chuyển sang viêm mãn tính, nghiêm trọng hơn có thể gây liệt dương, xuất tinh sớm ở nam giới thậm chí có thể dẫn đến vô sinh nam.
			</div>
		</div>
		<div class="row2">
			<div class="global1">
				<div class="shap1 dis-table width-100">
					<div class="text-uppercase text-center table-cell">
						Tìm hiểu về nhiễm trùng niệu đạo
					</div>
				</div>
			</div>
		</div>
		<div class="row3">
			<div class="dis-table table1 width-100">
				<div class="table-cell cell1">
					<div class="bg1 text-center text-uppercase">nhiễm trùng niệu đạo</div>
					<div class="dis-table table2 width-100">
						<div class="table-cell bg2">
							6
						</div>
						<div class="table-cell">
							triệu chứng chủ yếu
						</div>
					</div>
				</div>
				<div class="table-cell cell2">
					<i class="bgimg1"></i>
				</div>
				<div class="table-cell cell3">
					<div class="text-center">Tiểu nhiều, tiểu rắt, tiểu không hết</div>
					<div class="text-center">Nước tiểu vàng, tiểu ra máu</div>
				</div>
			</div>
			<div class="dis-table table3 width-100">
				<div class="table-cell cell1">
					<div class="text-center">Khó đi tiểu</div>
					<div class="text-center">Chảy dịch mủ</div>
				</div>
				<div class="table-cell cell2">
					<i class=""></i>
				</div>
			</div>
			<div class="dis-table table4 width-100">
				<div class="table-cell cell1">
					<i class=""></i>
				</div>
				<div class="table-cell cell2">
					<div class="text-center">Lỗ niệu đạo sưng đỏ, đau nóng rát</div>
					<div class="text-center">Toàn thân khó chịu, mệt mỏi, ăn uống kém</div>
				</div>
			</div>
			<div class="des1 clearfix">
				<div class="pull-left">
					<img src="{{ asset('public/images/chuyende/mobile/nhiemtrunglieudao/nhiemtrunglieudao-4.png') }}" alt="">
				</div>
				<div>
					Chuyên gia Nam Khang nhắc nhở rằng: Triệu chứng của nhiễm trùng đường niệu rất nhiều, nếu như xuất hiện một hoặc nhiều triệu chứng kể trên, chứng tỏ có thể bệnh nhân đã mắc bệnh về niệu đạo, cần đến cơ sở y tế chuyên khoa để thăm khám kịp thời.
				</div>
			</div>
		</div>
		<div class="row4">
			<div class="global1">
				<div class="shap1 dis-table width-100">
					<div class="text-uppercase text-center table-cell">
						Nhiễm trùng niệu đạo có thể dẫn đến 6 căn bệnh lớn<br>Bạn không thể không đề phòng
					</div>
				</div>
			</div>
			<div class="dis-table table1 width-100">
				<div class="table-cell">
					<div>
						<img src="{{ asset('public/images/chuyende/mobile/nhiemtrunglieudao/nhiemtrunglieudao-5.png') }}" alt="" class="center-block img-responsive">
					</div>
					<div class="text-center">
						<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Viêm niệu đạo</a>
					</div>
				</div>
				<div class="table-cell">
					<div>
						<img src="{{ asset('public/images/chuyende/mobile/nhiemtrunglieudao/nhiemtrunglieudao-6.png') }}" alt="" class="center-block img-responsive">
					</div>
					<div class="text-center">
						<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Viêm bàng quang</a>
					</div>
				</div>
				<div class="table-cell">
					<div>
						<img src="{{ asset('public/images/chuyende/mobile/nhiemtrunglieudao/nhiemtrunglieudao-7.png') }}" alt="" class="center-block img-responsive">
					</div>
					<div class="text-center">
						<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Viêm quy đầu</a>
					</div>
				</div>
			</div>
			<div class="dis-table table2 width-100">
				<div class="table-cell">
					<div>
						<img src="{{ asset('public/images/chuyende/mobile/nhiemtrunglieudao/nhiemtrunglieudao-8.png') }}" alt="" class="center-block img-responsive">
					</div>
					<div class="text-center">
						<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Viêm tinh hoàn</a>
					</div>
				</div>
				<div class="table-cell">
					<div>
						<img src="{{ asset('public/images/chuyende/mobile/nhiemtrunglieudao/nhiemtrunglieudao-9.png') }}" alt="" class="center-block img-responsive">
					</div>
					<div class="text-center">
						<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Viêm túi tinh</a>
					</div>
				</div>
				<div class="table-cell">
					<div>
						<img src="{{ asset('public/images/chuyende/mobile/nhiemtrunglieudao/nhiemtrunglieudao-10.png') }}" alt="" class="center-block img-responsive">
					</div>
					<div class="text-center">
						<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Viêm mào tinh hoàn</a>
					</div>
				</div>
			</div>
			<div class="text-center fixglobal2">
				<a class="global2" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
					Phương pháp nào có thể điều trị triệt để nhiễm trùng niệu đạo?
					<span>Click tư vấn</span>
				</a>
			</div>
		</div>
		<div class="row5">
			<div class="global1">
				<div class="shap1 dis-table width-100">
					<div class="text-uppercase text-center table-cell">
						Kiểm tra chuyên nghiệp<br>Kiểm tra chính xác nguyên nhân gây bệnh
					</div>
				</div>
			</div>
			<div class="dis-table table1 width-100">
				<div class="table-cell">
					<div>
						<img src="{{ asset('public/images/chuyende/mobile/nhiemtrunglieudao/nhiemtrunglieudao-11.png') }}" alt="" class="center-block img-responsive">
					</div>
					<div class="text-center">
						Tổng phân tích nước tiểu
					</div>
				</div>
				<div class="table-cell">
					<div>
						<img src="{{ asset('public/images/chuyende/mobile/nhiemtrunglieudao/nhiemtrunglieudao-12.png') }}" alt="" class="center-block img-responsive">
					</div>
					<div class="text-center">
						Kiểm tra nước tiểu
					</div>
				</div>
				<div class="table-cell">
					<div>
						<img src="{{ asset('public/images/chuyende/mobile/nhiemtrunglieudao/nhiemtrunglieudao-13.png') }}" alt="" class="center-block img-responsive">
					</div>
					<div class="text-center">
						Đo niệu dòng
					</div>
				</div>
			</div>
			<div class="dis-table table2 width-100">
				<div class="table-cell">
					<div>
						<img src="{{ asset('public/images/chuyende/mobile/nhiemtrunglieudao/nhiemtrunglieudao-14.png') }}" alt="" class="center-block img-responsive">
					</div>
					<div class="text-center">
						Phân tích dịch tiết niệu đạo
					</div>
				</div>
				<div class="table-cell">
					<div>
						<img src="{{ asset('public/images/chuyende/mobile/nhiemtrunglieudao/nhiemtrunglieudao-15.png') }}" alt="" class="center-block img-responsive">
					</div>
					<div class="text-center">
						Phân tích sinh hóa máu
					</div>
				</div>
				<div class="table-cell">
					<div>
						<img src="{{ asset('public/images/chuyende/mobile/nhiemtrunglieudao/nhiemtrunglieudao-16.png') }}" alt="" class="center-block img-responsive">
					</div>
					<div class="text-center">
						Nuôi cấy vi khuẩn dịch niệu
					</div>
				</div>
			</div>
			<div class="text-center fixglobal2">
				<a class="global2" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
					Click tư vấn xem kiểm tra thế nào
					<span>Cần bao nhiêu chi phí?</span>
				</a>
			</div>
		</div>
		<div class="row6">
			<div class="global1">
				<div class="shap1 dis-table width-100">
					<div class="text-uppercase text-center table-cell">
						Chuyên khoa nam khoa Nam Khang<br>Hiệu quả càng đảm bảo
					</div>
				</div>
			</div>
			<div class="bg">
				<div class="text-center text-uppercase line1">
					CRS- khắc tinh của chứng viêm – 3 ngày thấy hiệu quả
				</div>
				<div class="text-justify">
					Không phẫu thuật, không mổ. Loại bỏ hiệu quả virus, đồng thời đảm bảo hình dáng cơ quan tiết niệu hoàn chỉnh và chức năng sinh lý bình thường.
				</div>
				<div class="img1">
					<img src="{{ asset('public/images/chuyende/mobile/nhiemtrunglieudao/nhiemtrunglieudao-17.png') }}" alt="" class="center-block img-responsive">
				</div>
				<div class="text-center text-uppercase line2">
					Ưu điểm của liệu pháp CRS - khắc tinh của chứng viêm
				</div>
				<div class="text-center">
					<p>* Rút ngắn thời gian điều trị</p>
					<p>* Nhanh chóng chữa khỏi bệnh</p>
					<p>* An toàn, không có tác dụng phụ</p>
				</div>
			</div>
			<div class="text-center fixglobal2">
				<a class="global2" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
					Click tìm hiểu quá trình điều trị viêm
				</a>
			</div>
		</div>
		<div class="row7">
			<div class="global1">
				<div class="shap1 dis-table width-100">
					<div class="text-uppercase text-center table-cell">
						Điều trị nhiễm trùng niệu đạo<br>Nam Khang đáng để tin tưởng
					</div>
				</div>
			</div>
			<div class="dis-table table1 width-100">
				<div class="table-cell">
					<div>
						<img src="{{ asset('public/images/chuyende/mobile/nhiemtrunglieudao/nhiemtrunglieudao-18.png') }}" alt="" class="center-block img-responsive">
					</div>
				</div>
				<div class="table-cell">
					<div>
						<img src="{{ asset('public/images/chuyende/mobile/nhiemtrunglieudao/nhiemtrunglieudao-19.png') }}" alt="" class="center-block img-responsive">
					</div>
				</div>
				<div class="table-cell">
					<div>
						<img src="{{ asset('public/images/chuyende/mobile/nhiemtrunglieudao/nhiemtrunglieudao-20.png') }}" alt="" class="center-block img-responsive">
					</div>
				</div>
			</div>
			<div class="dis-table table2 width-100">
				<div class="table-cell">
					<div>
						<img src="{{ asset('public/images/chuyende/mobile/nhiemtrunglieudao/nhiemtrunglieudao-21.png') }}" alt="" class="center-block img-responsive">
					</div>
				</div>
				<div class="table-cell">
					<div>
						<img src="{{ asset('public/images/chuyende/mobile/nhiemtrunglieudao/nhiemtrunglieudao-22.png') }}" alt="" class="center-block img-responsive">
					</div>
				</div>
				<div class="table-cell">
					<div>
						<img src="{{ asset('public/images/chuyende/mobile/nhiemtrunglieudao/nhiemtrunglieudao-23.png') }}" alt="" class="center-block img-responsive">
					</div>
				</div>
			</div>
		</div>
		<div class="row8">
			<div class="global1">
				<div class="shap1 dis-table width-100">
					<div class="text-uppercase text-center table-cell">
						Điều trị nhiễm trùng niệu đạo<br>Nam Khang đáng để tin tưởng
					</div>
				</div>
			</div>
			<div class="des1 clearfix">
				<div class="pull-left">
					<img src="{{ asset('public/images/chuyende/mobile/nhiemtrunglieudao/nhiemtrunglieudao-24.png') }}" alt="">
				</div>
				<div>
					Chú ý: Trang web này đã bảo mật, đảm bảo an toàn tuyệt đối thông tin của bạn, trước khi đến khám hãy đặt hẹn qua điện thoại để không cần phải xếp hàng chờ đợi, miễn phí đăng kí khám chuyên gia.
				</div>
			</div>
			<form action="{{ url('sendmail') }}" method="post" id="formMailSend">
				{{ csrf_field() }}
				<div class="radius1">
					<div class="row form-group">
						<div class="col-sm-4 red1 text-uppercase text-right">
							Họ tên bệnh nhân :
						</div>
						<div class="col-sm-8">
							<input type="text" name="ho_va_ten">
						</div>
					</div>
					<div class="row form-group">
						<div class="col-sm-4 red1 text-uppercase text-right">
							Số điện thoại :
						</div>
						<div class="col-sm-8">
							<input type="number" name="phone" required>
						</div>
					</div>
					<div class="row form-group">
						<div class="col-sm-4 red1 text-uppercase text-right">
							thời gian đặt hẹn :
						</div>
						<div class="col-sm-8">
							<input type="text" name="thoigian">
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
				</div>
				<div class="buttons">
					<div class="row">
						<div class="col-xs-6">
							<button type="submit" class="text-uppercase text-center dis-table width-100 btn1">
								<span class="table-cell">
									<i></i>
								</span>
								<span class="table-cell text-center">
									Gửi đăng kí
								</span>
							</button>
						</div>
						<div class="col-xs-6">
							<button type="reset" class="dis-table width-100 text-center text-uppercase btn2">
								<span class="table-cell">
									<i></i>
								</span>
								<span class="table-cell text-center">
									Điền lại thông tin
								</span>
							</button>
						</div>
					</div>
				</div>
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