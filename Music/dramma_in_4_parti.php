<?php 
session_start();
$top_folder = "../";
$current_folder = "Music/";

include($top_folder . "Layouts/php_variables.php");

$current_page_name = $dramma4_descr;
$super_page = $home;
$current_page = $super_page . " | " . $dramma4;

$current_title = $dramma4;
$title_font_size = "100";
$current_description = $dramma4_description;
$add_information = $dramma4_add;
$current_soundFile = $dramma4_soundFile;

$element_to_be_resized = "
font_size_min('logo_line', 'font-size', '2.5', 'em', '2.1', 'em'); font_size_min('logo_name', 'top', '-46', 'px', '-38', 'px'); font_size_min('current_page_tab', 'top', '-25', 'px', '-21', 'px'); set_font_size('footer_list', 'font-size', '0.97', 'em', 2); set_font_size('title_music_standard_page', 'font-size', '" . $title_font_size . "', '%', 1); set_font_size('music_description_table', 'font-size', '85', '%', 1); set_font_size('music_description_table', 'line-height', '1', '', 1);
"

?>

<!DOCTYPE html>
<html>

<head>
<?php include($top_folder . "Layouts/head.php"); ?>
</head>

<body onresize="<?php echo $element_to_be_resized ?>">

<div id="outer_table">

<?php include($top_folder . "Layouts/mobile_detection_others.php"); ?>
<?php isMobile($top_folder); ?>

<?php include($top_folder . "Layouts/profile_image.php"); ?>

<div id="central_menu">
  <?php include($top_folder . $current_folder . "Layout/music_page.php") ?>
</div>

<?php include($top_folder . "Layouts/header.php"); ?>
<?php include($top_folder . "Layouts/footer.php"); ?>

</div>
</body>

<script>
<?php echo $element_to_be_resized ?>
</script>

</html>
