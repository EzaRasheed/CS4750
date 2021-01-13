
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
 
 
 <?php

require('connectdb.php');
require('todo-db.php');

?>


<?php
$msg = '';
$task_to_update = '';

if (!empty($_POST['db-btn']))
{
   if ($_POST['db-btn'] == "Create")           {   create_table();  }
   else if ($_POST['db-btn'] == "Drop")        {   drop_table();    }  
   else if ($_POST['db-btn'] == "Insert")
   {
   	  if (!empty($_POST['item_id']) && !empty($_POST['p_name']) && !empty($_POST['category']) && !empty($_POST['price']) && !empty($_POST['description']))
         addProduct($_POST['item_id'], $_POST['p_name'], $_POST['category'], $_POST['price'], $_POST['description']);
	  else {
		  $msg = "Enter all Product's information to insert";
	  }
   }
     
   
   else if($_POST['db-btn'] == "Confirm-update")  
   {   	
   	  if (!empty($_POST['item_id']) && !empty($_POST['p_name']) && !empty($_POST['category']) && !empty($_POST['price']) && !empty($_POST['description']))
         updateTaskInfo($_POST['item_id'], $_POST['p_name'], $_POST['category'], $_POST['price'], $_POST['description']);
      else
         $msg = "Enter Product's information to update";
   }
}

if (!empty($_POST['action']))
{
   if ($_POST['action'] == "Update")
   {
      $task_to_update = getTaskInfo_by_id($_POST['item_id']);
   }      
   else if ($_POST['action'] == "Delete")
   {
      if (!empty($_POST['item_id']) )
         deleteApparel($_POST['item_id']);
   }
}

$tasks = getAllTasks();

?>

<form action="ProductPage2.php" method="post">  
	<div class="form-group">
      <label for="item_id"> Product ID </label>
      <input type="text" name="item_id" class="form-control" 
             value="<?php if (!empty($task_to_update)) echo $task_to_update['item_id'] ?>" />        
   </div>      
   <div class="form-group">
      <label for="p_name"> Product Name </label>
      <input type="text" name="p_name" class="form-control" 
             value="<?php if (!empty($task_to_update)) echo $task_to_update['p_name'] ?>" />        
   </div>     
   <div class="form-group">
      <label for="category">Category</label>  
      <input type="text" name="category" class="form-control" 
             value="<?php if (!empty($task_to_update)) echo $task_to_update['category'] ?>" />  
   </div>      
   <div class="form-group">
      <label for="price">Price</label>  
      <input type="text" name="price" class="form-control" 
             value="<?php if (!empty($task_to_update)) echo $task_to_update['price'] ?>" />  
   </div>    
   <div class="form-group">
      <label for="description">Description</label>  
      <input type="text" name="description" class="form-control" 
             value="<?php if (!empty($task_to_update)) echo $task_to_update['description'] ?>" />  
   </div>    
   
   <!--<input type="hidden" name="item_id" value="<?php if (!empty($task_to_update)) echo $task_to_update['item_id'] ?>" />     -->         

   <div class="form-group">
      <input type="submit" value="Create" class="btn btn-dark" name="db-btn" title="Create 'products' table"/>
      <input type="submit" value="Drop" class="btn btn-dark" name="db-btn" title="Drop 'products' table" />
      <input type="submit" value="Insert" class="btn btn-dark" name="db-btn" title="Insert into 'products' table" />
      <input type="submit" value="Confirm-update" class="btn btn-dark" name="db-btn" title="Update 'products' info" />
      <small class="text-danger"><?php echo $msg ?></small>
   </div>  
</form>

<h4> Product Table </h4>
    <table class="table table-striped table-bordered">
      <tr>
	  <th>Item ID</th>
		<th>Product Name</th>
		<th>Product Category</th>
        <th>Product Price</th>
        <th>Product Description</th>
        <th>Update?</th>
        <th>Delete?</th>
      </tr>      
      <?php foreach ($tasks as $task): ?>
      <tr>
		<td>
          <?php echo $task['item_id']; // refer to column name in the table ?> 
        </td>
		<td>
          <?php echo $task['p_name']; // refer to column name in the table ?> 
        </td>
        <td>
          <?php echo $task['category']; // refer to column name in the table ?> 
        </td>
        <td>
          <?php echo $task['price']; ?> 
        </td>        
        <td>
          <?php echo $task['description']; ?> 
        </td>                
        <td>
          <form action="ProductPage2.php" method="post">
            <input type="submit" value="Update" name="action" class="btn btn-primary" />             
            <input type="hidden" name="item_id" value="<?php echo $task['item_id'] ?>" />
          </form> 
        </td>                        
        <td>
          <form action="ProductPage2.php" method="post">
            <input type="submit" value="Delete" name="action" class="btn btn-danger" />      
            <input type="hidden" name="item_id" value="<?php echo $task['item_id'] ?>" />
          </form>
        </td>                                
      </tr>
      <?php endforeach; ?>
    </table>
    
</div>    

<?php 

// isset() takes the name of a variable as its argument and
// return TRUE only if that variable value is not NULL
// (thus, ensuring that the variable has been set with some value)

// Empty form fields will be NULL unless the user has entered a value.

// empty() accepts a variable argument and
// returns TRUE if its value is an empty string, zero, NULL or FALSE

?>


  
  <br/><br/>