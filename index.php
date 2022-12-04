<!DOCTYPE html>
<html <?php language_attributes();?> >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangladesh</title>
    
    
    <?php wp_head();?>
</head>
<body>
    <!-- Top Bar Part Start -->
    <header class="cont">
        <div class="row topbar">
            <div class="col-lg-6 top_left">
                <p>বাংলাদেশ জাতীয় তথ্য বাতায়ন</p>
            </div>
            <div class="col-lg-6 top_right d-flex justify-content-end">
                <p>১৯ কার্তিক, ১৪২৯</p>
                <a href="#">English</a>
            </div>
        </div>
    </header>
    <!-- Top Bar Part End -->
    <!-- logo part start -->
    <section class="cont">
        <div class="row logo">
            <div class="col-lg-5 logo_left">
                <a href="#">
                  <?php the_custom_logo(); ?>
                  <!-- <img src="<?= get_template_directory_uri()?>./assets/images/haeder/logo_bn.png" alt="logo"> -->
                </a>
            </div>
            <div class="col-lg-5 logo_search">
                <input type="text" placeholder="খুঁজুন ">
                <button>অনুসন্ধান </button>
            </div>
            <div class="col-lg-2 logo_right d-flex justify-content-end">
                <div class="logo1">
                    <a href="#"><img src="<?= get_template_directory_uri()?>./assets/images/haeder/a2i-logo-footer.png"></a>
                </div>
                <div class="logo2">
                    <p>সাথে থাকুন</p>
                    <a href="#"><img src="<?= get_template_directory_uri()?>./assets/images/haeder/facebook-icon.png" alt=""></a>
                    <a href="#"><img src="<?= get_template_directory_uri()?>./assets/images/haeder/youtube-icon.png" alt=""></a>
                    <a href="#"><img src="<?= get_template_directory_uri()?>./assets/images/haeder/twitter-blue-icon.png" alt=""></a>
                    <a href="#"><img src="<?= get_template_directory_uri()?>./assets/images/haeder/gplus-icon.png" alt=""></a>
                </div>
            </div>
        </div>
    </section>
    <!-- logo part end -->
    <!-- Menu Part Start -->
    <section class="cont">
        <div class="row">
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                  
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <?php wp_nav_menu([
                    'theme_location'=>'TM',
                    'menu_class'=>'navbar nav menu_top'
                  ]); ?>  
                  
                    
                  </div>
                </div>
              </nav>
        </div>
    </section>
    <!-- Menu Part End -->
    <!-- Hero part start -->
    <section class="cont">
        <div class="row hero">
            <div class="col-lg-8 hero_main">
                <div class="banner">
                    <!-- banner start -->
                    <a href="">
                      <?php dynamic_sidebar('mainbanner'); ?>
                    </a>
                    <!-- <img src="<?= get_template_directory_uri()?>./assets/images/padmabanner.jpg" class="d-block w-100" alt=""> -->
                    <!-- banner end -->
                </div>
                <div class="slider">
                    <!-- slider part -->
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <?php
                        $qry = new WP_Query([
                          'post_type'=>'post',
                          'category_name'=>'slider'
                        ]);
                        ?>
                    <div class="carousel-inner">
                        <?php
                        $x=0;
                        while($qry->have_posts()){$qry->the_post();
                        $x++;
                        ?>
                          <div class="carousel-item <?=($x==1)?'active':''?> ">
                            <?php the_post_thumbnail();?>
                            
                          </div>
                          <?php }?>

                        </div>
                        
                      </div>
                    
                </div>
                <!-- slider end -->
                <!-- Tab part star -->
                <div class="tab">
                  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Home</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false" disabled>Disabled</button>
                    </li>
                  </ul>
                  <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                      
                    <?php
                        $qrye = new wp_Query([
                          'post_type'=>'post',
                          'catagory_name'=>'জনপ্রিয় সেবা',
                          'order'=>'ASC'
                      ])
                      ?>
                      <div class="row">
                      

                        <?php while(have_posts()){the_post();?>
                        <div class="col-lg-2 tab_1">
                          <a href="#">
                          <?php the_post_thumbnail();?>  
                          <!-- <img src="<?= get_template_directory_uri()?>./assets/images/tab/agriculture.png" alt=""> -->
                        </a>
                          <!-- <a href="#"> <?php the_title();?> কৃষি</a> -->
                        </div>
                        <?php }?>

                        <!-- <div class="col-lg-2 tab_1">
                          <a href="#"><img src="<?= get_template_directory_uri()?>./assets/images/tab/call_center.png" alt=""></a>
                          <a href="#">কল সেন্টার</a>
                        </div>
                        <div class="col-lg-2 tab_1">
                          <a href="#"><img src="<?= get_template_directory_uri()?>./assets/images/tab/agriculture.png" alt=""></a>
                          <a href="#">মৎস্য ও প্রাণী</a>
                        </div>
                        <div class="col-lg-2 tab_1">
                          <a href="#"><img src="<?= get_template_directory_uri()?>./assets/images/tab/mobile_service.png" alt=""></a>
                          <a href="#">মোবাইল সেবা</a>
                        </div>
                        <div class="col-lg-2 tab_1">
                          <a href="#"><img src="<?= get_template_directory_uri()?>./assets/images/tab/helpdesk.png" alt=""></a>
                          <a href="#">হেল্পডেস্ক</a>
                        </div>
                        <div class="col-lg-2 tab_1">
                          <a href="#"><img src="<?= get_template_directory_uri()?>./assets/images/tab/agriculture.png" alt=""></a>
                          <a href="#">কৃষি</a>
                        </div>
                        <div class="col-lg-2 tab_1">
                          <a href="#"><img src="<?= get_template_directory_uri()?>./assets/images/tab/agriculture.png" alt=""></a>
                          <a href="#">কৃষি</a>
                        </div>
                        <div class="col-lg-2 tab_1">
                          <a href="#"><img src="<?= get_template_directory_uri()?>./assets/images/tab/agriculture.png" alt=""></a>
                          <a href="#">কৃষি</a>
                        </div> -->
                      </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                      <div class="row">
                        <div class="col-lg-2 tab_1">
                          <a href="#"><img src="<?= get_template_directory_uri()?>./assets/images/tab/agriculture.png" alt=""></a>
                          <a href="#">কৃষি-B</a>
                        </div>
                        <div class="col-lg-2 tab_1">
                          <a href="#"><img src="<?= get_template_directory_uri()?>./assets/images/tab/call_center.png" alt=""></a>
                          <a href="#">কল সেন্টার</a>
                        </div>
                        <div class="col-lg-2 tab_1">
                          <a href="#"><img src="<?= get_template_directory_uri()?>./assets/images/tab/agriculture.png" alt=""></a>
                          <a href="#">মৎস্য ও প্রাণী</a>
                        </div>
                        <div class="col-lg-2 tab_1">
                          <a href="#"><img src="<?= get_template_directory_uri()?>./assets/images/tab/mobile_service.png" alt=""></a>
                          <a href="#">মোবাইল সেবা</a>
                        </div>
                        <div class="col-lg-2 tab_1">
                          <a href="#"><img src="<?= get_template_directory_uri()?>./assets/images/tab/helpdesk.png" alt=""></a>
                          <a href="#">হেল্পডেস্ক</a>
                        </div>
                        <div class="col-lg-2 tab_1">
                          <a href="#"><img src="<?= get_template_directory_uri()?>./assets/images/tab/agriculture.png" alt=""></a>
                          <a href="#">কৃষি</a>
                        </div>
                        <div class="col-lg-2 tab_1">
                          <a href="#"><img src="<?= get_template_directory_uri()?>./assets/images/tab/agriculture.png" alt=""></a>
                          <a href="#">কৃষি</a>
                        </div>
                        <div class="col-lg-2 tab_1">
                          <a href="#"><img src="<?= get_template_directory_uri()?>./assets/images/tab/agriculture.png" alt=""></a>
                          <a href="#">কৃষি</a>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                      <div class="row">
                        <div class="col-lg-2 tab_1">
                          <a href="#"><img src="<?= get_template_directory_uri()?>./assets/images/tab/agriculture.png" alt=""></a>
                          <a href="#">কৃষি-C</a>
                        </div>
                        <div class="col-lg-2 tab_1">
                          <a href="#"><img src="<?= get_template_directory_uri()?>./assets/images/tab/call_center.png" alt=""></a>
                          <a href="#">কল সেন্টার</a>
                        </div>
                        <div class="col-lg-2 tab_1">
                          <a href="#"><img src="<?= get_template_directory_uri()?>./assets/images/tab/agriculture.png" alt=""></a>
                          <a href="#">মৎস্য ও প্রাণী</a>
                        </div>
                        <div class="col-lg-2 tab_1">
                          <a href="#"><img src="<?= get_template_directory_uri()?>./assets/images/tab/mobile_service.png" alt=""></a>
                          <a href="#">মোবাইল সেবা</a>
                        </div>
                        <div class="col-lg-2 tab_1">
                          <a href="#"><img src="<?= get_template_directory_uri()?>./assets/images/tab/helpdesk.png" alt=""></a>
                          <a href="#">হেল্পডেস্ক</a>
                        </div>
                        <div class="col-lg-2 tab_1">
                          <a href="#"><img src="<?= get_template_directory_uri()?>./assets/images/tab/agriculture.png" alt=""></a>
                          <a href="#">কৃষি</a>
                        </div>
                        <div class="col-lg-2 tab_1">
                          <a href="#"><img src="<?= get_template_directory_uri()?>./assets/images/tab/agriculture.png" alt=""></a>
                          <a href="#">কৃষি</a>
                        </div>
                        <div class="col-lg-2 tab_1">
                          <a href="#"><img src="<?= get_template_directory_uri()?>./assets/images/tab/agriculture.png" alt=""></a>
                          <a href="#">কৃষি</a>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">D</div>
                  </div>
                </div>
                <!-- Tab part end -->
                <!-- notice start -->
                <div class="notice">
                  <h4>উদ্যোগ</h4>
                  <ul>
                    <li><a href="#">
                      <?php dynamic_sidebar('list'); ?>
                      
                    </a> </li>
                    <li><a href="#">বাংলাদেশ সরকারের সপ্তম পঞ্চবার্ষিক পরিকল্পনা (২০১৬-২০২০)</a> </li>
                    <li><a href="#">বাংলাদেশ সরকারের সপ্তম পঞ্চবার্ষিক পরিকল্পনা (২০১৬-২০২০)</a> </li>
                    <li><a href="#">বাংলাদেশ সরকারের সপ্তম পঞ্চবার্ষিক পরিকল্পনা (২০১৬-২০২০)</a> </li>
                    <li><a href="#">বাংলাদেশ সরকারের সপ্তম পঞ্চবার্ষিক পরিকল্পনা (২০১৬-২০২০)</a> </li>
                  </ul>
                  
                </div>
                <div class="row">
                  <div class="btn"><button><a href="">সকল</a></button></div>
                </div>
                <!-- notice end -->
                <div class="others"></div>
            </div>
            <div class="col-lg-4 hero_side">
              <div class="side_img">

                <a href="#">
                  <?php dynamic_sidebar('sideimg'); ?>
                  <!-- <img src="<?= get_template_directory_uri()?>./assets/images/sidebar/Bangladesh-Directory.jpg" class="d-block w-100 mb-2" alt=""> -->
                </a>
                <!-- <a href="#"><img src="<?= get_template_directory_uri()?>./assets/images/sidebar/Bangladesh-Directory.jpg" class="d-block w-100 mb-2" alt=""></a>
                <a href="#"><img src="<?= get_template_directory_uri()?>./assets/images/sidebar/Bangladesh-Directory.jpg" class="d-block w-100 mb-2" alt=""></a>
                <a href="#"><img src="<?= get_template_directory_uri()?>./assets/images/sidebar/Bangladesh-Directory.jpg" class="d-block w-100 mb-2" alt=""></a>
                <a href="#"><img src="<?= get_template_directory_uri()?>./assets/images/sidebar/Bangladesh-Directory.jpg" class="d-block w-100 mb-2" alt=""></a>
                <a href="#"><img src="<?= get_template_directory_uri()?>./assets/images/sidebar/Bangladesh-Directory.jpg" class="d-block w-100 mb-2" alt=""></a>
                <a href="#"><img src="<?= get_template_directory_uri()?>./assets/images/sidebar/Bangladesh-Directory.jpg" class="d-block w-100 mb-2" alt=""></a> -->
              </div>
              <h5>সকল বাতায়ন</h5>
              <form action="">
                <select name="" id="">
                  <option value="">ওয়েবসাইট বাছাই করুন</option>
                  <option value="">মন্ত্রণালয়</option>
                  <option value="">অধিদপ্তর </option>
                  <option value="">ঢাকা বিভাগ</option>
                  <option value="">চট্টগ্রাম বিভাগ</option>
                </select>
                <button>Search</button>
              </form>
              <div class="side_video">
                <h5>মুজিব১০০ আ্যাপ</h5>
                <?php dynamic_sidebar('sidevideo'); ?>
                <!-- <iframe width="315" height="200" src="<?= get_template_directory_uri()?>https://www.youtube.com/embed/4Om3kZJL-qU" title="MUJIB100 APP | Speeches, Quotes, Books & More | Get Inspired Everyday" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                <h5>মাস্ক পরুন সেবা নিন</h5>
                <a href="#"><img src="<?= get_template_directory_uri()?>./assets/images/sidebar/mask-bd-portal (1).jpg" class="d-block w-100" alt=""></a>
                <h6>ডেঙ্গু প্রতিরোধে করণীয়</h6>
                <a href="#"><img src="<?= get_template_directory_uri()?>./assets/images/sidebar/dengu.jpg" class="d-block w-100" alt=""></a>
              </div>
            </div>
        </div>
    </section>
    <!-- Hero part end -->
    <!-- footer part start -->
    <footer class="cont">
      <div class="row footer_top mt-5">
        <img src="<?= get_template_directory_uri()?>./assets/images/footer/download.png" alt="">
      </div>
      <div class="row footer_bottom">
        <div class="col-lg-7 fb_left">
          <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
              
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <!-- <?php wp_nav_menu([
                'theme_location'=>'FM',
                'menu_class'=>'navbar-nav menu_bottom'
              ]); ?>   -->
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">গোপনীয়তার নীতিমালা</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">ব্যবহারের শর্তাবলি</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">সার্বিক সহযোগিতায়</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">সাইট ম্যাপ</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">সচরাচর জিজ্ঞাসা</a>
                  </li>
                 
                  
                </ul>
                
              </div>
            </div>
          </nav>
          <p>সাইটটি শেষ হাল-নাগাদ করা হয়েছে: ২০২২-১০-৩০ ০৮:৩৫:০১</p>
        </div>
        <div class="col-lg-5 fb_right text-end">
          <p>পরিকল্পনা ও বাস্তবায়নে: এটুআই, মন্ত্রিপরিষদ বিভাগ, বিসিসি, বেসিস, ডিওআইসিটি</p>
          <img src="<?= get_template_directory_uri()?>./assets/images/footer/np-logo-set.png" alt="">
        </div>
      </div>
    </footer>
    <!-- footer part end -->

    <?php wp_footer();?>
    

    <div class="cont">
      <div class="row">
        <div class="col-sm-4 br">
        <?php
        $Mark=50;
        if($Mark>=40){
          print '<h3>Pass</h3>';
        }
        else{
          print '<h3>Fail</h3>';
        }
        ?>
        </div>
        
        <div class="col-sm-4 br">
          <?php
            $Mark = 30;
            echo ($Mark>=40)?'<h3>Pass</h3>':'<h3>Fail</h3>';
          ?>
        </div>
        <div class="col-sm-4 br">
        <?php
          $num = 10;
          while($num<=100){
            echo ($num%2==0)? $num.'<br>':'';
              
              $num = $num+5;
            }
        ?>
          
        </div>
      </div>
    </div>
    
</body>
</html>