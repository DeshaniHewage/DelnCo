<?php
@include 'config.php';

$result = mysqli_query($conn, "SELECT * FROM products");
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet">
    

    <!-- Icon -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/thinline.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- icon -->

    <!-- Google fonts End -->

    <!-- style Sheet & JavaScript -->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/shop.css">
    <script src="js/index.js" defer></script>
    <script src="js/shop.js" defer></script>
    <!-- style Sheet & JavaScript -->

    <title>Del & Co</title>
  </head>

  <body class="home">
        <!-- Header Section -->
    <header class="primary-header container flex">
      <div class="header-inner-one flex">
        <div class="logo">
          <img src="image/DEL & CO New Logo black.png" alt="">
        </div>
        <button class="mobile-close-btn" data-visible="false" aria-controls="primary-navigation">
          <i class='bx bxs-x-circle'></i>
        </button>

        <nav>
          <ul id="primary-navigation" data-visible="false" class="primary-navigation flex">
            <li><a class="fs-100 fs-montserrat bold-500" href="index.html">Home</a></li>
            <li><a class="active fs-100 fs-Montserrat bold-500" href="shop.html">Shop</a></li>
            <li><a class="fs-100 fs-Montserrat bold-500" href="about.html">About Us</a></li>
            <li><a class="fs-100 fs-Montserrat bold-500" href="blog.html">Blog</a></li>
            <li><a class="fs-100 fs-Montserrat bold-500" href="contactus.html">Contact Us</a></li>
          </ul>
        </nav>
      </div>

      <div class="header-login flex">
        <!-- <p class="fs-100 fs-montserrat bold-500">login</p> -->
        <i class='bx bx-user-circle'></i>
        <i class='bx bx-search-alt-2'></i>
        <i class='bx bx-heart'></i>
        <i id="cart-box" aria-controls="cart-icon" class='bx bx-cart' ></i>


        <!-- Cart Box -->
        <div id="cart-icon" data-visible="false" class="cart-icon">
          <div class="shopping flex">
            <p>Shopping Basket</p>
            <i id="cross-btn" class='bx bx-x'></i>
          </div>
          <div class="cart bold-800 flex">
            <i class='bx bxs-shopping-bags'></i>
            <p>Cart is Empty</p>
          </div>
        </div>

      </div>
      <div class="mobile-open-btn">
        <i class='bx bx-align-right'></i>
      </div>
    </header>
            <!-- End Header Section -->



            <!-- == Start Shop Section == -->

            <!--Shop Feature Section 1 -->
            <section class="shop-feature bg-gray grid">
              <div>
                <p class="fs-Montserrat text-black">Home <span aria-haspopup="true" class="margin">></span>Product</p>
              </div>
              <h2 class="fs-poppins fs-300 bold-700">Products</h2>
            </section>


            <!--Shop Feature Section 2 -->
            <main class="shop-main-container grid">
              <div>
                <div class="shop-title flex">
                  <div>
                    <h2 class="fs-poppins fs-300">Shop</h2>
                    <p class="fs-Montserrat">Showing 1-9 of 10 results</p>
                  </div>
                  <div>
                    <select name="text" class="fs-poppins bg-black text-white">
                      <option value="text">Default Sorting</option>
                      <option value="text">Sort By Popularity</option>
                      <option value="text">Sort By Rating</option>
                      <option value="text">Sort By Latest</option>
                      <option value="text">Sort By Price</option>
                      <option value="text">Sort By Low to Hight</option>
                      <option value="text">Sort By Hight to Low</option>
                    </select>
                  </div>
                </div>

                <!--Shop Product-->
                <section class="shop-product grid">
                <?php while($row = mysqli_fetch_assoc($result)){ ?>
                  <div class="product-list grid">
                  <img src="uploaded_img/<?php echo $row['image']; ?>" alt="">

                    <p class="fs-Montserrat bold-600">  
                    
                    <?php echo $row['name']; ?>
                  </p>
                    <div class="shop-btn flex">
                      <button class="bg-red text-white fs-Montserrat">Add To Cart</button>
                      <p class="fs-Montserrat bold-700">Rs.
                      <?php echo $row['price']; ?>
                      </p>
                    </div>
                    <!--Pop Up-->
                    <div class="pop-up">
                      <p class="fs-poppins">Sell</p>
                    </div>
                    <!--Pop Up-->
                  </div>
                  <?php } ?>
                  <!--Product End-->


                  
                </section>
              </div>

              <!--Side Bar Section-->
              <section>

                <div class="sidebar-search text-black bg-gray flex">
                  <input type="text" placeholder="Search Here" class="fs-Montserrat bg-gray">
                  <div>
                    <i class='bx bg-red text-white bx-search'></i>
                  </div>
                </div>

                <aside class="sidebar-category">
                  <div class="category-list flex">
                    <h3 class="fs-poppins bold-700 fs-200">Product Categories</h3>
                    <i id="arrow" class='bx bx-chevron-right' data-category="false"></i>
                  </div>

                  <!-- == Category List == -->
                  <div class="shop-category-list">
                    <ul id="side-nav" class="sidebar-nav grid" data-category="false">

                        <li><a class="fs-Montserrat text-black bold-500" href="#">Bi-Fold</a></li>
                        <li><a class="fs-Montserrat text-black bold-500" href="#">Card Holder</a></li>
                        <li><a class="fs-Montserrat text-black bold-500" href="#">Passport Cover</a></li>
                        <li><a class="fs-Montserrat text-black bold-500" href="#">Book Cover</a></li>
                        <li><a class="fs-Montserrat text-black bold-500" href="#">Belt</a></li>
                        <li><a class="fs-Montserrat text-black bold-500" href="#">Watch Strap</a></li>
                    </ul>
                  </div>
                </aside>

              </section>
            </main>
            <!-- == End Shop Section == -->


    
        <!-- = Start Footer Section = -->
        <section class="footer grid">
          <div class="footer-logo grid">
            <img src="image/DEL & CO New Logo black.png" alt="">
            <p class="fs-Montserrat fs-100">Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
              Exercitationem laudantium laborum mollitia?</p>
              
              <div class="social-media flex">
                <a class="text-black" href="https://www.facebook.com/leather.delnco?mibextid=ZbWKwL" target="_blank"> <i class='bx bxl-facebook' ></i></a>
                <a class="text-black" href="https://www.instagram.com/delnco.leather?igsh=ZDIzNXN0anpmY2hl" target="_blank"> <i class='bx bxl-instagram' ></i></a>
                <a class="text-black" href="https://youtube.com/@delnco_leather?si=FRBq0oT2ghkkS5Cc" target="_blank"> <i class='bx bxl-youtube' ></i></a>
                <a class="text-black" href="https://www.tiktok.com/@del_n_co?_t=8kuvQJyR41i&_r=1" target="_blank"> <i class='bx bxl-tiktok' ></i></a>
              </div>
          </div>

              <div class="footer-menu grid">
                <h3 class="fs-poppins fs-200 bold-800">Quick Links</h3>
                <ul>
                <li><a class="fs-Montserrat text-black fs-100" href="index.html">Home</a></li>
                <li><a class="fs-Montserrat text-black fs-100" href="about.html">About</a></li>
                <li><a class="fs-Montserrat text-black fs-100" href="shop.html">Shop</a></li>
                <li><a class="fs-Montserrat text-black fs-100" href="contactus.html">Contact</a></li>
                </ul>
              </div>


            <div class="contact grid">
              <h3 class="fs-poppins fs-200 bold-800">Contact</h3>
              <p class="fs-Montserrat">+94 000 0000 xxx xxx Arawwala, Pannipitiya</p>
            </div>

            <div class="emails grid">
              <h3 class="fs-poppins fs-200 bold-800">Subscribe To Our Email</h3>
              <p class="updates fs-poppins fs-300 bold-800">For Latest News & Updates</p>
            

              <div class="inputField flex bg-gray">
                <input type="email" placeholder="Enter Your Email" class="fs-Montserrat bg-gray">
                <button class="bg-red text-white fs-poppins fs-50">Subscribe</button>
              </div>
            </div>
        </section>
        <!-- = End Footer Section = -->


        <!-- = Start Copyright Section = -->
        <section class="copyRight">
          <p class="c-font fs-Montserrat fs-100">© 2024 Del & CO. All rights reserved.</p>
          <p class="fs-Montserrat fs-100 text-align p-top">Privacy Policy , Terms & Conditions</p>
        </section>
        <!-- = End Copyright Section = -->
</body>
</html>
