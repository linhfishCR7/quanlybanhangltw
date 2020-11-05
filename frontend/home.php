<br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="tab">
                <h1 class=" text-gradient">HOA MỚI NHẤT</h1>
                <br>
            </div>
        </div>
    </div>
</div><br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="tab">
                <div class="grid-image">
                <?php
							$sql="SELECT * FROM `hanghoa` hh JOIN `nhomhanghoa` nhh ON hh.MaNhom = nhh.MaNhom";
							$result=mysqli_query($conn,$sql);
							while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
							{
						?>
                    <img loading="lazy" src="<?php echo $row['Hinh']; ?>" alt="" class="image-item" />   
                <?php
                }?>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <button class="gradient-button"><a href="/quanlybanhangltw/frontend/Shop.php">ĐẶT HÀNG</a></button>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="tab">
                <h1 class=" text-gradient">HOA PHỔ BIẾN</h1>
                <br>
            </div>
        </div>
    </div>
</div><br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="tab">
                <div class="grid-image1">
                <?php
							$sql="SELECT * FROM `hanghoa` hh JOIN `nhomhanghoa` nhh ON hh.MaNhom = nhh.MaNhom ORDER BY MSHH DESC";
							$result=mysqli_query($conn,$sql);
							while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
							{
						?>
                    <img loading="lazy" src="<?php echo $row['Hinh']; ?>" alt="" class="image-item1" />   
                <?php
                }?>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="container">
                <div class="row">

                    <div class="col-md-12">
                        <div class="tab">

                            <h1 class=" text-gradient">HOA PHỔ BIẾN</h1>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
            <div class="tab">
            <!-- <form action="/quanlybanhangltw/frontend/home.php" method="GET"> -->

                <div class="tab-list">
                    <div class="tab-item active" data-tab="1">Popular</div>
                    <div class="tab-item" data-tab="2">Bali</div>
                    <div class="tab-item" data-tab="3">New York</div>
                </div>
                <!-- </form> -->

                <div class="tab-wrapper">
                    <div class="tab-content active" data-tab="1" >
                        <div class="post">
                        <?php
							$sql="SELECT * FROM `hanghoa` hh JOIN `nhomhanghoa` nhh ON hh.MaNhom = nhh.MaNhom WHERE MSHH ='HH001' ";
							$result=mysqli_query($conn,$sql);
							while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
							{
						?>
                            <img src="<?php echo $row['Hinh']; ?>" alt="outer space" class="post-image" />
                            <div class="post-info">
                                <span class="post-category"><?php echo $row['TenHH']; ?></span>
                                <h3 class="post-title"><?php echo $row['Gia']; ?> USA</h3>
                                <button class="gradient-button"><a href="/quanlybanhangltw/frontend/Shop.php"><i class="fa fa-shopping-cart"></i></a></button>
                            </div>
                            <?php
                }?>
                        </div>
                    </div>
                    <div class="tab-content" data-tab="2">
                        <div class="post">
                        <?php
							$sql="SELECT * FROM `hanghoa` hh JOIN `nhomhanghoa` nhh ON hh.MaNhom = nhh.MaNhom WHERE MSHH ='HH002' ";
							$result=mysqli_query($conn,$sql);
							while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
							{
						?>
                            <img src="<?php echo $row['Hinh']; ?>" alt="outer space" class="post-image" />
                            <div class="post-info">
                                <span class="post-category"><?php echo $row['TenHH']; ?></span>
                                <h3 class="post-title"><?php echo $row['Gia']; ?> USA</h3>
                                <button class="gradient-button"><a href="/quanlybanhangltw/frontend/Shop.php"><i class="fa fa-shopping-cart"></i></a></button>
                            </div>
                            <?php
                }?>
                        </div>
                    </div>
                    <div class="tab-content" data-tab="3">
                        <div class="post">
                        <?php
							$sql="SELECT * FROM `hanghoa` hh JOIN `nhomhanghoa` nhh ON hh.MaNhom = nhh.MaNhom WHERE MSHH ='HH003' ";
							$result=mysqli_query($conn,$sql);
							while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
							{
						?>
                            <img src="<?php echo $row['Hinh']; ?>" alt="outer space" class="post-image" />
                            <div class="post-info">
                                <span class="post-category"><?php echo $row['TenHH']; ?></span>
                                <h3 class="post-title"><?php echo $row['Gia']; ?> USA</h3>
                                <button class="gradient-button"><a href="/quanlybanhangltw/frontend/Shop.php"><i class="fa fa-shopping-cart"></i></a></button>
                            </div>
                            <?php
                }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="container">
                <div class="row">

                    <div class="col-md-12">
                        <div class="tab">

                            <h1 class=" text-gradient">HOA PHỔ BIẾN</h1>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
            <div class="tab">
                <div class="tab-list">
                    <div class="tab-item active" data-tab="4">Popular</div>
                    <div class="tab-item" data-tab="5">Bali</div>
                    <div class="tab-item" data-tab="6">New York</div>
                </div>
                <div class="tab-wrapper">
                    <div class="tab-content active" data-tab="4">
                        <div class="post">
                        <?php
							$sql="SELECT * FROM `hanghoa` hh JOIN `nhomhanghoa` nhh ON hh.MaNhom = nhh.MaNhom WHERE MSHH ='HH004' ";
							$result=mysqli_query($conn,$sql);
							while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
							{
						?>
                            <img src="<?php echo $row['Hinh']; ?>" alt="outer space" class="post-image" />
                            <div class="post-info">
                                <span class="post-category"><?php echo $row['TenHH']; ?></span>
                                <h3 class="post-title"><?php echo $row['Gia']; ?> USA</h3>
                                <button class="gradient-button"><a href="/quanlybanhangltw/frontend/Shop.php"><i class="fa fa-shopping-cart"></i></a></button>
                            </div>
                            <?php
                }?>
                        </div>
                    </div>
                    <div class="tab-content" data-tab="5">
                        <div class="post">
                        <?php
							$sql="SELECT * FROM `hanghoa` hh JOIN `nhomhanghoa` nhh ON hh.MaNhom = nhh.MaNhom WHERE MSHH ='HH005' ";
							$result=mysqli_query($conn,$sql);
							while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
							{
						?>
                            <img src="<?php echo $row['Hinh']; ?>" alt="outer space" class="post-image" />
                            <div class="post-info">
                                <span class="post-category"><?php echo $row['TenHH']; ?></span>
                                <h3 class="post-title"><?php echo $row['Gia']; ?> USA</h3>
                                <button class="gradient-button"><a href="/quanlybanhangltw/frontend/Shop.php"><i class="fa fa-shopping-cart"></i></a></button>
                            </div>
                            <?php
                }?>
                        </div>
                    </div>
                    <div class="tab-content" data-tab="6">
                        <div class="post">
                        <?php
							$sql="SELECT * FROM `hanghoa` hh JOIN `nhomhanghoa` nhh ON hh.MaNhom = nhh.MaNhom WHERE MSHH ='HH006' ";
							$result=mysqli_query($conn,$sql);
							while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
							{
						?>
                            <img src="<?php echo $row['Hinh']; ?>" alt="outer space" class="post-image" />
                            <div class="post-info">
                                <span class="post-category"><?php echo $row['TenHH']; ?></span>
                                <h3 class="post-title"><?php echo $row['Gia']; ?> USA</h3>
                                <button class="gradient-button"><a href="/quanlybanhangltw/frontend/Shop.php"><i class="fa fa-shopping-cart"></i></a></button>
                            </div>
                            <?php
                }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
