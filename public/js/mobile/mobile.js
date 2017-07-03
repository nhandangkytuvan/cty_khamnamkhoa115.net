var inter1,mypopup1,sodem = 0;
$(document).ready(function() {
    $('#my_popup').popup({
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
        //setTimeout(showchat2,20000);
    }
    // 
    $('.home .row3 .table-cell').click(function(event) {
        /* Act on the event */
        clearInterval(inter1);
        var index = $(this).index();
        $(this).addClass('active');
        $(this).siblings('div').removeClass('active');
        $('.home .row3 .tab-contents-1').children('div').eq(index).addClass('active');
        $('.home .row3 .tab-contents-1').children('div').eq(index).siblings('div').removeClass('active');
        inter1 = setInterval(alertFunc, 5000);
    });
    // 
    $('.footer-toolbar').scrollToFixed( { bottom: 0} );
    //
    inter1 = setInterval(alertFunc, 5000);
    //
    $("a[href='#top']").click(function() {
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });
    //listen to shake event
    var shakeEvent = new Shake({threshold: 5,timeout: 1000});
    shakeEvent.start();
    window.addEventListener('shake', function(){
        window.location.href = "tel:18006181";
    }, false);
    // $("#myoverlay2 .mypopup2_close").click(function(event) {
    //     $("#myoverlay2").animate({top:"100%"}, 1000);
    // });
});
function showchat() {
    $('#my_popup').popup('show');
}
// function showchat2() {
//     $('#myoverlay2').animate({top:"0"}, 1000);
// }
function alertFunc() {
    var obj = $('.home .row3 .table-cell.active');
    var index = obj.next().index();
    obj.removeClass('active');
    if(obj.next().length){
        obj.next().addClass('active');
        $('.home .row3 .tab-contents-1').children('div').eq(index).addClass('active');
        $('.home .row3 .tab-contents-1').children('div').eq(index).siblings('div').removeClass('active');
    }
    else{
        $('.home .row3 .table-cell').first().addClass('active');
        $('.home .row3 .tab-contents-1').children('div').first().addClass('active');
        $('.home .row3 .tab-contents-1').children('div').first().siblings('div').removeClass('active');
    }
}

$(function(){
    // $('.home .row1 .flex.flex1col1.order1.arrow_box').css({'height':($('menu .flex1col1').height())+'px'});
    // $(window).resize(function(){
    //     $('menu .flex1col1 >.box').css({'height':($('menu .flex1col1').height())+'px'});
    // });
});