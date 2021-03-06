<?php 
session_start();
$top_folder = "../";
$current_folder = "Music/";

include($top_folder . "Layouts/php_variables.php");

$current_page_name = $music_descr;
$super_page = $home;
$current_page = $super_page . " | " . $music;
$current_title = $music;
$title_font_size = "100";
$inner_menu_top = $music_menu_top;
$inner_menu_left = $music_menu_left;
$post_titles = $music_names;
$post_descrs = $music_previews;
$post_links = $music_pages;
?>

<!DOCTYPE html>
<html>

<head>
<?php include($top_folder . "Layouts/head.php"); ?>
</head>

<body>
<?php include($top_folder . "Layouts/mobile_detection_others.php"); ?>
<?php isMobile($top_folder); ?>

<?php include($top_folder . "Layouts/profile_image.php"); ?>


<?php include($top_folder . $current_folder . "music_menu.php"); ?>


<?php include($top_folder . "Layouts/header.php"); ?>
<?php include($top_folder . "Layouts/footer.php"); ?>
</body>

</html>
