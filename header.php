
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <?php echo wp_head()?>


</head>

<body>
<div id="mobile-menu-open" class="shadow-large">
    <i class="fa fa-bars" aria-hidden="true"></i>
</div>
<!-- End #mobile-menu-toggle -->
<header>
    <div id="mobile-menu-close">
        <span>Close</span> <i class="fa fa-times" aria-hidden="true"></i>
    </div>
    <ul id="menu" class="shadow">
        <?php wp_nav_menu([
                "theme_location"=>"primary",
                "menu"=>'primary'
        ])?>


    </ul>
</header>