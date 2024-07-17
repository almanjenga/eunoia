<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <title>Memory Game - Level 3</title>
  <link rel="stylesheet" href="{{ asset('css/memory.css') }}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body class="body-bg">

  <!-- <h3>Score: <span id="result"></span></h3> -->

  <div class="container text-center">
    <h1>Level 3</h1> <!-- Title added here -->
    <p>Memory Game</p>
    <div class="grid">
      <!-- Game board will be dynamically created by JavaScript -->
    </div>
  </div>
  <h3>Score: <span id="result"></span></h3>
  <div class="container mt-4">
    <div class="button-container text-center">
      <button id="finishButton" class="btn btn-primary finish-btn">Finish</button>
      <a href="/redirects" class="btn btn-secondary back-home-btn">Back Home</a><br>
      <button id="repeatButton" class="btn btn-info repeat-btn">Repeat</button>
    </div>
  </div>

  <!-- Modal -->
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
          <blockquote class="motivational-quote">
            "Believe you can and you're halfway there."
          </blockquote>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary next-level-btn">Next Level</button>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="{{ asset('js/app1.js') }}"></script>
  <script>
    // JavaScript for the Finish button and modal
    $(document).ready(function () {
      $('#finishButton').click(function () {
        $('#endExerciseModal').modal('show');
      });

      // Example function to handle next level button
      $('.next-level-btn').click(function () {
        // Add logic to move to the next level
        window.location.href = "{{ route('game.meditation') }}"; // Replace with your actual route
      });
    });

    $('#repeatButton').click(function () {
      location.reload(); // Reload the page to start again
    });
  </script>

</body>
</html>
