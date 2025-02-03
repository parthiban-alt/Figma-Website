<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Figma Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="figma.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
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
                <button type="button" class="btn text-black px-3 py-1 mt-5 me-4" style="border-radius:30px;background-color:yellow;">Get Started</button>
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
    <section id="about" class="about section my-3 ">
        <div class="container">
          <div class="row gy-4 mt-3">
            <div class="col-lg-6">
               <h1 class="hero-font mb-5"style="color:#001233" >Financial Evolution<br>The FinFuse Story</h1>
            </div>
            <div class="col-lg-6 content ">
            <h6 class="hero-font-1 text-capitalize fs-6 mt-3">We Pave the Way for Tomorrow's Financial Frontier by Seamlessly Integrating Innovation, Accessibility, and Trust, Crafting Solutions That Empower Individuals</h6>

                  <div class="row mb-5">
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
          <!-- About card section -->
          <div class="container text-center">
            <div class="row d-flex justify-content-center gap-4 mb-5">
              
              <!-- First Column (First Card) -->
              <div class="col-lg-3">
                <h1 class="fw-bold" style="color: #001233; margin-bottom: 10px;margin-top:110px;">5.65%</h1>
                <div class="card" style="background-color:#EEF2F3; border:none; border-radius:30px; height:195px;">
                  <div class="card-body p-4 text-center">
                    <p>Providing Robust Security Measures to Safeguard Your Hard-Earned Savings</p>
                    <button type="button" class="btn text-light px-3 py-1" style="border-radius:10px; background-color:#001233;">Check account</button>
                  </div>
                </div>
              </div>

              <!-- Second Column (Second Card - Slightly Higher) -->
              <div class="col-lg-3" style="position: relative; top: -70px;">
                <h1 class="fw-bold" style="color: #001233; margin-bottom: 10px;margin-top:70px;">1.06%</h1>
                <div class="card" style="border:none; background-color:#001233; color:white; border-radius:30px; height:195px;">
                  <div class="card-body p-4 text-center">
                    <p>Providing Robust Security Measures to Safeguard Your Hard-Earned Savings</p>
                    <button type="button" class="btn text-black px-3 py-1" style="border-radius:10px; background-color:white;">Check account</button>
                  </div>
                </div>
              </div>

              <!-- Third Column (Third Card) -->
              <div class="col-lg-3">
                <h1 class="fw-bold" style="color: #001233; margin-bottom: 10px;margin-top:110px;">5.65%</h1>
                <div class="card" style="background-color:#EEF2F3; border:none; border-radius:30px; height:195px;">
                  <div class="card-body p-4 text-center">
                    <p>Providing Robust Security Measures to Safeguard Your Hard-Earned Savings</p>
                    <button type="button" class="btn text-light px-3 py-1" style="border-radius:10px; background-color:#001233;">Transactions</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </section>
      <section style="background-color:#EEF2F3; padding-bottom: 60px;">
  <div class="container pt-5">
    <h1 class="hero-font-2  pt-3 text-center" style="color: #001233;">
      Joining Forces With Our
    </h1>
    <h1 class="hero-font-2 mb-5 text-center" style="color: #001233;">
      Diverse Network
    </h1>
  </div>

  <!-- First Row -->
  <div class="container ">
    <div class="row row-cols-7 g-2 justify-content-center">
      <div class="col">
        <button class="btn px-0 py-1 w-100 d-flex align-items-center justify-content-center"
                style="border-radius: 30px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.5);">
          <i class="bi bi-facebook text-primary fs-5 me-2"></i> Facebook
        </button>
      </div>
      <div class="col">
        <button class="btn px-3 py-1 w-100 d-flex align-items-center justify-content-center"
                style="border-radius: 30px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.5);">
          <i class="bi bi-facebook text-primary fs-5 me-2"></i> Facebook
        </button>
      </div>
      <div class="col">
        <button class="btn px-3 py-1 w-100 d-flex align-items-center justify-content-center"
                style="border-radius: 30px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.5);">
          <i class="bi bi-facebook text-primary fs-5 me-2"></i> Facebook
        </button>
      </div>
      <div class="col">
        <button class="btn px-3 py-1 w-100 d-flex align-items-center justify-content-center"
                style="border-radius: 30px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.5);">
          <i class="bi bi-facebook text-primary fs-5 me-2"></i> Facebook
        </button>
      </div>
      <div class="col">
        <button class="btn px-3 py-1 w-100 d-flex align-items-center justify-content-center"
                style="border-radius: 30px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.5);">
          <i class="bi bi-facebook text-primary fs-5 me-2"></i> Facebook
        </button>
      </div>
      <div class="col">
        <button class="btn px-3 py-1 w-100 d-flex align-items-center justify-content-center"
                style="border-radius: 30px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.5);">
          <i class="bi bi-facebook text-primary fs-5 me-2"></i> Facebook
        </button>
      </div>
      <div class="col">
        <button class="btn px-3 py-1 w-100 d-flex align-items-center justify-content-center"
                style="border-radius: 30px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.5);">
          <i class="bi bi-facebook text-primary fs-5 me-2"></i> Facebook
        </button>
      </div>
    </div>
  </div>

  <!-- Second Row -->
  <div class="container mt-5 me-3">
    <div class="row row-cols-7 g-2 justify-content-center">
      <div class="col">
        <button class="btn px-3 py-1 w-100 d-flex align-items-center justify-content-center"
                style="border-radius: 30px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.5);">
          <i class="bi bi-facebook text-primary fs-5 me-2"></i> Facebook
        </button>
      </div>
      <div class="col">
        <button class="btn px-3 py-1 w-100 d-flex align-items-center justify-content-center"
                style="border-radius: 30px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.5);">
          <i class="bi bi-facebook text-primary fs-5 me-2"></i> Facebook
        </button>
      </div>
      <div class="col">
        <button class="btn px-3 py-1 w-100 d-flex align-items-center justify-content-center"
                style="border-radius: 30px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.5);">
          <i class="bi bi-facebook text-primary fs-5 me-2"></i> Facebook
        </button>
      </div>
      <div class="col">
        <button class="btn px-3 py-1 w-100 d-flex align-items-center justify-content-center"
                style="border-radius: 30px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.5);">
          <i class="bi bi-facebook text-primary fs-5 me-2"></i> Facebook
        </button>
      </div>
      <div class="col">
        <button class="btn px-3 py-1 w-100 d-flex align-items-center justify-content-center"
                style="border-radius: 30px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.5);">
          <i class="bi bi-facebook text-primary fs-5 me-2"></i> Facebook
        </button>
      </div>
      <div class="col">
        <button class="btn px-3 py-1 w-100 d-flex align-items-center justify-content-center"
                style="border-radius: 30px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.5);">
          <i class="bi bi-facebook text-primary fs-5 me-2"></i> Facebook
        </button>
      </div>
      <div class="col">
        <button class="btn px-3 py-1 w-100 d-flex align-items-center justify-content-center"
                style="border-radius: 30px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.5);">
          <i class="bi bi-facebook text-primary fs-5 me-2"></i> Facebook
        </button>
      </div>
    </div>
  </div>
</section>


      <!-- Financial section -->
      <section>
       <div class="container">
          <h1 class="hero-font-2 mt-5 pt-3 d-flex justify-content-center" style="color: #001233;">Empowering Your<br><h1 class="hero-font-2" style="color: #001233;text-align-last: center;">Financial Future</h1></h1>
          <h3 class="d-flex justify-content-center mt-3" style="color: #001233;">Your Trusted Partner in Financial Innovation - Simplify Your Finances<br><h3 class="text" style="color: #001233;text-align-last: center;">Maximize Your Potential, and Secure Your Future Empowering</h3></h3>
        </div>
        <div class="container">
          <div class="row gy-4 mt-3">
            <div class="col-lg-7 ms-1">
               <img src="assets/financial1.jpeg" style="width:655px;height:330px;border-radius:20px;" alt="...">
            </div>
            <div class="col-lg-3 ms-5">
                <div class="card" style="background-color:#EEF2F3; border:none; border-radius:30px; height:330px;width:380px;margin-right:80px;">
                  <div class="card-body p-4 text-center">
                    <h2 style="color: #001233;text-align:left;">You With Fintech</h2><h2 style="text-align-last:left;">Solutions</h2>
                    <p class="p" style="text-align:left;">Discover Tailored Fintech Solutions for Every Aspect of Your Financial Journey From Budgeting and Investing to Retirement Planning and Beyond</p>
                    <button type="button" class="btn text-light px-5 py-2 mt-3" style="border-radius:10px; background-color:#001233;margin-right:50px;">Transactions</button>
                  </div>
                </div>
            </div>
         </div>

         <div class="row gy-4 mt-3 mb-5">
            <div class="col-lg-4 ms-1">
                <div class="card" style="background-color:#EEF2F3; border:none; border-radius:30px; height:340px;width:380px;">
                  <div class="card-body p-4 text-center">
                    <h2 style="color: #001233;text-align:left;">You With Fintech<h2 style="text-align-last:left;">Solutions</h2></h2>
                    <p class="p" style="text-align:left;">Discover Tailored Fintech Solutions for Every Aspect of Your Financial Journey From Budgeting and Investing to Retirement Planning and Beyond</p>
                    <button type="button" class="btn text-light px-5 py-2 mt-3" style="border-radius:10px; background-color:#001233;margin-right:50px;">Transactions</button>
                  </div>
                </div>
            </div>
            <div class="col-lg-6 ms-5">
               <img src="assets/financial2.jpeg" style="width:665px;height:340px;border-radius:20px;" alt="...">
            </div>
         </div>      
       </section>
       <section id="serve"  style="background-color:#EEF2F3;" class="serve p-5">
       <div class="container">
          <div class="row gy-4 mt-3">
            <div class="col-lg-6">
               <h1 class="ms-3 mb-5"style="color:#001233" >How FinFuse Work To<br> Serve You Better</h1>
            </div>
            <div class="col-lg-6">
            <h6 class="hero-font-1 text-capitalize p-1 mt-2">We Pave the Way for Tomorrow's Financial Frontier by <br>Seamlessly Integrating Innovation, Accessibility, and Trust,<br> Crafting Solutions That Empower Individuals Crafting Solutions<br> That Empower Individuals.</h6>
            </div>
          </div>
          <div class="row gy-4 mb-5">
            <div class="col-lg-4 ms-4 me-3">
                <img src="assets/serve.jpeg" style="width:355px;height:250px;border-radius:20px;opacity: 1;" alt="">
            </div>
            <div class="col-lg-5 ms-5">
               <img src="assets/serve1.jpeg" style="width:590px;height:250px;border-radius:20px;margin-right:80px;" alt="Image">
            </div>
        </div>
       </section>
       <section>
       <div class="container">
          <div class="row gy-4 mt-3">
            <div class="col-lg-7">
               <h1 class="hero-font mb-5"style="color:#001233" >Hear! Our Customers<br>Have To Say</h1>
            </div>
            <div class="col-lg-5 content ">
            <h6 class="hero-font-1 text-capitalize fs-6 mt-3">Echoes of Satisfaction: Delving Into the Stories of FinFuse's Satisfied Customers, Each Testimonial a Testament.</h6>

                  <div class="row mb-5">
                  <button type="button" class="btn text-light px-5 py-2 mt-3" style="border-radius:10px; background-color:#001233;width:200px;margin-left:16px;">Transactions</button>
                  </div>
            </div>
          </div>
        </div>

        <div class="container mb-5 ">
          <div class="row gy-4">
            <!-- Customer 1 -->
            <div class="col-lg-6">
              <div class="card"  style="border:none;background-color:#EEF2F3;border-radius:25px;" id="Team-member">
                <div class="card-body d-flex flex-column flex-md-row align-items-center">
                  <!-- Image -->
                  <img src="assets/customer-1.png"
                    class="img-fluid rounded-circle" alt=""
                    style="width: 100px; height: 100px;">
                  <!-- Member Info -->
                  <div class="member-info ms-md-3 text-center text-md-start">
                    <h3 class="customer" style="color:#001233;">Sarah Parker</h3>
                   <p class="hero-font-1">FinFuse has transformed the way I handle my finances. Their intuitive budgeting tools helped me save more</p>
                  </div>
                </div>
              </div>
            </div><!-- End Customer 1 -->

            <!-- Customer 2 -->
             <div class="col-lg-6">
              <div class="card" style="border:none;background-color:#EEF2F3;border-radius:25px;height:165px;" id="Team-member">
                <div class="card-body d-flex flex-column flex-md-row align-items-center">
                  <!-- Image -->
                  <img src="assets/customer-2.png"
                    class="img-fluid rounded-circle" alt=""
                    style="width: 100px; height: 100px;">
                  <!-- Member Info -->
                  <div class="member-info ms-md-3 text-center text-md-start">
                    <h3 class="customer" style="color:#001233;">Sarah Parker</h3>
                   <p class="hero-font-1">FinFuse has transformed the way I handle my finances. Their</p>
                  </div>
                </div>
              </div>
            </div><!-- End Customer 2 -->

            <!-- Customer 3 -->
             <div class="col-lg-6">
              <div class="card" style="border:none;background-color:#EEF2F3;border-radius:25px;height:160px;" id="Team-member">
                <div class="card-body d-flex flex-column flex-md-row align-items-center">
                  <!-- Image -->
                  <img src="assets/customer-3.png"
                    class="img-fluid rounded-circle" alt=""
                    style="width: 100px; height: 100px;">
                  <!-- Member Info -->
                  <div class="member-info ms-md-3 text-center text-md-start">
                    <h3 class="customer" style="color:#001233;">Sarah Parker</h3>
                    <p class="hero-font-1">FinFuse has transformed the way I handle my finances. Their</p>
                  </div>
                </div>
              </div>
            </div><!-- End Customer 3-->

            <!-- Cusromer 4 -->
             <div class="col-lg-6">
              <div class="card" style="border:none;background-color:#EEF2F3;border-radius:25px;" id="Team-member">
                <div class="card-body d-flex flex-column flex-md-row align-items-center">
                  <!-- Image -->
                  <img src="assets/customer-4.png"
                    class="img-fluid rounded-circle" alt=""
                    style="width: 100px; height: 100px;">
                  <!-- Member Info -->
                  <div class="member-info ms-md-3 text-center text-md-start">
                    <h3 class="customer" style="color:#001233;">Sarah Parker</h3>
                   <p class="hero-font-1">FinFuse has transformed the way I handle my finances. Their intuitive budgeting tools helped me save more</p>
                  </div>
                </div>
              </div>
            </div><!-- End Customer 4 -->
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