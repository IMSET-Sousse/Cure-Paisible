<?php include("./lib/bd-connect.php");
   $search = '';
   if (isset($_GET) && $_GET && $_GET['search']){
       $search = $_GET['search'];
       $sql = "SELECT * FROM services WHERE 	title LIKE '%" . $_GET['search'] . "%' or description LIKE '%" . $_GET['search'] . "%';";
   }else {
       $sql = "SELECT * FROM services";
   }

   $result = $conn->query($sql);
   $conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link rel="shortcut icon" type="x-icon" href="spa-solid.svg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/697f7d2aae.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        img{
          max-width: 100%;
            height:300px;
            border-radius: 10px;
            
        }
        img:hover{
          -webkit-transform: scale(0.3);
	         transform: scale(0.9);
           -webkit-filter: blur(3px);
	filter: blur(3px);
	-webkit-transition: .3s ease-in-out;
	transition: .3s ease-in-out;
                 }
                 .properties{
    background: #fff;
    border-radius: 2rem;   
}
.properties-container {
    display: grid;
   grid-template-columns: repeat(auto-fit,minmax(18rem,auto));
   gap: 3rem;
   padding: 0 50px;  
}
.properties-container .box{
    background: var(--bg-color);
    padding: 10px;
    border-radius: 1rem;
    box-shadow: var(--box-shadow);
    width: 400px;
  height: 550px;
  border-radius: 15px;
  background-color: #fff;
  border: 3px solid #6cae22;

}
.properties-container .box:hover{
    transform: translateY(-10px);
    transition: 0.5s;
    box-shadow: rgba(0, 0, 0, 0.2);
    background : #6cae22 ;
    color : #fff;
}
.properties-container .box img{
    border-radius: 1rem;
    height: 220px;
    width: 270px;
    object-fit: cover;
    object-position: center;
}
.properties-container .box h3{
    font-size: 1rem;
    font-weight: 600;
    float: right;
}
.properties-container .box .content{
    display: flex;
    justify-content: space-between;
    margin-top: 2rem;
}
.properties-container .box .content .text h3{
    font-weight: 700;
}
.properties-container .box .content .text p{
    font-size: 1rem;
}

     
    </style>

</head>
<body>
   <?php include("./lib/nav.php") ?>
    
      <br><br><br>
      <section style="background-color: #fff;">
        <div class="container py-5">
          <div class="row">
            <div class="col-lg-12">
                <div class="section-header text-center">
                    <h2>Our <span>Services</span></h2>              
                </div>
            </div>
        </div>      
          <div class="row">
            <div class="col-lg-4 col-md-12 mb-4">
              <div class="bg-image hover-zoom ripple shadow-1-strong rounded">
                <img src="Our service/our service-1.jpg"
                  class="w-100" />
                <a href="#!">  
                </a>
              </div>
            </div>
            <div class="col-lg-4 col-md-12 mb-4">
              <div class="bg-image hover-zoom ripple shadow-1-strong rounded">
                <img src="Our service\our service-2.jpg"
                  class="w-100" />
                <a href="#!">  
                </a>
              </div>
            </div>
            <div class="col-lg-4 col-md-12 mb-4">
              <div class="bg-image hover-zoom ripple shadow-1-strong rounded">
                <img src="Our service\our service-3.jpg"
                  class="w-100" />
                <a href="#!">  
                </a>
              </div>
            </div>
          </div>
      
          <div class="row">
            <div class="col-lg-4 col-md-12 mb-4">
              <div class="bg-image hover-zoom ripple shadow-1-strong rounded">
                <img src="Our service\our service-4.jpg"
                  class="w-100" />
                <a href="#!">  
                </a>
              </div>
            </div>
            <div class="col-lg-4 col-md-12 mb-4">
              <div class="bg-image hover-zoom ripple shadow-1-strong rounded">
                <img src="Our service\our service-5.jpg"
                  class="w-100" />
                <a href="#!">  
                </a>
              </div>
            </div>
            <div class="col-lg-4 col-md-12 mb-4">
              <div class="bg-image hover-zoom ripple shadow-1-strong rounded">
                <img src="Our service\our service-6.jpg"
                  class="w-100" />
                <a href="#!">  
                </a>
              </div>
            </div>
            <div class="col-lg-4 col-md-12 mb-4">
              <div class="bg-image hover-zoom ripple shadow-1-strong rounded">
                <img src="Our service\our service-7.jpg"
                  class="w-100" />
                <a href="#!">  
                </a>
              </div>
            </div>
            <div class="col-lg-4 col-md-12 mb-4">
              <div class="bg-image hover-zoom ripple shadow-1-strong rounded">
                <img src="Our service\our service-8.jpg"
                  class="w-100" />
                <a href="#!">  
                </a>
              </div>
            </div>
            <div class="col-lg-4 col-md-12 mb-4">
              <div class="bg-image hover-zoom ripple shadow-1-strong rounded">
                <img src="Our service\our service-9.jpg"
                  class="w-100" />
                <a href="#!">  
                </a>
              </div>
            </div>
      
            
      
          
          </div>
        </div>
      </section>

      
    
          
       


<div class="container py-5">
<div class="properties-container container">
<?php 
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) { ?>
   
            <div class="box">
              <h2><?= $row["title"] ?></h2><br>
                <img src="<?= $row["image"] ?>" alt="" >
                <br>
                <div class="content">
                    <div class="text">
                        <h3><?= number_format ($row["prix"],2) ?> DT</h3><br><br>
                        <p><?= $row["description"] ?></p>
                    </div>
                </div>
            </div>
        
            <?php }
            } else {
                echo "0 results";
            }
        ?>
          </div>
            
              
             
            
          <div class="container py-5">
          <div class="row">
            <div class="col-lg-12">
                <div class="section-header text-center">
                    <h2>Booking <span>Now</span></h2>
                </div>
            </div>
        </div>         
            
      <div id="booking" class="section">
        <div class="section-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-md-push-5">
                        <div class="booking-cta">
                            <h1>Make your reservation</h1>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-pull-7">
                        <div class="booking-form">
                            <form>
                                <div class="form-group">
                                    <span class="form-label">Your Destination</span>
                                    <input class="form-control" type="text" placeholder="Enter a destination or hotel name">
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <span class="form-label">Check In</span>
                                            <input class="form-control" type="date" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <span class="form-label">Check out</span>
                                            <input class="form-control" type="date" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <span class="form-label">Rooms</span>
                                            <select class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select>
                                            <span class="select-arrow"></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <span class="form-label">Adults</span>
                                            <select class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select>
                                            <span class="select-arrow"></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <span class="form-label">Children</span>
                                            <select class="form-control">
                                                <option>0</option>
                                                <option>1</option>
                                                <option>2</option>
                                            </select>
                                            <span class="select-arrow"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-btn">
                                    <button class="submit-btn">Check availability</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
     
<?php include("./lib/footer.php") ?>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>