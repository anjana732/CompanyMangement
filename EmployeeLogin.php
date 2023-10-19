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
    $phone = $_POST['phone'];

    $sql = "INSERT INTO `DepartmentManagement`.`Department` (`name`, `email`, `password`, `username`) VALUES ('$name', '$email', '$password', '$username');";
    echo $sql;
    $sql ="INSERT INTO `EmployeeTab` (`Sno`, `name`, `email`, `age`, `designation`, `date`, `password`, `address`, `phone`) VALUES (NULL, 'anjana', 'abc@gmail.com', '78', 'swe', '2022-09-09', '1111', 'patna', '868547685');"

    if($con->query($sql)== true){
        echo "Seccessfully inserted";
    }else{
        echo "Error: $sql <br> $con->error";
    }
    $con->close();
?>