<?php 
use jdv\View;

/** @var $this View*/

?>

<?php $this->getPart('parts/header'); ?>

<?php echo $this->content; ?>

<?php $this->getPart('parts/footer'); ?>

    