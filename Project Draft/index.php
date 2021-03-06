<?php
if (isset($_POST["submit"])) {

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
    header("Location:index.php");
  } else {
    $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
  }
}

}

?>

<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Brian Hurst | Web Designer &amp; Developer</title>
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="http://designers.hubspot.com/hs-fs/hub/327485/file-2054199286-css/font-awesome.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arima+Madurai:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora|Montserrat" rel="stylesheet">


  </head>

  <body id="index">

    <div class="container">
<!-- Sidebar -->
    <header>
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

      <div class="about-panel panel">
        <div class="inner-about-panel">

          <div class="about-panel-top">
            <div class="about-panel-top-inner">
              <div class="about-panel-top-inner-left">
                <p id="here"><span style="color:#5c7079; font-weight:bold;">I'm at my desk !</span>
              </div>
              <div class="about-panel-top-inner-right">
                <p class="displayPhone" style="color: #5c7079;"> Give me a call: <span style="color:#5c7079; font-weight:bold;"><a href="tel:"<i class="fa fa-phone" aria-hidden="true"></i> (555) 726-3819</a></span>
              </div>
            </div>
            
          </div>


          <div class="about-content">
                <a href="#">
                <div class="header-holder">
                <img style="height: 150px; width: 200px; margin: 10%;" src="Source/css/3(web-sized).png"></img>
<!--                 <h1 class="hero">Brian Hurst</h1><br> -->
                <h2 class="sub-head element">A Creative</span> Web Tech<span style="color:#fff"></span></h2>
                </div></a>
                <hr class="intro-divider">
                <ul style="display: inline-flex;">
                          <a href="https://github.com/brianh360" target="_blank"><li class="socials social-button hdr-lg "><i class="fa fa-github fa-fw"></i> GITHUB</li></a>
                          <a href="#" target="_blank"><li class="socials social-button hdr-lg "><i class="fa fa-linkedin fa-fw"></i> LINKEDIN</li></a>
                          <a href="mailto:therealbrianhurst@gmail.com" target="_blank"><li class="socials social-button hdr-lg "><i class="fa fa-envelope fa-fw"></i> Email</li></a>
                          </ul>
            
          </div>
          <a href="#content">
               <svg class="arrows">
              <path class="a1" d="M0 0 L30 32 L60 0"></path>
              <path class="a2" d="M0 20 L30 52 L60 20"></path>
              <path class="a3" d="M0 40 L30 72 L60 40"></path>
            </svg></a>

        </div>  
      </div>

<!-- Services Panel -->
      <div class="services-panel panel" id="content">
        <div class="inner-panel">
          <div class="services-content">
            <div class="services-container">

              <div class="text-column">
                <div class="hdr-lg">
                  <h1 style="margin: 0; color:#438392;">Services</h1>
                </div>
                <div class="text-seperator"></div>
                <div class="">
                <h2 class="hdr-text">How Can I Help You?</h2>
                </div>
                <div class="services-sub">
                   <p class="sub-text">I can build you a beautiful and <a class="lightblue" href="#link-to-blog-post">responsive mobile-friendly website</a>. If you're problem requires <a class="lightblue" href="#link-to-blog-post">web assistance</a> such as learning to
<a class="lightblue" href="#link-to-blog-post">create a gallery in Wordpress</a>, I can do that too. Click the button below to find
out all the ways I can help you!</p>
                </div>
                <a href="services.html"><button class="button">Learn More</button></a>
              </div>

            <div class="services-img-bg">
              <ul>
                <li><img style="border-radius: 32px; border: 1px transparent solid;" class="services-slider-img services-img" src="Source/css/shutterstock_309617927.jpg"></li>
              </ul>
              
              
            </div>
            </div>
          </div>

        </div>
        </div>

<!-- Portfolio Panel -->
        <div class="portfolio-panel panel">
          <div class="inner-panel">
              <div class="portfolio-content">
                <div class="portfolio-container">
                    <div class="portfolio-img-display">
                      <img class="services-img" src="Source/css/look.jpg">
                    </div>

                    <div class="text-column">
                      <div class="hdr-lg">
                        <h1 style="margin: 0; color:#438392;">Portfolio</h1>
                      </div>
                      <div class="text-seperator"></div>
                        <div class="">
                          <h2 class="hdr-text">Reponsive Web Design<br>
                            by Brian Hurst</h2>
                        </div>
                        <div class="sub">
                  <p class="sub-text">How do you know you'll get an awesome website? Because I've done it countless times
for my other clients! All of my websites are desktop and mobile friendly, 
and are built with
either the latest <a class="lightblue" href="#link-to-blog-post">premium Wordpress themes</span></a>, or <a class="lightblue" href="#link-to-blog-post">HTML5</span></a>, <a class="lightblue" href="#link-to-blog-post">CSS/CSS3</span></a>, 
and <a class="lightblue" href="#link-to-blog-post">Javascript/Jquery</span>.</a></p></div>
                <a href="portfolio.html"><button class="button">Learn More</button></a>
                    </div>
                </div>
              </div>
            </div>
        </div> 

<!-- Process Panel -->
        <div class="process-panel panel">
          <div class="inner-panel">
            <div class="process-content">
              <div class="process-container">
                <div class="text-column">
                     <div class="hdr-lg">
                        <h1 style="margin: 0; color:#438392;">Experience</h1>
                          <div class="text-seperator"></div>
                          </div>
                            <div class="">
                          <h2 class="hdr-text">A Quick Life Story</h2>
                              <div class="sub">
                  <p class="sub-text">Here you can learn all about me, if you're in to that kind of stuff... I will warn you
though, it is just walls and walls of text, all about me. Truthfully to get to know
me, I think you're better off sending an email 
<a class="lightblue" href="mailto:therealbrianhurst@gmail.com">Hello there!</a> 
</div>
                  <a href="about.html"><button class="button">Learn More</button></a>
                    </div>
                        
                      </div>
                      <div class="portfolio-img-display">
                      <img class="services-img" src="Source/css/shutterstock_380160574.png">
                    </div>
                </div> 
                
              </div>
            </div>
            
          </div>

<!-- Contact panel -->

                <div class="contact-panel panel">
        <div class="contact-panel-inner">
        <i class="qode_icon_font_awesome fa fa-weixin qode_icon_element testimonials-wix"></i>
        <div class="contact-me">
          <div class="col-md-5">
    <div class="form-area">  
        <form role="form" method="post" action="index.php">
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px;text-align: center;font-size: 32px;font-weight: 700;">Get in Touch!</h3>
            <div class="form-group">
            <input type="text" class="form-control" id="name" name="name" placeholder="Name*" required>
          </div>
          <div class="form-group">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email*" required>
          </div>
 
                    <div class="form-group">
                    <textarea class="form-control" name="message" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
                        <span class="help-block"><p id="characterLeft" class="help-block ">What's on your mind?</p></span>                    
                    </div>
         <input id="submit" name="submit" type="submit" class="btn btn-primary pull-right" value="Submit Form"></input>
        </form>
    </div>
</div>
</div>

          <div class="testimonials-outer">
            <div class="testimonials-inner">
                <div class="testimonial-level">

                  <div class="testimonials-box-lg">
                    <div class="testimonial">
                          <blockquote>
                              Sometimes it's the journey that teaches you a lot about your destination. <strong>- Drake</strong>
                          </blockquote>
                          <div></div>
                          </div>

                  </div>

                   <div class="testimonials-box-sm ">
                  <div class="testimonial drop">
                  <blockquote>
                              The very basic core of a man's living spirit is his passion for adventure. <strong>- Young B-rye</strong>
                          </blockquote>
                          <div></div>
                          </div>
                  </div>
                </div>


                <div class="testimonial-level">

                  <div class="testimonials-box-sm">
                  <div class="testimonial">
                  <blockquote>
                              The very basic core of a man's living spirit is his passion for adventure. <strong>- Christopher McCandless</strong>
                          </blockquote>
                          <div></div>
                          </div>
                  </div>
                  <div class="testimonials-box-lg ">
                    <div class="testimonial drop">
                          <blockquote>
                              I've always believed that if you put in the work, the results will come. <strong>- Michael Jordan</strong>
                          </blockquote>
                          <div></div>
                          </div>
                  </div>
                </div>

               <div class="testimonial-level">

                  <div class="testimonials-box-lg">
                    <div class="testimonial">
                          <blockquote>
                              If you don't know where you are going, you might wind up someplace else. <strong>- Yogi Berra</strong>
                          </blockquote>
                          <div></div>
                          </div>
                  </div>

                  <div class="testimonials-box-sm ">
                  <div class="testimonial drop">
                  <blockquote>
                              When the world is running down, you make the best of what's still around. <strong>- Sting</strong>
                          </blockquote>
                          <div></div>
                          </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>

<!-- Banner Panel -->
          <div class="banner-panel panel">
            <div class="inner-panel">
              <div class="banner-content">
               <div class="banner-container">
                <div class="text-column">
                  <div class="hdr-lg banner-hdr">
                        <h1 style="margin: 0;">Let's Get Started Today!</h1>
                          <div class="text-seperator banner-sep"></div>
                          <ul style="display: inline-flex;">
                          <a href="#" target="_blank"><li class="socials social-button"><i class="fa fa-github fa-fw"></i> GITHUB</li></a>
                          <a href="#" target="_blank"><li class="socials social-button"><i class="fa fa-linkedin fa-fw"></i> LINKEDIN</li></a>
                          </ul>
                          
                  </div>
                </div>
                  
                    <div class="button-dropdown-outer">
                      <div class="dropdown-modal">
                        <span class="close-modal">&times;</span>
                        <div class="modal-content">
                          <span class="modal-text">Still have questions?</span>
                            <div class="button-dropdown">
                         <a href="contact.html"><button class="banner-button"><i class="fa fa-envelope fa-fw"></i> Email Me!</button></a>
                        </div>
                        
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
        </div> <!-- end of the main body container -->
   
    </div>
  </body>
    <link rel="stylesheet" href="Source/css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script type="text/javascript" src="Source/js/script.js"></script>
        <script type="text/javascript" src="Source/js/typed.js"></script>


    <script>
    document.addEventListener("DOMContentLoaded", function(){
        Typed.new(".element", {
            strings: ["A Creative Web Tech"],
            typeSpeed: 50,
            loop: false,
            showCursor: false,
            backSpeed: 100,
            backDelay: 5000
        });
    });
</script>
</html>



