<?php
if (isset($_POST["form1"])) {

  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $from = 'Website Contact Form';
  $to = 'therealbrianhurst@gmail.com';
  $subject = 'New Submission from Website Contact Form';

  $body = "From: $name\n E-mail: $email\n Message: $message";


  if (!$_POST['name']) {
          $errName = 'Please enter your name';
    }

if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  $errEmail = 'Please enter a valid email address';
}

// If there are no errors, send the email
if (!$errName && !$errEmail) {
  if (mail ($to, $subject, $body, $from)) {
    $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
    header("Location:contact.php");
  } else {
    $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
  }
}

}

if (isset($_POST["form2"])) {

  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $business = $_POST['business'];
  $number = $_POST['mobile'];
  $deliverables = $_POST['deliverables'];

  $from = 'Website Contact Form';
  $to = 'therealbrianhurst@gmail.com';
  $subject = 'New Submission from Website Contact Form';

  $body = "From: $name\n E-mail: $email\n Message: $message\n Business: $business\n Number: $number\n Request: $deliverables";


  if (!$_POST['name']) {
          $errName = 'Please enter your name';
    }

if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  $errEmail = 'Please enter a valid email address';
}

// If there are no errors, send the email
if (!$errName && !$errEmail) {
  if (mail ($to, $subject, $body, $from)) {
    $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
    header("Location:contact.php#start-project");
  } else {
    $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
  }
}

}

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>Contact Brian | Brian Hurst</title>

    <!-- Custom Fonts -->

    <link href="https://fonts.googleapis.com/css?family=Arima+Madurai|Lato|Lora|Montserrat" rel="stylesheet">
    <link href="http://designers.hubspot.com/hs-fs/hub/327485/file-2054199286-css/font-awesome.css" rel="stylesheet">
</head>

<body id="contact" class="index">
<!-- Navigation -->
<!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="nav-container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
               <a class="navbar-brand page-scroll" href="index.php"><img src="Source/css/logo2.png"></img></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="services-dropdown" href="services.html">Services</a>
                            <div class="dropdown-content">
                                <a href="#">Lorem ipsum</a>
                                <a href="#">Lorem ipsum</a>
                                <a href="#">Lorem ipsum</a>
                            </div>
                    </li>
                    <li>
                        <a class="page-scroll" href="about.html">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="portfolio.html">Portfolio</a>
                    </li>

                    <li>
                        <a class="page-scroll" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
 <!-- Header -->
    <header>
        <div class="nav-container">
            <div class="intro-text">
                <div class="intro-lead-in">Welcome To My Studio!</div>
                <div class="intro-heading element"></div>
            </div>
        </div>
    </header>

   <!-- MOBILE MENU STARS HERE -->
    <div class="mobile-menu-overlay">
      <div class="menu">
            <ul class="movement-menu">
              <li><a href="index.php">Home</a></li>
              <li><a href="about.html">About</a></li>
              <li><a href="services.html">Services</a></li>
              <li><a href="portfolio.html">Portfolio</a></li>
             <li> <a href="contact.php">Contact</a></li>
            </ul>
            <p class="footer-copyright mobile-menu-copyright">Copyright © Your Company 2017. All Rights Reserved
          </div>


              
    </div>

      <div class="expanded-mobile-menu">
        <a href="#">
          <i class="fa fa-bars menu-toggle" aria-hidden="true"></i>
          <i class="fa fa-times close-mobile-menu-overlay" aria-hidden="true"></i>
        </a>
        <a href="index.php" class="menu-logo">
          <img src="Source/css/logo2.png">
        </a>
          
      </div>
    <!-- MOBILE MENU ENDS HERE -->

 <!-- Main Body -->
    <div class="contact-page-panel panel">
        <div class="contact-page-panel-inner">
            <div class="contact-page-panel-left">
                <div class="contact-page-panel-left-inner">
                    <div class="contact-page-panel-left-content">
                        <div class="contact-personal-image">

                        </div>
                        <div class="contact-social-icons"> <!-- <hr class="intro-divider"> -->
                <ul style="display: inline-flex;">
                          <a href="https://github.com/brianh360" target="_blank"><li class="socials social-button hdr-lg "><i class="fa fa-github fa-fw"></i> GITHUB</li></a>
                          <a href="tel:5554162615"><li class="socials social-button hdr-lg "><i class="fa fa-phone fa-fw"></i> Phone</li></a>
                          <a href="mailto:therealbrianhurst@gmail.com"><li class="socials social-button hdr-lg "><i class="fa fa-envelope fa-fw"></i> Email</li></a>
                          </ul></div>
                    </div>
                        
                </div>
            </div>
            <div class="contact-page-panel-right">
                <div class="contact-page-panel-right-inner">
                    <div class="contact-page-panel-right-content">
                           <nav class="toggle-links">
                               <a href="#get-in-touch" class="get-in-touch">Get in Touch</a>
                               <a href="#start-project" class="start-project">Start your Project</a>
                           </nav>`
                        <div class="contact-page-panel-right-form">
                             <div class="contact-me">

                             <!-- Beginning of Form 1 -->
        <div class="form-1">                  
          <div class="col-md-5">
    <div class="form-area">  
        <form role="form" method="post" action="contact.php">

                    <h3 class="form-header">Get in Touch!</h3>
            <div class="form-row">

                <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" placeholder="What's your name?" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="email" name="email" placeholder="What's the name of your business?" required>
                 

              </div>

            </div>
                    <div class="form-group">
                    <textarea class="form-control text-box-size" type="textarea" id="message" name="message" placeholder="What's on your mind?" maxlength="140" rows="7"></textarea>
                        <span class="help-block"><p id="characterLeft" class="help-block ">Leave me a message!</p></span>                    
                    </div>

        <input id="submit" name="form1" type="submit" class="btn btn-primary pull-right" value="Submit Form"></input>
        <div class="thanksmessage"></div>
        </form>
    </div>
</div>
</div>
<!-- End of Form 1 -->

<!-- Beginning of Form 2 -->
<div class="form-2">                  
          <div class="col-md-5">
    <div class="form-area">  
        <form role="form" method="post" action="contact.php">

                    <h3 class="form-header">Get Started on Your Next Project!</h3>

                    <!-- Form Row Start -->
            <div class="form-row"> 
                <div class="row">

                <input type="text" class="form-control box-size" id="name" name="name" placeholder="What's your name?" required>

                <input type="text" class="form-control" id="business" name="business" placeholder="What's the name of your business?" required>


            </div>
            </div>

            <!-- Form Row End -->
            <div class="space">
            </div>

            <!-- Form Row Start -->
            <div class="form-row"> 
                <div class="row">

                <input type="email" class="form-control box-size" id="email" name="email" placeholder="What's your email address?" required>


                <input type="text" class="form-control" id="mobile" name="mobile" placeholder="What's your phone number?" required>


            </div>
            </div>
                        <div class="text-seperator resume-seperator" ></div>
            <!-- Form Row End -->

             <!-- Form Row Start -->
        <div class="form-container">
                <div><legend>WHAT SERVICES ARE YOU INTERESTED IN?</legend></div>
            <div class="form-row">
                <div class="form-row-inner">

                        <label>
                            <input type="checkbox" value="Web Design">
                            <span>Web Design</span>
                        </label>
                </div>

                <div class="form-row-inner">
                        <label>
                            <input type="checkbox" value="Web Development">
                            <span>Web Development</span>
                        </label>
                </div>
            </div>


            <div class="space"> </div>


            <div class="form-row">
                <div class="form-row-inner">

                        <label>
                            <input type="checkbox" value="Wordpress Help">
                            <span>Wordpress Help</span>
                        </label>
                </div>

                <div class="form-row-inner">
                        <label>
                            <input type="checkbox" value="Web Design">
                            <span>Other Service</span>
                        </label>
            </div>


            </div>
        </div>
        <input type="hidden" name="deliverables" value="">

            <div class="text-seperator resume-seperator" ></div>
            <!-- Form Row End -->
                    <div class="form-group">
                    <textarea class="form-control lg-box" type="textarea" name="message" id="message" placeholder="Any additional or relevant information about this project?" maxlength="140" rows="10"></textarea>
                        <span class="help-block"><p id="characterLeft" class="help-block ">What's on your mind?</p></span>                    
                    </div>

            
        <input id="submit" name="form2" type="submit" class="btn btn-primary pull-right" value="Submit Form"></input>
        </form>
    </div>
</div>
</div>
<!-- End of Form 2 -->

</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <footer>
      <div class="footer-container">
        <div class="footer-inner">
          <div class="footer-content">
            <div class="footer-nav">
            <ul style="display: inline-flex;">
                <a href="index.php"><li class="footer-nav-list">Home</li></a>
                <li style="font-size: 14px;">&#9642;</li>
                <a href="about.html"><li class="footer-nav-list">About</li></a>
                <li style="font-size: 14px;">&#9642;</li>
                <a href="services.html"><li class="footer-nav-list">Services</li></a>
                <li style="font-size: 14px;">&#9642;</li>
                <a href="contact.php"><li class="footer-nav-list">Contact</li></a>
              </ul>
              <p class="footer-copyright">Copyright © Your Company 2017. All Rights Reserved
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>


</body>
    <link rel="stylesheet" href="Source/css/style.css">

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script type="text/javascript" src="Source/js/script.js"></script>
      <script type="text/javascript" src="Source/js/typed.js"></script>


    <script>
    document.addEventListener("DOMContentLoaded", function(){
        Typed.new(".element", {
            strings: ["Get your next project started!"],
            typeSpeed: 50,
            loop: false,
            showCursor: false,
            backSpeed: 100,
            backDelay: 5000
        });
    });
</script>

</html>

