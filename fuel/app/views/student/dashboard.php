
<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-2 sidenav ">
            <p><a href="<?php echo Uri::create('student/dashboard');?>">Dashboard</a></p>
            <p><a href="<?php echo Uri::create('student/course');?>">Course</a></p>
            <p><a href="<?php echo Uri::create('student/contact');?>">Contact</a></p>
            <p><a href="<?php echo Uri::create('student/setting');?>">Setting</a></p>
        </div>
        <div class="col-sm-8 text-left">
            <h1>Dashboard</h1>
            <?php echo Form::open(array('action' => 'student/create', 'method'=>'get')); ?>
                <?php echo Form::input('create','Create Questions',array('type'=>'submit')); ?>
            <?php echo Form::close(); ?>
            <hr>
            <h3>Questions</h3>
            <p>Text here...</p>
        </div>
        <div class="col-sm-2 sidenav">
            <div class="well">
                <p>ADS</p>
            </div>
            <div class="well">
                <p>ADS</p>
            </div>
        </div>
    </div>
</div>
