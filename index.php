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
					<button onclick=""> Add</button>
                    <button onclick="">Delete</button>
                     <button onclick="">Pay</button>
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
	}
		  class Apples extends Product{
			static $count=0;	
			public $name;
			
			public function construct($name)
			{
				$this->name=$name;
			}
			public function Add()
			{
				
				$count++;
				echo $count;
			}
			public function Delete()
			{
				//echo $count;
				$count--;
				echo $count;
			}
			public function Pay()
			{
				
			}
			
		}
		 class Beer extends Product{
			public $count=0;	
			public $name;
			
			public function construct($name)
			{
				$this->name=$name;
			}
			public function Add($count)
			{
				$count=0;
				$count++;
			}
			public function Delete()
			{
				$count--;	
			}
			public function Pay()
			{
				
			}
			
		}
		 class Water extends Product{
			public $count=0;	
			public $name;
			
			public function construct($name)
			{
				$this->name=$name;
			}
			public function Add()
			{
				$count=0;
				$count++;
			}
			public function Delete()
			{
				$count--;	
			}
			public function Pay()
			{
				
			}
			
		}
		 class Cheese extends Product{
				
			public $name;
			
			public function construct($name)
			{
				$this->name=$name;
			}
			public function Add($count)
			{
				
				$count++;	
			}
			public function Delete()
			{
				$count--;	
			}
			public function Pay()
			{
				
			}
			
		}
	
$product1=Product::create('Wolf',1);	
/*$animal2=Animal::create('Lion',2);
$animal3=Animal::create('Shark',3);
$animal4=Animal::create('Elephant',4);
$animal5=Animal::create(',Cougar',2);
$animal6=Animal::create(',Insect',4);
$animal7=Animal::create(',Antilopa',4);	*/
//$product1->Add();
$product1->Delete();
/*$animal2->getColor('gray')->getWeight(8)->build();
$animal3->getColor('gray')->getWeight(8)->build();
$animal4->getColor('gray')->getWeight(8)->build();	*/																					
//---------------------------------------------------------------------------------------------------------------------------------------------------------
/*$rateapple=array();
$ratebeer=array();
$ratewater=array();
$rateacheese=array();*/
//foreach($_POST['apple'] as  $value){
//for($i=0;$i<count($_POST['apple']);$i++){	
//if(isset($_POST['apple'])&&(!empty($_POST['apple']))){
	//foreach($_POST['apple'] as  $value){
//for($i=0;$i<count($_POST['apple']);$i++){	
	
			//array_push($rateapple,$_POST['apple']);
			//print_r($rateapple);
			//print_r($_POST['apple']);
			//print_r($value);
	//}
//}
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
		
/*if(isset($_POST['product'])&&(!empty($_POST['product']))){
	print_r((string)$_POST['product']);
	}*/
if((!isset($_POST['shiping']))&&(empty($_POST['shiping']))){
	echo "Select shiping please";
}

if((isset($_POST['shiping']))&&(!empty($_POST['shiping']))&&($_POST['shiping']=='ups')){
	$ups=0.5;
	$total_purchase_cost=$total_purchase_cost+$ups;
	//print_r((string)$_POST['shiping']);
	}	
/*$applecount=0;
$beercount=0;
$watercount=0;
$cheesecount=0;	*/				
$total_purchase_cost;
$remaining_balance=$previous_balance[0]-$total_purchase_cost;
$previous_balance[0]=$remaining_balance;
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