@extends('layout.desktop')
@section('title')
	<title>{{ $data['term']->term_name }} - {{ $setting->web_name }}</title>
@endsection('title')
@section('keyword')
	@include('seo.seo_term',['data'=>$data])
@endsection('keyword')
@section('css')
<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-pagination.css') }}">
<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-sidebar.css') }}">
<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-term.css') }}">
@endsection('css')
@section('js')
<script type="text/javascript" src="{{ asset('public/js/global/MSClass.js') }}"></script>
@endsection('js')
@section('content')
<div class="banner">
	<div class="container">
		<div class="search">
			<div class="clearfix">
				<div class="pull-left">
					<a href="{{ url('/') }}"><i class="fa fa-home"></i> Trang chủ ></a>
					<a href="{{ MyAPI::getUrlTermObj($data['term']) }}">{{ $data['term']->term_name }}</a>
				</div>
				<div class="pull-right">
					<form action="{{ url('/search') }}">
						{{ csrf_field() }}
						<button><i class="fa fa-search"></i></button>
						<input type="text" placeholder="Nhập nội dung" name="keyword">
						<button type="submit">Tìm kiếm</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<main class="container term">
	<div class="flex flex0 justify-content-between">
		<div class="flex0col1">
			<h1 class="text-uppercase"><i></i> {{ $data['term']->term_name }}</h1>
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1">
					<h3>
						<a href="{{ MyAPI::getUrlTermObj($data['term']) }}">
							@if($data['term']->term_avatar)
								<img src="{{ asset('public/img/'.$data['term']->term_avatar) }}" class="center-block">
							@else
								<img src="{{ asset('public/images/desktop/term-3.png') }}" class="center-block">
							@endif
						</a>
					</h3>
				</div>
				<div class="flex1col2 flex flex-wrap-wrap align-content-between">
					<div class="width-100">
						<h4>Bài xem nhiều</h4>
					</div>
					<div class="width-100">
						<ul>
							@php 
								$stt = 0;
								$posts = $data['term']->post()->orderBy('id','desc')->limit(5)->get();
							@endphp
							@foreach($posts as $post)
							@php $stt++ @endphp
							<li>
								<h5>
									<a href="{{ MyAPI::getUrlPostObj($post) }}">
										<i {!! $stt >= 4 ? 'class="active"' : '' !!} >{{ $stt }}</i>
										{{ $post->post_name }}
									</a>
								</h5>
							</li>
							@endforeach
						</ul>
					</div>
					<div class="flex flex2 justify-content-between width-100">
						<div class="flex2col1">
							<h5><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><i class="fa fa-comment-o"></i> Tư vấn trực tuyến</a></h5>
						</div>
						<div class="flex2col1">
							<h5><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><i class="fa fa-question-circle-o"></i> Chuyên gia giải đáp</a></h5>
						</div>
						<div class="flex2col1">
							<h5><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><i class="fa fa-calendar-check-o"></i> Hẹn khám qua mạng</a></h5>
						</div>
					</div>
				</div>
			</div>
			<div class="posts">
				@php $posts = $data['term']->post()->paginate(7); @endphp
				@foreach($posts as $post)
				<div class="post">
					<div class="clearfix">
						<div class="pull-left">
							<h3><a href="{{ MyAPI::getUrlPostObj($post) }}">{{ $post->post_name }}</a></h3>
						</div>	
					</div>
					<p>
						{{ MyAPI::getLimitWord($post->post_description,50) }}
						<a href="{{ MyAPI::getUrlPostObj($post) }}">Chi tiết</a>
					</p>
				</div>
				@endforeach
			</div>
			<div class="my_pagination">
				{{ $posts->links() }}
			</div>
		</div>
		<div class="flex0col2">
			@include('web.desktop.slidebar')
		</div>
	</div>
</main>
@endsection('content')