<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->load->view("/partials/head.php") ?>
  <meta charset="UTF-8">
  <title>Admin Login Page</title>
</head>
<body>
  <?= $this->session->flashdata("errors") ?>
  <?= $this->session->flashdata("success") ?>
  <h1>Admin Login</h1>
  <form action="admins/login" method="post">
    <?= $this->session->flashdata("login_error") ?>
    <p><input type="text" name="email" placeholder="Email"></p>
    <p><input type="password" name="password" placeholder="Password"></p>
    <p><input type="submit" value="Login"></p>
  </form>
</body>
</html>