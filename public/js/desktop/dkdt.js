document.writeln("<style>" +
    ".dangkysdt {visibility: visible;position: fixed;background-color: transparent;width: 200px;height: 200px;cursor: pointer;z-index: 200000 !important;-webkit-backface-visibility: hidden;-webkit-transform: translateZ(0);-webkit-transition: visibility .5s;-moz-transition: visibility .5s;-o-transition: visibility .5s;transition: visibility .5s;right: -10px;top: 150px;cursor: pointer;}" +
    ".dangkysdt:hover{opacity: 1;}" +
    ".fp-overlay {position: fixed;width: 100%;height: 100%;background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlOZyTXzhgAAAApJREFUCB1jYAAAAAIAAc/INeUAAAAASUVORK5CYII=);top: 0;left: 0;z-index: 200000;}"+
    "#dangkysdt p {background: rgba(0,0,0,.8);border-radius: 5px;color: #fff;text-align: center;padding: 5px 0;position: absolute;z-index: 98;width: 90px;font-size: 12px;bottom: 20px;left: 0;right: 0;margin: 0 auto;display: none;}" +
    "#dangkysdt:hover p{display: block;}" +
    ".fp-ph-circle {width: 160px;height: 160px;top: 20px;left: 20px;position: absolute;background-color: transparent;-webkit-border-radius: 100%;-moz-border-radius: 100%;border-radius: 100%;border: 2px solid #bfebfc;opacity: .5;-webkit-animation: fp-circle-anim 1.2s infinite ease-in-out;-moz-animation: fp-circle-anim 1.2s infinite ease-in-out;-ms-animation: fp-circle-anim 1.2s infinite ease-in-out;-o-animation: fp-circle-anim 1.2s infinite ease-in-out;animation: fp-circle-anim 1.2s infinite ease-in-out;}" +
    "@keyframes fp-circle-anim{0%{transform: scale(.5);opacity:.1}30%{transform:scale(.7);opacity:.5}100%{transform: scale(1);opacity:.1}}@-o-keyframes fp-circle-anim{0%{transform: scale(.5);opacity:.1}30%{transform:scale(.7);opacity:.5}100%{transform: scale(1);opacity:.1}}@-moz-keyframes fp-circle-anim{0%{transform: scale(.5);opacity:.1}30%{transform:scale(.7);opacity:.5}100%{transform: scale(1);opacity:.1}}@-webkit-keyframes fp-circle-anim{0%{transform: scale(.5);opacity:.1}30%{transform:scale(.7);opacity:.5}100%{transform: scale(1);opacity:.1}}" +
    ".dangkysdt .fp-ph-circle-fill {opacity: .75 !important;}" +
    ".fp-ph-circle-fill {width: 100px;height: 100px;top: 50px;left: 50px;position: absolute;background-color: #00aff2;-webkit-border-radius: 100%;-moz-border-radius: 100%;border-radius: 100%;border: 2px solid transparent;opacity: .1;-webkit-animation: fp-circle-fill-anim 2.3s infinite ease-in-out;-moz-animation: fp-circle-fill-anim 2.3s infinite ease-in-out;-ms-animation: fp-circle-fill-anim 2.3s infinite ease-in-out;-o-animation: fp-circle-fill-anim 2.3s infinite ease-in-out;animation: fp-circle-fill-anim 2.3s infinite ease-in-out;}" +
    "@keyframes fp-circle-fill-anim{0%{transform:rotate(0) scale(.7) skew(1deg);opacity:.2}50%{transform:rotate(0) scale(1) skew(1deg);opacity:.2}100%{transform:rotate(0) scale(.7) skew(1deg);opacity:.2}}@-o-keyframes fp-circle-fill-anim{0%{transform:rotate(0) scale(.7) skew(1deg);opacity:.2}50%{transform:rotate(0) scale(1) skew(1deg);opacity:.2}100%{transform:rotate(0) scale(.7) skew(1deg);opacity:.2}}@-moz-keyframes fp-circle-fill-anim{0%{transform:rotate(0) scale(.7) skew(1deg);opacity:.2}50%{transform:rotate(0) scale(1) skew(1deg);opacity:.2}100%{transform:rotate(0) scale(.7) skew(1deg);opacity:.2}}@-webkit-keyframes fp-circle-fill-anim{0%{transform:rotate(0) scale(.7) skew(1deg);opacity:.2}50%{transform:rotate(0) scale(1) skew(1deg);opacity:.2}100%{transform:rotate(0) scale(.7) skew(1deg);opacity:.2}}" +
    ".fp-ph-img-circle {width: 60px;height: 60px;top: 70px;left: 70px;position: absolute;background: #00aff2 url(http://phongkhamnamkhang.net/public/images/global/ringcall/ico_dienthoai.gif) no-repeat center center;background-size: 70%;-webkit-border-radius: 100%;-moz-border-radius: 100%;border-radius: 100%;border: 2px solid transparent;opacity: .7;-webkit-animation: fp-circle-img-anim 1s infinite ease-in-out;-moz-animation: fp-circle-img-anim 1s infinite ease-in-out;-ms-animation: fp-circle-img-anim 1s infinite ease-in-out;-o-animation: fp-circle-img-anim 1s infinite ease-in-out;animation: fp-circle-img-anim 1s infinite ease-in-out;}" +
    "@keyframes fp-circle-img-anim{0%{transform:rotate(0) scale(1) skew(1deg)}10%{transform:rotate(-25deg) scale(1) skew(1deg)}20%{transform:rotate(25deg) scale(1) skew(1deg)}30%{transform:rotate(-25deg) scale(1) skew(1deg)}40%{transform:rotate(25deg) scale(1) skew(1deg)}50%{transform:rotate(0) scale(1) skew(1deg)}100%{transform:rotate(0) scale(1) skew(1deg)}}@-o-keyframes fp-circle-img-anim{0%{transform:rotate(0) scale(1) skew(1deg)}10%{transform:rotate(-25deg) scale(1) skew(1deg)}20%{transform:rotate(25deg) scale(1) skew(1deg)}30%{transform:rotate(-25deg) scale(1) skew(1deg)}40%{transform:rotate(25deg) scale(1) skew(1deg)}50%{transform:rotate(0) scale(1) skew(1deg)}100%{transform:rotate(0) scale(1) skew(1deg)}}@-moz-keyframes fp-circle-img-anim{0%{transform:rotate(0) scale(1) skew(1deg)}10%{transform:rotate(-25deg) scale(1) skew(1deg)}20%{transform:rotate(25deg) scale(1) skew(1deg)}30%{transform:rotate(-25deg) scale(1) skew(1deg)}40%{transform:rotate(25deg) scale(1) skew(1deg)}50%{transform:rotate(0) scale(1) skew(1deg)}100%{transform:rotate(0) scale(1) skew(1deg)}}@-webkit-keyframes fp-circle-img-anim{0%{transform:rotate(0) scale(1) skew(1deg)}10%{transform:rotate(-25deg) scale(1) skew(1deg)}20%{transform:rotate(25deg) scale(1) skew(1deg)}30%{transform:rotate(-25deg) scale(1) skew(1deg)}40%{transform:rotate(25deg) scale(1) skew(1deg)}50%{transform:rotate(0) scale(1) skew(1deg)}100%{transform:rotate(0) scale(1) skew(1deg)}}" +
    ".dangkysdt:hover .fp-ph-circle,.dangkysdt:hover .fp-ph-circle-fill{background: #baf5a7;border-color: #baf5a7;}" +
    ".dangkysdt:hover .fp-ph-img-circle{background: #baf5a7 url(http://phongkhamnamkhang.net/public/images/global/ringcall/ico_dienthoai.gif) no-repeat center center;background-size: 70%;}" +
    "#popup_dangkysdt{position: fixed;width: 100%;bottom: 0;top: 0;left: 0;z-index: 2000000;overflow: visible;display: none;color: #383838;text-align: center;}" +
    ".popup_dangkysdt_ct{display: inline-block;background: #ffffff;border-radius: 20px;margin: auto;padding: 60px 75px 60px 75px;position: relative;top: 30px;z-index: 200001;}" +
    ".popup_dangkysdt_ct label{text-align: center;font-size: 24px;display: block;}" +
    ".popup_dangkysdt_ct .input{width: 80%;margin: auto;margin-top: 50px;}" +
    ".popup_dangkysdt_ct .input input{border-width: 0;display: block;border: none;border-bottom: #00bed5 solid 1px;color: #00bed5;width: 100%;text-align: center;font-size: 24px;}" +
    ".popup_dangkysdt_ct button{width: auto;display: block;margin: 0 auto;border: none;border-width: 0;padding: 20px 40px;background-color: #6fdae7;-webkit-border-radius: 68px;-moz-border-radius: 68px;-webkit-border-radius: 68px;-moz-border-radius: 68px;border-radius: 68px;font-size: 20px;color: #fff;cursor: pointer;outline: none !important;margin-top: 30px;}" +
    ".popup_dangkysdt_ct button:hover{background-color: #00aff2;}" +
    ".popup_dangkysdt_ct .popup_dangkysdt_close{-webkit-border-radius: 2px !important;-moz-border-radius: 2px !important;-webkit-border-radius: 2px;-moz-border-radius: 2px;border-radius: 2px;position: absolute !important;right: -15px !important;top: -15px !important;height: 30px !important;width: 30px !important;background-image: url(http://phongkhamnamkhang.net/public/images/global/ringcall/dangkysdt_close.png);background-position: center center;background-repeat: no-repeat;cursor: pointer !important;-webkit-transition: .3s ease-out !important;-moz-transition: .3s ease-out !important;-o-transition: .3s ease-out !important;transition: .3s ease-out !important;}" +
    ".popup_dangkysdt_tb{display: inline-block;background: transparent;margin: auto;padding: 60px 75px;position: relative;top: 30px;z-index: 200001;}"+
    ".popup_dangkysdt_tb p{color: #ffffff;font-size: 20px;}"+
    "</style>");
//document.writeln("<div class='dangkysdt' id='dangkysdt'><p>Click Ngay</p><div class='fp-ph-circle'></div><div class='fp-ph-circle-fill'></div><div class='fp-ph-img-circle'></div></div><div id='popup_dangkysdt'><div class='popup_dangkysdt_ct'><span class='popup_dangkysdt_close'></span><label>Nhập số điện thoại của Bạn và Bác sỹ sẽ gọi lại sau 36 giây!</label><form name='popup_dangkysdt'><div class='input'><input type='text' name='dienthoai' onfocus="(this.value == 'Nhập số điện thoại') && (this.value = '')" onblur="(this.value == '') && (this.value = 'Nhập số điện thoại')" onkeypress='return event.charCode >= 48 &amp;&amp; event.charCode <= 57'  maxlength='13'></div></form><button type='button' class='popup_dangkysdt_dangky'>Click để được gọi lại!</button></div></div>");
var str_html='<div class="dangkysdt" id="dangkysdt">' +
    '<p>Click Ngay</p>' +
    '<div class="fp-ph-circle"></div>' +
    '<div class="fp-ph-circle-fill"></div>' +
    '<div class="fp-ph-img-circle"></div>' +
    '</div>';
    var str_html2='<div id="popup_dangkysdt">' +
        '<div class="fp-overlay"></div>' +
        '<div class="popup_dangkysdt_tb" style="display:none;"><p><img src="http://phongkhamnamkhang.net/public/images/global/ringcall/ok.png"></p><p>Yêu cầu gọi lại đã được gửi đến bác sỹ, mong bạn nhẫn nại chờ đợi!</p></div>'+
        '<div class="popup_dangkysdt_ct">' +
        '<span class="popup_dangkysdt_close">' +
        '</span><label>Nhập số điện thoại của Bạn và Bác sỹ sẽ gọi lại sau 30 giây!</label>' +
        '<form name="popup_dangkysdt" id="goilaisodienthoai">' +
        '<div class="input">' +
        '<input type="text" name="dienthoai" value="Nhập số điện thoại" onfocus="(this.value == '+"'Nhập số điện thoại'"+') && (this.value ='+"''"+' )"'+' onblur="(this.value =='+"''"+" ) && (this.value = 'Nhập số điện thoại')"+'"'+'onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57" maxlength="13"></div></form>' +
        '<button type="button" class="popup_dangkysdt_dangky">Click để được gọi lại'+'</button><p style="text-align:center;margin-top:15px;font-size:16px;">Trực tiếp gọi tới số : <a href="tel:1800 6181"><strong style="font-weight:bold;">1800 6181</strong></a> hoặc <a href="tel:0243 - 9656999"><strong style="font-weight:bold;">0243 - 9656999</strong></a>   sẽ càng thuận tiện hơn !</p>' +
'</div></div>';
var str=str_html+str_html2;
document.writeln(str);
//document.writeln('<div class="dangkysdt" id="dangkysdt"><p>Click Ngay</p><div class="fp-ph-circle"></div><div class="fp-ph-circle-fill"></div><div class="fp-ph-img-circle"></div></div><div id="popup_dangkysdt"><div class="popup_dangkysdt_ct"><span class="popup_dangkysdt_close"></span><label>Nhập số điện thoại của Bạn và Bác sỹ sẽ gọi lại sau 36 giây!</label><form name="popup_dangkysdt"><div class="input"><input type="text" name="dienthoai" onfocus="(this.value == "Nhập số điện thoại") && (this.value = "")" onblur="(this.value == '') && (this.value = 'Nhập số điện thoại')" onkeypress='return event.charCode >= 48 &amp;&amp; event.charCode <= 57'  maxlength='13'></div></form><button type='button' class='popup_dangkysdt_dangky'>Click để được gọi lại!</button></div></div>');
function checknumberphone(number){
    var filter = /^[0-9-+]+$/;
    if (filter.test(number)) {
        var _len=number.length;
        if(_len >= 8 && _len <= 13){
            return 1;
        }else{
            return 0;
        }
    }
    else {
        return 0;
    }
}
$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#dangkysdt').click(function(){
        $('#popup_dangkysdt').css('display','block');
    })
    $('.popup_dangkysdt_close').click(function(){
        $('#popup_dangkysdt').css('display','none');
    })
    $(".popup_dangkysdt_dangky").on("click", function (e) {
        var hoten = 'Đăng ký số điện thoại';
        var dienthoai = document.forms['popup_dangkysdt']['dienthoai'].value;
        var url=document.URL;
        if(dienthoai=="" || dienthoai=='undifined'){
        alert('Số điện thoại không được để trống.');
        return false;
        }else{
            var checkmobile=checknumberphone(dienthoai);
            if(checkmobile==0){
                alert('Số điện thoại không đúng định dạng');
                return false;
            }else{
                $('.popup_dangkysdt_ct').css('display','none');
                $('.popup_dangkysdt_tb').css('display','block');
                //alert('Số điện thoại đăng ký thành công !');
                /* stop form from submitting normally */
                // event.preventDefault();
                // /* get some values from elements on the page: */
                var url = 'http://phongkhamnamkhang.net/sendphone';
                /* Send the data using post */
                $.post(url,{phone:dienthoai}, function(data, status){
                    $('.popup_dangkysdt_tb').css('display','none');
                    $('#popup_dangkysdt').css('display','none');
                    alert('Số điện thoại đăng ký thành công !');
                    location.reload(true);
                });
            }
        }
    });
});