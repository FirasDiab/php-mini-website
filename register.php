<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="padding:0px;">
<header class="blog-header py-3 bg-transparent">
      <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-4 pt-1">
        </div>
        <div class="col-4 text-center">
          <a class="blog-header-logo text-dark" href="index.php" style="text-decoration:none;"><h2 style="margin-bottom: 0px;">Firas Dashboard</h2></a>
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center">
          <a class="btn btn-sm btn-outline-secondary mr-2" href="register.php">Sign up</a>
          <a class="btn btn-sm btn-outline-secondary mr-5 " href="login.php">Sign in</a>
        </div>
      </div>
    </header>


<!-- Navbar End Here-->


<!-- Navbar End Here-->

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                
                <div class="signup-content">
                    <form method="post" id="signup-form" class="signup-form" action="chk.php">
                        <h2 class="form-title">Create account</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" placeholder="Your Name" required/>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-input" name="phone" id="phone" placeholder="Your Phone" required/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="password" id="password" placeholder="Password" required/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="re_password" id="re_password" placeholder="Repeat your password" required/>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" required/>
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Have already an account ? <a href="login.php" class="loginhere-link">Login here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <?php



if(isset($_POST['name']) && isset($_POST['password']))
{
    $_SESSION['username'] = $_POST['name'];
    $_SESSION['password']  = $_POST['password'];
}





// if (isset($_POST["submit"])) 


// if(isset($_POST['name']) && isset($_POST['password']))
// {
    // $newUsers += $_SESSION['user'];
        // array_push($newUsers,$_SESSION['user']);
        // foreach($newUsers as $key => $value){
    //         $_SESSION["user"] = array("name" => $_POST["name"],
    // "password" => $_POST["password"]);
    // $newUsers += $newUsers;
    // array_push($newUsers,$_SESSION['user']);
    //     // }
        
     

    
    // echo "<pre>";
    // print_r($newUsers);
    
// }
    
    

        
// $newUsers[] = $_SESSION['user'];

// array_push($newUsers,$_SESSION['user']);

// $data = [];
// $data += array_push($newUsers,$_SESSION['user']);
// for ($i = 0 ; $i <= 10000 ; $newUsers++){
    // $newUsers = array_push($newUsers,$_SESSION['user']);

// }

// $newUsers += array_push($newUsers,$_SESSION['user']);

  
    // print_r($data);
// }
        // foreach($_SESSION['user'] as $key => $value){
            
           
        //      }
            //  array_push($newUsers, $_SESSION['user']);
            //  $newUsers += $_SESSION['user'];
            //  echo "<pre>";
            //   print_r($newUsers);

            // $_SESSION[$key]['name']
         

    
   
        // $newUsers[] = $_SESSION['user'];
        
    
    // header("Location: welcomeAdmin.php");
    




// if(isset($_POST['submit'])){
//     if(isset($_POST['name']) && isset($_POST['password'])){
// $newUsers[] = $_POST['name'];
// $newUsers[] = $_POST['password'];

// print_r($newUsers);
//     }


// }

    

    
    ?>
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>