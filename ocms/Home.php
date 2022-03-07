<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname  = "brajesh";

$connection = mysqli_connect($hostname,$username,$password,$dbname);
session_start();

?>
<html>
<head>
<title>Online Clinic Appointment System</title>
</head>

<style>
body{ margin:0px; }
#leftMenu {
	width: 15%;
	min-width: 160px;
}
#leftMenu > details{
}
#leftMenu > details > summary{
	cursor:pointer;
	background: #DFEFFF;
	margin:6px;
	padding:8px;
}
#leftMenu > details > summary:hover{
	background: #EFEFEF;
}
#leftMenu > details > summary::-webkit-details-marker{
	/*display: none;*/
}
#leftMenu > details > a{
	display:block;
	text-decoration: none;
	color:#000;
	font-size:13px;
	margin:3px 6px 3px 18px;
	padding: 4px;
	background: #EFEFEF;
}
#leftMenu > details > a:hover{
	background: #DFEFFF;
	font-weight: bold;
}
#leftMenu > details > a:before{
	content: "> ";
}
</style>





<style>
.dropbtn {
    background-color:#f9f9f9;
    color: white;
    padding: 6px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
</style>

<style>
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 6px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
</style>

<style>
a:link {
    color: black;
    background-color: transparent;
    text-decoration: none;
}
a:visited {
    color: blue;
    background-color: transparent;
    text-decoration: none;
}
a:hover {
    color: red;
    background-color: transparent;
    text-decoration: underline;
}
a:active {
    color: yellow;
    background-color: transparent;
    text-decoration: underline;
}
</style>
<style>
         blink {
           color:red;
           -webkit-animation: blink 1s step-end infinite;
           animation: blink 1s step-end infinite
         }
 
          @-webkit-keyframes blink {
          67% { opacity: 0 }
         }
 
         @keyframes blink {
         67% { opacity: 0 }
        }
      </style>

<body background="697207.png">

<marquee>

<h1 align=left><font size=25>Online Clinic Appointment System</font></h1>

</marquee>

<center>

<table border="3px", style="width:75%">
  <tr align=center>

    <td height="30px" bgcolor=#f1f1c1><a href="Home.php"><font size=4><b>Home</b></font></a></td>
    <td bgcolor=#f1f1c1><a href="Services.html"><font size=4><b>Services</b></font></td>
    <td><?php 
    if(isset($_SESSION['username'])){
      echo "<form action='logout.php'><input type='submit' name='submit' value='log out'></form>";
 }
    else{
      echo "<a href='login.html'>Login</a>";
    }
    ?>
</td>
    <td bgcolor=#f1f1c1><a href="Contacts.html"><font size=4><b>Contacts</b></font></td>
<td bgcolor=#f1f1c1><a href="About Us.html"><font size=4><b>About Us</b></font></td>

  </tr>
</table>
<br>
<table width=75%">
<tr align=right>
<td>
<input type="text" name="search" placeholder="Type to search..">
<input type="submit" value="Search" ></p>
</td>
</tr>
</table>

<table width=75% cellpadding=6>

<tr valign=top height=600px>



<td width=15%>

<table>

<tr><td>

<p  align=left><div class="dropdown">
  <button class="dropbtn"><b>   Services    <b></button>
  <div class="dropdown-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
</div>

<br>
<br>

<div class="dropdown">
  <?php
  if (isset($_SESSION['username'])) {

  echo "<a href='Take an appointment.html'> Take an appointment </a>";
    }?>
  </div>
</div>

</p>

</td></tr>

<tr><td>

<div id="leftMenu" >
  <details> <summary> Doctor and spealization </summary>
    <summary> 1.Allergy and Immunology </summary>
    <a href="doctor/pawan.html"> Dr.Pawan Kalyan </a>
    <a href="doctor/nitin.html">Dr.Nitin Shah </a>
  <summary> 2.Cardiology </summary>
    <a href="doctor/alisha.html"> Dr.Alisha Rai </a>
    <a href="doctor/vola.html"> Dr.Vola Rijal</a>
 <summary> 3.Endocrinology </summary>
    <a href="doctor/vim.html"> Dr.Vim Shen Thapa </a>
    <a href="doctor/bal.html"> Dr.Balavadra Kuhar </a>
    
    <summary> 4.Immunotherapy </summary>
    <a href="doctor/sagar.html">  Dr.Sagar Chettri  </a>
    <a href="doctor/sarswati.html"> Dr.Sarswati lamichanne </a>
  </details>
  

</div>

</td></tr>

</table>

</td>

<td width=55% bgcolor=#add8e6>

<p align=center><b><font size=6>    Introduction</font></b></p>
<p align=justify><font size=4>
If anybody is ill and wants to visit a doctor for checkup,
he or she needs to visit the hospital and waits until the doctor
is available. The patient also waits in a queue while getting
appointment. If the doctor cancels the appointment for some
emergency reasons then the patient is not able to know about
the cancelation of the appointment unless or until he or she
visits the hospital. As the technology is developing rapidly, therefore, one can use this amazing platform to overcome such problems and inconvenience
for the patients. There is much work in the literature in this
regard. An intelligent agent based appointment system
has been proposed in which a scheduling system is
provided for patients.</p>


</font>

</td>

<td bgcolor=#add2f6 width=30%>

<table>
<tr>
<td width=20% height=150px align=center bgcolor=red>
<blink><font size=6><a href=Contacts.html>EMERGENCY</a></sfont></blink>
</td>
</tr>

</table>
 

<div style = "background-color:#b5dcb3; clear:both">
            <center>
               Copyright © 2018 OnlineClinicAppointSystem.com
            </center>
         </div>

</center>

</body>
</html>