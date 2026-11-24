<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.8-dist/css/bootstrap.min.css">
    <title>Document</title>
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
                                    <label for="">ຊື່</label>
                                    <input type="text" id="fname" placeholder="ປ້ອນຊື່" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">ນາມສະກຸນ</label>
                                    <input type="text" id="lname" class="form-control" placeholder="ປ້ອນນາມສະກຸນ">
                                </div>
                                <div class="form-group">
                                    <label for="">ເລືອກເພດ</label>
                                    <div class="radio-inline">
                                        <input type="radio" name="gender" value=" ເພດຍິງ"> ຍິງ
                                        <input type="radio" name="gender" value=" ເພດຊາຍ"> ຊາຍ
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