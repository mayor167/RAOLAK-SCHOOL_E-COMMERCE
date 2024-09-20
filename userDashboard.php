<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100..900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="userDashboard.css">
    <script src="awuf_timer.js?v=1.0"></script>
</head>
<body>
    <header>
        <div class="logo-banner">
            <img src="brand_logo.png" alt="NAIRA4GOODS">
            <h1>NAIRA4GOODS</h1>
                <select name="Allproduct">
                    <option value="">All</option>
                    <option value="Bags">Bags</option>
                    <option value="shoes">Shoes</option>
                    <option value="Shirts">Shirts</option>
                </select>
            <div class="search">
                <input type="search" placeholder="Search..." >
                <span class="icon material-symbols-outlined">search</span>
            </div>
            
            <div class="right-menus">
                <a href="login.php"><span class="icon material-symbols-outlined">login</span></a>
               <!--<i class="login_tooltips">Login</i>--> 
                <a href="register.php"><span class="icon material-symbols-outlined">How_To_Reg</span></a>
                <a href=""><span class="icon material-symbols-outlined">chat</span></a>
            </div>
        </div>
        <div class="nav-bar">
            <nav>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                
                        <li class="shop_dropdown">
                            <a href="shop.php">SHOP</a>
                            <div class="dropdown-content">
                                <a href="#">Cloths</a>
                                <a href="#">Accessories</a>
                                <a href="#">Bags</a>
                                <a href="#">Shoes</a>
                            </div>
                        </li>
                        
            
                    <li><a href="delivery.php">DELIVERY</a></li>
                    <li><a href="legal_notice.php">LEGAL NOTICE</a></li>
                    <li><a href="#">BLOG</a></li>
                    <li><a href="about_me.php">ABOUT US</a></li>
                </ul>
            </nav>
        </div>
        <div class="last-nav-bar">
            <span class="icon material-symbols-outlined">star</span>
            <p><b>Free Delivery </b> World Wide*<a href="#">Learn more</a> 
                <span class="icon material-symbols-outlined">favorite</span>Loved by our Customers. <b>5000</b>+ Reviews
                <span class="icon material-symbols-outlined">done</span>
                    <b>Free Returns</b> and <b>Free Shipping</b>
                    </p>
        </div>
    </header>
   <main>
    <div class="product_slider">
        <center> <h1>BUY SNEAKERS, SHOES & SHIRTS @ <br>AFFORDABLE PRICE</h1>
            <p>Enjoy 100% quality goods,fast and free delivery</p>
        </center>
       
        <!-- <center>
            <ul>
                <li><a href="register.php">Register</a>
                </li>
                <li>
                    <a href="login.php">Login</a>
                </li>
            </ul>
        </center> -->
        
        
    </div>
    <div class="cheap_sales">
        <div class="col_awuf_sales" id="col_awuf_sales">
            <center>
                <p><i>Don't Miss</i></p>
            <h1>AWUF SALE ENDS SOON</h1>
            </center>
            <div class="div_time" id="div_time">
               <center>
                <h1 id="hours">24</h1>
                <h6>HOURS</h6>
                </center> 
            </div>
            <div class="div_time">
                <center>
                    <h1 id="mins">00</h1>
                    <h6>MIN</h6>
                    </center> 
            </div>
            <div class="div_time">
                <center>
                    <h1 id="secs">00</h1>
                    <h6>SEC</h6>
                    </center> 
            </div>
            <center>
                <div class="btn_browse">
                    <center> <h1>BROWSE NOW</h1></center>
                </div>
            </center>
           
            
        </div>
        <div class="col_black_friday_sales">
            <center><h1>BLACK FRIDAY <br>SALE</h1></center>
            <center>
                <div class="btn_browse">
                    <center> <h1>BROWSE NOW</h1></center>
                </div>
            </center>
        </div>
    </div>
   </main>
   
   <div class="gallery_product_caption">
    <h1>OUR BESTSELLERS <span><a href="#">Browser All <span class="forward_arrow">></span></a></span></h1>
   </div>
   <div class="product_gallery">
    <div class="wrapper">
        <div class="shirts_hoods">
                <div class="display_div_with_product_details">
                    <div class="product1">
                        <div class="circle"><a href="#"><center><span class="fas fa-heart"></span></center></a></div>
                       <center><h1><a href="#">QUICK VIEW</a></h1></center>  
                    </div>
                    <div class="product_details">
                        <h2>Brimstone Clothing</h2>
                        <p>Round Neck T-shirt</p> 
                        <p><b>Price:</b> ₦6,000</p>
                        <span class="fas fa-star"></span> 
                        <span class="fas fa-star"></span> 
                        <span class="fas fa-star"></span> 
                        <span class="fas fa-star"></span> 
                        <span class="fas fa-star"></span>  
                    </div>
                    
                </div>
                <div class="display_div_with_product_details">
                    <div class="product2">
                        <div class="circle"><a href="#"><center><span class="fas fa-heart"></span></center></a></div>
                        <center><h1><a href="#">QUICK VIEW</a></h1></center> 
                    </div>
                    <div class="product_details">
                        <h2>Brimstone Clothing</h2>
                        <p>Round Neck T-shirt</p> 
                        <p><b>Price:</b> ₦6,000</p>
                        <span class="fas fa-star"></span> 
                        <span class="fas fa-star"></span> 
                        <span class="fas fa-star"></span> 
                        <span class="fas fa-star"></span> 
                        <span class="fas fa-star"></span>  
                    </div>
                </div>
                <div class="display_div_with_product_details">
                    <div class="product3">
                        <div class="circle"><a href="#"><center><span class="fas fa-heart"></span></center></a></div>
                        <center><h1><a href="#">QUICK VIEW</a></h1></center> 
                    </div>
                    <div class="product_details">
                        <h2>Brimstone Clothing</h2>
                        <p>Round Neck T-shirt</p> 
                        <p><b>Price:</b> ₦6,000</p>
                        <span class="fas fa-star"></span> 
                        <span class="fas fa-star"></span> 
                        <span class="fas fa-star"></span> 
                        <span class="fas fa-star"></span> 
                        <span class="fas fa-star"></span>  
                    </div>
                </div>
                <div class="display_div_with_product_details">
                    <div class="product4">
                        <div class="circle"><a href="#"><center><span class="fas fa-heart"></span></center></a></div>
                        <center><h1><a href="#">QUICK VIEW</a></h1></center> 
                    </div>
                    <div class="product_details">
                        <h2>Brimstone Clothing</h2>
                        <p>Round Neck T-shirt</p> 
                        <p><b>Price:</b> ₦6,000</p>
                        <span class="fas fa-star"></span> 
                        <span class="fas fa-star"></span> 
                        <span class="fas fa-star"></span> 
                        <span class="fas fa-star"></span> 
                        <span class="fas fa-star"></span>  
                    </div>
                </div>
                <div class="display_div_with_product_details">
                    <div class="product5">
                        <div class="circle"><a href="#"><center><span class="fas fa-heart"></span></center></a></div>
                        <center><h1><a href="#">QUICK VIEW</a></h1></center> 
                    </div>
                    <div class="product_details">
                        <h2>Brimstone Clothing</h2>
                        <p>Round Neck T-shirt</p> 
                        <p><b>Price:</b> ₦6,000</p>
                        <span class="fas fa-star"></span> 
                        <span class="fas fa-star"></span> 
                        <span class="fas fa-star"></span> 
                        <span class="fas fa-star"></span> 
                        <span class="fas fa-star"></span>  
                    </div>
                </div>
        </div>
        
    </div>
    <div class="gallery_product_caption">
        <h1>LASTEST ON SALE <span><a href="#">Browser All <span class="forward_arrow">></span></a></span></h1>
       </div>
       <div class="wrapper">
        <div class="shirts_hoods">
                <div class="display_div_with_product_details">
                    <div class="product1">
                        <div class="circle"><a href="#"><center><span class="fas fa-heart"></span></center></a></div>
                        <center><h1><a href="#">QUICK VIEW</a></h1></center> 
                    </div>
                   
                   
                    <div class="product_details">
                        <h2>Brimstone Clothing</h2>
                        <p>Round Neck T-shirt</p> 
                        <p><b>Price:</b> ₦6,000</p>
                        <span class="fas fa-star"></span> 
                        <span class="fas fa-star"></span> 
                        <span class="fas fa-star"></span> 
                        <span class="fas fa-star"></span> 
                        <span class="fas fa-star"></span>  
                    </div>
                    
                </div>
                <div class="display_div_with_product_details">
                    <div class="product2">
                        <div class="circle"><a href="#"><center><span class="fas fa-heart"></span></center></a></div>
                        <center><h1><a href="#">QUICK VIEW</a></h1></center> 
                    </div>
                    <div class="product_details">
                        <h2>Brimstone Clothing</h2>
                        <p>Round Neck T-shirt</p> 
                        <p><b>Price:</b> ₦6,000</p>
                        <span class="fas fa-star"></span> 
                        <span class="fas fa-star"></span> 
                        <span class="fas fa-star"></span> 
                        <span class="fas fa-star"></span> 
                        <span class="fas fa-star"></span>  
                    </div>
                </div>
                <div class="display_div_with_product_details">
                    <div class="product3">
                        <div class="circle"><a href="#"><center><span class="fas fa-heart"></span></center></a></div>
                        <center><h1><a href="#">QUICK VIEW</a></h1></center> 
                    </div>
                    <div class="product_details">
                        <h2>Brimstone Clothing</h2>
                        <p>Round Neck T-shirt</p> 
                        <p><b>Price:</b> ₦6,000</p>
                        <span class="fas fa-star"></span> 
                        <span class="fas fa-star"></span> 
                        <span class="fas fa-star"></span> 
                        <span class="fas fa-star"></span> 
                        <span class="fas fa-star"></span>  
                    </div>
                </div>
                <div class="display_div_with_product_details">
                    <div class="product4">
                        <div class="circle"><a href="#"><center><span class="fas fa-heart"></span></center></a></div>
                        <center><h1><a href="#">QUICK VIEW</a></h1></center> 
                    </div>
                    <div class="product_details">
                        <h2>Brimstone Clothing</h2>
                        <p>Round Neck T-shirt</p> 
                        <p><b>Price:</b> ₦6,000</p>
                        <span class="fas fa-star"></span> 
                        <span class="fas fa-star"></span> 
                        <span class="fas fa-star"></span> 
                        <span class="fas fa-star"></span> 
                        <span class="fas fa-star"></span>  
                    </div>
                </div>
                <div class="display_div_with_product_details">
                    <div class="product5">
                        <div class="circle"><a href="#"><center><span class="fas fa-heart"></span></center></a></div>
                        <center><h1><a href="#">QUICK VIEW</a></h1></center> 
                    </div>
                    <div class="product_details">
                        <h2>Brimstone Clothing</h2>
                        <p>Round Neck T-shirt</p> 
                        <p><b>Price:</b> ₦6,000</p>
                        <span class="fas fa-star"></span> 
                        <span class="fas fa-star"></span> 
                        <span class="fas fa-star"></span> 
                        <span class="fas fa-star"></span> 
                        <span class="fas fa-star"></span>  
                    </div>
                </div>
        </div>
    </div>
    <div class="gallery_product_caption">
        <h1>WEEKLY FEATURED PRODUCTS <span><a href="#">Browser All <span class="forward_arrow">></span></a></span></h1>
       </div>
       <div class="wrapper">
        <div class="shirts_hoods">
                <div class="display_div_with_product_details">
                    <div class="product1">
                        <div class="circle"><a href="#"><center><span class="fas fa-heart"></span></center></a></div>
                        <center><h1><a href="#">QUICK VIEW</a></h1></center> 
                    </div>
                   
                   
                    <div class="product_details">
                        <h2>Brimstone Clothing</h2>
                        <p>Round Neck T-shirt</p> 
                        <p><b>Price:</b> ₦6,000</p>
                        <span class="fas fa-star"></span> 
                        <span class="fas fa-star"></span> 
                        <span class="fas fa-star"></span> 
                        <span class="fas fa-star"></span> 
                        <span class="fas fa-star"></span>  
                    </div>
                    
                </div>
                <div class="display_div_with_product_details">
                    <div class="product2">
                        <div class="circle"><a href="#"><center><span class="fas fa-heart"></span></center></a></div>
                        <center><h1><a href="#">QUICK VIEW</a></h1></center> 
                    </div>
                    <div class="product_details">
                        <h2>Brimstone Clothing</h2>
                        <p>Round Neck T-shirt</p> 
                        <p><b>Price:</b> ₦6,000</p>
                        <span class="fas fa-star"></span> 
                        <span class="fas fa-star"></span> 
                        <span class="fas fa-star"></span> 
                        <span class="fas fa-star"></span> 
                        <span class="fas fa-star"></span>  
                    </div>
                </div>
                <div class="display_div_with_product_details">
                    <div class="product3">
                        <div class="circle"><a href="#"><center><span class="fas fa-heart"></span></center></a></div>
                        <center><h1><a href="#">QUICK VIEW</a></h1></center> 
                    </div>
                    <div class="product_details">
                        <h2>Brimstone Clothing</h2>
                        <p>Round Neck T-shirt</p> 
                        <p><b>Price:</b> ₦6,000</p>
                        <span class="fas fa-star"></span> 
                        <span class="fas fa-star"></span> 
                        <span class="fas fa-star"></span> 
                        <span class="fas fa-star"></span> 
                        <span class="fas fa-star"></span>  
                    </div>
                </div>
                <div class="display_div_with_product_details">
                    <div class="product4">
                        <div class="circle"><a href="#"><center><span class="fas fa-heart"></span></center></a></div>
                        <center><h1><a href="#">QUICK VIEW</a></h1></center> 
                    </div>
                    <div class="product_details">
                        <h2>Brimstone Clothing</h2>
                        <p>Round Neck T-shirt</p> 
                        <p><b>Price:</b> ₦6,000</p>
                        <span class="fas fa-star"></span> 
                        <span class="fas fa-star"></span> 
                        <span class="fas fa-star"></span> 
                        <span class="fas fa-star"></span> 
                        <span class="fas fa-star"></span>  
                    </div>
                </div>
                <div class="display_div_with_product_details">
                    <div class="product5">
                        <div class="circle"><a href="#"><center><span class="fas fa-heart"></span></center></a></div>
                        <center><h1><a href="#">QUICK VIEW</a></h1></center> 
                    </div>
                    <div class="product_details">
                        <h2>Brimstone Clothing</h2>
                        <p>Round Neck T-shirt</p> 
                        <p><b>Price:</b> ₦6,000</p>
                        <span class="fas fa-star"></span> 
                        <span class="fas fa-star"></span> 
                        <span class="fas fa-star"></span> 
                        <span class="fas fa-star"></span> 
                        <span class="fas fa-star"></span>  
                    </div>
                </div>
        </div>
    </div>
       </div>
       <footer>
        <div class="wrapper">
            <div class="brand_logo_col">
                <img class="logo" src="brand_logo.png" alt="NAIRA4GOODS">
                <p>
                    Elevate your wardrobe without breaking the bank. Shop Naira4Goods today and experience fashion that fits your lifestyle!"
                </p>
                <div class="call_us">
                    <img src="/index_images/phone-call.svg" alt="Call Us">
                    <h1> <span>NEED HELP?</span><br> 08063676340, 08114772961</h1>
                </div>
            <p><img  class="social_handle_icons" src="index_images/facebook-f.svg" alt="instagram"> 
                <img  class="social_handle_icons" src="index_images/twitter.svg" alt="instagram">
                <img  class="social_handle_icons" src="index_images/instagram.svg" alt="instagram">
                <img  class="social_handle_icons" src="index_images/youtube.svg" alt="instagram">
                <img  class="social_handle_icons" src="index_images/whatsapp.svg" alt="instagram">
                <img  class="social_handle_icons" src="index_images/pinterest-p.svg" alt="instagram">
            </p>   
            <br> 
            <p>Copyright © NAIRA4GOODS. All Rights Reserved.</p>
            </div>
            <div class="quick_links_columns">
                <div class="quick_link_col1">
                    <h2>Information</h2>
                    <ul>
                        <li><a href="delivery.php">Delivery</a></li>
                        <li><a href="about_me.php">About Us</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="sitemap.php">Sitemap</a></li>
                        <li><a href="shop.php">Shop</a></li>
                        <li><a href="index.php">Home</a></li>
                    </ul>
                </div>
                <div class="quick_link_col2">
                        <h2>Custom Links</h2>
                        <ul>
                            <li><a href="legal_notice.php">Legal Notice</a></li>
                            <li><a href="new_products.php">New Products</a></li>
                            <li><a href="best_sales.php">Best Sales</a></li>
                            <li><a href="terms_and_conditions.php">Terms and Conditions</a></li>
                            <li><a href="register.php">Register</a></li>
                            <li><a href="login.php">Login</a></li>
                        </ul>
                </div>
                <div class="quick_link_col3">
                    <h2>Newsletter</h2>
                    <p>Sign up for our e-mail to get latest news.</p>
                    <div class="subscribe">
                        <form action="#" method="post">
                            <input type="email" name="email" placeholder="Your Email Address">
                           <span> Subscribe</span>
                        </form>
                    </div>
                    <p><img src="index_images/google_apple_store.png" alt=""></p>
                </div>
            </div>
        </div>
       </footer>
</body>
</html>