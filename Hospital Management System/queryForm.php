<html>
<head>
<title>Forms</title>
</head>
<body>
<center><h2> <u>For Any Query</u></h2></center>
<style>
    body {
      background-image: url('bk.jpeg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: 100% 100%;
    }
    </style>
<table align ="center" cellpadding ="11">
<form action="/queryForm.php" method="post">
<tr><td>Name</td>
<td><input type="text" name="name" required></td></tr>
<tr><td>Email Id</td>
<td><input type="text" name="emailId" required></td></tr>
<tr><td>Hospital Name </td>
<td><input type ="text" name="hospitalname" required></td></tr>
<tr><td>Address</td>
<td><textarea name ="address" rows="3" cols="20"></textarea></td></tr>
<tr><td>City</td>
<td><input type="text" name="city"></td></tr>
<tr><td>State</td>
<td><input type="text" name="state"></td></tr>
<tr><td>Pin Code</td>
<td><input type ="number" name="pincode"></td></tr>
<tr><td>Mobile Number</td>
<td><input type ="text" name="countrycode" value="+91" size="2"/>
<input type ="text" name="phone" size="10"></td></tr>
<tr><td>Query</td>
<td><textarea name ="query" rows="3" cols="20"></textarea></td></tr>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
          $name = $_POST['name'];
          $email = $_POST['emailId'];
          $hospitalname = $_POST['hospitalname'];
          $address = $_POST['address'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $pincode = $_POST['pincode'];
        $countrycode = $_POST['countrycode'];
        $phone = $_POST['phone'];
        $query = $_POST['query'];
        // Submit these to a database
        // CONNECTING TO A DATABASE THROUGH MYSQLI EXTENSION
        $servername="localhost";
        $username="root";
        $password="";
        $database="Hospital Management";
        // create a connection
      $con = mysqli_connect($servername, $username, $password, $database);
      $sql = "INSERT INTO `for_contact` (`S.No.`, `Name`, `Email_ID`, `Hospital_Name`, `Address`, `City`, `State`, `Pin_Code`, `Country_code`, `MobileNumber`, `Query`) VALUES 
       (NULL, '$name', '$email', '$hospitalname', '$address', '$city', '$state', '$pincode', '$countrycode', '$phone', '$query');";
      $result =  mysqli_query($con, $sql);
      if($result){
        echo "<tr><td>";
        echo "Your information is saved successfully";
        echo "</tr></td>"; 
      }
    }
      ?>
        <td colspan="2" align="center">
        <input type ="checkbox" name= "submit" required/>Do you want to submit<br><br>
        <input type="Submit" value="Submit">
        <input type="Reset" value="Reset"></td></tr>
    </table>
     </form>
        </body>
        </html>