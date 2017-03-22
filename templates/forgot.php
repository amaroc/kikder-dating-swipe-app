    <div class="home hero" style="padding: 37px;">
        <div class="logo">
            <a href="<?php echo site_url();?>">kik or not</a>
        </div>
        <div class="menu">
            <a href="<?php echo site_url('create');?>">Create an account</a>
        </div>
    </div>
    <div class="createAcc">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel">
                    <h4>Forgot Password</h4>
                    <hr />
                    <?php echo $error; ?>
                    <?php echo $success; ?>
                    <form class="form form-signIn" action="<?php echo site_url('forgot'); ?>" method="POST">
                        <div class="form-group">
                            <input type="text" name="user_email" class="form-control login-control" placeholder="Email">
                        </div>
                        <div class="clearfix">
                            <input type="submit" name="forgot" class="btn btn-block btn-signin pull-left" value="Reset my password!">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>