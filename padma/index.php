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
<!-- ---header part end---- -->

<div class="logo container-fluid">
    <div class="row">
        <div class="col-sm-6 logo-left">
            <?php the_custom_logo();?>
        </div>
        <div class="col-sm-6 logo-right">R</div>
    </div>
</div>

<!-- ---logo part end---- -->
<!-- ---logo part end---- -->


<?php wp_footer();?>
</body>
</html>