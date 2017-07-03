$(document).ready(function() {
	$('.home .row5 .flex1col1').hover(function() {
		var index = $(this).index();
		$(this).children('button').addClass('active');
		$(this).siblings('div').children('button').removeClass('active');
		$('.home .row6 .flex1col1').children('div').eq(index).addClass('active');
		$('.home .row6 .flex1col1').children('div').eq(index).siblings('div').removeClass('active');
		$('.home .row6 .flex1col2').children('div').eq(index).addClass('active');
		$('.home .row6 .flex1col2').children('div').eq(index).siblings('div').removeClass('active');
	}, function() {
		
	});


	$('#popup-desktop').popup({
        blur:false,
        transition: 'all 0.3s',
        scrolllock: false,
        background: false,
        backgroundactive:false,
        onclose: function() {setTimeout(showchat, 20000);}
    });
    var d = new Date();
    var gio = d.getHours();
    var phut = d.getMinutes();
    if((7<gio&&gio<22)||(gio==22&&phut<=30)||(gio==7&&phut>=30)){
        setTimeout(showchat, 15000);
    }

    $('.footer-status').scrollToFixed({bottom:0});
});
function open_tuvan(){
	window.open("http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en","_blank");
}

function showchat() {
    $('#popup-desktop').popup('show');
}