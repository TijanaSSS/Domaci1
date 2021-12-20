<!doctype html>
<html lang="en">
  <head>
    <!-- Zahtevani meta podaci -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Mobile Shop</title>
  </head>
  <body >
  <header>
    <div id="prikazi-header">
      <br><br><br><br>
      <h1>Prikaz proizvoda</h1>
      <br><br><br><br>
    </div>
  </header>
  <br><br>

  <h1 class="text-center" style="color: black">Odabrani proizvod:</h1>
  <hr  style="height: 30px;background-color: white; width: 100%;">
  <div class="col-md-5 mx-auto">
    <div >
      <?php
      //OO programiranje, pravimo instancu Model-a
        include 'model.php';
        $model = new Model();
        $id = $_REQUEST['id'];
        $row = $model->fetch_single($id);
        if(!empty($row)){
          ?>
          <div class="card">
            <div class="card-header">
              Odabrani proizvod:
            </div>
            <div class="card-body">
              <p>Naziv proizvoda: <?php echo $row['name']; ?></p>
              <p>Karakteristike: <?php echo $row['characteristics']; ?></p>
              <p>Količina: <?php echo $row['quantity']; ?></p>
              <p align="center">
                <a href="proizvodi.php">
                <button id="submit1" >Nazad</button>
              </p>
            </div>
          </div>

          <?php
            }else{
              echo "Nema podataka o odabranom proizvodu";
            }
          ?>
    </div>
  </div>
</div>

<footer>
  <div id="footer-natpis">
    <br>
    <MARQUEE BEHAVIOR=ALTERNATE  direction=left> MOBILE SHOP!</MARQUEE>
  </div>
</footer>

<style>

header {
background-image: url('img/Android.jpg');
background-size: cover;
background-position: center top;
background-repeat: no-repeat;
color: #a9deb2;
display: grid;
justify-content: center;
grid-gap: 1000px;
grid-template-columns: auto auto;
}

#prikazi-header {
align-self: center;
grid-gap: 10px;
text-align:left;
}

body{
background-color: #a9deb2;
font-family: sans-serif;
font-weight: 400;
color: #000;
}

.container{
background-color:#000;
width: 100%;
}

#submit1{
transition-duration: 0.5s;
border-radius: 100px;
font-size: 20px;
color:#000;
background-color: white;  
}

#submit1:hover{
background-color: #000;
color: #000;
}

footer {
grid-template-columns: auto auto;
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
  </body>
</html>