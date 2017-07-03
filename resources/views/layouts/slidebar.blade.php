<div class="line1">
	<div><img src="{{ asset('public/css/desktop/imghome/home-12.png') }}" alt="" class="center-block"></div>
	<div class="des1 text-justify">
		Phòng khám Nam Khang Hà Nội là cơ sở y tế chuyên điều trị nam khoa hiếm có ở khu vực Hà Nội, phòng khám đạt tiêu chuẩn y tế JCI quốc tế, hội tụ đội ngũ chuyên gia cao cấp trong và ngoài nước, dịch vụ chất lượng cao, môi trường khám chữa bệnh ấm cúng đạt chất lượng 5 sao ... <a href="#">tìm hiểu thêm</a>
	</div>
	<div class="bg">
		<table>
			<tr>
				<td><img src="{{ asset('public/css/desktop/imghome/home-13.png') }}" alt=""></td>
				<td class="text-uppercase">Tìm hiểu bệnh tình nhanh chóng</td>
			</tr>
		</table>
	</div>
	<table class="footer">
		<tr>
			<td><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><i class="bg1"></i></a></td>
			<td><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Chuyên gia giải đáp </a></td>
			<td><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><i class="bg2"></i></a></td>
			<td><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Hỏi đáp trực tuyến</a></td>
		</tr>
		<tr>
			<td><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><i class="bg3"></i></a></td>
			<td><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Điều trị cần biết </a></td>
			<td><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><i class="bg4"></i></a></td>
			<td><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Điện thoại miễn phí</a></td>
		</tr>
		<tr>
			<td><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><i class="bg5"></i></a></td>
			<td><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Đăng ký đặt hẹn</a></td>
			<td><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><i class="bg6"></i></a></td>
			<td><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Chuyên gia tư vấn</a></td>
		</tr>
		<tr>
			<td><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><i class="bg7"></i></a></td>
			<td><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Ý kiến khiếu nại</a></td>
			<td><a href="{{ url('dia-chi-phong-kham.html') }}"><i class="bg8"></i></a></td>
			<td><a href="{{ url('dia-chi-phong-kham.html') }}">Chỉ đường</a></td>
		</tr>
	</table>
	<script>
		$(document).ready(function($) {
			//
		    $("div.flex1col2 .line1 table.footer tr td").hover(function() {
		    	$(this).find('i').addClass('active');
		    }, function() {
		    	$(this).find('i').removeClass('active');
		    });
		    //
		    $("div.flex1col2 .line1 table.footer tr td:nth-child(2n+2)").hover(function() {
		    	$(this).prev('td').find('i').addClass('active');
		    }, function() {
		    	$(this).prev('td').find('i').removeClass('active');
		    });
		});	
	</script>
</div>
<div class="line2">
	<div class="bg">
		<table>
			<tr>
				<td><i class="bg1"></i></td>
				<td class="text-uppercase">Đặt lịch trực tuyến</td>
			</tr>
		</table>
	</div>
	<div class="dathen">
		<div id="demo">
			<div id="demo1">
				@if(Session::has('random_names'))
					{!! Session::get('random_names') !!}
				@else
					{!! APIGlobal::getRandomeName() !!}
				@endif
			</div>
		</div>
		<script type="text/javascript">
	        new Marquee(
			{
				MSClassID : "demo",
				ContentID : "demo1",
			 	Direction : 0,
				Step	  : 0,
				Height	  : 178,
				Timer	  : 4,
				DelayTime : 5000,
				WaitTime  : 0,
				ScrollStep: 5000,
				SwitchType: 0,
				AutoStart : 1
			})
	    </script>
	</div>
	<div class="footer">
		Hôm nay đã có <span style="color: red;">46</span> người đặt lịch hẹn
	</div>
</div>
<div class="line3">
	<div class="bg">
		<table>
			<tr>
				<td><i class="bg2"></i></td>
				<td class="text-uppercase">Trực tràng hậu môn</td>
			</tr>
		</table>
	</div>					
	<div class="img1">
		<img src="{{ asset('public/css/desktop/imghome/home-26.png') }}" alt="" class="center-block">
	</div>
	<div class="posts">
		<ul>
			@foreach($post_tructrangs as $post)
			<li><a href="{{ APIPost::getUrlByObj($post) }}"><i class="fa fa-circle"></i> {{ $post->name }}</a></li>
			@endforeach
		</ul>
	</div>
</div>
<div class="line4">
	<div class="bg">
		<table>
			<tr>
				<td><i class="bg3"></i></td>
				<td class="text-uppercase">Táo bón</td>
			</tr>
		</table>
	</div>					
	<div class="img1">
		<img src="{{ asset('public/css/desktop/imghome/home-27.png') }}" alt="" class="center-block">
	</div>
	<div class="posts">
		<ul>
			@foreach($post_taobons as $post)
			<li><a href="{{ APIPost::getUrlByObj($post) }}"><i class="fa fa-circle"></i> {{ $post->name }}</a></li>
			@endforeach
		</ul>
	</div>
</div>