<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="login.js"></script>
    <script src="https://kit.fontawesome.com/eb3db8c5c8.js" crossorigin="anonymous"></script>
    <title>Document</title>
  <link rel="stylesheet" href="/assets1/index.09a18bc2.css">
</head>
<body>
    <!--Log In Page-->
    <form action="/SignIn.php" method="post">
    <span class="sm:relative sm:drop-shadow-2xl sm:flex sm:flex-col sm:bg-blue-500 sm:mx-4 sm:my-72 sm:h-80 ">
         <ul class="invisible list-disc font-semibold text-xl text-white sm:visible sm:w-1/3 sm:h-40 sm:animate-none sm:absolute sm:right-10 sm:top-60 sm:bottom-auto
         lg:right-36 xl:right-56 2xl:right-56">
            <li>We care for you most & Bringing joy of health</li>
         </ul> 
    <div class="mt-10 sm:absolute sm:flex sm:flex-col sm:mt-20 sm:-bottom-20 ">
        <div class="ring-1 ring-inset ring-emerald-500 flex flex-col items-center justify-center bg-white mx-auto  drop-shadow-2xl rounded-t-3xl h-14 font-semibold
        sm:mr-80 sm:mx-10 sm:py-5 ">Krishna Hospital Management<sub>Services</sub></div>
        <div class="ring-1 ring-inset  ring-emerald-500 space-y-2 flex flex-col items-center justify-center bg-white mx-auto  drop-shadow-2xl rounded-b-3xl
        sm:mr-80 sm:mx-10  ">
        
        <img src="/assets1/1.762eb65a.jpg" alt="" class="rounded-full w-16 h-16 my-5">
        
        <h1 >USERNAME</h1>
        <input name="username" id='username' class="outline-none border-none border-black outline-black hover:ring-2 rounded-2xl hover:ring-inset hover:outline-none hover:border-none px-2" type="text" placeholder="Enter the Username...." >
        <h1   >PASSWORD</h1>
        <input name="password" id="password" class="outline-none border-none border-blac outline-black hover:ring-2 rounded-2xl hover:ring-inset hover:outline-none hover:border-none px-2" type="password" placeholder="Enter the Password...." ><br>
        <input  type="submit" class="hover:cursor-pointer my-2 bg-emerald-500 font-semibold text-white rounded-full drop-shadow-xl py-4 px-6" value="Sign In">
<?php

$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
$servername="localhost";
$username="root";
$password="";
$database="Hospital Management";
// create a connection
$con = mysqli_connect($servername, $username, $password, $database);
$Username = $_POST["username"];
$Password = $_POST["password"];
if($Username=='dhruv'&&$Password=='dhruv'){
header("location: rgf.php");
}
else{
$sql = "Select * from `registration` where username='$Username' AND password='$Password'";
$result = mysqli_query($con, $sql);
$num = mysqli_num_rows($result);
if ($num == 1){
    $login = true;
if($num==1){
    $sql1= "Select Link from `registration` where username='$Username' AND password='$Password'";
    $result1= mysqli_query($con, $sql1);
    $row = mysqli_fetch_assoc($result1);
    header("location:".implode("",$row)); 
}
} 
else{
$showError = "Invalid Credentials";
echo "<div>";
echo $showError;
echo "</div>";
}      
}
}
?>
        <u id='forgot_password' onclick="forgotPassword()"  class="text-blue-400 hover:cursor-pointer">Trouble in Sign In?</u>
        <h1 class="px-4 text-sm h-16">For any technical glitches or bugs report it to the SERVICE provider.</h1>
        
    </div>
</div>
</span>

</form>
</body>
</html>