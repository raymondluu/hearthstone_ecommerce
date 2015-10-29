<nav class="navbar navbar-default style-header">
	<div class="container-fluid">
    <div class="navbar-brand">
       <img class="mini_logo top" src="/assets/Card_Back_Esports.gif"></img>
       <img class="mini_logo middle" src="/assets/Card_Back_Esports.gif"></img>
       <img class="mini_logo bottom" src="/assets/Card_Back_Esports.gif"></img>
    </div>
		<div class="navbar-header padding_left">
			 <p class="nav_header_text">Hearthstone Ecommerce</p>
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