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
    $('.home .row4 .groups-btn .flex1col1').hover(function() {
        var index = $(this).index();
        $(this).children('button').addClass('active');
        $(this).siblings('div').children('button').removeClass('active');
        $('.home .row4 .tabs-contents .flex1col1').children('div').eq(index).addClass('active');
        $('.home .row4 .tabs-contents .flex1col1').children('div').eq(index).siblings('div').removeClass('active');
        $('.home .row4 .tabs-contents .flex1col2').children('div').eq(index).addClass('active');
        $('.home .row4 .tabs-contents .flex1col2').children('div').eq(index).siblings('div').removeClass('active');
    }, function() {
        
    });

	// $('#popup-desktop').popup({
 //        blur:false,
 //        transition: 'all 0.3s',
 //        scrolllock: false,
 //        background: false,
 //        backgroundactive:false,
 //        onclose: function() {setTimeout(showchat, 20000);}
 //    });
    var d = new Date();
    var gio = d.getHours();
    var phut = d.getMinutes();
    if((7<gio&&gio<22)||(gio==22&&phut<=30)||(gio==7&&phut>=30)){
        setTimeout(showchat, 15000);
    }
    // fixboottom
    $('.footer-status').scrollToFixed({bottom:0});
    //
    $("div.row1 .item").hover(function() {
        $(this).addClass('active');
        $(this).siblings('div.item').removeClass('active');
    }, function() {
        
    });
    //face ky thuat
    var myinter = setInterval( home_kythuatnamkhoa, 3000);
    $('div.row6 div.img1').hover(function() {
        clearInterval(myinter);
        $(this).fadeOut();
        $(this).siblings('div').fadeIn();
    }, function() {
        myinter = setInterval( home_kythuatnamkhoa, 3000);
    });
    $('div.row6 div.img2').hover(function() {
        clearInterval(myinter);
    }, function() {
        $(this).fadeOut();
        $(this).siblings('div').fadeIn();
        myinter = setInterval( home_kythuatnamkhoa, 3000);
    });
    //
    window.setInterval(function(){
        $("#popup-desktop >.content-popup>.linktv >.table1 tr td:nth-child(2) a").toggleClass('active');
        $("#popup-desktop >.content-popup>.nhapsodienthoai button").toggleClass('active');
    }, 1000);
    //
    $(".popup_desktop_close").click(function(event) {
        //$('#popup-desktop').css('display', 'none');
        $('#popup-desktop').removeClass('active');
        setTimeout(showchat, 20000);
    });
});
//
function open_tuvan(){
	window.open("http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en","_blank");
}
//
function showchat() {
    //$('#popup-desktop').popup('show');
    $('#popup-desktop').addClass('active');
}
//
// kythuat nam khoa slide
function home_kythuatnamkhoa(){
    var obj = $(".row6 .flex2col1.active");
    $(".row6 .flex2col1.active >div>div").each(function(index, el) {
        if($(el).css('display') == 'none'){
            $(el).fadeIn();
        }else{
            $(el).fadeOut();
        }
    });
    if(obj.next().length){
        obj.removeClass('active');
        obj.next().addClass('active');
    }else{
        obj.removeClass('active');
        $(".row6 .flex2col1").first().addClass('active');
    }
}