<?php
session_start();
if (!isset($_SESSION['fullname'])) {
  header("Location: index.html");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Registration Success</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="container">
    <h2> Registration Successful!</h2>
    <p>Welcome, <b><?= $_SESSION['fullname']; ?></b></p>
    <p>Email: <?= $_SESSION['email']; ?></p>
    <p>Phone: <?= $_SESSION['phone']; ?></p>
    <p>Preferred Payment Method: <?= $_SESSION['method']; ?></p>
    <p>Account/Card Number: <?= $_SESSION['account']; ?></p>
    <hr>
    <p> Your account has been successfully registered in the Payment Gateway system.</p>
    <?php if(isset($_COOKIE['registered_user'])): ?>
      <p><small>Cookie detected: Welcome back, <?= $_COOKIE['registered_user']; ?>!</small></p>
    <?php endif; ?>

    <form method="POST" action="logout.php">
      <button type="submit">Log Out</button>
    </form>
  </div>
</body>
</html>
