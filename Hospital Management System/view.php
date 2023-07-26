
<!DOCTYPE html>
<html>
<head>
    <title>View Page</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Doctors</h2>
<table class="table">
    <thead>
    <?php 
include "config.php";
$sql = "SELECT * FROM `doctor`";
$result = $conn->query($sql);
?>
        <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Contact</th>
        <th>Specialization</th>
        <th>Joining Date</th>
        <th>Salary</th>
    </tr>
    </thead>
    <tbody>
        <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
        ?>
                    <tr>
                    <td><?php echo $row['ID']; ?></td>
                    <td><?php echo $row['Name']; ?></td>
                    <td><?php echo $row['Contact']; ?></td>
                    <td><?php echo $row['Specialization']; ?></td>
                    <td><?php echo $row['Joining_Date']; ?></td>
                    <td><?php echo $row['Salary']; ?></td>
                    <td><a target="_blank" class="btn btn-info" href="updateDoctor.php?id=<?php echo $row['ID']; ?>">Edit</a>&nbsp;<a target="_blank"class="btn btn-danger" href="deleteDoctor.php?id=<?php echo $row['ID']; ?>">Delete</a></td>
                    </tr>  
                                         
        <?php       }
            }
        ?>                
    </tbody>
    <tr><td><a target="_blank" class="btn btn-info" href="createDoctor.php?">Create</a></td></tr>
</table>
    </div> 
    <div class="container">
        <h2>Patients</h2>
<table class="table">
    <thead>
    <?php 
include "config.php";
$sql = "SELECT * FROM `patient`";
$result = $conn->query($sql);
?>
        <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Treatment</th>
        <th>Room No.</th>
        <th>Admit Date</th>
        <th>Discharge Date</th>
        <th>Doctor Assigned</th>
    </tr>
    </thead>
    <tbody>
        <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
        ?>
                    <tr>
                    <td><?php echo $row['ID']; ?></td>
                    <td><?php echo $row['Name']; ?></td>
                    <td><?php echo $row['Age']; ?></td>
                    <td><?php echo $row['Treatment']; ?></td>
                    <td><?php echo $row['Room_No']; ?></td>
                    <td><?php echo $row['Admit_Date']; ?></td>
                    <td><?php echo $row['Discharge_Date']; ?></td>
                    <td><?php echo $row['Doctor_Assigned']; ?></td>
                    <td><a target="_blank" class="btn btn-info" href="updatePatient.php?id=<?php echo $row['ID']; ?>">Edit</a>&nbsp;<a target="_blank"class="btn btn-danger" href="deletePatient.php?id=<?php echo $row['ID']; ?>">Delete</a></td>
                    </tr>  
                                         
        <?php       }
            }
        ?>                
    </tbody>
    <tr><td><a target="_blank" class="btn btn-info" href="createPatient.php?">Create</a></td></tr>
</table>
    </div> 
</body>
</html>
