<div class="container">
	<div class="row">
		<div class="col-md-10 offset-md-1">
			<h2>Data</h2>
			<table class="table table-striped">
				<tr>
					<th>ID</th>
					<th>Nama </th>
					<th width="40%">Harga</th>
					<th>Tools</th>
				</tr>
				<?php

					foreach ($sql as $key ) {
				?>
					<tr>
						<td><?php  echo $key->id; ?></td>
						<td><?php  echo $key->nama; ?></td>
						<td><?php  echo $key->harga; ?></td>
						<td><a href="<?php echo BASE_URL.'index.php?url=cart/carts/'.$key->id;  ?>" class="btn btn-primary btn-sm">beli</a>&nbsp;<a href="<?php echo BASE_URL.'cart/delete/'.$key->id;  ?>" class="btn btn-danger btn-sm">Hapus</a></td>
					</tr>
				<?php
					}
				?>
			</table>
		</div>
	</div>
	
	<div class="row">
	<div class="col-md-10 offset-md-1">
	<h2>Cart</h2>
	<table class="table table-striped">
	<tr>
	<th>ID</th>
	<th>Nama</th>
	<th width="40%">Harga</th>
	<th>Qty</th>
	<th>Total</th>
	<th>Tools</th>
	</tr>
	<?php
	
	foreach ($this->shopping_cart->display() as $keys ) {
	?>
	<tr>
	<td><?php  echo $keys["cart_id"]; ?></td>
	<td><?php  echo $keys["nama"]; ?></td>
	<td><?php  echo $keys["harga"]; ?></td>
	<td><?php  echo $keys["qty"]; ?></td>
	<td><?php  echo $keys["harga"] * $keys["qty"]; ?></td>
	<td><a href="<?php echo BASE_URL.'cart/cart_delete/'.$keys['cart_id'] ;  ?>" class="btn btn-danger btn-sm">Hapus</a></td>
	</tr>
	<?php
	}
	?>
	</table>
	</div>
	</div>
	
</div>