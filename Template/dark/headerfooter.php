<html>
<head>
<title></title>
<!--<script
    src="../style/jquery3.js">
</script>
<script>
$(function(){
  $("#header").load("header.html");
  $("#footer").load("footer.html");
});
</script>-->

<style>
.header{
   left: 0;
   top: 0;
   width: 100%;
   text-align: center;
}
.footer{
   left: 0;
   bottom: 0;
   width: 100%;
   text-align: center;
}

</style>
<link rel="stylesheet" href="../../style/w3.css">

<script>
function w3_open() {
document.getElementById("mySidebar").style.display = "block";
document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
document.getElementById("mySidebar").style.display = "none";
document.getElementById("myOverlay").style.display = "none";
}
</script>
</head>
<body background="images/bg2.jpg" style="height: 100%; background-position: center;
background-repeat: no-repeat;
background-size: cover;" >

<div id="header" class="">
<div class="w3-sidebar w3-bar-block w3-animate-left w3-hide-large w3-center" style="display:none;z-index:5" id="mySidebar">
<a href="Template/templateselection.html" style="width: 120px" class="w3-bar-item w3-button w3-margin w3-white w3-text-light-blue w3-border w3-border-light-blue  w3-hover-light-blue w3-hover-border-light-blue w3-hover-text-white w3-round-xxlarge">Templates</a>
<a href="#login" onclick="document.getElementById('login1').style.display='block'" style="width: 100px" class="w3-bar-item w3-button w3-margin w3-white w3-text-light-blue w3-border w3-border-light-blue  w3-hover-light-blue w3-hover-border-light-blue w3-hover-text-white w3-round-xxlarge">Log In</a>
<div id="login1"  class="w3-modal" onclick="this.style.display='none'">
<span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
<div align="center" style="height:100%" class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:">

 <iframe width="100%" height="100%" src="Trash/login.html">

</iframe>




</div>
</div>
<a href="#register" onclick="document.getElementById('register1').style.display='block'" style="width: 100px" class="w3-bar-item w3-button w3-margin w3-white w3-text-light-blue w3-border w3-border-light-blue  w3-hover-light-blue w3-hover-border-light-blue w3-hover-text-white w3-round-xxlarge">Register</a>
<div id="register1"  class="w3-modal" onclick="this.style.display='none'">
<span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
<div align="center" style="height:100%" class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:">

 <iframe width="100%" height="100%" src="Trash/register.html">

</iframe>





</div>
</div>

</div>

<!-- Page Content -->
<div class="w3-overlay w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>

<div>
<button class="w3-button w3-white w3-large w3-hide-large " onclick="w3_open()">&#9776;</button>







<div class="w3-bar w3-hide-small w3-hide-medium w3-hover-white w3-container " style="position:inherit" >
<a href="index.html" class="w3-bar-item w3-large w3-button w3-white w3-margin w3-border w3-bottombar w3-topbar w3-leftbar w3-rightbar w3-hover-text-light-blue   w3-hover-white w3-hover-border-light-blue w3-border-black w3-round-xxlarge" ><b>FUBAR</b></a>




</div>
 </div>


      <iframe style="border: 0; width: 100%; height: 100%" src="../dark portfolio1/home.html"> </iframe>
<div id="footer" class="footer">
<form method="post">


<footer class="w3-center w3-pale-blue w3-padding-32">
<button class=" w3-button w3-black w3-border w3-hover-border-black" type="submit" name="button" value="Upload Image">Submit</button>
</footer>
</form>
</div>

</body>
</html>

<?php
if (isset($_POST['button'])) {

header('Location: ../../object.php?dark');
}


 ?>
