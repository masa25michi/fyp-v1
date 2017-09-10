<h1>Welcome To PolyU Peer Assessment</h1>   
<h2>What is Peer Assessment</h2>
<p>It is web-based system in which students can create 
    multiple-choice questions and they can answer questions 
    created by their classmates. </p>

<h2>Why do we use Peer Assessment</h2>
<p>Peer assessment provides a faster and more efficient way for an assessment process in order to boost learning outcomes. </p>

<hr>

<?php echo Form::open(array('action' => 'student/index', 'method'=>'get')); ?>
    <?php echo Form::input('login','Log In',array('type'=>'submit')); ?>
<?php echo Form::close(); ?>

<?php echo Form::open(array('action' => 'main/register', 'method'=>'get')); ?>
    <?php echo Form::input('register','Register',array('type'=>'submit')); ?>
<?php echo Form::close(); ?>
