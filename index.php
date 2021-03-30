<?php
      include_once('mail.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- displays site properly based on user's device -->

  <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
  
  <title>Frontend Mentor | Fylo landing page with dark theme and features grid</title>
  <!-- custom css link -->
  <link rel="stylesheet" href="style.css">
  <!--font-awesome link-->
  <link rel="stylesheet" href="css/all.css">
  <link rel="stylesheet" href="css/all.min.css">
</head>
<body>
  <!-- main or intro section -->
  <section id="main"> 
  <!-- navbar -->
  <nav>
    <!-- logo -->
    <a href="#" class="logo">
      <img src="images/logo.svg" alt="fly logo">
    </a>
  
    <!--menu-btn-->
   <input type="checkbox" class="menu-btn" id="menu-btn">
   <label for="menu-btn" class="menu-icon">
      <span class="nav-icon"></span>
   </label>

    <!-- menu -->
    <ul class="menu">
      <li><a href="#offers">Features</a></li>
      <li><a href="#testimonial">Team</a></li>
      <li><a href="#">Sign In</a></li>
    </ul>
  </nav>

  <div class="intro-container">
    <div class="image-container">
      <img src="images/illustration-intro.png" alt="">
    </div>
    <div class="intro-text">
      <h2>All your files in one secure location, accessible anywhere.</h2>
      <p>
       Fylo stores all your most important files in one secure location. <br> Access them wherever 
       you need, share and collaborate with friends family, and co-workers.
     </p>
     <button>Get Started</button>
    </div> 
  </div>
</section>

<!-- offers section -->
<section id="offers">
  <div class="offers-card">
    <!-- access anywhere card -->
    <div class="card-image">
      <img src="images/icon-access-anywhere.svg" alt="">
      <div>
          <h3>Access your files, anywhere</h3>
          <p> The ability to use a smartphone, tablet, or computer to access your account means your 
            files follow you everywhere.</p>
      </div>
    </div>

    <!-- security card -->
    <div class="card-image">
      <img src="images/icon-security.svg" alt="">
      <div>
          <h3>  Security you can trust</h3>
          <p>
            2-factor authentication and user-controlled encryption are just a couple of the security 
            features we allow to help secure your files.</p>
      </div>
    </div>

    <!-- collaboration card -->
    <div class="card-image">
      <img src="images/icon-collaboration.svg" alt="">
      <div>
          <h3>  Real-time collaboration</h3>
          <p>Securely share files and folders with friends, family and colleagues for live collaboration. 
             No email attachments required.</p>
      </div>
    </div>

    <!--storage card-->
    <div class="card-image">
      <img src="images/icon-any-file.svg" alt="">
      <div>
          <h3>Store any type of file</h3>
          <p> Whether you're sharing holidays photos or work documents, Fylo has you covered allowing for all 
            file types to be securely stored and shared.</p>
      </div>
    </div>
  </div>
</section>

<!--productivity section-->
<section id="productivity">
  <div class="productivity-container">
    <div>
      <img src="images/illustration-stay-productive.png" alt="">
    </div>

    <div>
      <h2>Stay productive, wherever you are</h2>
      <p>Never let location be an issue when accessing your files. Fylo has you covered for all of your file 
        storage needs.</p>
      <p>Securely share files and folders with friends, family and colleagues for live collaboration. No email 
        attachments required.</p>
      <a href="#">See how Fylo works <span class="fas fa-arrow-alt-circle-right"></span></a>
    </div>
  </div>
</section>

<!--tesimonial section-->
<section id="testimonial">
  <div class="testimonial-container">
    <img class="quote-sign" src="images/bg-quotes.png" alt="quote sign">
     <!--profile card 1-->
     <div class="card">
       <p>
        Fylo has improved our team productivity by an order of magnitude. Since making the switch our team has 
        become a well-oiled collaboration machine.</p>
        <div>
          <img src="images/profile-1.jpg" alt="">
          <div class="info">
            <h3>Satish Patel</h3>
             <h4>Founder & CEO, Huddle</h4>
          </div>
        </div>
     </div>

     <!--profile card 2-->
     <div class="card">
      <p>
        Fylo has improved our team productivity by an order of magnitude. Since making the switch our team has 
        become a well-oiled collaboration machine.</p>
       <div>
         <img src="images/profile-2.jpg" alt="">
         <div class="info">
           <h3>Bruce McKenzie</h3>
            <h4>Founder & CEO, Huddle</h4>
         </div>
       </div>
    </div>

     <!--profile card 3-->
     <div class="card">
      <p>
        Fylo has improved our team productivity by an order of magnitude. Since making the switch our team has 
        become a well-oiled collaboration machine.</p>
       <div>
         <img src="images/profile-3.jpg" alt="">
         <div class="info">
           <h3>Iva Boyd</h3>
            <h4>Founder & CEO, Huddle</h4>
         </div>
       </div>
    </div>
  </div>
</section>

<!--email section-->
<section id="email">
  <div class="email-container">
    <h2>Get early access today</h2>
    <p>It only takes a minute to sign up and our free starter tier is extremely generous. If you have any 
      questions, our support team would be happy to help you.</p>
      <!--form-->
    
      <div class="form" >
        <div class="d-none" id="msg_div" style="margin: 2% 0; border-radius: 15px; text-align: center; background: hsl(198, 60%, 50%); color: black; display: none">
                    <span id="res_mess" style="color: white">Thanks for subscribing.</span>
        </div>
        <form method="POST"  id="mailForm" action="javascript:void(0)">
          <input type="email" id="email" name="email" placeholder="flyo@example.com" data-error="Email is required.">
          <button type="submit" name="submit" id="submit" value="Get Started For free">Get Started For free</button>
        </form>
      </div>
  </div>
</section>

<!--footer section-->
<section id="footer">
  <!--logo-->
  <a href="#" class="logo">
    <img src="images/logo.svg" alt="">
  </a>
  <div class="footer-container">
    <!--location icon-->
    <div class="location-map">
      <p> <span><i class="fas fa-map-marker"></i></span>Locate us at 1 off road Ikeja, Lagos</p>
    </div>

    <!--contact-->
    <div class="contact">
     <p><span><i class="fas fa-phone"></i></span>+1-543-123-4567</p> 
     <p><span><i class="fas fa-envelope"></i></span>example@fylo.com</p>
    </div>

    <!--about menu-->
    <div class="table-format">
      <div>
        <ul>
          <li>Contact Us</li>
          <li>Jobs</li>
          <li>Press</li>
          <li>Blog</li>
        </ul>
      </div>
      <div>
        <ul>
          <li>About Us</li>
          <li>Terms</li>
          <li>Privacy</li>
        </ul>
      </div>
    </div>
    <!--social icons-->
    <div class="social-icons">
      <a href="#"><i class="fab fa-facebook-f"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
    </div>
  </div>
  <footer>
    <p class="attribution">
      Challenge by <a href="https://www.frontendmentor.io?ref=challenge" target="_blank">Frontend Mentor</a>. 
      Coded by <a href="#">Kenechukwu N.</a>
    </p>
  </footer>
</section>

  <!-- <script src="js/script.js"></script> -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
<script>

if ($("#mailForm").length > 0) {
   $("#mailForm").validate({
	 
   rules: {
	  message: {
		   required: true,
	   },
	   email: {
			   required: true,   
			   email: true,
		   },    
   },
   messages: {
	 message: {
	   required: "Please enter message",
	 },
	 email: {
		 required: "Please enter valid email",
		 email: "Please enter valid email",
	   },     
   },
   submitHandler: function(form) {
	$.ajaxSetup({
		 headers: {
			 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		 }
	 });
	 $('#submit').html('Sending..');
	 $.ajax({
	   url: 'mail.php' ,
	   type: "POST",
	   data: $('#mailForm').serialize(),
	   success: function( response ) {
		   $('#submit').html('Submit');
		   $('#res_mess').show();
       $('#msg_div').show();
		   $('#res_mess').html(response.msg);
		   document.getElementById("mailForm").reset(); 
		   setTimeout(function(){
		   $('#res_mess').hide();
		   $('#msg_div').show();
		   },10000);
	   }
	
   }
 })
}
</script>

  <script src="js/all.js"></script>
  <script src="js/all.min.js"></script>
</body>
</html>