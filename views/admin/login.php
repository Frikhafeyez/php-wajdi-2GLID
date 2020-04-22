<div class="login-box">
  <div class="login-logo">
    <a href="index2.html"><b>AUTHENTIFICATION</b></a>
  </div>
  <?php
  if(isset($_GET['error']) && $_GET['error']==1)
	echo "<div class='alert-danger'>Verifier vos parametres de connexion!</div><br>";
?>

  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="login.php?controller=admin&action=login" method="post">
        <div class="input-group mb-3">
          <input type="text" name="login" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
         
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Connexion</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
