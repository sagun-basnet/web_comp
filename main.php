<?php
  include 'connect.php';


  if(isset($_POST['submit'])){
    $uname=$_POST['uname'];
    $password=$_POST['pass'];
    $type = $_POST['type'];

    $sql = "select * from `login` where email='{$uname}' AND password='{$password}' AND type='{$type}'";

    $result=mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)){
      $row= mysqli_fetch_assoc($result);

      if($type==="Student"){
        header('location:user.php');
      }
      else if($type==="admin"){
        header('location:./CURD/display.php');
      }
      else if($type ==="teacher"){
        header('location:teacher.php');
      }

      exit();
    }
    else{
      echo "You Have Enter incorrect username or password";
      exit();
    }
  }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- link to style sheet  -->
    <link rel="stylesheet" href="CSS/style.css">

    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://kit.fontawesome.com/f6960c9978.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">

    <!-- link for iconscout CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- font link(Andada Pro and ucher) -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Andada+Pro:ital,wght@0,400;0800;1,500&family=Uchen&display=swap" rel="stylesheet"> -->

    <!-- typing effect -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>

    <title>Gyandarpan Academy</title>
</head>
<body>
  <div class="login_div">
    <form action="" method="POST" id="login"> 
      <div class="btn_close">
        <i class="uil uil-times"></i>
      </div>
      <h2>Login</h2>
      <div class="nameDiv">
        <!-- <label for="">Email</label> -->
        <input placeholder="Enter email" type="email" name="uname" id="uname" require>
      </div>
      <div class="passDiv">
        <!-- <label for="">Password</label> -->
        <input type="password" name="pass" id="pass" placeholder="Enter password" require>
      </div>
      <div class="select">
        <select require name="type">
          <option selected disabled hidden>-Select Role-</option>
          <option value="Student">Student</option>
          <option value="teacher">Teacher</option>
          <option value="admin">admin</option>
        </select>
      </div>
      <div class="btn_login">
        <input type="submit" value="Login" id="btn" name="submit">
      </div>
      <br>
      <div class="para">
          <p>Don't have an account? <a href="./regForm.php">Request here!</a></p> 
      </div>
      
  </form>

  </div>


    


  



    <!-- ===========================for Navbar =========================== -->
<nav class="">
      <div class="logo">
        <a class="nav_logo" href="index.html" style="text-decoration: none !important;"><img src="IMG/logo.png" alt="gyandarpan Academy logo" > GDA</a>
      </div>
      <div class="links links_container">
        <ul>
          <li>
            <a href="#" class="nav_links"><i class="uil uil-home"></i> Home</a>
          </li>
          <li>
            <a href="#aboutus" class="nav_links"
              ><i class="uil uil-lightbulb-alt"></i> About</a
            >
          </li>
          <li>
            <a href="#contactus" class="nav_links"
              ><i class="uil uil-package"></i> Contact</a
            >
          </li>
          <button class="login btn" id="login_button">Login</button>
        </ul>
      </div>
</nav>
<!-- ========================================================================================= -->
           

<section id="header">
    <div class="header_left">
        <p>Scroll Down.</p> 
        <img src="img/scroll-down-mouse.gif" alt="downArrow">
    </div>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="IMG/1662544118945.jpg" class="d-block w-100"
              alt="Gyandarpan Academy">
            <div class="carousel-caption d-none d-md-block">
                <h1><u> GYANDARPAN ACADEMY</u></h1>
                <br>
                <h2> <span class="typing"></span></h2>
            
              <div class="slider-btn">
                <a href="#aboutus"><button class="btn btn-1">More info</button></a>
                <a href="#gallaryof"></a><button class="btn btn-2">Gallery </button></a>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="IMG/2ndPic.jpg" class="d-block w-100"
              alt="Gyandarpan Academy">
            <div class="carousel-caption d-none d-md-block">
              
                <h2 class= "head2 animate__animated animate__bounceInLeft" >Education is a commitment<br> to excellence in<br> Teaching and Learning.</h2>
              <div class="slider-btn">
                <a href="#contactus"><button class="btn btn-1">Contact</button></a>
                <a href="#contact_line"><button class="btn btn-2">Direction</button></a>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="IMG/khalti_5498x3394.jpg" class="d-block w-100"
              alt="Gyandarpan Academy" width="100%">
            <div class="carousel-caption d-none d-md-block">
              <h2 class="head2">Payment through online</h2>
              <div class="slider-btn">
                <a href="https://play.google.com/store/apps/details?id=com.khalti&hl=en&gl=US" target="_blank"><button class="btn btn-1">Download</button></a>
                <a href="https://khalti.com/"><button class="btn btn-2">khalti App</button></a>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <div class="header_right">
        <ul class="nav_social">
            <li><a href="https://www.facebook.com/profile.php?id=100063655675491" target="_blank"><i
                        class="uil uil-facebook"></i></a></li>
            <li><a href="#" target=""><i class="uil uil-twitter"></i></a></li>
            <li><a href="#" target=""><i class="uil uil-instagram"></i></a></li>
        </ul>
    </div>
</section>

<div class="end_bars"></div>

<!-- ========================================================================================= -->


<div id="aboutus"></div>
<section id="about">
        <div class="heading">
            <h1> <u>About Us</u></h1>
        </div>
        <div class="about_container container">
          <div class="about-main_content">
            <div class="gda_photo">

            </div>
            <h2>Gyandarpan Academy</h2>
            <p>At Gyandarpan Academy School, we believe in providing a safe and nurturing environment for our students to learn and grow. We strive to provide the highest quality of education and to help our students reach their full potential. We have an experienced and diverse faculty that is committed to helping our students reach their goals. Our school is dedicated to helping our students develop their skills and knowledge in order to prepare them for success in college and beyond. We are committed to providing a well-rounded education that focuses on the development of the whole student.</p>
            <div class="about_btns">
              <button class="syllabus-btn" style="border: 3px solid black; border-radius: 0.6rem; background-color: rgb(167, 228, 45);"><a href="#contactus" style="color: #000; font-size: 1.2rem;">Contact</a></button>
              <button class="syllabus-btn" style="border: 3px solid black; border-radius: 0.6rem; background-color: rgb(167, 228, 45);"><a href="#col" style="color: #000; font-size: 1.2rem;">+2 level</a></button>
            </div>
          </div>
          <div class="about_content">
            <div class="content2 abo_content">
              <h2>Message from Chairman</h2>
              <p>Dear Students and Parents,<br><br>

                On behalf of the entire school community, I would like to welcome you all. <br>
                
                We are proud to have a strong faculty and staff dedicated to providing an excellent learning environment for our students. We look forward to working with our students to create an atmosphere of growth and mutual support that will help them reach their highest potential. <br>
                
                We are committed to providing our students with the best resources and opportunities to ensure their success in the future. Our goal is to continue to foster a safe, healthy, and positive learning environment for everyone in our school community. </p>
            </div>
            <div class="photo2 abo_photo">
              <img src="" alt="Gyandarpan">
              name of Chairman
            </div>
          </div>
          <div class="about_content">
            <div class="photo3 abo_photo">
              <img src="" alt="Gyandarpan">
              K.P koirala
            </div>
            <div class="content3 abo_content">
              <h2>Message from Principle</h2>
              <p>Welcome to Gyandarpan Academy <br><br>

                As the principal of this school, I am delighted to welcome you and share our school's vision for providing quality education and inspiring our students to achieve their fullest potential. Our school is focused on creating a learning environment where students feel safe, respected, and valued. We believe that our students can reach their highest academic and personal goals and become productive members of society.</p>
            </div>
          </div>
        </div>
</section>

<div class="end_bars"></div>
   
<section id="contactus">
        <div id="contact" class="contact_containers containers">
            <h2 class="heading1">Any Queary?</h2>
            <div class="con_text">
            </div>
            <div class="containersClass">
                <div class="contactInfo">
                    <div class="box">
                        <div class="icon"><i class="uil uil-map-marker" aria-hidden="true"></i></div>
                        <div class="text">
                            <h3>Address</h3>
                            <p>Itahari, Sunsari, Nepal</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="uil uil-phone" aria-hidden="true"></i></div>
                        <div class="text">
                            <h3>Phone</h3>
                            <p>+255-02589</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="uil uil-envelope" aria-hidden="true"></i></div>
                        <div class="text">
                            <h3>Email</h3>
                            <p>gyandarpan@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="contactForm">
                    <form id="form">
                        <h2>Send Message</h2>
                        <div class="inputBox">
                            <input type="text" name="" required="required" id="name">
                            <span>Full Name</span>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="" required="required" id="email">
                            <span id="text">Email</span>
                        </div>
                        <div class="inputBox">
                            <textarea required="required" id="message"></textarea>
                            <span>Type your Message......</span>
                        </div>
                        <div class="inputBox buttonBox btn btn-primary">
                            <input type="submit" name="" value="Send">
                        </div>
                    </form>
                </div>
            </div>
            <div class="contact_social">
                <ul class="nav_social">
                    <li><a href="https://www.facebook.com/profile.php?id=100063655675491" target="_blank"><i class="uil uil-facebook"></i></a></li>
                    <li><a href="#" target=""><i class="uil uil-twitter"></i></a></li>
                    <li><a href="#" target=""><i class="uil uil-instagram"></i></a></li>
                </ul>
            </div>
            <div id="contact_line"></div>
            <div class="map">
                <h2>Direction to Gyandarpan Academy</h2>
                <div class="dir_map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1498.5689691466293!2d87.26960708942629!3d26.70548938398233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ef6bd0101ceb9b%3A0xe9e13cdd700bbc87!2sGyandarpanAcademy!5e0!3m2!1sen!2snp!4v1664509370212!5m2!1sen!2snp" width="100%" height="520" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
</section>

<!-- -------------For footer  -->
<footer>
  <div class="footer_containerTop">
    <div class="footer_about">
      <div class="logo">
        <h3><a href="#">Gyandarpan Academy</a></h3>
      </div>
      <div class="about">
        <p>
          Welcome to our college Gyandarpan Academy! Our college is a vibrant and dynamic institution that provides a high-quality education to students from diverse backgrounds. Established many years ago, our college has a rich history of academic excellence and innovation. <br />

          Our faculty members are highly qualified and experienced professionals who are dedicated to teaching, research, and community engagement. They bring their expertise and passion to the classroom, providing our students with a rigorous and challenging academic experience.
        </p>
      </div>
    </div>
    <div class="quick_links">
      <ul>
        <li>
          <a href="/" class="nav_links"
            ><i class="uil uil-home"></i> Home</a
          >
        </li>
        <li>
          <a href="#aboutus" class="nav_links"
            ><i class="uil uil-lightbulb-alt"></i> About</a
          >
        </li>
        <li>
          <a href="#contactus" class="nav_links"
            ><i class="uil uil-envelope"></i> Contact</a
          >
        </li>
        <li>
          <button class="login btn" id="login_button">Login</button>
        </li>
      </ul>
    </div>
    <div class="footer_contact">
      <div class="address fot_con">
        <i class="uil uil-location-pin-alt"></i>
        <div class="myDiv">
          <h2>Address</h2>
          <p>Sunsari, Nepal</p>
        </div>
      </div>
      <div class="phone fot_con">
        <i class="uil uil-phone"></i>
        <div class="myDiv">
          <h2>Phone</h2>
          <p>+255-012345</p>
        </div>
      </div>
      <div class="email fot_con">
        <i class="uil uil-envelope"></i>
        <div class="myDiv">
          <h2>Email</h2>
          <p>gyandarpanacademy@gmail.com</p>
        </div>
      </div>
    </div>
  </div>
  <div class="line"></div>
  <div class="footer_containerBot">
    <div class="copyright myDiv">
      <h3>Copyright &copy; 2023 | <span> Gyandarpan Academy.</span></h3>
    </div>
    <div class="social myDiv">
      <a href="#"><i class="uil uil-facebook"></i></a>
      <a href="#"><i class="uil uil-twitter"></i></a>
      <a href="#"><i class="uil uil-instagram-alt"></i></a>
      <a href="#"><i class="uil uil-whatsapp-alt"></i></a>
      <a href="#"><i class="uil uil-envelope"></i></a>
    </div>
    <div class="goto myDiv">
      <a href="#"><button class="topBtn" id="nav_toggle-open"><i class="uil uil-arrow-up"></i></button></a>
      <p>Goto top</p>
    </div>
  </div>
</footer>


    <!-- bootstrap js link  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


    <script src="./js/main.js"></script>
    <script src="./js/login.js"></script>
</body>
</html>