<?php 
session_start();

if (isset($_SESSION['userID']) && isset($_SESSION['username'])) {

}else{
     header("Location: index.php");
     exit();
}
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BookingSrc</title>
    <link rel="stylesheet" href="bookingSrc.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    />

    <style>
      #loginPanel {
        display: none;
        position: absolute; /* Positioning it above other content */
            top: 50px; /* Adjust this value to move the panel vertically */
            left: 50%;
            transform: translateX(-50%);
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ccc;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            width: 300px;
            z-index: 1000; /* Ensures it appears above other content */
      }
    </style>
    
  </head>
  <body>

    <div class="container-xl border w-50 rounded" id="loginPanel">
      <form action="login1.php" method="post" class="p-3">
        <h1>Welcome</h1>
        <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input type="text" name="usernameInput" class="form-control" id="exampleInputEmail1" placeholder="" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="passwordInput" class="form-control" id="exampleInputPassword1">
          </div>
        
          <button type="submit" class="btn btn-primary">Login In</button>
      </form>
    </div>
      

    <!-- Navbar-->
    <nav class="navbar navbar-expand-lg  navbar-dark">
      <div class="container">
        <a href="#" class="navbar-brand"
          ><h3><span class="text-primary logoText">AzureHub</span></h3></a
        >

        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navmenu"
        >
          <span class="navbar-toggler-icon bg-primary"></span>
        </button>

        <div class="collapse navbar-collapse  text-primary" id="navmenu">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item text-primary">
              <a href="#home" class="nav-link text-dark">Home</a>
            </li>
            <li class="nav-item">
              <a href="#avail" class="nav-link text-dark">Bookings</a>
            </li>
            <li class="nav-item">
              <a href="#about" class="nav-link text-dark">About</a>
            </li>
            <li class="nav-item">
              <a href="#Contact" class="nav-link text-dark">Contact</a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link text-dark"> <?php echo $_SESSION['username'] ?> </a>
            </li>
            <li class="nav-item">
               <button><a href="index.php" class="nav-link text-dark">Logout</a></button>
            </li>
          
          </ul>
        </div>
      </div>
    </nav>
    
    <section
      class=" p-5 text-center text-sm-start"
      id="bookingSection"
    >
    <div class="container d-flex justify-content-center align-items-center">
      <form
      action="bookingSrc.php"
      method="post"
      class="d-flex-md border rounded h-100 w-75 flex-wrap p-3 formBooking mt-5"
    >
      <label for="" class="pb-3">Check In Date</label>
      <input
        type="datetime-local"
        id="timeInput"
        class="form-control datetime"
        placeholder="Select Date & Time"
        name="datetime"
      />
      <div class="dropdown w-100"></div>
      <button
        class="btn dropdown-toggle pt-3 pb-3"
        type="button"
        data-bs-toggle="dropdown"
        aria-expanded="false"
      >
      Room Type
      </button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Action</a></li>
        <li><a class="dropdown-item" href="#">Another action</a></li>
        <li><a class="dropdown-item" href="#">Something else here</a></li>
      </ul>
      <div class="col-12">
        <button class="btn btn-primary" type="submit">
          Search Availability
        </button>
      </div>
    </form>
    </div>
     
    </div>
  </section>
<!--login Panel -->




  <!--ROOM-->
  <section
      class="p-5 text-center text-sm-start justify-content-center align-items-center"
      id="roomsSection"
    >
    <div>
      <h1>Our Rooms</h1>
    </div>
    <div class="container d-flex justify-content-around">
      <div class="card" style="width: 18rem;">
        <img src="demoCardBed2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="demoCardBed1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
  </section>

  
  <script>
        // Get the button and login panel elements
        const loginButton = document.getElementById('loginButton');
        const loginPanel = document.getElementById('loginPanel');

        // Add a click event listener to the login button
        loginButton.addEventListener('click', function() {
            // Toggle the display of the login panel
            if (loginPanel.style.display === 'none') {
                loginPanel.style.display = 'block';
            } else {
                loginPanel.style.display = 'none';
            }
        });
    </script>
    <!-- flatpickr-->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="login.js"></script>
    <!--Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
