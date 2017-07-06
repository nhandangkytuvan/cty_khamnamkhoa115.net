<menu>
	<div class="container">
		<div class="dis-table table1 width-100">
			<a class="hover table-cell cell1 active" href="{{ url('/') }}">
				Hạng mục khám chữa <img src="{{ asset('public/css/desktop3/imghome/home-4.png') }}" alt="">
				<div class="items">
					<div class="item">
						<table class="">
							<tr>
								<td class="pos-relative">
									<img src="{{ asset('public/css/desktop3/imghome/nohover1.png') }}" alt="" class="no-hover"></i>
									<img src="{{ asset('public/css/desktop3/imghome/hover1.png') }}" alt="" class="iconbghover1 pos-absolute"></i>
								</td>
								<td>
									<div class="term-parent">RỐI LOẠN CHỨC NĂNG SINH DỤC</div>
								</td>
							</tr>
						</table>
						<table class="width-100 term-children">
							<tr>
								<td><a href="{{ MyAPI::getUrlTermID(8) }}">> Liệt dương</a></td>
								<td><a href="{{ MyAPI::getUrlTermID(10) }}">> Xuất tinh sớm</a></td>
							</tr>
							<tr>
								<td><a href="{{ MyAPI::getUrlTermID(35) }}">> Yếu sinh lý</a></td>
								<td><a href="{{ MyAPI::getUrlTermID(9) }}">> Rối loạn cương dương</a></td>
							</tr>
						</table>
					</div>
					<div class="item">
						<table class="">
							<tr>
								<td class="pos-relative">
									<img src="{{ asset('public/css/desktop3/imghome/nohover2.png') }}" alt="" class="no-hover"></i>
									<img src="{{ asset('public/css/desktop3/imghome/hover2.png') }}" alt="" class="iconbghover1 pos-absolute"></i>
								</td>
								<td>
									<div class="term-parent">CHỈNH HÌNH CƠ QUAN SINH DỤC</div>
								</td>
							</tr>
						</table>
						<table class="width-100 term-children">
							<tr>
								<td><a href="{{ MyAPI::getUrlTermID(13) }}">> Dài bao quy đầu</a></td>
								<td><a href="{{ MyAPI::getUrlTermID(15) }}">> Thủ thuật hẹp bao quy đầu</a></td>
							</tr>
							<tr>
								<td><a href="{{ MyAPI::getUrlTermID(14) }}">> Kéo dài dương vật</a></td>
								<td><a href="{{ MyAPI::getUrlTermID(16) }}">> Tăng kích thước dương vật</a></td>
							</tr>
						</table>
					</div>
					<div class="item">
						<table class="">
							<tr>
								<td class="pos-relative">
									<img src="{{ asset('public/css/desktop3/imghome/nohover3.png') }}" alt="" class="no-hover"></i>
									<img src="{{ asset('public/css/desktop3/imghome/hover3.png') }}" alt="" class="iconbghover1 pos-absolute"></i>
								</td>
								<td>
									<div class="term-parent">BỆNH TUYẾN TIỀN LIỆT</div>
								</td>
							</tr>
						</table>
						<table class="width-100 term-children">
							<tr>
								<td><a href="{{ MyAPI::getUrlTermID(3) }}">> Viêm tuyến tiền liệt</a></td>
								<td><a href="{{ MyAPI::getUrlTermID(4) }}">> U nang tuyến tiền liệt</a></td>
							</tr>
							<tr>
								<td><a href="{{ MyAPI::getUrlTermID(6) }}">> Phì đại tuyến tiền liệt</a></td>
								<td><a href="{{ MyAPI::getUrlTermID(5) }}">> Tăng sinh tuyến tiền liệt</a></td>
							</tr>
						</table>
					</div>
					<div class="item">
						<table class="">
							<tr>
								<td class="pos-relative">
									<img src="{{ asset('public/css/desktop3/imghome/nohover4.png') }}" alt="" class="no-hover"></i>
									<img src="{{ asset('public/css/desktop3/imghome/hover4.png') }}" alt="" class="iconbghover1 pos-absolute"></i>
								</td>
								<td>
									<div class="term-parent">VIÊM NHIỄM HỆ THỐNG SINH DỤC</div>
								</td>
							</tr>
						</table>
						<table class="width-100 term-children">
							<tr>
								<td><a href="{{ MyAPI::getUrlTermID(18) }}">> Viêm quy đầu</a></td>
								<td><a href="{{ MyAPI::getUrlTermID(21) }}">> Viêm tinh hoàn</a></td>
							</tr>
							<tr>
								<td><a href="{{ MyAPI::getUrlTermID(20) }}">> Viêm niệu đạo</a></td>
								<td><a href="{{ MyAPI::getUrlTermID(19) }}">> Viêm bàng quang</a></td>
							</tr>
						</table>
					</div>
					<div class="item">
						<table class="">
							<tr>
								<td class="pos-relative">
									<img src="{{ asset('public/css/desktop3/imghome/nohover5.png') }}" alt="" class="no-hover"></i>
									<img src="{{ asset('public/css/desktop3/imghome/hover5.png') }}" alt="" class="iconbghover1 pos-absolute"></i>
								</td>
								<td>
									<div class="term-parent">VÔ SINH NAM</div>
								</td>
							</tr>
						</table>
						<table class="width-100 term-children">
							<tr>
								<td><a href="{{ MyAPI::getUrlTermID(23) }}">> Tinh trùng ít</a></td>
								<td><a href="{{ MyAPI::getUrlTermID(26) }}">> Tinh trùng yếu</a></td>
							</tr>
							<tr>
								<td><a href="{{ MyAPI::getUrlTermID(25) }}">> Không có tinh</a></td>
								<td><a href="{{ MyAPI::getUrlTermID(24) }}">> Xuất tinh ra máu</a></td>
							</tr>
						</table>
					</div>
				</div>	
			</a>
			<a class="table-cell cell1 hvr-rectangle-out" href="{{ url('ve-chung-toi') }}">
				Giới thiệu phòng khám
			</a>
			<a class="table-cell cell1 hvr-rectangle-out" href="{{ MyAPI::getUrlTermID(32) }}">
				Kỹ thuật điều trị
			</a>
			<a class="table-cell cell1 hvr-rectangle-out" href="{{ MyAPI::getUrlTermID(34) }}">
				Bệnh án hồi phục
			</a>
			<a class="table-cell cell1 hvr-rectangle-out" href="{{ url('dia-chi-phong-kham') }}">
				Địa chỉ phòng khám
			</a>
			<a class="table-cell cell1 hvr-rectangle-out" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
				Đặt hẹn trực tuyến
			</a>
		</div>
	</div>
</menu>