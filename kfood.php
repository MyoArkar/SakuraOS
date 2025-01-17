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
                        <a href="index.php" class="logo">
                            <img src="assets/img/mainicon1.png" >
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
                                                    $v='kfood';
                                                    if($n%2==0)
                                                    {
                                                        if($n==0){
                                                            echo "<tr>";
                                                        }else{
                                                            echo"</tr><tr>";
                                                        }
                                                    
                                                    }
                                                            echo "
                                                            <td width='450px' height='100px'>
                                                            <div class='col-lg-12'>
                                                            <div class='tab-item'>
                                                                <img src='admin/image/$img' alt='' style='margin-bottom:25px; margin-right:40px;'>
                                                                <h4 style='margin-right: -10px;'>$prd</h4>
                                                                
                                                                <div class='price'>
                                                                <a href='login.php?img=$img&v=$v'><h6>$price</h6></a>
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
                        <a href="index.php"><img src="assets/img/mainicon1.png" alt=""></a>
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