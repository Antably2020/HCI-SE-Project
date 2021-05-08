<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  
  <body>
  <header>
  <?php
   include 'navbar.php';
  ?>

</header>



<br><br><br><br>
           <center>
       <div class="col-lg-5 col-md-12" data-aos="fade-up" data-aos-delay="100">
            
                <form action="" method="POST" class="contactus" enctype="multipart/form-data" >
          <div class="container">
     
      


                
        
                 
                   <div class="form-outline mb-4">
                <p ><input id="name" name="name"type="text"class="form-control"  placeholder="Model" required = "true" pattern="[A-Za-z\s+]{2,10}" title="Please enter a valid product name."/>
                 
          </div>
            
                   <div class="form-outline mb-4">
                    <textarea  id="description" name="description" type="text" class="form-control" placeholder="description" required="true" pattern="[A-Za-z\s+]{2,100}" title="Please enter a valid description text." ></textarea>
                  </div>

             <div class="form-outline mb-4">
                <p ><input id="name" name="name"type="text"class="form-control"  placeholder="Price" required = "true" pattern="[A-Za-z\s+]{2,10}" title="Please enter a valid product name."/>
                 
          </div>
            
   
         
         
        
             
             <div class="form-outline mb-4">
                <div class="tm-product-img-dummy mx-auto">
                  <i
                    class="fas fa-cloud-upload-alt tm-upload-icon"
                    onclick="document.getElementById('fileInput').click();"
                  ></i>
                </div>
        
               
              
              
                  
         <input type="file" class="new-btn" name="uploadfile"  value=""/>    </div>
      
                <button type="submit" onsubmit="return false"  name="upload" style="background-color:#FF8000;" value="submit"class="btn btn-primary btn-block" >Add Product Now</button>

           
            
            <br><br>
          
                  
                 
      </div>
  </form>
</div>
</center>





<footer>
<?php
   include 'footer.php';
  ?>
  </footer>


   
  </body>
</html>