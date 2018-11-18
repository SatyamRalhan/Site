<?php
include 'config.php';
include 'shopping.php';
include 'autocomplete.php';
?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>quickFox</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

        <!-- all css here -->
        <!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- animate css -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- jquery-ui.min css -->
        <link rel="stylesheet" href="css/jquery-ui.min.css">
        <!-- meanmenu css -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
        <!-- owl.carousel css -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <!-- font-awesome css -->
        <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
        <!-- ionicons.min css -->
        <link rel="stylesheet" href="css/ionicons.min.css">
        <!-- nivo-slider.css -->
        <link rel="stylesheet" href="css/nivo-slider.css">
        <!-- style css -->
        <link rel="stylesheet" href="style1.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--         <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
 -->

        <!-- responsive css -->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- modernizr css -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="js/search.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <!-- page-wraper-start -->
        <div id="page-wraper">
            <!-- header-area-start -->
            <header>
                <!-- header-top-area-start -->
                <div class="header-top-area" id="sticky-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
                                <!-- logo-area-start -->
                                <div class="logo-area">
                                    <a href="index.php"><img src="img/flash.png" alt="logo" /></a>
                                </div>
                                <!-- logo-area-end -->
                            </div>
                            <div class="col-lg-7 col-md-7 hidden-sm hidden-xs">
                                <!-- menu-area-start -->
                                <div class="menu-area">
                                    <nav>
                                        <ul>
                                            <li class="active"><a href="index.html">Home</a>
                                                
                                            </li>
                                            <li><a href="bakeries1.php">Shop</a>
                                                <ul class="mega-menu">
                                                    <li><a href="#">Categories</a>
                                                     <ul class="mega-menu mega-menu-2">
                                                    <li>
                                                        <ul class="sub-menu-2">
                                                            <li><a href="bakeries1.php">Bakeries</a></li>
                                                            <li><a href="groceries1.php">Groceries</a></li>
                                                            <li><a href="stationeries1.php">Stationaries</a></li>
                                                           
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <ul class="sub-menu-2">
                                                            <li><a href="homecare1.php">Home care</a></li>
                                                            <li><a href="personalcare1.php">Personal Care</a></li>
                                                            <li><a href="fruits1.php">Fruits & Veggies</a></li>
                                                           
                                                        </ul>
                                                    </li>
                                                </ul>
                                                    </li>
                                                    
                                        </ul>
                                    </nav>
                                </div>
                                <!-- menu-area-end -->
                            </div>
                            <div class="mobile-menu-area hidden-md hidden-lg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mobile-menu">
                                    <nav id="mobile-menu-active">
                                        <ul id="nav">
                                            <li><a href="index.php">Home</a>
                                                
                                            </li>
                                            <li><a href="shop.html">Men</a>
                                                <ul>
                                                    <li><a href="bakeries1.php">Bakeries</a></li>
                                                    <li><a href="groceries1.php">Groceries</a></li>
                                                    <li><a href="stationeries1.php">Stationeries</a></li>
                                                    <li><a href="homecare1.php">Homecare</a></li>
                                                    <li><a href="personalcare1.php">Personal Care</a></li>
                                                    <li><a href="fruits1.php">Fruits and Veggies </a></li>
                                                    
                                                </ul>
                                            </li>
                                            
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-lg-3 col-md-3 com-sm-6 col-xs-6">
                                <!-- header-right-area-start -->
                                <div class="header-right-area">
                                    <ul>
                                        <li><a href="#" title="Shops Nearby"><i class="fa fa-map-marker"></i></a>
                                            
                                        </li>
                                        <li><a href="#" id="show-search"><i class="fa fa-search"></i></a>
                                            <div class="search-content" id="hide-search">
                                                <span class="close" id="close-search">
                                                    <i class="ion-close"></i>
                                                </span>
                                                <div class="search-text">
                                                    <h1>Search</h1>
                                                    <form autocomplete="off" action="search.php" method="get" id="search">
                            <div class="autocomplete">    
                            <input type="text" name="Items" id="myInput" placeholder="Type your keyword...">

                            <button type="submit" class="btn"><img src="img/core-img/search.png" alt="Submit"></button>
                        </div>
                     
                    </form>
                                                </div>
                                            </div>
                                        </li>
                                        <li><a href="<?php if(isset($_SESSION["user"])){?>cart.php<?php } else{ ?>login.php<?php } ?> "><i class="fa fa-shopping-basket"></i></a>
                                            <span><?php if(isset($_SESSION["shopping_cart"])){echo count($_SESSION["shopping_cart"]);}else{echo "0";};?></span>
                                            <div class="mini-cart-sub">
                                                <div class="cart-product">
                                                    <div class="single-cart">
                                                        <?php   

                          if(isset($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?> 
                                                        <div class="cart-img">
                                                            <a href="#"><img src="<?php echo $values["image_source"];?>" alt="book" /></a>
                                                        </div>
                                                        <div class="cart-info">
                                                            <h5><a href="#" data-toggle="modal" data-target="#mymodal<?php echo $values["item_id"]; ?>" ><?php echo $values["item_name"] ?></a></h5>
                                                            <p>Quantity : <?php echo $values["quantity"]?> </p>
                                                        </div>
                                                    <?php }} ?>
                                                    </div>
                                                    
                                                </div>
                                                
                                                <div class="cart-bottom">
                                                    <a href="<?php if(isset($_SESSION["user"])){?>cart.php<?php } else{ ?>login.php<?php } ?> ">Edit Cart</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li><a href="#" id="show-cart" title="Account"><i class="fa fa-reorder"></i></a>
                                            <div class="shapping-area" id="hide-cart">
                                                
                                                <div class="single-shapping">
                                                    <span>My Account</span>
                                                    <?php if(isset($_SESSION["user"])){ ?>
                                                    <ul>
                                                        <li>Hello <?php echo $_SESSION["user"]; ?></li>
                                                        <li><a href="#">Log Out</a></li>
                                                    </ul>    
                                                    <?php } 
                                                    else{
                                                    ?>
                                                    <ul>
                                                        <li><a href="signupmy.php">Register</a></li>
                                                        <li><a href="loginmy.php">Login</a></li>
                                                    </ul>
                                                <?php } ?>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- header-right-area-end -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- header-top-area-end -->
                <!-- mobile-menu-area-start -->
                <div class="mobile-menu-area hidden-md hidden-lg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mobile-menu">
                                    <nav id="mobile-menu-active">
                                        <ul id="nav">
                                            <li><a href="index.html">Home</a>
                                                <!--  -->
                                            </li>
                               <li><a href="bakeries1.php">Shop</a>
                                                
                                                    <li><a href="#">Categories</a>
                                                        <ul class="sub-menu-2">
                                                            <li><a href="bakeries1.php">Bakeries</a></li>
                                                            <li><a href="stationeries1.php">Stationaries</a></li>
                                                            <li><a href="personalcare1.php">Personal Care</a></li>
                                                            <li><a href="homecare1.php">Home Care</a></li>
                                                            <li><a href="fruits1.php">Fruits & Veggies</a></li>
                                                            <li><a href="groceries1.php">Groceries</a></li>

                                                        </ul>
                                                    </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- mobile-menu-area-end -->
            </header>
            <!-- header-area-end -->
            <!-- slider-area-start -->
            <div class="slider-area">
                <div id="slider">
                    <img src="img/slider/a.jpg" alt="slider-img" title="#caption1" />
                    <img src="img/slider/b.jpg" alt="slider-img" title="#caption2" />
                    <img src="img/slider/c.jpg" alt="slider-img" title="#caption3" />
                </div>
                <div class="nivo-html-caption" id="caption1" >
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="slider-text">
                                    <h3 class="wow fadeInLeft" data-wow-delay=".3s">Personal & Home care</h3>
                                    <h2 class="wow fadeInRight" data-wow-delay=".5s">New arrivals!</h2>
                                    <h1 class="wow fadeInRight" data-wow-delay=".7s">amazing quickfox</h1>
                                    <h4 class="wow fadeInLeft" data-wow-delay="1.0s">We bring to you a new age of shopping and making a shopping list. <br />          The most interactive and innovative local shopping ever. </h4>
                                    
                                </div>
                            </div><!-- col -->
                        </div><!-- row -->
                    </div><!-- container -->
                </div>
                <div class="nivo-html-caption" id="caption2" >
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="slider-text">
                                      <h3 class="wow fadeInLeft" data-wow-delay=".3s">Daily needs</h3>
                                    <h2 class="wow fadeInRight" data-wow-delay=".5s">New arrivals!</h2>
                                    <h1 class="wow fadeInRight" data-wow-delay=".7s">amazing quickfox</h1>
                                    <h4 class="wow fadeInLeft" data-wow-delay="1.0s">We bring to you a new age of shopping and making a shopping list. <br />          The most interactive and innovative local shopping ever. </h4>

                                </div>
                            </div><!-- col -->
                        </div><!-- row -->
                    </div><!-- container -->
                </div>
                <div class="nivo-html-caption" id="caption3" >
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="slider-text">
                                      <h3 class="wow fadeInLeft" data-wow-delay=".3s">Luxuries</h3>
                                    <h2 class="wow fadeInRight black" data-wow-delay=".5s">New arrivals!</h2>
                                    <h1 class="wow fadeInRight black" data-wow-delay=".7s">amazing quickfox</h1>
                                    <h4 class="wow fadeInLeft" data-wow-delay="1.0s">We bring to you a new age of shopping and making a shopping list. <br />          The most interactive and innovative local shopping ever. </h4>

                                </div>
                            </div><!-- col -->
                        </div><!-- row -->
                    </div><!-- container -->
                </div>
            </div>
            <!-- slider-area-end -->
            <!-- founder-area-start -->
            <div class="founder-area ptb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="founder-description text-center">
                                <h3>Who Are We</h3>
                                <h1>Welcome To quickFox</h1>
                                <img src="img/banner/1.png" alt="banner" />
                                <p>We have put our best efforts to provide you with the most optimum path for your local shopping, saving your time and money and minimizing the distance you travel.  <br /> HAPPY SHOPPING :)</p>
                                <h4>Team quickFox <span></span></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- founder-area-end -->
            <!-- banner-area-start -->
            <div class="banner-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 mb-40-2">
                            <!-- single-banner-start -->
                            <div class="single-banner mb-20 mb-3">
                                <div class="banner-img">
                                    <a href="bakeries1.php"><img src="img/banner/1.jpg" alt="banner" /></a>
                                </div>
                                <div class="banner-content">
                                    <a href="bakeries1.php">Bakery</a>
                                </div>
                            </div>
                            <!-- single-banner-start -->
                            <!-- single-banner-end -->
                            <div class="single-banner mb-3">
                                <div class="banner-img">
                                    <a href="groceries1.php"><img src="img/banner/2.jpg" alt="banner" /></a>
                                </div>
                                <div class="banner-content">
                                    <a href="groceries1.php">Grocery</a>
                                </div>
                            </div>
                            <!-- single-banner-end -->
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 pull-right">
                            <!-- single-banner-start -->
                            <div class="single-banner mb-20">
                                <div class="banner-img">
                                    <a href="homecare1.php"><img src="img/banner/4.jpg" alt="banner" /></a>
                                </div>
                                <div class="banner-content">
                                    <a href="homecare1.php">Home care</a>
                                </div>
                            </div>
                            <!-- single-banner-end -->
                            <!-- single-banner-start -->
                            <div class="single-banner mb-3">
                                <div class="banner-img">
                                    <a href="fruits1.php"><img src="img/banner/5.jpg" alt="banner" /></a>
                                </div>
                                <div class="banner-content">
                                    <a href="fruits1.php">Friuts & Veggies</a>
                                </div>
                            </div>
                            <!-- single-banner-end -->
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-40-2">
                            <!-- single-banner-start -->
                            <div class="single-banner">
                                <div class="banner-img">
                                    <a href="stationeries1.php"><img src="img/banner/3.jpg" alt="banner" /></a>
                                </div>
                                <div class="banner-content">
                                    <a href="stationeries1.pho">Stationery</a>
                                </div>
                            </div>
                            <!-- single-banner-end -->
                        </div>
                    </div>
                </div>
           </div>
            <!-- banner-area-end -->
            <!-- feature-product-area-start -->
            <div class="feature-product-area ptb-80">   
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title mb-30 text-center">
                                <h2>Common Products</h2>
                                
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <!-- tab-menu-start -->
                            <div class="tab-menu mb-50 text-center">
                                <ul>
                                    <li class="active"><a href="#Clothing" data-toggle="tab">Chocolates</a></li>
                                    <li><a href="#Handbags"  data-toggle="tab">Biscuits</a></li>
                                    <li><a href="#Shoes" data-toggle="tab">Namkeens</a></li>
                                    <li><a href="#Accessories" data-toggle="tab">Personal care</a></li>
                                </ul>
                            </div>
                            <!-- tab-menu-end -->
                        </div>
                    </div>      
                    <!-- tab-area-start -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="Clothing">
                            <div class="row">
                                <div class="product-active">
                                        
                                    <?php
                $query="SELECT * FROM items WHERE categories='Bakeries' LIMIT 12,12" ;
                $result=mysqli_query($connect, $query);
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
            ?> 
                                
                                <div class="col-lg-12">
                                    
                                    <!-- product-wrapper-start -->
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="<?php echo $row["source"];?>" alt="product" class="primary"/>
                                                <img src="<?php echo $row["source"];?>" alt="product" class="secondary"/>
                                            </a>
                                            <div class="product-icon1">
                                                    <a href="shopping.php?hidden_id=<?php echo $row["id_"]; ?>&hidden_name=<?php echo $row["name"]; ?>&hidden_source=<?php echo $row["source"]; ?>&quantity=1&add_to_cart=" data-toggle="tooltip" title="Add to Cart"><img src="img/cart.jpg"></a>
                                                </div>
                                        </div>
                                        <div class="product-content pt-20">
                                            <div class="manufacture-product">
                                                <div class="rating">
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h2><a href="product-details.html"><?php echo $row["name"];?></a></h2>
                                        </div>
                                    </div>
                                    <!-- product-wrapper-end -->
                                </div>
<?php }} ?>  
                                    
                                    
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Handbags">
                            <div class="row">
                                <div class="product-active">
                            <?php
                $query="SELECT * FROM items LIMIT 36,12" ;
                $result=mysqli_query($connect, $query);
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
            ?> 
                                
                                <div class="col-lg-12">
                                    
                                    <!-- product-wrapper-start -->
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="<?php echo $row["source"];?>" alt="product" class="primary"/>
                                                <img src="<?php echo $row["source"];?>" alt="product" class="secondary"/>
                                            </a>
                                            <div class="product-icon1">
                                                    <a href="shopping.php?hidden_id=<?php echo $row["id_"]; ?>&hidden_name=<?php echo $row["name"]; ?>&hidden_source=<?php echo $row["source"]; ?>&quantity=1&add_to_cart=" data-toggle="tooltip" title="Add to Cart"><img src="img/cart.jpg"></a>
                                                </div>
                                        </div>
                                        <div class="product-content pt-20">
                                            <div class="manufacture-product">
                                                <div class="rating">
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h2><a href="product-details.html"><?php echo $row["name"];?></a></h2>
                                        </div>
                                    </div>
                                    <!-- product-wrapper-end -->
                                </div>
<?php }} ?>  
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Shoes">
                            <div class="row">
                                <div class="product-active">
                                     <?php
                $query="SELECT * FROM items LIMIT 0,12" ;
                $result=mysqli_query($connect, $query);
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
            ?> 
                                
                                <div class="col-lg-12">
                                    
                                    <!-- product-wrapper-start -->
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="<?php echo $row["source"];?>" alt="product" class="primary"/>
                                                <img src="<?php echo $row["source"];?>" alt="product" class="secondary"/>
                                            </a>
                                            <div class="product-icon1">
                                                    <a href="shopping.php?hidden_id=<?php echo $row["id_"]; ?>&hidden_name=<?php echo $row["name"]; ?>&hidden_source=<?php echo $row["source"]; ?>&quantity=1&add_to_cart=" data-toggle="tooltip" title="Add to Cart"><img src="img/cart.jpg"></a>
                                                </div>
                                        </div>
                                        <div class="product-content pt-20">
                                            <div class="manufacture-product">
                                                <div class="rating">
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h2><a href="product-details.html"><?php echo $row["name"];?></a></h2>
                                        </div>
                                    </div>
                                    <!-- product-wrapper-end -->
                                </div>
<?php }} ?>  
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Accessories">
                            <div class="row">
                                <div class="product-active"> <?php
                $query="SELECT * FROM items LIMIT 108,11" ;
                $result=mysqli_query($connect, $query);
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
            ?> 
                                
                                <div class="col-lg-12">
                                    
                                    <!-- product-wrapper-start -->
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="<?php echo $row["source"];?>" alt="product" class="primary"/>
                                                <img src="<?php echo $row["source"];?>" alt="product" class="secondary"/>
                                            </a>
                                            <div class="product-icon1">
                                                    <a href="shopping.php?hidden_id=<?php echo $row["id_"]; ?>&hidden_name=<?php echo $row["name"]; ?>&hidden_source=<?php echo $row["source"]; ?>&quantity=1&add_to_cart=" data-toggle="tooltip" title="Add to Cart"><img src="img/cart.jpg"></a>
                                                </div>
                                        </div>
                                        <div class="product-content pt-20">
                                            <div class="manufacture-product">
                                                <div class="rating">
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h2><a href="product-details.html"><?php echo $row["name"];?></a></h2>
                                        </div>
                                    </div>
                                    <!-- product-wrapper-end -->
                                </div>
<?php }} ?>  
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- tab-area-end -->
                </div>
           </div>
            <!-- feature-product-area-end -->
            <!-- testimonial-area-start -->
            <div class="testimonial-area bg ptb-80">
                <div class="container">
                    <div class="row">
                        <div class="testimonial-active">
                            <div class="col-lg-12">
                                <div class="single-testimonial text-center">
                                    <div class="testimonial-img">
                                        <a href="#"><img src="img/maggi.jpg" alt="man" /></a>
                                    </div>
                                    <!--<div class="testimonial-content">
                                        <p>This is Photoshops version  of Lorem Ipsum. Proin gravida nibh vel velit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. In molestie augue magna. Pellentesque felis lorem, pulvinar sed eros n..</p>
                                        <i class="fa fa-quote-right"></i>
                                        <h4>Rebecka Filson</h4>
                                    </div>-->
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="single-testimonial text-center">
                                    <div class="testimonial-img">
                                        <a href="#"><img src="img/chocolate.jpg" alt="man" /></a>
                                    </div>
                                    <div class="testimonial-content">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
            <!-- testimonial-area-end -->
            <!-- arrivals-area-start -->
            <div class="arrivals-area ptb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title mb-30 text-center">
                                <h2>Fruits and Veggies</h2>
                            </div>
                        </div>
                    </div>  
                   
                    <!-- tab-area-start -->
                    <div class="tab-content">
                        <div class="row">
                            
                            <div class="product-active">
                               <?php
                $query="SELECT * FROM items LIMIT 62,14" ;
                $result=mysqli_query($connect, $query);
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
            ?> 
                                
                                <div class="col-lg-12">
                                    
                                    <!-- product-wrapper-start -->
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="<?php echo $row["source"];?>" alt="product" class="primary"/>
                                                <img src="<?php echo $row["source"];?>" alt="product" class="secondary"/>
                                            </a>
                                            <div class="product-icon1">
                                                    <a href="shopping.php?hidden_id=<?php echo $row["id_"]; ?>&hidden_name=<?php echo $row["name"]; ?>&hidden_source=<?php echo $row["source"]; ?>&quantity=1&add_to_cart=" data-toggle="tooltip" title="Add to Cart"><img src="img/cart.jpg"></a>
                                                </div>
                                        </div>
                                        <div class="product-content pt-20">
                                            <div class="manufacture-product">
                                                <div class="rating">
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h2><a href="product-details.html"><?php echo $row["name"];?></a></h2>
                                        </div>
                                    </div>
                                    <!-- product-wrapper-end -->
                                </div>
<?php }} ?>  
                        </div>                                                              
                            </div>
                              
                    </div>
              
                    <!-- tab-area-end -->
                </div>
           </div>
            <!-- arrivals-area-end -->
            <!-- banner-area-start 
            <div class="banner-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            single-banner-start 
                            <div class="single-banner mb-3">
                                <div class="banner-img">
                                    <a href="#"><img src="img/banner/7.jpg" alt="banner" /></a>
                                </div>
                                <div class="banner-content-2">
                                    <h3>New Arrivals</h3>
                                    <h2>White Sneakers</h2>
                                    <h2>for Men’s</h2>
                                    <a href="#">Shop now</a>
                                </div>
                            </div>
                            single-banner-end 
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                             single-banner-start 
                            <div class="single-banner">
                                <div class="banner-img">
                                    <a href="#"><img src="img/banner/8.jpg" alt="banner" /></a>
                                </div>
                                <div class="banner-content-2">
                                    <h3>Products amazing!</h3>
                                    <h2>Short  T-Shirts</h2>
                                    <h2>for Women’s</h2>
                                    <a href="#">Shop now</a>
                                </div>
                            </div>
                          single-banner-end 
                        </div>
                    </div>
                </div>
           </div>
             banner-area-end -->
            <!-- banner-area-2-start 
            <div class="banner-area-2">
                <div class="container">
                    <div class="row">
                        <div class="br-bottom ptb-80">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                               single-banner-2-start 
                                <div class="single-banner-2 text-center mb-3">
                                    <div class="banner-icon">
                                        <a href="#"><img src="img/banner/2.png" alt="banner" /></a>
                                    </div>
                                    <div class="banner-text">
                                        <h2>Free Shipping Worldwide</h2>
                                        <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram</p>
                                    </div>
                                </div>
                               single-banner-2-end
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                 single-banner-2-start 
                                <div class="single-banner-2 text-center mb-3">
                                    <div class="banner-icon">
                                        <a href="#"><img src="img/banner/3.png" alt="banner" /></a>
                                    </div>
                                    <div class="banner-text">
                                        <h2>Money Back Guarantee</h2>
                                        <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram</p>
                                    </div>
                                </div>
                                 single-banner-2-end 
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                single-banner-2-start 
                                <div class="single-banner-2 text-center">
                                    <div class="banner-icon">
                                        <a href="#"><img src="img/banner/4.png" alt="banner" /></a>
                                    </div>
                                    <div class="banner-text">
                                        <h2>online support 24/7</h2>
                                        <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram</p>
                                    </div>
                                </div>
                                <!- single-banner-2-end 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!- banner-area-2-end -->
            <!-- blog-area-start 
            <div class="blog-area ptb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title mb-30 text-center">
                                <h2>From Our Blog</h2>
                                <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram anteposuerit litterarum formas.</p>
                            </div>
                        </div>
                        <div class="blog-active">
                            <div class="col-lg-12">
                                  single-blog-start -->
                                <!-- <div class="single-blog">
                                    <div class="blog-img">
                                        <a href="#"><img src="img/blog/1.jpg" alt="blog" /></a>
                                        <div class="date">
                                            Aug <span>09</span>
                                        </div>
                                    </div>
                                    <div class="blog-content pt-20">
                                        <h3><a href="blog-details.html">Aypi non habent claritatem  insitam.</a></h3>
                                        <span>HasTech</span>
                                        <p>Aypi non habent claritatem  insitam. Aypi non habent claritatem  insitam. Aypi non habent claritatem  insitam.Aypi non habent claritatem  insitam. Aypi non habent claritatem  insitam.</p>
                                        <a href="blog-details.html">Read more ...</a>
                                    </div>
                                </div>
                                 single-blog-end 
                            </div>
                            <div class="col-lg-12">
                                 single-blog-start 
                                <div class="single-blog">
                                    <div class="blog-img">
                                        <a href="#"><img src="img/blog/2.jpg" alt="blog" /></a>
                                        <div class="date">
                                            Aug <span>09</span>
                                        </div>
                                    </div>
                                    <div class="blog-content pt-20">
                                        <h3><a href="blog-details.html">Bypi non habent claritatem  insitam.</a></h3>
                                        <span>HasTech</span>
                                        <p>Aypi non habent claritatem  insitam. Aypi non habent claritatem  insitam. Aypi non habent claritatem  insitam.Aypi non habent claritatem  insitam. Aypi non habent claritatem  insitam.</p>
                                        <a href="blog-details.html">Read more ...</a>
                                    </div>
                                </div>
                                 single-blog-end 
                            </div>
                            <div class="col-lg-12">
                                 single-blog-start 
                                <div class="single-blog">
                                    <div class="blog-img">
                                        <a href="#"><img src="img/blog/3.jpg" alt="blog" /></a>
                                        <div class="date">
                                            Aug <span>09</span>
                                        </div>
                                    </div>
                                    <div class="blog-content pt-20">
                                        <h3><a href="blog-details.html">Cypi non habent claritatem  insitam.</a></h3>
                                        <span>HasTech</span>
                                        <p>Aypi non habent claritatem  insitam. Aypi non habent claritatem  insitam. Aypi non habent claritatem  insitam.Aypi non habent claritatem  insitam. Aypi non habent claritatem  insitam.</p>
                                        <a href="blog-details.html">Read more ...</a>
                                    </div>
                                </div>
                                 single-blog-end 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             blog-area-end -->
           
            <!-- footer-area-start -->
            <footer>
                <div class="footer-area ptb-40">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <!-- footer-logo-start -->
                                <div class="footer-logo mb-3">
                                    <a href="index.php"><img src="img/logo/2.png" alt="logo" /></a>
                                </div>
                                <!-- footer-logo-end -->
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <!-- copy-right-area-start -->
                                <div class="copy-right-area mb-3 text-center">
                                    <p>Copyright © 2018 <a href="#">Quickfox</a> . All Right Reserved</p>
                                </div>
                                <!-- copy-right-area-end -->
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <!-- footer-social-icon-start -->
                                <div class="footer-social-icon">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                                <!-- footer-social-icon-end -->
                            </div>
                        </div>
                    </div>
                </div>
           </footer>
            <!-- footer-area-end -->
            <!-- modal-area-start -->
            <div class="modal-area">
                <!-- single-modal-start -->
                <div class="modal fade" id="mymodal" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="modal-img">
                                    <div class="single-img">
                                        <img src="img/product/2.jpg" alt="hat" class="primary" />
                                    </div>
                                </div>
                                <div class="model-text">
                                    <h2><a href="#">Pyrolux Pyrostone</a> </h2>
                                    <div class="product-rating">
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star-o"></i></a>
                                    </div>
                                    <div class="price-rate">
                                        <span class="old-price"><del>$30.00</del></span>
                                        <span class="new-price">$28.00</span>
                                    </div>
                                    <div class="short-description mt-20">
                                        <p>Bacon ipsum dolor sit amet ut nostrud chuck, voluptate adipisicing veniam kielbasa fugiat ex spare ribs. Incididunt sint officia non cow, ut et. Cillum porchetta tongue occaecat laborum bacon aliquip fatback flank dolore short loin ball tip bresaola deserunt dolor. Shoulder fugiat ut in ut tail swine dolore, capicola ullamco beef occaecat meatball. Laboris turkey in et chuck deserunt ad incididunt do.</p>
                                    </div>
                                    <form action="#">
                                        <input type="number" value="1"/>
                                        <button type="submit">Add to cart</button>
                                    </form>
                                    <div class="product-meta">
                                        <span>
                                            Categories: 
                                            <a href="#">albums</a>,<a href="#">Music</a>
                                        </span>
                                        <span>
                                            Tags: 
                                            <a href="#">albums</a>,<a href="#">Music</a>
                                        </span>
                                    </div>
                                    <!-- social-icon-start -->
                                    <div class="social-icon mt-20">
                                        <ul>
                                            <li><a href="#" data-toggle="tooltip" title="Share on Facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" title="Share on Twitter"><i  class="fa fa-twitter"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" title="Email to a Friend"><i class="fa fa-envelope-o"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" title="Pin on Pinterest"><i class="fa fa-pinterest"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" title="Share on Google+"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                    <!-- social-icon-end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single-modal-end -->
            </div>
            <!-- modal-area-end -->
       </div>
      <!-- page-wraper-start -->
      
      
        <!-- all js here -->
        <!-- jquery latest version -->
        <script src="js/vendor/jquery-1.12.0.min.js"></script>
        <!-- bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
        <!-- owl.carousel js -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- meanmenu js -->
        <script src="js/jquery.meanmenu.js"></script>
        <!-- jquery-ui js -->
        <script src="js/jquery-ui.min.js"></script>
        <!-- wow js -->
        <script src="js/wow.min.js"></script>
        <!-- jquery.nivo.slider.js -->
        <script src="js/jquery.nivo.slider.js"></script>
        <!-- jquery.elevateZoom-3.0.8.min.js -->
        <script src="js/jquery.elevateZoom-3.0.8.min.js"></script>
        <!-- jquery.parallax-1.1.3.js -->
        <script src="js/jquery.parallax-1.1.3.js"></script>
        <!-- jquery.counterup.min.js -->
        <script src="js/jquery.counterup.min.js"></script>
        <!-- waypoints.min.js -->
        <script src="js/waypoints.min.js"></script>
        <!-- plugins js -->
        <script src="js/plugins.js"></script>
        <!-- main js -->
        <script src="js/main.js"></script>
    </body>
</html>

