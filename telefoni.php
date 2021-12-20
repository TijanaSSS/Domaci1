<?php 
include_once("konekcija.php");
if($_POST['id']) {
	$sql = "SELECT id, Model, Naziv, Ocena 
	FROM model 
	WHERE id='".$_POST['id']."'";
	$resultSet = mysqli_query($conn, $sql);	
	$empData = array();
	while( $emp = mysqli_fetch_assoc($resultSet) ) {
		$empData = $emp;
	}
	echo json_encode($empData);
} else {
	echo 0;	
}  
?>