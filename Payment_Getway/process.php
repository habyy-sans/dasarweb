<?php
session_start();
$fullname = htmlspecialchars($_POST['fullname']);
$email = htmlspecialchars($_POST['email']);
$phone = htmlspecialchars($_POST['phone']);
$method = htmlspecialchars($_POST['method']);
$account = htmlspecialchars($_POST['account']);
$password = htmlspecialchars($_POST['password']);
if (empty($fullname) || empty($email) || empty($phone) || empty($method) || empty($account) || empty($password)) {
  echo "<h2 style='color:red;'>⚠ Please fill out all required fields!</h2>";
  echo "<p><a href='index.html'>← Back to Form</a></p>";
  exit;
}
$_SESSION['fullname'] = $fullname;
$_SESSION['email'] = $email;
$_SESSION['phone'] = $phone;
$_SESSION['method'] = $method;
$_SESSION['account'] = $account;
setcookie('registered_user', $fullname, time()+3600, '/');
header("Location: sucess.php");
exit;
?>
