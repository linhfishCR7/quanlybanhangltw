<?php
// 1. Include file cấu hình kết nối đến database, khởi tạo kết nối $conn
include_once(__DIR__ . '/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css"> -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <!-- <script src="/vendor/bootstrap/js/jquery-3.5.1.slim.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.js"></script> -->
    <!-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossOrigin="anonymous" />
  <link rel="stylesheet" href="/quanlybanhangltw/frontend/css/text-gradient.css"> -->
  <link href="https://fonts.googleapis.com/css?family=Abel|Advent+Pro|Alegreya|Alice|Amaranth|Arapey|Aref+Ruqaa|Bentham|Bubbler+One|Cantata+One|Chathura|Convergence|Domine|Droid+Serif|Gentium+Basic|Lato|Libre+Baskerville|Lora|Marvel|Merriweather|Nunito|Old+Standard+TT|Open+Sans|Oranienbaum|Oswald|Prata|Quicksand|Rufina|Ruluko|Rum+Raisin|Saira|Saira+Condensed|Saira+Extra+Condensed|Sansita|Snippet|Text+Me+One|Titillium+Web|Vidaloka|Wire+One" rel="stylesheet">



<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="/quanlybanhangltw/frontend/css/productcard.css">


    <style>
        body {
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
        }
    </style>

</head>

<body>
    <?php include_once 'header.php'; ?>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
            <div id="container">

<!-- Start  Product details -->
<div class="product-details">

    <!--    Product Name -->
    <h1>Biru Putaran</h1>
    <!--        <span class="hint new">New</span> -->
    <!--        <span class="hint free-shipping">Free Shipping</span> -->
    <!--        the Product rating -->
    <span class="hint-star star">
        <i class="fa fa-star" aria-hidden="true"></i>
        <i class="fa fa-star" aria-hidden="true"></i>
        <i class="fa fa-star" aria-hidden="true"></i>
        <i class="fa fa-star-half-o" aria-hidden="true"></i>
        <i class="fa fa-star-o" aria-hidden="true"></i>
    </span>


    <!-- The most important information about the product -->
    <p class="information">" Especially good for container gardening, the Angelonia will keep blooming all summer even if old flowers are removed. Once tall enough to cut, bring them inside and you'll notice a light scent that some say is reminiscent of apples. "</p>



    <!--        Control -->
    <div class="control">

        <!-- Start Button buying -->
        <button class="btn">
            <!--        the Price -->
            <span class="price">49 $</span>
            <!--        shopping cart icon-->
            <span class="shopping-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
            <!--        Buy Now / ADD to Cart-->
            <span class="buy">Buy Now</span>
        </button>
        <!-- End Button buying -->

    </div>

</div>

<!--    End Product details   -->



<!--    Start product image & Information -->

<div class="product-image">

    <img src="https://sc01.alicdn.com/kf/HTB1Cic9HFXXXXbZXpXXq6xXFXXX3/200006212/HTB1Cic9HFXXXXbZXpXXq6xXFXXX3.jpg" alt="Omar Dsoky">

    <!--    product Information-->
    <div class="info">
        <h2>The Description</h2>
        <ul>
            <li><strong>Sun Needs: </strong>Full Sun</li>
            <li><strong>Soil Needs: </strong>Damp</li>
            <li><strong>Zones: </strong>9 - 11</li>
            <li><strong>Height: </strong>2 - 3 feet</li>
            <li><strong>Blooms in: </strong>Mid‑Summer - Mid‑Fall</li>
            <li><strong>Features: </strong>Tolerates heat</li>
        </ul>
    </div>
</div>
<!--  End product image  -->


</div>
            </div>
        </div>
    </div>


    <br>
    <?php include_once 'footer.php'; ?>

</body>

</html>