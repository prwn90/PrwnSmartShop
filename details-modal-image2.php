<div class="modal fade details-1" id="details-1" tableindex="-1" role="dialog" aria-labelledby="details-1" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title text-center">Shirt</h4>
			</div>
				<div class="modal-body">
					<div class="container-fluid">
					  <div class="row">
						<div class="col-sm-6">
							<div class="center-block">
								<img src="images/image1.jpg" alt="shirt" class="details img-responsive" />	
							</div>
						</div>
						<div class="col-sm-6">
							<h4>Details</h4>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
							<hr />
							<p>Proce:$79.99</p>
							<p>Brand: Levis</p>
							<form action="add_cart.php" method="post">
								<div class="col-xs-3">
									<label for="quantity" id="quantity-label">Quantity:</label>
									<input type="text" class="form-control" id="quantity" name="quantity" />
									
								</div><br /><br />
								<div class="form-group">
									<label for="size">Size:</label>
									<select name="size" id="size" class="form-control">
										<option value=""></option>
										<option value="27">27</option>
										<option value="34">34</option>
										<option value="38">38</option>
										
									</select>
									
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button class="btn btn-default" data-dismiss="modal">Close</button>
				<button class="btn btn-warning" type="submit"><span class="glyphicon glyphicon-shopping-cart"></span>Add to cart</button>
				
			</div>


		</div>
	</div>
</div>