
<!DOCTYPE html>
<html>

<head>

    <title>Credit Card Fraud Detection - Protection Bootstrap Responsive Web Template | Home :: w3layouts</title>
    <!--meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="HOLIDAY TRIP Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
         Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
    />

    <!--//meta tags ends here-->
    <!-- bootstrap style sheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- fontawesome -->
    <link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
    <!-- Popup css (for Video Popup) -->
    <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />

    <link rel="stylesheet " href="css/chocolat.css " type="text/css" media="all" />

    <link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
    <!--stylesheets-->
    <link href="css/style.css" rel='stylesheet' type='text/css' media="all">

    <link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">


</head>

<body>
<!-- nav -->
<header>
    <?php include_once ('application/views/includes/header2.php');?>
</header>

<div class="main-about">
    <div class="container">
        <div class="text-h3 text-center">
            <h3>Product View</h3>
        </div>
        <div class="row" id="login">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <form action="#" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label  class="col-form-label">Search  by Category</label>
                            <input type="text" class="form-control" id="inputtext" placeholder="ProductName" required="">
                        </div>
                        <div class="form-group col-md-12">
                            <label  class="col-form-label">Search  by SubCategory</label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Category" required="">
                        </div>

                        <input type="submit" class="form-button" value="SEARCH">
                    </div>
                </form>
            </div>
        </div>

        <?php
        foreach($products as $product) {
            ?>

            <div class="col-lg-3 col-sm-6 p-0" style="float: left">
                <div class="card product-men p-3">
                    <div class="men-thumb-item">
                        <img src="images/image/<?php echo $product['image'];?>" alt="img" class="card-img-top">
                    </div>
                    <!-- card body -->
                    <div class="card-body  py-3 px-2">
                        <input type="hidden" id="abc" value="<?php echo $product['id']?>">
                        <h3 class="card-title text-capitalize"><?php echo $product['subcategory']?></h3>
                        <h6 class="card-title text-capitalize"><?php echo $product['productname']?></h6>
<!--                        <h5 class="card-title text-capitalize">--><?php //echo $product['category']?><!--</h5>-->

                        <h6 class="card-title text-capitalize"><?php echo $product['description']?></h6>

                        <h6>Available Quantity:<?php echo $product['quantity']?></h6>



                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold"><?php echo $product['cost']?></p>
                        </div>
                    </div>
                    <!-- card footer -->
                    <div class="card-footer d-flex justify-content-end">

                            <button type="button" class="hub-cart phub-cart btn" onclick="s(<?php echo $product['id']?>)">
                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                            </button>

                        </form>
                    </div>
                </div>
            </div>


            <?php
        }
?>
    </div>
</div>



<!-- js -->
<script src="js/jquery.min.v3.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- //js -->

<!-- pop-up(for video popup)-->
<script src="js/jquery.magnific-popup.js"></script>

<script>
    $(document).ready(function () {
        $('.popup-with-zoom-anim').magnificPopup({
            type: 'inline',
            fixedContentPos: false,
            fixedBgPos: true,
            overflowY: 'auto',
            closeBtnInside: true,
            preloader: false,
            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });

    });
</script>
<!-- //pop-up-box (syllabus section video)-->

<script src="js/easy-responsive-tabs.js"></script>
<script>
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            activate: function (event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#tabInfo');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });
        $('#verticalTab').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true
        });
    });
</script>




<script>
//
//    $(document).ready(function () {
//        alert("hai");
//
//    });

function s($c) {
    var id = $c;
    // var uid=$uid;
    // alert(id);
    $.ajax({
        type: 'post',
        url: 'cartdetail/cartdetail',
        data: {'datas': id},
        success: function (data) {
            alert(data);
        }
    });
}



</script>


<!-- stats -->
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.countup.js"></script>
<script>
    $('.counter').countUp();
</script>
<!-- //stats -->

<!-- clients js file-->
<script src="js/jquery.wmuSlider.js"></script>
<script>
    $('.example1').wmuSlider();
</script>
<!-- //clients js file -->
<!-- js for portfolio  -->
<script src="js/jquery.chocolat.js "></script>
<!--light-box-files -->
<script>
    $(function () {
        $('.portfolio-grids a').Chocolat();
    });
</script>
<!-- /js for portfolio -->


<!-- start-smooth-scrolling -->
<script src="js/move-top.js"></script>
<script src="js/easing.js"></script>
<script>
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();

            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
</script>
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
<script>
    $(document).ready(function () {
        /*
        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
        };
        */

        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<script src="js/SmoothScroll.min.js"></script>

<!-- //smooth-scrolling-of-move-up -->

</body>

</html>