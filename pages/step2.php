<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL); 
    session_start();
   if (!isset($_SESSION['firstname'])) { //funkcja przekazania przeslanego wyniki z formularza.quizu do sesji
           
             header('Location: ../index.php');
         } 
         if (isset($_POST['result'])) { 
             $_SESSION['result'] = $_POST['result'];
             header('Location: step3.php');
         } 

    ?>    
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
 

    <title>Formularz rekrutacyjny - programista C#</title>

    <!-- Bootstrap core CSS -->
    <link href="../styles/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../styles/form-validation.css" rel="stylesheet">

    <!--  jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>


    <!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
<link rel="stylesheet" href="../styles/style.css"/>

  </head>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Etap 2</h5>

      </div>
      <div class="modal-body">
      Cześc, <strong> <?php echo  $_SESSION["firstname"] ; ?></strong>!<br> Dziękujemy za wypełnienie pierwszego etapu. Przed Tobą runda druga. <br>Podczas tego etapu będziesz miał minutę na odpowiedzenie na 5 pytań dotyczących wiedzy ogólnej. <br>Zegar startuje po wcisnięciu przycisku poniżej. Powodzenia ;-)
      </div>
      <div class="modal-footer">
        <button type="button" name="closeModal" id="closeModal" class="btn btn-primary">Start</button>
      </div>
    </div>
  </div>
</div>
  <body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="../img/logo.png" alt="" width="72" height="72">
        <h2>Formularz rekrutacyjny</h2>
        <p class="lead">Poniżej znajduje się formularz rekrutacyjny na stanowisko <b>młodszy programista C#</b>. Zapraszamy do udziału w procesie rekrutacyjnym.</p>
      </div>

    <div class="quiz">
       <div class="col-md-8 order-md-1">
          <h4 class="mb-3">   <span class="text-muted">Etap 2</span> Test wiedzy</h4>
        </div>
        <div id="quiz1" class="text-center">
      
     <center><span id="iTimeShow">Pozostały czas: </span><br/><span id='timer' style="font-size:25px;"></span>

    </div>
    
  <div id="qna">
        <div class="question"></div>
        <ul class="choiceList"></ul>
     </div>
        <div class="result"></div>
           <button class="btn btn-dark" id="nxtButton">Odpowiedz</button>
<div class="przyciski text-center"> 
     <form action="step2.php" method="post" >
      <input type="hidden" id="result" name="result" value="0"/>
 <button class="btn btn-success center-block" id="nxtStep" type="submit">Przejdź dalej</button></div>
</form>
    </div>
    <div class="alert alert-warning" id="quizMessage"></div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; Mateusz Śliwka</p>
   
      </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="../scripts/quiz.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../scripts/jquery-slim.min.js"><\/script>')</script>
    <script src="../scripts/popper.min.js"></script>
    <script src="../scripts/bootstrap.min.js"></script>
    <script src="../scripts/holder.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
    <script type="text/javascript">
 
    </script>
<script type="text/javascript">
    $(window).on('load',function(){
        $('#myModal').modal('show');
    });
</script>
  </body>
</html>
