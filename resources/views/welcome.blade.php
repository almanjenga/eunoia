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
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css')}}" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
  <link href="{{ asset('css/style.css')}}" rel="stylesheet" />
  <link href="{{ asset('css/responsive.css')}}" rel="stylesheet" />
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
                <li class="nav-item">
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
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('login')}}">Log in</a>
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
                      Welcome To <br>
                      <span>
                        Eunoia
                      </span>
                    </h1>
                    <p>
                      You don't have to struggle in silence.<br>
                      There is hope even when your brain tells you there isn't.
                    </p>
                    <div class="btn-box">
                      <a href="{{ route('register')}}" class="btn-1">
                        Sign Up
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="row">
              <div class="col-md-7">
                <div class="detail-box">
                  <div>
                    <h1>
                      Welcome To <br>
                      <span>
                        Content Writing Services
                      </span>
                    </h1>
                    <p>
                      It is a long established fact that a reader will be distracted by the readable content of a page
                      when looking
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn-1">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <section class="about_section layout_padding" id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About Us
              </h2>
            </div>
            <p>
              Welcome to Eunoia, a mental health support platform dedicated to fostering well-being and connection. Our mission is to provide a safe and supportive environment where individuals can access resources, engage with a community, and seek professional help when needed.
            </p>
            <p>
              Join us on this journey to better mental health and well-being. Together, we can build a supportive community and break the stigma around mental health.
            </p>
            <a href="{{ route('register')}}">
              Get Started
            </a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/mindfulness.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="body_bg layout_padding">
    <section class="features" id="services">
      <div class="container1">
        <section id="our-services" class="services">
          <div class="service-content">
            <h2>Our Services</h2>
            <p>At Eunoia, we offer a range of services designed to enhance your mental well-being. Sign up today to access personalized support and resources tailored to your needs</p>
          </div>
        </section>
        <section class="features">
          <div class="feature-box" style="background-image: url('images/anonymous.jpeg');">
            <h3>Anonymity</h3>
            <p>Log in anonymously so as to communicate freely.</p>
          </div>
          <div class="feature-box" style="background-image: url('images/game.jpeg');">
            <h3>Interactive Game</h3>
            <p>Access a game that takes you through levels created to help you feel empowered upon completion.</p>
          </div>
          <div class="feature-box" style="background-image: url('images/OIP (1).jpeg');">
            <h3>Community Support</h3>
            <p>Connect with others in a supportive and understanding community through anonymous chat rooms.</p>
          </div>
          <div class="feature-box" style="background-image: url('images/help.png');">
            <h3>Professional Help</h3>
            <p>Find qualified mental health professionals and schedule appointments.</p>
          </div>
        </section>
      </div>
    </section>
    <section class="quote_section layout_padding">
      <div class="container">
        <div class="box">
          <div class="detail-box">
            <h3>
              Join Us Today!
            </h3>
            <p>
              Sign up to get one step closer to your mental wellness.
            </p>
          </div>
          <div class="btn-box">
            <a href="{{ route('register')}}">
              Sign Up
            </a>
          </div>
        </div>
      </div>
    </section>
  </div>
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

  

</body>
</html>