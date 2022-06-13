<!DOCTYPE html>
<html lang="en">

<head>
    <title>A Perfect Bowl</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    
   <style>
   
   p {
    margin-top: 0;
    margin-bottom: 2px;
}
  
  a {
   color: var(--white);
    text-decoration: none;
    background-color: var(--green);
    text-color: white;
    border-radius: 5px;
    margin-top: 10px;
    margin-left:10px;
    margin-right:10px;
}
.carousel-caption {
    position: absolute;
    right: 15%;
    bottom: 80px;
    left: 15%;
    z-index: 10;
    padding-top: 20px;
    padding-bottom: 20px;
    color: #fff;
    text-align: center;
}
  </style>
</head>

<body style="background-image: url('images/bggg.jpeg');">

    <div class="container" >
  
  
  
  
 
  <ul class="nav justify-content-center" style="margin-top:30px">
       <li class="nav-item" style="width:150px;text-align:center">
      <a class="nav-link" href="index.php">Home</a>
    </li>
    <li class="nav-item" style="width:150px;text-align:center">
      <a class="nav-link" href="about.html">About</a>
    </li>
    <li class="nav-item" style="width:150px;text-align:center">
      <a class="nav-link" href="tips.php">Kitchen Tips</a>
    </li>
    
    <li class="nav-item">
     
          
         <p class="text-center" style="margin-left:10px;margin-right:10px">
      <a href="index.php"><img src="images/logo.jpeg" /></a>
  </p> 
     
    </li>
    <li class="nav-item" style="width:150px;text-align:center">
      <a class="nav-link" href="contact.html">Contact</a>
    </li>
    <li class="nav-item" style="width:150px;text-align:center">
      <a class="nav-link" href="faq.html">FAQ</a>
    </li>
    <li class="nav-item" style="width:150px;text-align:center">
      <a class="nav-link" href="adminlogin.html">Admin</a>
    </li>
  </ul>
    
  
  
</div>
    
      
       
    <div class="container"  style="margin-top:20px">
        
        
         <div class="row">
             <div class="col-md-12">
                   <h1 style="margin:20px;color: #28a745;text-align:center"></h1>
             </div>
         </div>
        
         <div class="row">
            
            
            
           
            
            <?php
                                        
                                         include 'config.php';
                                         
                                         
                           $id=$_GET["id"];
            
                            $sql = "SELECT * FROM remix where mid='$id'";
                            $result = $conn->query($sql);
            
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {
                                  
                                    echo '
                                
                               <div class="col-md-12">
                               <h2 style="text-align:left">
                                    
                                     ' . $row["name"] . '
                               
                                    </h2>
                                    <br/>
                                    <br/>
                               </div>
                              <div class="col-md-1"></div>
                               <div class="col-md-4">
                               
                                   <img src="' . $row["image"] . '"  style="width:100%;height:250px" class="img-thumbnail"/>
                                    
                               
                                    <br/>
                                    <br/>
                                    
                                   
                                 
                                   
                                </div>
                                <div class="col-md-6">
                                
                                <h4 style="text-align:left">
                                    
                                     Ingredients
                               
                                    </h4>
                                    <p>' . $row["ing1"] . ' </p>
                                    <p>' . $row["ing2"] . ' </p>
                                    
                                    
                                    <hr/>
                                    
                                  <h4 style="text-align:left">
                                    
                                     Directions :
                               
                                    </h4>  
                                    
                                    <p>Step : 1 <br/> ' . $row["step1"] . ' </p>
                                   <p>Step : 2 <br/> ' . $row["step2"] . ' </p>
                                   <p>Step : 3 <br/> ' . $row["step3"] . ' </p>
                                 
                                
                                </div>
                             
                                ';
                                }
                            } else {
                                echo "No Mix Recipes found";
                            }
                            $conn->close();
            
            
                                        
                                        ?>
           
           
             
        </div>
        
      
<!--            <div class="col-md-3" style="text-align:center">-->
                
<!--                <img src="images/clock.png" class="rounded" alt="Cinque Terre" style="width:70px"><br/><br/>-->
           
<!--               <button type="button" class="btn btn-success" style="width:150px;"><span class="glyphicon glyphicon-check"></span>Quick Meal</button>-->
               
<!--               <div class="card" style="margin-top:20px;height:130px">-->
<!--  <div class="card-body">Don't worry are you running out of time? Experience some time saving results here.</div>-->
<!--</div>-->
<!--            </div>-->
            
            
   
    </div>
    
   
  
   
<hr>

    <!-- Footer -->
    <div class="container">
        <div class="row" style="margin-bottom:50px">
            <div class="col-md-2" style="text-align: center"></div>
            <div class="col-md-10" style="text-align: center">
                <p style="text-align: left; margin:30px;">
                    Email : info@aperfectbowl.com
                    <br>
                    <b>Hours</b>
                    <br>
                    Sunday-Saturday
                    <br>
                    7am-8pm
                    <br>
                    Location<br>
                    Quebec, CA
                     </p>
                    
                    Copyright &copy; A Perfect Bowl. All rights Reserved. site by BV
              
            </div>
        </div>
    </div>



</body>

</html>