<?php 
session_start();
$top_folder = "../../";
$current_folder = "Codes/Websites/";

include($top_folder . "Layouts/php_variables.php");

$current_page_name = $luca_portfolio_descr;
$super_page = $home . " | " . $codes;
$current_page = $super_page . " | " . $websites . " | " . "This website";
$current_title = $luca_portfolio;
$title_font_size = "100";
$current_description = $luca_portfolio_description;
$add_information = $luca_portfolio_add;
$current_image = $luca_portfolio_image;

$element_to_be_resized = "
font_size_min('logo_line', 'font-size', '2.5', 'em', '2.1', 'em'); font_size_min('logo_name', 'top', '-46', 'px', '-38', 'px'); font_size_min('current_page_tab', 'top', '-25', 'px', '-21', 'px'); set_font_size('footer_list', 'font-size', '0.97', 'em', 2); set_font_size('menu_home', 'font-size', '1.0', 'em', 2); set_font_size('menu_home', 'line-height', '1.2', 'em', 2), 
set_font_size('title_websites_standard_page', 'font-size', '" . $title_font_size . "', '%', 2); set_font_size('websites_description_table', 'font-size', '85', '%', 1); set_font_size('websites_description_table', 'line-height', '1', '', 2);
";

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

<?php include($top_folder . $current_folder . "Layout/websites_page.php") ?>

<?php include($top_folder . "Layouts/header.php"); ?>
<?php include($top_folder . "Layouts/footer.php"); ?>

</div>

</body>

<script>
<?php echo $element_to_be_resized ?>
</script>

</html>
