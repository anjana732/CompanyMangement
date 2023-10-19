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
    
   // $sql =" INSERT INTO  `Company`.`AdminTab` (`name`, `email`, `age`, `designation`, `date`, `password`, `address`, `phone`) VALUES ('$name', '$email', '$age', '$designation', '$doj', '$password', '$address', '$phNum');";
    

     $sql ="INSERT INTO `Company`.`AdminTab` (`name`, `email`, `age`, `designation`, `date`, `password`, `address`, `phone`) VALUES ('$name', '$email', '$age', '$designation', '$doj', '$password', '$address', '$phNum');";
     echo $sql;
    if($con->query($sql)== true){
        echo "Seccessfully inserted";
        header('Location: AdminLogin.html');
        exit;
    }else{
        echo "Error: $sql <br> $con->error";
    }
    $con->close();
?>