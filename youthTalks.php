<html lang="en">

    <?php
    include('./header.html');
    ?>
    <link href="css/sj.css" rel="stylesheet">


    <body id="page-top" data-spy="scroll" data-target=".navbar-custom">
        <!-- Preloader -->
        <div id="preloader">
            <div id="load"></div>
        </div>

        <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
	        <div class="container-fluid">

	            <div class="navbar-header page-scroll">
	                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
	                    <i class="fa fa-bars"></i>
	                </button>
	                <a class="navbar-brand" href="index.php">
	                    <img src = "img/apple-icon2.png" alt="logo"/>
	                    <h1 class="hidden-xs hidden-sm">Opening Doors</h1>
	                </a>
	            </div>

	            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
	                <ul class="nav navbar-nav">
	                    <li class="active"><a href="./index.php">Home</a></li>
	                    <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Projects<b class="caret"></b></a>
	                        <ul class="dropdown-menu">
	                            <!-- consider cooler titles-->
	                            <li><a href="sj.php">San Jose</a></li>
	                            <li><a href="la.php">Los Angeles</a></li>
	                            <li><a href="youthTalks.php">Youth Talks</a></li>
	                            <li><a href="m_v.php">Medicine and Volunteerism</a></li>
	                        </ul>
	                    </li>
	                    <li><a href="https://www.flickr.com/photos/135145748@N05/" target="_blank">The Pictures</a></li>
	                    <li><a href="#contact">Contact</a></li>
	                </ul>
	            </div>
	            
	        </div>
	    </nav>


        <section id="yt_main" class="home-section text-center">
            <div class="heading-about">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="wow bounceInDown" data-wow-delay="0.4s">
                                <div class="section-heading">
                                    <h2>Youth Talks</h2>
                                </div>
                            </div>

                            <h4><br><br><br><br><br><strong>The Why</strong></h4>
                            <p>
                                Youth living in underserved situations often lack guidance. As a result, they are often led onto self-destructive paths and unable to fulfill their potentials. Our goal is to provide these students with inspirational role models who are not only successful, but have also contributed value to society.<br><br><br><br><br>
                            </p>
                            <div class="wow fadeInDown" data-wow-delay="0.8s">
                                <img src="img/youthTalks/yt_1227_1.jpg" width="500" > </br>
                            </div>

                            <h4><br><br><br><br><br><strong>Where we come in</strong></h4>
                            <p>
                                By working with medical student volunteers who have a deep interest in helping the community and the underserved, we are able to provide high quality mentoring to under-served youth.<br><br><br><br><br>
                            </p>
                            <div class="wow fadeInLeft" data-wow-delay="0.8s">
                                <img src="img/youthTalks/yt_1227_2.jpg" width="500"> </br>

                            </div>

                            <h4><br><br><br><br><br><strong>The Impact</strong></h4>
                            <p>
                                We provide regular food talks to disadvantaged youth and are currently working with the Lewis Katz School of Medicine at Temple University and the Will and Jada Smith Foundation to provide field trips to the students.
                                <br><br><br><br><br>
                            </p>
                            <div class="wow fadeInRight" data-wow-delay="0.8s">
                                <img src="img/youthTalks/yt_1227_3.jpg" width="500" >
                            </div>

                        </div>
                    </div>
                </div>
            </div>


        </section>
        <!-- /Section: about -->




        <!-- Section: Test -->
        
        <!-- /Section: Test -->


        <!-- Section: contact -->
        <section id="contact" class="home-section text-center">
            <div class="heading-contact">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="wow bounceInDown" data-wow-delay="0.8s">
                                <div class="section-heading">
                                    <h2>Get in touch</h2>
                                    <i class="fa fa-2x fa-angle-down"></i>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">

                <div class="row">
                    <div class="col-lg-2 col-lg-offset-5">
                        <hr class="marginbot-50">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="boxed-grey">
                            <form action="email_script.php" method="POST" id="contact-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">
                                                Name
                                            </label>
                                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" required="required" />
                                        </div>
                                        <div class="form-group">
                                            <label for="email">
                                                Email Address
                                            </label>
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                                </span>
                                                <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
                                        </div>
                                        <div name="subject" class="form-group">
                                            <label for="subject">
                                                Subject
                                            </label>
                                            <select id="subject" name="subject" class="form-control" required="required">
                                                <option value="na" selected="">Choose One:</option>
                                                <option value="suggestions">Suggestions</option>
                                                <option value="product">Support</option>
                                            </select>
                                        </div>
                                        <!--
                                        <div class="form-group">
                                            <label for="inputfile">Resume (optional)</label> </br>
                                            <input type="file" name="resume" id="inputfile"> </br>
                                        </div>
                                        -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">
                                                Message
                                            </label>
                                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                                      placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" name="submit" class="btn btn-skin pull-right" id="btnContactUs">
                                            Send Message
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="widget-contact">
                            <h5>Philadelphia</h5>

                            <address>
                                <strong>Email</strong><br>
                                <a href="mailto:#">support@openingdoorsfoundation.org</a>
                            </address>

                            <!-- 				<address>
                                                              <strong>We're on social networks</strong><br>
                                                    <ul class="company-social">
                                                        <li class="social-facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                        <li class="social-twitter"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                        <li class="social-google"><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                                    </ul>
                                                            </address>			 -->



                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                <input type="hidden" name="cmd" value="_s-xclick">
                                <input type="hidden" name="hosted_button_id" value="BQ43Y8UGKG6EW">
                                <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                            </form>



                            <p>
                                <font size="2">&reg; We are a 501(c) 3 tax exempt organization registered under the California Secretary of State</font>
                            </p>

                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- /Section: contact -->

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="wow shake" data-wow-delay="0.4s">
                            <div class="page-scroll marginbot-30">
                                <a href="#sj-main" id="totop" class="btn btn-circle">
                                    <i class="fa fa-angle-double-up animated"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Core JavaScript Files -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.easing.min.js"></script>
        <script src="js/jquery.scrollTo.js"></script>
        <script src="js/wow.min.js"></script>
        <!-- Custom Theme JavaScript -->
        <script src="js/custom.js"></script>
        <script src="js/toucheffects.js"></script>

        <script>
            $(document).ready(function () {

            activeItem = $("#accordion li:first");
            $(activeItem).addClass('active');

            $("#accordion li").hover(function () {
            $(activeItem).animate({width: "50px"}, {duration: 300, queue: false});
            $(this).animate({width: "450px"}, {duration: 300, queue: false});
            activeItem = this;
            });

            });
        </script>

    </head>

</body>
</html>
