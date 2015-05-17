
<div class="container">
	<table class="table table-striped">
		<tr>
			<td>Article</td>
			<td>Price</td>
			<td>Quantity</td>
			<td>Total</td>
			<td>Item</td>
			<td>Price</td>
			<td>Quantity</td>
			<td>Total</td>
			<td><h3>Article</h3></td>
			<td><h3>Price</h3></td>
			<td><h3>Quantity</h3></td>
			<td><h3>Total</h3></td>
		</tr>
<?php 
	if(isset($cart)){
		$quantity = 0;
		$order_total = 0;
		foreach ($cart as $product) {
		$quantity+= $product['quantity'];
		$total = 0;
		$total = $product['quantity'] * $product['price'];
		$order_total+=$total;
		$this->session->set_userdata("quantity", $quantity);
?>
		<tr>
			<td>Dog on a sup</td>
			<td>10000</td>
			<td>12 <a href="#">Update</a> <a href="#">Delete</a></td>
			<td>$1111111</td>
			<td><?= $product['item']?></td>
			<td><?= $product['price']?></td>
			<td><?= $product['quantity']?> <a href="#">Delete</a></td>
			<td><?= $total ?></td>
			<td>Dog on a sup</td>
			<td>10000</td>
			<td>
				<a data-toggle="modal" data-target="#edit" class="btn btn-primary products-bt" >Edit</a> <a href="#" class="btn btn-primary products-bt">Delete</a>
			</td>
			<td>$1111111</td>
		</tr>
		<tr>
			<td>Pig on a sup</td>
			<td>10000</td>
			<td>12 <a href="#">Update</a> <a href="#">Delete</a></td>
			<td>$1111111</td>
		</tr>
		<tr>
			<td>Cat on a sup</td>
			<td>10000</td>
			<td>12 <a href="#">Update</a> <a href="#">Delete</a></td>
			<td>$1111111</td>
		</tr>
<?php } 
?>
		<tr>
			<td>Pig on a sup</td>
			<td>10000</td>
			<td>
				<a data-toggle="modal" data-target="#edit" class="btn btn-primary products-bt" >Edit</a> <a href="#" class="btn btn-primary products-bt">Delete</a>
			</td>
			<td>$1111111</td>
		</tr>
		<tr>
			<td>Cat on a sup</td>
			<td>10000</td>
			<td>
				<a data-toggle="modal" data-target="#edit" class="btn btn-primary products-bt" >Edit</a> <a href="#" class="btn btn-primary products-bt">Delete</a>
			</td>
			<td>$1111111</td>
		</tr>
	</table>
	<h3>Total = $<?= $order_total ?></h3>
<?php } 
?>
	<button class="btn btn-primary" src="/">Continue Shopping</button>	
	<hr />	

	<div class="container">

		<h3>Shipping information</h3>
		<?php 
			if ($this->session->flashdata("login_error")) 
			{
				echo "<h4 class='bg-danger center'>" . $this->session->flashdata("login_error") . "</h4>" ;
			}
		?>

		<form action="/main/sale_info" method="post">
			<div class="form-group">

			    <label class="col-sm-2 control-label">First Name</label>
			    <div class="col-sm-10">
			      <input name="s_first_name" type="text" class="form-control" placeholder="First Name">
			    </div>
			</div>

			<div class="form-group">
			    <label class="col-sm-2 control-label">Last Name</label>
			    <div class="col-sm-10">
			      <input name="s_last_name" type="text" class="form-control" placeholder="Last Name">
			    </div>
			</div>

			<div class="form-group">
			    <label class="col-sm-2 control-label">Address</label>
			    <div class="col-sm-10">
			      <input name="s_address" type="text" class="form-control" placeholder="Address">
			    </div>
			</div>

			<div class="form-group">
			    <label class="col-sm-2 control-label">City</label>
			    <div class="col-sm-10">
			      <input name="s_city" type="text" class="form-control" placeholder="City">
			    </div>
			</div>

			<div class="form-group">
			    <label class="col-sm-2 control-label">State</label>
			    <div class="col-sm-10">
			      <input name="s_State" type="text" class="form-control" placeholder="State">
			    </div>
			</div>

			<div class="form-group">
			    <label class="col-sm-2 control-label">Zip</label>
			    <div class="col-sm-10">
			      <input name="s_zip" type="text" class="form-control" placeholder="Zip">
			    </div>
			</div>
		<hr />
		<h3>Billing information</h3>
		
			<div class="checkbox">
			    <label>
			      <input name="same_as_shipping" type="checkbox">Same as shipping</label>
			  </div>
			<div class="form-group">
			    <label class="col-sm-2 control-label">First Name</label>
			    <div class="col-sm-10">
			      <input name="b_first_name" type="text" class="form-control" placeholder="First Name">
			    </div>
			</div>

			<div class="form-group">
			    <label class="col-sm-2 control-label">Last Name</label>
			    <div class="col-sm-10">
			      <input name="b_last_name" type="text" class="form-control" placeholder="Last Name">
			    </div>
			</div>

			<div class="form-group">
			    <label class="col-sm-2 control-label">Address</label>
			    <div class="col-sm-10">
			      <input name="b_address" type="text" class="form-control" placeholder="Address">
			    </div>
			</div>  

			<div class="form-group">
			    <label class="col-sm-2 control-label">City</label>
			    <div class="col-sm-10">
			      <input name="b_city" type="text" class="form-control" placeholder="City">
			    </div>
			</div>

			<div class="form-group">
			    <label class="col-sm-2 control-label">State</label>
			    <div class="col-sm-10">
			      <input name="b_State" type="text" class="form-control" placeholder="State">
			    </div>
			</div>

			<div class="form-group">
			    <label class="col-sm-2 control-label">Zip</label>
			    <div class="col-sm-10">
			      <input name="b_zip" type="text" class="form-control" placeholder="Zip">
			    </div>
			</div>
			<div class="form-group">
			    <label class="col-sm-2 control-label">Credit card information</label>
			    <div class="col-sm-10">
			      <input name="b_c_card" type="number" class="form-control" placeholder="Credit card information">
			    </div>
			</div>
			<div class="form-group">
			    <label class="col-sm-2 control-label">Secure code</label>
			    <div class="col-sm-10">
			      <input name="b_code" maxlength="3" type="number" class="form-control" placeholder="Secure code">
			    </div>
			</div>
			<label class="col-sm-2 control-label">Expedition</label>
			<div class="row form-group">
				<div class="col-md-6">
					<select name="exp_month">
						<option name="January">January</option>
						<option name="February">February</option>
						<option name="March">March</option>
						<option name="April">April</option>
						<option name="May">May</option>
						<option name="June">June</option>
						<option name="July">July</option>
						<option name="August">August</option>
						<option name="September">September</option>
						<option name="October">October</option>
						<option name="November">November</option>
						<option name="December">December</option>
					</select>
				</div>
				<div class="col-md-6">
					<select name="exp_year">
						<option name="2012">2012</option>
						<option name="2013">2013</option>
						<option name="2014">2014</option>
						<option name="2015">2015</option>
						<option name="2016">2016</option>
						<option name="2017">2017</option>
						<option name="2018">2018</option>
						<option name="2019">2019</option>
						<option name="2020">2020</option>
						<option name="2021">2021</option>
					</select>
				</div>
			</div>
			<input class="btn btn-primary" type="submit" name="pay" value="Pay">
		</form>
	</div>
</div>
<!-- Edit Order -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="editLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="editLabel">Edit Order</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>