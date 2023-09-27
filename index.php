<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Titolo</title>

  <!-- LINK VUE.JS -->
  <!-- <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script> -->

  <!-- LINK BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />

  <!-- LINK MY CSS -->
  <link rel="stylesheet" href="./css/style.css" />

  <!-- SCRIPT MY JAVASCRIPT -->
  <!-- <script src="./js/main.js" defer></script> -->
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
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
              <option selected>Quanti caratteri deve avere la password</option>
              <option value="1">8</option>
              <option value="2">9</option>
              <option value="3">10</option>
              <option value="4">11</option>
              <option value="5">12</option>

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