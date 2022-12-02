<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<style>
    @import url("https://fonts.googleapis.com/css?family=Work+Sans");

* {
  box-sizing: border-box;
}

body,
html {
  font-size: 1rem;
  font-family: "Work Sans", sans-serif;
  margin: 0;
  line-height: 1.6;
}

a {
  text-decoration: none;
  color: inherit;
}

h1,
h2 {
  margin: 0;
}

#header {
  width: 100%;
  position: sticky;
  top: 0;
  left: 0;
  background-color: #fff;
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  z-index: 1;
}

.flex,
#brand,
#nav-bar ul {
  display: flex;
  flex-flow: row wrap;
  align-items: center;
}

/*logo*/
#header-img {
  width: 68px;
}

/*company name*/
#brand-name {
  padding-left: 1rem;
}

#nav-bar ul {
  list-style-type: none;
  margin: 0;
  padding-left: 0;
  padding-bottom: 0.5rem;
}

.nav-link {
  display: block;
  text-transform: capitalize;
  font-weight: 600;
  transition: 0.2s linear;
}

/*sections*/
#banner,
#pricing,
#services,
#contact,
#footer{
  margin: 1rem 0;
}

.section-title {
  letter-spacing: 0.25rem;
  text-align: center;
  text-transform: capitalize;
  margin: 0 0 1rem 0;
}

.btn {
  display: inline-block;
  width: 100%;
  text-align: center;
  border: 2px solid #f73840;
  padding: 0.5rem;
  color: #f73840;
  font-weight: 600;
  background: transparent;
  transition: 0.2s linear;
}

.btn:hover {
  color: #fff;
  background: #f73840;
}

#banner img,
#pricing img {
  display: block;
  margin: 1rem auto 0;
}

#banner h1 {
  text-align: center;
}

#banner img {
  max-width: 70%;
}

.card {
  text-align: center;
  vertical-align: middle;
  padding: 0.4rem 0;
}


.card > img {
  max-width: 28%;
}

.read-more {
  font-weight: 600;
  transition: 0.2s linear;
}

.read-more:hover,
.nav-link:hover {
  color: #f73840;
}

#pricing img {
  max-width: 70%;
}

#pricing h3 {
  margin: 0;
}

#contact img {
  max-width: 60px;
}

#video {
  max-width: 100%;
  display: block;
  margin: 1rem auto;
}

#contact img {
  max-width: ;
  padding: 0.5rem;
}

form {
  margin-top: 1.5rem;
}

legend {
  font-weight: 600;
  text-align: center;
}

label {
  display: none;
}

#email {
  display: inline-block;
  width: 100%;
  border: 2px solid #f75240;
  padding: 0.6rem;
}

#submit {
  font-size: 1rem;
}

#footer {
  text-align: center;
}

#footer a {
  padding: 0.8rem;
}

#footer img {
  max-width: 42px;
}

.my-animation {
  position: relative;
  animation: my-animation 0.8s;
}

@keyframes my-animation {
  from {
    right: -320px;
    opacity: 0;
  }

  to {
    right: 0;
    opacity: 1;
  }
}

.justify-content-center {
  justify-content: center;
}

.justify-content-evenly {
  justify-content: space-evenly;
}

.col-20,
.col-40,
.col-50,
.col-80 {
  padding: 0 1rem;
  margin: 1rem 0;
}

@media only screen and (min-width: 992px) {
  .row,
  #nav-bar,
  #header {
    display: flex;
    flex-flow: row wrap;
    align-items: center;
  }

  #brand {
    flex-basis: 40%;
    justify-content: flex-start;
  }

  #header-img {
    margin-left: 5rem;
  }

  #nav-bar {
    flex-basis: 60%;
    justify-content: flex-end;
    align-items: center;
  }

  #nav-bar ul {
    margin-right: 5rem;
  }

  #nav-bar ul > li {
    margin-right: 2.5rem;
  }

  #nav-bar ul > li:last-child {
    margin-right: 0;
  }

  #banner img,
  #pricing img {
    margin: 1rem 0 0 0;
  }

  #banner h1 {
    text-align: left;
  }

  /*button on big screens*/
  .btn {
    max-width: 180px;
  }

  .section-title {
    margin-top: 2.5rem;
  }

  #video {
    width: 360px;
    height: 200px;
  }

  #email {
    margin-left: 1rem;
  }

  #submit {
    margin-left: -0.5rem;
  }

  .col-20 {
    flex-basis: 20%;
  }

  .col-40 {
    flex-basis: 40%;
  }

  .col-50 {
    flex-basis: 50%;
  }

  .col-80 {
    flex-basis: 80%;
  }
}

</style>
<body>
    <!--header-->
<header id="header">
  <div id="brand" class="justify-content-center">
    <!--logo-->
    <img src="https://cdn-icons-png.flaticon.com/128/3142/3142246.png" alt="logo" id="header-img">
    <!--company name-->
    <h3 id="brand-name">Online Public Transport Courier Sysem</h3>
  </div>

  <!--navbar-->
  <nav id="nav-bar">
    <ul class="justify-content-evenly">
      <li><a href="#services" class="nav-link">services</a></li>
      <li><a href="#pricing" class="nav-link">About Us</a></li>
      <li><a href="#contact" class="nav-link">Contact Us</a></li>
      <li><a href="login.php" class="nav-link">Login</a></li>
      <li><a href="register.php" class="nav-link">Register</a></li>
    </ul>
  </nav>
</header>

<!--main-->
<main>
  <section id="banner">
    <div class="row justify-content-center">
      <div class="col-50">
        <h1>Online Public Transport Courier Sysem</h1>
        <p> Online Public Transport Courier System is dedicated to consistently provide its clients premium messenger services at cost-effective prices. 
            By timely and professionally delivering their products, we help our clients succeed. 
            We'll keep pushing ourselves to deliver cutting-edge solutions that go above and beyond what our clients expect from us. </p>
        <a href="login.php" class="btn">Book Service</a>
      </div>
      <div class="col-50">
        <img src="https://st4.depositphotos.com/18411050/20347/i/600/depositphotos_203475404-stock-photo-logistics-transportation-container-cargo-port.jpg" alt="image" class="my-animation">
      </div>
    </div>
  </section>

  <!--services-->
  <section id="services">
    <h2 class="section-title">servies</h2>
    <div class="row justify-content-evenly">
      <div class="col-20">
        <!--card-->
        <a href="#">
          <article class="card">
            <img src="https://cdn-icons-png.flaticon.com/128/7694/7694736.png" alt="image">
            <h3>Fast Delivery</h3>
            <p>We will deliver your items within 2-3 days.
              <!-- <span class="read-more">read more...</span> -->
            </p>
          </article>
        </a>
      </div>

      <div class="col-20">
        <!--card-->
        <a href="#">
          <article class="card">
            <img src="https://cdn-icons-png.flaticon.com/128/3139/3139205.png" alt="image">
            <h3>Track Location</h3>
            <p>You can track location of your items.
              <!-- <span class="read-more">read more...</span> -->
            </p>
          </article>
        </a>
      </div>

      <div class="col-20">
        <!--card-->
        <a href="#">
          <article class="card">
            <img src="https://cdn-icons-png.flaticon.com/128/4459/4459101.png" alt="image">
            <h3>24*7 Support</h3>
            <p>We are availabe for 24 hours for support.
              <!-- <span class="read-more">read more...</span> -->
            </p>
          </article>
        </a>
      </div>

      <div class="col-20">
        <!--card-->
        <a href="#">
          <article class="card">
            <img src="https://cdn-icons-png.flaticon.com/128/5628/5628170.png" alt="image">
            <h3>Extra Care</h3>
            <p>We will handle yours items carefully.
              <!-- <span class="read-more">read more...</span> -->
            </p>
          </article>
        </a>
      </div>

    </div>
    <!--row end-->

  </section>

  <section id="pricing">
    <h2 class="section-title">About Us</h2>
    <div class="row justify-content-center">
      <div class="col-50">
        <!-- <h3>Calculator</h3> -->
        <p>Our organization has successfully tended to more than 340 million requests from more than 50 million households around the US.

It is possible to deliver a million packages per day, 24 hours per day, 7 days per week, 365 days per year thanks to 19 robotized sorting centers, 30 satisfaction centers, 44 center points, 2500+ direct delivery centers, 5000+ partner centers, 14000+ vehicles, and 21000+ employees. 
Organization Name is what we are..</p>
        <!-- <a href="#" class="btn">Price Calculator</a> -->
      </div>
      <div class="col-50">
        <img src="https://st4.depositphotos.com/4312111/38254/i/600/depositphotos_382540686-stock-photo-transportation-logistics-container-cargo-ship.jpg" alt="image">
      </div>
    </div>

  </section>

  <!--contact-->
  <section id="contact">
    <h2 class="section-title">contact</h2>
    <div class="row  justify-content-center">
      <div class="col-50">
        <p>General Questions & Media Inquiries - Any questions regarding Online Public Transport Courier System, our data, or the site in general? Looking for quotes, interviews, and or another type of media inquiry?</p>
        <!--contact info-->
        <div class="flex justify-content-center">
          <img src="https://cdn-icons-png.flaticon.com/128/732/732200.png" alt="image">
          <h3>onlinecourier@gmail.com</h3>
        </div>

        <div class="flex justify-content-center">
          <img src="https://cdn-icons-png.flaticon.com/128/126/126509.png" alt="image">
          <h3>+254 701699145</h3>
        </div>

        <!--form-->
        <!-- <form action="POST" method="post" id="form">
          <legend>Subscribe for latest Updates</legend>
          <div class="row">
            <div class="col-80">
              <label for="email">email</label>
              <input type="email" id="email" name="email" placeholder="enter your email" required>
            </div>

            <div class="col-20">
              <input type="submit" value="submit" id="submit" class="btn">
            </div>
          </div>

        </form> -->
      </div>
    </div>
<!--video-->
  </section>
</main>

<!--footer-->
<footer id="footer">
  <h3 class="section-title">Follow Us</h3>
  <div>
      
    <a href="#"><img src="https://cdn-icons-png.flaticon.com/128/733/733579.png" alt="img">  </a>
    
   <a href="#"><img src="https://cdn-icons-png.flaticon.com/128/174/174855.png" alt="img">  </a>
  
    <a href="#"><img src="https://cdn-icons-png.flaticon.com/128/3670/3670226.png" alt="img">  </a>
  
  </div>
  <p>&copy; 2022 Online Public Transport Courier System</p>
  <!-- <p>
    <a href="#">Terms and Conditions</a>
    <a href="#">Privacy Policy</a>
  </p> -->
</footer>
</body>
</html>

<!-- https://cdn-icons-png.flaticon.com/128/7694/7694736.png -->
<!--  -->