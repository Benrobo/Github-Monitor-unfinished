<?php require("inc/head.php");?>
<div class="form-cont">
    <div class="signup-cont">
      <h3>Login to G<span class="deco">-Monitor</span> Account</h3>
      <div class="brbtm"></div>
      <br>
      <p><a href="#" class="btn btn-success text-center"><i class="fa fa-github"></i> Signin with Github</a></p>
      <!-- <hr> -->
      <p><small>-or-</small></p>
      <form action="login_val.php" method="POST" class="form-group">
        <label>Email Address</label>
        <input type="email" name="email" class="form-control mt-1">
        <label>Password</label>
        <input type="password" class="form-control mt-1">

        <input type="submit" value="Login" name="submit" class="signup-btn mt-4 btn btn-default">
        
    </form>
    <span class="text-primary"><a href="index.php" class="text-primary">Back</a></span>
    <small><a href="reset.php" class="text-primary">Forgot password</a></small>
    <small><a href="signup.php" class="text-primary">Signup</a></small>
    </div>
  </div>