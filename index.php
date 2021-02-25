<?php session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src="js/jquery-1.12.2.min.js"></script>
        
        
       
	</head>
    <body>
        
           
            
                <div class="middle">
					<button id="add" ><a href='index.php?hello=true'>Add</a></button>
                    <button id="delete" ><a href='index.php?big=true'>Delete</a></button>
                     <button id="pay" ><a href='index.php?world=true'>Pay</a></button>
					 <br>  
					  
					 
				<form action="index.php" method="POST">
					<p>Please select your product:</p>
					  <input type="radio" id="apple" name="product" value="apple">
					  <label for="apple">Apple</label><br>
					  
					  <input type="radio" id="beer" name="product" value="beer">
					  <label for="beer">Beer</label><br>
					  
					  <input type="radio" id="water" name="product" value="water">
					  <label for="water">Water</label><br>
					  
					  <input type="radio" id="cheese" name="product" value="cheese">
					  <label for="cheese">Cheese</label><br>
						<input type="submit" value="Submit">
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
 <form action="index.php" method="POST">
	  <p>Please select shiping option:</p>
	  <input type="radio" id="pick_up" name="shiping" value="pick_up">
	  <label for="pick_up">pick_up</label><br>
	  <input type="radio" id="ups" name="shiping" value="ups">
	  <label for="ups">ups</label><br>  
	  <input type="submit" value="Submit">
</form>

<?php
interface Basket{
		public function Add();
		public function Delete();
		public function Pay();
	}
	abstract class Product{
		public $count=0;
		
			
		static $variety;
		public $product;
		public static function create($name, $type)
		{
		$variety=$name;
		try{
			switch($type){
					case 1:{$product=new Apple($variety);break;}
					case 2:{$product=new Beer($variety);break;}
					case 3:{$product=new Water($variety);break;}
					case 4:{$product=new Cheese($variety);break;}	
					default:{throw new Exception("This type is undefined");break;}
					}
	
	if($type<5)return $product;
}
		catch(Exception $e){
			echo "$type:".$e->getMessage();
		}
}

public function Add()
			{
			var_dump(0000);	
			var_dump($count);
			
			$this->$count=$this->$count+1;
			 var_dump($this->$count);
			
			}
				
			
			//$product1=Product::create('Wolf',1); 
			public function Delete()
			{
				$this->$count=$this->$count-1;
				//$_count=$count;
				//var_dump($count);
				
				var_dump($this->$count);
			}
			

	}
		  class Apple extends Product{
				
			public $name;
			
			public function construct($name)
			{
				$this->name=$name;
			}
			public function Pay()
			{
			$db=new mysqli('localhost', 'root', '', "abc_hosting");
	if(mysqli_connect_errno()){
		printf("Error connect to DB:%S\n",mysqli_error($db));
		exit();
								}
		

$query1="SELECT Previous_balance FROM `balance` ";
$result1 = mysqli_query($db, $query1);
$previous_balance = mysqli_fetch_array($result1);
var_dump($previous_balance[0]);
$query2="SELECT Cost FROM `products` WHERE Product='Apple'";
$result2 = mysqli_query($db, $query2);
$appcost = mysqli_fetch_array($result2);	
$fullapplecost=$appcost[0];
$query6="INSERT INTO `products`(summ) VALUES ('$fullapplecost') where product='Apple'";
			}
			
		
		}
		 class Beer extends Product{
				
			public $name;
			
			public function construct($name)
			{
				$this->name=$name;
			}
			public function Pay()
			{
			$db=new mysqli('localhost', 'root', '', "abc_hosting");
	if(mysqli_connect_errno()){
		printf("Error connect to DB:%S\n",mysqli_error($db));
		exit();
								}
		

$query1="SELECT Previous_balance FROM `balance` ";
$result1 = mysqli_query($db, $query1);
$previous_balance = mysqli_fetch_array($result1);
var_dump($previous_balance[0]);
$query3="SELECT Cost FROM `products` WHERE Product='Beer'";
$result3 = mysqli_query($db, $query3);
$beercost = mysqli_fetch_array($result3);	
$fullbeercost=$beercost[0];
$query6="INSERT INTO `products`(summ) VALUES ('$fullbeercost') where product='Beer'";

			}
			
			
			
		}
		 class Water extends Product{
			
			public $name;
			
			public function construct($name)
			{
				$this->name=$name;
			}
			public function Pay()
			{
			$db=new mysqli('localhost', 'root', '', "abc_hosting");
	if(mysqli_connect_errno()){
		printf("Error connect to DB:%S\n",mysqli_error($db));
		exit();
								}
		

$query1="SELECT Previous_balance FROM `balance` ";
$result1 = mysqli_query($db, $query1);
$previous_balance = mysqli_fetch_array($result1);
var_dump($previous_balance[0]);
$query4="SELECT Cost FROM `products` WHERE Product='Water'";
$result4 = mysqli_query($db, $query4);
$watercost = mysqli_fetch_array($result4);	
$fullwatercost=$watercost[0];
$query6="INSERT INTO `products`(summ) VALUES ('$fullwatercost') where product='Water'";
			}
			
			
		}
		 class Cheese extends Product{
				
			public $name;
			
			public function construct($name)
			{
				$this->name=$name;
			}
			public function Pay()
			{
			$db=new mysqli('localhost', 'root', '', "abc_hosting");
	if(mysqli_connect_errno()){
		printf("Error connect to DB:%S\n",mysqli_error($db));
		exit();
								}
		

$query1="SELECT Previous_balance FROM `balance` ";
$result1 = mysqli_query($db, $query1);
$previous_balance = mysqli_fetch_array($result1);
var_dump($previous_balance[0]);
$query5="SELECT Cost FROM `products` WHERE Product='Сheese'";
$result5 = mysqli_query($db, $query5);
$cheesecost = mysqli_fetch_array($result5);	
$fullcheesecost=$cheesecost[0];
$query6="INSERT INTO `products`(summ) VALUES ('$fullcheesecost') where product='Cheese'";
			}
			
		}
/*$apple=new Apple();	
$apple->add();
$apple->add();	*/
function Add1(){
	$apple=new Apple();	
		 echo $apple->Add(); 
			}
			function Delete1(){
	$apple=new Apple();	
		 echo $apple->Delete(); 
			}
			function Pay1(){
	$apple=new Apple();	
		 echo $apple->Pay(); 
			}
function Add2(){
	$beer=new Beer();		
		 echo $beer->Add(); 	
			}
			function Delete2(){
	$apple=new Beer();	
		 echo $beer->Delete(); 
			}
			function Pay2(){
	$apple=new Beer();	
		 echo $beer->Pay(); 
			}
function Add3(){
	$water=new Water();		
		 echo $water->Add(); 	
			}
			function Delete3(){
	$apple=new Water();	
		 echo $water->Delete(); 
			}
			function Pay3(){
	$apple=new Water();	
		 echo $water->Pay(); 
			}
function Add4(){
	$cheese=new Cheese();		
		 echo $cheese->Add(); 	
			}
function Delete4(){
	$apple=new Cheese();	
		 echo $cheese->Delete(); 
			}
			function Pay4(){
	$apple=new Cheese();	
		 echo $cheese->Pay(); 
			}		 			
if((isset($_POST['product']))&&(!empty($_POST['product']))&&($_POST['product']=='apple')){
var_dump("Apple");	
}else if((isset($_POST['product']))&&(!empty($_POST['product']))&&($_POST['product']=='beer')){
	var_dump("Beer");
}else if((isset($_POST['product']))&&(!empty($_POST['product']))&&($_POST['product']=='water')){
	var_dump("Water");
}else if((isset($_POST['product']))&&(!empty($_POST['product']))&&($_POST['product']=='cheese')){
	var_dump("Cheese");
	
}
//--------------------------------------------------------------------------------------------------------------------------
if (isset($_GET['hello'])&&(isset($_POST['product']))&&(!empty($_POST['product']))&&($_POST['product']=='cheese')) {
	Add4();
			}		
if (isset($_GET['hello'])&&(isset($_POST['product']))&&(!empty($_POST['product']))&&($_POST['product']=='water')) {
	Add3();
			}		
if (isset($_GET['hello'])&&(isset($_POST['product']))&&(!empty($_POST['product']))&&($_POST['product']=='beer')) {
	Add2();
			}
if (isset($_GET['hello'])&&(isset($_POST['product']))&&(!empty($_POST['product']))&&($_POST['product']=='apple')) {
	Add1();
			}			
//--------------------------------------------------------------------------------------------------------------------------
if (isset($_GET['big'])&&(isset($_POST['product']))&&(!empty($_POST['product']))&&($_POST['product']=='cheese')) {
	Delete4();
			}		
if (isset($_GET['big'])&&(isset($_POST['product']))&&(!empty($_POST['product']))&&($_POST['product']=='water')) {
	Delete3();
			}		
if (isset($_GET['big'])&&(isset($_POST['product']))&&(!empty($_POST['product']))&&($_POST['product']=='beer')) {
	Delete2();
			}
if (isset($_GET['big'])&&(isset($_POST['product']))&&(!empty($_POST['product']))&&($_POST['product']=='apple')) {
	Delete1();
			}	 
//--------------------------------------------------------------------------------------------------------------------------
if (isset($_GET['world'])&&(isset($_POST['product']))&&(!empty($_POST['product']))&&($_POST['product']=='cheese')) {
	Pay4();
			}		
if (isset($_GET['world'])&&(isset($_POST['product']))&&(!empty($_POST['product']))&&($_POST['product']=='water')) {
	Pay3();
			}		
if (isset($_GET['world'])&&(isset($_POST['product']))&&(!empty($_POST['product']))&&($_POST['product']=='beer')) {
	Pay2();
			}
if (isset($_GET['world'])&&(isset($_POST['product']))&&(!empty($_POST['product']))&&($_POST['product']=='apple')) {
	Pay1();
			}	 

if (isset($_GET['big'])) {
	Delete();
}

 

if (isset($_GET['world'])) {
	Pay();
}
//--------------------------------------------------------------------------------------------------------------------------
$db=new mysqli('localhost', 'root', '', "abc_hosting");
	if(mysqli_connect_errno()){
		printf("Error connect to DB:%S\n",mysqli_error($db));
		exit();
								}
$rateapple= Array();								
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
    $qty += $num['apple_rate'];
}
	$middleapple=$qtyapp/$n[0];
	var_dump($middleapple);
}
	//--------------------------------------------------------------------------------------------------------------------------
$ratebeer= Array();								
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
echo $qty;
	
	$middlebeer=$qtybee/$n[0];
	var_dump($middlebeer);
}
	//--------------------------------------------------------------------------------------------------------------------------
$ratewater= Array();								
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
echo $qty;
	
	$middlewater=$qtyw/$n[0];
	var_dump($middlewater);
}
//--------------------------------------------------------------------------------------------------------------------------
$ratecheese= Array();								
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
echo $qty;
	
	$middlecheese=$qtyc/$n[0];
	var_dump($middlecheese);
}
?>
 
 <b>Previous_balance:</b><h4 id="prevb" ><?php echo $previous_balance[0]; ?></h4><br>
 <b>Total_purchase_cost:</b><h4 class="totc"></h4><br>  
 <b>Remaining_balance:</b><h4 class="remb"></h4><br> 
</div>
	
        
    <script>
	/*$(function() {
      $('form').submit(function(e) {
        var $form = $(this);
        $.ajax({
          type: $form.attr('POST'),
          url: $form.attr('index.php'),
          data: $form.serialize()
        }).done(function() {
          console.log('success');
        }).fail(function() {
          console.log('fail');
        });
        //отмена действия по умолчанию для кнопки submit
        e.preventDefault(); 
      });
    });
/*var totc=document.getElementsByClassName('totc');
totb[0].value="<?php echo $total_purchase_cost?>"
var remb=document.getElementsByClassName('remb');
remb[0].value="<?php echo $remaining_balance?>"*/
   </script>  
    </body>
</html>				