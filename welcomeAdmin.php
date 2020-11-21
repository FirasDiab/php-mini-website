<?php

session_start();

$multi1 = $_SESSION['multi'];







// session_start();
// $newUsers = array();
//   // $newUsers += $_SESSION['user'];
//   array_push($newUsers,$_SESSION['user']);
//   // foreach($newUsers as $key => $value){
//       $_SESSION["user"] = array("name" => $_POST["name"],
// "password" => $_POST["password"]);
// $newUsers += $newUsers;
// array_push($newUsers,$_SESSION['user']);
//   // }
  



// echo "<pre>";
// print_r($newUsers);
// print_r($_SESSION['user']);
// echo "Name is " . $_SESSION["user"]["name"] . "<br />\n";
// echo "Password is " . $_SESSION["user"]["password"] . "<br />\n";

   

    //     if(isset($_POST['submit'])){
    //         if(isset($_POST['name']) && isset($_POST['password'])){
    //     $newUsers[] = $_POST['name'];
    //     $newUsers[] = $_POST['password'];

    //     print_r($newUsers);
    //         }

       
    // }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

</body>
</html>
 <?php

echo "<form method='post' >";

echo "<table border = '1' border-collapse = 'collapse'  class='table table-striped table-dark'>";
echo "<th>User Name</th>";
echo "<th>Password</th>";
echo "<th>Role</th>";
echo "<th>Delete</th>";

foreach($multi1 as $key => $value){
    echo "<tr>";
    foreach($value as $k => $v){
        echo "<td>$v</td>";  
    }
    echo "<td><input type='submit' name={$key} value='Delete'></td>";
    // $_SESSION[$key] = $_POST[$key];
    

    if(isset($_POST[$key])){
        $multi1 = $_SESSION['multi'];
    // $_SESSION['delete2'] = $_POST[$k];
    unset($multi1 , $multi1[$key]);
    }
    echo "</tr>";
}
echo "</table>";



    

 ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>