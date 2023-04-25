<?php
session_start();
if (!isset($_SESSION['is_logged_in']) || !$_SESSION['is_logged_in']) {
    header('Location: http://139.180.138.242/login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Make Your Wishes</title>
  <link rel="stylesheet" href="style3.css">
</head>
<body>
  <header>
    <h1>Make Your Wishes</h1>
  </header>
  <main>
    <div class="container">
      <div>
        <p>Di hari yang spesial ini kamu pengin apa?</p>
        <form id="wish-form" action="https://formspree.io/f/xzbqyyaz" method="POST">
          <textarea id="wish-text" name="wishes" rows="10" cols="50" placeholder="Coba tulis kamu mau apa, pastiin jangan salah soalnya cuma bisa 1x ajah xixixi. Wishesnya yang masuk akal ya :D"></textarea>
          <button type="submit">Send to Genie</button>
        </form>
      </div>
      <img src="jin.png" alt="Genie from Aladdin" class="genie-photo">
    </div>
  </main>
</body>
</html>