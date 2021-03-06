<div class="login-box">
    <div class="login-logo">
      <a href="<?php echo site_url(); ?>"><b>Toko Keramik Geraldine</b> UAS_CI 2018</a>
    </div>
    <?php echo messages(); ?>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg">Sign in</p>

      <form action="" method="post">
        <div class="form-group has-feedback">
        	<input class="form-control" placeholder="<?php echo lang('username'); ?>" name="username" type="text" autofocus value="<?php echo (isset($username)) ? $username : ''; ?>">
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input class="form-control" placeholder="<?php echo lang('password'); ?>" name="password" type="password" value="">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-xs-8">
            <div class="checkbox icheck">
              <label>
                <input name="remember" type="checkbox" value="1" <?php echo (isset($remember)) ? 'checked="checked"' : ''; ?>> Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
        <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
      </div> -->
      <!-- /.social-auth-links -->

    </div>
    <!-- /.login-box-body -->
  </div>
<!-- /.login-box -->
