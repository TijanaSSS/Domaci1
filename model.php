<?php 

	Class Model{
		private $server = "localhost";
		private $username = "root";
		private $password;
		private $db = "domacibaza1";
		private $conn;

		public function __construct(){
			try {
				$this->conn = new mysqli($this->server,$this->username,$this->password,$this->db);
			} catch (Exception $e) {
				echo "connection failed" . $e->getMessage();
			}
		}

		public function insert(){
			if (isset($_POST['submit'])) {
				if (isset($_POST['name']) && isset($_POST['characteristics']) && isset($_POST['quantity'])) {
					if (!empty($_POST['name']) && !empty($_POST['characteristics']) && !empty($_POST['quantity']) ) {
						
						$name = $_POST['name'];
						$characteristics = $_POST['characteristics'];
						$quantity = $_POST['quantity'];
						

						$query = "INSERT INTO proizvodi (name,characteristics,quantity) VALUES ('$name','$characteristics','$quantity')";
						if ($sql = $this->conn->query($query)) {
							echo "<script>alert('Proizvod je uspešno dodat!');</script>";
							echo "<script>window.location.href = 'proizvodi.php';</script>";
						}else{
							echo "<script>alert('Greška!');</script>";
							echo "<script>window.location.href = 'proizvodi.php';</script>";
						}

					}else{
						echo "<script>alert('Unesite sve tražene podatke u odgovarajućem formatu!');</script>";
						echo "<script>window.location.href = 'proizvodi.php';</script>";
					}
				}
			}
		}

		public function fetch(){
			$data = null;

			$query = "SELECT * FROM proizvodi";
			if ($sql = $this->conn->query($query)) {
				while ($row = mysqli_fetch_assoc($sql)) { //red po red se uzima
					$data[] = $row;
				}
			}
			return $data;
		}

		public function obrisi($id){
			$query = "DELETE FROM proizvodi where id = '$id'";
			if ($sql = $this->conn->query($query)) {
				return true;
			}else{
				return false;
			}
		}

		public function fetch_single($id){

			$data = null;

			$query = "SELECT * FROM proizvodi WHERE id = '$id'";
			if ($sql = $this->conn->query($query)) {
				while ($row = $sql->fetch_assoc()) {
					//fetch_assoc()-uzim red rezultata kao asocijativni niz
					$data = $row;
				}
			}
			return $data;
		}

		public function izmeni($id){
			$data = null;

			$query = "SELECT * FROM proizvodi WHERE id = '$id'";
			if ($sql = $this->conn->query($query)) {
				while($row = $sql->fetch_assoc()){
					//fetch_assoc()-uzim red rezultata kao asocijativni niz
					$data = $row;
				}
			}
			return $data;
		}

		public function update($data){

			$query = "UPDATE proizvodi SET name='$data[name]', characteristics='$data[characteristics]', quantity='$data[quantity]' WHERE id='$data[id] '";

			if ($sql = $this->conn->query($query)) {
				return true;
			}else{
				return false;
			}
		}
	}