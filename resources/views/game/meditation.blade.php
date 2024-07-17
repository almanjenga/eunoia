<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Meditation</title>
  
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous">
  
  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset('css/meditatate.css') }}" />
</head>
<body>
  <div class="wrapper">
    <img id="mainBg" class="bg" src="images/bg.jpg" alt="" />
    <div class="level-container">
      <h2 class="level">Level 2</h2>
      <p>Guided Meditation</p>
      <p>Play the Sound</p>
    </div>
    <video id="stage-video" src="" muted autoplay loop></video>
    <div class="top-portion-wrapper">
      <div class="inner-main">
        <div class="animation">
          <div class="watch-face">
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="bottom-bar">
      <button class="audio-btn muted" id="switch-audio">
        <i class="fas fa-volume-mute"></i>
        <i class="fas fa-volume-up"></i>
      </button>
      <!-- <button class="audio-btn" id="random-audio">
        <i class="fas fa-random"></i>
      </button>
      <button id="toggle-video">
        <i class="fas fa-video"></i>
        <i class="fas fa-video-slash none"></i>
      </button> -->
      <!-- <div class="dp-trigger">
        <div class="dropdown">
          <ul>
            <li> -->
              <!-- <button>
                <a href="https://github.com/edumigueis/meditation-app" target="_blank" rel="noopener noreferrer"><i class="fab fa-github"></i></a>
              </button> -->
            <!-- </li>
            <li>
              <button id="config-btn"><i class="fas fa-cog"></i></button>
            </li>
          </ul>
        </div> -->
        <!-- <button><i class="fas fa-ellipsis-h"></i></button>
      </div> -->
    </div>
    <div class="poses" id="poses">
      <div class="current pose">
        <img src="./images/yoga1.png" alt="" />
      </div>
      <div class="pose">
        <img src="./images/yoga2.png" alt="" />
      </div>
      <div class="pose">
        <img src="./images/yoga3.png" alt="" />
      </div>
      <div class="pose">
        <img src="./images/yoga4.png" alt="" />
      </div>
      <div class="pose">
        <img src="./images/yoga5.png" alt="" />
      </div>
    </div>

  <!-- </div> -->
  <div class="modal-wrapper" id="config-md">
    <div class="modal">
      <div class="part">
        <p class="title">Theme</p>
        <div class="swatches">
          <div class="swatch active" data-theme="0" style="background-color: #70dfbd"></div>
          <div class="swatch" data-theme="1" style="background-color: #64aec4"></div>
          <div class="swatch" data-theme="8" style="background-color: #3d6bcf"></div>
          <div class="swatch" data-theme="2" style="background-color: #a2df70"></div>
          <div class="swatch" data-theme="3" style="background-color: #70addf"></div>
          <div class="swatch" data-theme="4" style="background-color: #bd31f5"></div>
          <div class="swatch" data-theme="5" style="background-color: #eb59f0"></div>
          <div class="swatch" data-theme="6" style="background-color: #e6b737"></div>
          <div class="swatch" data-theme="7" style="background-color: #e68637"></div>
        </div>
      </div>
      <div class="part flex">
        <p class="title">Yoga Poses</p>
        <div class="toggle-wrapper">
          <input type="checkbox" id="toggly" />
          <label for="toggly"><i></i></label>
        </div>
      </div>
      <div class="part">
        <p class="title">Background</p>
        <div class="backgrounds">
          <input type="file" id="imgupload" style="display: none" accept="image/*" onchange="openFile(event)" />
          <div class="back">
            <img src="./images/bg.jpg" alt="" id="OpenImgUpload" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="button-container">
      <button id="finishButton" class="btn btn-primary finish-btn">Finish</button>
      <a href="/redirects" class="btn btn-secondary back-home-btn">Back Home</a><br>

</div>
      <div id="endExerciseModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Well done!</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Here's a motivational quote:</p>
              <blockquote class="motivational-quote">"Dream it. Wish it. Do it."</blockquote>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary next-level-btn">Next Level</button>
            </div>
          </div>
        </div>
      </div>
  
  <!-- JavaScript -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>       
  <script src="{{ asset('js/app.js') }}"></script>
  <script>
    // JavaScript for the Finish button and modal
    $(document).ready(function () {
      $('#finishButton').click(function () {
        $('#endExerciseModal').modal('show');
      });

      // Example function to handle next level button
      $('.next-level-btn').click(function () {
        // Add logic to move to the next level
        // You can redirect to the next level or handle as per your application flow
        window.location.href = "{{ route('game.memory') }}";
      });
    });
  </script>
</body>
</html>
