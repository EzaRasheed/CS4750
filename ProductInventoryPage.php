
<!DOCTYPE html>
<html>
<head>
<title>Pari Fits and Fashion</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title> Pari Fits and Fashion </title>
    <script> src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
  color: #483f51; 
}

.ReviewTitle{
	text-align: center;
    align- center;
	font-family: "Lobster", serif;
    color: #56C7E1;
	 align: center; 
	 margin-left: 10%; 
}
.ulBottomNav {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #DCD7DA;
  display: flex;
  justify-content: space-around;
}
.liBottomNav {
  float: left;
}
.liBottomNav a {
  display: block;
  color: #483f51;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-family:"Palatino Linotype", "Book Antiqua", Palatino, serif;
}
.liBottomNav a:hover {
  background-color: #111;
  color: #FFFFFF; 
}

.upperNav{
  background-color: #DCD7DA;
}
.upperNavTabs{
	color: #483f51; 
	font-family:"Palatino Linotype", "Book Antiqua", Palatino, serif;
}

.upperNavTabs a:hover {
  color: #483f51;
  font-family: "Impact", Charcoal, sans-serif;
  font-size:2vw;
  
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
	h3{ color: orange;}
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

#changeImage1{
	background-image: url('https://i.pinimg.com/736x/21/16/5b/21165bb1003cd3059f2e05e95f1fc118.jpg');
	background-size: contain;
	background-size: cover;
	background-position: center;
}
#changeImage1:hover{
	background-image: url('https://img.ltwebstatic.com/images3_pi/2020/01/03/15780205276f2ed8857f4d4c48d86a5a702e88137b.webp');
    background-size: contain;
	background-size: cover;
	background-position: center;
}

#changeImage2{
	background-image: url('https://images.unsplash.com/photo-1581338834647-b0fb40704e21?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80');
	background-size: contain;
	background-size: cover;
	background-position: center;
	padding-left: 10px; 
	padding-right: 10px;

}

#changeImage2:hover{
	background-image: url('https://ae01.alicdn.com/kf/HTB12whuj46I8KJjSszfq6yZVXXaY/SHEIN-Autumn-Floral-Women-Dresses-Multicolor-Elegant-Long-Sleeve-High-Waist-A-Line-Chic-Dress-Ladies.jpg');
    background-size: contain;
	background-size: cover;
	background-position: center;
	padding-left: 10px; 
	padding-right: 10px;
	
}

#changeImage3:hover{
	background-image: url('https://i.pinimg.com/originals/43/48/73/4348734d7323b2772986c75eec4086a9.jpg'); 
	background-size: contain;
	background-size: cover;
	background-position: center;
	padding-left: 10px; 
	padding-right: 10px;

}


#changeImage3{
	background-image: url('https://media.macphun.com/img/uploads/macphun/blog/682/blackbackground.jpg?q=75&w=1710&h=906&resize=cover');
    background-size: contain;
	background-size: cover;
	background-position: center;
	padding-left: 10px; 
	padding-right: 10px;
	
}

textarea {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    width: 100%;
	
}
.overflow-hidden { overflow: hidden; }

</style>

<body class="imgex" style="background-color: #E3E6E7;">

<!-- Nav Bar --> 

<nav class="navbar navbar-expand-md upperNav">
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
		<ul class="navbar-nav mr-auto">
		<li>
				<img src="Logo.PNG" style="width:60px; height: 40px; margin-left: 10px;">
			<li>
        </ul>
		<h3 class="w3-xlarge w3-lobster">Welcome to Pari!</h3>
		<ul class="navbar-nav ml-auto">
            <li class="nav-item upperNavTabs">
                <a class="nav-link upperNavTabs" href="/pari/Login.php">Login</a>
            </li>
            <li class="nav-item upperNavTabs">
                <a class="nav-link upperNavTabs" href="#">Cart <i class="fa fa-shopping-cart" style="font-size:15px;color:white"></i></a>
            </li>
        </ul>
    </div>
</nav>

<ul class="ulBottomNav">
  <li class="liBottomNav"><a onclick="displayConfirm()" class="active" href="/pari/HomePage.php">Home</a></li>
  <li class="liBottomNav"><a href="/pari/Shop.php">Shop Clothing</a></li>
  <li class="liBottomNav"><a href="/pari/Makeup.php">Shop Makeup</a></li>
  <li class="liBottomNav"><a href="/pari/Reviews.php">Review Page</a></li>
  <li class="liBottomNav"><a href="/pari/ShopperUser.php">Create ShopperUser Account</a></li>
  <li class="liBottomNav"><a href="/pari/DeliveryDriverUser.php">DeliveryDriver Lookup</a></li>
  <li class="liBottomNav"><a href="/pari/ProductInventoryPage.php">Product Inventory Page</a></li>'
</ul>

<?php



$msg = '';

require("connectdb.php"); 
require("todo-db.php"); 


$apparels = getAllApparel();
$a_to_update = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	if (!empty($_POST['action']) && ($_POST['action'] == 'Update'))
	{
		$a_to_update = getApparel_by_NP($_POST['a_to_update']);
	}
	else if (!empty($_POST['action']) && ($_POST['action'] == 'Add'))
	{
		if (!empty($_POST['naming_pattern']) && !empty($_POST['pattern']) && !empty($_POST['price']) && !empty($_POST['material']) && !empty($_POST['theme']) && !empty($_POST['apparel_size']) 
		  && !empty($_POST['color']) && !empty($_POST['article']) && !empty($_POST['thrift']) && !empty($_POST['brand'])){
			quickCOOTrigger(); 
			addApparel($_POST['naming_pattern'], $_POST['pattern'], $_POST['price'], $_POST['material'], $_POST['theme'], $_POST['apparel_size'], $_POST['color'], $_POST['article'], $_POST['thrift'], $_POST['brand']);
			$apparels = getAllApparel();
		}	
	}
	else if (!empty($_POST['action']) && $_POST['action'] == 'Delete')
	{
		deleteApparel($_POST['a_to_delete']);
		$apparels = getAllApparel();
	}
	
	if (!empty($_POST['action']) && ($_POST['action'] == 'Confirm update'))
	{
		updateApparel($_POST['naming_pattern'], $_POST['pattern'], $_POST['price'], $_POST['material'], $_POST['theme'], $_POST['apparel_size'],$_POST['color'], $_POST['article'], $_POST['thrift'], $_POST['brand']);
		$apparels = getAllApparel();
	}
}

?>

<br><br>

<div class="row">
	<div class="col-sm-1"></div>
	<div class="col-sm-10">
		<form action="ProductInventoryPage.php" method="post">  
			<div class="form-group">
			  <label for="naming_pattern"> Naming Pattern </label>
			  <input type="text" name="naming_pattern" class="form-control" 
					 value="<?php if ($a_to_update != null) echo $a_to_update['naming_pattern'] ?>" />        
		   </div>      
		   <div class="form-group">
			  <label for="pattern"> Pattern </label>
			  <input type="text" name="pattern" class="form-control" 
					 value="<?php if ($a_to_update != null) echo $a_to_update['pattern'] ?>" />        
		   </div>     
		   <div class="form-group">
			  <label for="price">Price</label>  
			  <input type="number" name="price" class="form-control" 
					 value="<?php if ($a_to_update != null) echo $a_to_update['price'] ?>" />  
		   </div>      
		   <div class="form-group">
			  <label for="material">Material</label>  
			  <input type="text" name="material" class="form-control" 
					 value="<?php if ($a_to_update != null) echo $a_to_update['material'] ?>" />  
		   </div>    
		   <div class="form-group">
			  <label for="theme">Theme</label>  
			  <input type="text" name="theme" class="form-control" 
					 value="<?php if ($a_to_update != null) echo $a_to_update['theme'] ?>" />  
		   </div>
		   <div class="form-group">
			  <label for="apparel_size">Size</label>  
			  <input type="text" name="apparel_size" class="form-control" 
					 value="<?php if ($a_to_update != null) echo $a_to_update['apparel_size'] ?>" />  
		   </div>    
		   <div class="form-group">
			  <label for="color">Color</label>  
			  <input type="text" name="color" class="form-control" 
					 value="<?php if ($a_to_update != null) echo $a_to_update['color'] ?>" />  
		   </div>   
		   <div class="form-group">
			  <label for="article">Article</label>  
			  <input type="text" name="article" class="form-control" 
					 value="<?php if ($a_to_update != null) echo $a_to_update['article'] ?>" />  
		   </div>   
		   <div class="form-group">
			  <label for="thrift">Thrift</label>  
			  <input type="text" name="thrift" class="form-control" 
					 value="<?php if ($a_to_update != null) echo $a_to_update['thrift'] ?>" />  
		   </div>   
		   <div class="form-group">
			  <label for="brand">Brand</label>  
			  <input type="text" name="brand" class="form-control" 
					 value="<?php if ($a_to_update != null) echo $a_to_update['brand'] ?>" />  
		   </div>  
		   
		 
		   <div class="form-group">
			   <input type="submit" value="Add" name="action" class="btn btn-dark" title="Insert a apparel into a Apparel table" />
			  <input type="submit" value="Confirm update" name="action" class="btn btn-dark" title="Confirm update an apparel" />
			 <small class="text-danger"><?php echo $msg ?></small>
		   </div>  
		</form>



		<h4> Apparel Table </h4>
			<table class="table table-striped table-bordered">
			  <tr>
				<th>Naming Pattern</th>
				<th>Pattern</th>
				<th>Price</th>
				<th>Material</th>
				<th>Theme</th>
				<th>Size</th>
				<th>Color</th>
				<th>Article</th>
				<th>Thrift</th>
				<th>Brand</th>
				<th>Update</th>
				<th>Delete</th>
			  </tr>      
			  <?php getAllApparel(); foreach ($apparels as $a): ?>
			  <tr>
				<td>
				  <?php echo $a['naming_pattern']; // refer to column name in the table ?> 
				</td>
				<td>
				  <?php echo $a['pattern']; // refer to column name in the table ?> 
				</td>
				<td>
				  <?php echo $a['price']; // refer to column name in the table ?> 
				</td>
				<td>
				  <?php echo $a['material']; ?> 
				</td>        
				<td>
				  <?php echo $a['theme']; ?> 
				</td>   
				<td>
				  <?php echo $a['apparel_size']; ?> 
				</td> 
				<td>
				  <?php echo $a['color']; ?> 
				</td> 
				<td>
				  <?php echo $a['article']; ?> 
				</td> 
				<td>
				  <?php echo $a['thrift']; ?> 
				</td> 
				<td>
				  <?php echo $a['brand']; ?> 
				</td> 
				<td>
				  <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
					<input type="submit" value="Update" name="action" class="btn btn-primary" />             
					<input type="hidden" name="a_to_update" value="<?php echo $a['naming_pattern'] ?>" />
				  </form> 
				</td>                        
				<td>
				  <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
					<input type="submit" value="Delete" name="action" class="btn btn-danger" />      
					<input type="hidden" name="a_to_delete" value="<?php echo $a['naming_pattern'] ?>" />
				  </form>
				</td>                                
			  </tr>
			  <?php endforeach; ?>
			</table>
			
			 </div>
		  <div class="col-sm-4"></div>
		  <div class="col-sm-4"></div>
		  </div>

		 
	   </div>  

</body>
</html>