<?php
include_once "header.php";
?>

<style>
      .pos4 {
      padding: 12px;
      border-radius: 30px;
      width: 40rem;
      background-color:#f2f2f2;
      border-radius: 18px;
      box-shadow: 3px 3px 18px -6px rgba(0, 0, 0, 0.3);
      margin-right:24%;
      margin-top:20%;
      margin-bottom:20%;
      width: 70%;
      float: right;
      }
      .pos3{
      font-size:20px; 

      }
      .float-container {
      border: 3px solid #fff;

      }


      .float-child {
      width: 50%;
      float: left;
      border: 2px solid red;

      }  


      .font_brand{
        font-size:45px;
        font-family:'Trebuchet MS', sans-serif;
        color:#414241;
      }

      .pos3{
      margin-left:20%;
      margin-top:27%;
      }

      .moto{
        font-size:23px;
        
      }
</style>





<?php
require('connect.php');

  if (isset($_POST['username']) and isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM users WHERE username='$username' and password='$password'";
        $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
        $count = mysqli_num_rows($result);

        if ($count == 1) {
            $_SESSION['username'] = $username;
        }else {
            $fsmsg = "error";
        }
  }

  if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    echo "<center>Hello " . $username . "! ";
    echo "You entered"; 
    echo "<center><a href='logout.php' class='btn btn-lg btn-danger'> Logout </a><br><br>"; 
    echo "Visit homepage";
    echo "<center><a href='home.php' class='btn btn-lg btn-primary'> Home </a></center>";
  }
 ?>

 <div class="float-container">



      <div class="float-child">
        <div class="pos3">
          <img type="image" src="/news_portal_g3/pictures/ap-logo-alternative.png" width="100" height="100">
          <p1 class="font_brand"><b>NEWS PORTAL</b></p1><br>
          <p2 class="moto" > <b>AP News Portal</b> helps you always stay up to date with events in the world<br>
                            and also gives you the opportunity to learn interesting information,<br> 
                            read user articles or write your own.</p2>
        </div>
      </div>
    

    <div class="float-child">
      <div class="pos4">
        <br>
          <div class="container margin_class">

            <form class="form-signin" method="POST">
              <h2>Login</h2>
          
            <input type="text" name="username" class="form-control" style="" placeholder="Email, phone number or username" required><br>
            <input type="password" name="password" class="form-control" placeholder="password" required><br>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
            <a href="index.php" class="btn btn-lg btn-light btn-primary btn-block">Registration</a><br><br>
          </from>

        </div><br>
      </div>

  </div>
  
</div>

  </body>
</html>