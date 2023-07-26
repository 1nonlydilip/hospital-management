<?php 
include "config.php";
  if (isset($_POST['submit'])) {
    $patientID = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $treatment = $_POST['treatment'];
    $room = $_POST['room'];
    $adate = $_POST['Adate'];
    $ddate = $_POST['Ddate'];
    $doctor = $_POST['doctor'];
    $sql = "INSERT INTO `patient` (`ID`, `Name`, `Age`, `Treatment`, `Room_No`, `Admit_Date`, `Discharge_Date`, `Doctor_Assigned`)
     VALUES ('$patientID', '$name', '$age', '$treatment', '$room', '$adate', '$ddate', '$doctor');";
    $result = $conn->query($sql);
    if ($result == TRUE) {
      echo "New record created successfully.";
    }else{
      echo "Error:". $sql . "<br>". $conn->error;
    } 
    $conn->close(); 
  }
?>
<!DOCTYPE html>
<html>
<body>
<h2>Patient Form</h2>
<form action="" method="POST">
  <fieldset>
    <legend>Patient information:</legend><br>
    ID:
    <input type="number" name="id"><br><br>
    Name:
    <input type="text" name="name"><br><br>
    Age:
    <input type="number" name="age"><br><br>
    Treatment:
    <input type="text" name="treatment"><br><br>
    Room No:
    <input type="number" name="room"><br><br>
    Admit Date:
    <input type="date" name="Adate"><br><br>
    Discharge Date:
    <input type="date" name="Ddate"><br><br>
    Doctor Assigned:
    <input type="text" name="doctor"><br><br>
    <input type="checkbox" required> Do you want to submit <input type="submit" name="submit" value="submit">
  </fieldset>
</form>
</body>
</html>