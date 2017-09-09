<!DOCTYPE HTML>
<html>
<head>
    <title><?php echo $title;?></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    
    <?= Asset::css(array()); ?>
    
    <?= Asset::js(array());?>
    
</head>
<body>

    <?php // echo $header;?>
    
    <?php // echo $banner;?>
    
    <?php echo $content; ?>
        
    <?php // echo $footer; ?>
</body>
</html>