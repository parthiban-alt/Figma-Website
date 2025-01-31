<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Figma Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="figma.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>
<body>
     <!--This is header section-->
     <header>
        <!--navbar-->
         <nav class="navbar navbar-expand-lg">
            <div class="container">
            <img src="assets/Logo[1].png" class="card-img-top bg-light mt-2" style="border-radius: 10px;padding:10px;width:20%" alt="...">
                    <!--Navbar icon in this field is modified to button-->
                    <button class="navbar-toggler text-light bg-light" type="button "  data-bs-toggle="collapse" data-bs-target="#navbarNav"><span class="navbar-toggler-icon "></span></button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav ms-auto" >
                    <li ><a  class="nav-link text-light">About Us</a></li>
                    <li class="nav-item"><a  class="nav-link text-light">Cards</a></li> 
                      <div class="dropdown">
                        <button class="btn  dropdown-toggle text-light " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                          Features 
                        </button>
                      </div>
                    
                    <li class="nav-item"><a  class="nav-link text-light me-3">Contact</a></li>
                    <li class="nav-item"><button type="button" class="btn text-light mt-2 me-3 px-4 py-0" style="border:1px solid white;border-radius:40px">Log in</button></li>
                    <li class="nav-item"><button type="button" class="btn text-black ms-2 px-4 py-0 mt-2" style="border-radius:40px;background-color:yellow;">Sign Up</button> </li>
                   </ul>
                   
                </div> 
            </div>
         </nav>
    </header>
  <main>
    <!--This is home section-->
    <section id="hero" class="hero section ">
        <div class="container">
            <div class="row ">
              <div class="col-lg-6 order-2 order-lg-1  ">
              <button type="button" class="btn text-light px-1 py-1" style="border:1px solid white;width: 289px;margin-top:75px;">#1 Top Fintech Banking Excellence</button>
                <h1 class="hero-font text-light pt-4">Redefining</h1> <h1 class="hero-font" style="color:yellow;">business realities with</h1> <h1 class="hero-font text-light">ERP Solutions.</h1>
                <h6 class="hero-font-1 text-light text-capitalize fs-6 pt-2">Explore FinFuse Today. Your Finances: Discover FinFuse's Fintech Revolution, Transforming Banking Experiences One Click at a Time</h6>
                <div class="d-flex ">
                <button type="button" class="btn text-black px-3 py-1 mt-5 me-5" style="border-radius:30px;background-color:yellow;">Get Started</button>
                <button type="button" class="btn text-light  px-3 py-1 mt-5" style="border:1px solid white;border-radius:40px">Watch Our Features</button>

                </div>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 hero-img.png my-4 " >
                <!--first img-->
                <img src="assets/heroimg.png" class="card-img-top" alt="...">
              </div>
            </div>
          </div>
    </section>
    <!-- About section start -->
    <section id="about" class="about section my-3">
        <div class="container">
          <div class="row gy-4 mt-3">
            <div class="col-lg-6">
               <h1 class="hero-font"style="color:#001233" >Financial Evolution<br>The FinFuse Story</h1>
            </div>
            <div class="col-lg-6 content ">
            <h6 class="hero-font-1  text-capitalize fs-6">We Pave the Way for Tomorrow's Financial Frontier by Seamlessly Integrating Innovation, Accessibility, and Trust, Crafting Solutions That Empower Individuals</h6>

                  <div class="row">
                  <div class="col-lg-1 order-2 order-lg-1 " >
                      <i class="fa-solid fa-arrow-right text-light p-1" style="background-color:#001233;border-radius:50%"></i>
                  </div>
                    <div class="col-lg-11 order-2 " >
                       <h5>Discover more</h5>
                    </div>
                  
                  </div>
            </div>
          </div>
        </div>
      </section>

    </main>
    <!-- Footer Section Start-->
    <footer id="footer" class="footer">
      <div class="container pt-5">
        <div class="row gy-5">
          <div class="col-lg-7 col-md-12 footer-about ">
            <h3 class=" hero-font-2 text-light">
            Let's Join FinFuse,<br>We Protect Your Money
            </h3>
            
            <div class="row ">
              <div class="col-lg-7 order-2 order-lg-1  ">
                <h6 class="hero-font-1 text-light text-capitalize fs-6 pt-5"><i class="fa-solid fa-sliders bg-white text-secondary" style="border-radius: 50%;padding:10px;"></i> 52, johnson road, azad cinema,<br><br>1100, Dhaka </h6>      
              </div>
              <div class="col-lg-5 order-1 order-lg-2  " >
                 <h6 class="hero-font-1 text-light text-capitalize fs-6 pt-5"><i class="fa-solid fa-sliders bg-light  text-secondary" style="border-radius: 50%;padding:10px;"></i> hello@@wolfpixel.co</h6>      
              </div>
            </div>
          </div> 
          <div class="col-lg-5 col-md-12 mt-0 pt-0 me-0">
              <img src="assets/footer-image.png" class="card-img-top" style="width:100%" alt="...">
          </div>
         </div>         
      </div>
        <div class="container pb-4">
          <hr class="text-light">
          <div class="row">
            <div class="col-lg-6 col-md-12 text-light ">
              <h6 class="hero-font-1 text-light text-capitalize fs-6 pt-2">All rights reserved By Airavad Web Solutions</h6>         
            </div>
            <div class="col-lg-3 col-md-12 text-light ms-1 d-flex flex-row-reverse">
              <h6 class="hero-font-1 text-light text-capitalize fs-6 pt-2">Terms & Conditions</h6>         
            </div>
            <div class="col-lg-2 col-md-12 text-light d-flex flex-row-reverse">
              <h6 class="hero-font-1 text-light text-capitalize fs-6 pt-2">Privacy Policy</h6>         
            </div>
         </div>      
      </div>
     
    </footer>
    <!-- Footer Section End -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>