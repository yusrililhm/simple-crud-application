<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Sign Up</title>
</head>
<body>
  <div class="container">
    <div class="content">
      <form action="create_user.php" method="post">
        <h1>Sign Up</h1>
        <input type="text" name="username" id="username" placeholder="Username">
        <br><br>
        <input type="password" name="password" id="password" placeholder="Password" maxlength="8">
        <br><br>
        <button>Sign Up</button>
      </form>
    </div>
  </div>
</body>
</html>