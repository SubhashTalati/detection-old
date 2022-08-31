
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

    <link rel="stylesheet" href="css/chocolat.css " type="text/css" media="all" />

    <link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
    <!--stylesheets-->
    <link href="css/style.css" rel='stylesheet' type='text/css' media="all">

    <link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">


</head>
<style>
    table, th, td {
        border: 2px solid black;
        border-collapse: collapse;
        padding: 10px;
    }

    th{
        background-color: #f65a5b;
    }
</style>

<body>
<!-- nav -->
<header>
    <?php include_once ('application/views/includes/header.php');?>
</header>

<div class="main-about">
    <div class="container">
        <div class="text-h3 text-center">
            <h3>Product Detail</h3>
        </div>
        <div class="row" id="login">
            <div class="col-md-3"></div>
            <div class="col-md-6">
               <table>
                   <tr>

                       <th>ProductName</th>
                       <th>Category</th>
                       <th>SubCategory</th>
                       <th>Cost</th>
                       <th>Quantity</th>
                       <th>Action</th>
                       <th>Action</th>

                   </tr>
                   <?php
                   foreach($quans as $quan) {
                   ?>
                   <tr>
                       <td id="product"><?php echo $quan['productname']?></td>
                       <td><?php echo $quan['category']?></td>
                       <td><?php echo $quan['subcategory']?></td>
                       <td id="cost"><?php echo $quan['cost']?></td>
                       <td><?php echo $quan['quantity']?></td>
                       <td onclick="edi(<?php echo $quan['cost']?>,'<?php echo $quan['productname']?>')">Edit</td>
                       <td onclick="delet('<?php echo $quan['productname']?>')">Delete</td>
                   </tr>
                       <?php
                   }
                   ?>
               </table>



                <div class="col-md-3"></div>
                <div class="col-md-12">

                    <form action="#" method="post">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label  class="col-form-label">Cost</label>
                                <input type="text" class="form-control" id="costing" required="">
                            </div>
                            <div class="form-group col-md-12">
                                <label  class="col-form-label">Productname</label>
                                <input type="text" class="form-control" id="pname" required="">
                            </div>

                            <input type="submit" class="form-button" value="update" onclick="upd()">
                        </div>
                    </form>
                </div>
            </div>
        </div>





    </div>
</div>


<footer>
    <div class="row border-top mt-4 pt-lg-4 pt-3 text-lg-left text-center">
			
              <p class="col-lg-8 copy-right-grids mt-lg-1"><center>© 2022 Credit Card Fraud Detection | Design by chitra</center>
                    <a href="https://w3layouts.com/" target="_blank"></a>
                </p>
                <div class="col-lg-4 agileinfo_social_icons mt-lg-0 mt-3">
                    <ul class="agileits_social_list">
                        <li>
                            <a href="#" class="w3_agile_facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="agile_twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="w3_agile_dribble">
                                <i class="fab fa-dribbble"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="w3_agile_google">
                                <i class="fab fa-google-plus-g"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

</footer>

<!-- //footer -->

<!-- js -->
<script src="js/jquery.min.v3.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- //js -->

<!-- pop-up(for video popup)-->
<script src="js/jquery.magnific-popup.js"></script>



<script>
    function edi($cost,$productname){
        // product=document.getElementById('product').value;
        // cost=document.getElementById('cost').value;

        // alert($cost);
        $('#costing').val($cost);
        $('#pname').val($productname);

    }
</script>

<script>

    function delet($productname) {
        // alert("hai");
        productname=$productname;

        // alert(id);
        $.ajax({
            url:'upload/delet',
            type:'POST',
            data:{productname:productname},
            success:function (data) {
                alert(data);
            }
        })
    }



</script>


<script>

    function upd() {
        // alert("gms");
        coss=document.getElementById('costing').value;
        productname=document.getElementById('pname').value;
        // alert (productname);
        $.ajax({
            url:'upload/upd',
            type:'POST',
            data:{coss:coss,productname:productname},
            success:function (data) {
                alert(data);
            }
        })

    }





</script>





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