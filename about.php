<?php 
session_start();
$top_folder = "";
$current_folder = "";

include($top_folder . "Layouts/php_variables.php");

$current_page_name = $about_descr;
$super_page = $home;
$current_page = $super_page . " | " . "I am Luca Danieli";
$current_title = $about;
$title_font_size = "100";
$current_description = $about_description;
$add_information = $about_add;

$element_to_be_resized = "
font_size_min('logo_line', 'font-size', '2.5', 'em', '2.1', 'em'); font_size_min('logo_name', 'top', '-46', 'px', '-38', 'px'); font_size_min('current_page_tab', 'top', '-25', 'px', '-21', 'px'); set_font_size('footer_list', 'font-size', '0.97', 'em', 2); set_font_size('title_about_standard_page', 'font-size', '" . $title_font_size . "', '%', 2); set_font_size('about_description_table', 'font-size', '85', '%', 2); set_font_size('about_description_table', 'line-height', '1', '', 2);
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
<?php include($top_folder . $current_folder . "Layouts/about_page.php") ?>

<?php include($top_folder . "Layouts/header.php"); ?>
<?php include($top_folder . "Layouts/footer.php"); ?>

</div>

</body>

<script>
<?php echo $element_to_be_resized ?>
</script>

</html>
