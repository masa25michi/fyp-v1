<div class="container">
    <h1>Log In</h1>
    <div class="row">

        <?php echo Form::open(array('class' => 'form-horizontal', 'method' => 'post'));?>

        <?php if (isset($error)): ?>
            <p class="alert alert-warning"><?php echo $error ?></p>
        <?php endif ?>

        <div class="form-group">
            <label for="form_name" class="col-sm-4 control-label">Username</label>
            <div class="col-sm-8">
                <?php echo Form::input('username');?>
            </div>
        </div>

        <div class="form-group">
            <label for="form_name" class="col-sm-4 control-label">Password</label>
            <div class="col-sm-8">
                <?php echo Form::password('password');?>
            </div>
        </div>
        <br>
        <div class="form-group">
            <div class="col-sm-offset-4 col-sm-8">
                <?php echo Form::submit('submit', 'Log In', array('class' => 'btn btn-success'));?>

            </div>
        </div>
        <?php echo Form::close();?>

    </div>
</div>