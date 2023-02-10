<?php
session_start();
if($_SESSION['sid']=="")
{
header('location:index.php');
}
else{
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
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="home.php" class="logo">
                            <img src="assets/images/mainicon1.png">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="home.php">Home</a></li>
                            
                            <li class="scroll-to-section"><a href="insert.php">insert</a></li>
                            
                        <!-- 
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
                            <li class="scroll-to-section submenu"><a href="#">Products</a>
                                <ul>
                                    <li><a href="kfood.php">Korean Foods</a></li>
                                    <li><a href="jfood.php">Japanese Foods</a></li>
                                    <li><a href="drink.php">Drinks</a></li>
                                    
                                </ul>
                            </li>
                            <li class="scroll-to-section"><a href="vieworder.php">OrderList</a></li>
                            <li class="scroll-to-section"><a href="viewfeedback.php">Feedback</a></li>
                            <li class="scroll-to-section"><a href="logout.php">LogOut</a></li>
                            
                            
                        </ul>        
                        
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Menu Area Starts ***** -->
    <section  id="offers">
        <div >
            
            
                        
                        
                            <section class='tabs-content'style='display: block;'>
                                <article >
                                
                                           
                                                <div >
                                                    <div class="section-heading" align='center'>
                                                        <h6>Menu</h6>
                                                        <h2>Korean Foodies</h2>
                                                    </div>
                                                <?php
                                                    error_reporting(1);
                                                    include("connection.php");
                                                    $sel=$db->query("SELECT * FROM kfood ");
                                                    echo"<form method='post'><table  align='center' >";
                                                    $n=0;
                                                        while($arr=$sel->fetch())
                                                    {
                                                    $img=$arr->img;
                                                    $price=$arr->price;
                                                    $prd=$arr->product;
                                                    if($n%1==0)
                                                    {
                                                        if($n==0){
                                                            echo "<tr>";
                                                        }else{
                                                            echo"</tr><tr>";
                                                        }
                                                    
                                                    }
                                                            echo "
                                                            <td width='500px' height='95px'>
                                                            <div class='col-lg-12'>
                                                            <div class='tab-item'>
                                                                <img src='image/$img' alt='' style='margin-bottom:25px; margin-right:40px;'>
                                                                <h4>$prd</h4>
                                                                
                                                                <div class='price'>
                                                                <h6>$price</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                            </td>";
                                                            
                                                            $n++;

                                                            }
                                                                echo "</tr></table>
                                                                </form>";
                                                    ?>
                                                </div>
                                            
                                        </div>
                                        
                                    
                                </article>  
                                  
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Chefs Area Ends ***** --> 
    
    <!-- ***** Footer Start ***** -->
    <footer >
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
                        <a href="home.php"><img src="assets/images/mainicon1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <p>© Copyright Sakura company.</p>
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
<?php }  ?>