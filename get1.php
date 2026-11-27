<?php
// $room_number = $_GET['room_number'];
// $category_room = $_GET['category_room'];
// $price_room = $_GET['price_room'];
// $status = $_GET['status'];
// echo "ເບີຫ້ອງ: $room_number <br>";
// echo "ປະເພດຫ້ອງ: $category_room <br>";
// echo "ລາຄາຫ້ອງ: $price_room <br>";
// echo "ສະຖານະຫ້ອງ: $status <br>";
$room_number = htmlspecialchars($_GET['room_number']);
$category_room = htmlspecialchars($_GET['category_room']);
$price_room = htmlspecialchars($_GET['price_room']);
$status = htmlspecialchars($_GET['status']);
echo "ເບີຫ້ອງ: $room_number <br>";
echo "ປະເພດຫ້ອງ: $category_room <br>";
echo "ລາຄາຫ້ອງ: ".number_format($price_room) . " ກີບ <br>";
echo "ສະຖານະຫ້ອງ: $status <br>";

?>