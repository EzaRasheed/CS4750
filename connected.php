<!DOCTYPE html>
<html>
<head>
<title>Creative Confections</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Product example · Bootstrap</title>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/product/">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
<link href="/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
</head>

<style>
.w3-lobster {
  font-family: "Lobster", serif;
  color: white; 
}

button.zoha{
	color: blue;
    background-color: orange;
}

.ulBottomNav {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #402a18;
  display: flex;
  justify-content: space-around;
}

.liBottomNav {
  float: left;
}

.liBottomNav a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-family:"Palatino Linotype", "Book Antiqua", Palatino, serif;
}

.liBottomNav a:hover {
  background-color: #111;
}
p.serif {
  font-family: "Times New Roman", Times, serif;
}
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}

.imgex {width: 100%}
@media only screen and (max-width:768px){
    body{ background-color:black; }
    .imgex{width:100%;}
}

.reviewText{
    text-align: center;
    align- center;
    font-family: "Lucida Console",  serif;
    color: #56C7E1;
    font-size:2vw;
}

.reviewBtn{
    background-color: #56C7E1;
    color: white;
    align: center;
    margin-left: 45%;
    width: 30%;

}

.upperNav{
  background-color: #402a18;
}

.upperNavTabs{
	color: white; 
}
textarea {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;

    width: 100%;
}

.overflow-hidden { overflow: hidden; }

</style>

<body style="background-color: #E3E6E7;">

<nav class="navbar navbar-expand-md upperNav">
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
		<ul class="navbar-nav mr-auto">
		<li>
				<img src="images/Creative2.jpg" style="width:60px; height: 40px; ">
			<li>
        </ul>
		<h3 class="w3-xlarge w3-lobster">Welcome to Creative Confections!</h3>
		<ul class="navbar-nav ml-auto">
            <li class="nav-item upperNavTabs">
                <a class="nav-link upperNavTabs" href="#">Login</a>
            </li>
            <li class="nav-item upperNavTabs">
                <a class="nav-link upperNavTabs" href="#">Cart <i class="fa fa-shopping-cart" style="font-size:15px;color:white"></i></a>
            </li>
        </ul>
    </div>
</nav>
<!-- <img src="CreativeConfections.JPG"> -->

<ul class="ulBottomNav">
  <li class="liBottomNav"><a class="active" href="#home">Home</a></li>
  <li class="liBottomNav"><a href="#news">Blog</a></li>
  <li class="liBottomNav"><a href="#contact">About</a></li>
  <li class="liBottomNav"><a href="#about">Products</a></li>
  <li class="liBottomNav"><a href="#news">Occasions and Catering</a></li>
  <li class="liBottomNav"><a href="#contact">Donate</a></li>
  <li class="liBottomNav"><a href="#about">Contact Us</a></li>'
  <li class="liBottomNav"><a href="#news">Customer Reviews</a></li>
  <li class="liBottomNav"><a href="#about">Customize</a></li>
  <li class="liBottomNav"><a href="#news">Blog</a></li>
  <li class="liBottomNav"><a href="#contact">Send a Message!</a></li>
</ul>


<?php session_start(); // make sessions available ?>
<?php
// If the user has logged in, display the page content. 
// Otherwise, redirect to the login page (force login)
// Note: for an app that requires user to login before using the services, 
//       always check and force login on every page 
//       so that the user can't simply jump in the middle of the app
//       (via bookmark or URL rewriting)

if (isset($_SESSION['user']))
{
?>  
  <div class="container">
    <h1>Welcome, <font color="green" style="font-style:italic"><?php if (isset($_SESSION['user'])) echo $_SESSION['user']; ?></font></h1>
    <p>
<?php
}
else 
   // redirect to the login page
   header('Location: CreateAccount.php');
?>