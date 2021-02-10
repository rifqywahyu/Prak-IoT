<?php
  include("function.php");
   
  $conn = databaseConnect();
   
  if(isset($_GET["jarak"]))
  {
    // Simpan data yang diterima ke database
    $jarak = $_GET["jarak"];
    if ($jarak >= 200) {
      $status = "Bahaya";
      $aksi = "Buzzer";
    }
    elseif ($jarak >= 100) {
      $status = "Waspada";
      $aksi = "LED Biru";
    }
    elseif ($jarak >= 0) {
      $status = "Aman";
      $aksi = "LED Putih";
    }
    $sql = "INSERT INTO sensor (jarak, status, aksi) VALUES ('".$jarak."', '".$status."', '".$aksi."')";
 
     if ($conn->query($sql) === TRUE) {
      //echoDebug("New record created successfully</br>");
    } else {
      echoDebug("Error: " . $sql . "<br>" . $conn->error);
    } 
  }
  $conn->close();
?> 