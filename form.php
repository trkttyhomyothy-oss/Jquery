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
                var a = $("#room_number").val();
                var b = $("#category_room").val();
                var c = $("#price_room").val();
                var d = $("input[id='status']:checked").val();
                if(a == ""){
                   alert("ກະລຸນາໃສ່ເບີຫ້ອງ");
                }else if(b == ""){
                   alert ("ກະລຸນາເລືອກປະເພດຫ້ອງ");
                }else if(c == ""){
                   alert ("ກະລຸນາເລືອກລາຄາຫ້ອງ");
                }else if(!d){
                   alert ("ກະລຸນາເລືອກສະຖານະຫ້ອງ");
                }else{
                $.get("get1.php",{
                    room_number:a,
                    category_room:b,
                    price_room:c,
                    status:d
                },
                function(output){
                    $("#show").html(output);

                }
            );
            }
            });
            $('#reset').click(function (e) { 
                e.preventDefault();
                $("#room_number").val();
                $("#category_room").val();
                $("#price_room").val();
                $("input[id='status']:checked").val();
                $("#show").html("");
            });
        });
    </script>
    <style>
        *{
            font-family: 'Orbitron';
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
                                    <label for="room_number">ເບີຫ້ອງ</label>
                                    <input type="text" name="room_number" id="room_number" placeholder="ເບີຫ້ອງ" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="category_room">ປະເພດຫ້ອງ</label>
                                    <select name="category_room" id="category_room">
                                        <option value="">ເລືອກປະເພດຫ້ອງ</option>  
                                        <option value="single">ຫ້ອງດຽວ</option>  
                                        <option value="double">ຫ້ອງຄູ່</option>
                                        <option value="vip">ຫ້ອງ VIP</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="price_room">ລາຄາຫ້ອງ</label>
                                    <select name="price_room" id="price_room">
                                        <option value="">ເລືອກລາຄາຫ້ອງ</option>  
                                        <option value="550,000">550,000</option>  
                                        <option value="1,500,000">1,500,000</option>
                                        <option value="3,000,000">3,000,000</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="status">ສະຖານະຫ້ອງ</label>
                                    <div class="radio-inline">
                                        <input type="radio" id="status"  name="status" value=" ວ່າງ"> ວ່າງ
                                        <input type="radio" id="status" name="status" value=" ບໍ່ວ່າງ"> ບໍ່ວ່າງ
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