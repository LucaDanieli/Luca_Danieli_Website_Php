<div id="central_menu">
  <div id="websites_standard_page_table">
    <p id="title_websites_standard_page" style="font-size: 0.9em; color: #333; font-weight: bold; letter-spacing: -1px;"> <?php echo $current_title ?> </p>
    <div id="websites_standard_page_table">
      <table id="websites_description_table">
        <tr><td colspan="2" style="width: 85%; height: 1px; background-color: #ef5423"></td><td style="width: 15%"></td></tr>
      </table>
    </div>
  </div>

  <div id="websites_standard_page_table" style="height: 100%; width: 100%;">
    <table id="websites_description_table" style="position: relative; left: <?php echo $inner_menu_left ?>%; top: <?php echo $inner_menu_top ?>%;">
      <tr><td>
        <?php include($top_folder . "Layouts/micropost.php"); ?>

        <?php
          $post_number = 0;
          for($y=0; $y < 1; $y++) {
            for ($p=0; $p < count($post_titles) -1; $p++) {
              micropost($post_number, $post_titles[$p+1], $post_descrs[$p], $post_links[$p+1]);
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
