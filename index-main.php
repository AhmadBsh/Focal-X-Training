 <?php
session_start();
if (isset($_SESSION['email'])) {
?> 
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Restaurantly</title>

  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">

  <!-- Main Css File -->
  <link rel="stylesheet" href="./assets/css/style.css">
  
  <!-- Slick Css Files -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
  
  <!-- BootStrap Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/bootstrap-icons.css" rel="stylesheet">



</head>

<body>


  
  <!-- navbar -->
  <div> 
  <header id="header" class="fixed-top d-lg-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="  me-auto me-lg-0"><a href="index.html">Restaurantly</a></h1>
  
      <nav id="navbar" class="navbar order-last ">
        <ul>
          <li><a href="#hero">Home</a></li>
          <li><a  href="#about">About</a></li>
          <li><a href="#menu">Menu</a></li>
          <li><a  href="#specials">Specials</a></li>
          <li><a href="#events">Events</a></li>
          <li><a  href="#chefs">Chefs</a></li>
          <li><a  href="#gallery">Gallery</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down <i class="fi fi-rr-angle-small-down"></i></span></a>

            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down<i class="fi fi-rr-angle-right"></i></span> </a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a  href="#contact">Contact</a></li>
        </ul>
        
      
       </nav>
       <a  href="#book-a-table" class=" book-a-table-btn scrollto d-none d-lg-flex"> Book a table</a>
    </div>
  </header>
  </div>


  <!-- Home -->
  <div> </div>


  <!-- About -->
  <div>
  <section  class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" >
            <div class="about-img">
              <img src="assets/img/about.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 sidenav content">
            <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul class="ul">
              <li><i class="bi bi-1-square-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="bi bi-2-square-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="bi bi-3-square-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
            </ul>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
          </div>
        </div>

      </div>
    </section>


    <section class="whyus">
      <div class="container" data-aos="fade-down">

        <div class="title">
          <h2 class="h2">Why Us</h2>
          <p class="p">Why Choose Our Restaurant ?!</p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="square" class=" bi bi-zoom-in" >
              <span class="span" > <i class="bi bi-chat-heart  "></i> </span>
              <h3>Lorem Ipsum</h3>
              <p class="p"> Ulamco laboris nisi ut aliquip ex ea commodo consequat. Et consectetur ducimus vero placeat</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="square" class=" bi bi-zoom-in" >
              <span class="span"><i class="bi bi-chat-heart  "></i></span>
              <h3 class="h3">Repellat Nihil</h3>
              <p class="p">Dolorem est fugiat occaecati voluptate velit esse. Dicta veritatis dolor quod et vel dire leno para dest</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="square" class=" bi bi-zoom-out" >
              <span class="span"><i class="bi bi-chat-heart "></i></span>
              <h3 class="h3"> Ad ad velit qui</h3>
              <p class="p">Dolorem est fugiat occaecati voluptate velit esse. Dicta veritatis dolor quod et vel dire leno para dest</p>
            </div>
          </div>

        </div>

      </div>
    </section> 
     </div>
<!-- End Of About -->

  <!-- Menu -->
  <div class="menu-div">
    <br>
    <div class="menu-title">MENU</div>
    <h1 class="menu-name">Check Our Tasty Menu</h1>
    <div id="menu-myBtnContainer">
      <a class="btn active" onclick="filterSelection('all')">All</a>
      <a class="btn" onclick="filterSelection('Starters')"> Starters</a>
      <a class="btn" onclick="filterSelection('Salads')"> Salads</a>
      <a class="btn" onclick="filterSelection('Specialty')">Specialty</a>
    </div>
    
    <div class="menu-container">
      
      <div class="filterDiv Starters">
        <div class="img">
          <img src="assets/img/menu/lobster-bisque.jpg" class="img-menu">
        </div>
        <div class="menu-food">
          <div class="title-price">
            <a href="#" class="menu-food-1" >Lobster Bisque</a> <span>$5.95</span>
          </div>
          <div class="menu-maked">
           Lorem, deren, trataro, filede, nerada
          </div>
        </div>
      </div>
    
  
      <div class="filterDiv Salads">
        <img src="assets/img/menu/caesar.jpg"class="img-menu">
        <div class="menu-food">
          <div class="title-price">
          <a href="#"class="menu-food-1" >Caesar Selections</a><span class="menu-line"></span><span>$8.95</span>
        </div>
          <div class="menu-maked">
            Lorem, deren, trataro, filede, nerada
          </div>
        </div>
         </div>
      
      <div class="filterDiv Starters"> 
        <img src="assets/img/menu/cake.jpg"class="img-menu">
        <div class="menu-food">
          <div class="title-price">
          <a href="#" class="menu-food-1">Crab Cake</a><span class="menu-line"></span><span>$7.95</span>
        </div>
          <div class="menu-maked">
            Lorem, deren, trataro, filede, nerada
          </div>
        </div>
         
      </div>
      <div class="filterDiv Salads">
         <img src="assets/img/menu/greek-salad.jpg"class="img-menu">
         <div class="menu-food">
          <div class="title-price">
          <a href="#" class="menu-food-1">Greek Salad</a><span class="menu-line"></span><span>$9.95</span>
          </div>
          <div class="menu-maked">
            Lorem, deren, trataro, filede, nerada
          </div>
        </div>
         
        </div>
      <div class="filterDiv Specialty">
         <img src="assets/img/menu/bread-barrel.jpg"class="img-menu">
         <div class="menu-food">
          <div class="title-price">
          <a href="#" class="menu-food-1">Bread Barrel</a><span class="menu-line"></span><span>$6.95</span>
           </div>
          <div class="menu-maked">
            Lorem, deren, trataro, filede, nerada
          </div>
        </div> 
        </div>

      <div class="filterDiv Salads">
         <img src="assets/img/menu/spinach-salad.jpg"class="img-menu">
         <div class="menu-food">
          <div class="title-price">
          <a href="#" class="menu-food-1">Spinach Salad</a><span class="menu-line"></span><span>$9.95</span>
           </div> 
        
         <div class="menu-maked">
           Lorem, deren, trataro, filede, nerada
         </div>
        </div>
        </div>

      <div class="filterDiv Specialty">
        <img src="assets/img/menu/tuscan-grilled.jpg"class="img-menu">
        <div class="menu-food">
          <div class="title-price">
          <a href="#" class="menu-food-1">Tuscan Grilled</a><span class="menu-line"></span><span>$9.95</span>
           </div> 
        
         <div class="menu-maked">
           Lorem, deren, trataro, filede, nerada
         </div>
        </div>
      </div>

      <div class="filterDiv Specialty">
         <img src="assets/img/menu/lobster-roll.jpg"class="img-menu">
         <div class="menu-food">
          <div class="title-price">
          <a href="#" class="menu-food-1">Lobster Roll</a><span class="menu-line"></span><span>$12.95</span>
          </div> 
         <div class="menu-maked">
           Lorem, deren, trataro, filede, nerada
         </div>
        </div>
        </div>
        
      <div class="filterDiv Starters">
         <img src="assets/img/menu/mozzarella.jpg"class="img-menu">
         <div class="menu-food">
          <div class="title-price">
          <a href="#" class="menu-food-1">Mozzarella Stick</a><span class="menu-line"></span><span>$4.95</span>
          </div>
           <div class="menu-maked">
            Lorem, deren, trataro, filede, nerada
          </div> 
        </div>
         
        </div>
     
    </div>
    </div>
    <script>
      filterSelection("all")
      function filterSelection(c) {
        var x, i;
        x = document.getElementsByClassName("filterDiv");
        if (c == "all") c = "";
        for (i = 0; i < x.length; i++) {
          w3RemoveClass(x[i], "show");
          if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
        }
      }
      
      function w3AddClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
          if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
        }
      }
      function w3RemoveClass(element, name) {
      var i, arr1, arr2;
      arr1 = element.className.split(" ");
      arr2 = name.split(" ");
      for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}
var btnContainer = document.getElementById("menu-myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>
  
<!-- End Of Menu -->

  <!-- Specials -->
  <div> </div>


  <!-- Events -->
  <div class="main-div">
    <br>
    <div class="event-title">EVENTS</div>
    <div class="fade-in-image">
      <h1 class="event-name">Organize Your Events in our Restaurant</h1>
    <ul class="slider">
      <div class="event-main">
        <div class="event-left"><img src="assets/img/event-custom.jpg"></div>
        <div class="event-right">
          <h1>Custom Parties</h1>
          <h2><span>$99</span></h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut lobore et dolore magna aliqua.
            </p>
            <p>
            Ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
            <p>
            Duls aute irure dolor in reprehenderit in voluptate velit.
            </p>
            <p>
            ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
            <p>
            Ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
            <p>
            Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur.</p>
        </div>
      </div>
      <div class="event-main">
        <div class="event-left"><img src="assets/img/event-birthday.jpg"></div>
        <div class="event-right">
          <h1>Birthday Parties</h1>
          <h2><span>$189</span></h2>
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed doeiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <p>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit.</p>
            <p> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <p>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <p>
            Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur.</p>
        </div>
      </div>
      <div class="event-main">
        <div class="event-left"><img src="assets/img/event-private.jpg"></div>
        <div class="event-right">
          <h1>Private Parties</h1>
          <h2><span>$290</span></h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
           ut labore et dolore magna aliqua.</p>
            <p> ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <p> Duis aute irure dolor in reprehenderit in voluptate velit.</p>
            <p> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <p>
            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolorin reprehenderit in voluptate velit esse cillurm dolore eu fugiat nulla pariatur.
          </p>
        </div>
      </div>
    </ul>
      </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
   <script type="text/javascript">
  $('.slider').slick({
    infinite: true,
    dots: true,
    arrows:false,
    slidesToShow: 1,
    slidesToScroll: 1,
    //autoplay:true,
   //autoplayspeed:5000,
  }); 
</script>


  <!-- Gallery -->
  <div> </div>


  <!-- Chefs -->
  <div >
    <section  class="chefs">
      <div class="container" data-aos="fade-up">
  
        <div class="section-title">
          <p class="cp"><b>CHEFS</b>
        <i class="bi bi-cup-straw"></i>
        <i class="bi bi-cup-hot-fill"></i>
          </p>
          <h2 class="h2">Our Proffesional Chefs</h2>
        </div>
  
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="img" data-aos="zoom-in" >
              <img src="assets/img/chefs/chefs-1.jpg" class="img-fluid" alt="">
              <div class="img-content">
                <div class="content">
                  <h4 class="h4">Walter White</h4>
                  <span class="span">Master Chef</span>
                </div>
                <div class="media">
                 <i class="bi bi-twitter"></i>
                  <i class="bi bi-facebook"></i>
                 <i class="bi bi-instagram"></i>
              <i class="bi bi-linkedin"></i>
              <i class="bi bi-whatsapp"></i>
                </div>
              </div>
            </div>
          </div>
  
          <div class="col-lg-4 col-md-6">
            <div class="img" data-aos="zoom-in" >
              <img src="assets/img/chefs/chefs-2.jpg" class="img-fluid" alt="">
              <div class="img-content">
                <div class="content">
                  <h4 class="h4">Sarah Jhonson</h4>
                  <span class="span">Patissier</span>
                </div>
                <div class="media">
                  <i class="bi bi-twitter"></i>
                  <i class="bi bi-facebook"></i>
                 <i class="bi bi-instagram"></i>
              <i class="bi bi-linkedin"></i>
              <i class="bi bi-whatsapp"></i>
                </div>
              </div>
            </div>
          </div>
  
          <div class="col-lg-4 col-md-6">
            <div class="img" data-aos="zoom-in">
              <img src="assets/img/chefs/chefs-3.jpg" class="img-fluid" alt="">
              <div class="img-content">
                <div class="content">
                  <h4 class="h4">William Anderson</h4>
                  <span class="span">Cook</span>
                </div>
                <div class="media">
                  <i class="bi bi-twitter"></i>
                  <i class="bi bi-facebook"></i>
                 <i class="bi bi-instagram"></i>
              <i class="bi bi-linkedin"></i>
              <i class="bi bi-whatsapp"></i>
                </div>
              </div>
            </div>
          </div>
  
        </div>
  
      </div>
    </section> 
  </div>


  <!-- Contact us -->
  <div> 

  <section class ="contact">
     <div class="section-title">
       <h2 >Contact</h2>
       <p style="color:  #d9ba85; font-size: 37px; margin-top: 5px; margin-bottom: 5px;" >Contact Us</p>
     </div>
     <div>
      <iframe style="border:0; width: 75%; height: 450px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
     </div>
     <div id ="contact">
     <div class="container" id="contact-id" >
       <div class="row mt-5">
          <div class="col-lg-8">
             <div class="addres">
              <i class="fi fi-ss-marker" style="background-color:#d9ba85;"></i>
              <h3> Location:</h3>
              <p>A108 Adam Street,New York,NY 535022</p>
             </div>
             <div class="open-hour">
              <i class="fi fi-bs-hourglass" style="background-color:#d9ba85;"></i>
               <h3> Open Hours:</h3>
               <p><pre>Monday-Saturda
       11:00 AM - 2300 PM</pre>
               </p>
             </div>
             <div class="email">
              <i class="fi fi-rr-envelope" style="background-color:#d9ba85;"></i>
              <h3>Email:</h3>
              <p>info@example.com</p>
            </div>
            <div class="phone">
              <i class="fi fi-rs-phone-call"  style="background-color :#d9ba85;"></i>
              <h3>Call:</h3>
              <p>+1 5589 55488 55s</p>
            </div>

          </div>
       </div>
     </div>
    <div class="col-lg-8 mt-5 mt-lg-0" >
    </div>
     </div>
  </section>
  </div>



  <!-- Footer -->
  <div> </div>


  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>

 <?php
} else {
    header("Location: index.php");
    exit();
}
?> 