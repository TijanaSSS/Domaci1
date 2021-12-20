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
      <div id="proizvodi-header">

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <h1>Proizvodi</h1>

        <!-- <a href="dodaj.php"> -->
      <form>
        <div class="dodaj" >
        <button style="color: #000; margin-left: 35%; id=submit1;" formaction="dodaj.php">Dodaj proizvod!</button> 
        <!-- formaction gde se salju podaci i on zamenjuje atribut radnje obrasca -->
        </div>
      </form>
      </div>
    </header>

    <br><br>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr  style="color: #000; font-weight:bold;">
                <th></th>
                <th>Naziv telefona</th>
                <th>Opis proizvoda</th>
                <th>Količina</th>
                <th></th>
              </tr>

              <tbody id="myTable">
              <p style="color: #white; margin-right:50px; font-weight:bold;">Pretražite proizvode:</p>  
              <input id="myInput" type="text" placeholder="Pretraži..">

              <br><br>

              <?php
                include 'model.php';
                $model = new Model();
                $rows = $model->fetch(); //vraca niz iz baze koji je indeksiran onako kako je i u bazi sa rednim brojevima
                $i = 1;

                //Ispisujemo sve proizvode iz baze
                if(!empty($rows)){
                  foreach($rows as $row){ //uzimamo jedan po jedan red
              ?>

              <tr style="color: #000; font-weight:bold;">
                <td><?php echo $i++; ?></td> <!-- redni brojevi -->
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['characteristics']; ?></td>
                <td><?php echo $row['quantity']; ?></td>
                <td>
                  <a  href="prikazi.php?id=<?php echo $row['id']; ?>" class="badge badge-primary">Prikaži</a>
                  <a href="obrisi.php?id=<?php echo $row['id']; ?>" class="badge badge-danger">Obriši</a>
                  <a href="izmeni.php?id=<?php echo $row['id']; ?>" class="badge badge-warning">Izmeni</a>
                </td>
              </tr>

                <?php
                }
                  }else{
                    echo "Nema podataka o proizvodu";
                  }
                ?>
            

              </tbody>
          </table>

<!--   AJAX    -->
<?php 
include_once("konekcija.php");
?> 

<div class="container">
	<h2>Informacije o telefonu:</h2>		
	
	<div class="page-header">
    <h3>
			<select id="padajuciMeni" class="form-control" >
				<option value="" >Izaberi telefon</option>

				<?php
				$sql = "SELECT id, Model, Naziv, Ocena FROM model";
				$resultset = mysqli_query($conn, $sql);
				while( $rows = mysqli_fetch_assoc($resultset) ) { 
				?>

				<option value="<?php echo $rows["id"]; ?>"><?php echo $rows["Naziv"]; ?></option>
				<?php }	?>

			</select>
    </h3>	
  </div>	

	<div class="hidden" id="errorMassage"></div>
	<table class="table table-striped hidden" id="recordListing">
		<thead>
		  <tr>
			<th>Id</th>
			<th>Model</th>
			<th>Naziv</th>
			<th>Ocena</th>
		  </tr>
		</thead>
		<tbody>
		  <tr>
			<td id="id"></td>
			<td id="model"></td>
			<td id="naziv"></td>
			<td id="ocena"></td>
		  </tr>
		</tbody>			
	</table>       
  </div>
      
</div>
</div>
</div>  


<style>

tr, td{
  color: #000;
}
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

#proizvodi-header {
  align-self: center;
  grid-gap: 10px;
  text-align:left;
}

body{
  background-color: #a9deb2;
  font-family: sans-serif;
  font-weight: 400;
  line-height: 1.5em;
  color: beige;
  margin: 20px;
}

.container{
  background-color:#a9deb2;
}

#submit1{
	border-radius: 50px;
  font-size: 15px;
  color:#000;
  background-color: #000; 
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/getData.js"></script>

<!-- PRETRAGA PO TABELAMA -->
<script>
  $(document).ready(function(){
  $("#myInput").on("keyup", function() { 
  var value = $(this).val().toLowerCase();   //svaki put prikuplja podatke svih kolona iz reda kao veliki niz
  $("#myTable tr").filter(function() {      
  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)    //indexof - za pretrazivanje pozicije date vrednosti iz stringa
  //toggle - se poziva pod uslovom indexof, redovi u tabeli ce biti skriveni ukoliko se ne poklapaju sa korisnikovim unosom
    });
  });
});
</script>

</body>
</html>