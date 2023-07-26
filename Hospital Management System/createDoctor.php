<?php 
include "config.php";
  if (isset($_POST['submit'])) {
    $doctorID = $_POST['id'];
    $name = $_POST['name'];
    $mobileNo = $_POST['phone'];
    $specializaiton = $_POST['spec'];
    $joining_date = $_POST['date'];
    $salary = $_POST['salary'];
    $sql = "INSERT INTO `doctor` (`ID`, `Name`, `Contact`, `Specialization`, `Joining_Date`, `Salary`) VALUES
     ('$doctorID', '$name', '$mobileNo', '$specializaiton', '$joining_date', '$salary');";
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
<h2>Doctor Form</h2>
<form action="" method="POST">
  <fieldset>
    <legend>Doctor information:</legend><br>
    ID:
    <input type="number" name="id"><br><br>
    Name:
    <input type="text" name="name"><br><br>
    Contact:
    <input type="text" name="phone"><br><br>
    Specialization:
    <input type="text" name="spec"><br><br>
    Joining Date:
    <input type="date" name="date"><br><br>
    Salary:
    <input type="number" name="salary"><br><br>
    <input type="checkbox" required> Do you want to submit <input type="submit" name="submit" value="submit">
  </fieldset>
</form>
</body>
</html>