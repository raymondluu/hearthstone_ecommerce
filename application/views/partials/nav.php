<nav class="navbar navbar-default style-header">
	<div class="container-fluid">
		<div class="navbar-header">
			<h1 class="navbar-h1">Hearthstone Ecommerce</h1>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
              <ol id="cart-ol"><a href="/carts">Shopping Cart (
              	<?php if($this->session->userdata['count'] == null){
              		echo 0;
              	}
              	else
              	{
              		echo $this->session->userdata['count'];
              	}?>
              	)</a></ol>
            </ul>
		</div>
	</div>
</nav>