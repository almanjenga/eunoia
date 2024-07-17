<!DOCTYPE html>
<html>
<head>
    <!--CSS Style sheet-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/breathe.css') }}">
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
<body>
    <title>Breathing Exercise</title>
    <div class="level-container">
        <h2 class="level">Level 1</h2>
        <p>Breathing Exercise </p>
    </div>
    <div class="border-circle-container"></div>
    <div class="main-circle-container">
        <h1 class="breathing">Breathing starts in</h1>
    </div>
    <div class="progress-circle-container">
        <div class="circle-one">
            <h1 class="one">1</h1>
        </div>
        <div class="circle-two">
            <h1 class="two">2</h1>
        </div>
        <div class="circle-three">
            <h1 class="three">3</h1>
        </div>
    </div>
    <div class="col-sm-6 col-sm-offset-3 text-center content">
    </div>

    <!-- Finish Button -->
    <div class="button-container">
        <button id="finishButton" class="btn btn-primary finish-btn">Finish</button>
        <a href="/redirects" class="btn btn-secondary back-home-btn">Back Home</a><br>
        <!-- <button id="repeatButton" class="btn btn-info repeat-btn">Repeat</button> -->
    </div>
    <button id="repeatButton" class="btn btn-info repeat-btn">Repeat</button>

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
                        "Your only limit is you."
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
                 window.location.href = "{{ route('game.meditation') }}"
            });
        });

        $('#repeatButton').click(function () {
                location.reload(); // Reload the page to start again
            });
    </script>
</body>
</html>
