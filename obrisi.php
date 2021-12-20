<?php 

	include 'model.php';
	$model = new Model();
	$id = $_REQUEST['id']; //super globalna promenljiva za prikupljanje podataka sa ovdredjenim id-jem
	$delete = $model->obrisi($id); //pozivamo tu metodu da izbrisi taj dokument sa pokupljenim id-jem

	if ($delete) {
		echo "<script>alert('Uspešno izbrisan proizvod!');</script>";
		echo "<script>window.location.href = 'proizvodi.php';</script>";
	}

 ?>