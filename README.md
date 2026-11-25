# ບົດທີ 1 ຄວາມຮູ້ພື້ນຖານກ່ຽວກັບພາສາ jquery 
# 1, Jquery ແມ່ນຫຍັງ?
	jQuery ແມ່ນ java script library ເຊິ່ງ jQuery ໄດ້ລວມເອົາ Object ແລະ  Function ຕ່າງໆ ທີ່ຈຳເປັນມາເກັບໄວ້ໃນຮູບແບບ library ແລະ ຖືກອອກແບບມາເພື່ອເຮັດໃຫ້ການຮຽນ JavaScript ນັ້ນມີຄວາມສະດວກສະບາຍງ່າຍຍຂື້ນ
	- ຈຸດປະສົງຫຼັກຂອງການຮຽນ jQuery ແມ່ນເຮົາຈະນຳໃຊ້ໃນການຮັບຂໍ້ມູນຈາກຟອມແລ້ວສົ່ງໄປຫາ PHP ເພື່ອບັນທຶກຂໍ້ມູນຈາກຟອມ
# 2, ການດາວໂຫຼດ ແລະ ຕິດຕັ້ງ jQuery 
	ສາມາດໂຫຼດໄດ້ຈາກ www.jqurey.com
	+ ວິທີການຕິດຕັ້ງ jquery 
	ເຮົາຈະນຳເອົາຟາຍ jquery.js ເກັບໄວ້ໃນ folder ທີ່ເຮົາຕ້ອງການໃຊ້
	ດາວໂຫຼດ / ອອນລາຍ ຂອງ jQuery ==> this pc ==> xampp ==> htdocs ==> new folder ==> 
	Select folder vs code ==> ສ້າງhtml ==>
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
	ແມ່ນມີ2 ຮູບແບບ:
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
	jQuery ອອກແບບມາໃຫ້ເລືອກເອົາ HTML element ໝາຍເຖິງ tag ຂອງ html ແລະ ກຳນົດ action ໃຫ້ກັບຕົວເຮົາເລືອກນັ້ນ ເຊີ່ງມີຮູບແບບດັ່ງນີ້:
	$("select"),action()
	$ ເປັນເຄື່ອງໝາຍເຂົ້າເຖິງ jquery 
	Selector ຄືສວ່ນທີເລືອກ 
Action ຄືຕົວທີ່ກຳນົດໃຫ້ selector ທຳງານ.
	=======> 
```java
	- ການເລືອກ tag element 
	$("p")	ເລືອກແທັກທັງໝົດ
	- ການເລືອກ class
	$(".test") 	ເລືອກແທັກທັງໝົດທີ່ເປັນ class
	- ການເລືອກ ID 
	$("#test") 	ເລືອກແທັກທັງໝົດທີ່ເປັນ ID ຊື່ວ່າ test 
	- ການເລືອກໃນຮູບແບບຕ່າງໆ
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
	ຈົ່ງຂຽນ jQuery ເພື່ອເຊື່ອງຂໍ້ມູນໃນ tag  H1 ເຮັດແນວໃດ?
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
	- ຈົ່ງຂຽນ jquery ເມື່ອກົດໃສ່ປຸ່ມ ແລ້ວໄຫ້ຂໍ້ມູນຢູ່ tag h1 ຫາຍໄປ
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
	ຈົ່ງຂຽນ jquery ເມື່ອກົດປຸ່ມ ແລ້ວວ ໄຫ້ຂໍ້ມູນ tag p ຫາຍໄປ
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