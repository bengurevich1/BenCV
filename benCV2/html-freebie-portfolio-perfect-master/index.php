<?php
include "config.php";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

//testing connection success
if (mysqli_connect_errno()) {
    die("DB connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")");
}

//get data from DB
$query = "SELECT * FROM portfolio_BenGurevich";
$result = mysqli_query($connection, $query);
if (!$result) {
    die("DB query failed.");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Ben gurevich Portfolio</title>

    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <!-- Favicon
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/icon-removebg-preview.png">

    <!-- Stylesheets
    ================================================== -->
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <header id="masthead" class="site-header" data-anchor-target=".hero"
        data-top="background: rgba(255,255,255,0); padding: 30px 0; box-shadow: 0px 0px 20px 6px rgba(0, 0, 0, 0);"
        data-top-bottom="background: rgba(255,255,255,1); padding: 10px 0; box-shadow: 0px 0px 20px 6px rgba(0, 0, 0, 0.2);">
        <nav id="primary-navigation" class="site-navigation">
            <div class="container">
                <div class="navbar-header page-scroll">

                    <button type="button" class="navbar-toggle collapsed" data-target="#portfolio-perfect-collapse"
                        aria-expanded="false">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a href="#hero" class="site-logo"><img src="assets/img/ben-gurevich-logo.png" alt="logo"></a>

                </div><!-- /.navbar-header -->

                <div class="main-menu" id="portfolio-perfect-collapse">

                    <ul class="nav navbar-nav navbar-right">

                        <li class="page-scroll"><a href="#hero">Home</a></li>
                        <li class="page-scroll"><a href="#about">About</a></li>
                        <li class="page-scroll"><a href="#service">Service</a></li>
                        <li class="page-scroll"><a href="#portfolio">Portfolio</a></li>
                        <li class="page-scroll"><a href="#contact">Contact</a></li>

                    </ul><!-- /.navbar-nav -->

                </div><!-- /.navbar-collapse -->

            </div>
        </nav><!-- /.primary-navigation -->
    </header><!-- /#header -->

    <div id="hero" class="hero">
        <div class="container">
            <div class="row">
                <div id="opening" class="col-md-6">
                    <h1>Ben Gurevich</h1>
                    <div class="page-scroll">
                        <p class="job-title">Software engineer</p>
                        <a href="#contact" class="btn btn-fill ">Hire me</a>
                        <div class="clearfix visible-xxs"></div>
                        <a href="#portfolio" class="btn btn-border">Explore more</a>
                    </div>
                </div>

                <div class="col-md-6 text-right">
                    <img src="assets/img/BenPhoto.png" alt="alex-vidal">
                </div>

            </div>
        </div>
    </div><!-- /.hero -->

    <main id="main" class="site-main">
        <section id="about" class="site-section section-about text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <h2>About</h2>
                        <img src="assets/img/lines.svg" class="img-lines" alt="lines">
                        <p>A highly motivated B.Sc. Software Engineering student with a broad entrepreneurial
                            perspective, business acumen, and a creative mindset. I am a team player with a "can-do"
                            attitude and possess significant autodidactic capabilities. I am seeking a position that
                            allows me to both leverage my existing skills and acquire new knowledge, providing
                            opportunities for personal and professional growth within the company.
                        </p>
                        <a href="assets/docs/CV-Ben-Gurevich.pdf" class="btn btn-fill" target="_blank" download>Download
                            my cv</a>
                    </div>
                </div>
            </div>
        </section><!-- /.secton-about -->

        <section class="site-section section-skills">
            <div class="container">
                <div class="text-center">
                    <h3>My Skills</h3>
                    <img src="assets/img/lines.svg" class="img-lines" alt="lines">
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="skill">
                            <h4>Html/css</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-transitiongoal="100"></div>
                                <!-- /.progress-bar -->
                            </div><!-- /.progress -->
                        </div><!-- /.skill -->
                        <div class="skill">
                            <h4>C++</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-transitiongoal="75"></div>
                                <!-- /.progress-bar -->
                            </div><!-- /.progress -->
                        </div><!-- /.skill -->
                    </div>
                    <div class="col-md-4">
                        <div class="skill">
                            <h4>Javascript</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-transitiongoal="82"></div>
                                <!-- /.progress-bar -->
                            </div><!-- /.progress -->
                        </div><!-- /.skill -->
                        <div class="skill">
                            <h4>C</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-transitiongoal="66"></div>
                                <!-- /.progress-bar -->
                            </div><!-- /.progress -->
                        </div><!-- /.skill -->
                    </div>
                    <div class="col-md-4">
                        <div class="skill">
                            <h4>Php</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-transitiongoal="97"></div>
                                <!-- /.progress-bar -->
                            </div><!-- /.progress -->
                        </div><!-- /.skill -->
                        <div class="skill">
                            <h4>SQL/Json</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-transitiongoal="45"></div>
                                <!-- /.progress-bar -->
                            </div><!-- /.progress -->
                        </div><!-- /.skill -->
                    </div>
                </div>
            </div>
        </section><!-- /.secton-skills -->

        <section id="service" class="site-section section-services overlay text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3>What i do</h3>
                        <img src="assets/img/lines.svg" class="img-lines" alt="lines">
                    </div>
                    <div class="col-sm-4">
                        <div class="service">
                            <img src="assets/img/front-development.png" alt="Front End Developer">
                            <h4>Front-end</h4>
                            <p>As a javascript developer, I have experience in HTML5 and CSS3 techniques working with
                                jQuery or more advanced javascript MVC frameworks such as angular</p>
                        </div><!-- /.service -->
                    </div>
                    <div class="col-sm-4">
                        <div class="service">
                            <img src="assets/img/server.png" alt="Back End Developer">
                            <h4>Back-end</h4>
                            <p>With expertise in back-end development, I design and implement robust server-side
                                solutions using technologies like PHP, Python, and SQL, ensuring efficient data
                                processing and server functionality.</p>
                        </div><!-- /.service -->
                    </div>
                    <div class="col-sm-4">
                        <div class="service">
                            <img src="assets/img/c-.png" alt="C/C++ Developerd">
                            <h4>C/C++ Developerd</h4>
                            <p>As a skilled C/C++ developer, I excel at building high-performance applications and
                                optimizing code for efficiency, leveraging my deep understanding of procedural and
                                object-oriented programming principles.</p>
                        </div><!-- /.service -->
                    </div>
                    <div class="col-sm-4">
                        <div class="service">
                            <img src="assets/img/project-management.png" alt="Project Manager">
                            <h4>Project Manager</h4>
                            <p>With a strong background in operational management and business understanding, I am
                                capable of overseeing projects, coordinating teams, and ensuring timely delivery of
                                results, all while maintaining a keen focus on client satisfaction.</p>
                        </div><!-- /.service -->
                    </div>
                    <div class="col-sm-4">
                        <div class="service">
                            <img src="assets/img/social-media.png" alt="Marketing">
                            <h4>Marketing</h4>
                            <p>Combining my programming knowledge with my experience in digital marketing, I possess the
                                ability to devise effective marketing strategies, utilize data analytics, and optimize
                                online campaigns to drive business growth and maximize ROI.</p>
                        </div><!-- /.service -->
                    </div>
                    <div class="col-sm-4">
                        <div class="service">
                            <img src="assets/img/product-development.png" alt="Product">
                            <h4>Product</h4>
                            <p>As a bridge between programmers and clients, I leverage my comprehensive understanding of
                                both technical and business aspects to translate client requirements into actionable
                                plans, ensuring the successful development and delivery of products that meet and exceed
                                expectations.</p>
                        </div><!-- /.service -->
                    </div>
                </div>
            </div>
        </section><!-- /.secton-services -->

        <section id="portfolio" class="site-section section-portfolio">
            <div class="container">
                <div class="text-center">
                    <h3>My recent Works</h3>
                    <img src="assets/img/lines.svg" class="img-lines" alt="lines">
                </div>
                <div class="row">
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                        <div class="col-md-4 col-xs-6">
                            <div class="portfolio-item">
                                <img src="<?php echo htmlspecialchars($row['imgPath']); ?>" class="img-res" alt="">
                                <div class="portfolio-item-info">
                                    <h4>
                                        <?php echo htmlspecialchars($row['name']); ?>
                                    </h4>
                                    <a href="#" data-toggle="modal"
                                        data-target="#portfolioItem<?php echo htmlspecialchars($row['id']); ?>"><span
                                            class="glyphicon glyphicon-eye-open"></span></a>
                                    <a href="<?php echo htmlspecialchars($row['url']); ?>"><span
                                            class="glyphicon glyphicon-link"></span></a>
                                </div><!-- /.portfolio-item-info -->
                            </div><!-- /.portfolio-item -->
                        </div>
                    <?php } ?>

                </div>
            </div>
        </section><!-- /.secton-portfolio -->

        <section class="site-section section-counters text-center">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <p class="counter start" data-to="5" data-speed="2000">0</p>
                        <h4>Years Experience</h4>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <p class="counter start" data-to="10" data-speed="2000">0</p>
                        <h4>Projects Delivered</h4>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <p id="infinity" class="counter" data-from="0" data-to="1" data-speed="1000">0</p>
                        <h4>Seconds on this site!<br>What are you waiting for?</h4>
                    </div>
                </div>
            </div>
        </section><!-- /.section-counters -->

        <section id="contact" class="site-section section-form text-center">
            <div class="container">

                <h3>Contact</h3>
                <img src="assets/img/lines.svg" class="img-lines" alt="lines">
                <form action="assets/php/jobAlert.php" method="post">
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" name="name" class="form-control mt-x-0" placeholder="Name" required>
                        </div>
                        <div class="col-sm-6">
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="col-sm-12">
                            <textarea name="message" id="message" class="form-control" placeholder="Message"
                                required></textarea>
                        </div>
                    </div>
                    <button class="btn btn-border" type="submit">Hire Me <span
                            class="glyphicon glyphicon-send"></span></button>
                </form>
            </div>
        </section><!-- /.section-form -->

    </main><!-- /#main -->


    <footer id="colophon" class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <a class="icon github-bg" href="https://github.com/bengurevich1" target="_blank"><i
                            class="icon-github"></i></a>
                    <a class="icon facebook-bg" href="https://www.facebook.com/ben.gurevich/" target="_blank"><i
                            class="icon-facebook"></i></a>
                    <a class="icon gplus-bg" href="https://www.linkedin.com/in/ben-gurevich-a97955242/"
                        target="_blank"><i class="icon-linkedin"></i></a>
                    <div class="emailAndPhone">
                        <p><i class="icon-envelope"></i><a href="mailto:blabla@gmail.com"> ben@danyel.co.il</a></p>
                        <p><i class="icon-phone"></i> +972545806799</p>
                    </div>
                </div>
                <div class="col-sm-4 col-sm-offset-0 col-xs-6 col-xs-offset-3"><a class="copyright"
                        href="https://www.shenkar.ac.il/he/departments/engineering-software-department">© Ben Gurevich |
                        תואר ראשון בהנדסת תוכנה בשנקר</a></div>
                <div class="col-sm-4 col-xs-3">
                    <div class="text-right page-scroll">
                        <a class="icon icon-up-bg" href="#hero"><i class="icon-up"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- /#footer -->

    <?php

    //get data from DB
    $query = "SELECT * FROM portfolio_BenGurevich";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("DB query failed.");
    }

    //Iterate over the results
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $name = $row['name'];
        $url = $row['url'];
        $description = $row['description'];
        $imgPath = $row['imgPath'];


        // Echo out the HTML code for each portfolio item.
        echo "<div id='portfolioItem$id' class='modal fade' role='dialog'>
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <a class='close' data-dismiss='modal'><span class='glyphicon glyphicon-remove'></span></a>
                        <img class='img-res' src='$imgPath' alt=''>
                    </div>
                    <div class='modal-body'>
                        <h4 class='modal-title'>$name</h4>
                        <p>$description</p>
                    </div>
                    <div class='modal-footer'>
                        <a href='$url' class='btn btn-fill'>Visit Page</a>
                    </div>
                </div>
            </div>
        </div>";
    }
    ?>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/skrollr.min.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-progressbar/0.9.0/bootstrap-progressbar.min.js"></script>
    <script src="assets/js/jquery.countTo.min.js"></script>
    <script src="assets/js/script.js"></script>
    <?php
    //release returned data
    mysqli_free_result($result);
    ?>
</body>

</html>
<?php
//close DB connection
mysqli_close($connection);
?>