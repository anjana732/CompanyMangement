<?php
    $server ="localhost";
    $user= "root";
    $pass = "";

    $con = mysqli_connect($server, $user, $pass);

    if(!$con){
        die("connection to this database failed due to".mysqli_connect_error());
    }
  //  echo "Connected to db"

    $name = $_POST['name'];
    $email = $_POST['email'];
    $age =$_POST['age'];
    $designation = $_POST['designation'];
    $doj = $_POST['doj'];
    $password= $_POST['password'];
    $address = $_POST['address'];
    $phNum = $_POST['phNum'];

    //$sql = "INSERT INTO `DepartmentManagement`.`Department` (`name`, `email`, `password`, `username`) VALUES ('$name', '$email', '$password', '$username');";
    
    $sql ="INSERT INTO `Company`.`EmployeeTab` (`name`, `email`, `age`, `designation`, `date`, `password`, `address`, `phone`) VALUES ('$name', '$email', '$age', '$designation', '$doj', '$password', '$address', '$phNum');";
    echo $sql;
    if($con->query($sql)== true){
       // echo "Seccessfully inserted";
        header('Location: EmployeeLogin.html');
        exit;
    }else{
        echo "Error: $sql <br> $con->error";
    }
    $con->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Page</title>
    <link rel="stylesheet" type="text/css" href="modules.css">
</head>

<body>
    <img class="bg" src="Assets/AdBg.jpg" alt="backgroundImage">
    <h1>Welcome To Employee Registration</h1>
    <div class="container">
        <h2>Sign Up </h2>
        <form action="EmployeeReg.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="email" name="email" id="email" placeholder="Enter Your email">
            <input type="number" name="age" id="age" placeholder="Enter Your age">
            <input type="text" name="designation" id="designation" placeholder="Enter your designation">
            <input type="date" name="doj" id="doj" placeholder="Enter Date of joining">
            <input type="password" name="password" id="password" placeholder="Enter the password">
            <input type="password" name="repeat-password" id="repeat-password" placeholder="Repeat Password">
            <textarea name="address" id="address" placeholder="Enter your address"></textarea>
            <input type="tel" name="phNum" id="phNum" placeholder="Enter your phone number">
            <button type="submit" class="submit">Sign Up</button>
            <button type="reset" class="reset" >Reset</button>
            <div class="login">
                <h4>Already a user ?</h4>
                <a href="EmployeeReg.php">Sign In</a>
            </div>
        </form>
    </div>
</body>

</html>
