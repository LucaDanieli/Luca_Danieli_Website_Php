<?php 
session_start();
$top_folder = "";
$current_folder = "";

include("Layouts/php_variables.php");

$current_page_name = $root_descr;
$super_page = "";
$current_page = $home;

$element_to_be_resized = "
font_size_min('logo_line', 'font-size', '2.5', 'em', '2.1', 'em'); font_size_min('logo_name', 'top', '-46', 'px', '-38', 'px'); font_size_min('current_page_tab', 'top', '-25', 'px', '-21', 'px'); set_font_size('footer_list', 'font-size', '0.97', 'em', 2); set_font_size('menu_home', 'font-size', '1.0', 'em', 2); set_font_size('menu_home', 'line-height', '1.2', 'em', 2);
"

?>

<!DOCTYPE html>

<html>

<head>
  <?php include("Layouts/head.php"); ?>
</head>

<body onresize="<?php echo $element_to_be_resized ?>">

<div id="outer_table">

  <?php include($top_folder . "Layouts/mobile_detection_index.php"); ?>
  <?php isMobile($top_folder); ?>
  <?php include("Layouts/profile_image.php"); ?>

  <div id="central_menu">
  </div>

  <?php include("Layouts/menu_home.php"); ?>

  <?php include("Layouts/header.php"); ?>
  <?php include("Layouts/footer.php"); ?>

</div>

</body>

<script>
<?php echo $element_to_be_resized ?>
</script>

</html>
