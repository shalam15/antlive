<!DOCTYPE html>
<html>
<title>ANT-LIVE MOVEMENT</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
    height: 100%;
    color: #FEE99E;
    line-height: 1.8;
    background-color: black;
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
    background-image: url('parallax1.jpg');
    min-height: 100%;
}

/* Second image (Portfolio) */
.bgimg-2 {
    background-image: url("parallax2.jpg");
    min-height: 400px;
}

/* Third image (Contact) */
.bgimg-3 {
    background-image: url("parallax3.jpg");
    min-height: 400px;
}

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }
}

.al-gold{
  color: #fff !important;
  background-color:#FEE99E; 
}
.al-color{
  color: #FEE99E;
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="#home" class="w3-bar-item w3-button"><i class="fa fa-home"></i>HOME</a>
    <a href="#about" class="w3-bar-item w3-button w3-hide-small w3-hide-medium"><i class="fa fa-user"></i> ABOUT</a>

    <a href="#portfolio" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> PROJECTS</a>

    <a href="#DONATE-BUTTON" class="w3-bar-item w3-button"><i class="fa fa-usd"></i> CONTACT<span class="w3-hide-medium">/DONATE</span></a>

    <a href="#TRES-LECHES" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-book"></i> TRES-LECHES</a>

    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-red">
      <i class="fa fa-usd">DONATE</i>
    </a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
    <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()">PROJECTS</a>
    <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
    
  </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large al-gold w3-xlarge w3-wide w3-animate-opacity">ANTLIVE <span class="w3-hide-small"> MOVEMENT</span></span>

  </div>
  <div >
    <video id="video1" width="100%" height="100%" class="w3-display-middle" autoplay>
   <source src="Sequence 10 big man moves .mp4" type="video/mp4"> 
    Your browser does not support HTML5 video.
    </video>
  </div>
  </div>

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64" id="about">
  <h3 class="w3-center">ABOUT ME</h3>
  <p>Ant Live Movement is all about expressing your inner self and just being creative through dancing.
  I want to inspire people, I want to up lift people and last but not least I want to entertain people and bring joy to your life. I want you to dig deep and release that creative energy that's within all of us.
WELCOME TO THE ANTLIVE MOVEMENT</p>
  <div >
    <div class=" w3-center w3-padding-large">
      <p><b><i class="fa fa-user w3-margin-right"></i>Antoine Jennings</b></p><br>
      <img src="Antoine.JPG" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="Photo of Me" width="500" height="333">
    </div>

    <!-- Hide this text on small devices -->
    <div class="w3-col m12 w3-hide-small w3-padding-large">
      <p>Welcome to my website. I Love to Dance and Edit Videos</p>
    </div>
  </div>
  
  <div class="w3-row-padding w3-margin-top">
  <div class="w3-third">
    <div class="w3-card">
      <img src="11.jpg" style="width:100%">
      <div class="w3-container">
        <h5>1</h5>
      </div>
    </div>
  </div>

  <div class="w3-third">
    <div class="w3-card">
      <img src="12.jpg" style="width:100%">
      <div class="w3-container">
        <h5>2</h5>
      </div>
    </div>
  </div>

  <div class="w3-third">
    <div class="w3-card">
      <img src="13.jpg" style="width:100%">
      <div class="w3-container">
        <h5>3</h5>
      </div>
    </div>
  </div>
</div>

<div class="w3-row-padding w3-margin-top">
  <div class="w3-third">
    <div class="w3-card">
      <img src="14.jpg" style="width:100%">
      <div class="w3-container">
        <h5>4</h5>
      </div>
    </div>
  </div>

  <div class="w3-third">
    <div class="w3-card">
      <img src="15.jpg" style="width:100%">
      <div class="w3-container">
        <h5>5</h5>
      </div>
    </div>
  </div>

  <div class="w3-third">
    <div class="w3-card">
      <img src="11.jpg" style="width:100%">
      <div class="w3-container">
        <h5>6</h5>
      </div>
    </div>
  </div>
</div>

  
  
</div>

<!-- Second Parallax Image with Portfolio Text -->
<div class="bgimg-2 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-white w3-wide">PROJECTS</span>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div class="w3-content w3-container w3-padding-64" id="portfolio">
  <h3 class="w3-center" id="TRES-LECHES">TRES LECHES</h3>
  <p class="w3-center"><b>Winter 2018 but</b> <em>⥤it may be sooner Stay Tuned!!⥢</em></p><br>

  <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
  <div class="w3-row-padding w3-center">

    <div >
      <img src="parallax2.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="The mist over the mountains">
    </div>
  </div>
  <br>

  <div class="w3-row-padding w3-center w3-section">
    <button class="w3-button w3-padding-large w3-light-grey" style="margin-top:64px">VISIT WEBSITE</button>
  </div>
</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<!-- Third Parallax Image with Portfolio Text -->
<div class="bgimg-3 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-white w3-wide">WHERE IS ANTLIVE?</span><br>
     <span class="w3-large">CONTACT US TO FIND OUT!</span>
  </div>
</div>
<div id="DONATE-BUTTON">
  <button class="w3-button w3-block al-gold  w3-padding-large" type="submit" onclick="getQuestionNow(event)" style="color: black !important; padding:30px !important;">
    <span style="letter-spacing: 30px; color: red !important">DONATE</span><span style="letter-spacing: 2px;">TO ANT LIVE</span></button>
</div>
<!-- Container (Contact Section) -->
<div class="w3-content w3-container w3-padding-64" id="contact">
  <div class="w3-row w3-padding-32 w3-section">
    <div class="w3-col m4 w3-container w3-hide-small">
      <!-- Add Google Maps -->
      <div id="googleMap" class="w3-round-large w3-greyscale" style="width:100%;height:400px;">
        
      </div>
    </div>
    <div class="w3-col m8 w3-panel">
      <div class="w3-large w3-margin-bottom">
        <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Atlanta GA<br>
        <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Phone: +1 313 401 1813<br>
        <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: antoinelive1984@gmail.com<br>
      </div>
      
      <form action="#" target="_blank">
        <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
          </div>
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
          </div>
        </div>
        <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
        <button class="w3-button w3-black w3-right w3-section" type="submit">
          <span class="al-color"><i class="fa fa-paper-plane"></i> SEND MESSAGE</span>
        </button>
      </form>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
  
  <a href="#home" class="w3-button al-gold"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  

  <div class="w3-xlarge w3-section al-color">
    <i class="fa fa-facebook-official w3-hover-opacity" style="padding-right: 20px; padding-left: 40px"></i>
    <i class="fa fa-instagram w3-hover-opacity" style="padding-right: 40px;"></i>
    <i class="fa fa-snapchat w3-hover-opacity" style="padding-right: 40px;"></i>
  </div>
  <p class="al-color">CODED BY <a href="ajayaa.site" title="W3.CSS" target="_blank" class="w3-hover-text-green">AJAYI</a></p>
</footer>
 
<!-- Add Google Maps -->
<script>
function myMap()
{
  myCenter=new google.maps.LatLng(41.878114, -87.629798);
  var mapOptions= {
    center:myCenter,
    zoom:12, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</body>
</html>
