<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment Gateway Registration</title>
  <link rel="stylesheet" href="styles.css">
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="js/script.js" defer></script>
</head>
<body>
  <video width="100%" height="auto" autoplay loop muted controls> <source src="back.mp4" type="video/mp4"></video>
  <div class="container">
    <h2>Payment Gateway Registration Form</h2>
    <form id="regForm" action="process.php" method="POST">

      <label>Full Name:</label>
      <input type="text" name="fullname" id="fullname" placeholder="Enter your full name">

      <label>Email Address:</label>
      <input type="email" name="email" id="email" placeholder="Enter your email">

      <label>Phone Number:</label>
      <input type="text" name="phone" id="phone" placeholder="e.g. 081234567890">

      <label>Preferred Payment Method:</label>
      <select name="method" id="method">
        <option value="">-- Select Payment Method --</option>
        <option value="Credit Card">Credit Card</option>
        <option value="Bank Transfer">Bank Transfer</option>
        <option value="E-Wallet">E-Wallet (OVO, DANA, GoPay)</option>
        <option value="Virtual Account">Virtual Account</option>
      </select>

      <label>Account / Card Number:</label>
      <input type="text" name="account" id="account" placeholder="Enter account or card number">

      <label>Create Password:</label>
      <input type="password" name="password" id="password" placeholder="Min. 8 characters">

      <label>Confirm Password:</label>
      <input type="password" name="confirm" id="confirm" placeholder="Re-enter password">


      <button type="submit">Register Now</button>
    </form>

    <p id="msg"></p>
  </div>
</body>
</html>
