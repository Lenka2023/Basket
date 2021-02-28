<?php session_start();
error_reporting(-1);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
		<title>HTML5 Local Storage Project</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="rating" content="General">
<meta name="expires" content="never">
<meta name="language" content="English, EN">
<meta name="description" content="Shopping cart project with HTML5 and JavaScript">
<meta name="keywords" content="HTML5,CSS,JavaScript, html5 session storage, html5 local storage">
<meta name="author" content="dcwebmakers.com">
<script src="Storage.js"></script>
<link rel="stylesheet" href="StorageStyle.css">
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src="js/jquery-1.12.2.min.js"></script>
		        <link rel="stylesheet" href="css/style.css"type="text/css"/>
				
        
        
       
	</head>
    <body onload="doShowAll()">
		<div class="middle">
		
						
						  
						 
					
  <?php
interface Basket{
		public function Add();
		public function Delete();
		public function Pay();
	}
	abstract class Product{
	protected	$_count;
	
	
	
			
	public function Add()
			{
				$this->_count=$this->_count+1;
				 var_dump($this->_count);
			}
				
			
			
			public function Delete()
			{
				$this->_count=$this->_count-1;
				var_dump($this->_count);
			}
	}
		  class Apple extends Product{
			function	__construct()
    {
		$this->_count = 0;
    }
			
			
			public function Pay()
			{
				$count=$this->_count;
				$db=new mysqli('localhost', 'root', '', "abc_hosting");
				if(mysqli_connect_errno()){
					printf("Error connect to DB:%S\n",mysqli_error($db));
					exit();
											}
				$query30="SELECT Previous_balance FROM `balance` ";
				$result30 = mysqli_query($db, $query30);	
				$previous_balance = mysqli_fetch_array($result30);							
				$query2="SELECT Cost FROM `products` WHERE Product='Apple'";
				$result2 = mysqli_query($db, $query2);
				$appcost = mysqli_fetch_array($result2);	
				$total_purchase_cost=$appcost[0]*$count;
				if((isset($_POST['shiping']))&&(!empty($_POST['shiping']))&&($_POST['shiping']=='ups')){
					$ups=0.5;
					$total_purchase_cost=$total_purchase_cost+$ups;
				}
				$remaining_balance=$previous_balance[0]-$total_purchase_cost;
				$query60="UPDATE `balance` SET Previous_balance = $remaining_balance ";
				$result60=mysqli_query($db, $query60);
				$query65="UPDATE `balance` SET remaining_balance = $remaining_balance ";
				$result65=mysqli_query($db, $query65);		
				$query21="UPDATE `balance` SET total_purchase_cost = $total_purchase_cost ";
				$result21=mysqli_query($db, $query21);
			}
			
		
		}
		 class Beer extends Product{
			function	__construct()
    {
		$this->_count = 0;
    }	
			
			
			
			public function Pay()
			{
				$count=$this->_count;
				$db=new mysqli('localhost', 'root', '', "abc_hosting");
				if(mysqli_connect_errno()){
					printf("Error connect to DB:%S\n",mysqli_error($db));
					exit();
											}
				$query30="SELECT Previous_balance FROM `balance` ";
				$result30 = mysqli_query($db, $query30);	
				$previous_balance = mysqli_fetch_array($result30);								
				$query3="SELECT Cost FROM `products` WHERE Product='Beer'";
				$result3 = mysqli_query($db, $query3);
				$beercost = mysqli_fetch_array($result3);	
				$total_purchase_cost=$beercost[0]*$count;
				if((isset($_POST['shiping']))&&(!empty($_POST['shiping']))&&($_POST['shiping']=='ups')){
					$ups=0.5;
					$total_purchase_cost=$total_purchase_cost+$ups;
				}
				$remaining_balance=$previous_balance[0]-$total_purchase_cost;
				$query60="UPDATE `balance` SET Previous_balance = $remaining_balance ";
				$result60=mysqli_query($db, $query60);
				$query65="UPDATE `balance` SET remaining_balance = $remaining_balance ";
				$result65=mysqli_query($db, $query65);		
				$query21="UPDATE `balance` SET total_purchase_cost = $total_purchase_cost ";
				$result21=mysqli_query($db, $query21);
						
			}
			
			
			
		}
		 class Water extends Product{
			function	__construct()
    {
		$this->_count = 0;
    }
			
			public function Pay()
			{
				$count=$this->_count;
				$db=new mysqli('localhost', 'root', '', "abc_hosting");
				if(mysqli_connect_errno()){
					printf("Error connect to DB:%S\n",mysqli_error($db));
					exit();
											}
				$query30="SELECT Previous_balance FROM `balance` ";
				$result30 = mysqli_query($db, $query30);	
				$previous_balance = mysqli_fetch_array($result30);								
				$query4="SELECT Cost FROM `products` WHERE Product='Water'";
				$result4 = mysqli_query($db, $query4);
				$watercost = mysqli_fetch_array($result4);	
				$total_purchase_cost=$watercost[0]*$count;
				if((isset($_POST['shiping']))&&(!empty($_POST['shiping']))&&($_POST['shiping']=='ups')){
					$ups=0.5;
					$total_purchase_cost=$total_purchase_cost+$ups;
				}
				$remaining_balance=$previous_balance[0]-$total_purchase_cost;
				$query60="UPDATE `balance` SET Previous_balance = $remaining_balance ";
				$result60=mysqli_query($db, $query60);
				$query65="UPDATE `balance` SET remaining_balance = $remaining_balance ";
				$result65=mysqli_query($db, $query65);		
				$query21="UPDATE `balance` SET total_purchase_cost = $total_purchase_cost ";
				$result21=mysqli_query($db, $query21);		}
			
			
		}
		 class Cheese extends Product{
			function	__construct()
    {
		$this->_count = 0;
    }	
			
			public function Pay()
			{
				$count=$this->_count;
				$db=new mysqli('localhost', 'root', '', "abc_hosting");
				if(mysqli_connect_errno()){
					printf("Error connect to DB:%S\n",mysqli_error($db));
					exit();
											}
				$query30="SELECT Previous_balance FROM `balance` ";
				$result30 = mysqli_query($db, $query30);	
				$previous_balance = mysqli_fetch_array($result30);								
				$query5="SELECT Cost FROM `products` WHERE Product='Сheese'";
				$result5 = mysqli_query($db, $query5);
				$cheesecost = mysqli_fetch_array($result5);	
				$total_purchase_cost=$cheesecost[0]*$count;
				if((isset($_POST['shiping']))&&(!empty($_POST['shiping']))&&($_POST['shiping']=='ups')){
					$ups=0.5;
					$total_purchase_cost=$total_purchase_cost+$ups;
				}
				$remaining_balance=$previous_balance[0]-$total_purchase_cost;
				$query60="UPDATE `balance` SET Previous_balance = $remaining_balance ";
				$result60=mysqli_query($db, $query60);
				$query65="UPDATE `balance` SET remaining_balance = $remaining_balance ";
				$result65=mysqli_query($db, $query65);		
				$query21="UPDATE `balance` SET total_purchase_cost = $total_purchase_cost ";
				$result21=mysqli_query($db, $query21);			}
			
		}
		
function Add1(){
	$apple = NULL;
	if(isset($_SESSION['apples'])){
		$apple = $_SESSION["apples"];
}
	else{
		$apple=new Apple(); $_SESSION["apples"] = $apple;
	}
	echo $apple->Add();
	}
function Delete1(){
	$apple = NULL;
	if(isset($_SESSION['apples'])){
		$apple = $_SESSION["apples"];
	}
	else{
		$apple=new Apple(); $_SESSION["apples"] = $apple;
	}
	echo $apple->Delete();
}
function Pay1(){
	$apple = NULL;
	if(isset($_SESSION['apples'])){
		$apple = $_SESSION["apples"];
	}
	else{
		$apple=new Apple(); $_SESSION["apples"] = $apple;
	}
	echo $apple->Pay();
}
			
function Add2(){
	$beer = NULL;
	if(isset($_SESSION['beers'])){
		$beer = $_SESSION["beers"];
	}
	else{
		$beer=new Beer(); $_SESSION["beers"] = $beer;
	}
	echo $beer->Add();
}
function Delete2(){
	$beer = NULL;
	if(isset($_SESSION['beers'])){
		$beer = $_SESSION["beers"];
	}
	else{
		$beer=new Beer(); $_SESSION["beers"] = $beer;
	}
	echo $beer->Delete();
}
function Pay2(){
	$beer = NULL;
	if(isset($_SESSION['beers'])){
		$beer = $_SESSION["beers"];
	}
	else{
		$beer=new Beer(); $_SESSION["beers"] = $beer;
	}
	echo $beer->Pay();
}
			
function Add3(){
	$water = NULL;
	if(isset($_SESSION['waters'])){
		$water = $_SESSION["waters"];
	}
	else{
		$water=new Water(); $_SESSION["waters"] = $water;
	}
	echo $water->Add();
}			
function Pay3(){
	$water = NULL;
	if(isset($_SESSION['waters'])){
		$water = $_SESSION["waters"];
	}
	else{
		$water=new Water(); $_SESSION["waters"] = $water;
	}
	echo $water->Pay();
}		
function Delete3(){
	$water = NULL;
	if(isset($_SESSION['waters'])){
		$water = $_SESSION["waters"];
	}
	else{
		$water=new Water(); $_SESSION["waters"] = $water;
	}
	echo $water->Delete();
}		
			
function Add4(){
	$cheese = NULL;
	if(isset($_SESSION['cheeses'])){
		$cheese = $_SESSION["cheeses"];
	}
	else{
		$cheese=new Cheese(); $_SESSION["cheeses"] = $cheese;
	}
	echo $cheese->Add();
	}						
	function Delete4(){
		$cheese = NULL;
		if(isset($_SESSION['cheeses'])){
			$cheese = $_SESSION["cheeses"];
		}
		else{
			$cheese=new Cheese(); $_SESSION["cheeses"] = $cheese;
		}
		echo $cheese->Delete();
}				
function Pay4(){
	$cheese = NULL;
	if(isset($_SESSION['cheeses'])){
		$cheese = $_SESSION["cheeses"];
	}
	else{
		$cheese=new Cheese(); $_SESSION["cheeses"] = $cheese;
	}
	echo $cheese->Pay();
}			
					 			

//--------------------------------------------------------------------------------------------------------------------------
if(array_key_exists('add',$_POST)){
		if((isset($_POST['product']))&&(!empty($_POST['product']))&&($_POST['product']=='cheese')) {
			var_dump("add Cheese");
			Add4();
			}
		if((isset($_POST['product']))&&(!empty($_POST['product']))&&($_POST['product']=='water')) {
			var_dump("add Water");
			Add3();
				}
		if((isset($_POST['product']))&&(!empty($_POST['product']))&&($_POST['product']=='beer')) {
			var_dump("add Beer");
			Add2();
				}
	if((isset($_POST['product']))&&(!empty($_POST['product']))&&($_POST['product']=='apple')) {
		Add1();
		var_dump("add Apple");	
						}
}			
//--------------------------------------------------------------------------------------------------------------------------
if(array_key_exists('delete',$_POST)){
	if((isset($_POST['product']))&&(!empty($_POST['product']))&&($_POST['product']=='cheese')) {
		var_dump("delete Cheese");
		Delete4();
			}
	if((isset($_POST['product']))&&(!empty($_POST['product']))&&($_POST['product']=='water')) {
		var_dump("delete Water");
		Delete3();
			}	
	if((isset($_POST['product']))&&(!empty($_POST['product']))&&($_POST['product']=='beer')) {
		var_dump("delete Beer");
		Delete2();
			}	
	if((isset($_POST['product']))&&(!empty($_POST['product']))&&($_POST['product']=='apple')) {
		var_dump("delete Apple");	
		Delete1();
			}	
			}	 
//--------------------------------------------------------------------------------------------------------------------------
 if(array_key_exists('pay',$_POST)){
	if((isset($_POST['product']))&&(!empty($_POST['product']))&&($_POST['product']=='cheese')) {
		var_dump("pay Cheese");
		Pay4();
		if((!isset($_POST['shiping']))&&(empty($_POST['shiping']))){
		echo "Please select shiping";
}
			}
	if((isset($_POST['product']))&&(!empty($_POST['product']))&&($_POST['product']=='water')) {
		var_dump("pay Water");
		Pay3();
		if((!isset($_POST['shiping']))&&(empty($_POST['shiping']))){
		echo "Please select shiping";
}
			}
	if((isset($_POST['product']))&&(!empty($_POST['product']))&&($_POST['product']=='beer')) {
		var_dump("pay Beer");
		Pay2();
		if((!isset($_POST['shiping']))&&(empty($_POST['shiping']))){
		echo "Please select shiping";
}
			}
	if((isset($_POST['product']))&&(!empty($_POST['product']))&&($_POST['product']=='apple')) {
		var_dump("pay Apple");	
		Pay1();
		if((!isset($_POST['shiping']))&&(empty($_POST['shiping']))){
		echo "Please select shiping ";
}
			}
}				
//--------------------------------------------------------------------------------------------------------------------------
$db=new mysqli('localhost', 'root', '', "abc_hosting");
	if(mysqli_connect_errno()){
		printf("Error connect to DB:%S\n",mysqli_error($db));
		exit();
								}
$rateapple= Array();
if(!isset($_SESSION['mypage_view']))
{
     $_SESSION['mypage_view'] = 1;   
} else {
     //check if this is not the first time the page has been viewed
     if(isset($_SESSION['mypage_view'])) {								
if(isset($_POST['apple'])){
	$apple_rate=$_POST['apple'];
	$query6="INSERT INTO `apple_rate`(apple_rate) VALUES ('$apple_rate')";
	$result6=mysqli_query($db, $query6);
	$query7="SELECT MAX(id) FROM `apple_rate`";
	$result7=mysqli_query($db, $query7);
	$n = mysqli_fetch_array($result7);
	$query8="SELECT apple_rate FROM `apple_rate` ";
	$result8=mysqli_query($db, $query8);
	$qtyapp= 0;
while ($num = mysqli_fetch_assoc ($result8)) {
    $qtyapp += $num['apple_rate'];
}
	$middleapple=$qtyapp/$n[0];
	var_dump($middleapple);
		$query20="UPDATE `products` SET Rate = $middleapple WHERE Product = 'Apple'";
        $result20=mysqli_query($db, $query20);
	
}}}
	//--------------------------------------------------------------------------------------------------------------------------
$ratebeer= Array();
if(!isset($_SESSION['mypage_view']))
{
     $_SESSION['mypage_view'] = 1;   
} else {
if(isset($_SESSION['mypage_view'])) {		
if(isset($_POST['beer'])){
	$beer_rate=$_POST['beer'];
	var_dump($beer_rate);
	$query11="INSERT INTO `beer_rate`(beer_rate) VALUES ('$beer_rate')";
	$result11=mysqli_query($db, $query11);
	$query12="SELECT MAX(id) FROM `beer_rate`";
	$result12=mysqli_query($db, $query12);
	
	$n = mysqli_fetch_array($result12);
	var_dump($n[0]);
	$query10="SELECT beer_rate FROM `beer_rate` ";
	$result10=mysqli_query($db, $query10);
	$qtybee= 0;
while ($num = mysqli_fetch_assoc ($result10)) {
    $qtybee += $num['beer_rate'];
}

	
	$middlebeer=$qtybee/$n[0];
	var_dump($middlebeer);
	$query21="UPDATE `products` SET Rate = $middlebeer WHERE Product = 'Beer'";
        $result21=mysqli_query($db, $query21);
	 $_SESSION['didit'] = true; 
}}}
	//--------------------------------------------------------------------------------------------------------------------------
$ratewater= Array();
if(!isset($_SESSION['mypage_view']))
{
     $_SESSION['mypage_view'] = 1;   
} else {
if(isset($_SESSION['mypage_view'])) {									
if(isset($_POST['water'])){
	$water_rate=$_POST['water'];
	var_dump($water_rate);
	$query16="INSERT INTO `water_rate`(water_rate) VALUES ('$water_rate')";
	$result16=mysqli_query($db, $query16);
	$query17="SELECT MAX(id) FROM `water_rate`";
	$result17=mysqli_query($db, $query17);
	
	$n = mysqli_fetch_array($result17);
	var_dump($n[0]);
	$query18="SELECT water_rate FROM `water_rate` ";
	$result18=mysqli_query($db, $query18);
	$qtyw= 0;
while ($num = mysqli_fetch_assoc ($result18)) {
    $qtyw += $num['water_rate'];
}

	
	$middlewater=$qtyw/$n[0];
	var_dump($middlewater);
	$query22="UPDATE `products` SET Rate = $middlewater WHERE Product = 'Water'";
        $result22=mysqli_query($db, $query22);
	  
}}}
//--------------------------------------------------------------------------------------------------------------------------
$ratecheese= Array();
if(!isset($_SESSION['mypage_view']))
{
     $_SESSION['mypage_view'] = 1;   
} else {
if(isset($_SESSION['mypage_view'])) {									
if(isset($_POST['cheese'])){
	$cheese_rate=$_POST['cheese'];
	var_dump($cheese_rate);
	$query13="INSERT INTO `cheese_rate`(cheese_rate) VALUES ('$cheese_rate')";
	$result13=mysqli_query($db, $query13);
	$query14="SELECT MAX(id) FROM `cheese_rate`";
	$result14=mysqli_query($db, $query14);
	
	$n = mysqli_fetch_array($result14);
	var_dump($n[0]);
	$query15="SELECT cheese_rate FROM `cheese_rate` ";
	$result15=mysqli_query($db, $query15);
	$qtyc= 0;
while ($num = mysqli_fetch_assoc ($result15)) {
    $qtyc += $num['cheese_rate'];
}

	
	$middlecheese=$qtyc/$n[0];
	var_dump($middlecheese);
	$query23="UPDATE `products` SET Rate = $middlecheese WHERE Product = 'Сheese'";
        $result23=mysqli_query($db, $query23);
	 
}}}
//--------------------------------------------------------------------------------------------------------------------------

$db=new mysqli('localhost', 'root', '', "abc_hosting");
	if(mysqli_connect_errno()){
		printf("Error connect to DB:%S\n",mysqli_error($db));
		exit();
								}
$query26="SELECT Rate FROM `products` WHERE Product='Apple'";
$result26 = mysqli_query($db, $query26);
$applerate = mysqli_fetch_array($result26);
$query27="SELECT Rate FROM `products` WHERE Product='Beer'";
$result27= mysqli_query($db, $query27);
$beerrate = mysqli_fetch_array($result27);								
$query28="SELECT Rate FROM `products` WHERE Product='Water'";
$result28= mysqli_query($db, $query28);
$waterrate = mysqli_fetch_array($result28);
$query29="SELECT Rate FROM `products` WHERE Product='Сheese'";
$result29= mysqli_query($db, $query29);
$cheeserate = mysqli_fetch_array($result29);
$query30="SELECT Previous_balance FROM `balance` ";
$result30 = mysqli_query($db, $query30);	
$previous_balance = mysqli_fetch_array($result30);
$query31="SELECT total_purchase_cost FROM `balance` ";
$result31= mysqli_query($db, $query31);	
$total_purchase_cost = mysqli_fetch_array($result31);
$query32="SELECT remaining_balance FROM `balance` ";
$result32= mysqli_query($db, $query32);	
$remaining_balance = mysqli_fetch_array($result32);		
?>  
					<form name="ShoppingList" action="index.php" method="POST">
						<p><b>Please select your product:</b></p>
						  <input type="radio" id="apple" name="product" value="apple">
						  <label for="apple">Apple</label><br>
						  
						  <input type="radio" id="beer" name="product" value="beer">
						  <label for="beer">Beer</label><br>
						  
						  <input type="radio" id="water" name="product" value="water">
						  <label for="water">Water</label><br>
						  
						  <input type="radio" id="cheese" name="product" value="cheese">
						  <label for="cheese">Cheese</label><br>
						   <input type="submit" name="pay"  value="Pay" />
							<input type="submit" name="delete" onclick="RemoveItem()"value="Delete" />
							<input type="submit" name="add" onclick="SaveItem()" value="Add">
							 <div id="items_table">
								<h3>Shopping List</h3>
								<table id="list"></table>
								<p>
									<label><input type=button value="Clear" onclick="ClearAll()">
										<i>* Delete all items</i></label>
								</p>
							</div>
						</form>  
					
					  <form action="index.php" method="post">
						  <label for="rate">Choose a rate for apple:</label>
						  <select name="apple" id="rate">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						  </select>
  						 <input type="submit" value="Submit">
					  </form>
						 <div><b>Applerate:</b><div style=" display:inline-block"; class="applerate"><?php echo$applerate[0]?></div></div>
					  <form action="index.php" method="post">
						  <label for="rate">Choose a rate for beer:</label>
						  <select name="beer" id="rate">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						  </select>
  						 <input type="submit" value="Submit">
					  </form>
						  <div><b>Beerrate:</b><div style="display:inline-block"; class="beerrate"><?php echo $beerrate[0]?></div></div>
					  <form action="index.php" method="post">
						  <label for="rate">Choose a rate for water:</label>
						  <select name="water" id="rate">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						  </select>
  						 <input type="submit" value="Submit">
					  </form>
						  <div><b>Waterrate:</b><div style="display:inline-block"; class="waterrate"><?php echo $waterrate[0]?></div></div>
					  <form action="index.php" method="post">
						  <label for="rate">Choose a rate for cheese:</label>
						  <select name="cheese" id="rate">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						  </select>
						    <input type="submit" value="Submit">
  						</form>
							  <div><b>Cheeserate:</b><div style="display:inline-block"; class="cheeserate"><?php echo $cheeserate[0] ?></div></div>
			
						 <form action="index.php" method="POST">
							  <p>Please select shiping option:</p>
							  <input type="radio" id="pick_up" name="shiping" value="pick_up">
							  <label for="pick_up">pick_up</label><br>
							  <input type="radio" id="ups" name="shiping" value="ups">
							  <label for="ups">ups</label><br>  
							  <input type="submit" value="Submit">
						</form>


 
 <div><b>Previous_balance:</b><h4 style=" display:inline-block"; ><?php echo $previous_balance[0]?></h4></div>
 <div><b>Total_purchase_cost:</b><h4 style=" display:inline-block";class="totc"><?php echo $total_purchase_cost[0]?></h4></div>  
 <div><b>Remaining_balance:</b><h4 style=" display:inline-block"; class="remb"><?php echo $remaining_balance[0]?></h4></div> 
</div>
	
        
    <script>
	//add new key=>value to the HTML5 storage
function SaveItem() {
			
	var name = document.forms.ShoppingList.product.value;
	var data = 1;
	localStorage.setItem(name, data);
	doShowAll();
	
}
//------------------------------------------------------------------------------

//-------------------------------------------------------------------------
//delete an existing key=>value from the HTML5 storage
function RemoveItem() {
	var name = document.forms.ShoppingList.product.value;
	document.forms.ShoppingList.data.value = localStorage.removeItem(name);
	doShowAll();
}
//-------------------------------------------------------------------------------------
//restart the local storage
function ClearAll() {
	localStorage.clear();
	doShowAll();
}
//--------------------------------------------------------------------------------------
// dynamically populate the table with shopping list items
//below step can be done via PHP and AJAX too. 
function doShowAll() {
	if (CheckBrowser()) {
		var key = "";
		var list = "<tr><th>Item</th><th>Value</th></tr>\n";
		var i = 0;
		//for more advance feature, you can set cap on max items in the cart
		for (i = 0; i <= localStorage.length-1; i++) {
			key = localStorage.key(i);
			list += "<tr><td>" + key + "</td>\n<td>"
					+ localStorage.getItem(key) + "</td></tr>\n";
		}
		//if no item exists in the cart
		if (list == "<tr><th>Item</th><th>Value</th></tr>\n") {
			list += "<tr><td><i>empty</i></td>\n<td><i>empty</i></td></tr>\n";
		}
		//bind the data to html table
		//you can use jQuery too....
		document.getElementById('list').innerHTML = list;
	} else {
		alert('Cannot save shopping list as your browser does not support HTML 5');
	}
}

/*
 =====> Checking the browser support
 //this step may not be required as most of modern browsers do support HTML5
 */
 //below function may be redundant
function CheckBrowser() {
	if ('localStorage' in window && window['localStorage'] !== null) {
		// we can use localStorage object to store data
		return true;
	} else {
			return false;
	}
}
//-------------------------------------------------
/*
You can extend this script by inserting data to database or adding payment processing API to shopping cart..
*/
   </script>  
    </body>
</html>				