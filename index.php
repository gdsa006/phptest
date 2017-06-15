<?php include('connection/connect.php'); ?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>The HTML5 Herald</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="css/styles.css?v=1.0">

  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
</head>

<body>
<form method="post" action="register.php">
<input type="text" name="username">
<input type="text" name="email">
<input type="text" name="password">
<input type="submit">
</form>
  <script src="js/scripts.js"></script>
</body>
</html>