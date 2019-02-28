<!DOCTYPE html>


<!-- saved from url=(0059)https://www.w3schools.com/w3css/tryw3css_templates_cafe.htm -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>Cafe Template</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./cafe_files/w3.css">
<link rel="stylesheet" href="./cafe_files/css">
<style>
body, html {
  height: 100%;
  font-family: "Inconsolata", sans-serif;
}

.bgimg {
  background-position: center;
  background-size: cover;
  background-image: url("cafe_files/coffeehouse.jpg");
  min-height: 75%;
}

.menu {
  display: none;
}
</style>
<style type="text/css">
:root a[rel="nofollow"],
:root .tooltip + div[style="height:90px;"],
:root #mainLeaderboard,
:root .bottomad
{ display: none !important; }</style><style>@font-face{font-family:uc-nexus-iconfont;src:url(chrome-extension://pogijhnlcfmcppgimcaccdkmbedjkmhi/res/font_9qmmi8b8jsxxbt9.woff) format('woff'),url(chrome-extension://pogijhnlcfmcppgimcaccdkmbedjkmhi/res/font_9qmmi8b8jsxxbt9.ttf) format('truetype')}</style>









        <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="icon" type="image/png" href="../images/f%20small.png">
          <link rel="stylesheet" href="../style/w3.css">
          <link rel="stylesheet" href="../style/st.css">
          <link href="../style/font.css" rel="stylesheet">
          </head>
      <body class="w3-black" onload="document.getElementById('apf1').style.display='block'">
      <form class="" action="cafe.inc.php" method="post" enctype="multipart/form-data">
      <div id="apf1"  class="w3-modal"  >
         <div onclick="apf1.style.display='none'" class="">
        <!--  <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span> -->
          <span class="w3-button w3-pale-green w3-hover-pale-green w3-hover-border-pale-green w3-border w3-border-green w3-xlarge w3-display-middle w3-animate-opacity">OK</span>
        </div>

          <div align="" style="height:auto" class="w3-modal-content w3-card-4 w3-animate-top" >

           <div style="width: auto; height: auto" class="w3-dark-grey" >
              <div class="w3-container">
                  <br>
                <label class="w3-padding"><b>Website Title</b></label>
                <input class="w3-input w3-border w3-margin-left" style="width: 50%; " type="text" placeholder="Enter Title" name="title" required>

              <div class="w3-dropdown-hover w3-margin">
                  <!--<button class="w3-button w3-light-blue">Choose Font</button>
                  <div class="w3-dropdown-content w3-bar-block w3-border w3-large">-->
                  <select class="w3-select w3-border" name="font" value="font">


                      <option value="" disabled selected>
                      <a href="#"  style="" class="w3-button" >Choose Font</a></option>
                      <option value="Rubix">
                      <a href="#"  style="font-family: Rubik, sans-serif;" class="w3-button  ">Rubik</a></option>


                    <option value="Abel">
                        <a href="#" style="font-family:'Abel', sans-serif;" class="">Abel</a></option>

                    <option value="Open Sans">
                      <a href="#" style="font-family: 'Open Sans', sans-serif;" class="w3-button">Open Sans </a></option>

                    <option value="Roboto">
                      <a href="#" style="font-family: 'Roboto', sans-serif;" class="w3-button">Roboto</a></option>

                  </select>
                  </div>
          </div>
      				<!--	<button class="w3-button w3-block w3-light-blue w3-section w3-padding" type="submit">OK</button>-->


              </div>
          </div>



          </div>









<!-- Links (sit on top) -->
<div class="w3-top">
  <div class="w3-row w3-padding w3-black">
    <div class="w3-col s3">
      <a href="#" class="w3-button w3-block w3-black">HOME</a>
    </div>
    <div class="w3-col s3">
      <a href="#about" class="w3-button w3-block w3-black">ABOUT</a>
    </div>
    <div class="w3-col s3">
      <a href="#menu" class="w3-button w3-block w3-black">MENU</a>
    </div>
    <div class="w3-col s3">
      <a href="#where" class="w3-button w3-block w3-black">WHERE</a>
    </div>
  </div>
</div>

<!-- Header with image -->
<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
  <input type="file" name="file9" id="file9">
  <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
    <span class="w3-tag"><input name="time1" placeholder="Cafe Time" size=""></input></span>
  </div>
  <div class="w3-display-middle w3-center">
    <span class="w3-text-white" style="font-size:50px"><input name="name1" placeholder="Cafe Name" size="8"></input></span>
  </div>
  <div class="w3-display-bottomright w3-center w3-padding-large">
    <span class="w3-text-white"><input name="add1" placeholder="Cafe Address" size=""></input></span>
  </div>
</header>

<!-- Add a background color and large text to the whole page -->
<div class="w3-sand w3-grayscale w3-large">

<!-- About Container -->
<div class="w3-container" id="about">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">ABOUT THE CAFE</span></h5>
    <p><textarea name="about1" placeholder="Description" rows="10" cols="75" >
</textarea></p>
    <div class="w3-panel w3-leftbar w3-light-grey">
      <p><textarea name="quote1" placeholder="Quote" rows="3" cols="70" >
        </textarea></p>
    </div>
    <img src="./cafe_files/coffeeshop.jpg" style="width:100%;max-width:1000px" class="w3-margin-top">
    <p><strong>Opening hours:</strong> <input name="time2" placeholder="Cafe Time" size=""></input></p>
    <p><strong>Address:</strong> <input name="add2" placeholder="Cafe Address" size=""></input></p>
  </div>
</div>

<!-- Menu Container -->
<div class="w3-container" id="menu">
  <div class="w3-content" style="max-width:700px">

    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">THE MENU</span></h5>

    <div class="w3-row w3-center w3-card w3-padding">
      <a href="javascript:void(0)" onclick="openMenu(event, &#39;Eat&#39;);" id="myLink">
        <div class="w3-col s6 tablink w3-dark-grey">Eat</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, &#39;Drinks&#39;);">
        <div class="w3-col s6 tablink">Drink</div>
      </a>
    </div>

    <div id="Eat" class="w3-container menu w3-padding-48 w3-card" style="display: block;">
      <h5><input name="eat1" placeholder="Title1" size=""></input></h5>
      <p class="w3-text-grey"><input name="detail1" placeholder="Details and Price" size="50"></input></p><br>

      <h5><input name="eat2" placeholder="Title2" size=""></input></h5>
      <p class="w3-text-grey"><input name="detail2" placeholder="Details and Price" size="50"></input></p><br>

    <h5><input name="eat3" placeholder="Title3" size=""></input></h5>
      <p class="w3-text-grey"><input name="detail3" placeholder="Details and Price" size="50"></input></p><br>

    <h5><input name="eat4" placeholder="Title4" size=""></input></h5>
      <p class="w3-text-grey"><input name="detail4" placeholder="Details and Price" size="50"></input></p><br>

    <h5><input name="eat5" placeholder="Title5" size=""></input></h5>
      <p class="w3-text-grey"><input name="detail5" placeholder="Details and Price" size="50"></input></p><br>

    </div>

    <div id="Drinks" class="w3-container menu w3-padding-48 w3-card" style="display: none;">
      <h5><input name="drink1" placeholder="Title1" size=""></input></h5>
      <p class="w3-text-grey"><input name="detail6" placeholder="Details and Price" size="50"></input></p><br>

      <h5><input name="drink2" placeholder="Title2" size=""></input></h5>
      <p class="w3-text-grey"><input name="detail7" placeholder="Details and Price" size="50"></input></p><br>

    <h5><input name="drink3" placeholder="Title3" size=""></input></h5>
      <p class="w3-text-grey"><input name="detail8" placeholder="Details and Price" size="50"></input></p><br>

    <h5><input name="drink4" placeholder="Title4" size=""></input></h5>
      <p class="w3-text-grey"><input name="detail9" placeholder="Details and Price" size="50"></input></p><br>

    <h5><input name="drink5" placeholder="Title5" size=""></input></h5>
      <p class="w3-text-grey"><input name="detail10" placeholder="Details and Price" size="50"></input></p><br>
    </div>
    <img src="./cafe_files/coffeehouse2.jpg" style="width:100%;max-width:1000px;margin-top:32px;">
  </div>
</div>

<!-- Contact/Area Container -->
<div class="w3-container" id="where" style="padding-bottom:32px;">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">WHERE TO FIND US</span></h5>
    <p>Find us at some address at some place.</p>
    <img src="./cafe_files/map.jpg" class="w3-image" style="width:100%">
    <p class="w3-center"><textarea name="add3" placeholder="Detail Address" rows="4" cols="70"></textarea></p>
   <div class="w3-container w3-padding-32" id="contact">
    <h3 class="w3-border-bottom w3-border-black w3-padding-16">Contact</h3>
  <h3>Email Id:&nbsp&nbsp&nbsp&nbsp<input name="email1" placeholder="example@xyz.com" size=""></input></h3>
    <h3>Tel. No.:&nbsp&nbsp&nbsp&nbsp&nbsp<input name="tel1" placeholder="+0123456789" size=""></input></h3>
  </div>
  </div>
</div>

<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-48 w3-large">
  <p>Powered by FUBAR</p>
</footer>
<div id="footer" class="footer">


<footer class="w3-center w3-pale-blue w3-padding-32">
<button class=" w3-button w3-black w3-border w3-hover-border-black" type="submit" name="button" value="Upload Image">Submit</button>
</footer>
<script type="text/javascript" defer="" async="" src="./cafe_files/uaest.js.download"></script><script>
// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-dark-grey";
}
document.getElementById("myLink").click();
</script>


<div></div></form></body></html>
