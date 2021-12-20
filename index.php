<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
 
    <title>Mobile Shop</title>
  </head>

  <body>
    <div class="sadrzaj">
      <h1 align="left" style="color:#FFFF;font-size:40px; text-align:left;">Dobrodošli na naš sajt!</h1>    
      <div >
        <div class="col-md-5">    <!-- ovo je da bude sve lepo rasporedjeno jedno ispod drugog npr ime, prezime itd-->
          <!-- col-md je medium velicina-->
          <div style = "margin:30px;">
            <!-- povezujemo sa obradomlogovanja, gde prihvatamo log in -->
            <form action = "obradalogovanja.php" method = "post">

              <b> <i> Korisničko ime</i></b> : <input type = "text" name = "username" /><br /><br />
              <b> <i>  Šifra</i></b> : <input type = "password" name = "password"  /><br/><br />
              <input style = "color:#000" type = "submit" value = "Login" name="submit"/><br />
              <br>

              <a href="registracija.php">
                <input style = "color:#000" type = "button" value = "Registration" name="button" /><br />
              </a>
    
            </form>
            <br>
          </div>
        
        </div>       
      </div>
    </div>

<footer>
  <div id="footer-natpis">
    <br>
    <MARQUEE BEHAVIOR=ALTERNATE> MOBILE SHOP!</MARQUEE> <!-- alternative je da ide od pocetka strane do kraja -->
  </div>
</footer>

<style>
body{
  background-image: url('img/prva.jpg');
  font-family: sans-serif;
  font-weight: 500;
  line-height: 1.8em;
  color: #FFFF;
  width: 100%;
  height: 80%;
  background-size: cover;
  background-position: center;
  background-position: center top;
  background-repeat: no-repeat;
  
}

footer {
  
  display: grid;
  grid-template-columns: auto; /* velicin kolone je odredjena velicinom sdrzaja u njoj */
  position: absolute;
  height: 8vh;
  width: 100%;
  bottom: 0;
  font-size: 40px;
 
}

.sadrzaj {

  display: grid;
  justify-content: left;
  padding-top: 50px;
  padding-bottom: 30px;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  margin-top: 30px;
  margin-left: 40px;
   
}


</style>

<!-- Option 1: Bootstrap Bundle wiyh Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>