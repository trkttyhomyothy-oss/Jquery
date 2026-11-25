# ບົດທີ 1 ຄວາມຮູ້ພື້ນຖານກ່ຽວກັບພາສາ jquery 
# 1, Jquery ແມ່ນຫຍັງ?
	**jQuery ແມ່ນ java script library ເຊິ່ງ jQuery ໄດ້ລວມເອົາ Object ແລະ  Function ຕ່າງໆ ທີ່ຈຳເປັນມາເກັບໄວ້ໃນຮູບແບບ library ແລະ ຖືກອອກແບບມາເພື່ອເຮັດໃຫ້ການຮຽນ JavaScript ນັ້ນມີຄວາມສະດວກສະບາຍງ່າຍຍຂື້ນ
	- ຈຸດປະສົງຫຼັກຂອງການຮຽນ jQuery ແມ່ນເຮົາຈະນຳໃຊ້ໃນການຮັບຂໍ້ມູນຈາກຟອມແລ້ວສົ່ງໄປຫາ PHP ເພື່ອບັນທຶກຂໍ້ມູນຈາກຟອມ**
# 2, ການດາວໂຫຼດ ແລະ ຕິດຕັ້ງ jQuery 
	**ສາມາດໂຫຼດໄດ້ຈາກ www.jqurey.com
	+ ວິທີການຕິດຕັ້ງ jquery 
	ເຮົາຈະນຳເອົາຟາຍ jquery.js ເກັບໄວ້ໃນ folder ທີ່ເຮົາຕ້ອງການໃຊ້
	ດາວໂຫຼດ / ອອນລາຍ ຂອງ jQuery ==> this pc ==> xampp ==> htdocs ==> new folder ==> 
	Select folder vs code ==> ສ້າງhtml ==>**
```java
	<script src="https://code.jquery.com/jquery-4.1.0.js"></script> // ແບບອອນລາຍ
	<script src="jquery.js"></script> // ແບບບໍ່ໃຊ້ອິນເຕີເນັດ
```
## ໂຄງສ້າງຂອງ ພາສາ jQuery 
```html
	<!DOCTYPE html>
	<html lang="en">
	<head>
	    <title>jQuery</title>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <script src="https://code.jquery.com/jquery-4.1.0.js"></script>
	<script>
	---------------
	</script>
	</head>
	<body>
	    ----------------------------
	</body>
	</html>
```
# 3, ຮູບແບບຂອງການຂຽນ jQuery 
	**ແມ່ນມີ2 ຮູບແບບ:**
## ຮູບແບບທີ 1
```java
		<script>
		$(document),ready(function){
		// ຂຽນ script ລະຫວ່າງນີ້
		});
		</script>
```
##  ຮູບແບບທີ 2
```java
	<script>
	$(function(){
	// ຂຽນ script ລະຫວ່າງນີ້
	}
	</script>
```
## 4, ຈົ່ງຂຽນ jQuery ເພື່ອສະແດງຄຳວ່າ Hello word !!!!! ?
```java
	<script>
	       $(document).ready(function () {
	        document.Write("Hello word!!!!!!!!!!");
	       });
	    </script>
```
# 5, ຮູບແບບຄຳສັ່ງພື້ນຖານຂອງ ພາສາ jquery 
	**jQuery ອອກແບບມາໃຫ້ເລືອກເອົາ HTML element ໝາຍເຖິງ tag ຂອງ html ແລະ ກຳນົດ action ໃຫ້ກັບຕົວເຮົາເລືອກນັ້ນ ເຊີ່ງມີຮູບແບບດັ່ງນີ້:**
	$("select"),action()
	$ ເປັນເຄື່ອງໝາຍເຂົ້າເຖິງ jquery 
	Selector ຄືສວ່ນທີເລືອກ 
Action ຄືຕົວທີ່ກຳນົດໃຫ້ selector ທຳງານ.
	=======> 
```java
	**- ການເລືອກ tag element **
	$("p")	ເລືອກແທັກທັງໝົດ
	**- ການເລືອກ class**
	$(".test") 	ເລືອກແທັກທັງໝົດທີ່ເປັນ class
	**- ການເລືອກ ID** 
	$("#test") 	ເລືອກແທັກທັງໝົດທີ່ເປັນ ID ຊື່ວ່າ test 
	**- ການເລືອກໃນຮູບແບບຕ່າງໆ**
	$("*") 	ໝາຍເຖິງການເລືອກທັງໝົດຂອງ element 
	$("this") 	ໝາຍເຖິງການເລືອກຂໍ້ມູນໃນ tag ນັ້ນໆ 
	$("p.test") 	ໝາຍເຖິງການລະບຸ ຊື່ແທັກ ພ້ອມຊື່ class
	$("#new1,#new2") 	ໝາຍເຖິງເລືອກ ID ເພື່ອໃຫ້ເຮັດວຽກພ້ອມກັນທັງ 2 ໂຕຂື້ນໄປ.
```
# ຕົວຢ່າງ: 
## 1, ເຮົາມີຂໍ້ມູນດັ່ງນີ້:
```html
	<H1> MySQL </H1>
	<H2> MySQL </H2>
	<H3> MySQL </H3>
	**ຈົ່ງຂຽນ jQuery ເພື່ອເຊື່ອງຂໍ້ມູນໃນ tag  H1 ເຮັດແນວໃດ?**
	==>jQuery<==
	$(document).ready(function () {
	        $("h1").hide();
	    });
	==>Html<==
	<h1> MySQL </h1>
	<h2> PHP </h2>
	<h3> jQuery </h3>
```
## 2, ເຮົາມີຂໍ້ມູນຄື:
```html
	<h1> test </h1>
	<button>click here</button>
	**- ຈົ່ງຂຽນ jquery ເມື່ອກົດໃສ່ປຸ່ມ ແລ້ວໄຫ້ຂໍ້ມູນຢູ່ tag h1 ຫາຍໄປ**
	==>jQuery<==
	$(document).ready(function(){
		$('button').click(function(){
			$('h1').hide();
		});
	});
	==>Html<==
	<h1> test </h1>
	<button>click here</button>
```

## 3, ເຮົາມີຂໍ້ມູນດັ່ງນີ້:
```html
	<h1> test </h1>
	<p> paragraph 1 </p>
	<p> paragraph 2 </p>
	<p> paragraph 3 </p>
	<button> hide </button>
	**ຈົ່ງຂຽນ jquery ເມື່ອກົດປຸ່ມ ແລ້ວວ ໄຫ້ຂໍ້ມູນ tag p ຫາຍໄປ**
	==>jQuery<==
	$(function(){
		$('button').click(function(){
			$('p').hide();
		});
	});
	==>Html<==
	<h1> test </h1>
	<p> paragraph 1 </p>
	<p> paragraph 2 </p>
	<p> paragraph 3 </p>
	<button> hide </button>
```

## 4, ເຮົາມີຂໍ້ມູນດັ່ງນີ້:
```html
		<h3 class='a'> ເຈົ້າເລືອກສີແດງ </h3>
		<h3 class='b'> ເຈົ້າເລືອກສີຟ້າ </h3>
		<button class='red'> ສີແດງ </button>
		<button class='blue'> ສີຟ້າ </button>
**ຈົ່ງຂຽນນ jQuery ເພື່ອເຊື່ອງຂໍ້ມູນ ໃນ h3 ແລ້ວເມື່ອຄຣີກໃສ່ຄຳວ່າສີແດງໃຫ້ຂື້ນວ່າ ເຈົ້າເລືອກສີແດງຖ້າຄຣິກໃສ່ສິຟ້າໃຫ້ສະແດງຄຳວ່າ ເຈົ້າເລືອກສີຟ້າ**
		==>jQuery<==
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
		});
		==>Html<==
		<h3 class='a'> ເຈົ້າເລືອກສີແດງ </h3>
		<h3 class='b'> ເຈົ້າເລືອກສີຟ້າ </h3>
		<button class='red'> ສີແດງ </button>
		<button class='blue'> ສີຟ້າ </button>
```
## 5, ເຮົາມີຂໍ້ມູນດັ່ງນີ້:
```html
		<h1> ມື້ນີ້ຝົນຕົກຂ້ອຍຈະນອນ </h1>
		<button class='button' class='btn_red'> ສີແດງ </button>
		<button class='button' class='btn_blue'> ສີຟ້າ </button>
		<button class='button' class='btn_yellow'> ສີເຫຼືອງ </button>
		ຈົ່ງຂຽນ jQuery ດັ່ງນີ້:
		- ຖ້າຫາກວ່າຄຣິກໃສ່ປຸ່ມ ສີແດງ ແລ້ວໄຫ້ສະແດງຄຳວ່າ ມື້ນີ້ຝົນຕົກຂ້ອຍຈະນອນ ໃຫ້ເປັນສີແດງ
		- ຖ້າຫາກວ່າຄຣິກໃສ່ປຸ່ມ ສີຟ້າ ແລ້ວໄຫ້ສະແດງຄຳວ່າ ມື້ນີ້ຝົນຕົກຂ້ອຍຈະນອນ ໃຫ້ເປັນສີຟ້າ
		- ຖ້າຫາກວ່າຄຣິກໃສ່ປຸ່ມ ສີເຫຼືອງ ແລ້ວໄຫ້ສະແດງຄຳວ່າ ມື້ນີ້ຝົນຕົກຂ້ອຍຈະນອນ ໃຫ້ເປັນສີເຫຼືອງ
		==>jQuery<==
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
		 });
		==>Html<==
		<h1> ມື້ນີ້ຝົນຕົກຂ້ອຍຈະນອນ </h1>
		<button class='button' class='btn_red'> ສີແດງ </button>
		<button class='button' class='btn_blue'> ສີຟ້າ </button>
		<button class='button' class='btn_yellow'> ສີເຫຼືອງ </button>
```

# ບົດທີ 2 ການຳໃຊ້ Events
## 1, jQuery Events ແມ່ນຫຍັງ?
## + mouse events
	Click 	ເຫດການທີ່ຈະເກີດຂຶ້ນ ເມືອມີການຄຣິກ Element ທີ່ເລືອກ
	dblclick 	ເຫດການທີ່ຈະເກີດຂຶ້ນ ເມືອມີການດັບເບີ້ນຄຣິກ Element ທີ່ເລືອກ
	Mouseenter 	ເຫດການທີ່ຈະເກີດຂຶ້ນ ເມືອມີການເອົາເມົ້າໄປຊີ້ໃສ່ Element ທີ່ເລືອກ
	Mousehover 	ເຫດການທີ່ຈະເກີດຂຶ້ນ ເມືອມີການເລື່ອນເມົ້າໄປຢູ່ Element ທີ່ເລືອກ
	Mouseover 	ເຫດການທີ່ຈະເກີດຂຶ້ນ ເມືອມີການເລື່ອນເມົ້າໄປຢູ່ Element ທີ່ເລືອກ
## + action affects events 
	Hide 	ເຊື່ອງ
	Show 	ສະແດງ
	Toggle 	ເຊື່ອງ ແລະ ສະແດງ
	SildeUp 	ເລື່ອນຂື້ນ
	Sildedown 	ເລື່ອນລົງ
	Sildetoggle 	ເລື່ອນຂື້ນແລະເລື່ອນລົງ
	fedeln 	ຄ່ອຍໆສະແດງອອກມາ
	fedeOut 	ຄ່ອຍໆຫາຍໄປ
	fadeTo 	ຄ່ອຍໆຫາຍ ແລະ ຄ່ອຍໆກັບມາ
	fadetoggle 	ຄ່ອຍໆສະແດງ ແລະ ຄ່ອຍໆຫາຍໄປ
## +Keyboard Events 
Keypress	ໝາຍເຖິງເຫດການທີ່ເກີດຂື້ນເມື່ອມີການກົດປຸ່ມໃນ keyboard ຍົກເວັ້ນປຸ່ມທີ່ເປັນ key ຕ່າງໆຂອງ keyboard ເຊັ່ນ: alt, ctrlc, shift
Keydown	ໝາຍເຖິງເຫດການທີ່ຈະເກີດຂື້ນເມືອມີວການກົດປຸ່ມໃນ keyboard
Keyup	ໝາຍເຖິງເຫດການທີ່ຈະເກີດຂື້ນເມື່ອມີການປ່ອຍປຸ່ມກົດໃນ keyboard
## +ວິທີການນຳໃຊ້ events 
```java
	- ຮູບແບບການນຳໃຊ້ events 
	$(function(){
		$('selector').ຊື່ events ທີ່ຕ້ອງການ(function(){
			//ເຫດການທີ່ຈະເກີດຂື້ນ
		});
	});
```
# ຕົວຢ່າງ:
## 1, ເຮົາມີຂໍ້ມູນດັ່ງນີ້:
```html
	    <p class="a">ຄຣິກຄັ້ງດຽວ</p>
	    <p class="a">ຄຣິກສອງຄັ້ງ</p>
	    <button type="button" class="btn_a">click</button>
	    <button type="button" class="btn_b">dblclick</button>
	ຈົ່ງຂຽນ jQuery ດັ່ງນີ້:
	- ເມື່ອກົດປຸ່ມ click ແລ້ວໄຫ້ຄຳວ່າ ຄຣິກຄັ້ງດຽວຫາຍໄປ ແລະ ຄຣິກຄັ້ງທີ່ສອງໄຫ້ກັບມາ
	- ເມື່ອກົດປຸ່ມ dblclick ແລ້ວໄຫ້ຄຳວ່າ ຄຣິກສອງຄັ້ງຫາຍໄປ ແລະ ເມື່ອເຮົາ ດັບເບີ້ນຄຮິກອີກຄັ້ງໄຫ້ກັບມາ
	- ==>jQuery==
	$(function(){
	$('.btn_a').click(function(){
	    $('.a').toggle();
	});
	$('.btn_b').dblclick(function(){
	    $('.b').toggle();
	});
	});
	==>Html<==
	<p class="a">ຄຣິກຄັ້ງດຽວ</p>
	    <p class="b">ຄຣິກສອງຄັ້ງ</p>
	    <button type="button" class="btn_a">click</button>
	    <button type="button" class="btn_b">dblclick</button>
```
# ບົດເຝິກຫັດ
## 1, ເຮົາມີຂໍ້ມູນດັ່ງນີ້
```html
	    <h3 class="a1">ຄ່ອຍໆຫາຍໄປ</h3>
	    <h3 class="b1">ຄ່ອຍໆສະແດງອອກມາ</h3>
	    <button type="button" class="btn1">ຄຣິກຄັ້ງດຽວ</button>
	    <button type="button" class="btnຟ">ຄຣິກສອງຄັ້ງ</button>
	ຈົ່ງຂຽນ jQuery ດັ່ງນີ້:
	- ເມືອເຮົາກົດປຸ່ມ ຄຣິກຄັ້ງດຽວ ໃຫ້ຄຳວ່າ ຄຣິກຄັ້ງດຽວ ນັັ້ນຄ່ອຍໆຫາຍໄປ ແລະ ຄຳວ່າ ຄ່ອຍໆສະແດງອອກມາ ນັ້ນສະແດງຂື້ນມາ ແລະ ເມື່ອມີການກົດໃສ່ປຸ່ມ ຄຣິກຄັ້ງດຽວ ອີກຄັ້ງແລ້ວໃຫ້ສະແດງຄຳວ່າ ຄ່ອຍໆສະແດງອອກມານັ້ນຫາຍໄປ
	- ເມື່ອເຮົາກົດດັບເບີ້ນຄຣິກໃສ່ຄຳວ່າ: ຄຮິກສອງຄັ້ງ ໃຫ້ຄຳເວົ້າທັງ 2 ແທັດນັ້ນກັບມາສະແດງທັງໝົດ
	- ເມື່ອເອົາເມົ້າຊີ້ໃສ່ປຸ່ມຄຣິກຄັັ້ງດຽວ ແລ້ວໃຫ້ປຸ່ມ ຄຣິກຄັ້ງດຽວ ໄຫ້ມີສີ້ພື້ນຫຼັງເປັນສີຂຽວ, ມີຂະໜາກດໃຫຍ່ຂື້ນ, ປຸ່ມ ຄຣິກສອງຄັ້ງ ນັ້ນຄ່ອຍໆຫາຍໄປ,ເມື່ອເອົາເມົ້າອອກແລ້ວໃຫ້ປຸ່ມຄຣິກຄັ້ງດຽວກັບເປັນປົກກະຕິ ແລະ ມີຂະໜາດປົກກະຕິ , ປຸ່ມຄຣິກສອງຄັ້ງ ຄ່ອຍໆກັບມາສະແດງ ແລະ ເມື່ອເອົາເມົ້າໄປຊີ້ໃສ່ ປຸ່ມຄິກສອງຄັັ້ງ ແລ້ວໃຫ້ປຸ່ມຄຣີກສອງຄັ້ງ ມີສິພື້ນຫຼັງເປັນສີຟ້າ,ມີຂະໜາດທີ່ໃຫຍ່ຂື້ນ, ປຸ່ມຄຣິກຄັ້ງດຽວຄ່ອຍໆຫາຍໄປ ,ເມື່ອເອົາເມົ້າອອກໄຫ້ເປັນປົກກະຕິ
	==>jQuery<==
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
	  $('.btn2').fadeTo("slow",1)
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
	==>Html<==
	    <h3 class="a1">ຄ່ອຍໆຫາຍໄປ</h3>
	    <h3 class="b1">ຄ່ອຍໆສະແດງອອກມາ</h3>
	    <button type="button" class="btn1">ຄຣິກຄັ້ງດຽວ</button>
	    <button type="button" class="btn2">ຄຣິກສອງຄັ້ງ</button>
```
## 2, ຈົ່ງນຳເອົາຮູບພາບມາສະແດງຜົນໃນໜ້າເວັບຫຼັງຈາກນັ້ນໄຫ້ຂຽນ jQuery ດັ່ງນີ້
	+ ເຮົາມີຂໍ້ມຸນດັ່ງນີ້:
  ```html
	<img src='……..' whdth='300' height='300'></img>
	    <button type="button" class="slideup">ເລື່ອນຂື້ນ</button>
	    <button type="button" class="slidedown">ເລື່ອນລົງ</button>
	    <button type="button" class="slidetoggle">ເລື່ອນຂື້ນ ແລະ ເລື່ອນລົງ</button>
	ຖ້າຫາກວ່າ ກົດປຸ່ມເລືອນຂື້ນ ໄຫ້ຮູບນັ້ນເລື່ອນຂື້ນ
	ຖ້າຫາກວ່າ ກົດປຸ່ມເລືອນລົງ ໄຫ້ຮູບນັ້ນເລື່ອນລົງ
	ຖ້າຫາກວ່າ ກົດປຸ່ມເລືອນຂື້ນ ແລະ ລົງ ໄຫ້ຮູບນັ້ນເລື່ອນຂື້ນ ແລະ ເມື່ອກົດປຸ່ມອີກຄັ້ງ ໃຫ້ຮູບພາບນັ່ນເລື່ອນລົງ
```
## 3, ເຮົາມີຂໍ້ມູນດັ່ງນີ້:
```html
	<p>ການນຳໃຊ້ fadeIn ແລະ fadeOut </p>
	    <button class="btn1">fadein</button>
	    <button class="btn2">fadeOut</button>
	ຈົ່ງຂຽນ jQuery ດັ່ງນີ້:
	- ເມື່ອເຮົາກົດໃສ່ປຸ່ມ fadeIn ໃຫ້ຂໍ້ຄວາມຄ່ອຍໆສະແດງຜົນ
	- ເມື່ອເຮົາກົດໃສ່ປຸ່ມ fadeOut ໃຫ້ຂໍ້ຄວາມຄ່ອຍໆຫາຍໄປ
 ```
## 4, ເຮົາມີຂໍ້ມຸນດັ່ງນີ້:
```html
	<h1>ການນຳໃຊ້ mouse Events </h1>
	ຈົ່ງຂຽນ jQuery ເມື່ອເອົາເມົ້າ ໄປຊີ້ໃສ່ ໃຫ້ມີສິພື້ນຫຼັງສິແດງ, ມີຂະໜາດໃຫຍ່ຂື້ນ, ເມື່ອນຳເອົາເມົ້າອອກໃຫ້ສີພື້ນຫຼັງເປັນສີເຫຼືອງ, ມີຂະຫນາດນ້ອຍລົງ
```
## 5, ຈົ່ງຂຽນ jQuery ເມື່ອກົດປຸ່ມ keybroad ໃຫ້ຂະໜາດຕົວໜັງສື  ເປັນ 30 px ບ໊ອກເປັນສີເທົາ ເມື່ອເຮົາວ່າປຸ່ມ keybroad ໃຫ້ຂະໜາດຕົວອັກສອນເປັນ 12 px
```html
	ປ້ອນຂໍ້ມູນ <input type='text' class='a' name='text'>
```
# ບົດທີ 3 ການນຳໃຊ້ jQuery ເພື່ອຮັບຂໍ້ມູນຈາກຟອມ
## 1, ການຮັບຂໍ້ມູນດວ້ຍ jQuery 
	ເຮົາຈະຂຽນ jQuery ເພື່ອຮັບຂໍ້ມູນຈາກແບບຟອມ ຫຼັງຈາກນັ້ນຈັ່ງຄ່ອຍດືງຂໍ້ມູນທີ່ຮັບມາ ໄປວາງອີກຟາຍໜື່ງ ເພື່ອເຮັດວຽກຕາມຈຸດປະສົງທີ່ເຮົາຕ້ອງການ
```java
	 # ຮູບແບບການຮັບຂໍ້ມູນ
	$(function(){
$(" ເລືອກ ID or Class ຂອງປຸ່ມ").click(function(){
	Var ຊື່ຕົວປ່ຽນ 1 =  $("ຮັບ id ຫຼື class ບ໊ອກ1").val();
	Var ຊື່ຕົວປ່ຽນ 2 =  $("ຮັບ id ຫຼື class ບ໊ອກ2").val();
	$.GET ຫຼື POST ('ຊື່ຟາຍ ແລະ ນາມສະກຸນ',{
	ວາງຄ່າຕົວປ່ຽນໃໝ່1:ຕົວປ່ຽນ1,
	ວາງຄ່າຕົວປ່ຽນໃໝ່2:ຕົວປ່ຽນ2
	},
	Function(Output){
	$("ບ່ອນສະແດງຂໍ້ມູນ ເລືອກ ID or class ").html(Output);
});
});
});
```
## ຕົວຢ່າງ:
	1, ຈົ່ງສ້າງຟອມບັນທຶກຂໍ້ມູນດັ່ງນີ້: (ນຳໃຊ້ bootstarp)
	ຊື່
	ນາມສະກຸນ
	ເພດ
	ປຸ່ມສົ່ງຂໍ້ມູນ, ປຸ່ມລ້າງຂໍ້ມູນ
	ຫຼັງຈາກນັ້ນຂຽນ jQuery ເພື່ອຮັບຂໍ້ມູນຈາກຟອມ ແລ້ວສົ່ງຂໍ້ມູນໄປຫາຟາຍ ຊື່ວ່າ get.php
```html
	<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.8-dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-4.1.0.js"></script>
    <title>Document</title>
    <script >
        $(document).ready(function () {
            $('#sand').click(function (e) { 
                e.preventDefault();
                var a = $("#fname").val();
                var b = $("#lname").val();
                var c = $("input[id='gender']:checked").val();
                $.get("get.php",{
                    fname:a,
                    lname:b,
                    gender:c
                },
                function(output){
                    $("#show").html(output);
                }
            );
            });
            $('#reset').click(function (e) { 
                e.preventDefault();
                $("#fname").val("");
                $("#lname").val("");
                $("input[id='gender']:checked").val();
                $("#show").html("");
            });
        });
    </script>
    <style>
        *{
            font-family: 'noto sand lao looped';
            justify-content: center
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5">
                <div class="">
                    <div class="card">
                        <div class="card-header text-white bg-success">
                            <h2 align="center">ຟອມບັນທຶກຂໍ້ມູນ</h2>
                        </div>
                        <div class="card-body">
                            <form action="get.php" class="vertical" method="GET">
                                <div class="form-group">
                                    <label for="fname">ຊື່</label>
                                    <input type="text" name="fname" id="fname" placeholder="ປ້ອນຊື່" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">ນາມສະກຸນ</label>
                                    <input type="text" name="lname" id="lname" class="form-control" placeholder="ປ້ອນນາມສະກຸນ">
                                </div>
                                <div class="form-group">
                                    <label for="gender">ເລືອກເພດ</label>
                                    <div class="radio-inline">
                                        <input type="radio" id="gender"  name="gender" value=" ເພດຍິງ"> ຍິງ
                                        <input type="radio" id="gender" name="gender" value=" ເພດຊາຍ"> ຊາຍ
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="button" class="btn btn-success" id="sand"> ບັນທຶກຂໍ້ມູນ</button>

                                    <button type="button" class="btn btn-danger" id="reset"> ລ້າງຂໍ້ມູນ</button>

                                </div>
                            </form>
                        </div>
                        <div class="card-footer">
                            <div id="show"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </div>
</body>

</html>
```
	==>file get.php<==
```java
	<?php
	$fname = $_GET['fname'];
	$lname = $_GET['lname'];
	$gender = $_GET['gender'];
	echo "ຊື່$fname <br>";
	echo "ນາມສະກຸນ: $lname <br>";
	echo "ເພດ: $gender <br>";
	?>
```