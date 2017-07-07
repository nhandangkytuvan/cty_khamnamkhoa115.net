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
<link rel="stylesheet" href="{{ asset('public/css/desktop3/desktop-termParent.css') }}">
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
<main class="container term termParent">
	<div class="flex justify-content-between">
		<div class="column-left">
			<div class="crub">
				<a href="{{ url('/') }}"><img src="{{ asset('public/css/desktop3/imgterm/term-1.png') }}" alt=""></a>
				<a href="{{ url('/') }}">Trang chủ</a>
				<span> > </span>
				<a href="#">{{ $data['term']->term_name }}</a>
			</div>
			<div class="lists">
				<div class="term-name">
					<div class="titleNewPost">Bài viết mới nhất</div>
				</div>
				<div class="newPosts">
					<div class="flex justify-content-around">
					@foreach($postNews as $post)
						<div class="flexNewPost">
							<div>
								<a href="{{ MyAPI::getUrlPostObj($post) }}" class="hvr-round-corners">
									<img src="{{ asset('public/img/'.$post->post_avatar) }}" alt="" class="center-block img-responsive">
								</a>
							</div>
							<h2 class="text-center"><a href="{{ MyAPI::getUrlPostObj($post) }}">{{ $post->post_name }}</a></h2>
						</div>
					@endforeach
					</div>
				</div>
				<div class="term-name marTop">
					<h1>{{ $data['term']->term_name }}</h1>
				</div>
				<div class="tabsTerm">
					<div class="dis-inline-block">
						<div class="flex">
							@foreach($termChilds as $key => $term_child)
							<div class="flexNameTab {!! $key==0 ? 'active' : '' !!}">
								<a href="{{ MyAPI::getUrlTermObj($term_child) }}">{{ $term_child->term_name }}</a>
							</div>
							@endforeach
						</div>
					</div>
				</div>
				<div class="tabsContentTerm">
					@foreach($termChilds as $key => $term_child)
					<div class="{!! $key==0 ? 'active' : '' !!}">
						<ul>
							@php $postNewChilds = $term_child->post()->orderBy('id','desc')->limit(10)->get(); @endphp
							@foreach($postNewChilds as $post_child)
							<li class="clearfix">
								<a href="{{ MyAPI::getUrlPostObj($post_child) }}">{{ $post_child->post_name }}</a>
								<a href="{{ MyAPI::getUrlPostObj($post_child) }}" class="pull-right">Click để đọc</a>
							</li>
							@endforeach
						</ul>
					</div>
					@endforeach
				</div>
				<script>
					$(document).ready(function() {
						$(".tabsTerm .flexNameTab").hover(function() {
							var index = $(this).index();
							$(this).addClass('active');
							$(this).siblings('div').removeClass('active');
							$(this).parents('div.tabsTerm').next('div.tabsContentTerm').find('>div').eq(index).fadeIn().addClass('active');
							$(this).parents('div.tabsTerm').next('div.tabsContentTerm').find('>div').eq(index).siblings().hide().removeClass('active').css('display', 'none');
						}, function() {
							/* Stuff to do when the mouse leaves the element */
						});
					});
				</script>
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