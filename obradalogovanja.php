<?php 

if (isset($_POST["submit"])){
   if (isset($_POST['username'])&&isset($_POST['password'])){
      $username = $_POST['username'];
      $password = $_POST['password'];

      include "konekcija.php";
      $sql="SELECT * from korisnici where username='$username' and password='$password'";
      $q=$conn->query($sql);

//Upozorenje ukoliko je neka ili obe vrednosti pogresno unete
      if(empty($username) || empty($password)){
         echo "<script>
         alert('Morate uneti obe vrednosti');   
         window.location.href='index.php';
         </script>";
      } else {
         if($q->num_rows==1){
            header("location: proizvodi.php");
         } else {
            echo "<script>
            alert('Pogrešno korisničko ime ili šifra');
            window.location.href='index.php';
            </script>";
         }
      }
   }
}
$mysqli->close();
?>