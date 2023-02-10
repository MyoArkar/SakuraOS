<?php
error_reporting(1);

$i=$_REQUEST['img'];
$v=$_REQUEST['v'];

include("connection.php");

if($_POST['ord'])
{ 
$prodno=$_POST['prodno'];
$price=$_POST['price'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$add=$_POST['address'];
$ordno="ord ".rand(100,500);
if($db->query("INSERT into orders(product,price,name,phone,address,order_no) values('$prodno','$price','$name','$phone','$add','$ordno')"))
{
//echo "<script>location.href='ordersent.php?prod'</script>";
header("location:ordersent.php?order_no=$ordno");  }
else {$error= "user already exists";}}

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Sakura</title>
<!--
    
TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.php" class="logo">
                            <img src="assets/img/mainicon1.png">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="index.php" class="active"><-Goback</a></li>
                            
                            
                        </ul>   
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <section class="section" id="reservation">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Contact Us</h6>
                            <h2>Here You Can Make An Order</h2>
                        </div>
                        <p>You have to order one day before.<br>Orders close at 6pm.</p>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="phone">
                                    <i class="fa fa-phone"></i>
                                    <h4>Phone Numbers</h4>
                                    <span><a href="#">09975412941</a><br><a href="#">09975321164</a></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="message">
                                    <i class="fa fa-envelope"></i>
                                    <h4>Emails</h4>
                                    <span><a href="#">akak23@.com</a><br><a href="#">sakurar@company.com</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <form id="contact" action="" method="post">
                          <div class="row">
                           <div class="col-lg-12">
                                <h4>Order List</h4>
                            </div>
                            <?php
                                include("connection.php");
                                $sel=$db->query("SELECT * FROM $v where img='$i' ");
                                $mat=$sel->fetch();
                                
                                
                                ?>
                            <div class=" col-lg-12">
                                <label><h6>Product No </h6></label>
                                <fieldset>
                                <input name="prodno" type="text" id="prodno" value="<?php echo $mat->product;?>" readonly>
                                </fieldset>
                            </div>
                            <div class=" col-lg-12">
                                <label><h6>Price </h6></label>
                                <fieldset>
                                  <input name="price" type="text" id="price"  value="<?php echo $mat->price;?>" readonly>
                                </fieldset>
                            </div>
                            <div class=" col-lg-12">
                                <label><h6>Name </h6></label>
                                <fieldset>
                                  <input name="name" type="text" id="name"  value="" required>
                                </fieldset>
                            </div>
                            <div class=" col-lg-12">
                                <label><h6>PhoneNumber </h6></label>
                                <fieldset>
                                  <input name="phone" type="text" id="phone"  value="" required>
                                </fieldset>
                            </div>
                            <div class=" col-lg-12">
                                <label><h6>Address</h6></label>
                                <fieldset>
                                    <textarea id="address" name="address" rows="0" cols="0" required></textarea>
                                </fieldset>
                            </div>
                            <div class="odb" >
                            <input type="submit" name="ord" value="Order!" style="background: #fb5849;color: #fff;">
                            </div> 
                            <div class="odb">
                            <input type="submit" name="Cancle" value="Cancle" style="background: #fb5849;color: #fff;">
                            </div>   
                            
                            
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="logo">
                        <a href="index.php"><img src="assets/img/mainicon1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <p© Copyright Sakura company.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
  </body>
</html>