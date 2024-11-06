<!DOCTYPE html>
<html>
<head>
	<title>Pijaca</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<h1>Pijaca</h1>

	<div class="container">
		<div class="items">
			<h2>Povrće</h2>

			<div class="single-item">
				<img src="img/potato.png">
				<div class="si-content">
					<h3>Krompir</h3>
					<p class="price">$10</p>
				</div>
				<div class="actions">
					<input type="number" name="quantity" value="0" min="0">
					<button onclick="addToCart(this)">Dodaj</button>
				</div>
			</div>

			<div class="single-item">
				<img src="img/tomato.png">
				<div class="si-content">
					<h3>Paradajz</h3>
					<p class="price">$20</p>
				</div>
				<div class="actions">
					<input type="number" name="quantity" value="0" min="0">
					<button onclick="addToCart(this)">Dodaj</button>
				</div>
			</div>

			<div class="single-item">
				<img src="img/carrot.png">
				<div class="si-content">
					<h3>Mrkva</h3>
					<p class="price">$30</p>
				</div>
				<div class="actions">
					<input type="number" name="quantity" value="0" min="0">
					<button onclick="addToCart(this)">Dodaj</button>
				</div>
			</div>
		</div>

		<div class="cart">
			<h2>Korpa</h2>
			
			<div class="cart-items"></div>

			<div class="total"></div>
		</div>
	</div>

	<script src="script.js"></script>
</body>
</html>