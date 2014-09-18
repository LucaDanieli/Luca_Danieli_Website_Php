<?php 
session_start();
$top_folder = "";
$current_folder = "";
include($top_folder . "Layouts/php_variables.php");
$current_page_name = $music_and__video_descr;

$super_page = $home;
$current_page = $super_page . " | " . $music_and_video;
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

<div id="central_menu">
<!-- #640101 -->

  <div id="websites_standard_page_table">
    <p id="title_websites_standard_page" style="font-size: 0.9em; color: #333;"> MUSIC </p>
    <div id="websites_standard_page_table">
      <table id="websites_description_table">
        <tr><td colspan="2" style="width: 85%; height: 1px; background-color: #a68d93"></td><td style="width: 15%"></td></tr>
      </table>
    </div>
  </div>

  <div id="websites_standard_page_table" style="height: 40%; width: 100%; top: 0%;">
    <table id="websites_description_table" style="position: relative; left: 0%;">
      <tr><td>
        <?php include($top_folder . "Layouts/micropost.php"); ?>

        <?php $post_titles = array("Silenzi", "Dramma in 4 parti", "Studio secondo", "bla bla bla"); ?>
        <?php $post_descrs = array("silenzi e", "perché del resto sono assolutamente sicuro che, che oggi non sono proprio così e mi piace pensare che un amore", "avete idea del gioco?", "tin tirupi ricca ricca sul sul ba "); ?>

        <?php
          $post_number = 0;
          for($y=0; $y<1; $y++) {
            for ($p=0; $p<4; $p++) {
              micropost($post_number, $post_titles[$p], $post_descrs[$p]);
              $post_number++;
            } 
          }

          $post_numbers = $post_number - 1;

          echo "
            <script> posTables('" . $post_numbers . "', 0, 0); </script>
          ";
        ?>

      </td></tr>
    </table>
  </div>
</div>



<?php include($top_folder . "Layouts/header.php"); ?>
<?php include($top_folder . "Layouts/footer.php"); ?>
</body>

</html>
