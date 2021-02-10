<?php
  include("function.php");
   
  $conn = databaseConnect();
  
  /* if(isset($_GET['message']))
  {
    echo $_GET['message'];
    echo "<br>";
    echo "<br>";
  } */
  $sql = "SELECT * FROM sensor ORDER BY nomor DESC LIMIT 10";
  $result = $conn->query($sql) or die($conn->error);

?>

<!DOCTYPE html>
<html>
<head>
  <title>Projek IoT</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="fontawesome/css/all.css">
  <meta http-equiv='refresh' content='5'>
</head>
<body>
  <div class="clearfix">
	  <div class="float-left" style="background-color: #343a40; width: 15%; height: 721px;">
	  	<ul class="navigasi">
	        <li><a href="index.php" style="color: white; font-size: 20px;"><i class="fas fa-home"></i> Dashboard </a></li>
	        <li><a href="tabel.php" style="color: white; font-size: 20px;"><i class="fas fa-table"></i> Tabel Data </a></li>
	      </ul>
	  </div>

	  <div class="float-right" style="background-color: #ffffff; width: 84%; height: 721px; padding-left: 20px; padding-top: 20px;">
		  <div class="home">
		  <h2 align="center">Data Arduino <i class="fas fa-database"></i></h2>

		  <table class="table">
		    <thead class="thead-dark">
		      <tr>
		        <th scope="col">Jarak(cm)</th>
		        <th scope="col">Status</th>
		        <th scope="col">Aksi</th>
		      </tr>
		    </thead>
		    <tbody>
		    <?php
		      while($row = $result->fetch_assoc()) {
		    ?>
		      <tr>
		    <?php
		      echo "<td>".$row["jarak"]."</td><td>".$row["status"]."</td><td>".$row["aksi"]. "</td>";
		    ?>
		      </tr>
		    <?php } ?>
		    </tbody>
		  </table>
		  </div>
	  </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

<?php
  $conn->close();
?> 