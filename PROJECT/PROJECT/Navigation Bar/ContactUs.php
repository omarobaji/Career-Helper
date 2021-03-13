<?xml version = ″1.0″?>
<!DOCTYPE html PUBLIC ″-//w3c//DTD XHTML 1.1//EN″ “http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd”>
<html xmlns = ″http://www.w3.org/1999/xhtml″>
	<head>
		<title> Contact Us </title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
	</head>
        <style>
   body{
margin:0;
padding:0; 
font-family: 'Montserrat';
}
#a{
width:7in;
position: relative;
left: 150px;
top: 60px;

  }
 #b{
position: relative;
left:150px;
width:7in;
top:230px;
padding-bottom: 30px;
   }
p{
 padding: auto;
 font-size: 1.2rem;
}
div.abs1{
position: absolute;
left: 35px;
top: 530px;
width: 2.5in;
border: 2px solid black;
padding:1px;
background-color: #1f222e;             
color: white;
border-radius: 5px;
 }
div.abs2{
position: absolute;
left:285px;
top:530px;
width:2.5in;
border: 2px solid black;
padding:1px;
background-color: #1f222e;
color: white;
border-radius: 5px;
}
div.abs3{
position: absolute;
left:535px;
top:530px;
width:2.5in;
border: 2px solid black;
padding:1px;
background-color: #1f222e;
color: white;
border-radius: 5px;
}
div.abs4{
position: absolute;
left:785px;
top:530px;
width:2.5in;
border: 2px solid black;
padding:1px;
background-color: #1f222e;
color: white;
border-radius: 5px;
}

.picsize{
 width: 80px;
height: 80px;
border-radius: 50%;
}
div.align{
text-align: center;
padding-top: 5px;
padding-bottom: 20px;     3}
.popup {
  position: relative;
  display: inline-block;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}


.popup .popuptext {
  visibility: hidden;
  width: 3in;
  background-color: #fff;
  color: #1f222e;
  text-align: center;
  border-radius: 6px;
  padding: 2px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 20%;
  margin-left: -80px;
}


.popup .popuptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}


.popup .show {
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s;
}


@-webkit-keyframes fadeIn {
  from {opacity: 0;} 
  to {opacity: 1;}
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity:1 ;}
}
::-webkit-scrollbar-track
{
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
    background-color: #F5F5F5;
}

::-webkit-scrollbar
{
    width: 10px;
    background-color: #F5F5F5;
}

::-webkit-scrollbar-thumb
{
    background-color: #110c11;
}
        </style>
	<body>
  <?php include 'C:xampp/htdocs/project/Navigation Bar/NavBar.php';
?>
  
	<p id="a">
        <b>About Us:</b><br/>
        <br/>
        Everyone knows the struggle to find a job at this times, specially new graduates. Our platforms main priority is meeting both ends for both new graduates and big or small businesses,Providing employees for businesses and providing jobs for fresh graduates. We aim to decrease the high amount of unemployement by making both ends meet, If you are looking for an employee, search between the available CVs and choose the perfect one for your company. If you are a graduate you should fill a form to land your dream job! 
        This website aims to make the connection between the Employee and the Employer easier and faster.<br/>
       <br/>
        <b> Our Team:</b> 
         </p>
         
          <div class="abs1">
           <div class="align"><img src="omarobaji1.jpeg" alt="Omar Obaji" class="picsize"> </div>
           <div class="popup" onclick="myFunction1()">Omar Obaji, undergraduate studying Computer Science at BAU.
            <span class="popuptext" id="myPopup1">o.obaji@gmail.com</span></div>
          </div> 
          
          <div class="abs2" >
           <div class="align"><img src="Alidarwish.jpeg" alt="Ali Darwish" class="picsize"></div>
           <div class="popup" onclick="myFunction3()">Ali Darwish, undergraduate studying Computer Science at BAU.
           <span class="popuptext" id="myPopup3">ali.darwish.100.45@gmail.com</span></div>
          </div>
          <div class="abs3" >
           <div class="align"><img src="Aliraad.jpeg" alt="Ali Raad" class="picsize"></div>
           <div class="popup" onclick="myFunction4()">Ali Raad, undergraduate studying Computer Science at BAU.
           <span class="popuptext" id="myPopup4">A_l_i_1@live.com</span></div>
          </div>
          <div class="abs4" >
          <div class="align"><img src="Alikadour.jpeg" alt="Ali Kadour" class="picsize"></div>
          <div class="popup" onclick="myFunction2()">Ali Kadour, undergraduate studying Computer Science at BAU.
          <span class="popuptext" id="myPopup2">ali.kadour5216@gmail.com</span></div>
          </div><br/>
           <br/><br>
           <p id="b">
             <b>Contact Us:</b><br/>
             For any help and support, you can contact us at anytime by sending your feedback to our email address: <b>career.helper7@gmail.com</b>. 
             Or contact our team individualy by email adresses shown on their profiles by clicking on the text!.<br/>
            </p>


<script>
function myFunction1() {
  var popup = document.getElementById("myPopup1");
  popup.classList.toggle("show");
}
</script>

<script>
function myFunction2() {
  var popup = document.getElementById("myPopup2");
  popup.classList.toggle("show");
}
</script>
<script>
function myFunction3() {
  var popup = document.getElementById("myPopup3");
  popup.classList.toggle("show");
}
</script>
<script>
function myFunction4() {
  var popup = document.getElementById("myPopup4");
  popup.classList.toggle("show");
}
</script>

<div style="position: relative; top:250px;">
<?php

include "qwer.php"
?>
</div>
	</body>
</html>
