<html>
<head>
<title>Forms</title>
</head>
<body>
<center><h2> <u>Registration Form</u></h2></center>
<style>
    body {
      background-color:silver;
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: 100% 100%;
    }
    image{
      opacity: 0.5;
    }
    </style>
<table align ="center" border="" cellpadding ="11">
<form action="/rgf.php" method="post">
<tr><td>Hospital Name</td>
<td><input type="text" name="hospitalName" required></td></tr>
<tr><td>Username</td>
<td><input type="text" name="username"></td></tr>
<tr><td>Password</td>
<td><input type ="text" name="password"></td></tr>
<tr><td>Address</td>
<td><textarea name ="address" rows="3" cols="20"></textarea></td></tr>
<tr><td>Mobile Number</td>
<td><input type ="text" name="countrycode" value="+91" size="2"/>
<input type ="number" name="phone" size="10"></td></tr>
<tr><td>WebsiteLink</td>
<td><input type="text" name="link" required></td></tr>
        <td colspan="2" align="center">
        <input type ="checkbox" name= "submit" required/>Do you want to submit<br><br>
        <input type="Submit" value="Submit">
        <input type="Reset" value="Reset"></td></tr>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
          $hospitalname = $_POST['hospitalName'];
          $Username = $_POST['username'];
          $Password = $_POST['password'];
          $address = $_POST['address'];
        $countrycode = $_POST['countrycode'];
        $phone = $_POST['phone'];
        $link = $_POST['link'];
        // Submit these to a database
        // CONNECTING TO A DATABASE THROUGH MYSQLI EXTENSION
        $servername="localhost";
        $username="root";
        $password="";
        $database="Hospital Management";
        // create a connection
      $con = mysqli_connect($servername, $username, $password, $database);
      $sql = "INSERT INTO `registration` (`S.No.`, `Hospital_Name`, `Username`, `Password`, `Address`, `Country_Code`, `Mobile_No.`, `Link`) 
      VALUES (NULL, '$hospitalname', '$Username', '$Password', '$address', '$countrycode', '$phone', '$link')";
      $result =  mysqli_query($con, $sql);
      if($result){
        echo "<tr><td>";
        echo "Your information is saved successfully";
        echo "</tr></td>"; 
      }
    }
      ?>
      </table>
        </form>
        </body>
        </html>