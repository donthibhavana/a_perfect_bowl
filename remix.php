
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
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
   <style>
   
   .modal-dialog {
    max-width: 900px;
    margin: 1.75rem auto;
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

<body>

   <div class="container" >
  
  
  
  
  <ul class="nav justify-content-center" style="margin-top:30px">
       <li class="nav-item" style="width:150px;text-align:center">
      <a class="nav-link" href="adminhome.php">Home</a>
    </li>
    <li class="nav-item" style="width:150px;text-align:center">
      <a class="nav-link" href="categories.php">Categories</a>
    </li>
    <li class="nav-item" style="width:150px;text-align:center">
      <a class="nav-link" href="kitchentips.php">Kitchen Tips</a>
    </li>
    
    <li class="nav-item">
     
          
         <p class="text-center" style="margin-left:10px;margin-right:10px">
      <a href="adminhome.php"><img src="images/logo.jpeg" /></a>
  </p> 
     
    </li>
    <li class="nav-item" style="width:150px;text-align:center">
      <a class="nav-link" href="recipes.php">Recipe Book</a>
    </li>
    <li class="nav-item" style="width:150px;text-align:center">
      <a class="nav-link" href="remix.php">Remix</a>
    </li>
    <li class="nav-item" style="width:150px;text-align:center">
      <a class="nav-link" href="logout.php">Logout</a>
    </li>
  </ul>
    
  
  
</div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
             

            </div>
             </div>
              </div>
              
    

    <div class="container" style="margin-top:30px">
        <div class="row">
           
            <div class="col-md-12">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Add Mix Recipes</button>
                <br/>
                
                <!-- Modal -->
                  <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          
                          <h4 class="modal-title">Add Mix Recipe</h4>
                        </div>
                        <div class="modal-body">
                          <form method="POST" action="mix.php" enctype="multipart/form-data">
                              
                             
                                 
                                          <div class="form-group">
                                            <label for="name">Select Mix Recipe Category</label>
                                             <select class="form-control" name="mixtype" id="mixtype">

                                                    <option >Curry </option>
                                                   <option >Rice </option>
                                                   <option >Roti </option>
                                                        </select>
                                          </div>
                                     
                                          <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" name="name" id="name" required="">
                                          </div>
                                      
                                  
                                
                                          <div class="form-group">
                                            <label for="ing1">Ingredient 1</label>
                                            <input type="text" class="form-control" name="ing1" id="ing1" required="">
                                          </div>
                                     
                                          <div class="form-group">
                                            <label for="ing2">Ingredient 2</label>
                                            <input type="text" class="form-control" name="ing2" id="ing2" required="">
                                          </div>
                                      
                                 
                                          <div class="form-group">
                                            <label for="step1">Step 1</label>
                                            <input type="text" class="form-control" name="step1" id="step1" required="">
                                          </div>
                                     
                                          <div class="form-group">
                                            <label for="step2">Step 2</label>
                                            <input type="text" class="form-control" name="step2" id="step2" required="">
                                          </div>
                                     
                                  
                                  
                                          <div class="form-group">
                                            <label for="step3">Step 3</label>
                                            <input type="text" class="form-control" name="step3" id="step3" required="">
                                          </div>
                                     
                                  
                                 
                                  
                                  
                                          
            
                                        <div class="form-group">
                                            <label for="file">Image</label>
                                            <input type="file" class="form-control" name="file" id="file" required="">
                                        </div>
                                     
                                          <div class="form-group">
                                            <button type="submit" class="form-control btn btn-success  " style="border-radius: 20px;">Submit</button>
                                          </div>
                                     
                              
                               
            
                                
                            </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                <table class="table table-stripped table-bordered">
                  
                  
                     
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Ingredient 1</th>
                            <th>Ingredient 2</th>
                            <th>Remix Type</th>
                            <th>Action</th>
                        </tr>
                     
                        <?php



                        include 'config.php';


                        $conn = new mysqli($servername, $username, $password, $dbname);
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        $sql = "SELECT * FROM remix";
                        $result = $conn->query($sql);

                        if ($result) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                                echo  "
                                <tr>
                                <td> " . $row['mid'] . "</td>
                                <td> <img src='" . $row['image'] . "' style='height:40px'/></td>
                                <td> " . $row['name'] . "</td>
                                <td> " . $row['ing1'] . "</td>
                                <td> " . $row['ing2'] . "</td>
                                <td> " . $row['mixtype'] . "</td>
                                <td> 
                                
                                  <a   data-toggle='modal' data-target='#" . $row["mid"] . "' style='cursor:pointer'>
                                         <button class='btn btn-success' >Edit </button>
                                    </a>
                                    
                                    
                                    <div class='modal fade' id='" . $row["mid"] . "'   role='dialog'   aria-hidden='true'>
                                    <div class='modal-dialog' role='document'>
                                        <div class='modal-content'>
                                            <div class='modal-header'>
                                                <h3 class='modal-title' id='exampleModalLabel'>Update Categoty</h3>
                                                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                    <span aria-hidden='true'>&times;</span>
                                                </button>
                                            </div>
                                            <div class='modal-body'>
                    
                                                <form method='POST' action='editremix.php' >
                
                                                <input type='text' class='form-control' name='id' value='" . $row["mid"] . "' hidden  readonly>
                
                                                    <div class='form-group'>
                                                        <label>Remix Name</label>
                                                        <input type='text' class='form-control' name='name' value='" . $row["name"] . "' required>
                                                    </div>
                
                                                  <div class='form-group'>
                                                        <label>Ingredient 1</label>
                                                        <input type='text' class='form-control' name='ing1' value='" . $row["ing1"] . "' required>
                                                    </div>
                                                    
                                                     <div class='form-group'>
                                                        <label>Ingredient 2</label>
                                                        <input type='text' class='form-control' name='ing2' value='" . $row["ing2"] . "' required>
                                                    </div>
                                                    
                                                      <div class='form-group'>
                                                        <label>Step 1</label>
                                                        <input type='text' class='form-control' name='step1' value='" . $row["step1"] . "' required>
                                                    </div>
                                                    
                                                      <div class='form-group'>
                                                        <label>Step 2</label>
                                                        <input type='text' class='form-control' name='step2' value='" . $row["step2"] . "' required>
                                                    </div>
                                                    
                                                      <div class='form-group'>
                                                        <label>Step 3</label>
                                                        <input type='text' class='form-control' name='step3' value='" . $row["step3"] . "' required>
                                                    </div>
                                                    
                                                    
                                                    
                                                    
                                                   
                                                    <button class='btn btn-primary form-control' width='100px'  type='submit'>Update</button>
                                                </form>
                    
                    
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                                
                                
                                
                                
                                        <a href='deleteremix.php?id=" . $row['mid'] . "'>
                                            <button class='btn btn-danger' >Delete </button>
                                        </a>
                                </td>
                                
                                </tr> ";
                            }
                        } else {
                            echo "0 Recipes Found";
                        }
                        $conn->close();
                        ?>
                     
                </table>
                
                
            </div>
           
        </div>
    </div>

   

   
<hr>

    <!-- Footer -->
    <div class="container" style="background-image: url('images/footer.jpeg');background-repeat: no-repeat;
    background-position: center;
    background-size: fixed 100%; 
    background-attachment: fixed;
    position: relative;display: block;
    height: 280px;  /* set the height here */
    width: 100%;">
        <div class="row" style="margin-bottom:50px">
            <div class="col-md-2" style="text-align: center"></div>
            <div class="col-md-5" style="text-align: center">
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
            <div class="col-md-5" style="text-align: center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2793.7344679070807!2d-73.67046298444993!3d45.55566687910212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc918bb357d6ac7%3A0x228085d5839fc9f4!2s577%20Boul%20Henri-Bourassa%20E%2C%20Montr%C3%A9al%2C%20QC%20H2C%201E2%2C%20Canada!5e0!3m2!1sen!2sin!4v1645100566160!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>




</body>

</html>