<?php 

// require: if a required file is not found, reqire() produces a fatal error, the rest of the script won't run
// include: if a required file is not found, include() thorws a warning, the rest of the script will run


// ----------------------- APPAREL --------------------------------------------
function drop_table_shop()
{
	global $db;
	$query = "DROP TABLE Apparel";
	
	$statement = $db->prepare($query);
	$statement->execute();
	$statement->closeCursor();
}


function addApparel($naming_pattern, $pattern, $price, $material, $theme, $apparel_size, $color, $article, $thrift, $brand)
{
	global $db;
	
	$query = "INSERT INTO Apparel(naming_pattern, pattern, price, material, theme, apparel_size, color, article, thrift, brand) VALUES (:naming_pattern, :pattern, :price, :material, :theme, :apparel_size, :color, :article, :thrift, :brand)";
	$statement = $db->prepare($query);
	$statement->bindValue(':naming_pattern', $naming_pattern);
	$statement->bindValue(':pattern', $pattern);
	$statement->bindValue(':price', $price);
    $statement->bindValue(':material', $material);
    $statement->bindValue(':theme', $theme);
	$statement->bindValue(':apparel_size', $apparel_size);
	$statement->bindValue(':color', $color);
	$statement->bindValue(':article', $article);
	$statement->bindValue(':thrift', $thrift);
	$statement->bindValue(':brand', $brand);
	$statement->execute();     
	
	$statement->closeCursor();
}

function updateApparel($naming_pattern, $pattern, $price, $material, $theme, $apparel_size, $color, $article, $thrift, $brand)
{
	global $db;
	
	
	$query = "UPDATE Apparel SET pattern=:pattern, price=:price, material=:material, theme=:theme, apparel_size=:apparel_size, color=:color, article=:article, thrift=:thrift, brand=:brand WHERE naming_pattern=:naming_pattern";
	$statement = $db->prepare($query);
	$statement->bindValue(':naming_pattern', $naming_pattern);
	$statement->bindValue(':pattern', $pattern);
	$statement->bindValue(':price', $price);
    $statement->bindValue(':material', $material);
    $statement->bindValue(':theme', $theme);
	$statement->bindValue(':apparel_size', $apparel_size);
	$statement->bindValue(':color', $color);
	$statement->bindValue(':article', $article);
	$statement->bindValue(':thrift', $thrift);
	$statement->bindValue(':brand', $brand);
	
	$statement->execute();
	$statement->closeCursor();
}

function deleteApparel($naming_pattern)
{
	global $db;
	
	$query = "DELETE FROM Apparel WHERE naming_pattern=:naming_pattern";
	$statement = $db->prepare($query);
	$statement->bindValue(':naming_pattern', $naming_pattern);
	$statement->execute();
	$statement->closeCursor();
}


function getAllApparel()
{
	global $db;
	$query = "SELECT * FROM Apparel";
	$statement = $db->prepare($query);
	$statement->execute();
	
	$results = $statement->fetchAll();
	
	$statement->closecursor();
	
	return $results;
}


function getApparel_by_NP($naming_pattern)
{
	global $db;
	
	
	$query = "SELECT * FROM Apparel where naming_pattern ='" . $naming_pattern . "'";
	$statement = $db->prepare($query);
	$statement->bindValue(':naming_pattern', $naming_pattern);
	$statement->execute();
	$results = $statement->fetch();
	
	// closes the cursor and frees the connection to the server so other SQL statements may be issued
	$statement->closecursor();
	
	return $results;
}

// ----------------------- MAKEUP --------------------------------------------

function drop_table_makeup()
{
	global $db;
	$query = "DROP TABLE Makeup";
	
	$statement = $db->prepare($query);
	$statement->execute();
	$statement->closeCursor();
}


function addMakeup($product_name, $price, $skincare, $face_area, $color, $brand, $vegan, $affordability)
{
	global $db;
	
	$query = "INSERT INTO Makeup(product_name, price, skincare, face_area,color, brand, vegan, affordability) VALUES (:product_name, :price, :skincare, :face_area,:color, :brand, :vegan, :affordability)";
	$statement = $db->prepare($query);
	$statement->bindValue(':product_name', $product_name);
	$statement->bindValue(':price', $price);
	$statement->bindValue(':skincare', $skincare);
    $statement->bindValue(':face_area', $face_area);
    $statement->bindValue(':color', $color);
	$statement->bindValue(':brand', $brand);
	$statement->bindValue(':vegan', $vegan);
	$statement->bindValue(':affordability', $affordability);
	$statement->execute();    
	
	$statement->closeCursor();
}

function updateMakeup($product_name, $price, $skincare, $face_area, $color, $brand, $vegan, $affordability)
{
	global $db;
	
	$query = "UPDATE Makeup SET product_name:=product_name, price:=price, skincare:=skincare, face_area:=face_area,color:=color, brand:=brand, vegan:=vegan, affordability:=affordability WHERE product_name := product_name";
	$statement = $db->prepare($query);
	$statement->bindValue(':product_name', $product_name);
	$statement->bindValue(':price', $price);
	$statement->bindValue(':skincare', $skincare);
    $statement->bindValue(':face_area', $face_area);
    $statement->bindValue(':color', $color);
	$statement->bindValue(':brand', $brand);
	$statement->bindValue(':vegan', $vegan);
	$statement->bindValue(':affordability', $affordability);
	
	$statement->execute();
	$statement->closeCursor();
}

function deleteMakeup($product_name)
{
	global $db;
	$query = "DELETE FROM Makeup WHERE product_name=:product_name";
	$statement = $db->prepare($query);
	$statement->bindValue(':product_name', $product_name);
	$statement->execute();
	$statement->closeCursor();
}


function getAllMakeup()
{
	global $db;
	$query = "SELECT * FROM Makeup";
	$statement = $db->prepare($query);
	$statement->execute();
	$results = $statement->fetchAll();
	$statement->closecursor();
	return $results;
}


function getMakeupByPN($product_name)
{
	global $db;
	
	$query = "SELECT * FROM Makeup where product_name = :product_name";
	$statement = $db->prepare($query);
	$statement->bindValue(':product_name', $product_name);
	$statement->execute();
	$results = $statement->fetch();
	$statement->closecursor();
	return $results;
}


function drop_table_review()
{
	global $db;
	$query = "DROP TABLE Review";
	
	$statement = $db->prepare($query);
	$statement->execute();
	$statement->closeCursor();
}


function addReview($review_number, $num_rating, $text_comment)
{
	global $db;
	
	$query = "INSERT INTO Review(review_number, num_rating, text_comment) VALUES (:review_number, :num_rating, :text_comment)";
	$statement = $db->prepare($query);
	$statement->bindValue(':review_number', $review_number);
	$statement->bindValue(':num_rating', $num_rating);
	$statement->bindValue(':text_comment', $text_comment);

	$statement->execute();     
	
	$statement->closeCursor();
}

function getAllReviews()
{
	global $db;
	$query = "SELECT * FROM Review";
	$statement = $db->prepare($query);
	$statement->execute();
	
	$results = $statement->fetchAll();
	
	$statement->closecursor();
	
	return $results;
}


function drop_table_PaymentInfo()
{
	global $db;
	$query = "DROP TABLE PaymentInfo";
	
	$statement = $db->prepare($query);
	$statement->execute();
	$statement->closeCursor();
}


function addPaymentInfo($username,$email, $card_number, $expiration, $cvv, $zip_code, $bank)
{
	global $db;
	
	$query = "INSERT INTO PaymentInfo(username,email, card_number, expiration, cvv, zip_code, bank) VALUES (:username,:email, :card_number, :expiration, :cvv, :zip_code, :bank)";
	$statement = $db->prepare($query);
	$statement->bindValue(':username', $username);
	$statement->bindValue(':email', $email);
	$statement->bindValue(':card_number', $card_number);
    $statement->bindValue(':expiration', $expiration);
    $statement->bindValue(':cvv', $cvv);
	$statement->bindValue(':zip_code', $zip_code);
	$statement->bindValue(':bank', $bank);

	$statement->execute();     
	
	$statement->closeCursor();
}

function drop_table_shopperuser()
{
	global $db;
	$query = "DROP TABLE Apparel";
	
	$statement = $db->prepare($query);
	$statement->execute();
	$statement->closeCursor();
}


function addShopperUser($username, $email, $first_name, $last_name, $phone_number, $password, $country_of_origin) 
{
	global $db;
	
	$query = "INSERT INTO ShopperUser(username, email, first_name, last_name,phone_number,password, country_of_origin) VALUES (:username, :email, :first_name, :last_name,:phone_number,:password, :country_of_origin)";
	$statement = $db->prepare($query);
	$statement->bindValue(':username', $username);
	$statement->bindValue(':email', $email);
	$statement->bindValue(':first_name', $first_name);
    $statement->bindValue(':last_name', $last_name);
    $statement->bindValue(':phone_number', $phone_number);
	$statement->bindValue(':password', $password);
	$statement->bindValue(':country_of_origin', $country_of_origin);
	$statement->execute();     
	
	$statement->closeCursor();
}


function drop_table_DeliveryDriverUser()
{
	global $db;
	$query = "DROP TABLE DeliveryDriverUser";
	
	$statement = $db->prepare($query);
	$statement->execute();
	$statement->closeCursor();
}


function addDeliveryDriverUser($employeeID, $first_last, $location, $pay, $work_status, $availability)
{
	global $db;
	
	$query = "INSERT INTO DeliveryDriverUser(employeeID, first_last, location, pay,work_status,availability) VALUES (:employeeID, :first_last, :location, :pay, :work_status,:availability)";
	$statement = $db->prepare($query);
	$statement->bindValue(':employeeID', $employeeID);
	$statement->bindValue(':first_last', $first_last);
	$statement->bindValue(':location', $location);
    $statement->bindValue(':pay', $pay);
    $statement->bindValue(':work_status', $work_status);
	$statement->bindValue(':availability', $availability);

	$statement->execute();     
	
	$statement->closeCursor();
}

// Relation delivers_to (Lookup by username or email)

function getDriverByEmail($email)
{
	global $db;
	
	
	$query = "SELECT * FROM delivers_to where email = :email";
	$statement = $db->prepare($query);
	$statement->bindValue(':email', $email);
	$statement->execute();
	$results = $statement->fetch();
	
	$statement->closecursor();
	
	return $results;
}

function getDriverByUsername($username)
{
	global $db;
	
	
	$query = "SELECT * FROM delivers_to where username = :username";
	$statement = $db->prepare($query);
	$statement->bindValue(':username', $username);
	$statement->execute();
	$results = $statement->fetch();
	
	$statement->closecursor();
	
	return $results;
}

function getDDUbyEmpID($employeeID)
{
	global $db;
	
	$query = "SELECT * FROM DeliveryDriverUser where employeeID = :employeeID";
	$statement = $db->prepare($query);
	$statement->bindValue(':employeeID', $employeeID);
	$statement->execute();
	$results = $statement->fetch();
	
	$statement->closecursor();
	
	return $results;
	
}

function getAlldelivers_to()
{
	global $db;
	$query = "SELECT * FROM delivers_to";
	$statement = $db->prepare($query);
	$statement->execute();
	
	$results = $statement->fetchAll();
	
	$statement->closecursor();
	
	return $results;
}


// FILTERING CLOTHING BY SIZE 

function filterBySize($size)
{
	global $db;
	
	$query = "SELECT * FROM Apparel WHERE apparel_size = :size";

	$statement = $db->prepare($query);
	$statement->bindValue(':size', $size);
	$statement->execute();
	$results = $statement->fetchAll();
	$statement->closecursor();
	return $results;
}


// SECURITY AND LOGIN 

function getAccountForUsername($username){
	global $db;
	
	$query = "SELECT password FROM ShopperUser WHERE username = :username";

	$statement = $db->prepare($query);
	$statement->bindValue(':username', $username);
	$statement->execute();
	$results = $statement->fetch();
	$statement->closecursor();
	return $results;
}

// ADVANCED SQL 

function implement_check(){
	
	global $db;
	$query = "ALTER TABLE Review ADD CHECK (num_rating<=10);";

	$statement = $db->prepare($query);
	$statement->execute();
	$results = $statement->fetchAll();
	$statement->closecursor();
	return $results;
}

function quickTrigger(){

	global $db;
	$query = "	DELIMITER $$
				CREATE TRIGGER defaultComment
				BEFORE INSERT ON Review
				FOR EACH ROW
				BEGIN
				SET new.text_comment = 'I enjoyed my experience.'; 
				END
				$$
				DELIMITER ;";

	$statement = $db->prepare($query);
	$statement->execute();
	$results = $statement->fetchAll();
	$statement->closecursor();
	return $results;
}


?>