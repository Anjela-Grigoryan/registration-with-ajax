<!DOCTYPE html>
<html>
<head>
	<title>Login & Registration Form</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
</head>
<body>
  <div class="cont">
    <div class="form sign-in">
      <h2>Sign In</h2>
      <label>
        <span>Email Address</span>
        <input type="email" name="email" id = "mail">
      </label>
      <label>
        <span>Password</span>
        <input type="password" name="password" id = "password">
      </label>
      <div class="error">
        <p id = "plogin" class="p"></p>
      </div>
      <button class="submit" id = "signin" type="button">Sign In</button>
    </div>

    <div class="sub-cont">
      <div class="img">
        <div class="img-text m-up">
          <h1>New here?</h1>
          <p>sign up and discover</p>
        </div>
        <div class="img-text m-in">
          <h1>One of us?</h1>
          <p>just sign in</p>
        </div>
        <div class="img-btn">
          <span class="m-up">Sign Up</span>
          <span class="m-in">Sign In</span>
        </div>
      </div>
      <div class="form sign-up">
        <h2>Sign Up</h2>
        <label>
          <span>Name</span>
          <input type="text" id = "name">
        </label>
        <label>
          <span>Email</span>
          <input type="email" id = "email">
        </label>
        <label>
          <span>Password</span>
          <input type="text" id = "pwd">
        </label>
        <label>
          <span>Confirm Password</span>
          <input type="password" id = "cpwd">
          <p id = 'error'></p>
        </label>
        <div class="error">
          <p id = "p" class="p"></p>
        </div>
        
        <button type="button" id = "signUp" class="submit">Sign Up Now</button>
      </div>
    </div>
  </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="index.js"></script>
</body>
</html>