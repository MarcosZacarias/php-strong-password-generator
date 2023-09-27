<?php session_start();
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
        Password generata
      </div>
      <div class="card-body">
        La tua password è:
        <strong>
          <?= $_SESSION["password"]; ?>
        </strong>
      </div>
    </div>
  </div>
</body>

</html>