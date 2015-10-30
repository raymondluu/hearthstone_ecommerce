<nav class="navbar navbar-default style-header">
	<div class="container-fluid">
    <a href="/">
      <div class="navbar-brand">
         <img class="mini_logo top" src="/assets/Card_Back_Esports.gif"></img>
         <img class="mini_logo middle" src="/assets/Card_Back_Esports.gif"></img>
         <img class="mini_logo bottom" src="/assets/Card_Back_Esports.gif"></img>
      </div>
  		<div class="navbar-header padding_left">
  			 <p class="nav_header_text">Hearthstone Ecommerce</p>
  		</div>
    </a>
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
              	)</a>
                <!-- I'm sorry about nbsp's :( -->
                &nbsp;&nbsp;&nbsp;&nbsp;
                <?php if($this->session->userdata['user_data'] == 'admin'){
                  echo "<a href='/admin_orders'>Admin Orders</a>";
                }
                else
                {
                echo "<a href='/login'>Admin Login</a>";
                }; ?>
                &nbsp;&nbsp;&nbsp;&nbsp;
              </ol>
            </ul>
		</div>
	</div>
</nav>