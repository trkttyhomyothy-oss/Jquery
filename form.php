<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.8-dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-4.1.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>    
    <title>Document</title>
    <script >
        $(document).ready(function () {
            $('#sand').click(function (e) { 
                e.preventDefault();
                var a = $("#room_number").val();
                var b = $("#category_room").val();
                var c = $("#price_room").val();
                var d = $("input[id='status']:checked").val();
                if(!a){
                   Swal.fire({
                    icon:'error',
                    position: "top-end",
                    title:'ແຈ້ງເຕືອນ',
                    showConfirmButton: false,
                    timer: 1500,
                    text:'ກະລຸນາປ້ອນເບີຫ້ອງ',
                    width:300,
                   });
                   

                }else if(!b ){
                    Swal.fire({
                    icon:'warning',
                    title:'ແຈ້ງເຕືອນ',
                    text:'ກະລຸນາປ້ອນປະເພດຫ້ອງ'
                   });
                }
                else if(!c ){
                    Swal.fire({
                    icon:'warning',
                    title:'ແຈ້ງເຕືອນ',
                    text:'ກະລຸນາປ້ອນລາຄາຫ້ອງ'
                   });
                }else if(!d){
                    Swal.fire({
                    icon:'warning',
                    title:'ແຈ້ງເຕືອນ',
                    text:'ກະລຸນາປ້ອນສະຖານະຫ້ອງ'
                   });
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
            justify-content: center;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5">
                
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
                                    <select name="category_room" id="category_room" class="form-control">
                                        <option value="">ເລືອກປະເພດຫ້ອງ</option>  
                                        <option value="single">ຫ້ອງດຽວ</option>  
                                        <option value="double">ຫ້ອງຄູ່</option>
                                        <option value="vip">ຫ້ອງ VIP</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="price_room">ລາຄາຫ້ອງ</label>
                                    <select name="price_room" id="price_room" class="form-control">
                                        <option value="">ເລືອກລາຄາຫ້ອງ</option>  
                                        <option value="550000">550000</option>  
                                        <option value="1500000">1500000</option>
                                        <option value="3000000">3000000</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="status">ສະຖານະຫ້ອງ</label>
                                    <div class="radio-inline">
                                        <input type="radio" id="status"  name="status" value=" ວ່າງ"> ວ່າງ
                                        <input type="radio" id="status" name="status" value=" ບໍ່ວ່າງ"> ບໍ່ວ່າງ
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="button" class="btn btn-success" id="sand"> ບັນທຶກຂໍ້ມູນ</button>

                                    <button type="button" class="btn btn-danger" id="reset"> ລ້າງຂໍ້ມູນ</button>

                                </div>

                            </form>
                        </div>
                    
                    </div>
                <div class="col-md-4"></div>
            </div>
            <div class="col-md-5">
                        <div class="card">
                            <div class="card-header bg-success text-white">
                                <h2 align="center">ຂໍ້ມູນທີ່ບັນທຶກ</h2>
                            </div>
                            <div class="card-body">
                                <div id="show"></div>
                            </div>
                        </div>
                        </div>
        </div>
    </div>
</body>

</html>
```
