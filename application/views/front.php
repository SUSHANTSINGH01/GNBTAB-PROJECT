<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>GNB TAB</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="<?php echo base_url("assets/img/favicon.ico")?>" type="image/x-icon">
<link rel="apple-touch-icon" href="<?php echo base_url("assets/img/apple-touch-icon.png")?>">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url("assets/img/apple-touch-icon-72x72.png")?>">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url("assets/img/apple-touch-icon-114x114.png")?>">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="<?php echo base_url("assets/css/bootstrap.css")?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/fonts/font-awesome/css/font-awesome.css")?>">

<!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/style.css")?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/nivo-lightbox/nivo-lightbox.css")?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/nivo-lightbox/default.css")?>">



<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/styleLogin.css")?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/cart1.css")?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/crsl.css")?>">







</head>
<body id="page-top" data-spy="scroll" >
<div id="id01" class="model" >
<!--  
    <form class="modal-content animate" action="http://localhost:8080/gnbtab/index.php/construction/login" method="post" >
        //<?php //  echo site_url("construction/login"); ?>
    <!-- <div class="imgcontainer"> -->
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
     <!--  <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div> -->
      
        <!--<div class="containerDetails" >-->
            <!--<h2 style="text-align: center;">Login</h2>-->
            <!--<input type="radio" id="vehicle1" class="inputLogin"name="vehicle" value="Customer" checked>&nbsp;&nbsp;-->
            <!--<p for="vehicle1" class="labelLogin"> Customer</p><br>-->
            <!--<input type="radio" id="vehicle2" class="inputLogin"name="vehicle" value="Admin">&nbsp;&nbsp;-->
            <!--<p for="vehicle2" class="labelLogin"> Admin</p><br>-->
            <!--<input type="radio" id="vehicle3" class="inputLogin"name="vehicle" value="Dealer">&nbsp;&nbsp;-->
            <!--<p for="vehicle3" class="labelLogin"> Dealer</p><br><br>-->
            <!--<label for="uname"><b>Username &nbsp;&nbsp;&nbsp;</b></label>-->
            <!--<input type="text" placeholder="Enter Username" name="uname" id="uname" required>-->

            <!--<label for="psw"><b>Password &nbsp;&nbsp;&nbsp;&nbsp;</b></label>-->
            <!--<input type="password" placeholder="Enter Password" name="psw"  id="psw" required>-->
            <!--<label style="margin-left: 11.5%;">-->
                <!--<input type="checkbox" checked="checked" name="remember" > Remember me-->
            <!--</label>-->
            <!--<button type="submit"  class="loginbtn" >Login</button>-->

        <!--</div>-->

        <!--<div class="containerlogin" style="background-color:#f1f1f1">-->
            <!--<div class="psw frgtpsw" ><a href="#">Forgot password?</a></div>-->
            <!--<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>-->

        <!--</div>-->
  <!--</form>-->
 
</div>
    <div id="id03" class="modal" >
    <button type="submit" class="loginbtn" onclick="login()" >login first</button>
     
    </div>

   
 
<script>
    function loginForm(){
        var $uname = document.getElementById('uname').value;
        var $psw = document.getElementById('psw').value;
        console.log($uname);
    }
</script>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<script>
// Get the modal
var modal = document.getElementById('id03');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<script>
  function login1(){
    document.getElementById('id03').style.display="block";
  }
</script>
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">

  

  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="#page-top">GNB TAB</a>
      <!--<div class="phone"><span>Call Today</span>320-123-4321</div>-->
    </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
	
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
           <li>
             <a href="#" id="cart-popover" onclick="login1()" class="btn" data-placement="bottom" title="Carrinho de Compras">
                <!--<span class="glyphicon glyphicon-shopping-cart"></span>-->
                
          <span class=""glyphicon glyphicon-shopping-cart"></span>
		  
          <i class="fa fa-shopping-cart pl-0" ></i>cart

        </a>
                
            </li>
			
        <li><a href="#about" class="page-scroll">About</a></li>
        <li><a href="#services" class="page-scroll">products</a></li>
        <!--<li><a href="#portfolio" class="page-scroll">customers</a></li>-->
        <li><a href="#contact" class="page-scroll">Contact</a></li>
        <li><a href="#" onclick="login()" >Login</a></li>
      </ul>
    </div>
<script>
     function login() {
       window.location.href="<?php echo site_url("construction/login2") ?>";  
     }
  </script>
<!--<script>
  function login(){
    document.getElementById('id01').style.display="block";
  }
</script>-->


    <!-- /.navbar-collapse --> 
  </div>
</nav>
<!-- Header -->


<!-- Get Touch Section -->
<!-- <div id="get-touch">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6 col-md-offset-1">
        <h3>Cost for your home renovation project</h3>
        <p>Get started today and complete our form to request your free estimate</p>
      </div>
      <div class="col-xs-12 col-md-4 text-center"><a href="#contact" class="btn btn-custom btn-lg page-scroll">Free Estimate</a></div>
    </div>
  </div>
</div> -->
<!-- About Section -->
 <!-- Slideshow container -->
 
 
<!--   <div id="get-touch">
  <div class="container">
    <div class="row">
	 <div class="col-xs-12 col-md-6 col-md-offset-1">
        <h3></h3>
        <p></p>
      </div>
 <div class="slideshow-container">

      Full-width images with number and caption text 
               <div class="mySlides fade">
                   <div class="numbertext">1 / 3</div>
                   <img src="img/front1.jpg" style="width:100%">
                   <img src="<?php // echo base_url("assets/img/front1.jpg")?>" style="width:100%" alt=""/>
                   <img src="<?php // echo base_url("assets/img/cement.jpg")?>" style="width:100%">
                   <div class="text">Caption Text</div>
               </div>

               <div class="mySlides fade">
                 <div class="numbertext">2 / 3</div>
                 
                 <img src="<?php // echo base_url("assets/img/front2.jpg")?>" style="width:100%">
                 <div class="text">Caption Two</div>
               </div>

               <div class="mySlides fade">
                 <div class="numbertext">3 / 3</div>
                 <img src="<?php // echo base_url("assets/img/cement.jpg")?>" style="width:100%">
                 <div class="text">Caption Three</div>
               </div>

                Next and previous buttons 
               <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
               <a class="next" onclick="plusSlides(1)">&#10095;</a>
           </div>

           <br>

    The dots/circles 
           <div style="text-align:center">
             <span class="dot" onclick="currentSlide(1)"></span>
             <span class="dot" onclick="currentSlide(2)"></span>
             <span class="dot" onclick="currentSlide(3)"></span>
           </div>
           </div> 
       </div>
   </div>-->

<div id="get-touch">
  <div class="container">
    <div class="row">
	 <div class="col-xs-12 col-md-6 col-md-offset-1">
        <h3></h3>
        <p></p>
      </div>
 <div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="<?php echo base_url("assets/img/front1.jpg")?>" style="width:100%">
    <div class="text">Caption Text</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="<?php echo base_url("assets/img/front2.jpg")?>" style="width:100%">
    <div class="text">Caption Two</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="<?php echo base_url("assets/img/front3.jpg")?>" style="width:100%">
    <div class="text">Caption Three</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>

<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
</div>
</div>
</div>
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>
<div id="about">
  <div class="container">
    <div class="row">
        
      <div class="col-xs-12 col-md-6"> <img src="<?php echo base_url("assets/img/logo.jpg")?>" style="width:100%"/><!--<img src="<?php echo base_url("img/1st.jpg")?>" class="img-responsive" alt="">--> </div>
      <div class="col-xs-12 col-md-6">
        <div class="about-text">
          <h2>Who We Are</h2>
          <p>Consumer  faces difficulty in a shop because of mis-communication from end of shopkeeper and misbehave by shopkeeper. for customers help, we are creating  online plateform ( gnbtab.in ) for Lucknow Condumers and we will try it for all indian customers as soon as possible, where all construction materials are avilable for purchasing. 
  It is very simple to buy a material through gnbtab.in website by one click.</p>
          <h2>Why Choose Us?</h2>
          <div class="list-style">
            <div class="col-lg-6 col-sm-6 col-xs-12">
              <ul>
                <li>Easy to Buy</li>
                <!-- <li>Fully Insured</li> -->
                <li>Cost Control Experts</li>
                <li>100% Satisfaction Guarantee</li>
              </ul>
            </div>
            <div class="col-lg-6 col-sm-6 col-xs-12">
              <ul>
                <li>Free Consultation</li>
                <li>Satisfied Customers</li>
                <!-- <li>Project Management</li> -->
                <li>Affordable Pricing</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Services Section -->

<div id="id02" class="modal" >
  
  <div class="modal-content animate" action="/action_page.php" method="post" >
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>

       <h2 style="text-align: center;" id="Buy">Buy</h2>
    <div class="imgcontainer1">
    
      <img src="img/bricks.jpg" alt="Avatar" class="avatar1" id="img2">
    </div>

    <div class="containerDetails" >
      <h4>Price</h4>
     <ul>
      <li>details</li>
     </ul>
     
    </div>

    <div class="containerlogin" style="background-color:#f1f1f1">
       <!-- <div class="psw frgtpsw" ><a href="#">Forgot password?</a></div> -->
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
      <button type="submit" class="loginbtn"  >Buy</button>
    </div>
  </div>
</div>



<script>
  function pay(name){
    document.getElementById('id02').style.display="block";
    document.getElementById('Buy').innerHTML= name;
  }
  function changeimg(a){
   
    var image=document.getElementById(a);

    document.getElementById('img2').src=image.src;
  }
</script>



<div id="services">
  <div class="container">
    <div class="section-title">
      <h2>Our Products</h2>
    </div>
    <div class="row">
      <div class="col-md-4">
          
          
        <div class="service-media"> <img src="<?php echo base_url("assets/img/bricks_f.jpg")?>" id="BRICKS" alt=" "> </div>
        
          <h3>Bricks</h3>
          
           we have a best quality of bricks that can be used to build walls, pavements and other elements in masonry construction. The size of bricks will be standard and quality will be best with the minimum rate on the area.
            <div class="service-desc">
           <button type="button" value="BRICKS" class="btn btn-success" onclick="pay(value);changeimg(value)">Add to cart</button>
        </div>
      </div>
      <div class="col-md-4">
          
        <div class="service-media"> <img src="<?php echo base_url("assets/img/sand1_f.jpg")?>" id="BAALU"alt=" "> </div>
       
          <h3>Baalu</h3>
          
          we are commited to our promise for offering top class sand with the high quality and rate will be minimum in comparison of others in lucknow. The purity will be best with no compromisition with quality.
           <div class="service-desc">
          <button type="button" class="btn btn-success" value="BAALU"onclick="pay(value);changeimg(value)">Add to cart</button>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service-media"> <img src="<?php echo base_url("assets/img/cement_f.jpg")?>" id="CEMENT"alt=" "> </div>
          <h3>CEMENT</h3>
		  Commiting to provide a high quality cement that is used for construction that sets, and adheres to other materials to bind them together. In lucknow city, we provide all company's cement.
        <div class="service-desc">
         
          <button type="button" class="btn btn-success" value="Rait"onclick="pay(value);changeimg(value)">Add to cart</button>
         
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="service-media"> <img src="<?php echo base_url("assets/img/Iron_f.jpg")?>" id="Sariya" alt=" "> </div>
        <h3>IRON ROD</h3>
		We have Iron Rod of every length with the weight of 25kg, 50kg and 100kg. All company's Iron rod are available with in the lucknow city, and You can get a fast delivery as per your need.
        <div class="service-desc">
          
          <button type="button" class="btn btn-success" value="Sariya" onclick="pay(value);changeimg(value)">Add to cart</button>
          
        </div>
      </div>
      <div class="col-md-4">
        <div class="service-media"> <img src="<?php echo base_url("assets/img/gravels_f.jpg")?>" id="Gravels"alt=" "> </div>
        <h3>GRAVELS</h3>
		Gravel is a loose aggregation of rock fragments. It is classified by particle size range and size classes from granule -to boulder- sized fragments. we have small sized gravels of all range with the best quality.
        <div class="service-desc">
          
          <button type="button" class="btn btn-success" value="Gravels" onclick="pay(value);changeimg(value)">Add to cart</button>
          
        </div>
      </div>
      <div class="col-md-4">
        <div class="service-media"> <img src="<?php echo base_url("assets/img/maurang_f.jpg")?>" id="Aluminium Cabinet" alt=" "> </div>
         <h3>MAURANG</h3>
		  We have all quality of maurang for construction of home, offices and buildings with the best price in the city of lucknow. the quality and purity will be best as we commited.
        <div class="service-desc">
         
          <button  type="button" class="btn btn-success" value="Aluminium Cabinet" onclick="pay(value);changeimg
          (value)">Add to cart</button>
         
        </div>
      </div>
    </div>
 
 
 </div>
</div>
<!-- login window -->


<!-- Gallery Section -->
<div id="portfolio">
  <div class="container">
    <div class="section-title">
      <h2>Our customers</h2>
    </div>
    <div class="row">
      <div class="portfolio-items">
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/01-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Lorem Ipsum</h4>
              </div>
              <img src="<?php echo base_url("assets/img/portfolio/01-small.jpg")?>" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php echo base_url("assets/img/portfolio/02-large.jpg")?>" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Adipiscing Elit</h4>
              </div>
              <img src="<?php echo base_url("assets/img/portfolio/02-small.jpg")?>" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php echo base_url("assets/img/portfolio/03-large.jpg")?>" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Lorem Ipsum</h4>
              </div>
              <img src="<?php echo base_url("assets/img/portfolio/03-small.jpg")?>" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php echo base_url("assets/img/portfolio/04-large.jpg")?>" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Lorem Ipsum</h4>
              </div>
              <img src="<?php echo base_url("assets/img/portfolio/04-small.jpg")?>" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php echo base_url("assets/img/portfolio/05-large.jpg")?>" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Adipiscing Elit</h4>
              </div>
              <img src="<?php echo base_url("assets/img/portfolio/05-small.jpg")?>" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php echo base_url("assets/img/portfolio/06-large.jpg")?>" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Dolor Sit</h4>
              </div>
              <img src="<?php echo base_url("assets/img/portfolio/06-small.jpg")?>" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php echo base_url("assets/img/portfolio/07-large.jpg")?>" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Dolor Sit</h4>
              </div>
              <img src="<?php echo base_url("assets/img/portfolio/07-small.jpg")?>" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php echo base_url("assets/img/portfolio/08-large.jpg")?> title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Lorem Ipsum</h4>
              </div>
              <img src="<?php echo base_url("assets/img/portfolio/08-small.jpg")?>" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php echo base_url("assets/img/portfolio/09-large.jpg")?>" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Adipiscing Elit</h4>
              </div>
              <img src="<?php echo base_url("assets/img/portfolio/09-small.jpg")?>" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Testimonials Section -->

<!-- Contact Section -->
<div id="contact">
  <div class="container">
    <div class="col-md-8">
      <div class="row">
        <div class="section-title">
          <h2>Get In Touch</h2>
          <p>Please fill out the form below to send us an email and we will get back to you as soon as possible.</p>
        </div>
          <form name="sentMessage" id="" novalidate action="#">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" id="name" class="form-control" placeholder="Name" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="email" id="email" class="form-control" placeholder="Email" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
          <div class="form-group">
            <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
            <p class="help-block text-danger"></p>
          </div>
          <div id="success"></div>
          <button type="submit" class="btn btn-custom btn-lg">Send Message</button>
        </form>
      </div>
    </div>
    <div class="col-md-3 col-md-offset-1 contact-info">
      <div class="contact-item">
        <h4>Contact Info</h4>
        <p><span>Address</span>Madiyaon,Lucknow,<br>
          Uttar Pardesh, India</p>
      </div>
      <div class="contact-item">
        <p><span>Phone</span>+91-9264930401</p>
      </div>
      <div class="contact-item">
        <p><span>Email</span>gnbtab@company.com</p>
      </div>
    </div>
    <div class="col-md-12" >
      <div class="row" >
        <div class="social" >
          <ul>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
          
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Footer Section -->

<!--<script type="text/javascript" src="<?php // echo base_url("assets/js/jquery.1.11.1.js")?>"></script>--> 
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js")?>"></script> 
<script type="text/javascript" src="<?php echo base_url("assets/js/SmoothScroll.js")?>"></script> 
<script type="text/javascript" src="<?php echo base_url("assets/js/nivo-lightbox.js")?>"></script> 
<script type="text/javascript" src="<?php echo base_url("assets/js/jqBootstrapValidation.js")?>"></script> 
<script type="text/javascript" src="<?php echo base_url("assets/js/contact_me.js")?>"></script> 
<script type="text/javascript" src="<?php echo base_url("assets/js/main.js")?>"></script>
</body>
</html>