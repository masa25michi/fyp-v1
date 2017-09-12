<!DOCTYPE HTML>
<html>
<head>
    <title><?php echo $title;?></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <?= Asset::css(array('bootstrap.min.css', 'metisMenu.min.css','font-awesome.min.css','custom.css')); ?>

    <?= Asset::js(array('bootstrap.min.js','metisMenu.min.js', 'jquery.min.js','raphael.min.js','morris.min.js', 'morris-data.js', 'custom.js'));?>

</head>
<body>

    <?php  echo $header;?>
    
    <?php // echo $banner;?>
    
    <?php echo $content; ?>
        
    <?php  echo $footer; ?>

</body>
</html>