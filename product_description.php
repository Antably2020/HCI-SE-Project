
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
    <?php
   include 'navbar.php';
  ?>
  </head>
 
<body>

   
<div class="row">
<div class="card">
  <img src="images/im.png" alt="Denim Jeans" style="width:100% hieght:100%">
    
</div>
<div class="details">
        <h1> Product Name  </h1>

        <br>

        <p class="price">$19.99</p>

        <p><b>Avalabilit1y:</b> in stock  </p>

        <p><b>Product code:</b> cs000 </p>

        <p><b>Tags:</b> spare parts  </p>

        <p> This is description of the product  </p>
        
        <div >
<button class="cart-btn">		

Add to Cart</button>  
</div>
</div>

</div>
        

<?php
   include 'footer.php';
    include 'chaticon.php';
  ?>

  </body>
  </html>
