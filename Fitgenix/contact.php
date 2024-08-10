
<?php 
include 'connect.php';

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $message=$_POST['message'];
   



$sql="insert into  `contact` (name, mobile, email, message) values ( '$name' , '$mobile','$email','$message')";


$result= mysqli_query($con,$sql);
if($result){
    echo "Data inserted successfully";
}else{
    die(mysqli_error($con));
}

}




?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>contact use</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" type="" href="style.css" />
  </head>

  <body>
    <header>
      <!-- place navbar here -->
      <div class="container">
        <header
          class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom"
        >
          <div class="col-md-3 mb-2 mb-md-0">
            <img
              src="fitlogo.png"
              height="100"
              width="100"
              class="img-fluid rounded-top"
              alt=""
            />
          </div>

          <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
          <li>
            <a href="home.php" class="nav-link px-2 link-white text-white"
              >HOME</a
            >
          </li>
          <li>
            <a href="about.html" class="nav-link px-2 text-white">ABOUT</a>
          </li>

          <li>
            <a href="gallery.html" class="nav-link px-2 text-white">GALLERY</a>
          </li>
          <li>
            <a href="equipments.html" class="nav-link px-2 text-white"
              >EQUIPMENTS</a
            >
          </li>
          <li>
            <a href="facilities.html" class="nav-link px-2 text-white"
              >FACILITIS</a
            >
          </li>
          <li>
            <a href="contact.php" class="nav-link px-2 text-white"
              >CONTACT US</a
            >
          </li>
        </ul>
        </header>
      </div>
    </header>
    <main>
      <div class="container">
        <div class="row justify-content-center align-items-center g-2">
          <div class="col">
            <center><h2>CONTACT US</h2></center>
          </div>
        </div>
      </div>
      <div class="container">
        <div
          class="row justify-content-center align-items-center g-2 text-white"
        >
          <div
            class="col-12 col-md-12 col-lg-6 d-flex flex-column justify-content-center align-items-start"
          >
            <p>+91 1234566789</p>

            <p>enquiry@FitgenixGYM.com</p>

            <p>Sita Ram Building, Fitgenix Building, UP Naka, Opp Santosh</p>

            <p>Bhuvan Police Station,</p>

            <p>Pelhar Road, Nalasopara-East, Maharashtra 401209</p>
          </div>
          <div
            class="col-12 col-md-12 col-lg-6 d-flex flex-column justify-content-center g-2 text-black"
          >
            <form action="contact.php" method="post">
              <div class="form-floating">
                <input
                  type="text"
                  class="form-control"
                  id="floatingInput"
                  name="name"
                  placeholder="Name"
                />
                <label for="floatingInput">Name</label>
              </div>

              <div class="form-floating">
                <input
                  type="text"
                  class="form-control"
                  id="floatingInput"
                  name="mobile"
                  placeholder="contact no"
                />
                <label for="floatingInput">Mobile</label>
              </div>
              <div class="form-floating">
                <input
                  type="email"
                  class="form-control"
                  id="floatingInput"
                  name="email"
                  placeholder="name@example.com"
                />
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating">
                <input
                  type="text"
                  class="form-control"
                  id="floatingPassword"
                  name="message"
                  placeholder="Message"
                />
                <label for="floatingInput">Message</label>
              </div>
              <button
                class="btn btn-danger w-100 py-2"
                name="submit"
                type="submit"
              >
                submit
              </button>
            </form>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row justify-content-center align-items-center py-5 g-2">
          <iframe
            class:img-fluid;
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d481625.8487316936!2d72.836762!3d19.42528!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7a9f2b470c16f%3A0x1922a05cddf30bea!2sFitGenix%20Gym%20by%20Abhishek%20thakur!5e0!3m2!1sen!2sus!4v1696872255299!5m2!1sen!2sus"
            width="600"
            height="450"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row justify-content-center align-items-center py-4 g-2">
          <div class="col-sm-12 col-md-6 col-lg-6">
            <img
              src="Fitgenix-Logo-1-min-2048x492.png"
              class="img-fluid"
              alt=""
              height="150"
              width="300"
            />
          </div>
          <div class="col-sm-12 col-md-6 col-lg-6">
            <center><h2>A Luxurious Fitness Hub</h2></center>
          </div>
        </div>
      </div>
    </main>
    <footer>
      <!-- place footer here -->
      <div class="container">
        <header
          class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom"
        >
          <div class="col-md-6 mb-2 mb-md-0 text-white">
            <p>© 2023 Fitgenix Gym Website All rights reserved</p>
          </div>

          <ul
            class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0"
          >
          <li>
              <a href="home.php" class="nav-link px-2 link-secondary">HOME</a>
            </li>
            <li><a href="about.html" class="nav-link px-2">ABOUT</a></li>

            <li><a href="gallery.html" class="nav-link px-2">GALLERY</a></li>
            <li>
              <a href="equipments.html" class="nav-link px-2">EQUIPMENTS</a>
            </li>
            <li>
              <a href="facilities.html" class="nav-link px-2">FACILITIS</a>
            </li>
            <li><a href="contact.php" class="nav-link px-2">CONTACT US</a></li>
          </ul>
        </header>
      </div>
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
  </body>
</html>
