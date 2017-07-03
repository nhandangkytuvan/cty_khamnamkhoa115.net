<link rel="stylesheet" type="text/css" href="{{ asset('public/css/popup/mypopup1.css') }}">
<div class="myoverlay" id="myoverlay1">
	<div class="mypopup1" id="mypopup1">
		<div class="heading pos-relative">
			<div class="dis-table">
				<div class="table-cell">
					<img src="{{ asset('public/images/popup/mypopup1/mypopup-1.png') }}" alt="">
				</div>
				<div class="table-cell cell2">
					Phòng khám<br>chuyên khoa Nam Khang
				</div>
			</div>
			<div class="pos-absolute mypopup1_close">
				<img src="{{ asset('public/images/popup/mypopup1/mypopup-2.png') }}" alt="">
			</div>
		</div>
		<div class="panel-body">
			<div class="des1 text-uppercase text-center">
				Bác sĩ yêu cầu <span class="color1">số điện thoại</span> của bạn, để tiện cho việc <br><span class="color1">tư vấn</span> 
				<span class="color2">[tư vấn miễn phí]</span>
			</div>
			<div class="inputphone text-center">
				<form action="{{ url('sendmail') }}" method="post" id="formMailSend2">
					{{ csrf_field() }}
					<input type="text" name="phone" placeholder="Nhập số điện thoại để được tư vấn" required>
					<button type="submit">gửi</button>
				</form>
			</div>
			<div class="text-des text-center text-uppercase">
				Số điện thoại<br><span>hoàn toàn được bảo mật</span>
			</div>
			<div class="can-call text-center">
				Có thế trực tiếp gọi điện thoại<br>
				cho bác sĩ <span>[miễn phí]</span>
			</div>
			<div class="panel-footer">
				<div class="dis-table width-100">
					<a class="table-cell text-center" href="tel:18006181">
						<i><img src="{{ asset('public/images/popup/mypopup1/mypopup-4.png') }}" alt=""></i>
					</a>
					<a class="table-cell text-center" href="tel:18006181">
						1800 - 6181
					</a>
				</div>
			</div>
		</div>
	</div>
	<script>
		$(document).ready(function() {
			$('#formMailSend2').ajaxForm(function() { 
	            alert("Cảm ơn bạn đã đăng ký!"); 
	            $('#formMailSend2').resetForm();
	            $('#mypopup1').popup('hide');
	        });	
		});
	</script>
</div>