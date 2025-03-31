<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contactus</title>

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
            <a class="nav-link active me-2"  aria-current="page" href="room.php">Rooms</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active me-2" aria-current="page" href="facilities.php">Facilities</a>
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
  <!-- Reach us -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
       <iframe class="w-100 rounded" height="320" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23392.079274433374!2d77.96566048018359!3d27.23126882386375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397479fd9e5fa36f%3A0x14ea925ce11fcc36!2sDayalBagh%2C%20Agra%2C%20Uttar%20Pradesh!5e1!3m2!1sen!2sin!4v1743094155509!5m2!1sen!2sin" width="600" height="450"></iframe>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="bg-white p-4 rounded mb-4">
          <h5>Call us</h5>
          <a href="tel: +919878889989" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i>+919878889989
          </a>
          <br>
          <a href="tel: +919878889989" class="d-inline-block  text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i>+919878889989
          </a>
        </div>
        <div class="bg-white p-4 rounded mb-4">
          <h5>Follow us</h5>
          <a href="#" class="d-inline-block mb-3">
            <span class="badge bg-light text-dark fs-6 p-4 ">
              <i class="bi bi-twitter me-1"></i>Twitter
            </span>
          </a>
          <br>
          <a href="#" class="d-inline-block mb-3">
            <span class="badge bg-light text-dark fs-6 p-4 ">
              <i class="bi bi-facebook me-1"></i>Facebook
            </span>
          </a>
          <br>
          <a href="#" class="d-inline-block mb-3">
            <span class="badge bg-light text-dark fs-6 p-4 ">
              <i class="bi bi-instagram me-1"></i>Instagram
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>
S
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