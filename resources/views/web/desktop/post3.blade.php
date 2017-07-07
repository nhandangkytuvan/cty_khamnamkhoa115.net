@extends('layout.desktop3')
@section('title')
	<title>{{ $data['post']->post_name }} - {{ $setting->web_name }}</title>
@endsection('title')
@section('keyword')
	@include('seo.seo_post',['data'=>$data])
@endsection('keyword')
@section('css')
<link rel="stylesheet" href="{{ asset('public/font/post-detail-css.css') }}">
<link rel="stylesheet" href="{{ asset('public/css/desktop3/desktop-term.css') }}">
<link rel="stylesheet" href="{{ asset('public/css/desktop3/desktop-post.css') }}">
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
@php $term = $data['post']->term;@endphp
<main class="container term post">
	<div class="flex justify-content-between">
		<div class="column-left">
			<div class="crub">
				<a href="{{ url('/') }}"><img src="{{ asset('public/css/desktop3/imgterm/term-1.png') }}" alt=""></a>
				<a href="{{ url('/') }}">Trang chủ</a>
				<span> > </span>
				@php $term_parent = $term->parent;@endphp
				@if($term_parent)
				<a href="{{ MyAPI::getUrlTermObj($term_parent) }}">{{ $term_parent->term_name }}</a>
				<span> > </span>
				@endif
				<a href="{{ MyAPI::getUrlTermObj($term) }}">{{ $term->term_name }}</a>
			</div>
			<div class="lists">
				<h1 class="text-uppercase"><i></i> {{ $data['post']->post_name }}</h1>
				<div class="post-description">
				</div>
				<div class="post-detail">
					{!! $data['post']->post_detail !!}
				</div>
				<div class="post-footer">
					<div class="flex justify-content-between">
						<a class="flexcell1 pos-relative hvr-back-pulse" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
							<table>
								<tr>
									<td><i class="bg1"></i></td>
									<td>Tra kiếm tình trạng bệnh<br>Hỏi ngay đáp liền</td>
								</tr>
							</table>
							<span class="pos-absolute sbg1"></span>
						</a>
						<a class="flexcell1 pos-relative hvr-back-pulse" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
							<table>
								<tr>
									<td><i class="bg2"></i></td>
									<td>Tra kiếm chi phí điều trị<br>Nắm rõ chi phí, an tâm điều trị</td>
								</tr>
							</table>
							<span class="pos-absolute sbg2"></span>
						</a>
						<a class="flexcell1 pos-relative hvr-back-pulse" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
							<table>
								<tr>
									<td><i class="bg3"></i></td>
									<td><span class="font1">Điện thoại đường dây nóng miễn phí 24h</span><br><span class="font2">1800 - 6181</span></td>
								</tr>
							</table>
							<span class="pos-absolute sbg3"></span>
						</a>
					</div>
				</div>
				<div class="post-nexprev text-center">
					@php $post_pre = $term->post()->where('id','<',$data['post']->id)->orderBy('id','desc')->first(); @endphp
					@if($post_pre)
					<a href="{{ MyAPI::getUrlPostObj($post_pre) }}" title="{{ $post_pre->post_name }}" class="hvr-bounce-to-left">Bài trước</a>
					@endif
					@php $post_next = $term->post()->where('id','>',$data['post']->id)->orderBy('id','asc')->first(); @endphp
					@if($post_next)
					<a href="{{ MyAPI::getUrlPostObj($post_next) }}" title="{{ $post_next->post_name }}" class="hvr-bounce-to-right">Bài sau</a>
					@endif
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