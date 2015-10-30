<nav class="navbar navbar-default style-header navbar-fixed-top">
	<div class="container-fluid">
    <a href="/">
      <div class="navbar-brand">
         <img class="mini_logo top" src="/assets/Card_Back_Esports.gif"></img>
         <img class="mini_logo middle" src="/assets/Card_Back_Esports.gif"></img>
         <img class="mini_logo bottom" src="/assets/Card_Back_Esports.gif"></img>
      </div>
  		<div class="navbar-header padding_left margin_top_title">
  			 <p class="nav_header_text">Hearthstone Ecommerce</p>
  		</div>
    </a>
		<div class="navbar-collapse collapse">
			<ol class="nav navbar-nav navbar-right nav_margin_right">
              <li><a href="/carts">Shopping Cart (
              	<?php if($this->session->userdata['count'] == null){
              		echo 0;
              	}
              	else
              	{
              		echo $this->session->userdata['count'];
              	}?>
              	)</a></li>
                <?php if($this->session->userdata['user_data'] == 'admin'){
                  echo "<li><a href='/admin_orders'>Admin Orders</a></li>";
                  echo "<li><a href='/admins/logout'>Log off</a></li>";
                }
                else
                {
                echo "<li><a href='/login'>Admin Login</a></li>";
                }; ?>
            </ol>
		</div>
	</div>
</nav>