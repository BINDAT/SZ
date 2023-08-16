<!DOCTYPE html>
<html>
  <head>
  <link src="style.css" rel="stylesheet" type="text/css">
  <title>index</title>
  </head>
  <body>
  <form action="auth.php" method="post" class="form-example" name="login">
  <div class="form-example">
    <label for="name"></label>
    <input type="text" name="name" id="name" required placeholder="Enter your name">
  </div>
  <div class="form-example">
    <label for="email"></label>
    <input type="email" name="email" id="email" placeholder="Enter your email" required>
  </div>
    <div class="form-exemple">
    <label for ="password" ></label>
    <input type="password" name="password" id="password" placeholder="Enter your password" required>
  </div>
  <div class="form-example">
  <input type="submit" value="Submit!">
  </div>
</form>  
</body>
</html>