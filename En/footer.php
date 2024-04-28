
<section id="newsletter" class="section-p1">
<div class="newstext">
  <h4>Countact Us</h4>
  <div class="icon">
  <a href="https://www.facebook.com/profile.php?id=61553838116748&mibextid=ZbWKwL"><i class="fab fa-facebook-f"></i></a>
  <a href="https://www.instagram.com/hozom.aljazeera/?igsh=MWhidm43dWF1Mms2bQ%3D%3D"><i class="fab fa-instagram"></i></a>
  <a href="https://wa.me/+966554000044"><i class="fa-brands fa-whatsapp"></i></a>

   </div>
  <p>Our location on <span>the map.</span> </p>
  <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3623.5592010538403!2d46.64488077536708!3d24.742009078006742!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjTCsDQ0JzMxLjIiTiA0NsKwMzgnNTAuOCJF!5e0!3m2!1sen!2s!4v1706093143580!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>  </div>
  <form method="post" action="countact.php" class="form">
      <h4>Send Massage</h4>
  <input type="text" name="name" placeholder="Enter Your Name">
  <input type="email" name="email" placeholder="Enter Your Email" id="">
  <input type="text" name="subject" placeholder="Subject">
  <textarea name="message" id="" cols="30" rows="10"></textarea>
     <button class="btn normal" type="submit" name="send">Send</button>
  </form>
 
</div>

</section>

<footer class="section-p1">
<div class="footer">
<div class="col">
<a href="#"><img class="logo" src="img/logo.svg" width="50%"></a>
  <h4>Contact</h4>
   <p><strong>Address:<strong>Kingdom of Saudi Arabia - Riyadh - Al-Nakhil District - Imam Saud Road</p>
  <p><strong>Phone:</strong>+966 50 415 6140, +966 55 400 0044</p>
  <p><strong>Hours:</strong>10.00 - 18.00, Mon - Sat</p>
     <div class="follow">
       <h4>Follow Us</h4>
       <div class="icon">
         <a href="https://www.facebook.com/profile.php?id=61553838116748&mibextid=ZbWKwL"><i class="fab fa-facebook-f"></i></a>
         <a href="https://www.instagram.com/hozom.aljazeera/?igsh=MWhidm43dWF1Mms2bQ%3D%3D"><i class="fab fa-instagram"></i></a>
          </div>
     </div>
     </div>
    
</div>
<div class="coypright">
  <center>
    <p> © 2024 All rights reserved made by <a href="https://hashtag-9.com/">hashtag 9</a> </p>
  </center>
  </div>

</footer>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 
<script>
  const slider = document.getElementById('slider');
const inputs = slider.querySelectorAll('input[type="radio"]');
let currentIndex = 0;

function selectNextInput() {
inputs[currentIndex].checked = false;
currentIndex = (currentIndex + 1) % inputs.length;
inputs[currentIndex].checked = true;
}

// Select the first input initially
inputs[currentIndex].checked = true;

// Select the next input every 5 seconds
setInterval(selectNextInput, 5000);
</script>
<script>
  
  const slidering = document.querySelector('.slidering');
const slides = Array.from(slidering.children);
let currentSlide = 0;

function nextSlide() {
slides[currentSlide].style.transform = `translateX(+100%)`;
currentSlide = (currentSlide + 1) % slides.length;
slides[currentSlide].style.transform = `translateX(0)`;
}

setInterval(nextSlide, 7000); // Change slide every 5 seconds

</script>
<script src="../script.js"></script>
  </body>

</html>