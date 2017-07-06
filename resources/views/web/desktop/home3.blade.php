@extends('layout.desktop3')
@section('title')
	<title>{{ $setting->web_name }}</title>
	@include('seo.seo_home')
@endsection('title')
@section('css')
	<link rel="stylesheet" href="{{ asset('public/css/desktop3/desktop-home.css') }}">
@endsection('css')
@section('js')
@endsection('js')
@section('banner')
	@include('layouts.bannerDesktop')
@endsection('banner')
@section('menu')
	@include('layouts.menuDesktop')
@endsection('menu')
@section('content')
	<div class="row1">
		<div class="container">
			<div class="width-100 table1 dis-table">
				<a class="table-cell">Bệnh lý điển hình</a>
				<a href="#" class="table-cell">Rối loạn chức<br>năng sinh dục</a>
				<a href="#" class="table-cell">Chỉnh hình cơ<br>quan sinh dục</a>
				<a href="#" class="table-cell">Bệnh tuyến<br>tiền liệt</a>
				<a href="#" class="table-cell">Viêm nhiễm hệ<br>thống sinh dục</a>
				<a href="#" class="table-cell">Vô sinh nam</a>
				<a href="#" class="table-cell">Các bệnh khác</a>
				<span class="table-cell">
					<input type="text" placeholder="Tìm kiếm tại đây">
					<button>Tìm kiếm</button>
				</span>
			</div>
			<div class="bg">
				<div class="width-100 table2 dis-table">
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="table-cell pos-relative">
						Dài bao<br>quy đầu
						<img src="{{ asset('public/css/desktop3/imghome/home-6.png') }}" alt="" class="pos-absolute">
					</a>
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="table-cell pos-relative">
						Thời gian<br>quan hệ ngắn
						<img src="{{ asset('public/css/desktop3/imghome/home-6.png') }}" alt="" class="pos-absolute">
					</a>
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="table-cell">
						Tiểu nhiều<br>tiểu rắt
					</a>
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="table-cell">
						Cửa âm đạo<br>chảy dịch trắng 
					</a>
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="table-cell">
						Mụn nhỏ màu<br>đỏ ở quy đầu 
					</a>
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="table-cell">
						Viêm quy đầu<br>có triệu chứng gì 
					</a>
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="table-cell">
						Tiểu buốt<br>tiểu không hết
					</a>
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="table-cell">
						Xuất tinh có<br>cảm giác đau
					</a>
				</div>
				<div class="width-100 table3 dis-table">
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="table-cell">
						Xuất tinh quá nhanh
					</a>
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="table-cell">
						Quy đầu sưng đỏ
					</a>
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="table-cell">
						Thời gian cương cứng ngắn
					</a>
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="table-cell">
						Tinh hoàn sưng to
					</a>
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="table-cell">
						Đáy chậu đau đớn
					</a>
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="table-cell">
						Tiểu xong rỉ giọt trắng 
					</a>
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="table-cell">
						Triệu chứng viêm tuyến tiền liệt
					</a>
				</div>
				<div class="width-100 table4 dis-table">
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="table-cell">
						Mẹo tăng cường sức khỏe sinh lý	
					</a>
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="table-cell">
						Tinh hoàn có mụn đỏ
					</a>
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="table-cell">
						Cơ quan sinh dục ngứa rát, chảy mủ, có mùi lạ
					</a>
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="table-cell">
						Tinh hoàn sưng to
					</a>
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="table-cell">
						Đáy chậu đau đớn
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="row2" >
		<div class="container">
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1 borleft">
					<div class="heading">
						<span class="pos-relative text-uppercase">ƯU ĐÃI GẦN ĐÂY <img src="{{ asset('public/css/desktop3/imghome/home-6.png') }}" alt="" class="pos-absolute"></span>
					</div>
					<div class="myslick_config active slick-uudai body">
						<div>
							<img src="{{ asset('public/css/desktop3/imghome/home-7.png') }}" alt="" class="center-block img-responsive">
						</div>
						<div>
							<img src="{{ asset('public/css/desktop3/imghome/home-71.png') }}" alt="" class="center-block img-responsive">
						</div>
					</div>
				</div>
				<div class="flex1col1 borleft">
					<div class="heading">
						<span class="pos-relative text-uppercase">TIN TỨC NAM KHANG</span>
					</div>
					<div class="myslick_config slick-tintuc body">
						<div>
							<img src="{{ asset('public/css/desktop3/imghome/home-81.png') }}" alt="" class="center-block img-responsive">
						</div>
						<div>
							<img src="{{ asset('public/css/desktop3/imghome/home-82.png') }}" alt="" class="center-block img-responsive">
						</div>
						<div>
							<img src="{{ asset('public/css/desktop3/imghome/home83.png') }}" alt="" class="center-block img-responsive">
						</div>
					</div>
				</div>
				<div class="flex1col1">
					<div class="heading">
						<span class="pos-relative text-uppercase">HOẠT ĐỘNG CÔNG ÍCH</span>
					</div>
					<div class="myslick_config slick-hoatdong body">
						<div>
							<img src="{{ asset('public/css/desktop3/imghome/home-9.png') }}" alt="" class="center-block img-responsive">
						</div>
						<div>
							<img src="{{ asset('public/css/desktop3/imghome/home-91.png') }}" alt="" class="center-block img-responsive">
						</div>
						<div>
							<img src="{{ asset('public/css/desktop3/imghome/home-92.png') }}" alt="" class="center-block img-responsive">
						</div>
					</div>
					<script>
						$(document).ready(function(){
						  	$('.myslick_config').slick({
						    	slidesToShow: 1,
  								slidesToScroll: 1,
						  	});
						  	setInterval(function(){ 
						  		$(".row2 .myslick_config.active").slick('slickNext');
						  		if($(".row2 .myslick_config.active").parents('div.flex1col1').next().length){
						  			$(".row2 .myslick_config.active").removeClass('active').parents('div.flex1col1').next().children('.myslick_config').addClass('active');
						  		}else{
						  			$(".row2 .myslick_config.active").removeClass('active');
						  			$(".row2").find('div.flex1col1').first().find('.myslick_config').addClass('active');
						  		}
						  	}, 2000);
						});
					</script>
				</div>
			</div>
			<div class="img">
				<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="hvr-float-shadow"><img src="{{ asset('public/css/desktop3/imghome/home-11.png') }}" alt="" class="center-block img-responsive"></a>
			</div>
		</div>
	</div>
	<div class="row3" data-scroll-reveal="enter bottom">
		<div class="container pos-relative">
			<div class="heading">
				<span class="color1 text-uppercase">ĐỘI NGŨ Y BÁC SĨ NAM KHANG</span> 
				<span class="color2 text-uppercase">Tất cả vì sức khỏe của người bệnh</span>
			</div>
			<div class="body">
				<div class="flex flex1 justify-content-between">
					<div class="flex1col1">
						Khám bệnh tìm đến chuyên gia là suy nghĩ phổ biến của người dân, khám nam khoa càng cần tìm những chuyên gia kỳ cựu với kinh nghiệm lâm sàng phong phú, thông thạo các kỹ thuật y học. Phòng khám Nam Khang Hà Nội thực hiện kiểm tra đầu vào nghiêm ngặt trình độ của đội ngũ y bác sĩ, tập hợp được các chuyên gia có kinh nghiệm lâu năm trong ngành nam khoa trên địa bàn cả trong và ngoài nước, duy trì sử dụng rộng rãi dịch vụ khám chữa chất lượng cao đối với các bệnh nhân nam giới. Từ khi thành lập tới nay, Nam Khang đã chữa khỏi cho hàng vạn bệnh nhân mắc các bệnh nam khoa, và nhận được sự đánh giá cao từ đông đảo quần chúng nhân dân... <a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">[Chi tiết]</a>

					</div>
					<div class="flex1col2">
						<img src="{{ asset('public/css/desktop3/imghome/home-14.png') }}" alt="" class="center-block">						
					</div>
				</div>
			</div>
			<img src="{{ asset('public/css/desktop3/imghome/home-12.png') }}" alt="" class="pos-absolute pos1">
		</div>
	</div>
	<div class="row4" data-scroll-reveal="enter bottom">
		<div class="container">
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1">
					<div class="contents">
						<div class="active">
							<div class="flex flex2 justify-content-between">
								<div class="flex2col1">
									<img src="{{ asset('public/css/desktop3/imghome/home-15.png') }}" alt="">
								</div>
								<div class="flex2col2 pos-relative">
									<ul>
										@foreach($post_tuyentienliets as $post)
										<li class="clearfix">
											<a href="{{ MyAPI::getUrlPostObj($post) }}" class="pull-left">{{ $post->post_name }}</a>
											<a href="{{ MyAPI::getUrlPostObj($post) }}" class="pull-right">Chi tiết</a>
										</li>
										@endforeach
									</ul>
									<div class="pos-absolute">
										<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">click để được tư vấn thêm</a>
									</div>
								</div>
							</div>
							<div class="flex flex3 justify-content-between">
								<a class="flex3col1" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
									<table>
										<tr>
											<td><img src="{{ asset('public/css/desktop3/imghome/home-16.png') }}" alt=""></td>
											<td>
												Trong 10 ngày, viêm tiền liệt tuyến 7 năm nay đã biến mất
											</td>
										</tr>
									</table>
								</a>
								<a class="flex3col1" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
									<table>
										<tr>
											<td><img src="{{ asset('public/css/desktop3/imghome/home-16.png') }}" alt=""></td>
											<td>
												Suốt ngày chạy vào WC, ở trong WC luôn cho xong
											</td>
										</tr>
									</table>
								</a>
								<a class="flex3col1" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
									<table>
										<tr>
											<td><img src="{{ asset('public/css/desktop3/imghome/home-16.png') }}" alt=""></td>
											<td>
												Uống rượu như uống nước, viêm tiền liệt tuyến nói đến là đến
											</td>
										</tr>
									</table>
								</a>
							</div>
						</div>
						<div class="">
							<div class="flex flex2 justify-content-between">
								<div class="flex2col1">
									<img src="{{ asset('public/css/desktop3/imghome/roi-loan-cuong-duong.png') }}" alt="">
								</div>
								<div class="flex2col2 pos-relative">
									<ul>
										@foreach($post_roiloans as $post)
										<li class="clearfix">
											<a href="{{ MyAPI::getUrlPostObj($post) }}" class="pull-left">{{ $post->post_name }}</a>
											<a href="{{ MyAPI::getUrlPostObj($post) }}" class="pull-right">Chi tiết</a>
										</li>
										@endforeach
									</ul>
									<div class="pos-absolute">
										<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">click để được tư vấn thêm</a>
									</div>
								</div>
							</div>
							<div class="flex flex3 justify-content-between">
								<a class="flex3col1" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
									<table>
										<tr>
											<td><img src="{{ asset('public/css/desktop3/imghome/home-16.png') }}" alt=""></td>
											<td>
												Tôi đã chờ đợi cô ấy trong 3 năm, và chúng tôi kết thúc chỉ sau 3 phút
											</td>
										</tr>
									</table>
								</a>
								<a class="flex3col1" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
									<table>
										<tr>
											<td><img src="{{ asset('public/css/desktop3/imghome/home-16.png') }}" alt=""></td>
											<td>
												Tôi biết cách kiếm tiền, chỉ là... không biết cách yêu
											</td>
										</tr>
									</table>
								</a>
								<a class="flex3col1" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
									<table>
										<tr>
											<td><img src="{{ asset('public/css/desktop3/imghome/home-16.png') }}" alt=""></td>
											<td>
												Lần đầu tiên được 20 phút, cô ấy cứ nói “không thể nào”
											</td>
										</tr>
									</table>
								</a>
							</div>
						</div>
						<div class="">
							<div class="flex flex2 justify-content-between">
								<div class="flex2col1">
									<img src="{{ asset('public/css/desktop3/imghome/thu-thuat-hep-bao-quy-dau.png') }}" alt="">
								</div>
								<div class="flex2col2 pos-relative">
									<ul>
										@foreach($post_chinhhinhs as $post)
										<li class="clearfix">
											<a href="{{ MyAPI::getUrlPostObj($post) }}" class="pull-left">{{ $post->post_name }}</a>
											<a href="{{ MyAPI::getUrlPostObj($post) }}" class="pull-right">Chi tiết</a>
										</li>
										@endforeach
									</ul>
									<div class="pos-absolute">
										<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">click để được tư vấn thêm</a>
									</div>
								</div>
							</div>
							<div class="flex flex3 justify-content-between">
								<a class="flex3col1" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
									<table>
										<tr>
											<td><img src="{{ asset('public/css/desktop3/imghome/home-16.png') }}" alt=""></td>
											<td>
												Phẫu thuật bao quy đầu, ham rẻ mà vào phòng khám nhỏ, xém chút nữa thì vô sinh
											</td>
										</tr>
									</table>
								</a>
								<a class="flex3col1" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
									<table>
										<tr>
											<td><img src="{{ asset('public/css/desktop3/imghome/home-16.png') }}" alt=""></td>
											<td>
												Cậu bé bị nhỏ, cô ấy nói không thích.
											</td>
										</tr>
									</table>
								</a>
								<a class="flex3col1" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
									<table>
										<tr>
											<td><img src="{{ asset('public/css/desktop3/imghome/home-16.png') }}" alt=""></td>
											<td>
												Cắt xong bao quy đầu, một lần trải nghiệm được bao nhiêu tư thế
											</td>
										</tr>
									</table>
								</a>
							</div>
						</div>
						<div class="">
							<div class="flex flex2 justify-content-between">
								<div class="flex2col1">
									<img src="{{ asset('public/css/desktop3/imghome/viem-nieu-dao.png') }}" alt="">
								</div>
								<div class="flex2col2 pos-relative">
									<ul>
										@foreach($post_viems as $post)
										<li class="clearfix">
											<a href="{{ MyAPI::getUrlPostObj($post) }}" class="pull-left">{{ $post->post_name }}</a>
											<a href="{{ MyAPI::getUrlPostObj($post) }}" class="pull-right">Chi tiết</a>
										</li>
										@endforeach
									</ul>
									<div class="pos-absolute">
										<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">click để được tư vấn thêm</a>
									</div>
								</div>
							</div>
							<div class="flex flex3 justify-content-between">
								<a class="flex3col1" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
									<table>
										<tr>
											<td><img src="{{ asset('public/css/desktop3/imghome/home-16.png') }}" alt=""></td>
											<td>
												Tiểu nhiều tiểu rắt, nhầm thành viêm tuyến tiền liệt
											</td>
										</tr>
									</table>
								</a>
								<a class="flex3col1" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
									<table>
										<tr>
											<td><img src="{{ asset('public/css/desktop3/imghome/home-16.png') }}" alt=""></td>
											<td>
												Chỉ quan tâm đến công việc mà ỉm đi viêm niệu đạo
											</td>
										</tr>
									</table>
								</a>
								<a class="flex3col1" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
									<table>
										<tr>
											<td><img src="{{ asset('public/css/desktop3/imghome/home-16.png') }}" alt=""></td>
											<td>
												Cậu bé mọc nốt đổ, cô ấy tưởng tôi ngoại tình, khóc lóc đòi ly hôn
											</td>
										</tr>
									</table>
								</a>
							</div>
						</div>
						<div class="">
							<div class="flex flex2 justify-content-between">
								<div class="flex2col1">
									<img src="{{ asset('public/css/desktop3/imghome/vosinhnam.png') }}" alt="">
								</div>
								<div class="flex2col2 pos-relative">
									<ul>
										@foreach($post_vosinhs as $post)
										<li class="clearfix">
											<a href="{{ MyAPI::getUrlPostObj($post) }}" class="pull-left">{{ $post->post_name }}</a>
											<a href="{{ MyAPI::getUrlPostObj($post) }}" class="pull-right">Chi tiết</a>
										</li>
										@endforeach
									</ul>
									<div class="pos-absolute">
										<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">click để được tư vấn thêm</a>
									</div>
								</div>
							</div>
							<div class="flex flex3 justify-content-between">
								<a class="flex3col1" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
									<table>
										<tr>
											<td><img src="{{ asset('public/css/desktop3/imghome/home-16.png') }}" alt=""></td>
											<td>
												Tôi yêu cô ấy, nhưng mà...
											</td>
										</tr>
									</table>
								</a>
								<a class="flex3col1" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
									<table>
										<tr>
											<td><img src="{{ asset('public/css/desktop3/imghome/home-16.png') }}" alt=""></td>
											<td>
												Kết hôn đã nhiều năm mà chưa có em bé, mẹ chồng ra ám thị muốn tôi và chồng ly hôn
											</td>
										</tr>
									</table>
								</a>
								<a class="flex3col1" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
									<table>
										<tr>
											<td><img src="{{ asset('public/css/desktop3/imghome/home-16.png') }}" alt=""></td>
											<td>
												Có em bé là món quà đẹp nhất dành cho người già
											</td>
										</tr>
									</table>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="flex1col2">
					<div class="btnGroup">
						<div class="btn">
							<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="dis-table active">
								<span class="table-cell text-center">BỆNH TUYẾN TIỀN LIỆT</span>
							</a>
						</div>
						<div class="btn">
							<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="dis-table">
								<span class="table-cell text-center">RỐI LOẠN CHỨC<br>NĂNG SINH DỤC</span>
							</a>
						</div>
						<div class="btn">
							<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="dis-table">
								<span class="table-cell text-center">CHỈNH HÌNH CƠ<br>QUAN SINH DỤC</span>
							</a>
						</div>
						<div class="btn">
							<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="dis-table">
								<span class="table-cell text-center">VIÊM NIỆU ĐẠO</span>
							</a>
						</div>
						<div class="btn">
							<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="dis-table">
								<span class="table-cell text-center">VÔ SINH NAM</span>
							</a>
						</div>
					</div>
				</div>
				<script>
					$(document).ready(function() {
						$(".btnGroup .btn a").hover(function() {
							$(this).addClass('active');
							$(this).parent().siblings().children('a').removeClass('active');
							var index = $(this).parent().index();
							$(this).parents('div.flex1').find('div.contents >div').eq(index).fadeIn().addClass('active');
							$(this).parents('div.flex1').find('div.contents >div').eq(index).siblings().hide().removeClass('active').css('display', 'none');
						}, function() {
							/* Stuff to do when the mouse leaves the element */
						});	
					});
				</script>
			</div>
		</div>
	</div>
	<div class="row5" data-scroll-reveal="enter bottom">
		<div class="container pos-relative">
			<div class="heading">
				<span class="color1 text-uppercase">TRUNG TÂM TRA TÌM BỆNH ÁN HỒI PHỤC</span> 
				<span class="color2 ">Medical examination and rehabilitation center</span>
			</div>
			<div class="tabs">
				<div class="flex flex1 justify-content-between">
					<div class="flex1col1 bg1 active">
						<i class="dis-inline-block"></i>
						<h2>Rối loạn chức năng sinh dục</h2>
					</div>
					<div class="flex1col1 bg2">
						<i class="dis-inline-block"></i>
						<h2>Chỉnh hình cơ quan sinh dục</h2>
					</div>
					<div class="flex1col1 bg3">
						<i class="dis-inline-block"></i>
						<h2>Bệnh tuyến tiền liệt</h2>
					</div>
					<div class="flex1col1 bg4">
						<i class="dis-inline-block"></i>
						<h2>Viêm nhiễm hệ thống sinh dục</h2>
					</div>
					<div class="flex1col1 bg5">
						<i class="dis-inline-block"></i>
						<h2>Vô sinh nam</h2>
					</div>
				</div>
			</div>
			<div class="contents">
				<div class="active">
					<div class="flex flex2 justify-content-between">
						<div class="flex2col1">
							<div class="boxshow pos-relative">
								<table class="width-100">
									<tr>
										<td><img src="{{ asset('public/css/desktop3/imghome/home-19.png') }}" alt=""></td>
										<td>
											<h3>Anh Hùng</h3>
											<p>Kể lại rằng chuyện ấy chỉ kéo dài được khoảng 3 phút, hy vọng có thể kéo dài thêm thời gian</p>
										</td>
									</tr>
								</table>
								<p class="pos-absolute">2 giờ trước</p>
								<img src="{{ asset('public/css/desktop3/imghome/home-22.png') }}" alt="" class="pos-absolute">
							</div>
							<div class="img">
								<img src="{{ asset('public/css/desktop3/imghome/home-20.png') }}" alt="" class="center-block">
							</div>
							<a class="link" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
								<table>
									<tr>
										<td><img src="{{ asset('public/css/desktop3/imghome/home-21.png') }}" alt=""></td>
										<td>
											<div class="text-uppercase">Bác sĩ tư vấn trực tuyến, hỏi đáp trực tiếp 1:1</div>
											<div>Online submission of diseases, private doctors to see the doctor</div>
										</td>
									</tr>
								</table>
							</a>
						</div>
						<div class="flex2col2">
							<table class="width-100 table1">
								<tr>
									<td><img src="{{ asset('public/css/desktop3/imghome/home-19.png') }}" alt=""></td>
									<td>
										<p><span class="text-uppercase">Anh Hùng</span> / <span>Đáp ứng nguyện vọng được giấu tên của bệnh nhân</span> </p>
										<p><span class="text-uppercase">Bệnh mắc phải:</span> Xuất tinh sớm</p>
									</td>
									<td><label>Lượt xem 652</label></td>
								</tr>
							</table>
							<p class="sumary borbottom">TÓM TẮT / <span>summary</span></p>
							<p class="sumary">BÌNH LUẬN / <span>comment</span></p>
							<div>
								Thái độ phục vụ của bác sĩ rất tốt, đưa ra cho tôi rất nhiều ý kiến mang tính tập trung, ấn like  
								<img src="{{ asset('public/css/desktop3/imghome/home-23.png') }}" alt="">
							</div>
							<p class="sumary">Tiểu sử dị ứng / <span>allergies</span></p>
							<div>
								Căn cứ theo tự thuật của người bệnh và xét nghiệm 
								thuốc dị ứng cho thấy: Không có tiểu sử mắc bệnh dị ứng
							</div>
							<p class="sumary">Tiểu sử bệnh / <span>cases of card</span></p>
							<div>
								<table class="width-100 table2">
									<tr>
										<td><i class="bg1"></i></td>
										<td>
											Kết hôn 3 năm, cuộc sống chăn gối không được xem là mỹ mãn, mỗi lần chỉ kéo dài 
											được 3 phút khiến vợ phàn nàn không ít
										</td>
									</tr>
									<tr>
										<td><i class="bg2"></i></td>
										<td>
											Bác sĩ phòng khám chúng tôi đã tiếp nhận bệnh nhân này
										</td>
									</tr>
									<tr>
										<td><i class="bg3"></i></td>
										<td>
											Qua các kiểm tra cho thấy: Mật độ dây thần kinh ở quy đầu quá cao dẫn đến tình trạng này
										</td>
									</tr>
									<tr>
										<td><i class="bg4"></i></td>
										<td>
											Trải qua một liệu trình chữa trị, thời gian cho chuyện ấy đã kéo dài lên trông thấy, người bệnh vô cùng biết ơn
										</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="content">
					<div class="flex flex2 justify-content-between">
						<div class="flex2col1">
							<div class="boxshow pos-relative">
								<table class="width-100">
									<tr>
										<td><img src="{{ asset('public/css/desktop3/imghome/home-25.png') }}" alt=""></td>
										<td>
											<h3>Anh Vũ</h3>
											<p>Sau khi lên mạng đối chứng, tự thấy bao quy đầu của mình thực sự là quá dài, muốn đi cắt bao quy đầu</p>
										</td>
									</tr>
								</table>
								<p class="pos-absolute">8 giờ trước</p>
								<img src="{{ asset('public/css/desktop3/imghome/home-22.png') }}" alt="" class="pos-absolute">
							</div>
							<div class="img">
								<img src="{{ asset('public/css/desktop3/imghome/hp-9.png') }}" alt="" class="center-block">
							</div>
							<a class="link" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
								<table>
									<tr>
										<td><img src="{{ asset('public/css/desktop3/imghome/home-21.png') }}" alt=""></td>
										<td>
											<div class="text-uppercase">Bác sĩ tư vấn trực tuyến, hỏi đáp trực tiếp 1:1</div>
											<div>Online submission of diseases, private doctors to see the doctor</div>
										</td>
									</tr>
								</table>
							</a>
						</div>
						<div class="flex2col2">
							<table class="width-100 table1">
								<tr>
									<td><img src="{{ asset('public/css/desktop3/imghome/home-25.png') }}" alt=""></td>
									<td>
										<p><span class="text-uppercase">Anh Vũ</span> / <span>Đáp ứng nguyện vọng được giấu tên của bệnh nhân</span> </p>
										<p><span class="text-uppercase">Bệnh mắc phải:</span> Dài bao quy đầu</p>
									</td>
									<td><label>Lượt xem 952</label></td>
								</tr>
							</table>
							<p class="sumary borbottom">TÓM TẮT / <span>summary</span></p>
							<p class="sumary">BÌNH LUẬN / <span>comment</span></p>
							<div>
								Vừa kết thúc thủ thuật, phòng khám chú trọng bảo mật cho bệnh nhân, trước mắt người bệnh vẫn đang duy trì sử dụng thuốc
								<img src="{{ asset('public/css/desktop3/imghome/home-23.png') }}" alt="">
							</div>
							<p class="sumary">Tiểu sử dị ứng / <span>allergies</span></p>
							<div>
								Căn cứ theo tự thuật của người bệnh và xét nghiệm thuốc dị ứng cho thấy: Không có tiểu sử mắc bệnh dị ứng
							</div>
							<p class="sumary">Tiểu sử bệnh / <span>cases of card</span></p>
							<div>
								<table class="width-100 table2">
									<tr>
										<td><i class="bg1"></i></td>
										<td>
											Lên mạng tra tìm hình ảnh dài bao quy đầu, thấy được rằng hiện tượng dài bao quy đầu có tác hại không nhỏ tới bản thân
										</td>
									</tr>
									<tr>
										<td><i class="bg2"></i></td>
										<td>
											Tháng 1 người bệnh đã đến phòng khám để tư vấn về các hạng mục liên quan tới thủ thuật bao quy đầu
										</td>
									</tr>
									<tr>
										<td><i class="bg3"></i></td>
										<td>
											Bác sĩ chủ khoa nam khoa đã đích thân giải đáp thắc mắc cho anh Vũ
										</td>
									</tr>
									<tr>
										<td><i class="bg4"></i></td>
										<td>
											Ngày hôm sau đã tới phòng thủ thuật của Nam Khang để tiến hành cắt bao quy đầu
										</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="content">
					<div class="flex flex2 justify-content-between">
						<div class="flex2col1">
							<div class="boxshow pos-relative">
								<table class="width-100">
									<tr>
										<td><img src="{{ asset('public/css/desktop3/imghome/home-26.png') }}" alt=""></td>
										<td>
											<h3>Anh Đoàn</h3>
											<p>Năm nay 44 tuổi, triệu chứng tiểu nhiều tiểu rắt vô cùng trầm trọng, tra tìm trên mạng chứng bệnh tương tự như viêm tiền liệt tuyến mãn tính</p>
										</td>
									</tr>
								</table>
								<p class="pos-absolute">12 giờ trước</p>
								<img src="{{ asset('public/css/desktop3/imghome/home-22.png') }}" alt="" class="pos-absolute">
							</div>
							<div class="img">
								<img src="{{ asset('public/css/desktop3/imghome/hp-1.png') }}" alt="" class="center-block">
							</div>
							<a class="link" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
								<table>
									<tr>
										<td><img src="{{ asset('public/css/desktop3/imghome/home-21.png') }}" alt=""></td>
										<td>
											<div class="text-uppercase">Bác sĩ tư vấn trực tuyến, hỏi đáp trực tiếp 1:1</div>
											<div>Online submission of diseases, private doctors to see the doctor</div>
										</td>
									</tr>
								</table>
							</a>
						</div>
						<div class="flex2col2">
							<table class="width-100 table1">
								<tr>
									<td><img src="{{ asset('public/css/desktop3/imghome/home-26.png') }}" alt=""></td>
									<td>
										<p><span class="text-uppercase">Anh Đoàn</span> / <span>Đáp ứng nguyện vọng được giấu tên của bệnh nhân</span> </p>
										<p><span class="text-uppercase">Bệnh mắc phải:</span> Viêm tiền liệt tuyến</p>
									</td>
									<td><label>Lượt xem 854</label></td>
								</tr>
							</table>
							<p class="sumary borbottom">TÓM TẮT / <span>summary</span></p>
							<p class="sumary">BÌNH LUẬN / <span>comment</span></p>
							<div>
								Bác sĩ có kinh nghiệm phong phú, khá kiên nhẫn, trả lời khá chi tiết, like!
								<img src="{{ asset('public/css/desktop3/imghome/home-23.png') }}" alt="">
							</div>
							<p class="sumary">Tiểu sử dị ứng / <span>allergies</span></p>
							<div>
								Căn cứ theo tự thuật của người bệnh và xét nghiệm thuốc dị ứng cho thấy: Không có tiểu sử mắc bệnh dị ứng
							</div>
							<p class="sumary">Tiểu sử bệnh / <span>cases of card</span></p>
							<div>
								<table class="width-100 table2">
									<tr>
										<td><i class="bg1"></i></td>
										<td>
											Là Giám đốc của một công ty nhỏ, do thói quen sinh hoạt không tốt, năm ngoái bắt đầu có triệu chứng tiểu nhiều tiểu rắt, sau này có hiện tượng nghiêm trọng hơn
										</td>
									</tr>
									<tr>
										<td><i class="bg2"></i></td>
										<td>
											Chủ nhiệm khoa của chúng tôi đã tiếp nhận trường hợp này
										</td>
									</tr>
									<tr>
										<td><i class="bg3"></i></td>
										<td>
											Qua hỏi thăm chi tiết, hiểu được thói quen sinh hoạt không tốt của bệnh nhân, qua các kiểm tra cho thấy chứng viêm tuyến tiền liệt mãn tính dẫn đến tình trạng của bệnh nhân
										</td>
									</tr>
									<tr>
										<td><i class="bg4"></i></td>
										<td>
											Trải qua một liệu trình điều trị, người bệnh phản hồi triệu chứng tiểu nhiều tiểu rắt đã được giải tỏa.
										</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="content">
					<div class="flex flex2 justify-content-between">
						<div class="flex2col1">
							<div class="boxshow pos-relative">
								<table class="width-100">
									<tr>
										<td><img src="{{ asset('public/css/desktop3/imghome/home-27.png') }}" alt=""></td>
										<td>
											<h3>Anh Quân</h3>
											<p>Trên bề mặt quy đầu có nốt màu đỏ, bên dưới đau nhức, đau đầu mệt mỏi...</p>
										</td>
									</tr>
								</table>
								<p class="pos-absolute">7 giờ trước</p>
								<img src="{{ asset('public/css/desktop3/imghome/home-22.png') }}" alt="" class="pos-absolute">
							</div>
							<div class="img">
								<img src="{{ asset('public/css/desktop3/imghome/hp-2.png') }}" alt="" class="center-block">
							</div>
							<a class="link" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
								<table>
									<tr>
										<td><img src="{{ asset('public/css/desktop3/imghome/home-21.png') }}" alt=""></td>
										<td>
											<div class="text-uppercase">Bác sĩ tư vấn trực tuyến, hỏi đáp trực tiếp 1:1</div>
											<div>Online submission of diseases, private doctors to see the doctor</div>
										</td>
									</tr>
								</table>
							</a>
						</div>
						<div class="flex2col2">
							<table class="width-100 table1">
								<tr>
									<td><img src="{{ asset('public/css/desktop3/imghome/home-27.png') }}" alt=""></td>
									<td>
										<p><span class="text-uppercase">Anh Quân</span> / <span>Đáp ứng nguyện vọng được giấu tên của bệnh nhân</span> </p>
										<p><span class="text-uppercase">Bệnh mắc phải:</span> Viêm quy đầu</p>
									</td>
									<td><label>Lượt xem 714</label></td>
								</tr>
							</table>
							<p class="sumary borbottom">TÓM TẮT / <span>summary</span></p>
							<p class="sumary">BÌNH LUẬN / <span>comment</span></p>
							<div>
								Bác sĩ rất kiên nhẫn, giái thích rõ ràng, vô cùng tốt.
								<img src="{{ asset('public/css/desktop3/imghome/home-23.png') }}" alt="">
							</div>
							<p class="sumary">Tiểu sử dị ứng / <span>allergies</span></p>
							<div>
								Căn cứ theo tự thuật của người bệnh và xét nghiệm thuốc dị ứng cho thấy: Không có tiểu sử mắc bệnh dị ứng
							</div>
							<p class="sumary">Tiểu sử bệnh / <span>cases of card</span></p>
							<div>
								<table class="width-100 table2">
									<tr>
										<td><i class="bg1"></i></td>
										<td>
											Cảm thấy thân dưới đau nhức, bản thân bị một số dị ứng, có khi bề mặt quy đầu nổi các nốt màu đỏ mọc linh tinh không cố định, cảm thấy không thoải mái....
										</td>
									</tr>
									<tr>
										<td><i class="bg2"></i></td>
										<td>
											Bác sĩ của chúng tôi đã tiếp nhận trường hợp này
										</td>
									</tr>
									<tr>
										<td><i class="bg3"></i></td>
										<td>
											Qua các xét nghiệm kiểm tra cho thấy do bao quy đầu dài dẫn đến viêm bao quy đầu
										</td>
									</tr>
									<tr>
										<td><i class="bg4"></i></td>
										<td>
											Người bệnh sau khi trải qua phẫu thuật cắt bao quy đầu, tiếp tục thực hiện điều trị viêm bao quy đầu, các triệu chứng bệnh dần dần biến mất, người bệnh phản hồi tốt.
										</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="content">
					<div class="flex flex2 justify-content-between">
						<div class="flex2col1">
							<div class="boxshow pos-relative">
								<table class="width-100">
									<tr>
										<td><img src="{{ asset('public/css/desktop3/imghome/home-28.png') }}" alt=""></td>
										<td>
											<h3>Anh Lâm</h3>
											<p>Tự thuật đã kết hôn 5 năm, đến nay vẫn chưa thể sinh đẻ, đã đi khám ở nhiều bệnh viện...</p>
										</td>
									</tr>
								</table>
								<p class="pos-absolute">1 giờ trước</p>
								<img src="{{ asset('public/css/desktop3/imghome/home-22.png') }}" alt="" class="pos-absolute">
							</div>
							<div class="img">
								<img src="{{ asset('public/css/desktop3/imghome/hp-8.png') }}" alt="" class="center-block">
							</div>
							<a class="link" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
								<table>
									<tr>
										<td><img src="{{ asset('public/css/desktop3/imghome/home-21.png') }}" alt=""></td>
										<td>
											<div class="text-uppercase">Bác sĩ tư vấn trực tuyến, hỏi đáp trực tiếp 1:1</div>
											<div>Online submission of diseases, private doctors to see the doctor</div>
										</td>
									</tr>
								</table>
							</a>
						</div>
						<div class="flex2col2">
							<table class="width-100 table1">
								<tr>
									<td><img src="{{ asset('public/css/desktop3/imghome/home-28.png') }}" alt=""></td>
									<td>
										<p><span class="text-uppercase">Anh Lâm</span> / <span>Đáp ứng nguyện vọng được giấu tên của bệnh nhân</span> </p>
										<p><span class="text-uppercase">Bệnh mắc phải:</span> Tinh trùng yếu</p>
									</td>
									<td><label>Lượt xem 656</label></td>
								</tr>
							</table>
							<p class="sumary borbottom">TÓM TẮT / <span>summary</span></p>
							<p class="sumary">BÌNH LUẬN / <span>comment</span></p>
							<div>
								Bác sĩ đưa ra các góp ý khoa học, đề ra các phương pháp điều trị dựa trên tình hình bệnh, cảm thấy rất chuyên nghiệp  
								<img src="{{ asset('public/css/desktop3/imghome/home-23.png') }}" alt="">
							</div>
							<p class="sumary">Tiểu sử dị ứng / <span>allergies</span></p>
							<div>
								Căn cứ theo tự thuật của người bệnh và xét nghiệm thuốc dị ứng cho thấy: Không có tiểu sử mắc bệnh dị ứng
							</div>
							<p class="sumary">Tiểu sử bệnh / <span>cases of card</span></p>
							<div>
								<table class="width-100 table2">
									<tr>
										<td><i class="bg1"></i></td>
										<td>
											Kết hôn 5 năm chưa có con, hơn nữa đã đi khám nhiều ở các bệnh viện khác
										</td>
									</tr>
									<tr>
										<td><i class="bg2"></i></td>
										<td>
											Phòng khám chúng tôi đặc biệt mời chuyên gia thăm khám trường hợp này
										</td>
									</tr>
									<tr>
										<td><i class="bg3"></i></td>
										<td>
											Kết quả kiểm tra cho thấy chứng bệnh yếu tinh trùng bẩm sinh, cần chăm sóc chữa trị dần
										</td>
									</tr>
									<tr>
										<td><i class="bg4"></i></td>
										<td>
											3 tháng sau, vợ anh Lâm đã mang thai em bé.
										</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script>
			$(document).ready(function() {
				$(".tabs .flex .flex1col1").hover(function() {
					$(this).addClass('active');
					$(this).siblings().removeClass('active');
					var index = $(this).index();
					$(this).parents('div.row5').find('div.contents >div').eq(index).fadeIn().addClass('active');
					$(this).parents('div.row5').find('div.contents >div').eq(index).siblings().hide().removeClass('active').css('display', 'none');

				}, function() {
					/* Stuff to do when the mouse leaves the element */
				});
			});
		</script>
	</div>
	<div class="row6" data-scroll-reveal="enter bottom">
		<div class="container">
			<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="dis-block hvr-float-shadow">
				<img src="{{ asset('public/css/desktop3/imghome/home-29.png') }}" alt="" class="center-block">
			</a>
			<div id="index_hj">
				<div class="tab">
					<ul>
						<li class="hover">
							<div class="in">
								<div class="pic">
									<div class="def"><img class="af_load_pic" src="{{ asset('public/css/desktop3/imghome/i_hj_ico1.png') }}" data_img_url="{{ asset('public/css/desktop3/imghome/i_hj_ico1.png') }}"></div>
									<div class="on"><img class="af_load_pic" src="{{ asset('public/css/desktop3/imghome/i_hj_ico1s.png') }}" data_img_url="{{ asset('public/css/desktop3/imghome/i_hj_ico1s.png') }}"></div>
								</div>
								<div class="txt"><p>MÔI TRƯỜNG PHÒNG KHÁM<span>Brand Chain</span></p></div>
							</div>
						</li>
						<li class="">
							<div class="in">
								<div class="pic">
									<div class="def"><img class="af_load_pic" src="{{ asset('public/css/desktop3/imghome/i_hj_ico2.png') }}" data_img_url="{{ asset('public/css/desktop3/imghome/i_hj_ico2.png') }}"></div>
									<div class="on"><img class="af_load_pic" src="{{ asset('public/css/desktop3/imghome/i_hj_ico2s.png') }}" data_img_url="{{ asset('public/css/desktop3/imghome/i_hj_ico2s.png') }}"></div>
								</div>
								<div class="txt"><p>THIẾT BỊ TÂN TIẾN<span>Academic Exchange</span></p></div>
							</div>
						</li>
						<li class="">
							<div class="in">
								<div class="pic">
									<div class="def"><img class="af_load_pic" src="{{ asset('public/css/desktop3/imghome/i_hj_ico3.png') }}" data_img_url="{{ asset('public/css/desktop3/imghome/i_hj_ico3.png') }}"></div>
									<div class="on"><img class="af_load_pic" src="{{ asset('public/css/desktop3/imghome/i_hj_ico3s.png') }}" data_img_url="{{ asset('public/css/desktop3/imghome/i_hj_ico3s.png') }}"></div>
								</div>
								<div class="txt"><p>DỊCH VỤ Y TẾ<span>Hospital Environment</span></p></div>
							</div>
						</li>
					</ul>
				</div>
				<div class="contents2">
					<div class="active">
						<img src="{{ asset('public/css/desktop3/imghome/home-31.png') }}" alt="" class="center-block">
					</div>
					<div class="">
						<img src="{{ asset('public/css/desktop3/imghome/home-30.png') }}" alt="" class="center-block">
					</div>
					<div class="">
						<img src="{{ asset('public/css/desktop3/imghome/home-32.png') }}" alt="" class="center-block">
					</div>
				</div>
			</div>
			<script>
				$(document).ready(function() {
					$(".row6 .tab li").hover(function() {
						$(this).addClass('hover');
						$(this).siblings().removeClass('hover');
						var index = $(this).index();
						$(this).parents('div#index_hj').find('div.contents2 >div').eq(index).fadeIn().addClass('active');
						$(this).parents('div#index_hj').find('div.contents2 >div').eq(index).siblings().hide().removeClass('active').css('display', 'none');

					}, function() {
						/* Stuff to do when the mouse leaves the element */
					});
				});
			</script>
			<div class="heading">
				<span class="color1 text-uppercase">NGƯỜI QUẢN LÝ SỨC KHỎE ĐỒNG HÀNH BÊN BẠN</span> 
				<span class="color2 ">Your health care partner is with you</span>
			</div>
			<div class="phone">
				<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
					<img src="{{ asset('public/css/desktop3/imghome/home-33.png') }}" alt="" class="center-block">
				</a>
			</div>
			<div class="flex flex1 justify-content-between">
				<a class="flex1col1 bg1 hvr-glow" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
					<p class="text-center">Đặt hẹn bác sĩ</p>
					<p class="text-center">Đặt hẹn trực tuyến</p>
				</a>
				<a class="flex1col1 bg2 hvr-glow" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
					<p class="text-center">Tư vấn trực tuyến</p>
					<p class="text-center">Phân tích tình trạng<br>bệnh trực tuyến</p>
				</a>
				<a class="flex1col1 bg3 hvr-glow" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
					<p class="text-center">Đường dây nóng sức khỏe</p>
					<p class="text-center">1800 6181</p>
				</a>
				<a class="flex1col1 bg4 hvr-glow" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
					<p class="text-center">Đường đến phòng khám</p>
					<p class="text-center">Có thể bạn chỉ cần<br>1 tấm vé xe là có ngay<br>được sức khỏe</p>
				</a>
			</div>
		</div>
	</div>
	<div class="row7" data-scroll-reveal="enter bottom">
		<div class="container">
			<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="hvr-rectangle-out">Liên hệ chúng tôi</a>
		</div>
	</div>
@endsection('content')