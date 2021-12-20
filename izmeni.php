<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Mobile Shop</title>
  </head>
  <body>
  <header>
        <div id="izmeni-header">
          <br><br><br><br>
          <h1>Izmeni proizvod</h1>
          <br><br><br><br> 
        </div>
  </header>
    
  <br><br>

  <div >
    <div class="row">
      <div class="col-md-5 mx-auto">
        <?php
          //OO programiranje
          include 'model.php';
          $model = new Model();
          $id = $_REQUEST['id']; //isto prikupljanje podataka sa odredjenim id-jem
          $row = $model->izmeni($id); //pozivamo metodu izmeni taj podatak sa pokupljenim id-jem
 
          if (isset($_POST['update'])) {
            if (isset($_POST['name']) && isset($_POST['characteristics']) && isset($_POST['quantity'])) {
              if (!empty($_POST['name']) && !empty($_POST['characteristics']) && !empty($_POST['quantity']) ) {
                    
                $data['id'] = $id; //sam se generise
                $data['name'] = $_POST['name'];
                $data['characteristics'] = $_POST['characteristics'];
                $data['quantity'] = $_POST['quantity'];
                
                $update = $model->update($data);

                if($update){
                  echo "<script>alert('Podaci uspešno izmenjeni');</script>";
                  echo "<script>window.location.href = 'proizvodi.php';</script>";
                }else{
                  echo "<script>alert('Neuspešna izmena podataka');</script>";
                  echo "<script>window.location.href = 'proizvodi.php';</script>";
                }

              }else{
                echo "<script>alert('empty');</script>";
                header("Location: izmeni.php?id=$id");
              }
            }
          }

          ?>
          <!-- definisemo formu -->
          <form action="" method="post">

            <div class="form-group">
              <label for="">Naziv proizvoda</label>
              <input type="text" name="name" value="<?php echo $row['name']; ?>" class="form-control">
              <!-- form-control - da napravi polje ispod naziva proizvoda (bootstrap) -->
            </div>

            <div class="form-group">
              <label for="">Karakteristike proizvoda</label>
              <input type="characteristics" name="characteristics" value="<?php echo $row['characteristics']; ?>" class="form-control">
            </div>

            <div class="form-group">
              <label for="">Količina</label>
              <input type="decimal" name="quantity" value="<?php echo $row['quantity']; ?>" class="form-control">
            </div>
          
            <div class="form-group">
              <button style = "color:#000" type="submit" name="update" >Sačuvaj izmene</button>
            </div>

          </form>
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
color: #FFFF;
display: grid;
justify-content: center;
grid-gap: 1000px;
grid-template-columns: auto auto;
text-align:left;
}

#izmeni-header {
align-self: center;
grid-gap: 10px;
text-align:left;
}

body{

background-color: #a9deb2;
font-family: sans-serif;
font-weight: 500;
line-height: 1.2em;
color: black;

}

.container{
background-color:#000;
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
  <!-- jQuery prvo, onda Popper.js, onda Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
</body>
</html>