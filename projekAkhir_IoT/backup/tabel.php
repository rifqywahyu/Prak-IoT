<?php
  include("function.php");
   
  $conn = databaseConnect();

  $sql = "SELECT * FROM sensor";
  $result = $conn->query($sql) or die($conn->error);
  $total = 0;
  $aman = 0;
  $waspada = 0;
  $bahaya = 0;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Proyek IoT</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="fontawesome/css/all.css">
  	<link rel="stylesheet" href="style.css">
</head>

<body>
	<div class="clearfix">
		<div class="float-left" style="background-color: #343a40; width: 15%; height: 721px;">
			<ul class="navigasi">
				<li><a href="index.php" style="color: white; font-size: 20px;"> Dashboard </a></li>
				<li><a href="tabel.php" style="color: white; font-size: 20px;"> Tabel Data </a></li>
			</ul>
		</div>


		<div class="float-right" style="background-color: #ffffff; width: 84%; height: 721px; padding-left: 20px; padding-top: 20px;">
			<h2> <i class="fas fa-grip-lines"></i> DASHBOARD </h2>
			<br>

			<?php
      			while($row = $result->fetch_assoc()) {
      				$total = $total + 1;
      				$jarak = $row["jarak"];
      				if ($jarak >= 200) {
      					$bahaya = $bahaya + 1;
      				}
      				elseif ($jarak >= 100) {
      					$waspada = $waspada + 1;
      				}
      				elseif ($jarak >= 0) {
      					$aman = $aman + 1;
      				}
      			}
    		?>

			<button type="button" class="btn btn-primary" style="font-size: 20px; font-family: courier;">
				DATA TERKUMPUL <i class="fas fa-database"></i>
				<hr class="my-4">
				<?php echo $total; ?> DATA
			</button>
			<br> <br>
			<button type="button" class="btn btn-success" style="font-size: 20px; font-family: Helvetica;">
				Aman <i class="fas fa-thumbs-up"></i>
				<hr class="my-4">
				<?php echo $aman; ?>
			</button>
			<button type="button" class="btn btn-warning" style="font-size: 20px; margin-left: 10px; font-family: Helvetica;">
				Waspada <i class="fas fa-exclamation-triangle"></i>
				<hr class="my-4">
				<?php echo $waspada; ?>
			</button>
			<button type="button" class="btn btn-danger" style="font-size: 20px; margin-left: 10px; font-family: Helvetica;">
				Bahaya <i class="fas fa-skull-crossbones"></i>
				<hr class="my-4">
				<?php echo $bahaya; ?>
			</button>
			
		</div>
	</div>


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>