<!doctype html>
<html lang="en">
  <head>
    <!-- Zahtevani meta tagovi -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Mobile Shop</title>
  </head>
  <body>

    <header>
      <div id="registracija-header">
        <br><br><br><br><br>
        <h1>Mobile Shop</h1>
        <br><br><br><br><br>
      </div>
    </header>

    <br><br>
    <div class="container">
      <div class="row">
        <div class="col-md-5 mx-auto">

          <?php
              include 'model.php';
              $model = new Model();
              $insert = $model->insert();
          ?>

          <form name="form" action="" method="post" style="color: #000; font-weight:bold; border:solid 3px #FFF">
            <div class="form-group">
              <label for="">Naziv proizvoda</label>
              <input type="text" name="name" class="form-control"> 
              <!-- bootstrap gde su ukljuceni stilovi za opsti izgled, stanje fokusa, velicine.. -->
            </div>

            <div class="form-group">
              <label for="">Opis proizvoda</label>
              <input type="characteristics" name="characteristics" class="form-control">
            </div>

            <div class="form-group">
              <label for="">Količina</label>
              <input type="decimal" name="quantity" class="form-control">
            </div>

            <div class="form-group">
              <button type="submit" name="submit" onclick="allnumeric(document.form.quantity)">Dodaj</button>
            </div>

          </form>
        </div>
      </div>
    </div>

<footer>
  <div id="footer-natpis">
    <br>
    <MARQUEE BEHAVIOR=ALTERNATE  direction=left> DODAJ PROIZVOD!</MARQUEE>
  </div>
</footer>


<style>

header {
background-image: url('img/Android.jpg');
background-size: cover;
background-position: center top;
background-repeat: no-repeat;
background-size: cover;
background-position: center top;
background-repeat: no-repeat;
color: #FFF;
display: grid;
justify-content: center;
grid-gap: 950px;
grid-template-columns: auto auto;
opacity: 0.8; 
}

#proizvodi-header {
align-self: center;
grid-gap: 10px;
text-align:left;
}

body{
background-color: #a9deb2;
font-family: sans-serif;
font-weight: 400;
line-height: 1.3em;
color: beige;
margin: 20px;
}

.container{
background-color:#a9deb2;
}

footer {
grid-template-columns: auto;
position: absolute;
height: 8vh;
width: 100%;
bottom: 0;
font-size: 20px;
}

</style>
  
  <!-- jQuery, Popper.js, Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="all-numbers.js"></script>
 
  </body>
</html>