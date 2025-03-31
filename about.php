html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
     <link rel="stylesheet" href="css/common.css">
    <style>
        *{
            font-family: 'Poppins',sans-serif;
        }
        .h-font{
            font-family: 'Merienda','cursive';
        }
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
          -webkit-appearance: none;
          margin: 0;
        }
        input[type=number] {
          -moz-appearance: textfield;
        }
        .custom-bg{
          background-color:black;
        }
        .custom-bg:hover{
          background-color:blueviolet;
        }
        .availability-form{
          margin-top: -290px;
          z-index: 2;
          position: relative;
        }
        @media screen and (max-width: 575px){
          .availability-form{
            margin-top: -50px;
            z-index: 2;
            position: relative;
         }
        }
    </style>
</head>
<body class="bg-light">
  <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">Star Hotel</a>
      <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active me-2" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active me-2" aria-current="page" href="room.php">Rooms</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  active me-2" aria-current="page" href="facilities.php">Facilities</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active me-2" aria-current="page" href="contactus.php">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active me-2" aria-current="page" href="about.php">About</a>
          </li>
        </ul>
        <div class="d-flex">
          <button type="button" class="btn btn-outline-dark shadow-none me-lg-2 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
            Login
          </button>
          <button type="button" class="btn btn-outline-dark shadow-none " data-bs-toggle="modal" data-bs-target="#registerModal">
            Register
          </button>
       </div>
      </div>
    </div>
  </nav>

  <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false"
      tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
      <form action="">
          <div class="modal-header">
            <h5 class="modal-title d-flex align-items-center">
              <i class="bi bi-person-circle fs-3 me-2"></i>User login</h5>
            <button type="reset" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <label class="form-label">Email address</label>
              <input type="email" class="form-control shadow-none">
            </div>
            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="Password" class="form-control shadow-none">
            </div>
            <div class=" d-flex align-items-center justify-content-between mb-2">
              <button  type="submit" class="btn btn-dark shadow-none">LOGIN</button>
              <a href="javascript: void(0)" class="text-secondary text-decoration-none">forget password?</a>
            </div>
          </div>
      </form>
      </div>
    </div>
  </div>

  <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      <form action="">
          <div class="modal-header">
            <h5 class="modal-title d-flex align-items-center">
              <i class="bi bi-person-lines-fill fs-3 me-2"></i>
              User Registration</h5>
            <button type="reset" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
            Note: Your details must match with your ID(Aadhaar card, Passport, Driving License, etc.)
            that will be required  during check-in.
            </span>
            <div class=" container-fluid">
              <div class="row">
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Name</label>
                  <input type="text" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-0 mb-3">
                  <label class="form-label">Email</label>
                  <input type="email" class="form-control shadow-none">
                </div>
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Phone number</label>
                  <input type="number" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-0 mb-3">
                  <label class="form-label">Pictures</label>
                  <input type="file" class="form-control shadow-none">
                </div>
                <div class="col-md-12 p-0 mb-3">
                  <label class="form-label">Address</label>
                  <textarea class="form-control shadow-none"  rows="1"></textarea>
                </div>
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Pincode</label>
                  <input type="number" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-0 mb-3">
                  <label class="form-label">Date of birth</label>
                  <input type="date" class="form-control shadow-none">
                </div>
                <div class="col-md-12 ps-0 mb-3">
                  <label class="form-label">Password</label>
                  <input type="password" class="form-control shadow-none">
                </div>
                <div class="col-md-12 p-0 mb-3">
                  <label class="form-label"> Confirm Password</label>
                  <input type="password" class="form-control shadow-none">
                </div>
                <div class="text-center my-1">
                  <button  type="submit" class="btn btn-dark shadow-none">REGISTER</button>
                </div>
              </div>
            </div>
          </div>
      </form>
      </div>
    </div>
  </div>
    
   <div class="my-5 px-4">
     <h2 class="fw-bold h-font text-center"> ABOUT US </h2>
      <div class="h-line bg-dark">    </div>
      <p class="text-center mt-3">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
        Aliquam iste fugiat perferendis ducimus officia <br> Dolores 
        voluptas blanditiis deserunt rem id!
      </p>
   </div>

   <div class="container">
      <div class="row justify-content-between align-items-center">
          <div class="col-lg-6 col-md-5  mb-4 order-lg-1 order-md-1 order-2">
             <h3 class="mb-3">Lorem ipsum dolor sit.</h3>
             <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Expedita dolorem soluta dolor assumenda inventore temporibus quis?
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Expedita dolorem soluta dolor assumenda inventore temporibus quis?
             </p>
           </div>
                <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2  order-1">
                <img src="image/about/about.jpg" class="w-100">
            </div>
      </div>
   </div>

   <div class="container">
       <div class="row">
          <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
            <img src="image/about/hotel.svg" width="70px">
                <h4 class="mt-3">100+ ROOMS</h4>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
            <img src="image/about/customers.svg" width="70px">
                <h4 class="mt-3">200+CUSTOMERS</h4>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
            <img src="image/about/rating.svg" width="70px">
                <h4 class="mt-3">150+ REVIEWS</h4>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="image/about/staff.svg" width="70px">
                    <h4 class="mt-3">200+ STAFF</h4>
               </div>
          </div> 
       </div>
  </div>

  <h3 class="py-3 h-font text-center">TEAM MANAGEMENT </h3>
  
  <div class="container PX-4">
     <div class="swiper mySwiper">
           <div class="swiper-wrapper mb-5">
                <div class="swiper-slide bg-white text-center overflow-hidden rounded ">
                    <img src="image/about/IMG_17352.jpg" class="w-100">
                    <h5 class="mt-2"> RANDOM USER </h5>
                </div>

                <div class="swiper-slide bg-white text-center overflow-hidden rounded ">
                    <img src="image/about/IMG_17352.jpg" class="w-100">
                    <h5 class="mt-2"> RANDOM USER </h5>
                </div>

                <div class="swiper-slide bg-white text-center overflow-hidden rounded ">
                        <img src="image/about/IMG_17352.jpg" class="w-100">
                        <h5 class="mt-2"> RANDOM USER </h5>
                </div>

                <div class="swiper-slide bg-white text-center overflow-hidden rounded ">
                        <img src="image/about/IMG_17352.jpg" class="w-100">
                        <h5 class="mt-2"> RANDOM USER </h5>
                </div>

                <div class="swiper-slide bg-white text-center overflow-hidden rounded ">
                    <img src="image/about/IMG_17352.jpg" class="w-100">
                    <h5 class="mt-2"> RANDOM USER </h5>
                </div>

                <div class="swiper-slide bg-white text-center overflow-hidden rounded ">
                    <img src="image/about/IMG_17352.jpg" class="w-100">
                    <h5 class="mt-2"> RANDOM USER </h5>
                </div>
            
                <div class="swiper-pagination"></div>
          </div>
     </div>     
 </div>


 <div class="container-fluid bg-white mt-5">
  <div class="row">
    <div class="col-lg-4 p-4">
      <h3 class="h-font fw-bold fs-3">Star Hotel</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Eius odit est provident doloremque totam ratione 
        magnam fugit quis adipisci ipsa.</p>
    </div>
    <div class="col-lg-4 p-4">
      <h5 class="mb-3">Links</h5>
      <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Home</a> <br>
      <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Rooms</a><br>
      <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Facilities</a> <br>
      <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Contact Us</a><br>
      <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">About</a>
   </div>
    <div class="col-lg-4 p-4">
      <h5 class="mb-3">Follow us</h5>
      <a href="#" class="d-inline-block  text-dark text-decoration-none mb-2">
        <i class="bi bi-twitter me-1"></i>Twitter
      </a><br>
      <a href="#" class="d-inline-block  text-dark text-decoration-none mb-2">
        <i class="bi bi-facebook me-1"></i>Facebook
      </a><br>
      <a href="#" class="d-inline-block  text-dark text-decoration-none mb-2">
        <i class="bi bi-instagram me-1"></i>Instagram
      </a><br>
    </div>
  </div>
 </div>
 <br><br><br>
 <br><br><br>
 <h6 class="text-center bg-dark text-white p-3 m-0">Designed and developed by Star Hotel</h6>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
 
</body>
</html>