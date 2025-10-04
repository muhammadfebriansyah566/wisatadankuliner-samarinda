<?php
session_start();

if (isset($_SESSION['username'])) {
  header("Location: dashboard.php");
  exit();
}

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['username'] ?? '';
  $password = $_POST['password'] ?? '';

  // login sederhana
  if ($username === 'admin' && $password === '123') {
    $_SESSION['username'] = $username;
    header("Location: dashboard.php");
    exit();
  } else {
    $error = 'Username atau password salah!';
  }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container" style="max-width:400px; margin-top:100px;">
    <h2>Login</h2>
    <?php if ($error): ?>
      <p style="color:red;"><?php echo $error; ?></p>
    <?php endif; ?>
    <form method="POST">
      <label>Username</label><br>
      <input type="text" name="username" required><br><br>
      <label>Password</label><br>
      <input type="password" name="password" required><br><br>
      <button type="submit" class="btn btn-primary">Login</button>
    </form>
  </div>
</body>
</html>
