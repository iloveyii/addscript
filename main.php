<!DOCTYPE html>
<?php
/**
 * Include the necessary files
 */
require 'includes/configure_static.php';
require 'includes/functions.php';
require 'includes/addscript.class.php';
require 'doaction/info.php';
?>

<?php 
    /**
     * Add the common js and css files
     */
    clsAddScript::addJS('jquery');
    clsAddScript::addJS('bootstrap');

    clsAddScript::addCSS('bootstrap');
?>

<?php 
    /**
     * Get the page in strPage
     */
     $page = new Info();
     
     $page->execute();
     $strPage = $page->renderBody();

?>
<html>
    <!-- Add head section, this includes all js and css files -->
    <?php require 'parts/head.php'; ?>
    
    <!-- Add start of body section -->
    <?php require 'parts/startBody.php'; ?>
    
        <a class="btn btn-success" href="omegrannar">omegrannar</a>
        <a class="btn btn-success" href="cookies">cookies</a>
        <a class="btn btn-success" href="kontakt">kontakt</a>
        <?php echo $strPage; ?>
        
    <!-- Add end of body section -->
    <?php require 'parts/endBody.php'; ?>
</html>

