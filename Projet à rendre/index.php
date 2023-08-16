<!DOCTYPE html>
<html>
<head>
<link href="/style.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body id="bga">
<h1 id="titre">LOGIN</h1>
<form action='auth.php' method="post" name="login">
<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Email address</label>
<input type="email" class="form-control" id="exampleInputEmail1" name="email">
<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
</div>
<div class="mb-3">
<label for="exampleInputPassword1" class="form-label">Password</label>
<input type="password" class="form-control" id="exampleInputPassword1" name="password">
<div id="passwordHelp" class="form-text">We'll never share your password with anyone else.</div>  
</div>
<div class="mb-3 form-check">
</div>
<button name="submit"type="submit" id="bt" class="btn btn-primary">Submit</button>
</form><button name="submit"type="submit" id="bt" class="btn btn-secondary" onclick="location.href ='adduser.html';">Create User</button>
</body>
</html>