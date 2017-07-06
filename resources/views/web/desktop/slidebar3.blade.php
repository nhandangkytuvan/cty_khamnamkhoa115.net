<div class="summary">
	<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="dis-block hvr-float-shadow">
		<img src="{{ asset('public/css/desktop3/imgterm/term-7.png') }}" alt="" class="center-block">
	</a>
	<div class="dathen-animate">
		<div class="title">
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
		<div class="random_names">
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
				Height	  : 245,
				Timer	  : 4,
				DelayTime : 5000,
				WaitTime  : 0,
				ScrollStep: 5000,
				SwitchType: 0,
				AutoStart : 1
			})
	    </script>
		<div class="text-center link">
			<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="dis-inline-block">Đặt hẹn ngay</a>
		</div>
	</div>
	<div class="giaidap-cauhoi">
		<div class="name text-uppercase">Giải đáp câu hỏi thường gặp</div>
		<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="dis-block bg1 hvr-shutter-out-horizontal">Nam khoa thu phí như thế nào?</a>
		<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="dis-block bg2 hvr-shutter-out-horizontal">Bác sĩ Nam Khang có tốt không?</a>
		<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="dis-block bg3 hvr-shutter-out-horizontal">Khám nam khoa, hiệu quả thế nào?</a>
		<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="dis-block bg4 hvr-shutter-out-horizontal">Đặt hẹn trên mạng có ưu đãi không?</a>
	</div>
</div>
<script>
	$(document).ready(function() {
		$('.footer-limited').scrollToFixed( {
            bottom: 0,
            limit: $('.footer-limited').offset().top
        });
		var summaries = $('.summary');
        summaries.each(function(i) {
            var summary = $(summaries[i]);
            var next = summaries[i + 1];
            summary.scrollToFixed({
                marginTop:10,
                limit: function() {
                    var limit = 0;
                    if (next) {
                        limit = $(next).offset().top - $(this).outerHeight(true) - 10;
                    } else {
                        limit = $('.footer-limited').offset().top - $(this).outerHeight(true);
                    }
                    return limit;
                },
                zIndex: 999
            });
        });
	})
</script>