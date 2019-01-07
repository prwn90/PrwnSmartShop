<?php 
	$servername = "localhost";
	$username = "username";
	$password = "password";
	$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


$sql = "SELECT * FROM products WHERE featured = 1";
$featured = $db->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
<!--<meta name="viewport" content="width=device-width, initial-scale=1, user-scaleable=no">-->
<meta name="viewport" content="width=device-width, initial-scale=1.0,user-scaleable=no">

<title>Smart Shop</title>
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/main.css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>


</head>

<body>

<nav class="navbar navbar-expand-lg navbar-fixed-top">
	<div class="container">
		<a href="index.php" class="navbar-brand" id="text">Prwn Smart Shop     <i class="fas fa-shopping-cart"></i></a>
		<ul class="nav navbar-nav">

			<!-- dorpdown -->
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" id="text">M e n u <i class="fas fa-shopping-bag"></i><span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
					<li><a href="#">Shirts</a></li>
					<li><a href="#">Trousers</a></li>
					<li><a href="#">Shoes</a></li>
					<li><a href="#">Accessories</a></li>
					
				</ul>
			</li>

		</ul>
		
	</div>
	
</nav>

	<div id="background-image"></div>

	<div class="container">
		<h2 class="text-center">Chosen Products</h2>
		<hr>
	
	<div class="row">
	<?php while($product = mysqli_fetch_assoc($featured)) : ?>
	<div class="col-md-3">
		<h4><?= $product['title']; ?></h4>
		<img src="<?=$product['title']; ?>" alt="<?=$product['title']; ?>" id="images"/>
		<p class="list-price text-danger">List price: <s>$<?=$product['list_price']; ?></s></p>
		<p class="price">Our Price: $<?=$product['price']; ?></p>
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#details-1">Details</button>
	</div>
	<?php endwhile; ?>
	</div>

	<div class="col-md-3">
		<h4>Trousers</h4>
		<img src="images/image2.jpg" alt="trousers" id="images"/>
		<p class="list-price text-danger">List Price: <s>$109.99</s></p>
		<p class="price">Our Price: $59.99</p>
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#details-2">Details</button>
	</div>

	<div class="col-md-3">
		<h4>Elegant shirt</h4>
		<img src="images/image3.jpg" alt="elegant-shirt" id="images"/>
		<p class="list-price text-danger">List Price: <s>$199.99</s></p>
		<p class="price">Our Price: $149.99</p>
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#details-3">Details</button>
	</div>

	<div class="col-md-3">
		<h4>Elegant Shoes</h4>
		<img src="images/image4.jpg" alt="elegant-shoes" id="images"/>
		<p class="list-price text-danger">List Price: <s>$199.99</s></p>
		<p class="price">Our Price: $149.99</p>
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#details-4">Details</button>
	</div>

</div>
</div>
	


<footer class="text-center" id="footer">&copy;   Copyright 2018 Prwn Smart Shop</footer>


<!-- details -->

<?php include 'details-modal-image1.php';
	  include 'details-modal-image2.php';
	  include 'details-modal-image3.php';
	  include 'details-modal-image4.php';


?>




</body>

</html>



