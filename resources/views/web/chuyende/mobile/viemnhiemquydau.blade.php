@extends('layout.chuyende-mobile')
<!-- title -->
@section('title')
	<title>Viêm nhiễm quy đầu</title>
@endsection('title')
<!-- seo -->
@section('keyword')
	@include('seo.seo_home')
@endsection('keyword')
<!-- css -->
@section('css')
<link rel="canonical" href="{{ url('chuyen-de/viem-nhiem-quy-dau') }}" />
<link rel="stylesheet" href="{{ asset('public/css/chuyende/mobile/viem-nhiem-quy-dau.css') }}">
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
	<img src="{{ asset('public/images/chuyende/mobile/viemnhiemquydau/viemnhiemquydau-1.png') }}" alt="Phòng khám Nam Khang" class="center-block img-responsive">
@endsection('banner')
<!-- content -->
@section('content')
	<div class="container chuyende">
		<div class="row1">
			<div class="dis-table table1">
				<div class="table-cell cell1 text-center">
					Chuyên gia cho biết
				</div>
				<div class="table-cell cell2">
					<p class="text-justify">
						Quy đầu khó chịu, xuất hiện những triệu chứng bất thường, nếu như có đời sống tình dục không an toàn, có thể bị viêm nhiễm, các bệnh thường gặp là viêm quy đầu (cần chú ý: viêm nhiễm cơ quan sinh dục nếu như không kịp thời điều trị có thể gây viêm nhiễm giao thoa khi quan hệ tình dục, truyền nhiễm cho bạn đời), nếu như quan hệ tình dục không an toàn thường bị mắc các bệnh xã hội (sùi mào gà, giang mai, lậu…)
					</p>
					<div class="clearfix">
						<a class="dis-table table2 pull-right" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
							<span class="table-cell cell1"><i></i></span>
							<span class="text-center text-uppercase table-cell cell2">Cổng tư vấn</span>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row2 global1">
			<div class="bg">
				<div class="line1 text-uppercase text-center">Triệu chứng lâm sàng</div>
				<div class="line2 text-center text-uppercase"><span>thường gặp ở viêm nhiễm quy đầu</span></div>
				<div class="line3 text-center text-uppercase"><span>COMMON CLNICAL SYMPTOMS OF THE INFECTION OF THE GLANS PENIS</span></div>
			</div>
		</div>
		<div class="row3">
			<div class="dis-table width-100 table1">
				<div class="table-cell">
					<div>
						<img src="{{ asset('public/images/chuyende/mobile/viemnhiemquydau/viemnhiemquydau-5.png') }}" alt="" class="img-responsive center-block">
						<span>Quy đầu mọc nốt đỏ</span>
					</div>
				</div>
				<div class="table-cell">
					<div>
						<img src="{{ asset('public/images/chuyende/mobile/viemnhiemquydau/viemnhiemquydau-6.png') }}" alt="" class="img-responsive center-block">
						<span>Quy đầu bong da</span>
					</div>
				</div>
				<div class="table-cell">
					<div>
						<img src="{{ asset('public/images/chuyende/mobile/viemnhiemquydau/viemnhiemquydau-7.png') }}" alt="" class="img-responsive center-block">
						<span>Quy đầu sưng đau</span>
					</div>
				</div>
			</div>
			<div class="dis-table width-100 table1">
				<div class="table-cell">
					<div>
						<img src="{{ asset('public/images/chuyende/mobile/viemnhiemquydau/viemnhiemquydau-8.png') }}" alt="" class="img-responsive center-block">
						<span>Quy đầu mọc mụn nước</span>
					</div>
				</div>
				<div class="table-cell">
					<div>
						<img src="{{ asset('public/images/chuyende/mobile/viemnhiemquydau/viemnhiemquydau-9.png') }}" alt="" class="img-responsive center-block">
						<span>Quy đầu mọc mụn</span>
					</div>
				</div>
				<div class="table-cell">
					<div>
						<img src="{{ asset('public/images/chuyende/mobile/viemnhiemquydau/viemnhiemquydau-10.png') }}" alt="" class="img-responsive center-block">
						<span>Quy đầu mọc gai u nhú</span>
					</div>
				</div>
			</div>
			<div class="dis-table width-100 table1">
				<div class="table-cell">
					<div>
						<img src="{{ asset('public/images/chuyende/mobile/viemnhiemquydau/viemnhiemquydau-11.png') }}" alt="" class="img-responsive center-block">
						<span>Quy đầu mọc mụn sần</span>
					</div>
				</div>
				<div class="table-cell">
					<div>
						<img src="{{ asset('public/images/chuyende/mobile/viemnhiemquydau/viemnhiemquydau-12.png') }}" alt="" class="img-responsive center-block">
						<span>Quy đầu chảy mủ</span>
					</div>
				</div>
				<div class="table-cell">
					<div>
						<img src="{{ asset('public/images/chuyende/mobile/viemnhiemquydau/viemnhiemquydau-13.png') }}" alt="" class="img-responsive center-block">
						<span>Biểu mô quy đầu lở loét</span>
					</div>
				</div>
			</div>
			<div class="global2">
				<div class="line1"><span>Chuyên gia nhắc nhở</span></div>
				<div class="line2">
					Viêm quy đầu và triệu chứng của bệnh xã hội tương đối giống nhau, cần phải nhờ bác sĩ thăm khám mới chẩn đoán được
				</div>
			</div>
			<div class="global3 text-center">
				<div>Trao đổi tình trạng của bản thân, nhanh chóng nắm bắt tình trạng bệnh</div>
				<div class="text-uppercase"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">click vào để tư vấn với chuyên gia</a></div>
			</div>
		</div>
		<div class="row4">
			<div class="global1">
				<div class="bg">
					<div class="line1 text-uppercase text-center">Nguyên nhân nào</div>
					<div class="line2 text-center text-uppercase"><span>gây nên viêm nhiễm quy đầu</span></div>
					<div class="line3 text-center text-uppercase"><span>WHAT CAUSES THE INFECTION Ò THE GLANS PENIS?</span></div>
				</div>
			</div>
			<div class="description">
				Viêm nhiễm quy đầu là căn bệnh viêm nhiễm hệ sinh dục thường gặp ở nam giới, chuyên gia Phòng khám chuyên khoa Nam Khang cho biết, nguyên nhân gây viêm nhiễm quy đầu ở nam giới có rất nhiều, nguyên nhân thường gặp là do mắc viêm quy đầu, mụn rộp sinh dục, sùi mào gà….gây nên.
			</div>
			<div class="dis-table width-100 table1">
				<div class="table-cell">
					<div><i class="bg1 center-block"></i></div>
					<h2 class="text-uppercase text-center">Viêm quy đầu</h2>
				</div>
				<div class="table-cell">
					<div class="width-100">Quy đầu bị viêm do trùng roi, candida, nấm…</div>
					<div class="width-100"><span>Triệu chứng thường gặp</span></div>
					<div class="width-100">Nốt đỏ, chảy mủ, ngứa rát, sưng đỏ, lở loét, mụn trắng, đau, mùi bất thường, lỗ niệu đạo bất thường…</div>
				</div>
			</div>
			<div class="dis-table width-100 table1">
				<div class="table-cell">
					<div><i class="bg2 center-block"></i></div>
					<h2 class="text-uppercase text-center">Mụn rộp sinh dục</h2>
				</div>
				<div class="table-cell">
					<div class="width-100">Đa phần do sinh hoạt tình dục không an toàn, viêm nhiễm gián tiếp, nhiễm trùng trong thời kì mang thai…</div>
					<div class="width-100"><span>Triệu chứng thường gặp</span></div>
					<div class="width-100">Thời gian đầu sẽ xuất hiện mụn nước, sau mấy ngày sẽ vỡ ra tạo thành vết loét, một số bệnh nhân có cảm giác nóng rát hoặc đau.…</div>
				</div>
			</div>
			<div class="dis-table width-100 table1">
				<div class="table-cell">
					<div><i class="bg3 center-block"></i></div>
					<h2 class="text-uppercase text-center">Sùi mào gà</h2>
				</div>
				<div class="table-cell">
					<div class="width-100">Đa phần do sinh hoạt tình dục không an toàn, viêm nhiễm gián tiếp...</div>
					<div class="width-100"><span>Triệu chứng thường gặp</span></div>
					<div class="width-100">Xuất hiện những u nhú dạng mào gà, hoa súp lơ hoặc gai, dễ bị lở loét, chảy dịch và xuất huyết, có mùi hôi.</div>
				</div>
			</div>
			<div class="dis-table width-100 table1">
				<div class="table-cell">
					<div><i class="bg4 center-block"></i></div>
					<h2 class="text-uppercase text-center">Hẹp bao quy đầu</h2>
				</div>
				<div class="table-cell">
					<div class="width-100">Tích tụ bụi bẩn ở bao quy đầu hoặc không chú ý vệ sinh gây nên</div>
					<div class="width-100"><span>Triệu chứng thường gặp</span></div>
					<div class="width-100">Quy đầu đỏ cục bộ, có cảm giác nóng rát và ngứa.</div>
				</div>
			</div>
			<div class="dis-table width-100 table1">
				<div class="table-cell">
					<div><i class="bg5 center-block"></i></div>
					<h2 class="text-uppercase text-center">Viêm niệu đạo</h2>
				</div>
				<div class="table-cell">
					<div class="width-100">Ảnh hưởng đến thượng bì niệu đạo, gây viêm nhiễm cục bộ</div>
					<div class="width-100"><span>Triệu chứng thường gặp</span></div>
					<div class="width-100">Khi đi tiểu lỗ niệu đạo xuất hiện cảm giác đau như kim châm, tiểu không hết, đau khó chịu, thường có triệu chứng tiểu nhiều, tiểu rắt, tiểu vàng…</div>
				</div>
			</div>
			<div class="global2">
				<div class="line1"><span>Chuyên gia nhắc nhở</span></div>
				<div class="line2">
					Hiện tượng quy đầu bị viêm cần được coi trọng, kịp thời đến bệnh viện điều trị, không tự ý dùng thuốc hoặc tìm những phòng khám không chuyên khoa tùy tiện chữa, tránh bệnh trở nên nghiêm trọng hơn!
				</div>
			</div>
			<div class="global3 text-center">
				<div>Tình trạng của tôi do nguyên nhân nào ở trên gây nên?</div>
				<div class="text-uppercase"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">click chuyên gia TƯ VẤN</a></div>
			</div>
		</div>
		<div class="row5">
			<div class="global1">
				<div class="bg">
					<div class="line1 text-uppercase text-center">Ba phương pháp</div>
					<div class="line2 text-center text-uppercase"><span>chẩn đoán viêm nhiễm quy đầu</span></div>
					<div class="line3 text-center text-uppercase"><span>3 METHODS TO DIAGNOSE THE INFETION OF GLANS PENI</span></div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4">
					<div>
						<div class="text-center width-100">
							<i class="bg1"></i>
						</div>
						<div class="">
							<div class="line1 text-center"><strong>Miêu tả triệu chứng</strong></div>
							<div class="line2 text-center">symptom description</div>
						</div>
						<div class="text-center"><i class="bg2"></i></div>
						<div class="text-justify width-100">
							<p>Nhập nội dung miêu tả tình hình cụ thể, chuyên gia căn cứ vào đó chẩn đoán. (Thích hợp với triệu chứng xuất hiện trong vòng 1~7 ngày)</p>
						</div>
						<div>
							<a class="width-100 text-center" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
								Click vào để<br>miêu tả tình trạng trực tuyến
							</a>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div>
						<div class="text-center">
							<div><i class="bg3"></i></div>
						</div>
						<div class="">
							<div class="line1 text-center"><strong>Tư vấn bằng hình ảnh</strong></div>
							<div class="line2 text-center">Photo examination</div>
						</div>
						<div class="text-center">
							<div><i class="bg4"></i></div>
						</div>
						<div class="text-justify">
							<p>Bệnh nhân dùng điện thoại chụp lại ảnh, gửi cho chuyên gia chẩn đoán bằng hình ảnh (Thích hợp với triệu chứng xuất hiện trong vòng 8~14 ngày)</p>
						</div>
						<div>
							<a class="width-100 text-center" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
								Click vào để<br>miêu tả tình trạng trực tuyến
							</a>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div>
						<div class="text-center">
							<div><i class="bg5"></i></div>
						</div>
						<div class="">
							<div class="line1 text-center"><strong>Đến phòng khám kiểm tra</strong></div>
							<div class="line2 text-center">Check to the hospital</div>
						</div>
						<div class="text-center"><div><i class="bg6"></i></div></div>
						<div class="text-justify">
							<p>Tiến hành “xét nghiệm dịch”, căn cứ vào báo cáo đưa ra chẩn đoán chính xác (Thích hợp với triệu chứng xuất hiện trên 15 ngày)</p>
						</div>
						<div>
							<a class="width-100 text-center" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
								Click vào để<br>miêu tả tình trạng trực tuyến
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row6">
			<div class="global1">
				<div class="bg">
					<div class="line1 text-uppercase text-center">Liệu pháp đặc biệt cho sức khỏe nam giới</div>
					<div class="line2 text-center text-uppercase"><span>Điều trị viêm nhiễm quy đầu</span></div>
					<div class="line3 text-center text-uppercase"><span>SUN THERAPY FOR THE TREATMENT OF INFECTION OF THE GLANS PENIS</span></div>
				</div>
			</div>
			<div class="truong">
				<div class="">
					<div class="row">
						<div class="col-sm-5 text-center">
							<div class="">
								Mụn rộp sinh dục, sùi mào gà<br>gây viêm nhiễm quy đầu
							</div>
						</div>
						<div class="col-sm-7 text-center">
							<div class="">
								<div>Liệu pháp quang động lực Ira + miễn dịch MB</div>
								<div>Ira Irrational Immunology + MB Immunotherapy</div>
							</div>
						</div>
					</div>
				</div>
				<div class="border">
					<div class="text-justify">
						[Ưu điểm kĩ thuật] “Liệu pháp quang động lực Ira + miễn dịch MB”, căn cứ vào tính chất của vi khuẩn gây bệnh và độ nhạy cảm của vi khuẩn với thuốc, kết hợp chặt chẽ giữa các loại thuốc đặc trị và phương pháp cho sức khỏe nam giới tiến hành điều trị tích cực, kết hợp điều chỉnh đông y theo cá thể hóa, điều trị triệu chứng, điều trị yếu tố bệnh tiềm ẩn, từ đó hồi phục sức khỏe của cơ thể.
					</div>
					<div class="link clearfix">
						<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="pull-right dis-table">
							<span class="table-cell">
								<img src="{{ asset('public/images/chuyende/mobile/viemnhiemquydau/viemnhiemquydau-20.png') }}" alt="">
							</span>
							<span class="text-uppercase table-cell">Đặt hẹn ngay</span>
						</a>
					</div>
				</div>
			</div>
			<div class="truong">
				<div class="">
					<div class="row">
						<div class="col-sm-5 text-center">
							Hẹp bao quy đầu gây viêm<br>nhiễm quy đầu
						</div>
						<div class="col-sm-7 text-center">
							<div class="">
								<div>Thủ thuật cắt bao quy đầu xâm lấn tối thiểu<br>Hàn Quốc</div>
								<div>The procedure of minimally invasive circumcision of Korea</div>
							</div>
						</div>
					</div>
				</div>
				<div class="border">
					<div class="text-justify">
						[Ưu điểm kĩ thuật] Thủ thuật cắt bao quy đầu xâm lấn tối thiểu Hàn Quốc thông qua báo cáo lâm sàng với 5000 trường hợp bệnh nhân dài- hẹp bao quy đầu đã chứng minh. Phương pháp này có các ưu điểm như tương đối quy chuẩn, an toàn mĩ quan, nâng cao chức năng sinh dục…Được giới y học trong lĩnh vực nam khoa khen ngợi, và thay thế cho kĩ thuật cắt vòng bao quy đầu truyền thống trước đây.
					</div>
					<div class="link clearfix">
						<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="pull-right dis-table">
							<span class="table-cell">
								<img src="{{ asset('public/images/chuyende/mobile/viemnhiemquydau/viemnhiemquydau-20.png') }}" alt="">
							</span>
							<span class="text-uppercase table-cell">Đặt hẹn ngay</span>
						</a>
					</div>
				</div>
			</div>
			<div class="global3 text-center">
				<div>Tình trạng của tôi do nguyên nhân nào ở trên gây nên?</div>
				<div class="text-uppercase"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">click chuyên gia TƯ VẤN</a></div>
			</div>
		</div>
		<div class="row7">
			<div class="global1">
				<div class="bg">
					<div class="line1 text-uppercase text-center">Liệu pháp đặc biệt cho sức khỏe nam giới</div>
					<div class="line2 text-center text-uppercase"><span>Điều trị viêm nhiễm quy đầu</span></div>
					<div class="line3 text-center text-uppercase"><span>COMMON PROBLEMS ON THE INFECTION OF GLANS PENIS</span></div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-7">
					<div>
						<div class="dis-table width-100">
							<div class="table-cell cell1">
								<div>Hỏi</div>
							</div>
							<div class="table-cell cell2">
								<strong>Quy đầu ngứa rát, sưng đỏ, có mùi bất thường là sao?</strong>
							</div>
						</div>
						<div class="">
							<span><strong>Chuyên gia giải đáp</strong></span>
						</div>
						<div class="">
							Trên lâm sàng, 30.4% bệnh nhân viêm nhiễm quy đầu là do dài bao quy đầu gây nên, ngoài ra còn có các nguyên nhân như quan hệ tình dục không an toàn, thủ dâm, ngoại thương…
						</div>
						<div class="">
							<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><span>Hỏi chuyên gia</span></a>
						</div>
						<div class="">
							Điều trị viêm nhiễm quy đầu có cần cắt bao quy đầu không?
						</div>
					</div>
				</div>
				<div class="col-sm-5">
					<div>
						<div class="dis-table width-100"><div class="table-cell text-center">Vấn đề tương tự</div></div>
						<div class="" style="margin: 20px auto;">Viêm quy đầu giai đoạn sớm có chữa khỏi được không?</div>
						<div class="border"></div>
						<div>
							<a class="dis-table width-100" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
								<span class="table-cell text-center">Tôi còn vấn đề khác cần hỏi</span>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-7">
					<div>
						<div class="dis-table width-100">
							<div class="table-cell cell1">
								<div>Hỏi</div>
							</div>
							<div class="table-cell cell2">
								<strong>Viêm nhiễm quy đầu dùng thuốc có khỏi không?</strong>
							</div>
						</div>
						<div class="">
							<span><strong>Chuyên gia giải đáp</strong></span>
						</div>
						<div class="">
							Nguyên nhân gây viêm nhiễm quy đầu rất nhiều, cụ thể dùng thuốc như thế nào cần phải chẩn đoán thuộc nhóm bệnh nào mới xác định được, dùng thuốc mù quáng có thể gây nên hậu quả xấu như tổn thương do dị ứng thuốc….
						</div>
						<div class="">
							<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><span>Hỏi chuyên gia</span></a>
						</div>
						<div class="">
							Chi phí kiểm tra viêm nhiễm quy đầu là bao nhiêu?
						</div>
					</div>
				</div>
				<div class="col-sm-5">
					<div>
						<div class="dis-table width-100"><div class="table-cell text-center">Vấn đề tương tự</div></div>
						<div class="" style="margin: 20px auto;">Liệu pháp tự điều trị viêm nhiễm quy đầu?</div>
						<div class="border"></div>
						<div class="" style="margin: 20px auto;">Điều trị chuyên khoa viêm nhiễm quy đầu hết bao nhiêu tiền?</div>
						<div>
							<a class="dis-table width-100" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
								<span class="table-cell text-center">Tôi còn vấn đề khác cần hỏi</span>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-7">
					<div>
						<div class="dis-table width-100">
							<div class="table-cell cell1">
								<div>Hỏi</div>
							</div>
							<div class="table-cell cell2">
								<strong>Mụn rộp sinh dục, sùi mào gà có những nguy hại gì? Nghiêm trọng không? Ảnh hưởng đến chức năng sinh sản không?</strong>
							</div>
						</div>
						<div class="">
							<span><strong>Chuyên gia giải đáp</strong></span>
						</div>
						<div class="">
							Sùi mào gà, mụn rộp sinh dục đều là các bệnh xã hội, có ảnh hưởng vô cùng lớn đối với cơ quan sinh sản, dễ dẫn đến rối loạn chức năng sinh dục, nghiêm trọng hơn có thể gây hại đến tính mạng.
						</div>
						<div class="">
							<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><span>Hỏi chuyên gia</span></a>
						</div>
						<div class="">
							Thông thường xử lý mụn rộp sinh dục thế nào?
						</div>
					</div>
				</div>
				<div class="col-sm-5">
					<div>
						<div class="dis-table width-100"><div class="table-cell text-center">Vấn đề tương tự</div></div>
						<div class="" style="margin: 20px auto;">Mắc mụn rộp sinh dục nên làm thế nào?</div>
						<div class="border"></div>
						<div>
							<a class="dis-table width-100" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
								<span class="table-cell text-center">Tôi muốn hỏi thêm các vấn đề khác</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection('content')
@section('toolbar')
	<div class="container footer-toolbar">
		<div class="dis-table width-100">
			<div class="table-cell">
				<div class="box-center">
					<h3 class="text-center"><a href="tel:18006181"><i class="glyphicon glyphicon-phone-alt"></i></a></h3>
					<h4 class="text-center"><a href="tel:18006181">Gọi điện</a></h4>
				</div>
			</div>
			<div class="table-cell">
				<div class="box-center">
					<h3 class="text-center"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><i class="fa fa-calendar"></i></a></h3>
					<h4 class="text-center"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Đặt hẹn</a></h4>
				</div>
			</div>
			<div class="table-cell">
				<div class="box-center">
					<h3 class="text-center"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><i class="fa fa-comment"></i></a></h3>
					<h4 class="text-center"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Tư vấn</a></h4>
				</div>
			</div>
			<div class="table-cell">
				<div class="box-center">
					<h3 class="text-center"><a href="{{ url('/dia-chi-phong-kham') }}"><i class="fa fa-map-marker"></i></a></h3>
					<h4 class="text-center"><a href="{{ url('/dia-chi-phong-kham') }}">Địa chỉ</a></h4>
				</div>
			</div>
		</div>
	</div>
@endsection('toolbar')