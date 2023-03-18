<?php 
use jdv\View;

/** @var $this View*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=h($this->meta['title']);?></title>
</head>
<body>

    <?php echo $this->content; ?>
</body>
</html>