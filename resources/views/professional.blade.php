
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Eunoia</title>
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css')}}" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
  <link href="{{ asset('css/style.css')}}" rel="stylesheet" />
  <link href="{{ asset('css/responsive.css')}}" rel="stylesheet" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    footer {
      background-color: #333;
      color: #fff;
      padding: 40px 0;
    }

    footer .contact-box {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
    }

    footer .contact-box img {
      width: 30px;
      margin-right: 15px;
    }

    footer .contact-box span {
      font-size: 18px;
    }

    footer .heading_container h2 {
      font-size: 36px;
      margin-bottom: 30px;
    }
  </style>
</head>

<body>
  <div class="hero_area">
    <!-- header section starts -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand mr-5" href="">
            <span>
              Eunoia
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav">
                <!-- <li class="nav-item">
                  <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#services">Our Services</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#contact">Contact us</a>
                </li> -->
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('profile.show') }}"> User Profile</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- header section ends -->
    <section class="slider_section position-relative" id="home">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container">
            <div class="row">
              <div class="col-md-7">
                <div class="detail-box">
                  <div>
                    <h1>
                      {{ Auth::user()->name }} <br>
                      <span>
                        <!-- Welcome {{ Auth::user()->name }} -->
                      </span>
                    </h1>
                    <p>
                      <br>
                      <!-- There is hope even when your brain tells you there isn't. -->
                    </p>
                    
                    <div class="btn-box">
                      <a href="{{ route('community') }}" class="btn-1" id="getStartedBtn">
                        Access Chats
                      </a>
                    </div>
                    <div class="btn-box">
                      <a href="{{ route('appointments') }}" class="btn-1" id="getStartedBtn">
                        Appointment Bookings
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
    </section>
    <footer id="contact" class="info_section layout_padding footer_contact">
    <div class="container">
      <div class="heading_container">
        <h2>
          Contact Us
        </h2>
      </div>
      <div class="box">
        <div class="contact-box">
          <img src="images/location.png" alt="" class="img-1">
          <span>Nairobi, Kenya</span>
        </div>
        <div class="contact-box">
          <img src="images/call.png" alt="" class="img-1">
          <span>+254 743 790523</span>
        </div>
        <div class="contact-box">
          <img src="images/envelope.png" alt="" class="img-1">
          <span>info@eunoia.com</span>
        </div>
      </div>
      
    </div>
  </footer>
  </div>
  </html>