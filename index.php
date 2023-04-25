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
  <title>About This Lovely Website</title>
  <link rel="stylesheet" href="styles2.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
</head>
<body>
  <header>
    <h1>About This Website</h1>
  </header>
  <main>
    <div class="container">
      <p>Haiii Bibobss, welcome to this special website dedicated to celebrating your birthday! I'm so excited to have you here and share with you all the wonderful memories, personal stories, and heartfelt messages that encapsulate the essence of who you are.</p>
      <p>This website is a tribute to your vibrant spirit, unwavering love, and boundless energy. It's a digital testament to the extraordinary impact you have made on my life and a space for me to express my deepest gratitude and admiration for you.</p>
      <p>As I celebrate your birthday, I make this website, which I will fill with memories and our journey so far.</p>
      <p>Thank you for being the amazing person you are, and for giving me the privilege of being a part of your life. I hope this website serves as a reminder of just how special you are and how much you mean to me.
    </p>
      <p>I love you more every day and can't wait to see what the future holds for us. Happy birthday, my love! 🎂🎉</p>
      <p>With all my love and best wishes,</p>
      <p>- Adam</p>
      <button id="make-wishes">Make a Wishes</button>
    </div>
  </main>
  <script src="script.js"></script>
</body>
</html>