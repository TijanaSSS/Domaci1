<?php 
	
if(isset($_POST['submitregistar'])) {
	if(isset($_POST['usernameregistar']) && isset($_POST['emailregistar']) && isset($_POST['passwordregistar']) ) {
		$email=$_POST['emailregistar'];
		$username=$_POST['usernameregistar'];
		$password=($_POST['passwordregistar']);

		include "konekcija.php";
		$sql="SELECT * from korisnici";
		$rezultat = $mysqli->query($sql);
		if($rezultat->num_rows==0){
			$sql2="INSERT INTO korisnici (username,password,email) values ('".$username."', '".$password."', '".$email."')";
				if($mysqli->query($sql2)){
					header("refresh:1;url='index.php'");
					echo "Uspešno ste se registrovali!";
				} else {
					echo "<script>
					alert('Došlo je do greške prilikom registracije!');
					window.location.href='registracija.php';
					</script>";
				}

		} else {
			while ($red=$rezultat->fetch_object()) { //vraca trenutni red skupa rezultata
				if(empty($username) || empty($password) || empty($email)){
    				echo "<script>
					alert('Morate uneti sve tražene podatke!');
					window.location.href='registracija.php';
					</script>";
				} else {    
					if($red->username==$username) {
						echo "<script>
						alert('Korisničko ime vec postoji!');
						window.location.href='registracija.php';
						</script>";

					} else {
						$sql2="INSERT INTO korisnici (username,password,email) values ('".$username."', '".$password."', '".$email."')";
						if($mysqli->query($sql2)){
							header("refresh:1;url='index.php'");
							echo "Uspešno ste se registrovali!";
						}
					}
				}

			}
		}
	}
}
$mysqli->close();
?>