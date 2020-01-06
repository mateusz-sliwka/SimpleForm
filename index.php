<!doctype html>
 <?php //funkcja przekazania argumentow z formularza (post) do sesji 
        ini_set('display_errors', 1);
        error_reporting(E_ALL); 
        session_start();

         if (isset($_POST['firstName'])) { 
             $_SESSION['firstname'] = $_POST['firstName'];
             $_SESSION['lastname'] = $_POST['lastName'];
              $_SESSION['age'] = $_POST['age'];
               $_SESSION['education'] = $_POST['education'];
                $_SESSION['email'] = $_POST['email'];
                 $_SESSION['address'] = $_POST['address'];
                  $_SESSION['state'] = $_POST['state'];
                   $_SESSION['zip'] = $_POST['zip'];
             header('Location: pages/step2.php');
         } 

    ?>    
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
 

    <title>Formularz rekrutacyjny - programista C#</title>

    <!-- Bootstrap core CSS -->
    <link href="styles/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="styles/form-validation.css" rel="stylesheet">

    <!--  jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

    <!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
  </head>

  <body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="img/logo.png" alt="" width="72" height="72">
        <h2>Formularz rekrutacyjny</h2>
        <p class="lead">Poniżej znajduje się formularz rekrutacyjny na stanowisko <b>młodszy programista C#</b>. Zapraszamy do udziału w procesie rekrutacyjnym.</p>
      </div>

      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Stanowisko</span>
       
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Młodszy programista C#</h6>
                <small class="text-muted">Nazwa stanowiska</small>
              </div>
        
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Pełen etat</h6>
                <small class="text-muted">Wymiar godzinowy</small>
              </div>
         
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Wrocław, Rynek 11</h6>
                <small class="text-muted">Miejsce pracy</small>
              </div>
  
            </li>
            
            <li class="list-group-item d-flex justify-content-between">
              <span>Wynagrodzenie</span>
              <strong>3000zł</strong>
            </li>
          </ul>

          
        </div>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">   <span class="text-muted">Etap 1</span> Dane osobowe</h4>
          <form class="needs-validation" action="index.php" method="post" novalidate>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Imię</label>
                <input type="text" class="form-control" name="firstName" id="firstName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Podaj poprawne imię.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Nazwisko</label>
                <input type="text" class="form-control" name="lastName" id="lastName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Podaj poprawne nazwisko.
                </div>
              </div>
            </div>
     <div class="row">
       <div class="col-md-6 mb-3">
         <label for="age">Twój wiek</label>
                <input type="number" class="form-control" name="age" step="1" min="18" max="50" default="18" required>
                <div class="invalid-feedback">
                  Podaj poprawny wiek (18-50l.)
                </div>
              </div>
  
  <div class="col-md-6 mb-3">
         <label for="education">Wykształcenie</label>
               <select class="custom-select d-block w-100" name="education" id="education" required>
                  <option value="">Wybierz...</option>
                  <option>Podstawowe</option>
                    <option>Średnie</option>
                      <option>Wyższe</option>
                </select>
                <div class="invalid-feedback">
                  Wybierz jedno z wykształceń.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Adres e-mail </label>
              <input type="email" class="form-control" name="email" id="email" placeholder="janusz@polska.pl" required>
              <div class="invalid-feedback">
                Podaj poprawny adres e-mail.
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Adres zamieszkania</label>
              <input type="text" class="form-control" name="address" id="address" placeholder="Walońska 13/21, Wrocław" required>
              <div class="invalid-feedback">
                Podaj poprawny adres zamieszkania.
              </div>
            </div>

            <div class="row">
  
              <div class="col">
                <label for="state">Województwo</label>
                <select class="custom-select d-block w-100" name="state" id="state" required>
                  <option value="">Wybierz...</option>
                  <option>Dolnośląskie</option>
                    <option>Mazowieckie</option>
                      <option>Świętokrzyskie</option>
                </select>
                <div class="invalid-feedback">
                  Wybierz jedno z województw.
                </div>
              </div>
              <div class="col">
                <label for="zip">Kod pocztowy</label>
                <input type="text" class="form-control" name="zip" id="zip" placeholder="" required>
                <div class="invalid-feedback">
                  Kod pocztowy jest wymagany.
                </div>
              </div>
            </div>
            
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Przjedź do następnego kroku</button>
          </form>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; Mateusz Śliwka</p>
   
      </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="scripts/jquery-slim.min.js"><\/script>')</script>
    <script src="scripts/popper.min.js"></script>
    <script src="scripts/bootstrap.min.js"></script>
    <script src="scripts/holder.min.js"></script>
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
  </body>
</html>
