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

        .simple-card {
            background-color: white;
            border-radius: 2rem;
            padding: 1.5rem;
            box-shadow: var(--shadow);
        }

        .simple-card-image {
            position: relative;
            height: 0;
            padding-bottom: 56.25%;
        }

        .simple-card-image>img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 1rem;
        }

        .simple-card-content {
            padding: 3rem 1rem;
        }

        .simple-card-title {
            font-weight: 500;
            font-size: 2rem;
            line-height: 1.6;
            margin-bottom: 1.5rem;
            color: #2b2b2b;
        }

        .simple-card-desc {
            color: #c7cbdc;
            font-weight: 300;
            line-height: 1.6;
            font-size: 1.4rem;
            margin-bottom: 3rem;
        }

        .simple-card-line {
            width: 30%;
            height: 2px;
            margin-left: auto;
            background-color: var(--primary);
        }

        p {
            width: 100%;
            white-space: pre-wrap;
            overflow: hidden;
            text-overflow: ellipsis;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            display: -webkit-box;
        }
    </style>




</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light" style="font-size: 20px;">
                    <a class="navbar-brand" href="/quanlybanhangltw/frontend/index.php"><img src="/quanlybanhangltw/frontend/img/logo1.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon" style=" font-size: 20px;"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="/quanlybanhangltw/frontend/index.php"> <i class="fa fa-fw fa-home"></i> Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-fw fa-envelope"></i> Contact</a>
                            </li>
                            <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li> -->
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><i class="fa fa-fw fa-user"></i> Login</a>
                            </li>
                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="font-size: 20px;">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="font-size: 20px;"><i class="fa fa-fw fa-search"></i> Search</button>
                        </form>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <br><br>

    <div class="tab">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action active " style=" font-size: 5rem;  font-weight: bold;">
                            DANH MỤC
                        </a>
                        <?php
                        $sql = "SELECT * FROM `nhomhanghoa` ";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        ?>
                            <a href="#" class="list-group-item list-group-item-action text-gradient"><?php echo $row['TenNhom']; ?></a>

                        <?php
                        } ?>
                    </div>
                </div>
                <div class="col-md-8">
                    <form action="/quanlybanhangltw/frontend/ChiTietHoa.php?MSHH=<?php echo $row['MSHH']; ?>" method="post">
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
                                                <p>Loại: <?php echo $row['TenNhom']; ?></p>
                                                <p>Giá: <?php echo $row['Gia']; ?>$</p>
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
                                                <p>Loại: <?php echo $row['TenNhom']; ?></p>
                                                <p>Giá: <?php echo $row['Gia']; ?>$</p>
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
                                                <p>Loại: <?php echo $row['TenNhom']; ?></p>
                                                <p>Giá: <?php echo $row['Gia']; ?>$</p>
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
                                                <p>Loại: <?php echo $row['TenNhom']; ?></p>
                                                <p>Giá: <?php echo $row['Gia']; ?>$</p>
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
                                                <p>Loại: <?php echo $row['TenNhom']; ?></p>
                                                <p>Giá: <?php echo $row['Gia']; ?>$</p>
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
                                                <p>Loại: <?php echo $row['TenNhom']; ?></p>
                                                <p>Giá: <?php echo $row['Gia']; ?>$</p>
                                                <button class="floating-button"><a href="/quanlybanhangltw/frontend/Shop.php?MSHH=<?php echo $row['MSHH']; ?>"><i class="fa fa-shopping-cart"></i></a></button>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            <?php
                            } ?>

                        </div><br><br>
                    </form>
                </div>
            </div>
            <div class="tab">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-9">
                            <h1 class=" text-gradient">CÁC HOA TƯƠNG TỰ</h1>
                        </div>
                    </div>
                </div>
            </div><br>
            <div class="container">
                <div class="row">
                    <?php
                    $sql = "SELECT nhh.*,hh.* FROM `nhomhanghoa` nhh JOIN `hanghoa` hh ON hh.MaNhom = nhh.MaNhom  ORDER BY hh.MSHH DESC LIMIT 3";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                    ?>
                        <div class="col-md-4">
                            <div class="simple-card">
                                <div class="simple-card-image">
                                    <img src="<?php echo $row['Hinh']; ?>" alt="" />
                                </div>
                                <div class="simple-card-content">
                                    <a href="#">
                                        <h3 class="simple-card-title"><?php echo $row['TenHH']; ?></h3>
                                    </a>
                                    <p class="simple-card-desc"><?php echo $row['MoTaHH']; ?></p>
                                    <div class="simple-card-line"></div>
                                </div>
                            </div>
                        </div>
                    <?php
                    } ?>
                </div>
            </div><br><br>


            <?php include_once 'footer.php'; ?>

</body>

</html>