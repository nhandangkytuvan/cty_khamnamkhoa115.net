<div class="row1">
	<h3>Phòng khám Nam Khang</h3>
	<h4><a href=""><img src="{{ asset('public/images/desktop/term-4.png') }}" class="center-block"></a></h4>
</div>
<div class="row2">
	<div class="flex flex2 justify-content-between">
		<div class="flex1col1">
			<h5 class="text-center"><a href=""><i class="bg bg1"></i></a></h5>
			<h5 class="text-center">
				<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Tư vấn<br>trực tuyến</a>
			</h5>
		</div>
		<div class="flex1col1">
			<h5 class="text-center"><a href=""><i class="bg bg2"></i></a></h5>
			<h5 class="text-center">
				<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Bác sĩ<br>giải đáp</a>
			</h5>
		</div>
		<div class="flex1col1">
			<h5 class="text-center"><a href=""><i class="bg bg3"></i></a></h5>
			<h5 class="text-center">
				<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Hẹn khám<br>qua mạng</a>
			</h5>
		</div>
	</div>
</div>
<div class="row3">
	<div class="bg bg1">
		<p>Đường dây nóng sức khỏe</p>
		<h3><a href="tel:1800 - 6181">1800 - 6181</a></h3>
	</div>
	<div class="bg bg2">
		<p>Địa chỉ phòng khám</p>
		<h4><a href="{{ url('/dia-chi-phong-kham') }}">Số 193c1 Bà Triệu, Hai Bà Trưng Hà Nội</a></h4>
	</div>
</div>
<div class="row4">
	<div>
		Hiện tại có 
		@php 
			$web_dathen = 98;
			$web_dathen = str_split($web_dathen);
            if(count($web_dathen)==1){
                array_unshift($web_dathen,'0');
            }
		@endphp
		@foreach($web_dathen as $value)
		<span>{{ $value }}</span>
		@endforeach
		bệnh nhân đặt hẹn
	</div>
	<div>
		<div id="demo">
			<div id="demo1">
				@if(Session::has('random_names'))
					{!! Session::get('random_names') !!}
				@else
					{!! MyAPI::getRandomeName() !!}
				@endif
			</div>
		</div>
	</div>
	<script type="text/javascript">
        new Marquee(
		{
			MSClassID : "demo",
			ContentID : "demo1",
		 	Direction : 0,
			Step	  : 0,
			Height	  : 145,
			Timer	  : 4,
			DelayTime : 5000,
			WaitTime  : 0,
			ScrollStep: 5000,
			SwitchType: 0,
			AutoStart : 1
		})
    </script>
	<div class="text-center">
		<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="dis-inline-block">Đặt hẹn ngay</a>
	</div>
</div>
<div class="row6">
	<h3>Liệu pháp đặc biệt</h3>
	<h4><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><img src="{{ asset('public/images/desktop/term-5.png') }}" class="center-block"></a></h4>
	<ul>
		<li><h5><i>1</i><a href="{{ MyAPI::getUrlPostID(11) }}">【 viêm tuyến tiền liệt 】 PP điều trị</a></h5></li>
		<li><h5><i>2</i><a href="{{ MyAPI::getUrlPostID(12) }}">【 xuất tinh sớm 】 PP điều trị</a></h5></li>
		<li><h5><i>3</i><a href="{{ MyAPI::getUrlPostID(8) }}">【 liệt dương 】 PP điều trị</a></h5></li>
		<li><h5><i class="active">4</i><a href="{{ MyAPI::getUrlPostID(9) }}">【 đau tinh hoàn 】 PP điều trị</a></h5></li>
		<li><h5><i class="active">5</i><a href="{{ MyAPI::getUrlPostID(10) }}">【 dài bao quy đầu 】 PP điều trị</a></h5></li>
		<li><h5><i class="active">6</i><a href="{{ MyAPI::getUrlPostID(9) }}">【 viêm niệu đạo 】 PP điều trị</a></h5></li>
	</ul>
</div>