<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css"/>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top">
    <div class="container">
        <img src="assets/imgs/logo.png" alt="Logo">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse nav-buttons" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="shop.html">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cart.html"><i class="fas fa-shopping-cart"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="account.html"><i class="fas fa-user"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<!--HOME-->
<section id="home">
    <div class="container">
        <h5>NEW ARRIVALS</h5>
        <h1><span>Best Prices</span>This season</h1>
        <p>Eshop offers the best products for the most affordable prices</p>
        <button>Shop Now</button>
    </div>
</section>


        <!--BRAND-->
    <section id="brand" class="container">
        <div class="row">
            <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets/imgs/brand1.jpg"/>
            <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets/imgs/brand2.jpg"/>
            <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets/imgs/brand3.jpg"/>
            <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets/imgs/brand4.jpg"/>
        </div>
    </section>
    

  <!--NEW-->
    <section id="new" class="w-100">
    <div class="row p-0 m-0">
        <!--one-->
        <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
            <img class="img-fluid" src="assets/imgs/1.jpg"/>
            <div class="details">
                <h2>Extremely awesome shoes</h2>
                <button class="text uppercase">Shop Now</button>
            </div>
        </div>
        <!--two-->
        <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
            <img class="img-fluid" src="assets/imgs/2.jpg"/>
            <div class="details">
                <h2> Awesome Jacket</h2>
                <button class="text uppercase">Shop Now</button>
            </div>
        </div>

        <!--Three-->
        <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
            <img class="img-fluid" src="assets/imgs/3.jpg"/>
            <div class="details">
                <h2>50% OFF Watches</h2>
                <button class="text uppercase">Shop Now</button>
            </div>
        </div>
    </div>
</section>





<!--Features-->
<section id="featured" class="my-5 pb-5">
    <div class="container text-center mt-5 py-5">
      <h3>Our featured</h3>
      <hr class="mx-auto">
      <p>Here you can check out our featured products</p>
    </div>
    <div class="row mx-auto container-fluid"> 

    <?php include('server/get_featured_products.php'); ?>


    <?php while($row= $featured_products->fetch_assoc()){ ?>



        <div class="product text-center col-lg-3 col-md-6 col-sm-12">  
        <img class="img-fluid mb-3" src="assets/imgs/<?php echo $row['product_image']; ?>" alt="Featured product 1">
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <h5 class="p-name"><?php echo $row['product_name'];?></h5>
        <h4 class="p-price">$<?php echo $row['product_price'];?></h4>
        <a href="single_product.php?product_id=<?php echo $row['product_id'];?>"><button class="buy-btn">Buy Now</button></a>
      </div>

      <?php } ?>
      
    </div>
  </section>





  <!-- Banner-->
   <section id="banner" class="my-5 py-5">
    <div class="container">
        <h4>MID SEASON SALE</h4>
        <h1>Autumn Collection <br>UP to 30% OFF</h1>
        <button class="text-uppercase">shop now</button>
    </div>
   </section>




  <!--Clothes-->
  <section id="featured" class="my-5">
    <div class="container text-center mt-5 py-5">
      <h3>Dresses & Coats</h3>
      <hr class="mx-auto">
      <p>Here you can check out our amazing clothes</p>
    </div>
    <div class="row mx-auto container-fluid"> 


    <?php include('server/get_clothes.php'); ?>


    <?php while($row= $clothes->fetch_assoc()){ ?>

        <div class="product text-center col-lg-3 col-md-6 col-sm-12">  
        <img class="img-fluid mb-3" src="assets/imgs/<?php echo $row['product_image']; ?>" alt="cloth 1">
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <h5 class="p-name"><?php echo $row['product_name'];?></h5>
        <h4 class="p-price">$<?php echo $row['product_price'];?></h4>
        <a href="single_product.php?product_id=<?php echo $row['product_id'];?>"><button class="buy-btn">Buy Now</button></a>
      </div>

      <?php } ?>

    </div>
  </section>



  <!--Watches-->
  <section id="featured" class="my-5">
    <div class="container text-center mt-5 py-5">
      <h3>Smart Watches</h3>
      <hr class="mx-auto">
      <p>Here you can check out our amazing Watches</p>
    </div>
    <div class="row mx-auto container-fluid">
      

    <?php include('server/get_watches.php'); ?>


    <?php while($row= $watches->fetch_assoc()){ ?>
    
        <div class="product text-center col-lg-3 col-md-6 col-sm-12">  
        <img class="img-fluid mb-3" src="assets/imgs/<?php echo $row['product_image']; ?>" alt="Featured product 1">
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
        <h4 class="p-price">$<?php echo $row['product_price'];?></h4>
        <a href="single_product.php?product_id=<?php echo $row['product_id'];?>"><button class="buy-btn">Buy Now</button></a>
      </div>

      <?php } ?>

      
    </div>
  </section>



  <!--Sports Shoes-->

  <section id="featured" class="my-5">
    <div class="container text-center mt-5 py-5">
      <h3>Sports Shoes</h3>
      <hr class="mx-auto">
      <p>Here you can check out our amazing Shoes</p>
    </div>
    <div class="row mx-auto container-fluid"> 


    <?php include('server/get_sports_shoes.php'); ?>


    <?php while($row= $sports_shoes->fetch_assoc()){ ?>


        <div class="product text-center col-lg-3 col-md-6 col-sm-12">  
        <img class="img-fluid mb-3" src="assets/imgs/<?php echo $row['product_image'];?>" alt="Featured product 1">
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <h5 class="p-name"><?php echo $row['product_name'];?></h5>
        <h4 class="p-price">$<?php echo $row['product_price'];?></h4>
        <a href="single_product.php?product_id=<?php echo $row['product_id'];?>"><button class="buy-btn">Buy Now</button></a>
      </div>

      <?php } ?>

      
    </div>
  </section>







  <!--Footer-->
  <footer class="mt-5 py-5 text-center bg-dark text-light">
    <div class="row cotainer mx-auto pt-5">
        <div class="footer-one col-lg-3 col-md-6 col-sm-12">
            <img class="logo" src="assets/imgs/logo.png"/>
            <p class="pt-3"> We Provide the best products for the most affordabel prices</p>
        </div>
        <div class="footer-one col-lg-3 col-md-6 col-sm-12">
            <h5 class="pb-2">Featured</h5>
            <ul class="text-uppercase">
                <li><a href="#">men</a></li>
                <li><a href="#">women</a></li>
                <li><a href="#">boys</a></li>
                <li><a href="#">girls</a></li>
                <li><a href="#">new arrivals</a></li>
                <li><a href="#">clothes</a></li>
            </ul>
        </div>
        <div class="footer-one col-lg-3 col-md-6 col-sm-12">
            <h5 class="pb-2">Contact us</h5>
            <div>
                <h6 class="text-uppercase">Address</h6>
                <p>1234 Street Name, City</p>
            </div>
            <div>
                <h6 class="text-uppercase">Phone</h6>
                <p>123 456 7890</p>
            </div>
            <div>
                <h6 class="text-uppercase">Email</h6>
                <p>info@email.com</p>
            </div>
            </div>
            <div class="footer-one col-lg-3 col-md-6 col-sm-12">
                <h5 class="pb-2">Instagram</h5>
                <div class="row">
                    <img src="assets/imgs/featured1.jpg" class="img-fluid w-25 h-100 m-2"/>
                    <img src="assets/imgs/featured2.jpg" class="img-fluid w-25 h-100 m-2"/>
                    <img src="assets/imgs/featured3.png" class="img-fluid w-25 h-100 m-2"/>
                    <img src="assets/imgs/featured4.jpg" class="img-fluid w-25 h-100 m-2"/>
                    <img src="assets/imgs/clothes1.jpg" class="img-fluid w-25 h-100 m-2"/>
                </div>
            </div>
        </div>


        <div class="copyright mt-5">
            <div class="row container mx-auto">
                <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
                    <img src="assets/imgs/payment.png"/>
                </div>
                <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
                    <p>eCommerce © 2025 All Right Reserved</p>
                </div>
                <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>

    </div>
   
  </footer>
  




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
