<?php 

$email = $_POST['email'];
$password = $_POST['password'];
//Databse connection here
$con = new mysqli("localhost" , "root", "root" , "login");
if($con->connect_error) {
    die("Failed to connect : ".$con->connect_error);
}            
else{
    $stmt = $con->prepare("select * from register where email = ?");
    $stmt->bind_param("s" , $email);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows > 0){
    $data = $stmt_result->fetch_assoc();
    if($data['password'] == $password){
        // echo "<h2>Login Successfully</h2>";
        header("location:home.html");

      }else{
        echo "<h2>Invalid Email or Password</h2>";
      }
    }
    else{
        // echo "<h2>Invalid Email or Password</h2>";
        // header("location:login and Register.html");
        echo '<script>alert("Invalid Email or password");</script>';
       

    }
}

?>
