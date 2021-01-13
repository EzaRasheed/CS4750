

<!DOCTYPE html>
<html>
<head>
<title>Creative Confections</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title> Creative Confections Home </title>
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
<script>  

// Script to Add Form Values into the Table! 

   // Check if string is an integer (a number) 
   function isInteger(str)
{
   var val = parseInt(str);
   return (val > 0);
}

  var rownumber = 1;
  
  // Adds row in table based on user input in form. 
  function addRow()
  { 
     var col1 = "<img src='https://us.123rf.com/450wm/macrovector/macrovector1505/macrovector150500266/40458887-stock-vector-cakes-and-sweets-decorative-icons-set-with-donut-cookies-cupcake-isolated-vector-illustration.jpg?ver=6' width=60px height=60px>";           // dummy content for each column of the row
     var newRowIndex = rownumber++; 
	 var col2 = document.getElementById("fm-title").value;      // dummy content for each column of the row 
	 var col3 = document.getElementById("fm-category").value;
	var col4 = document.getElementById("fm-price").value 
	if (!isInteger(col4))
	   {
		  alert ("Price must be a number.");
	   }
	   
//	 var col5 = "<input type=button value=' + ' onClick='addRow()'>";
     var col5 = "<input type=button value=' X ' onClick='delRow()'>";
     // Put all pieces of data in an array for later used to create cell content of a row 
     var rowdata = [col1, col2, col3, col4, col5, col5];
     
	 if (isInteger(col4)){
	 
     var tableRef = document.getElementById("mytable");
     
     var newRow = tableRef.insertRow(tableRef.rows.length);  // table_object.rows.length returns the number of <tr> elements in the collection
     
     newRow.onmouseover = function() {         
        tableRef.clickedRowIndex = this.rowIndex;   // rowIndex returns the position of a row in the rows collection of a table     
     }; 
     
     var newCell = "";       
     var i = 0;        
	 while (i < 6)
     {
        newCell = newRow.insertCell(i);            // specify which column 
        newCell.innerHTML = rowdata[i];            // assign what content  
        newCell.onmouseover = this.rowIndex;       // attach row index to the row
        i++;
     }
	 }
  }  
  
  // Ability to delete row in a table 
  function delRow()
  {
     if (confirm("Press OK to delete. This action is unrecoverable.") == true)   
        document.getElementById("mytable").deleteRow(document.getElementById("mytable").clickedRowIndex);
  }
  
  
  
  </script>  
  
<!-- CSS Style Rules--> 
<style>
.w3-lobster {
  font-family: "Lobster", serif;
  color: white; 
}

.productsTitle{
	 font-family: "Lobster", serif;
     color: #ad246d; 
	 align: center; 
	 margin-left: 47%; 
}

.productsTitle2{
	 font-family: "Lobster", serif;
     color: DarkBlue;  
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
				<img src="Creative2.jpg" style="width:60px; height: 40px; ">
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


<!-- Nav Bar --> 

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
  
  <!-- Use this Form to Create New Products for our Table! -->
 
 
 <div class="container">
  <!-- 4. add element to the html page, we'll write script to modify this element -->
  <p id="person-info"></p>  
  
 
<!-- New Product Form --> 

<br>
<h3 class="w3-xlarge productsTitle"> Create A New Product: </h3>
<br> 
  
  <!-- Add form to the page -->
  
  <form>
    <label class="normal">Product Title: </label> <input type="text" id="fm-title" class="form-control" /> 
    <br>
	<label class="normal"> Category: </label> 
	<div class="input-group mb-3">
	  <div class="input-group-prepend">
		<label class="input-group-text" for="fm-category">Options</label>
	  </div>
	  <select class="custom-select" id="fm-category">
		<option selected>Choose...</option>
		<option value="Cookies">Cookies</option>
		<option value="Donuts">Donuts</option>
		<option value="Cakes">Cakes</option>
		<option value="Brownies">Brownies</option>
		<option value="Tartes">Tartes</option>
		<option value="Cupcakes">Cupcakes</option>
		<option value="Candy">Candy</option>
		<option value="Pies">Pies</option>
		<option value="Muffins">Muffins</option>
		<option value="Other">Other</option>
	  </select>
	</div>
	
	<label>Price: </label> <input type="text" id="fm-price" class="form-control" /> 
	<br> 
	<label>Description: </label> <input type="text" id="fm-description" class="form-control" />
    <br> 
	<input type="button" id="record" value="Record Info" onclick="recordInfo()" class="btn btn-light" />  
	<input type="button" id="addToTable" value="Add To Table" onclick="addRow()" class="btn btn-light" />	
  </form>

  <br/> 

<br>
<h4 class="w3-xlarge productsTitle2" id="YourProduct"> </h4>
<br> 
 
  <div id="more"></div>
</div>


<!-- View Products in Table (Add to Table too) --> 

<br>
<h3 class="w3-xlarge productsTitle"> Our Products: </h3>
<br>

  <table style="margin-left: 2%;" id="mytable" class="table" >
     <thead class="thead-dark">
      <tr>
		<th> Product Image </th> 
        <th> Product Title </th>
        <th> Product Category </th>
        <th> Price </th> 
		<th> Add Row </th>
        <th> Delete Row &nbsp;&nbsp; <input type="button" value=" + " onClick="addRow()" title="click to add row"></th>
      </tr> 
    </thead>
    <!-- use JS to dynamically create rows  -->
  </table> 
 
 <?php
// An array of our competitors that you should not buy from! We will generate a table out of the 2D one. 
$competitors = array('Insomnia Cookies', 'Nabisco', 'Nestle','Betty Crocker','Sugar Shack'); 
   
$competitors2 = [ 'Brand' => 'Insomnia Cookies', 
				  'Brand2' => 'Nabisco',
				  'Brand3' => 'Nestle',
				  'Brand4' => 'Betty Crocker',
				  'Brand5' => 'Sugar Shack' ];    
?>
  
  
 <h6 class="w3-xlarge productsTitle"> Table of Our Competitors (who can't beat us!) </h6>
<table style="margin-left: 2%;" id="comptable" class="table" >
     <thead class="thead-dark">
      <tr>
		<th> Not here for it. </th>
		<th> Competitor Number </th> 
        <th> Competitor Name </th>
       </tr> 
    </thead>
	<?php foreach ($competitors2 as $x=>$y): ?>
	<tr>
		<td><img width="40px" height="40px" src="https://image.shutterstock.com/image-vector/forbidden-sign-confectionery-glyph-icon-260nw-749565586.jpg"/> </td> 
		<td> <?php echo ($x); ?></td>
		<td> <?php echo ($y); ?> </td>
	</tr>
	<?php endforeach; ?>
</table>
<script>

   
   // Check if string is an integer (a number) 
   function isInteger(str)
{
   var val = parseInt(str);
   return (val > 0);
}


 // Product data structure 
   
   function Product(t, c, p, d){
	this.title = t; 
	this.category = c; 
	this.price = p;
	this.description = d; 
	this.get_product_info = function(){
		return this.title + " | " + this.category + " | " + this.price + " | " + this.description; 
	};
   
   // Display information from form that the user typed as data structure 
   
   }
   function recordInfo() {
      var titlee = document.getElementById("fm-title").value;
      var categoryy = document.getElementById("fm-category").value;
      var pricee = document.getElementById("fm-price").value;
	  var descriptionn = document.getElementById("fm-description").value; 
      var Product1 = new Product(titlee, categoryy, pricee, descriptionn);
	  
	  if (!isInteger(pricee))
	   {
		  alert ("Price must be a number.");
	   }
   
	   else{
	  document.getElementById("YourProduct").innerHTML = "Your Product"; 
	  document.getElementById("more").innerHTML = "Product Title: " + Product1.title + "<br>" + "Product Category: " + Product1.category + "<br>" + "Product Price: " + Product1.price + "<br>" + "Product Description: " + Product1.description + "<br>";  
	  }
 
   }
   
</script>
  
  
  <br/><br/>