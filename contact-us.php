


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
  
  <?php
   include 'navbar.php';

  ?>
<div class="login-container " style="border-bottom:0px; border-top: 5px solid #FF7A00; ">



  <form class="form" method="post" action="" name="Login" >
       
    <h1 style=" padding-top: 105px;">Contact Us<h1>
      
		<div  >
	
						
						<input class="login-field" type="text"  required="true"  name="email" placeholder="Email Adress" autofocus="false">
						
		
			
			
	
            <select class="form-select login-field" aria-label="Default select example">
  <option selected>What is this about?</option>
  <option value="1">complain</option>
  <option value="2">option 2</option>
  <option value="3">option 3</option>
</select>
<textarea class="form-control login-field" id="exampleFormControlTextarea1" rows="3" style="  display: block; margin-left:auto; margin-right: auto;"></textarea>
					</div>
				
					
					
					
        <input type="submit" class="login-btn" id="Login" name="Login"onsubmit="return false" value="submit" class="login-button">
      
  
	  </form>   </div>





<?php
   include 'footer.php';
  ?>
   
  </body>
</html>