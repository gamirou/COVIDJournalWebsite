
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../images/favicon.png" sizes="32x32">
    <title>COVIDJournal</title>

    <!-- CSS -->
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css' rel="stylesheet">
    <link href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css"
      integrity="sha256-DBYdrj7BxKM3slMeqBVWX2otx7x4eqoHRJCsSDJ0Nxw="
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../css/style.css">

    <!-- JS -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"
    ></script>    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"
      integrity="sha256-4sETKhh3aSyi6NRiA+qunPaTawqSMDQca/xLWu27Hg4="
      crossorigin="anonymous"
    ></script>
    <script src="../js/index.js"></script>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-md sticky-top navbar-light fixed-top bg-light">
    <a class="navbar-brand" href="#home">
      <img src="../images/app_logo_png.png" width="50px" height="50px"> COVIDJournal
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#home">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../faq.html">How to use</a>
        </li>
      </ul>
      <button type="button" class="btn btn-outline-success my-2 my-sm-0"><a id="#download-link" href="../download/index.html">Download</a></button>
      <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit"></button> -->
    </div>
  </nav>

  <!-- Parallax top bit -->
  <div class="container-fluid">
    <a href="#" name="home"></a>
    <div class="row">
      <div class="col-md-12 p-0">
        <div class="swiper-container parallax-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="img-container one"></div>
              <div class="container h-100">
                <div class="row h-100">
                  <div class="col-md-12">
                    <div class="content">
                      <h1 class="title">
                        <div class="title-wrapper">
                          COVID Journal App
                        </div>
                      </h1>
                      <div class="row">
                        <div class="col-md-10 offset-md-1">
                          <p class="description">
                            Track the coronavirus and save lives
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="img-container two"></div>
              <div class="container h-100">
                <div class="row h-100">
                  <div class="col-md-12">
                    <div class="content">
                      <h1 class="title">
                        <div class="title-wrapper">
                          Track the virus and alert the others
                        </div>
                      </h1>
                      <div class="row">
                        <div class="col-md-10 offset-md-1">
                          <p class="description">
                            Keep a list of all the people you came in contact with
                            and the app will let you and your contacts know if you need
                            to get a test. Early testing could potentially save your live
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="img-container three"></div>
              <div class="container h-100">
                <div class="row h-100">
                  <div class="col-md-12">
                    <div class="content">
                      <h1 class="title">
                        <div class="title-wrapper">
                          Stay informed
                        </div>
                      </h1>
                      <div class="row">
                        <div class="col-md-10 offset-md-1">
                          <p class="description">
                            Read news, tips and statistics all over the world on
                            how to respond to these unprecented times. We promise
                            there are positive news as well.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- slider controls -->
          <div class="swiper-button-next swiper-nav-ctrl next-ctrl">
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
          </div>
          <div class="swiper-button-prev swiper-nav-ctrl prev-ctrl">
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
          </div>
          <!-- pagination -->
          <div class="swiper-pagination pagination-ctrl"></div>
        </div>
      </div>
    </div>
  </div>

  <!-- ADD EMAIL LIST HERE -->
  <!-- POP UP FORM -->
  <div class="popup" id="popup">
    <div class="popup-header">
      <h2>Sign up to the email list</h2>  
      <button type="button" class="popup-close" id="popup-close">&times;</button>
    </div>
    <div class="popup-body">
      <img src="../images/app/linkedin_banner_image_1.png" alt="COVIDJournal logo">
      <p class="popup-body-text">
        If you want to keep up to date, enter your name and your email below
      </p>
      <form action="email/addemail.php" method="post">
        Name: <input type="text" name="name" class="inp-email-list"> <br>
        Email: <input type="email" name="email" class="inp-email-list"> <br>
        <input type="submit" value="Yes, sign me up!" class="btn btn-outline-success">
      </form>
      <button type="button"class="btn btn-danger close-popup-button" id="popup-close-button">No, I don't want to hear excellent news about the app</button>
    </div>
  </div>
  <div id="popup-overlay"></div>

  <!-- Sections -->
  <section class="section section-dark">
    <a href="#" name="download"></a>
    <h2>Download</h2>
    <p>
      The COVIDJournal App is available yet on Android, just not on Google Play
      To download it, either press the google play image or click the button 
      on the navigation bar. iOS is coming soon. 
      To use it you must be aged 18 and over. <br>

      <a name="download" href="#" class="download-badge"><img src="../images/google-play.png" alt="Download on Google Play"></a>
      <a href="#" class="download-badge"><img src="../images/apple-store.svg" alt="Download on Apples Store"></a>
    </p>
  </section>

  <div class="pimg2">
    <div class="ptext">
      <span class="border">
        Main features
      </span>
    </div>
  </div>

  <section class="section section-light">
    <a href="" name="about"></a>
    <h2>About</h2>
    <p>
    Hello, my name is George Sima. I have developed COVIDJournal at the moment.
      This website will give you a brief overview of the app.
      In March, I was reading some news and I read about South Korea and their trace system works.
      The government would collect their location at all times. Although it is effective, it is very
      intrusive, so I decided to create an app that takes into account the users' privacy.
      Google Play does not like this, so I can't publish it on their store, therefore you will have 
      to download it from our website.
      In the app you have to add your contacts as friends and you will be notified if they have been tested positive.
      On the profile page, you can add up to 50 tests which will be used to let the others know if they need to get a test themselves.
      Below, there is a list of the main features.
    </p>
  </section>

  <div class="pimg3">
    <section class="p-app-photos">
      <div class="phone-pic">
        <p class="border">Home Page</p>
        <img src="../images/app/phone1.png" alt="">
      </div>
      <div class="phone-pic">
        <p class="border">News Page</p>
        <img src="../images/app/phone2.png" alt="">
      </div>
      <div class="phone-pic">
        <p class="border trans">Add a test</p>
        <img src="../images/app/phone3.png" alt="">
      </div>
      <div class="phone-pic">
        <p class="border">Coronavirus cases</p>
        <img src="../images/app/phone4.png" alt="">
      </div>
      <div class="phone-pic">
        <p class="border">Friends</p>
        <img src="../images/app/phone5.png" alt="">
      </div>
      <div class="phone-pic">
        <p class="border">Symptoms Page</p>
        <img src="../images/app/phone6.png" alt="">
      </div>
    </section>
  </div>

  <section class="section section-dark">
    <a href="#" name="howtouse"></a>
    <h2>How to use the app?</h2>
    <p>
      After your account has been verified, start by adding your friends.
      Then, add 'posts', which include the places you went to and the people
      you've been in contact with. If the person does not have a COVIDJournal
      account, make sure to let them know if they need a test. If you don't have
      anything to add, you can read recent news in your local area and
      how the pandemic is evolving in different countries.
      <br>
      For more information, click <a href="faq.html">here</a>.
    </p>
  </section>

  <div class="pimg1">
    <div class="ptext">
      <span class="border">
        <!-- Add video trailer -->
        COVIDJournal
      </span>
    </div>
  </div>

  <footer class="section section-dark-green">
    <a href="#" name="contact"></a>
    <h2>Contact me</h2>
    <div>
      <a href="https://fb.me/COVIDJournalApp">
        <i class="fa fa-facebook" aria-hidden="true"></i> 
          COVID Journal App</a> <br>
      <a href="https://www.instagram.com/covidjournal_app/">
        <i class="fa fa-instagram" aria-hidden="true"></i>
        @covidjournal_app</a><br>
      <a href="https://twitter.com/COVIDJournalApp">
      <i class="fa fa-fw fa-twitter"></i>
      @COVIDJournalApp
      </a><br>
      <a href="mailto:hello@covidjournal.net">
        <i class="fa fa-envelope" aria-hidden="true"></i>
        hello@covidjournal.net
      </a>
   </div>
   <div>
     <a href="../policies/terms.html">Terms & Conditions</a> | 
     <a href="../policies/privacy.html">Privacy Policy</a> | 
     <a href="../policies/cookie.html">Cookie Policy</a>
      <br> ?? <span id="year"></span> George Sima <br>
    </div>
  </footer>
</body>
</html>

<?php

$name = $_POST["name"];
$email = $_POST["email"];

require '../includes/init.php';
addEmail($link, $name, $email);

function addEmail($link, $name, $email) {
    $sql = "INSERT INTO `mailing_list_table` (`dataID`, `name`, `email`) SELECT NULL, '$name', '$email' FROM DUAL WHERE NOT EXISTS (SELECT * FROM `mailing_list_table` WHERE `email`='$email' LIMIT 1)";
    $check = mysqli_query($link, $sql);

    if ($check) {
      sendEmail($name, $email);
    } else {
      echo "ERROR HAS OCCURRED WHILE ADDING TOKEN " . mysqli_errno();
    }

    mysqli_close($link);
}

function sendEmail($name, $email) {
  $to = "hello@covidjournal.net";
  $subject = "$name has signed up to the mailing list";
  $txt = "Hello, my name is $name";
  $headers = "From: $email";

  mail($to, $subject, $txt, $headers);
}