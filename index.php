
<!-- header -->
<?php include('./header.php') ?>  

<!-- navbar -->
<?php include('./nav.php') ?>  





<div style="min-height: 3vh;" class="blank"></div>

<!-- slide -->
<div class="container-fluid" style="padding:0px; background-color: white;">
    <div id="demo" class="carousel slide" data-ride="carousel" data-interval="1400">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="#tech1"><img src="../img & video/s2.jpg" style="min-height: 60vh; max-height: 60vh; min-width: 100%;" alt="Los Angeles" class="img-fluid"></a>
                    <!-- <div class="carousel-caption">
                        <h3 style="color: black; font-family: 'Times New Roman', Times, serif;">Engineer-Corner</h3>
                    </div> -->
                </div>
                <div class="carousel-item">
                    <a href="#M1"><img src="../img & video/s3.jpg" style="min-height: 60vh; max-height: 60vh; min-width: 100%;" alt="Los Angeles" class="img-fluid"></a>
                    <!-- <div class="carousel-caption">
                        <h3 style="color: black; font-family: 'Times New Roman', Times, serif;">Medical-Corner</h3>
                    </div> -->
                </div>
                <div class="carousel-item">
                <a href="#T1"><img src="../img & video/s1.jpg" style="min-height: 60vh; max-height: 60vh; min-width: 100%;" alt="Los Angeles" class="img-fluid"></a>
                    <!-- <div class="carousel-caption">
                        <h3 style="color: black; font-family: 'Times New Roman', Times, serif;">Trending/Stories</h3>
                    </div> -->
                </div>
                <a href="#demo" class="carousel-control-prev" data-slide="prev">
                    <span style="background-color: black;" class="carousel-control-prev-icon"></span>
                </a>
                <a href="#demo" class="carousel-control-next" data-slide="next">
                    <span style="background-color: black;" class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
</div>
    <!-- slide-end -->
<div class="container-fluid blank"></div>



<!-- trending -->
<?php include('./trend.php') ?>

<!-- engineer-corner -->
<?php include_once('./E1.php') ?>

<!-- medical-corner -->
<?php include_once('./M1.php') ?>


<!-- footer -->
<?php include_once('./footer.php') ?>