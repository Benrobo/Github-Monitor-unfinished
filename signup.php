  <?php require('inc/head.php'); ?>
  <div class="form-cont">
    <div class="signup-cont">
      <h3>Create G<span class="deco">-Monitor</span> Account</h3>
      <div class="brbtm"></div>
      <br>
      <p><a href="#" class="btn btn-success text-center"><i class="fa fa-github"></i> Signup with Github</a></p>
      <!-- <hr> -->
      <p><small>-or-</small></p>
      <form action="signup_val.php" method="POST" class="form-group">
        <label>Github Username</label>
        <input type="text" class="form-control mt-1">
        <label>Email Address</label>
        <input type="email" name="email" class="form-control mt-1">
        <label>Password</label>
        <input type="password" class="form-control mt-1">
        <label>Confirm-Password</label>
        <input type="password" class="form-control mt-1">
        <input type="submit" value="Create Account" name="submit" class="signup-btn mt-4 btn btn-default">
      </form>
          <span class="text-primary"><a href="index.php" class="text-primary">Back</a></span>
          <span class="text-primary"><a href="login.php" class="text-primary">Login</a></span>
    </div>
  </div>