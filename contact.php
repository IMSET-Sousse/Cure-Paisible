<?php
    if (isset($_POST) && $_POST){
        include_once("./lib/bd-connect.php");

        $sql = "INSERT INTO contact (email, message) 
        VALUES ('" . $_POST['email'] . "', '" . $_POST['message'] . "');";
    
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cure Paisible</title>
    <link rel="shortcut icon" type="x-icon" href="spa-solid.svg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/697f7d2aae.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>
<body>

<div class="contact section-padding" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-header text-center">
                        <h2>Contact<span> Us</span></h2>
                        <p>Welcome Love</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 col-sm-12">
                    <div class="left-contact">
                    <h3>Location</h3>
                    <p> Sousse</p>
                    <h3>Email :</h3>
                    <p>curepaisible@gmail.com</p>
                    <h3>Call Us</h3>
                    <p>55747471</p>
                </div>
           </div>
            <div class="col-lg-6 offset-lg-1 col-sm-12">
                <form action="" method="Post">
                    <label for="">Your Email</label>
                    <input type="email"  name="email" class="form-control" placeholder="Your Email" required>
                    <label for="">Your Message</label>
                    <textarea class="form-control"  name="message" placeholder="Your Message"></textarea>
                    <input  class="btn"  type="submit"></button>
    
                </form>
            </div>
     </div>
        </div>
    </div>
    
   <?php include("./lib/nav.php") ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>