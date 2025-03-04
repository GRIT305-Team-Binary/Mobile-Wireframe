<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kent Food Bank & Emergency Services</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/small-business.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
   <style type="text/css">
        .carousel{
            background: #2f4357;
            margin-top: 20px;
        }
        .carousel .item img{
            margin: 0 auto; /* Align slide image horizontally center */
        }
        .bs-example{
            margin: 20px;
        }
    </style>

</head>

<body>
    <?php
        include ('../includes/header.inc.php');
    ?>
     <!-- Facebook Feed --->
        <div id="fb-root"></div>
        <script>
            (function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s); js.id = id;
                    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
                    fjs.parentNode.insertBefore(js, fjs);
                  }
                  (document, 'script', 'facebook-jssdk'));
        </script>

    
    <!-- Navigation 
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display 
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="http://placehold.it/150x50&text=Logo" alt="">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling 
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="../contribute.html">Contribute</a>
                    </li>
                    <li>
                        <a href="../gethelp.html">Get Help</a>
                    </li>
                    <li>
                        <a href="../contactus.html">Contact</a>
                    </li>
                    <li>
                        <a href="../calendar.html">Calendar</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse 
        </div>
        <!-- /.container 
    </nav>
    -->

    <!-- Page Content -->
    <div class="container">

        <!-- Heading Row -->
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12">
                        

                        <div class="bs-example">
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <!-- Carousel indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                    <li data-target="#myCarousel" data-slide-to="3"></li>
                                    <li data-target="#myCarousel" data-slide-to="4"></li>
                                    <li data-target="#myCarousel" data-slide-to="5"></li>
                                </ol>   
                                <!-- Wrapper for carousel items -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img  class="img-responsive" src="images/visit.png" alt="First Slide">
                                    </div>
                                    <div class="item ">
                                        <img  class="img-responsive" src="images/slide1.png" alt="Second Slide">
                                    </div>
                                    <div class="item">
                                        <img  class="img-responsive" src="images/slide2.png" alt="Third Slide">
                                    </div>
                                    <div class="item">
                                        <img class="img-responsive" src="images/slide3.png" alt="Fourth Slide">
                                    </div>
                                    <div class="item">
                                        <img class="img-responsive img-circle" src="http://placehold.it/900x350" alt="Fifth Slide">
                                    </div>
                                    <div class="item">
                                       <img class="img-responsive img-square" src="http://placehold.it/900x350" alt="Sixth Slide">
                                    </div>
                                </div>
                                <!-- Carousel controls -->
                                <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="carousel-control right" href="#myCarousel" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    
                        <div class="col-md-9 well text-center">
                            <!-- Mission Statement -->
                            <p>Serving low-income residents of the Kent School District.</p>
                         </div>
                         <div class="col-md-3 well text-center">
                            <!-- Donate Button under Carousel -->
                             <a class="btn btn-primary btn-lg" href="https://www.paypal.com/us/webapps/mpp/search-cause?charityId=75871&s=3">Donate!</a>
                         </div>
                     
                 </div>
                <div class="row">
                <div class="col-md-12">
                    <!-- About Us Content -->
                    <p>The Kent Food Bank and Emergency Services is a non-profit organization offering food, clothing and emergency financial assistance to low income families and individuals living within the Kent School District.  The Kent Food Bank service area covers 73 square miles with 40 schools. Kent Food Bank operates two food distribution locations in Kent each week.</p>
                    <h2>Mission</h2>
                    <p> The Kent Food Bank and Emergency Services exist to serve the citizens of the Greater Kent area.<br />
                    In order to fulfill its mission the Kent Food Bank will:
                    <ul>
                        <li>Operate a center to supply food, clothing and referrals to persons in need living within the service area.</li>
                        <li>Furnish financial assistance in an emergency situation for emergency needs.</li>
                        <li>Work in conjunction with government agencies, churches and other organizations to serve the surrounding people.</li>
                        <li>Operate primarily as a volunteer agency, obtaining the majority of its support and donations from the community.</li>
                     </ul>
                    </p>
                </div>
               
            </div>
            </div>
            <!-- /.col-md-8 -->
            <div class="col-md-4">
                    <!-- Facebook Feed for Kent Food Bank Page -->
                    <div class="fb-page"
                         data-href="https://www.facebook.com/kentfoodbank/"
                         data-tabs="timeline"
                         data-small-header="true"
                         data-adapt-container-width="true"
                         data-hide-cover="false"
                         data-height="100%"
                         data-show-facepile="true">
                    <div class="fb-xfbml-parse-ignore">
                        <blockquote cite="https://www.facebook.com/kentfoodbank/">
                            <a href="https://www.facebook.com/kentfoodbank/">Kent Food Bank &amp; Emergency Services</a>
                        </blockquote>
                    </div>
                </div>
        
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Well -->
        <div class="row">
             
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        
        <!-- /.row -->

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; 2016 Kent Food Bank. All Rights Reserved.</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
