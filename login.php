<?php 
session_start();
include("./lib/bd-connect.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{

$gmail = $_POST['email'];
$password = $_POST['password'];

if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
{
   $query = "select * from sign_up where email = '$gmail' limit 1";
   $result = mysqli_query($conn, $query);

   if($result)
   {
   if($result && mysqli_num_rows($result) > 0)
   {
      $user_data = mysqli_fetch_assoc($result);

      if($user_data['password'] == $password)
      {
         header("Location: index.php");
         die;
      }
   }
   }
   echo"<script type='text/javascript'> alter('Successfully Register')</script>";
}
else echo "<script>alert('Error : Please fill all fields and use a valid email address');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Login Page | theuicode.com</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
<form action="" method="POST">
    <div class="container">
        <div class="design">
            <div class="pill-1 rotate-45"></div>
            <div class="pill-2 rotate-45"></div>
            <div class="pill-3 rotate-45"></div>
            <div class="pill-4 rotate-45"></div>
        </div>
        <div class="login">
            <h3 class="title">User Login</h3>
            <div class="text-input">
                <i class="ri-user-fill"></i>
                <input type="email" name="email"  placeholder="E-mail" required>
            </div>
            <div class="text-input">
                <i class="ri-lock-fill"></i>
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <input type="submit" value="Login" class="login-btn">
            <a href="#" class="forgot">Forgot Username/Password?</a>
            <div class="create">
                <a href="http://localhost/Cure-Paisible/sign%20up.php">Create Your Account</a>
                <i class="ri-arrow-right-fill"></i>
            </div>
        </div>
    </div>
</form>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

*, html, body {
    margin: 0;
    padding: 0;
}

body {
    font-family: 'Poppins', sans-serif;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background: linear-gradient(to bottom right, #556B2F, #6B8E23,#9ACD32);
}

.container {
    width: 50vw;
    height: 60vh;
    display: grid;
    grid-template-columns: 100%;
    grid-template-areas: "login";
    box-shadow: 0 0 17px 10px rgb(0 0 0 / 30%);
    border-radius: 20px;
    background: white;
    overflow: hidden;
}

.design {
    grid-area: design;
    display: none;
    position: relative;
}

.rotate-45 {
    transform: rotate(-45deg);
}

.design .pill-1 {
    bottom: 0;
    left: -40px;
    position: absolute;
    width: 80px;
    height: 200px;
    background: linear-gradient(#556B2F, #6B8E23,#9ACD32);
    border-radius: 40px;
}

.design .pill-2 {
    top: -100px;
    left: -80px;
    position: absolute;
    height: 450px;
    width: 220px;
    background: linear-gradient(#556B2F, #6B8E23,#9ACD32);
    border-radius: 200px;
    border: 30px solid #6B8E23;
}

.design .pill-3 {
    top: -100px;
    left: 160px;
    position: absolute;
    height: 200px;
    width: 100px;
    background: linear-gradient(#556B2F, #6B8E23,#9ACD32);
    border-radius: 70px;
}

.design .pill-4 {
    bottom: -180px;
    left: 220px;
    position: absolute;
    height: 300px;
    width: 120px;
    background: linear-gradient(#556B2F, #6B8E23,#9ACD32);
    border-radius: 70px;
}

.login {
    grid-area: login;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    position: relative;
    background: white;
}

.login h3.title {
    margin: 15px 0;
}

.text-input {
    background: #e6e6e6;
    height: 40px;
    display: flex;
    width: 60%;
    align-items: center;
    border-radius: 10px;
    padding: 0 15px;
    margin: 5px 0;
}

.text-input input {
    background: none;
    border: none;
    outline: none;
    width: 100%;
    height: 100%;
    margin-left: 10px;
}

.text-input i {
    color: #686868;
}

::placeholder {
    color: #9a9a9a;
}

.login-btn {
    width: 68%;
    padding: 10px;
    color: white;
    background: linear-gradient(to right, #556B2F, #6B8E23,#9ACD32);
    border: none;
    border-radius: 20px;
    cursor: pointer;
    margin-top: 10px;
}

a {
    font-size: 12px;
    color: #9a9a9a;
    cursor: pointer;
    user-select: none;
    text-decoration: none;
}

a.forgot {
    margin-top: 15px;
}

.create {
    display: flex;
    align-items: center;
    position: absolute;
    bottom: 30px;
}

.create i {
    color: #9a9a9a;
    margin-left: 10px;
}

@media (min-width: 768px) {
    .container {
        grid-template-columns: 50% 50%;
        grid-template-areas: "design login";
    }

    .design {
        display: block;
    }
}
    </style>
</body>

</html>