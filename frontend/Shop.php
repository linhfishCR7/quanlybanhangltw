<?php
// 1. Include file cấu hình kết nối đến database, khởi tạo kết nối $conn
include_once(__DIR__ . '/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css"> -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <!-- <script src="/vendor/bootstrap/js/jquery-3.5.1.slim.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.js"></script> -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossOrigin="anonymous" />
    <link rel="stylesheet" href="/quanlybanhangltw/frontend/css/flip-card.css">
    <link rel="stylesheet" href="/quanlybanhangltw/frontend/css/Gird-Img2.css">
    <link rel="stylesheet" href="/quanlybanhangltw/frontend/css/text-gradient.css">
    <link rel="stylesheet" href="/quanlybanhangltw/frontend/css/button-gradient.css">
    <link rel="stylesheet" href="/quanlybanhangltw/frontend/css/floating-button.css">
    <link rel="stylesheet" href="/quanlybanhangltw/frontend/css/simple-tag.css">

    <script src="/quanlybanhangltw/frontend/js/simple-tag.js" type="text/javascript"></script>
    <style>
        hr {
            display: block;
            margin-top: 0.5em;
            margin-bottom: 0.5em;
            margin-left: auto;
            margin-right: auto;
            border-style: solid;
            border-width: 4px;
        }
    </style>




</head>

<body>
    <?php include_once 'header.php'; ?>
    <br>

    <div class="tab">
        <div class="container">
            <div class="row">
                <div class="col-md-4">

                </div>
                <div class="col-md-8">
               
                    <h1 class=" text-gradient">HOA HỒNG</h1>
                    <hr>
                    <div class="row">
                        <?php
                        $sql = "SELECT nhh.*,hh.* FROM `nhomhanghoa` nhh JOIN `hanghoa` hh ON hh.MaNhom = nhh.MaNhom WHERE nhh.MaNhom='NDH01' ";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        ?>
                            <div class="col-md-3 col-sm-12 col-lg-3">
                                <div class="flip-card">
                                    <div class="flip-card-inner">

                                        <div class="flip-card-front">
                                            <img src="<?php echo $row['Hinh']; ?>" alt="Avatar" style="width:190px;height:250px;">
                                        </div>
                                        <div class="flip-card-back">
                                            <h1><?php echo $row['TenHH']; ?></h1>
                                            <p><?php echo $row['MaNhom']; ?></p>
                                            <p><?php echo $row['Gia']; ?></p>
                                            <button class="floating-button"><a href="/quanlybanhangltw/frontend/Shop.php?MSHH=<?php echo $row['MSHH']; ?>"><i class="fa fa-shopping-cart"></i></a></button>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        <?php
                        } ?>

                    </div><br><br>

                    <h1 class=" text-gradient">HOA LY LY</h1>
                    <hr>
                    <div class="row">
                        <?php
                        $sql = "SELECT nhh.*,hh.* FROM `nhomhanghoa` nhh JOIN `hanghoa` hh ON hh.MaNhom = nhh.MaNhom WHERE nhh.MaNhom='NDH02' ";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        ?>
                            <div class="col-md-3 col-sm-12 col-lg-3">
                                <div class="flip-card">
                                    <div class="flip-card-inner">

                                        <div class="flip-card-front">
                                            <img src="<?php echo $row['Hinh']; ?>" alt="Avatar" style="width:190px;height:250px;">
                                        </div>
                                        <div class="flip-card-back">
                                            <h1><?php echo $row['TenHH']; ?></h1>
                                            <p><?php echo $row['MaNhom']; ?></p>
                                            <p><?php echo $row['Gia']; ?></p>
                                            <button class="floating-button"><a href="/quanlybanhangltw/frontend/Shop.php?MSHH=<?php echo $row['MSHH']; ?>"><i class="fa fa-shopping-cart"></i></a></button>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        <?php
                        } ?>

                    </div><br><br>
                    <h1 class=" text-gradient">HOA CÚC</h1>
                    <hr>
                    <div class="row">
                        <?php
                        $sql = "SELECT nhh.*,hh.* FROM `nhomhanghoa` nhh JOIN `hanghoa` hh ON hh.MaNhom = nhh.MaNhom WHERE nhh.MaNhom='NDH03' ";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        ?>
                            <div class="col-md-3 col-sm-12 col-lg-3">
                                <div class="flip-card">
                                    <div class="flip-card-inner">

                                        <div class="flip-card-front">
                                            <img src="<?php echo $row['Hinh']; ?>" alt="Avatar" style="width:190px;height:250px;">
                                        </div>
                                        <div class="flip-card-back">
                                            <h1><?php echo $row['TenHH']; ?></h1>
                                            <p><?php echo $row['MaNhom']; ?></p>
                                            <p><?php echo $row['Gia']; ?></p>
                                            <button class="floating-button"><a href="/quanlybanhangltw/frontend/Shop.php?MSHH=<?php echo $row['MSHH']; ?>"><i class="fa fa-shopping-cart"></i></a></button>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        <?php
                        } ?>

                    </div><br><br>
                    <h1 class=" text-gradient">HOA SEN</h1>
                    <hr>
                    <div class="row">
                        <?php
                        $sql = "SELECT nhh.*,hh.* FROM `nhomhanghoa` nhh JOIN `hanghoa` hh ON hh.MaNhom = nhh.MaNhom WHERE nhh.MaNhom='NDH04' ";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        ?>
                            <div class="col-md-3 col-sm-12 col-lg-3">
                                <div class="flip-card">
                                    <div class="flip-card-inner">

                                        <div class="flip-card-front">
                                            <img src="<?php echo $row['Hinh']; ?>" alt="Avatar" style="width:190px;height:250px;">
                                        </div>
                                        <div class="flip-card-back">
                                            <h1><?php echo $row['TenHH']; ?></h1>
                                            <p><?php echo $row['MaNhom']; ?></p>
                                            <p><?php echo $row['Gia']; ?></p>
                                            <button class="floating-button"><a href="/quanlybanhangltw/frontend/Shop.php?MSHH=<?php echo $row['MSHH']; ?>"><i class="fa fa-shopping-cart"></i></a></button>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        <?php
                        } ?>

                    </div><br><br>
                    <h1 class=" text-gradient">HOA HƯỚNG DƯƠNG</h1>
                    <hr>
                    <div class="row">
                        <?php
                        $sql = "SELECT nhh.*,hh.* FROM `nhomhanghoa` nhh JOIN `hanghoa` hh ON hh.MaNhom = nhh.MaNhom WHERE nhh.MaNhom='NDH05' ";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        ?>
                            <div class="col-md-3 col-sm-12 col-lg-3">
                                <div class="flip-card">
                                    <div class="flip-card-inner">

                                        <div class="flip-card-front">
                                            <img src="<?php echo $row['Hinh']; ?>" alt="Avatar" style="width:190px;height:250px;">
                                        </div>
                                        <div class="flip-card-back">
                                            <h1><?php echo $row['TenHH']; ?></h1>
                                            <p><?php echo $row['MaNhom']; ?></p>
                                            <p><?php echo $row['Gia']; ?></p>
                                            <button class="floating-button"><a href="/quanlybanhangltw/frontend/Shop.php?MSHH=<?php echo $row['MSHH']; ?>"><i class="fa fa-shopping-cart"></i></a></button>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        <?php
                        } ?>

                    </div><br><br>
                    <h1 class=" text-gradient">HOA KHÁC</h1>
                    <hr>
                    <div class="row">
                        <?php
                        $sql = "SELECT nhh.*,hh.* FROM `nhomhanghoa` nhh JOIN `hanghoa` hh ON hh.MaNhom = nhh.MaNhom WHERE nhh.MaNhom='NDH06' ";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        ?>
                            <div class="col-md-3 col-sm-12 col-lg-3">
                                <div class="flip-card">
                                    <div class="flip-card-inner">

                                        <div class="flip-card-front">
                                            <img src="<?php echo $row['Hinh']; ?>" alt="Avatar" style="width:190px;height:250px;">
                                        </div>
                                        <div class="flip-card-back">
                                            <h1><?php echo $row['TenHH']; ?></h1>
                                            <p><?php echo $row['MaNhom']; ?></p>
                                            <p><?php echo $row['Gia']; ?></p>
                                            <button class="floating-button"><a href="/quanlybanhangltw/frontend/Shop.php?MSHH=<?php echo $row['MSHH']; ?>"><i class="fa fa-shopping-cart"></i></a></button>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        <?php
                        } ?>

                    </div><br><br>

                </div>
            </div>



            <?php include_once 'footer.php'; ?>

</body>

</html>
