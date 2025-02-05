<!DOCTYPE html>
<html lang="zxx">
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
                <div class="logo-img">
                    <img src="assets/Logo[1].png"  class="card-img-top bg-light mt-2" style="padding:5px;border-radius:10px;" alt="...">
                </div>
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
    <section id="hero" class="hero">
        <div class="container">
            <div class="row ">
              <div class="col-lg-6 order-2 order-lg-1  ">
              <button type="button" class="button-1 btn text-light px-1 py-1" style="border:1px solid white;">#1 Top Fintech Banking Excellence</button>
                <h1 class="hero-font text-light pt-4">Redefining</h1> <h1 class="hero-font" style="color:yellow;">business realities with</h1> <h1 class="hero-font text-light">ERP Solutions.</h1>
                <h6 class="hero-font-1 text-light text-capitalize fs-6 pt-2">Explore FinFuse Today. Your Finances: Discover FinFuse's Fintech Revolution, Transforming Banking Experiences One Click at a Time</h6>
                <div class="d-flex ">
                <button type="button" class="btn text-black px-3 py-1 mt-5 me-4" style="border-radius:30px;background-color:yellow;">Get Started</button>
                <button type="button" class="btn text-light  px-3 py-1 mt-5" style="border:1px solid white;border-radius:40px">Watch Our Features</button>

                </div>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 hero-img.png my-4 " id="hero-img" >
                <!--first img-->
             
                <img src="assets/heroimg.png" class="card-img-top" alt="...">
              </div>
            </div>
          </div>
    </section>
          <!-- About section start -->
        <section id="about" class="about section my-3">
          <div class="container">
            <div class="row gy-4 mt-3 align-items-center">
              <!-- Left Column - Title -->
              <div class="col-lg-6">
                <h1 class="hero-font" style="color:#001233">Financial Evolution<br>The FinFuse Story</h1>
              </div>

              <!-- Right Column - Description & Button -->
              <div class="col-lg-6 content">
                <h6 class="hero-font-1 text-capitalize fs-6 mt-3">
                  We Pave the Way for Tomorrow's Financial Frontier by Seamlessly Integrating Innovation, Accessibility, and Trust, Crafting Solutions That Empower Individuals.
                </h6>

                <!-- Flexbox for Icon and Text (Corrected) -->
                <div class="d-flex align-items-center mt-3">
                  <i class="fa-solid fa-arrow-right text-light p-2 icon-bg"></i>
                  <h5 class="ms-3 mb-0">Discover more</h5>
                </div>
              </div>
            </div>
          </div>
        </section>
              <!-- About card section -->
        <div class="container text-center">
          <div class="row d-flex justify-content-center gap-4 mb-5">
            
            <!-- First Column (First Card) -->
            <div class="col-lg-3">
              <h1 class="card-text fw-bold mb-4" style="color: #001233; margin-top:110px; margin-bottom: 10px;">5.65%</h1>
              <div class="card position-relative" style="background-color:#EEF2F3; border:none; border-radius:30px; height:195px;">
                <div class="card-body p-4 text-center">
                  <p>Providing Robust Security Measures to Safeguard Your Hard-Earned Savings</p>
                  <button type="button" class="hero-font-1 btn text-black py-1" style="border-radius:40px; background-color:yellow; position: absolute; top: -18px; left: 40%; transform: translateX(-30%);"> Secure Savings </button>
                  <button type="button" class="btn text-light px-3 py-1" style="border-radius:10px; background-color:#001233;">Check account</button>
                </div>
              </div>
            </div>

            <!-- Second Column (Second Card - Slightly Higher) -->
            <div class="col-lg-3" style="position: relative; top: -70px;">
              <h1 class="fw-bold mb-4" style="color: #001233; margin-bottom: 10px; margin-top:70px;">1.06%</h1>
              <div class="card position-relative" style="border:none; background-color:#001233; color:white; border-radius:30px; height:195px;">
                <div class="card-body p-4 text-center">
                  <p>Providing Robust Security Measures to Safeguard Your Hard-Earned Savings</p>
                  <button type="button" class="hero-font-1 btn text-black fs-6 py-1" style="border-radius:40px; background-color:yellow; position: absolute; top: -18px; left: 40%; transform: translateX(-30%);">Instant Access</button>
                  <button type="button" class="btn text-black px-3 py-1" style="border-radius:10px; background-color:white;">Check account</button>
                </div>
              </div>
            </div>

            <!-- Third Column (Third Card) -->
            <div class="col-lg-3">
              <h1 class="fw-bold mb-4" id="card-three" style="color: #001233; margin-bottom: 10px; margin-top:110px;">5.65%</h1>
              <div class="card position-relative" style="background-color:#EEF2F3; border:none; border-radius:30px; height:195px;">
                <div class="card-body p-4 text-center">
                  <p>Providing Robust Security Measures to Safeguard Your Hard-Earned Savings</p>
                  <button type="button" class="hero-font-1 btn text-black fs-6 py-1" style="border-radius:40px; background-color:yellow; position: absolute; top: -18px; left: 40%; transform: translateX(-30%);">Real-time Fraud</button>
                  <button type="button" class="btn text-light px-3 py-1" style="border-radius:10px; background-color:#001233;">Transactions</button>
                </div>
              </div>
            </div>
          </div>
        </div>

      <section  class="facebook" style="background-color:#EEF2F3; padding-bottom: 60px;">
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
            <div class="container mt-5">
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
      <section class="financial">
       <div class="container">
          <h1 class="hero-font-2 mt-5 pt-3 d-flex justify-content-center" style="color: #001233;">Empowering Your<br><h1 class="hero-font-2" style="color: #001233;text-align-last: center;">Financial Future</h1></h1>
          <h3 class="text d-flex justify-content-center mt-3" style="color: #001233;">Your Trusted Partner in Financial Innovation - Simplify Your Finances<br><h3 class="text" style="color: #001233;text-align-last: center;">Maximize Your Potential, and Secure Your Future Empowering</h3></h3>
        </div>
        <div class="container">
          <div class="row gy-4 mt-3">
            <div class="col-lg-7 ms-1">
               <img src="assets/financial1.jpeg" class="financial-img" alt="...">
            </div>
            <div class="col-lg-3">
                <div class="card" >
                  <div class="card-body p-4 text-center ms-3">
                    <h2 style="color: #001233;text-align:left;">You With Fintech</h2><h2 style="text-align-last:left;">Solutions</h2>
                    <p class="p" style="text-align:left;">Discover Tailored Fintech Solutions for Every Aspect of Your Financial Journey From Budgeting and Investing to Retirement Planning and Beyond</p>
                    <button type="button" class="btn text-light px-5 py-2 mt-3 ms-2" style="border-radius:10px; background-color:#001233;margin-right:50px;">Transactions</button>
                  </div>
                </div>
            </div>
         </div>

         <div class="row gy-4 mt-3 mb-5">
            <div class="col-lg-4 ms-1">
                <div class="card-1">
                  <div class="card-body p-4 text-center ms-3">
                    <h2 style="color: #001233;text-align:left;">You With Fintech<h2 style="text-align-last:left;">Solutions</h2></h2>
                    <p class="p" style="text-align:left;">Discover Tailored Fintech Solutions for Every Aspect of Your Financial Journey From Budgeting and Investing to Retirement Planning and Beyond</p>
                    <button type="button" class="btn text-light px-5 py-2 mt-3" style="border-radius:10px; background-color:#001233;margin-right:50px;">Transactions</button>
                  </div>
                </div>
            </div>
            <div class="col-lg-5 ">
               <img src="assets/financial2.jpeg" class="financial2-img" alt="...">
            </div>
         </div>      
       </section>

            <!-- Serve Section -->
            <section id="serve" style="background-color:#EEF2F3;" class="serve">
              <div class="container">
                <div class="row gy-4 mt-3">
                  <div class="col-lg-5">
                    <h1 class="text ms-2" style="color:#001233">
                      How FinFuse Work To<br> Serve You Better
                    </h1>
                  </div>
                  <div class="col-lg-6  ms-2">
                    <h6 class="serve-font hero-font-1 text-capitalize">
                      We Pave the Way for Tomorrow's Financial Frontier by <br>Seamlessly Integrating Innovation, Accessibility, and Trust,<br>
                      Crafting Solutions That Empower Individuals.
                    </h6>
                  </div>
                </div>

                <!-- Image Row -->
                <div class="row gy-4 mb-5">
                  <!-- First Image with Text Overlay & Small Images Inside -->
                  <div class="col-lg-4  position-relative">
                    <!-- Main Image -->
                    <img src="assets/serve.jpeg" class="serve-img" alt="">

                    <!-- Overlay in Front -->
                    <div class="back-first" ></div>

                    <!-- Overlay Text -->
                    <div style="position: absolute; top: 10px; left: 20px; color: white;">
                      <h1 class="img ps-3" style="color:yellow;font-size: 60px;">920+</h1>
                      <span class="text ps-3" style="font-size: 15px; font-weight: normal;">Project finish with superbly</span>
                    </div>

                    <!-- Small Images Inside the First Image at Bottom in + Symbol -->
                    <div class="position-absolute d-flex justify-content-between" style="bottom: 35px; left: 35%; transform: translateX(-50%);">
                      <img src="assets/small1.png" style="width: 50px; height: 45px; border-radius: 50px; margin-right: -10px;" alt="Small Image 1">
                      <img src="assets/small2.png" style="width: 50px; height: 45px; border-radius: 50px; margin-right: -10px;" alt="Small Image 2">
                      <img src="assets/small3.png" style="width: 50px; height: 45px; border-radius: 50px; margin-right: -10px;" alt="Small Image 3">
                      <img src="assets/small4.png" style="width: 50px; height: 45px; border-radius: 50px;" alt="Small Image 4">
                    </div>

                    <!-- Plus Symbol at the End -->
                    <div class="position-absolute" style="bottom: 5px; right: 95px; color: yellow; font-size: 80px; font-weight: bold;">+</div>
                  </div>

                  <!-- Second Image with Overlay & Centered Text -->
                  <div class=" col-lg-5 position-relative d-flex align-items-center justify-content-center" id="serve-class">
                    <div class="position-relative w-100">
                      <!-- Image -->
                      <img src="assets/serve-1.jpeg" class="serve-1-img"
                          alt="Image">

                      <!-- Overlay in Front -->
                      <div class="back" ></div>

                      <!-- Centered Text -->
                      <div class=" display-6 fst-bold" id="font"
                          style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white; white-space: nowrap;">
                        How we work
                      </div> 
                    </div>
                  </div>
                </div>
              </div>
            </section>

      <!-- Customer Section -->
       <section class="customer">
       <div class="container">
          <div class="row gy-4 mt-3">
            <div class="col-lg-7">
               <h1 class="hero-font"style="color:#001233" >Hear! Our Customers<br>Have To Say</h1>
            </div>
            <div class="col-lg-5 content ">
            <h6 class="hero-font-1 text-capitalize fs-6 mt-3">Echoes of Satisfaction: Delving Into the Stories of FinFuse's Satisfied Customers, Each Testimonial a Testament.</h6>

                  <div class="button row mb-5">
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
              <div class="card-2" id="Team-member">
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
              <div class="card-3" id="Team-member">
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
                  <img src="assets/customer-5.png"
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
           <!-- Frequenly Section -->
       <section class="frequenly">
       <div class="container mb-4">
          <h1 class="hero-font-2 mt-5 pt-3 d-flex justify-content-center" style="color: #001233;">Frequently Asked Questions</h1>
          <h3 class="display-6 d-flex justify-content-center mt-3">Navigating Common Queries to Ensure a Seamless<br>Experience with FinFuse</h3>
       </div>
       <div class="container ">
          <div class="row mt-5">
             <div class="col-lg-6">
             <div class="accordion " id="accordionExample">
                  <div class="accordion-item" style="background-color:#001233;">
                    <h2 class="accordion-header" id="headingOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                           <div class="hero-font-5">How do I open an account with FinFuse?</div>
                      </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show"  aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <div class="hero-font-4 text-light">Opening an account with FinFuse is quick and easy. Simply click on the Open an Account' button, follow the prompts, and provide the required information. We prioritize your security throughout</div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item" style="background-color:#001233;">
                    <h2 class="accordion-header" id="headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          <div class="hero-font-5">What makes FinFuse different from other banks?</div>
                      </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                       <div class="hero-font-4 text-light">Opening an account with FinFuse is quick and easy. Simply click on the Open an Account' button, follow the prompts, and provide the required information. We prioritize your security throughout</div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item" style="background-color:#001233;">
                    <h2 class="accordion-header" id="headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                           <div class="hero-font-5">What makes FinFuse different from other banks?</div>
                      </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                       <div class="hero-font-4 text-light">Opening an account with FinFuse is quick and easy. Simply click on the Open an Account' button, follow the prompts, and provide the required information. We prioritize your security throughout</div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item" style="background-color:#001233;">
                    <h2 class="accordion-header" id="headingFour">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                           <div class="hero-font-5">What makes FinFuse different from other banks?</div>
                      </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <div class="hero-font-4 text-light">Opening an account with FinFuse is quick and easy. Simply click on the Open an Account' button, follow the prompts, and provide the required information. We prioritize your security throughout</div>
                      </div>
                    </div>
                  </div>
                </div>
             </div>
             

             <div class="frequenly-accordian col-lg-6">
             <div class="accordion " id="accordionExample">
                  <div class="accordion-item" style="background-color:#001233;">
                    <h2 class="accordion-header" id="headingFive">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                            <div class="hero-font-5"> What makes FinFuse different from other banks?</div>
                      </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                       <div class="hero-font-4 text-light">Opening an account with FinFuse is quick and easy. Simply click on the Open an Account' button, follow the prompts, and provide the required information. We prioritize your security throughout</div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item" style="background-color:#001233;">
                    <h2 class="accordion-header" id="headingSix">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                             <div class="hero-font-5">What makes FinFuse different from other banks?</div>
                      </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                       <div class="hero-font-4 text-light">Opening an account with FinFuse is quick and easy. Simply click on the Open an Account' button, follow the prompts, and provide the required information. We prioritize your security throughout</div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item" style="background-color:#001233;">
                    <h2 class="accordion-header" id="headingSeven">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            <div class="hero-font-5">What makes FinFuse different from other banks?</div>
                      </button>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <div class="hero-font-4 text-light">Opening an account with FinFuse is quick and easy. Simply click on the Open an Account' button, follow the prompts, and provide the required information. We prioritize your security throughout</div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item" style="background-color:#001233;">
                    <h2 class="accordion-header" id="headingEight">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                             <div class="hero-font-5">What makes FinFuse different from other banks?</div>
                      </button>
                    </h2>
                    <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <div class="hero-font-4 text-light">Opening an account with FinFuse is quick and easy. Simply click on the Open an Account' button, follow the prompts, and provide the required information. We prioritize your security throughout</div>
                      </div>
                    </div>
                  </div>
                </div>
             </div>
          </div>
       </div>
        
       </section>
    </main>
    <!-- Footer Section Start-->
    <footer id="footer" class="footer mt-3">
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
              <img src="assets/footer-image.png" class="card-img-top" style="width:100%; height:auto;" alt="...">
          </div>
         </div>         
      </div>
        <div class="container">
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