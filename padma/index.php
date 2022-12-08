<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head();?>
</head>
<body>
    
<!-- ---header part start--- -->
<header class="carousel-fluid slider">
    <div class="row">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php
            $x=0;
            while(have_posts()){ the_post();
            $x++;
            ?>
            <div class="carousel-item <?= ($x==1)?'active': '' ?> ">
                <?php the_post_thumbnail(); ?>
            <!-- <img src="..." class="d-block w-100" alt="..."> -->
            </div>
            <?php } ?>

            <!-- <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
            </div> -->
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
    </div>
</header>
<!-- ---header part end---- -->



<!-- ---logo part end---- -->
<section class="logo container-fluid pt-2">
    <div class="row">
        <div class="col-sm-6 logo-left">
            <?php the_custom_logo();?>
        </div>
        <div class="col-sm-6 logo-right text-end">
            <?php dynamic_sidebar('bdlogo');?>
        </div>
    </div>
</section>
<!-- ---logo part end---- -->


<!-- ---menu part start---- -->
<section class="container-fluid">
    <div class="container navbar-expand menu-1">
        <?php wp_nav_menu( array(
            'theme_location'       => 'TM',
            'menu_class'           => 'menu navbar-nav',
        ) )?>
    </div>
</section>
<!-- ---menu part end---- -->



<!-- ---hero part start---- -->
<section class="container hero text-center">
    <div class="row hero-top">
        <?php dynamic_sidebar('herotop');?>
    </div>

    <div class="row hero-bottom">
        <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
            <?php dynamic_sidebar('herobottom'); ?>
                
                <div class="card-body">
                    <?php dynamic_sidebar('herobody');?>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
            <?php dynamic_sidebar('herobottom2'); ?>
                <!-- <img src="..." class="card-img-top" alt="..."> -->
                <div class="card-body">
                    <?php dynamic_sidebar('herobody2');?>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
            <?php dynamic_sidebar('herobottom3'); ?>
                <!-- <img src="..." class="card-img-top" alt="..."> -->
                <div class="card-body">
                    <?php dynamic_sidebar('herobody3');?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ---hero part end---- -->



<!-- photo part start -->
<section class="container photo mt-5 text-center">
    <div class="row photo_top">
        <div class="col-sm-4">
            <!-- --------------------------------- -->
            <img src="<?= get_template_directory_uri()?>./assets/images/green3.png" alt="">
        </div>
        <div class="col-sm-4">
            <h4>Recent Photos</h4>
            <p>Lorem ipsum dolor sit amet</p>
        </div>
        <div class="col-sm-4">
        <img src="<?= get_template_directory_uri()?>./assets/images/green2.png" alt="">
        </div>
    </div>


    <div class="row photo_bottom mt-5">
        <div class="col-sm-3">
            <!-- 1 start -->
            <div class="card" style="width: 18rem;">
                <?php dynamic_sidebar('p-img'); ?>

                <div class="card-body">
                    <?php dynamic_sidebar('p_body_1');?>
                </div>
            </div>
        </div>
            <!-- 1 end -->

        <div class="col-sm-3">2</div>
        <div class="col-sm-3">3</div>
        <div class="col-sm-3">4</div>
    </div>
</section>
<!-- photo part end -->


<!-- news part start -->
<div class="container news mt-5">
    <div class="row news_top text-center">
            <div class="col-sm-4">
                <!-- --------------------------------- -->
                <img src="<?= get_template_directory_uri()?>./assets/images/green3.png" alt="">
            </div>
            <div class="col-sm-4">
                <h4>Recent Photos</h4>
                <p>Lorem ipsum dolor sit amet</p>
            </div>
            <div class="col-sm-4">
            <img src="<?= get_template_directory_uri()?>./assets/images/green2.png" alt="">
        </div>
    </div>
    <div class="row news_bottom"></div>
</div>

<!--  -->
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php
            $x=0;
            while(have_posts()){ the_post();
            $x++;
            ?>
            <div class="carousel-item <?= ($x==1)?'active': '' ?> ">
                <?php the_title(); ?>
                
            </div>
            <?php } ?>

        </div>
        
    </div>


<!-- news part end -->





<?php wp_footer();?>
</body>
</html>