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
                
                <li class="nav-item">
                  <a class="nav-link" href="#services">Services</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#contact">Contact us</a>
                </li> 
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
                      Welcome {{ Auth::user()->name }} <br>
                      <span>
                        
                      </span>
                    </h1>
                    <p>
                      You are one step closer to your mental wellness.<br>
                   
                    </p>
                    <div class="btn-box">
                      <a href="#services" class="btn-1" id="getStartedBtn">
                        Get Started
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
    </section>
  </div>
  
  <div class="body_bg layout_padding">
    <section class="features" id="services">
      <div class="container1">
        <section id="our-services" class="services">
          <div class="service-content">
            <h2>Access These Features</h2>
            <p>Click on the Service you would like to access</p>
          </div>
        </section>
        <section class="features" id="features">
        <a href="{{ route('game.breathing') }}" class="feature-link">
          <div class="feature-box" style="background-image: url('images/game.jpeg');">
            <h3>Interactive Game</h3>
            <p>Access a game that takes you through levels created to help you feel empowered upon completion.</p>
          </div>
         </a>
          <a href="{{ route('community') }}" class="feature-link">
            <div class="feature-box" style="background-image: url('images/chatroom.jpg');">
              <h3>Chat Rooms</h3>
              <p>Connect with others in a supportive and understanding community through chat rooms.</p>
            </div>
          </a>
          <a href="{{ route('mental_health_professionals') }}" class="feature-link">
            <div class="feature-box" style="background-image: url('images/help.png');">
              <h3>Professional Help</h3>
              <p>Find qualified mental health professionals and schedule appointments.</p>
            </div>
          </a>
        </section>
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
          <span>+254 734 790523</span>
        </div>
        <div class="contact-box">
          <img src="images/envelope.png" alt="" class="img-1">
          <span>info@eunoia.com</span>
        </div>
      </div>
      
    </div>
  </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function () {
      // Show the first modal when Get Started is clicked
      $('#getStartedBtn').click(function (event) {
        event.preventDefault();
        $('#mentalHealthModal1').modal('show');
      });

      // Handle Next button in the first modal
      $('#nextBtn1').click(function () {
        $('#mentalHealthModal1').modal('hide');
        $('#mentalHealthModal2').modal('show');
      });

      // Handle Finish button in the second modal
      $('#finishBtn').click(function () {
        $('#mentalHealthModal2').modal('hide');
        $('html, body').animate({
          scrollTop: $('#services').offset().top
        }, 1000);
      });
    });
  </script>

  
  <div class="modal fade" id="mentalHealthModal1" tabindex="-1" role="dialog"
    aria-labelledby="mentalHealthModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="mentalHealthModalLabel1">Choose Mental Health Problems</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="mentalHealthForm">
            <div class="form-group">
              <label for="problem1">Anxiety</label>
              <input type="checkbox" id="problem1" name="problems" value="Anxiety">
            </div>
            <div class="form-group">
              <label for="problem2">Depression</label>
              <input type="checkbox" id="problem2" name="problems" value="Depression">
            </div>
            <div class="form-group">
              <label for="problem3">ADHD</label>
              <input type="checkbox" id="problem3" name="problems" value="Stress">
            </div>
            <div class="form-group">
              <label for="problem3">Autisim</label>
              <input type="checkbox" id="problem3" name="problems" value="Stress">
            </div>
            <div class="form-group">
              <label for="problem3">Panic disorder</label>
              <input type="checkbox" id="problem3" name="problems" value="Stress">
            </div>
            <div class="form-group">
              <label for="problem3">Anorexia</label>
              <input type="checkbox" id="problem3" name="problems" value="Stress">
            </div>
            <div class="form-group">
              <label for="problem3">Bulmia</label>
              <input type="checkbox" id="problem3" name="problems" value="Stress">
            </div>
            <div class="form-group">
              <label for="problem3">Substance Addiction</label>
              <input type="checkbox" id="problem3" name="problems" value="Stress">
            </div>
            <div class="form-group">
              <label for="problem3">Schizofrenia</label>
              <input type="checkbox" id="problem3" name="problems" value="Stress">
            </div>
            <div class="form-group">
              <label for="problem3">Bipolar</label>
              <input type="checkbox" id="problem3" name="problems" value="Stress">
            </div>
            <div class="form-group">
              <label for="problem3">Other</label>
              <input type="checkbox" id="problem3" name="problems" value="Stress">
            </div>
            
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" id="nextBtn1">Next</button>
        </div>
      </div>
    </div>
  </div>

  
  <div class="modal fade" id="mentalHealthModal2" tabindex="-1" role="dialog"
    aria-labelledby="mentalHealthModalLabel2" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="mentalHealthModalLabel2">You're Sorted!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Thank you for choosing your mental health concerns. You're sorted!</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" id="finishBtn">Finish</button>
        </div>
      </div>
    </div>
  </div>

  </body>
  </html>