<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $title;?></title>

    <?= Asset::css(array('bootstrap.css', 'dashboard.css')); ?>

</head>
<body>

    <?php  echo $header;?>

    <?php echo $content; ?>

    <?php  echo $footer; ?>


</body>
</html>