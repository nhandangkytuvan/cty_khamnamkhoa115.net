<div id="popup-desktop" class="">
	<div class="content-popup">
		<div class="name text-uppercase">Cổng tư vấn và đặt hẹn trực tuyến</div>
		<div class="linktv">
			<table class="width-100 table1">
				<tr>
					<td>
						<span class="text-uppercase">Bạn có thắc mắc ? Tư vấn với bác sĩ</span>
					</td>
					<td>
						<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="active">Tư vấn trực tuyến</a>
					</td>
				</tr>
			</table>
		</div>
		<div class="loikhuyen">
			Bác sĩ khuyên:<br>Hỏi bệnh qua điện thoại   Nhanh, chính xác, toàn diện
		</div>
		<div class="nhapsodienthoai">
			<form action="{{ url('sendmail') }}" method="post" id="formMailSendPopUpDesktop">
				{{ csrf_field() }}
				<table class="width-100">
					<tr>
						<td>
							<input type="number" placeholder="Hãy nhập số điện thoại của bạn" required name="phone">
						</td>
						<td><button type="submit">Gửi đi</button></td>
					</tr>
				</table>
			</form>
			<script>
				$(document).ready(function() 
				{
					$('#formMailSendPopUpDesktop').ajaxForm(
					{
						beforeSubmit:function(){
							$("#myloadding").show();
						},
						success:function(){
			                alert("Cảm ơn bạn đã đăng ký!");
			                $("#myloadding").hide(); 
			                $('#formMailSendPopUpDesktop').resetForm();
						}
					});
				});
			</script>
		</div>
	</div>
	<div class="my_close"><a href="javascript:;" class="popup_desktop_close">X</a></div>
</div>