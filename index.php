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
					<button id="add" onclick="Add()"><a href='index.php?hello=true'>Add</a></button>
                    <button id="delete" onclick="Delete()"><a href='index.php?big=true'>Delete</a></button>
                     <button id="pay" onclick="Pay()"><a href='index.php?world=true'>Pay</a></button>
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
<script>
	
	function Delete(){
		
	}
	function Pay(){
		
	}
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
    });*/
/*var totc=document.getElementsByClassName('totc');
totb[0].value="<?php echo $total_purchase_cost?>"
var remb=document.getElementsByClassName('remb');
remb[0].value="<?php echo $remaining_balance?>"*/
   </script>  

<?php
interface Basket{
		public function Add();
		public function Delete();
		public function Pay();
	}
	abstract class Product{
		public $applecount=0;
		public $beercount=0;
		public $watercount=0;
		public $cheesecount=0;
		
		static $variety;
		public $product;
		public static function create($name, $type)
		{
		$variety=$name;
		try{
			switch($type){
					case 1:{$product=new Apples($variety);break;}
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
			var_dump(33333);
			if((isset($_POST['product']))&&($_POST['product']=='apple')){
				$this->$applecount=$this->$applecount+1;
				//var_dump($this->$applecount);
	}else
			if((isset($_POST['product']))&&(!empty($_POST['product']))&&($_POST['product']=='beer')){
				$this->$beercount=$this->$beercount+1;
				var_dump($this->$beercount);
	}else
			if((isset($_POST['product']))&&(!empty($_POST['product']))&&($_POST['product']=='water')){
				$this->$watercount=$this->$watercount+1;
				var_dump($this->$watercount);
	}else
			if((isset($_POST['product']))&&(!empty($_POST['product']))&&($_POST['product']=='cheese')){
				$this->$cheesecount=$this->$cheesecount+1;
				var_dump($this->$cheesecount);
	}else{echo 'No product selected';}
			}
				
			public function Delete()
			{
			if((isset($_POST['product']))&&(!empty($_POST['product']))&&($_POST['product']=='apple')){
				$this->$applecount=$this->$applecount-1;
				var_dump($this->$applecount);
	}
			if((isset($_POST['product']))&&(!empty($_POST['product']))&&($_POST['product']=='beer')){
				$this->$beercount=$this->$beercount-1;
				var_dump($this->$beercount);
	}
			if((isset($_POST['product']))&&(!empty($_POST['product']))&&($_POST['product']=='water')){
				$this->$watercount=$this->$watercount-1;
				var_dump($this->$watercount);
	}
			if((isset($_POST['product']))&&(!empty($_POST['product']))&&($_POST['product']=='cheese')){
				$this->$cheesecount=$this->$cheesecount-1;
	}			var_dump($this->$cheesecount);
			}
			public function Pay()
			{
				$applecount=$this->$applecount;
				//echo $applecount;
				$beercount=$this->$beercount;
				//echo $beercount;
				$watercount=$this->$watercount;
				//echo $watercount;
				$cheesecount=$this->$cheesecount;
				//echo $cheesecount;
				$db=new mysqli('localhost', 'root', '', "abc_hosting");
	if(mysqli_connect_errno()){
		printf("Error connect to DB:%S\n",mysqli_error($db));
		exit();
								}
		

$query1="SELECT Previous_balance FROM `balance` ";
$result1 = mysqli_query($db, $query1);
$previous_balance = mysqli_fetch_array($result1);
$query2="SELECT Cost FROM `products` WHERE Product='Apple'";
$result2 = mysqli_query($db, $query2);
$appcost = mysqli_fetch_array($result2);
$query3="SELECT Cost FROM `products` WHERE Product='Beer'";
$result3 = mysqli_query($db, $query3);
$beercost = mysqli_fetch_array($result3);
$query4="SELECT Cost FROM `products` WHERE Product='Water'";
$result4 = mysqli_query($db, $query4);
$watercost = mysqli_fetch_array($result4);
$query5="SELECT Cost FROM `products` WHERE Product='Сheese'";
$result5 = mysqli_query($db, $query5);
$cheesecost = mysqli_fetch_array($result5);
		

if((!isset($_POST['shiping']))&&(empty($_POST['shiping']))){
	echo "Select shiping please";
}

$total_purchase_cost=$appcost[0]*$applecount+$beercost[0]*$beercount+$watercost[0]*$watercount+$cheesecost[0]*$cheesecount;
if((isset($_POST['shiping']))&&(!empty($_POST['shiping']))&&($_POST['shiping']=='ups')){
	$ups=0.5;
	$total_purchase_cost=$total_purchase_cost+$ups;
}
	
//echo $total_purchase_cost;
	$remaining_balance=$previous_balance[0]-$total_purchase_cost;
$previous_balance[0]=$remaining_balance;
//echo $previous_balance[0];
	}	

			}

	
		  class Apples extends Product{
				
			public $name;
			
			public function construct($name)
			{
				$this->name=$name;
			}
			
			
		}
		 class Beer extends Product{
				
			public $name;
			
			public function construct($name)
			{
				$this->name=$name;
			}
			
			
		}
		 class Water extends Product{
			
			public $name;
			
			public function construct($name)
			{
				$this->name=$name;
			}
			
			
		}
		 class Cheese extends Product{
				
			public $name;
			
			public function construct($name)
			{
				$this->name=$name;
			}
			
			
		}

//$product1=Product::create('Wolf',1);	


//$product1->Add();
//$product1->Add();
//$product1->Delete();
//$product1->Pay();
																		
//---------------------------------------------------------------------------------------------------------------------------------------------------------
$rateapple=array();
$ratebeer=array();
$ratewater=array();
$rateacheese=array();
foreach($_POST as $key=>$value){
	//$rateapple=array();
	if($key=='apple'){
for($i=0;$i<count($rateapple);$i++){	
//if(isset($_POST['apple'])&&(!empty($_POST['apple']))){
	//foreach($_POST['apple'] as  $value){
//for($i=0;$i<count($_POST['apple']);$i++){	
	$rateapple[i]=$value[i];
			//array_push($rateapple, $value);
			
			//print_r($_POST['apple']);
			//print_r($value);
			print_r($rateapple);
	}
	}	
}
/*if(isset($_POST['beer'])&&(!empty($_POST['beer']))){
	array_push($ratebeer,$_POST['beer']);
	//print_r($ratebeer);
	}
if(isset($_POST['water'])&&(!empty($_POST['water']))){
	array_push($ratewater,$_POST['water']);
	//print_r($ratewater);
	}
if(isset($_POST['cheese'])&&(!empty($_POST['cheese']))){
	array_push($rateacheese,$_POST['cheese']);
	//print_r($rateacheese);
	}	*/
/*if (!isset($_SESSION['apple'])) {
  $appleprod=$_SESSION['apple'];
}
if (!isset($_SESSION['beer'])) {
  $beerprod=$_SESSION['beer'];
}
if (!isset($_SESSION['water'])) {
  $waterprod=$_SESSION['water'];
}
if (!isset($_SESSION['cheese'])) {
  $cheeseprod=$_SESSION['cheese'];
}*/
//if((isset($_POST['product']))){var_dump($_POST['product']);}
//if((isset($_POST['product']))&&($_POST['product']=='apple')){var_dump($_POST['product']);}else{var_dump(11111111);}
/*if($_POST['product']=='Apple'){
				var_dump(326);
				//$this->$applecount=$this->$applecount+1;
				//var_dump($this->$applecount);
	}*/
function Add(){
	$product1=Product::create('Wolf',1);	
		 echo $product1->Add(); 
			}
 

if (isset($_GET['hello'])) {
	Add();
}
function Delete(){
	$product1=Product::create('Wolf',1);	
		 echo $product1->Delete(); 
			}
 

if (isset($_GET['big'])) {
	Delete();
}
function Pay(){
	$product1=Product::create('Wolf',1);	
		 echo $product1->Pay(); 
			}
 

if (isset($_GET['world'])) {
	Delete();
}
?>
 
 <b>Previous_balance:</b><h4 id="prevb" ><?php var_dump( $previous_balance[0]); ?></h4><br>
 
 <b>Total_purchase_cost:</b><h4 class="totc"><?php var_dump($total_purchase_cost); ?></h4><br>
 
 <b>Remaining_balance:</b><h4 class="remb"><?php var_dump($remaining_balance); ?></h4><br> 
</div>
	
        
    
    </body>
</html>				