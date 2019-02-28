
<html><head>



    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="icon" type="image/png" href="../images/f%20small.png">
      <link rel="stylesheet" href="../style/w3.css">
      <link rel="stylesheet" href="../style/st.css">
      <link href="../style/font.css" rel="stylesheet">
      </head>
  <body class="w3-black" onload="document.getElementById('apf1').style.display='block'">
  <form class="" action="dark_portfolio.inc.php" method="post" enctype="multipart/form-data">
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








</body>
</html>


<!--

font-family: 'Rubik', sans-serif;
font-family: 'Roboto', sans-serif;
font-family: 'Open Sans', sans-serif;
font-family: 'Abel', sans-serif;


-->
