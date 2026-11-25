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
	<script src="https://code.jquery.com/jquery-4.1.0.js"></script> // ແບບອອນລາຍ
	<script src="jquery.js"></script> // ແບບບໍ່ໃຊ້ອິນເຕີເນັດ

# ໂຄງສ້າງຂອງ ພາສາ jQuery 
	
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
# 3, ຮູບແບບຂອງການຂຽນ jQuery 
	ແມ່ນມີ2 ຮູບແບບ:
	# ຮູບແບບທີ 1
		<script>
		$(document),ready(function){
		// ຂຽນ script ລະຫວ່າງນີ້
		});
		</script>
	# ຮູບແບບທີ 2
	<script>
	$(function(){
	// ຂຽນ script ລະຫວ່າງນີ້
	}
	</script>
