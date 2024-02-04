<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <title>Home</title>
</head>
<body>
    <!-- header is here -->
<?php include 'header.php'; ?>

<!-- home page starts here -->
    <section id="home">
        <div class="home_container">
        <div class="main_text">
            <h2>The</h2>
            <h1>Mo:Mo Land</h1>
            <p>Tast of Nepal</p>
            <span class="auto_text"> Take Out & Delivery</span>   
           <a href="#">
             <button>Order Now</button>
           </a>
        </div>
            <div class="background_item">
                <img src="../The momo land/img/m1.png" alt="lipstick" id="lip_stick4">
                <img src="../The momo land/img/m2.png" alt="lipstick" id="lip_stick2">
                <img src="../The momo land/img/m3.png" alt="lip" id="lip_stick3">  
                <img src="../The momo land/img/m4.png" alt="lip" id="lip_stick">
        </div>
    </section>
<!-- delivery and pickup are here -->
<section id="delivery">
    <div class="delivery_container">
       <a href="#">
          <div class="item">
            <h1>Delivery</h1>
            <h4>See Our Menu</h4>
         </div>  
       </a>
        <a href="#">
        <div class="item2">
        <h1>Pickup</h1>
        <h4>See Our Menu</h4>
         </div> 
        </a>
    </div>
</section>

<!-- home mid section starts here -->
<section id="home_mid">
    <div class="home_mid_container">
        <div class="mid_title">
            <h1>About Mo:Mo</h1>
        </div>
        <div class="mid_img">

        </div>
        <div class="mid_para_container">
        
            <div class="mid_para">
                Lorem, ipsum dolor sit amet consectetur a
                dipisicing elit. Id vel laudantium expedita
                 quos dolorum eaque ipsum, aliquid mollitia saepe veritatis! Laudantium
                , eius ex dolore esse provident doloremque obcaecati non unde!
            </div>
            <div class="mid_read">
                <a href="#">
                    <button>Read More</button>
                </a>
            </div>

        </div>

    </div>
</section>
<!-- gallery section starts here -->
<section id="gallery">
    <h2>Gallery</h2>
    <div class="gallery_container">
        <img src="../The momo land/img/momo1.jpg">
        <img src="../The momo land/img/momo2.jpg">
        <img src="../The momo land/img/momo3.jpg">
        <img src="../The momo land/img/momo4.jpg">
        <img src="../The momo land/img/momo1.jpg">
        <img src="../The momo land/img/momo2.jpg">
      
    </div>
</section>

    <!-- footer is here -->
<?php include 'footer.php'; ?>


<script src="app.js"></script>
</body>
</html>