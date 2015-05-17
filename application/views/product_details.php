	<div id ="container">
		<div id = "side_body">
			<h5><a href ="/Main/index"> Go Back</a></h5>
			<img id = "main_pic" src = "<?=$product['img_src']?>">
		</div>
		<div id = "description">
			<h3> <?= $product['name'] ?> </h3>
			<h4>Category: <?= $product['category']?></h4>
			<p> <?= $product['description'] ?></p>
			<form action = "/CustomerCarts/add_to_cart" method = "post">
				$<?= $product['price']?>
				<select name = "quantity">
					<option value = 1> 1 </option>
					<option value = 2> 2 </option>
					<option value = 3> 3 </option>
				</select>
				<input type = "submit" value = "Add to Cart">
				<input type = "hidden" name = "item" value="<?= $product['name']?>">
				<input type = "hidden" name = "price" value="<?= $product['price']?>">
			</form>
		</div>
	</div>
</body>
</html>