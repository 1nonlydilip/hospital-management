<?php 
include "config.php";
    if (isset($_POST['update'])) {
        $patientID = $_POST['id'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        $treatment = $_POST['treatment'];
        $room = $_POST['room'];
        $adate = $_POST['Adate'];
        $ddate = $_POST['Ddate'];
        $doctor = $_POST['doctor']; 
        $sql = "UPDATE `patient` SET `ID` = '$patientID', `Name` = '$name', `Age` = '$age', `Treatment` = '$treatment', `Room_No` = '$room',
         `Admit_Date` = '$adate', `Discharge_Date` = '$ddate', `Doctor_Assigned` = '$doctor' WHERE `ID` = $patientID;"; 
        $result = $conn->query($sql); 
        if ($result == TRUE) {
            echo "Record updated successfully.";
        }else{
            echo "Error:" . $sql . "<br>" . $conn->error;
        }
    } 
if (isset($_GET['id'])) {
    $user_id = $_GET['id']; 
    $sql = "SELECT * FROM `patient` WHERE `id`='$user_id'";
    $result = $conn->query($sql); 
    if ($result->num_rows > 0) {        
        while ($row = $result->fetch_assoc()) {
            $patientID = $row['ID'];
            $name = $row['Name'];
            $age = $row['Age'];
            $treatment = $row['Treatment'];
            $room = $row['Room_No'];
            $adate = $row['Admit_Date'];
            $ddate = $row['Discharge_Date'];
            $doctor = $row['Doctor_Assigned']; 
        } 
    ?>
        <h2>Patient Update Form</h2>
        <form action="" method="post">
          <fieldset>
            <legend>Patient information:</legend>
            ID:<br>
            <input type="number" name="id" value="<?php echo $patientID; ?>">
            <input type="hidden" name="user_id" value="<?php echo $id; ?>">
            <br>
            Name:<br>
            <input type="text" name="name" value="<?php echo $name; ?>">
            <br>
            Age:<br>
            <input type="number" name="age" value="<?php echo $age; ?>">
            <br>
            Treatment:<br>
            <input type="text" name="treatment" value="<?php echo $treatment; ?>">
            <br>
            Room:<br>
            <input type="number" name="room" value="<?php echo $room; ?>">
            <br>
            Admit Date:<br>
            <input type="date" name="Adate" value="<?php echo $adate; ?>">
            <br>
            Discharge Date:<br>
            <input type="date" name="Ddate" value="<?php echo $ddate; ?>">
            <br>
            Doctor Assigned:<br>
            <input type="text" name="doctor" value="<?php echo $doctor; ?>">
            <br>
            <input type="checkbox" required> Do you want to Update &nbsp; <input type="submit" value="Update" name="update">
          </fieldset>
        </form> 
        </body>
        </html> 
    <?php
    } else{ 

        header('Location: view.php');
    } 
}
?> 