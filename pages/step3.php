<?php //funkcja sprawdzajaca czy potrzebne parametry sa ustawione w sesji, jesli nie to waraca krok wczesniej
    ini_set('display_errors', 1);
    error_reporting(E_ALL); 
    session_start();
 if (!isset($_SESSION['firstname'])) { 
           
             header('Location: ../index.php');
         } 
         else if (!isset($_SESSION['result'])) { 
              header('Location: step2.php');
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
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Koniec rekrutacji</h5>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     <strong><?php echo  $_SESSION["firstname"] ; ?></strong>! Dziękujemy za udział w rekrutacji. <br>Twoja aplikacja została niby wysłana do nibyrekrutera. Tak naprawdę to tylko zadanie z kursu KN Kredek.<br> Pozdro ;-)
      </div>

    </div>
  </div>
</div>
  <body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="../img/logo.png" alt="" width="72" height="72">
        <h2>Formularz rekrutacyjny</h2>
      
      </div>
      

          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Podsumowanie aplikacji</span>
       
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0"> <?php echo  $_SESSION["firstname"].' '.$_SESSION["lastname"] ; ?></h6>
                <small class="text-muted">Imię i nazwisko</small>
              </div>
        
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">  <?php echo  $_SESSION["age"] ; ?></h6>
                <small class="text-muted">Wiek</small>
              </div>
         
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">  <?php echo  $_SESSION["education"] ; ?></h6>
                <small class="text-muted">Wykształcenie</small>
              </div>
  
            </li>
               <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">  <?php echo  $_SESSION["email"] ; ?></h6>
                <small class="text-muted">E-mail</small>
              </div>
                 <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0"> <?php echo  $_SESSION["state"].' '.$_SESSION["zip"].' '.$_SESSION["address"]; ?></h6>
                <small class="text-muted">Adres zamieszkania</small>
              </div>
  
            </li>
  
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Wynik testu</span>
              <strong><?php echo  $_SESSION["result"].'/5pkt' ; ?></strong>
            </li>
          </ul>

<div class="przyciski text-center"> 
  
 <button class="btn btn-success center-block" data-toggle="modal" data-target="#myModal">Prześlij aplikacje</button></div>

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

  </body>
</html>
