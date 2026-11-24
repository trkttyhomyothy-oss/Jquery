/*ຈົ່ງຂຽນ jQuery ເພື່ອສະແດງຄຳວ່າ Hello word !!!!! ?*/
   /*$(document).ready(function () {
    document.write("Hello word!!!!!!!!!!!!!!!!!!!");
    });*/

/*	ຈົ່ງຂຽນ jQuery ເພື່ອເຊື່ອງຂໍ້ມູນໃນ tag  H1 ເຮັດແນວໃດ?*/
    /*$(document).ready(function () {
        $("h1").hide();
    });*/


/*ຈົ່ງຂຽນ jquery ເມື່ອກົດໃສ່ປຸ່ມ click here ແລ້ວໄຫ້ຂໍ້ມູນຢູ່ tag ຫາຍໄປ
$(document).ready(function () {
    $('button').click(function(){
        $('h1').hide()
    });
});*/


/*ຈົ່ງຂຽນ jquery ເມື່ອກົດປຸ່ມ ແລ້ວວ ໄຫ້ຂໍ້ມູນ tag p ຫາຍໄປ
$(function () {
    $('button').click(function(){
        $('p').hide();
    });
});*/

/*ຈົ່ງຂຽນນ jQuery ເພື່ອເຊື່ອງຂໍ້ມູນ ໃນ h3 ແລ້ວເມື່ອຄຣີກໃສ່ຄຳວ່າສີແດງໃຫ້ຂື້ນວ່າ ເຈົ້າເລືອກສີແດງ
ຖ້າຄຣິກໃສ່ສິຟ້າໃຫ້ສະແດງຄຳວ່າ ເຈົ້າເລືອກສີຟ້າ
$(function(){
    $('h3').hide();
    $('button.red').click(function () { 
        $('.a').show();
        $('.b').hide();
        $('*').css("color","red");
     });
     $('button.blue').click(function () { 
        $('.b').show();
        $('.a').hide();
        $('*').css("color","blue");
     });
});*/

/*ຈົ່ງຂຽນ jQuery ດັ່ງນີ້:
- ຖ້າຫາກວ່າຄຣິກໃສ່ປຸ່ມ ສີແດງ ແລ້ວໄຫ້ສະແດງຄຳວ່າ ມື້ນີ້ຝົນຕົກຂ້ອຍຈະນອນ ໃຫ້ເປັນສີແດງ
- ຖ້າຫາກວ່າຄຣິກໃສ່ປຸ່ມ ສີຟ້າ ແລ້ວໄຫ້ສະແດງຄຳວ່າ ມື້ນີ້ຝົນຕົກຂ້ອຍຈະນອນ ໃຫ້ເປັນສີຟ້າ
- ຖ້າຫາກວ່າຄຣິກໃສ່ປຸ່ມ ສີເຫຼືອງ ແລ້ວໄຫ້ສະແດງຄຳວ່າ ມື້ນີ້ຝົນຕົກຂ້ອຍຈະນອນ ໃຫ້ເປັນສີເຫຼືອງ
$(function () { 
    $('.btn_red').click(function(){
        $('h1').css('color','red');
    });
    $('.btn_blue').click(function(){
        $('h1').css('color','blue');
    });
    $('.btn_yellow').click(function(){
        $('h1').css('color','yellow');
    });
 });*/

/*$(function(){
$('.btn_a').click(function(){
    $('.a').toggle();
});
$('.btn_b').dblclick(function(){
    $('.b').toggle();
});
});*/

/*ບົດເຝິກຫັດ
$(function(){
    $('.b1').hide();
      $('.btn1').click(function(){
        if($('.b1').is(':hidden')){
          $('.a1').fadeOut();
          $('.b1').fadeIn();
        }else $('.b1').fadeOut();
});
$('.btn2').dblclick(function(){
  $('.a1,.b1').fadeIn();
});
  $('.btn1').hover(
  function(){
  $(this).css({"background-color": "green", "font-size": "24px"});
  $('.btn2').fadeTo("slow",0)
  },
  function(){
    $(this).css({"background-color": "", "font-size": ""});
    $('.btn2').fadeTo("slow",1);}
  );
  $('.btn2').hover(
  function(){
    $(this).css({"background-color": "blue", "font-size": "24px"});
    $('.btn1').fadeTo('slow',0);
  },
  function(){$(this).css({"background-color": "", "font-size": ""});
  $('.btn1').fadeTo("slow",1)
  }
);
});
*/

/*ບົດເຝິກຫັດ ຂໍ້2
$(function(){
$('#slideup').click(function(){
$('img').slideUp();
});
$('#slidedown').click(function(){
$('img').slideDown();
});
$('#slidetoggle').click(function(){
$('img').slideToggle();
});
});*/

/*ບົດເຝິກຫັດ ຂໍ້3
$(function(){
    $(".btn2").click(function(){
        $('p').fadeOut();
    })
    $(".btn1").click(function(){
        $('p').fadeIn();
    })
})*/

/*ບົດເຝິກຫັດ ຂໍ້4
$(function(){
$('h1').hover(function(){
    $('h1').css({"background-color": "red", "font-size": "40px"});
},
function(){
    $('h1').css({"background-color": "yellow", "font-size": ""});
}
);
});*/

$(function(){
$('.a').keydown(function (e) { 
    $(this).css({
        "background-color": "gray", "font-size": "30px"
    });
});
$('.a').keyup(function (e) { 
    $(this).css({
        "background-color": "pink", "font-size": "12px"
    });
});
});fghjkl;lkjhgfghjkl;