<?php
include __DIR__ . "/partials/functions.php";

session_start();

// Possibili caratteri per la password
$_SESSION["possible_characters"] = "abcdefgefghilmnopqrstuvzABCDEFGHILMNOPQRSTUVZ0123456789£$%&@#§!?";

// Verifica se il form è stato inviato
$check_form = isset($_GET["numb-password"]);

// Se si invia il form
if ($check_form) {
  // lunghezza della password dal numero richiesto dal form
  $_SESSION["lenght_passw"] = (int) $_GET["numb-password"];

  // Richiamo la funzione per generare la password
  $_SESSION["password"] = gen_passw($_SESSION["possible_characters"], $_SESSION["lenght_passw"]);
  // var_dump($password);

  header("Location: ./success.php");

}





?>






<!DOCTYPE html>
<html lang="en">

<head>
  <?php include __DIR__ . "/template/_head.php" ?>
</head>

<body>
  <div class="container">
    <div class="card my-3">
      <div class="card-header">
        Strong Password Generator
      </div>
      <div class="card-body">
        <form action="" method="GET">

          <div class="form-floating mb-3">
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example"
              name="numb-password">
              <option selected>Quanti caratteri deve avere la password</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>

            </select>
            <label for="floatingSelect">Scegli la lunghezza della password</label>
          </div>
          <button class="btn btn-primary ">Genera password</button>
        </form>

      </div>
    </div>

  </div>


  <!-- DIV VUE.JS -->
  <!-- <div id="app">{{ message }}</div> -->
  <!-- SCRIPT BOOTSTRAP JAVASCRIPT -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>