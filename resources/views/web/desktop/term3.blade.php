@extends('layout.desktop3')
@section('title')
	<title>{{ $data['term']->term_name }} - {{ $setting->web_name }}</title>
@endsection('title')
@section('keyword')
	@include('seo.seo_term',['data'=>$data])
@endsection('keyword')
@section('css')
<link rel="stylesheet" href="{{ asset('public/css/desktop3/desktop-pagination.css') }}">
<link rel="stylesheet" href="{{ asset('public/css/desktop3/desktop-term.css') }}">
@endsection('css')
@section('js')
<script type="text/javascript" src="{{ asset('public/js/global/MSClass.js') }}"></script>
@endsection('js')
@section('menu')
	@include('layouts.menuDesktop')
@endsection('menu')
@section('banner')
	@include('layouts.bannerDesktop')
@endsection('banner')
@section('content')
<main class="container term">
	<div class="flex justify-content-between">
		<div class="column-left">
			<div class="crub">
				<a href="#"><img src="{{ asset('public/css/desktop3/imgterm/term-1.png') }}" alt=""></a>
				<a href="{{ url('/') }}">Trang chủ</a>
				<span> > </span>
				<a href="#">{{ $data['term']->term_name }}</a>
			</div>
			<div class="lists">
				<div class="term-name">
					<h1>{{ $data['term']->term_name }}</h1>
				</div>
				<div class="posts">
					@php $posts = $data['term']->post()->paginate(15); @endphp
					@foreach($posts as $post)
					<div class="post clearfix">
						<h2 class="pull-left"><a href="{{ MyAPI::getUrlPostObj($post) }}">{{ $post->post_name }}</a></h2>
						<a href="{{ MyAPI::getUrlPostObj($post) }}" class="pull-right">Click để đọc</a>
					</div>
					@endforeach
				</div>
				<div class="my_pagination">
					{{ $posts->links() }}
				</div>
			</div>
			<div class="flex justify-content-between sixrec flex-wrap-wrap">
				<a class="" href="#">
					<div class="dis-table">
						<span class="table-cell"><i class="bg1 dis-inline-block"></i></span>
						<span class="table-cell">Vì sao chọn khám nam<br>khoa tại Nam Khang</span>
					</div>
				</a>
				<a class="" href="#">
					<div class="dis-table">
						<span class="table-cell"><i class="bg2 dis-inline-block"></i></span>
						<span class="table-cell">Vì sao chọn phẫu thuật<br>tại Nam Khang</span>
					</div>
				</a>
				<a class="" href="#">
					<div class="dis-table">
						<span class="table-cell"><i class="bg3 dis-inline-block"></i></span>
						<span class="table-cell">Vì sao chọn liệu pháp<br>Nam Khang</span>
					</div>
				</a>
				<a class="" href="#">
					<div class="dis-table">
						<span class="table-cell"><i class="bg4 dis-inline-block"></i></span>
						<span class="table-cell">Vì sao chọn chuyên gia<br>Nam Khang</span>
					</div>
				</a>
				<a class="" href="#">
					<div class="dis-table">
						<span class="table-cell"><i class="bg5 dis-inline-block"></i></span>
						<span class="table-cell">Vì sao chọn dịch vụ<br>Nam Khang</span>
					</div>
				</a>
				<a class="" href="#">
					<div class="dis-table">
						<span class="table-cell"><i class="bg6 dis-inline-block"></i></span>
						<span class="table-cell">Vì sao chọn tư vấn<br>Nam Khang</span>
					</div>
				</a>
			</div>
			<div class="flex justify-content-between threerec">
				<div href="#" class="element1">
					<div class="pos-relative">
						<img src="{{ asset('public/css/desktop3/imgterm/term-3.png') }}" alt="">
						<div class="pos-absolute">
							<div class="name">Chuyên khoa Nam Khang, chúng tôi chỉ chuyên nam khoa</div>
							<div class="des">We are committed to focusing on the health of the people</div>
						</div>
					</div>
				</div>
				<div>
					<div class="pos-relative">
						<img src="{{ asset('public/css/desktop3/imgterm/term-5.png') }}" alt="">
						<div class="pos-absolute">
							<div class="name">Đơn giản hóa quy trình thăm khám<br>để bệnh nhân hồi phục nhanh chóng và yên tâm hơn</div>
							<div class="des">Simplify the patient process so that patients recover faster and more assured</div>
						</div>
					</div>
					<div class="pos-relative">
						<img src="{{ asset('public/css/desktop3/imgterm/term-6.png') }}" alt="">
						<div class="pos-absolute">
							<div class="name">Chăm sóc hậu phẫu cẩn thận<br>bệnh nhân sau khi xuất viện vẫn nhận được<br>dịch vụ chăm sóc sức khỏe hậu phẫu đúng lúc, kịp thời</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="column-right">
			<div class="summary">
				<a href="#" class="dis-block hvr-float-shadow">
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
					<a href="#" class="dis-block bg1 hvr-shutter-out-horizontal">Nam khoa thu phí như thế nào?</a>
					<a href="#" class="dis-block bg2 hvr-shutter-out-horizontal">Bác sĩ Nam Khang có tốt không?</a>
					<a href="#" class="dis-block bg3 hvr-shutter-out-horizontal">Khám nam khoa, hiệu quả thế nào?</a>
					<a href="#" class="dis-block bg4 hvr-shutter-out-horizontal">Đặt hẹn trên mạng có ưu đãi không?</a>
				</div>
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
	</div>
</main>
@endsection('content')