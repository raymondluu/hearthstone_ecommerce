<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->load->view("/partials/head.php") ?>
  <meta charset="UTF-8">
  <title>Admin Login Page</title>
</head>
<body>
  

  <div class="col-md-3 col-md-offset-3">

    <h1>Admin Login</h1>

    <form action="/login" method="post">
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" class="form-control" name="email" placeholder="Email">
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" name="password" placeholder="Password">
      </div>
      <input type="submit" value="Login">
    </form>

<?= $this->session->flashdata("login_errors") ?>
   </div> 
   
</body>
</html>