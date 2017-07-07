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
				<a href="{{ url('/') }}"><img src="{{ asset('public/css/desktop3/imgterm/term-1.png') }}" alt=""></a>
				<a href="{{ url('/') }}">Trang chủ</a>
				<span> > </span>
				@php $term_parent = $data['term']->parent;@endphp
				@if($term_parent)
				<a href="{{ MyAPI::getUrlTermObj($term_parent) }}">{{ $term_parent->term_name }}</a>
				<span> > </span>
				@endif
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
				<a class="" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
					<div class="dis-table">
						<span class="table-cell"><i class="bg1 dis-inline-block"></i></span>
						<span class="table-cell">Vì sao chọn khám nam<br>khoa tại Nam Khang</span>
					</div>
				</a>
				<a class="" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
					<div class="dis-table">
						<span class="table-cell"><i class="bg2 dis-inline-block"></i></span>
						<span class="table-cell">Vì sao chọn phẫu thuật<br>tại Nam Khang</span>
					</div>
				</a>
				<a class="" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
					<div class="dis-table">
						<span class="table-cell"><i class="bg3 dis-inline-block"></i></span>
						<span class="table-cell">Vì sao chọn liệu pháp<br>Nam Khang</span>
					</div>
				</a>
				<a class="" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
					<div class="dis-table">
						<span class="table-cell"><i class="bg4 dis-inline-block"></i></span>
						<span class="table-cell">Vì sao chọn chuyên gia<br>Nam Khang</span>
					</div>
				</a>
				<a class="" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
					<div class="dis-table">
						<span class="table-cell"><i class="bg5 dis-inline-block"></i></span>
						<span class="table-cell">Vì sao chọn dịch vụ<br>Nam Khang</span>
					</div>
				</a>
				<a class="" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
					<div class="dis-table">
						<span class="table-cell"><i class="bg6 dis-inline-block"></i></span>
						<span class="table-cell">Vì sao chọn tư vấn<br>Nam Khang</span>
					</div>
				</a>
			</div>
			<div class="flex justify-content-between threerec">
				<div href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="element1">
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
			@include('web.desktop.slidebar3')
		</div>
	</div>
</main>
@endsection('content')