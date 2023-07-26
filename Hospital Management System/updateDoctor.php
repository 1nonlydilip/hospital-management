<?php 
include "config.php";
    if (isset($_POST['update'])) {
        $doctorID = $_POST['id'];
        $name = $_POST['name'];
        $mobileNo = $_POST['phone'];
        $specialization = $_POST['spec'];
        $joining_date = $_POST['date'];
        $salary = $_POST['salary']; 
        $sql = "UPDATE `doctor` SET `ID`='$doctorID',`Name`='$name',`Contact`='$mobileNo',`Specialization`='$specialization',`Joining_Date`='$joining_date',`Salary`='$salary' WHERE `ID`='$doctorID'"; 
        $result = $conn->query($sql); 
        if ($result == TRUE) {
            echo "Record updated successfully.";
        }else{
            echo "Error:" . $sql . "<br>" . $conn->error;
        }
    } 
if (isset($_GET['id'])) {
    $user_id = $_GET['id']; 
    $sql = "SELECT * FROM `doctor` WHERE `id`='$user_id'";
    $result = $conn->query($sql); 
    if ($result->num_rows > 0) {        
        while ($row = $result->fetch_assoc()) {
            $doctorID = $row['ID'];
            $name = $row['Name'];
            $mobileNo = $row['Contact'];
            $specialization = $row['Specialization'];
            $joining_date = $row['Joining_Date'];
            $salary = $row['Salary'];
        } 
    ?>
        <h2>Doctor Update Form</h2>
        <form action="" method="post">
          <fieldset>
            <legend>Doctor information:</legend>
            ID:<br>
            <input type="number" name="id" value="<?php echo $doctorID; ?>">
            <input type="hidden" name="user_id" value="<?php echo $id; ?>">
            <br>
            Name:<br>
            <input type="text" name="name" value="<?php echo $name; ?>">
            <br>
            Contact:<br>
            <input type="text" name="phone" value="<?php echo $mobileNo; ?>">
            <br>
            Specialization:<br>
            <input type="text" name="spec" value="<?php echo $specialization; ?>">
            <br>
            Joining Date:<br>
            <input type="date" name="date" value="<?php echo $joining_date; ?>">
            <br>
            Salary:<br>
            <input type="number" name="salary" value="<?php echo $salary; ?>">
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