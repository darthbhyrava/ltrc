<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Language Technologies Research Centre, IIIT Hyderabad</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="https://www.iiit.ac.in/">IIIT Hyderabad</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="http://ltrc.iiit.ac.in/iasnlp2016/index.php">IASNLP 2016</a>
                    </li>
                    <li>
                        <a href="http://ltrc.iiit.ac.in/icon2016/index.php">ICON 2016</a>
                    </li>
                    <li>
                        <!--a href="http://ltrc.iiit.ac.in/downloads/"--><a href="download.html">Downloads/Resources</a>
                    </li>
                    <li>
                        <a href="faculty.php">Faculty</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

        <div class="row">
            <?PHP
                $file_handle = fopen("faculty.csv", "r");
                while (!feof($file_handle) ) {
                    $line_of_text = fgetcsv($file_handle, 1024);
                    $name=explode(" ",$line_of_text[1]);
                    ?>
                    <div class="col-md-4 text-center">
                        <div class="thumbnail">
                            <?php $path="img/faculty/".$name[0].".jpg"?>
                            <a href="<?php echo $line_of_text[0] ?>"><img class="img-responsive" src="<?php echo $path?>" alt="">
                            <div class="caption"></a>
                                    <h3><?php echo $line_of_text[1]?><br>
                                    <small><?php echo $line_of_text[2]?></small>
                                    </h3>
                                    <p><?php echo $line_of_text[3]?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                    
                }
            fclose($file_handle);
            ?>                        
        </div>


    <div class="content-section-a">

        <div class="container" >
            <!--div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <!--h2 class="section-heading">Death to the Stock Photo:<br>Special Thanks</h2-->
                    <p class="lead">LTRC addresses the complex problem of understanding and processing natural languages in both speech and text mode.</p>
                    <p class="lead">LTRC conducts research on both basic and applied aspects of language technology. It is the largest academic centre of speech and language technology in South Asia. LTRC carries out its work through four labs, which work in synergy with each other, as listed above.</p>
                <!--/div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="img/ipad.png" alt="">
                </div-->
            
        <!--/div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a --><a  name="nlpmt"></a>
    <div class="content-section-b">

        <div class="container">
        
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">NLP-MT Lab</h2>
                    <p class="lead">In the NLP-MT Lab at LTRC, IIIT-H, work is undertaken in many different sub-areas of NLP including syntax and parsing, semantics and word sense disambiguation, discourse and tree banking, machine translation, creation of linguistics resources etc. Computational models are built inspired from linguistics, which are combined with machine learning techniques. For more information click <a href="/nlpmt/">here</a>.</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6 text-center">
                    <img class="img-responsive" src="img/vt.jpg" alt="">
                    
                </div>
                <div class="col-lg-4 col-lg-offset-2 col-sm-6 text-center">
                <p class="centre">Vauquois Triangle</p>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->
<a  name="anusaaraka"></a>
    <div class="content-section-a">

        <div class="container">
            
            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Anusaaraka Lab</h2>
                    <p class="lead">Anusaaraka is a machine translation tool being developed by the Chinmaya International Foundation (CIF), International Institute of Information Technology, Hyderabad (IIIT-H) and University of Hyderabad (Department of Sanskrit Studies). Fusion of traditional Indian shastras and advanced modern technologies is what Anusaaraka is all about. For more information click <a href="http://anusaaraka.iiit.ac.in/">here</a>.</p>
                </div>
                
                <div class="col-lg-5  col-sm-pull-5  col-sm-6 ">
                    <br><br>
                    <img class="img-responsive left-block" src="img/anu1.png"  />
                
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-b -->
<a  name="speech"></a>
    <div class="content-section-b">

        <div class="container">
        
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Speech and Vision Lab</h2>
                    <p class="lead">The objective of Speech and Vision Lab is to conduct goal oriented basic research, and thus we address fundamental issues involved in building robust speech-to-text systems, natural sounding text-to-speech systems, spoken/audio information retrieval and biometrics using speech and video. For more information click <a href="http://speech.iiit.ac.in/">here</a>.</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 col-sm-6">
                <br><br>
                    <img class="img-responsive" src="img/svl.png" align="middle" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <a  name="search"></a>
    <div class="content-section-a">

        <div class="container">
        
            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Search and Information Extraction Lab</h2>
                    <p class="lead">Search and Information Extraction Lab focuses on solving research problems in the areas of Information Retrieval (IR), Extraction (IE) and Access (IA). For more information click <a href="http://search.iiit.ac.in/">here</a>. </p>
                </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6" >
                    <img class="img-responsive" src="img/seil.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a >
    <div class="content-section-b">

        <div class="container">

            
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">NLP-MT Lab</h2>
                    <p class="lead">Insert statement here</p>
   

        </div>
        <!-- /.container >

    </div>
    <!-- /.content-section-b >
        <div class="content-section-a">

        <div class="container">

            
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Anusaaraka Lab</h2>
                    <p class="lead">Insert statement here</p>
   

        </div>
        <!-- /.container>

    </div>
    <div class="content-section-b">

        <div class="container">

            
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Speech and Vision Lab</h2>
                    <p class="lead">Insert statement here</p>
   

        </div>
        <!-- /.container >

    </div>
    <!-- /.content-section-b >
        <div class="content-section-a">

        <div class="container">

            
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Search and Information Extraction Lab</h2>
                    <p class="lead">Insert statement here</p>
   

        </div>
        <!-- /.container >

    </div-->
    <!--div class="content-section-a">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Google Web Fonts and<br>Font Awesome Icons</h2>
                    <p class="lead">This template features the 'Lato' font, part of the <a target="_blank" href="http://www.google.com/fonts">Google Web Font library</a>, as well as <a target="_blank" href="http://fontawesome.io">icons from Font Awesome</a>.</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="img/phones.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.container >

    </div-->
    <!-- /.content-section-a -->

	<a  name="contact"></a>
    <div class="banner">

        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <h2>Links to Labs:</h2>
                </div>
                <div class="col-lg-6">
                    <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="/nlpmt/" class="btn btn-default btn-lg"> <span class="network-name">NLP-MT Lab</span></a>
                            </li><br>
                            <li>
                                <a href="http://anusaaraka.iiit.ac.in/" class="btn btn-default btn-lg"><span class="network-name">Anusaaraka Lab</span></a>
                            </li><br>
                            <li>
                                <a href="http://speech.iiit.ac.in/" class="btn btn-default btn-lg"> <span class="network-name">Speech and Vision Lab</span></a>
                            </li><br>
                            <li>
                                <a href="http://search.iiit.ac.in/" class="btn btn-default btn-lg"> <span class="network-name">Search and Information Extraction Lab</span></a>
                            </li>
                        </ul>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.banner -->

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="ltrc/">Home</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="ltrc/index.html#intro">About</a>
                        </li>
                        </ul>
                           <!-- Footer -->

                      <p class="copyright text-muted small">From Bootstrap Theme</p>
                      <p> <a href="#">LTRC 2016</a></p>
                      <p><a href="https://www.iiit.ac.in/">IIIT-Hyderabad</a></p>
               
                    
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
